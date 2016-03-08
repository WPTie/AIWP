<?php
/**
 * Page Template
 * 
 * The template used for displaying page content in page.php
 *
 * @since 	1.0.0
 * @package AIWP
 */
?>

<article class="aiwp_page">

	<h1 class="entry-title"> <?php the_title(); ?> </h1>

	<div class="aiwp_content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'AIWP' ),
				'after'  => '</div>',
			) );
		?>

	</div>
	<!-- /.aiwp_content -->

</article>
<!-- /.aiwp_page -->
