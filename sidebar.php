<?php
/**
 * Sidebar Template
 * 
 * The sidebar containing the main widget area.
 *
 * @since 	1.0.0
 * @package AIWP
 */

if ( ! is_active_sidebar( 'aiwp_sidebar' ) ) {
	return;
}
?>

<aside class="aiwp_sidebar">

	<?php dynamic_sidebar( 'aiwp_sidebar' ); ?>

</aside>
<!-- /.aiwp_sidebar -->