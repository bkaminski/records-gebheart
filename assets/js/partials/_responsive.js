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
		};
		if ($window.width() >= 975) {
			$('.learn--more').addClass('float-end');
			$('.header-area').removeClass('text-center');
			$('.rg--logos').addClass('float-end');
			$('.trusted-choice').removeClass('text-center');
			$('.local').addClass('float-end');
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	

})( jQuery );
