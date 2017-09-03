// Browser detection for when you get desparate. A measure of last resort.
// http://rog.ie/post/9089341529/html5boilerplatejs

// var b = document.documentElement;
// b.setAttribute('data-useragent',  navigator.userAgent);
// b.setAttribute('data-platform', navigator.platform);

// sample CSS: html[data-useragent*='Chrome/13.0'] { ... }


// remap jQuery to $
(function($){

	/* trigger when page is ready */
	$(document).ready(function (){
	/* ---------------------------------------------------- */


	$(".mobile iframe[src*='vimeo'], iframe[src*='youtube']").wrap( "<div class='video-wrap'></div>" );
	$(".mobile .video-wrap").fitVids();


	/* Magnific popups */
	/* ------------------------------------------- */


// 	$( ".button" ).hover(function() {
// 		$(".artwork").toggleClass('active');
// });




	/* ---------------------------------------------------- */
	});



	$(window).on('load', function () {
	// --------------------------------------

	  $("html").removeClass("preload");

	// --------------------------------------
	 });

	/* optional triggers

	$(window).load(function() {

	});

	$(window).resize(function() {

	});

	*/

})(window.jQuery);
