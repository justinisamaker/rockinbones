<?php

//Enqueue Stylesheets
function rockinbones_styles() {
	wp_enqueue_style( 'main_css', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'concat-css', get_template_directory_uri(). '/dist/css/main.css');

  if(is_front_page()){
    wp_enqueue_style( 'home-css', get_template_directory_uri(). '/dist/css/pages/home.css');
  } else {
    wp_enqueue_style( 'default-css', get_template_directory_uri(). '/dist/css/pages/default.css');
  }
}
add_action( 'wp_enqueue_scripts', 'rockinbones_styles' );

//Enqueue Scripts
function rockinbones_js() {
  wp_enqueue_script( 'base_js', get_template_directory_uri() . '/dist/js/base.js', array('jquery'), false, false);
}
add_action( 'wp_enqueue_scripts', 'rockinbones_js' );

// Navigation
add_action( 'init', 'register_my_menus' );
function register_my_menus() {
	register_nav_menus(
		array(
			'main-nav' => __( 'Main Navigation' )
		)
	);
}

?>