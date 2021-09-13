@php
    $GMSClient = resolve('App\GMS\GMSClient');
    $title = __('specials.title');
    $subtitle = __('specials.subtitle');
    $description = __('specials.description');

    if (!$GMSClient->isGuest() ) {
        $description = __('specials.gms.description');        
    }
    $lang=App::getLocale();
@endphp
@section('title', __('specials.seo.title'))
@section('metadescription', __('specials.seo.metadescription'))


@push('opengraph')
    <meta property="og:description" content="{{__('specials.seo.metadescription')}}" />
    <meta property="og:title" content="{{__('specials.seo.title')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('img/deals/big/deals-hotel-'.$lang.'.jpg?v=0')}}" />
    <meta property="og:image:height" content="1920" />
    <meta property="og:image:width" content="400" />
@endpush

<section class="container mb-5">
    <div class="row no-gutters">
        <div class="col-12">
            <h1 class="h1">{{ $title }}</h1>
            <h2 class="h2">{{ $subtitle }}</h2>
            <p class="p1">{{ $description }}</p>
        </div>
    </div>
</section>
