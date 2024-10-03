<?php

	if ( ! function_exists( 'theme_setup' ) ) :
		//Sets up theme defaults and registers support for various WordPress features.
		// Note that this function is hooked into the after_setup_theme hook, which
		// runs before the init hook. The init hook is too late for some features, such
		// as indicating support for post thumbnails.
		function theme_setup() {
			
			load_theme_textdomain( 'thetesttask', get_template_directory() . '/languages' );
			add_theme_support( 'automatic-feed-links' );
			add_theme_support( 'title-tag' );
			add_theme_support( 'post-thumbnails' );

			register_nav_menus( array(
				'main-menu' => esc_html__( 'Main menu', 'main_menu' )
			) );
			
			add_theme_support( 'html5', array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'menus'
			) );
		}
	endif;

	add_action( 'after_setup_theme', 'theme_setup' );

	function theme_scripts() {
		
		wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css' );
		wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.1', true );
	}

	add_action ( 'wp_enqueue_scripts', 'theme_scripts' );
	/* ACF Options */
	if ( function_exists( 'acf_add_options_page') ) {
		
		acf_add_options_page( array (
			'page_title'    => 'Header',
			'menu_title'    => 'Header',
			'menu_slug'     => 'header',
			'icon_url'      => 'dashicons-editor-justify'
		) );
	}
?>