import {showTooltipResortFlight, showTooltipResortHotel, changeLabelsBooking} from './v2/components/tooltips-booking';

var request = null;

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


function getAirports() {
    var url = "/reservhotel_countries/" + document.getElementById("countries").value + ".html";
    $.get(url,function (data) {
        document.getElementById("airport_list").innerHTML = data;
        $('[name="airport"]').select2({
            dropdownCssClass:'combo-booking-result',
        });
    });
}

function selectHotel(hotel) {
    if (hotel == "10732") {
        document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10732";
    } else if (hotel == "10733") {
        document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10733";
    } else if (hotel == "10727") {
        document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10727";
    } else if (hotel == "10729") {
        document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10729";
    } else if (hotel == "10731") {
        document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10731";
    } else if (hotel == "10730") {
        document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10730";
    } else if (hotel == "10728") {
        document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10728";
    } else if (hotel == "10735") {
        document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10735";
    } else if (hotel == "10734") {
        document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10734";
    }
}

function validaForm() {
    var user_id = "";

    if (typeof ga != "undefined") {
        user_id = ga.getAll()[0].get('linkerParam');
    }
    var action = $(formulario).attr('action') + '#' + user_id;
    

    $(formulario).attr('action',action);

    var resultado = true;
    var hotel = $('#booking_engine_form [name="hotel"]').val(); // document.booking_engine_form.hotel.selectedIndex;
    var airport = $('#booking_engine_form [name="airport"]').val(); //document.booking_engine_form.airport.selectedIndex;
    var msg="";

    if(hotel<=0){
        if(language=='en'){
            msg="Please, Select a Resort.";}else{msg="Por favor, Seleccione un Resort."; 
        }
        resultado = false; 
        $('.resort_msg').html(msg);
        $('.resort_msg').show('8000'); 
        $('#hotel').focus().select();
    }
    if(airport<=0){
        if(language=='en'){
            msg="Please, Select a Departure City.";
        }else{
            msg="Por favor, Seleccione la Ciudad de Salida."; 
        }
        resultado = false; 
        document.getElementById('city_msg').innerHTML=msg; 
        $('#city_msg').show('8000'); 
        $('#airport').focus().select();
    }

    selectHotel(hotel);
    if(resultado){
        creaDataFlight();
    }
    return resultado;
}

function validFormFlight (formulario){ 
    //var action = $(formulario).attr('action');
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
    if(airport<=0 || airport == 'Select Departure City:'){
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
    if(resultado){
        creaDataFlightForm(formulario);
    }

    return resultado;
}

function cleanMsg() {
    var hotel = document.booking_engine_form.hotel.selectedIndex;
    var airport = document.booking_engine_form.airport.selectedIndex;

    if (hotel > 0) {
        $('.resort_msg').hide('8000');
    }
    if (airport > 0) {
        $('#city_msg').hide('8000');
    }

}

$('.clean-msg').on('change', function () {
    cleanMsg()
});


//=======================================================================
// Evento: Select de resorts hotel >>>>>>>
//=======================================================================
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

            event.target.closest('form').querySelector('.hotel-id').value = ui.item.id;

            if(clasess == 'resort'){
                event.target.closest('form').setAttribute('action', 'https://reservations.travelclick.com/bookings.jsp');
                event.target.closest('form').querySelector('.hotel-id').setAttribute('name', 'hotelId');
            }else{
                event.target.closest('form').setAttribute('action', 'https://search.travelclick.com/RER');
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
        $(this).val("");
    }).on('focusout', function(event){
        let dataOptions = JSON.parse(event.target.dataset.options || '[]');
        let value = event.target.closest('form').querySelector('.hotel-id').value;
        let label = dataOptions.find(element => element.id == value);
        event.target.value = label.label;
    });

});
/*
$('.select-hotel-destino').change(function () {
    var optionSelected=$(this).find(':selected');
    var form =  $(this).closest('form');

    if(optionSelected.hasClass('destino')){
        $(this).attr('name','destination');
        var resort = 95939;
        $('#form_modal').attr('action','https://search.travelclick.com/RER');
    }
    else{
        $(this).attr('name','hotelId');
        var resort = $(this).val();
        $('#form_modal').attr('action','https://reservations.travelclick.com/bookings.jsp');
        
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

        var datein  = form.find('[name="datein"]');
        var dateout = form.find('[name="dateout"]');

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

    //var resort = $(this).val();
    var tag_adult = $('#tag_adult').val();
    var tag_adult2 = $('#tag_adult2').val();
    var tag_adult3 = $('#tag_adult3').val();
    var tag_adult4 = $('#tag_adult4').val();

    var tag_teen = $('#tag_teen').val();
    var tag_children = $('#tag_children').val();
    var tag_children2 = $('#tag_children2').val();
    var tag_children3 = $('#tag_children3').val();
    
    $('#msg-box').hide();

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

    if (resort == '110441') {
        $(this).closest('form').find("#children2").val(0);
        $(this).closest('form').find('#teenBox').closest('.booking-interno-inputs').hide();
        $(this).closest('form').find("#spAdults").text(tag_adult4);
        $(this).closest('form').find("#spChildren").text(tag_children3);
    }

});
*/

//=======================================================================
// Evento: Select de resorts hotel <<<<<
//=======================================================================


//=======================================================================
// Evento de cambio de resort en el booking de vuelos  >>>>>>>>>
//=======================================================================
document.querySelectorAll('.resort-flight').forEach( element => {
    let dataOptions = JSON.parse(element.dataset.options || '[]');
    
    $(element).autocomplete({
        source: dataOptions,
        minLength: 0,
        select: function( event, ui ) {
            if(ui.item == null){
                event.target.value = "";
                event.target.closest('form').querySelector('[name="hotel"]').value = "";
            }else{
                event.target.closest('form').querySelector('[name="hotel"]').value = ui.item.id;
            }
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

    
    //if (resort == '10735' ){
    //    datein.datepicker('option','minDate','04/14/2020');
    //    datein.datepicker('setDate','04/14/2020');
    //    datein.attr('placeholder','04/14/2020');
//
    //    dateout.datepicker('option','minDate','04/14/2020');
    //    dateout.datepicker('setDate','04/18/2020');
    //    dateout.attr('placeholder','04/18/2020');
    //}else{
    //    datein.datepicker('option','minDate',fecha);
    //    datein.datepicker('setDate',fecha);
    //    datein.attr('placeholder',fecha);
    //    
    //    dateout.datepicker('option','minDate',fecha);
    //    dateout.datepicker('setDate',fechaString);
    //    dateout.attr('placeholder',fechaString);
    //}
    
});

$('[name="hotelId"]').trigger('change');
*/
//=======================================================================
// Evento de cambio de resort en el booking de vuelos  <<<<<<
//=======================================================================

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

    if (resort == '95939' || resort == '86182' || resort == '86175' || resort == '106514') {
        $(this).find(".children2B").val(0);
        $(this).find('.teenBoxB').hide();
        $(this).find(".spAdultsB").text(tag_adult2);
        $(this).find(".spChildrenB").text(tag_children);
    } else {
        if (resort == '86184' || resort == '86169' || resort == '73601' || resort == '86179' || resort == '86180' || resort == '86181' || resort == '0') {
            $(this).find('.teenBoxB').show();
            $(this).find(".spAdultsB").text(tag_adult);
            $(this).find(".spTeenB").text(tag_teen);
            $(this).find(".spChildrenB").text(tag_children);
        } else {
            if (resort == '85285' || resort == '86117' || resort == '103541') {
                $(this).find(".children2B").val(0);
                $(this).find('.teenBoxB').hide();
                $(this).find(".spAdultsB").text(tag_adult3);
                $(this).find(".spChildrenB").text(tag_children2);
            }
        }
    }
});


$("#hotel").change(function () {
    $('.resort_msg').hide();
    var resort2 = $("#hotel").val();
    var tag_adult = $('#tag_adult').val();
    var tag_adult2 = $('#tag_adult2').val();
    var tag_adult3 = $('#tag_adult3').val();
    var tag_teen = $('#tag_teen').val();
    var tag_children = $('#tag_children').val();
    var tag_children22 = $('#tag_children22').val();

    if (resort2 == undefined) {
        //var resort = document.getElementById("hotelId").value;
        var resort2 = $('select option:selected').attr('value');
    }

    if (resort2 == '10732' || resort2 == '10730' || resort2 == '10729') {
        $("#infant").val(0);
        /*$('#adolecent').hide();*/
        $("#spAdultsB").text(tag_adult2);
        $("#spChildrenB").text(tag_children);
    } else {

        if (resort2 == '10731' || resort2 == '10728' || resort2 == '10727' || resort2 == '10733' || resort2 == '10734' || resort2 == '10735') {
            /*$('#adolecent').show();*/
            $("#spAdultsB").text(tag_adult);
            $("#spChildrenB").text(tag_children22);
            $("#spTeenB").text(tag_children);
        }
    }
});

$('hotel').trigger('change');

$('.btn-home').click(function (e) {
    e.preventDefault();
    var block = showTooltipResortHotel($(this).closest('form'), 'tooltip-strong');

    if(block){
        return false;
    }

    var resort = $(this).closest('form').find('[name="hotelId"]').val();
    if (resort != '0') {
        creaDataRoomOnly($(this).closest('form'));
        $(this).closest('form').submit();

        return true;
    } else {
        $('#msg-box').show();
        return false;
    }
});

$('.get-airports').on('change',function () {
   getAirports();
});


$('.select-airports').on('change', function (){
    var url = "/reservhotel_countries/" + $(this).val() + ".html";
    var cities = $(this).closest('form').find('[name="airport"]');
    $.get(url,function (data) {
        cities.html(data);
        cities.select2({
            dropdownCssClass:'combo-booking-result',
        });
    });
});

//===================================================================
// Evento select de paises >>> 
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
    console.log(defaultAirports);
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


//===================================================================
// Evento select de paises <<<<<<<<<<
//===================================================================

$('.btn-booking-fli').on('click',function (event) {
    event.preventDefault();
    /*if (validaForm()){
        $(this).closest('form').submit();
    }*/

    var block = showTooltipResortFlight($(this).closest('form'),'tooltip-strong');
    if(block){
        return false;
    }

    if (validFormFlight($(this).closest('form'))){
        $(this).closest('form').submit();
    }
});

$('.valid-form-flight').on('click', function(){
    event.preventDefault();
    if (validFormFlight($(this).closest('form'))){
        $(this).closest('form').submit();
    }
});

$('[name="airport"]').on('change', function(){
    $(this).closest('form').find('.city_msg').hide();
});

$('.btn-rooms').on('click',function (event) {
    event.preventDefault();
    creaDataRooms(this.form);
    $(this).closest('form').submit();
});
$('.btn-book-now').on('click',function (event) {
    event.preventDefault();

    var ratePlan = 0;
    try {
        var ratePlan = this.form.RatePlanID.value;
    }catch(err) {
        var ratePlan ="0";
    }

    var dateIn   = new Date(this.form.datein.value);
    var dateOut  = new Date(this.form.dateout.value);
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




    creaDataBookNow(this.form);
    $(this).closest('form').submit();
});

$('.select2').select2();

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

$('.combo-booking').select2({
    width: '100%',
    closeOnSelect:true,
    dropdownCssClass:'combo-booking-result',
    tag:true,
    templateResult: function (state, container) {
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
});

function creaDataRoomOnly(form){
  var existe_resortId = $(form).find('[name="hotelId"]').val();
  var existe_destination = $(form).find('[name="destination"]').val();
  var rooms = $(form).find('[name="rooms"]').val();
  var adults = $(form).find('[name="adults"]').val();
  var children = $(form).find('[name="children"]').val();
  var existe_children2 = $(form).find('[name="children2"]').val();
  var startingPoint='Resort';
  var destination='';
  var resortName = "";

  if(existe_resortId){ 
    var resortId =  $(form).find('[name="hotelId"]').val();

    switch(resortId){
        case '73601': resortName='The Royal Cancun'; destination='Cancun'; break;
        case '86175': resortName='The Royal Caribbean'; destination='Cancun'; break;
        case '86182': resortName='The Royal Islander'; destination='Cancun'; break;
        case '86169': resortName='The Royal Sands'; destination='Cancun'; break;
        case '86184': resortName='The Royal Haciendas'; destination='Playa del Carmen'; break;
        case '95939': resortName='Grand Residences'; destination='Riviera Maya'; break;
        case '86179': resortName='Simpson Bay'; destination='Sint Maarten'; break;
        case '86180': resortName='The Villas at Simpson Bay'; destination='Sint Maarten'; break;
        case '86181': resortName='The Royal Sea Aquarium'; destination='Curacao'; break;
        case '85285': resortName='Ancora'; destination='Punta Cana'; break;
        case '86117': resortName='Del Mar'; destination='Punta Cana'; break;
        case '106514': resortName='Casa de Campo'; destination='Punta Cana'; break;
        default:resortName='';
    }    
  }else{
    resortName='';
    resortId='';
  }

  if(existe_destination){ 
    var destinationLongString = $(form).find('[name="destination"]').val();
    startingPoint='Destination';
    if(destinationLongString.search("Cancun")>=0){destination='Cancun';}
    if(destinationLongString.search("Morelos")>=0){destination='Riviera Maya';}
    if(destinationLongString.search("Carmen")>=0){destination='Playa del Carmen';}
    if(destinationLongString.search("Maarten")>=0){destination='Sint Maarten';}
    if(destinationLongString.search("Dominican")>=0){destination='Punta Cana';}
    if(destinationLongString.search("Curacao")>=0){destination='Curacao';}
    if(destinationLongString == 'all'){destination='All Destinations';}
  }

  if(existe_children2){ var children2 = $(form).find('[name="children2"]').val();} else{ var children2 = 0;}

    var checkin = $(form).find("input[name=datein]").val();
    var checkout = $(form).find("input[name=dateout]").val();
    var resWindow = generaAnticipacion(checkin);
    var nights = getNights(checkin,checkout);
    window.dataLayer.push({
        'event':'Reservation',
        'reservationType':'Hotel Only',
        'eventType': 'Quote',
        "startingPoint": startingPoint,
        "destinationName": destination,
        'resortId':resortId,
        'resortName':resortName,
        'adults':adults,
        'children':children,
        'children2':children2,
        'checkin':checkin,
        'checkout':checkout,
        'rooms':rooms,
        'resWindow': resWindow,
        'nights':nights,
    });
}

// Crea estructura Data Layer al Submit del form Modal Resorts
function creaDataRoomOnlyModal(form){
    
    var resortId = form.querySelector('.hotelidB').value;
    var adults = form.querySelector('.adultsB').value;
    var children = form.querySelector('.childrenB').value;

    var existe_children2 = form.querySelector(".children2B");
    if(existe_children2){
        var children2 = form.querySelector('.children2B').value
    }else{
        var children2 = 0;
    }

    var rooms=form.querySelector('.roomsOnly').value;
    var checkin = form.querySelector('.datein').value;
    var checkout= form.querySelector('.dateout').value;
    var resWindow = generaAnticipacion(checkin);
    var nights = getNights(checkin,checkout);
    var startingPoint='Resort';
    var destination='';
    
    switch(resortId){
        case '73601':resortName='The Royal Cancun';destination='Cancun'; break;
        case '86175': resortName='The Royal Caribbean'; destination='Cancun'; break;
        case '86182': resortName='The Royal Islander'; destination='Cancun'; break;
        case '86169': resortName='The Royal Sands'; destination='Cancun'; break;
        case '86184': resortName='The Royal Haciendas'; destination='Playa del Carmen'; break;
        case '95939': resortName='Grand Residences'; destination='Riviera Maya'; break;
        case '86179': resortName='Simpson Bay'; destination='Sint Maarten'; break;
        case '86180': resortName='The Villas at Simpson Bay'; destination='Sint Maarten'; break;
        case '86181': resortName='The Royal Sea Aquarium'; destination='Curacao'; break;
        case '85285': resortName='Ancora'; destination='Punta Cana'; break;
        case '86117': resortName='Del Mar'; destination='Punta Cana'; break;
        case '106514': resortName='Casa de Campo'; destination='Punta Cana'; break;
        default:
        resortName='Not defined';
    }

    window.dataLayer.push({
        'event':'Reservation',
        'reservationType':'Hotel Only',
        'eventType': 'Quote',
        "startingPoint": startingPoint,
        "destinationName": destination,        
        'resortId':resortId,
        'resortName':resortName,
        'adults':adults,
        'children':children,
        'children2':children2,
        'checkin':checkin,
        'checkout':checkout,
        'rooms':rooms,
        'resWindow': resWindow,
        'nights':nights,
    });
}
//crea data Book Now Offers
function creaDataBookNow(form){
    var resortId = $(form).find('[name="hotelid"]').val();
    var adults = $(form).find('[name="adults"]').val();
    var children = $(form).find('[name="children"]').val();
    var existe_children2 = $(form).find('[name="children2"]');
    if(existe_children2.length > 0){
        var children2 = existe_children2.val();
    }else{
        var children2 = 0;
    }
    var rooms = $(form).find('[name="rooms"]').val();
    var checkin = $(form).find('[name="datein"]').val();
    var checkout = $(form).find('[name="dateout"]').val();
    var resWindow = generaAnticipacion(checkin);
    var nights = getNights(checkin,checkout);

    var startingPoint='Resort';
    var destination='';
    var resortName = '';

    switch(resortId){
        case '73601':resortName='The Royal Cancun';destination='Cancun'; break;
        case '86175': resortName='The Royal Caribbean'; destination='Cancun'; break;
        case '86182': resortName='The Royal Islander'; destination='Cancun'; break;
        case '86169': resortName='The Royal Sands'; destination='Cancun'; break;
        case '86184': resortName='The Royal Haciendas'; destination='Playa del Carmen'; break;
        case '95939': resortName='Grand Residences'; destination='Riviera Maya'; break;
        case '86179': resortName='Simpson Bay'; destination='Sint Maarten'; break;
        case '86180': resortName='The Villas at Simpson Bay'; destination='Sint Maarten'; break;
        case '86181': resortName='The Royal Sea Aquarium'; destination='Curacao'; break;
        case '85285': resortName='Ancora'; destination='Punta Cana'; break;
        case '86117': resortName='Del Mar'; destination='Punta Cana'; break;
        case '106514': resortName='Casa de Campo'; destination='Punta Cana'; break;
        default:
        resortName='Not defined';
    }

    if (typeof window.dataLayer != 'undefined' ) {
        window.dataLayer.push({
            'event':'Book now',
            'reservationType':'Hotel Only',
            'eventType': 'Quote',
            "startingPoint": startingPoint,
            "destinationName": destination,         
            'resortId':resortId,
            'resortName':resortName,
            'adults':adults,
            'children':children,
            'children2':children2,
            'checkin':checkin,
            'checkout':checkout,
            'rooms':rooms,
            'resWindow': resWindow,
            'nights':nights,
        });
    }
}
//crea data Book Now Offers
function creaDataRooms(form){
    var resortId = form.querySelector('.hotelidB').value; 
    var adults = form.querySelector('.adultsB').value;
    var children = form.querySelector('.childrenB').value;
    var existe_children2 = form.querySelector(".children2B");
    var resortName = "";
    
    if(existe_children2){
        var children2 = form.querySelector('.children2B').value
    }else{
        var children2 = 0;
    }
    
    var rooms=form.querySelector('.roomsOnly').value;
    var month = form.querySelector('[name="startmonth"]').value;

    var startingPoint='Resort';
    var destination='';
    
    switch(resortId){
        case '73601': resortName='The Royal Cancun'; destination='Cancun'; break;
        case '86175': resortName='The Royal Caribbean'; destination='Cancun'; break;
        case '86182': resortName='The Royal Islander'; destination='Cancun'; break;
        case '86169': resortName='The Royal Sands'; destination='Cancun'; break;
        case '86184': resortName='The Royal Haciendas'; destination='Playa del Carmen'; break;
        case '95939': resortName='Grand Residences'; destination='Riviera Maya'; break;
        case '86179': resortName='Simpson Bay'; destination='Sint Maarten'; break;
        case '86180': resortName='The Villas at Simpson Bay'; destination='Sint Maarten'; break;
        case '86181': resortName='The Royal Sea Aquarium'; destination='Curacao'; break;
        case '85285': resortName='Ancora'; destination='Punta Cana'; break;
        case '86117': resortName='Del Mar'; destination='Punta Cana'; break;
        case '106514': resortName='Casa de Campo'; destination='Punta Cana'; break;
        default:
        resortName='Not defined';
    }

    window.dataLayer.push({
        'event':'Book now rooms',
        'reservationType':'Hotel Only',
        'eventType': 'Quote',
        'startingPoint': startingPoint,
        'destinationName': destination,        
        'resortId':resortId,
        'resortName':resortName,
        'adults':adults,
        'children':children,
        'children2':children2,
        'checkin':month,
        'rooms':rooms,
    });
}

function creaDataFlight(){
  
    var resortId = document.getElementById("hotel").value;
  var countries = document.getElementById("countries").value;
  var airport = document.getElementById("airport").value;
  var rooms = document.getElementById("roomsVuelo").value;
  var adults = document.getElementById("adultsVuelo").value;
  var children = document.getElementById("child").value;

  var checkin = $("input[name=aDate]").val();
  var checkout = $("input[name=dDate]").val();

  var resWindow = generaAnticipacion(checkin);
  var nights = getNights(checkin,checkout);
    var startingPoint='Resort';
    var destination='';

  switch(resortId){
    case '10727':resortName='The Royal Cancun';destination='Cancun';break;
    case '10729': resortName='The Royal Caribbean';destination='Cancun'; break;
    case '10730': resortName='The Royal Islander';destination='Cancun'; break;
    case '10728': resortName='The Royal Sands';destination='Cancun'; break;
    case '10731': resortName='The Royal Haciendas';destination='Playa del Carmen'; break;
    case '10732': resortName='Grand Residences';destination='Riviera Maya'; break;
    case '10733': resortName='Simpson Bay';destination='Sint Maarten'; break;
    case '10734': resortName='The Villas at Simpson Bay';destination='Sint Maarten'; break;
    case '10735': resortName='The Royal Sea Aquarium';destination='Curacao'; break;
    default:
    resortName='Not defined';
  }

    window.dataLayer.push({
    'event':'Reservation',
    'reservationType':'Hotel + Flight',
    'eventType': 'Quote',
    'startingPoint': startingPoint,
    'destinationName': destination,     
    'resortId':resortId,
    'resortName':resortName,
    'cityOrigin':airport,
    'countryOrigin':countries,
    'adults':adults,
    'children':children,
    'checkin':checkin,
    'checkout':checkout,
    'rooms':rooms,
    'resWindow': resWindow,
    'nights':nights,
  });
}   

function creaDataFlightForm(formulario){
  var resortId =  $(formulario).find('[name="hotel"]').val();
  var countries = $(formulario).find('.select-airports').val()
  var airport = $(formulario).find('[name="airport"]').val()
  var rooms = $(formulario).find('[name="rooms"]').val()
  var adults = $(formulario).find('[name="adults"]').val()
  var children = $(formulario).find('[name="child"]').val()
  var checkin = $(formulario).find("input[name=aDate]").val();
  var checkout = $(formulario).find("input[name=dDate]").val();
  var resWindow = generaAnticipacion(checkin);
  var nights = getNights(checkin,checkout);
  var startingPoint='Resort';
  var destination='';
  var resortName = "";

  switch(resortId){
    case '10727':resortName='The Royal Cancun';destination='Cancun';break;
    case '10729': resortName='The Royal Caribbean';destination='Cancun'; break;
    case '10730': resortName='The Royal Islander';destination='Cancun'; break;
    case '10728': resortName='The Royal Sands';destination='Cancun'; break;
    case '10731': resortName='The Royal Haciendas';destination='Playa del Carmen'; break;
    case '10732': resortName='Grand Residences';destination='Riviera Maya'; break;
    case '10733': resortName='Simpson Bay';destination='Sint Maarten'; break;
    case '10734': resortName='The Villas at Simpson Bay';destination='Sint Maarten'; break;
    case '10735': resortName='The Royal Sea Aquarium';destination='Curacao'; break;
    default:
    resortName='Not defined';
  }

    window.dataLayer.push({
        'event':'Reservation',
        'reservationType':'Hotel + Flight',
        'eventType': 'Quote',
        'startingPoint': startingPoint,
        'destinationName': destination,         
        'resortId':resortId,
        'resortName':resortName,
        'cityOrigin':airport,
        'countryOrigin':countries,
        'adults':adults,
        'children':children,
        'checkin':checkin,
        'checkout':checkout,
        'rooms':rooms,
        'resWindow': resWindow,
        'nights':nights,
    });
}

$('.manageMyReservation').click(function (e) {
    e.preventDefault();
    var resort = $(this).closest('form').find('[name="hotelid"]').val();
    var confirmation = $(this).closest('form').find('[name="confirmId"]').val();
    if (resort != '0' && confirmation !='') {
        creaDataManageMyReservation($(this).closest('form'));
        $(this).closest('form').submit();
        return true;
    } else {
        $('#error').show();
        return false;
    }
});

function creaDataManageMyReservation(formulario){
  var resortId =  $(formulario).find('[name="hotelid"]').val();
  var resortName = ""  ;

  switch(resortId){
    case '73601':resortName='The Royal Cancun';break;
    case '86175': resortName='The Royal Caribbean'; break;
    case '86182': resortName='The Royal Islander'; break;
    case '86169': resortName='The Royal Sands'; break;
    case '86184': resortName='The Royal Haciendas'; break;
    case '95939': resortName='Grand Residences'; break;
    case '86179': resortName='Simpson Bay'; break;
    case '86180': resortName='The Villas at Simpson Bay'; break;
    case '86181': resortName='The Royal Sea Aquarium'; break;
    case '85285': resortName='Ancora'; break;
    case '86117': resortName='Del Mar'; break;
    case '106514': resortName='Casa de Campo'; break;
    default:
    resortName='Not defined';
  }

    window.dataLayer.push({
        'event':'ManageReservation',
        'resortId':resortId,
        'resortName':resortName,
    });
}

function generaAnticipacion(checkin){
    var checkinDate = new Date(checkin);
    var todayDate= new Date();
    var resTimeStamp = checkinDate.getTime() - todayDate.getTime();
    var resWindow = Math.ceil(resTimeStamp/ (1000*60*60*24));
    return resWindow;
}
function getNights(checkin,checkout){
    var checkinDate = new Date(checkin);
    var checkoutDate = new Date(checkout);
    var resTimeStamp = checkoutDate.getTime() - checkinDate.getTime();
    var diff = Math.ceil(resTimeStamp/ (1000*60*60*24));
    return diff;
}