const edit = document.querySelectorAll('.edit');
const deleted = document.querySelectorAll('.delete');
const closeButton = document.querySelector('.close');
const close = document.querySelector('.close-button');
const deleteButton = document.querySelector('.delete-button');
const deletePhotoInEdit = document.querySelector('.delete-special-program-image-icon');
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
        })
    })
}
deleteButton.addEventListener('click', function () {
    const data = {
        specialPrograms_id: tr
    }
    api('admin/delete-special-program', 'post', data).then((res) => {
        modal.style.display = 'none';
        remove.parentNode.remove();
        setTimeout(function () {
            modal.style.display = 'block';
            p.innerHTML = res.message;
            deleteButton.style.display = 'none';
        }, 1000);

    })
})

deletePhotoInEdit.addEventListener('click', function (){
    modal.style.display = 'block';
})



deletePhotoInEdit.addEventListener('click', function () {
    const data = {
        image_id: this.getAttribute('data-image-id')
    }

    api('/admin/delete-special-program-image', 'post', data).then(res => {
        console.log(res);
        if (res.status) {
            this.closest('.rollover').remove();
            showModal(true, res.message, true);
        } else {
            showModal(false, res.message, false);
        }
    });
});

closeButton.addEventListener('click', function () {
    modal.style.display = 'none';

});




// sik ashxatox e bayc miangamic kjnje
// deletePhotoInEdit.addEventListener('click', function () {
//     const data = {
//         image_id: this.getAttribute('data-image-id')
//     }
//
//     api('/admin/delete-special-program-image', 'post', data).then(res => {
//         console.log(res);
//         if (res.status) {
//             this.closest('.rollover').remove();
//             showModal(true, res.message, true);
//         } else {
//             showModal(false, res.message, false);
//         }
//     });
// });


//deletePhotoInEdit.addEventListener('click', function (){
//     modalDeleteImage.style.display = 'block';
// })
//
// deleteButtonForImage.addEventListener('click', function () {
//     const data = {
//         image_id: this.getAttribute('data-image-id')
//     }
//
//     api('/admin/delete-special-program-image', 'post', data).then(res => {
//         console.log(res);
//         if (res.status) {
//             this.closest('.rollover').remove();
//             showModal(true, res.message, true);
//         } else {
//             showModal(false, res.message, false);
//         }
//     });
// });
