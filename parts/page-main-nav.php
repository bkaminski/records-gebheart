<!-- Main Bootstrap Navbar Here -->
<nav class="navbar navbar-expand-lg shadow fixed-top" style="background: #fff;">
	<div class="container">
		<a class="navbar-brand" href="<?php echo get_home_url(); ?>">
			<img src="<?php echo get_home_url(); ?>/wp-content/uploads/records-gebhart-logo.png" alt="Records Gebhart Logo" width="251" height="73">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain" aria-controls="navbarMain" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars fa-2x fa-fw"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarMain">
			<?php
			wp_nav_menu( array(
				'theme_location'    => 'primary',
				'depth'             => 2,
				'container'         => '',
				'container_class'   => '',
				'container_id'      => '',
				'menu_class'        => 'navbar-nav me-auto mb-2',
				'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
				'walker'            => new WP_Bootstrap_Navwalker(),
			)); ?>
			
		</div>
	</div>
</nav>