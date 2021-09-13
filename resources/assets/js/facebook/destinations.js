import Glide, { Controls } from '@glidejs/glide/dist/glide.modular.esm'
import {initBookingHotel} from './components/booking';

const sliders = document.querySelectorAll('.glide')
const conf = {
    perView:1,
    gap:0
}

sliders.forEach(item => {
    new Glide(item, conf).mount({ Controls });
});

const form = document.querySelector('.form-booking > form');
initBookingHotel(form);
