<!doctype html>
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

    @stack('opengraph')
    <meta property="og:site_name" content="Royal Reservations" />

    @if(env('NOINDEX_NOFOLLOW') == true)
        <meta name="robots" content="noindex, nofollow">
    @endif

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">

    @if(env('CSS_CRITICAL') == true)
        <?php
            if(!isset($critical)){
                $critical = Config::get('ccss.desktop.basic');
                if (\Agent::isMobile() || \Agent::isTablet()){
                    $critical = Config::get('ccss.mobile.basic');
                }
            }
        ?>
        <style id="ccss">{!! $critical !!}</style>
    @endif

    @if(!isset($js_v2))
       <link rel="preload" href="{{ mix('js/main.js') }}" integrity="{{ Sri::hash(mix('js/main.js')) }}" as="script" crossorigin="anonymous">
    @endif

    <link rel="preload" href="{{ mix('css/main.css') }}" as="style" integrity="{{ Sri::hash(mix('css/main.css')) }}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/main.css') }}" integrity="{{ Sri::hash(mix('css/main.css')) }}" crossorigin="anonymous">

    {{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/medias.css') }}">--}}

    @stack('css')



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

    {{--Se agrega en esta sección script de GTM para solucionar problema de instalacion al verificar Ads--}}
    
    @stack('dataLayer')

    @if(env('APP_TAG') == true)
        <!-- Google Tag Manager -->
        <script>
            window.setTimeout(function(){
                (function (w, d, s, l, i) {
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
                })(window, document, 'script', 'dataLayer', 'GTM-NNS3B9J');
            },1500);
        </script>
        {{-- End Google Tag Manager --}}
    @endif
</head>

<body class="<?=strtolower(getCurrentBrowser()['browser']) ?> webp">
    @yield('interna')

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

    @if(!isset($js_v2))
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
    @endif

    @if(env('APP_TAG') == true)
{{--        <script src="//d2wy8f7a9ursnm.cloudfront.net/v6/bugsnag.min.js"></script>--}}
{{--        <script>window.bugsnagClient = bugsnag('71f53081510d7a049fc06de590623609')</script>--}}
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
    
    @stack('scripts')
</body>
</html>