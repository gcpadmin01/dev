require('intersection-observer');
import LazyLoad from './v2/components/lazyload';
import {showTooltipResortFlight, showTooltipResortHotel} from './v2/components/tooltips-booking';
import {dateParse} from './v2/components/helpers-dates';

window.$ = window.jQuery = require('jquery');
window.Popper = require('popper.js').default;
import 'bootstrap/js/dist/modal';
require('bootstrap');
require('bootstrap-datepicker');
require('./v2/components/slick');
import 'owl.carousel';
import 'select2/dist/js/select2.full.min';
import 'jquery-ui/ui/widgets/datepicker.js';
import 'jquery-ui/ui/widgets/autocomplete.js';


if (!$.fn.bootstrapDP && $.fn.datepicker && $.fn.datepicker.noConflict) {
    var datepicker = $.fn.datepicker.noConflict();
    $.fn.bootstrapDP = datepicker;
}

$.datepicker._checkOffset_origi = $.datepicker._checkOffset;
$.datepicker._checkOffset = function (inst, offset, isFixed) {
    if(!isFixed) {
        return $.datepicker._checkOffset_origi(inst, offset, isFixed);
    }

    let isRTL = this._get(inst, "isRTL");
    let obj = inst.input[0];

    // copied from Datepicker._findPos (node_modules/jquery-ui/datepicker.js)
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

var dateDiv = null;
if ($('html').attr('lang') == 'es') {
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '< Ant',
        nextText: 'Sig >',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        dayNamesMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);

    $.fn.bootstrapDP.dates['es'] = {
        days: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        daysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Juv', 'Vie', 'Sáb'],
        daysMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sá'],
        months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
        today: 'Hoy',
        clear: "Clear",
        format: 'dd/mm/yy',
        titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
        weekStart: 0
    };

    $.fn.bootstrapDP.defaults.language = 'es';
}
//=================================================================================
// Funcion para guardar una cookie
//=================================================================================
function setCookie(cname, cvalue, exdays, minutes) {
    var d = new Date();
    var days = (exdays*24*60*60*1000);
    var minutes = (minutes*60*1000);
    d.setTime(d.getTime() + days + minutes);
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

//=================================================================================
// Funcion para recuperar una cookie por default retorno una cadena vacia
//=================================================================================
function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');

    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}


if (gmsIsGuest == 1 && ( namePage == "" || namePage == 'deals' ) && getCookie('modal_gms') == "" ) {
    setTimeout(function(){ 
        $('#modal-gms').modal('show');
        setCookie('modal_gms','true',1,0);
        
    }, 3000);
}



$(document).ready(function () {

    
    var header = $('.nav-primary');
    var navPrimary = $('.pading-header');
    var bookingHeader = $('#booking-header');

    function setPaddings() {
        if (header.css('position') != 'relative') {
            navPrimary.css('padding-top', header.height() + 15);
        } else {
            navPrimary.css('padding-top', 0);
        }
    }

    function checkScroll() {
        var navBlue = $('.nav-blue').height();
        var dif = navBlue - window.scrollY;
        if (dif >= -2) {
            $('.nav-primary').removeClass('scroll');
            $('.callus').addClass('hidden');
        } else {
            $('.nav-primary').addClass('scroll');
            $('.callus').removeClass('hidden');
        }
    }

    function elementVisible(element) {
        /*$('.boton-booking-now-fixed').show();
        return true;*/
        if(element.length > 0){
            var visible = true;
            var windowTop = $(document).scrollTop();
            var windowBottom = windowTop + window.innerHeight;
            var elementPositionTop = element.offset().top;
            var elementPositionBottom = elementPositionTop + element.height();

            if (elementPositionTop >= windowBottom || elementPositionBottom <= windowTop) {
                visible = false;
                $('.boton-booking-now-fixed').show();
            } else {
                $('.boton-booking-now-fixed').hide();

            }
        }
        return visible;
    }

    /*window.onscroll = function(){
        checkScroll();
        setPaddings();
        elementVisible($('.booking-interno-container'));
    };*/
    checkScroll();
    setPaddings();

    function validaFormEdades(resort, container) {
        //oculto casillas de edades, cambio etiquetas de edad.
        container = $(container);

        var tag_adult = $('#tag_adultB').val();
        var tag_adult2 = $('#tag_adult2B').val();
        var tag_adult3 = $('#tag_adult3B').val();
        var tag_adult4 = $('#tag_adult4').val();

        var tag_teen = $('#tag_teenB').val();

        var tag_children = $('#tag_childrenB').val();
        var tag_children2 = $('#tag_children2B').val();
        var tag_children3 = $('#tag_children3').val();

        if (resort == '95939' || resort == '86182' || resort == '86175' || resort == '106514') {
            container.find(".children2B").val(0);
            container.find('.teenBoxB').hide();
            container.find(".spAdultsB").text(tag_adult2);
            container.find(".spChildrenB").text(tag_children);
        } else {
            if (resort == '86184' || resort == '86169' || resort == '73601' || resort == '86179' || resort == '86180' || resort == '86181') {
                container.find('.teenBoxB').show();
                container.find(".spAdultsB").text(tag_adult);
                container.find(".spChildrenB").text(tag_teen);
                container.find(".spTeenB").text(tag_children);
            } else {
                if (resort == '85285' || resort == '86117' || resort == '103541') {
                    container.find(".children2B").val(0);
                    container.find('.teenBoxB').hide();
                    container.find(".spAdultsB").text(tag_adult3);
                    container.find(".spChildrenB").text(tag_children2);
                }
            }
        }

        if (resort == '110441') {    
            container.find(".children2B").val(0);
            container.find('.teenBoxB').hide();
            container.find(".spAdultsB").text(tag_adult4);
            container.find(".spTeenB").text(tag_children3);
        }
    }


    elementVisible($('.booking-interno-container'));
   //$(window).resize(function () {
   //    setPaddings();
   //});
   //$(window).scroll(function () {
   //    checkScroll();
   //    setPaddings();
   //    elementVisible($('.booking-interno-container'));
   //});

    $('.boton-booking-now-fixed').on('click', function () {
        //if ($('#booking-header').hasClass('show')) {
        //    $('#booking-header').removeClass('show');
        //} else {
        //    $('#booking-header').addClass('show');
        //    //$("html,body").scrollTop(0);
        //}
        if ($('#booking-interno').length > 0) {
            $('html, body').animate({
                scrollTop: $('#booking-interno').offset().top - ( header.height() + 35 )
            }, 1500, 'swing');
        }

        elementVisible($('.booking-interno-container'));
    });

    $('.btn-booking-close').on('click', function () {
        $('#booking-header').removeClass('show');
    });

    $(".open-Modal").on("click", function () {
        var resort = $(this).data('resort');
        var ihotelier = $(this).data('ihotelier');
        var tipo = $(this).data('tipo');
        var rname = $(this).data('rname');
        var roffer = $(this).data('roffer');

        var target = $(this).data('target');

        validaFormEdades(resort, target); //oculto casillas de edades, cambio etiquetas de edad.

        $(".hotelidB").val(resort);
        $("#resortname").text(rname);
        $("#resortoffer").text(roffer);

        if (tipo == 1) {
            $(".RatePlanIDB").val(ihotelier);
        } else {
            if (tipo == 3) {
                $("#packageIdB").val(ihotelier);
            } else {
                $("#packageIdB").val(ihotelier);
            }
        }
    });

    $('#links-about').on('change', function () {
        var value = $(this).val();
        window.location = value;
    });

    $('#pills-resort-all').on('click', function () {
        $('#pills-mexican,#pills-caribbean').addClass('active');
    });

    $('#pills-resort-mexican,#pills-resort-caribean').click(function(){
        console.log('TABS');
        var tabs = $('#pills-tabContent').find('.tab-pane').removeClass('active');
        $($(this).attr('href')).addClass('active');
    });
    //name="startmonth"
    $('[name="startmonth"]').attr('readonly', 'readonly');


    var startmonth = $('[name="startmonth"]');

    startmonth.each(function () {
        var minDate = $(this).data('date_min');
        if (minDate == undefined || minDate == "" ) {
            minDate = 0;
        }
        $(this).bootstrapDP({
            format: "mm/yyyy",
            viewMode: "months",
            minViewMode: "months",
            startDate: minDate,
        });
    });


    // $('.bootstrapdp').bootstrapDP({
    //     format:'yyyy/mm/dd'
    // });

    // $('.je-hotels .datepicker-start').datepicker({
    //     altFormat: "yy-mm-dd",
    //     dateFormat: 'mm/dd/yy',
    //     minDate: 0,
    //     onClose: function (fecha, inst) {
    //         var fechaSet = dateParse(inst.selectedYear + "-" + (inst.selectedMonth + 1) + "-" + inst.selectedDay);
    //         fechaSet.setDate(fechaSet.getDate() + 5);
    //         var month = ( (fechaSet.getMonth() + 1 ) > 10) ? fechaSet.getMonth() + 1 : "0" + (fechaSet.getMonth() + 1);
    //         var day = (fechaSet.getDate() >= 10) ? fechaSet.getDate() : "0" + (fechaSet.getDate());
    //         var year = fechaSet.getFullYear();

    //         var fechaString = month + "/" + day + "/" + year;

    //         $('.je-hotels .datepicker-end').datepicker("option", "disabled", false);
    //         $('.je-hotels .datepicker-end').datepicker("option", "minDate", fecha);
    //         $('.je-hotels .datepicker-end').datepicker('setDate', fechaString);
    //     }
    // });
    // $('.je-hotels .datepicker-end').datepicker({
    //     altFormat: "yy-mm-dd",
    //     dateFormat: 'mm/dd/yy',
    //     minDate: 0,
    // });

    // $('.je-hotels-fly .datepicker-start').datepicker("setDate", "+5d");
    // $('.je-hotels-fly .datepicker-start').datepicker({
    //     altFormat: "yy-mm-dd",
    //     dateFormat: 'mm/dd/yy',
    //     onClose: function (fecha, inst) {
    //         var fechaSet = dateParse(inst.selectedYear + "-" + (inst.selectedMonth + 1) + "-" + inst.selectedDay);
    //         fechaSet.setDate(fechaSet.getDate() + 5);
    //         var month = ( (fechaSet.getMonth() + 1 ) > 10) ? fechaSet.getMonth() + 1 : "0" + (fechaSet.getMonth() + 1);
    //         var day = (fechaSet.getDate() >= 10) ? fechaSet.getDate() : "0" + (fechaSet.getDate());
    //         var year = fechaSet.getFullYear();

    //         var fechaString = month + "/" + day + "/" + year;

    //         $('.je-hotels-fly .datepicker-end').datepicker("option", "disabled", false);
    //         $('.je-hotels-fly .datepicker-end').datepicker("option", "minDate", fecha);
    //         $('.je-hotels-fly .datepicker-end').datepicker('setDate', fechaString);
    //     }
    // });

    // $('.je-hotels-fly .datepicker-end').datepicker({
    //     altFormat: "yy-mm-dd",
    //     dateFormat: 'mm/dd/yy',
    // });

    // =====================================================================================
    // Slider
    // ====================================================================================
    $('.slick-home').slick({
        slidesToShow: 1,
        arrows: true,
        autoplay: true,
    });

    $('.sliderjs').slick({
        slidesToShow: 1,
        arrows: false,
        autoplay: false,
    });

    $('.slider-3-2-1').slick({
        slidesToShow: 3,
        arrows: true,
        autoplay: true,
        rows: 0,
        infinite: false,
        responsive: [
            {
                breakpoint: 1000,
                settings: {
                    slidesToShow: 2,
                    //infinite: true,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    //infinite: true,
                    arrows: false,
                    dots: true
                }
            }
        ]
    });

    // =====================================================================================
    // Utilizado en
    // /vacation-experiences/caribbean-family-vacations
    // =====================================================================================
    

    $('#resort-mobil-img').on('show.bs.collapse', function (element) {
        $('#nav-call').collapse('hide');
        $('#nav-movil').collapse('hide');
        $('#my-royal-mobil').collapse('hide');    
    });
    
    $('#nav-call').on('show.bs.collapse', function (element) {
        $('#resort-mobil-img').collapse('hide');
        $('#nav-movil').collapse('hide');
        $('#my-royal-mobil').collapse('hide');    
    });
    
    $('#nav-movil').on('show.bs.collapse', function (element) {
        $('#resort-mobil-img').collapse('hide');
        $('#nav-call').collapse('hide');
        $('#my-royal-mobil').collapse('hide');    
    });
    
    $('#my-royal-mobil').on('show.bs.collapse', function (element) {
        $('#resort-mobil-img').collapse('hide');
        $('#nav-call').collapse('hide');
        $('#nav-movil').collapse('hide');    
    });

    $('#booking-interno').on('show.bs.collapse', function (element) {
        $("html,body").scrollTop(0);
    });

    $('#booking-header').on('show.bs.collapse', function (element) {
        $("html,body").scrollTop(0);
    });

    // =====================================================================================
    // Event
    // =====================================================================================
    /* Checkbox */
    $('#allDestinations').click(function () {
        // Si esta seleccionado (si la propiedad checked es igual a true)
        if ($(this).prop('checked')) {
            // Selecciona cada input que tenga la clase .checar
            $('.check-input-destino').prop('checked', true);
            $('.offerset').removeClass('d-none');
            $('.check-input-resort').prop('checked', true);
            //visible
        } else {
            // Deselecciona cada input que tenga la clase .checar
            $('.check-input-destino').prop('checked', false);
            $('.offerset').addClass('d-none');
            $('.check-input-resort').prop('checked', false);
        }
    });


    $('.check-input-resort').on('change', function () {
        $('.offerset').addClass('d-none');

        var checks = $('.check-input-resort');
        $.each(checks, function (key, element) {

            if ($(this).prop('checked')) {
                var destino = $(element).val();
                $('.resort-' + destino).removeClass('d-none');
            }
        });

    });

    $('.check-input-destino').on('change', function () {
        if ($(this).prop('checked')) {
            // Selecciona cada input que tenga la clase .checar
            $(this).closest('div').find('.check-input-resort').prop('checked', true).trigger('change');
        }
        else {
            // Deselecciona cada input que tenga la clase .checar
            $(this).closest('div').find('.check-input-resort').prop('checked', false).trigger('change');
        }
    });

    // =====================================================================================
    // Date picker
    // =====================================================================================
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
                    this.initRange.push({"start": dateParse(dates.start_date.date), "end": dateParse(dates.end_date.date)});
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
    
    $('[name="dateout"]').datepicker({
        altFormat: "yy-mm-dd",
        dateFormat: 'mm/dd/yy',
        beforeShow:function(input,data){
            var dateRange = $(input).data('range');
            if(typeof dateRange != 'undefined'){
                this.initRange = [];
                for(var i in dateRange){
                    var dates = dateRange[i];
                    this.initRange.push({"start": dateParse(dates.start_date.date),"end":dateParse(dates.end_date.date)});
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
                    this.initRange.push({"start":dateParse(dates.start_date.date),"end":dateParse(dates.end_date.date)});
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
                    this.initRange.push({"start":dateParse(dates.start_date.date),"end":dateParse(dates.end_date.date)});
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

    // =====================================================================================
    // Componentes globales
    // =====================================================================================
    require('./_home');
    // =====================================================================================
    // Eventos del booking
    // =====================================================================================
    require('./_booking');
    // =====================================================================================
    // Destinations
    // =====================================================================================
    require('./_destinations');
    // =====================================================================================
    // Resorts interna
    // =====================================================================================
    require('./_resorts');
    require('./_resorts-gallery');
    require('./v2/components/modals');


    var images = document.querySelectorAll(".lazyload");
    new LazyLoad(images,{
        rootMargin : '20px'
    })

    if(window.location.hash) {
        var hash = window.location.hash;
        hash = hash.replace('a-','');
        if (window.location.hash.indexOf('a-') > -1) {
           $('html, body').animate({
               scrollTop: $(hash).offset().top - ( header.height() + 35 )
           }, 1500, 'swing');
        }
    }
    
    //========================================================================
    // Se agrega lazy load para el feed de instagram
    //========================================================================
    var instagramFeed = document.querySelector('*[class^="elfsight-app"]');

    if (instagramFeed !==  null ){
        if (!IntersectionObserver) {
            var scriptInstagrama = document.createElement('script');
            scriptInstagrama.setAttribute('src','https://apps.elfsight.com/p/platform.js');
            document.querySelector('body').append(scriptInstagrama);
        }else{

            var observerConfig = {
                root: null,
                rootMargin: "250px",
                threshold: [0]
            };
            
            var observer = new IntersectionObserver(function (entries, observer) {
                Array.prototype.forEach.call(entries, function (entry) {
                    if (entry.isIntersecting) {
                        observer.unobserve(entry.target);
                        
                        var scriptInstagrama = document.createElement('script');
                        scriptInstagrama.setAttribute('src','https://apps.elfsight.com/p/platform.js');
                        document.querySelector('body').append(scriptInstagrama);

                    }
                });
            }, observerConfig);
        
            observer.observe(instagramFeed);
        }
    }

    //========================================================================
    // Evento para el cintillo que se muestra en el header
    //========================================================================
    if (window.NodeList && !NodeList.prototype.forEach) {
        NodeList.prototype.forEach = function (callback, thisArg) {
            thisArg = thisArg || window;
            for (var i = 0; i < this.length; i++) {
                callback.call(thisArg, this[i], i, this);
            }
        };
    }

    document.querySelectorAll('.resort-month .close').forEach( item => {
        item.addEventListener('click', event => {
            try{
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event' :'track_event',
                    'eventModel' : {
                        'event_category':'THBanner',
                        'event_action':'close',
                        'event_label':'covid-19'
                    }
                })
            }catch(err){
                //console.log(err)
            }
            document.querySelectorAll('.resort-month').forEach( alert => {
                alert.style.display = 'none';
            })
        })
    });

    document.querySelectorAll('.resort-month a').forEach( item => {
        item.addEventListener('click', event => {
            try{
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event':'track_event',
                    'eventModel': {
                        'event_category':'THBanner',
                        'event_action':'click',
                        'event_label':'covid-19'
                    }
                })
            }catch(err){
                //console.log(err)
            }
        })
    });

    //=================================================================================
    // Se agrega eventos del datalayer
    //=================================================================================
    document.querySelectorAll('[data-layer_toggle="click"]').forEach( item => {
        item.addEventListener('click', event => {
            const layerCategory = event.currentTarget.dataset.layer_category;
            const layerAction = event.currentTarget.dataset.layer_action;
            const layerLabel = event.currentTarget.dataset.layer_label;

            try{
                window.dataLayer = window.dataLayer || [];
                window.dataLayer.push({
                    'event':'track_event',
                    'eventModel': {
                        'event_category':layerCategory,
                        'event_action':layerAction,
                        'event_label':layerLabel
                    }
                })
            }catch(err){}
        });
    })



});

