<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
<div>
<a href="<?php echo esc_url('http://twitter.com', 'eco' ); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/t_button.png" width="30px" height="30px" alt="twitter" /></a>
<a href="<?php echo esc_url('http://facebook.com', 'eco'); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/f_button.png" width="30px" height="30px" alt="facebook" /></a>
</div>
		<div class="site-info">
			Site: <a href="<?php echo esc_url( __( 'http://madeso.uk/r/eco/', 'eco' ) ); ?>">made<strong>so</strong></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
