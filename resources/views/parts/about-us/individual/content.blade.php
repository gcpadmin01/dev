@section('title', __('about-us/'.$area.'.seo.title'))
@section('metadescription', __('about-us/'.$area.'.seo.metadescription'))

@push('opengraph')
    <meta property="og:description" content="{{__('about-us/'.$area.'.seo.metadescription')}}" />
    <meta property="og:title" content="{{__('about-us/'.$area.'.seo.title')}}" />
    <meta property="og:type" content="website" />
@endpush

<section class="container">
    <div class="row no-gutters pb-4">
        <div class="col-12">
            <h1 class="h1 text-uppercase">{{__('about-us/'.$area.'.title')}}</h1>
            <p>
                {!! __('about-us/'.$area.'.content') !!}
            </p>
        </div>
    </div>
</section>