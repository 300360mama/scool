function addClass(elem, className) {
    elem.classList.add(className);
}

function removeClass(elem, className) {
    elem.classList.remove(className);
}

function replaceClass(elem, oldClass, newClass) {
    elem.classList.replace(oldClass, newClass);
}

var openArrow = document.getElementById("openArrow");
var categoriesList = document.getElementById("categoriesList");
openArrow.addEventListener("click", () => {

    if (openArrow.classList.contains("fa-angle-double-down")) {
        addClass(categoriesList, 'open_category');
        replaceClass(openArrow, "fa-angle-double-down", "fa-angle-double-up");
    } else {
        removeClass(categoriesList, 'open_category');
        replaceClass(openArrow, "fa-angle-double-up", "fa-angle-double-down");
    }

})