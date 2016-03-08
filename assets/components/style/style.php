<?php
/**
 * Styles Enqueue
 *
 * This file is for enqueuing styles of the theme.
 *
 * @since 	1.0.0
 * @package AIWP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 *
 * Styles: Frontend with no conditions, Add Custom styles to wp_head
 *
 * @since  1.0
 *
 */
add_action('wp_enqueue_scripts', 'aiwp_styles'); // Add Theme Stylesheet
function aiwp_styles() {

    /**
     * Minified and Concatenated styles
     */
    wp_register_style('aiwp_style', AIWP_THEME_DIR . '/style.css', array(), '1.0', 'all');
    wp_enqueue_style('aiwp_style'); // Enqueue it!


    /**
     * Google fonts
     * 
     * Must be included this way to avoid Firefox issues.
     */
    // wp_register_style('aiwp_gfonts', 'http://fonts.googleapis.com/css?family=Open+Sans:300,800,400', array(), '1.0', 'all');
    // wp_enqueue_style('aiwp_gfonts'); // Enqueue it!


    /**
     * Non-minified or non-concatenated styles
     */

    // wp_register_style('aiwp_xyz_css', AIWP_THEME_DIR . '/assets/css/vendor/xyz.css', array(), '1.0', 'all');
    // wp_enqueue_style('aiwp_xyz_css'); // Enqueue it!
    // 

}