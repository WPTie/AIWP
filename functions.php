<?php
/**
 * AIWordPress functions and definitions
 *
 * @package AIWP
 */

/**
 * Paths
 *
 * @since  1.0
 */

// Theme Directory
if ( !defined( 'AIWP_THEME' ) ){
    define( 'AIWP_THEME', ABSPATH . 'wp-content/themes/' . get_template() );
}

// Theme Directory URI
if ( !defined( 'AIWP_THEME_DIR' ) ){
    define( 'AIWP_THEME_DIR', get_template_directory_uri() );
}


/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 1000; /* pixels */
}

if ( ! function_exists( 'aiwp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function aiwp_setup() {


	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'AIWP' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'aiwp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; // AIWordPress_setup
add_action( 'after_setup_theme', 'aiwp_setup' );


/**
 * Styles
 *
 * This file contains all enqueued styles of AIWordPress.
 */
if ( file_exists( AIWP_THEME . '/assets/components/style/style.php' ) ) {
    require_once( AIWP_THEME . '/assets/components/style/style.php' );
}


/**
 * Scripts
 *
 * This file contains all enqueued scripts of AIWordPress.
 */
if ( file_exists( AIWP_THEME . '/assets/components/script/script.php' ) ) {
    require_once( AIWP_THEME . '/assets/components/script/script.php' );
}


/**
 * Menus
 *
 * This file initializes the custom menus of AIWordPress.
 */
if ( file_exists( AIWP_THEME . '/assets/components/menu/menu-init.php' ) ) {
    require_once( AIWP_THEME . '/assets/components/menu/menu-init.php' );
}


/**
 * Widgets
 *
 * This file initializes the widgets of AIWordPress.
 */
if ( file_exists( AIWP_THEME . '/assets/components/widget/widget-init.php' ) ) {
    require_once( AIWP_THEME . '/assets/components/widget/widget-init.php' );
}


/**
 * Extras
 *
 * Extras: Custom functions that act independently of the theme templates.
 */
if ( file_exists( AIWP_THEME . '/assets/functions/extras.php' ) ) {
    require_once( AIWP_THEME . '/assets/functions/extras.php' );
}


/**
 * Template Functions
 *
 * Template Functions for this theme.
 */
if ( file_exists( AIWP_THEME . '/assets/functions/template-functions.php' ) ) {
    require_once( AIWP_THEME . '/assets/functions/template-functions.php' );
}