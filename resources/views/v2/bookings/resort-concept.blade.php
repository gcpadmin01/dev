{{--
    Booking en modal para las ofertas de los conceoptos por resort
--}}
@php
    $hoy = date("m/d/Y");
    $hoymas3 = date("m/d/Y",strtotime($hoy."+ 3 days"));
    $hoymas5 = date("m/d/Y",strtotime($hoy."+ 5 days"));
    $hoymas8 = date("m/d/Y",strtotime($hoy."+ 8 days"));

    $gmsClient = app('App\GMS\GMSClient');

    $maxDate='';
    $minDate='';

    $lastminute = 0;
    if (isset($mosaic)) {
        $lastminute = 3;
    }

    
    $hoy =  __date('%m/%d/%Y',$resort->travel_window_start);
    
    $today = \Illuminate\Support\Carbon::now();
    $difDays = $resort->travel_window_start->diffInDays($today);

    if ($difDays < $lastminute ) {
        $hoy = date("m/d/Y");
        $hoy = date("m/d/Y",strtotime($hoy."+ ".$lastminute." days"));
    }

    $hoymas3 = date("m/d/Y",strtotime($hoy."+ 3 days"));
    $hoymas5 = date("m/d/Y",strtotime($hoy."+ 5 days"));
    $hoymas8 = date("m/d/Y",strtotime($hoy."+ 8 days"));

    if($resort->ihotelier_rate_id == '4237203' || $resort->ihotelier_rate_id == '4237225' || $resort->ihotelier_rate_id == '4237237'){
        $hoymas5 = date("m/d/Y",strtotime($hoy."+ 4 days"));
    }

    $typeBooking = ($resort->type_booking == null) ? $resort->concept->type_concept : $resort->type_booking;

    $uniqid = uniqid();
    $uniqidV = uniqid().'v';

    $dataModal = $resort->modal_data;

@endphp

@if($typeBooking == 0)
    <div class="checkAvailabityModal checkAvailabityModalRooms modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="form-resort-{{$resort->id}}">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100 text-center">
                        <p class="h5 modal-title text-uppercase text-center">
                            
                        </p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" accept-charset="UTF-8" target="_blank">
                    <input type="hidden" name="subchan" value="royalreservations.com">                                                              
                    <input type="hidden" name="hotelid" value="{{$resort->resort->ihotelier_id}}">
                    <input type="hidden" name="currency" value="{{ __currency() }}">
                    <input type="hidden" name="_ga">

                    @if(!$gmsClient->isGuest())
                        {{-- <input type="hidden" name="RatePlanID" id="RatePlanIDB" value="{{$resort->ihotelier_private_rate_id}}"> --}}
                        <input type="hidden" name="token" value="{{ $gmsClient->tokenUser }}">
                    @else
                        <input type="hidden" name="RatePlanID" value="{{$resort->ihotelier_rate_id}}">
                    @endif

                    <input type="hidden" name="theme_code" value="23175">
                    
                    @if(!empty($resort->discount_code))
                        <input type="hidden" name="discount" value="{{$resort->discount_code}}">
                    @endif
                   
                    <div class="modal-body">
                        <div class="w-100 text-center">
                            <p class="h6 text-uppercase text-center" >
                                {{$resort->resort->name}}
                            </p>
                        </div>
                        <div class="contenedor-tabs">
                            <div class="tab-content">
                                <div class="booking-interno-inputs">
                                    <label for="datein{{ $uniqid }}">{{ __('general.booking.label.check_in') }}</label>
                                    <div class="input-group date">
                                        <input id="datein{{ $uniqid }}" type="text" class="form-control datein datepicker" name="datein" placeholder="{{$hoy}}" value="{{$hoy}}" 
                                            data-date_min = "{{$dataModal['travelStart']['minDate']}}"
                                            data-date_max = "{{$dataModal['travelEnd']['maxDate']}}"
                                            data-range="{{json_encode( $dataModal['travelStart']['rangeDates'] )}}"
                                            data-lastminute = "{{$lastminute}}" readonly>
                                        <div class="input-group-addon">
                                            <span class="icono-calendario"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="booking-interno-inputs">
                                    <label for="dateout{{ $uniqid }}">{{ __('general.booking.label.check_out') }}</label>
                                    <div class="input-group date">
                                        <input id="dateout{{ $uniqid }}" type="text" name="dateout" class="form-control datepicker dateout" placeholder="{{$hoymas5}}" value="{{$hoymas5}}" 
                                            data-date_min = "{{$dataModal['travelStart']['minDate']}}"
                                            data-date_max = "{{$dataModal['travelEnd']['maxDate']}}"
                                            data-range="{{json_encode($dataModal['travelStart']['rangeDates'])}}"
                                            readonly>
                                        <div class="input-group-addon">
                                            <span class="icono-calendario"></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="booking-interno-inputs">
                                    <label for="adults{{ $uniqid }}" class="spAdultsB">{{ __('general.booking.label.adults') }}</label>
                                    <select id="adults{{ $uniqid }}" class="form-control" name="adults">
                                        @if(!isset($mosaic)) <option value="1">1</option> @endif
                                        <option value="2" selected="">2</option>
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

                                <div class="booking-interno-inputs">
                                    <label for="children{{$uniqid}}" class="spTeenB" >{{ __('general.booking.label.children') }}</label>
                                    <select id="children{{$uniqid}}" class="form-control" name="children">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="booking-interno-inputs teenBoxB" >
                                    <label for="children2{{ $uniqid }}" class="spChildrenB" >{{ __('general.booking.label.teen') }}</label>
                                    <select id="children2{{ $uniqid }}" class="form-control" name="children2">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                                @if(!isset($mosaic))
                                    <div class="booking-interno-inputs">
                                        <label  for="rooms{{$uniqid}}">{{ __('general.booking.label.rooms') }}</label>
                                        <select id="rooms{{$uniqid}}" class="form-control" name="rooms">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                    @if(!Auth::guard('agent')->check())
                                        <div class="booking-interno-inputs">
                                            <label for="identifier{{ $uniqid }}">{{ __('general.booking.promocode') }}</label>
                                            <input id="identifier{{ $uniqid }}" type="text" class="form-control" name="identifier" value="{{ request()->get('identifier', $resort->ihotelier_identifier) }}">
                                        </div>
                                    @endif
                                @endif
                            </div>
                        </div>
                        @if (App::getLocale() == 'es')
                            <input type="hidden" name="languageid"  value="2">
                        @endif
                        @if(Auth::guard('agent')->check())
                             <input type="hidden" name="iata" id="iata" value="{{Auth::guard('agent')->user()->iata}}">
                        @endif
                        <div class="text-center modal-bottom-text to-button" style="">
                            <button type="submit" class="my-4 text-uppercase button-modal-book bold btn-book-now">
                                {{ __('general.booking.btn.book_now') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@else
    <div class="modal fade select2-modal checkAvailabityModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="form-resort-{{$resort->id}}">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100 text-center">
                        <p class="h5 text-center modal-title text-uppercase">
                            {{$resort->concept->content->title}}
                        </p>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="w-100 text-center">
                        <p class="h6 text-center text-uppercase">
                            {{$resort->resort->name}}
                        </p>
                    </div>
                    <form name="booking_engine_form" action="https://www.reservhotel.com/win/owa/ibe5.main" target="_blank">
                        <input type="hidden" name="hotel" value="{{$resort->resort->reservhotel_id}}">
                        <div class="je-tab-content sky-blue">
                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="booking-interno-inputs w23">
                                        <label for="countries{{$uniqidV}}">
                                            {{ __('general.departure_country') }}:
                                        </label>
                                        <div class="select-combo">
                                            <select id="countries{{$uniqid}}" class="form-control combo-booking-modal country-airports-select">
                                            </select>
                                        </div>
                                    </div>        
                                </div>

                                <div class="col-sm-12 col-md-6">
                                    <div class="booking-interno-inputs w23">
                                        <label for="airport{{ $uniqidV }}">
                                            {{ __('general.departure_city') }}:
                                        </label>
                                        <div>
                                            <div class="select-combo">
                                                <select id="airport{{ $uniqidV }}" name="airport"  class="form-control combo-booking-modal airport-select">
                                                </select>
                                            </div>
                                            <div class="alert alert-danger city_msg" style="display:none;">
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="booking-interno-inputs w24">
                                        <label for="aDate{{ $uniqidV }}">{{ __('general.booking.label.check_in') }}</label>
                                        <div class="date checkin-flight" >
                                            <input id="aDate{{ $uniqidV }}" type="text" class= "form-control" name="aDate" placeholder="{{$hoymas3}}" value="{{$hoymas3}}" 
                                                data-date_min = "{{$resort->travel_start}}"
                                                data-date_max = "{{$resort->travel_end}}"
                                                data-range="{{json_encode($resort->travels_windows->toArray())}}" readonly>
                                            <div class="input-group-addon">
                                                <span class="icono-calendario"></span>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="booking-interno-inputs w24">
                                        <label for="dDate{{ $uniqidV }}">{{ __('general.booking.label.check_out') }}</label>
                                        <div class="date checkout-flight">
                                            <input id="dDate{{ $uniqidV }}" type="text" class="form-control" name="dDate" placeholder="{{$hoymas8}}" value="{{$hoymas8}}" 
                                                data-date_max = "{{$resort->travel_end}}"
                                                data-date_min = "{{$resort->travel_start}}"
                                                data-range="{{json_encode($resort->travels_windows->toArray())}}"
                                                readonly>
                                            <div class="input-group-addon">
                                                <span class="icono-calendario"></span>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                            </div>    
                            
                            <div class="row">
                                <div class="col-sm-12 col-md-2">
                                    <div class="booking-interno-inputs w13">
                                        <div class="combo-box arrow-down">
                                            <label for="rooms{{ $uniqidV }}">{{ __('general.booking.label.rooms') }}</label>
                                            <div class="select">
                                                <select id="rooms{{ $uniqidV }}" class="form-control" name="rooms">
                                                    <option value="1" selected="">1</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                                <div class="col-sm-12 col-md-5">
                                    <div class="booking-interno-inputs w15">
                                        <div class="combo-box arrow-down">
                                            <label for="adults{{ $uniqidV }}" class="spAdultsB">{{ __('general.booking.label.adults') }}</label>
                                            <div class="select">
                                                <select id="adults{{ $uniqidV }}" class="form-control" name="adults">
                                                    <option value="1">1</option>
                                                    <option value="2" selected>2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>        
                                </div>

                                <div class="col-sm-12 col-md-5">
                                    <div class="booking-interno-inputs w15">
                                        <div class="combo-box arrow-down">
                                            <label for="child{{$uniqidV}}" class="spChildrenB">{{ __('general.booking.label.children2') }}</label>
                                            <div class="select">
                                                <select id="child{{$uniqidV}}" class="form-control" name="child">
                                                    <option value="0">0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>        
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="date_format"  value="MM/DD/YYYY">
                        <input type="hidden" name="aff"  value="ROYAL_RESERVATIONS">
                        @if (App::getLocale() == 'es')
                            <input type="hidden" name="lang" value="2">
                        @endif

                        <div class="text-center modal-bottom-text to-button ">
                            <button class="my-4 btn btn-secondary valid-form-flight" type="button">
                                {{ __('general.booking.btn.book_now') }}
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endif


