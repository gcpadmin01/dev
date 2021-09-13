@section('title', __('resorts/'.$resort.'.seo.title'))
@section('metadescription', __('resorts/'.$resort.'.seo.metadescription'))

<section class="{{ $class }}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <p class="h1 mb-1">{{__('resorts/'.$resort.'.title')}}</p>
                <p class="e5">
                    {{__('resorts/'.$resort.'.address')}}
                    <span class="icon-map" data-map="{{ __('resorts/'.$resort.'.map')}}">{{__('general.how_to_get')}}</span>
                </p>
                {!!__('resorts/'.$resort.'.description')!!}
                <div class="resort-gallery-container">
                    <ul class="resort-gallery">
                        @php
                            $rgallery = __('resorts/'.$resort.'.gallery');
                            if(is_string($rgallery)) $rgallery = [];
                            $total = count($rgallery);
                        @endphp

                        @for($contador=0;$contador<$total;$contador++)
                            @php $imagen = __('resorts/'.$resort.'.gallery.'.$contador); @endphp
                            <li>
                                <img class="w-100" src="{{asset('img/resorts/'.$resort.'/big/'.$imagen.'.jpg')}}"
                                     title="{{__('resorts/'.$resort.'.title')}}"
                                     alt="{{__('resorts/'.$resort.'.title')}}"/>
                            </li>
                        @endfor
                    </ul>
                    <ul class="resort-gallery-nav d-none d-md-block">
                        @for($contador=0;$contador<$total;$contador++)
                            @php $imagen = __('resorts/'.$resort.'.gallery.'.$contador); @endphp
                            <li>
                                <img src="{{asset('img/resorts/'.$resort.'/small/'.$imagen.'.jpg')}}"
                                     title="{{__('resorts/'.$resort.'.title')}}"
                                     alt="{{__('resorts/'.$resort.'.title')}}" width="214" height="112"/>
                            </li>
                        @endfor
                    </ul>
                </div>
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ lang_url("/".__('routes.beach_resorts')."/".$resort."/".$gallery) }}">{{__('general.lb_view_gallery')}}</a>
                </div>
            </div>
            <div class="col-12 col-md-3">
                @php
                    $resort_amenities = __('resorts/'.$resort.'.resort_amenities');
                    $total = is_string($resort_amenities) ? 0 : count($resort_amenities);

                    $offers=__('special-offer/setup/setup.'.$resort);
                @endphp

                <div class="resort-amenities">
                    
                    @if(is_array($offers))

                        @php
                            $slug_oferta=__('special-offer/setup/setup.'.$resort.'.0.slug');
                            $file=__('special-offer/'.$slug_oferta.'.file');
                            $img_small="img/deals/".$slug_oferta.".".$file."?v=".time();
                        @endphp
                    <a href="{{lang_url("/".__('routes.deals').'/'.__('routes.hotels').'/'.$slug_oferta)}}">
                    <img class="w-100 mb-4 borde" src="{{asset($img_small)}}" alt="{{__('special-offer/'.$slug_oferta.'.alt_banner')}}" title="{{__('special-offer/'.$slug_oferta.'.alt_banner')}}">
                    </a>
                    @else
                        @if($resort=='royal-uno')
                            <img class="w-100 mb-4 lazyload" data-src="{{asset('/img/deals/banner-royaluno-'.App::getLocale().'.gif')}}" alt="Beach Caribbean Resorts">
                        @else
                        <img class="w-100 mb-4 borde lazyload" data-src="{{asset('/img/deals/bundle-deals.jpg')}}" alt="Beach Caribbean Resorts">
                        @endif
                    @endif
                    <h4 class="e7">{{__('general.lb_amenities')}}</h4>
                    <ul class="e8">
                        @for ($i=0;$i<$total;$i++)
                            <li class="amenities-icon amenity-{{ __('resorts/'.$resort.'.resort_amenities.'.$i.'.icon')}}">
                                {{--<li class="amenities-icon amenity-non-motorized">--}}
                                {{ __('resorts/'.$resort.'.resort_amenities.'.$i.'.title')}}
                            </li>

                        @endfor
                    </ul>
                    <a class="text-right view-all"
                       href="{{ lang_url("/".__('routes.beach_resorts')."/".$resort."/".$amenities) }}">
                        {{ __('general.view_allFem')}}
                    </a>
                </div>

                <div class="resort-rate-plans d-flex flex-column justify-content-md-start justify-content-end">
                    <h4 class="e7">{{ __('general.rate_plans')}}</h4>
                    <ul class="e8">
                        @if( __('resorts/'.$resort.'.all-inclusiveB') == 'true')
                            <li class="rate-plans-all-inclusive text-md-left">{{ __('general.all_inclusive')}}</li>
                        @endif
                        @if( __('resorts/'.$resort.'.room-onlyB')== 'true')
                            <li class="rate-plans-room-only text-md-left">{{ __('general.room_only')}}</li>
                        @endif
                        @if( __('resorts/'.$resort.'.bed-breakfastB')== 'true')
                            <li class="rate-plans-bed-breakfast text-md-left">{{ __('general.bed_breakfast')}}</li>
                        @endif
                    </ul>
                </div>

                <div class="resort-map">
                    <h4 class="e7 mb-4">{{ __('general.map')}}</h4>
                    <div class="map-iframe">
                        <iframe src="{{ __('resorts/'.$resort.'.map')}}" frameborder="0" style="border:0"
                                allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
