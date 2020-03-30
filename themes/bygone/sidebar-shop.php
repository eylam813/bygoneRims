<?php
/**
 * The sidebar containing the widget area for the shop page
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bygone
 */

if ( ! is_active_sidebar( 'shopSidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<?php dynamic_sidebar( 'shopSidebar' ); ?>
</aside><!-- #secondary -->
