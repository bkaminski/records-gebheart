<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container pt-5">
		<div class="col">
			<h1><?php the_title(); ?></h1>
		</div>
		<div class="row">
				<div class="col-lg-12">
					<?php the_content(); ?>
					
					<br />
				</div>
			</div>
		<?php endwhile; else : ?>
			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
	</div>
<?php get_footer(); ?>
