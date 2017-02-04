<?php
/**
 * slresponsive Theme Customizer.
 *
 * @package slresponsive
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function slresponsive_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
	
	$wp_customize->add_section( 'slresponsive_layout_section' , array(
			'title'      => __('Theme layout','slresponsive'),
			'priority'   => 30,
		) );
		
			$wp_customize->add_setting('slresponsive_theme_layout_option', array(
				'default'        => '2-columns-rs',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'sanitize_theme_layout',
			));
		 
			$wp_customize->add_control('slresponsive_theme_layout_ctrl', array(
				'label'      => __('Layout', 'slresponsive'),
				'section'    => 'slresponsive_layout_section',
				'settings'   => 'slresponsive_theme_layout_option',
				'type'       => 'radio',
				'choices'    => array(
					'1-column' => '1 column',
					'2-columns-ls' => '2 columns left sidebar',
					'2-columns-rs' => '2 columns right sidebar',
					'3-columns' => '3 columns',
				),
			));
/**
 * Header section
 *
		
		$wp_customize->add_section( 'slresponsive_header_section' , array(
			'title'      => __('Header settings','slresponsive'),
			'priority'   => 31,
		) );	


			$wp_customize->add_setting('slresponsive_header_height_option', array(
				'default'        => '700',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'slresponsive_sanitize_text',
			));
		 
			$wp_customize->add_control('slresponsive_header_height_ctrl', array(
				'label'      => __('Height, px', 'slresponsive'),
				'section'    => 'slresponsive_header_section',
				'settings'   => 'slresponsive_header_height_option',
				'type'       => 'text',
			));			
			

			$wp_customize->add_setting('slresponsive_header_heading_color_option', array(
				'default' => '#fff',
				'sanitize_callback' => 'sanitize_hex_color',
			));
		 
			$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize,'slresponsive_header_heading_color_ctrl',array(
						'label' => __('Heading color', 'slresponsive'),
						'section' => 'slresponsive_header_section',
						'settings' => 'slresponsive_header_heading_color_option',
					)
				)
			);	
			

			$wp_customize->add_setting('slresponsive_header_bg_option', array(
					'default'      => '',
					'transport'    => 'refresh',
					'sanitize_callback' => 'slresponsive_validate_image',
				)
			);
			$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'slresponsive_header_bg_ctrl',array(
					'label'    => __('Header background', 'slresponsive'),
					'settings' => 'slresponsive_header_bg_option',
					'section'  => 'slresponsive_header_section',
				)
			)
		); */		
			
/**
 * Social links section
 *
 */			
	$wp_customize->add_section( 'slresponsive_social_links_section' , array(
			'title'      => __('Social links','slresponsive'),
			'priority'   => 32,
		) );
		
			/**
			 * Facebook
			 *
			 */	
			$wp_customize->add_setting('slresponsive_social_links_fb_option', array(
				'default'        => 'http://facebook.com',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'slresponsive_sanitize_text',
			));
		 
			$wp_customize->add_control('slresponsive_social_links_fb_ctrl', array(
				'label'      => __('Facebook', 'slresponsive'),
				'section'    => 'slresponsive_social_links_section',
				'settings'   => 'slresponsive_social_links_fb_option',
				'type'       => 'text',
			));	
			
			/**
			 * Twitter
			 *
			 */			
			$wp_customize->add_setting('slresponsive_social_links_tw_option', array(
				'default'        => 'http://twitter.com',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'slresponsive_sanitize_text',
			));
		 
			$wp_customize->add_control('slresponsive_social_links_tw_ctrl', array(
				'label'      => __('Twitter', 'slresponsive'),
				'section'    => 'slresponsive_social_links_section',
				'settings'   => 'slresponsive_social_links_tw_option',
				'type'       => 'text',
			));
			
			/**
			 * Google Plus
			 *
			 */				
			$wp_customize->add_setting('slresponsive_social_links_gplus_option', array(
				'default'        => 'http://plus.google.com',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'slresponsive_sanitize_text',
			));
		 
			$wp_customize->add_control('slresponsive_social_links_gplus_ctrl', array(
				'label'      => __('Google Plus', 'slresponsive'),
				'section'    => 'slresponsive_social_links_section',
				'settings'   => 'slresponsive_social_links_gplus_option',
				'type'       => 'text',
			));	
			
			/**
			 * Instagram
			 *
			 */				
			$wp_customize->add_setting('slresponsive_social_links_instagram_option', array(
				'default'        => 'http://instagram.com',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'slresponsive_sanitize_text',
			));
		 
			$wp_customize->add_control('slresponsive_social_links_instagram_ctrl', array(
				'label'      => __('Instagram', 'slresponsive'),
				'section'    => 'slresponsive_social_links_section',
				'settings'   => 'slresponsive_social_links_instagram_option',
				'type'       => 'text',
			));
			/**
			 * Github
			 *
			 */				
			$wp_customize->add_setting('slresponsive_social_links_github_option', array(
				'default'        => 'http://github.com',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'slresponsive_sanitize_text',
			));
		 
			$wp_customize->add_control('slresponsive_social_links_github_ctrl', array(
				'label'      => __('Github', 'slresponsive'),
				'section'    => 'slresponsive_social_links_section',
				'settings'   => 'slresponsive_social_links_github_option',
				'type'       => 'text',
			));	
			
			/**
			 * Behance
			 *
			 */				
			$wp_customize->add_setting('slresponsive_social_links_behance_option', array(
				'default'        => 'http://behance.net',
				'capability'     => 'edit_theme_options',
				'sanitize_callback' => 'slresponsive_sanitize_text',
			));
		 
			$wp_customize->add_control('slresponsive_social_links_behance_ctrl', array(
				'label'      => __('Behance', 'slresponsive'),
				'section'    => 'slresponsive_social_links_section',
				'settings'   => 'slresponsive_social_links_behance_option',
				'type'       => 'text',
			));	
			
			
}
add_action( 'customize_register', 'slresponsive_customize_register' );
/**
 * Validation: image
 * Control: text, WP_Customize_Image_Control
 *
 * @uses	wp_check_filetype()		https://developer.wordpress.org/reference/functions/wp_check_filetype/
 * @uses	in_array()				http://php.net/manual/en/function.in-array.php
 */
 
function slresponsive_validate_image( $input, $default = '' ) {
	// Array of valid image file types
	// The array includes image mime types
	// that are included in wp_get_mime_types()
	$mimes = array(
		'jpg|jpeg|jpe' => 'image/jpeg',
		'gif'          => 'image/gif',
		'png'          => 'image/png',
		'bmp'          => 'image/bmp',
		'tif|tiff'     => 'image/tiff',
		'ico'          => 'image/x-icon'
	);
	// Return an array with file extension
	// and mime_type
	$file = wp_check_filetype( $input, $mimes );
	// If $input has a valid mime_type,
	// return it; otherwise, return
	// the default.
	return ( $file['ext'] ? $input : $default );
}

function sanitize_theme_layout( $input ) {
    $valid = array(
        '1-column' => '1 column',
        '2-columns-ls' => '2 columns left sidebar',
        '2-columns-rs' => '2 columns right sidebar',
        '3-columns' => '3 columns',
    );
 
    if ( array_key_exists( $input, $valid ) ) {
        return $input;
    } else {
        return '';
    }
}
function slresponsive_sanitize_text( $input ) {
    return wp_kses_post( force_balance_tags( $input ) );
}
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function slresponsive_customize_preview_js() {
	wp_enqueue_script( 'slresponsive_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'slresponsive_customize_preview_js' );
