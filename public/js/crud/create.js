window.addEventListener("load", function () {

    let create = document.getElementById("create");
    let form = document.getElementById("createForm");
    let path = form.getAttribute("action");
    let closeBtn = document.querySelector(".message_wrapper .close");
    let message_wrapper = document.querySelector(".message_wrapper");
    let message = document.querySelector(".message_wrapper .message");
    closeBtn.addEventListener("click", (e) => {
        hide(message_wrapper);
    });
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

    create.addEventListener("click", function (e) {

        e.preventDefault();
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
                addMessage(message, res.message);
                show(message_wrapper);
            });
        })
    })



    let selectImage = document.getElementById("selectImage");

    selectImage.addEventListener("click", function (e) {
        e.preventDefault();

        let path_to_images = "/scool/crud/getImages"
        fetch(path_to_images, {
            body: {},
            headers: {
                'X-CSRF-TOKEN': token,
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: "same-origin",
            method: "post"
        }).then((response) => {
            response.json().then((res) => {
               console.log(res);
            });
        })

    })
});


