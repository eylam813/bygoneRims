<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bygone
 */

get_header();
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php
		while (have_posts()) :
			the_post();
		?>
			<div class="grid-x">
				<div class="cell large-10 large-offset-1 medium-10 medium-offset-1 small-12 grid-padding-x">
					<?php


					get_template_part('template-parts/content', get_post_type());

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if (comments_open() || get_comments_number()) :
						comments_template();
					endif;
					?>
				</div>
			</div>

		<?php


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->
<div class="grid-x">
	<div class="cell large-10 large-offset-1 medium-10 medium-offset-1 small-10 small-offset-1 grid-padding-x">
	<?php get_sidebar(); ?>
	</div>
</div>

<?php
get_footer();
