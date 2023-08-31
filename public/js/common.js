jQuery(document).ready(function($) {
    $('.slider').slick({
      dots: false,
      infinite: true,
      speed: 500,
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 1000,
      arrows: true,
      responsive: [{
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1,
          arrows: false,
        }
      },
      {
         breakpoint: 400,
         settings: {
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1
         }
      }]
  });
});

var menuBtn1 = document.querySelector('.menu-btn1');
var nav2 = document.querySelector('nav');
var lineOne1= document.querySelector('.menu-btn1 .line--1');
var lineTwo1 = document.querySelector(' .menu-btn1 .line--2');
var lineThree1 = document.querySelector('.menu-btn1 .line--3');
var link1 = document.querySelector('nav .nav-menulinks');
menuBtn1.addEventListener('click', () => {
    nav2.classList.toggle('nav-open');
    lineOne1.classList.toggle('line-cross');
    lineTwo1.classList.toggle('line-fade-out');
    lineThree1.classList.toggle('line-cross');
    link1.classList.toggle('fade-in');
})
