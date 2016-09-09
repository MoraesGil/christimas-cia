$(window).scroll(function() {
  if ($(this).scrollTop() > 2) {
    $('.navbar-natal').addClass("solid");


  } else {
    $('.navbar-natal').removeClass("solid");

  }

  $(this).scrollTop() >= 1 ? $(".logo-brand").addClass("active") : $(".logo-brand").removeClass("active")
});

$(window).ready(function(){
 $('#u_0_2').addClass(".facebuttons");
})
