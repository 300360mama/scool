window.addEventListener("load", function() {

    let update = document.getElementById("update");
    let form = document.getElementById("updateForm");
    let path = form.getAttribute("action");
    let message = document.querySelector(".update_wrapper .message");

    update.addEventListener("click", function(e) {

        e.preventDefault();
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        let data = new FormData(form);

        fetch(path, {
            body: data,
            headers: {
                'X-CSRF-TOKEN': token,
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: "same-origin",
            method: "post"
        }).then((response) => {
            response.json().then((res) => {
                addMessage(res.result);
            });;
        })
    })
});


function addMessage(result) {
    let elem = document.querySelector(".update_wrapper .message");
    let message = "Оновлення успішне";
    if (result) {
        elem.classList.add("green");
    } else {
        message = "Оновлення не вдалося!!!";
        elem.classList.add("red");
    }
    elem.innerHTML = message;
}