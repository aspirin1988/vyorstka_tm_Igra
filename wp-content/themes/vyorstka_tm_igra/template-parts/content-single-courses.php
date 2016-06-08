<div class="container shadow hidden-xs">
	<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-big-horizontal.png" class="img-responsive">
</div>

<!--НАЧАЛО breadcrumbs-->
<div class="container">
	<?php pp_get_breadcrumb('breadcrumb') ?>
</div>
<!--КОНЕЦ breadcrumbs-->

<!--НАЧАЛО описание и расписание-->
<div id="summary-and-work-time" class="container">
	<div class="row">
		<div class="col-sm-5 summary">
			<h2><?=get_the_title()?></h2>
			<div class="underline"></div>
			<span class="pricing"><?=get_field('price')?></span>
			<p>
				<?=get_the_content()?>
			</p>
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
			<p class="subscription text-center"><?=get_the_excerpt()?></p>
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

<!--НАЧАЛО фотоогалерея-->
<div id="gallery-on-courses">
	<div class="container">
		<div class="row text-center fh5co-heading">
			<div class="col-md-8 col-md-offset-2">
				<h2 class="heading">Фотогалерея</h2>
			</div>
		</div>

		<div class="owl-carousel-on-courses">
			<a href="images/igra/gallery-boy.jpg" data-imagelightbox="f">
				<div style="background-image: url(images/igra/gallery-boy.jpg)"></div>
			</a>
			<a href="images/igra/gallery-boy-and-girl.jpg" data-imagelightbox="f">
				<div style="background-image: url(images/igra/gallery-boy-and-girl.jpg)"></div>
			</a>
			<a href="images/igra/gallery-boy-and-girl2.jpg" data-imagelightbox="f">
				<div style="background-image: url(images/igra/gallery-boy-and-girl2.jpg)"></div>
			</a>
			<a href="images/igra/gallery-boy-and-girl3.jpg" data-imagelightbox="f">
				<div style="background-image: url(images/igra/gallery-boy-and-girl3.jpg)"></div>
			</a>
			<a href="images/igra/gallery-boy-and-girl4.jpg" data-imagelightbox="f">
				<div style="background-image: url(images/igra/gallery-boy-and-girl4.jpg)"></div>
			</a>
			<a href="images/igra/gallery-girl.jpg" data-imagelightbox="f">
				<div style="background-image: url(images/igra/gallery-girl.jpg)"></div>
			</a>
		</div>

	</div>
</div>
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
			<div class="video-item">
				<div class='embed-container'>
					<iframe src='https://www.youtube.com/embed/n-AdoTkXwbc' frameborder='0' allowfullscreen></iframe>
				</div>
			</div>
			<div class="video-item">
				<div class='embed-container'>
					<iframe src='https://www.youtube.com/embed/hb8hhy18V-o' frameborder='0' allowfullscreen></iframe>
				</div>
			</div>
			<div class="video-item">
				<div class='embed-container'>
					<iframe src='https://www.youtube.com/embed/yIIO7gxOAiY' frameborder='0' allowfullscreen></iframe>
				</div>
			</div>
		</div>

	</div>
</div>
<!--КОНЕЦ видеогалерея-->

<div class="container shadow">
	<img src="images/igra/courses/shadow-big-horizontal.png" class="img-responsive">
</div>

<!--НАЧАЛО запись на приём-->
<div class="container subscribe">
	<div class="coupon">
		<div class="coupon-content">
			<h2 class="text-center">Записаться на пробный приём</h2>
			<p>
				Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
			</p>
			<form action="">
				<div class="form-group">
					<label for="name">Имя</label>
					<input id="name" class="form-control" placeholder="Ваше имя" type="text">
				</div>
				<div class="form-group">
					<label for="email">Телефон</label>
					<input id="email" class="form-control" placeholder="Номер телефона" type="tel">
				</div>
				<div class="form-group">
					<label for="courseType">Выбор курса</label>
					<select class="form-control" id="courseType">
						<option>Выбор курса</option>
						<option>Актёрское мастерство</option>
						<option>Танцы для детей</option>
						<option>Вокал</option>
						<option>Ментальная арифметика</option>
						<option>Подготовка к школе</option>
					</select>
				</div>
				<button type="submit" class="btn btn-primary btn-outline">Записаться</button>
			</form>
		</div>
	</div>
</div>
<!--КОНЕЦ запись на приём-->

</div>