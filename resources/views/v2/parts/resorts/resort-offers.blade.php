@php
    $title= __('resorts/'.$resort.'/deals.title');
    $contenido=  __('resorts/'.$resort.'/deals.description');
    $total_resort=strlen(__('specials/setup/setup.'.$resort));


    //$subtitle = __('resorts/'.$resort.'/deals.subtitle');
    //if ($subtitle == 'resorts/'.$resort.'/deals.subtitle'){
    //    $subtitle = '';
    //}

    $subtitles = __('special-offer/setup/main.subtitles');

    switch($resort){
        case 'royal-uno':
        case 'grand-residences-riviera-cancun':
        case 'the-royal-islander':
            $subtitle = $subtitles[1];
        break;
        
        case 'casa-de-campo':
        case 'the-royal-haciendas':
        case 'the-villas-at-simpson-bay-resort':
             $subtitle = $subtitles[2];
        break;

        case 'simpson-bay-resort':
        case 'the-royal-sands':
        case 'the-royal-sea-aquarium':
        case 'the-royal-cancun':
             $subtitle = $subtitles[0];
        break;
        
    }
@endphp

@section('title', __('resorts/'.$resort.'/deals.seo.title'))
@section('metadescription', __('resorts/'.$resort.'/deals.seo.metadescription'))

<section class="container mb-4">
    <div class="row">
        <div class="col-12">
            <h1 class="h1">{{ $title }}</h1>
            @if ($subtitle != '')
                <h2>{{$subtitle}}</h2>
            @endif
            <p>{!! $contenido !!}</p>
        </div>
    </div>
</section>

<section class="container">
    <div class="col-12 mb-5">
        <h2 class="text-center h1">{{__('special-offer/setup/main.subtitulo2')}}</h2>
    </div>

    <div class="col-12 mb-5 bg-light-gray">
        <div class="row">
            @foreach($resorts as $resort)
                <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3">
                    @include('v2.cards.concept-resort', [$resort])
                </div>
                {{--
                @include('v2.modals.resort-concept', ['resort' => $resort])
                @include('v2.bookings.resort-concept', ['resort' => $resort])
                --}}
            @endforeach
        </div>
    </div>
</section>
 