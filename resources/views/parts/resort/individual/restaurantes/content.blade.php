@section('title', __('resorts/'.$resort.'/restaurants.seo.title'))
@section('metadescription', __('resorts/'.$resort.'/restaurants.seo.metadescription'))
@php
    $subtitle = __('resorts/'.$resort.'/restaurants.subtitle_interna_restaurants');
    if ($subtitle == 'resorts/'.$resort.'/restaurants.subtitle_interna_restaurants'){
        $subtitle = '';
    }
@endphp
<section class="">
    <div class="container subinterna">
        <div class="row">
            <div class="col-12">
                <h1 class="h1">{{__('resorts/'.$resort.'/restaurants.title_interna_restaurants')}}</h1>
                @if ($subtitle != '')
                    <h2>{{$subtitle}}</h2>
                @endif
                <p>{{__('resorts/'.$resort.'/restaurants.description_interna_restaurantes')}}</p>
            </div>
        </div>
    </div>
</section>