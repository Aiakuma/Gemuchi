<<<<<<< Updated upstream
=======
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

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
/** 
let menu = document.querySelectorAll('.dropdown-menu').children;
let cards = document.querySelectorAll('.cards').children;
let console = document.getElementById('console');



for(let i=0; i < menu.length ;i++){
  menu[i].onclick=function(){
    for(let j=0; j < menu.length;j++){
      menu[j].classList.remove('active');
    }
    this.classList.add('active');
    const displayCards = this.value.menu;
    for(let x=0; x<menu.length;x++){
      cards[x].style.transform = 'scale(0)';
      setTimeout(()=>{ cards[x].style.display='none';},500
     
      );
      if(cards[x].value.console == displayCards || displayCards == 'platforme'){
        cards[z].style.transform = 'scale(1)';
        setTimeout(()=>{ cards[x].style.display='block';},500
     
        );
      }
    }
  }
}
*/
/** menu burger */

/* CAROUSEL */

$(document).ready(function(){
  $(".owl-carousel").owlCarousel();
})
>>>>>>> Stashed changes
