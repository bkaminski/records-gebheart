//jQuery no-conflict mode
(function( $ ) {
$( document ).ready(function() {

	// RESPONSIVE CONTROLS
	var $window = $(window);
	function checkWidth() {

		if ($window.width() < 991) {
			//$('.ins--logos').removeClass('float-end').addClass('text-center');
		};
		if ($window.width() >= 991) {
			//$('.ins--logos').removeClass('text-center').addClass('float-end');
		}
	}
	
	checkWidth();
	$(window).resize(checkWidth);
	
	// END RESPONSIVE CONTROL
	});	

})( jQuery );
