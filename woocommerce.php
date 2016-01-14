<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Red_Cedar_Theme
 */

get_header(); ?>
<?php if ( function_exists( 'soliloquy' ) ) { soliloquy( '58' ); } ?>
	<?php woocommerce_content(); ?>
<?php
get_sidebar();
get_footer();
