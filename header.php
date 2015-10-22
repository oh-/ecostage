<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package _s
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', '_s' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="site-logo-wrapper">
			<div class="site-logo">
				<img src="<?php echo get_stylesheet_directory_uri()?>/img/logo.png" />
			</div><!-- .site-logo -->
			<div id="sitetitle2"><h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</div><!-- #sitetitle2 -->
		</div><!-- .site-logo-wrapper -->
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', '_s' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
<?php if (is_home()) { ?>
		<div class="site-branding">
			<h1 class="site-call"><?php echo get_theme_mod('_s_cta_text'); ?></h2>
			<a href="<?php echo get_theme_mod('_s_cta_link'); ?>"><?php echo get_theme_mod('_s_cta_link_text'); ?></a>


		</div><!-- .site-branding -->
<?php } ?>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
