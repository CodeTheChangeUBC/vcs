<?php
/**
 * The template for displaying the footer.
 *
 * @package VCS_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="footer-newsletter-container">
					<?php echo do_shortcode('[mc4wp_form id="19]'); ?>
				</div>
				<div class="footer-links-container">
							<div class="footer-links">
								<a href="https://www.facebook.com/vancouvercantatasingers/">
									<i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>	
								</a>
								<a href="https://twitter.com/CantataSingers?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">
									<i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
								</a>								
								<a href="https://www.instagram.com/cantatasingers/">
									<i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
								</a>
								<a href="https://www.youtube.com/user/VanCantataSingers">
									<i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
								</a>
								<a href="https://plus.google.com/108740396287902586915">
									<i class="fa fa-google-plus-square fa-2x" aria-hidden="true"></i>
								</a>
							</div>
							<div class="footer-links ">
								<a href="<?php echo home_url('/audition'); ?>">Auditions</a>
								<a href="<?php echo home_url('/faq'); ?>">FAQ</a>
								<a href="<?php echo home_url('/contact'); ?>">Contact</a>
							</div>
							<div class="buy-donate-footer desktop-buy-donate-footer">
								<a class="button-green button" href="">Buy Tickets</a>
    							<a class="button-red button" href="">Donate</a>
							</div>
						</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>

	</body>
</html>
