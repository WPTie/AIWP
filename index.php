<?php
/**
 * Index Template
 * 
 * The blog page.
 *
 * @since 	1.0.0
 * @package AIWP
 */

get_header(); ?>


	<div class="aiwp_wrap">

		<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'assets/views/content' ) ?>

				<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'assets/views/content', 'none' ); ?>

		<?php endif; ?>

	</div>
	<!-- /.aiwp_wrap -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>