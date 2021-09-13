
<?php
    if(isset($atribs)){
        if($atribs == 'reviews'){
            $critical = Config::get('ccss.desktop.review');
            if (\Agent::isMobile() || \Agent::isTablet()){
                $critical = Config::get('ccss.mobile.review');
            }
        }
    }
?>

@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush
@section('interna')
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
            'gallery'=>$gallery]) 
    @endcomponent
    @component('parts/extras/breadcrum-level-4', [
        'page'=>'beach-resorts',
        'resort'=>$resort,
        'interna'=>$interna,
        'subinterna'=>$atribs,
        'rhome'=>$rhome]) 
    @endcomponent
    @component('/parts/scripts', [
        'section'=>'Resort Reviews', 
        'page'=>$resort]) 
    @endcomponent
    @component('parts/resort/individual/reviews/title-reviews', ['resort'=>$resort]) @endcomponent
    @component('v2.parts.resorts.item-reviews', [
        'resort'=>$resort,
        'reviewsData' => $reviewsData
    ]) @endcomponent
@endsection