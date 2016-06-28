<div class="container shadow hidden-xs">
	<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-big-horizontal.png" class="img-responsive">
</div>

<!--НАЧАЛО breadcrumbs-->
<div class="container">
	<?php pp_get_breadcrumb('breadcrumb') ?>
</div>
<!--КОНЕЦ breadcrumbs-->

<!--НАЧАЛО описание и расписание-->
<?php if (get_field('gb-top-c')&&get_field('gb-bottom-c')):?>
<style>
	#summary-and-work-time .summary {
		background-image: linear-gradient(to bottom, <?=get_field('gb-top-c')?> 0%, <?=get_field('gb-bottom-c')?> 100%);
	}
</style>
<?php endif; ?>
<div id="summary-and-work-time" class="container">
	<div class="row">
		<div class="col-sm-5 summary">
			<h2><?=get_the_title()?></h2>
			<div class="underline"></div>
			<span class="pricing"><?=get_field('price')?></span>
			<article>
				<?php the_content()?>
			</article>
		</div>
		<div class="col-sm-7 work-time">
			<h2 class="text-center"><?=get_field('schedule-title')?></h2>
			<div class="shadow">
				<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-horizontal.png" class="img-responsive">
			</div>
			<div class="dates row">
				<?php if(get_field('monday')):?>
				<div class="date col-md-3">
					<p>Понедельник</p>
					<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/calendar.png">
					<p><img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/clock.png">
						<span><?=get_field('monday')?></span>
					</p>
				</div>
				<?php endif; ?>
				<?php if(get_field('tuesday')):?>
					<div class="date col-md-3">
						<p>Вторник</p>
						<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/calendar.png">
						<p><img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/clock.png">
							<span><?=get_field('tuesday')?></span>
						</p>
					</div>
				<?php endif; ?>
				<?php if(get_field('wednesday')):?>
					<div class="date col-md-3">
						<p>Среда</p>
						<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/calendar.png">
						<p><img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/clock.png">
							<span><?=get_field('wednesday')?></span>
						</p>
					</div>
				<?php endif; ?>
				<?php if(get_field('thursday')):?>
					<div class="date col-md-3">
						<p>Четверг</p>
						<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/calendar.png">
						<p><img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/clock.png">
							<span><?=get_field('thursday')?></span>
						</p>
					</div>
				<?php endif; ?>
				<?php if(get_field('friday')):?>
					<div class="date col-md-3">
						<p>Пятница</p>
						<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/calendar.png">
						<p><img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/clock.png">
							<span><?=get_field('friday')?></span>
						</p>
					</div>
				<?php endif; ?>
				<?php if(get_field('saturday')):?>
					<div class="date col-md-3">
						<p>Суббота</p>
						<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/calendar.png">
						<p><img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/clock.png">
							<span><?=get_field('saturday')?></span>
						</p>
					</div>
				<?php endif; ?>
				<?php if(get_field('sunday')):?>
					<div class="date col-md-3">
						<p>Воскресенье</p>
						<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/calendar.png">
						<p><img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/clock.png">
							<span><?=get_field('sunday')?></span>
						</p>
					</div>
				<?php endif; ?>

			</div>
			<div class="shadow">
				<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-horizontal.png" class="img-responsive">
			</div>
			<p class="quote text-center">
				<?=get_field('description-1')?>
			</p>
			<p class="text-right"><?=get_field('description-2')?></p>
			<div class="shadow">
				<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-horizontal.png" class="img-responsive">
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ описание и расписание-->
<?php $gallery=pp_gallery_get();
if ($gallery):
?>
<!--НАЧАЛО фотоогалерея-->
<!--<div id="gallery-on-courses">
	<div class="container">
		<div class="row text-center fh5co-heading">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading">Фотогалерея</h2>
			</div>
		</div>

		<div class="owl-carousel-on-courses">
			<?php
/*			foreach ($gallery as $value):
			*/?>
			<a href="<?/*=$value->url*/?>" data-imagelightbox="f">
				<div style="background-image: url(<?/*=$value->url*/?>)"></div>
			</a>
			<?php /*endforeach; */?>
		</div>

	</div>
</div>-->
<!--КОНЕЦ фотоогалерея-->

<!--НАЧАЛО видеогалерея-->
<div id="video-gallery-on-courses">
	<div class="container">
		<div class="row text-center fh5co-heading">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading">Видеогалерея</h2>
			</div>
		</div>

		<div class="owl-video-carousel-on-courses">
			<?php
			foreach ($gallery as $value): if ($value->description):
			?>
			<div class="video-item">
				<div class='embed-container'>
					<?=$value->description?>
				</div>
			</div>
			<?php endif; endforeach; ?>
		</div>

	</div>
</div>
<!--КОНЕЦ видеогалерея-->

<div class="container shadow">
	<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-big-horizontal.png" class="img-responsive">
</div>
<?php endif; ?>

<!--НАЧАЛО запись на приём-->
<div class="container subscribe">
	<div class="coupon">
		<div class="coupon-content">
			<h2 class="text-center"><?=get_field('enroll-title',4)?></h2>
			<p>
				<?=get_field('enroll-text',4)?>
			</p>
			<form action="" class="blink-mailer">
				<input type="hidden" name="title" value="Запись на приём">
				<div class="form-group">
					<label for="name">Имя</label>
					<input id="name" class="form-control" name="Имя" placeholder="Ваше имя" type="text">
				</div>
				<div class="form-group">
					<label for="email">Телефон</label>
					<input id="email" class="form-control" name="Телефона" placeholder="Номер телефона" type="tel">
				</div>
				<div class="form-group">
					<label for="courseType">Выбор курса</label>
					<select class="form-control" name="Курс" id="courseType">
						<?php $post=get_posts(array('category_name'=>'courses','order'=>'id', 'numberposts'=>-1 ));
						foreach ($post as $value):
						?>
						<option value="<?=$value->post_title?>" ><?=$value->post_title?></option>
						<?php endforeach; ?>
					</select>
				</div>
				<button type="submit" class="btn btn-primary btn-outline">Записаться</button>
			</form>
		</div>
	</div>
</div>
<!--КОНЕЦ запись на приём-->

</div>