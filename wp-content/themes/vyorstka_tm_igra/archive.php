<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package vyorstka_tm_Igra
 */
$category=get_the_category();
$category=$category[0];
get_header(); ?>


	<div id="fh5co-courses" data-section="courses">
		<div class="container">
			<div class="row text-center fh5co-heading row-padded">
				<div class="col-md-8 col-md-offset-2">
					<h2 class="heading to-animate"><?=$category->name?></h2>
				</div>
			</div>
			<div class="row">
				<div class="fh5co-grid">

					<?php
					while ( have_posts() ) : the_post();
						get_template_part( 'template-parts/content', 'prev' );
					endwhile; ?>
				</div>
			</div>

		</div>
	</div>

	<br>
	<br>



<?php
get_footer();
