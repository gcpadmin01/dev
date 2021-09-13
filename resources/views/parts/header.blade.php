<?php
$path = $_SERVER['REQUEST_URI'];
$array = str_split($path);
$bool = false;
$boolview = false;
$url = 'chat-general-en';
$gmsClient = app('App\GMS\GMSClient');

if (count($array) > 3) {
    if ($array[3] === '/') {
        $bool = true;

    }
}
if (count($array) > 4) {
    $boolview = true;
}

// =====================================================================================
// Para no mostrar el boton de booking
// =====================================================================================
$isPageResort = false;
if (isset($page)) {
    switch ($page) {
        case "resorts-intern":
        case "resorts-interna":
            $isPageResort = true;
        case "login-agent":
        case 'destinations-intern':
            $boolview = false;
            break;

        case 'resorts-atrib':
            $isPageResort = true;
            break;
    }
}

$phone = __phone( isset($phoneGroup) ? $phoneGroup: 'MEXICO' );

$nav = [
    'resorts-destinations' => [
        [
            'link' => lang_url("/" . Lang::get('routes.beach_destinations') . "/cancun/" . __('routes.things_cun')),
            'title' => __('header.menu.beach_destinations.cancun'),
            'title-large' => __('header.menu.beach_destinations.cancun') . ', ' . __('header.menu.beach_destinations.mexico'),
            'resorts' => [
                
                [
                    'title' => 'Royal Uno All Inclusive Resort & Spa',
                    'title-short' => 'Royal UNO',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/royal-uno"),
                    'img' => asset('img/resorts/royal-uno/royal-uno-resort-cancun-menu.jpg'),
                    'stars' => 5,
                    'new' => true
                ],
                [
                    'title' => 'The Royal Sands All Suites Resort & Spa',
                    'title-short' => 'The Royal Sands Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-sands"),
                    'img' => asset('img/resorts/the-royal-sands/the-royal-sands-menu.jpg'),

                    'stars' => 4.5
                ],
                [
                    'title' => 'The Royal Islander All Suites Resort',
                    'title-short' => 'The Royal Islander Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-islander"),
                    'img' => asset('img/resorts/the-royal-islander/the-royal-islander-menu.jpg'),
                    'stars' => 4
                ],
                [
                    'title' => 'The Royal Cancun All Suites Resort',
                    'title-short' => 'The Royal Cancun Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-cancun"),
                    'img' => asset('img/resorts/the-royal-cancun/the-royal-cancun-menu.jpg'),
                    'stars' => 4.5
                ],
            ]
        ],
        [
            'link' => lang_url("/" . Lang::get('routes.beach_destinations') . "/riviera-maya/" . __('routes.things_riv')),
            'title' => 'Riviera Maya',
            'title-large' => 'Riviera Maya, ' . __('header.menu.beach_destinations.mexico'),
            'resorts' => [
                [
                    'title' => 'Grand Residences Riviera Cancun Resort',
                    'title-short' => 'Grand Residences Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/grand-residences-riviera-cancun"),
                    'img' => asset('img/resorts/grand-residences-riviera-cancun/grand-residences-riviera-cancun-menu.jpg'),
                    'stars' => 5
                ],
                [
                    'title' => 'The Royal Haciendas All Suites Resort & Spa',
                    'title-short' => 'The Royal Haciendas Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-haciendas"),
                    'img' => asset('img/resorts/the-royal-haciendas/the-royal-haciendas-menu.jpg'),
                    'stars' => 4.5
                ],
            ]
        ],
        [
            'link' => lang_url("/" . Lang::get('routes.beach_destinations') . "/playa-del-carmen/" . __('routes.things_pla')),
            'title' => 'Playa del Carmen',
            'title-large' => 'Playa del Carmen, ' . __('header.menu.beach_destinations.mexico'),
            'resorts' => [
                [
                    'title' => 'The Royal Haciendas All Suites Resort & Spa',
                    'title-short' => 'The Royal Haciendas Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-haciendas"),
                    'img' => asset('img/resorts/the-royal-haciendas/the-royal-haciendas-menu.jpg'),
                    'stars' => 4.5
                ]
            ]
        ],
        [
            'link' => lang_url("/" . Lang::get('routes.beach_destinations') . "/st-maarten/" . __('routes.things_stm')),
            'title' => 'Sint Maarten',
            'title-large' => 'Sint Maarten',
            'resorts' => [
                [
                    'title' => 'Simpson Bay Resort, Marina & Spa ',
                    'title-short' => 'Simpson Bay Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/simpson-bay-resort"),
                    'img' => asset('img/resorts/simpson-bay-resort/simpson-bay-resort-menu.jpg'),
                    'stars' => 4
                ],
                [
                    'title' => 'The Villas at Simpson Bay Beach Resort & Marina',
                    'title-short' => 'The Villas at Simpson Bay Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-villas-at-simpson-bay-resort"),
                    'img' => asset('img/resorts/the-villas-at-simpson-bay-resort/the-villas-at-simpson-bay-resort-menu.jpg'),
                    'stars' => 4
                ],
            ]
        ],
        [
            'link' => lang_url("/" . Lang::get('routes.beach_destinations') . "/curacao/" . __('routes.things_cur')),
            'title' => 'Curacao',
            'title-large' => 'Curacao',
            'resorts' => [
                [
                    'title' => 'The Royal Sea Aquarium Resort',
                    'title-short' => 'The Royal Sea Aquarium Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-sea-aquarium"),
                    'img' => asset('img/resorts/the-royal-sea-aquarium/the-royal-sea-aquarium-menu.jpg'),
                    'stars' => 3.5
                ]
            ]
        ]
    ],
    'vacations-experiences' => [
        [
            'link' => lang_url("/" . __('routes.experiences') . "/" . __('routes.experience_family')),
            'title' => __('header.menu.type_of_trips.family_vacations')
        ],
        [
            'link' => lang_url("/" . __('routes.experiences') . "/" . __('routes.experience_romantic')),
            'title' => __('header.menu.type_of_trips.romantic_getaway')
        ],
        [
            'link' => lang_url("/" . __('routes.experiences') . "/" . __('routes.adventure')),
            'title' => __('header.menu.type_of_trips.adventure'),
        ],
        [
            'link' => lang_url("/" . __('routes.experiences') . "/" . __('routes.experience_spa')),
            'title' => __('header.menu.type_of_trips.wellness')
        ],
        [
            'link' => lang_url("/" . __('routes.experiences') . "/" . __('routes.experience_honeymoon')),
            'title' => __('header.menu.type_of_trips.weddings_honeymoon')
        ],
        [
            'link' => lang_url("/" . __('routes.experiences') . "/" . __('routes.experience_golf')),
            'title' => __('header.menu.type_of_trips.golf'),
        ],
        [
            'link' => lang_url("/" . __('routes.experiences') . "/" . __('routes.experience_business')),
            'title' => __('header.menu.type_of_trips.business_meetings')
        ]/*
        [
            'link' => lang_url("/" . __('routes.experiences')),
            'title' => __('general.all')
        ]*/
    ]
]
?>

<header>
    {{-- START Cintillo de hotel del mes --}}
    

    @if(!Auth::guard('agent')->check())
        <div class="resort-month">
            <label>
                {!! __('header.covid19_label') !!}
            </label>
            <a href="{{ route('page.covid-19') }}">
                {!! __('header.covid19_btn') !!}
            </a>

            
            {{--
            <label>
                <img src="{{ asset('/img/icon-galeria/ica.png') }}" alt="icon" title="icon">
                {!! __('header.monthly_hotel') !!}
            </label>
            <a href=" {{ route('resort.deals', ['resort' => 'the-royal-sands' ,  'deals' => __('routes.hotels-seccion-url.4.home')]) }} ">
                The Royal Sands Cancun 
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.29413 0.238644L11.7489 5.42386C12.0837 5.74206 12.0837 6.25795 11.7489 6.57614L6.29412 11.7614C5.95939 12.0795 5.41668 12.0795 5.08194 11.7614C4.74721 11.4432 4.74721 10.9273 5.08194 10.6091L9.07353 6.81478L-5.95767e-07 6.81478L-4.53306e-07 5.18522L9.07353 5.18522L5.08194 1.39092C4.74721 1.07272 4.74721 0.556835 5.08194 0.238644C5.41668 -0.0795473 5.95939 -0.0795472 6.29413 0.238644Z" fill="#00ADEE"/>
                </svg>
            </a>
            --}}

            <button class="close">X</button>
        </div>
    @endif

    {{-- END Cintillo de hotel del mes --}}

    {{--Cintillo Azul START--}}
    <div class="nav-blue d-none d-md-block">
        <nav class="navbar navbar-expand  ">
            <div class="collapse navbar-collapse justify-content-end">
                <ul class="nav">
                    @if(Auth::guard("agent")->check())
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="#" data-toggle="dropdown" data-target="#closeSession">
                                <img class="pr-1" src="/img/account_icon.svg" alt="Acount Royal Reservations" width="21">
                                <span class="text-icon">{{__("agent.gretting").Auth::guard("agent")->user()->guest_first_name}}</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-blue dropdown-menu-right m-0 b-0" aria-labelledby="closeSession" style="">
                                <a href="{{ route('logout.agent') }}" class="dropdown-item">
                                    <img class="pr-1" src="/img/icono-news.png" alt="logout agent" width="21"> {{__("agent.logout")}}
                                </a>
                                <a href="{{ route('agent.help') }}" class="dropdown-item">
                                    <img class="pr-1" src="/img/icono-news.png" alt="help agent" width="21"> {{__("agent.help")}}
                                </a>
                            </div>
                        </li>
                    @endif
                    
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#manageReservation">
                            <img class="pr-1" src="/img/pencil-icon.png" alt ="Pencil Icon" title ="Pencil Icon" width="21px">
                            <span class="text-icon">{{ __('header.top.manage_your_reservation') }}</span>
                        </a>
                    </li>
                    {{--
                    <li class="nav-item">
                        <a class="nav-link" target="_blanck" href="{{__('header.top.blog') }}">
                            <img class="pr-1" src="/img/icono-blog-blanco.png" width="21px">
                            <span class="text-icon">Blog</span>
                        </a>
                    </li>
                    --}}
                    <li class="nav-item btn-chat">
                        <a class="nav-link" href="#"
                           onclick="openWindow('https://webchat.visitroyalresorts.com/chat-{{ $chat or 'general' }}-{{ __('general.chatLang') }}.html');return false;">
                            <img class="pr-1" src="{{asset('img/chat-icon-a.svg')}}" alt="Chat Icon" title="Chat Icon" width="21"/>
                            <span class="text-icon">{{ __('header.top.chat') }}</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown phone-call-li">
                        
                        <a class="nav-link phone" href="#" >
                            <img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" alt="Whatsapp icon" title="Whatsapp icon" width="21"/>
                            <label class="phone-large"><span>{{ __('general.Book with an agent') }} </span> {{ $phone['phone']['label-short'] }}</label>
                            <label class="phone-short">{{ $phone['phone']['label-short'] }}</label>
                            <label class="phone-call-us">{{ __('header.top.call_us.self') }}</label>
                        </a>

                        <a class="nav-link all-phone dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="anchor-info">Phones</span>
                        </a>

                        @include('parts.header-phones',['class' => 'phone-call dropdown-menu' ])
                    </li>
                    @if(App::getLocale() === "es")
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               style="padding-bottom: .7rem !important;">
                                {{ __('general.lang.es') }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-blue dropdown-menu-right m-0 b-0"
                                 aria-labelledby="navbarDropdownMenuLink" style="">
                                <a class="dropdown-item" href="{{ change_lang("en") }}">{{ __('general.lang.en') }}</a>
                            </div>
                        </li>
                    @else
                        <li class="nav-item dropdown ">
                            <a class="nav-link dropdown-toggle" href="#" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               style="padding-bottom: .7rem !important;">
                                {{ __('general.lang.en') }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-blue dropdown-menu-right m-0 b-0"
                                 aria-labelledby="navbarDropdownMenuLink" style="">
                                <a class="dropdown-item" href="{{ lang_url('es/') }}">{{ __('general.lang.es') }}</a>
                            </div>
                        </li>
                    @endif

                    @if(!Auth::guard("agent")->check())
                        <li class="nav-item dropdown">
                            @if($gmsClient->isGuest())
                                <a class="nav-link" href="{{ route('gms.sign-up') }}">
                                    <img class="pr-1" src="/img/gms/crown.svg" width="21px" alt="{{ __('header.top.my-royal') }}" title="{{ __('header.top.my-royal') }}">
                                    <span class="text-icon my-royal-large">{{ __('header.top.my-royal') }} {{ __('header.top.account') }}</span>
                                    <span class="text-icon my-royal-short">{{ __('header.top.my-royal') }}</span>
                                </a>
                            @else
                                <a class="nav-link dropdown-toggle" href="#" id="my-royal-obtion" data-toggle="dropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img class="pr-1" src="/img/gms/crown.svg" width="21px" alt="{{ __('header.top.my-royal') }}" title="{{ __('header.top.my-royal') }}">
                                    <span class="text-icon">{{ __('gms.Hello')  }} {{ $gmsClient->getName() }}</span>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="my-royal-obtion" id="my-royal-obtion">
                                    <a class="dropdown-item" href="{{route('gms.dashboard')}}" >{{__('gms.Inicio')}}</a>
                                    <a class="dropdown-item" href="{{route('gms.log-out')}}"
                                       data-layer_toggle="click"
                                       data-layer_category="GMS"
                                       data-layer_action="log out"
                                       data-layer_label="header">
                                        {{__('gms.Exit')}}
                                    </a>
                                </div>
                            @endif
                        </li>
                    @endif
                </ul>
            </div>
        </nav>
    </div>
    {{--Cintillo Azul ENDS --}}

    {{--Menu Start --}}
    @php
        $path = $_SERVER['REQUEST_URI'];
        $array = str_split($path);
        $array_partes=explode("/",$path);
        $book = false;
        if(count($array) < 5){
            $book = true;
        }else{
            $book = false;
        }
        if(in_array('deals',$array_partes) || in_array('ofertas',$array_partes)){
                $book = true;
        }

        $headerClass ="";
        if (isset($page)){
            switch ($page){
                case "beach-resorts":
                case "resorts-atrib-allinclusive":
                /*case "resorts-atrib":*/
                case "vacation-experiences":
                case "vacation-experiences-intern":
                case "experiencias-de-viaje":
                case "about-us":
                case "acerca-de-nosotros":
                case "aboutus-intern":
                case "concursos-terminos":
                case "customer-choice":
                /*case "sub-inter-special":*/
                case "destinations-offers":
                case "destinations-resorts":
                case 'voy-a-ganar':
                case 'beach-destinations':
                case 'destinos-de-playa':
                    $headerClass = "blue";
                break;
            }
            
            if ($page=='resorts-atrib'){
                if($atribs=='specials'){
                    $headerClass ="";
                }else{
                    $headerClass = "blue";
                }
            }
        }
    @endphp

    <div class="nav-primary">

        {{-- START Cintillo de hotel del mes --}}
       
        @if(!Auth::guard('agent')->check())
            <div class="resort-month">
                <label>
                    {!! __('header.covid19_label') !!}
                </label>
                <a href="{{ route('page.covid-19') }}">
                    {!! __('header.covid19_btn') !!}
                </a>

                {{--
                <label>
                    <img src="{{ asset('/img/icon-galeria/ica.png') }}" alt="icon" title="icon">
                    {!! __('header.monthly_hotel') !!}
                </label>
                <a href=" {{ route('resort.deals', ['resort' => 'the-royal-sands' ,  'deals' => __('routes.hotels-seccion-url.4.home')]) }} ">
                    The Royal Sands Cancun 
                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.29413 0.238644L11.7489 5.42386C12.0837 5.74206 12.0837 6.25795 11.7489 6.57614L6.29412 11.7614C5.95939 12.0795 5.41668 12.0795 5.08194 11.7614C4.74721 11.4432 4.74721 10.9273 5.08194 10.6091L9.07353 6.81478L-5.95767e-07 6.81478L-4.53306e-07 5.18522L9.07353 5.18522L5.08194 1.39092C4.74721 1.07272 4.74721 0.556835 5.08194 0.238644C5.41668 -0.0795473 5.95939 -0.0795472 6.29413 0.238644Z" fill="#00ADEE"/>
                    </svg>

                </a>
                --}}
                <button class="close">X</button>
            </div>
        @endif

        {{-- END Cintillo de hotel del mes --}}

        {{-- Menu principal START--}}
        <nav class=" navbar navbar-expand-md {{$headerClass}} ">
            <a class="navbar-brand mr-auto" href="{{ lang_url("/") }}">
                <picture>
                    <source media="(min-width: 576px)" srcset="{{ asset('img/logo-royal-white.png') }}">
                    <img class="pr-sm-4 p-md-0 pl-2 logo " src="{{ asset('img/logo-royal-mb.png') }}" alt="Royal Reservations">
                </picture>
                {{--
                <img class="pr-sm-4 p-md-0 pl-2 d-sm-none" src="{{ asset('img/logo-royal-mb.png') }}" alt="Royal Reservations" width="45">
                <img class="pr-sm-4 p-md-0 pl-2 logo logo-blue" src="{{ asset('img/logo-royal.svg') }}" alt="Royal Reservations">
                <img class="pr-sm-4 p-md-0 pl-2 d-none d-sm-block logo logo-white" src="{{ asset('img/logo-royal-white.png') }}" alt="Royal Reservations">
                --}}
            </a>
            @if(Auth::guard('agent')->check())
                <button class="navbar-toggler arrow collapsed" type="button" data-toggle="collapse"
                        data-target="#nav-agent"
                        aria-controls="nav-agent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <img class="w-100" src="/img/account_icon.svg" alt="Account Royal Reservations"/>
                    </span>
                </button>
            @endif
            
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#nav-call"
                    aria-controls="nav-call" aria-expanded="false" aria-label="Toggle navigation">
                <img src="{{asset('img/whatsapp-icon.svg')}}" alt="Whatsapp icon" title="Whatsapp icon"/>
            </button>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                    data-target="#resort-mobil-img"
                    aria-controls="resort-mobil-img" aria-expanded="false" aria-label="Toggle navigation">
                <span class="arrow">
                    Resorts
                </span>
            </button>
            @if(!Auth::guard('agent')->check())
                @if($gmsClient->isGuest())
                    <a class="navbar-toggler collapsed" href="{{ route('gms.sign-up') }}" >
                        <img src="/img/gms/crown.svg" alt="{{ __('header.top.my-royal') }}" title="{{ __('header.top.my-royal') }}" style="display: block;width: 20px;height: 20px;margin-left: 10px;">
                    </a>
                @else
                    <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                            data-target="#my-royal-mobil"
                            aria-controls="my-royal-mobil" aria-expanded="false" aria-label="Toggle navigation">
                            <img src="{{asset('/img/gms/icons/person.svg')}}" alt="Person" style="display: block;width: 20px;height: 20px;margin-left: 10px;" />
                    </button>
                @endif
            @endif

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-mobil"
                    aria-controls="nav-mobil" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{asset('img/hamburger.svg')}}" alt="Menu Royal Reservations"/>
            </button>

            <div class="collapse navbar-collapse justify-content-end">
                <ul class="nav">

                    <li class="nav-item  btn-chat callus hidden">
                        <a class="nav-link" href="#"  data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            onclick="openWindow('https://webchat.visitroyalresorts.com/chat-{{ $chat or 'general' }}-{{ __('general.chatLang') }}.html'">
                            <img class="pr-1" src="{{asset('img/chat-icon-a.svg')}}" alt="Chat Icon" title="Chat Icon" width="21"/>
                            <label>{{ __('header.top.chat') }}</label>
                        </a>
                    </li>
                    
                    {{--Botón callus en Menú Principal--}}
                    <li class="nav-item phone-call-li callus hidden">
                        <a class="nav-link phone" href="tel:{{ $phone['phone']['number'] }}">
                            <img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" width="21" alt="Whatsapp icon" title="Whatsapp icon"/>
                            <label class="phone-large"><span>{{ __('general.Book with an agent') }} </span> {{ $phone['phone']['label-short'] }}</label>
                            <label class="phone-short">{{ $phone['phone']['label-short'] }}</label>
                            <label class="phone-call-us">{{ __('header.top.call_us.self') }}</label>
                        </a>
                    </li>

                    <li class="nav-item dropdown phone-call-li callus hidden">

                        <a class="nav-link  all-phone dropdown-hover dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="anchor-info">Phones Mobile</span>
                        </a>

                        @include('parts.header-phones',['class' => 'phone-call dropdown-menu' ])
                    </li>
                    @if(!Auth::guard('agent')->check())
                    <li class="nav-item dropdown gms-menu">
                        @if($gmsClient->isGuest())
                            <a class="nav-link" href="{{ route('gms.sign-up') }}">
                                <img class="pr-1" src="/img/gms/crown.svg" width="21" alt="{{ __('header.top.my-royal') }}" title="{{ __('header.top.my-royal') }}">
                                <span class="text-icon my-royal-large">{{ __('header.top.my-royal') }} {{ __('header.top.account') }}</span>
                                <span class="text-icon my-royal-short">{{ __('header.top.my-royal') }}</span>
                            </a>
                        @else
                            <a class="nav-link collapsed dropdown-toggle" data-toggle="collapse" href="#" role="button" aria-expanded="false" aria-controls="collapseExample">
                                <img src="/img/gms/crown.svg" width="21" alt="{{ __('header.top.my-royal') }}" title="{{ __('header.top.my-royal') }}">
                                <span class="text-icon">{{ __('gms.Hello')  }} {{ $gmsClient->getName() }}</span>
                            </a>
                            <div class="dropdown-menu">
                                <a class="nav-link title pl-0 pr-0" href="{{route('gms.dashboard')}}" >{{__('gms.Inicio')}}</a>
                                <a class="nav-link title pl-0 pr-0" href="{{route('gms.log-out')}}">{{__('gms.Exit')}}</a>
                            </div>
                        @endif
                    </li>
                    @else
                        {{-- AGENT --}}
                         @if(Auth::guard("agent")->check())
                            <li class="nav-item dropdown gms-menu">
                                <a class="nav-link" href="#" data-toggle="dropdown" data-target="#closeSession">
                                    <img class="pr-1" src="/img/account_icon.svg" width="21" alt="Account">
                                    <span class="text-icon">{{__("agent.gretting").Auth::guard("agent")->user()->guest_first_name}}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-blue dropdown-menu-right m-0 b-0" aria-labelledby="closeSession" style="">
                                    <a href="{{ route('logout.agent') }}" class="dropdown-item" style="background: none;color: #fff">
                                        <img class="pr-1" src="/img/icono-news.png" width="21" alt="Logout Agent"> {{__("agent.logout")}}
                                    </a>
                                    <a href="{{ route('agent.help') }}" class="dropdown-item" style="background: none;color: #fff">
                                        <img class="pr-1" src="//localhost:3000/img/chat-icon-a.svg" width="21" alt="Help Agent"> {{__("agent.help")}}
                                    </a>
                                </div>
                            </li>
                        @endif
                    @endif
                    <li class="nav-item dropdown ">
                        <a class="nav-link dropdown-hover" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span>{{ __('header.menu.resorts') }}</span>
                        </a>
                        <div id="resort-menu-desktop" class="dropdown-menu">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-6">
                                        @for($i = 0; $i < 3; $i++)
                                            <a class="nav-link title pl-0 pr-0"
                                               href="{{$nav['resorts-destinations'][$i]['link']}}">{{$nav['resorts-destinations'][$i]['title']}}</a>
                                            <div class="nav-item sub-menu">
                                                @foreach($nav['resorts-destinations'][$i]['resorts'] as $resort)
                                                    <a class="nav-link" href="{{$resort['link']}}">
                                                        @if(isset($resort['new']) )
                                                            <span class="badge" style="color: #fff;background: #ea5e00; padding: 3px 5px 5px 5px;">
                                                                {{__('general.new')}}
                                                            </span>
                                                        @endif
                                                        {{$resort['title']}}
                                                    </a>
                                                @endforeach
                                            </div>
                                        @endfor
                                    </div>
                                    <div class="col-6">
                                        @for($i = 3; $i < count($nav['resorts-destinations']); $i++)
                                            <a class="nav-link title pl-0 pr-0"
                                               href="{{$nav['resorts-destinations'][$i]['link']}}">{{$nav['resorts-destinations'][$i]['title']}}</a>
                                            <div class="nav-item sub-menu">
                                                @foreach($nav['resorts-destinations'][$i]['resorts'] as $resort)
                                                    <a class="nav-link" href="{{$resort['link']}}">{{$resort['title']}}</a>
                                                @endforeach
                                            </div>
                                        @endfor
                                        <div class="nav-item">
                                            <a class="title nav-link text-uppercase pl-0 pr-0"
                                               href="{{lang_url("/".Lang::get('routes.beach_destinations'))}}">
                                                {{ __('header.menu.all_destinations') }}
                                            </a>
                                        </div>
                                        <div class="nav-item">
                                            <a class="title nav-link text-uppercase pl-0 pr-0"
                                               href="{{lang_url("/".Lang::get('routes.beach_resorts'))}}">
                                                {{ __('header.menu.all_resorts') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown vacations-experiences-li">
                        <a class="nav-link collapsed" data-toggle="collapse" href="#" role="button"
                           aria-expanded="false" aria-controls="collapseExample">
                            {{ __('header.menu.type_of_trips.self') }}
                        </a>
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="col-6">
                                    <div class="nav-item sub-menu">
                                        @for($i = 0; $i < 4; $i++)
                                            <div class="nav-item">
                                                <a class="nav-link"
                                                   href="{{$nav['vacations-experiences'][$i]['link']}}">{{$nav['vacations-experiences'][$i]['title']}}</a>
                                            </div>
                                        @endfor
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="nav-item sub-menu">
                                        @for($i = 4; $i < count($nav['vacations-experiences']); $i++)
                                            <div class="nav-item">
                                                <a class="nav-link"
                                                   href="{{$nav['vacations-experiences'][$i]['link']}}">{{$nav['vacations-experiences'][$i]['title']}}</a>
                                            </div>
                                        @endfor
                                        <div class="nav-item">
                                            <a href="{{lang_url("/" . __('routes.experiences'))}}"
                                               class="title pr-0 nav-link">
                                                {{ __('general.allFem') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link cursor-pointer"
                           href="{{ lang_url("/".__('routes.deals').'/'.__('routes.hotels')) }}">{{ __('header.menu.specials') }}</a>
                    </li>

                    @if($boolview)
                        <li class="nav-item av-no-flex booking-now">
                            <a class="nav-link" href="#" id="booking-btn" data-toggle="collapse"
                               data-target="#booking-header"
                               aria-controls="booking-header" aria-expanded="false" aria-label="Toggle navigation">
                                <i class="fa fa-search pr-1 fa-lg"></i>
                                {{ __('general.booking.btn.book_now') }}
                            </a>
                        </li>
                    @endif

                    

                </ul>
            </div>
            {{--Menu End --}}
            @if($boolview)
                <div id="booking-header" class="collapse booking-interno">
                    <div class="container">
                        @include('parts.extras.booking-resort')
                    </div>
                </div>
            @endif
        </nav>
        {{-- Menu principal END--}}
        
    </div>

    {{-- START NAV GMS MOVIL --}}
    @if(!$gmsClient->isGuest())
        <div id="my-royal-mobil" class="nav-mobil collapse header-collapse navbar-collapse d-md-none">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{route('gms.dashboard')}}" class="nav-link">
                        {{__('gms.Inicio')}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('gms.reservations')}}" class="nav-link">
                        {{__('gms.Reservas')}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('gms.personal-information') }}" class="nav-link">
                        {{__('gms.Personal information')}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('site.deals') }}" class="nav-link">
                        {{__('gms.Ofertas')}}
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('gms.account-management')}}" class="nav-link">{{__('gms.Manejo de cuenta')}}</a>
                </li>
                <li class="nav-item">
                    <a href="{{route('gms.log-out')}}" class="nav-link">
                        {{__('gms.Exit')}}
                    </a>
                </li>
            </ul>
        </div>
    @endif
    {{-- END NAV GMS MOVIL --}}


    {{--START Nav Resorts Movil--}}
    <div id="resort-mobil-img" class="collapse header-collapse navbar-collapse d-md-none">
        <ul class="navbar-nav">
            @foreach( $nav['resorts-destinations'] as $key => $item)
                <li class="nav-item">
                    <a class="nav-link" href="{{$item['link']}}">
                        {{$item['title']}}
                    </a>
                    @foreach($item['resorts'] as $resort)
                        <div class="nav-content container-fluid p-0">
                            <div class="row no-gutters">
                                <div class="col-4 resort-img">
                                    <a href="{{$resort['link']}}" class="nav-link"
                                       style="background-image: url('{{$resort['img']}}')">
                                        <span class="anchor-info">{{$resort['title-short']}}</span>
                                    </a>
                                </div>
                                <div class="col-8 resort-info">
                                    <a class="nav-link" href="{{$resort['link']}}">
                                        @if(isset($resort['new']) )
                                            <span class="badge" style="color: #fff;background: #ea5e00; padding: 3px 5px 5px 5px;">
                                                {{__('general.new')}}
                                            </span>
                                        @endif
                                        {{$resort['title-short']}}
                                    </a>
                                    <a href="#" class="nav-lin">{{$item['title-large']}}</a>
                                    <label for="" class="starts">
                                        @for($i = 0; $i<$resort['stars']; $i++)
                                            @if($resort['stars'] - ($i+1) >=0)
                                                <img class="lazyload" data-src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="17">
                                            @else
                                                <img class="lazyload" data-src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="17">
                                            @endif
                                        @endfor
                                    </label>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </li>
            @endforeach
        </ul>
    </div>
    {{--END Nav Resorts Movil--}}

    {{--START NAV CALL--}}
    @include('parts.header-phones',['id' => 'nav-call' , 'class' => 'nav-mobil phone-call collapse header-collapse navbar-collapse d-md-none' ])


    @if(Auth::guard("agent")->check())
        <div id="nav-agent" class="nav-mobil collapse header-collapse navbar-collapse d-md-none">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#options">
                        <span class="text-icon">{{__("agent.gretting").Auth::guard("agent")->user()->guest_first_name}}</span>
                    </a>
                    <div class="collapse" id="options">
                        <a href="{{ route('logout.agent') }}" class="dropdown-item"><img class="pr-1" src="/img/icono-news.png" alt="log-out agent" width="21"> {{__("agent.logout")}}</a>
                    </div>
                </li>
            </ul>
        </div>
    @endif
    
    {{--END NAV CALL--}}

    {{--START NAV GENERAL MOVIL--}}
    <div id="nav-mobil" class=" header-collapse collapse navbar-collapse d-md-none">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link collapsed" data-toggle="collapse" href="#nav-resorts" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    <span>{{ __('header.menu.resorts') }}</span>
                </a>
                <div class="collapse sub-nav" id="nav-resorts">
                    @foreach($nav['resorts-destinations'] as $key => $item)
                        <div class="nav-item">
                            <span class="title">{{$item['title']}}</span>
                            @foreach($item['resorts'] as $resort)
                                <a class="nav-link" href="{{$resort['link']}}">{{$resort['title']}}</a>
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link collapsed" data-toggle="collapse" href="#nav-experiences" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    <span>{{ __('header.menu.type_of_trips.self') }}</span>
                </a>
                <div class="collapse sub-nav" id="nav-experiences">
                    @foreach($nav['vacations-experiences'] as $key => $item)
                        <div class="nav-item">
                            <a class="nav-link" href="{{$item['link']}}">{{$item['title']}}</a>
                        </div>
                    @endforeach
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link cursor-pointer"
                   href="{{ lang_url("/".__('routes.deals').'/'.__('routes.hotels')) }}">
                    <span>{{ __('header.menu.specials') }}</span>
                </a>
            </li>
            <li class="nav-item nav-item-small">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#manageReservation">
                    <img class="pr-1" src="/img/pencil-icon.png" alt ="Pencil Icon" title ="Pencil Icon" width="21px">
                    <span class="text-icon">{{ __('header.top.manage_your_reservation') }}</span>
                </a>
            </li>
            {{--
            <li class="nav-item nav-item-small">
                <a class="nav-link" target="_blanck" href="{{__('header.top.blog') }}">
                    <img class="pr-1" src="/img/icono-blog-blanco.png" width="21px">
                    <span class="text-icon">Blog</span>
                </a>
            </li>
            --}}
            <li class="nav-item nav-item-small">
                <a class="nav-link" href="#"
                   onclick="openWindow('https://webchat.visitroyalresorts.com/chat-{{ $chat or 'general' }}-{{ __('general.chatLang') }}.html');return false;">
                    <img class="pr-1" src="{{asset('img/chat-icon-a.svg')}}" width="21" alt="Chat Icon" title="Chat Icon"/>
                    <span class="text-icon">{{ __('header.top.chat') }}</span>
                </a>
            </li>

            @if(App::getLocale() === "es")
                <li class="nav-item dropdown nav-item-small">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#nav-lan" role="button"
                       aria-expanded="false">
                        <span>{{ __('general.lang.es') }}</span>
                    </a>
                    <div class="collapse" id="nav-lan">
                        <a class="nav-link" href="{{ change_lang("en") }}">{{ __('general.lang.en') }}</a>
                    </div>
                </li>
            @else
                <li class="nav-item dropdown nav-item-small">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#nav-lan" role="button"
                       aria-expanded="false">
                        <span>{{ __('general.lang.en') }}</span>
                    </a>
                    <div class="collapse" id="nav-lan">
                        <a class="nav-link" href="{{ lang_url('es/') }}">{{ __('general.lang.es') }}</a>
                    </div>
                </li>
            @endif
        </ul>
    </div>
    {{--END NAV GENERAL MOVIL--}}
</header>

<div class="boton-booking-now-fixed d-md-none">
    <button class="btn btn-secondary" id="btn-booking-fixed" data-toggle="collapse" data-target="#booking-header" aria-controls="booking-header" aria-expanded="false"
            aria-label="Toggle navigation">
        {{ __('general.booking.btn.book_now') }}
        <img class="lazyload" data-src="/img/icon-footer/up-arrow.svg" alt="royal-reservations-arrow">
    </button>
</div>
