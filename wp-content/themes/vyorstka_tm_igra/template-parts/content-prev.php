	<div class="fh5co-v-half to-animate-2">
		<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(<?=get_the_post_thumbnail_url()?>)"></div>
		<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
			<a href="<?=get_permalink()?>"><h3><?=get_the_title()?></h3></a>
			<span class="pricing"><?=get_field('price',get_the_ID())?></span>
			<p><?=mb_substr(strip_tags(get_the_content()),0,128);?></p>
		</div>
	</div>