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
					<h2 class="heading to-animate"><?=get_field('cources',4)?></h2>
				</div>
			</div>
			<div class="row">
				<div class="fh5co-grid">
					<?php $post=get_posts(array('category_name'=>'courses','orderby'=>'date', 'order'=>'DESC', 'numberposts'=>6 ));
					foreach ($post as $value):
						if(get_field('big',$value->ID)):

							if(get_field('reversed',$value->ID)):
								?>

								<div class="fh5co-v-half  to-animate-2 hidden-xs" >
									<div class="fh5co-v-col-4 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url($value->ID)?>)"></div>
								</div>
								<div class="fh5co-v-half to-animate-2" style="<?php $bgC=get_field('blok-color',$value->ID); if ($bgC) echo "background:{$bgC};"; ?>">
									<style>
										#v-half<?=$value->ID?>:before {
											border-right-color: <?=$bgC?> !important;
										}
									</style>
									<div id="v-half<?=$value->ID?>" class="fh5co-v-col-4 fh5co-text fh5co-special-1 arrow-left">
										<a href="<?=get_permalink($value->ID)?>"><h3><?=$value->post_title?></h3></a>
										<span class="pricing"><?=get_field('price',$value->ID)?></span>
										<p><?=$value->post_excerpt?></p>
										<a href="<?=get_permalink($value->ID)?>" class="btn btn-primary btn-outline">Подробнее</a>
										<a href="<?=get_permalink($value->ID)?>/#subscribe" class="animated pulse btn btn-primary btn-outline">Записаться на бесплатный урок</a>
										<div class="xs-image-box visible-xs" style="background-image: url(<?=get_the_post_thumbnail_url($value->ID)?>)"></div>
									</div>
								</div>
							<?php else: ?>
								<div class="fh5co-v-half to-animate-2" style="z-index: 9999; <?php $bgC=get_field('blok-color',$value->ID); if ($bgC) echo "background:{$bgC};"; ?>">
									<style>
										#v-half<?=$value->ID?>:before {
											border-left-color: <?=$bgC?> !important;
										}
									</style>
									<div id="v-half<?=$value->ID?>" class="fh5co-v-col-4 fh5co-text fh5co-special-1 arrow-right"  >
										<a href="<?=get_permalink($value->ID)?>"><h3><?=$value->post_title?></h3></a>
										<span class="pricing"><?=get_field('price',$value->ID)?></span>
										<p><?=$value->post_excerpt?></p>
										<a href="<?=get_permalink($value->ID)?>" class="btn btn-primary btn-outline">Подробнее</a>
										<a href="<?=get_permalink($value->ID)?>/#subscribe" class="animated pulse btn btn-primary btn-outline">Записаться на бесплатный урок</a>
										<div class="xs-image-box visible-xs" style="background-image: url(<?=get_the_post_thumbnail_url($value->ID)?>)"></div>
									</div>
								</div>
								<div class="fh5co-v-half  to-animate-2 hidden-xs">
									<div class="fh5co-v-col-4 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url($value->ID)?>)"></div>
								</div>
							<?php endif; ?>
							<!--КОНЕЦ большое окно-->
						<?php  else: ?>
							<!--НАЧАЛО маленькие окна-->
							<div class="fh5co-v-half" style="<?php $bgC=get_field('blok-color',$value->ID); if ($bgC) echo "background:{$bgC};"; ?>">
								<div class="fh5co-h-row-2 <?php if(get_field('reversed',$value->ID)) echo 'fh5co-reversed '?> to-animate-2">
									<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url($value->ID)?>)"></div>
									<style>
										#v-half<?=$value->ID?>:before {
											border-<?php if(get_field('reversed',$value->ID)) echo 'left'; else echo 'right'; ?>-color: <?=$bgC?> !important;
										}
									</style>
									<div id="v-half<?=$value->ID?>" class="fh5co-v-col-2 fh5co-text arrow-<?php if(get_field('reversed',$value->ID)) echo 'right'; else echo 'left'; ?>" style="" >
										<a href="<?=get_permalink($value->ID)?>"><h3><?=$value->post_title?></h3></a>
										<span class="pricing"><?=get_field('price',$value->ID)?></span>
										<p><?=$value->post_excerpt ?></p>
										<a href="<?=get_permalink($value->ID)?>" class="btn btn-primary btn-outline">Подробнее</a>
										<a href="<?=get_permalink($value->ID)?>/#subscribe" class="animated pulse btn btn-primary btn-outline">Записаться на бесплатный урок</a>
									</div>
								</div>
							</div>
							<!--КОНЕЦ маленькие окна-->
						<?php endif; ?>

					<?php endforeach; ?>

				</div>
			</div>

		</div>
	</div>
<?php
get_footer();
