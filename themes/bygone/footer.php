<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bygone
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div id="social-media-icons" class="row center-vertical">
			<h3 class="reset">Connect With Us</h3>
			<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-social',
					'menu_class' => 'row add-child-border',
				) );
			?>
		</div>
		<div id="quick-links">
			<div id="foot-menu-1" class="foot-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-1',
					) );
				?>
				</div>
			<div id="foot-menu-2" class="foot-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-2',
					) );
				?>
			</div>
			<div id="foot-menu-3" class="foot-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-3',
					) );
				?>
			</div>
			<div id="foot-menu-4" class="foot-menu">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-4',
					) );
				?>
			</div>
		</div>
		<div class="site-info">
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bygone' ), 'bygone', 'Emily | Ajay | Vasu' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
