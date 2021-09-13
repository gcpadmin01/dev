<?php
    $critical = null;
    if(isset($atribs)){
        if($atribs == 'about'){
            $critical = Config::get('ccss.desktop.resort');
            if (\Agent::isMobile() || \Agent::isTablet()){
                $critical = Config::get('ccss.mobile.resort');
            }
        }
    }

    /*Safe Travel*/
    $cert_1 = ["the-royal-cancun","the-royal-islander","the-royal-sands","the-royal-haciendas","grand-residences-riviera-cancun"];
    /*Travel Choice*/
    $cert_2 = ["the-royal-islander","the-royal-sands","simpson-bay-resort","the-villas-at-simpson-bay-resort","the-royal-sea-aquarium"];
    /*Travel Choice Best of the Best*/
    $cert_3 = ["the-royal-cancun","the-royal-haciendas","grand-residences-riviera-cancun"];
    /*Prevension Sanitaria*/
    $cert_4 = ["the-royal-cancun","the-royal-islander","the-royal-sands","the-royal-haciendas","grand-residences-riviera-cancun"];
    /*Green Leaders Silver*/
    $cert_5 = ["the-royal-sands","the-royal-islander","the-royal-haciendas"];
    /*Safe Seal*/
    $cert_6 = ["simpson-bay-resort"];

    $flags_cert = [in_array($resort,$cert_1),in_array($resort,$cert_2),in_array($resort,$cert_3),in_array($resort,$cert_4),in_array($resort,$cert_5),in_array($resort,$cert_6)];
    $flag_gnr   = in_array(TRUE,$flags_cert);

    $newRoom     = [];
    $flagNewRoom = in_array($resort,$newRoom);

?>

@extends('/interna',['critical' => $critical])

@push('scripts')
    <script src="{{mix('/js/resort-about.js')}}" integrity="{{ Sri::hash('/js/resort-about.js') }}" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOHGOzkzJ3h5GSLybxxKp1lqq6S-ITl3Y&callback=initMap" async defer></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/resort.css') }}" integrity="{{ Sri::hash('css/resort.css') }}" crossorigin="anonymous">
@endpush

@push('dataLayer')
    @include('v2.components.schema.hotel')
@endpush

@section('interna')
    @include('parts.resort.slider',[
        'items' => __('resorts/'.$resort.'/slider')
    ])
    @include('parts.extras.booking-resort',[
        'resort'=>$resort, 
        'class' => 'booking-hover booking-resort-interna'
    ])
   
    @component('parts/resort/individual/links',[
        'atribs'=> $atribs,
        'resort'=>$resort,
        'interna'=>$interna,
        'subinterna'=>$subinterna,
        'rhome'=>$rhome,
        'rooms'=>$rooms,
        'specials'=>$specials,
        'reviews'=>$reviews,
        'restaurants'=>$restaurants,
        'amenities'=>$amenities,
        'gallery'=>$gallery
    ]) 
    @endcomponent


    @component('/parts/scripts', [
        'section'=>'Resort About', 
        'page'=>$resort
    ]) @endcomponent
    
    @component('parts/extras/breadcrum-level-3', [
        'page'=>$page,
        'destino'=>$resort,
        'subinterna'=>$interna
    ])@endcomponent
    
    @component('v2.parts.resorts.all-inclusive-details', [
        'class' =>'resort-container',
        'resort'=>$resort,
        'interna'=>$interna,
        'gallery'=>$gallery,
        'amenities'=>$amenities,
        'conceptAmenity' => $conceptAmenity,
        'flag_gnr' => $flag_gnr,
        'flagNewRoom' => $flagNewRoom]) @endcomponent


    @if(in_array($resortId, [15,4, 3, 1, 6, 5,7,8]))
        <section class="container ">
            <div class="card-sands royal-care-standard  {{ (in_array($resortId, [8])? "simpsonbay": "")  }} {{in_array($resort,$cert_6) ?  "safe-seal":""}} ">
                <div class="content {{in_array($resortId,[1,3,4,5,6]) ? 'card-certificate':''}}">

                        @if(in_array($resortId,[1,3,4,5,6]))
                            <img class="lazyload" data-src="{{ asset('/img/royalcarestandard/gel_certificate.jpg') }}" alt="The Royal Care Standard" title="The Royal Care Standard">
                        @elseif(in_array($resortId, [7]))
                            <img class="lazyload" data-src="{{ asset('/img/royalcarestandard/safe-seal-big.png') }}" alt="Safesale" title="Safesale">
                        @elseif(in_array($resortId, [8]))
                            <img class="lazyload" data-src="{{ asset('/img/royalcarestandard/simpsonbay-covid.jpg') }}" alt="WE ARE READY AT THE SIMPSON BAY RESORT" title="WE ARE READY AT THE SIMPSON BAY RESORT">
                        @else
                            <img class="lazyload" data-src="{{ asset('/img/royalcarestandard/gel.jpg') }}" alt="The Royal Care Standard" title="The Royal Care Standard">
                        @endif

                        @if(in_array($resortId,[7,8]))
                            <div class="info">
                                <p class="para-a" style="font-size: 25px">
                                    {{__('royalcarestandard.simpsonbay-title')}}
                                </p>
                                <p class="para-c">
                                    {{__('royalcarestandard.simpsonbay-text1')}}
                                </p>
                                <a class="link_offer" href="{{route('royalcarestandard-simpson-bay')}}" title="Royal Care Standard">{{ __('general.view_more') }}</a>
                            </div>
                        @else
                            <div class="info">
                            <p class="para-a">
                                The Royal Care Standard
                            </p>
                            <p class="para-c">
                                {{ __('general.royal_care_standard') }}
                            </p>
                            <a class="link_offer" href="{{route('royalcarestandard')}}" title="Royal Care Standard">{{ __('general.view_more') }}</a>
                        </div>
                            @endif

                </div>
            </div>
        </section>    
    @endif

    @component('parts/resort/individual/rooms-and-suites', [
        'class' => 'resort-container',
        'resort'=>$resort,
        'interna'=>$interna,
        'roomMinRates' => $roomMinRates,
        'flagNewRoom' => $flagNewRoom
    ]) @endcomponent
    
    @if(count($resorts) > 0 )
        @component('v2.parts.resorts.resort-promotions-owl', [
            'mb' => 0, 
            'resorts'=>$resorts]) @endcomponent
    @endif

    @component('parts/resort/individual/restaurants', [
        'resort'=>$resort,
        'interna'=>$interna])@endcomponent

     @component('parts/resort/individual/maps', [
        'resort'=>$resort,
        'allResort'=>$allResort,
        'places'  => $places,
        'location' => $location
    ])@endcomponent

    @component('parts/resort/individual/fact-sheet', [
        'resort'=>$resort,'flags_cert' => $flags_cert,'flag_gnr' => $flag_gnr])@endcomponent

    @component('parts/resort/individual/instagram-feed', [
        'resort'=>$resort])@endcomponent

    {{--@component('parts/resort/schema', [
        'resort'=>$resort])@endcomponent--}}

@endsection