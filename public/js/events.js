window.onload = function () {
    let openArrow = document.getElementById("openArrow");
    let categoriesList = document.getElementById("categoriesList");
    openArrow.addEventListener("click", () => {

        if (openArrow.classList.contains("fa-angle-double-down")) {
            addClass(categoriesList, 'open_category');
            replaceClass(openArrow, "fa-angle-double-down", "fa-angle-double-up");
        } else {
            removeClass(categoriesList, 'open_category');
            replaceClass(openArrow, "fa-angle-double-up", "fa-angle-double-down");
        }

    });


    let navigationBlock = document.querySelector(".navigation");
    let sidebar = document.getElementById("sidebar");
    let burgerBtn = document.querySelector(".navigation .fa-bars");
    let listBtn = document.querySelector("#sidebar .fa-list-ul");
    burgerBtn.addEventListener("click", function (e) {
        if(sidebar.classList.contains("open")) {
            replaceClass(sidebar, "open", "hide");
        }
        changeState(navigationBlock);
    });

    listBtn.addEventListener("click", function (e) {

        if(navigationBlock.classList.contains("open")) {
            replaceClass(navigationBlock, "open", "hide");
        }
       changeState(sidebar);
    })
};


function addClass(elem, className) {
    elem.classList.add(className);
}

function removeClass(elem, className) {
    elem.classList.remove(className);
}

function replaceClass(elem, oldClass, newClass) {
    elem.classList.replace(oldClass, newClass);
}

function  changeState(elem) {
    if (elem.classList.contains("open")) {
        elem.classList.replace("open", "hide");
    } else if (elem.classList.contains("hide")) {
        elem.classList.replace("hide", "open");
    } else {
        elem.classList.add("open");
    }
}