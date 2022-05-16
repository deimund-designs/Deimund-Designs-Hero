<?php
/**
 * DeimundDesignsHero functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package DeimundDesignsHero
 */

if ( ! function_exists( 'deimunddesignshero_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function deimunddesignshero_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on DeimundDesignsHero, use a find and replace
		 * to change 'deimunddesignshero' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'deimunddesignshero', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'deimunddesignshero' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'deimunddesignshero_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'deimunddesignshero_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function deimunddesignshero_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'deimunddesignshero_content_width', 640 );
}
add_action( 'after_setup_theme', 'deimunddesignshero_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function deimunddesignshero_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'deimunddesignshero' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'deimunddesignshero' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
    register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );

    register_sidebar( array(
    'name' => 'Footer Sidebar 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
    
    register_sidebar( array(
    'name' => 'Footer Sidebar 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'deimunddesignshero_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function deimunddesignshero_scripts() {
		// loads bootstrap scripts and dependancies
		
	wp_enqueue_script( 'popper', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), null, true );
	wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js', array(), null, true );
	wp_enqueue_script( 'bootstrap-js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js' );

	
	// loads bootstrap sylesheet
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' );
	//user-defined stylesheet
	wp_enqueue_style( 'deimunddesignshero-style', get_stylesheet_uri() );

	wp_enqueue_script( 'deimunddesignshero-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'deimunddesignshero-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	
	wp_enqueue_script( 'deimunddesignshero-scripts', get_template_directory_uri() . '/js/scripts.js', array(), null, true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'deimunddesignshero_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* Adds img-responsive class to the logo
**/
function change_logo_class($html)
{
	$html = str_replace('class="custom-logo"', 'class="custom-logo img-fluid"', $html);
	return $html;
}

add_filter('get_custom_logo','change_logo_class');

/**
* Create user tags and set them
**/
function get_user_class( $arg ){
	if( is_front_page() ): 
		switch($arg){
			case 'body': 		return 'front-page-body';
			case 'site': 		return 'front-page-site';
			case 'header': 	return 'front-page-header';
			case 'navigation': 		return 'front-page-navigation';
			case 'content': return 'front-page-content';
			case 'site-inner': return 'front-page-site-inner';
		}
	else:
		switch($arg){
			case 'body': 		return 'default-body';
			case 'site': 		return 'site';
			case 'header': 	return 'default-header';
			case 'nav': 		return 'default-navigation';
			case 'content': return 'site-content';
			case 'site-inner': return 'site-inner';
			case 'branding-row': return 'justify-content-center';
		}
	endif;
}

add_filter( 'kdmfi_featured_images', function( $featured_images ) {
    $args = array(
        'id' => 'featured-image-2',
        'desc' => '',
        'label_name' => 'Featured Image 2',
        'label_set' => 'Set featured image 2',
        'label_remove' => 'Remove featured image 2',
        'label_use' => 'Set featured image 2',
        'post_type' => array( 'dd_restored_item' ),
    );

    $featured_images[] = $args;

    return $featured_images;
});


function dd_get_featured_image() {
    //Execute if singular
    if ( is_singular() ) {

        $id = get_queried_object_id ();

        // Check if the post/page has featured image
        if ( has_post_thumbnail( $id ) ) {

            // Change thumbnail size, but I guess full is what you'll need
            $image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' );

            $url = $image[0];

        } else {

            //Set a default image if Featured Image isn't set
            $url = '';

        }
    }

    return $url;
}