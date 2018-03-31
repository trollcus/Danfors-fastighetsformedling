// Lazy
  $('.fadeIMG').Lazy({
        // your configuration goes here
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: true,
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        },
        afterLoad: function(element) {
            console.log("addsd");
        }
    });
  $('.fadeInIMG').Lazy({
        // your configuration goes here
        scrollDirection: 'vertical',
        effect: 'fadeIn',
        visibleOnly: true,
        effectTime: 500,
        threshold: 0,
        onError: function(element) {
            console.log('error loading ' + element.data('src'));
        },
        afterLoad: function(element) {
            // console.log("addsd");
        }
    });

$(document).ready(function(){

  $("a[href^='data:image']").each(function(){
    $(this).slimbox({
        content: $("<img/>").attr("src", this.href)
    });
    console.log('asd');
});

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
    if($(window).scrollTop() > 400 && $(window).scrollTop() < 3000){
       $("#forsaljning").fadeIn('slow');
    }
    else{
       $("#forsaljning").fadeOut();
    }
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




// Google Maps


(function($) {

/*
*  new_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$el (jQuery element)
*  @return	n/a
*/

function new_map( $el ) {

	// var
	var $markers = $el.find('.marker');


	// vars
	var args = {
		zoom		: 16,
		center		: new google.maps.LatLng(0, 0),
		mapTypeId	: google.maps.MapTypeId.ROADMAP,
    styles: [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":0.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]
	};


	// create map
	var map = new google.maps.Map( $el[0], args);


	// add a markers reference
	map.markers = [];


	// add markers
	$markers.each(function(){

    	add_marker( $(this), map );

	});


	// center map
	center_map( map );


	// return
	return map;

}

/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	$marker (jQuery element)
*  @param	map (Google Map object)
*  @return	n/a
*/

function add_marker( $marker, map ) {

	// var
	var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );

	// create marker
	var marker = new google.maps.Marker({
		position	: latlng,
		map			: map
	});

	// add to array
	map.markers.push( marker );

	// if marker contains HTML, add it to an infoWindow
	if( $marker.html() )
	{
		// create info window
		var infowindow = new google.maps.InfoWindow({
			content		: $marker.html()
		});

		// show info window when marker is clicked
		google.maps.event.addListener(marker, 'click', function() {

			infowindow.open( map, marker );

		});
	}

}

/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type	function
*  @date	8/11/2013
*  @since	4.3.0
*
*  @param	map (Google Map object)
*  @return	n/a
*/

function center_map( map ) {

	// vars
	var bounds = new google.maps.LatLngBounds();

	// loop through all markers and create bounds
	$.each( map.markers, function( i, marker ){

		var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );

		bounds.extend( latlng );

	});

	// only 1 marker?
	if( map.markers.length == 1 )
	{
		// set center of map
	    map.setCenter( bounds.getCenter() );
	    map.setZoom( 15 );
	}
	else
	{
		// fit to bounds
		map.fitBounds( bounds );
	}

}

/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type	function
*  @date	8/11/2013
*  @since	5.0.0
*
*  @param	n/a
*  @return	n/a
*/
// global var
var map = null;

$(document).ready(function(){

	$('.acf-map').each(function(){

		// create map
		map = new_map( $(this) );

	});

});

})(jQuery);
