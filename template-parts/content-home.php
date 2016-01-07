<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Red_Cedar_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="entry-content">
		<div class="row center">
			<h3>SERVICES</h3>
  <div class="small-2 large-4 columns">
  	<h4>Midwifery Services</h4>
  	<p>Lorem ipsum dolor sit amet, ultrices auctor amet, sed facilisis mattis egestas morbi, luctus ante neque nunc diam vitae. Ante aliquam, magna leo, vitae sodales nec rhoncus amet interdum. In ipsum massa aliquet posuere.</p>
  	<a href="#" class="button">LEARN MORE</a>
  </div>
  <div class="small-4 large-4 columns">
  	<h4>Doula Services</h4>
  	<p>Lorem ipsum dolor sit amet, ultrices auctor amet, sed facilisis mattis egestas morbi, luctus ante neque nunc diam vitae. Ante aliquam, magna leo, vitae sodales nec rhoncus amet interdum. In ipsum massa aliquet posuere.</p>
  	<a href="#" class="button">LEARN MORE</a>
  </div>
  <div class="small-6 large-4 columns">
  	<h4>Placenta Encapsulation</h4>
  	<p>Lorem ipsum dolor sit amet, ultrices auctor amet, sed facilisis mattis egestas morbi, luctus ante neque nunc diam vitae. Ante aliquam, magna leo, vitae sodales nec rhoncus amet interdum. In ipsum massa aliquet posuere.</p>
  	<a href="#" class="button">LEARN MORE</a>
  </div>
</div>
<hr />
<h3>BOTANICALS SHOP</h3>
<ul class="products">
	<?php
	echo do_shortcode( '[recent_products per_page="3" columns="3"]' );
	?>
</ul><!--/.products-->
<hr />
		<div class="row center">
  <div class="large-6 columns">
  	<h3>BE A BIRTH SPONSOR</h3></div>
  <div class="large-6 columns">
  	<h3>BIRTH CHAT</h3></div>
<hr/>
<div class="row">
		<p>"Lorem ipsum dolor sit amet, ultrices auctor amet, sed facilisis mattis egestas morbi, luctus ante neque nunc diam vitae. Ante aliquam, magna leo, vitae sodales nec rhoncus amet interdum. In ipsum massa aliquet posuere."--Laurie, East Lansing</p>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					esc_html__( 'Edit %s', 'redcedar-theme' ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->