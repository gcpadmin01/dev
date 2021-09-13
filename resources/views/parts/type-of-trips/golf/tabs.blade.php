    @php
    $total_destinations = count( __('type-of-trips/'.$trip.'.destinations'));
@endphp
<div id="trip-interna">
    <div id="tabs-trip">
        <div class="row no-gutters">
            <div class="col-12 menu-trip slider-nav-7-1 mb-5 slider-nav-gray owl-filter-bar">
                @for($i=0;$i<$total_destinations;$i++)
                    <div class="item-trip" data-destination="{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.idem')}}">
                        {{__('type-of-trips/'.$trip.'.destinations.'.$i.'.title_tab')}}
                    </div>
                @endfor
            </div>
            <div class="col-12 slider-content-7-1">
                @for($i=0;$i<$total_destinations;$i++)
                    @php  $total_list = count( __('type-of-trips/'.$trip.'.destinations.'.$i.'.list')); @endphp
                    <div class="row no-gutters ">

                        <div class="col-12">
                            <h3 class="h1">{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.title')}}</h3>
                            <p>{!!__('type-of-trips/'.$trip.'.destinations.'.$i.'.description')!!}</p>
                        </div>

                        <div class="col-12 slider-pill-gray mb-5">
                            <div class="row no-gutters">
                                <div class="col-12 col-md-4 tab-nav">
                                    <h4 class="h2">{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.title_list')}}</h4>
                                    <nav class="nav flex-column">
                                        @for($j=0;$j<$total_list;$j++)
                                            <a class="nav-link {{($j==0)?"active":""}}" data-toggle="pill"
                                               href="#pill-{{$i}}-{{$j}}"
                                               aria-label="{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.list.'.$j.'.title')}}">
                                                {{__('type-of-trips/'.$trip.'.destinations.'.$i.'.list.'.$j.'.title')}}
                                            </a>
                                        @endfor
                                    </nav>
                                </div>
                                <div class="col-12 col-md-8 tab-content">
                                    @for($j=0;$j<$total_list;$j++)
                                        @php
                                            $img1 = 'img/experiences/'.__('type-of-trips/'.$trip.'.destinations.'.$i.'.list.'.$j.'.img');
                                            $img = asset($img1);
                                        @endphp
                                        <div class="tab-pane {{($j==0)?"active":""}}" id="pill-{{$i}}-{{$j}}">
                                            <img class="w-100" data-lazy="{{$img}}" data-webp="{{__webp($img)}}" alt="Destination">
                                            <div class="content">
                                                <p>{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.list.'.$j.'.description')}}</p>
                                            </div>
                                        </div>
                                    @endfor
                                </div>
                            </div>
                        </div>

                        @php
                            $resorts = count (__('type-of-trips/'.$trip.'.destinations.'.($i).'.resorts'));
                        @endphp

                        <div class="row no-gutters main-info">
                            <div class="col-12">
                                <h4 class="h1">{{__('type-of-trips/'.$trip.'.destinations.'.$i.'.title_description_resorts')}}</h4>
                                <p>{!!__('type-of-trips/'.$trip.'.destinations.'.$i.'.description_resorts')!!}</p>
                                <h2>{{__('type-of-trips/general.deals_title')}}<span class="name-destination"></span></h2>
                            </div>
                        </div>


                        {{-- <div class="col-12">
                            <div class="mosaic-resort mosaic-resort-{{($resorts < 3)? 3 : $resorts}} row no-gutters">
                                @for($k = 0; $k < $resorts; $k++)
                                    @php
                                        $dato = __('type-of-trips/'.$trip.'.destinations.'.($i).'.resorts.'.($k).'.resort');
                                        $img = __($dato.'.thumbnails.1110x531');
                                        $url = __($dato.'.slug');
                                        $title = __($dato.'.title');

                                        switch ($resorts){
                                            case 1:
                                                $img = (Agent::isMobile() && !Agent::isTablet()) ? __($dato.'.thumbnails.418x206'):__($dato.'.thumbnails.1110x531');
                                            break;
                                            case 2:
                                                $img = (Agent::isMobile() && !Agent::isTablet())? __($dato.'.thumbnails.418x206'):__($dato.'.thumbnails.540x526');
                                            break;
                                            case 3:
                                                $img =   (Agent::isMobile() && !Agent::isTablet())? __($dato.'.thumbnails.418x206'):__($dato.'.thumbnails.435x521');
                                            break;
                                            case 4:
                                                if ($k == 0 || $k==1){
                                                    $img = (Agent::isMobile() && !Agent::isTablet())? __($dato.'.thumbnails.418x206'):__($dato.'.thumbnails.435x521');
                                                }else{
                                                    $img =   __($dato.'.thumbnails.418x206');
                                                }
                                            break;
                                        }
                                    @endphp
                                    <div>
                                        <a href="{{$url}}">
                                            <div class="card card-v1" data-lazy="{{$img}}" data-webp="{{__webp($img)}}">
                                                <img data-lazy="{{$img}}" data-webp="{{__webp($img)}}" alt="{{ $title}}">
                                                <div class="card-body">
                                                    <div class="card-title">
                                                        {{ $title}}
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                @endfor
                            </div>
                        </div> --}}
                    </div>
                @endfor
            </div>

        </div>
    </div>

</div>