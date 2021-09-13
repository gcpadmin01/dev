@section('title', __('type-of-trips/'.$trip.'.seo.title'))
@section('metadescription', __('type-of-trips/'.$trip.'.seo.metadescription'))

@push('opengraph')
    <meta property="og:description" content="{{__('type-of-trips/'.$trip.'.seo.metadescription')}}" />
    <meta property="og:title" content="{{__('type-of-trips/'.$trip.'.seo.title')}}" />
    <meta property="og:type" content="website" />
@endpush

<div class="row no-gutters mb-5">
    <div class="col-12">
        <h1 class="h1">{{__('type-of-trips/'.$trip.'.title')}}</h1>
        <h2>{{__('type-of-trips/'.$trip.'.subtitle')}}</h2>
        @if(Agent::isMobile() && !Agent::isTablet())
            {!!__('type-of-trips/'.$trip.'.content_mobile')!!}
        @else
            {!!__('type-of-trips/'.$trip.'.content')!!}
        @endif
    </div>
</div>
