window.addEventListener("load", function () {

    let readWrapper = document.getElementById("readWrapper");
    readWrapper.addEventListener("click", function (e) {

        if (e.target.classList.contains("remove")) {
            e.preventDefault();

            let form = e.target.parentNode;
            let row = e.target.parentNode.parentNode;
            let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
            let data = new FormData(form);

            fetch("/crud/delete/articles", {
                body: data,
                headers: {
                    'X-CSRF-TOKEN': token,
                    'X-Requested-With': 'XMLHttpRequest'
                },
                credentials: "same-origin",
                method: "post"
            }).then((response) => {
                response.json().then((res) => {
                    if (res.result === 1) {
                        row.parentNode.removeChild(row);
                    }
                });;
            })
        }

        if (e.target.classList.contains("update")) {
            e.preventDefault();
        }
    })
});