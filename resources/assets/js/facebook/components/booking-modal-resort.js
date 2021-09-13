import {Datepicker} from "vanillajs-datepicker";
import {dateParse} from '../../v2/components/helpers-dates';
import {creaDataBookNow} from "../../v2/datalayer";

/**
 *  Modal de hotel only
 */
const modalResort = document.querySelector('#modal-booking-resort');
const modalClose = modalResort.querySelector('.modal__close');

const dateIn = modalResort.querySelector("[name='datein']");
const dateOut = modalResort.querySelector("[name='dateout']");
const inputAdults = modalResort.querySelector("[name='adults']");
const inputChildren = modalResort.querySelector("[name='children']");
const inputChildren2 = modalResort.querySelector("[name='children2']");

const hotelid = modalResort.querySelector("[name='hotelid']");
const RatePlanID = modalResort.querySelector("[name='RatePlanID']");
const discount = modalResort.querySelector("[name='discount']");

const modalTitle = modalResort.querySelector('.modal__title');
const modalSubtitle = modalResort.querySelector('.modal__subtitle');


let eventChangeDateIn = null;
let eventChangeDateOut = null;

const showBookingResort = function (config){
    const optionsDates = config;
    const today = new Date();
    let minDate = null;
    let maxDate = new Date();

    modalTitle.textContent = config.conceptTitle;
    modalSubtitle.textContent = config.conceptResortName;

    hotelid.value = config.hotelId;
    RatePlanID.value = config.ratePlanId;
    discount.value = config.discount;

    optionsDates.travelStart.rangeDates.forEach(dates => {
        const startDay = dateParse(dates.start_date.date);
        const endDay = dateParse(dates.end_date.date);

        if(startDay > today && (minDate === null || startDay < minDate)){
            minDate = startDay;
        }


        if(endDay > today && endDay > maxDate){
            maxDate = endDay;
        }
    });
    minDate = (minDate === null)? new Date() : minDate;

    const pickerIn = new Datepicker(dateIn, {
        minDate : minDate,
        maxDate : maxDate,
        beforeShowDay : function (date) {

            let retValue = false;
            optionsDates.travelStart.rangeDates.forEach(dates => {
                if(date >= dateParse(dates.start_date.date) && date <= dateParse(dates.end_date.date)) {
                   retValue = true;
                };
            });
            return retValue;

        }.bind(optionsDates)
    });

    pickerIn.setDate(minDate);
    

    eventChangeDateIn = (event) => {
        const inputDate = new Date(pickerIn.getDate());
        inputDate.setDate(inputDate.getDate() + 5);

        pickerIn.hide();
        let maxDate = inputDate;

        optionsDates.travelStart.rangeDates.forEach(dates => {
            if(inputDate >= dateParse(dates.start_date.date) && inputDate <= dateParse(dates.end_date.date)) {
               maxDate = dateParse(dates.end_date.date);
            };
        });
        pickerOut.setOptions({
            minDate: new Date(pickerIn.getDate()),
            maxDate : maxDate
        });
        pickerOut.setDate(inputDate);
        pickerOut.refresh('input');
        
        pickerOut.show();
    }

    dateIn.addEventListener('changeDate', eventChangeDateIn);

    const pickerOut = new Datepicker(dateOut, {
        beforeShowDay : function (date) {
            let retValue = false;
            
            optionsDates.travelStart.rangeDates.forEach(dates => {
                if(date >= dateParse(dates.start_date.date) && date <= dateParse(dates.end_date.date)) {
                   retValue = true;
                };
            });
            return retValue;

        }.bind(optionsDates)
    });

    const nextInput = new Date(pickerIn.getDate());
    nextInput.setDate(nextInput.getDate() + 5);
    pickerOut.setDate(nextInput);

    eventChangeDateOut = (event) => {
        pickerOut.hide();
    };
    dateOut.addEventListener('changeDate', eventChangeDateOut);

    switch(config.hotelId){
        case "110441": // Royal Uno
            if(inputAdults.closest('div').querySelector('label') != null){
                inputAdults.closest('div').querySelector('label').textContent = tagsAdults.adult16;
            }else{
                inputAdults.querySelector('option').textContent = tagsAdults.adult16;    
                inputAdults.value ="";
            }
            
            if(inputChildren.closest('div').querySelector('label') != null){
                inputChildren.closest('div').querySelector('label').textContent = tagsChildren.child15;
                inputChildren.value = 0;
            }else{
                inputChildren.querySelector('option').textContent = tagsChildren.child15;
                inputChildren.value ="";
            }

            inputChildren2.closest('div').classList.add('hidden');
            if(inputChildren2.closest('div').querySelector('label') != null){
                inputChildren2.value = 0;
            }else{
                inputChildren2.value ="";
            }
            break;
        case "86169": // Royal Sands
        case "73601": // Royal Cancun
        case "86184": // Royal Haciendas
        case "86180": // The Villas
        case "86179": // Simpson Bay
        case "86181": // Sea Aquarium

            if(inputAdults.closest('div').querySelector('label') != null){
                inputAdults.closest('div').querySelector('label').textContent = tagsAdults.adult18;
            }else{
                inputAdults.querySelector('option').textContent = tagsAdults.adult18;
                inputAdults.value ="";    
            }
            
            if(inputChildren.closest('div').querySelector('label') != null){
                inputChildren.closest('div').querySelector('label').textContent = tagsTeen.teen13_17;
                inputChildren.value = 0;
            }else{
                inputChildren.querySelector('option').textContent = tagsTeen.teen13_17;
                inputChildren.value ="";
            }
            

            inputChildren2.closest('div').classList.remove('hidden');
            if(inputChildren2.closest('div').querySelector('label') != null){
                inputChildren2.closest('div').querySelector('label').textContent = tagsChildren.child12
                inputChildren2.value = 0;
            }else{
                inputChildren2.querySelector('option').textContent = tagsChildren.child12
                inputChildren2.value = "";
            }
            
            break
        case "86182": // Royal Islander
        case "95939": // Grand Residences
            
            if(inputAdults.closest('div').querySelector('label') != null){
                inputAdults.closest('div').querySelector('label').textContent = tagsAdults.adult13;
            }else{
                inputAdults.querySelector('option').textContent = tagsAdults.adult13;
                inputAdults.value ="";
            }
            
            if(inputChildren.closest('div').querySelector('label') != null){
                inputChildren.closest('div').querySelector('label').textContent = tagsChildren.child12;
                inputChildren.value = 0;
            }else{
                inputChildren.querySelector('option').textContent = tagsChildren.child12;
                inputChildren.value ="";
            }
            

            inputChildren2.closest('div').classList.add('hidden');
            if(inputChildren2.closest('div').querySelector('label') != null){
                inputChildren2.closest('div').querySelector('label').textContent = tagsChildren.child12;
                inputChildren2.value = 0;    
            }else{
                inputChildren2.querySelector('option').textContent = tagsChildren.child12
                inputChildren2.value = "";    
            }
            

            break;

    };


    modalResort.classList.add('show');
    
}

const hideBookingResort = function (){
    modalResort.classList.remove('show');
    dateOut.removeEventListener('changeDate', eventChangeDateOut);
    dateIn.removeEventListener('changeDate', eventChangeDateIn);
}

modalClose.addEventListener('click', event => {
    hideBookingResort();
});

modalResort.querySelector('form').addEventListener('submit', event => {
    creaDataBookNow(event.target);
})

export {
    showBookingResort,
    hideBookingResort
}