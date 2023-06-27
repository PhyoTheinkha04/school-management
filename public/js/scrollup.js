window.addEventListener('scroll', e => {
    var el = document.getElementById('jsScroll');
    if(window.scrollY > 300) {
      el.classList.add('visible');
    } else {
      el.classList.remove('visible');
    }
  });
  
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  }
  
var menuBtn = document.querySelector('.menu-btn');``
var nav1 = document.querySelector('.nav-cat');
var lineOne = document.querySelector('.menu-btn .line--1');
var lineTwo = document.querySelector(' .menu-btn .line--2');
var lineThree = document.querySelector('.menu-btn .line--3');
var link = document.querySelector('.nav-cat .nav-links');
menuBtn.addEventListener('click', () => {
    nav1.classList.toggle('nav-opens');
    lineOne.classList.toggle('line-cross');
    lineTwo.classList.toggle('line-fade-out');
    lineThree.classList.toggle('line-cross');
    link.classList.toggle('fade-in');
})

// var menuBtn1 = document.querySelector('.menu-btn');
// var nav1 = document.querySelector('nav');
// var lineOne1 = document.querySelector('.menu-btn .line--1');
// var lineTwo1 = document.querySelector(' .menu-btn .line--2');
// var lineThree1 = document.querySelector('.menu-btn .line--3');
// var link1 = document.querySelector('nav .nav-menulinks');
// menuBtn1.addEventListener('click', () => {
//     nav1.classList.toggle('nav-open');
//     lineOne1.classList.toggle('line-cross');
//     lineTwo1.classList.toggle('line-fade-out');
//     lineThree1.classList.toggle('line-cross');
//     link1.classList.toggle('fade-in');
// })