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
				<p class="padding"><a href="http://www.redcedarbirth.com"><img src="http://37.60.225.248/~evanjfar/wp-content/uploads/2016/02/whitelogo.png"></a></p>
				<h6><strong>3333 Pennsylvania Ave.<br>
					Lansing, MI 48910<br>
					(517)614-7756<br>
					redcedarbirth@gmail.com<br>
					Fax# (810)222-1209</h6></strong>
				<h5><strong>Follow us on</strong></h5>
					<div id="icons">
					  <a href ="https://www.facebook.com/redcedarbirthandbotanicals/"><i class="fa fa-facebook fa-2x"></i></a>
					  <a href ="http://www.instagram.com/#"><i class="fa fa-instagram fa-2x"></i></a>
					</div>
				<h5><strong>Stay in the loop across Facebook and Instagram.</strong></h5>
			Copyright &copy; <?php echo date ('Y');?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Website %1$s by %2$s', 'redcedar-theme' ), 'built', '<a href="http://evanjfarmer.com" rel="designer">evanjfarmer webdev</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
