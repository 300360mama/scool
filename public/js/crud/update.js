window.addEventListener("load", function() {

    let update = document.getElementById("update");
    let form = document.getElementById("updateForm");
    let path = form.getAttribute("action");

    update.addEventListener("click", function(e) {

        e.preventDefault();
        let token = document.querySelector('meta[name="csrf-token"]').getAttribute("content");
        let data = new FormData(form);
        console.log(data);

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
                console.log(res);
                if (res.result === true) {
                    console.log("update true");
                }
            });;
        })
    })
});