;(function () {
	
	'use strict';



	// iPad and iPod detection	
	var isiPad = function(){
		return (navigator.platform.indexOf("iPad") != -1);
	};

	var isiPhone = function(){
	    return (
			(navigator.platform.indexOf("iPhone") != -1) || 
			(navigator.platform.indexOf("iPod") != -1)
	    );
	};

	var fullHeight = function() {
		if ( !isiPad() && !isiPhone() ) {
			$('.js-fullheight').css('height', $(window).height());
			$(window).resize(function(){
				$('.js-fullheight').css('height', $(window).height());
			})
		}
		

	};

	var sliderMain = function() {
		
	  	$('#fh5co-home .flexslider').flexslider({
			animation: "fade",
			slideshowSpeed: 5000
	  	});

	  	$('#fh5co-home .flexslider .slides > li').css('height', $(window).height());	
	  	$(window).resize(function(){
	  		$('#fh5co-home .flexslider .slides > li').css('height', $(window).height());	
	  	});

	};

	var sliderSayings = function() {
		$('#fh5co-sayings .flexslider').flexslider({
			animation: "slide",
			slideshowSpeed: 5000,
			directionNav: false,
			controlNav: true,
			smoothHeight: true,
			reverse: true
	  	});
	}

	var offcanvasMenu = function() {
		$('body').prepend('<div id="fh5co-offcanvas" />');
		$('body').prepend('<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>');

		$('.fh5co-main-nav .fh5co-menu a').each(function(){

			var $this = $(this);

			$('#fh5co-offcanvas').append($this.clone());

		});
		// $('#fh5co-offcanvas').append
	};

	var mainMenuSticky = function() {

		$(window).scroll(function() {
			if($(this).scrollTop() > 10)  /*height in pixels when the navbar becomes non opaque*/
			{
				$('.js-sticky').addClass('semitransparent-background');
			} else {
				$('.js-sticky').removeClass('semitransparent-background');
			}
		});
		
	};
	
	// Parallax
	var parallax = function() {

		$(window).stellar();

	};


	// Burger Menu
	var burgerMenu = function() {

		$('body').on('click', '.js-fh5co-nav-toggle', function(event){

			var $this = $(this);

			$('body').toggleClass('fh5co-overflow offcanvas-visible');
			$this.toggleClass('active');
			event.preventDefault();

		});

	};

	var scrolledWindow = function() {

		$(window).scroll(function(){

			var scrollPos = $(this).scrollTop();


			$('#fh5co-home .fh5co-text').css({
		      'opacity' : 1-(scrollPos/300),
		      'margin-top' : (-212) + (scrollPos/1)
		   });

		   $('#fh5co-home .flexslider .fh5co-overlay').css({
				'opacity' : (.5)+(scrollPos/2000)
		   });

		   if (scrollPos > 300) {
				$('#fh5co-home .fh5co-text').css('display', 'none');
			} else {
				$('#fh5co-home .fh5co-text').css('display', 'block');
			}
		   

		});

		$(window).resize(function() {
			if ( $('body').hasClass('offcanvas-visible') ) {
		   	$('body').removeClass('offcanvas-visible');
		   	$('.js-fh5co-nav-toggle').removeClass('active');
		   }
		});
		
	};


	var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500);
			
			return false;
		});
	
	};


	// Page Nav
	var clickMenu = function() {
		var topVal = ( $(window).width() < 769 ) ? 0 : 58;

		$(window).resize(function(){
			topVal = ( $(window).width() < 769 ) ? 0 : 58;		
		});
		$('.fh5co-main-nav:not(.non-index) a:not([class="external"]), #fh5co-offcanvas a:not([class="external"])').click(function(event){
			var section = $(this).data('nav-section');

				if ( $('div[data-section="' + section + '"]').length ) {

					$('html, body').animate({
			        	scrollTop: $('div[data-section="' + section + '"]').offset().top - topVal
			    	}, 500);	
			    	
			   }

		    event.preventDefault();

		    // return false;
		});


	};

	// Reflect scrolling in navigation
	var navActive = function(section) {
		
		$('.fh5co-main-nav a[data-nav-section], #fh5co-offcanvas a[data-nav-section]').removeClass('active');
		$('.fh5co-main-nav, #fh5co-offcanvas').find('a[data-nav-section="'+section+'"]').addClass('active');
		
	};

	var navigationSection = function() {

		var $section = $('div[data-section]');
		
		$section.waypoint(function(direction) {
		  	if (direction === 'down') {
		    	navActive($(this.element).data('section'));
		  	}

		}, {
	  		offset: '150px'
		});

		$section.waypoint(function(direction) {
		  	if (direction === 'up') {
		    	navActive($(this.element).data('section'));
		  	}
		}, {
		  	offset: function() { return -$(this.element).height() + 155; }
		});

	};


	// Animations
	var homeAnimate = function() {
		if ( $('#fh5co-home').length > 0 ) {	

			$('#fh5co-home').waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						$('#fh5co-home .to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					
					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};



	var aboutAnimate = function() {
		var about = $('#fh5co-about');
		if ( about.length > 0 ) {	

			about.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						about.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					setTimeout(function() {
						about.find('.to-animate-2').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeIn animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					

					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};

	var sayingsAnimate = function() {
		var sayings = $('#fh5co-sayings');
		if ( sayings.length > 0 ) {	

			sayings.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						sayings.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);


					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};

	var featureAnimate = function() {
		var feature = $('#fh5co-courses');
		if ( feature.length > 0 ) {	

			feature.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						feature.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					setTimeout(function() {
						feature.find('.to-animate-2').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('bounceIn animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 500);


					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};

	var advantagesAnimate = function() {
		var advantages = $('#fh5co-advantages');
		if ( advantages.length > 0 ) {	

			advantages.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						advantages.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};

	var galleryAnimate = function() {
		var photoGallery = $('#fh5co-gallery');
		if ( photoGallery.length > 0 ) {	

			photoGallery.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						photoGallery.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					setTimeout(function() {
						photoGallery.find('.to-animate-2').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeIn animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 500);

					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};


	var reviewsAnimate = function() {
		var reviews = $('#fh5co-reviews');
		if ( reviews.length > 0 ) {	

			reviews.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						reviews.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeIn animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					setTimeout(function() {
						reviews.find('.to-animate-2').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 500);

					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};

	var newsAnimate = function() {
		var news = $('#fh5co-news');
		if ( news.length > 0 ) {

			news.waypoint( function( direction ) {

				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						news.find('.to-animate').each(function( k ) {
							var el = $(this);

							setTimeout ( function () {
								el.addClass('fadeIn animated');
							},  k * 200, 'easeInOutExpo' );

						});
					}, 200);

					setTimeout(function() {
						news.find('.to-animate-2').each(function( k ) {
							var el = $(this);

							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );

						});
					}, 500);

					$(this.element).addClass('animated');

				}
			} , { offset: '80%' } );

		}
	};

	var sendFeedAnimate = function() {
		var contact = $('#fh5co-send-feed');
		if ( contact.length > 0 ) {	

			contact.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						contact.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeIn animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					setTimeout(function() {
						contact.find('.to-animate-2').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 500);

					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};

	var footerAnimate = function() {
		var footer = $('#fh5co-footer');
		if ( footer.length > 0 ) {	

			footer.waypoint( function( direction ) {
										
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {


					setTimeout(function() {
						footer.find('.to-animate').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeIn animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 200);

					setTimeout(function() {
						footer.find('.to-animate-2').each(function( k ) {
							var el = $(this);
							
							setTimeout ( function () {
								el.addClass('fadeInUp animated');
							},  k * 200, 'easeInOutExpo' );
							
						});
					}, 500);

					$(this.element).addClass('animated');
						
				}
			} , { offset: '80%' } );

		}
	};
	


	// Document on load.
	$(function(){

		fullHeight();
		sliderMain();
		sliderSayings();
		offcanvasMenu();
		mainMenuSticky();
		parallax();
		burgerMenu();
		scrolledWindow();
		clickMenu();
		navigationSection();
		goToTop();


		// Animations
		homeAnimate();
		aboutAnimate();
		sayingsAnimate();
		featureAnimate();
		advantagesAnimate();
		galleryAnimate();
		reviewsAnimate();
		newsAnimate();
		sendFeedAnimate();
		footerAnimate();

		$(".owl-carousel-reviews").owlCarousel({
			items: 3,
			loop: true,
			nav: true,
			navText: [
				"<img class='to-animate-2' src='images/igra/arrow-left.png'>",
				"<img class='to-animate-2' src='images/igra/arrow-right.png'>"
			],
			responsive: { // responsive behaviour
				0:{
					items:1
				},
				768:{ // for example at 768 screen width, owl carousel will only show two items
					items:2
				},
				1200:{
					items:3
				}
			}
		});

		$(".owl-carousel-news").owlCarousel({
			items: 3,
			loop: true,
			nav: true,
			navText: [
				"<img class='to-animate-2' src='images/igra/arrow-left.png'>",
				"<img class='to-animate-2' src='images/igra/arrow-right.png'>"
			],
			responsive: { // responsive behaviour
				0:{
					items:1
				},
				768:{ // for example at 768 screen width, owl carousel will only show two items
					items:2
				},
				1200:{
					items:3
				}
			}
		});

		$(".owl-carousel-on-courses").owlCarousel({
			items: 5,
			loop: true,
			nav: true,
			navText: [
				"<img src='images/igra/arrow-left.png'>",
				"<img src='images/igra/arrow-right.png'>"
			],
			responsive: { // responsive behaviour
				0:{
					items:1
				},
				480:{
					items:2
				},
				768:{ // for example at 768 screen width, owl carousel will only show two items
					items:3
				},
				1200:{
					items:4
				}
			}
		});

		$(".owl-video-carousel-on-courses").owlCarousel({
			items: 2,
			loop: true,
			nav: true,
			margin: 10,
			navText: [
				"<img src='images/igra/arrow-left.png'>",
				"<img src='images/igra/arrow-right.png'>"
			],
			responsive: { // responsive behaviour
				0:{
					items:1
				},
				480:{
					items:2
				}
			}
		});

		/* НАЧАЛО Image LightBox */
		//проверяем, есть ли элементы с data-imagelightbox на странцие, и только тогда запускаем код
		var isItLightbox = $('[data-imagelightbox]');
		if (isItLightbox.length > 0) {
			// activity indicator
			var activityIndicatorOn = function () {
					$('<div id="imagelightbox-loading"><div></div></div>').appendTo('body');
				},
				activityIndicatorOff = function () {
					$('#imagelightbox-loading').remove();
				},

			// overlay
				overlayOn = function () {
					$('<div id="imagelightbox-overlay"></div>').appendTo('body');
				},
				overlayOff = function () {
					$('#imagelightbox-overlay').remove();
				},

			// close button
				closeButtonOn = function (instance) {
					$('<button type="button" id="imagelightbox-close" title="Close"></button>').appendTo('body').on('click touchend', function () {
						$(this).remove();
						instance.quitImageLightbox();
						return false;
					});
				},
				closeButtonOff = function () {
					$('#imagelightbox-close').remove();
				},

			// navigation
				navigationOn = function (instance, selector) {
					var images = $(selector);
					if (images.length) {
						var nav = $('<div id="imagelightbox-nav"></div>');
						for (var i = 0; i < images.length; i++)
							nav.append('<button type="button"></button>');

						nav.appendTo('body');
						nav.on('click touchend', function () {
							return false;
						});

						var navItems = nav.find('button');
						navItems.on('click touchend', function () {
							var $this = $(this);
							if (images.eq($this.index()).attr('href') != $('#imagelightbox').attr('src'))
								instance.switchImageLightbox($this.index());

							navItems.removeClass('active');
							navItems.eq($this.index()).addClass('active');

							return false;
						})
							.on('touchend', function () {
								return false;
							});
					}
				},
				navigationUpdate = function (selector) {
					var items = $('#imagelightbox-nav button');
					items.removeClass('active');
					items.eq($(selector).filter('[href="' + $('#imagelightbox').attr('src') + '"]').index(selector)).addClass('active');
				},
				navigationOff = function () {
					$('#imagelightbox-nav').remove();
				},

			// arrows
				arrowsOn = function (instance, selector) {
					var $arrows = $('<button type="button" class="imagelightbox-arrow imagelightbox-arrow-left"></button><button type="button" class="imagelightbox-arrow imagelightbox-arrow-right"></button>');

					$arrows.appendTo('body');

					$arrows.on('click touchend', function (e) {
						e.preventDefault();

						var $this = $(this),
							$target = $(selector + '[href="' + $('#imagelightbox').attr('src') + '"]'),
							index = $target.index(selector);

						if ($this.hasClass('imagelightbox-arrow-left')) {
							index = index - 1;
							if (!$(selector).eq(index).length)
								index = $(selector).length;
						}
						else {
							index = index + 1;
							if (!$(selector).eq(index).length)
								index = 0;
						}

						instance.switchImageLightbox(index);
						return false;
					});
				},
				arrowsOff = function () {
					$('.imagelightbox-arrow').remove();
				};

			// по нажатию на data-imagelightbox="f" открывается lighbBox:
			var selectorF = 'a[data-imagelightbox="f"]';
			var instanceF = $(selectorF).imageLightbox(
				{
					onStart: function () {
						overlayOn();
						closeButtonOn(instanceF);
						arrowsOn(instanceF, selectorF);
					},
					onEnd: function () {
						overlayOff();
						closeButtonOff();
						arrowsOff();
						activityIndicatorOff();
					},
					onLoadStart: function () {
						activityIndicatorOn();
					},
					onLoadEnd: function () {
						activityIndicatorOff();
						$('.imagelightbox-arrow').css('display', 'block');
					}
				});
		}
		/* КОНЕЦ Image LightBox */

	});


}());