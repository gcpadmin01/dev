@extends('/interna')

@push('scripts')
    <script>var resorts = {!!$location!!};</script>
    <script>var center = '{{$map->coordinate}}'.split(',');</script>
    <
    <script src="{{ mix('js/destinations-intern.js') }}" integrity="{{ Sri::hash('js/destinations-intern.js') }}" crossorigin="anonymous"></script>
    <script src="{{ mix('js/_maps_destination.js') }}" integrity="{{ Sri::hash('js/_maps_destination.js') }}" crossorigin="anonymous"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOHGOzkzJ3h5GSLybxxKp1lqq6S-ITl3Y&callback=initMap" async defer></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/destinations-intern.css') }}" integrity="{{ Sri::hash('css/destinations-intern.css') }}" crossorigin="anonymous">
@endpush

@section('interna')
    @section('title', __('destinations/'.$destino.'.seo.title'))
    @section('metadescription', __('destinations/'.$destino.'.seo.metadescription'))
    @component('/parts/scripts', ['section'=>'Destinations', 'page'=>$destino]) @endcomponent

    @push('opengraph')
        <meta property="og:description" content="{{__('destinations/'.$destino.'.seo.metadescription')}}" />
        <meta property="og:title" content="{{__('destinations/'.$destino.'.seo.title')}}" />
        <meta property="og:type" content="website" />
        <meta property="og:image" content="{{__webp(__('destinations/'.$destino.'.main_photo'))}}" />
        <meta property="og:image:height" content="1920" />
        <meta property="og:image:width" content="630" />
    @endpush

    <section>
        <div class="desk-video">
            <img class="lazyload" data-src="{{__('destinations/'.$destino.'.main_photo')}}" data-webp="{{__webp(__('destinations/'.$destino.'.main_photo'))}}" alt="{{__('general.lb_things_to_do')}} {{ $destino }}" width="100%">
        </div>
        @include('parts.extras.booking-resort',['class' => 'booking-hover'])
    </section>

    @component('parts/extras/breadcrum-level-3', ['page'=>$page,'destino'=>$destino, 'subinterna'=>$subinterna])@endcomponent
    @component('/parts/destination/individual/content-destination', ['destino'=>$destino]) @endcomponent
    @component('/parts/destination/individual/map-destination', ['resorts' => $resorts,'destino'=>$destino]) @endcomponent
    @component('/parts/destination/individual/thingsToDo-destination', ['destino'=>$destino]) @endcomponent
    @component('/parts/destination/individual/food-destination', ['destino'=>$destino]) @endcomponent

    @if(count($resorts) > 0 )
        <div class="row no-gutters">
            <div class="col-12 text-center">
                <h2 class="pb-4">{{__('general.deals_title').' '. __('destinations/'.$destino.'.title')}}</h2>
            </div>
        </div>
        <div class="container mb-4">
            <div class="row no-gutters owl-carousel bg-light-gray  p-3">
                @foreach($resorts as $rst)
                    @include('v2.cards.resort-concept-owl-carousel',['resort' => $rst, 'validThru' => true])
                @endforeach
            </div>
        </div>
        {{--
        @foreach($resorts as $resort)
            @include('v2.modals.picturemodal',['resort' => $resort])
            @include('v2.modals.resort-concept',['resort' => $resort])
            @include('v2.bookings.resort-concept',['resort' => $resort])
        @endforeach
        --}}
    @endif
@endsection
