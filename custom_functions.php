<?php
/**
 * Bonn Starter Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package BonnJoel
 */

function bonnjoel_addmore_scripts() {
	/*
	 * Enqueue custom scripts and styles
	 */

	if (!is_admin()) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//code.jquery.com/jquery-3.1.1.min.js', false, '3.1.1');
		wp_enqueue_script('jquery');
	}

	wp_enqueue_style( 'bonnjoel_semantic-css', get_template_directory_uri() . '/semantic/dist/semantic.min.css' );
	wp_enqueue_style( 'bonnjoel_mmenu-css', get_template_directory_uri() . '/css/mmenu.css' );
	wp_enqueue_style( 'bonnjoel_lightbox-css', get_template_directory_uri() . '/css/lightbox.css' );
	wp_enqueue_style( 'bonnjoel_ralewayfont', '//fonts.googleapis.com/css?family=Raleway:100,500&amp;subset=latin-ext' );
	wp_enqueue_style( 'bonnjoel-slick', get_template_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'bonnjoel-slick-theme', get_template_directory_uri() . '/slick/slick-theme.css' );
	wp_enqueue_style( 'bonnjoel-style', get_stylesheet_uri() );
	wp_register_style( 'bonnjoel_jsscocials_style', '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css' );
	wp_register_style( 'bonnjoel_jsscocials_style_flat', '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-flat.css' );

	wp_register_script( 'bonnjoel_mmenu-js', get_template_directory_uri() . '/js/mmenu.min.js', array('jquery'), 'v5.6.5', true );
	wp_enqueue_script( 'bonnjoel_slickjs', get_template_directory_uri() . '/slick/slick.min.js', array('jquery'), false, true );
	wp_register_script( 'bonnjoel_lightbox-js', get_template_directory_uri() . '/js/lightbox.js', 'jquery', 'v2.8.2', true );
	wp_register_script( 'bonnjoel_fastclick', get_template_directory_uri() . '/js/fastclick.js', '', '1.0.6' );
	wp_register_script( 'bonnjoel_jssocials', '//cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js', array('jquery'), '1.4.0', false );

	wp_enqueue_script( 'bonnjoel_semantic-js', get_template_directory_uri() . '/semantic/dist/semantic.min.js', array('jquery'), '2.2.10', true );

	wp_enqueue_script( 'bonnjoel_fastclick' );
	wp_enqueue_script( 'bonnjoel_mmenu-js' );
	wp_enqueue_script( 'bonnjoel_tether', '//cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array('jquery'), '1.4.0', true );
	wp_enqueue_script( 'bonnjoel_theme-js', get_template_directory_uri() . '/js/theme.js', array('jquery','bonnjoel_mmenu-js', 'bonnjoel_slickjs', 'bonnjoel_semantic-js'), false, true );
	wp_localize_script( 'bonnjoel_theme-js', 'URL', array(
			'ajaxurl' => admin_url('admin-ajax.php'),
			'api_nonce' => wp_create_nonce( 'wp_rest' ),
            'api_url'   => site_url('/wp-json/wp/v2/')
		) );

}

add_action( 'wp_enqueue_scripts', 'bonnjoel_addmore_scripts' );

function my_acf_init() {

	acf_update_setting('google_api_key', 'AIzaSyAGE4v9pg9sLKZcSf4kSMJzc_itSZpeO2I');
}

add_action('acf/init', 'my_acf_init');
