<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */
$theme_layout = get_theme_mod( 'slresponsive_theme_layout_option', '' );

get_header(); ?>
<div class="site-content row">

<?php 
if	  ($theme_layout == '1-column')		{echo '<div id="primary" class="content-area twelve columns">';}
elseif($theme_layout == '2-columns-rs') {echo '<div id="primary" class="content-area nine columns columns">';}
elseif($theme_layout == '2-columns-ls') {echo '<div id="primary" class="content-area ten columns push_two columns">';}
elseif($theme_layout == '3-columns')	{echo '<div id="primary" class="content-area seven columns push_two columns">';}
else  									{echo '<div id="primary" class="content-area nine columns columns">';}

?>
		<main id="main" class="site-main row" role="main">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header row">
				<?php
					the_archive_title( '<h1 class="page-title eight columns">', '</h1>' );
					the_archive_description( '<div class="taxonomy-description eight columns">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
if($theme_layout == '1-column'){
}
elseif($theme_layout == '2-columns-ls'){
	get_sidebar('left');	
}
elseif($theme_layout == '2-columns-rs'){
	get_sidebar();	
}
elseif ($theme_layout == '3-columns'){
	get_sidebar('left');
	get_sidebar();	
}
else{
	get_sidebar();	
}
get_footer();
