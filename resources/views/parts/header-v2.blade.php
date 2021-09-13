@php
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
$overlayHeader = true;
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
        case 'royalcarestandard':
            $overlayHeader = false;
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
                    'title' => 'Grand Residences Riviera Cancun',
                    'title-short' => 'Grand Residences Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/grand-residences-riviera-cancun/" ),
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
                    'title' => 'Simpson Bay Resort, Marina & Spa',
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
];
@endphp
<header>
    <div class="static-top {{ $boolview ? 'with-bnt' : '' }}  {{ $overlayHeader? "" : "no-overlay" }} ">
        @if(!Auth::guard('agent')->check())
            <div class="resort-month">
                @if(App::getLocale()=="en")
                    <label>
                        New:
                    </label>
                    <a href="{{route('royalcarestandard')}}">
                        {{__('header.linkcovid_name')}}
                    </a>
                @else
                    <label>
                        {!! __('header.covid19_label') !!}
                    </label>
                    <a href="{{route('royalcarestandard')}}">
                        {!! __('header.covid19_btn') !!}
                    </a>
                 @endif
                <button class="close">X</button>
            </div>
        @endif
        <div class="container-nav-blue">
            <div class="container">
                <label class="resort-family"> {{ __('general.we_are_part_of_the_royal_resorts') }} </label>
                <nav class="nav-blue">
                    <ul class="nav">
                        @if(Auth::guard("agent")->check())
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown" data-target="#close-agent">
                                    <img class="pr-1" src="/img/account_icon.svg" alt="Acount Royal Reservations" width="21">
                                    <span class="text-icon">{{__("agent.gretting").Auth::guard("agent")->user()->guest_first_name}}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-blue dropdown-menu-right m-0 b-0" aria-labelledby="close-agent" style="">
                                    <a href="{{ route('logout.agent') }}" class="dropdown-item">
                                        <img class="pr-1" src="{{asset('/img/icono-news.png')}}" alt="logout agent" width="21"> {{__("agent.logout")}}
                                    </a>
                                    <a href="{{ route('agent.help') }}" class="dropdown-item">
                                        <img class="pr-1" src="{{asset('img/chat-icon-a.svg')}}" alt="help agent" width="21"> {{__("agent.help")}}
                                    </a>
                                </div>
                            </li>
                        @endif
                        <li class="nav-item">
                            <label class="nav-link" data-toggle="modal" data-target="#manageReservation">
                                <img class="pr-1" src="/img/pencil-icon.png" alt ="Pencil Icon" title ="Pencil Icon" width="21px">
                                <span class="text-icon">{{ __('header.top.manage_your_reservation') }}</span>
                            </label>
                        </li>
                        <li class="nav-item  btn-chat">
                            <label class="nav-link"
                                aria-haspopup="true" aria-expanded="false"
                                 onclick="openWindow('https://webchat.visitroyalresorts.com/chat-{{ $chat == '' || !isset($chat) ? 'general':$chat }}-{{ __('general.chatLang') }}.html');return false;">
                                <img class="pr-1" src="{{asset('img/chat-icon-a.svg')}}" alt="Chat Icon" title="Chat Icon" width="21"/>
                                <label>{{ __('header.top.chat') }}</label>
                            </label>
                        </li>
                        <li class="nav-item dropdown phone-call-li d-flex">

                            <a class="nav-link phone"
                                href="tel:{{ $phone['phone']['number'] }}" >
                                <img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" alt="Whatsapp icon" title="Whatsapp icon" width="21"/>
                                <label class="phone-large"> {{ __('general.Book with an agent') }} {{ $phone['phone']['label-short'] }}</label>
                            </a>

                            {{--
                            <a class="nav-link phone"
                               href="tel:9984254788" >
                                <img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" alt="Whatsapp icon" title="Whatsapp icon" width="21"/>
                                <label class="phone-large"> {{ __('general.Book with an agent') }} 998-425-4788</label>
                            </a>
                            --}}

                            <label class="nav-link all-phone dropdown-toggle"   role="button" aria-haspopup="true" aria-expanded="false"
                                aria-controls="resort-mobil-img"
                                data-target="#nav-call"
                                data-toggle="collapse">
                                <span class="anchor-info">Phones</span>
                            </label>

                        </li>

                        @if(App::getLocale() === "es")
                            <li class="nav-item dropdown ">
                                <label class="nav-link dropdown-toggle" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="padding-bottom: .7rem !important;">
                                    {{ __('general.lang.es') }}
                                </label>
                                <div class="dropdown-menu dropdown-menu-blue dropdown-menu-right m-0 b-0"
                                    aria-labelledby="navbarDropdownMenuLink" style="">
                                    <a class="dropdown-item" href="{{ change_lang() }}">{{ __('general.lang.en') }}</a>
                                </div>
                            </li>
                        @else
                            <li class="nav-item dropdown ">
                                <label class="nav-link dropdown-toggle" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="padding-bottom: .7rem !important;">
                                    {{ __('general.lang.en') }}
                                </label>
                                <div class="dropdown-menu dropdown-menu-blue dropdown-menu-right m-0 b-0"
                                    aria-labelledby="navbarDropdownMenuLink" style="">
                                    <a class="dropdown-item" href="{{ change_lang() }}">{{ __('general.lang.es') }}</a>
                                </div>
                            </li>
                        @endif

                        @if(!Auth::guard("agent")->check())
                            <li class="nav-item dropdown">
                                @if($gmsClient->isGuest())
                                    <a class="nav-link" href="{{ route('gms.sign-up') }}">
                                        <img class="pr-1" src="/img/gms/crown.svg" width="21px" alt="{{ __('header.top.my-royal') }}" title="{{ __('header.top.my-royal') }}">
                                        {{-- <span class="text-icon my-royal-large">{{ __('header.top.my-royal') }} {{ __('header.top.account') }}</span> --}}
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
                </nav>
            </div>
        </div>
        <div class="container-nav-primary">
            <div class="container">
                <nav class="nav-primary" id="nav-primary">
                    <a class="navbar-brand" href="{{ lang_url("/") }}">
                        <picture>
                            <source media="(min-width: 576px)" srcset="{{ asset('img/logo-royal-white-h.png') }}">
                            <img class="pr-sm-4 p-md-0 pl-2 logo " src="{{ asset('img/logo-royal-mb.png') }}" alt="Royal Reservations">
                        </picture>
                    </a>
                    <ul class="nav">
                        <li class="nav-item  btn-chat">
                            <label class="nav-link"
                                aria-haspopup="true" aria-expanded="false"
                                 onclick="openWindow('https://webchat.visitroyalresorts.com/chat-{{ $chat == '' || !isset($chat) ? 'general':$chat }}-{{ __('general.chatLang') }}.html');return false;">
                                <img class="pr-1" src="{{asset('img/chat-icon-a.svg')}}" alt="Chat Icon" title="Chat Icon" width="21"/>
                                <label>{{ __('header.top.chat') }}</label>
                            </label>
                        </li>
                        <li class="phone-call-li ">
                            <a class="nav-link phone"
                                href="tel:{{ $phone['phone']['number'] }}" >
                                <img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" alt="Whatsapp icon" title="Whatsapp icon" width="21"/>

                                <label class="label-phone"
                                    data-label="{{ __('header.top.call_us.self') }}"
                                    data-label_md="{{ $phone['phone']['label-short'] }}"
                                    data-label_md="{{ $phone['phone']['label-short'] }}"
                                    data-label_lg="{{ __('general.Book with an agent') }} {{ $phone['phone']['label-short'] }}">
                                </label>

                                {{--
                                <label class="label-phone"
                                       data-label="{{ __('header.top.call_us.self') }}"
                                       data-label_md="998-425-4788"
                                       data-label_md="998-425-4788"
                                       data-label_lg="{{ __('general.Book with an agent') }} 998-425-4788">
                                </label>
                                --}}


                                {{--        NO DESCOMENTAR                        --}}
{{--                                <label class="phone-large"><span>{{ __('general.Book with an agent') }} </span> {{ $phone['phone']['label-short'] }}</label>--}}
{{--                                <label class="phone-short">{{ $phone['phone']['label-short'] }}</label>--}}
{{--                                <label class="phone-call-us">{{ __('header.top.call_us.self') }}</label>--}}
                            </a>

                            <label class="nav-link all-phone dropdown-toggle"  role="button" aria-haspopup="true" aria-expanded="false"
                                aria-controls="resort-mobil-img"
                                data-target="#nav-call"
                                data-toggle="collapse">
                                <img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" alt="Whatsapp icon" title="Whatsapp icon" width="21"/>
                                <span class="anchor-info">Phones</span>
                            </label>

                            @include('parts.header-phones',['class' => 'phone-call dropdown-menu dropdown-menu-p', 'id' => 'nav-call' ])
                        </li>

                        <li class="resorts">
                            <label class="nav-link dropdown-toggle collapsed"
                                    role="button"
                                    data-toggle="collapse"
                                    data-target="#resort-mobil-img"
                                    aria-controls="resort-mobil-img"
                                    aria-expanded="false"
                                    data-parent="#nav-primary"
                                    data-badge=""
                                    data-title_short = "RESORT",
                                    data-title = "{{ __('header.menu.resorts') }}"
                                    aria-label="Toggle navigation">
                                    RESORT
                            </label>

                            {{--START Nav Resorts Movil--}}
                            <div id="resort-mobil-img" class="resort-menu dropdown-menu dropdown-menu-p">
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
                                                            <a class="nav-link" href="{{$resort['link']}}"
                                                                data-badge = "{{ isset($resort['new'])? '<span class="badge" style="color: #fff;background: #ea5e00; padding: 3px 5px 5px 5px;">'.__('general.new').' </span>' : ""}}"
                                                                data-title="{{ $resort['title'] }}"
                                                                data-title_short="{{ $resort['title-short'] }}">
                                                                @if(isset($resort['new']) )
                                                                    <span class="badge" style="color: #fff;background: #ea5e00; padding: 3px 5px 5px 5px;">
                                                                        {{__('general.new')}}
                                                                    </span>
                                                                @endif
                                                                {{$resort['title-short']}}
                                                            </a>
                                                            <label class="a nav-link lb-destination">{{$item['title-large']}}</label>
                                                            <label for="" class="starts">
                                                                <img class="lazyload" height="20px" data-src="{{asset('/img/icon-galeria/stars-'.str_replace('.','-',$resort['stars']).'.svg')}}" alt="Stars Icon" title="Stars Icon">
                                                                {{--
                                                                @for($i = 0; $i<$resort['stars']; $i++)
                                                                    @if($resort['stars'] - ($i+1) >=0)
                                                                        <img class="lazyload" data-src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="17">
                                                                    @else
                                                                        <img class="lazyload" data-src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="17">
                                                                    @endif
                                                                @endfor
                                                                --}}
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </li>
                                    @endforeach
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{lang_url("/".Lang::get('routes.beach_destinations'))}}">
                                            {{ __('header.menu.all_destinations') }}
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link"
                                            href="{{lang_url("/".Lang::get('routes.beach_resorts'))}}">
                                            {{ __('header.menu.all_resorts') }}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            {{--END Nav Resorts Movil--}}
                        </li>
                        <li class="resorts-vacations mn-mb">
                            <label class="a nav-link dropdown-toggle collapsed" role="button"
                                role="button"
                                data-toggle="collapse"
                                data-target="#resort-vacations-menu"
                                aria-controls="resort-vacations-menu"
                                data-parent="#nav-primary"
                                aria-expanded="false"
                                >
                                {{ __('header.menu.type_of_trips.self') }}
                            </label>
                            <div id="resort-vacations-menu" class="dropdown-menu resort-vacations-menu">
                                <ul class="navbar-nav">
                                    @for($i = 0; $i < count($nav['vacations-experiences']); $i++)
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{$nav['vacations-experiences'][$i]['link']}}">
                                                {{$nav['vacations-experiences'][$i]['title']}}
                                            </a>
                                        </li>
                                    @endfor
                                </ul>
                            </div>
                        </li>

                        <li class="resorts-specials">
                            <a class="nav-link cursor-pointer" href="{{ lang_url("/".__('routes.deals').'/'.__('routes.hotels')) }}">
                                {{ __('header.menu.specials') }}
                            </a>
                        </li>

                        @if(!Auth::guard('agent')->check())
                            <li class="hidden my-royal">
                                @if($gmsClient->isGuest())
                                    <a class="nav-link btn navbar-toggler collapsed" href="{{ route('gms.sign-up') }}" >
                                        <img class="my-royal-icon" src="/img/gms/crown.svg" alt="{{ __('header.top.my-royal') }}" title="{{ __('header.top.my-royal') }}">
                                        {{-- <span class="text-icon my-royal-large">{{ __('header.top.my-royal') }} {{ __('header.top.account') }}</span> --}}
                                        <span class="text-icon my-royal-short">{{ __('header.top.my-royal') }}</span>
                                    </a>
                                @else
                                    <a class="nav-link my-royal-nav dropdown-toggle collapsed" href="#" role="button" data-toggle="collapse"
                                            data-target="#my-royal-mobil"
                                            aria-controls="my-royal-mobil"
                                            aria-expanded="false" aria-label="Toggle navigation">
                                            <img class="my-royal-icon mobil" src="{{asset('/img/gms/icons/person.svg')}}" alt="Person"/>
                                            <img class="my-royal-icon desktop" src="/img/gms/crown.svg" alt="{{ __('header.top.my-royal') }}" title="{{ __('header.top.my-royal') }}">

                                            <span class="text-icon my-royal-short">{{ __('gms.Hello')  }} {{ $gmsClient->getName() }}</span>
                                    </a>
                                    <div id="my-royal-mobil" class="my-royal-mobil dropdown-menu dropdown-menu-p">
                                        <ul class="navbar-nav">
                                            <li class="nav-item nav-item-desktop">
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
                                            <li class="nav-item nav-item-desktop">
                                                <a href="{{route('gms.log-out')}}" class="nav-link"
                                                   data-layer_toggle="click"
                                                   data-layer_category="GMS"
                                                   data-layer_action="log out"
                                                   data-layer_label="header">
                                                    {{__('gms.Exit')}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                @endif
                            </li>
                        @else
                            <li class="agent-menu">
                                <label class="nav-link dropdown-toggle collapsed" data-toggle="collapse" data-target="#close-agent-mobile">
                                    <img class="pr-1" src="/img/account_icon.svg" width="25" alt="Account">
                                    <span class="text-icon">{{__("agent.gretting").Auth::guard("agent")->user()->guest_first_name}}</span>
                                </label>
                                <div id="close-agent-mobile" class="dropdown-menu dropdown-menu-p" aria-labelledby="close-agent-mobile">
                                    <a href="{{ route('logout.agent') }}" class="dropdown-item" style="background: none;color: #fff">
                                        <img class="pr-1" src="{{asset('/img/icono-news.png')}}" width="21" alt="Logout Agent"> {{__("agent.logout")}}
                                    </a>
                                    <a href="{{ route('agent.help') }}" class="dropdown-item" style="background: none;color: #fff">
                                        <img class="pr-1" src="{{asset('img/chat-icon-a.svg')}}" width="21" alt="Help Agent"> {{__("agent.help")}}
                                    </a>
                                </div>
                            </li>
                        @endif
                        @if($boolview)

                            <li class="nav-item  booking-now">
                                <label class="nav-link booking-btn"
                                    data-toggle="collapse"
                                    data-target="#booking-header"
                                    aria-controls="booking-header"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-search pr-1 fa-lg"></i>
                                    {{ __('general.booking.btn.book_now') }}
                                </label>
                            </li>
                        @endif

                        <li class="nav-item toggle-menu">
                            <a class="nav-link dropdown-toggle collapsed"
                                role="button"
                                data-toggle="collapse"
                                data-target="#nav-movil"
                                aria-controls="nav-movil"
                                aria-expanded="false"
                                data-parent="#nav-primary"
                                aria-label="Toggle navigation">
                                    <img src="{{asset('img/hamburger.svg')}}" alt="Menu Royal Reservations"/>
                            </a>

                            <div id="nav-movil" class="nav-movil dropdown-menu dropdown-menu-p">
                                <ul class="navbar-nav">
                                    <li class="nav-item  btn-chat">
                                        <label class="a nav-link"
                                            aria-haspopup="true" aria-expanded="false"
                                             onclick="openWindow('https://webchat.visitroyalresorts.com/chat-{{ $chat == '' || !isset($chat) ? 'general':$chat }}-{{ __('general.chatLang') }}.html');return false;">
                                            <img class="pr-1" src="{{asset('img/chat-icon-a.svg')}}" alt="Chat Icon" title="Chat Icon" width="21"/>
                                            <label>{{ __('header.top.chat') }}</label>
                                        </label>
                                    </li>
                                    <li class="nav-item manage-reservation">
                                        <label class="a nav-link" data-toggle="modal" data-target="#manageReservation">
                                            <img class="pr-1" src="/img/pencil-icon.png" alt ="Pencil Icon" title ="Pencil Icon" width="21px">
                                            <span class="text-icon">{{ __('header.top.manage_your_reservation') }}</span>
                                        </label>
                                    </li>
                                    <li class="nav-item resorts-specials">
                                        <a class="nav-link cursor-pointer" href="{{ lang_url("/".__('routes.deals').'/'.__('routes.hotels')) }}">
                                            {{ __('header.menu.specials') }}
                                        </a>
                                    </li>
                                    @if(App::getLocale() === "es")
                                        <li class="nav-item language ">
                                            <label class="a nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ __('general.lang.es') }}
                                            </label>
                                            <div class="dropdown-menu" >
                                                <a href="{{ change_lang() }}">{{ __('general.lang.en') }}</a>
                                            </div>
                                        </li>
                                    @else
                                        <li class="nav-item language">
                                            <label class="a nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                {{ __('general.lang.en') }}
                                            </label>
                                            <div class="dropdown-menu" >
                                                <a href="{{ change_lang() }}">{{ __('general.lang.es') }}</a>
                                            </div>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                    </ul>



                </nav>
            </div>
        </div>

        @if($boolview)
            <div id="booking-header" class="collapse booking-interno">
                <div class="container">
                    @include('parts.extras.booking-resort')
                </div>
            </div>
        @endif

        @stack('header')

    </div>
    <script>
        var openWindow = function(url,normal){
                normal||(normal=false);
                if(normal==false){
                    var nwn=window.open(url,'','width=500,height=690');
                }
                else{
                    var nwn=window.open(url);
                }
                nwn.opener=null;
            }
    </script>
</header>
@if($page != 'sub-inter-special')
    <div class="boton-booking-now-fixed d-md-none">
        <button class="btn btn-secondary boton-booking-now-fixed" id="btn-booking-fixed" data-toggle="collapse" data-target="#booking-header" aria-controls="booking-header" aria-expanded="false"
                aria-label="Toggle navigation">
            {{ __('general.booking.btn.book_now') }}
            <img class="lazyload" data-src="/img/icon-footer/up-arrow.svg" alt="royal-reservations-arrow">
        </button>
    </div>
@endif