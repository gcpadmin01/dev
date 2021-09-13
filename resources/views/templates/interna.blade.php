<?php
    $critical = null;
    if(isset($atribs)){
        if($atribs == 'galeria'){
            $critical = Config::get('ccss.desktop.gallery');
            if (\Agent::isMobile() || \Agent::isTablet()){
                $critical = Config::get('ccss.mobile.gallery');
            }
        }
        if($atribs == 'actividades'){
            $critical = Config::get('ccss.desktop.amenity');
            if (\Agent::isMobile() || \Agent::isTablet()){
                $critical = Config::get('ccss.mobile.amenity');
            }
        }
        if($atribs == 'restaurantes'){
            $critical = Config::get('ccss.desktop.dinning');
            if (\Agent::isMobile() || \Agent::isTablet()){
                $critical = Config::get('ccss.mobile.dinning');
            }
        }
    }
    $flags_cert = [FALSE,FALSE,FALSE,FALSE];
    $flag_gnr   = FALSE;
?>

@extends('/interna',["critical" => $critical])

@php $mdescription = ""; @endphp

@switch($page)
    @case ("beach-resorts")
    @case ("hoteles-de-playa")
        @php $mdescription= App::getLocale()  == "en" ? "":"Ven a vacacionar con un servicio de primera a nuestros hoteles de playa en el paraíso del caribe mexicano o disfruta en las paradisiacas islas del caribe."; @endphp
    @break;
@endswitch

@section("metadescription",$mdescription)

@section('interna')
    @if($page=="resorts-intern" )
        @include('parts.resort.slider',['items' => __('resorts/'.$resort.'/slider')])

        @include('parts.extras.booking-resort',['resort'=>$resort, 'class' => 'booking-hover booking-resort-interna'])
        @component('parts/resort/individual/links',['atribs'=> $atribs, 'resort'=>$resort,'interna'=>$interna,'subinterna'=>$subinterna,'rhome'=>$rhome,'rooms'=>$rooms,'specials'=>$specials,'reviews'=>$reviews,'restaurants'=>$restaurants,'amenities'=>$amenities,'gallery'=>$gallery]) @endcomponent
        @component('/parts/scripts', ['section'=>'', 'page'=>$resort]) @endcomponent
    @endif

    @if( ($page=="destinos-de-playa" || $page=="beach-destinations" ) && $page != 'undefined')
        @component('/parts/scripts', ['section'=>'Destinations', 'page'=>'all destinations']) @endcomponent
        @component('parts/extras/breadcrum-level-2', ['page'=>$page, 'class' => 'pading-header'])@endcomponent
        @component('/parts/destination/general-destination') @endcomponent
    @elseif($page=="destinations-offers")
        @component('/parts/scripts', ['section'=>'Destinations', 'page'=>'offers '.$destino]) @endcomponent
        @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$destino,'subinterna'=>$subinterna, 'class' => 'pading-header'])@endcomponent
        @component('/parts/destination/offer-destination',['destino'=>$destino])
        @endcomponent
    @elseif($page=="destinations-resorts")
        @component('/parts/scripts', ['section'=>'Destinations', 'page'=>'resorts '.$destino]) @endcomponent
        @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$destino,'subinterna'=>$subinterna, 'class' => 'pading-header'])@endcomponent
        @component('/parts/destination/resort-destination',['destino'=>$destino]) @endcomponent
    @elseif($page=="destinations-intern")
        @push('metas')
            <meta name="robots" content="noindex, nofollow">
        @endpush
        @component('/parts/scripts', ['section'=>'Destinations', 'page'=>$destino]) @endcomponent
        <section>
            @component('/parts/destination/individual/foto-destination', ['destino'=>$destino])@endcomponent
        </section>
        @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$destino, 'subinterna'=>$subinterna])@endcomponent
        @component('/parts/destination/individual/content-destination', ['destino'=>$destino]) @endcomponent
        @component('/parts/destination/individual/map-destination', ['destino'=>$destino]) @endcomponent
        @component('/parts/destination/individual/thingsToDo-destination', ['destino'=>$destino]) @endcomponent
        @component('/parts/destination/individual/food-destination', ['destino'=>$destino]) @endcomponent
        @component('/parts/destination/individual/resort-destination', ['destino'=>$destino]) @endcomponent
    @elseif($page=="beach-resorts" || $page=="hoteles-de-playa")
        @component('/parts/scripts', ['section'=>'Resorts', 'page'=>'all resorts']) @endcomponent
        @component('parts/extras/breadcrum-level-2', ['page'=>$page,'class' => 'pading-header'])@endcomponent
        @component('parts/resort/general-resorts') @endcomponent
    @elseif($page=="resorts-intern")
        
        @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$resort,'subinterna'=>$interna])@endcomponent
        @component('parts/resort/individual/all-inclusive-details', ['class' =>'resort-container','resort'=>$resort,'interna'=>$interna,'gallery'=>$gallery,'amenities'=>$amenities]) @endcomponent
        @component('parts/resort/individual/rooms-and-suites', ['class' => 'resort-container','resort'=>$resort,'interna'=>$interna]) @endcomponent
        @component('parts/resort/individual/resort-promotions', ['mb' => 0, 'resort'=>$resort]) @endcomponent
        @component('parts/resort/individual/restaurants', ['resort'=>$resort,'interna'=>$interna])@endcomponent
        @component('parts/resort/individual/fact-sheet', ['resort'=>$resort,'flags_cert' => $flags_cert,'flag_gnr' => $flag_gnr])@endcomponent
        @component('parts/resort/individual/instagram-feed', ['resort'=>$resort])@endcomponent
        @component('parts/resort/schema', ['resort'=>$resort])@endcomponent

        @php $valorSeccion ='about'; @endphp
        @component('/parts/scripts', ['section'=>$valorSeccion, 'page'=>$resort]) @endcomponent
    @elseif($page=="resorts-atrib-allinclusive")
        @if($atribs == 'rate-plans')
            @push('metas')
                <meta name="robots" content="noindex, nofollow">
            @endpush
            @php $valorSeccion ='Resort Rate Plan'; @endphp
            @component('parts/resort/individual/links',['atribs'=> $atribs,'resort'=>$resort,'interna'=>$interna,'subinterna'=>$subinterna,'rhome'=>$rhome,'rooms'=>$rooms,'specials'=>$specials,'reviews'=>$reviews,'restaurants'=>$restaurants,'amenities'=>$amenities,'gallery'=>$gallery]) @endcomponent
            @component('parts/resort/individual/rateplans/banner-resorts',['resort'=>$resort,'interna'=>$interna]) @endcomponent
            @component('parts/resort/individual/rateplans/content-subInterna-resorts',['resort'=>$resort,'interna'=>$interna]) @endcomponent
            @component('parts/resort/individual/rateplans/list-subInterna-resorts',['resort'=>$resort,'interna'=>$interna]) @endcomponent
            @component('/parts/scripts', ['section'=>$valorSeccion, 'page'=>$resort]) @endcomponent
        @endif
	@elseif($page == "resorts-atrib")
        
        @if($atribs == "specials")
             @push('metas')
                <meta name="robots" content="noindex, nofollow">
            @endpush
            @component('parts/resort/individual/offers/slider', ['resort'=>$resort]) @endcomponent
        @endif
		@component('parts/resort/individual/links', ['atribs'=> $atribs,'resort'=>$resort,'interna'=>$interna,'subinterna'=>$subinterna,'rhome'=>$rhome,'rooms'=>$rooms,'specials'=>$specials,'reviews'=>$reviews,'restaurants'=>$restaurants,'amenities'=>$amenities,'gallery'=>$gallery]) @endcomponent
        @component('parts/extras/breadcrum-level-4', ['page'=>'beach-resorts','resort'=>$resort,'interna'=>$interna,'subinterna'=>$atribs,'rhome'=>$rhome]) @endcomponent
        
        @if($atribs=="restaurantes")
            @push('metas')
                <meta name="robots" content="noindex, nofollow">
            @endpush
            @php $valorSeccion='Resort Dining';@endphp
			@component('parts/resort/individual/restaurantes/content', ['resort'=>$resort]) @endcomponent
			@component('parts/resort/individual/restaurantes/grid', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "actividades")
            @push('metas')
                <meta name="robots" content="noindex, nofollow">
            @endpush
            @php $valorSeccion='Resort Activities'; @endphp
			@component('parts/resort/individual/actividades/content', ['resort'=>$resort]) @endcomponent
			@component('parts/resort/individual/actividades/grid', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "habitaciones")
            @php $valorSeccion='Resort Rooms'; @endphp
            @component('parts/resort/individual/rooms/content-rooms', ['resort'=>$resort]) @endcomponent
            @component('parts/resort/individual/rooms/carousel-rooms', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == 'galeria')
            @push('metas')
                <meta name="robots" content="noindex, nofollow">
            @endpush
            @php $valorSeccion='Resort Gallery';@endphp
            @component('parts/resort/individual/galeria/content-galeria', ['resort'=>$resort]) @endcomponent
            @component('parts/resort/individual/galeria/tabs-galeria', ['resort'=>$resort]) @endcomponent
            @component('parts/resort/individual/galeria/images-galeria', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "reviews")
            @php $valorSeccion='Resort Reviews';@endphp
            @component('parts/resort/individual/reviews/title-reviews', ['resort'=>$resort]) @endcomponent
            @component('parts/resort/individual/reviews/item-reviews', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "policies")
            @push('metas')
                <meta name="robots" content="noindex, nofollow">
            @endpush
            @php $valorSeccion='Resort Policies';@endphp
            @component('parts/resort/individual/policies/content', ['resort'=>$resort]) @endcomponent
        @endif
        @if($atribs == "specials")
            @php $valorSeccion='Resort Offers'; @endphp
            @component('parts/resort/individual/offers/resort-offers', ['resort'=>$resort, 'filtro'=>$filtro]) @endcomponent
        @endif
        
        @component('/parts/scripts', ['section'=>$valorSeccion, 'page'=>$resort]) @endcomponent

    @elseif($page=="vacation-experiences" || $page=="experiencias-de-viaje")
        @component('parts/extras/breadcrum-level-2', ['page'=>$page, 'class' => 'pading-header'])@endcomponent
        @component('/parts/type-of-trips/section-types-of-trips') @endcomponent
        @component('/parts/type-of-trips/carousel-types-of-trips') @endcomponent
        @component('/parts/scripts', ['section'=>'Vacation Experiences', 'page'=>'All']) @endcomponent

    @elseif($page=="deals" || $page=="ofertas")
        <div class="deals-hotels">
            @component('/parts/scripts', ['section'=>'Offers', 'page'=>'all offers']) @endcomponent
            @component('parts/specials/bannermain') @endcomponent
            @component('parts/extras/breadcrum-level-2-ext', ['page'=>$page])@endcomponent
            @component('parts/specials/general-specials')@endcomponent
            @component('parts/specials/carrusel-specials')@endcomponent
            @component('parts/specials/oferta-general-specials')@endcomponent
        </div>

    @elseif($page=="sub-inter-special")
        <div class="sub-inter-special">

        </div>

    @elseif($page=="call-center")
        @component('/parts/scripts', ['section'=>'Offers-CC', 'page'=>$slug]) @endcomponent
        @component('parts/specials/call-center/banner', ['slug'=>$slug]) @endcomponent
        @component('parts/specials/call-center/offer-template/info', ['slug'=>$slug])@endcomponent
        @component('parts/specials/call-center/offer-template/rates', ['slug'=>$slug,'filtro'=>$filtro])@endcomponent
        @component('parts/specials/call-center/subIntern/payment')@endcomponent   

    @elseif($page=="tour-packages")
        @component('/parts/tour-packages/general-tour-packages')@endcomponent
        @component('/parts/tour-packages/grid')@endcomponent
	@elseif($page=="tour-packages-intern")
		@component('parts/tour-packages/individual/banner')@endcomponent
		@component('parts/tour-packages/individual/content')@endcomponent
		@component('parts/tour-packages/individual/images-individual-tour-packages')@endcomponent
		@component('parts/tour-packages/individual/package-details')@endcomponent
		@component('parts/tour-packages/individual/more-tours')@endcomponent
    @elseif($page=="about-us" || $page=="acerca-de-nosotros")
        @component('/parts/scripts', ['section'=>'About Us', 'page'=>'about-us']) @endcomponent
        @component('parts/about-us/links',['page'=>$page]) @endcomponent
        @component('parts/extras/breadcrum-level-2', ['page'=>$page])@endcomponent
        @component('parts/about-us/content-about-us')@endcomponent
    @elseif($page=="aboutus-intern" && $isvalid==1)

        @component('parts/about-us/links',['page'=>$page, 'subinterna'=>$area]) @endcomponent
        @component('parts/extras/breadcrum-level-3b', ['page'=>'about-us','subinterna'=>$area])@endcomponent
        @component('parts/about-us/individual/content', ['area'=>$area])@endcomponent

        @switch($area)
            @case('why-book-with-royalreservations')
                @push('metas')
                    <meta name="robots" content="noindex, nofollow">
                @endpush
                @php $valorSeccion="why-book-with-us"; @endphp
                @break
            @case('por-que-reservar-con-royalreservations')
                @push('metas')
                    <meta name="robots" content="noindex, nofollow">
                @endpush
                @php $valorSeccion="why-book-with-us"; @endphp

                @break                
            @case('mejor-oferta-garantizada')
                @push('metas')
                    <meta name="robots" content="noindex, nofollow">
                @endpush
                @php $valorSeccion="best-deal-guaranteed"; @endphp
                @break
            @case('best-deal-guaranteed')
                @push('metas')
                    <meta name="robots" content="noindex, nofollow">
                @endpush
                @php $valorSeccion="best-deal-guaranteed"; @endphp
                @break                
            @case('terminos-de-uso')
                @push('metas')
                    <meta name="robots" content="noindex, nofollow">
                @endpush
                @php $valorSeccion="terms-of-use"; @endphp
                @break
            @case('terms-of-use')
                @push('metas')
                    <meta name="robots" content="noindex, nofollow">
                @endpush
                @php $valorSeccion="terms-of-use";@endphp
                @break                
            @case('politica-de-privacidad')
                @push('metas')
                    <meta name="robots" content="noindex, nofollow">
                @endpush
                @php $valorSeccion="privacy-policy"; @endphp
                @break
            @case('privacy-policy')
                @push('metas')
                    <meta name="robots" content="noindex, nofollow">
                @endpush

                @php $valorSeccion="privacy-policy"; @endphp
                @break
            @default
            @push('metas')
                <meta name="robots" content="noindex, nofollow">
            @endpush
                @php $valorSeccion=""; @endphp
        @endswitch

        @component('/parts/scripts', ['section'=>'About Us', 'page'=>$valorSeccion]) @endcomponent
    @elseif($page=="beach-resorts-webcams" || $page=="webcams-de-hoteles-de-playa")
        @component('parts/extras/breadcrum-level-2', ['page'=>$page])@endcomponent
        @component('parts/webcams/general-webcams') @endcomponent
        @component('parts/webcams/images-webcams') @endcomponent
    @elseif($page=="gallery")
        @component('/parts/gallery/general') @endcomponent
    @elseif($page == "404")
        @component('parts/error/error404') @endcomponent
    @elseif($page == "error404")
        @php
            http_response_code(404);
            $view = view('errors/404');
            echo $view->render();
            die();
        @endphp
        @component('parts/error/error404') @endcomponent
    @else
        @php
            http_response_code(404);
            $view = view('errors/404');
            echo $view->render();
            die();
        @endphp
        @component('parts/error/error404') @endcomponent
    @endif
@endsection

