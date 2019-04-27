$(document).ready(function(){

  $('#slides').superslides({
    animation: 'fade',
    play: 0,
    pagination: false
  });

  var typed = new Typed(".typed" ,{
    strings: ["Software Developer."],
    typeSpeed: 70,
    startDelay: 800,
    loop: false,
    showCursor: false
  });

  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
  });

});
