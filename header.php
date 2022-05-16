<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DeimundDesignshero
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>
<body <?php body_class( get_user_class( 'body' ) ); ?> >
<div id="page" class="site <?php echo get_user_class('site'); ?>">
	<div class="<?php echo get_user_class('site-inner'); ?> ">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'deimunddesignshero' ); ?></a>
	<header id="masthead"  
					<?php if( is_front_page() ): ?>
          class="site-header front_page
							<?php echo get_user_class('header'); ?>"
					style="background:url(<?echo dd_get_featured_image() ?>) no-repeat 0px 0px;
									 background-size:cover; background-position:center"
					<?php elseif( ! is_front_page()): ?>
          class="site-header 
							<?php echo get_user_class('header'); ?>"
					style="background:url(<?php header_image(); ?>) no-repeat 0px 0px;
									 background-size:cover;"
					<?php endif; ?>
		>
		<div class="site-branding container-fluid">
			<div class="row branding-row no-gutters
									<?php echo get_user_class('branding-row'); ?>
									">
				<div class= "logo-container col-sm-4">
					<?php the_custom_logo(); ?>
				</div><!-- .logo-container -->				
				<div class="fluid-container nav-container col-sm-8">
		
	<nav id="site-navigation" class="main-navigation navbar navbar-expand-sm navbar-toggleable-md navbar-dark bg-faded <?php echo get_user_class('navigation'); ?>">
		<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#nav-content" aria-controls="nav-content" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>




	
	<!-- Links --> 
	<?php
					wp_nav_menu( array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'menu_class' 		 => 'navbar-nav ml-auto mt-2 mt-lg-0',
						'container_class' => 'collapse navbar-collapse menu-primary-container',
						'container_id' 	 => 'nav-content'
					) );
				?>
	</nav>

</div>		
			</div><!-- .branding-row -->
		</div><!-- .site-branding -->
<?php if( ! is_front_page() ): ?>
	</header><!-- #masthead -->

	<div id="content" class="<?php echo get_user_class('content'); ?>">
<?php endif; ?>