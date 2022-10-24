<?php
/*
Include class-wp-bootstrap-navwalker.php
*/ 
require_once('wp-bootstrap-navwalker.php');
/*
** function to add naqsh theme styles
** wp_enqueue_style()
*/
function naqsh_add_styles(){
	wp_enqueue_style('bootstrap-css',get_template_directory_uri(). '/css/bootstrap.min.css');
	wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );
	wp_enqueue_style('hover',get_template_directory_uri(). '/css/hover-min.css');
	wp_enqueue_style('lightbox',get_template_directory_uri(). '/css/lightbox.min.css');
	wp_enqueue_style('normalize',get_template_directory_uri(). '/css/normalize.css');
	wp_enqueue_style('naqsh-css',get_template_directory_uri(). '/css/naqsh.css');	
}

/*
** function to add naqsh theme scripts
** wp_enqueue_scripts()
*/
function naqsh_add_scripts(){
	
	wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true );
	wp_enqueue_script('bootstrap-js',get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), false, true);
	wp_enqueue_script('naqsh-js',get_template_directory_uri(). '/js/naqsh.js', array(), false, true);
	wp_enqueue_script('html5shiv-js',get_template_directory_uri(). '/js/html5shiv.js');
	wp_enqueue_script('respond.min-js',get_template_directory_uri(). '/js/respond.min.js');
	wp_enqueue_script('nicescroll',get_template_directory_uri(). '/js/jquery.nicescroll.min.js');
	wp_enqueue_script('lightbox',get_template_directory_uri(). '/js/lightbox-plus-jquery.min.js');
}



/**
** Add custom menu support
**/
function naqsh_register_custom_menu(){
	register_nav_menus(array(
		'bootstrap_menu' => 'Navigation Bar',
		'footer_menu'    => 'Footer Menu'
	));	
}
function naqsh_bootstrap_menu(){
	wp_nav_menu(array(
		'theme_location' => 'bootstrap-menu',
		'menu_class'     => 'navbar-nav mr-auto',
		'container'		 => false,
		'depth'			 => 2,
		'walker'		 => new wp_bootstrap_navwalker()
	));
}
 /*
** add_action
*/
// add css style
add_action('wp_enqueue_scripts', 'naqsh_add_styles');
// add js script 
add_action('wp_enqueue_scripts', 'naqsh_add_scripts');
// register custom menus
add_action('init', 'naqsh_register_custom_menu');
