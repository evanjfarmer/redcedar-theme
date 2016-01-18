<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Red_Cedar_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<div class="entry-content">
	<div class="row">
  		<div class="large-6 columns">
  			<h4>Doula Services</h4>
  			<p><strong><i>Red Cedar Birth</strong></i> is pleased to work cohesively amongst the best obstetricians and nurses in the greater Lansing area, and we are proud to be a member of the <a href="http://www.willowtreefamily.com/lansing-doula-network">Lansing Doula Network</a>. Our team has personally met with several local care providers and the staff at our area hospitals to collaborate on making you the center of this experience. The providers in our area have been very welcoming and we look forward to the positive impact this will have on our clients. Your care provider and nurse are focused on a healthy mother and healthy baby. Your doula is focused on  your goals and desires for this birth.  You can take comfort in knowing your providers and your doula share the same goal of making your birth experience the best it can be. We specialize in unbiased support for all birthing choices. Your doula is there to support you and educate you on your choices so you feel empowered, strong and capable of deciding what is best for you and your baby. No matter what you decide for your birth, your doula will be there encouraging you and your partner.</p>
  			<p><strong>You can expect your doula team to:</strong></p>
  				<ul>
				<li><strong>Be a personal resource</strong> throughout your pregnancy. Your doula team  is here to provide you with answers to questions and additional information on a large variety of subjects.</li>
				<li><strong>Offer generous  phone and email support</strong> as well as any professional referrals into the community as needed.</li>
				<li><strong>Meet with you and your partner</strong> prenatally to discuss your birth goals.</li>
				<li><strong>Join you during labor</strong> when you are ready for physical support and remain with you until you and baby are ready for quiet bonding time. We will also  assist with initial feeding, bottle or breast, as needed.</li>
				<li><strong>Provide two postpartum visits:</strong></li>
					<ul style= "list-style-type:circle">
						<li>The first will be with your Labor doula, and is usually scheduled around day three. In this visit we <i>ooh</i> and <i>ahh</i> over your beautiful baby, check on the well being of you, your baby and the new family, discuss your birth and assess any ongoing postpartum needs.</li>
						<li>The  second visit will be with one of our postpartum doulas, and lasts four hours. Your doula will leave you feeling pampered with her specialized focus on the postpartum transition and adjustment period.</li>
						<li>Additional visits or Lactation Support are available a la carte. </li>
					</ul>
				</ul>
				<center><a href="#" class="button success">Purchase Now</a><a href="#" class="button secondary">Contact Us</a><br /></center>
  				<h5><strong><i>Bereavement Doula Support</i></strong></h5>The pain of losing a child, no matter what age, is unbearable. Your world comes to a crashing halt and no words can convey the pain and sorrow you are experiencing. Whether you have been told your baby will have a limited life expectancy, will be stillborn, or you have experienced a miscarriage, our trained and compassionate doulas are here to walk through this with you. Give yourself the space and time to grieve and allow us to care for you during this profound loss. Reach out to us, or direct a family member to do so for you, and a trained bereavement doula with join you at any stage. This service is funded by donations, <a href="#">click here</a> to donate or learn more about our programs.
  				<p><strong><i><br>We offer greatly reduced services for teen clients, street affected clients and mothers relinquishing a child to adoption. Please contact us for rates and more information.</i></strong></p>
  		</div>		
  		<div class="large-6 columns">
  			<p><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/Services-placeholder-1.jpg" alt="abide"></p>
  			<p><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/Services-placeholder-1.jpg" alt="joie"></p>
  			<p><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/Services-placeholder-1.jpg" alt="misha"></p>
  			<p><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/Services-placeholder-1.jpg" alt="cait"></p>
  			<p><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/Services-placeholder-1.jpg" alt="april"></p>
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