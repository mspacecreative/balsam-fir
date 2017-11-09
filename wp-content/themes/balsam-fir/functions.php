<?php

/* MAIN STYLESHEET */
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

/* FOOTER SCRIPTS */
function footer_scripts() 
{
	wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
}
add_action('init', 'footer_scripts');
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/* OPTIONS MENU */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
	acf_add_options_sub_page('General Information');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
}

/* DEREGISTER JQUERY IN HEAD
if ( !is_admin() ) wp_deregister_script('jquery'); */