<section class="{{ $class }}">
    @php
        $flagNewRoom = isset($flagNewRoom)? $flagNewRoom : false;
        $total_rooms= count( __('resorts/'.$resort.'/rooms.rooms') );
        $date = date_create();
        $today =date_format($date, 'n/Y');
        if($total_rooms > '3'){
            $total_rooms =3;
        }

        $minDate = date('m/Y');
        if ($resort == 'royal-uno') {
            $minDate = '06/2021';
        }

        $roomMinRates = (isset($roomMinRates))? $roomMinRates : collect([]);

    @endphp

    {{--
    @for($a=0;$a<$total_rooms;$a++)
        @php $img_flor_plan= __('resorts/'.$resort.'/rooms.rooms.'.$a.'.flor-plan-url'); @endphp
        <div class="modal fade modal-webcams modal-foor-plan" id="modal-foor-plan{{$a}}" tabindex="-1" role="dialog"
             aria-labelledby="foor-plan-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="">
                    <div class="modal-header" style="">
                        <div class="w-100 text-center">
                            <h5 class="modal-title av-white">
                                {{ __('resorts/'.$resort.'/rooms.rooms.'.$a.'.title') }}
                            </h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="">
                        <img class="floor-image img-fluid lazyload" data-src="{{ asset($img_flor_plan) }}" alt="Floor Plan"/>
                    </div>
                </div>
            </div>
        </div>
    @endfor
    --}}

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="e9 mb-4">{{__('resorts/'.$resort.'/rooms.title')}}</h2>
                <p>
                    {!! __('resorts/'.$resort.'/rooms.description')!!}
                </p>
            </div>
        </div>

        <div class="resort-rooms ">
            @for($i=0;$i<$total_rooms;$i++)
                @php
                    $total_amenities= count( __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities') );
                    $img= 'img/resorts/'.$resort.'/rooms/'.__('resorts/'.$resort.'/rooms.rooms.'.$i.'.image.src');
                    $roomCode = __('resorts/'.$resort.'/rooms.rooms.'.$i.'.room_id');

                    $hasDiscount = false;
                    $hasApiRate = false;

                    if ($roomMinRates->has($roomCode)) {
                        $roomMinRate = $roomMinRates->get($roomCode);
                        $hasDiscount = ($roomMinRate->discount > 0 )? true : false;
                        $hasApiRate = true;
                    }

                @endphp
                <div class="row no-gutters resort-room-about resort-room resort-room-{{ $i }}">
                    <div class="col-12 col-md-4 resort-room-image lazyload" data-src="{{ asset($img)}}" data-webp = "{{ str_replace('.jpg','.webp',asset($img))}}" >
                        @if(__('resorts/'.$resort.'/rooms.rooms.'.$i.'.flor-plan-url')!='')
                                <a class="label-plan" data-toggle="modal" 
                                    data-target="#picture_v2"
                                    data-resort="{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.title') }}"
                                    data-img="{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.flor-plan-url') }}"
                                    href="#">{{__('general.flor_plan')}}</a>
                        @endif

                        @if($flagNewRoom == TRUE)
                                <div class="resort-new-room"><span>{{__('general.new_room')}}</span></div>
                        @endif
                    </div>
                    <div class="col-12 col-md-8 col-lg-6 resort-room-info">
                        <h4 class="resort-room-title">{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.title') }}</h4>

                        @if(preg_match('/title-room-resort/',__('resorts/'.$resort.'/rooms.rooms.'.$i.'.title-room-resort')) === 0)
                            <p class="title-resort-min">{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.title-room-resort') }}</p>
                        @endif

                        <div class="resort-room-amenities">
                            <ul class="row no-gutters">
                                @for($j=0;$j<$total_amenities;$j++)
                                    <li class="col-6 col-md-4 amenities-icon-rooms amenity-{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities.'.$j.'.icon') }}">
                                        {{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities.'.$j.'.title') }}
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        @if($hasApiRate)
                            <div class="api-information text-justify">

                                {{--Cadena de texto personalizado dependiendo de los planes tarifarios que ofrece cada resort--}}

                                * 
                                @if($resort=='royal-uno')
                                    {{-- All Inclusive Resorts--}}
                                    {{ __('general.Enjoy a well-deserved 1') }}
                                    {{ __('general.Lowest rate found from') }} {{ __date('dates.SHORT_YEAR',  $roomMinRate->date_start) }} 
                                    {{ __('general.to') }}  {{ __date('dates.SHORT_YEAR',  $roomMinRate->date_end) }}

                                @else
                                    {{-- AI, EP y BB Resorts--}}
                                    @if($resort=='the-royal-cancun'|| $resort=='grand-residences-riviera-cancun' || $resort=='casa-de-campo')

                                        <b>{{ __('general.Enjoy a well-deserved 3') }}</b>
                                        {{ __('general.Lowest rate found from') }} {{ __date('dates.SHORT_YEAR',  $roomMinRate->date_start) }} 
                                        {{ __('general.to') }}  {{ __date('dates.SHORT_YEAR',  $roomMinRate->date_end) }}. 
                                        {{ __('general.This rate may correspond to') }}

                                    @else
                                    {{-- EP y BB Resorts--}}
                                        <b>{{ __('general.Enjoy a well-deserved 2') }}</b>
                                        {{ __('general.Lowest rate found from') }} {{ __date('dates.SHORT_YEAR',  $roomMinRate->date_start) }} 
                                        {{ __('general.to') }}  {{ __date('dates.SHORT_YEAR',  $roomMinRate->date_end) }}. {{ __('general.This rate may correspond to') }}

                                    @endif

                                @endif
                                
                            </div>
                        @endif
                    </div>
                    <div class="col-12  col-lg-2 d-flex align-items-center justify-content-center">
                        <div class="resort-booking-price">
                            <p>
                                {{__('general.from')}}
                                @if($hasDiscount) 
                                    <label class="discount">
                                        {{ intval($roomMinRate->rate) }}  {{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.price.currency')}}
                                    </label>
                                @endif

                                <span class="e11">

                                    {{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.price.symbol')}}
                                    
                                    @if($hasApiRate)
                                        {{ intval($roomMinRate->rate - $roomMinRate->discount) }} 
                                    @else
                                        {{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.price.amount')}}
                                    @endif

                                    <small class="e11-v1">
                                        {{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.price.currency')}}
                                        {{ ($hasApiRate)? "*" : "" }}
                                    </small>
                                </span>
                                {{__('general.per_night')}}

                            </p>
                            <a href="#" data-toggle="modal" data-target="#checkAvailabity"
                               class="open-Modal btn btn-room-booking position-inherity"
                               data-resort="{{ __('resorts/'.$resort.'/rooms.resort_id')}}"
                               data-ihotelier="{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.room_id')}}" data-tipo="3"
                               data-rname="{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.title')}}"
                               data-roffer="Room">
                                <i class="i_search"></i>
                                {{__('general.search')}}
                            </a>
                        </div>
                        {{--@if(__('resorts/'.$resort.'/rooms.rooms.'.$i.'.upgrade-for.amount')!='')
                            <div class="resort-booking-upgrade">
                                <a>{{__('general.upgrade')}}
                                    <span>{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.upgrade-for.symbol')}}{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.upgrade-for.amount')}} {{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.upgrade-for.currency')}}</span></a>
                            </div>
                        @endif--}}
                    </div>
                </div>
            @endfor
            <div class="d-flex justify-content-end">
                @php $url=__('resorts/'.$resort.'/rooms.url_all_rooms'); @endphp
                <a href="{{ lang_url( $url) }}">{{__('general.view_all')}}</a>
            </div>
        </div>
    </div>
</section>
<br/><br/>

<form action="https://reservations.travelclick.com/bookings.jsp" method="GET" accept-charset="UTF-8"
      target="_blank" onsubmit="">
    <div class="modal fade modal-webcams checkAvailabityModal modal-booking-room" id="checkAvailabity" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle"
         aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content modal-lg">
                <div class="modal-header">
                    <div class="w-100 text-center">
                        <h5 class="modal-title av-white  text-uppercase" id="resortname"></h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" name="hotelid" class="hotelidB" value="">
                <input type="hidden" name="roomtypeid" id="packageIdB" value="">
                <input type="hidden" name="theme_code" value="23175">
                @if(Auth::guard("agent")->check())
                    <input type="hidden" name="iata" id="iata" value="{{Auth::guard("agent")->user()->iata}}">
                @endif     
                <div class="modal-body">
                    <div class="contenedor-tabs">
                        <div class="tab-content">
                            <div class="booking-interno-inputs pbottom-2">
                                <div class="combo-box arrow-down-rooms">
                                    <label class="gray-font">{{ __('general.booking.label.month') }}</label>
                                    <div class="input-group date"  id="startmonth2">
                                        <input type="text" class="form-control" id="startmonth" name="startmonth"
                                               placeholder="{{$today}}" value="{{$minDate}}" data-date_min="{{$minDate}}" readonly>
                                        <div class="input-group-addon">
                                            <span class="icono-calendario"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-interno-inputs pbottom-2">
                                <div class="combo-box arrow-down-rooms">
                                    <label class="gray-font" for="room">{{ __('general.booking.label.rooms') }}</label>
                                    <select class="form-control roomsOnly" name="rooms">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="booking-interno-inputs">
                                <div class="combo-box arrow-down-rooms">
                                    <label class="spAdultsB">{{ __('general.booking.label.adults') }}</label>
                                    <select class="form-control adultsB" name="adults">
                                        <option value="1">1</option>
                                        <option value="2" selected>2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="booking-interno-inputs">
                                <div class="combo-box arrow-down-rooms">
                                    <label class="spTeenB" > {{ __('general.booking.label.children') }}</label>
                                    <select class="form-control childrenB" name="children">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                            <div class="booking-interno-inputs teenBoxB">
                                <div class="combo-box arrow-down-rooms">
                                    <label class="spChildrenB" >{{ __('general.booking.label.teen') }}</label>
                                    <select class="form-control children2B" name="children2">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="booking-interno-inputs">
                                <label>{{ __('general.booking.promocode') }}</label>
                                <input type="text" class="form-control" name="identifier" value="{{ request()->get('identifier', "") }}">
                            </div>
                        </div>
                    </div>
                </div>
                <input type="hidden" name="_ga" value="">
                @if (App::getLocale() == 'es')<input type="hidden" name="languageid" value="2">@endif
                <input type="hidden" name="subchan" value="royalreservations.com"> 
                <div class="text-center modal-bottom-text to-button" style="">
                    <button type="submit" class="my-4 text-uppercase btn btn-secondary btn-rooms"
                            id="">{{ __('general.booking.btn.book_now') }}</button>
                </div>
            </div>
        </div>
    </div>
</form>
{{--
<input type="hidden" name="tag_adult" id="tag_adultB" value="{{ __('general.booking.label.adults') }}">
<input type="hidden" name="tag_adult2" id="tag_adult2B" value="{{ __('general.booking.label.adults1') }}">
<input type="hidden" name="tag_adult3" id="tag_adult3B" value="{{ __('general.booking.label.adults2') }}">
<input type="hidden" name="tag_teen" id="tag_teenB" value="{{ __('general.booking.label.teen') }}">
<input type="hidden" name="tag_children" id="tag_childrenB" value="{{ __('general.booking.label.children') }}">
<input type="hidden" name="tag_children2" id="tag_children2B" value="{{ __('general.booking.label.children1') }}">
--}}