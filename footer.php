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

	<footer id="colophon" class="site-footer band" role="contentinfo">
<div class='social-buttons'>
<a href="<?php echo esc_url('https://www.facebook.com/groups/417324151803310/', 'eco'); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/f_button.png" width="45px" height="45px" alt="facebook" /></a>
<a href="<?php echo esc_url('https://twitter.com/ecostagepledge', 'eco' ); ?>"><img src="<?php echo get_stylesheet_directory_uri();?>/img/t_button.png" width="45px" height="45px" alt="twitter" /></a>
</div>
		<div class="site-info">
			Site: <a href="<?php echo esc_url( __( 'http://madeso.uk/r/eco/', 'eco' ) ); ?>">made<strong>so</strong></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
