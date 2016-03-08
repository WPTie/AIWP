<?php
/**
 * Widget Initializer
 *
 * Widget initialization file of theme.
 *
 * @since 	1.0.0
 * @package AIWP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Widget Area
 *
 * Widget area related files.
 */
if ( file_exists( AIWP_THEME .'/assets/components/widget/widget-sidebar.php' ) ) {
    require_once( AIWP_THEME .'/assets/components/widget/widget-sidebar.php' );
}