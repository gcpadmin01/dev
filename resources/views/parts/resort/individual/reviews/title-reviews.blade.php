@section('title', __('resorts/'.$resort.'/reviews.seo.title'))
@section('metadescription', __('resorts/'.$resort.'/reviews.seo.metadescription'))
@php
    $subtitle  = __('resorts/'.$resort.'/reviews.subtitle_interna_reviews');
    if($subtitle == 'resorts/'.$resort.'/reviews.subtitle_interna_reviews'){
        $subtitle = '';
    }
@endphp
<section class="container">
    <div class="row">
        <div class="col-12">
            <h1 class="h1">{{ __('resorts/'.$resort.'/reviews.title_interna_reviews') }}</h1>
            @if($subtitle != '')
                <h2>{{$subtitle}}</h2>
            @endif
        </div>
    </div>
</section>