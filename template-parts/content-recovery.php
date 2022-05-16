<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _s
 */
?>
<?php
/**
 * This section controls output of site-description
 **/
?>			
			<?php $description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>

			<?php the_content(); ?>

			<?php wp_reset_postdata(); ?>
	</header><!-- #masthead -->

	<div id="content" class="<?php echo get_user_class('content'); ?>">
			<div id="primary" class="content-area front-page-content-area ">
		<main id="main" class="front-page-main ">



