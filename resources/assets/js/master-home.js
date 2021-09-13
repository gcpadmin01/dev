
require('./bootstrap');

//configuracion para el CSRF proteccion de la aplicacion contra vulnerabilidades y ataques
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
require('./home.js');


//scripts globales

$(document).ready(function () {

	//Combo box Selec2.js 

	//Menu Sticky Principal
	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		var hh = $('.sticky-top-').outerHeight(true);

		if (scroll > hh) {
			$('.sticky-top-').addClass("sticky-active");
		} else {
			$('.sticky-top-').removeClass("sticky-active");
		}
	});
	var b = $(".combo");
	console.log(b.length);
	if (b.length > 0) {
		$('.combo').select2({
			allowClear: true,
			minimumResultsForSearch: Infinity
		});
	}

});
