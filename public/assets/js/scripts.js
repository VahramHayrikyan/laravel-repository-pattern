//jQuery code
jQuery(function($) {
	"use strict";

$(document).ready(function(){
	jQuery.fx.interval = 33;
	
	$(".slider").bxSlider({
		pager: false,
		speed: 1000,
		infiniteLoop: true,
		hideControlOnEnd: true,
		responsive: true,
		adaptiveHeight: true,
  		mode: 'fade',
  		auto: true,
  		pause: 7000
	});

    $(".event-slider").bxSlider({
	        pager: false
	    });
	});
	

	$(".album-slider").bxSlider({
		minSlides: 1,
		maxSlides: 15,
		slideWidth: 257,
		slideMargin: 17,
		ticker: true,
		tickerHover: true,
		speed: 50000,
		useCSS: false, 
		infiniteLoop: false
	});
	
	$(".album-slider2").bxSlider({
		minSlides: 1,
		maxSlides: 20,
		slideWidth: 120,
		slideMargin: 17,
		ticker: true,
		tickerHover: true,
		speed: 50000,
		useCSS: false, 
		infiniteLoop: false
	});


	$(".popular-albums").bxSlider({
		pager: false,
	    slideWidth: 81,
	    minSlides: 4,
	    maxSlides: 4,
	    moveSlides: 4,
	    slideMargin: 10,
	    infiniteLoop: false
	 });

	$('.posters-slider').bxSlider({
	    slideWidth: 257,
	    maxSlides: 4,
	    moveSlides: 1,
	    slideMargin: 16,
	    pager: false
	});

	$('.video-nav__icon_popup').magnificPopup({
		disableOn: 700,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: false,

		fixedContentPos: false
	});
	
	$('.game_popup').magnificPopup({
		disableOn: 900,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: true,
		iframe: {
	  		markup: '<div class="mfp-iframe-scaler" style="width: 1100px;">'+
			            '<div class="mfp-close"></div>'+
			            '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
	          		'</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button
		},


		fixedContentPos: false
	});

	$('.gallery-popup').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return item.el.attr('title');
			}
		}
	});

   $("<a href='#' class='btn-nav-toggle'>Drop Menu</idv>").insertAfter(".nav");

	$(".btn-nav-toggle").on('click', function(e) {
		e.preventDefault();
		$(".nav").slideToggle();
	});
	/* End toggle nav */

	$("body").fitVids();
	/* End responsive video */
});		

function selectPodcast(title)
{
    $(":contains("+title+")").click();
}

function ajaxLike(likeUrl, countLikeUrl, product_id)
{
	$.ajax({
				url: likeUrl
	}).done(function(){$("#countProductLikes" + product_id).load(countLikeUrl);});
	$(".product_like_" + product_id).toggleClass("liked");

	return false;
}

$(function () {
	$('[data-toggle="tooltip"]').tooltip()
});

function arcadePopups()
{
	$('.game_popup').magnificPopup({
		disableOn: 900,
		type: 'iframe',
		mainClass: 'mfp-fade',
		removalDelay: 160,
		preloader: true,
		iframe: {
			markup: '<div class="mfp-iframe-scaler" style="width: 1100px;">'+
			'<div class="mfp-close"></div>'+
			'<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>'+
			'</div>', // HTML markup of popup, `mfp-close` will be replaced by the close button
		},


		fixedContentPos: false
	});
}

$('.selectpicker').selectpicker();