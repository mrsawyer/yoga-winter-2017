<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>
</div><!-- #content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
			<form class="e-news-signup">
                <label for="e-news">Sign Up for E-News</label>
                <label class="input-bar">
                    <input type="email" id="e-news">
                    <input type="submit" id="submit-button" value="join" onclick="sendMail()">
                </label>
            </form>
			<div class="site-info">
				<div class="siteinfo-text">
				<p>contact</p>
				<p>private policy</p>
				</div>
				<!--<a href="<?php echo esc_url( 'https://wordpress.org/' ); ?>"><?php printf( esc_html( 'Proudly powered by %s' ), 'WordPress' ); ?></a>-->
				<section class ="socialmedia-icons">
				<ul>
					<li class="instagram-icon"></li>
					<li class="facebook-icon"></li>
					<li class="twitter-icon"></li>
					<li class="youtube-icon"></li>
				</ul>
				</section>
				<div class="copyright">
					<p><?php echo 'copyright © 2017 Yoga Outreach' ?></p>
				</div>
			</div><!-- .site-info -->
		</footer><!-- #colophon -->
	</div><!-- #page -->
	<?php wp_footer(); ?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
				<div class="site-info">
					
				</div><!-- .site-info -->
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>
