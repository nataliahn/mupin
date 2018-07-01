<?php
	/*-----------------------------------------------------------------------------------*/
	/* This file will be referenced every time a template/page loads on your Wordpress site
	/* This is the place to define custom fxns and specialty code
	/*-----------------------------------------------------------------------------------*/

// Define the version so we can easily replace it throughout the theme
define( 'MUPIÑ THEME', 1.0 );

/*-----------------------------------------------------------------------------------*/
/*  Set the maximum allowed width for any content in the theme
/*-----------------------------------------------------------------------------------*/
if ( ! isset( $content_width ) ) $content_width = 900;

/*-----------------------------------------------------------------------------------*/
/* Add Rss feed support to Head section
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );

/*-----------------------------------------------------------------------------------*/
/* Add post thumbnail/featured image support
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );

/*-----------------------------------------------------------------------------------*/
/* Register main menu for Wordpress use
/*-----------------------------------------------------------------------------------*/
// register_nav_menus( 
// 	array(
// 		'primary'	=>	__( 'Primary Menu', 'mupiñ' ), // Register the Primary menu
// 		// Copy and paste the line above right here if you want to make another menu, 
// 		// just change the 'primary' to another name
// 	)
// );

function register_my_menus() {
	register_nav_menus(
	  array(
		'header-menu' => __( 'Header Menu' ),
		'footer-menu' => __( 'Footer Menu' )
	  )
	);
  }
  add_action( 'init', 'register_my_menus' );

/*-----------------------------------------------------------------------------------*/
/* Activate sidebar for Wordpress use
/*-----------------------------------------------------------------------------------*/
function naked_register_sidebars() {
	register_sidebar(array(				// Start a series of sidebars to register
		'id' => 'sidebar', 					// Make an ID
		'name' => 'Sidebar',				// Name it
		'description' => 'Take it on the side...', // Dumb description for the admin side
		'before_widget' => '<div>',	// What to display before each widget
		'after_widget' => '</div>',	// What to display following each widget
		'before_title' => '<h3 class="side-title">',	// What to display before each widget's title
		'after_title' => '</h3>',		// What to display following each widget's title
		'empty_title'=> '',					// What to display in the case of no title defined for a widget
		// Copy and paste the lines above right here if you want to make another sidebar, 
		// just change the values of id and name to another word/name
	));
} 
// adding sidebars to Wordpress (these are created in functions.php)
add_action( 'widgets_init', 'naked_register_sidebars' );

/*-----------------------------------------------------------------------------------*/
/* Enqueue Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function mupin_styles()  { 

	// Mupin directory style.css 
	wp_enqueue_style('style.css', get_stylesheet_directory_uri() . '/assets/css/styles.css');
	wp_enqueue_style('bootstrap.min.css', get_stylesheet_directory_uri() . '/assets/css/libs/bootstrap.min.css');
	wp_enqueue_style('owl.carousel.min.css', get_stylesheet_directory_uri() . '/assets/css/libs/owl.carousel.min.css');
	wp_enqueue_style('owl.theme.default.css', get_stylesheet_directory_uri() . '/assets/css/libs/owl.theme.default.css');
	
	// Mupin Typography
	wp_enqueue_style( 'wpb-google-fonts1', '<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">', false );
	wp_enqueue_style( 'wpb-google-fonts2', '<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">', false );  

}

add_action( 'wp_enqueue_scripts', 'mupin_styles' ); // Register this fxn and allow Wordpress to call it automatcally in the header

// Definimos la función
function mupin_scripts() {

	wp_register_script( 'jquery-3.3.1.min.js', get_template_directory_uri() . '/js/libs/jquery-3.3.1.min.js');
	wp_register_script( 'bootstrap.min.js', get_template_directory_uri() . '/js/libs/bootstrap.min.js');
	wp_register_script( 'owl.carousel.js', get_template_directory_uri() . '/js/libs/owl.carousel.js');
	wp_register_script( 'owl.carousel.min.js', get_template_directory_uri() . '/js/libs/owl.carousel.min.js');
	wp_register_script( 'jquery.countdown.js', get_template_directory_uri() . '/js/libs/jquery.countdown.js');
	wp_register_script( 'jquery.countdown.min.js', get_template_directory_uri() . '/js/libs/jquery.countdown.min.js');
	wp_register_script( 'functions.js', get_template_directory_uri() . '/js/functions.js');
	
	// Una vez que registramos el script debemos colocarlo en la cola de WordPress
	wp_enqueue_script( 'jquery-3.3.1.min.js' );
	wp_enqueue_script( 'bootstrap.min.js' );
	wp_enqueue_script( 'owl.carousel.js' );
	wp_enqueue_script( 'owl.carousel.min.js' );
	wp_enqueue_script( 'jquery.countdown.js' );
	wp_enqueue_script( 'jquery.countdown.min.js' );
	wp_enqueue_script( 'functions.js' );
}
	
// Agregamos la función a la lista de cargas de WordPress.
add_action( 'wp_enqueue_scripts', 'mupin_scripts' );
	
