import 'select2/dist/js/select2.full';
import {creaDataRoomOnly, creaDataFlightForm, creaDataBookNow} from './datalayer';
import {showTooltipResortHotel, showTooltipResortFlight, changeLabelsBooking} from './components/tooltips-booking';
import {dateParse, dateParse2} from './components/helpers-dates';
import 'bootstrap/js/dist/tooltip';

//==============================================================================================
// Variables globales.
//==============================================================================================
var flagChange = false;

//==============================================================================================
// Se agrega fix de posiscion de datepicker 
//==============================================================================================
$.datepicker._checkOffset_origi = $.datepicker._checkOffset;
$.datepicker._checkOffset = function (inst, offset, isFixed) {
    if(!isFixed) {
        return $.datepicker._checkOffset_origi(inst, offset, isFixed);
    }

    let isRTL = this._get(inst, "isRTL");
    let obj = inst.input[0];


    while (obj && (obj.type === "hidden" || obj.nodeType !== 1 || $.expr.filters.hidden(obj))) {
        obj = obj[isRTL ? "previousSibling" : "nextSibling"];
    }

    let rect = obj.getBoundingClientRect();

    var dpWidth = inst.dpDiv.outerWidth(),
        dpHeight = inst.dpDiv.outerHeight(),
        inputWidth = inst.input ? inst.input.outerWidth() : 0,
        inputHeight = inst.input ? inst.input.outerHeight() : 0,
        viewWidth = document.documentElement.clientWidth + ( isFixed ? 0 : $( document ).scrollLeft() ),
        viewHeight = document.documentElement.clientHeight + ( isFixed ? 0 : $( document ).scrollTop() );

    offset.left -= ( this._get( inst, "isRTL" ) ? ( dpWidth - inputWidth ) : 0 );
    offset.left -= ( isFixed && offset.left === inst.input.offset().left ) ? $( document ).scrollLeft() : 0;
    offset.top -= ( isFixed && offset.top === ( inst.input.offset().top + inputHeight ) ) ? $( document ).scrollTop() : 0;

    // Now check if datepicker is showing outside window viewport - move to a better place if so.
    offset.left -= Math.min( offset.left, ( offset.left + dpWidth > viewWidth && viewWidth > dpWidth ) ?
        Math.abs( offset.left + dpWidth - viewWidth ) : 0 );
    offset.top -= Math.min( offset.top, ( offset.top + dpHeight > viewHeight && viewHeight > dpHeight ) ?
        Math.abs( dpHeight + inputHeight ) : 0 );

    return {
        top: rect.top+rect.height,
        left: offset.left
    };
}

$.widget( "ui.autocomplete", $.ui.autocomplete, {
    _renderItem: function( ul, item ) {
        let clases = item.classes || "";
        let disabled = item.disabled || "";
        let uiDisable = (disabled == 'disabled')? 'ui-state-disabled' : "";
        return $( "<li>" )
            .addClass('ui-menu-item ') // ui-state-disabled
            .addClass(clases)
            .addClass(uiDisable)
            .append( item.label )
            .appendTo( ul );
    },
});

var select2Resort = function (state, container) {
    var clase='';
    if (state.element) {
        clase=$(state.element).attr("class");
    }
    if (!state.id) {
        return state.text;
    }
    var baseUrl = "/user/pages/images/flags";
    var $state = $('<span class="'+clase+'">' + state.text + '</span>');
    return $state;
}


//===================================================================
// Select de resorts
//===================================================================
$('.combo-booking').select2({
    width: '100%',
    closeOnSelect:true,
    dropdownCssClass:'combo-booking-result',
    templateResult: select2Resort,
});

var select2 = $('.combo-booking-modal');

$.each(select2, function(key, element){
    var modal = element.closest('.modal');
    $(element).select2({
        width: '100%',
        closeOnSelect:true,
        dropdownCssClass:'combo-booking-result',
        dropdownParent: $(modal)
    });
});

//function changeLabelsBooking(resort, container){
//    var container = $(container);
//    var tag_adult = $('#tag_adult').val();
//    var tag_adult2 = $('#tag_adult2').val();
//    var tag_adult3 = $('#tag_adult3').val();
//    var tag_teen = $('#tag_teen').val();
//    var tag_children = $('#tag_children').val();
//    var tag_children2 = $('#tag_children2').val();
//
//    if (resort == '95939' || resort == '86182' || resort == '86175' || resort == '106514') {
//        container.closest('form').find("#children2").val(0);
//        container.closest('form').find('#teenBox').closest('.booking-interno-inputs').hide();
//        container.closest('form').find("#spAdults").text(tag_adult2);
//        container.closest('form').find("#spChildren").text(tag_children);
//    } else {
//        if (resort == '86184' || resort == '86169' || resort == '73601' || resort == '86179' || resort == '86180' || resort == '86181' || resort == '0') {
//            container.closest('form').addClass('hotel-b');
//            container.closest('form').removeClass('hotel-a');
//            container.closest('form').removeClass('hotel-c');
//
//            container.closest('form').find('#teenBox').closest('.booking-interno-inputs').show();
//            container.closest('form').find("#spAdults").text(tag_adult);
//            container.closest('form').find("#spTeen").text(tag_children);
//            container.closest('form').find("#spChildren").text(tag_teen);
//        } else {
//            if (resort == '85285' || resort == '86117' || resort == '103541') {
//                container.closest('form').addClass('hotel-c');
//                container.closest('form').removeClass('hotel-a');
//                container.closest('form').removeClass('hotel-b');
//
//                container.closest('form').find("#children2").val(0);
//                container.closest('form').find('#teenBox').closest('.booking-interno-inputs').hide();
//                container.closest('form').find("#spAdults").text(tag_adult3);
//                container.closest('form').find("#spChildren").text(tag_children2);
//            }
//        }
//    }
//
//    if (resort == '110441') {    
//        $(this).find(".children2B").val(0);
//        $(this).find('.teenBoxB').hide();
//        $(this).find(".spAdultsB").text(tag_adult4);
//        $(this).find(".spTeenB").text(tag_children3);
//    }
//}

document.querySelectorAll('.select-hotel-destino').forEach( element => {
    let dataOptions = JSON.parse(element.dataset.options || '[]');
    let resort = parseInt(element.closest('form').querySelector('.hotel-id').value) || '95939';
    changeLabelsBooking(resort, $(element.closest('form')) );
    
    $(element).autocomplete({
        source: dataOptions,
        minLength: 0,
        select: function( event, ui ) {
            let formulario = event.target.closest('form');
            formulario = $(formulario);
            var resort = ui.item.id;
            let clasess = ui.item.classes || "resort";
            if(clasess != 'resort'){
                resort = '95939';
            }
            
            var hoy = new Date();
    
            var anio= hoy.getFullYear();
            var mes = hoy.getMonth()+1;
            var dia = hoy.getDate();
    
            var fecha = mes +'/'+dia+'/'+anio;
    
            var fechaSet = new Date();
            fechaSet.setDate(fechaSet.getDate() + 5);
    
            var month = ( (fechaSet.getMonth() + 1) >= 10) ? fechaSet.getMonth() + 1 : "0" + (fechaSet.getMonth() + 1);
            var day = (fechaSet.getDate() >= 10) ? fechaSet.getDate() : "0" + (fechaSet.getDate());
            var year = fechaSet.getFullYear();
    
            var fechaString = month + "/" + day + "/" + year;
    
            var datein  = formulario.find('[name="datein"]');
            var dateout = formulario.find('[name="dateout"]');
    
            if(resort=='110441'){
                datein.datepicker('option','minDate','02/28/2022');
                datein.datepicker('setDate','02/28/2022');
                datein.attr('placeholder','02/28/2022');
    
                dateout.datepicker('option','minDate','02/28/2022');
                dateout.datepicker('setDate','12/19/2021');
                dateout.attr('placeholder','12/19/2021');
                flagChange = true;
            }else{
                if(flagChange == true){
                    datein.datepicker('option','minDate',fecha);
                    datein.datepicker('setDate',fecha);
                    datein.attr('placeholder',fecha);
                
                    dateout.datepicker('option','minDate',fecha);
                    dateout.datepicker('setDate',fechaString);
                    dateout.attr('placeholder',fechaString);
                    flagChange = false;
                }
            }

            event.target.closest('form').querySelector('.hotel-id').value = ui.item.id;

            if(clasess == 'resort' && resort != '110441'){
                event.target.closest('form').setAttribute('action', 'https://reservations.travelclick.com/bookings.jsp');
                event.target.closest('form').querySelector('.hotel-id').setAttribute('name', 'hotelId');
            }else if(resort == '110441'){

                event.target.closest('form').setAttribute('action', 'https://reservations.royalreservations.com/110441');
                event.target.closest('form').querySelector('.hotel-id').setAttribute('name', 'hotelId');
            }else{
                event.target.closest('form').setAttribute('action', 'https://search.travelclick.com/RER/royal#/');
                event.target.closest('form').querySelector('.hotel-id').setAttribute('name', 'destination');
            }

            changeLabelsBooking(resort, formulario);
            //changeLabelsBooking(resort, $(this));
            
        },
        //change: function( event, ui ) {
        //    if(ui.item == null){
        //        event.target.value = "";
        //        event.target.closest('form').querySelector('.hotel-id').value = "";
        //    }else{
        //        event.target.closest('form').querySelector('.hotel-id').value = ui.item.id;
        //        let clasess = ui.item.classes || "resort";
//
        //        if(clasess == 'resort'){
        //            event.target.closest('form').setAttribute('action', 'https://reservations.travelclick.com/bookings.jsp');
        //            event.target.closest('form').querySelector('.hotel-id').setAttribute('name', 'hotelId');
        //        }else{
        //            event.target.closest('form').setAttribute('action', 'https://search.travelclick.com/RER');
        //            event.target.closest('form').querySelector('.hotel-id').setAttribute('name', 'destination');
        //        }
        //    }
        //}
    }).on('focus', function(){
        $(this).autocomplete( "search", "" );
        //$(this).val("");
    }).on('focusout', function(event){
        let dataOptions = JSON.parse(event.target.dataset.options || '[]');
        let value = event.target.closest('form').querySelector('.hotel-id').value;
        let label = dataOptions.find(element => element.id == value);
        if(dataOptions.length > 0)
            event.target.value = label.label;
    });

});


/*
$('.select-hotel-destino').change(function () {
    var optionSelected = $(this).find(':selected');
    var formulario  =  $(this).closest('form');

    if(optionSelected.hasClass('destino')){
        $(this).attr('name','destination');
        var resort = 95939;
        formulario.attr('action','https://search.travelclick.com/RER');
    }
    else{
        $(this).attr('name','hotelId');
        var resort = $(this).val();
        formulario.attr('action','https://reservations.travelclick.com/bookings.jsp');

        var hoy = new Date();
        
        var anio= hoy.getFullYear();
        var mes = hoy.getMonth()+1;
        var dia = hoy.getDate();

        var fecha = mes +'/'+dia+'/'+anio;

        var fechaSet = new Date();
        fechaSet.setDate(fechaSet.getDate() + 5);

        var month = ( (fechaSet.getMonth() + 1) >= 10) ? fechaSet.getMonth() + 1 : "0" + (fechaSet.getMonth() + 1);
        var day = (fechaSet.getDate() >= 10) ? fechaSet.getDate() : "0" + (fechaSet.getDate());
        var year = fechaSet.getFullYear();

        var fechaString = month + "/" + day + "/" + year;

        var datein  = formulario.find('[name="datein"]');
        var dateout = formulario.find('[name="dateout"]');

        if(resort=='110441'){
            datein.datepicker('option','minDate','06/01/2021');
            datein.datepicker('setDate','06/01/2021');
            datein.attr('placeholder','06/01/2021');

            dateout.datepicker('option','minDate','06/01/2021');
            dateout.datepicker('setDate','06/04/2021');
            dateout.attr('placeholder','06/04/2021');
        }else{
            datein.datepicker('option','minDate',fecha);
            datein.datepicker('setDate',fecha);
            datein.attr('placeholder',fecha);
            
            dateout.datepicker('option','minDate',fecha);
            dateout.datepicker('setDate',fechaString);
            dateout.attr('placeholder',fechaString);
        }

    }

    var tag_adult = $('#tag_adult').val();
    var tag_adult2 = $('#tag_adult2').val();
    var tag_adult3 = $('#tag_adult3').val();
    var tag_teen = $('#tag_teen').val();
    var tag_children = $('#tag_children').val();
    var tag_children2 = $('#tag_children2').val();
    
    //$('#msg-box').hide();

    if (resort == '95939' || resort == '86182' || resort == '86175' || resort == '106514') {
        $(this).closest('form').addClass('hotel-a');
        $(this).closest('form').removeClass('hotel-b');
        $(this).closest('form').removeClass('hotel-c');

        $(this).closest('form').find("#children2").val(0);
        $(this).closest('form').find('#teenBox').closest('.booking-interno-inputs').hide();
        $(this).closest('form').find("#spAdults").text(tag_adult2);
        $(this).closest('form').find("#spChildren").text(tag_children);
    } else {
        if (resort == '86184' || resort == '86169' || resort == '73601' || resort == '86179' || resort == '86180' || resort == '86181' || resort == '0') {
            $(this).closest('form').addClass('hotel-b');
            $(this).closest('form').removeClass('hotel-a');
            $(this).closest('form').removeClass('hotel-c');

            $(this).closest('form').find('#teenBox').closest('.booking-interno-inputs').show();
            $(this).closest('form').find("#spAdults").text(tag_adult);
            $(this).closest('form').find("#spTeen").text(tag_children);
            $(this).closest('form').find("#spChildren").text(tag_teen);
        } else {
            if (resort == '85285' || resort == '86117' || resort == '103541') {
                $(this).closest('form').addClass('hotel-c');
                $(this).closest('form').removeClass('hotel-a');
                $(this).closest('form').removeClass('hotel-b');

                $(this).closest('form').find("#children2").val(0);
                $(this).closest('form').find('#teenBox').closest('.booking-interno-inputs').hide();
                $(this).closest('form').find("#spAdults").text(tag_adult3);
                $(this).closest('form').find("#spChildren").text(tag_children2);
            }
        }
    }
});

$('.select-hotel-destino').trigger('change');
*/
//=======================================================================
// Evento de cambio de resort en el booking de vuelos 
//=======================================================================
document.querySelectorAll('.resort-flight').forEach( element => {
    let dataOptions = JSON.parse(element.dataset.options || '[]');

    let resort = parseInt(element.closest('form').querySelector('.hotel').value) || '10728';
    changeLabelsBooking(resort, $(element.closest('form')) );
    
    $(element).autocomplete({
        source: dataOptions,
        minLength: 0,
        select: function( event, ui ) {
            let formulario = event.target.closest('form');
            formulario = $(formulario);
            var resort = ui.item.id;
            if(ui.item == null){
                event.target.value = "";
                event.target.closest('form').querySelector('[name="hotel"]').value = "";
            }else{
                event.target.closest('form').querySelector('[name="hotel"]').value = ui.item.id;
            }
            changeLabelsBooking(resort, formulario);
        }
    }).on('focus', function(){
        $(this).autocomplete( "search", "" );
        $(this).val("");
    }).on('focusout', function(event){
        let dataOptions = JSON.parse(event.target.dataset.options || '[]');
        let value = event.target.closest('form').querySelector('[name="hotel"]').value;
        let label = event.target.getAttribute('placeholder');
        if(value > 0){
            label = dataOptions.find(element => element.id == value);
            label = label.label;
        }
        event.target.value = label;
    });

});
/*
$('.resort-flight').change(function () {
    var hoy = new Date();
        
    var anio= hoy.getFullYear();
    var mes = hoy.getMonth()+1;
    var dia = hoy.getDate();

    var fecha = mes +'/'+dia+'/'+anio;

    var fechaSet = new Date();
    fechaSet.setDate(fechaSet.getDate() + 5);

    var month = ( (fechaSet.getMonth() + 1) >= 10) ? fechaSet.getMonth() + 1 : "0" + (fechaSet.getMonth() + 1);
    var day = (fechaSet.getDate() >= 10) ? fechaSet.getDate() : "0" + (fechaSet.getDate());
    var year = fechaSet.getFullYear();

    var fechaString = month + "/" + day + "/" + year;

    var resort = $(this).val();

    var datein  = $(this).closest('form').find('[name="aDate"]');
    var dateout = $(this).closest('form').find('[name="dDate"]');

});
*/

$('[name="hotelId"]').trigger('change');

//===================================================================
//  Eventos del datepicker
//===================================================================
 //hide it when clicking anywhere else except the popup and the trigger
$(document).on('click touch', function(event) {
  if (!$(event.target).parents().addBack().is('.tooltip')) {
    $('.tooltip').tooltip('hide');
  }
});
 
// Stop propagation to prevent hiding "#tooltip" when clicking on it
$('.tooltip').on('click touch', function(event) {
  event.stopPropagation();
});

$('[name="datein"]').datepicker({
    altFormat: "yy-mm-dd",
    dateFormat: 'mm/dd/yy',
    minDate: 0,
    beforeShow:function(input,data){
        this.lastminute = $(input).data('lastminute');

        var dateRange = $(input).data('range');
        var dateMax = $(this).data('date_max');

        if(input.dataset.range){
            dateRange = JSON.parse(input.dataset.range);
        }

        if(input.dataset.date_max){
            dateMax = input.dataset.date_max;
        }

        //console.log("Date Range", dateRange);

        if (dateMax != undefined) {
            dateMax = dateParse(dateMax);

            var month = ( ( dateMax.getMonth() + 1) >= 10) ? dateMax.getMonth() + 1 : "0" + (dateMax.getMonth() + 1);
            var day = (dateMax.getDate() >= 10) ? dateMax.getDate() : "0" + (dateMax.getDate());
            var year = dateMax.getFullYear();

            var dateMaxString = month + "/" + day + "/" + year;
            $(this).datepicker('option','maxDate', dateMaxString);
        }

        //============================================================================
        // Se agrega el mismo proceso en ./components/modalas para iniciliciar dinamicamente
        // los rangos 
        //============================================================================
        if(typeof dateRange != 'undefined'){
            this.initRange = [];
            for(var i in dateRange){
                var dates = dateRange[i];
                this.initRange.push({"start": dateParse(dates.start_date.date),"end": dateParse(dates.end_date.date)});
            }
        }
    },
    beforeShowDay:function(date){

        if (typeof this.lastminute != 'undefined') {
            var today = new Date();
            var days = (date - today) / (1000 * 60 * 60 * 24);
            if (days <= (this.lastminute - 1)) {
                return [false, ''];
            }
        }
        //console.log(this.initRange);
        if(typeof this.initRange != 'undefined'){
            for(var i=0; i<this.initRange.length; i++) {
                if(date >= this.initRange[i].start && date <= this.initRange[i].end){
                    //console.log('Range True', date);
                    return [true, ''];
                } 
            }
            //console.log('Range False', date);
            return [false, ''];
        }

        //console.log('Range True', date);
        return [true, ''];
    },
    onClose: function (fecha, inst) {
        
        var datepickerOut = $(this).closest('form').find('[name="dateout"]');

        var fechaSet = dateParse(inst.selectedYear + "-" + (inst.selectedMonth + 1) + "-" + inst.selectedDay);
        fechaSet.setDate(fechaSet.getDate() + 5);

        var month = ( ( fechaSet.getMonth() + 1) >= 10) ? fechaSet.getMonth() + 1 : "0" + (fechaSet.getMonth() + 1);
        var day = (fechaSet.getDate() >= 10) ? fechaSet.getDate() : "0" + (fechaSet.getDate());
        var year = fechaSet.getFullYear();

        var fechaString = month + "/" + day + "/" + year;

        datepickerOut.datepicker("option", "disabled", false);
        datepickerOut.datepicker("option", "minDate", fecha);
        datepickerOut.datepicker('setDate', fechaString);
        
        var dateMax = datepickerOut.data('date_max');
        var datePickerAux = this.closest('form').querySelector('[name="dateout"]');
        if(datePickerAux.dataset.date_max){
            dateMax = datePickerAux.dataset.date_max;
        }

        //console.log(dateMax);

        if (dateMax != undefined) {
            dateMax = dateParse(dateMax);

            month = ( ( dateMax.getMonth() + 1) >= 10) ? dateMax.getMonth() + 1 : "0" + (dateMax.getMonth() + 1);
            day = (dateMax.getDate() >= 10) ? dateMax.getDate() : "0" + (dateMax.getDate());
            year = dateMax.getFullYear();

            var dateMaxString = month + "/" + day + "/" + year;
            //console.log("dateMaxString", dateMaxString);
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
        if(input.dataset.range){
            dateRange = JSON.parse(input.dataset.range);
        }
        //============================================================================
        // Se agrega el mismo proceso en ./components/modalas para iniciliciar dinamicamente
        // los rangos 
        //============================================================================
        if(typeof dateRange != 'undefined'){
            this.initRange = [];
            for(var i in dateRange){
                var dates = dateRange[i];
                this.initRange.push({"start": dateParse(dates.start_date.date),"end": dateParse(dates.end_date.date)});
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
        showTooltipResortHotel($(this).closest('form'));
    }
});

$('[name="aDate"]').datepicker({
    altFormat: "yy-mm-dd",
    dateFormat: 'mm/dd/yy',
    minDate: 0,
    beforeShow:function(input,data){
        this.lastminute = $(input).data('lastminute');

        var dateRange = $(input).data('range');

        var dateMax = $(this).data('date_max');
        if (dateMax != undefined) {
            dateMax = dateParse(dateMax);

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
                this.initRange.push({"start": dateParse(dates.start_date.date),"end": dateParse(dates.end_date.date)});
            }
        }
    },
    beforeShowDay:function(date){

        if (typeof this.lastminute != 'undefined') {
            var today = new Date();
            var days = (date - today) / (1000 * 60 * 60 * 24);
            if (days <= (this.lastminute - 1)) {
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

        var datepickerOut = $(this).closest('form').find('[name="dDate"]');

        var fechaSet = dateParse(inst.selectedYear + "-" + (inst.selectedMonth + 1) + "-" + inst.selectedDay);
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
            dateMax = dateParse(dateMax);

            month = ( ( dateMax.getMonth() + 1) >= 10) ? dateMax.getMonth() + 1 : "0" + (dateMax.getMonth() + 1);
            day = (dateMax.getDate() >= 10) ? dateMax.getDate() : "0" + (dateMax.getDate());
            year = dateMax.getFullYear();

            var dateMaxString = month + "/" + day + "/" + year;
            datepickerOut.datepicker('option','maxDate', dateMaxString);
        }

        datepickerOut.datepicker('show');

        
    }
});

$('[name="dDate"]').datepicker({
    altFormat: "yy-mm-dd",
    dateFormat: 'mm/dd/yy',
    beforeShow:function(input,data){
        var dateRange = $(input).data('range');
        if(typeof dateRange != 'undefined'){
            this.initRange = [];
            for(var i in dateRange){
                var dates = dateRange[i];
                this.initRange.push({"start": dateParse(dates.start_date.date),"end": dateParse(dates.end_date.date)});
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
        showTooltipResortFlight($(this).closest('form'));
    }
});



//===================================================================
// Evento para enviar el formulaio de solo hotel     
//===================================================================
$('.btn-home').click(function (e) {
    e.preventDefault();
    
    var block = showTooltipResortHotel($(this).closest('form'),'tooltip-strong');
    if(block){
        return false;
    }


    var resort = $(this).closest('form').find('[name="hotelId"]').val();
    if (resort != '0') {
        conditionAdultsChildren($(this).closest('form'));
        creaDataRoomOnly($(this).closest('form'));

        var agesChild = $(this).closest('form').find('.ages select');

        $('input[name="childage"]').remove();

        if(agesChild.length > 0){
            var ages = [];
            agesChild.each(function (indx,elm){
                ages.push($(elm).val());
            });

            $(this).closest('form').append(`<input type="hidden" name="childage" value="${ages.join(',')}">`)
        }

        $(this).closest('form').submit();
        return true;
    } else {
        $('#msg-box').show();
        return false;
    }
});

let conditionAdultsChildren = (form) => {
    var adults = $(form).find('[name="adults"]').val();
    var children = $(form).find('[name="children"]').val();
    var existe_children2 = $(form).find('[name="children2"]').val();
    var existe_resortId = $(form).find('[name="hotelId"]').val();
    existe_resortId = typeof existe_resortId == 'undefined' ? $(form).find('[name="hotelid"]').val():existe_resortId;

    /*TRC TRS TRH SBR TVSBR TSA RUNO*/
    var listProperty = ['73601','86169','86184','86179','86180','86181','110441'];

    if(listProperty.indexOf(existe_resortId) !== -1){
        if(adults == 1 && children == 1 && existe_children2 == 0){
            $(form).find('[name="adults"]').val(parseInt(adults)+parseInt(children));
            $(form).find('[name="children"]').val(0);
        }
    }

}

function validFormFlight (formulario){ 
    var urlAction =  new URL($(formulario).attr('action'));
    var locationUrl = new URL(window.location.href );
    var searchParams = locationUrl.searchParams;

    var utm_source = searchParams.get('utm_source');
    var utm_medium = searchParams.get('utm_medium');
    var utm_kruxid = searchParams.get('utm_kruxid');
    var kayakclickid = searchParams.get('kayakclickid');


    var user_id = "" ;
    if (typeof ga != "undefined") {
        user_id= ga.getAll()[0].get('linkerParam');
    }
    
    var newAction = urlAction.protocol+'//'+urlAction.hostname+urlAction.pathname+'#'+user_id;

    if (utm_source != null) {
        newAction+= '&utm_source='+utm_source+'&utm_medium='+utm_medium+'&utm_kruxid='+utm_kruxid+'&kayakclickid='+kayakclickid;
    }

    $(formulario).attr('action',newAction); 

    var resultado = true;
    var msg="";

    var hotel = $(formulario).find('[name="hotel"]').val(); // document.booking_engine_form.hotel.selectedIndex;
    var airport = $(formulario).find('[name="airport"]').val(); //document.booking_engine_form.airport.selectedIndex;

    if(hotel<=0){
        if(language=='en'){
            msg="Please, Select a Resort.";
        }else{
            msg="Por favor, Seleccione un Resort."; 
        }

        formulario.find('.resort_msg').html(msg);
        formulario.find('.resort_msg').show('8000'); 
        
        formulario.find('[name="hotel"]').focus().select();

        resultado = false; 
    }
    if(airport <= 0 || airport == 'Select Departure City:'){
        if(language=='en'){
            msg="Please, Select a Departure City.";
        }else{
            msg="Por favor, Seleccione la Ciudad de Salida."; 
        }
        formulario.find('.city_msg').html(msg); 
        formulario.find('.city_msg').show('8000'); 
        formulario.find('[name="airport"]').focus().select();
        
        resultado = false; 
    }
    //console.log('Resultado: ', resultado);
    return resultado;
}

$('[name="hotel"]').change(function(){
    $(this).closest('form').find('.resort_msg').hide(800);
});

$('[name="airport"]').change(function(){
    $(this).closest('form').find('.city_msg').hide(800);
});

//===================================================================
// Evento select de paises
//===================================================================
var defaultAirports = airports.find( element => element.id == 'US' );

$('.country-airports-select').autocomplete({
    source: airports,
    minLength: 0,
    select: function( event, ui ) {
        var airportSelect = event.target.closest('form').querySelector('.airport-select');
        event.target.closest('form').querySelector('[name="airport"]').value = "";
        event.target.closest('form').querySelector('.airport-id').value = ui.item.id;

        $(airportSelect).autocomplete({
            source: ui.item.airports,
            minLength: 0,
            select: function(event, ui){
                event.target.closest('form').querySelector('[name="airport"]').value = ui.item.id;
            }
        }).val("");
    }
}).on('focus', function(){
    $(this).autocomplete( "search", "" );
    $(this).val("");
}).on('focusout', function(event){
    var airport = event.target.closest('form').querySelector('.airport-id').value;
    var defaultAirports = airports.find( element => element.id == airport);
    //console.log(defaultAirports);
    event.target.value = defaultAirports.label;
});

$('.airport-select').autocomplete({
    source: defaultAirports.airports,
    minLength: 0,
    select: function(event, ui){
        event.target.closest('form').querySelector('[name="airport"]').value = ui.item.id;
    }
}).on('focus', function (){
    $(this).autocomplete( "search", "" );
    $(this).val("");
}).on('focusout', function (event) {
    var country = event.target.closest('form').querySelector('.airport-id').value;
    var airport = event.target.closest('form').querySelector('[name="airport"]').value;

    var countryLabels = airports.find( element => element.id == country);
    var airportsLabels = countryLabels.airports.find(element => element.id == airport);
    
    if(airportsLabels != undefined){
        event.target.value = airportsLabels.label;
    }
});

//$('.country-airports-select').select2({
//    data:airports,
//    width:'100%'
//})
//.on('change.select2', function(e, a){
//    //console.log(e, $(this).select2('data'));
//
//    var data = $(this).select2('data').pop();
//    var form = $(this).closest('form').find('.airport-select');
//    var aux = [
//        {
//            id:"-1",
//            text: ""
//        }
//    ];
//
//    aux = aux.concat(data.airports);
//
//    form.html('');
//    form.select2({
//        data: aux,
//    width:'100%'
//
//    })
//    .trigger('change.select2');
//    //console.log(data);
//})
//.val('US')
//.trigger('change');

//$('.get-airports').on('change', function(){
//    var country = $(this).val();
//    var url = "/reservhotel_countries/" + country + ".html";
//
//    var selectAirport =  $(this).closest('form').find('[name="airport"]');
//    selectAirport.html("");
//    selectAirport.select2({
//        dropdownCssClass:'combo-booking-result',
//    });
//
//    $.get(url,function (data) {
//        selectAirport.html(data);
//        selectAirport.select2({
//            dropdownCssClass:"combo-booking-result",
//        });
//    });
//});
//
//
//$('.select-airports').on('change', function(){
//    var country = $(this).val();
//    var url = "/reservhotel_countries/" + country + ".html";
//
//    var selectAirport =  $(this).closest('form').find('[name="airport"]');
//    selectAirport.html("");
//    selectAirport.select2({
//        dropdownCssClass:'combo-booking-result',
//    });
//
//    $.get(url,function (data) {
//        selectAirport.html(data);
//        selectAirport.select2({
//            dropdownCssClass:"combo-booking-result",
//        });
//    });
//});

//===================================================================
// Evento para enviarl el formulario de hotel + vuelo 
// HEADER
//===================================================================
$('.btn-booking-fli').on('click',function (event) {
    event.preventDefault();
    var formulario = $(this).closest('form');
    var block = showTooltipResortFlight($(this).closest('form'),'tooltip-strong');
    if(block){
        return false;1
    }

    if (validFormFlight(formulario)){
        creaDataFlightForm(formulario);
        formulario.submit();
    }
});

//===================================================================
// Evento para enviarl el formulario de hotel + vuelo 
// MODAL DE OFERTAS
//===================================================================
$('.valid-form-flight').on('click', function(){
    event.preventDefault();
    var formulario = $(this).closest('form');
    if (validFormFlight(formulario)){
        creaDataFlightForm(formulario);
        formulario.submit();
    }
});


//===================================================================
// Evento para enviarl el formulario de hotel 
// MODAL DE OFERTAS
//===================================================================
$('.btn-book-now').on('click',function (event) {
    event.preventDefault();

    try {
        var ratePlan = this.form.RatePlanID.value;
    }catch(err) {
        var ratePlan ="0";
    }
    var dateIn   = dateParse2(this.form.datein.value);
    var dateOut  = dateParse2(this.form.dateout.value);
    var adults   = this.form.adults.value;
    var teen     = this.form.children2.value;
    var children = this.form.children.value;
    var persons  = parseInt(adults) + parseInt(teen) + parseInt(children);

    var days = (dateOut - dateIn) / (1000 * 60 * 60 * 24);

    var container = $(this).closest('div');
    var alert  = container.find('.alert');

    if (alert.length > 0) {
        alert.remove();
    }

    if(ratePlan == "4237225" || ratePlan == "4237237"){
        if(persons != 2){
            container.append('<div class="alert alert-danger"> If you are planning to visit with a party up to 2 persons, we recommend you the offer below.</div>');
            return false;
        }
    }
    if(ratePlan == "4237203"){
         if(!(persons >= 2 && persons <= 4)){
            container.append('<div class="alert alert-danger">Up to 4 people.</div>');
            return false;
        }
    }

    switch (ratePlan){
        case "4237203":
        case "4237225":
        case "4237237":  
            if (days != 4) {
                container.append('<div class="alert alert-danger">The dates selected must be equal to 4-night stay.</div>');
                return false;
            }
        break;      
        case "4237250":
        case "4237221":
        case "4237231":
            if ( !(days >= 5 && days <= 7)) {
                container.append('<div class="alert alert-danger">The dates selected must be from 5 to 7 nights stay.</div>');
                return false;
            }
            if(!(persons >= 2 && persons <= 4)){
                container.append('<div class="alert alert-danger">Up to 4 people</div>');
                return false;
            }
        break;
    }

    var agesChild = $(this).closest('form').find('.ages select');

    $('input[name="childage"]').remove();

    if(agesChild.length > 0){
        var ages = [];
        agesChild.each(function (indx,elm){
            ages.push($(elm).val());
        });

        $(this).closest('form').append(`<input type="hidden" name="childage" value="${ages.join(',')}">`)
    }

    conditionAdultsChildren($(this.form));
    creaDataBookNow(this.form);
    $(this).closest('form').submit();
});

// Evento para cerrar el modal de booking en movil
$('.btn-booking-close').on('click', function () {
    $('#booking-header').removeClass('show');
});


$('.checkAvailabityModal').on('show.bs.modal', function (event) {

    var resort = $(this).find('[name="hotelid"]').val();

    $(this).addClass('hotel-'+resort);

    var tag_adult = $('#tag_adult').val();
    var tag_adult2 = $('#tag_adult2').val();
    var tag_adult3 = $('#tag_adult3').val();
    var tag_teen = $('#tag_teen').val();
    var tag_children = $('#tag_children').val();
    var tag_children2 = $('#tag_children2').val();

    $('#msg-box').hide();
    /*GR TRCI CCC*/
    if (resort == '95939' || resort == '86175' || resort == '106514') {
        $(this).find(".children2B").val(0);
        $(this).find('.teenBoxB').hide();
        $(this).find(".spAdultsB").text(tag_adult2);
        $(this).find(".spChildrenB").text(tag_children);
    }
    else if(resort == '86169' || resort == '86182' || resort == '73601' || resort == '86184') {
        /*TRS TRI TRC TRH*/
        $(this).find(".children2B").val(0);
        $(this).find('.teenBoxB').hide();
        $(this).find(".spAdultsB").text(tag_adult2);
        $(this).find(".spChildrenB").text(tag_children);
    } else {
        /*SBR TVSBR TRA*/
        if (resort == '86179' || resort == '86180' || resort == '86181' || resort == '0') {
            $(this).find('.teenBoxB').show();
            $(this).find(".spAdultsB").text(tag_adult);
            $(this).find(".spTeenB").text(tag_teen);
            $(this).find(".spChildrenB").text(tag_children);
        } else {
            /*APC DMR ATC*/
            if (resort == '85285' || resort == '86117' || resort == '103541') {
                $(this).find(".children2B").val(0);
                $(this).find('.teenBoxB').hide();
                $(this).find(".spAdultsB").text(tag_adult3);
                $(this).find(".spChildrenB").text(tag_children2);
            }
        }
    }
});