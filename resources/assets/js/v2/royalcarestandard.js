require ('./interna');
import "./components/slick";

var observerConfig = {
    root: null,
    rootMargin: "50px 0px 0px 0px",
    threshold: [0.60]
};

var bookingObserver = new IntersectionObserver(function (entries, observer) {
    for(let entry of entries){
        if(entry.isIntersecting){
            let target = entry.target.dataset.target;
            document.querySelector('label.active').classList.remove('active');
            document.querySelector('.tab-'+target).classList.add('active');
        }
    }

}, observerConfig);

document.querySelectorAll('.sec-d').forEach(element => {
    bookingObserver.observe(element);
});

$('.sec-title label').on('click', function (event) {
    var target = $(this).data('target');

    var header = $('header');
    $('html, body').animate({
        scrollTop: $(target).offset().top - ( header.height() + 80 )
    }, 1500, 'swing');
})

$('.slick-slider').slick({
    arrows: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    infinite: false,
    responsive:[
        {
            breakpoint: 1000,
            settings: {
                slidesToShow: 3,
                infinite: true,
                dots: false,
                arrows:true
            }
        },
        {
            breakpoint: 800,
            settings: {
                slidesToShow: 2,
                infinite: true,
                dots: false,
                arrows:true
            }
        },
        {
            breakpoint: 550,
            settings: {
                slidesToShow: 1,
                infinite: true,
                dots: false,
                arrows:true
            }
        }
    ]
});