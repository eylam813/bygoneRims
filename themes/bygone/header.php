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

		<p>
			<?php
			$array = apply_filters('woocommerce_cart_contents_count', $array);

			if (!empty($array)) {

				// everything has led up to this point... 
				echo $array;
				echo "hey";
			} else {
				echo $array;
				echo "no hey";
			}
			?>
		</p>

		<div id="content" class="site-content">