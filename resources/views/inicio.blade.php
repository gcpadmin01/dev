<!doctype html>
<html lang="{{ app()->getLocale() }}" class="{{ str_slug(data_get(getCurrentBrowser(), 'browser', 'undefined')) }} v-{{ data_get(getCurrentBrowser(), 'version', 'undefined') }}">
	<head>
        <meta name="google-site-verification" content="o0Uw3spmksOs99AXIeccITpuxPvAgcRAz-iKdzvQqzs" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ __('header.site.title') }}</title>
        <meta name="description" content="{{ __('header.site.description') }}" />

        @stack('opengraph')

        @if(env('NOINDEX_NOFOLLOW') == true)
            <meta name="robots" content="noindex, nofollow">
        @endif

		<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
		{{--<link rel="stylesheet" href="{{ asset('css/app.css') }}">
		<link rel="stylesheet" href="{{ asset('css/medias.css') }}">
		<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">--}}

        @if(env('CSS_CRITICAL') == true)
            @if (\Agent::isMobile() && !\Agent::isTablet())
                <style id="ccss">{!! (Config::get('ccss.mobile.home')) !!}</style>
            @else
                <style id="ccss">{!! Config::get('ccss.desktop.home') !!}</style>
            @endif
        @else
            
        @endif

        <link rel="preload" href="{{ mix('js/main-header.js') }}" as="script" integrity="{{ Sri::hash(mix('js/main-header.js')) }}" crossorigin="anonymous">

        @if(!isset($js_v2))
           <link rel="preload" href="{{ mix('js/main.js') }}" as="script" integrity="{{ Sri::hash(mix('js/main.js')) }}" crossorigin="anonymous">
        @endif

        <link rel="preload" href="{{asset('fonts/vendor/slick-carousel/slick/slick.woff')}}" as="font">

        <link rel="preload" href="{{ mix('css/main.css') }}" as="style" integrity="{{ Sri::hash(mix('css/main.css')) }}" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ mix('css/main.css') }}" integrity="{{ Sri::hash(mix('css/main.css')) }}" crossorigin="anonymous" defer>

        

        <meta property="og:description" content="{{__('header.site.description')}}" />
        <meta property="og:title" content="{{__('header.site.title')}}" />
        <meta property="og:type" content="website" />
        @foreach($concepts as $key => $item)
            <meta property="og:image" content="{{asset($item->content->banner_img)}}" />
            <meta property="og:image:height" content="{{Agent::isMobile() && !Agent::isTablet()? '375':'1920'}}" />
            <meta property="og:image:width" content="{{Agent::isMobile() && !Agent::isTablet()? '287':'630'}}" />
        @endforeach

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
        {!! __hreflang() !!}
	</head>

	<body data-timeZoneDefault = "{{ date_default_timezone_get()   }}" date-dateNow="{{date('Y-m-d H:i:s')}}" class="<?=strtolower(getCurrentBrowser()['browser']) ?>">
		@php
			$language = App::getLocale();
			$gmsClient = app('App\GMS\GMSClient');
		@endphp
		
  		<script type="text/javascript">
            var timeZoneDefault = "{{ date_default_timezone_get()   }}";
  			var language = '{{$language}}';
  			var gmsIsGuest  = {{ $gmsClient->isGuest() ? 1 : 0 }};
            var namePage = "{{ $page }}";
            var airports = {!! \Storage::disk('local')->get('airports.json') !!};
  		</script>
		
		@component('parts/header-v2', ['chat'=>$chat,'page'=> $page, 'atribs'=> $atribs] )@endcomponent
		@yield('home') 
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

        @include('v2.modals.picture_v2')
        @include('v2.bookings.resort_concept_v2')
        @include('v2.bookings.resort_concept_flight')
        
        <div class="modal fade" id="modal_dynamic" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
            </div>
        </div>

		@component('parts/footer')
        @endcomponent
        

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


		{{--@if ( isOutdatedBrowser() )
			--}}{{-- No es compatible --}}{{--
			<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/js/bootstrap-datepicker.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.3/owl.carousel.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.5/js/select2.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.6/cookieconsent.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
			<script src="{{ asset('js/instafeed.min.js') }}" type="text/javascript"></script>
			<script src="{{ asset('js/home.js') }}"></script>
		@else --}}{{-- Es compatible --}}{{--
			<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
			<script src="{{ asset('js/plyr.js') }}"></script>
			<script src="{{ asset('js/lazy.min.js') }}"></script>
			<script src="{{ asset('js/instafeed.min.js') }}" type="text/javascript"></script>
			<script src="{{ asset('js/master-home.js') }}"></script>
		@endif--}}

        @if(env('APP_TAG') == true)
{{--            <script src="//d2wy8f7a9ursnm.cloudfront.net/v6/bugsnag.min.js"></script>--}}
{{--            <script>window.bugsnagClient = bugsnag('71f53081510d7a049fc06de590623609')</script>--}}
        @endif

        <script src='{{mix('js/main-header.js')}}' integrity="{{ Sri::hash(mix('js/main-header.js')) }}" crossorigin="anonymous" defer></script>

        @if(!isset($js_v2))
            <script src="js/main.js" integrity="{{ Sri::hash('js/main.js') }}" crossorigin="anonymous" defer></script>
        @endif

		@if(env('APP_TAG') == true)
            <!-- START MARKETING CLOUD -->
            <script type="text/javascript" src=" https://100015772.collect.igodigital.com/collect.js "></script>
            <script>
                if ("undefined" === typeof(_etmc)) {
                    var _etmc = [];
                }
                _etmc.push(["setOrgId", "100015772"]); /* collector for production*/
                _etmc.push(["trackPageView",TPW]);

                if(gmsIsGuest == 0){
                    _etmc.push(["setUserInfo",{"email":"{{$gmsClient->isGuest() == 1 ? '':$gmsClient->getEmail()}}"}]);
                }
            </script>
            <!-- END MARKETING CLOUD -->
			<!-- BEGIN Salesforce DMP ControlTag for "royalreservations.com" -->
			{{--<script class="kxct" data-id="tc1kcjtn5" data-timing="async" data-version="3.0" type="text/javascript" async>
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
            </script>--}}

            {{--<script>
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
                    Krux('ns:operadoracorporativamirosadecv', 'consent:set', {
                            dc: true,
                            tg: true,
                            al: true,
                            cd: true,
                            sh: true,
                            re: true
                        }, 
                        function(errors, body) {
                            if (errors) {
                                console.error(errors);
                            } 
                            consentOverlay.classList.add('consent-hide');
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
                            //console.log(consentParse);
                            
                            for (var i = 0; i < consentParse.length; i++) {
                                if(consentParse[i] == 0) {
                                    consentOverlay.classList.remove('consent-hide');
                                    //window.showBanner = true;
                                } else {
                                    consentOverlay.classList.add('consent-hide');
                                    //window.showBanner = false;
                                }
                            }
                        }
                    }
                );

			</script>--}}
			<!-- END Salesforce DMP ControlTag -->

			<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNS3B9J" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->
		@endif

		<script>
			var selectOption;
            /*
            $(document).ready(function () {
                $('.combo-booking').select2({
                    width: '100%',
                    closeOnSelect:true,
                    dropdownCssClass:'combo-booking-result',
                    templateResult: function (state, container) {
						var clase='';
						if (state.element) {
							clase=$(state.element).attr("class");
	                    }
	                    if (!state.id) {
							return state.text;
						}
						var baseUrl = "/user/pages/images/flags";
						var $state = $('<span class="'+clase+'">' + state.text + '</span>');
						return $state;
                    },
				});
            });
            */
            var openWindow = function(url,normal){
                normal || (normal = false);
                if(normal == false){
                    var nwn = window.open(url,'','width=500,height=690');
                }else{
                    var nwn = window.open(url);
                }
                nwn.opener = null;
            }
        </script>
        @stack('scripts')
	</body>

</html>

