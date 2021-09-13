require ('./interna');
import './components/slick';
import 'owl.carousel';

var options = {
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
};

$('.menu-trip').on('click','.item-trip',function(){
    var cat = $(this).data('destination');
    $('.name-destination').text($(this).text().trim());
    showProjectsbyCat(cat);
});

function showProjectsbyCat( cat ){
    $(".owl-carousel").fadeOut("fast");

    $('#projects-hidden .card.'+cat).each(function(i,e){
       var elem  = $(e).parent().html();

       $(".owl-carousel").trigger('add.owl.carousel',[elem]);
       $(e).parent().remove();
    });
    
    $('#resort-destino .card:not(.card.'+ cat + ')').each(function(i,e){
       var targetPos = $(e).parent().index();
       var elem      = $(e).parent();
       $( elem ).clone().appendTo( $('#projects-hidden') );
       $(".owl-carousel").trigger('remove.owl.carousel', [targetPos]).trigger('refresh.owl.carousel');
    });

    $(".owl-carousel").fadeIn("fast");
}

$('.slider-nav-7-1').slick({
    slidesToShow: 7,
    slidesToScroll: 1,
    asNavFor: '.slider-content-7-1',
    dots: false,
    focusOnSelect: true,
    responsive: [
        {
            breakpoint: 1100,
            settings: {
                slidesToShow: 5,
                infinite: false,
                arrows: true
            }
        },
        {
            breakpoint: 730,
            settings: {
                slidesToShow: 3,
                infinite: false,
                arrows: true
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                infinite: false,
                arrows: true
            }
        }
    ]

});

$('.slider-content-7-1').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav-7-1'
});

// observer(document.querySelector('.menu-trip'), () => {
// });

var observerConfig = {
    root: null,
    rootMargin: "0px",
    threshold: [0]
};

var observer = new IntersectionObserver(function (entries, observer) {
    Array.prototype.forEach.call(entries, function (entry) {
        if (entry.isIntersecting) {
            observer.unobserve(entry.target);
            var owl = $('.owl-carousel');
            owl.find('img.lazyload').each((i,img)=>{
                // console.log($(img).data('src'));
                $(img).attr('src',$(img).data('src'));
                // img.src = img.getAttribute();
            });
            owl.owlCarousel(options);
            showProjectsbyCat('1');
            $('.name-destination').text('Cancun');
        }
    });
}, observerConfig);

observer.observe(document.querySelector('.main-info'));