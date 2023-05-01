let menu = document.querySelector("#menu-btn");
let navbar = document.querySelector(".header .navbar");

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
 };

 window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
 };

 var swiper = new Swiper(".home-slider", {
   loop:true,
   clickable: true,
   loopFillGroupWithBlank: true,
   navigation: {
      nextE1: ".swiper-button-next",
      prevE1: ".swiper-button-prev",
   },
});

var swiper = new Swiper(".reviews-slider", {
   spaceBetween: 20,
   autoHeight: true,
   grabCursor: true,
   breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   }
});

function onChange() {
  const password = document.querySelector('input[name=password]');
  const confirm = document.querySelector('input[name=confirm]');
  if (confirm.value === password.value) {
    confirm.setCustomValidity('');
  } else {
    confirm.setCustomValidity('Passwords do not match');
  }
};


