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
<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'midwifery-services-slider', 'slug' ); }?>
<div class="entry-content">
	<div class="row">
		<div class="services small-12 columns">
			<h4>Midwifery Services</h4><br>
			<strong>PRENATAL CARE</strong><br>Regular prenatal care includes monitoring the physical aspects of pregnancy as well as a time to learn about your changing body and the baby growing inside you. It is a time to get answers, discuss concerns, receive support, and prepare for giving birth. Partners and children are welcome and encouraged to participate in appointments.We value shared decision making and respect each family's right to make informed choices about the care they receive during pregnancy and birth. Making an informed choice allows families to take responsibility for decisions by considering all the options, risks and benefits. We support you making informed decisions by providing choices, information, and connecting you with resources.</div><br>
	</div>
	&nbsp;
	<div class="row">
		<div class="labor small-12 large-6 columns">
			<strong>HOME LABOR AND BIRTH</strong><br>Care during labor and birth is personalized for each family. This is your birth experience. A lot of care goes into your birth plan and we do everything we can to support your wishes. During labor and birth the midwives monitor the well-being of mother and baby, and provide physical and emotional support. Our team is trained to respond to your cues- you decide how hands on or off we are as support. We promote active birthing and you are encouraged to move freely, breathe deeply, and eat and drink.</div>
		<div class="midwifery small-12 large-6 columns">
			<img src="http://37.60.225.248/~evanjfar/wp-content/uploads/2016/01/midwifery1.jpg" alt="Couple Smiling" width="525" height="350" />
		</div>
	</div><br>
	<div class="row">
		<div class="small-12 columns">
			<strong>POSTPARTUM CARE</strong><br>The midwives role during the immediate postpartum is to give the new family space and time. The bonding that occurs after birth allows for imprints of connection that last a life time. We aim to create an environment that is peaceful and gentle for the transition of a new baby. Our routines are set up to encourage bonding and minimizing separation of baby from mother; reducing complications and stress for both mom and baby. Follow up care includes two home visits, and additional visits at our office up to eight weeks after the birth. Each family has access to an in home visit with the Lactation Counselor for encouragement and to address any problems. We will assist you pre-birth to create a plan for those first weeks after birth. Having a plan in place for support from your community will allow your family to focus on settling in and falling in love with the newest member.</div>
			&nbsp;
			<img class="midwifery aligncenter wp-image-60 size-full" src="http://37.60.225.248/~evanjfar/wp-content/uploads/2016/01/midwifery2.jpg" alt="Woman with Baby in Birthing Tub" width="900" height="600" />
			<strong>WATERBIRTH</strong><br>If you wish, you may choose a waterbirth. The warmth and weightlessness of laboring in a birth pool helps with relaxation and comfort during labor. Waterbirth can greatly ease the discomforts of labor and create a gentle transition for the baby coming from your womb into the world. Red Cedar Birth offers Birth pool rental for our clients.
			&nbsp;
			<hr />
			"Lorem ipsum dolor sit amet, ultrices auctor amet, sed facilisis mattis egestas morbi, luctus ante neque nunc diam vitae. Ante aliquam, magna leo, vitae sodales nec rhoncus amet interdum. In ipsum massa aliquet posuere."--Laurie, East Lansing
			<hr />
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