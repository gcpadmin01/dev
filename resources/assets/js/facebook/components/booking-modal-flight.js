import Choices from "choices.js";
import {Datepicker} from "vanillajs-datepicker";
import {dateParse} from '../../v2/components/helpers-dates';
import {creaDataFlightForm} from "../../v2/datalayer";


const modalFlight = document.querySelector('#modal-booking-flight');
const modalClose = modalFlight.querySelector('.modal__close');
const modalTitle = modalFlight.querySelector('.modal__title');
const modalSubtitle = modalFlight.querySelector('.modal__subtitle');

const selectCountry = modalFlight.querySelector('.countries');
const selectAirport = modalFlight.querySelector("[name='airport']");
const dateIn = modalFlight.querySelector("[name='aDate']");
const dateOut = modalFlight.querySelector("[name='dDate']");
const inputHotel = modalFlight.querySelector("[name='hotel']");

const dataAirports = new Array();
const dataCountries  =  airports.map( country => {

    country.value = country.id;
    if(country.id == 'US'){
        country.selected = true;
    };

    country.airports.map( airport => {
        airport.country = country.id;
        airport.value = airport.id;

        dataAirports.push(airport);
        return airport;
    })

    return country;
});

let eventChangeCountry = null;
let choiceSelectCountry = null;
let choiceSelectAirport = null;
let eventChangeDateIn = null;

const showBookingFlight = function(config){

    modalTitle.textContent = config.conceptTitle;
    modalSubtitle.textContent = config.conceptResortName;
    inputHotel.value = config.reservhotelId;

    choiceSelectCountry = new Choices(selectCountry,{
        choices: dataCountries
    });

    eventChangeCountry = function(event){
        const country = selectCountry.value;
        const defaultAirports = dataAirports.filter( airport => airport.country == country );

        choiceSelectAirport.clearStore();
        choiceSelectAirport.clearInput();
        choiceSelectAirport.setChoices(defaultAirports,'value', 'label', true);
    };
    
    selectCountry.addEventListener('change', eventChangeCountry);

    const country = selectCountry.value;
    const defaultAirports = dataAirports.filter( airport => airport.country == country );

    choiceSelectAirport = new Choices(selectAirport);
    choiceSelectAirport.clearStore();
    choiceSelectAirport.clearInput();
    choiceSelectAirport.setChoices(defaultAirports,'value', 'label', true);

    const optionsDates = config;
    const today = new Date();
    let minDate = null;
    let maxDate = new Date();

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
    };

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

    dateOut.addEventListener('changeDate', event => {
        pickerOut.hide();
    })

    modalFlight.classList.add("show");


}

const hideBookingFlight =  () => {
    modalFlight.classList.remove("show");
    selectCountry.removeEventListener('change', eventChangeCountry);
    choiceSelectCountry.destroy();
    choiceSelectAirport.destroy();
}

modalClose.addEventListener('click', event => {
    hideBookingFlight();
    
});

modalFlight.querySelector('form').addEventListener('submit', event => {
    console.log(event.target);
    creaDataFlightForm(event.target);
})

export {
    showBookingFlight
}