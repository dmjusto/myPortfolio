$(document).ready(function(){

  $('#slides').superslides({
    animation: 'fade',
    play: 0,
    pagination: false
  });

  var typed = new Typed(".typed" ,{
    strings: ["Software Developer.","Programer.","Gamer."],
    typeSpeed: 70,
    startDelay: 800,
    loop: true,
    showCursor: false
  });

  $('.owl-carousel').owlCarousel({
    autoplay:true,
    autoplayTimeout:3000,
    loop:true,
    touchDrag:true,
    items:4,
    responsive:{
        0:{
            items:1
        },
        480:{
            items:2
        },
        768:{
            items:3
        },
        938:{
            items:4
        }
    }
  });



   var skillsTopOffset = $(".skillsSection").offset().top;
   $(window).scroll(function(){
     if(window.pageYOffset > skillsTopOffset - $(window).height() + 200){
       $('.chart').easyPieChart({
            easing: 'easeInOut',
            barColor: '#e66a55',
            trackColor: false,
            scaleColor: false,
            lineWidth: 4,
            size: 152,
            onStep: function(from, to, percent){
              $(this.el).find('.percent').text(Math.round(percent))
            }
        });
     }
   })

});

$('li').on('click', function(){
   $('li').removeClass('active');
   $(this).toggleClass('active');
})

$('#navigation li a').click(function(e){
  e.preventDefault();

  var targetElement=$(this).attr("href");
  var targetPosition=$(targetElement).offset().top;

  $("html, body").animate({scrollTop: targetPosition - 50}, 'slow');
})
