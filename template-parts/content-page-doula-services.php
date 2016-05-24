<?php
/**
 * Template part for page content in page-doul-services.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Red_Cedar_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'doula-services-slider', 'slug' ); }?>
<div class="entry-content">
	<div class="row">
  		<div class="doula services small-12 large-8 columns">
  			<h4>Doula Services</h4>
  			&nbsp;
  			<h5><p>We all want a healthy mother and healthy baby. As your doula, our focus is on your specific goals and desires for this birth.  At <strong><i>Red Cedar Birth</i></strong> we trust you to make the best choices about your body, your baby and your birth.  You can expect your doula to provide information and education as well as affirm your priorities and preferences. We offer unbiased support and a policy of non-judgement, without agenda.<p>
  			Red Cedar Birth is a proud member of the <a class="community" href="http://www.willowtreefamily.com/lansing-doula-network">Lansing Doula Network</a>, and we have personally worked with the network to encourage a welcome and cohesive relationship between local doulas and hospital staff. Many of the providers in our area have been very open to deepening these relationships and we look forward to the positive impact this will have on our clients.<p>
  				<p><strong>Your doula team will:</strong></p>
  				<ul>
				<li><strong>Be a personal resource</strong> during your pregnancy and postpartum. Your doula is here to provide you with answers to questions and additional information on a large variety of subjects, as well as to help navigate hospital policy and regional standards of care.</li><br>
				<li><strong>Offer generous  phone and email support</strong> as well as any professional referrals into the community as needed.</li><br>
				<li><strong>Meet with you and your partner</strong> prenatally to discuss your birth goals, desires, and preferences.</li><br>
				<li><strong>When you are ready</strong> for physical support, your doula will join you, at home or hospital, and remain with you until you and baby are settled in for quiet family time.</li><br>
				<li><strong>Provide two postpartum visits:</strong></li>
					<ul style= "list-style-type:circle">
						<li>The first visit is with your Labor doula, usually scheduled around day three. In this visit we <i>ooh</i> and <i>ahh</i> over your beautiful baby, check on the well being of you, your baby and the new family, discuss your birth and baby feeding, and create a plan for any ongoing needs during the postpartum.</li>
						<li>The  second visit is scheduled at your convenience, and features four hours with one of our postpartum doulas. The postpartum doula has a specialized focus on the transition from pregnancy to mother hood, and this mom-centered care will leave you feeling pampered, refreshed and renewed.</li>
						<li>Additional visits or Lactation Support are available a la carte. </li></h5>
					</ul>
				</ul>
				<center><a href="/product/doula-services/" class="button">Purchase Now</a><a href="/contact/" class="button">Contact Us</a></center>
  				<hr />
  				&nbsp;
  				<h5><strong><i>Bereavement Doula Support</i></strong><p>The pain of losing a child cannot be described by words, and neither can the depth of your need for support, guidance and encouragement. No matter what your circumstances, our trained and compassionate doulas are here to walk through this with you.</p><br> <p>Give yourself the time to grieve and allow us to care for you during this period. A trained bereavement doula can join you at any stage. We are able to offer this service free of charge through our Birth Sponsorship program, please <a class="community" href="/become-a-birth-sponsor/">CLICK HERE</a> to donate or <a class="community" href="/contact">CONTACT US</a> to learn more about our programs.</p></h5>
  		</div>		
  		<div class="doulas image small-12 large-4 columns">
	  			<div><img src="/wp-content/uploads/2016/04/doula1.jpg" alt="Man with Baby"></div><br>
	  			<div><img src="/wp-content/uploads/2016/04/doula2.jpg" alt="People Gathered Around Mother"></div><br>
	  			<div><img src="/wp-content/uploads/2016/04/doula3.jpg" alt="Man Looking at Baby"></div><br>
	  			<div><img src="/wp-content/uploads/2016/04/doula-4.jpg" alt="Baby Close Up"></div><br>
	  			<div><img src="/wp-content/uploads/2016/04/doula-5.jpg" alt="Helpers Around Mother"></div>
	  	</div>
  	</div><br>
  	<div class="row">
  		<div class="reduced small-10 large-12"
  		<p><h5><i><strong><center>We offer greatly reduced services for teen clients, street affected clients and mothers relinquishing a child to adoption.<br> Please contact us for rates and more information.</center></strong></i></h5></p>
		</div>  	
  	</div>
	<div class="row">
  		<?php 
  		echo do_shortcode( '[slide-anything id="235"]' );
  		?>
		</div>
	</div>	
&nbsp;
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