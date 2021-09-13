var galeryContent = null;
var galeryNav = null;

$('.gallery-buttons').on('click', 'button', function () {

    var filter = $(this).attr('value');
    $(this).closest('.gallery-buttons').find('.active').removeClass('active');
    $(this).addClass('active');

    $('.sec-resort-gallery-content').slick('unslick');
    $('.sec-resort-gallery-nav').slick('unslick');

    if (galeryContent == null && galeryNav == null) {
        galeryContent = $('.sec-resort-gallery-content .li').clone();
        galeryNav = $('.sec-resort-gallery-nav .li').clone();
    }

    $('.sec-resort-gallery-content').html("");
    $('.sec-resort-gallery-nav').html("");

    $.each(galeryContent, function (index, element) {
        if (filter != 'all') {
            if ($(element).hasClass(filter)) {
                $('.sec-resort-gallery-content').append(element);        
            }
        }else{
            $('.sec-resort-gallery-content').append(element);
        }
    });

    $.each(galeryNav, function (index, element) {
        if (filter != 'all') {
            if ($(element).hasClass(filter)) {
                $('.sec-resort-gallery-nav').append(element);        
            }
        }else{
            $('.sec-resort-gallery-nav').append(element);
        }
    });

    makeGalery();

});

function makeGalery() {
    $('.sec-resort-gallery-content').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        infinite: false,
        asNavFor: '.sec-resort-gallery-nav'
    });
    $('.sec-resort-gallery-nav').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        asNavFor: '.sec-resort-gallery-content',
        dots: false,
        infinite: false,
        focusOnSelect: true
    });
}

makeGalery();