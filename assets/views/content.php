<?php
/**
 * @since 	1.0.0
 * @package AIWP
 */
?>


<article class="aiwp_content">

	<h1 class="aiwp_content__title">
		<a href="<?php the_permalink(); ?>">

			<?php the_title(); ?>

		</a>
	</h1>


	<div class="aiwp_content__content">

		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="aiwp_pagelinks">' . esc_html__( 'Pages:', 'AIWP' ),
				'after'  => '</div>',
			) );
		?>

	</div>
	<!-- /.aiwp_content__content -->

</article>
<!-- /.aiwp_content -->