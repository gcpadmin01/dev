<section class="container pb-4">
    <div class="row">
        <div class="col-12 text-center">
            <h2 class="pb-4">{{__('destinations/'.$destino.'.title_sec')}}</h2>
        </div>

        <div class="carousel-destination col-12 slick ">
            <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center">
                <img class="lazyload" data-src="{{ __('destinations/'.$destino.'.things_to_do.0.icon') }}" alt="{{ __('destinations/'.$destino.'.things_to_do.0.title') }}">
                <h3 class="span">{{ __('destinations/'.$destino.'.things_to_do.0.title') }}</h3>
            </div>
            <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center">
                <img class="lazyload" data-src="{{ __('destinations/'.$destino.'.things_to_do.1.icon') }}" alt="{{ __('destinations/'.$destino.'.things_to_do.1.title') }}">
                <h3 class="span">{{ __('destinations/'.$destino.'.things_to_do.1.title') }}</h3>
            </div>
            <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center">
                <img class="lazyload" data-src="{{ __('destinations/'.$destino.'.things_to_do.2.icon') }}" alt="{{ __('destinations/'.$destino.'.things_to_do.2.title') }}">
                <h3 class="span">{{ __('destinations/'.$destino.'.things_to_do.2.title') }}</h3>
            </div>
            <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center">
                <img class="lazyload" data-src="{{ __('destinations/'.$destino.'.things_to_do.3.icon') }}" alt="{{ __('destinations/'.$destino.'.things_to_do.3.title') }}">
                <h3 class="span">{{ __('destinations/'.$destino.'.things_to_do.3.title') }}</h3>
            </div>
            <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center">
                <img class="lazyload" data-src="{{ __('destinations/'.$destino.'.things_to_do.4.icon') }}" alt="{{ __('destinations/'.$destino.'.things_to_do.4.title') }}">
                <h3 class="span">{{ __('destinations/'.$destino.'.things_to_do.4.title') }}</h3>
            </div>
            <div class="py-2 d-flex align-items-center justify-content-end flex-column text-center">
                <img class="lazyload" data-src="{{ __('destinations/'.$destino.'.things_to_do.5.icon') }}" alt="{{ __('destinations/'.$destino.'.things_to_do.5.title') }}">
                <h3 class="span">{{ __('destinations/'.$destino.'.things_to_do.5.title') }}</h3>
            </div>
        </div>
        @php
            $img_temp_0=__('destinations/'.$destino.'.things_to_do.0.image');
            $img_temp_1=__('destinations/'.$destino.'.things_to_do.1.image');
            $img_temp_2=__('destinations/'.$destino.'.things_to_do.2.image');
            $img_temp_3=__('destinations/'.$destino.'.things_to_do.3.image');
            $img_temp_4=__('destinations/'.$destino.'.things_to_do.4.image');
            $img_temp_5=__('destinations/'.$destino.'.things_to_do.5.image');

            $img0=asset('img/'.$destino.'/'.$img_temp_0);
            $img1=asset('img/'.$destino.'/'.$img_temp_1);
            $img2=asset('img/'.$destino.'/'.$img_temp_2);
            $img3=asset('img/'.$destino.'/'.$img_temp_3);
            $img4=asset('img/'.$destino.'/'.$img_temp_4);
            $img5=asset('img/'.$destino.'/'.$img_temp_5);
        @endphp
        <div class="col-12 content-carousel-destination slick-content">
            <div class="toDo-destination">
                <div class="row no-gutters">
                    <div class="col-lg-7 col-12 description-image d-none d-sm-flex justify-content-end lazyload" data-src="{{ $img0 }}" data-webp="{{__webp($img0)}}">
                        <img  data-src="{{$img0}}" data-webp="{{__webp($img0)}}" class="d-lg-none w-100 lazyload" alt="{{ __('destinations/'.$destino.'.things_to_do.0.title') }}" >
                    </div>
                    <div class="description-text col-lg-5 col-12 d-flex justify-content-center align-items-center">
                        <div class="p-3">
                            <h4 class="title">{{ __('destinations/'.$destino.'.things_to_do.0.title') }}</h4>
                            <p class="text text-justify">{!! __('destinations/'.$destino.'.things_to_do.0.descriptions') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toDo-destination">
                <div class="row no-gutters">
                    <div class="col-lg-7 col-12 description-image d-none d-sm-flex justify-content-end lazyload" data-src="{{ $img1 }}" data-webp="{{__webp($img1)}}">
                        <img data-src="{{$img1}}" data-webp="{{__webp($img1)}}" class="lazyload d-lg-none w-100" alt="{{ __('destinations/'.$destino.'.things_to_do.1.title') }}" >
                    </div>
                    <div class="description-text col-lg-5 col-12 d-flex justify-content-center align-items-center">
                        <div class="p-3">
                            <h4 class="title">{{ __('destinations/'.$destino.'.things_to_do.1.title') }}</h4>
                            <p class="text text-justify">{!! __('destinations/'.$destino.'.things_to_do.1.descriptions') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toDo-destination">
                <div class="row no-gutters">
                    <div class="col-lg-7 col-12 description-image d-none d-sm-flex justify-content-end lazyload" data-src="{{ $img2 }}" data-webp="{{__webp($img2)}}">
                        <img data-src="{{$img2}}" data-webp="{{__webp($img2)}}" class="lazyload d-lg-none w-100" alt="{{ __('destinations/'.$destino.'.things_to_do.2.title') }}">
                    </div>
                    <div class="description-text col-lg-5 col-12 d-flex justify-content-center align-items-center">
                        <div class="p-3">
                            <h4 class="title">{{ __('destinations/'.$destino.'.things_to_do.2.title') }}</h4>
                            <p class="text text-justify">{!! __('destinations/'.$destino.'.things_to_do.2.descriptions') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toDo-destination">
                <div class="row no-gutters">
                    <div class="col-lg-7 col-12 description-image d-none d-sm-flex justify-content-end lazyload" data-src="{{ $img3 }}" data-webp="{{__webp($img3)}}">
                        <img data-src="{{$img3}}" data-webp="{{__webp($img3)}}" class="lazyload d-lg-none w-100" alt="{{ __('destinations/'.$destino.'.things_to_do.3.title') }}">
                    </div>
                    <div class="description-text col-lg-5 col-12 d-flex justify-content-center align-items-center">
                        <div class="p-3">
                            <h4 class="title">{{ __('destinations/'.$destino.'.things_to_do.3.title') }}</h4>
                            <p class="text text-justify">{!! __('destinations/'.$destino.'.things_to_do.3.descriptions') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toDo-destination">
                <div class="row no-gutters">
                    <div class="col-lg-7 col-12 description-image d-none d-sm-flex justify-content-end lazyload" data-src="{{ $img4 }}" data-webp="{{__webp($img4)}}">
                        <img data-src="{{$img4}}" data-webp="{{__webp($img4)}}" class="lazyload d-lg-none w-100" alt="{{ __('destinations/'.$destino.'.things_to_do.4.title') }}">
                    </div>
                    <div class="description-text col-lg-5 col-12 d-flex justify-content-center align-items-center">
                        <div class="p-3">
                            <h4 class="title">{{ __('destinations/'.$destino.'.things_to_do.4.title') }}</h4>
                            <p class="text text-justify">{!! __('destinations/'.$destino.'.things_to_do.4.descriptions') !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="toDo-destination">
                <div class="row no-gutters">
                    <div class="col-lg-7 col-12 description-image d-none d-sm-flex justify-content-end lazyload" data-src="{{ $img5 }}" data-webp="{{__webp($img5)}}">
                        <img data-src="{{$img5}}" data-webp="{{__webp($img5)}}" class="lazyload d-lg-none w-100" alt="{{ __('destinations/'.$destino.'.things_to_do.5.title') }}">
                    </div>
                    <div class="description-text col-lg-5 col-12 d-flex justify-content-center align-items-center">
                        <div class="p-3">
                            <h4 class="title">{{ __('destinations/'.$destino.'.things_to_do.5.title') }}</h4>

                            @if($destino == 'cancun')
                                <p class="text text-justify">{!! __('general.cancun_only_place_interesting') !!}</p>
                            @else
                                <p class="text text-justify">{!! __('destinations/'.$destino.'.things_to_do.5.descriptions') !!}</p>
                            @endif


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>