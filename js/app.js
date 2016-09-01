$(window).scroll(function() { 
    if ($(this).scrollTop() > 2) {
    $('.navbar-natal').addClass("solid"); 
    $('.brand').css('display','block');
    $('.navbar-brand').css('display','none');
   
} else { 
     $('.navbar-natal').removeClass("solid"); 
   $('.brand').css('display','none');
    $('.navbar-brand').css('display','block');
} });