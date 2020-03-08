<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bygone
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'bygone'); ?></a> -->

		<header id="masthead" class="site-header grid-x">
			<div class="hamburger-wrapper small-2"> <!-- hamburger menu-->
			<!-- <div class="hamburger-wrapper small-2" onclick="showHamburgerMenu()"> -->
				<button id="hamburger-icon" type="button" data-toggle="bygone-menu">menu</button>
				<!-- <div class="title-bar-title">Menu</div> -->
			</div>	

			<div class="large-4 large-offset-0 medium-3 medium-offset-0 small-offset-1 small-5"> <!-- logo holder -->
				<div id="custom-logo-container">
					<?php the_custom_logo(); ?>
				</div>
			</div>

			<div class="large-8 medium-9 small-6"> <!-- menu holder -->
				<div id="nav-top-menu" class="cell bygone-header-menu"> <!-- top menu -->
					<?php
						wp_nav_menu(array(
							'theme_location' => 'Header Upper',
							// 'theme_location' => 'header-upper',
							'menu_id'        => 'header-upper',
							// 'link_before' => '<div class="header-top">',
							// 'link_after' => '</div>',
							'container_class' => 'nav-menu-cont'
						));
					?>
				</div>
				<div id="nav-lower-menu" class="cell bygone-header-menu"> <!-- lower menu -->
					<?php
					wp_nav_menu(array(
						'theme_location' => 'Header Lower',
						// 'theme_location' => 'header-lower',
						'menu_id'        => 'header-lower',
						// 'link_before' => '<div class="header-lower">',
						// 'link_after' => '</div>',
						'container_class' => 'nav-menu-cont',
					));
					?>
				</div>
			</div>

		</header><!-- #masthead -->
		<div class="hamburger-menu" id="bygone-hamburger-menu">
					<?php
						if ( has_nav_menu( 'Header Upper')){
							$args = array(
								'theme_location' => 'Header Upper',
								'fallback_cb'     => 'true',
								// 'menu_id'        => 'hamburger-header-upper',
								'menu_class' => 'hamburger-menu',
								'container' => ''
							);
							wp_nav_menu($args);
						}
						if ( has_nav_menu( 'Header Lower')){
							$args = array(
								'theme_location' => 'Header Lower',
								'fallback_cb'     => 'true',
								// 'menu_id'        => 'hamburger-header-lower',
								'menu_class' => 'hamburger-menu',
								'container' => ''
							);
							wp_nav_menu($args);
						}
					?>
				</div>

		<!-- <div class="mini-cart-wrapper"> -->
			<!-- <?php woocommerce_mini_cart(); ?> -->
		<!-- </div> -->

		<div id="content" class="site-content">