let photos = document.querySelectorAll(".photos");
// photos.addEventListener("click", function() {
//     console.log(555)
// })
let a = [];
let b = [];
let c = [];
for (let i = 0; i < photos.length; i++) {
    c.push(photos[i])

}
console.log(c)


for (let i = 0; i < photos.length; i++) {
    photos[i].addEventListener("click", function() {

        photos[i].style.width = '80%'
        photos[i].addEventListener("click", function() {
            photos[i].style.width = '25%'
        })

        // // modalDeleteImage.style.display = 'block';
        // imageId = this.getAttribute('data-image-id');
        // image = this;
        // a.push(image);
        // b.push(imageId);
        // console.log(a);
        // console.log(b);
    });
}

