<?php
/**
 * Enqueue scripts and styles.
 */
function slresponsive_scripts() {
	wp_enqueue_style( 'slresponsive-style', get_stylesheet_uri() );
	
	wp_enqueue_script( 'jquery' );
	
	wp_enqueue_script( 'modernizr-gumby-build', get_template_directory_uri() . '/js/libs/modernizr-2.6.2.min.js', array(), '20151215', false );

	wp_enqueue_script( 'gumby', get_template_directory_uri() . '/js/libs/gumby.js', array(), '20151215', true );
	
	wp_enqueue_script( 'gumby-retina', get_template_directory_uri() . '/js/libs/ui/gumby.retina.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-fixed', get_template_directory_uri() . '/js/libs/ui/gumby.fixed.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-skiplink', get_template_directory_uri() . '/js/libs/ui/gumby.skiplink.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-toggleswitch', get_template_directory_uri() . '/js/libs/ui/gumby.toggleswitch.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-checkbox', get_template_directory_uri() . '/js/libs/ui/gumby.checkbox.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-radiobtn', get_template_directory_uri() . '/js/libs/ui/gumby.radiobtn.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-tabs', get_template_directory_uri() . '/js/libs/ui/gumby.tabs.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-navbar', get_template_directory_uri() . '/js/libs/ui/gumby.navbar.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-validation', get_template_directory_uri() . '/js/libs/ui/jquery.validation.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-init', get_template_directory_uri() . '/js/libs/gumby.init.js', array(), '20151215', true );

	wp_enqueue_script( 'gumby-plugins', get_template_directory_uri() . '/js/plugins.js', array(), '20151215', true );
	wp_enqueue_script( 'gumby-main', get_template_directory_uri() . '/js/main.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'slresponsive_scripts' );
