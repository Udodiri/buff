<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slresponsive
 */

$theme_layout = get_theme_mod( 'slresponsive_theme_layout_option', '' );

?>

<aside id="sidebar-left" class="widget-area two columns
<?php
	if($theme_layout == '3-columns'){
		echo ' pull_seven';	
	}
	elseif($theme_layout == '2-columns-ls'){
		echo ' pull_ten';	
	}
?>" role="complementary">
	<?php dynamic_sidebar( 'sidebar-left' ); ?>
</aside><!-- #sidebar-left -->
