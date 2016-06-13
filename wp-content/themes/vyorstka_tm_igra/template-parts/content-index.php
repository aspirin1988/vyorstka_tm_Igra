<div id="fh5co-home" class="js-fullheight" data-section="home">

	<div class="flexslider">

		<div class="fh5co-overlay"></div>
		<div class="fh5co-text">
			<div class="container">
				<div class="row">
					<div class="to-animate img-to-animate">
						<img src="<?=get_field('logo',4)?>">
					</div>
				</div>
			</div>
		</div>
		<div class="background" style="background-image: url(<?=get_the_post_thumbnail_url()?>);" data-stellar-background-ratio="0.5">
			<img src="<?=get_field('audience')?>">
		</div>

	</div>

</div>

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

<div id="fh5co-courses" data-section="courses">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate">Курсы</h2>
			</div>
		</div>
		<div class="row">
			<div class="fh5co-grid">
				<?php $post=get_posts(array('category_name'=>'courses','order'=>'id', 'numberposts'=>6 )); ?>
				<div class="fh5co-v-half to-animate-2">
					<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url($post[0]->ID)?>)"></div>
					<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
						<a href="<?=get_permalink($post[0]->ID)?>"><h3><?=$post[0]->post_title?></h3></a>
						<span class="pricing"><?=get_field('price',$post[0]->ID)?></span>
						<p><?=mb_substr(strip_tags($post[0]->post_content),0,128);?></p>
					</div>
				</div>
				<div class="fh5co-v-half orange-background">
					<div class="fh5co-h-row-2 to-animate-2">
						<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url($post[1]->ID)?>)"></div>
						<div class="fh5co-v-col-2 fh5co-text arrow-left">
							<a href="<?=get_permalink($post[1]->ID)?>"><h3><?=$post[1]->post_title?></h3></a>
							<span class="pricing"><?=get_field('price',$post[1]->ID)?></span>
							<p><?=mb_substr(strip_tags($post[1]->post_content),0,128);?></p>
						</div>
					</div>
					<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
						<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url($post[2]->ID)?>)"></div>
						<div class="fh5co-v-col-2 fh5co-text arrow-right">
							<a href="<?=get_permalink($post[2]->ID)?>"><h3><?=$post[2]->post_title?></h3></a>
							<span class="pricing"><?=get_field('price',$post[2]->ID)?></span>
							<p><?=mb_substr(strip_tags($post[2]->post_content),0,128);?></p>
						</div>
					</div>
				</div>
				<div class="fh5co-v-half">
					<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
						<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url($post[3]->ID)?>)"></div>
						<div class="fh5co-v-col-2 fh5co-text arrow-right">
							<a href="<?=get_permalink($post[3]->ID)?>"><h3><?=$post[3]->post_title?></h3></a>
							<span class="pricing"><?=get_field('price',$post[3]->ID)?></span>
							<p><?=mb_substr(strip_tags($post[3]->post_content),0,128);?></p>
						</div>
					</div>
					<div class="fh5co-h-row-2 to-animate-2">
						<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url($post[4]->ID)?>)"></div>
						<div class="fh5co-v-col-2 fh5co-text arrow-left">
							<a href="<?=get_permalink($post[4]->ID)?>"><h3><?=$post[4]->post_title?></h3></a>
							<span class="pricing"><?=get_field('price',$post[4]->ID)?></span>
							<p><?=mb_substr(strip_tags($post[4]->post_content),0,128);?></p>
						</div>
					</div>
				</div>
				<div class="fh5co-v-half to-animate-2">
					<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url($post[5]->ID)?>)"></div>
					<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
						<a href="<?=get_permalink($post[5]->ID)?>"><h3><?=$post[5]->post_title?></h3></a>
						<span class="pricing"><?=get_field('price',$post[5]->ID)?></span>
						<p><?=mb_substr(strip_tags($post[5]->post_content),0,128);?></p>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div id="fh5co-advantages" data-section="advantages" style="background-image: url(<?php bloginfo('template_directory')?>/public/images/igra/advantages_background.jpg);" data-stellar-background-ratio="0.5">
	<div class="fh5co-overlay"></div>
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate"><?=get_field('advantages',4)?></h2>
			</div>
		</div>
		<div class="row">
			<?php $post=get_posts(array('category_name'=>'advantages','order'=>'id', 'numberposts'=>3 ));
			foreach ($post as $key => $value):
			?>
			<div class="col-md-4 to-animate">
				<div class="fh5co-type">
					
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

<div id="fh5co-gallery" data-section="gallery">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading to-animate">Фотогалерея</h2>
			</div>
		</div>
		<div class="row">
			<?php $gallery=pp_gallery_get(4) ?>
			<div class="col-md-3 col-sm-6 to-animate-2">
				<a href="<?=$gallery[0]->url?>" data-imagelightbox="f">
					<img src="<?=$gallery[0]->url?>" class="img-responsive">
				</a>
			</div>
			<div class="col-md-3 col-sm-6 to-animate">
				<a href="<?=$gallery[1]->url?>" data-imagelightbox="f">
					<img src="<?=$gallery[1]->url?>" alt="" class="img-responsive">
				</a>
				<a href="<?=$gallery[2]->url?>" data-imagelightbox="f">
					<img src="<?=$gallery[2]->url?>" class="img-responsive">
				</a>
			</div>
			<div class="col-md-3 col-sm-6 to-animate-2">
				<a href="<?=$gallery[3]->url?>" data-imagelightbox="f">
					<img src="<?=$gallery[3]->url?>" alt="" class="img-responsive">
				</a>
				<a href="<?=$gallery[4]->url?>" data-imagelightbox="f">
					<img src="<?=$gallery[4]->url?>" class="img-responsive">
				</a>
			</div>
			<div class="col-md-3 col-sm-6 to-animate">
				<a href="<?=$gallery[5]->url?>" data-imagelightbox="f">
					<img src="<?=$gallery[5]->url?>" class="img-responsive">
				</a>
			</div>
		</div>
	</div>
</div>

<div id="fh5co-reviews" data-section="reviews"  data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row text-center fh5co-heading">
			<div class="col-md-8 col-md-offset-2 to-animate">
				<h2 class="heading to-animate-2">Отзывы</h2>
			</div>
		</div>
		<div class="owl-carousel-reviews">
			<?php $post=get_comments(array('post_id'=>4,'status' => 'approve',));
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
									<input id="author" name="author" type="text" placeholder="Имя фамилия" required>	
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
									<label for="message">Message</label>
									<textarea name="" id="message" cols="30" rows="5" class="form-control"
												  placeholder="Message"></textarea>
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
				</div>
			</div>
		</div>',

			),4);
		?>
		<!--<div class="row">
			<div class="col-md-4 to-animate-2">
				<div class="form-group">
					<label for="name">Имя</label>
					<input id="name" class="form-control" placeholder="Имя" type="text">
				</div>
			</div>
			<div class="col-md-4 to-animate-2">
				<div class="form-group">
					<label for="phoneNumber">Телефон</label>
					<input id="phoneNumber" class="form-control" placeholder="номер телефона" type="text">
				</div>
			</div>
			<div class="col-md-4 to-animate-2">
				<div class="form-group">
					<label for="email">Email</label>
					<input id="email" class="form-control" placeholder="Email" type="email">
				</div>
			</div>
			<div class="col-sm-12 to-animate-2">
				<div class="form-group ">
					<label for="message">Message</label>
							<textarea name="" id="message" cols="30" rows="5" class="form-control"
									  placeholder="Message"></textarea>
				</div>
				<div class="form-group">
					<input class="btn btn-primary pull-right" value="Отправить" type="submit">
				</div>
			</div>
		</div>-->
	</div>
</div>
<?php endif; ?>

<div id="fh5co-news" data-section="news"  data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row text-center fh5co-heading">
			<div class="col-md-8 col-md-offset-2 to-animate">
				<h2 class="heading to-animate-2">Новости</h2>
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
				<p><?=mb_substr(strip_tags($value->post_content),0,128);?></p>
				<p><a href="<?=get_permalink($value->ID)?>" class="btn btn-primary btn-outline">Читать далее</a></p>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>

</div>