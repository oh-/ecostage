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
  <div id="footer-var" class='band'>
    <div id="social-buttons">
      <a href="<?php echo esc_url('https://www.facebook.com/groups/417324151803310/', 'eco'); ?>" class="sl">f</a>
      <a href="<?php echo esc_url('https://twitter.com/ecostagepledge', 'eco' ); ?>" class="sl">t</a>
    </div>
<?php if (is_front_page()): ?>
    <div id="footer-text-right">
      <p>Join us in building a community of ecologically minded performance makers</p>
    </div>
<?php endif ?>
  </div>
<?php is_front_page() ? get_sidebar('footer'): '' ; ?>
<div class="members-login-footer">
<?php if ( is_user_logged_in() ) {
echo '<a href="/profile/">Edit your profile</a> <br />';
echo '<a href="' . wp_logout_url('/') . '">logout</a>';
} else {
echo '<a href="/profile/">Members Login</a>';
} ?>
</div>
		<div class="site-info">
      Site: <a href="<?php echo esc_url( __( 'http://madeso.uk/', 'eco' ) ); ?>" rel="designer">made<strong>so</strong></a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
