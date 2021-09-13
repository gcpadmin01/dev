<section class="booking {{isset($class)?$class:""}} " id="booking-interno">

    @php
        $unid = uniqid();
        if (isset($resort) && is_string($resort)){
            $destino=__('resorts-booking.'.$resort.'.destination');
            $id=__('resorts-booking.'.$resort.'.ihotelier');
            $rh=__('resorts-booking.'.$resort.'.reservhotel');
            $name=__('resorts-booking.'.$resort.'.name');
            $ad= __('resorts-booking.'.$resort.'.ad');
            $ch= __('resorts-booking.'.$resort.'.ch');
            $te= __('resorts-booking.'.$resort.'.te');
        }else{
            $destino=__('general.booking.label.adults');
            $id="";
            $rh="";
            $name="";
            $ad=  __('general.booking.label.adults');
            $ch=  __('general.booking.label.children') ;
            $te= __('general.booking.label.teen');
        }
        $hoy = date("m/d/Y");
        $hoymas3 = date("m/d/Y",strtotime($hoy."+ 3 days"));
        $hoymas5 = date("m/d/Y",strtotime($hoy."+ 5 days"));
        $hoymas8 = date("m/d/Y",strtotime($hoy."+ 8 days"));
    @endphp

    <div class="booking-interno-container">
        <div class="text-right btn-booking-close">
            <button type="button" class="text-white">
                X
            </button>
        </div>
        <div class="contenedor-nav-tabs ">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link show active" id="hotel-tab" data-toggle="pill" href="#je-hotels-{{$unid }}"
                       role="tab" aria-controls="pills-hotel" aria-selected="false">
                                    <span class="tabtitulo">
                                        <img src="/img/icon-hotel.png" alt="Resort Icon" title="Resort Icon">{{ __('general.booking.btn.hotel') }}
                                    </span>
                    </a>
                </li>
                <!--<li class="nav-item">
                    <a class="nav-link" id="hotel-flight-tab" data-toggle="pill"
                       href="#je-hotels-fly-{{$unid }}" role="tab" aria-controls="pills-hotel-flight"
                       aria-selected="false">
                                    <span class="tabtitulo">
                                        <img src="/img/icon-hotel.png">{{ __('general.booking.btn.hotel') }} +
                                        <img src="/img/icon-flight.png">{{ __('general.booking.btn.flight') }}
                                    </span>
                    </a>
                </li>-->

                <li class="lb_best_deal flex-grow-1 align-content-center justify-content-end">
                    <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.best_deal')) }}"
                       class="align-self-center" >
                        <img src="/img/icon-best-deal.png" alt="{{ __('general.lb_best_deal') }} icon" width="22"> {{ __('general.lb_best_deal') }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="contenedor-tabs">
            <div class="tab-content">
                <div id="je-hotels-{{$unid }}" class="je-hotels-fly tab-pane active">
                    <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank">
                        <div class="je-tab-content yellow">
                            <div class="booking-interno-inputs">
                                <label for="destination">{{ __('general.booking.label.like_to_go') }}</label>
                                <div class="select-combo">
                                    @if (isset($resort) && is_string($resort))
                                        <select class="form-control combo combo-booking" name="hotelId" id="hotelHome">
                                            <optgroup label="{{$destino}}">
                                                <option value="{{$id}}">{{$name}}</option>
                                            </optgroup>
                                        </select>
                                    @else
                                        <select class="form-control combo combo-booking" name="hotelId" id="hotelHome">
                                            <!--<option value="0"
                                                    selected>{{ __('general.booking.placeholder.select_resort') }}</option>-->
                                            <optgroup label="{{ __('header.menu.beach_destinations.cancun') }}">
                                                <option value="86169">The Royal Sands Resort & Spa All Inclusive</option>
                                                <option value="86182">The Royal Islander All Suites Resort</option>
                                                <option value="73601">The Royal Cancun All Suites Resort</option>
                                            </optgroup>
                                            <optgroup label="Riviera Maya">
                                                <option value="95939">Grand Residences Riviera Cancun Resort</option>
                                            </optgroup>
                                            <optgroup label="Playa del Carmen">
                                                <option value="86184">The Royal Haciendas All Suites Resort & Spa</option>
                                            </optgroup>
                                        </select>
                                    @endif
                                </div>
                                <div id="msg-box" style="display:none;">
                                    <div class="alert alert-danger">{{ __('general.lb_msg_error_resort') }}</div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs">
                                <label>{{ __('general.booking.label.check_in') }}</label>
                                <div class="date"  id="deals1">
                                    <input type="text" class="form-control" name="datein" id="datein" readonly
                                           placeholder="{{ $hoy }}" value="{{ $hoy }}">
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs">
                                <label>{{ __('general.booking.label.check_out') }}</label>
                                <div class="date"  id="deals2">
                                    <input type="text" class="form-control" name="dateout" id="dateout" readonly
                                           placeholder="{{ $hoymas5 }}" value="{{ $hoymas5 }}">
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs booking-interno-inputs16">
                                <div class="combo-box arrow-down">
                                    <label for="room"> {{ __('general.booking.label.rooms') }}</label>
                                    <div class="select">
                                        <select class="form-control roomsOnly" name="rooms">
                                            <option value="1" selected="">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs booking-interno-inputs16">
                                <div class="combo-box arrow-down">
                                    <label id="spAdults">{{ $ad }}</label>
                                    <div class="select">
                                        <select class="form-control" name="adults" id="adults">
                                            <option value="1">1</option>
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
                                </div>
                            </div>
                            <div class="booking-interno-inputs booking-interno-inputs16">
                                <div class="combo-box arrow-down" id="teenBox">
                                    <label id="spTeen">{{ __('general.booking.label.teen') }}</label>
                                    <div class="select">
                                        <select class="form-control" name="children2" id="children2">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>

                                </div>
                            </div>
                            <div class="booking-interno-inputs booking-interno-inputs16">
                                <div class="combo-box arrow-down">
                                    <label id="spChildren">{{ __('general.booking.label.children') }}</label>
                                    <div class="select">
                                        <select class="form-control" name="children" id="children">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs booking-interno-inputs16">
                                <div class="combo-box">
                                    <label id="spIdentifier">{{ __('general.promo') }}</label>
                                    <div>
                                        <input type="text" name="identifier" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs booking-interno-inputs16">
                                <div class="combo-box">
                                    <label id="spIata">IATA</label>
                                    <div>
                                        <input type="text" name="iata" class="form-control">
                                    </div>
                                </div>
                            </div>


                        </div>

                        @if(App::getLocale() == 'es')<input type="hidden" name="languageid" value="2">@endif
                        <input type="hidden" name="subchan"  value="royalreservations.com">
                        <input type="hidden" name="_ga" value="">

                        <div class="boton-booking-now">
                            <!--<button class="btn btn-secondary btn-home" type="submit" id="btn-booking">
                                {{ __('general.booking.btn.book_now') }}
                            </button>-->
                            <button type="submit" class="btn btn-secondary btn-home" >
                            {{ __('general.booking.btn.book_now') }}
                            </button>
                        </div>
                    </form>
                </div>
                <div id="je-hotels-fly-{{$unid }}" class="tab-pane fade je-hotels-fly">
                    <form name="booking_engine_form" id="booking_engine_form" action="" target="_blank">
                        <div class="je-tab-content sky-blue">
                            <div class="booking-interno-inputs w50">

                            </div>
                            <div class="booking-interno-inputs w23">

                            </div>
                            <div class="booking-interno-inputs w23">

                            </div>
                            <div class="booking-interno-inputs w24">
                                <label>{{ __('general.booking.label.check_in') }}</label>
                                <div class="date checkin-flight">
                                    <input type="text" class= "form-control" name="aDate"
                                           placeholder="{{$hoymas3}}" value="{{$hoymas3}}">
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-interno-inputs w24">
                                <label>{{ __('general.booking.label.check_out') }}</label>
                                <div class="date checkout-flight" >
                                    <input type="text" class="form-control" name="dDate"
                                           placeholder="{{$hoymas8}}" value="{{$hoymas8}}">
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs w13">
                                <div class="combo-box arrow-down">
                                    <label for="room">{{ __('general.booking.label.rooms') }}</label>
                                    <div class="select">
                                        <select class="form-control" name="rooms" id="roomsVuelo">
                                            <option value="1" selected="">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-interno-inputs w15">
                                <div class="combo-box arrow-down">
                                    <label class="spAdultsB">{{ __('general.booking.label.adults') }}</label>
                                    <div class="select">
                                        <select class="form-control adultsVuelo" name="adults">
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
                            <div class="booking-interno-inputs w15">
                                <div class="combo-box arrow-down">
                                    <label class="spChildrenB">{{ __('general.booking.label.children2') }}</label>
                                    <div class="select">
                                        <select class="form-control child" name="child">
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
                        <input type="hidden" name="date_format"  value="MM/DD/YYYY">
                        <input type="hidden" name="aff" value="ROYAL_RESERVATIONS">
                        @if (App::getLocale() == 'es')
                            <input type="hidden" name="lang" id="lang" value="2">
                        @endif

                        <div class="boton-booking-now">
                            <button class="btn btn-secondary btn-booking-fli" type="button" id="btn-booking-fli">
                                {{ __('general.booking.btn.book_now') }}
                            </button>
                        </div>

                    </form>

                    <input type="hidden" name="tag_adult" id="tag_adult"
                           value="{{ __('general.booking.label.adults') }}">
                    <input type="hidden" name="tag_adult2" id="tag_adult2"
                           value="{{ __('general.booking.label.adults1') }}">
                    <input type="hidden" name="tag_adult3" id="tag_adult3"
                           value="{{ __('general.booking.label.adults2') }}">
                    <input type="hidden" name="tag_teen" id="tag_teen" value="{{ __('general.booking.label.teen') }}">
                    <input type="hidden" name="tag_children" id="tag_children"
                           value="{{ __('general.booking.label.children') }}">
                    <input type="hidden" name="tag_children2" id="tag_children2"
                           value="{{ __('general.booking.label.children1') }}">
                
                           </form>
                </div>
            </div>

            
        </div>
        <div class="alert-danger resort_msg" style="display:none;"></div>
    </div>

</section>


<script type="text/javascript">
    var resort = "{{ $rh }}";

    function selectHotel(hotel) {
        if (hotel == "10732") {
            document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10732";
        } else if (hotel == "10733") {
            document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10733";
        } else if (hotel == "10727") {
            document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10727";
        } else if (hotel == "10729") {
            document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10729";
        } else if (hotel == "10731") {
            document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10731";
        } else if (hotel == "10730") {
            document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10730";
        } else if (hotel == "10728") {
            document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10728";
        } else if (hotel == "10735") {
            document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10735";
        } else if (hotel == "10734") {
            document.booking_engine_form.action = "https://www.reservhotel.com/win/owa/ibe5.main?hotel=10734";
        }
    }
</script>