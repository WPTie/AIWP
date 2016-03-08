<?php
/**
 * Widget Area: Sidebar
 *
 * Sidebar widget area of the theme.
 *
 * @since 	1.0.0
 * @package AIWP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Register Widget Area: Sidebar.
 *
 * @since 1.0.0
 */
function aiwp_widget_sidebar() {

	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'AIWP' ),
		'id'            => 'aiwp_sidebar',
		'description'   => '',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'aiwp_widget_sidebar' );