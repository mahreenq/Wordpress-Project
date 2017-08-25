<?php

/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>


			<div class="footer">
				<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
				  <div id="secondary" class="widget-area" role="complementary">
				  <?php dynamic_sidebar( 'sidebar-2' ); ?>
				  </div>
				<?php endif; ?>

			</div>




			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer();?>





	</body>
</html>
