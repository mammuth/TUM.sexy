let pins = [];

function removePin(elem) {
    let removeN = elem.parentElement.children[1].innerHTML
    let removeL = elem.parentElement.children[2].children[0].href
    pins = pins.filter(pin => pin.n !== removeN && pin.l !== removeL)
    localStorage.setItem("pins", JSON.stringify(pins))
    render()
}

function addPin(elem) {
    const parentContent = elem.parentElement.innerText
    let pinName = parentContent.substring(0, parentContent.lastIndexOf(" — "))
    let pinUrl = parentContent.substring(parentContent.lastIndexOf(" — ") + 3)
    pinUrl = pinUrl.slice(0, -10)
    // make sure the pin is not already in the list
    if (pins.filter(pin =>  pin.n === pinName && pin.l === pinUrl ).length > 0) {
        return
    }
    pins.push({"n": pinName, "l": pinUrl})
    localStorage.setItem("pins", JSON.stringify(pins))
    elem.parentElement.removeChild(elem)
    render()
}

function render() {
    document.getElementById("pins").innerHTML = `${pins.map(pin =>
        `<div class="card">
            <img class="unpin" src="img/clear-material.svg" alt="unpin" onclick="removePin(this)">
            <div class="cardheader">${pin.n}</div>
            <div class="cardtext">
                <a href="https://${pin.l}.tum.sexy">${pin.l}.tum.sexy</a>
            </div>
        </div>`).join('')}` + '<div class="placeholder"></div>'.repeat(3)//seems off, but appears to be common praxis
}

window.onload = function () {
    if (document.getElementById("pins")){
        pins = JSON.parse(localStorage.getItem("pins") === null ? "[]" : localStorage.getItem("pins"))
        render()
    }
}
