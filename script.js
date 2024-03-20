let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

};

window.onscroll = () => {
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

};

let loadMoreBtn = document.querySelector('.packages .load-more .btn');
let currentItem = 6;

loadMoreBtn.onclick = () => {
    let boxes = document.querySelectorAll('.packages .box-container .box');
    for (let i = currentItem; i < currentItem + 3; i++) {
        if (boxes[i]) { // Check if item exists before trying to display it
            boxes[i].style.display = 'inline-block';
        }
    }
    currentItem += 3;
    if (currentItem >= boxes.length) {
        loadMoreBtn.style.display = 'none';
    }
};