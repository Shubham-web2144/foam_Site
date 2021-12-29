const navIcon = document.querySelector(".nav_icon");
const nav = document.querySelector(".nav");
const navIconx = document.querySelector(".nav_icon-x ");
const logo = document.querySelector(".logo");
const productBtn = document.querySelectorAll("#product-btn");
const msgBoxbtn = document.querySelector(".msg_box-btn button");
const contactFormBtn = document.querySelector('.contact_form-btn');

navIcon.addEventListener("click", () => {
  nav.classList.add("active");
});

navIconx.addEventListener("click", () => {
  nav.classList.remove("active");
});

logo.addEventListener("click", () => {
  window.location.href = "../index.html";
});

// productBtn.forEach((btn) => {
//   btn.addEventListener("click", () => {
//     // console.log("Hello");
//     window.location.href = "../php/product.php";
//   });
// });

msgBoxbtn.addEventListener("click", (e) => {
    e.preventDefault();
    // console.log("Hello");
});



