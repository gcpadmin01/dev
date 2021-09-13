@section('title', __('about-us.seo.title'))
@section('metadescription', __('about-us.seo.metadescription'))
@push('opengraph')
    <meta property="og:description" content="{{__('about-us.seo.metadescription')}}" />
    <meta property="og:title" content="{{__('about-us.seo.title')}}" />
    <meta property="og:type" content="website" />
@endpush
<section class="container py-2">
    <div class="row no-gutters">
        <div class="col-12">
            <h1 class="h1 text-uppercase">{{__('about-us.title')}}</h1>
            <p>
                {!! __('about-us.content') !!}
            </p>
        </div>
    </div>
</section>