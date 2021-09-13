window.$ = window.jQuery = require('jquery');
require('./bootstrap');

window.Countdown = require('countdown-js');
window.slick = require('slick-carousel');

$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});
require('./intern.js');

$(document).ready(function() {	
	//Combo box Selec2.js 
	//Menu Sticky Principal
	$(window).scroll(function (event) {
		var scroll = $(window).scrollTop();
		var hh = $('.sticky-top-').outerHeight(true);

		if(scroll > hh) {
			$('.sticky-top').addClass("sticky-active");
		} else {
			$('.sticky-top').removeClass("sticky-active");
		}
	});
    
	var b= $(".combo");
	console.log(b.length);
	if(b.length>0){
		$('.combo').select2({
			allowClear: true,
			minimumResultsForSearch: Infinity
		});
	}
	
});

