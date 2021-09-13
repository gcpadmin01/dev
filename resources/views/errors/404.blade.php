<!doctype html>
@php
    $page = "error404";
@endphp
<html lang="{{ app()->getLocale() }}"
      class="{{ str_slug(data_get(getCurrentBrowser(), 'browser', 'undefined')) }} v-{{ data_get(getCurrentBrowser(), 'version', 'undefined') }}">
<head>
    <meta name="google-site-verification" content="o0Uw3spmksOs99AXIeccITpuxPvAgcRAz-iKdzvQqzs" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <meta name="description" content="@yield('metadescription')"/>
    
    @stack('metas')

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    @if(env('CSS_CRITICAL'))
        <?php
            if(!isset($critical)){
                $critical = Config::get('ccss.desktop.basic');
                if (\Agent::isMobile() || \Agent::isTablet()){
                    $critical = Config::get('ccss.mobile.basic');
                }
            }
        ?>
        <style id="ccss">{!! $critical !!}</style>
    @else
        <link rel="stylesheet" href="{{ mix('css/main.css') }}" integrity="{{ Sri::hash('css/main.css') }}" crossorigin="anonymous">
    @endif

    {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/medias.css') }}">--}}

    @stack('css')


    <link rel="stylesheet" href="{{ mix('css/main.css') }}" integrity="{{ Sri::hash('css/main.css') }}" crossorigin="anonymous">
    {!! __hreflang() !!}
    @stack('styles')

    @php
        //===================================================================
        // Inicializacion de variables
        //===================================================================
        $language = App::getLocale(); 

        if(!isset($resort)){
            $resort='';
        } 
        if(!isset($chat)){
            $chat='general';
        } 
        if(!isset($atribs)){
            $atribs='';
        }  

        //===================================================================
        // Schema para 
        //===================================================================
        $schemaID = count(Request::segments()) > 0 ? Request::segment(count(Request::segments())) : "/";
        $ald = [
            "@context"	=> "http://schema.org"
        ];
        $opage = __("schemas.{$schemaID}");
        if(is_string($opage))  {
            $opage = __("schemas.default");
        }
        $ald = array_merge($ald, $opage);

        $gmsClient = app('App\GMS\GMSClient');

    @endphp

    <script type="text/javascript"> 
        var language = '<?php echo $language;?>';
        var gmsIsGuest = {{ $gmsClient->isGuest() ? 1 : 0 }};
        var namePage = "{{ $page }}";
        var elementDivp = null;
        var dataLayer = [{
            'event' : 'error_404'
        }];

        var openWindow = function(url,normal){
            normal || (normal = false);
            if(normal == false){
                var nwn = window.open(url,'','width=500,height=690');
            }else{
                var nwn = window.open(url);
            }
            nwn.opener = null;
        }
        var airports = {!! \Storage::disk('local')->get('airports.json') !!};

    </script>
    <script type="application/ld+json">{!! json_encode($ald) !!}</script>
    
    @if(!isset($js_v2))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
        <script src="{{ mix('js/main.js') }}" integrity="{{ Sri::hash('js/main.js') }}" crossorigin="anonymous"></script>
    @endif

    {{--Se agrega en esta sección script de GTM para solucionar problema de instalacion al verificar Ads--}}
    
    @stack('dataLayer')

    @if(env('APP_TAG') == true)
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
        {{-- End Google Tag Manager --}}
    @endif
</head>

<body class="<?=strtolower(getCurrentBrowser()['browser']) ?>">
        
    @component('parts/header-v2', ['chat'=>$chat,'page'=> $page, 'atribs'=> $atribs] )
    @endcomponent

    @component('parts/error/error404') @endcomponent
    
    @component('parts/extras/manage-reservation') 
    @endcomponent

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

    <!-- Modal Map -->
    <div class="modal fade" id="modal-map" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                {{-- <iframe id="modal-map-iframe" src="" frameborder="0" style="border:0" allowfullscreen></iframe> --}}
                <div id="maps-expanded" style="height: 100% !important"></div>
            </div>
        </div>
    </div>

    @include('v2.modals.picture_v2')
    @include('v2.bookings.resort_concept_v2')
    @include('v2.bookings.resort_concept_flight')
    
    <div class="modal fade" id="modal_dynamic" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
        </div>
    </div>


    @include('parts/footer')

    @if(env('CSS_CRITICAL'))
        <link rel="preload" href="{{ mix('css/main.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'" integrity="{{ Sri::hash('css/main.css') }}" crossorigin="anonymous">
    @endif

    @if(env('APP_TAG') == true)
{{--        <script src="//d2wy8f7a9ursnm.cloudfront.net/v6/bugsnag.min.js"></script>--}}
{{--        <script>window.bugsnagClient = bugsnag('71f53081510d7a049fc06de590623609')</script>--}}
    @endif

    @if($resort=='the-royal-sands')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088228&property_id=1013162&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='the-royal-islander')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088229&property_id=1013163&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='the-royal-caribbean')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088230&property_id=1013164&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='the-royal-cancun')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088029&property_id=1012940&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='grand-residences-riviera-cancun')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088226&property_id=1013160&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='the-royal-haciendas')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088227&property_id=1013161&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='the-villas-at-simpson-bay-resort')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088232&property_id=1013166&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='simpson-bay-resort')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088231&property_id=1013165&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='the-royal-sea-aquarium')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088233&property_id=1013167&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='ancora')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1089393&property_id=1013876&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($page=='deals' || $page=='ofertas' || $page=='sub-inter-special')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='casa-de-campo')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1090489&property_id=1014987&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='royal-uno')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1088230&property_id=1024725&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @elseif($resort=='del-mar')
        <script src='https://www.thehotelsnetwork.com/js/hotel_price_widget.js?hotel_id=1089392&property_id=1013875&account_key=EEC7F394E75642B8BDC69629DE960D6B' defer async></script>
    @endif

    @if(env('APP_TAG') == true)
        {{-- BEGIN Salesforce DMP ControlTag for "royalreservations.com" --}}
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

        {{-- Google Tag Manager (noscript) --}}
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNS3B9J"
                    height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        {{-- End Google Tag Manager (noscript) --}}
    @endif    

    <script src='{{ mix('js/main-header.js') }}' integrity="{{ Sri::hash('js/main-header.js') }}" crossorigin="anonymous"></script>
    
    @stack('scripts')
</body>
</html>

