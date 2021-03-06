<?php $obj=get_queried_object(); ?>
<div id="fh5co-home" class="js-fullheight" data-section="home">

	<div class="flexslider">

		<div class="fh5co-overlay"></div>
		<div class="fh5co-text">
			<div class="to-animate img-to-animate logo-container">
				<img class="logo" src="<?=get_field('logo',4)?>">
			</div>
		</div>
		<div class="background" style="background-image: /* url(<?php bloginfo("template_directory") ?>/public/images/igra/audience.png) ,*/ url('<?=get_the_post_thumbnail_url($obj->ID)?>');">
			<div class="to-animate img-to-animate slogan-container hidden-md hidden-sm">
				<img class="slogan img-responsive" src="<?php bloginfo("template_directory") ?>/public/images/igra/slogan.png" alt="Слоган">
			</div>
			<img class="audience" src="">
			<img src="<?php bloginfo("template_directory") ?>/public/images/igra/depositphotos_56769687_Cinema_or-1.jpg" class="img-responsive opacity-helper-img" style="opacity: 0">
		</div>

	</div>

</div>


<div class="shadow-container">
	<img src="<?php bloginfo("template_directory") ?>/public/images/igra/shadow.png" alt="Тень">
</div>

<div class="about-wrapper">
	<div id="fh5co-about" data-section="about">
		<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(<?=get_the_post_thumbnail_url(13)?>)">
			<img src="<?=get_the_post_thumbnail_url(13)?>" class="img-responsive about-photo">
		</div>
		<div class="fh5co-2col fh5co-text">
			<h2 class="heading to-animate"><?=get_the_title(13)?></h2>
			<?php $post=get_post(13); $first=$post->post_content[0]; $rest=substr($post->post_content,1,strlen($post->post_content)-1); ?>
			<p class="to-animate"><?=$post->post_content?></p>
		</div>
	</div>
</div>
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
						<a href="<?=get_permalink($value->ID)?>/#subscribe" class="animated pulse btn btn-primary btn-outline">Записаться на <br> бесплатный урок</a>
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
						<a href="<?=get_permalink($value->ID)?>/#subscribe" class="animated pulse btn btn-primary btn-outline">Записаться на <br> бесплатный урок</a>
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
									<a href="<?=get_permalink($value->ID)?>/#subscribe" class="animated pulse btn btn-primary btn-outline">Записаться на <br> бесплатный урок</a>
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

<div id="fh5co-advantages" data-section="advantages" style="background-image: url(<?php bloginfo('template_directory')?>/public/images/igra/advantages_background.jpg);" data-stellar-background-ratio="0.5">
	<div class="fh5co-overlay"></div>
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate"><?=get_field('osob',4)?></h2>
			</div>
		</div>
		<div class="row">
			<?php $post=get_posts(array('category_name'=>'advantages','order'=>'id', 'numberposts'=>3 ));
			foreach ($post as $key => $value):
			?>
			<div class="col-md-4 to-animate">
				<div class="fh5co-type">
					<style>
						h3#icon-<?=$key+1?>::before{
							background: url(<?=get_the_post_thumbnail_url($value->ID)?>) !important;
							background-size: cover !important;
						}
					</style>
					<h3 id="icon-<?=$key+1?>" class="with-icon icon-<?=$key+1?>" >
					<?=$value->post_title?>

					</h3>
					<p><?=$value->post_content?></p>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

<?php $gallery=pp_gallery_get(4);
if($gallery):
?>
<div id="fh5co-gallery" data-section="gallery">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<a href="<?=get_permalink(212)?>"><h2 class="heading to-animate"><?=get_field('gallery',4)?></h2></a>
			</div>
		</div>
		<div class="row hidden-sm hidden-xs">
			<div class="col-md-12">
				<div id="gallery-pp-oo" class="">
					<?php foreach($gallery as $galleryItem) : ?>
						<a href="<?=$galleryItem->url?>">
							<img alt="<?=$galleryItem->alt?>"
								 src="<?=$galleryItem->url?>"
								 data-image="<?=$galleryItem->url?>"
								 style="display:none">
						</a>
					<?php endforeach; ?>
				</div>
				<div style="margin-top: 40px;"></div>
			</div>
		</div>
	</div>
</div>
<?php endif; ?>


<div id="fh5co-videogallery" data-section="videogallery">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate">Видеогалерея</h2>
			</div>
		</div>
		<div class="owl-carousel-videogallery">
			<?php foreach (pp_gallery_get(312) as $video): ?>
			<div>
				<a href="#videoModal" data-toggle="modal" class="videogallery-caller" data-src-iframe="<?=$video->description?>">
					<img src="<?=$video->url?>">
				</a>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>


<?php $post=get_comments(array('post_id'=>4,'status' => 'approve','numberposts'=>-1));
?>
<div id="fh5co-reviews" data-section="reviews">
	<div class="container">
		<div class="row text-center fh5co-heading">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate-2"><?=get_field('rew',4)?></h2>
			</div>
		</div>
		<div class="owl-carousel-reviews">
		<?php
		foreach ($post as $value): ?>
		<div class="fh5co-event to-animate-2">
			<h3><?=$value->comment_author?></h3>
			<span class="fh5co-event-meta"><?=$value->comment_date?></span>
			<p><?=$value->comment_content?></p>
		</div>
		<?php endforeach; ?>
		</div>
	</div>
</div>


<?php if (!is_user_logged_in()): ?>
<div id="fh5co-send-feed">
	<div class="container">
		<div class="row text-center fh5co-heading">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate">Оставить отзыв</h2>
			</div>
		</div>

			<?php
			comment_form(array(
				'fields'=>array(
					'author'=>'
						<div class="row">
							<div class="col-md-4 to-animate-2">
								<div class="form-group">
									<label for="author">Имя</label><br>
									<input id="author" class="form-control" name="author" type="text" placeholder="Имя фамилия" required>	
								</div>
							</div>',
					'email'=>'
							<div class="col-md-4 to-animate-2">
								<div class="form-group">
									<label for="url">Телефон</label><br>
									<input id="url" class="form-control" name="url" type="text" placeholder="Телефон" required> 
								</div>
							</div>',
					'url'=>'
							<div class="col-md-4 to-animate-2">
								<div class="form-group">
									<label for="email">Email</label><br>
									<input id="email" class="form-control" name="email" type="email" placeholder="Email" required>
								</div>
							</div>',
					'comment_field'=>'
							<div class="col-sm-12 to-animate-2">
								<div class="form-group ">
									<label for="message">Ваш комментарий</label>
									<textarea name="comment" id="message" cols="30" rows="5" class="form-control"
												  placeholder="Ваш комментарий"></textarea>
								</div>',
				),
				'title_reply'=>'',
				'title_reply_before'=>'',
				'title_reply_after'=>'',
				'comment_field'=>'',
				'comment_notes_before'=>'',
				'submit_button'=>'
			<div class="form-group">
					<input class="btn btn-primary pull-right" value="Отправить" type="submit">
					<input type="hidden" name="comment_post_ID" value="4" id="comment_post_ID">
					<input type="hidden" name="comment_parent" id="comment_parent" value="0">
				</div>
			</div>
		</div>',

			),4);
		?>
		
	</div>
</div>
<?php endif; ?>

<div id="fh5co-news" data-section="news">
	<div class="container">
		<div class="row text-center fh5co-heading">
			<div class="col-md-8 col-md-offset-2 to-animate">
				<h2 class="heading to-animate-2"><?=get_field('news',4)?></h2>
			</div>
		</div>
		<div class="owl-carousel-news">
			<?php $post=get_posts(array('category_name'=>'news','order'=>'id', 'numberposts'=>-1 ));
			foreach ($post as $key => $value):
			?>
			<div class="fh5co-event to-animate-2">
				<h3><?=$value->post_title?></h3>
				<span class="fh5co-event-meta"><?=$value->post_date?></span>
				<img src="<?=get_the_post_thumbnail_url($value->ID)?>" class="img-responsive">
				<p class="text-container"><?php $text=explode('<!--more-->',$value->post_content); echo $text[0]; ?></p>
				<p><a href="<?=get_permalink($value->ID)?>" class="btn btn-primary btn-outline">Читать далее</a></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">&nbsp;</h4>
			</div>
			<div class="modal-body">
				<div class='embed-container'><iframe src='' frameborder='0' allowfullscreen id="iFrameVideo"></iframe></div>
			</div>
		</div>
	</div>
</div>