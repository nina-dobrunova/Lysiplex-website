<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 */
?>

		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="content-area">
				<?php wp_nav_menu( array( 
							'theme_location' => 'footer',
							'menu_class'     => 'footer-links',
							'depth'          => 2,
						) ); 
				?>  
				<?php dynamic_sidebar( 'footer-info' ); ?>
			</div>
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
