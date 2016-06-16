<div id="fh5co-footer" data-section="contacts">
	<div class="container">
		<div class="row text-center fh5co-heading">
			<div class="col-md-8 col-md-offset-2 to-animate">
				<h2 class="heading to-animate-2">Контакты</h2>
			</div>
		</div>
	</div>
	<div class="container map-background">
		<div class="address-box to-animate-2">
			<img src="<?=get_field('logo-f',4)?>" alt="logo">
			<p>
					<span>
						<?=get_field('address',4)?>
					</span> <br>
				<a href="tel:<?=get_field('phone-1',4)?>"><?=get_field('phone-1',4)?></a> <br>
				<a href="tel:<?=get_field('phone-2',4)?>"><?=get_field('phone-2',4)?></a> <br>
				<a href="mailto:<?=get_field('email',4)?>"><?=get_field('email',4)?></a>
			</p>
		</div>
		<ul class="fh5co-social text-center">
			<li class="to-animate-2">
				<a href="<?=get_field('vk',4)?>">
					<img src="<?php bloginfo('template_directory') ?>/public/images/igra/footer-social-vk.png" alt="VK">
				</a>
			</li>
			<li class="to-animate-2">
				<a href="<?=get_field('inst',4)?>">
					<img src="<?php bloginfo('template_directory') ?>/public/images/igra/footer-social-insta.png" alt="Instagram">
				</a>
			</li>
			<li class="to-animate-2">
				<a href="<?=get_field('fb',4)?>">
					<img src="<?php bloginfo('template_directory') ?>/public/images/igra/footer-social-fb.png" alt="Facebook">
				</a>
			</li>
			<li class="to-animate-2">
				<a href="<?=get_field('youtobe',4)?>">
					<img src="<?php bloginfo('template_directory') ?>/public/images/igra/footer-social-youtube.png" alt="Facebook">
				</a>
			</li>
		</ul>
		<!--Кнока обратной связи:-->
<!--		<a href="#" class="feedback to-animate-2"></a>-->
		<div class="blink-cb-module-main-btns active search-blink-cb-module-btn" style="position: fixed; bottom: 0; right: 0;">
			<div class="blink-cb-module-btns-container">
				<div class="blink-cb-module-main-btn-container animated" style="background: transparent">
					<div class="blink-cb-open-popup blink-cb-module-main-btn">
						<a href="#recall" style="bottom: -48px; right: -25px; " class="feedback"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<footer>

</footer>


<!-- jQuery -->
<script type="text/javascript" src="https://callback.blink.kz/client/script/GET/"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery.easing.1.3.js"></script>

<script src="<?php bloginfo('template_directory') ?>/public/js/ifItIsMobile.js"></script>

<!-- Bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/public/js/bootstrap.min.js"></script>
<!-- Bootstrap DateTimePicker -->
<script src="<?php bloginfo('template_directory') ?>/public/js/moment.js"></script>
<script src="<?php bloginfo('template_directory') ?>/public/js/bootstrap-datetimepicker.min.js"></script>
<!-- Waypoints -->
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery.stellar.min.js"></script>

<!-- Flexslider -->
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery.flexslider-min.js"></script>
<script>
	$(function () {
		$('#date').datetimepicker();
	});
</script>
<!-- Owl Carousel -->
<script src="<?php bloginfo('template_directory') ?>/public/js/owl.carousel.min.js"></script>
<!-- Image Light Box -->
<script src="<?php bloginfo('template_directory') ?>/public/js/imagelightbox.min.js"></script>
<!-- Main JS -->
<script src="<?php bloginfo('template_directory') ?>/public/js/main.js"></script>


<script type='text/javascript' src="<?php bloginfo('template_directory') ?>/public/js/unitegallery.min.js"></script>

<script type='text/javascript' src="<?php bloginfo('template_directory') ?>/public/js/ug-theme-tiles.js"></script>
<script type="text/javascript">

	jQuery(document).ready(function(){

		jQuery("#gallery-pp-oo").unitegallery({
			tiles_type:"justified"
		});

	});

</script>
<!--<script src="https://callback.blink.kz/resources/callback/js/mailer.js" ></script>-->
<!--<script>-->
<!--	var submitSMG = new BMModule();-->
<!--	submitSMG.submitForm(function(success) { $('.blink-mailer input[type=submit]').val('Отправить'); $('.success-mail-text').html(success); $('.blink-mailer').hide(500);  $('.success-mail-text').show(500);  }, function(error) {});-->
<!--</script>-->
<?php //wp_footer() ?>

</body>
</html>
