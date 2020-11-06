let pins = [];

function setCookie(name, value, exDays) {
    let d = new Date();
    d.setTime(d.getTime() + (exDays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/;SameSite=Strict";
}

function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
}

function removePin(elem) {
    let remove = elem.parentElement.innerText.split("\n")[0]
    let newPins = []
    pins.forEach(pin => {
        if (pin.n !== remove) {
            newPins.push(pin)
        }
    })
    pins = newPins
    setCookie("pins", JSON.stringify(pins), 100)
    render()
}

function addPin(elem) {
    const parentContent = elem.parentElement.innerText
    let pinName = parentContent.substr(0, parentContent.lastIndexOf(" — "))
    let pinUrl = parentContent.substr(parentContent.lastIndexOf(" — ") + 3, parentContent.length - (13 + parentContent.lastIndexOf(" — ")))
    pins.push({"n": pinName, "l": pinUrl})
    setCookie("pins", JSON.stringify(pins), 100)
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
    pins = JSON.parse(getCookie("pins"))
    render()
}
