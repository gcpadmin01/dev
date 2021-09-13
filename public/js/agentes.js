

$("#mostrarMenuMovil").click(function(){
    $("#menuMovil").toggle();
});

$(document).ready(function(){
	$('.rooms-gallery').slick({
		slidesToShow: 1,
		dots: true,
		slidesToScroll: 1,
		arrows: false,
		fade: true,
		autoplay: true,
		infinite: true
	});


	var today = new Date();
	var date2 = today.getDate() + 5;
	var date3 = today.getDate() + 9;

	var arrayDate = {
		'orientation': 'bottom',
		'format': "mm/dd/yyyy",
		'todayHighlight': true,
		'startDate': today,
		'language': language
	};
	
	$("#deals1").datepicker("setDate", "+5d");
	$("#deals2").datepicker("setDate", "+9d");
	$('#deals1').datepicker('setStartDate', today);
	$('#deals2').datepicker('setStartDate', today);

	$("#deals1").datepicker(arrayDate).on('changeDate', function (e) {
		date2 = $(this).datepicker('getDate');
		date2.setDate(date2.getDate() + 4);
		$(this).datepicker('hide');
		$('#deals2').datepicker('setDate', date2).datepicker('show');
		
	});
	$('#deals2').datepicker(arrayDate).on('changeDate', function (e) {
		date3 = $(this).datepicker('getDate');
		$(this).datepicker('hide');
		
	});

});







