$(document).ready(function(){
  $('.responsive').slick({
  dots: true,
  arrows: false,
  prevArrow: '<button type="button" class="slick-prev slidebtn"><</button>',
  nextArrow: '<button type="button" class="slick-next slidebtn">></button>',
  infinite: true,
  autoplay: true,
  autoplaySpeed: 3500,
  speed: 500,
  pauseOnHover: true,
  slidesToShow: 2,
  slidesToScroll: 2,
  responsive: [
    {
      breakpoint: 1340,
      settings: {
        arrows: false
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        arrows: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
$(window).scroll(function() {
    if ($(this).scrollTop() > 300){
        $('#masthead').addClass("active-nav");
        $('.navbar-brand').addClass("navbar-brand-fixed");
        $('.link-top').addClass("link-fixed");
        $('.icon-bar').addClass("icon-active-span");

    }
    else{
        $('#masthead').removeClass("active-nav");
        $('.navbar-brand').removeClass("navbar-brand-fixed");
        $('.link-top').removeClass("link-fixed");
        $('.icon-bar').removeClass("icon-active-span");
    }
});
$('.navbar-toggle').click(function() {
  $('#masthead').toggleClass("active-nav-toggle");
  if($('#masthead').hasClass('active-nav')) {
    console.log('ssss');
  } else {
    $('.navbar-brand').toggleClass("navbar-brand-fixed");
    $('.link-top').toggleClass("link-fixed");
    $('.icon-bar').toggleClass("icon-active-span");
  }


});


$('#top-btn').hide();
var listheight = $(".listing-content").outerHeight();
var tabheight = $(".nav-tabs").outerHeight();
var tabcontent = $('.tab-content').outerHeight();
var cta = $('.contact-cta').outerHeight();
var ctadivided = cta/2;
$('.nav-tabs').click(function() {
  tabcontent = $('.tab-content').outerHeight();
});



$(window).scroll(function(){
    if($(window).scrollTop() > (200 + listheight + tabheight)){
       $("#top-btn").fadeIn('slow');
    }
    else{
       $("#top-btn").fadeOut();
    }
});
// $(window).scroll(function(){
//     if($(window).scrollTop() > (200 + listheight + tabheight) && $(window).scrollTop() < (listheight + tabheight + tabcontent + ctadivided - 400) ){
//        $("#top-btn").fadeIn('slow');
//        console.log(tabcontent);
//     }
//     else{
//        $("#top-btn").fadeOut();
//        tabcontent = $('.tab-content').outerHeight();
//     }
// });

$("#top-btn").click(function() {
    $('html,body').animate({
        scrollTop: $("#tabs-listing").offset().top + (-95)},
        'slow');
        $("#top-btn").hide();
});
});
