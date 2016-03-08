<?php
/**
 * Search Template
 * 
 * The template part for displaying results in search pages.
 *
 * @package AIWP
 */
?>

<article class="aiwp_article">

	<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

	<?php if ( 'post' == get_post_type() ) : ?>


		<div class="aiwp_article__meta">

			<?php aiwp_posted_on(); ?>

		</div>
		<!-- /.aiwp_article__meta -->

	<?php endif; ?>

		<div class="aiwp_article__excerpt">

			<?php the_excerpt(); ?>

		</div>
		<!-- /.aiwp_article__excerpt -->

</article>
<!-- /.aiwp_search -->
