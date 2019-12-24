window.addEventListener("load", function() {

    let readWrapper = document.getElementById("readWrapper");
    readWrapper.addEventListener("click", function(e) {

        let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");

        if (e.target.classList.contains("remove")) {
            e.preventDefault();
            let form = e.target.parentNode;
            let path = form.getAttribute("action");
            let row = e.target.parentNode.parentNode;
            let data = new FormData(form);
            let message_wrapper = document.querySelector(".message_wrapper");
            let message = document.querySelector(".message_wrapper .message");
            let closeBtn = document.querySelector(".message_wrapper .close");
            closeBtn.addEventListener("click", (e)=>{
                hide(message_wrapper);
            });

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
                    if (res.result) {
                        row.parentNode.removeChild(row);
                    }
                    message.innerHTML = res.message;
                    show(message_wrapper);
                });
            })
        }
    })
});
