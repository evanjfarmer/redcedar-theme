<?php
/**
 * Template part for displaying page content in page-meet-the-team.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Red_Cedar_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
&nbsp;
<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( 'meet-the-team-slider', 'slug' ); }?>
	<div class="entry-content">
		<div class="container-fluid">
			<div class="row">
				<div class="credentials small-12 large-12 columns"><strong><h4>CONNIE PERKINS, CPM</h4></strong><br><h5>While living in an intentional community as a young adult, Connie  had the opportunity to serve in a woman’s shelter. Working and living alongside mothers and families who did not have adequate access to resources and support was the catalyst for her  passion for birth justice for all women. It was there that she solidified a desire to serve women, children and families during the most vulnerable and powerful times of life. </h5><br> <h5>In 2007 Connie trained to become a birth doula and began serving street affected and homeless women in the Lansing area.<br>In 2009, just a few months after her own homebirth, Connie joined a busy midwifery practice as a student midwife.  After 4 years and attending nearly 150 births, she completed her training and certified with the National Association of Registered Midwives.</h5><br>
				</div>
			<div><img src="/wp-content/uploads/2016/04/meettheteam1.jpg" alt"Weighing Baby"></div><br>
			</div>
		<div class="container-fluid">
			<div class="row">
				<div class="credentials small-12 large-12 columns">
					<h5>In 2013 she  founded Red Cedar Birth and Botanicals, providing doula services and home birth midwifery care.  It is our belief that every woman deserves to be pampered and supported no matter where she chooses to birth, and that every woman has the right to birth in the setting and with the care providers she feels safest and most comfortable with. Red Cedar Birth supports all families having access to skilled, respectful care, equality, and birth justice.</h5><br>
					<h5><strong>Specific training in</strong><br>
					-BEST (Birth Emergency Skills Training)<br>
					-Supporting Survivors of Sexual Assault<br>
					-Spinning Babies<br>
					-Water Birth<br>
					-Herbs and Homeopathics<br>
					-Supporting Birth Mothers relinquishing a child for adoption<br>
					-Rebozo training (coming in 2016)<br>
					-Still Birthday Bereavement Doula (certification coming in 2016)</h5><br>
				</div>
		<div class="container-fluid">
			<div class="row center">
				<div class="connie1 small-12 medium-6 large-4 columns">
					<div><img src="/wp-content/uploads/2016/04/meettheteam5.jpg" alt "Connie Talking to Baby"></div><br>
				</div>
				<div class="connie2 small-12 medium-6 large-4 columns">
					<div><img src="/wp-content/uploads/2016/04/meettheteam3.jpg" alt "Connie Smiling at Baby"></div><br>
				</div>
				<div class="connie3 small-12 medium-6 large-4 columns">
					<div><img src="/wp-content/uploads/2016/04/meettheteam4.jpg" alt "Connie Clearing Baby's Mouth"></div><br>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="small-12 large-12 columns">
			<h5>Connie’s birth activism includes serving with the Michigan Midwives Association Board of Directors, and she is currently the Vice President. She has a deep personal commitment to listening to women and making sure they are respected and trusted. Connie sees her work as a midwife as participation in a radical movement back to honoring women’s bodies and their choices.  
 				She lives in Lansing in a tiny, hand-made, urban intentional community and homestead farm.</h5><br>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="small-12 large-6 columns">
					<div><img class="tove" src= "/wp-content/uploads/2016/04/meettheteam7.jpg" alt "Little Girl Tove"></div><br>
				</div>
				<div class="students small-12 large-6 columns">	
 					<h4><i>At Red Cedar Birth we place a high value on hands on, clinic based learning and work with a variety of student midwives, doulas and interns. You will have plenty of opportunity to get to know the students who will be involved in your care.</i></h4><br>
 				</div>	
			</div>
		</div>
		&nbsp;
		<div class="container-fluid">
			<div class="row center">
				<div class="birthing small-12 large-12 columns">
					<div><img src="/wp-content/uploads/2016/04/meettheteam2.jpg" alt "Birthing Parents"></div>
				</div>
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
