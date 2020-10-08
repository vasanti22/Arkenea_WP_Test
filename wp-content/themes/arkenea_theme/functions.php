<?php

	//Root Path For Theme
	if( !defined('THEME_ROOT') ){ define('THEME_ROOT', get_template_directory_uri()); }

	//Includes
	include_once 'includes/remove-junk.php';
	include_once 'includes/meta-tags.php';

	//Theme Support
	if( function_exists('add_theme_support') ){
		// Add Menu Support
	    add_theme_support('menus');

	    // Add Thumbnail Theme Support
	    add_theme_support('post-thumbnails');

	    //Add Image Sizes
	    $thumb_size = array(
	    	array(800, 535),
	    	array(700, 415),
	    	array(700, 535),
	    	array(500, 500),
	    	array(500, 395),
	    	array(500, 525),
	    );

	    foreach ($thumb_size as $key => $value) {
	    	$thumbnail_name = 'thumbnail_' . $value[0] . 'x' . $value[1];
	    	add_image_size( $thumbnail_name, $value[0],  $value[1], true );
	    }

	    //Allow Shortcode In Widget Area
	    add_filter('widget_text','do_shortcode');
	}

	//Register Navigation Location
	function register_theme_menus(){
		register_nav_menus( array(
			'banner-menu'	=>	__('Banner Menu'),
			'footer-menu'	=>	__('Footer Menu')
		) );
	}
	add_action( 'after_setup_theme', 'register_theme_menus' );

	//Load Theme assets
	function theme_assets(){
		wp_enqueue_style( 'thm-bootstrap', THEME_ROOT.'/assets/css/bootstrap.css', $deps = array(), filemtime( get_template_directory().'/assets/css/bootstrap.css' ), $media = 'all' );
		wp_enqueue_style('thm-fonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap', $deps = array(), false, $media = 'all');
		wp_enqueue_style( 'thm-slick', THEME_ROOT.'/assets/css/slick-style.css', $deps = array(), filemtime( get_template_directory().'/assets/css/slick-style.css' ), $media = 'all' );
		wp_enqueue_style( 'thm-stylesheet', THEME_ROOT.'/style.css', $deps = array('thm-bootstrap', 'thm-fonts'), filemtime( get_template_directory().'/style.css' ), $media = 'all' );

		wp_enqueue_script( 'thm-slick-min', THEME_ROOT.'/assets/js/slick.min.js', $deps = array('jquery'), filemtime( get_template_directory().'/assets/js/slick.min.js' ), $in_footer = '' );
		wp_enqueue_script( 'thm-main', THEME_ROOT.'/assets/js/main.js', $deps = array(), filemtime( get_template_directory().'/assets/js/main.js' ), $in_footer = true );
	}
	add_action( 'wp_enqueue_scripts', 'theme_assets' );



	