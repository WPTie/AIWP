<?php
/**
 * Menu Initializer
 *
 * This file is used to initialize all the custom menus of the theme.
 *
 * @since 	1.0.0
 * @package AIWP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/**
 * Custom Walker Class (Sample)
 *
 * Sample walker class description
 */
if ( file_exists( AIWP_THEME . '/assets/components/menu/walker-sample.php' ) ) {
    require_once( AIWP_THEME . '/assets/components/menu/walker-sample.php' );
}