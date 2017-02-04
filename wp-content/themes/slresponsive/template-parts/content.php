<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row '); ?>>
	<header class="entry-header row">
		
		<?php
			if (!is_single()){
				if ( has_post_thumbnail() ) {
				echo '<div class="post-thumb row">';
				the_post_thumbnail();
				echo '</div>';
			} }
		?>
		
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title row">', '</h1>' );
			} else {
				the_title( '<h4 class="entry-title row"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			}

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta row">
			<?php slresponsive_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content row">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'slresponsive' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links row">' . esc_html__( 'Pages:', 'slresponsive' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer row">
		<?php slresponsive_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
