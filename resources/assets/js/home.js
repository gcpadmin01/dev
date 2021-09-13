/** 
function tamSlideReplace() {
	var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
	$.each($(".tam-slide"), function() {
		var filename = $(this).data("filename");
		var src = window.location.protocol + "//" + window.location.host + "/img/";

		if(width > 1440){
			src = src + "desktop";
		} else if(width > 767){
			src = src + "laptop";
		}else if(width >425){
			src = src + "tablet";
		}else if(width>0){
			src = src + "movil";
		}

		src = src + "/" + filename;

		$(this).attr("src", src);
	});
}
*/

$(document).ready(function () {

	// modal bienvenida
	var allcookies = document.cookie;
	if (allcookies.search(/minimizado/)== -1){
		$("#welcome").modal("show");
		var e = new Date();
    	e.setTime(e.getTime()+(10*24*60*60*1000));
    	var expira = "expires="+e.toUTCString();
    	document.cookie="minimizado=1;"+expira+";path=/";
	}
	
	//Menu
	function abrirTab(url,activeTab){
		console.log(url);
		var url = window.location.href;
		var activeTab = url.substring(url.indexOf("#") + 1);
		console.log("entra");
		$(".tab-pane").removeClass("active in");
		$("#" + activeTab).addClass("active in");
	
	
	}
	$('.beach-mexican').on('click', function () {
		console.log("si entra");
		$("#pills-caribbean-tab").removeClass('active');
		$("#pills-mexican-tab").addClass('active');
	});
	$('.beach-caribbean').on('click', function () {
		console.log("si entra");
		$("#pills-caribbean-tab").addClass('active');
		$("#pills-mexican-tab").removeClass('active');
	
	});

	var menu_movil = false;
	$('#mostrar_menu_movil').on('click', function () {
		var menu = document.getElementById("oculto");
		if (menu_movil) {
			menu_movil = false;
			menu.style.left = "-100%";
		} else {
			menu_movil = true;
			menu.style.left = 0;
			menu.style.transition = "0.3s all ease";
		}
	});

	var click = 's';
	$("#oculto").on('click', function () {
		var menu = document.getElementById("oculto");
		if (click == 'click') {
			click = 's';
		} else {
			menu_movil = false;
			menu.style.left = "-100%";
			click = 's';
		}
	});

	$(".menu-oculto").on("click", function () {
		click = 'click';
	});


	//Politicas de cookies
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
			"href": "https://royalreservations.com/about-us/privacy-policy"
		}
	});




	//Header y  Slider
	$('#lenguage').dropdown('toggle');

	//Menu Azul Call Us Information
	var menues = $("ul.menu-information li");
	var information_menus = $("ul.content-information");
	menues.hover(function () {
		menues.removeClass("active");
		$(this).addClass("active");
		information_menus.removeClass("active");
		var hola = this;
		for (var i = 0; i < menues.length; i++) {
			if (hola == menues[i]) {
				$(information_menus[i]).addClass("active");
			}
		}
	}, function () {});

	$.fn.datepicker.dates['es'] = {
    days: ["Domingo", "Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado"],
    daysShort: ["Dom", "Lun", "Mar", "Mie", "Jue", "Vie", "Sab"],
    daysMin: ["Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa"],
    months: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic"],
    today: "Hoy",
    clear: "Limpiar",
    format: "mm/dd/yyyy",
    titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
    weekStart: 0
	};

	//Booking Engine
	var arrayDate = {
		'orientation': 'bottom',
		'format': "mm/dd/yyyy",
		'todayHighlight': true,
		'startDate': 'today',
		'language': language
	};
	$("#check-in").datepicker(arrayDate).on('changeDate', function (e) {
		var date2 = $(this).datepicker('getDate');
		date2.setDate(date2.getDate() + 1);
		$(this).datepicker('hide');
		$('#check-out').datepicker('setStartDate', date2).datepicker('setDate', date2).datepicker('show');
	});
	$("#check-in-2").datepicker(arrayDate).on('changeDate', function (e) {
		var date2 = $(this).datepicker('getDate');
		date2.setDate(date2.getDate() + 1);
		$(this).datepicker('hide');
		$('#check-out-2').datepicker('setStartDate', date2).datepicker('setDate', date2).datepicker('show');
	});
	$('#check-out').datepicker(arrayDate).on('changeDate', function (e) {
		$(this).datepicker('hide');
	});
	$('#check-out-2').datepicker(arrayDate).on('changeDate', function (e) {
		$(this).datepicker('hide');
	});
	var f= new Date();
	var f1=(f.getMonth() +1) + "-" + (f.getDate()) + "-" + f.getFullYear();
	var f2=(f.getMonth() +1) + "-" + (f.getDate() + 1) + "-" + f.getFullYear();
	var f3=(f.getMonth() +1) + "-" + (f.getDate() + 2) + "-" + f.getFullYear();
	var bloqueoAnticipacion=[f1,f2,f3];
	$("#check-in-2").datepicker("setDate", "+6d");
	$("#check-out-2").datepicker("setDate", "+10d");
	$('#check-in-2').datepicker('setDatesDisabled', bloqueoAnticipacion);
	$('#check-out-2').datepicker('setDatesDisabled', bloqueoAnticipacion);
	//Select 2 Combobox
	var b = $(".combo");

	if (b.length > 0) {
		$('.combo').select2({
			allowClear: true,
			minimumResultsForSearch: Infinity
		});
	}

	//Section Specials Cards
	/*$('.owl-carousel.specials').owlCarousel({
		loop: false,
		margin: 2,
		navText: ['<i class="fas fa-angle-left"></i>', "<img src='/img/specials-arrow-der.png'/>"],
		nav: true,
		responsive: {
			0: {
                items: 1,
                navText: ["<img src='/img/flecha-izquierda.png'/>", "<img src='/img/flecha-derecha.png'/>"],
			},
			668: {
                items: 2,
                navText: ["<img src='/img/flecha-izquierda.png'/>", "<img src='/img/flecha-derecha.png'/>"],
			},
			768: {
				items: 2,
			},
			1000: {
				items: 3,

			},
			1100: {
				items: 4,

			}
		}
	});*/
	$('.owl-carousel.owlOfertas').owlCarousel({
		loop: true,
		margin: 60,
		navText: ["<img src='https://royalreservations.com/img/flecha-izquierda-gris.png'/>", "<img src='https://royalreservations.com/img/flecha-derecha-gris.png'/>"],
		nav: true,
		// responsive: {
		// 	0: {
        //         items: 1,
        //         navText: ["<img src='/img/flecha-izquierda.png'/>", "<img src='/img/flecha-derecha.png'/>"],
		// 	},
		// 	668: {
        //         items: 2,
        //         navText: ["<img src='/img/flecha-izquierda.png'/>", "<img src='/img/flecha-derecha.png'/>"],
		// 	},
		// 	768: {
		// 		items: 2,
		// 	},
		// 	1000: {
		// 		items: 3,

		// 	},
		// 	1100: {
		// 		items: 3,

		// 	}
		// }
	});


	//section Reviews Yellow
	$('.owl-carousel.reviews').owlCarousel({
		loop: true,
		nav: false,
		margin: 2,
		autoplay:true,
    autoplayTimeout:9900,
    autoplayHoverPause:true,
		responsive: {
			0: {
				items: 1

			},
			600: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});


	//section Top Travel Destinations in the Caribbean Info 
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


	//Footer Up animacion
	$('.subir').click(function () {
		$('body, html').animate({
			scrollTop: '0px'
		}, 1000);
	});

	//Responsive 
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    // if para la insercion del instagram feed en movil, escritorios medianos y grandes
    if (width <= 1029 && width >= 767 ) {
        //Instagram feed Section Movil
		if ($('#instafeed').length > 0) {
			var userFeed = new Instafeed({
				get: 'user',
				userId: '2275229523',
				limit: 4,
				resolution: 'low_resolution',
				accessToken: '2275229523.1677ed0.627acecb7a074011b0d5dab7a59d92c9',
				sortBy: 'most-recent',
				template: '<div class="instagram_img_holder" style="background-image:url({{image}})"><a href="{{link}}"  target="_blank" class="enlace-insta"><p></p></a></div>',
			});
			userFeed.run();
		}

    }else if(width <= 767){
        //Instagram feed Section Movil
		if ($('#instafeed').length > 0) {
			var userFeed = new Instafeed({
				get: 'user',
				userId: '2275229523',
				limit: 3,
				resolution: 'thumbnail',
				accessToken: '2275229523.1677ed0.627acecb7a074011b0d5dab7a59d92c9',
				sortBy: 'most-recent',
				template: '<div class="instagram_img_holder" style="background-image:url({{image}})"><a href="{{link}}"  target="_blank" class="enlace-insta"><p></p></a></div>',
			});
			userFeed.run();
		}

    }else{
        //Instagram Section Escritorio
		if ($('#instafeed').length > 0) {
			var userFeed = new Instafeed({
				get: 'user',
				userId: '2275229523',
				limit: 6,
				resolution: 'low_resolution',
				accessToken: '2275229523.1677ed0.627acecb7a074011b0d5dab7a59d92c9',
				sortBy: 'most-recent',

				template: '<div class="instagram_img_holder" style="background-image:url({{image}})"><a href="{{link}}"  target="_blank" class="enlace-insta"><p></p></a></div>',
			});
			userFeed.run();
		}
    }

	if (width <= 767) {

		//Cintillo Azul Cielo Slider home

		$('.blue-carousel.av-menu-skyblue').slick({
			slidesToShow: 3,
			responsive: [{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
					autoplay: true,
					autoplaySpeed: 2000,
					arrows: false,
				}
			}, ]
		});


		/*//Seccion Resorts
		var resort_images = document.getElementsByClassName("movil-size-resort");
		//Cambiar imagen de la zona de resort Home en Movil
		if (resort_images.length > 0) {
			resort_images[0].style.backgroundImage = "url('img/resort-cancun-movil-min.png')";
			resort_images[1].style.backgroundImage = "url('img/resort-rivieramaya-movil-min.png')";
			resort_images[2].style.backgroundImage = "url('img/resort-curacao-movil-min.png')";
			resort_images[3].style.backgroundImage = "url('img/resort-puertomorelos-movil-min.png')";
			resort_images[4].style.backgroundImage = "url('img/resort-puntacana-movil-min.png')";
		}*/

		//Top Travel Destinations in the Caribbean
		$(".accordion-body").removeClass('show');
		$("#collapseOne").addClass("show");
		$(document).on('show', '.accordion', function (e) {

			$(e.target).prev('.accordion-heading').addClass('accordion-opened');
		});

		$(document).on('hide', '.accordion', function (e) {
			$(this).find('.accordion-heading').not($(e.target)).removeClass('accordion-opened');

		});
		$('#collapseTwo').collapse('hide');
		$('#collapseThree').collapse('hide');
		$('#collapseFour').collapse('hide');

	} else {
		//Top Travel Destinations in the Caribbean
		$('.info-travel').click(false);
	}
});
 
$( "#hotelHome" ).change(function() {
	var resort = $("#hotelHome").val();
	var tag_adult  = $('#tag_adult').val();
	var tag_adult2 = $('#tag_adult2').val();
	var tag_adult3 = $('#tag_adult3').val();
	var tag_teen  = $('#tag_teen').val();
	var tag_children = $('#tag_children').val();
	var tag_children2 = $('#tag_children2').val();
	$('#msg-box').hide();

	if (resort=='95939' || resort=='86182' || resort=='86175' || resort=='106514'){
	    $("#children2").val(0);
	    $('#teenBox').hide();
	    $("#spAdults").text(tag_adult2);
	    $("#spChildren").text(tag_children);
	}else{
		if (resort=='86184' || resort=='86169' || resort=='73601' || resort=='86179' || resort=='86180' || resort=='86181' || resort=='0'){
		    $('#teenBox').show();
		    $("#spAdults").text(tag_adult);
		    $("#spChildren").text(tag_teen);
		    $("#spTeen").text(tag_children);
		}else{
		  	  if (resort=='85285' || resort=='86117' || resort=='103541'){
			    $("#children2").val(0);
			    $('#teenBox').hide();
			    $("#spAdults").text(tag_adult3);
			    $("#spChildren").text(tag_children2);
			  } 
		}
	}		
  
});

$( "#hotel" ).change(function() {
  var resort2 = $("#hotel").val();
  var tag_adult  = $('#tag_adult').val();
  var tag_adult2 = $('#tag_adult2').val();
  var tag_adult3 = $('#tag_adult3').val();
  var tag_teen  = $('#tag_teen').val();
  var tag_children = $('#tag_children').val();
  var tag_children22 = $('#tag_children22').val();

  if(resort2==undefined){
    //var resort = document.getElementById("hotelId").value;
    var resort2 = $('select option:selected').attr('value');
  }
  
  if (resort2=='10732' || resort2=='10730' || resort2=='10729'){
    $("#infant").val(0);
    /*$('#adolecent').hide();*/
    $(".spAdultsB").text(tag_adult2);
    $(".spChildrenB").text(tag_children);
  }else{

	  if (resort2=='10731' || resort2=='10728' || resort2=='10727' || resort2=='10733' || resort2=='10734' || resort2=='10735'){
	    /*$('#adolecent').show();*/
	    $(".spAdultsB").text(tag_adult);
	    $(".spChildrenB").text(tag_children22);
	    $(".spTeenB").text(tag_children);
	  }
  }

	
  
});

$('#btn-home').click(function(e) {
	e.preventDefault();
	var resort = $("#hotelHome").val();
	if (resort != '0') {
		$('#booking-home').submit();
	}else{
		false;
		$('#msg-box').show();
	}
});


	