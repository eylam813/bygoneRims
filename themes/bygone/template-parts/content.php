<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package bygone
 */

?>

<article id="post-<?php the_ID(); ?>" class="theBlogs grid-x grid-margin-x"<?php post_class(); ?>>
	<header class="entry-header cell large-8 large-offset-2 small-12">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta authorText">
				<?php
				// bygone_posted_on();
				// bygone_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->


	<img class="cell large-4 large-offset small-12 post-feature-image" src=" <?php echo get_the_post_thumbnail_url(); ?>" alt="">
	

	<div class="entry-content large-8 small-12">
		<?php
		if ( is_singular() ) :
					the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bygone' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
		else :
			the_excerpt( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bygone' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );
		endif;



		



		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bygone' ),
		// 	'after'  => '</div>',
		// ) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bygone_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
