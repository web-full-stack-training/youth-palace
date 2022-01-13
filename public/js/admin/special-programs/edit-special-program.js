let deletePhotoInEdit = document.querySelectorAll(".delete-special-program-image-icon");
const deleteButtonForImage = document.querySelector('.delete-button-for-image');
const closeDeleteImageButton = document.querySelector('.close-delete-image-button');
const closeButton = document.querySelector('.close');
let modalDeleteImage = document.querySelector('.modal-delete-image');
let deletedMessage = document.querySelector('.deleted-message');
deletedMessage.style.display = 'none';
let imageId = null;
let image = null;


//delete photo in edit page
    for (let i = 0; i < deletePhotoInEdit.length; i++) {
    deletePhotoInEdit[i].addEventListener("click", function() {
        modalDeleteImage.style.display = 'block';
        imageId = this.getAttribute('data-image-id');
        image = this;
        });
    }

    deleteButtonForImage.addEventListener('click', function () {
    let data = {
        image_id: imageId
    }

    modalDeleteImage.style.display = 'none';

    api('/admin/delete-special-program-image', 'post', data).then(res => {
        if (res.status) {
            image.closest('.rollover').remove();
            showModal(true, res.message, true);
        } else {
            showModal(false, res.message, false);
        }
    });
    });

    closeDeleteImageButton.addEventListener('click', function () {
    modalDeleteImage.style.display = 'none';
    });

    closeButton.addEventListener('click', function () {
    modalDeleteImage.style.display = 'none';
    })


//end delete photo in edit page
