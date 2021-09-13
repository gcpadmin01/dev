require('intersection-observer');

import 'bootstrap/js/dist/util';
import 'bootstrap/js/dist/modal';
import 'jquery-ui/ui/widgets/datepicker.js';
import LazyLoad from './components/lazyload';
var images = document.querySelectorAll(".lazyload");
new LazyLoad(images,{
    rootMargin : '20px'
})


/*$('.owl-deals').owlCarousel({
    items:1,
    lazyLoadEager:1,
    lazyLoad:true,
    loop:true,
    singleItem:true
});*/

$("#navHeader").mouseover(function(){
  $('#mosaic-exit').modal('show');
});
		
/*$('#bajar').click(function(){
	$('html,body').animate({
		scrollTop: '750px'
	}, 300);
});*/

$(".modal-mosaic").on('hidden.bs.modal', function () {
            //alert("Esta accion se ejecuta al cerrar el modal");
    var resort= $(this).data('resorts');
    $('#resortTab-'+ resort).hide();
    $('#offerTab-'+ resort).show();
    $(".dots").css("display", "inline");
  	$(".viewMore").css("display", "none");
  	$(".btnViewMore").text("Read more");  
});

$('#bajar').click(function(){
	$('html,body').animate({
		scrollTop: $("#dashboard_cards").offset().top
	}, 300);
});


$(".bookNow").on( "click", function() {
	var resort= $(this).data('resorts');
	$('#mosaic-'+resort).modal('hide');
	$('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
    $('.modal-backdrop').remove();//eliminamos el backdrop del modal
	$('#form-resort-'+resort).modal('show');
 });

// Muestra y oculta el tab de Resorts y Ofertas (default ofertas)
$(".resortButton").on( "click", function() {
	var resort= $(this).data('resorts');
	if($('#resortTab-'+ resort).css("display") === "none"){
		$(".resortButton").text("View Offer");
		$('#offerTab-' + resort).hide();
		$('#resortTab-'+ resort).show();
	}else{
		$(".resortButton").text("View Resort");
		$('#offerTab-'+ resort).show();
		$('#resortTab-'+ resort).hide();
	}

});

// Abre y cierra el párrafo leer más
$(".btnViewMore").on( "click", function() {
  if ($(".dots").css("display") === "none"){
  	$(".dots").css("display", "inline");
  	$(".viewMore").css("display", "none");
  	$(".btnViewMore").text("Read more");  
  } else {
    $(".dots").css("display", "none");
    $(".btnViewMore").text("Read less");
    $(".viewMore").css("display", "inline");
  }
});

/********/
$('[name="datein"]').datepicker({
    altFormat: "yy-mm-dd",
    dateFormat: 'mm/dd/yy',
    minDate: 0,
    beforeShow:function(input,data){
        this.lastminute = $(input).data('lastminute');

        var dateRange = $(input).data('range');
        var dateMax = $(this).data('date_max');
        if (dateMax !== undefined) {
            dateMax = new Date(dateMax);

            var month = ( ( dateMax.getMonth() + 1) >= 10) ? dateMax.getMonth() + 1 : "0" + (dateMax.getMonth() + 1);
            var day = (dateMax.getDate() >= 10) ? dateMax.getDate() : "0" + (dateMax.getDate());
            var year = dateMax.getFullYear();

            var dateMaxString = month + "/" + day + "/" + year;
            $(this).datepicker('option','maxDate', dateMaxString);
        }


        if(typeof dateRange != 'undefined'){

            this.initRange = [];
            for(var i in dateRange){
                var dates = dateRange[i];
                //console.log(dates);
                this.initRange.push({"start":new Date(dates.start_date.date),"end":new Date(dates.end_date.date)});
            }
        }
    },
    beforeShowDay:function(date){

        if (typeof this.lastminute != 'undefined') {
            var today = new Date();
            var days = (date - today) / (1000 * 60 * 60 * 24);
            if (days <= (this.lastminute - 1)) {
                //console.log('lastminute false');
                return [false, ''];
            }
        }

        if(typeof this.initRange != 'undefined'){
            for(var i=0; i<this.initRange.length; i++) {
                if(date >= this.initRange[i].start && date <= this.initRange[i].end) return [true, ''];
            }
            return [false, ''];
        }
        return [true, ''];
    },
    onClose: function (fecha, inst) {

        var datepickerOut = $(this).closest('form').find('[name="dateout"]');

        var fechaSet = new Date(inst.selectedYear + "-" + (inst.selectedMonth + 1) + "-" + inst.selectedDay);
        fechaSet.setDate(fechaSet.getDate() + 5);

        var month = ( ( fechaSet.getMonth() + 1) >= 10) ? fechaSet.getMonth() + 1 : "0" + (fechaSet.getMonth() + 1);
        var day = (fechaSet.getDate() >= 10) ? fechaSet.getDate() : "0" + (fechaSet.getDate());
        var year = fechaSet.getFullYear();

        var fechaString = month + "/" + day + "/" + year;

        datepickerOut.datepicker("option", "disabled", false);
        datepickerOut.datepicker("option", "minDate", fecha);
        datepickerOut.datepicker('setDate', fechaString);
        
        var dateMax = datepickerOut.data('date_max');
        if (dateMax != undefined) {
            dateMax = new Date(dateMax);

            month = ( ( dateMax.getMonth() + 1) >= 10) ? dateMax.getMonth() + 1 : "0" + (dateMax.getMonth() + 1);
            day = (dateMax.getDate() >= 10) ? dateMax.getDate() : "0" + (dateMax.getDate());
            year = dateMax.getFullYear();

            var dateMaxString = month + "/" + day + "/" + year;
            datepickerOut.datepicker('option','maxDate', dateMaxString);
        }

        datepickerOut.datepicker('show');        
    }
});
    
$('[name="dateout"]').datepicker({
    altFormat: "yy-mm-dd",
    dateFormat: 'mm/dd/yy',
    beforeShow:function(input,data){
        var dateRange = $(input).data('range');
        if(typeof dateRange != 'undefined'){
            this.initRange = [];
            for(var i in dateRange){
                var dates = dateRange[i];
                this.initRange.push({"start":new Date(dates.start_date.date),"end":new Date(dates.end_date.date)});
            }
        }
    },
    beforeShowDay:function(date){
        if(typeof this.initRange != 'undefined'){
            for(var i=0; i<this.initRange.length; i++) {
                if(date >= this.initRange[i].start && date <= this.initRange[i].end) return [true, ''];
            }
            return [false, ''];
        }
        return [true, ''];
    },
    onClose:function (date, inst) {
        var today = new Date();
        var dateIn = $(this).closest('form').find('[name="datein"]').datepicker( "getDate" );
        var diffDays = Math.ceil( Math.abs(dateIn - today) / (1000 * 60 * 60 * 24)  );

        if (diffDays >= 150) {
            inst.input.tooltip('show');
        }
    }
});

