<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );

}

function footer_scripts() 
{
	wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
			
	/*wp_register_script('parallax-js', get_template_directory_uri() . '/js/dzsparallaxer.js', array('jquery'), null, true);
	wp_enqueue_script('parallax-js');*/
}
add_action('init', 'footer_scripts');

/* OPTIONS MENU */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
	acf_add_options_sub_page('General Information');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
	
}