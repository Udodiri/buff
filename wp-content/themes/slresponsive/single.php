<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format() );


			the_post_navigation();

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;		



		endwhile; // End of the loop.
		?>

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