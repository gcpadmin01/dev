<?php
$path = $_SERVER['REQUEST_URI'];
$array = str_split($path);
$bool = false;
$boolview = false;
$url = 'chat-general-en';
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
if (isset($page)) {
    switch ($page) {
        case "resorts-intern":
            $boolview = false;
            break;
    }
}

$nav = [
    'resorts-destinations' => [
        [
            'link' => lang_url("/" . Lang::get('routes.beach_destinations') . "/cancun/" . __('routes.things_cun')),
            'title' => __('header.menu.beach_destinations.cancun'),
            'title-large' => __('header.menu.beach_destinations.cancun') . ', ' . __('header.menu.beach_destinations.mexico'),
            'resorts' => [
                [
                    'title' => 'The Royal Sands Resort & Spa All Inclusive',
                    'title-short' => 'The Royal Sands Resort',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-sands/the-royal-sands-resort-and-spa-all-inclusive-cancun "),
                    'img' => asset('img/resorts/the-royal-sands/the-royal-sands-menu.jpg'),

                    'stars' => 4.5
                ],
                [
                    'title' => 'The Royal Islander All Suites Resort',
                    'title-short' => 'The Royal Islander',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-islander/the-royal-islander-all-suites-resort-cancun "),
                    'img' => asset('img/resorts/the-royal-islander/the-royal-islander-menu.jpg'),
                    'stars' => 3.5
                ],
                [
                    'title' => 'The Royal Cancun All Suites Resort',
                    'title-short' => 'The Royal Cancun',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-cancun/the-royal-cancun-all-suites-resort-cancun "),
                    'img' => asset('img/resorts/the-royal-cancun/the-royal-cancun-menu.jpg'),
                    'stars' => 4
                ]
            ]
        ],
        [
            'link' => lang_url("/" . Lang::get('routes.beach_destinations') . "/riviera-maya/" . __('routes.things_riv')),
            'title' => 'Riviera Maya',
            'title-large' => 'Riviera Maya, ' . __('header.menu.beach_destinations.mexico'),
            'resorts' => [
                [
                    'title' => 'Grand Residences Riviera Cancun Resort',
                    'title-short' => 'Grand Residences',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/grand-residences-riviera-cancun/" . __('routes.resorts_overview_gr')),
                    'img' => asset('img/resorts/grand-residences-riviera-cancun/grand-residences-riviera-cancun-menu.jpg'),
                    'stars' => 5
                ],
                [
                    'title' => 'The Royal Haciendas All Suites Resort & Spa',
                    'title-short' => 'The Royal Haciendas',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-haciendas/the-royal-haciendas-all-suites-resort-and-spa-playa-del-carmen"),
                    'img' => asset('img/resorts/the-royal-haciendas/the-royal-haciendas-menu.jpg'),
                    'stars' => 4.5
                ],
            ]
        ],
        [
            'link' => lang_url("/" . Lang::get('routes.beach_destinations') . "/riviera-maya/" . __('routes.things_riv')),
            'title' => 'Playa del Carmen',
            'title-large' => 'Playa del Carmen, ' . __('header.menu.beach_destinations.mexico'),
            'resorts' => [
                [
                    'title' => 'The Royal Haciendas All Suites Resort & Spa',
                    'title-short' => 'The Royal Haciendas',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-haciendas/the-royal-haciendas-all-suites-resort-and-spa-playa-del-carmen"),
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
                    'title' => ' Simpson Bay Resort, Marina & Spa ',
                    'title-short' => 'Simpson Bay',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/simpson-bay-resort/simpson-bay-beach-resort-and-marina-st-maarten"),
                    'img' => asset('img/resorts/simpson-bay-resort/simpson-bay-resort-menu.jpg'),
                    'stars' => 4
                ],
                [
                    'title' => 'The Villas at Simpson Bay Beach Resort & Marina',
                    'title-short' => 'The Villas at Simpson Bay',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-villas-at-simpson-bay-resort/the-villas-at-simpson-bay-beach-resort-and-marina-st-maarten"),
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
                    'title-short' => 'The Royal Sea Aquarium',
                    'link' => lang_url("/" . Lang::get('routes.beach_resorts') . "/the-royal-sea-aquarium/the-royal-sea-aquarium-resort-curacao"),
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
    ],
    'call_us' => [

        [
            'title' => __('header.top.call_us.customer_service'),
            'links' => [
                [
                    'title' => 'USA ' . __('header.top.call_us.toll_free') . ' 1-888-721-4420',
                    'href' => 'tel:1-888-721-4420'
                ],
                [
                    'title' => 'MEX ' . __('header.top.call_us.toll_free') . ' 01-800-020-1761',
                    'href' => 'tel:01-800-020-1761'
                ],
                [
                    'title' => '' . __('header.top.call_us.international') . ' (+52) 998-848-8226',
                    'href' => 'tel:(+52) 998-848-8226'
                ],
            ]
        ],
        [
            'title' => __('header.top.call_us.for_resorts_in_mexico'),
            'links' => [
                [
                    'title' => 'USA ' . __('header.top.call_us.toll_free') . ' 1-888-387-4755',
                    'href' => 'tel:1-888-387-4755'
                ],
                [
                    'title' => 'MEX ' . __('header.top.call_us.toll_free') . ' 01-800-888-7744',
                    'href' => 'tel:01-800-888-7744'
                ],
                [
                    'icon' => '/images/whatsapp-icons2.png',
                    'title' => 'Whatsapp +5219984254788',
                    'href' => 'tel:+5219984254788'
                ],
                [
                    'title' => 'ARG ' . __('header.top.call_us.toll_free') . ' 0-800-222-4419',
                    'href' => 'tel:0-800-222-4419'
                ],
                [
                    'title' => 'COL ' . __('header.top.call_us.toll_free') . ' 01-800-710-2067',
                    'href' => 'tel:01-800-710-2067'
                ],
                [
                    'title' => '' . __('header.top.call_us.international') . ' 1-954-736-5841',
                    'href' => 'tel:1-954-736-5841'
                ]
            ]
        ],
        [
            'title' => __('header.top.call_us.for_resorts_in_caribbean'),
            'links' => [
                [
                    'title' => 'USA ' . __('header.top.call_us.toll_free') . ' 1-888-228-7930',
                    'href' => 'tel:1-888-228-7930'
                ],
                [
                    'icon' => '/images/whatsapp-icons2.png',
                    'title' => 'Whatsapp +5219981156413',
                    'href' => 'tel:+5219981156413'
                ],
                [
                    'title' => 'FRA ' . __('header.top.call_us.toll_free') . ' 0-805-080751',
                    'href' => 'tel:0-805-080751'
                ],
                [
                    'title' => 'GBR ' . __('header.top.call_us.toll_free') . ' 0-800-048-8533',
                    'href' => 'tel:0-800-048-8533'
                ],
                [
                    'title' => 'NLD ' . __('header.top.call_us.toll_free') . ' 0-800-022-2348',
                    'href' => 'tel:0-800-022-2348'
                ],
                [
                    'title' => '' . __('header.top.call_us.international') . ' 1-954-736-5863',
                    'href' => 'tel:1-954-736-5863'
                ],
            ]
        ],
        [
            'title' => __('header.top.call_us.for_resorts_in_puntacana'),
            'links' => [
                [
                    'title' => 'USA ' . __('header.top.call_us.toll_free') . ' 1-888-228-7980',
                    'href' => 'tel:1-888-228-7980'
                ],
                [
                    'title' => 'MEX ' . __('header.top.call_us.toll_free') . ' 01-800-021-1199',
                    'href' => 'tel:01-800-021-1199'
                ],
                [
                    'icon' => '/images/whatsapp-icons2.png',
                    'title' => 'Whatsapp +5219981156413',
                    'href' => 'tel:+5219981156413'
                ],
                [
                    'title' => '' . __('header.top.call_us.international') . ' 1-954-736-5824',
                    'href' => 'tel:1-954-736-5824'
                ],
            ]
        ],
        [
            'title' => __('header.top.call_us.for_resorts_in_puntacana2'),
            'links' => [

                [
                    'title' => 'USA ' . __('header.top.call_us.toll_free') . ' 1-888-840-1102',
                    'href' => 'tel:1-888-840-1102'
                ],
                [
                    'title' => 'MEX ' . __('header.top.call_us.toll_free') . ' 01-800-020-4806',
                    'href' => 'tel:01-800-020-4806'
                ],
                [
                    'icon' => '/images/whatsapp-icons2.png',
                    'title' => 'Whatsapp +5219981156413',
                    'href' => 'tel:+5219981156413'
                ],
                [
                    'title' => '' . __('header.top.call_us.international') . ' 1-954-368-1180',
                    'href' => 'tel:1-954-368-1180'
                ],
            ]
        ],

        [
            'title' => __('header.top.call_us.for_resorts_in_puntacana3'),
            'links' => [
                [
                    'title' => 'USA ' . __('header.top.call_us.toll_free') . ' 1-888-387-4757',
                    'href' => 'tel:1-888-387-4757'
                ],
                [
                    'title' => 'MEX ' . __('header.top.call_us.toll_free') . ' 01-800-020-5130',
                    'href' => 'tel:01-800-020-5130'
                ],
                [
                    'icon' => '/images/whatsapp-icons2.png',
                    'title' => 'Whatsapp +5219981156413',
                    'href' => 'tel:+5219981156413'
                ],
                [
                    'title' => '' . __('header.top.call_us.international') . ' 1-954-368-1182',
                    'href' => 'tel:1-954-368-1182'
                ],
            ]
        ]

    ]
]
?>

<header>
    {{--Cintillo Azul START--}}
    <div class="nav-blue d-none d-md-block">
        <nav class="navbar navbar-expand  ">
            <div class="collapse navbar-collapse justify-center">
                <ul class="nav">
                    <!--<li class="nav-item">
                        <a class="nav-link" href="https://www.facebook.com/RoyalReservations" target="_blank" class="pr-1"><img class="pr-1" src="{{asset('img/facebook.svg')}}" width="21px"></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="https://twitter.com/royalRSV" target="_blank" class="pr-1"><img class="pr-1" src="{{asset('img/twitter.svg')}}" width="21px"></a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.instagram.com/royalreservations/" target="_blank">
                            <img class="pr-1" src="{{asset('img/icon-white-instagram.svg')}}" alt="Instagram Royal Reservations" width="21">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.youtube.com/channel/UC1N1ZjyI2_mOKQTq2BNOM0Q/videos" target="_blank">
                            <img class="pr-1" src="{{asset('img/icon-white-youtube.svg')}}" alt="Youtube Royal Reservations" width="21">
                        </a>
                    </li>


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
                case "resorts-atrib":
                case "vacation-experiences":
                case "vacation-experiences-intern":
                case "experiencias-de-viaje":
                case "about-us":
                case "acerca-de-nosotros":
                case "aboutus-intern":
                /*case "sub-inter-special":*/
                case "destinations-offers":
                case "destinations-resorts":
                    $headerClass = "blue";
                break;
            }
        }
    @endphp
    <nav class="nav-primary navbar navbar-expand-md {{$headerClass}} ">
        <a class="navbar-brand mr-auto" href="{{ lang_url("/") }}">
            <img class="pr-sm-4 p-md-0 pl-2 d-sm-none" src="{{ asset('img/logo-royal-mb.png') }}" width="45" alt="Royal Reservations">
            <img class="pr-sm-4 p-md-0 pl-2 logo logo-blue" src="{{ asset('img/logo-royal.svg') }}" alt="Royal Reservations">
            <img class="pr-sm-4 p-md-0 pl-2 d-none d-sm-block logo logo-white" src="{{ asset('img/logo-royal-white-h.png') }}" alt="Royal Reservations">
        </a>
        <button class="navbar-toggler arrow collapsed" type="button" data-toggle="collapse"
                data-target="#nav-call"
                aria-controls="nav-call" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img class="w-100" src="{{asset('img/whatsapp-icon.svg')}}" alt="Whatsapp icon" title="Whatsapp icon"/>
            </span>
        </button>
        <button class="navbar-toggler arrow collapsed" type="button" data-toggle="collapse"
                data-target="#resort-mobil-img"
                aria-controls="resort-mobil-img" aria-expanded="false" aria-label="Toggle navigation">
            Resorts
        </button>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-mobil"
                aria-controls="nav-mobil" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img class="w-100" src="{{asset('img/hamburger.svg')}}" alt="Menu Royal Reservations"/>
            </span>
        </button>


        <div class="collapse navbar-collapse justify-content-end">
            <ul class="nav">
                <li class="nav-item dropdown ">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
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
                                                <a class="nav-link" href="{{$resort['link']}}">{{$resort['title']}}</a>
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
                <li class="nav-item dropdown">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        {{ __('header.menu.type_of_trips.self') }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-extras container-fluid">
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
                            <strong>{{ __('general.booking.btn.book_now') }}</strong>
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
                                    </a>
                                </div>
                                <div class="col-8 resort-info">
                                    <a class="nav-link" href="{{$resort['link']}}">{{$resort['title-short']}}</a>
                                    <a href="" class="nav-lin">{{$item['title-large']}}</a>
                                    <label for="" class="starts">
                                        @for($i = 0; $i<$resort['stars']; $i++)
                                            @if($resort['stars'] - ($i+1) >=0)
                                                <img src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="17">
                                            @else
                                                <img src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="17">
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
    <div id="nav-call" class="nav-mobil collapse header-collapse navbar-collapse d-md-none">
        <ul class="navbar-nav">
            @foreach($nav['call_us'] as $key => $call)
                <li class="nav-item dropdown">
                    <a class="nav-link collapsed" data-toggle="collapse" href="#call-{{$key}}" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        <span>{{ $call['title'] }}</span>
                    </a>
                    <div class="collapse sub-nav" id="call-{{$key}}">
                        @foreach($call['links'] as $item)
                            <div class="nav-item">
                                <a class="nav-link" href="{{$item['href']}}">{{$item['title']}}</a>
                            </div>
                        @endforeach
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
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
                    <img class="pr-1" src="/img/pencil-icon.png" width="21px" alt ="Pencil Icon" title ="Pencil Icon" >
                    <span class="text-icon">{{ __('header.top.manage_your_reservation') }}</span>
                </a>
            </li>
            <li class="nav-item nav-item-small">
                <a class="nav-link" href="#"
                   onclick="window.open('https://webchat.visitroyalresorts.com/chat-{{ $chat or 'general' }}-{{ __('general.chatLang') }}.html','','width=500,height=690');return false;">
                    <img class="pr-1" src="{{asset('img/chat-icon.svg')}}" alt="Chat Royal Reservations" width="21"/>
                    <span class="text-icon">{{ __('header.top.chat') }}</span>
                </a>
            </li>
            {{--<li class="nav-item nav-item-small">
                <a class="nav-link collapsed" data-toggle="collapse" href="#nav-call-us" role="button"
                   aria-expanded="false">
                    <img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" width="21" alt="Whatsapp icon" title="Whatsapp icon"/>{{ __('header.top.call_us.self') }}
                </a>
                <div class="collapse" id="nav-call-us">
                    <a class="nav-link" href="{{ lang_url('es/') }}">{{ __('general.lang.es') }}</a>
                </div>
            </li>--}}
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
    <button class="btn btn-secondary" id="btn-booking-fixed" aria-controls="booking-header" aria-expanded="false"
            aria-label="Toggle navigation">
        {{ __('general.booking.btn.book_now') }}
        <img src="/img/icon-footer/up-arrow.svg" alt="royal-reservations-arrow">
    </button>
</div>
