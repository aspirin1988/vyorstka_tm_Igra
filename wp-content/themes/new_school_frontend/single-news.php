<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package new_school_frontend
 */
$obj=get_queried_object();
$category=get_the_category();
$category=$category[0];
get_header(); ?>

	<!--News-single-->
	<div class="news-single-body">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-visible-large uk-width-large-1-4">
					<div class="others-news">
						<h4>Другие новости</h4>
						<?php $post=get_posts(array('category_name'=>'news','order'=>'rand' ,'numberposts'=>2));
						foreach ($post as $value): if ($value->ID!=$obj->ID):
						?>
						<figure></figure>
						<div class="other-new-block">
							<h4><?=$value->post_title?></h4>
							<p><?=$value->post_date?></p>
							<div class="other-new-image"></div>
							<article>
								<?=str_replace("\n","<br>",mb_substr(strip_tags($value->post_content),0,512))?>
							</article>
						</div>
						<?php endif; endforeach; wp_reset_query(); ?>

					</div>
				</div>
				<div class="uk-width-small-1-1 uk-width-medium-1-1 uk-width-large-3-4">
					<div class="single-new-block">
						<h4><?=get_the_title()?></h4>
						<p><?=get_the_date()?></p>
						<div class="single-new-image" style="background-image: url(<?=get_the_post_thumbnail_url()?>)"></div>
						<article>
							<?=get_the_content()?>
						</article>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!--End news-single-->

<?php
get_footer();
