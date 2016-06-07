<div id="fh5co-footer" data-section="contacts">
	<div class="container map-background">
		<div class="address-box to-animate-2">
			<img src="<?=get_field('logo-f',4)?>" alt="logo">
			<p>
					<span>г. Алматы, ул. Шарипова 38, <br>
					уг. Толе би</span> <br>
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
		<a href="#" class="feedback to-animate-2"></a>
	</div>
</div>


<!-- jQuery -->
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="<?php bloginfo('template_directory') ?>/public/js/jquery.easing.1.3.js"></script>
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
<?php wp_footer() ?>

</body>
</html>
