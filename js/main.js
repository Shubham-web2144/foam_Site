const navIcon = document.querySelector('.nav_icon');
const nav = document.querySelector('.nav');
const navIconx = document.querySelector('.nav_icon-x '); 
const logo = document.querySelector('.logo');

navIcon.addEventListener('click', () => {
    nav.classList.add('active');
});

navIconx.addEventListener('click', () => {
    nav.classList.remove('active');
});

logo.addEventListener("click", ()=>{
    window.location.href = "../index.html";
});