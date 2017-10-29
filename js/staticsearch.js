/*
MIT License

Copyright (c) 2017 Hasan Altan Birler

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
*/
"use strict";

function staticsearch(htmlnode, {
		textelements=["a","span","link","nav","caption",
			"#text","h1","h2","h3","h4","h5","h6",
			"abbr","address","b","bdi","bdo","blockquote",
			"cite","code","del","dfn","em","i","ins","kbd",
			"mark","meter","pre","progress","q","rp","rt",
			"ruby","s","samp","small","strong","sub","time",
			"u","var","wbr","label"],
		tomark = true,
		getIndices = function(pattern, str, onlyexists) {
			if (onlyexists)
				return {found:str.includes(pattern)};
			
			const retval = [];
			if (pattern === "") return {found:true, values:retval};
			for (let i = str.indexOf(pattern, 0); i >= 0; i = str.indexOf(pattern, i+1))
				retval.push({start:i, end:i+pattern.length});
			return {found:retval.length > 0, values:retval};
		},
		transformPattern = function(pattern) {
			return pattern.toLowerCase();
		},
		transformStr = function(str) {
			return str.trim().toLowerCase();
		}
	} = {}) {
	
	
	
	class VNode {
		constructor(htmlnode, nofilter = false) {
			this.origdisplay = htmlnode.style.display;
			this.preactive = true;
			this.active = true;
			this.predisplay = true;
			this.display = true;
			this.always = htmlnode.hasAttribute("data-ss-always");
			this.single = htmlnode.hasAttribute("data-ss-single") || this.always;
			this.htmlnode = htmlnode;
			this.children = [];
			this.textchildren = [];
			
			if (nofilter) {
				this.nofilter = true;
			} else {
				this.nofilter = htmlnode.hasAttribute("data-ss-nofilter");
			}
			this.additional = [];
			this.forceadditional = [];
		}
		
		addChild(htmlnode) {
			const newnode = new VNode(htmlnode);
			this.children.push(newnode);
			return newnode;
		}
	}
	
	class TextVNode {
		constructor(htmlnode, parenthtmlnode, nofilter = false) {
			this.preactive = true;
			this.active = true;
			this.htmlnode = htmlnode;
			this.parenthtmlnode = parenthtmlnode;
			this.origdata = htmlnode.nodeValue;
			this.orignode = htmlnode;
			this.marked = false;
			this.highnode = document.createElement("span");
			this.data = transformStr(htmlnode.nodeValue);
			this.indices = {};
			
			this.nofilter = nofilter;
		}
	}
	
	const treeroot = new VNode(htmlnode)
	
	function isTextNode(htmlnode) {
		return textelements.includes(htmlnode.nodeName.toLowerCase());
	}
	
	//Creates the initial VNode tree by traversing DOM
	function createTraverse(vnode, htmlnode, nofilter = false) {
		nofilter = nofilter || vnode.nofilter;
		
		if (htmlnode.hasAttribute("data-ss-additional"))
			vnode.additional.push(transformStr(htmlnode.getAttribute("data-ss-additional")));
		if (htmlnode.hasAttribute("data-ss-forceadditional"))
			vnode.forceadditional.push(transformStr(htmlnode.getAttribute("data-ss-forceadditional")));
		
		//for (const cnode of htmlnode.childNodes) {
		for (let i = 0; i < htmlnode.childNodes.length; i++) {
			const cnode = htmlnode.childNodes[i];
			if (isTextNode(cnode)) {
				if (cnode.nodeName === "#text") {
					if (transformStr(cnode.nodeValue) !== "") {
						vnode.textchildren.push(new TextVNode(cnode, htmlnode, nofilter));
					}
				}
				else {
					const nocfilter = nofilter || cnode.hasAttribute("data-ss-nofilter");
					createTraverse(vnode, cnode, nocfilter);
				}
			}
			else {
				const childvnode = vnode.addChild(cnode);
				createTraverse(childvnode, cnode, nofilter);
			}
		}
	}
	
	createTraverse(treeroot, htmlnode);
	
	return {
		root: treeroot,
		filter: function(pattern) {
			pattern = transformPattern(pattern);
			
			class MarkerAction {
				constructor(markedel) {
					this.markedel = markedel;
				}
			}
			
			class DisplayAction {
				constructor(vnode, newdisplay) {
					this.vnode = vnode;
					this.newdisplay = newdisplay;
				}
			}
			
			class MarkedElement {
				constructor(tvnode, ishtml, data) {
					this.ishtml = ishtml;
					this.data = data;
					this.tvnode = tvnode;
				}
				setHTML() {
					if (this.ishtml) {
						this.tvnode.highnode.innerHTML = this.data;
					}
					
					if (this.ishtml !== this.tvnode.marked)
					{
						const prenode = this.tvnode.htmlnode;
						const parent = prenode.parentElement;
						const nextnode = this.ishtml ? this.tvnode.highnode : this.tvnode.orignode;
						parent.replaceChild(nextnode, this.tvnode.htmlnode);
						this.tvnode.htmlnode = nextnode;
						this.tvnode.marked = this.ishtml;
					}
				}
			}
			
			function arrayIncludes(arr, pattern) {
				for (let str of arr) {
					if (getIndices(pattern, str, true).found)
						return true;
				}
				return false;
			}
			
			//Creates a #text replacement element that replaces pattern with mark tags
			function createMarkedElement(tvnode, text, pattern, indices) {
				if (pattern == "" || indices.values.length === 0)
					return new MarkedElement(tvnode, false, text);
				
				let retvalhtml = "";
				
				let preind = 0;
				for (const {start, end} of indices.values) {
					retvalhtml += text.slice(preind, start);
					retvalhtml += "<mark>" + text.slice(start, end) + "</mark>";
					preind = end;
				}
				retvalhtml += text.slice(preind, text.length);
				
				return new MarkedElement(tvnode, true, retvalhtml);
			}
			
			
			
			const markeractions = []
			//Checks for changes in #text elements and creates MarkerActions
			//Updates whether nodes should be displayed
			function computeActive(pattern, vnode, forcedisplay = false) {
				vnode.preactive = vnode.active;
				vnode.active = vnode.always;
				
				const forceadditionalcont = arrayIncludes(vnode.forceadditional, pattern);
				const additionalcont = forceadditionalcont || arrayIncludes(vnode.additional, pattern);
				
				if (additionalcont)
					vnode.active = true;
				
				if (forceadditionalcont)
					forcedisplay = true;
				
				for (const tvnode of vnode.textchildren) {
					if (tvnode.nofilter && !pattern === "")
						continue;
					
					tvnode.preactive = tvnode.active;
					if (!tvnode.nofilter) {
						tvnode.indices = getIndices(pattern, tvnode.data, false);
					}
					tvnode.active = pattern === "" || tvnode.indices.found;
					
					if (tvnode.active) vnode.active = true;
				}
				
				for (const cvnode of vnode.children) {
					computeActive(pattern, cvnode, forcedisplay || vnode.single);
					if (cvnode.active) vnode.active = true;
				}
				
				vnode.predisplay = vnode.display;
				vnode.display = forcedisplay || vnode.active;
			}
			computeActive(pattern, this.root);
			
			const displayactions = [];
			//Computes the DisplayActions
			//Hide nodes higher in the tree with highest priority
			//Display nodes lower in the tree with high priority
			function computeActions(mactions, dactions, vnode) {
				if (vnode.predisplay === true && vnode.display === false)
					dactions.push(new DisplayAction(vnode, vnode.display));
				
				for (const tvnode of vnode.textchildren) {
					if (tvnode.nofilter)
						continue;
					if (tvnode.preactive === true || tvnode.active === true) {
						const markel = createMarkedElement(tvnode, tvnode.origdata, pattern, tvnode.indices);
						const myaction = new MarkerAction(markel);
						
						mactions.push(myaction);
					}
				}
				
				if (vnode.display === false)
					return;
				
				for (const cvnode of vnode.children) {
					computeActions(mactions, dactions, cvnode);
				}
				
				if (vnode.predisplay === false && vnode.display === true)
					dactions.push(new DisplayAction(vnode, vnode.display));
			}
			computeActions(markeractions, displayactions, this.root);
			
			//Apply the DisplayActions (hide and display nodes)
			for (const dact of displayactions) {
				if (dact.newdisplay) {
					dact.vnode.htmlnode.style.display = dact.vnode.origdisplay;
				} else {
					dact.vnode.htmlnode.style.display = "none";
				}
			}
			
			//Apply the MarkerActions (add and remove mark tags)
			if (tomark) {
				for (const mact of markeractions) {
					mact.markedel.setHTML();
				}
			}
		}
	};
}