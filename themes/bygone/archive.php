<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bygone
 */

get_header();
?>

	<div id="primary" class="content-area grid-x">
		<main id="main" class="site-main cell large-10 large-offset-1 medium-10 medium-offset-1 small-10 small-offset-1 grid-padding-x">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title archive-title">', '</h1>' );
				// the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				// the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				?>
				<div>
					<?php
					/*
					* Include the Post-Type-specific template for the content.
					* If you want to override this in a child theme, then include a file
					* called content-___.php (where ___ is the Post Type name) and that will be used instead.
					*/
					get_template_part( 'template-parts/content', get_post_type() );
					?>
				</div>

				<?php
				
			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
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
