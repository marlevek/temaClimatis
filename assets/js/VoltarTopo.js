$(document).ready(function() {
  $('.voltarTopo').hide();
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.voltarTopo').fadeIn();
    } else {
      $('.voltarTopo').fadeOut();

    }

  });

  $('.voltarTopo').click(function() {
    $("html,body").animate({
      scrollTop: 0
    }, 3000);

  });

});