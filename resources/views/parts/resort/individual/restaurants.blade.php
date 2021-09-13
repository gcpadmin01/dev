@php
    $total_restaurants= count( __('resorts/'.$resort.'/restaurants.restaurants') );
    if($total_restaurants>4){ $total_restaurants=4; }
    $long=0;
@endphp

<section class="restaurants-section resort-container">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="h2">{{__('resorts/'.$resort.'/restaurants.title')}}</h2>
                <p>{{__('resorts/'.$resort.'/restaurants.content')}}</p>
            </div>
            <div class="restaurants-nav col-12 slick">
                @for($i=0;$i<$total_restaurants;$i++)
                    @php $long= __('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.long'); @endphp
                    <span class="title"> {{__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.name')}}</span>
                @endfor
            </div>

            <div class="col-12 restaurants-tabs slick-content mb-4">
                @for($i=0;$i<$total_restaurants;$i++)
                    @php $img= asset('img/resorts/'.$resort.'/dining/'.__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.image')); @endphp
                    <div class="toDo-destination">
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-12 description-image d-sm-flex justify-content-end lazyload" data-src="{{ $img }}" data-webp="{{__webp($img)}}">
                                <img data-src="{{$img}}" data-webp="{{__webp($img)}}" class="d-lg-none w-100 lazyload" alt="{{__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.name')}}">
                            </div>
                            <div class="description-text col-lg-5 col-12 d-flex justify-content-center align-items-center">
                                <div class="p-3">
                                    <h4 class="title">{{__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.name')}}</h4>
                                    <p class="text-justify">{!!__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.excerpt')!!}</p>
                                    <p class="restaurant-open mb-0 mb-md-auto">{!!__('resorts/'.$resort.'/restaurants.restaurants.'.$i.'.open')!!}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="col-12 text-right">
                <a href="{{ __('resorts/'.$resort.'/restaurants.all_restaurants') }}">
                    {{__('general.view_all')}}
                </a>
            </div>
        </div>
    </div>
</section>