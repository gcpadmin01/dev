import $ from 'jquery';
window.Popper = require('popper.js');
window.Tether = require('tether');
require('./bootstrap');
window.Masonry = require('masonry-layout');
window.owlCarousel= require('owl.carousel');
window.focusPoint = require('jquery-focuspoint');
window.cookieconsent = require('cookieconsent');
window.select2 = require('select2');
window.slick = require('slick-carousel');
window.ProgressBar = require('progressbar.js');
window.datepicker = require('bootstrap-datepicker');
window.Countdown = require('countdown-js');

(function($) {
	$(document).ready(function() {	
		$('[data-toggle="tooltip"]').tooltip();
		var ten_days = 1000 * 60 * 60 * 24;
		var end = new Date(new Date().getTime() + ten_days);;
		var timer = Countdown.timer(end, function(timeLeft) {
			$('#timer').text(timeLeft.hours + ':' + timeLeft.minutes + ':' + timeLeft.seconds);
			$('#timer2').text(timeLeft.hours + ':' + timeLeft.minutes + ':' + timeLeft.seconds);
			$('#timer3').text(timeLeft.hours + ':' + timeLeft.minutes + ':' + timeLeft.seconds);
			$('#timer4').text(timeLeft.hours + ':' + timeLeft.minutes + ':' + timeLeft.seconds);
		}, function() {
			
		});
		var arrayDate={
			'orientation':'bottom',
			'format': "dd/mm/yyyy",
			'todayHighlight':true,
			'templates': {
				'leftArrow': '<i class="fas fa-arrow-circle-left"></i>',
				'rightArrow': '<i class="fas fa-arrow-circle-right"></i>'
			},
			'startDate': 'today',
		};
	
		var b= $(".combo");
		console.log(b.length);
		if(b.length>0){
			$('.combo').select2({
				allowClear: true,
				minimumResultsForSearch: Infinity
			});
		}
	
			//video slider individual destination
		var a= $("#player");

		if(a.length==1){
			var player = new Plyr('#player',{
					autoplay:true,
					muted:true,
					loop:{ active:true } , 
			});
				
			player.source = {
				type: 'video',
				sources: [
					{
						src: 'PAtu5ja1u70',
						provider: 'youtube',
					},
				],
			};
			player.play();
		}	else{
		}	
	
		//Carrusel destination
		$('.carousel-destination').slick({
			arrows: false,
			slidesToShow: 6, 
			slidesToScroll: 1,
			duration: 4400,
			asNavFor: '.content-carousel-destination',
			focusOnSelect: true,
			responsive: [
				{
					breakpoint:767,
					settings:{
						arrows:true,
						centerMode:true,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		});
			
		$('.content-carousel-destination').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			touchMove: false,
			swipe: false,
			asNavFor: '.carousel-destination',
		});

		/* Resorts Slick Carousel */

		$('.resort-gallery').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			asNavFor: '.resort-gallery-nav',
			responsive: [
				{
					breakpoint:767,
					settings:{
						arrows:true,
					}
				}
			]
		});

		$('.resort-gallery-nav').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.resort-gallery',
			dots: false,
			arrows: true,
			centerMode: false,
			focusOnSelect: true
		});
	
		$('.restaurants-tabs').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			dots: false,
			fade: true,
			asNavFor: '.restaurants-nav'
		});

		$('.restaurants-nav').slick({
			slidesToShow: 4,
			slidesToScroll: 1,
			asNavFor: '.restaurants-tabs',
			dots: false,
			arrows: true,
			centerMode: false,
			focusOnSelect: true
        });
        
        $('.things-to-do').slick({
            slidesToShow: 6,
            slidesToScroll: 6,
            dots: false,
            arrows: false,
            centerMode: true,
            focusOnSelect: true
        });
		
        /* End Resorts Slick Carousel */
        
      			  /* Star Slick Type of trips  Individual*/

                        //Tabs Individual trip
           
                        $('.menu-trip').slick({
                            arrows: false,
                            slidesToShow: 7, 
                            autoplay: false,
                            slidesToScroll: 1,
                            asNavFor: '.content-tabs-trip',
                            focusOnSelect: true,
                            responsive: [
                                        {
                                                breakpoint:767,
                                                settings:{
                                                        arrows:true,
                                                        centerMode:true,
                                                        centerPadding: '40px',
                                                        slidesToShow: 1
                                                }
                                        }
                                    ]
                        });
            
                        $('.content-tabs-trip').slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false,
                            autoplay:false,
                            fade: true,
                            touchMove: false,
                            swipe: false,
                            asNavFor: '.menu-trip'
                        });
                        $('.submenu-trip').slick({
                            arrows: false,
                            slidesToShow: 8, 
                            autoplay: false,
                            slidesToScroll: 1,
                            initialSlide:1,
                            asNavFor: '.subcontent-trip',
                            focusOnSelect: true,
                           
                        });
                        $('.subcontent-trip').slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            initialSlide:1,
                            arrows: false,
                            autoplay:false,
                            fade: true,
                            touchMove: false,
                            swipe: false,
                            asNavFor: '.submenu-trip'
                        });
        /* End Slick Type of trips Individual */



	
		if ($('#destination-bar').length > 0) {
			var bar = new ProgressBar.Line('#destination-bar', {
				strokeWidth: 4,
				easing: 'easeInOut',
				duration: 40000,
				color: '#00ACED',
				trailColor: '#eee',
				trailWidth: 1,
				svgStyle: {width: '100%', height: '100%'}
			});
	
			
			function recBar() {
				bar.animate(1.0, function () {
					$('.content-carousel-destination').slick('slickNext');
					bar.set(0);
					recBar();
				});
			}
			recBar();
	
			$('.destination-element').on('click', function () {
				bar.set(0);
				recBar();
			});
		}
		/************************************************************* */
	
		// Carousel  Tours

		$('.carousel-tours').slick({
			arrows: false,
			slidesToShow: 5, 
			slidesToScroll: 1,
			asNavFor: '.content-carousel-tours',
			focusOnSelect: true,
			responsive: [{
				breakpoint:767,
				settings:{
					arrows:true,
					centerMode:true,
					centerPadding: '40px',
					slidesToShow: 1
				}
			}]
		});
	
		$('.content-carousel-tours').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			touchMove: false,
			swipe: false,
			asNavFor: '.carousel-tours'
		});
			
		if ($('#tours-bar').length > 0) {
			var bar = new ProgressBar.Line('#tours-bar', {
				strokeWidth: 4,
				easing: 'easeInOut',
				duration: 10000,
				color: '#00ACED',
				trailColor: '#eee',
				trailWidth: 1,
				svgStyle: {width: '100%', height: '100%'}
			});        
			
			function recBar() {
				bar.animate(1.0, function () {
					$('.content-carousel-tours').slick('slickNext');
					bar.set(0);
					recBar();
				});
			}
			recBar();
		
			$('.tours-element').on('click', function () {
				bar.set(0);
				recBar();
			});
		}

		/********************************************************* */

		//Carousel types of trips
		$('.carousel-type-of-trips').slick({
			arrows: true,
			slidesToShow: 7, 
			slidesToScroll: 1,
			asNavFor: '.content-carousel-trips',
			focusOnSelect: true,
			responsive: [
				{
					breakpoint:767,
					settings:{
						arrows:true,
						centerMode:true,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		});
	
		$('.content-carousel-trips').slick({
				slidesToShow: 1,
				slidesToScroll: 1,
				arrows: false,
				fade: true,
				touchMove: false,
				swipe: false,
				asNavFor: '.carousel-type-of-trips'
		});
	
		var arrayColor = ['#fdb319','#f12525','#e96b00','#00aced','#da005c','#4ca92b','#000000'];
		var next = 0;
		var colorBar = arrayColor[next];
		if ($('#trips-bar').length > 0) {
			var barTrips = new ProgressBar.Line('#trips-bar', {
				strokeWidth: 4,
				easing: 'easeInOut',
				duration: 10000,
				color: colorBar,
				trailColor: '#eee',
				trailWidth: 1,
				svgStyle: {width: '100%', height: '100%'}
			});
			
			function recBarTrips() {
				barTrips.animate(1.0, function () {
					$('.content-carousel-trips').slick('slickNext');
					next++;
					
					if (next <= arrayColor.length-1) {
						colorBar = arrayColor[next];
					}
					else{
						next = 0;
						colorBar = arrayColor[next];
					}
					barTrips.path.setAttribute('stroke', colorBar);
					barTrips.set(0);
					recBarTrips();
				});
			}
	
			recBarTrips();
			
			$('.carousel-type-of-trips').on('afterChange', function(event, slick, direction){
				switch (slick.currentSlide) {
					case 0:
						barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
						barTrips.set(0);
						recBarTrips();
						break;
					case 1:
						barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
						barTrips.set(0);
						recBarTrips();
						break;
					case 2:
						barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
						barTrips.set(0);
						recBarTrips();
						break;
					case 3:
						barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
						barTrips.set(0);
						recBarTrips();
						break;
					case 4:
						barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
						barTrips.set(0);
						recBarTrips();
							break;
					case 5:
						barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
						barTrips.set(0);
						recBarTrips();
							break;
					case 6:
						barTrips.path.setAttribute('stroke', arrayColor[slick.currentSlide]);
						barTrips.set(0);
						recBarTrips();
						break;
				}
			});
		}
			
		/********************************************************** */
		
		// Carousel Specials

		$('.carousel-specials').slick({
			arrows: false,
			slidesToShow: 4, 
			slidesToScroll: 1,
			asNavFor: '.content-carousel-specials',
			focusOnSelect: true,
			responsive: [
				{
					breakpoint:767,
					settings:{
						arrows:true,
						centerMode:true,
						centerPadding: '40px',
						slidesToShow: 1
					}
				}
			]
		});
			
		$('.content-carousel-specials').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			fade: true,
			touchMove: false,
			swipe: false,
			asNavFor: '.carousel-specials',
		});
		
		/********************************************************** */
		$("#booking-btn").on('click', function(){
			$("#booking-interno").toggleClass("show-booking");
			$('body, html').animate({
				scrollTop: '0px'
			}, 300);
			var windowTop = $(document).scrollTop();
			if(windowTop>28){
				$("#booking-interno").removeClass("show-booking");	
				$("#booking-interno").toggleClass("show-booking");
			}
		});
		
		$("#booking-movil").on('click', function(){
			$("#booking-interno").toggleClass("show-booking");
			$('body, html').animate({
					scrollTop: '0px'
			}, 300);
			var windowTop = $(document).scrollTop();
			if(windowTop>28){
				$("#booking-interno").removeClass("show-booking");	
				$("#booking-interno").toggleClass("show-booking");
			}

		});
	
		var coll = document.getElementsByClassName("collapsible");
		var icon = document.getElementById("up-collapseOne");
		var i;

		
		for (i = 0; i < coll.length; i++) {
			coll[i].addEventListener("click", function() {
				this.classList.toggle("active");
				
				var content = this.nextElementSibling;
				if (content.style.maxHeight){
					content.style.maxHeight = null;
				} else {
					content.style.maxHeight = content.scrollHeight + "px";
				} 
			});
		}
	
	
		$('.owl-carousel.reviews').owlCarousel({
			loop:true,
			nav:false,
			margin:2,
			responsive:{
				0:{
					items:1

				},
				600:{
					items:1
				},
				1000:{
					items:1
				}
			}
		});
			
		$('#lenguage').dropdown('toggle');

		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width <= 767) {


					// Reubicar collpase Destination
					$('#resort-cancun').appendTo('#aqui-cancun');
					$('#resort-carmen').appendTo('#aqui-carmen');
					$('#resort-morelos').appendTo('#aqui-morelos');
					$('#resort-maya').appendTo('#aqui-maya');
					
					$('#resort-cana').appendTo('#aqui-cana');
					$('#resort-curacao').appendTo('#aqui-curacao');
					$('#resort-marteen').appendTo('#aqui-marteen');


			$("#check-in").datepicker(arrayDate).on('changeDate', function(e) {
				var date2 = $(this).datepicker('getDate');
				date2.setDate(date2.getDate() + 1);
				$(this).datepicker('hide');
				$('#check-out').datepicker('setStartDate', date2).datepicker('setDate', date2).datepicker('show');
			});
			$("#check-in-2").datepicker(arrayDate).on('changeDate', function(e) {
				var date2 = $(this).datepicker('getDate');
				date2.setDate(date2.getDate() + 1);
				$(this).datepicker('hide');
				$('#check-out-2').datepicker('setStartDate', date2).datepicker('setDate', date2).datepicker('show');
			});
			$('#check-out').datepicker(arrayDate).on('changeDate',function(e){
				$(this).datepicker('hide');
			}) ;
			$('#check-out-2').datepicker(arrayDate).on('changeDate',function(e){
				$(this).datepicker('hide');
			}) ;
			
				
			//formularios check-in y checkout
			$(".accordion-body").removeClass('show');
			$("#collapseOne").addClass("show");
			

			//***************************************** */
	
			$(document).on('show','.accordion', function (e) {
				//$('.accordion-heading i').toggleClass(' ');
				$(e.target).prev('.accordion-heading').addClass('accordion-opened');
			});
			
			$(document).on('hide','.accordion', function (e) {
				$(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');
				//$('.accordion-heading i').toggleClass('fa-chevron-right fa-chevron-down');
			});
			if ($('#instafeed').length > 0) {
				var userFeed = new Instafeed({
					get: 'user',
					userId: '2275229523',
					limit: 3,
					resolution: 'thumbnail',
					accessToken: '2275229523.1677ed0.74e18168569a4484a73ec4d9c62d8314',
					sortBy: 'most-recent',
					template: '<div class="instagram_img_holder" style="background-image:url({{image}})"><a href="{{link}}"  target="_blank" class="enlace-insta"><p></p></a></div>',
				});
				userFeed.run();
			}
	
			$('.blue-carousel.av-menu-skyblue').slick({
				slidesToShow: 3,
				responsive: [
					{
						breakpoint: 768,
						settings: {
							slidesToShow: 1,
							slidesToScroll: 1,
							autoplay: true,
							autoplaySpeed: 2000,
							arrows: false,
						}
					},
				]
			});
	
			$('.owl-carousel.specials').owlCarousel({
				loop:false,
				margin:2,
				responsive:{
					0:{
						items:1,
						nav:true,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					668:{
						items:2,
						nav:true,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					768:{
						items:2,
						nav:true,
						navText :["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					968:{
						items:3,
						navText :["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					}
				}
			});
	
			$('.owl-carousel.moretours').owlCarousel({
				loop:true,
				nav:true,
				margin:2,
				responsive:{
					0:{
						items:1,
						navText : ["<i class='fas fa-arrow-alt-circle-left color-white'></i>","<i class='fas fa-arrow-alt-circle-right color-white'></i>"],
					},
					600:{
						items:2,
						navText : ["<i class='fas fa-angle-left color-white'></i>","<i class='fas fa-angle-right color-white'></i>"],
					},
					1000:{
						items:3,
						navText : ["<i class='fas fa-arrow-alt-circle-left color-white'></i>","<i class='fas fa-arrow-alt-circle-right color-white'></i>"],
					},
					1100:{
						items:3,
						navText : ["<i class='fas fa-arrow-alt-circle-left'></i>","<i class='fas fa-arrow-alt-circle-right color-white'></i>"],
					}
				}
			});
	
			$('.owl-carousel.resortpromotion').owlCarousel({
				loop:true,
				nav:true,
				margin:2,
				responsive:{
					0:{
						items:1,
						navText : ["<i class='fas fa-arrow-alt-circle-left color-white'></i>","<i class='fas fa-arrow-alt-circle-right color-white'></i>"],
					},
					600:{
						items:2,
						navText : ["<i class='fas fa-angle-left color-white'></i>","<i class='fas fa-angle-right color-white'></i>"],
					},
					1000:{
						items:3,
						navText : ["<i class='fas fa-arrow-alt-circle-left color-white'></i>","<i class='fas fa-arrow-alt-circle-right color-white'></i>"],
					},
					1100:{
						items:4,
						navText : ["<i class='fas fa-arrow-alt-circle-left'></i>","<i class='fas fa-arrow-alt-circle-right color-white'></i>"],
					}
				}
			});
	
					// Resort
			$('#collapseTwo').collapse('hide');
			$('#collapseThree').collapse('hide');
			$('#collapseFour').collapse('hide');

			/*var resort_images = document.getElementsByClassName("movil-size-resort");
			//Cambiar imagen de la zona de resort Home
			if(resort_images.length > 0){
				resort_images[0].style.backgroundImage = "url('img/resort-cancun-movil-min.png')";
				resort_images[1].style.backgroundImage = "url('img/resort-rivieramaya-movil-min.png')";
				resort_images[2].style.backgroundImage = "url('img/resort-curacao-movil-min.png')";
				resort_images[3].style.backgroundImage = "url('img/resort-puntacana-movil-min.png')";
				resort_images[4].style.backgroundImage = "url('img/resort-puertomorelos-movil-min.png')";
			}*/
	
		}else{


					

			//formularios check-in y checkout
			$('.info-travel').click(false);
			$("#check-in").datepicker(arrayDate).on('changeDate', function(e) {
				var date2 = $(this).datepicker('getDate');
				date2.setDate(date2.getDate() + 1);
				$(this).datepicker('hide');
				$('#check-out').datepicker('setStartDate', date2).datepicker('setDate', date2).datepicker('show');
			});

			$("#check-in-2").datepicker(arrayDate).on('changeDate', function(e) {
				var date2 = $(this).datepicker('getDate');
				date2.setDate(date2.getDate() + 1);
				$(this).datepicker('hide');
			$('#check-out-2').datepicker('setStartDate', date2).datepicker('setDate', date2).datepicker('show');
			});
			$('#check-out').datepicker(arrayDate).on('changeDate',function(e){
				$(this).datepicker('hide');
			}) ;
			$('#check-out-2').datepicker(arrayDate).on('changeDate',function(e){
				$(this).datepicker('hide');
			});

			//formularios check-in y checkout

			$('.owl-carousel.specials').owlCarousel({
				loop:true,
				nav:true,
				margin:2,
				responsive:{
					0:{
						items:1,
						nav:true,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					600:{
						items:2,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					1000:{
						items:3,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					1100:{
						items:4,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					}
				}
			});

			$('.owl-carousel.moretours').owlCarousel({
				loop:true,
				nav:true,
				margin:2,
				responsive:{
					0:{
						items:1,
						nav:true,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					600:{
						items:2,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					1000:{
						items:3,
						nav:true,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					1100:{
						items:3,
						nav:true,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					}
				}
			});

			$('.owl-carousel.resortpromotion').owlCarousel({
				loop:true,
				nav:true,
				margin:2,
				responsive:{
					0:{
						items:1,
						navText : ["<i class='fas fa-arrow-alt-circle-left color-white'></i>","<i class='fas fa-arrow-alt-circle-right color-white'></i>"],
					},
					600:{
						items:2,
						navText : ["<i class='fas fa-angle-left color-white'></i>","<i class='fas fa-angle-right color-white'></i>"],
					},
					1000:{
						items:3,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					},
					1100:{
						items:4,
						navText : ["<img src='/img/specials-arrow-izq.png'>","<img src='/img/specials-arrow-der.png'>"],
					}
				}
			});
	
	
			if ($('#instafeed').length > 0) {
				var userFeed = new Instafeed({
					get: 'user',
					userId: '2275229523',
					limit: 6,
					resolution: 'low_resolution',
					accessToken: '2275229523.1677ed0.74e18168569a4484a73ec4d9c62d8314',
					sortBy: 'most-recent',
					
					template: '<div class="instagram_img_holder" style="background-image:url({{image}})"><a href="{{link}}"  target="_blank" class="enlace-insta"><p></p></a></div>',
				});
				userFeed.run();
			}
		}
	
		$('#collapseOne').on('show.bs.collapse', function () {
				$('#down-collapseOne').replaceWith('<i id="up-collapseOne" class="fas fa-angle-up fa-2x"></i>');
		});
		$('#collapseTwo').on('show.bs.collapse', function () {
				$('#down-collapseTwo').replaceWith('<i id="up-collapseTwo" class="fas fa-angle-up fa-2x"></i>');
		});
		$('#collapseThree').on('show.bs.collapse', function () {
				$('#down-collapseThree').replaceWith('<i id="up-collapseThree" class="fas fa-angle-up fa-2x"></i>');
		});
		$('#collapseFour').on('show.bs.collapse', function () {
				$('#down-collapseFour').replaceWith('<i id="up-collapseFour" class="fas fa-angle-up fa-2x"></i>');
		});

		$('#collapseOne').on('hide.bs.collapse', function () {
				$('#up-collapseOne').replaceWith('<i id="down-collapseOne" class="fas fa-angle-down fa-2x"></i>');
		});
		$('#collapseTwo').on('hide.bs.collapse', function () {
				$('#up-collapseTwo').replaceWith('<i id="down-collapseTwo" class="fas fa-angle-down fa-2x"></i>');
		});
		$('#collapseThree').on('hide.bs.collapse', function () {
				$('#up-collapseThree').replaceWith('<i id="down-collapseThree" class="fas fa-angle-down fa-2x"></i>');
		});
		$('#collapseFour').on('hide.bs.collapse', function () {
				$('#up-collapseFour').replaceWith('<i id="down-collapseFour" class="fas fa-angle-down fa-2x"></i>');
		});
	
	
		$(window).scroll(function (event) {
			var scroll = $(window).scrollTop();
			var hh = $('.sticky-top').outerHeight(true);

			if(scroll > hh) {
					$('.sticky-top').addClass("sticky-active");
			} else {
					$('.sticky-top').removeClass("sticky-active");
			}
		});

		$('.focuspoint').focusPoint();
		
		$('.subir').click(function(){
			$('body, html').animate({
				scrollTop: '0px'
			}, 300);
		});
		
		$('.focuspoint').focusPoint();
	
		window.cookieconsent.initialise({
				"palette": {
						"popup": {
						"background": "#edeff5",
						"text": "#838391"
						},
						"button": {
						"background": "#0b2c64"
						}
				},
				"theme": "edgeless",
				"content": {
						"message": "This Website uses its own cookies and from third parties in order to improve the user experience and navigation in the portal.",
						"dismiss": "Accept",
						"link": "More Information",
						"href": "https://royalreservations.com/cookies-policy"
				}
		});
	});
    
	var menu_movil = false;
	$('#mostrar_menu_movil').on('click', function(){
			var menu=document.getElementById("oculto");
			if (menu_movil) {
					menu_movil = false;
					menu.style.left = "-100%";
			} else {
					menu_movil = true;
					menu.style.left = 0;
			}
	});

	var click = 's';
	$("#oculto").on('click', function(){
		var menu = document.getElementById("oculto");
		if (click == 'click') {
			click = 's';
		}else{
			menu_movil = false;
			menu.style.left = "-100%";
			click = 's';
		}
	});
			
	$(".menu-oculto").on("click", function(){
		click = 'click';
	});
	
	// Collapse element Destination
	var destination = '';
	$('#resort-cancun').collapse('show');
	
	destination = 'resort-cancun';
	
	$('#resort-cancun').on('show.bs.collapse', function () {
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width > 767) {
			if( destination != '' ){
				$('#' + destination).collapse('hide');
			}
			destination = 'resort-cancun';
		}
	});
			
	$('#resort-carmen').on('show.bs.collapse', function () {
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width > 767) {
			if( destination != '' ){
				$('#' + destination).collapse('hide');
			}
			destination = 'resort-carmen';
		}
	});

	$('#resort-morelos').on('show.bs.collapse', function () {
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width > 767) {
			if( destination != '' ){
				$('#' + destination).collapse('hide');
			}
			destination = 'resort-morelos';
		}
	});
		
	$('#resort-maya').on('show.bs.collapse', function () {
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width > 767) {
			if( destination != '' ){
				$('#' + destination).collapse('hide');
			}
			destination = 'resort-maya';
		}
	});
	
	$('#resort-cana').on('show.bs.collapse', function () {
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width > 767) {
			if( destination != '' ){
				$('#' + destination).collapse('hide');
			}
			destination = 'resort-cana';
		}
	});
		
	$('#resort-curacao').on('show.bs.collapse', function () {
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width > 767) {
			if( destination != '' ){
				$('#' + destination).collapse('hide');
			}
			destination = 'resort-curacao';
		}
	});

	$('#resort-marteen').on('show.bs.collapse', function () {
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width > 767) {
			if( destination != '' ){
				$('#' + destination).collapse('hide');
			}
			destination = 'resort-marteen';
		}
	});
    
	// Cerrar collapse al cambiar de tab
	$('#pills-caribbean-tab').on('click', function () {
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width > 767) {
			var seleccionado = document.querySelector('#pills-caribbean-tab');
			if (seleccionado != 'true') {
				if( destination != '' ){
					$('#' + destination).collapse('hide');
				}
			} 
		}
	});
	
	$('#pills-mexican-tab').on('click', function () {
		var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		if (width > 767) {
			var seleccionado = document.querySelector('#pills-mexican-tab');
			if (seleccionado != 'true') {
				if( destination != '' ){
					$('#' + destination).collapse('hide');
				}
			} 
		}
	});
	//************************************************************** */
	
	// Tabs resort
	$('#pills-resort-all').on('click', function () {
		if($('#resort-mexican').hasClass('d-none')){
			$('#resort-mexican').removeClass('d-none');
			$('#resort-mexican').addClass('d-block');
		}
		if ($('#resort-caribean').hasClass('d-none')) {
			$('#resort-caribean').removeClass('d-none');
			$('#resort-caribean').addClass('d-block');
		}
	});
	$('#pills-resort-mexican').on('click', function () {
		if($('#resort-mexican').hasClass('d-none')){
			$('#resort-mexican').removeClass('d-none');
			$('#resort-mexican').addClass('d-block');
		}
		if ($('#resort-caribean').hasClass('d-block')) {
			$('#resort-caribean').removeClass('d-block');
			$('#resort-caribean').addClass('d-none');
		}
	});
	$('#pills-resort-caribean').on('click', function () {
		if($('#resort-mexican').hasClass('d-block')){
			$('#resort-mexican').removeClass('d-block');
			$('#resort-mexican').addClass('d-none');
		}
		if ($('#resort-caribean').hasClass('d-none')) {
			$('#resort-caribean').removeClass('d-none');
			$('#resort-caribean').addClass('d-block');
		}
	});
    
    /*************************************************************** */
	var menues = $("ul.menu-information li");
	var information_menus = $("ul.content-information");
	menues.hover(function(){
		menues.removeClass("active");
		$(this).addClass("active");
		information_menus.removeClass("active");
		var hola = this;
		for (let i = 0; i < menues.length; i++) {
			if(hola == menues[i]){
				$(information_menus[i]).addClass("active");
			}
		}
	}, function(){});
})(jQuery);