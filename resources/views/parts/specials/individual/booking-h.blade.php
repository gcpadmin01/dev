
@php 
	$title = __('special-offer/'.$slug.'.title');
	$file = __('special-offer/'.$slug.'.file');
@endphp

@section('title', __('special-offer/'.$slug.'.title_seo'))
@section('metadescription', __('special-offer/'.$slug.'.metadescription'))

<section>
    <img src="{{ asset((Agent::isMobile() && !Agent::isTablet()) ? 'img/mobile/deals/'.$slug.'.'.$file : 'img/deals/big/'.$slug.'.'.$file)}}" alt="{{__('special-offer/'.$slug.'.alt_banner')}}" title="{{__('special-offer/'.$slug.'.alt_banner')}}" class="img-fluid w-100">
</section>
