import './interna';
import 'owl.carousel';

var cardResorts =  document.querySelectorAll('.card-resort');

if (!IntersectionObserver) {
    Array.prototype.forEach.call(cardResorts, function (card) {
        card.classList.add('active');
    });
}else{
    var observerConfig = {
        root: null,
        rootMargin: "0px",
        threshold: [0.6]
    };

    var observer = new IntersectionObserver(function (entries, observer) {
        Array.prototype.forEach.call(entries, function (entry) {
            if (entry.isIntersecting) {
                observer.unobserve(entry.target);
                entry.target.classList.add('active');
            }
        });
    }, observerConfig);

    Array.prototype.forEach.call(cardResorts, function (cardResort) {
        observer.observe(cardResort);
    });
}

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
            console.log('.resort-' + destino);
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

$('.btn-dstn').click(function(e){
    var group = $(this);
    var otr   = $(this).siblings('.btn-dstn');
    
    group.addClass('active-dstn');
    otr.removeClass('active-dstn');

    var content = group.data('container');
    var other   = otr.data('container');

    $('.'+content).removeClass('d-none');
    $('.'+other).addClass('d-none');

});


// $('.owl-carousel').owlCarousel({
//     lazyLoad:true,
//     loop:true,
//     margin:5,
//     center: true,
//     nav:true,
//     autoplay:true,
//     responsiveClass:true,
//     responsive:{
//         0:{
//             items:1,
//             nav:false,
//             dots:true
//         },
//         600:{
//             items:2,
//             nav:true,
//             dots:false
//         },
//         1000:{
//             items:3,
//             nav:true,
//             dots:false
//         }
//     }
// })



//==================================================================================================
// Evento click de cintillo de sands por covid-19
//==================================================================================================
var linkOfer = document.querySelector('.link_offer');
if(linkOfer != null){
    linkOfer.addEventListener('click', function (e) {
       $('.resort-4').addClass('hover');

       var header = $('.nav-primary');
        $('html, body').animate({
            scrollTop: $('.resort-4').offset().top - ( header.height() + 35 )
        }, 1500, 'swing');
        //console.log(sandsCard.offsetTop);
    });
}

function onloadVimeo(){
    document.querySelectorAll('.vimeo-video .video').forEach(function (video) {

        //const video = element.querySelector('.video');
        const element = video.closest('.vimeo-video')
        const url = video.dataset.vimeo;
        const videoContaner = video.closest('.videobg-container');

        const player = new Vimeo.Player(video, {
            url : url,
            controls: true,
            api:      true,
            loop:     true,
            muted:    true,
            autopause: true,
        });


        player.on('play', data => {
            console.log(video);
            video.closest('.videobg').classList.add('videobg-play');
        })

        player.on('pause', data => {
            video.closest('.videobg').classList.remove('videobg-play');
        })

        video.closest('.videobg').addEventListener('click', evt => {
            evt.preventDefault();

            if (evt.currentTarget.classList.contains('videobg-play')){
                player.pause();
            }else{
                player.play();
            }

        })

        videoContaner.querySelector('.videobg-sound-speaker').addEventListener('click', () => {
            console.log('click');
            player.setVolume(0).then(volumen => {
                videoContaner.classList.remove('videobg-speaker');
                videoContaner.classList.add('videobg-mute');
            })
        })

        videoContaner.querySelector('.videobg-sound-mute').addEventListener('click', () => {
            player.setVolume(0.5).then(volumen => {
                videoContaner.classList.add('videobg-speaker');
                videoContaner.classList.remove('videobg-mute');
            })
        })

        element.addEventListener('mouseenter', evt => {
            player.play();
        });

        element.addEventListener('mouseleave', evt => {
            player.pause();
        })

    });
}

window.onloadVimeo = onloadVimeo;
