$(window).scroll(function() {
  changeMenu();
});

function changeMenu(){
  if ($(this).scrollTop() > 2) {
    $('.navbar-natal').addClass("solid");
  } else {
    $('.navbar-natal').removeClass("solid");
  }
  $(this).scrollTop() >= 1 ? $(".logo-brand").addClass("active") : $(".logo-brand").removeClass("active")

}

$(window).ready(function(){
  changeMenu();

  $("#banner-home").owlCarousel({
    loop:true,
    autoplay:true,
    autoplayHoverPause:true,
    responsiveClass:true,
    items:1,
    nav: true,
  });

  $("#comentarios-carousel").owlCarousel({
    loop:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    items:1,
    animateOut: 'fadeOut',
    smartSpeed:3000,
  });


  $("#btn_empresa_mais").click(function(){
    window.location = "/empresa.html"
  });
  $("#btn_clientes_mais").click(function(){
    window.location = "/clientes.html"
  });
  $("#btn_portifolio_mais").click(function(){
    window.location = "/portifolio.html"
  });

  $('.venobox').venobox({
    numeratio: true,
    infinigall: true
  });

  $('#menu-item-24 > a').click(function () {
    $('html, body').animate({
        // scrollTop: $(document).height()
        scrollTop: $("#contato").offset().top
    }, 'slow');
    return false;
});


  // testimonial-item
  // $(".testimonial-item").owlCarousel({
  //   autoPlay: true,
  //   slideSpeed: 2000,
  //   pagination: false,
  //   navigation: true,
  //   items: 1,
  //   /* transitionStyle : "fade", */
  //   /* [This code for animation ] */
  //   navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
  //   transitionStyle : "backSlide",
  //   itemsDesktop: [1199, 1],
  //   itemsDesktopSmall: [980, 1],
  //   itemsTablet: [768, 1],
  //   itemsMobile: [479, 1],
  // });

});
