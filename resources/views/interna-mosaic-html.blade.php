<!doctype html>
<html lang="{{ app()->getLocale() }}"
      class="{{ str_slug(data_get(getCurrentBrowser(), 'browser', 'undefined')) }} v-{{ data_get(getCurrentBrowser(), 'version', 'undefined') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('metadescription')"/>
    
    {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/medias.css') }}">--}}

    <link rel="stylesheet" href="{{ mix('css/main.css') }}" integrity="{{ Sri::hash('css/main.css') }}" crossorigin="anonymous">
    @stack('css')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>


    @stack('metas')
    <!-- Fonts -->
    
</head>

<body class="<?=strtolower(getCurrentBrowser()['browser']) ?>">
    <!-- {{date('Y-m-d H:i:s')}} -->
@php if(!isset($resort)){$resort='';} if(!isset($chat)){$chat='';} if(!isset($atribs)){$atribs='';}  $language = App::getLocale(); @endphp
<script type="text/javascript"> var language = '<?php echo $language;?>'</script>
@component('parts/header-mosaic', ['chat'=>$chat,'page'=> $page, 'atribs'=> $atribs] )@endcomponent
@yield('interna-mosaic')
@component('parts/extras/manage-reservation') @endcomponent
<div id="consent-overlay" class="overlay consent-hide">
    <div class="alert alert-success">
        <p>
            {!! __('general.consent.overlay') !!}
        </p>
        <div class="text-right">
            <button class="btn btn-primary" onclick="consentYes()">
                {{__('general.consent.button')}}
            </button>
        </div>
    </div>
</div>
@php
    $schemaID = count(Request::segments()) > 0 ? Request::segment(count(Request::segments())) : "/";
    $ald = [
        "@context"	=> "http://schema.org"
    ];
    $opage = __("schemas.{$schemaID}");
    if(is_string($opage))  $opage = __("schemas.default");
    $ald = array_merge($ald, $opage);
    $gmsClient = app('App\GMS\GMSClient');
@endphp
<script type="text/javascript"> 
    var language = '<?php echo $language;?>';
    var gmsIsGuest = {{ $gmsClient->isGuest() ? 1 : 0 }};
    var namePage = "{{ $page }}";
    var elementDivp = null;
</script>
<script src="{{mix('js/_mosaic.js')}}" integrity="{{ Sri::hash('js/_mosaic.js') }}" crossorigin="anonymous"></script>
<script type="application/ld+json">{!! json_encode($ald) !!}</script>

<!-- Modal Map -->
<div class="modal fade" id="modal-map" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <iframe id="modal-map-iframe" src="" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </div>
</div>

@include('parts/footer-mosaic')

@if($page=='deals' || $page=='ofertas' || $page=='sub-inter-special')

    <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>

@endif

    @if(env('APP_TAG') == true )
    <!-- BEGIN Salesforce DMP ControlTag for "royalreservations.com" -->
        <script class="kxct" data-id="tc1kcjtn5" data-timing="async" data-version="3.0" type="text/javascript">
            window.Krux || ((Krux = function () {
                Krux.q.push(arguments)
            }).q = []);
            (function () {
                var k = document.createElement('script');
                k.type = 'text/javascript';
                k.async = true;
                k.src = (location.protocol === 'https:' ? 'https:' : 'http:') + '//cdn.krxd.net/controltag/tc1kcjtn5.js';
                var s = document.getElementsByTagName('script')[0];
                s.parentNode.insertBefore(k, s);
            }());
        </script>

        <script>
            var consentOverlay = document.getElementById('consent-overlay');
                
            function json2array(json){
                var result = [];
                var keys = Object.keys(json);
                keys.forEach(function(key){
                    result.push(json[key]);
                });
                return result;
            }

            function consentYes() {
                consentOverlay.classList.add('consent-hide');

                Krux('ns:operadoracorporativamirosadecv', 'consent:set', {
                        dc: true,
                        tg: true,
                        al: true,
                        cd: true,
                        sh: true,
                        re: true
                    }, 
                    function(errors, body) {
                    }
                );
                    
                dataLayer.push({
                    'event': 'Consent Set', 
                    'eventModel':{
                        'event_category' : 'Consent',
                        'event_action' : 'Set to True'
                    },
                    'eventCategory': 'Consent', 
                    'eventAction': 'Set to True'
                });
            };

            function consentNo() {
                Krux('ns:operadoracorporativamirosadecv', 'consent:set', {
                        dc: false,
                        tg: false,
                        al: false,
                        cd: false,
                        sh: false,
                        re: false
                    }, 
                    function(errors, body) {
                        if (errors) {
                            console.error(errors);
                        }
                    }
                );
                consentOverlay.classList.remove('consent-hide');
            };

            function consentReallyNo() {
                Krux('ns:operadoracorporativamirosadecv', 'consent:set', {
                        dc: false,
                        tg: false,
                        al: false,
                        cd: false,
                        sh: false,
                        re: false
                    }, 
                    function(errors, body) {
                        if (errors) {
                            console.error(errors);
                        }
                    }
                );
                dataLayer.push({
                    'event': 'Consent Set', 
                    'eventModel':{
                        'event_category' : 'Consent',
                        'event_action' : 'Set to False'
                    },
                    'eventCategory': 'Consent', 
                    'eventAction': 'Set to False'
                });
                consentOverlay.classList.remove('consent-hide');
            };
            
            Krux('ns:operadoracorporativamirosadecv', 'consent:get', {}, 
                function(errors, body) {
                    if (errors) {
                        console.error(errors);
                        consentOverlay.classList.remove('consent-hide');
                        //window.showBanner = true;
                        consentNo();
                    } else {
                        var consent1 = body.settings;
                        var consentParse = json2array(consent1);
                        console.log(consentParse);
                        
                        for (var i = 0; i < consentParse.length; i++) {
                            if(consentParse[i] == 0) {
                                consentOverlay.classList.remove('consent-hide');
                            } else {
                                consentOverlay.classList.add('consent-hide');
                            }
                        }
                    }
                }
            );
        </script>
        <!-- END Salesforce DMP ControlTag -->
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start':
                        new Date().getTime(), event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-NNS3B9J');</script>
        <!-- End Google Tag Manager -->
        <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNS3B9J"
                height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
    @endif

    @stack('scripts')
    
</body>

</html>

