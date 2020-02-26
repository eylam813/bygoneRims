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
			<!-- hamburger menu -->
			<div class="title-bar" data-responsive-toggle="bygone-menu" data-hide-for="medium">
				<button class="menu-icon" type="button" data-toggle="bygone-menu"></button>
				<div class="title-bar-title">Menu</div>
			</div>

			<div class="top-bar" id="bygone-menu">
				<div class="top-bar-left">
					<ul class="dropdown menu" data-dropdown-menu>
					<li class="menu-text">Site Title</li>
					<li>
						<a href="#">One</a>
						<ul class="menu vertical">
						<li><a href="#">One</a></li>
						<li><a href="#">Two</a></li>
						<li><a href="#">Three</a></li>
						</ul>
					</li>
					<li><a href="#">Two</a></li>
					<li><a href="#">Three</a></li>
					</ul>
				</div>
				<div class="top-bar-right">
					<ul class="menu">
					<li><input type="search" placeholder="Search"></li>
					<li><button type="button" class="button">Search</button></li>
					</ul>
				</div>
			</div>


			<div class="large-4">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'Nav-left',
				'menu_id'        => 'header-menu-left',
				'link_before' => '<div class="header-right">',
				'link_after' => '</div>',
				'container_class' => 'nav-menu-cont'
			));
			?>
			</div>
			<div id="custom-logo-container" class="large-4">
				<?php the_custom_logo(); ?>
			</div>

			<div class="large-4">
			<?php
			wp_nav_menu(array(
				'theme_location' => 'Nav-right',
				'menu_id'        => 'Nav-right',
				'link_before' => '<div class="header-right">',
				'link_after' => '</div>',
				'container_class' => 'nav-menu-cont'
			));
			?>
			</div>


		</header><!-- #masthead -->

		<div class="mini-cart-wrapper">
			<?php woocommerce_mini_cart(); ?>
		</div>

		<div id="content" class="site-content">