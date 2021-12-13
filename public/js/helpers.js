(function () {
    document.querySelector('.close-modal')
        .addEventListener('click', function () {
            showModal(false);
        })
})();

async function api(url, method, body) {
    let token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    return await fetch('api/' + url, {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: method,
        credentials: "same-origin",
        body: JSON.stringify(body)
    })
        .then((response) => {
            return response.json();
        })
        .catch(function(error) {
            console.log(error);
        });
}

function showModal(show = true, message, status) {
    status ?
        ((document.querySelector('.success-icon').style.display = 'block') &&
            (document.querySelector('.failed-icon').style.display = 'none')) :
        ((document.querySelector('.success-icon').style.display = 'none') &&
            (document.querySelector('.failed-icon').style.display = 'block'));

    document.querySelector('.modal-title').innerText = status ? 'Success' : 'Failed';
    document.querySelector('.modal-text').innerText = message;
    document.querySelector('#response-message-modal').style.display = show ? 'block' : 'none';
    document.querySelector('#layer').style.display = show ? 'block' : 'none';
}

function showLoading(status) {
    status ? ((document.querySelector('#layer').style.display = 'block') &&
        (document.querySelector('.dot-spin').style.display = 'block')) :
        ((document.querySelector('#layer').style.display = 'none') &&
            (document.querySelector('.dot-spin').style.display = 'none'))
}
