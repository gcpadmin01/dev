import Glide, { Controls } from '@glidejs/glide/dist/glide.modular.esm'

import { showBookingResort } from './components/booking-modal-resort';
import { showBookingFlight } from './components/booking-modal-flight';

const sliderA = document.querySelector('.slider-a');

new Glide(sliderA, {
    perView:1,
    gap:0
}).mount({ Controls });

const sliderOffers = document.querySelector('.glide-offers');

new Glide(sliderOffers,{
    type: 'carousel',
    perView: 2,
    gap: '20px'
}).mount({ Controls });;


sliderOffers.addEventListener('click',  event => {
    if(event.target.classList.contains('btn-book')){
        const type = event.target.dataset.type;
        const data = JSON.parse(event.target.dataset.offer);
        if(type == 'hotel'){
            showBookingResort(data);
        }
        if(type == 'flight'){
            showBookingFlight(data);
        }
        
    }
})