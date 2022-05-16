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
			<div class = "home-item-container container-fluid">
				<div class = "home-item-row row">
					
			<?php $args = array( "posts_per_page" => -1,"post_type" => "dd_home_item" );
			$home = get_posts( $args ); 
			foreach ( $home as $post ) : setup_postdata( $post ); ?>


					<div class = "col-sm-4 home-item-wrapper" style="background:url(<?echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>) no-repeat 0px 0px;
									 background-size:cover;">
						<?php the_content(); ?>
					</div><!-- .home-item-wrapper -->



			<?php endforeach; /*ends home items loop */?>
	
				</div><!-- .home-item-row -->
			</div><!-- .home-item-container -->

<?php wp_reset_postdata(); ?>


