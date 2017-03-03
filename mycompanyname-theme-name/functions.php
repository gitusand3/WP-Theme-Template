<?php 

/**
 * Constants
 */
define("THEME_ROOT_URI", get_template_directory_uri() );




// Register Style
function myThemeName_custom_styles() {

	wp_register_style( 
		'goggle-fonts', 
		'https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,800', 
		false, // deps
		null // version
		);
	wp_enqueue_style( 'goggle-fonts' );

	wp_register_style( 
		'bootstrap', 
		THEME_ROOT_URI . '/assets/css/bootstrap.min.css', 
		false, // deps
		null // version
		);
	wp_enqueue_style( 'bootstrap' );

	// wp_register_style( 
	// 	'myThemeName-main', 
	// 	THEME_ROOT_URI . '/assets/css/main.css', 
	// 	array('bootstrap'), // deps
	// 	null // version
	// 	);
	// wp_enqueue_style( 'myThemeName-main' );

	wp_register_style( 
		'font-awesome', 
		THEME_ROOT_URI . '/assets/font-awesome/css/font-awesome.min.css', 
		false, // deps
		null // version
		);
	wp_enqueue_style( 'font-awesome' );

	wp_register_style( 
		'myThemeName-style', 
		THEME_ROOT_URI . '/style.css', 
		array('bootstrap', 'myThemeName-main'), // deps
		null // version
		);
	wp_enqueue_style( 'myThemeName-style' );

}
add_action( 'wp_enqueue_scripts', 'myThemeName_custom_styles' );




// Register Script
function ad_ratings_custom_scripts() {
	/**
	 * De-registers the WordPress stock jquery script, so you can register your own copy 
	 */
	wp_deregister_script( 'jquery' ); 

	wp_register_script( 
		'jquery', 
		THEME_ROOT_URI . '/assets/js/jquery-3.1.1.min.js', 
		null, // deps 
		false, // ver
		false // in_footer
		);
	wp_enqueue_script( 'jquery' );


	wp_register_script( 
		'bootstrap', 
		THEME_ROOT_URI . '/assets/js/bootstrap.min.js', 
		array('jquery'), // deps 
		false, // ver
		true // in_footer
		);
	wp_enqueue_script( 'bootstrap' );


}
add_action( 'wp_enqueue_scripts', 'ad_ratings_custom_scripts' );







/**
 * Add theme support
 * enable features
 */
function myThemeName_add_theme_support (){
	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
		'gallery',
		'status',
		'audio',
		'chat',
	) );

  add_theme_support( 'html5' );

  	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );
}
add_action( 'after_setup_theme', 'myThemeName_add_theme_support' );

