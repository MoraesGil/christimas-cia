$(window).scroll(function() {
    if ($(this).scrollTop() > 2) {
    $('.navbar-natal').addClass("solid");
    $('.brand').css('display','block');
    $('.navbar-brand').fadeOut();
    $('.brand').css('display','block');
    $('.brand').css('positon','unset');

} else {
  $('.navbar-natal').removeClass("solid");
   $('.brand').css('display','none');
    $('.navbar-brand').css('display','block');
} });
