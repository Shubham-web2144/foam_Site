const navIcon = document.querySelector('.nav_icon');
const nav = document.querySelector('.nav');
const navIconx = document.querySelector('.nav_icon-x '); 

navIcon.addEventListener('click', () => {
    nav.classList.add('active');
});

navIconx.addEventListener('click', () => {
    nav.classList.remove('active');
});