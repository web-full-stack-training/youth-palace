let photos = document.querySelectorAll(".photos");
let photosBig = document.querySelectorAll(".photos-big");
let iconClose = document.querySelector(".icon-for-delete");
let layer = document.querySelector(".layer");
let right = document.querySelector(".right");
let left = document.querySelector(".left");


function imageSlider() {
    for (let i = 0; i < photos.length; i++) {
        photos[i].addEventListener("click", function() {
            iconClose.style.display = 'block'
            photosBig[i].style.display = 'block'
            left.style.display = 'block'
            right.style.display = 'block'
            layer.style.display = 'block'
            left.addEventListener("click",function () {
                photosBig[i].style.display = 'none'
                photosBig[i-=1].style.display = 'block'
            })
            right.addEventListener("click", function () {
                photosBig[i].style.display = 'none'
                photosBig[i+=1].style.display = 'block'
            })
            iconClose.addEventListener("click", function () {
                iconClose.style.display = 'none'
                left.style.display = 'none'
                right.style.display = 'none'
                photosBig[i].style.display = 'none'
                layer.style.display = 'none'
            })
        });
    }
}
imageSlider()





































