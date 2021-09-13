<!DOCTYPE HTML>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Royal Reservations</title>
    <meta name="robots" content="noindex">
    {{--<!-- Google Tag Manager -->--}}
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NNS3B9J');</script>
    {{--<!-- End Google Tag Manager -->--}}
    @stack('css')
</head>

<body>
{{--<!-- Google Tag Manager (noscript) -->--}}
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNS3B9J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
{{--<!-- End Google Tag Manager (noscript) -->--}}

<script>
    //var dataLayer = [];
    var tagsAdults = {
        adult18 : '{{__('general.booking.label.adults')}}',
        adult16 : '{{__('general.booking.label.adults3')}}',
        adult13 : '{{__('general.booking.label.adults1')}}',
        adult12 : '{{__('general.booking.label.adults2')}}',
    };

    var tagsTeen = {
        teen13_17: '{{__('general.booking.label.teen')}}'
    };

    var tagsChildren = {
        child15: '{{__('general.booking.label.children3')}}',
        child12: '{{__('general.booking.label.children')}}',
        child11: '{{__('general.booking.label.children1')}}',
    };

</script>
<div class="main">
    @yield('main')
</div>
@stack('script')
</body>
</html>