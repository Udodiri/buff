<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package slresponsive
 */

?>

	</div><!-- #content -->
	
	<?php if ( is_active_sidebar( 'footer-widget-1' ) ):?> 
	
		<div class="footer-top">
			<div class="footer-top-widgets row">
				<?php dynamic_sidebar( 'footer-widget-1' ); ?>
			</div>
		</div>
		
	<?php endif;?>
	
	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-bottom-widget row">
			<?php dynamic_sidebar( 'footer-widget-2' ); ?>
		</div>
		<?php 			
			$social_links_fb = get_theme_mod( 'slresponsive_social_links_fb_option', '' );
			$social_links_tw = get_theme_mod( 'slresponsive_social_links_tw_option', '' );
			$social_links_gplus =  get_theme_mod( 'slresponsive_social_links_gplus_option', '' );
			$social_links_instagram = get_theme_mod( 'slresponsive_social_links_instagram_option', '' );
			$social_links_github = get_theme_mod( 'slresponsive_social_links_github_option', '' );
			$social_links_behance = get_theme_mod( 'slresponsive_social_links_behance_option', '' );
		?>
		<?php if ($social_links_fb || $social_links_tw || $social_links_gplus || $social_links_instagram || $social_links_github || $social_links_behance):?>
			<div class="social-links row">
				<?php if ($social_links_fb):?><a target="blank" href="<?php echo $social_links_fb ; ?>"><i class="fa fa-facebook-official"></i></a><?php endif;?>
				<?php if ($social_links_tw):?><a target="blank" href="<?php echo $social_links_tw ; ?>"><i class="fa fa-twitter-square"></i></a><?php endif;?>
				<?php if ($social_links_gplus):?><a target="blank" href="<?php echo $social_links_gplus ; ?>"><i class="fa fa-google-plus"></i></a><?php endif;?>
				<?php if ($social_links_instagram):?><a target="blank" href="<?php echo $social_links_instagram ; ?>"><i class="fa fa-instagram"></i></a><?php endif;?>
				<?php if ($social_links_github):?><a target="blank" href="<?php echo $social_links_github ; ?>"><i class="fa fa-github"></i></a><?php endif;?>
				<?php if ($social_links_behance):?><a target="blank" href="<?php echo $social_links_behance ; ?>"><i class="fa fa-behance"></i></a><?php endif;?>
			</div>
		<?php endif;?>
		<div class="site-info row">
			<a target="blank" href="<?php echo esc_url( __( 'https://wordpress.org/', 'slresponsive' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'slresponsive' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'slresponsive' ), 'SLRESPONSIVE', '<a target="blank" href="http://awothemes.pro" rel="designer">AwoThemes</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
