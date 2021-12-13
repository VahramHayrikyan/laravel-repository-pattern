/* =Main INIT Function
-------------------------------------------------------------- */
function initializeSirius() {
	"use strict";

	//HERO DIMENSIONS AND CENTER
	(function() {
		function heroInit(){
			var hero = $('.hero'),
				windowHeight = $(window).height(),
				heroHeight = windowHeight,
				heroContent = $('.hero-content'),
				contentHeight = heroContent.height(),
				topContentMargin = (heroHeight - contentHeight) / 2,
				counter = $('.countdown'),
				counterHeight = $('.countdown').height(),
				counterMargin = (heroHeight - counterHeight) / 2;

			hero.css({
				height: heroHeight+"px"
			});

			heroContent.css({
				"margin-top" : "250px"
			});

			counter.css({
				"margin-top" : counterMargin+"px"
			});

		}

		$(window).on("resize", heroInit);
	    $(document).on("ready", heroInit);
	})();


	//COUNTDOWN
	$('.countdown').countdown('2015/02/02', function(event) {
     	$(this).html(event.strftime('<div class="counter-column"><span class="count-digit">%D</span><span class="count-name">days</span></div><div class="counter-column"><span class="count-digit">%H</span><span class="count-name">hours</span> </div><div class="counter-column"><span class="count-digit">%M</span> <span class="count-name">minutes</span></div><div class="counter-column"><span class="count-digit">%S</span><span class="count-name">seconds</span></div>'));
	});

	// FORM

	$(function($) {
		$('body').on('click','#subscribe',function(){$.ajax({'type':'POST','success':function(data) {
									
		var error = $('.notification.error');
		var success = $('.notification.success');
		if(data == 1) {
			success.css('opacity', 0);
			success.slideDown(300);
			success.animate({
				opacity : 1
			}, 300);
			error.hide()
		} else {
			error.css('opacity', 0);
			error.slideDown(300);
			error.animate({
				opacity : 1
			}, 300);
			success.hide()
		} 
		},
		'url':'form.php',		  
		'cache':false,
		'data': $(this).parents("form").serialize()});return false;});
	});
}; 


	// SCROLLTO

	var scrollY = 0;
	var distance = 10;
	var speed = 10;
	function autoScrollTo (el)  {
		var currentY = window.pageYOffset;
		var targetY = document.getElementById(el).offsetTop;
		var bodyHeight = document.body.offsetHeight;
		var yPos = currentY + window.innerHeight;
		var animator = setTimeout('autoScrollTo(\''+el+'\')',speed);
		if(yPos > bodyHeight) {
			clearTimeout(animator);
		} else {
			if(currentY < targetY-distance) {
				scrollY = currentY+distance;
				window.scroll(0, scrollY);
			} else {
				clearTimeout (animator);
			}

		}
	}



/* END ------------------------------------------------------- */


/* =Document Ready Trigger
-------------------------------------------------------------- */
$(document).ready(function(){

	initializeSirius();

});
/* END ------------------------------------------------------- */

/* =Window Load Trigger
-------------------------------------------------------------- */
$(window).load(function(){

	//SKROLLR 
    if (Modernizr.touch) {
        skrollr.init().destroy();
    } else {   
        skrollr.init({
        	forceHeight: false
        });  
    }
});





/* END ------------------------------------------------------- */