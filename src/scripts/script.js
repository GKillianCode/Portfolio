
const BTNBURGER = document.querySelector('.btn-burger');
const NAVIGATION = document.querySelector('.main-nav');

BTNBURGER.addEventListener('click', () => {
    BTNBURGER.classList.toggle('btn-burger-active');
    NAVIGATION.classList.toggle('main-nav-active');
})