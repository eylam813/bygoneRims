<div class="site-branding">

			<nav id="site-navigation" class="main-navigation">
				<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bygone' ); ?></button>-->
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			
			<img src="<?php echo get_header_image(); ?>" alt="">
			<div id="header-right-container">
				<div id="searchbox" class="header-right">search</div>
				<div id="favbox" class="header-right">fav</div>
				<div id="cartbox" class="header-right">cart</div>
				<div id="sign-in-box" class="header-right">sign</div>
			<div>
		</div><!-- .site-branding -->
