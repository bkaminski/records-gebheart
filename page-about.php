<?php get_header(); 
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Records Gebhart
 * 
 */
?>
<article>
	<div class="header-bar"></div>
	<?php echo get_template_part( 'parts/page', 'about' ); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-md-6 about--1">
					<picture>
						<img src="<?php echo the_field('image_one'); ?>" alt="" class="img-fluid float-end img--one" width="400" />
					</picture>
				</div>
				<div class="col-md-6 about--2">
					<picture>
						<img src="<?php echo the_field('image_two'); ?>" alt="" class="img-fluid float-start img--two" width="400" />
					</picture>
				</div>
			</div>
			<div class="col-md-12 pt-3">
				<h2 class="h1 fw-bold text-light-green text-center">Our <span class="text-green">Team</span></h2>

				<?php the_content(); ?>

			</div>
			<div class="text-center pt-5">
				<a href="<?php echo get_home_url();?>/services" class="btn btn-dark-green btn-lg rounded-pill px-3 mb-4">Get Insured</a>
			</div>
			<?php endwhile; else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
		</div>
</article>
<div class="container">
	<div class="col pb-2">
		<?php the_tags('<span class="badge rounded-pill bg-secondary"><i class="fas fa-tags"></i> Related:</span>  ', ' • '); ?>
		
	</div>
</div>
<?php get_footer(); ?>