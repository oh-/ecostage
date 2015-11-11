<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package _s
 */

if ( is_active_sidebar( 'frontpage_widgets' ) ) { ?>
<div id="secondary" class="widget-area sidebar-frontpage" role="complementary">
	<?php dynamic_sidebar( 'frontpage-widgets' ); ?>
</div><!-- #secondary -->
<?php	} ?>

