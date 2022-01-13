const edit = document.querySelectorAll('.edit');
const deleted = document.querySelectorAll('.delete');
const closeButton = document.querySelector('.close');
const close = document.querySelector('.close-button');
const deleteButton = document.querySelector('.delete-button');
let modal = document.querySelector('.modal-windows');
let p = document.querySelector('.modal-p');
let tr = 0;
let remove = 0;

for (let i = 0; i < edit.length; i++) {
    edit[i].addEventListener('click', function (e) {
        let tr = edit[i].parentNode.firstElementChild;
    })

    deleted[i].addEventListener('click', function (e) {
        modal.style.display = 'block';
        tr = deleted[i].parentNode.firstElementChild.innerHTML;
        remove = deleted[i];
        close.addEventListener('click', function () {
            modal.style.display = 'none';
            location.reload();
        })
    })
}

deleteButton.addEventListener('click', function () {
    const data = {
        specialPrograms_id: tr
    }
    api('delete-special-program', 'post', data).then((res) => {
        modal.style.display = 'none';
        remove.parentNode.remove();
        setTimeout(function () {
            modal.style.display = 'block';
            p.innerHTML = res.message;
            deleteButton.style.display = 'none';
        }, 1000);

    })
})

closeButton.addEventListener('click', function () {
    modal.style.display = 'none';
    location.reload();
});
