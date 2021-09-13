<?php
    if(isset($atribs)){
        if($atribs == 'habitaciones'){
            $critical = Config::get('ccss.desktop.room');
            if (\Agent::isMobile() || \Agent::isTablet()){
                $critical = Config::get('ccss.mobile.room');
            }
        }
    }

    $newRoom     = ["the-villas-at-simpson-bay-resort"];
    $flagNewRoom = in_array($resort,$newRoom);
?>

@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@push("css")
    <style>
        .title-resort-min{
            font-weight: 400;
            font-style: italic;
            color:#262b2c;
            font-size: 13px;
        }
    </style>
@endpush

@section('interna')
    @component('parts/resort/individual/links', [
        'atribs' => $atribs,
        'resort' => $resort,
        'interna' => $interna,
        'subinterna' => $subinterna,
        'rhome' => $rhome,
        'rooms' => $rooms,
        'specials' => $specials,
        'reviews' => $reviews,
        'restaurants' => $restaurants,
        'amenities' => $amenities,
        'gallery' => $gallery]) 
    @endcomponent
    
    @component('parts/extras/breadcrum-level-4', [
        'page' => 'beach-resorts',
        'resort' => $resort,
        'interna' => $interna,
        'subinterna' => $atribs, 
        'rhome' => $rhome]) 
    @endcomponent

    @component('parts/resort/individual/rooms/content-rooms', ['resort'=>$resort]) @endcomponent
    
    @component('parts/resort/individual/rooms/carousel-rooms', [
        'resort' => $resort,
        'roomMinRates' => $roomMinRates,
        'flagNewRoom' => $flagNewRoom
    ])
    @endcomponent

    @component('/parts/scripts', ['section'=>$valorSeccion, 'page'=>$resort]) @endcomponent

    
@endsection