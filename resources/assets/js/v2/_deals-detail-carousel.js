import './interna';
import 'owl.carousel';


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

$('.owl-carousel').owlCarousel({
    lazyLoad:true,
    lazyLoadEager: 1,
    loop:true,
    margin:5,
    center: true,
    nav:true,
    autoplay:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
            dots:true
        },
        600:{
            items:2,
            nav:true,
            dots:true
        },
        1000:{
            items:3,
            nav:true,
            dots:true
        }
    }
})