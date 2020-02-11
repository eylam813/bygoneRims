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

			<div class="large-2 option">
				<h4>Lorem.</h4>
			</div>
			<div class="large-2 option">
				<h4>Lorem.</h4>
			</div>
			<img src="<?php echo get_header_image(); ?>" alt="">

			<div class="large-4"></div>

			<?php
			wp_nav_menu(array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			));
			?>


		</header><!-- #masthead -->

		<div id="content" class="site-content">