<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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
				<h1 class="page-title twelve columns"><?php printf( esc_html__( 'Search Results for: %s', 'slresponsive' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
