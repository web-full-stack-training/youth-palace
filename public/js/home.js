const content = document.querySelector('.our-works');
const children = document.querySelectorAll('.js')
const arrowLeft = document.querySelector('.arrow-left');
const arrowRight = document.querySelector('.arrow-right');
const interval = 3000;
let x = -Math.abs(children[0].offsetWidth + parseInt(window.getComputedStyle(children[0], null).getPropertyValue("margin-right")));//poqr diveri laynutyun + margin left u right
let y = x;
let coin = 0;
let lastPosition = 0;

const contentLatest = document.querySelector('.test');
const childrenLatest = document.querySelectorAll('.latest')
const arrowLeftLatest = document.querySelector('.latest-news-arrow-left');
const arrowRightLatest = document.querySelector('.latest-news-arrow-right');
let position = -Math.abs(childrenLatest[0].offsetWidth + parseInt(window.getComputedStyle(childrenLatest[0], null).getPropertyValue("margin-right")));//poqr diveri laynutyun + margin left u right
let k = position;
let i = position;
let lastPositionLatest = 0;
let coinLatest = 0;

function getTranslateX(content) {
    const style = window.getComputedStyle(content);
    const matrix = new WebKitCSSMatrix(style.transform);
    return matrix.m41;
}

function arrowLeftAndRight(direction) {
    if (direction === 'right') {
        lastPosition = y * (children.length - 1);
        if (coin === children.length - 2) {
            content.style.transform = `translateX(0px)`;
            x = -Math.abs(y);
            coin = 0;
        } else {
            content.style.transform = `translateX(${x}px)`;
            x += -Math.abs(y);
            coin++;
        }
    }

    if (direction === 'left') {
        let z = getTranslateX(content);
        z = -Math.abs(z + Math.abs(y));
        content.style.transform = `translateX(${z}px)`;
        x = z;
    }
}
function arrowLeftAndRightForLatest(direction) {
    if (direction === 'right') {
        lastPositionLatest = i * (childrenLatest.length - 3);
        if (coinLatest === childrenLatest.length - 4) {
            contentLatest.style.transform = `translateX(0px)`;
            position = k;
            coinLatest = 0;
        } else {
            contentLatest.style.transform = `translateX(${position}px)`;
            position += k;
            coinLatest++;
        }
    }

    if (direction === 'left') {
        let z = getTranslateX(contentLatest);
        z = -Math.abs(z + 478);
        contentLatest.style.transform = `translateX(${z}px)`;
        position = z;
    }
}
setInterval(function () {
    arrowLeftAndRight('right');
    arrowLeftAndRightForLatest('right');
}, interval);

arrowRight.addEventListener('click', function () {
    if (x === lastPosition) {
        return false;
    }
    arrowLeftAndRight('right');


})
arrowLeft.addEventListener('click', function () {
    if (x === -470) {
        return false;
    }
    arrowLeftAndRight('left');
})

arrowRightLatest.addEventListener('click', function () {
    if (position === lastPositionLatest) {
        return false;
    }
    coin = 0;
    arrowLeftAndRightForLatest('right');


})
arrowLeftLatest.addEventListener('click', function () {
    if (position === 0) {
        return false;
    }
    arrowLeftAndRightForLatest('left');
})

setInterval(function () {
    let res = getTranslateX(contentLatest);
    if (res === 0) {
        arrowLeftLatest.style.color = '#FFFFFF';
    } else {
        arrowLeftLatest.style.color = 'black';
    }
    if (position === lastPositionLatest) {
        arrowRightLatest.style.color = '#cdc6c6';
    } else {
        arrowRightLatest.style.color = 'black';
    }
    if (res === 0) {
        arrowLeft.style.color = '#cdc6c6';
    } else {
        arrowLeft.style.color = 'black';
    }
    if (x === lastPosition) {
        arrowRight.style.color = '#cdc6c6';
    } else {
        arrowRight.style.color = 'black';
    }
},400)

const app = window.location.href;
console.log(app)
