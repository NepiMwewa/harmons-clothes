<?php

//functions
function aerospace_museum_styles() {
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_script( 'menuToggle', get_template_directory_uri() . '/js/menuToggle.js', array(), '1.0.0', true );
  wp_enqueue_script( 'modalToggle', get_template_directory_uri() . '/js/modalToggle.js', array(), '1.0.0', true );
}
add_action('wp_enqueue_scripts', 'aerospace_museum_styles', 15);


function wpdocs_custom_excerpt_length( $length ) {
	return 55;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function nd_dosth_theme_setup() {

    // Add <title> tag support
    add_theme_support( 'title-tag' );

    // Add custom-logo support
    add_theme_support( 'custom-logo' );

    //Theme Options
		add_theme_support('widgets');

  
	// Editor Color Palette
	add_theme_support( 'editor-color-palette', array(
		array(
			'name'  => __( 'Neon Blue', 'harmon-creation' ),
			'slug'  => 'neon-blue',
			'color'	=> '#00A8E8',
		),
		array(
			'name'  => __( 'Neon Red', 'harmon-creation' ),
			'slug'  => 'neon-red',
			'color' => '#C94C4A',
		),
		array(
			'name'  => __( 'Dark', 'harmon-creation' ),
			'slug'  => 'dark',
			'color' => '#2D3135',
		),
		array(
			'name'	=> __( 'Dark Lighter', 'harmon-creation' ),
			'slug'	=> 'dark-lighter',
			'color'	=> '#32383D',
		),
    array(
			'name'	=> __( 'Light', 'harmon-creation' ),
			'slug'	=> 'light',
			'color'	=> '#EFEFEF',
		),
    array(
			'name'	=> __( 'Light Darker', 'harmon-creation' ),
			'slug'	=> 'light-darker',
			'color'	=> '#e7e7e7',
		),
		array(
			'name'	=> __( 'White Light', 'harmon-creation' ),
			'slug'	=> 'white-light',
			'color'	=> '#ffffff',
		),
		array(
			'name'	=> __( 'Alt Blue', 'harmon-creation' ),
			'slug'	=> 'alt-blue',
			'color'	=> '#007EA7',
		),
		array(
			'name'	=> __( 'Deep Blue', 'harmon-creation' ),
			'slug'	=> 'deep-blue',
			'color'	=> '#312490',
		)
	) );
}
add_action( 'after_setup_theme', 'nd_dosth_theme_setup');

function mytheme_post_thumbnails() {
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_post_thumbnails' );

// nav functions
register_nav_menus(array(
  'primary' => __('Header Menu'),
  'footer-1' => __('Footer 1 Menu'),
	'footer-2' => __('Footer 2 Menu'),
  'privacy' => __('Privacy Menu'),
));

//Register Sidebars
function my_sidebars(){

  register_sidebar(
    array(
      'name' => 'Footer Section',
      'id' => 'footer-area',
    )
  );
	register_sidebar(
    array(
      'name' => 'Copyright Section',
      'id' => 'copyright-area',
    )
  );
  }

add_action('widgets_init', 'my_sidebars');

include('custom-shortcodes.php');

