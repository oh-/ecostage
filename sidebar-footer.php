<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _s
 */

// TODO hook this into the theme
if ( ! is_active_sidebar( 'footer_items' ) ) {
	return;
}
?>

<div id="sidebar-footer" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'footer_items' ); ?>
</div><!-- #secondary -->
