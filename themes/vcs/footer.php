<?php
/**
 * The template for displaying the footer.
 *
 * @package VCS_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>
				</div><!-- .site-info -->
				<div class="footer-newsletter-container">
					<?php echo do_shortcode('[mc4wp_form id="19]'); ?>
				</div>
				<div class="footer-links-container">
							<div class="footer-links">
								<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
								<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
								<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
								<i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
								<i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
							</div>
							<div class="footer-links ">
								<a href="#">Auditions</a>
								<a href="#">FAQ</a>
								<a href="#">Contact</a>
							</div>
						</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
