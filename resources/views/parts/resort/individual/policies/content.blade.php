@section('title', __('resorts/'.$resort.'/policies.seo.title'))
@section('metadescription', __('resorts/'.$resort.'/policies.seo.metadescription'))

<section class="container">
    <div class="row no-gutters mb-5">
        <div class="col-12 ">
            <h1 class="h1 text-uppercase">{{ __('resorts/'.$resort.'/policies.title') }}</h1>
            <p>
                {!! __('resorts/'.$resort.'/policies.content') !!}
            </p>
        </div>
    </div>
</section>