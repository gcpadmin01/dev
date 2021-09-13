<?php
    if(isset($atribs)){
        if($atribs == 'specials'){
            $critical = Config::get('ccss.desktop.deal');
            if (\Agent::isMobile() || \Agent::isTablet()){
                $critical = Config::get('ccss.mobile.deal');
            }
        }
    }
?>

@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@section('interna')
    @component('parts/resort/individual/offers/slider', [
        'resort' => $resort]) @endcomponent

    @component('parts/resort/individual/links', [
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
        'gallery'=>$gallery]) @endcomponent

    @component('parts/extras/breadcrum-level-4', [
        'page'=>'beach-resorts',
        'resort'=>$resort,
        'interna'=>$interna,
        'subinterna'=>$atribs,
        'rhome'=>$rhome]) @endcomponent

    @component('/parts/scripts', [
        'section'=>'Resort Offers', 
        'page'=>$resort]) @endcomponent

    @component('v2.parts.resorts.resort-offers', [
        'resort'=>$resort, 
        'filtro'=>$filtro,
        'resorts' => $resorts]) @endcomponent
@endsection