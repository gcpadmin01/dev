import Glide, {Breakpoints, Swipe, Controls, Images} from '@glidejs/glide/dist/glide.modular.esm';
import {initBookingHotel} from '../js/facebook/components/booking';
import {getToken, startBasicAvail} from "./v2/components/TravelClick";


//startBasicAvail({
//    rooms: 1,
//    hotelCode: 86169,
//    dateIn: '2021-11-01',
//    dateOut: '2021-12-30',
//    adults: 2,
//    currency: 'USD',
//    ratePlanCode: 4237231,
//    identifier: 'MSC40',
//})

/**
 *
 * @param event
 * @param element
 * @returns {boolean}
 */
function outsideClick(event, element) {
    let outside = true;

    if (element.id.length <= 0) {
        element.id = `_id_${Math.floor(Math.random() * 1000)}`;
    }

    if (event.target.closest(`#${element.id}`)) {
        outside = false;
    }

    return outside;
}

/**
 * Configuracion de Formulario
 */

const form = document.querySelector('.form-booking > form');
initBookingHotel(form);

//const getDataForm = (form) => {
//
//}

//form.formOptions.pickerIn.setOptions({
//    beforeShowDay: (date) => {
//        console.log(date);
//
//    }
//})

let lastResort = null;

let firstDateAvailable = {
    '73601': null,
    '86169': null,
    '86184': null,
}

let disableDates = {
    '73601': [],
    '86169': [],
    '86184': [],
};

window.disableDates = disableDates;
window.booking = form;

let lastPeticionDate = {
    '73601': new Date(),
    '86169': new Date(),
    '86184': new Date(),
}

const getDataForm = (form, date = (new Date())) => {
    let dateIn = null;
    let dateOut = null;

    //console.log("change")

    if (date == null) {
        date = new Date();
    }

    const dataForm = new FormData(form);
    let data = {};

    for (const [key, value] of dataForm.entries()) {
        if (value !== "") {
            data[key] = value;
        }
    }
    const defaultData = {
        rooms: 1,
        adults: 2,
        currency: 'USD',
        identifier: 'MSC40',
    }

    const {rooms, hotelId: hotelCode, adults = 2, RatePlanID: ratePlanCode} = data;


    const ms = date.getTime() + (86400000 * 90);
    const nextDate = new Date(ms);

    lastPeticionDate[hotelCode].setHours(0, 0, 0, 0);
    nextDate.setHours(0, 0, 0, 0);

    if (lastPeticionDate[hotelCode] >= nextDate) {
        return false
    }

    const year = lastPeticionDate[hotelCode].getFullYear();
    const mount = lastPeticionDate[hotelCode].getMonth();
    const day = lastPeticionDate[hotelCode].getDate();
    dateIn = `${year}-${(mount < 8) ? '0' : ''}${mount + 1}-${day}`;

    const yearEnd = nextDate.getFullYear();
    const mountEnd = nextDate.getMonth();
    const dayEnd = nextDate.getDate();

    dateOut = `${yearEnd}-${(mountEnd < 8) ? '0' : ''}${mountEnd + 1}-${dayEnd}`;

    lastPeticionDate[hotelCode] = nextDate;

    const dataAux = {
        rooms,
        hotelCode,
        dateIn,
        dateOut,
        adults,
        currency: 'USD',
        ratePlanCode,
        identifier: 'MSC40',
    }
    const newData = {...defaultData, ...dataAux};

    return newData;
}

let lastPeticion = {};

const findDates = (peticion) => {
    startBasicAvail(lastPeticion)
        .then(resp => {

            if (firstDateAvailable[resp.result.hotelCode] == null) {
                const rateFirst = resp.result.dates.find(rate => rate.isAvailable);
                //console.log(rateFirst);
                if (rateFirst == null) {
                    const lastConsult = resp.result.dates.pop();
                    const [year, month, day] = lastConsult.date.split('-');

                    const nextReq = new Date();
                    nextReq.setFullYear(year);
                    nextReq.setMonth(month - 1);
                    nextReq.setDate(day);

                    const endRequest = new Date();
                    const endRequestms = endRequest.getTime() + (86400000 * 270);
                    const endRequestAux = new Date(endRequestms);


                    //console.log(lastConsult.date, nextReq);
                    if (endRequestAux > nextReq) {
                        loadAvailDates(form, nextReq);
                    }
                } else {
                    const [year, month, day] = rateFirst.date.split('-');
                    firstDateAvailable[resp.result.hotelCode] = `${month}-${day}-${year}`;
                }
            }

            return {
                request: resp.request,
                result: resp.result.dates.filter(rate => !rate.isAvailable)
            };

        })
        .then(({request, result}) => {
            const newDatesDisabled = result.map(rates => {
                const [year, month, day] = rates.date.split('-');
                return `${month}-${day}-${year}`;
            });

            disableDates[request.hotelCode].push(...newDatesDisabled);

            form.formOptions.pickerIn.setOptions({
                datesDisabled: disableDates[request.hotelCode],
                minDate: firstDateAvailable[request.hotelCode]
            })
        })
}

const loadAvailDates = (form, date = null) => {
    lastPeticion = getDataForm(form, date);
    const hotelCode = form.querySelector('[name="hotelId"]').value;

    if (lastPeticion === false) {
        const focused = window.booking.formOptions.pickerIn.picker.currentView.focused;
        console.log(new Date(focused));

        form.formOptions.pickerIn.setOptions({
            datesDisabled: disableDates[hotelCode],
            minDate: firstDateAvailable[hotelCode]
        })
    } else {
        findDates(lastPeticion)
    }
};

let lastPeticionEnd = {}
const findDatesEnd = (peticion) => {
    startBasicAvail(lastPeticion)
        .then(resp => {

            //if (firstDateAvailable[resp.result.hotelCode] == null) {
                const rateFirst = resp.result.dates.find(rate => rate.isAvailable);
                //console.log(rateFirst);
                if (rateFirst == null) {
                    const lastConsult = resp.result.dates.pop();
                    const [year, month, day] = lastConsult.date.split('-');

                    const nextReq = new Date();
                    nextReq.setFullYear(year);
                    nextReq.setMonth(month - 1);
                    nextReq.setDate(day);

                    const endRequest = new Date();
                    const endRequestms = endRequest.getTime() + (86400000 * 270);
                    const endRequestAux = new Date(endRequestms);


                    //console.log(lastConsult.date, nextReq);
                    if (endRequestAux > nextReq) {
                        loadAvailDatesEnd(form, nextReq);
                    }
                } else {

                    if (firstDateAvailable[resp.result.hotelCode] == null){
                        firstDateAvailable[resp.result.hotelCode] = rateFirst;
                    }

                    if (rateFirst < firstDateAvailable[resp.result.hotelCode]){
                        firstDateAvailable[resp.result.hotelCode] = rateFirst;
                    }
                    const dateAux = firstDateAvailable[resp.result.hotelCode];
                    const [year, month, day] = dateAux.date.split('-');
                    firstDateAvailable[resp.result.hotelCode] = `${month}-${day}-${year}`;
                }
            //}

            return {
                request: resp.request,
                result: resp.result.dates.filter(rate => !rate.isAvailable)
            };

        })
        .then(({request, result}) => {
            const newDatesDisabled = result.map(rates => {
                const [year, month, day] = rates.date.split('-');
                return `${month}-${day}-${year}`;
            });

            disableDates[request.hotelCode].push(...newDatesDisabled);

            form.formOptions.pickerOut.setOptions({
                datesDisabled: disableDates[request.hotelCode],
                //defaultViewDate: firstDateAvailable[request.hotelCode],
                minDate: firstDateAvailable[request.hotelCode]
            })
            //console.log("ADD", newDatesDisabled);
        })
}
const loadAvailDatesEnd = (form, date = null) => {
    lastPeticionEnd = getDataForm(form, date);
    const hotelCode = form.querySelector('[name="hotelId"]').value;

    if (lastPeticionEnd === false) {
        form.formOptions.pickerOut.setOptions({
            datesDisabled: disableDates[hotelCode],
            minDate: firstDateAvailable[hotelCode]
        })
    } else {
        findDatesEnd(lastPeticionEnd)
    }

};

form.querySelector('[name="RatePlanID"]').addEventListener('change', event => {
    loadAvailDates(form);
    form.formOptions.pickerIn.refresh();
})

form.querySelector('[name="datein"]').addEventListener('changeMonth', event => {
    loadAvailDates(form, event.detail.viewDate);
})
form.querySelector('[name="datein"]').addEventListener('hide', event => {
    const {date} = event.detail;
    const endRequestms = date.getTime() + (86400000 * 5);
    const maxDateMs = date.getTime() + (86400000 * 7);

    const newDate = new Date(endRequestms);
    const maxDate = new Date(maxDateMs);

    setTimeout(() => {
        form.formOptions.pickerOut.setOptions({
            minDate: newDate,
            maxDate: maxDate
        });
        form.formOptions.pickerOut.setDate({
            clear:true
        });
        form.formOptions.pickerOut.show();
    }, 1)




})

form.querySelector('[name="dateout"]').addEventListener('changeMonth', event => {
    loadAvailDatesEnd(form, event.detail.viewDate);
})

form.addEventListener('submit', evt => {
    const date1 = form.formOptions.pickerIn.getDate();
    const date2 = form.formOptions.pickerOut.getDate();

    const timeDiff = Math.abs(date2.getTime() - date1.getTime());
    const numberOfNights = Math.ceil(timeDiff / (1000 * 3600 * 24));

    console.log(numberOfNights);
    if (!(numberOfNights >= 5 && numberOfNights <= 7)) {
        evt.preventDefault();
        form.querySelector('.global-error').classList.remove('hidden');
    } else {
        form.querySelector('.global-error').classList.add('hidden');
    }
})
window.pickerin = form.formOptions.pickerIn;
//console.log(form.formOptions.pickerIn);


const slider = document.querySelector('.glide-resorts');

new Glide(slider, {
    perView: 3,
    gap: 20,
    type: 'carousel',
    breakpoints: {
        599: {
            perView: 1.2,
            gap: 17
        },
        799: {
            perView: 2.2,
            gap: 17
        }
    }
}).mount({
    Breakpoints,
    Swipe
});

const sliderCommets = document.querySelector('.glide-commets');
new Glide(sliderCommets, {
    perView: 3,
    gap: 25,
    type: 'carousel',
    breakpoints: {
        599: {
            perView: 1,
            gap: 17
        },
        799: {
            perView: 1.2,
            gap: 17
        }
    }
}).mount({
    Breakpoints,
    Swipe,
    Controls
});

const sliderFooter = document.querySelector('.glide-footer');
new Glide(sliderFooter, {
    perView: 6,
    gap: 25,
    type: 'carousel',
    breakpoints: {
        599: {
            perView: 1.2,
            gap: 17
        },
        799: {
            perView: 2.2,
            gap: 17
        }
    }
}).mount({
    Breakpoints,
    Swipe,
    Controls
});

//const sliderGalleryResort = document.querySelectorAll('.glide-gallery-resort');
//sliderGalleryResort.forEach(element => {
//
//    const slider =  new Glide(element, {
//        perView:     1,
//        gap:         0,
//    }).mount({
//        Breakpoints,
//        Swipe,
//        Controls,
//        Images
//    });
//    setTimeout( () => {
//        slider.update()
//    } , 1);
//})


document.querySelectorAll('[data-toggle="height"]').forEach(button => {
    button.addEventListener('click', event => {
        const target = event.target.dataset.target;
        event.target.classList.toggle('r-180')
        document.querySelector(target).classList.toggle('show');

    })
})

document.querySelector('.on-show-menu').addEventListener('click', event => {
    event.stopPropagation();

    const menu = document.getElementById('menu-float');

    const clickOut = evt => {
        if (outsideClick(evt, menu)) {
            menu.classList.remove('show');
            window.removeEventListener('click', clickOut);
        }
    }

    menu.classList.add('header-float-animate');
    menu.classList.add('show');

    window.addEventListener('click', clickOut);

});

document.querySelector('.on-show-menu-call').addEventListener('click', event => {
    event.stopPropagation();

    const menu = document.getElementById('menu-call');

    const clickOut = evt => {
        if (outsideClick(evt, menu)) {
            menu.classList.remove('show');
            window.removeEventListener('click', clickOut);
        }
    }

    menu.classList.add('header-float-animate');
    menu.classList.add('show');

    window.addEventListener('click', clickOut);

});

document.querySelectorAll('[data-toggle="scroll"]').forEach(button => {
    button.addEventListener('click', event => {
        const id = event.currentTarget.dataset.target;
        const div = document.querySelector(id);

        // let headerOffset = 150;
        // let elementPosition = div.offsetTop;
        // let offsetPosition = elementPosition - headerOffset;
        //
        // window.scrollTo({
        //     top: offsetPosition,
        //     behavior: "smooth"
        // });
        scrollMove(div);

    })
});

let scrollMove = divMain => {
    let headerOffet = 150;
    let elementPosition = divMain.offsetTop;
    let offsetPosition = elementPosition - headerOffet;

    window.scrollTo({
        top: offsetPosition,
        behavior: "smooth"
    });
}

let msgConfirmContact = () => {
    if (MSGCONFIRMATION == true) {
        let div = document.querySelector('#a-2');
        scrollMove(div);
    }
}

msgConfirmContact();

document.querySelectorAll('[data-toggle="modal"]').forEach(button => {
    button.addEventListener('click', event => {
        const id = event.currentTarget.dataset.target;
        const div = document.querySelector(id);


        const close = () => {
            div.classList.remove('show');
            setTimeout(() => {
                div.classList.add('d-none');
            }, 350);

            div.querySelector('.modal-close button').removeEventListener('click', close);

            if (div.querySelector('.scroll')) {
                div.querySelector('.scroll').removeEventListener('click', scroll);
            }
        }

        const closeOut = (event) => {
            if (event.target.classList.contains('modal')) {
                close();
                div.removeEventListener('click', closeOut);
            }
        }

        const scroll = (event) => {
            close();

            const id = event.currentTarget.dataset.target;
            const divC = document.querySelector(id);

            let headerOffset = 100;
            let elementPosition = divC.offsetTop;
            let offsetPosition = elementPosition - headerOffset;

            window.scrollTo({
                top: offsetPosition,
                behavior: "smooth"
            });

            div.querySelector('.scroll').removeEventListener('click', scroll);
        }

        div.querySelector('.modal-close button').addEventListener('click', close);

        if (div.querySelector('.scroll')) {
            div.querySelector('.scroll').addEventListener('click', scroll);
        }

        div.addEventListener('click', closeOut)

        div.classList.remove('d-none');

        setTimeout(() => {
            div.classList.add('show');

            if (div.querySelector('.glide-gallery-resort:not(.glide--slider)')) {
                const slider = new Glide(div.querySelector('.glide-gallery-resort'),
                    {
                        perView: 1,
                        gap: 0,
                    }).mount({
                    Breakpoints,
                    Swipe,
                    Controls,
                    Images
                });
                setTimeout(() => slider.update(), 2)
            }

        }, 1);

    })
})


function onloadVimeo() {
    const video = document.querySelector('.vimeo');
    const player = new Vimeo.Player(video, {
        url: 'https://vimeo.com/538810384/8dceaa7de8',
        controls: false,
        api: true,
        loop: false,
        muted: true,
        autopause: true,
        allowfullscreen: true
    });

    player.play();
}

window.onloadVimeo = onloadVimeo;


setTimeout(() => {
    const url = new URL(window.location.href);
    const modal = url.searchParams.get("m");
    if (modal) {
        const div = document.querySelector('#modal-policies');

        const close = () => {
            div.classList.remove('show');
            setTimeout(() => {
                div.classList.add('d-none');
            }, 350);

            div.querySelector('.modal-close button').removeEventListener('click', close);
        }

        div.querySelector('.modal-close button').addEventListener('click', close);

        div.classList.remove('d-none');
        setTimeout(() => {
            div.classList.add('show');
        });


    }
}, 500)


const domHotelId = form.querySelector("[name='hotelId']");
domHotelId.addEventListener('change', event => {
    const resort = event.currentTarget.value;
    const domRateId = event.currentTarget.closest('form').querySelector('[name="RatePlanID"]');
    const domIdentifier = event.currentTarget.closest('form').querySelector('[name="identifier"]');
    domIdentifier.value = "MSC40";

    switch (resort) {
        case '73601': // Royal Cancun
            domRateId.value = "4237221";
            break;

        case '86169': // Royal Sands
            domRateId.value = "4237231";
            break;

        case '86184': // Royal Haciendas
            domRateId.value = "4237250";
            break;
        default:
            domRateId.value = "";
    }
    const eventFix = new Event('change');
    domRateId.dispatchEvent(eventFix);
})


document.querySelectorAll('[data-toggle="height-animate"]').forEach(btn => {
    btn.addEventListener('click', event => {
        const target = event.target.dataset.target;
        const container = document.querySelector(target);

        //console.log(container);
        if (container.clientHeight) {
            //console.log('time a');
            event.target.classList.remove('r-180');
            container.style.maxHeight = 0;
        } else {
            //console.log('time b');
            const wrapper = document.querySelector(`${target} > *`);
            event.target.classList.add('r-180');
            container.style.maxHeight = wrapper.clientHeight + "px";
        }
    });
})

document.querySelectorAll('.card-more-info').forEach(button => {
    //console.log('button');
    button.addEventListener('click', event => {
        const target = event.target.dataset.policies;

        document.querySelectorAll('#modal-policies .height-animate').forEach(element => {

            if (element.clientHeight) {
                element.style.maxHeight = '0px';
            }
        })

        setTimeout(() => {
            const wrapper = document.querySelector(`${target} > *`);
            const container = document.querySelector(`${target}`);

            //document.querySelector(`[data-target="${target}"]`).classList.add('r-180');
            container.style.maxHeight = wrapper.clientHeight + "px";

            //document.querySelector(`[data-target="${target}"]`).click();
        }, 2)
    })
})



