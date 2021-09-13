
<?php
    $critical = Config::get('ccss.desktop.experience');
    if (\Agent::isMobile() || \Agent::isTablet()){
        $critical = Config::get('ccss.mobile.experience');
    }
?>

@push('scripts')
    <script src="{{ mix('js/vacations.js') }}" integrity="{{ Sri::hash(mix('js/vacations.js')) }}" crossorigin="anonymous"></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/destinations-intern.css') }}" integrity="{{ Sri::hash(mix('css/destinations-intern.css')) }}" crossorigin="anonymous">
@endpush

@extends('/interna',['critical' => $critical])


@php $meta="" @endphp

@switch($trip)
    @case('wellness-and-spa-resorts-in-the-caribbean')
    @case('hoteles-en-el-caribe-con-spa')
        @php $meta=__('general.vacations.meta');@endphp
    @break
@endswitch

@section("metadescription",$meta)

@section('interna')
    @component('parts/extras/breadcrum-level-3b', ['page'=>'vacation-experiences','subinterna'=>$trip, 'class' => 'pading-header'])@endcomponent

    <section class="container">
        @component('parts/type-of-trips/golf/info', ['trip'=>$trip]) @endcomponent
        @component('parts/type-of-trips/golf/tabs', ['trip'=>$trip]) @endcomponent
        @component('parts/type-of-trips/golf/grid') @endcomponent
    </section>

    @if(count($resorts) > 0 )
        <div class="container mb-5">
            <div id="resort-destino" class="row no-gutters owl-carousel bg-light-gray  p-3">
                @foreach($resorts as $item)
                    @include('v2.cards.resort-concept-owl-carousel',['resort' => $item, 'validThru' => true])
                @endforeach
            </div>
        </div>
    @endif

    <div id="projects-hidden" style="display:none"></div>

    @php
        $meta="";
    @endphp

    @switch($trip)
        @case('caribbean-family-vacations')
            @php $valorSeccion="caribbean-family-vacations"; @endphp
            @break
        @case('vacaciones-familiares-al-caribe')
            @php $valorSeccion="caribbean-family-vacations"; @endphp
            @break                
        @case('romantic-getaway-in-the-caribbean')
            @php $valorSeccion="romantic-getaway-in-the-caribbean"; @endphp
            @break
        @case('escape-romantico-al-caribe')
            @php $valorSeccion="romantic-getaway-in-the-caribbean"; @endphp
            @break                
        @case('top-adventure-destinations-in-the-caribbean')
            @php $valorSeccion="top-adventure-destinations-in-the-caribbean"; @endphp
            @break
        @case('los-mejores-destinos-de-aventura-en-el-caribe')
            @php $valorSeccion="top-adventure-destinations-in-the-caribbean";@endphp
            @break                
        @case('wellness-and-spa-resorts-in-the-caribbean')
            @php $meta=__('general.vacations.meta'); $valorSeccion="wellness-and-spa-resorts-in-the-caribbean"; @endphp
            @break
        @case('hoteles-en-el-caribe-con-spa')
            @php $meta=__('general.vacations.meta'); $valorSeccion="wellness-and-spa-resorts-in-the-caribbean"; @endphp
            @break
        @case('honeymoon-destinations-in-the-caribbean')
            @php $valorSeccion="honeymoon-destinations-in-the-caribbean"; @endphp
            @break
        @case('destinos-de-luna-de-miel-en-el-caribe')
            @php $valorSeccion="honeymoon-destinations-in-the-caribbean"; @endphp
            @break
        @case('caribbean-golf-trip')
            @php $valorSeccion="caribbean-golf-trip"; @endphp
            @break
        @case('vacaciones-golf-en-el-caribe')
            @php $valorSeccion="caribbean-golf-trip"; @endphp
            @break
        @case('business-and-meetings-in-caribbean-resorts')
            @php $valorSeccion="business-and-meetings-in-caribbean-resorts"; @endphp
            @break
        @case('hoteles-en-el-caribe-para-reuniones-y-negocios')
            @php $valorSeccion="business-and-meetings-in-caribbean-resorts"; @endphp
            @break        
        @default
            @php $valorSeccion=""; @endphp
    @endswitch

    @component('/parts/scripts', ['section'=>'Vacation Experiences', 'page'=>$valorSeccion]) @endcomponent

@endsection