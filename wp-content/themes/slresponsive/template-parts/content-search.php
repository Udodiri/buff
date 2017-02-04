<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row '); ?>>
	<header class="entry-header row">
		<?php the_title( sprintf( '<h4 class="entry-title row"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

		<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta row">
			<?php slresponsive_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-summary row">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

	<footer class="entry-footer row">
		<?php slresponsive_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
