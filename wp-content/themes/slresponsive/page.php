<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package slresponsive
 */
$page_id     = get_queried_object_id();

$page_header = rwmb_meta( 'page-header', $page_id);
$page_heading = rwmb_meta( 'page-heading', $page_id);
$page_sidebar = rwmb_meta( 'page-sidebar', $page_id);
$page_layout = rwmb_meta( 'page-layout', $page_id);

get_header(); ?>
<?php if ($page_layout == 'boxed'):?>
	<div id="content" class="site-content <?php if ($page_heading == 'off'){echo 'no-heading';}?> row">
<?php elseif ($page_layout == 'fullwidth'):?>
	<div id="content" class="site-content  <?php if ($page_heading == 'off'){echo 'no-heading';}?>">
<?php else:?>	
	<div id="content" class="site-content row">
<?php endif;?>

<?php if ($page_layout == 'boxed'):?>
	<?php if ($page_sidebar == 'right-sidebar'):?>
		<div id="primary" class="content-area nine columns">
	<?php elseif ($page_sidebar == 'no-sidebar' ):?>
		<div id="primary" class="content-area twelve columns">
	<?php else :?>	
		<div id="primary" class="content-area nine columns">
	<?php endif?>
<?php elseif ($page_layout == 'fullwidth'):?>
	<div id="primary" class="content-area">
<?php else:?>	
	<?php if ($page_sidebar == 'right-sidebar'):?>
		<div id="primary" class="content-area nine columns">
	<?php elseif ($page_sidebar == 'no-sidebar' ):?>
		<div id="primary" class="content-area twelve columns">
	<?php else :?>	
		<div id="primary" class="content-area nine columns">
	<?php endif?>
<?php endif;?>

		<main id="main" class="site-main" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php

get_sidebar();
get_footer();