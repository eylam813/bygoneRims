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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<!-- <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bygone' ); ?></a> -->

	<header id="masthead" class="site-header">
		<div class="site-branding">

			<nav class="top-bar" data-topbar role="navigation">
				<ul class="title-area">
					<li class="name">
					<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					</li>
					<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
				</ul>

				<section class="top-bar-section">
					<?php display_primary_menu(); //we will make this function in a bit... ?>
				</section>
			</nav><!-- .top-bar -->

			<nav id="site-navigation" class="main-navigation">
				<!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'bygone' ); ?></button>-->
				<?php
				// wp_nav_menu( array(
				// 	'theme_location' => 'menu-1',
				// 	'menu_id'        => 'primary-menu',
					// 'before' => '',
					// "after" => '',
				// 	// 'walker' => new top_bar_walker()
				// ) );
				?>
			</nav><!-- #site-navigation -->

			<?php the_custom_logo(); ?>
			<div id="header-right-container">
				<div id="searchbox" class="header-right">search</div>
				<div id="favbox" class="header-right">fav</div>
				<div id="cartbox" class="header-right">cart</div>
				<div id="sign-in-box" class="header-right">sign</div>
			<div>
		</div><!-- .site-branding -->


	</header><!-- #masthead -->

	<div id="content" class="site-content">
