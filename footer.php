<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Red_Cedar_Theme
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class= "center">
				<h5><strong>Red Cedar Birth & Botanicals</strong></h5>
				<h6>3333 Pennsylvania Ave.<br>
					Lansing, MI 48910<br>
					(517)614-7756<br>
					redcedarbirth@gmail.com<br>
					Fax# (810)222-1209</h6>

				<h5><strong>Follow us on</strong></h5>
					<div id="icons">
					  <i class="fa fa-facebook"></i>
					  <i class="fa fa-instagram"></i>
					</div>

				<h6>Stay in the loop across Facebook, Twitter, Instagram and Pinterest.</h6>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'redcedar-theme' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'redcedar-theme' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'redcedar-theme' ), 'redcedar-theme', '<a href="http://evanjfarmer.com" rel="designer">Evan J. Farmer</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
