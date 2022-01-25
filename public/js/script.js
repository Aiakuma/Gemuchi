//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

/** FILTRE */

/** menu burger */
function toggleMenu(){
  const navbar = document.querySelector('.navbar');
  const burger = document.querySelector('.burger');
  burger.addEventListener('click',()=>{
    navbar.classList.toggle('show-nav');
  })
}
toggleMenu();


/* CAROUSEL */
let sliderMain = document.getElementById('slider-main');
let item = sliderMain.children;

function next() {
  sliderMain.append(item[0]);
}

function prev() {
  sliderMain.prepend(item[item.length - 1]);
}