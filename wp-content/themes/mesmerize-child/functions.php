<?php

// Enqueue scripts and styles
function mesmerize_child_scripts(){
	wp_enqueue_style( 'mesmerize-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'mesmerize-style' ));
  wp_enqueue_style( 'mesmerize-child-google-fonts','//fonts.googleapis.com/css?family=Special+Elite');
}
add_action( 'wp_enqueue_scripts', 'mesmerize_child_scripts' );
