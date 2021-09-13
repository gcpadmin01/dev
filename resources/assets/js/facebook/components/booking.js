import Choices from "choices.js";
import {Datepicker} from "vanillajs-datepicker";
import {creaDataRoomOnly} from "../../v2/datalayer";


const initBookingHotel = function (form, options = {}){
    const domHotelId = form.querySelector("[name='hotelId']");

    const dateIn = form.querySelector("[name='datein']");
    const dateOut = form.querySelector("[name='dateout']");

    const inputAdults = form.querySelector("[name='adults']");
    const inputChildren = form.querySelector("[name='children']");
    const inputChildren2 = form.querySelector("[name='children2']");
    const rooms = form.querySelector("[name='rooms']");
    const checkTerms = form.querySelector(".check-terms");

    new Choices(domHotelId);


    const pickerIn = new Datepicker(dateIn,{
        minDate: new Date()
    });

    const pickerOut = new Datepicker(dateOut,{
        minDate: new Date(),
    });


    function formOptions() {

        Object.defineProperties(this, {
            pickerIn :{
                get: () => {
                    return pickerIn;
                }
            },
            pickerOut :{
                get: () => {
                    return pickerOut;
                }
            },
            resort : {
                get: () => {
                    return domHotelId;
                }
            }
        })
    }

    form.formOptions = new formOptions();

    dateIn.addEventListener('changeDate', (event) => {
        const inputDate = new Date(pickerIn.getDate());
        inputDate.setDate(inputDate.getDate() + 1);

        pickerIn.hide();

        pickerOut.setOptions({
            minDate: inputDate
        });
        pickerOut.setDate(inputDate);
        pickerOut.show();
    });

    dateOut.addEventListener('changeDate', event => {
        pickerOut.hide();
    })

    domHotelId.addEventListener('change', event => {

        if (event.target.checkValidity()){
            event.target.closest('div').classList.remove('input-invalid');
        }

        switch(event.target.value){
            case "110441": // Royal Uno
                if(inputAdults.closest('div').querySelector('label') != null){
                    inputAdults.closest('div').querySelector('label').textContent = tagsAdults.adult16;
                }
                inputAdults.querySelector('option').textContent = tagsAdults.adult16;
                //inputAdults.value ="";

                if(inputChildren.closest('div').querySelector('label') != null){
                    inputChildren.closest('div').querySelector('label').textContent = tagsChildren.child15;
                }
                inputChildren.querySelector('option').textContent = tagsChildren.child15;
                //inputChildren.value ="";

                inputChildren2.closest('div').classList.add('hidden');
                inputChildren2.value = "";
                break;
            case "86169": // Royal Sands
            case "73601": // Royal Cancun
            case "86184": // Royal Haciendas
            case "86180": // The Villas
            case "86179": // Simpson Bay
            case "86181": // Sea Aquarium

                if(inputAdults.closest('div').querySelector('label') != null){
                    inputAdults.closest('div').querySelector('label').textContent = tagsAdults.adult18;
                }
                inputAdults.querySelector('option').textContent = tagsAdults.adult18;
               // inputAdults.value ="";

                if(inputChildren.closest('div').querySelector('label') != null){
                    inputChildren.closest('div').querySelector('label').textContent = tagsTeen.teen13_17;
                }
                inputChildren.querySelector('option').textContent = tagsTeen.teen13_17;

                //inputChildren.value ="";

                if(inputChildren2.closest('div').querySelector('label') != null){
                    inputChildren2.closest('div').querySelector('label').textContent = tagsChildren.child12
                }
                inputChildren2.closest('div').classList.remove('hidden');
                inputChildren2.querySelector('option').textContent = tagsChildren.child12
                //inputChildren2.value = "";
                break
            case "86182": // Royal Islander
            case "95939": // Grand Residences
                if(inputAdults.closest('div').querySelector('label') != null){
                    inputAdults.closest('div').querySelector('label').textContent = tagsAdults.adult13;
                }

                inputAdults.querySelector('option').textContent = tagsAdults.adult13;
               //inputAdults.value ="";

                if(inputChildren.closest('div').querySelector('label') != null){
                    inputChildren.closest('div').querySelector('label').textContent = tagsChildren.child12;
                }
                inputChildren.querySelector('option').textContent = tagsChildren.child12;
                //inputChildren.value ="";

                if(inputChildren2.closest('div').querySelector('label') != null){
                    inputChildren2.closest('div').querySelector('label').textContent = tagsChildren.child12;
                }
                inputChildren2.closest('div').classList.add('hidden');
                inputChildren2.querySelector('option').textContent = tagsChildren.child12
                inputChildren2.value = "";

                break;

        };
    });

    form.addEventListener('submit', event => {
        form.querySelectorAll('.error').forEach(e => {e.classList.add('hidden')});

        if (!event.target.checkValidity()){
            event.preventDefault();
            form.classList.add('form__attempt');

            if(!dateIn.checkValidity()){
                dateIn.parentElement.querySelector('.error').classList.remove('hidden')
            }

            if(!dateOut.checkValidity()){
                dateOut.parentElement.querySelector('.error').classList.remove('hidden')
            }

            if(!inputChildren.checkValidity()){
                inputChildren.parentElement.querySelector('.error').classList.remove('hidden')
            }

            if(!inputChildren2.checkValidity()){
                inputChildren2.parentElement.querySelector('.error').classList.remove('hidden')
            }

            if(!inputAdults.checkValidity()){
                inputAdults.parentElement.querySelector('.error').classList.remove('hidden')
            }

            if(!rooms.checkValidity()){
                rooms.parentElement.querySelector('.error').classList.remove('hidden')
            }

            if(!domHotelId.checkValidity()){
                domHotelId.parentElement.parentElement.parentElement.querySelector('.error').classList.remove('hidden')
            }

            if (checkTerms){
                if(!checkTerms.checkValidity()){
                    console.log('Terms')
                    checkTerms.parentElement.querySelector('.error').classList.remove('hidden')
                }
            }

            form.querySelectorAll('select[name]').forEach(inputDom => {
                if (inputDom.checkValidity() === false ){
                    const inputStyle = getComputedStyle(inputDom);
                    if (inputStyle.getPropertyValue('display') === 'none'){
                        inputDom.closest('div').classList.add('input-invalid');
                    }
                }
            });

        }else{
            creaDataRoomOnly(event.target);
        }
    });


}
export {
    initBookingHotel
}