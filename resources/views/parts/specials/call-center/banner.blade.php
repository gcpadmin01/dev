
@php $title = __('special-offer/'.$slug.'.title') 
@endphp

@section('title', __('special-offer/'.$slug.'.title_seo'))
@section('metadescription', __('special-offer/'.$slug.'.metadescription'))

<section>
    <a target="_blanck" href='{{ __('special-offer-call/'.$slug.'.phone') }}'>
        <img src="{{ asset((Agent::isMobile() && !Agent::isTablet()) ? 'img/mobile/deals/'.$slug.'-cc.jpg?v=b' : 'img/deals/big/'.$slug.'-cc.jpg?v=b')}}" alt="Deals" class="img-fluid"></a>
</section>
    