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
		$('.about--us').waypoint(function() {
			$('.about--us').addClass('animated fadeInLeft');
		}, {
			offset: '100%',
			
		});
		$('.rg-card, .card-footer').waypoint(function() {
			$('.rg-card, .card-footer').addClass('animated fadeInDown');
		}, {
			offset: '100%',
			
		});
		$('.testimonial').waypoint(function() {
			$('.testimonial').addClass('animated fadeInDown');
		}, {
			offset: '100%',
			
		});
	});
})( jQuery );

