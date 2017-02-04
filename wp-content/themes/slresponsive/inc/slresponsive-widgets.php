<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function slresponsive_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'slresponsive' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar Left', 'slresponsive' ),
		'id'            => 'sidebar-left',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top', 'slresponsive' ),
		'id'            => 'footer-widget-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="footer-widget three columns %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title">',
		'after_title'   => '</h6>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Bottom', 'slresponsive' ),
		'id'            => 'footer-widget-2',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="footer-widget six columns push_three %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h6 class="widget-title hide-widget-title">',
		'after_title'   => '</h6>',
	) );
}
add_action( 'widgets_init', 'slresponsive_widgets_init' );


