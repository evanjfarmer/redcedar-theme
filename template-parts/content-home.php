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
  		<div class="home small-12 large-5 columns">
  			<a href="/midwifery-services"><h3>MIDWIFERY SERVICES</h3></a>
  			<h5>Our home birth care is holistic and family centered. We promote active birthing, minimal interventions, and shared decision making throughout the childbearing year. We would love to sit down with you and talk about your plans.</h5>
  		</div>
  		<div class="home small-12 large-5 columns">
  			<a href="/doula-services"><h3>DOULA SERVICES</h3></a>
  			<h5>It is our goal to provide each client with care that is respectful and centered around their choices and needs. Whether birthing at home or in the hospital, we are committed to providing you with evidence based information so that you can take lead in the decision making.</h5>
  		</div>
  	</div>
	<hr />
	<a href="/shop"><h3 class="home">BOTANICALS SHOP</h3></a><br>
		<div class="row">
			<ul class="products small-10 large-12 columns">
				<?php
				echo do_shortcode( '[recent_products per_page="4" columns="4"]' );
				?>
			</ul><!--/.products-->
		</div>
	<hr />
	<div class="row center">
		<div class="small-12 medium-6 large-4 columns">
			<h4>Be a Birth Sponsor</h4>
				<p>Red Cedar Birth is excited to introduce our new <i>Birth Sponsorship Program</i>.  Did you love your doula or midwife? Now you can help other women in our community experience the same support and encouragement that got you there.</p><br>
				<a href="/become-a-birth-sponsor/" class="button">LEARN MORE</a><br>
		</div>
		<div class="small-12  medium-6 large-4 columns">
			<h4>Birth Chat</h4>
				<p><i>Birth Chat</i> is a group for women interested in an un-medicated birth. We’ll discuss physical, emotional, cultural, and spiritual aspects of birthing and build resources for achieving your goals. 1st Monday each month (6:30-8pm) at the Willow Tree Family Center</p>
				<a href="https://www.facebook.com/groups/BirthChat/" target="_blank" class="button">LEARN MORE</a><br>
		</div>
		<div class="small-12 medium-6 large-4 columns">
			<h4>Homebirth Meetup</h4>
			<p><i>Homebirth Meet Up</i> is a family friendly gathering to build community around home birth-ers.  This gathering is for ANYONE- those considering home birth, planning home birth, or who have birthed at home.  Third Sunday of each month (2-5pm) at the Willow Tree Family Center</p>
			<a href="https://www.facebook.com/groups/CapitalAreaHomeBirth/" target="_blank" class="button">LEARN MORE</a><br>
		</div>
	</div>
	&nbsp;
	<div class="row">
		<div class="large-3 columns">
			<img src="/wp-content/uploads/2016/04/home1.jpg" alt="Baby in Black and White">
		</div>
		<div class="large-3 columns">
			<img src="/wp-content/uploads/2016/04/home2.jpg" alt="Boy Holding Baby">
		</div>
		<div class="large-3 columns">
			<img src="/wp-content/uploads/2016/04/home3.jpg" alt="Baby Girl Close Up">
		</div>
		<div class="large-3 columns">
			<img src="/wp-content/uploads/2016/04/home4.jpg" alt="Woman with Baby">
		</div>
	</div>
	&nbsp;	
	<div class="row">
	  	<?php 
	  	echo do_shortcode( '[slide-anything id="169"]' );
	  	?>
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