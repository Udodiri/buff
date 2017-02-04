<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slresponsive
 */

$page_id     = get_queried_object_id();

$page_sidebar = rwmb_meta( 'page-sidebar', $page_id);
$page_layout = rwmb_meta( 'page-layout', $page_id);

?>
<?php if ($page_layout == 'boxed'):?>
	<?php if ($page_sidebar == 'right-sidebar'):?>
		<aside id="secondary" class="widget-area three columns" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- #secondary -->
	<?php elseif ($page_sidebar == 'no-sidebar' ):?>

	<?php else :?>
		<aside id="secondary" class="widget-area three columns" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- #secondary -->
	<?php endif;?>
<?php elseif ($page_layout == 'fullwidth'):?>
	
<?php else:?>	
	<?php if ($page_sidebar == 'right-sidebar'):?>
		<aside id="secondary" class="widget-area three columns" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- #secondary -->
	<?php elseif ($page_sidebar == 'no-sidebar' ):?>

	<?php else :?>
		<aside id="secondary" class="widget-area three columns" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</aside><!-- #secondary -->
	<?php endif;?>
<?php endif;?>