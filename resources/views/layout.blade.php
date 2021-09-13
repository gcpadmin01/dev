<!doctype html>
<html lang="{{ app()->getLocale() }}" class="{{ str_slug(data_get(getCurrentBrowser(), 'browser', 'undefined')) }} v-{{ data_get(getCurrentBrowser(), 'version', 'undefined') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="https://royalreservations.com/img/desktop/en/beach-resorts-1.jpg"/>
    <title>{{ __('header.site.title') }}</title>
    <meta name="description" content="{{ __('header.site.description') }}" />

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ mix('css/main.css') }}" integrity="{{ Sri::hash('css/main.css') }}" crossorigin="anonymous">

    {{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/medias.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">--}}



    @if(env('APP_TAG') == true)
        <!-- BEGIN Salesforce DMP ControlTag for "royalreservations.com" -->
        <script class="kxct" data-id="tc1kcjtn5" data-timing="async" data-version="3.0" type="text/javascript">
            window.Krux||((Krux=function(){Krux.q.push(arguments)}).q=[]);
            (function(){
                var k=document.createElement('script');k.type='text/javascript';k.async=true;
                k.src=(location.protocol==='https:'?'https:':'http:')+'//cdn.krxd.net/controltag/tc1kcjtn5.js';
                var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(k,s);
            }());
        </script>
        <!-- END Salesforce DMP ControlTag -->

        <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
            })(window,document,'script','dataLayer','GTM-NNS3B9J');</script>
        <!-- End Google Tag Manager -->
    @endif
</head>
<body class="<?=strtolower(getCurrentBrowser()['browser']) ?>">

@if(env('APP_TAG') == true)
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNS3B9J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif

<script type="text/javascript"> var language = '{{App::getLocale()}}'</script>

{{--@include('parts/header',['chat'=>$chat])--}}

@yield('home')

@include('parts/extras/manage-reservation')
@include('parts/footer')
@php
    $schemaID = count(Request::segments()) > 0 ? Request::segment(count(Request::segments())) : "/";
    $ald = [
        "@context"	=> "http://schema.org"
    ];
    $opage = __("schemas.{$schemaID}", []);
    $ald = array_merge($ald, $opage);
@endphp

<script type="application/ld+json">
    {!! json_encode($ald) !!}
</script>


</body>

</html>

