const swiper = new Swiper('.swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    autoplay:true,
    // If we need pagination
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
    // And if we need scrollbar
    
  });

let toggle = document.querySelector('.toggle')
let nav = document.querySelector('.nav')
toggle.addEventListener('click', ()=>{
  nav.classList.toggle('active')
})
  

const trending = new Swiper('.swiper-container', {
  nextButton: '.swiper-button-next-t',
  prevButton: '.swiper-button-prev-t',
  slidesPerView: 3,
  spaceBetween: 20,
  breakpoints: {
      1920: {
          slidesPerView: 3,
          spaceBetween: 30
      },
      1028: {
          slidesPerView: 2,
          spaceBetween: 30
      },
      200: {
          slidesPerView: 1,
          spaceBetween: 30
      }
  }
});
const innovation = new Swiper('.swiper-innovation', {
  nextButton: '.swiper-button-next-t',
  prevButton: '.swiper-button-prev-t',
  slidesPerView: 3,
  paginationClickable: true,
  spaceBetween: 20,
  breakpoints: {
      1920: {
          slidesPerView: 3,
          spaceBetween: 30
      },
      1028: {
          slidesPerView: 2,
          spaceBetween: 30
      },
      200: {
          slidesPerView: 1,
          spaceBetween: 30
      }
  }
});




// popup

let login = document.querySelector('#login-btn');
let loginP = document.querySelector('#login_btn_p');
let register = document.querySelector('#register_btn');
let overlay = document.querySelector('#overlay');
let loginPopup = document.querySelector('#popup.login');
let registerPopup = document.querySelector('#popup.register');
login.addEventListener('click',()=>{
  loginPopup.classList.toggle('active');
  overlay.classList.toggle('active');
})
overlay.addEventListener('click',()=>{
  document.querySelector('#popup.active').classList.toggle('active');
  overlay.classList.toggle('active');
})
register.addEventListener('click',(e)=>{
  e.preventDefault();
  loginPopup.classList.toggle('active');
  registerPopup.classList.toggle('active');
})
loginP.addEventListener('click',(e)=>{
  e.preventDefault();
  loginPopup.classList.toggle('active');
  registerPopup.classList.toggle('active');
})


var icons = new Swiper(".mySwiper", {
  slidesPerView: 1,
  spaceBetween: 0,

  breakpoints: {
    "@0.00": {
      slidesPerView: 3,
      spaceBetween: 10,
    },
    "@0.75": {
      slidesPerView: 4,
      spaceBetween: 20,
    },
    "@1.00": {
      slidesPerView: 6,
      spaceBetween: 40,
    },
    "@1.50": {
      slidesPerView: 8,
      spaceBetween: 50,
    },
  },
});