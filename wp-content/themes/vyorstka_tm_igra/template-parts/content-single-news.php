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
	<img src="<?=get_the_post_thumbnail_url()?>" class="pull-left news-main-photo">
	<h2 class="text-center"><?=get_the_title()?></h2>
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
	<p class="text">
		<?=get_the_content()?>
	</p>
</div>
<!--КОНЕЦ фото и описание -->

<div class="container shadow">
	<img src="<?php bloginfo('template_directory') ?>/public/images/igra/courses/shadow-big-horizontal.png" class="img-responsive">
</div>

<?php if(get_field('video')):?>

<div class="container video-section">
	<div class="video-container">
		<div class='embed-container'>
			<?=get_field('video')?>
		</div>
	</div>
</div>
<?php endif; ?>
</div>
