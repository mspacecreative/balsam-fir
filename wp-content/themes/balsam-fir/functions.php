<?php

/* MAIN STYLESHEET */
function my_theme_enqueue_styles() {

	$parent_style = 'parent-style';
	
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ));
	
	wp_register_style('para-styles', get_stylesheet_directory_uri() . '/js/dzsparallaxer/dzsparallaxer.css', array(), '1.0', 'all');
	wp_enqueue_style('para-styles');
}

/* FOOTER SCRIPTS */
function footer_scripts() {
	
	wp_register_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), null, true);
	wp_enqueue_script('scripts');
	
	wp_register_script('parallax', get_stylesheet_directory_uri() . '/js/dzsparallaxer/dzsparallaxer.js', array('jquery'), '1.0.0', true); // Custom scripts
	wp_enqueue_script('parallax');
	
	wp_register_script('fontawesome', 'https://use.fontawesome.com/6ccd600e51.js', array('jquery'), null, true);
	wp_enqueue_script('fontawesome');
}

/* OPTIONS MENU */
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page();
	
	acf_add_options_sub_page('General Information');
	acf_add_options_sub_page('Header');
	acf_add_options_sub_page('Footer');
}

/* WORDPRESS ADMIN STYLES */
function registerCustomAdminCss(){
	$src = get_stylesheet_directory_uri() . 'css/editor-style.css';
	$handle = "customAdminCss";
	wp_register_script($handle, $src);
	wp_enqueue_style($handle, $src, array(), false, false);
}

/* ENQUEUE STYLES/SCRIPTS */
add_action('init', 'footer_scripts');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('admin_head', 'registerCustomAdminCss');