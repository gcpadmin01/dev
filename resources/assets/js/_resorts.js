$('.resort-gallery').slick({
    lazyLoad: "ondemand",
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.resort-gallery-nav',
    responsive:[
        {
            breakpoint: 768,
            settings:{
                arrows:true
            }
        }
    ]
});
$('.resort-gallery-nav').slick({
    lazyLoad: "ondemand",
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.resort-gallery',
    dots: false,
    centerMode: true,
    focusOnSelect: true,
});

$('.slick-specials-slider').slick({
    slidesToShow: 3,
    arrows: true,
    autoplay:false,
    rows:0,
    variableWidth:true,
    centerMode: true,
    responsive:[
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                infinite: true,
            }
        },
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                infinite: false,
            }
        }
    ]
});
$('.restaurants-nav').slick({
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.restaurants-tabs',
    focusOnSelect: true,
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

$('.restaurants-tabs').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    touchMove: false,
    swipe: false,
    asNavFor: '.restaurants-nav'
});

$('.things-to-do').slick({
    arrows: false,
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.restaurants-tabs',
    focusOnSelect: true,
    centerMode:true,
    centerPadding:'60px',
    responsive:[
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 3,
                dots: false,
                arrows:false,
                centerMode:true,
                centerPadding:'40px'
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                dots: false,
                arrows:false,
                centerMode:true,
                centerPadding:'60px'
            }
        }
    ]
});

$('#links-resorts').on('change', function () {
    $value = $(this).val();
    window.location = $value;
});