<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package _s
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<section id="site-intro">
			<!-- <h1>Hello, world!</h1> -->
		</section> <!-- #site-intro -->
		<main id="main" class="site-main" role="main">
			
<?php 
// $sticky = get_option('sticky_posts');
// check if there are any
// if (!empty($sticky)) {
// 	// override the query 
// 	$args = array(
// 		'post__in' => $sticky
// 	);
// 	query_posts($args);
// 	// the loop	
// 	while ( have_posts() ) : the_post(); 
//
// 	get_template_part( 'content', 'sticky' ); 
//
// 	// If comments are open or we have at least one comment, load up the comment template
// 	if ( comments_open() || get_comments_number() ) :
// 		comments_template();
// 	endif;
// 				
//
//  endwhile; // end of the loop. 
// } 
?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_sidebar('frontpage'); ?>
<?php  get_footer(); ?>
