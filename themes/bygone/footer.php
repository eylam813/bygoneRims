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



	<!-- latest 3 "event" post type for the footer -->

	<div class="grid-x grid-container footer-events">
		<?php
		$args = array(
			'post_type' => 'bygone_theme_event',
			'posts_per_page' => 3,
		);
		// the query
		$events = new WP_Query($args);

		if ($events->have_posts()) :
			// the loop
			while ($events->have_posts()) :
				$events->the_post();
		?>
				<a class="one-footer-event-holder" href=" <?php echo get_permalink() ?>">
					<div class="one-footer-event" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>)">
						<h2 class="large-12"><?php the_title(); ?></h2>
					</div>
				</a>
			<?php endwhile; ?>
			<!-- end of the loop -->
		<?php else : ?>
			<p><?php esc_html__('Sorry, currently no events available.'); ?></p>
		<?php endif; ?>
	</div>

	<?php if (get_theme_mod('bygone_facebook_url') || get_theme_mod('bygone_twitter_url') || get_theme_mod('bygone_instagram_url')) { ?>
		<!-- decorative footer line -->
		<hr id="footer-line">

		<!-- social media footer section -->
		<div id="social-media-icons-container" class="grid-x grid-padding-x large-12 medium-12 small-12">
			<div>
				<h3 id="social-title" class="reset">Connect With Us</h3>
			</div>
			<div id="social-media-icons-inner-container">

				<!-- social links -->

				<div class="social-media">
					<?php if (get_theme_mod('bygone_facebook_url')) { ?>

						<div class="facebook social-icon"><a href=" <?php echo get_theme_mod('bygone_facebook_url'); ?> "> <img src="<?php echo get_template_directory_uri() . '/assets/img/facebook.svg'; ?>" alt="<?php echo esc_html__('Facebook'); ?>"></a></div>
					<?php } ?>

					<?php if (get_theme_mod('bygone_twitter_url')) { ?>

						<div class="instagram social-icon"><a href=" <?php echo get_theme_mod('bygone_instagram_url'); ?> "> <img src="<?php echo get_template_directory_uri() . '/assets/img/instagram.svg'; ?>" alt="<?php echo esc_html__('Instagram'); ?>"></a></div>
					<?php } ?>

					<?php if (get_theme_mod('bygone_twitter_url')) { ?>

						<div class="facebook social-icon"><a href=" <?php echo get_theme_mod('bygone_twitter_url'); ?> "> <img src="<?php echo get_template_directory_uri() . '/assets/img/twitter.svg'; ?>" alt="<?php echo esc_html__('Twitter'); ?>"></a></div>
					<?php } ?>
				</div>


				<?php
				// wp_nav_menu(array(
				// 	'theme_location' => 'footer-social',
				// 	'menu_class' => 'row add-child-border',
				// ));
				?>
			</div>
		</div>
	<?php } ?>
	<!-- quick links section -->
	<div id="quick-links" class="grid-x large-12 medium-12 small-12">
		<div class="cell">
			<h3 id="quick-links-title">Quick Links</h3>
		</div>
		<?php
		if (has_nav_menu('footer-menu-1')) {
			wp_nav_menu(array('theme_location' => 'footer-menu-1'));
		}
		// if ( has_nav_menu(' footer-menu-1 ') ) {
		// 	$args = array(
		// 		'theme_location' => 'footer-menu-1',
		// 		'container' => '',
		// 	);
		// 	wp_nav_menu( $args );
		// }
		?>

		<div id="foot-menu-1" class="foot-menu large-3 medium-3 small-6">
			<?php
			if (has_nav_menu("foot-menu-1")) {
				wp_nav_menu(array(
					'theme_location' => 'foot-menu-1',
					'container_class' => 'footer-menu-cont'
				));
			}
			?>
		</div>
		<div id="foot-menu-2" class="foot-menu large-3 medium-3 small-6">
			<?php
			if (has_nav_menu("foot-menu-2")) {
				wp_nav_menu(array(
					'theme_location' => 'foot-menu-2',
					'container_class' => 'footer-menu-cont'
				));
			}
			?>
		</div>
		<div id="foot-menu-3" class="foot-menu large-3 medium-3 small-6">
			<?php
			if (has_nav_menu("foot-menu-3")) {
				wp_nav_menu(array(
					'theme_location' => 'foot-menu-3',
					'container_class' => 'footer-menu-cont'
				));
			}
			?>
		</div>
		<div id="foot-menu-4" class="foot-menu large-3 medium-3 small-6">
			<?php
			if (has_nav_menu("foot-menu-4")) {
				wp_nav_menu(array(
					'theme_location' => 'foot-menu-4',
					'container_class' => 'footer-menu-cont'
				));
			}
			?>
		</div>
	</div>
	<div class="site-info cell">
		<p>Copyright &copy 20<?php echo date("y") ?> - ByGone Rims</p>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>