require ('./interna');
import './components/slick';
import 'owl.carousel';
import {observer} from './components/helper-observer';


$('.carousel-destination').slick({
    arrows: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: '.content-carousel-destination',
    focusOnSelect: true,
    infinite: false,
    responsive:[
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows:true
            }
        }
    ]
});

$('.content-carousel-destination').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    touchMove: false,
    swipe: false,
    infinite: false,
});

observer(document.querySelector('.food-destinations'), () => {
    $('.owl-carousel').owlCarousel({
        lazyLoad:true,
        lazyLoadEager:1,
        loop:false,
        margin:5,
        center: false,
        nav:false,
        autoplay:true,
        responsive:{
            0:{
                items:1,
                nav:false,
                dots:true
            },
            600:{
                items:2,
                nav:true,
                dots:false
            },
            1000:{
                items:3,
                nav:true,
                dots:false
            }
        },
        onInitialized: function (event) {
            $('.owl-carousel').find('.owl-item').attr('aria-selected','false');
            $('.owl-carousel').find('.owl-item.active').attr('aria-selected','true'); // let screen readers know an item is active
            // apply meta info to next and previous buttons and make them focusable
            $('.owl-carousel').find('.owl-prev').attr('role','button').attr('title','Previous');
            $('.owl-carousel').find('.owl-next').attr('role','button').attr('title','Next');
            $('.owl-carousel, .owl-prev, .owl-next').attr('tabindex','0');
            // listen for keyboard input
            $(document).on('keydown', function(e){
                var $focusedElement = $(document.activeElement),
                    singleOwl = $(".owl-carousel").data('owlCarousel'),
                    type = e.which == 39? 'next': null,
                    type = e.which == 37? 'prev': type,
                    type = e.which == 13? 'enter':type;
                // if the carousel is focused, use left and right arrow keys to navigate
                if($focusedElement.attr('id') === 'owl-single-example'){
                    if (type == 'next') {
                        singleOwl.next();
                    } else if (type == 'prev') {
                        singleOwl.prev();
                    }
                    // if the prev and next buttons are focused, catch "Enter" and navigate in the right direction
                } else if (type == 'enter') {
                    if ($focusedElement.hasClass('owl-next')) {
                        singleOwl.next();
                    } else if ($focusedElement.hasClass('owl-prev')) {
                        singleOwl.prev();
                    }
                }
            });
        },
        // let screen readers know which slide is active after navigation or reinit
        onChange : function() {
            $('.owl-carousel').find('.owl-item').attr('aria-selected','false');
            $('.owl-carousel').find('.owl-item.active').attr('aria-selected','true');
        }
    });
});


