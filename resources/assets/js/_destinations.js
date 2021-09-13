$('.carousel-destination').slick({
    arrows: false,
    slidesToShow: 6,
    slidesToScroll: 1,
    asNavFor: '.content-carousel-destination',
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

$('.content-carousel-destination').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    touchMove: false,
    swipe: false,
    asNavFor: '.carousel-destination'
});

$('.collapse').on('show.bs.collapse',function(){
    var dataGroup = $(this).data('group');
    if (dataGroup != ''){
        $(dataGroup).collapse('hide');
    }
});


resizeEvent();
$(window).resize(function () {
    resizeEvent();
});


function resizeEvent() {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (width <= 767) {
        $('#resort-cancun').appendTo('#aqui-cancun');
        $('#resort-carmen').appendTo('#aqui-carmen');
        $('#resort-morelos').appendTo('#aqui-morelos');
        $('#resort-maya').appendTo('#aqui-maya');

        $('#resort-cana').appendTo('#aqui-cana');
        $('#resort-curacao').appendTo('#aqui-curacao');
        $('#resort-marteen').appendTo('#aqui-marteen');

    }else{

        $('#resort-cancun').appendTo('.collapse-mexican-cont');
        $('#resort-carmen').appendTo('.collapse-mexican-cont');
        $('#resort-morelos').appendTo('.collapse-mexican-cont');
        $('#resort-maya').appendTo('.collapse-mexican-cont');

        $('#resort-cana').appendTo('.collapse-caribbean-cont');
        $('#resort-curacao').appendTo('.collapse-caribbean-cont');
        $('#resort-marteen').appendTo('.collapse-caribbean-cont');
    }
}