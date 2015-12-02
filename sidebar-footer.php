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
<?php echo '<h3>'. wp_sidebar_description ( 'footer_items' ) .'</h3>'; ?>
<div class="content">
	<?php dynamic_sidebar( 'footer_items' ); ?>
</div>
</div><!-- #secondary -->
