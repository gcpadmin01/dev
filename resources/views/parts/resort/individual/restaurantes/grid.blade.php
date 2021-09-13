@php
    $total_restaurants = count( __('resorts/'.$resort.'/restaurants.restaurants') );
    $flag=1;
    $count = 0;
@endphp

<section class="sec-restaurants">
    <div class="container px-2 p-m-0">
        <div class="mosaic-wrapper">
            @php $class = "mosaic-last"; @endphp
            @for( $i = 0; $i < $total_restaurants; $i = $i+3 )
                @php $class = ($class == "mosaic-first")? "mosaic-last":"mosaic-first"; @endphp
                <div class="mosaic {{$class}}">
                    @for($k = 0; $k < 3; $k++)
                        @php $img1 =asset('img/resorts/'.$resort.'/restaurants/'.__('resorts/'.$resort.'/restaurants.restaurants.'.($i + $k).'.image_interna_landing')); @endphp
                        @php
                            if ($count >= $total_restaurants){
                                break;
                            }
                            $count++;
                        @endphp
                        <div class="item" style="background-image: url('{{$img1}}')">
                            <div class="info">
                                <h3 class="title">{{__('resorts/'.$resort.'/restaurants.restaurants.'.($i + $k).'.name')}}</h3>
                                <p class="subtitle">{{__('general.lb_food')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.'.($i + $k).'.food')}}</p>
                                <p class="text">
                                    <span>{!!__('resorts/'.$resort.'/restaurants.restaurants.'.($i + $k).'.open')!!}</span>
                                    <span>{{__('general.lb_dress_code')}}: {{__('resorts/'.$resort.'/restaurants.restaurants.'.($i + $k).'.dress_code')}}</span>
                                    <span>{{__('resorts/'.$resort.'/restaurants.restaurants.'.($i + $k).'.reference')}}</span>
                                </p>
                            </div>
                        </div>
                    @endfor
                </div>
            @endfor
        </div>
    </div>
</section>