
$(window).on('load', function(){
  $('.loader .inner').fadeOut(500, function(){
    $('.loader').fadeOut(750);
  });

  $(".items").isotope({
    filter:'*',
    animationOptions:{
      duration:1500,
      easing:'linear',
      queue:false
    }
  });

})


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
    autoplay:false,
    // autoplayTimeout:4000,
    loop:true,
    touchDrag:true,
    items:3,
      stagePadding: 1,
    dots:true,
      nav: true,
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


  var colorSet = ['#FBBE00', //Yellow
                  '#0097C2',//blue
                  '#E0423F'//red
                ];
  var owl = $('.owl-carousel');

   var skillsTopOffset = $(".skillsSection").offset().top;
   $(window).scroll(function(){
     if(window.pageYOffset > skillsTopOffset - $(window).height() + 200){
       $('.chartBlue').easyPieChart({
            easing: 'easeInOut',
            barColor: '#0097C2',
            lineCap: 'round',
            rotate: 180,
            trackColor: false,
            scaleColor: false,
            lineWidth: 8,
            size: 152,
            onStep: function(from, to, percent){
              $(this.el).find('.percent').text(Math.round(percent))
            }
        });

        $('.chartRed').easyPieChart({
             easing: 'easeInOut',
             barColor: '#E0423F',
             lineCap: 'round',
             rotate: 180,
             trackColor: false,
             scaleColor: false,
             lineWidth: 8,
             size: 152,
             onStep: function(from, to, percent){
               $(this.el).find('.percent').text(Math.round(percent))
             }
         });

         $('.chartYellow').easyPieChart({
              easing: 'easeInOut',
              barColor: '#FBBE00',
              lineCap: 'round',
              rotate: 180,
              trackColor: false,
              scaleColor: false,
              lineWidth: 8,
              size: 152,
              onStep: function(from, to, percent){
                $(this.el).find('.percent').text(Math.round(percent))
              }
          });



            // owl.trigger('play.owl.autoplay');

     }
   })

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

   $("[data-fancybox]").fancybox({

   })



   $("#filters a").click(function(){
     $("#filters .current").removeClass("current");
     $(this).addClass("current");

     var selector = $(this).attr("data-filter");

     $(".items").isotope({
       filter:selector,
       animationOptions:{
         duration:1500,
         easing:'linear',
         queue:false
       }
     });

     return false;

   })



});
