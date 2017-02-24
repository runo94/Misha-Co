(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		if($(window).width() < 500) {		

			$( ".cross" ).hide();
			$( ".menu" ).hide();
			$( ".hamburger" ).click(function() {
			$( ".menu" ).slideToggle( "1500", function() {
			$( ".hamburger" ).hide();
			$( ".cross" ).show();
			});
			});

			$( ".cross" ).click(function() {
			$( ".menu" ).slideToggle( "1500", function() {
			$( ".cross" ).hide();
			$( ".hamburger" ).show();
			});
			});
		}
		
	});


	
})(jQuery, this);


jQuery(document).ready(function($){
	$('.caption-wrap').addClass('testimonials_content');
	$('.metaslider .slides img').wrap("<div class='image'></div>");

});