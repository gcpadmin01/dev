@php
    $total_amenities = count( __('resorts/'.$resort.'/amenities.amenities') );
    $count = 0;
@endphp
<section class="container sec-amenities">
    <div class="mosaic-wrapper">
        @php $class = "mosaic-last"; @endphp

        @for( $i = 0; $i < $total_amenities; $i = $i+3 )
            @php $class = ($class == "mosaic-first")? "mosaic-last":"mosaic-first"; @endphp
            <div class="mosaic {{$class}}">

{{--                @for($k = 0; $k < 3; $k++)--}}
{{--                    @php--}}
{{--                        if ($count > $total_amenities){--}}
{{--                            break;--}}
{{--                        }--}}
{{--                        $count++;--}}
{{--                    @endphp--}}

{{--                    @php $img1 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.'.($i + $k).'.image')); @endphp--}}
{{--                    <div class="item" style="background-image: url('{{$img1}}')">--}}
{{--                        <div class="info">--}}
{{--                            <h3 class="title">{{__('resorts/'.$resort.'/amenities.amenities.'.($i+$k).'.name')}}</h3>--}}
{{--                            <p class="text">{!!__('resorts/'.$resort.'/amenities.amenities.'.($i+$k).'.excerpt')!!}</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                @endfor--}}

                @for($k = 0; $k < 3; $k++)

                    @if($count < $total_amenities)
{{--                        @php print_r($count."<".$total_amenities."<br>"); @endphp--}}
                        @php $img1 =asset('img/resorts/'.$resort.'/activities/'.__('resorts/'.$resort.'/amenities.amenities.'.($i + $k).'.image')); @endphp
                        <div class="item" style="background-image: url('{{$img1}}')">
                            <div class="info">
                                <h3 class="title">{{__('resorts/'.$resort.'/amenities.amenities.'.($i+$k).'.name')}}</h3>
                                <p class="text">{!!__('resorts/'.$resort.'/amenities.amenities.'.($i+$k).'.excerpt')!!}</p>
                            </div>
                        </div>
                    @else
                        @break
                    @endif
                    @php $count++; @endphp
                @endfor
            </div>
        @endfor
    </div>
</section>