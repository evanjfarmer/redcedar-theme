<?php
/**
 * Template part for page content in page-midwifery-services.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Red_Cedar_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'midwifery-services-slider', 'slug' ); }?>
<div class="entry-content">
	<div class="row">
		<h4><strong>Midwifery Services</strong></h4><br>
	</div>
	<div class="row">
		<div class="midwifery small-12 large-4 columns">
			<img src="/wp-content/uploads/2016/04/midwifery4.jpg" alt="Mother and Baby" width="400" height="600" />
		</div>
		<div class="labor small-12 large-8 columns">			
			<h5><strong>PRENATAL CARE</strong><br><p>Regular prenatal care includes monitoring the physical aspects of pregnancy as well as a time to learn about your changing body and the baby growing inside you. It is a time to get answers, discuss concerns, receive support, and prepare for giving birth. Partners and children are welcome and encouraged to participate in appointments.</p><br> <p>We value shared decision making and respect each family's right to make informed choices about the care they receive during pregnancy and birth. Making an informed choice allows families to take responsibility for decisions by considering all the options, risks and benefits. We support you making informed decisions by providing choices, information, and connecting you with resources.</h5></p>
		</div>
	</div>
	&nbsp;
	<div class="row">
		<div class="labor small-12 large-6 columns">
			<h5><strong>HOME LABOR AND BIRTH</strong><br>Care during labor and birth is personalized for each family. This is your birth experience. A lot of care goes into your birth plan and we do everything we can to support your wishes. During labor and birth the midwives monitor the well-being of mother and baby, and provide physical and emotional support. Our team is trained to respond to your cues- you decide how hands on or off we are as support. We promote active birthing and you are encouraged to move freely, breathe deeply, and eat and drink.</h5></div>
		<div class="midwifery small-12 large-6 columns">
			<img src="/wp-content/uploads/2016/04/midwifery1.jpg" alt="Couple Smiling" width="500" height="325" />
		</div>
	</div><br>
	&nbsp;
	<div class="row">
		<div class="labor small-12 large-4 columns">
			<img src="/wp-content/uploads/2016/04/midwifery3.jpg" alt="Tatooed Mama and Baby" width="360" height="203" />
		</div>
		<div class="small-12 large-8 columns">
			<h5><strong>POSTPARTUM CARE</strong><br>The midwives role during the immediate postpartum is to give the new family space and time. The bonding that occurs after birth allows for imprints of connection that last a life time. We aim to create an environment that is peaceful and gentle for the transition of a new baby. Our routines are set up to encourage bonding and minimizing separation of baby from mother; reducing complications and stress for both mom and baby. Follow up care includes two home visits, and additional visits at our office up to eight weeks after the birth. Each family has access to an in home visit with the Lactation Counselor for encouragement and to address any problems. We will assist you pre-birth to create a plan for those first weeks after birth. Having a plan in place for support from your community will allow your family to focus on settling in and falling in love with the newest member.</h5></div>
		</div>
		&nbsp;
	</div>
	<div class="row">
		<div class="small-12 large-10 columns"><h5><strong>WATERBIRTH</strong><br>If you wish, you may choose a waterbirth. The warmth and weightlessness of laboring in a birth pool helps with relaxation and comfort during labor. Waterbirth can greatly ease the discomforts of labor and create a gentle transition for the baby coming from your womb into the world. Red Cedar Birth offers Birth pool rental for our clients.</h5></div>	
		<div class="small-12 large-12 columns">
			<img class="midwifery aligncenter wp-image-60 size-full" src="/wp-content/uploads/2016/04/midwifery2.jpg" alt="Woman with Baby in Birthing Tub" width="900" height="600" />
		</div>
	</div>	
	&nbsp;	
	<div class="row">
	  		<?php 
	  		echo do_shortcode( '[slide-anything id="234"]' );
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