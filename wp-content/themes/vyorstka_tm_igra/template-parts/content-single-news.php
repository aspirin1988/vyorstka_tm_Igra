<div class="container shadow hidden-xs">
	<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-big-horizontal.png" class="img-responsive">
</div>

<!--НАЧАЛО breadcrumbs-->
<div class="container">
	<?php pp_get_breadcrumb('breadcrumb') ?>
</div>
<!--КОНЕЦ breadcrumbs-->

<!--НАЧАЛО фото и описание -->
<div id="photo-and-summary" class="container">
	<div class="row">
		<div class="col-sm-7 news-main-photo">
			<img src="<?=get_the_post_thumbnail_url()?>">
		</div>
		<div class="col-sm-5 summary">
			<h2 class="text-center"><?=get_the_title()?></h2>
			<div class="shadow">
				<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-horizontal.png" class="img-responsive">
			</div>
			<p class="text"><?=get_the_excerpt()?></p>
			<div class="place-and-time">
				<div class="date">
					<img src="<?php bloginfo('template_directory') ?>/public/images/igra/news/calendar.png"> <span><?=get_field('date')?></span>
				</div>
				<div class="time">
					<img src="<?php bloginfo('template_directory') ?>/public/images/igra/news/clock.png"> <span><?=get_field('time')?></span>
				</div>
				<div class="address">
					<img src="<?php bloginfo('template_directory') ?>/public/images/igra/news/location.png"> <span><?=get_field('location')?></span>
				</div>
			</div>
		</div>
	</div>
</div>
<!--КОНЕЦ фото и описание -->

<div class="container shadow">
	<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-big-horizontal.png" class="img-responsive">
</div>

<!--НАЧАЛО секция текста-->
<div class="container text-section">
	<p>
		<?=get_the_content()?>
	</p>
</div>
<!--КОНЕЦ секция текста-->

<div class="container shadow">
	<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-big-horizontal.png" class="img-responsive">
</div>

<div class="container video-section">
	<div class="video-container">
		<div class='embed-container'>
			<?=get_field('video')?>
		</div>
	</div>
</div>

</div>