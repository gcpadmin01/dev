@php
    $total_trips = count( __('type-of-trips.trips') );
@endphp
<section class="container mb-5">
    <div class="row no-gutters">
        <div class="col-12">
            <div class="slider-nav-7-1 slider-nav-gray slider-nav-gray-img">
                @for($i=0;$i<$total_trips;$i++)
                    @php
                        $color = __('type-of-trips.trips.'.$i.'.color');
                        $icon = __('type-of-trips.trips.'.$i.'.icon');
                    @endphp
                    <div class="d-flex align-items-center justify-content-center flex-column text-center trips-element av-{{$color}}-trips">
                        <img src="{{ $icon }}" alt="{{ __('type-of-trips.trips.$i.title')}}">
                        <h3>{{ __('type-of-trips.trips.'.$i.'.tab_name')}}</h3>
                    </div>
                @endfor
            </div>
        </div>
        <div class="col-12">
            <div class="slider-content-7-1 slick-content">
                @for($i=0;$i<$total_trips;$i++)
                    @php
                        $img1 = 'img/experiences/'.__('type-of-trips.trips.'.$i.'.img');
                        $img = asset($img1);
                    @endphp
                    <div class="">
                        <div class="row no-gutters">
                            <div class="col-lg-7 col-12 description-image d-none d-sm-flex justify-content-end"
                                 style="background-image: url('{{ $img }}');">
                                <img class="d-lg-none w-100" src="{{$img}}" alt="{{__('type-of-trips.trips.'.$i.'.title')}}">
                            </div>
                            <div class="description-text col-lg-5 col-12 d-flex justify-content-center align-items-center">
                                <div class="p-3">
                                    <h4 class="title">{{__('type-of-trips.trips.'.$i.'.title')}}</h4>
                                    <p class="text text-justify"
                                       style="">{{__('type-of-trips.trips.'.$i.'.description')}}</p>
                                    <div class="boton-amarillo">
                                        <a  href="{{url(__('type-of-trips.trips.'.$i.'.link'))}}"
                                           class="btn btn-secondary pl-4 pr-4">{{__('general.view_more')}}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor

            </div>
        </div>
    </div>
</section>