let pins = [];

function removePin(elem) {
    let remove = elem.parentElement.children[1].innerHTML
    let newPins = []
    pins.forEach(pin => {
        if (pin.n !== remove) {
            newPins.push(pin)
        }
    })
    pins = newPins
    localStorage.setItem("pins", JSON.stringify(pins))
    render()
}

function addPin(elem) {
    const parentContent = elem.parentElement.innerText
    let pinName = parentContent.substr(0, parentContent.lastIndexOf(" — "))
    let pinUrl = parentContent.substr(parentContent.lastIndexOf(" — ") + 3, parentContent.length - (13 + parentContent.lastIndexOf(" — ")))
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
    pins = JSON.parse(localStorage.getItem("pins") === null ? "[]" : localStorage.getItem("pins"))
    render()
}
