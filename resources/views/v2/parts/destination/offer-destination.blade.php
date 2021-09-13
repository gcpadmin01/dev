@php
    $title= __('destinations/'.$destino.'-offers.title');
    $destination = __('destinations/'.$destino.'.title');
    $subtitle = __('destinations/'.$destino.'-offers.subtitle');
    if($subtitle == 'destinations/'.$destino.'-offers.subtitle'){
        $subtitle = "";
    }

    $contenido= __('destinations/'.$destino.'-offers.content');
@endphp

@section('title', __('destinations/'.$destino.'-offers.seo.title'))
@section('metadescription', __('destinations/'.$destino.'-offers.seo.metadescription'))

<section class="container ">
    <div class="row no-gutters mb-2">
        <div class="col-12 ">
            <h1 class="h1 text-uppercase">
                {{ $title }}
            </h1>
            @if ($subtitle != '')
                <h2>{{$subtitle}}</h2>
            @endif
            <p>{!! $contenido !!}</p>
        </div>
    </div>
    
    <div class="row no-gutters">
        <div class="col-12">
            <h2>{{__('general.deals_title').' '.$destination}}</h2>
        </div>
    </div>

    <div class="col-12 mb-5 bg-light-gray">
        <div class="row">
            @foreach($resorts as $resort)
                <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3">
                    @include('v2.cards.resort-concept',['resort' => $resort, 'validThru' => true])
                </div>

                {{--
                @include('v2.modals.picturemodal',['resort' => $resort])
                @include('v2.modals.resort-concept',['resort' => $resort])
                @include('v2.bookings.resort-concept',['resort' => $resort])
                --}}
            @endforeach
        </div>
    </div>


</section>
