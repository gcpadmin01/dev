import './interna';
//import 'slick-carousel';
import  './components/slick';
import {creaDataRooms} from './datalayer';
import 'owl.carousel'
require('./components/_maps_resorts');

var flag_mark1 = false;

var options = {
    lazyLoad:true,
    lazyLoadEager:1,
    loop:true,
    margin:5,
    center: true,
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
            nav:false,
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
};

$('.resort-gallery').slick({
    lazyLoad: "ondemand",
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.resort-gallery-nav',
    infinite: true,
    centerMode: true,
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
    infinite: true,
});


$('.restaurants-nav').slick({
    arrows: false,
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.restaurants-tabs',
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

$('.restaurants-tabs').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    touchMove: false,
    swipe: false,
    infinite: false,
});

$(".open-Modal").on("click", function () {
    var resort = $(this).data('resort');
    var ihotelier = $(this).data('ihotelier');
    var tipo = $(this).data('tipo');
    var rname = $(this).data('rname');
    var roffer = $(this).data('roffer');

    var target = $(this).data('target');

    validaFormEdades(resort, target); //oculto casillas de edades, cambio etiquetas de edad.

    $(".hotelidB").val(resort);
    $("#resortname").text(rname);
    $("#resortoffer").text(roffer);

    if (tipo == 1) {
        $(".RatePlanIDB").val(ihotelier);
    } else {
        if (tipo == 3) {
            $("#packageIdB").val(ihotelier);
        } else {
            $("#packageIdB").val(ihotelier);
        }
    }
});

$('.btn-rooms').on('click',function (event) {
    event.preventDefault();
    creaDataRooms(this.form);
    $(this).closest('form').submit();
});

$('#links-resorts').on('change', function () {
    var value = $(this).val();
    window.location = value;
});

$('.map-iframe').on('click', function (event) {
    event.preventDefault();
    var iframe = $(this).find('iframe');
    var src = iframe.attr('src');
    console.log("OPEN MODAL :(");
    // $('#modal-map').find('iframe').attr('src', src);
    $('#modal-map').modal('show');
});

$('.icon-map').on('click', function (event) {
    event.preventDefault();
    var src = $(this).data('map');

    $('#modal-map').find('iframe').attr('src', src);
    $('#modal-map').modal('show');
});

$('#icon-certf > span').click(function(event){
    event.preventDefault();

    $('html, body').animate({
        scrollTop: $('#mark1').offset().top - (flag_mark1 == false ? 109:91)
    }, 1500, 'swing');
    if(flag_mark1 == false) flag_mark1=true;
});

$('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
    e.target // newly activated tab
    e.relatedTarget // previous active tab
    var image = $($(this).attr('href'));
    var timestamp = new Date().getTime();
    image.attr('src',$(this).data('image')+"?t=" + timestamp);
})

var startmonth = $('[name="startmonth"]');

startmonth.each(function () {
    var minDate = $(this).data('date_min');
    if (minDate == undefined || minDate == "" ) {
        minDate = 0;
    }
    $(this).bootstrapDP({
        format: "mm/yyyy",
        viewMode: "months",
        minViewMode: "months",
        startDate: minDate,
    });
});


function validaFormEdades(resort, container) {
    //oculto casillas de edades, cambio etiquetas de edad.
    container = $(container);

    var tag_adult = $('#tag_adultB').val();
    var tag_adult2 = $('#tag_adult2B').val();
    var tag_adult3 = $('#tag_adult3B').val();
    var tag_adult4 = $('#tag_adult4').val();

    var tag_teen = $('#tag_teenB').val();

    var tag_children = $('#tag_childrenB').val();
    var tag_children2 = $('#tag_children2B').val();
    var tag_children3 = $('#tag_children3').val();

    if (resort == '95939' || resort == '86182' || resort == '86175' || resort == '106514') {
        container.find(".children2B").val(0);
        container.find('.teenBoxB').hide();
        container.find(".spAdultsB").text(tag_adult2);
        container.find(".spChildrenB").text(tag_children);
    } else {
        if (resort == '86184' || resort == '86169' || resort == '73601' || resort == '86179' || resort == '86180' || resort == '86181') {
            container.find('.teenBoxB').show();
            container.find(".spAdultsB").text(tag_adult);
            container.find(".spChildrenB").text(tag_teen);
            container.find(".spTeenB").text(tag_children);
        } else {
            if (resort == '85285' || resort == '86117' || resort == '103541') {
                container.find(".children2B").val(0);
                container.find('.teenBoxB').hide();
                container.find(".spAdultsB").text(tag_adult3);
                container.find(".spChildrenB").text(tag_children2);
            }
        }
    }

    if (resort == '110441') {    
        container.find(".children2B").val(0);
        container.find('.teenBoxB').hide();
        container.find(".spAdultsB").text(tag_adult4);
        container.find(".spTeenB").text(tag_children3);
    }
}

$('.owl-carousel-resort').owlCarousel(options);