require ('./interna');
require('intersection-observer');
import 'slick-carousel';
import {clickSpecials} from './datalayer';

$('.slick-home').slick({
    slidesToShow: 1,
    arrows: true,
    autoplay: true,
    lazyLoad:'progressive'
});


$('.slick-carousel').slick();

document.querySelector('.home-sb .read_more').addEventListener('click', ev=> {
    document.querySelector('.home-sb .movil').classList.add('hidden');
    document.querySelector('.home-sb .desk').classList.add('show');
})

//$('#home-slick-resorts').slick({
//    slidesToShow: 3,
//    arrows: true,
//    autoplay: false,
//    rows: 0,
//    infinite: false,
//    lazyLoad:'progressive',
//    responsive: [
//        {
//            breakpoint: 1000,
//            settings: {
//                slidesToShow: 2,
//                //infinite: true,
//            }
//        },
//        {
//            breakpoint: 576,
//            settings: {
//                slidesToShow: 1,
//                //infinite: true,
//                arrows: false,
//                dots: true
//            }
//        }
//    ]
//});

$('#home-slick-specials').on('init',function(event, slick){
    let imgs = document.querySelectorAll('#home-slick-specials .slick-cloned [data-src]');

    for(let img of imgs){
        img.src = img.dataset.src;
    }
});

$('#home-slick-specials').slick({
    slidesToShow: 3,
   arrows: true,
   autoplay: false,
   rows: 0,
   infinite: true,
   lazyLoad:'progressive',
   responsive: [
       {
           breakpoint: 1000,
           settings: {
               slidesToShow: 2,
           }
       },
       {
           breakpoint: 576,
           settings: {
               slidesToShow: 1,
               arrows: false,
               dots: true
            }
       }
   ]
});


//var observerConfig = {
    //    root: null,
//    rootMargin: "10px",
//    threshold: [0]
//};

$('.boton-booking-now-fixed').on('click', function () {
    var header = $('.nav-primary');
    if ($('#booking-interno').length > 0) {
        $('html, body').animate({
            scrollTop: $('#booking-interno').offset().top - ( header.height() + 35 )
        }, 1500, 'swing');
    }
    elementVisible($('.booking-interno-container'));
});

//  

//observer.observe(document.querySelector('#home-slick-resorts'));
// observer.observe(document.querySelector('#home-slick-specials'));




/**
 * Todo: Agregar el evento para el data layer de ofertas del home
 */
//document.querySelector('.datalayer-click_specials_home').addEventListener('click',function (event) {
//    if (event.target.tagName.toLowerCase() ===  "a" || event.target.closest('a')){
//        var order = event.target.closest('.item').dataset.position;
//        clickSpecials('Home', 'ProHome'+order);
//    }
//})


function onloadVimeo(){
    document.querySelectorAll('.vimeo-video .video').forEach(function (video) {

        const element       = video.closest('.vimeo-video')
        const videoContaner = video.closest('.videobg-container');
        const url           = video.dataset.vimeo;

        const player = new Vimeo.Player(video, {
            url : url,
            controls: false,
            api:      true,
            loop:     true,
            muted:    true,
            autopause: true,
        });

        player.on('play', data => {
            video.closest('.videobg').classList.add('videobg-play');
        })

        player.on('pause', data => {
            video.closest('.videobg').classList.remove('videobg-play');
        })

        player.on('volumechange', data => {
            console.log(data);
        })

        video.closest('.videobg').addEventListener('click', evt => {
            evt.preventDefault();

            if (evt.currentTarget.classList.contains('videobg-play')){
                player.pause();
            }else{
                player.play();
            }

        });

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