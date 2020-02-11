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

	<footer id="colophon" class="site-footer grid-x">
		<hr id="footer-line">
		<!-- <hr id="footer-line" class="row center-horizontal"> -->
		<div id="social-media-icons-container" class="grid-x grid-padding-x large-12 medium-12 small-12">
			<div>
				<h3 id="social-title" class="reset">Connect With Us</h3>
			</div>
			<div id="social-media-icons-inner-container">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-social',
						'menu_class' => 'row add-child-border',
					) );
				?>
			</div>
		</div>
		<div id="quick-links" class="grid-x large-12 medium-12 small-12">
			<div id="foot-menu-1" class="foot-menu large-3 medium-6 small-12">
				<p>
					<?php 
						wp_get_nav_menu_name( 'footer-menu-1' )
					?>
				</p>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-1',
					) );
				?>
			</div>
			<div id="foot-menu-2" class="foot-menu large-3 medium-6 small-12">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-2',
					) );
				?>
			</div>
			<div id="foot-menu-3" class="foot-menu large-3 medium-6 small-12">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-3',
					) );
				?>
			</div>
			<div id="foot-menu-4" class="foot-menu large-3 medium-6 small-12">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'footer-menu-4',
					) );
				?>
			</div>
		</div>
		<div class="site-info cell">
			<p>Copyright &copy 2020 - ByGone Rims</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
