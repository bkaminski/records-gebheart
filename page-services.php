<?php get_header(); 
/**
 * Template Name: Services Page
 *
 * @package WordPress
 * @subpackage Records Gebhart
 * 
 */
?>

<?php echo get_template_part( 'parts/page', 'services-video' ); ?>

<?php echo get_template_part( 'parts/page', 'services-main' ); ?>

<div class="container">
	<div class="col pb-2">
		<?php the_tags('<span class="badge rounded-pill bg-secondary"><i class="fas fa-tags"></i> Related:</span>  ', ' • '); ?>
		
	</div>
</div>

<?php get_footer(); ?>
