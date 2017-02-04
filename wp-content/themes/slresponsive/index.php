<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */
$theme_layout = get_theme_mod( 'slresponsive_theme_layout_option', '' );

get_header(); 
?>
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
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				<header class="row">
					<h1 class="page-title screen-reader-text row"><?php single_post_title(); ?></h1>
				</header>

			<?php
			endif;

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
