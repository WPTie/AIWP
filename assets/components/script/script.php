<?php
/**
 * Scripts Enqueue
 *
 * This file is for enqueuing scripts of the theme.
 *
 * @since   1.0.0
 * @package AIWP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/**
 * Scripts: Frontend with no conditions, Add Custom Scripts to wp_head.
 *
 * @since  1.0.0
 */
add_action('wp_enqueue_scripts', 'aiwp_scripts');

function aiwp_scripts() {

    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {


    	wp_enqueue_script('jquery'); // Enqueue it!


        /**
         * Minified and concatenated scripts
         *
         * @vendors     plugins.min,js
         * @custom      scripts.min.js
         */
        wp_register_script(
            'aiwp_vendorsJs',
            AIWP_THEME_DIR . '/assets/js/vendors.min.js'
        ); // Custom scripts
        wp_enqueue_script('aiwp_vendorsJs'); // Enqueue it!

        wp_register_script(
            'aiwp_customJs',
            AIWP_THEME_DIR . '/assets/js/custom.min.js'
        ); // Custom scripts
        wp_enqueue_script('aiwp_customJs'); // Enqueue it!


        /**
         * Non-minifies scripts
         */
        // wp_register_script('aiwp_abc_js', AIWP_THEME_DIR . '/assets/js/vendor/abc.min.js' ); // Conditional script(s)
        // wp_enqueue_script('aiwp_abc_js'); // Enqueue it!


        /**
         * Enqueue HTML5Shiv and Respond.js IE less than 9.
         */
        wp_register_style( 'ie_html5shiv', AIWP_THEME_DIR . '/js/html5shiv.js' );
        wp_enqueue_style( 'ie_html5shiv');
        wp_style_add_data( 'ie_html5shiv', 'conditional', 'lt IE 9' );

        wp_register_style( 'ie_respond', AIWP_THEME_DIR . '/js/respond.min.js' );
        wp_enqueue_style( 'ie_respond');
        wp_style_add_data( 'ie_respond', 'conditional', 'lt IE 9' );

    }

}


/**
 * Comment Reply js to load only when thread_comments is active.
 *
 * @since  1.0.0
 */
add_action( 'wp_enqueue_scripts', 'aiwp_enqueue_comments_reply' );
function aiwp_enqueue_comments_reply() {
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}