@php
    $img_temp_0 = __('destinations/'.$destino.'.food.image');
    $img0=asset('img/'.$destino.'/'.$img_temp_0);
@endphp
<section class="container pb-4 food-destinations">
    <div class="row no-gutters">
        <div class="col-12 text-center">
            <h2 class="pb-4">{{ __('general.lb_food') }}</h2>
        </div>
    </div>
    <div class="row no-gutters box-img" style="">
        <div class="col-12">
            <img data-src="{{$img0}}" class="lazyload d-lg-none w-100" alt="{{ __('destinations/'.$destino.'.food.title') }}">
        </div>
        <div class="col-12 col-lg-5 d-flex justify-content-center align-items-center desc" style="">
            <div class="p-3">
                <h4 class="title">{{ __('destinations/'.$destino.'.food.title') }}</h4>
                <p class="text text-justify">{!! __('destinations/'.$destino.'.food.description') !!}</p>
            </div>
        </div>
        <div class="col-12 col-lg-7 d-none d-sm-flex  img-rg lazyload" data-src="{{ $img0 }}" data-webp="{{__webp($img0)}}"></div>
    </div>
</section>