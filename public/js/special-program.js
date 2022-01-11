let bigPhotos = document.querySelector('.photos-big');
let imageId = null;
let image = null;
let photos = document.querySelectorAll(".photos");

for (let i = 0; i < photos.length; i++) {
    photos[i].addEventListener("click", function() {
        imageId = this.getAttribute('data-image-id');
        image = this;
        bigPhotos.style.display = 'block';
    });
}


