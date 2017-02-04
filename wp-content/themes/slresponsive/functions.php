<?php
/**
 * slresponsive functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package slresponsive
 */

if ( ! function_exists( 'slresponsive_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function slresponsive_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on slresponsive, use a find and replace
	 * to change 'slresponsive' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'slresponsive', get_template_directory() . '/languages' );

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
	
	/*
	 * Enable support for site logo.
	 */
	add_image_size( 'slresponsive-logo', 270, 60 );
	add_theme_support( 'custom-logo', array( 'size' => 'slresponsive-logo', 'flex-height' => true, 'flex-width'  => true, 'header-text' => array( 'site-title', 'site-description' ) ) );

	
	
	/* Enable editor-style.css
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_editor_style();
	
	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'slresponsive' ),
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

	/*
	 * Enable support for Post Formats.
	 * See https://developer.wordpress.org/themes/functionality/post-formats/
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'gallery',
		'link',
		'image',
		'quote',
		'status',
		'video',
		'audio',
		'chat'
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'slresponsive_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}

endif;
add_action( 'after_setup_theme', 'slresponsive_setup' );
	
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function slresponsive_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'slresponsive_content_width', 640 );
}
add_action( 'after_setup_theme', 'slresponsive_content_width', 0 );

/*function slresponsive_customizer_css() {
	
	if ( 0 < count( strlen( ( $background_image_url = get_theme_mod( 'slresponsive_header_bg_option' ) ) ) ) ); 
	
    echo '<style type="text/css">';
	
	if($background_image_url){
        echo '.custom-header { 
				background-image: url("' . $background_image_url . '");';
				
			if(!get_theme_mod( 'slresponsive_header_height_option')){
				echo 'height: 700px;';
			}
			else {
				echo 'height: ' . get_theme_mod( 'slresponsive_header_height_option') . 'px';
			} 
			echo '}';
			
			echo '.navbar {
				background: rgba(0,0,0,0);
			}';
		}
		
		
        echo '.site-header .header-heading h1{ 
			color: ' . get_theme_mod( 'slresponsive_header_heading_color_option') . '; 
		}';
		

    echo '</style>';

}
add_action( 'wp_head', 'slresponsive_customizer_css' );*/

/**
 * Meta-box init
 */
require get_template_directory() . '/inc/meta-box-init.php';


/**
 * Include the TGM_Plugin_Activation class.
 */
require_once get_template_directory() . '/inc/class-tgm-plugin-activation.php';

/**
 * Admin Notices
 */
require_once get_template_directory() . '/inc/admin-notices.php';

/**
 * Register the required plugins
 */
require_once get_template_directory() . '/inc/required-plugins.php';

/**
 * Display upgrade notice on customizer page.
 */
require get_template_directory() . '/inc/customizer-pro-link.php';

/**
 * SlResponsive widgets.
 */
require get_template_directory() . '/inc/slresponsive-widgets.php';

/**
 * SlResponsive scripts.
 */
require get_template_directory() . '/inc/slresponsive-scripts.php';

/**
 * Custom search form.
 */
require get_template_directory() . '/inc/custom-search-form.php';

/**
 * Custom menu walker.
 */
require get_template_directory() . '/inc/new-walker.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
