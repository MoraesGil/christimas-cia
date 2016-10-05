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

  $("#btn_empresa_mais").click(function(){
    window.location = "/empresa.html"
  });
  $("#btn_clientes_mais").click(function(){
    window.location = "/clientes.html"
  });
  $("#btn_portifolio_mais").click(function(){
    window.location = "/portifolio.html"
  });

  $('.venobox').venobox();

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
