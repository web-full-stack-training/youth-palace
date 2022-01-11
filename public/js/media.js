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
    })
}

closeButton.addEventListener('click', function () {
    modal.style.display = 'none';
})
close.addEventListener('click', function () {
    modal.style.display = 'none';
})
deleteButton.addEventListener('click', function () {
    const data = {
        media_id: tr
    }
    api('admin/delete-media', 'post', data).then((res) => {
        modal.style.display = 'none';
        remove.parentNode.remove();
        showModal(true, res.message, res.status);
    })
})
