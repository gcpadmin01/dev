import {dateParse} from './helpers-dates';
import {changeLabelsBooking} from './tooltips-booking';


$('#picture_v2').on('show.bs.modal', function (e) {
    var resortName = e.relatedTarget.dataset.resort;
    var resortImg = e.relatedTarget.dataset.img;

    e.currentTarget.querySelector('.resort_name').textContent = resortName;
    
    // var img = e.currentTarget.querySelector('.resort_img');
    // <img class="w-100" src="" alt="{RESORT_NAME}" title="{RESORT_NAME}">
    var img = $('<img class="w-100">');

    img.attr('src',resortImg);
    img.attr('alt',resortName);

    $('#picture_v2_img').empty().append(img);

    //img.setAttribute('src', resortImg);
    //img.setAttribute('alt', resortName);

})

$('#modal_dynamic').on('show.bs.modal', function (e) {
    var modalContent = e.relatedTarget.dataset.modal_content;

    e.currentTarget.querySelector('.modal-dialog').innerHTML  = modalContent;
})

$('#offer_booking_hotel').on('show.bs.modal', function (e) {
    if(!e.relatedTarget.dataset.modal_data){
        return;
    }
    var data = JSON.parse(e.relatedTarget.dataset.modal_data);
    var currentTarget = e.currentTarget;
    var resort = data.hotelId;

    currentTarget.querySelector('.concept_title').textContent = data.conceptTitle;
    currentTarget.querySelector('.concept_resort').textContent = data.conceptResortName;
    currentTarget.querySelector('[name="hotelid"]').value = data.hotelId;
    currentTarget.querySelector('[name="RatePlanID"]').value = data.ratePlanId;
    currentTarget.querySelector('[name="discount"]').value = data.discount;

    var elemIdentifier = currentTarget.querySelector('[name="identifier"]');

    if(data.rateAccess != null && elemIdentifier.value === ''){
        elemIdentifier.value = data.rateAccess;
    }

    changeLabelsBooking(resort, $(currentTarget));


    var dateIn = currentTarget.querySelector('[name="datein"]');
    dateIn.value = data.travelStart.startDate;
    dateIn.setAttribute('data-date_min', data.travelStart.minDate);
    dateIn.setAttribute('data-date_max', data.travelStart.maxDate);
    dateIn.setAttribute('data-range', JSON.stringify(data.travelStart.rangeDates));

    
    var dateRange = data.travelStart.rangeDates;
    var initRange = [];
    for(var i in dateRange){
        var dates = dateRange[i];
        initRange.push({"start": dateParse(dates.start_date.date),"end": dateParse(dates.end_date.date)});
    }

    dateIn.initRange = initRange;
    datepickerAux = $(dateIn);
    $(dateIn).datepicker('setDate', data.travelStart.startDate);
    $(dateIn).datepicker('refresh');


    var dateOut = currentTarget.querySelector('[name="dateout"]');
    dateOut.value = data.travelEnd.startDate;

    dateOut.setAttribute('data-date_min', data.travelEnd.minDate);
    dateOut.setAttribute('data-date_max', data.travelEnd.maxDate);
    dateOut.setAttribute('data-range', JSON.stringify(data.travelEnd.rangeDates));

    var dateRangeEnd  = data.travelEnd.rangeDates;
    var initRangeEnd = [];

    for(var e in dateRangeEnd){
        var datesEnd = dateRangeEnd[i];
        initRangeEnd.push({
            "start":dateParse(datesEnd.start_date.date),
            "end":dateParse(datesEnd.end_date.date)
        });
    }

    dateOut.initRange = initRangeEnd;

    $(dateOut).datepicker('setDate', data.travelEnd.startDate);
    $(dateOut).datepicker('refresh');

});

$('#offer_booking_flight').on('show.bs.modal',  function (e) {
    if(!e.relatedTarget.dataset.modal_data){
        return;
    }

    var data = JSON.parse(e.relatedTarget.dataset.modal_data);
    var currentTarget = e.currentTarget;
    var resort = data.reservhotelId;

    currentTarget.querySelector('.resort_name').textContent = data.conceptResortName;
    currentTarget.querySelector('.concept_title').textContent = data.conceptTitle;
    currentTarget.querySelector('[name="hotel"]').value = data.reservhotelId;

    changeLabelsBooking(resort, $(currentTarget));

    var dateIn = currentTarget.querySelector('[name="aDate"]');
    dateIn.value = data.travelStart.startDate;
    dateIn.setAttribute('data-date_min', data.travelStart.minDate);
    dateIn.setAttribute('data-date_max', data.travelStart.maxDate);
    dateIn.setAttribute('data-range', JSON.stringify(data.travelStart.rangeDates));


    var dateRange = data.travelStart.rangeDates;
    var initRange = [];
    for(var i in dateRange){
        var dates = dateRange[i];
        initRange.push({"start": dateParse(dates.start_date.date),"end": dateParse(dates.end_date.date)});
    }

    dateIn.initRange = initRange;
    datepickerAux = $(dateIn);
    
    var date_time = data.travelStart.startDate.split(' ');
    var split = date_time[0].split('/')
    var year = split[2];
    var month = split[0] - 1;
    var day = split[1];
    
    var startDate = new Date(year, month, day);
    var today = new Date();
    
    //console.log(today.getTime(), startDate.getTime());
    if(today.getTime() > startDate.getTime()){
        var month = today.getMonth() + 1;
        var date = today.getDate();
        var year = today.getFullYear();

        data.travelStart.startDate = month + "/" + date + "/" +year;
        
    }

    //console.log(data.travelStart.startDate, split, (new Date(year, month, day)));


    $(dateIn).datepicker('setDate', data.travelStart.startDate);
    $(dateIn).datepicker('refresh');

    var dateOut = currentTarget.querySelector('[name="dDate"]');
    dateOut.value = data.travelEnd.startDate;

    dateOut.setAttribute('data-date_min', data.travelEnd.minDate);
    dateOut.setAttribute('data-date_max', data.travelEnd.maxDate);
    dateOut.setAttribute('data-range', JSON.stringify(data.travelEnd.rangeDates));

    var dateRangeEnd  = data.travelEnd.rangeDates;
    var initRangeEnd = [];

    for(var e in dateRangeEnd){
        var datesEnd = dateRangeEnd[i];
        initRangeEnd.push({
            "start":dateParse(datesEnd.start_date.date),
            "end":dateParse(datesEnd.end_date.date)
        });
    }

    dateOut.initRange = initRangeEnd;

    $(dateOut).datepicker('setDate', data.travelEnd.startDate);
    $(dateOut).datepicker('refresh');

})