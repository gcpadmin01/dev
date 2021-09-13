@section('title', __('resorts/'.$resort.'/gallery.seo.title'))
@section('metadescription', __('resorts/'.$resort.'/gallery.seo.metadescription'))

@php
    $subtitle = __('resorts/'.$resort.'/gallery.subtitle');
    if ($subtitle == 'resorts/'.$resort.'/gallery.subtitle') {
        $subtitle = '';
    }
@endphp
<section class="container mb-4">
    <div class="row">
        <div class="col-12">
            <h1 class="h1">{{__('resorts/'.$resort.'/gallery.title')}}</h1>
            @if($subtitle != '')
                <h2>{{$subtitle}}</h2>
            @endif
            <p>{!!__('resorts/'.$resort.'/gallery.content')!!}</p>
        </div>
    </div>
</section>