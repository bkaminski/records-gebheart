//jQuery no-conflict mode
(function( $ ) {
$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 975) {
			$('.learn--more').removeClass('float-end');
			$('.header-area').addClass('text-center');
			$('.rg--logos').removeClass('float-end');
			$('.trusted-choice').addClass('text-center pb-5');
			$('.local').removeClass('float-end'); 
			$('.img--one').removeClass('float-end').addClass('pb-3');
			$('.img--two').removeClass('float-start');
			$('.about--1').addClass('text-center');
			$('.about--2').addClass('text-center');
		};
		if ($window.width() >= 975) {
			$('.learn--more').addClass('float-end');
			$('.header-area').removeClass('text-center');
			$('.rg--logos').addClass('float-end');
			$('.trusted-choice').removeClass('text-center pb-5');
			$('.local').addClass('float-end');
			$('.img--one').addClass('float-end').removeClass('pb-3');
			$('.img--two').addClass('float-start');
			$('.about--1').removeClass('text-center');
			$('.about--2').removeClass('text-center');
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});

})( jQuery );
