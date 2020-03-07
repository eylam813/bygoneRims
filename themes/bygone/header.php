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

			<div class="large-4 medium-3 small-6"> <!-- logo holder -->
				<div id="custom-logo-container">
					<?php the_custom_logo(); ?>
				</div>
			</div>

			<div class="large-8 medium-9 small-6"> <!-- menu holder -->
				<div id="nav-top-menu" class="cell bygone-header-menu"> <!-- top menu -->
					<?php
						wp_nav_menu(array(
							'theme_location' => 'Nav-left',
							'menu_id'        => 'header-menu-left',
							'link_before' => '<div class="header-right">',
							'link_after' => '</div>',
							'container_class' => 'nav-menu-cont'
						));
						// if ( has_nav_menu( 'Nav-left')){
						// 	$args = array(
						// 		'theme_location' => 'Nav-left',
						// 		'fallback_cb'     => 'false',
						// 		// 'menu_id' => 'custom-id',
						// 		// 'menu_class' => 'custom-class',
						// 		'container' => ''
						// 	);
						// 	wp_nav_menu($args);
						// }
					?>
				</div>
				<div id="nav-lower-menu" class="cell bygone-header-menu"> <!-- lower menu -->
					<?php
					wp_nav_menu(array(
						'theme_location' => 'Nav-right',
						'menu_id'        => 'Nav-right',
						'link_before' => '<div class="header-right">',
						'link_after' => '</div>',
						'container_class' => 'nav-menu-cont',
					));
					// if ( has_nav_menu( 'Nav-right')){
					// 	$args = array(
					// 		'theme_location' => 'Nav-right',
					// 		'fallback_cb'     => 'false',
					// 		// 'menu_id' => 'custom-id',
					// 		// 'menu_class' => 'custom-class',
					// 		'container' => ''
					// 	);
					// 	wp_nav_menu($args);
					// }
					?>
				</div>


				<div class="hamburger-wrapper"> <!-- hamburger menu-->
					<button class="menu-icon" type="button" data-toggle="bygone-menu"></button>
					<!-- <div class="title-bar-title">Menu</div> -->
				</div>	
				
				<div class="top-bar" id="bygone-menu">
				</div>
			</div>


		</header><!-- #masthead -->

		<!-- <div class="mini-cart-wrapper"> -->
			<!-- <?php woocommerce_mini_cart(); ?> -->
		<!-- </div> -->

		<div id="content" class="site-content">