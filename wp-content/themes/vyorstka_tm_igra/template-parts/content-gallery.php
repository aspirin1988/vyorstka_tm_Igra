<?php $obj=get_queried_object();?>

<div id="fh5co-gallery" data-section="gallery">
	<div class="container">
		<div class="row text-center fh5co-heading row-padded">
			<div class="col-md-8 col-md-offset-2">
				<a href="<?=get_permalink(212)?>"><h2 class="heading to-animate"><?=get_field('gallery',4)?></h2></a>
			</div>
		</div>
		<div class="row">
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

</div>