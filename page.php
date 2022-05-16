<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DeimundDesignsHero
 */

get_header(); ?>

	<div id="primary" class="content-area default-content-area">
		<main id="main" class="site-main">


<?php // The loop
	if(have_posts()):
    while(have_posts()): 
    	the_post();
     	the_content();
    endwhile;
	endif;

wp_reset_postdata();

get_footer();