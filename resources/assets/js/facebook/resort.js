import {initBookingHotel} from './components/booking';

const form = document.querySelector('.form-booking > form');
initBookingHotel(form);

const scrollToTop = () => {
    const c = document.documentElement.scrollTop || document.body.scrollTop;
    if (c > 0) {
        window.requestAnimationFrame(scrollToTop);
        window.scrollTo(0, c - c / 8);
    }
};

document.querySelector('.btn-book').addEventListener('click', event => {
    scrollToTop()
});

const eventChange = new Event('change');
form.querySelector('[name="hotelId"]').dispatchEvent(eventChange);