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
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<div class="container-fluid">
			<div class="row">
				<div class="connie small-10 large-7 columns">
					<div><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/meettheteam6.jpg" alt="connie"></div><br>
					</div>
					<div class="quote small-12 large-3 columns end"><h3><i>“I have found that the assisting with the transition to motherhood and a person, newly earth side, is an honor so profound that it changes one’s perspective, permanently.”</i></h3><br>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="credentials small-12 large-12 columns"><strong>CONNIE PERKINS, CPM</strong><br><p>While living in an intentional community as a young adult, Connie  had the opportunity to serve in a woman’s shelter. Working and living alongside mothers and families who did not have adequate access to resources and support was the catalyst for her  passion for birth justice for all women. It was there that she solidified a desire to serve women, children and families during the most vulnerable and powerful times of life.</p><br><p>In 2007  Connie trained to become a birth doula and began serving street affected and homeless women in the Lansing area.</p><br>In 2009, just a few months after her own homebirth, Connie joined a busy midwifery practice as a student midwife.  After 4 years and attending nearly 150 births, she completed her training and certified with the National Association of Registered Midwives.<br></p>
				</div>
			<div><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/meettheteam1.jpg" alt"weighing baby"></div><br>
			</div>
		<div class="container-fluid">
			<div class="row">
				<div class="credentials small-12 large-12 columns">
					<p>In 2013 she  founded Red Cedar Birth and Botanicals, providing doula services and home birth midwifery care.  It is our belief that every woman deserves to be pampered and supported no matter where she chooses to birth, and that every woman has the right to birth in the setting and with the care providers she feels safest and most comfortable with. Red Cedar Birth supports all families having access to skilled, respectful care, equality, and birth justice.</p><br>
					<p><strong>Specific training in</strong><br>
					-BEST (Birth Emergency Skills Training)<br>
					-Supporting Survivors of Sexual Assault<br>
					-Spinning Babies<br>
					-Water Birth<br>
					-Herbs and Homeopathics<br>
					-Supporting Birth Mothers relinquishing a child for adoption<br>
					-Rebozo training (coming in 2016)<br>
					-Still Birthday Bereavement Doula (certification coming in 2016)</p><br>
				</div>
		<div class="container-fluid">
			<div class="row center">
				<div class="connie1 small-12 medium-6 large-4 columns">
					<div><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/meettheteam5.jpg" alt "connie and baby"></div><br>
				</div>
				<div class="connie2 small-12 medium-6 large-4 columns">
					<div><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/meettheteam3.jpg" alt "connie and baby 2"></div><br>
				</div>
				<div class="connie3 small-12 medium-6 large-4 columns">
					<div><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/meettheteam4.jpg" alt "connie and baby with finger"></div><br>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="credentials small-12 large-12 columns">
					<p>Connie’s birth activism includes serving with the Michigan Midwives Association Board of Directors, and she is currently the Vice President. She has a deep personal commitment to listening to women and making sure they are respected and trusted. Connie sees her work as a midwife as participation in a radical movement back to honoring women’s bodies and their choices.  
 					She lives in Lansing in a tiny, hand-made, urban intentional community and homestead farm.</P><br>
 					<p>At Red Cedar Birth we place a high value on hands on, clinic based learning and work with a variety of student midwives, doulas and interns. You will have plenty of opportunity to get to know the students who will be involved in your care.</p><br>
 				</div>	
			</div>
		</div>
		<div class="container-fluid">
			<div class="row center">
				<div class="small-12 large-12 columns">
					<div><img src="http://www.redcedarbirth.dev/wp-content/uploads/2016/01/meettheteam2-1.jpg" alt "birthing parents"></div>
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
