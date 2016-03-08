<?php
/**
 * Archive Template
 *
 * The template for displaying archive pages.
 * Learn more: @url(http://codex.wordpress.org/Template_Hierarchy).
 *
 * @since 	1.0.0
 * @package AIWP
 */

get_header(); ?>

	<div class="aiwp_wrap">

		<?php if ( have_posts() ) : ?>

			<header class="aiwp_headerblock">

				<h1 class="aiwp_h1"> <?php the_archive_title();?> </h1>
				<div class="aiwp_dsc"> <?php the_archive_description(); ?> </div>

			</header>
			<!-- /.aiwp_headerblock -->

		<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'assets/views/content', get_post_format() ); ?>

				<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'assets/views/content', 'none' ); ?>

		<?php endif; ?>

	</div>
	<!-- /.aiwp_wrap -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>