<?php
/**
 * Search Template
 * 
 * The template for displaying search results pages.
 *
 * @since 	1.0.0
 * @package AIWP
 */

get_header(); ?>

	<section class="aiwp_search">

		<?php if ( have_posts() ) : ?>

			<div class="aiwp_header">

				<h1 class="aiwp_h1">
					<?php printf( esc_html__( 'Search Results for: %s', 'AIWP' ), '<span>' . get_search_query() . '</span>' ); ?>
				</h1>
				<!-- /.aiwp_h1 -->

			</div>
			<!-- /.aiwp_header -->

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'assets/views/content', get_post_format() ); ?>

			<?php endwhile; ?>

		<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'assets/views/content', 'none' ); ?>

		<?php endif; ?>

	</section>
	<!-- /.aiwp_search -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>