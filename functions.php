<?php

// enqueue scripts and styles
function enqueue_everything ()
{

	// register build.js & main.scss
	wp_register_script( 'Build', get_template_directory_uri().'/assets/javascripts/build.js', array('jquery'), '1', true );
	wp_register_style( 'Main', get_template_directory_uri().'/assets/stylesheets/main.css' );

	// enqueue build.js & main.css
	wp_enqueue_script( 'Build' );
	wp_enqueue_style( 'Main' );

}

add_action( 'wp_enqueue_scripts', 'enqueue_everything' );

register_nav_menus( array (
	'main_menu' => 'Main Menu',
	'footer_menu' => 'Footer Menu',
));

if ( function_exists( 'add_image_size' ) ) {
	add_image_size( 'wide', 1920, 400, true ); //(cropped)
}

?>
