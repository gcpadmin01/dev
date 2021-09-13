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

?>

<header>
    {{--Cintillo Azul START--}}
    <div class="nav-blue d-none d-md-block">
        <nav class="navbar navbar-expand  ">
            <div class="collapse navbar-collapse d-flex justify-content-center">
                <ul class="nav">
                    <li class="nav-item">
                        <a href="https://www.facebook.com/RoyalReservations">
                            <img src="/img/icon-footer/facebook.png" alt="Facebook Royal Reservations" width="30" style="margin:10px">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://twitter.com/royalRSV" class="it-red">
                            <img src="/img/icon-footer/twitter.png" alt="twitter Royal Reservations" width="30" style="margin:10px">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/royalreservations/" class="it-red">
                            <img src="/img/icon-footer/instagram.png" alt="Instagram Royal Reservations" width="30" style="margin:10px">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.youtube.com/channel/UC1N1ZjyI2_mOKQTq2BNOM0Q/videos"
                           class="it-red ">
                            <img src="/img/icon-footer/youtube.png" alt="Youtube Royal Reservations" width="30" style="margin:10px">
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
            <img class="pr-sm-4 p-md-0 pl-2 d-sm-none" src="{{ asset('img/logo-royal-mb.png') }}" alt="Royal Reservations" width="45">
            <img class="pr-sm-4 p-md-0 pl-2 logo logo-blue" src="{{ asset('img/logo-royal.svg') }}" alt="Royal Reservations">
            <img class="pr-sm-4 p-md-0 pl-2 d-none d-sm-block logo logo-white" src="{{ asset('img/logo-royal-white-h.png') }}" alt="Royal Reservations">
        </a>
        <!--
        <button class="navbar-toggler arrow collapsed" type="button" data-toggle="collapse"
                data-target="#nav-call"
                aria-controls="nav-call" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img class="w-100" src="{{asset('img/whatsapp-icon.svg')}}"/>
            </span>
        </button>
        <button class="navbar-toggler arrow collapsed" type="button" data-toggle="collapse"
                data-target="#resort-mobil-img"
                aria-controls="resort-mobil-img" aria-expanded="false" aria-label="Toggle navigation">
            Resorts
        </button>
        -->
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#nav-mobil"
                aria-controls="nav-mobil" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <img class="w-100" src="{{asset('img/hamburger.svg')}}" alt="Menu Royal Reservations"/>
            </span>
        </button>


        <div class="collapse navbar-collapse justify-content-end">
            <ul class="nav">
                <!--<li class="nav-item dropdown ">
                    <span>{{__('travel-agents/landing.line1')}}</span>
                </li>
                <li class="nav-item dropdown ">
                    <a class="nav-link collapsed"  data-toggle="modal" data-target="#contacto" href="#" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                       <i class="fas fa-phone-square"></i>
                        <span>{{__('travel-agents/landing.contact')}}</span>
                    </a>
                </li>-->

                <li class="nav-item dropdown ">

                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            <img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" alt="Whatsapp icon" title="Whatsapp icon" width="21"/>{{__('travel-agents/landing.contact')}}
                        </a>
                        <div id="drop-call" class="dropdown-menu dropdown-menu-blue dropdown-menu-right">
                            <div class="row no-gutters" style="">
                                <div class="col-3"></div>
                                <div class="col-6">
                                        <!--<a class="nav-link title pl-0 pr-0" href="#">
                                            {{__('travel-agents/landing.suContent')}}
                                        </a>-->
                                        <div class="nav-item sub-menu">
                                            
                                            <a class="nav-link" style="white-space: nowrap"
                                                   href="">
                                                    <i class="fa fa-envelope" aria-hidden="true"></i> agentquestions@royalresorts.com
                                            </a>

                                            <a class="nav-link" style="white-space: nowrap"
                                                   href="tel:18887214420">
                                                    <i class="fa fa-phone" aria-hidden="true"></i> {{__('travel-agents/landing.cuToll')}}: 1 888 721 4420
                                            </a>

                                            <a class="nav-link" style="white-space: nowrap"
                                                   href="tel:018000201761">
                                                    <i class="fa fa-phone" aria-hidden="true"></i> MEX {{__('travel-agents/landing.cuToll')}}: 01 800 020 1761
                                            </a>

                                            <a class="nav-link" style="white-space: nowrap"
                                                   href="tel:+529988488226">
                                                    <i class="fa fa-phone" aria-hidden="true"></i> {{__('travel-agents/landing.cuInter')}}: +52 (998) 848 8226
                                            </a>

                                        </div>
                                    
                                </div>
                                <div class="col-3"></div>

          
                            </div>
                        </div>
                </li>


                @if($boolview)
                    <li class="nav-item av-no-flex booking-now">
                        <a class="nav-link" href="#" id="booking-btn" data-toggle="modal"
                           data-target="#registro"
                           aria-controls="booking-header" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fa fa-search pr-1 fa-lg"></i>
                            {{__('travel-agents/landing.signup')}}
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
            
                <li class="nav-item">
                    <a class="nav-link" href="">
                        title
                    </a>
                   
                        <div class="nav-content container-fluid p-0">
                            <div class="row no-gutters">
                                <div class="col-4 resort-img">
                                    <a href="" class="nav-link">
                                        hola
                                    </a>
                                </div>
                                <div class="col-8 resort-info">
                                    <a class="nav-link" href="">subtitle</a>
                                    <a href="" class="nav-lin">dos</a>
                                   
                                </div>
                            </div>
                        </div>
                    
                </li>
            
        </ul>
    </div>
    {{--END Nav Resorts Movil--}}

    {{--START NAV CALL--}}
    <div id="nav-call" class="nav-mobil collapse header-collapse navbar-collapse d-md-none">
        <ul class="navbar-nav">
            
                <li class="nav-item dropdown">
                    <a class="nav-link collapsed" data-toggle="collapse" href="" role="button"
                       aria-expanded="false" aria-controls="collapseExample">
                        <span>title</span>
                    </a>
                    <div class="collapse sub-nav" id="call">
                        
                            <div class="nav-item">
                                <a class="nav-link" href="">
                                    
                                        subtitle++
                                    
                                </a>
                            </div>
                        
                    </div>
                </li>
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
                    
                        <div class="nav-item">
                            <span class="title">title--</span>
                    
                                <a class="nav-link" href="">sub title --</a>
                    
                        </div>
                    
                </div>
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
    <button class="btn btn-secondary" id="btn-booking-fixed" aria-controls="booking-header" aria-expanded="false"
            aria-label="Toggle navigation">
        {{ __('general.booking.btn.book_now') }}
        <img src="/img/icon-footer/up-arrow.svg" alt="royal-reservations-arrow">
    </button>
</div>
