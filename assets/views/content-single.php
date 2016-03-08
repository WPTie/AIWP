<?php
/**
 * Single Template
 * 
 * @since 	1.0.0
 * @package AIWP
 */
?>

<article class="aiwp_single">

	<h1 class="aiwp_single__title"><?php the_title(); ?></h1>

	<div class="aiwp_single__meta">

		<?php aiwp_posted_on(); ?>

	</div>
	<!-- /.aiwp_single__meta -->

	<div class="aiwp_single__content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="aiwp_pagelinks">' . esc_html__( 'Pages:', 'AIWP' ),
				'after'  => '</div>',
			) );
		?>

	</div>
	<!-- /.aiwp_single__content -->

</article>
<!-- /.aiwp_single -->