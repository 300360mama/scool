function hide(elem) {
    elem.classList.remove("visible")
}

function show(elem) {
    elem.classList.add("visible");
}

function addMessage(elem, message) {
    elem.innerHTML = message;
}