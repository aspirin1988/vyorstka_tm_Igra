<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package vyorstka_tm_Igra
 */

get_header(); ?>

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'single-news' );

		endwhile; // End of the loop.
		?>
<?php
get_footer();
