@php $title = __('specials/'.$slug.'.title') 

@endphp

@section('title', __('specials/'.$slug.'.title_seo'))
@section('metadescription', __('specials/'.$slug.'.metadescription'))

<section>
  <div class="row no-gutters">
    <div class="w-100">
      <div id="" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset((Agent::isMobile() && !Agent::isTablet())? 'img/mobile/deals/'.$slug.'.jpg?v=2':'img/deals/big/'.$slug.'.jpg?v=2')}}" alt="Deals" width="100%" height="100%">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

