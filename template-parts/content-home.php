<?php
/**
 * Template part for displaying page content in home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Red_Cedar_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="entry-content">
	<div class="row">
  		<div class="home large-6 columns">
  			<a href="/midwifery-services"><h3>MIDWIFERY SERVICES</h3></a>
  			<p>Our home birth care is holistic and family centered. We promote active birthing, minimal interventions, and shared decision making throughout the childbearing year. We would love to sit down with you and talk about your plans</p>
  		</div>
  		<div class="home large-6 columns">
  			<a href="/doula-services"><h3>DOULA SERVICES</h3></a>
  			<p>It is our goal to provide each client with care that is respectful and centered around their choices and needs. Whether birthing at home or in the hospital, we are committed to providing you with evidence based information so that you can take lead in the decision making.</p>
  		</div>
  	</div>
	<hr />
	<a href="/botanicals"><h3 class="home">BOTANICALS SHOP</h3></a><br>
		<div class="row">
			<ul class="products small-10 large-12 columns">
				<?php
				echo do_shortcode( '[recent_products per_page="3" columns="3"]' );
				?>
			</ul><!--/.products-->
		</div>
	<hr />
	<div class="row center">
		<div class="small-12 medium-6 large-4 columns">
			<h4>Be a Birth Sponsor</h4>
				<p>Red Cedar Birth is excited to introduce our new Birth Sponsorship Program.  Did you love your doula or midwife? Now you can help other women in our community experience the same support and encouragement that got you there.</p>
				<a href="#" class="button">LEARN MORE</a><br>
		</div>
		<div class="small-12  medium-6 large-4 columns">
			<h4>Birth Chat</h4>
				<p>Lorem ipsum dolor sit amet, ultrices auctor amet, sed facilisis mattis egestas morbi, luctus ante neque nunc diam vitae. Ante aliquam, magna leo, vitae sodales nec rhoncus amet interdum. In ipsum massa aliquet posuere.</p>
				<a href="#" class="button">LEARN MORE</a><br>
		</div>
		<div class="small-12 medium-6 large-4 columns">
			<h4>Homebirth Meetup</h4>
			<p>Lorem ipsum dolor sit amet, ultrices auctor amet, sed facilisis mattis egestas morbi, luctus ante neque nunc diam vitae. Ante aliquam, magna leo, vitae sodales nec rhoncus amet interdum. In ipsum massa aliquet posuere.</p>
			<a href="#" class="button">LEARN MORE</a><br>
		</div>
	</div>
	&nbsp;	
		<div class="row">
	  		<?php 
	  		echo do_shortcode( '[slide-anything id="169"]' );
	  		?>
			</div>
		</div>	
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