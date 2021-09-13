{{--
    Caja de concept
--}}
@php
    if (!isset($lazyload)) {
        $lazyload = false;
    }

    $GMSClient = resolve('App\GMS\GMSClient');
@endphp
<div class="card card-specials">
    <a href="{{ route('concept.detail',['concepto' => $concept->getUrl(\App::getLocale())])}}" aria-label="{{ $concept->content->box_title }}">
        @if($lazyload == true)
            <img class="w-100 owl-lazy" data-src="{{ $concept->content->img }}" alt="{{ $concept->content->title }}" title="{{ $concept->content->title }}">
        @else
            <img class="w-100 lazyload" data-src="{{ $concept->content->img }}" alt="{{ $concept->content->title }}" title="{{ $concept->content->title }}">
        @endif
    </a>
    <div class="card-body">
        <a href="{{ route('concept.detail',['concepto' => $concept->getUrl(\App::getLocale())])}}">
            <p class="card-title">{{ $concept->content->box_title }}</p>
        </a>
        <p class="card-subtitle icon-offer {{ (!$GMSClient->isGuest() && $concept->has_private_offer)? 'icon-offer-gms' : '' }}">
            {{ $concept->content->box_subtitle }}
        </p>
        <p class="card-text text-justify mb-2">
            {{ $concept->content->box_description }}
        </p>
    </div>
    <a class="view-more" href="{{ route('concept.detail',['concepto' => $concept->getUrl(\App::getLocale())])}}">
        {{ __('general.view_more')}}
    </a>
</div>