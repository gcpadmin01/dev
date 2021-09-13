@section('title', __('resorts/'.$resort.'.seo.title'))
@section('metadescription', __('resorts/'.$resort.'.seo.metadescription'))

@php
    $rgallery = __('resorts/'.$resort.'.gallery');
    if(is_string($rgallery)) $rgallery = [];
    $total = count($rgallery);
    $name_image = __('resorts/'.$resort.'/slider')[0];
    $img1 = asset((Agent::isMobile() && !Agent::isTablet())? 'img/mobile/resorts/'.$resort.'/'.$name_image['file']:'img/resorts/'.$resort.'/'.$name_image['file']);
    
    if($resort != 'casa-de-campo'){
        $position = __('resorts/'.$resort.'.webcam_position');
        $webcams  = (object) __('webcams.resorts.'.$position);
    }else{
        $webcams  = null;
    }
    #dump($resort);
    #dump($position);
@endphp

@push('opengraph')
    <meta property="og:description" content="{{__('resorts/'.$resort.'.seo.metadescription')}}" />
    <meta property="og:title" content="{{__('resorts/'.$resort.'.seo.title')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{$img1}}" />
    <meta property="og:image:height" content="{{Agent::isMobile() && !Agent::isTablet()? '375':'1920'}}" />
    <meta property="og:image:width" content="{{Agent::isMobile() && !Agent::isTablet()? '287':'630'}}" />
@endpush

<section class="{{ $class }}">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
                <p class="h1 mb-1">{{__('resorts/'.$resort.'.title')}}</p>
                <p class="e5">
                    {{__('resorts/'.$resort.'.address')}}
                    <span class="icon-map" data-map="{{ __('resorts/'.$resort.'.map')}}">{{__('general.how_to_get')}}</span>
                    @if($webcams != null)
                        <span class="icon-webcam-blue" data-toggle="modal" data-target="#modalWebcams" /> {{__('general.webcam_title')}}</span>
                    @endif
                </p>
                {!!__('resorts/'.$resort.'.description')!!}
                <div class="resort-gallery-container">
                    <div class="resort-gallery">
                        @for($contador=0;$contador<$total;$contador++)
                            @php
                                $imagen = __('resorts/'.$resort.'.gallery.'.$contador);
                                $asset =  asset('img/resorts/'.$resort.'/big/'.$imagen.'.jpg?v=0');
                            @endphp
                            <div>
{{--                                <img class="w-100" data-lazy="{{$asset}}" data-webp="{{__webp($asset)}}" title="{{__('resorts/'.$resort.'.title')}}"  alt="{{__('resorts/'.$resort.'.title')}}"/>--}}
                                <img class="w-100 lazyload" data-src="{{$asset}}" data-webp="{{__webp($asset)}}" title="{{__('resorts/'.$resort.'.title')}}"  alt="{{__('resorts/'.$resort.'.title')}}"/>
                            </div>
                        @endfor
                    </div>
                    <div class="resort-gallery-nav d-none d-md-block">
                        @for($contador=0;$contador<$total;$contador++)
                            @php
                                $imagen = __('resorts/'.$resort.'.gallery.'.$contador);
                                $asset = asset('img/resorts/'.$resort.'/small/'.$imagen.'.jpg');
                            @endphp
                            <div>
                                <img data-lazy="{{$asset}}" data-webp = "{{__webp($asset)}}"
                                     title="{{__('resorts/'.$resort.'.title')}}"
                                     alt="{{__('resorts/'.$resort.'.title')}}" width="214" height="112"/>
                            </div>
                        @endfor
                    </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                    <a href="{{ lang_url("/".__('routes.beach_resorts')."/".$resort."/".$gallery) }}">{{__('general.lb_view_gallery')}}</a>
                </div>
            </div>
            <div class="col-12 col-md-3">
                @php
                    $resort_amenities = __('resorts/'.$resort.'.resort_amenities');
                    $destino = __('resorts/'.$resort.'.destination');
                    $amenityMx = ['Cancun','Playa del Carmen','Riviera Maya'];

                    if(in_array($destino,$amenityMx)){
                        array_pop($resort_amenities);
                        array_push($resort_amenities,__('general.amenities_only_mx')[0]);
                    }

                    $total = is_string($resort_amenities) ? 0 : count($resort_amenities);

                    $offers=__('special-offer/setup/setup.'.$resort);

                    /**
                    ** Validacion temporal para mostrar una imagen personalizada de amenity por resort 
                    **/
                    if(!empty($conceptAmenity)){
                        $amenityImg = $conceptAmenity->content->amenity_img;
                        // if ($conceptAmenity->id == 39) {
                        //     switch ($resort) {
                        //         case 'grand-residences-riviera-cancun':
                        //             $amenityImg = '/img/deals/'.\App::getLocale().'/amenity/grand-residences-riviera-cancun.gif';
                        //             break;
                        //         case 'simpson-bay-resort':
                        //             $amenityImg = '/img/deals/'.\App::getLocale().'/amenity/simpson-bay-resort.gif';
                        //             break;
                        //         case "the-royal-cancun":
                        //             $amenityImg = '/img/deals/'.\App::getLocale().'/amenity/the-royal-cancun.gif';
                        //             break;
                        //         case 'the-royal-haciendas':
                        //             $amenityImg = '/img/deals/'.\App::getLocale().'/amenity/the-royal-haciendas.gif';
                        //             break;
                        //         case 'the-royal-islander':
                        //             $amenityImg = '/img/deals/'.\App::getLocale().'/amenity/the-royal-islander.gif';
                        //             break;
                        //         case 'the-royal-sands':
                        //             $amenityImg = '/img/deals/'.\App::getLocale().'/amenity/the-royal-sands.gif';
                        //             break;
                        //         case 'the-royal-sea-aquarium':
                        //             $amenityImg = '/img/deals/'.\App::getLocale().'/amenity/the-royal-sea-aquarium.gif';
                        //             break;
                        //         case 'the-villas-at-simpson-bay-resort':
                        //             $amenityImg = '/img/deals/'.\App::getLocale().'/amenity/the-villas-at-simpson-bay-resort.gif';
                        //             break;
                        //     }
                        // }
                    }

                @endphp

                <div class="resort-amenities">
                    
                    @if($flagNewRoom == TRUE)
                        <img class="w-100 mb-4 lazyload" data-src="{{asset('/img/deals/tvsb-'.App::getLocale().'-small.jpg')}}" alt="">
                    @elseif(!empty($conceptAmenity))
                        <a href="{{ route('concept.detail', [ 'concepto' => $conceptAmenity->getUrl(\App::getLocale())]) }}">
                            <img class="w-100 mb-4 borde" src="{{ $amenityImg }}" alt="{{ $conceptAmenity->content->title }}" title="{{ $conceptAmenity->content->title }}">
                        </a>
                    @else
                        @if($resort=='royal-uno')
                            <img class="w-100 mb-4 lazyload" data-src="{{asset('/img/deals/banner-royaluno-'.App::getLocale().'.gif?v=2')}}" alt="Beach Caribbean Resorts">
                        @else
                            <img class="w-100 mb-4 borde lazyload" data-src="{{asset('/img/deals/bundle-deals.jpg')}}" alt="Beach Caribbean Resorts">
                        @endif
                    @endif

                    @if(!in_array($resort,['royal-uno','simpson-bay-resort','the-villas-at-simpson-bay-resort','casa-de-campo','the-royal-sea-aquarium']))
                        <p>{!!__('general.checkin.notify')!!}</p>
                    @elseif(!in_array($resort,['royal-uno','casa-de-campo','the-royal-sea-aquarium']))
                         <p>{!!__('general.checkin.tvs')!!}</p>
                    @endif

                    @if($flag_gnr == TRUE)
                        <p id="icon-certf" href="#" aria-label="Certificate"><span class="e7">{{__('resorts/'.$resort.'/fact-sheet.title_certificate')}}</span> <span href="#mark1">{{__('general.certificate.view_title')}}</span></p>
                    @endif

                    <h4 class="e7">{{__('general.lb_amenities')}}</h4>
                    <ul class="e8">
                        @foreach($resort_amenities as $key => $amenity)
                            <li class="amenities-icon amenity-{{ $amenity['icon']}}">
                                {{$amenity['title']}}
                            </li>
                        @endforeach
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
                            <li class="rate-plans-all-inclusive text-md-left">
                            {{ __('general.all_inclusive')}}
                            </li>
                        @endif
                        @if( __('resorts/'.$resort.'.room-onlyB')== 'true')
                            <li class="rate-plans-room-only text-md-left">{{ __('general.room_only')}}
                                @if($resort=='the-royal-sands' || $resort=='the-royal-haciendas')
                                <span class="badge" style="color: #fff;background: #ea5e00; padding: 3px 5px 5px 5px;">{{__('general.new')}}</span>
                                @endif
                            </li>
                        @endif
                        @if( __('resorts/'.$resort.'.bed-breakfastB')== 'true')
                            <li class="rate-plans-bed-breakfast text-md-left">{{ __('general.bed_breakfast')}}
                                @if($resort=='the-royal-sands' || $resort=='the-royal-haciendas')
                                <span class="badge" style="color: #fff;background: #ea5e00; padding: 3px 5px 5px 5px;">{{__('general.new')}}</span>
                                @endif
                            </li>
                        @endif
                    </ul>
                </div>

                <div class="resort-map">
                    <h4 class="e7 mb-4">{{ __('general.map')}}</h4>
                    <div  class="map-iframe">
                        {{-- <iframe src="{{ __('resorts/'.$resort.'.map')}}" frameborder="0" style="border:0"
                                allowfullscreen></iframe> --}}
                        <img class="lazyload w-100" alt="{{__('resorts/'.$resort.'.title')}}" data-src="{{asset('img/maps/min-map/'.$resort.'.png')}}"/>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if($webcams != null && property_exists($webcams, 'name'))
        <div class="modal fade modal-webcams" id="modalWebcams" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content" style="">
                    <div class="modal-header" style="">
                        <div class="w-100 text-center">
                            <h5 class="modal-title av-white  text-uppercase">{{$webcams->name}}</h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            @if(count($webcams->webcam_url) > 1)
                                @foreach ($webcams->webcam_url as $key => $urlimage)
                                    <li class="nav-item">
                                        <a class="nav-link {{$key == 0 ? 'active':''}}" id="home-tab" data-toggle="tab" href="#{{strtolower(preg_replace('/\s/','-',$webcams->button_names[$key]))}}" role="tab" aria-controls="home" data-image="{{$urlimage}}" aria-selected="true">{{$webcams->button_names[$key]}}</a>
                                    </li>
                                @endforeach
                            @else
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#see-webcam" role="tab" aria-controls="home" data-image="{{$webcams->webcam_url[0]}}" aria-selected="true">{{__('webcams.tab_view')}}</a>
                                </li>
                            @endif                              
                        </ul>

                        <div class="tab-content" id="myTabContent">
                            @if(count($webcams->webcam_url) > 1)
                                @foreach ($webcams->webcam_url as $key => $urlimage)
                                    <div class="tab-pane {{$key == 0 ? 'fade show active':'fade'}}" id="{{strtolower(preg_replace('/\s/','-',$webcams->button_names[$key]))}}" role="tabpanel" aria-labelledby="{{strtolower(preg_replace('/\s/','-',$webcams->button_names[$key]))}}">
                                        <img class="img-fluid lazyload" data-src="{{$urlimage}}" alt="{{__('resorts/'.$resort.'.title')}}">
                                    </div>
                                @endforeach
                            @else
                                <div class="tab-pane fade show active" id="see-webcam" role="tabpanel" aria-labelledby="see-webcam">
                                        <img class="img-fluid lazyload" data-src="{{$webcams->webcam_url[0]}}" alt="{{__('resorts/'.$resort.'.title')}}">
                                    </div>
                            @endif
                        </div>
                        <p class="text-right">{{__('webcams.text_refresh_image')}}</p>
                    </div>
                </div>
            </div>
        </div>
    @endif
</section>
