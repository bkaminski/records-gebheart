(function( $ ) {
	$( document ).ready(function() {
		$('.learn--more').waypoint(function() {
			$('.learn--more').addClass('animated fadeInDown');
		}, {
			offset: '100%',
		});
		$('.local').waypoint(function() {
			$('.local').addClass('animated fadeInDown');
		}, {
			offset: '100%',
			
		});
	});
})( jQuery );
