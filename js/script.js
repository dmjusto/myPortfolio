$(document).ready(function()
{
  $('#slides').superslides({
    animation: 'fade',
    play: 0


  })

  var typed = new Typed(".typed" ,{
    strings: ["software developer."],
    typeSpeed: 70,
    startDelay: 800,
    loop: false,
    showCursor: false
  })
});
