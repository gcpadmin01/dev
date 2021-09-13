
//var Instafeed = require('instafeed');

$('.slick-default').slick({
    slidesToShow: 1,
    arrows: true,
    autoplay: true,
    lazyLoad:'progressive'
});

$('.slick-home-list').slick({
    slidesToShow: 3,
    arrows: false,
    autoplay: true,
    responsive: [
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                infinite: true,
                autoplay: true,
                arrows: false
            }
        }
    ]
});


var menues = $("ul.menu-information li");
var information_menus = $("ul.content-information");
menues.hover(function () {
    menues.removeClass("active");
    $(this).addClass("active");
    information_menus.removeClass("active");
    var hola = this;
    for (var i = 0; i < menues.length; i++) {
        if (hola == menues[i]) {
            $(information_menus[i]).addClass("active");
        }
    }
}, function () {
});




$('[data-toggle="popover-home"]').popover({
    placement: function (context, source) {
        var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
        if (width <= 768) {
            return "bottom";
        } else {
            return "top";
        }
    }
});


// =====================================================================================
// Timers
// =====================================================================================

timers = $('.timer');

$.each(timers, function (key, element) {
    var nElement = $(element);
    var countDownDate = new Date(nElement.data('time')).getTime();
    // Update the count down every 1 second
    var x = setInterval(function () {

        // Get todays date and time
        var now = new Date().getTime();
        // Find the distance between now and the count down date
        var distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        /*document.getElementById("demo").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";*/
        nElement.find('.dy').text(days);
        nElement.find('.hs').text(hours);
        nElement.find('.mins').text(minutes);
        nElement.find('.sec').text(seconds);
        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
});