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
				<p class="padding"><a href="http://www.redcedarbirth.com"><img src="http://redcedarbirth.com/wp-content/uploads/2016/04/whitelogo.png"></a></p>
				<h6><strong>3333 Pennsylvania Ave.<br>
					Suite 101<br>
					Lansing, MI 48910<br>
					(517) 614-7756<br>
					Fax# (810) 222-1209</h6></strong><br>
				<h5><strong>Follow us on</strong></h5>
					  <a href ="https://www.facebook.com/redcedarbirthandbotanicals/"><i class="fa fa-facebook fa-2x"></i></a>
					  <a href ="http://www.instagram.com/rcb_babes"><i class="fa fa-instagram fa-2x"></i></a>
				<h5><strong>Stay in the loop across Facebook and Instagram.</strong></h5><br>
			Copyright &copy; <?php echo date ('Y');?> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Website %1$s by %2$s', 'redcedar-theme' ), 'built', '<a href="http://evanjfarmer.com" rel="designer">evanjfarmer webdev</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
