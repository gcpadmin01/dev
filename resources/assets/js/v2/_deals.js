import './interna';
import 'bootstrap/js/dist/tooltip';

import 'owl.carousel'
import {clickSpecials} from "./datalayer";


$('.owl-carousel').owlCarousel({
    lazyLoad:true,
    lazyLoadEager:1,
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
})


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


$('[data-toggle="tooltip"]').tooltip();


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


document.querySelector('.datalayer-click_specials').addEventListener('click',function (event) {
    if (event.target.tagName.toLowerCase() ===  "a" || event.target.closest('a')){
        var order = event.target.closest('.item').dataset.position;
        clickSpecials('Specials', 'ProSpecials'+order);
    }
})