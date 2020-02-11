<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bygone
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			?>
      
			<!-- took away the class grid-container fron the div below -->
			<div class="grid-x">
				<div class="cell large-10 large-offset-1 medium-10 medium-offset-1 small-10 small-offset-1 grid-padding-x">
				<!-- <div class="cell large-10 large-offset-1 medium-12 "> -->
					<?php get_template_part( 'template-parts/content', 'page' ); ?>
				</div>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
