<section class="booking {{isset($class)?$class:""}} " id="booking-interno">
    @php
        $gmsClient = app('App\GMS\GMSClient');
        $phoneSintMaartin = __phone('SAINT-MARTIN');
        $phoneGnr = __phone('MEXICO');
        
        $hiddeHotelFilght = false;
        $unid = uniqid();
        $unidV = uniqid().'v';
        $minDate = "";
        $hoy = date("m/d/Y");


        $formAction = 'https://search.travelclick.com/RER/royal#/';
        if (isset($resort) && is_string($resort)){
            $formAction = 'https://reservations.travelclick.com/bookings.jsp';
            $destino=__('resorts-booking.'.$resort.'.destination');
            $idDestino =__('resorts-booking.'.$resort.'.idDestino');
            $id=__('resorts-booking.'.$resort.'.ihotelier');
            $rh=__('resorts-booking.'.$resort.'.reservhotel');
            $name=__('resorts-booking.'.$resort.'.name');
            $ad= __('resorts-booking.'.$resort.'.ad');
            $ch= __('resorts-booking.'.$resort.'.ch');
            $te= __('resorts-booking.'.$resort.'.te');

            if ($rh == 0) {
                $hiddeHotelFilght = true;
            }

            if ($resort == 'royal-uno') {
                $minDate = ($resort == 'royal-uno')? 'data-date_min = "02/28/2022"' : "";
                $hoy = '02/28/2022';
            }

        }else{
            $destino=__('general.booking.label.adults');
            $id="";
            $rh="";
            $name="";
            $ad=  __('general.booking.label.adults');
            $ch=  __('general.booking.label.children') ;
            $te= __('general.booking.label.teen');
        }
        $hoymas3 = date("m/d/Y",strtotime($hoy."+ 3 days"));
        $hoymas5 = date("m/d/Y",strtotime($hoy."+ 5 days"));
        $hoymas8 = date("m/d/Y",strtotime($hoy."+ 8 days"));

        $disabled = Auth::guard('agent')->check() ? "disabled":"";

        $optionsResorst = [
            ['id' => "all", 'classes'=> "destino",  'label' =>  __('general.booking.label.all')],
            ['id' => "Mexico,Mexican Caribbean,Quintana Roo,Cancun", 'classes' => "destino text-bold ", 'disabled' => $disabled , 'label' => __('header.menu.beach_destinations.cancun') ],
            ['id' => "110441", 'label' => 'Royal Uno All Inclusive Resort & Spa'],
            ['id' => "86169", 'label' => 'The Royal Sands All Suites Resort & Spa'],
            ['id' => "86182", 'label' => 'The Royal Islander All Suites Resort'],
            ['id' => "73601", 'label' => 'The Royal Cancun All Suites Resort'],
            ['id' => "Mexico,Mexican Caribbean,Quintana Roo,Puerto Morelos", 'classes' => "destino text-bold", 'disabled' => $disabled , 'label' => 'Riviera Maya'],
            ['id' => "95939", 'label' => 'Grand Residences Riviera Cancun Resort'],
            ['id' => "Mexico,Mexican Caribbean,Quintana Roo,Playa del Carmen", 'classes' => "destino text-bold", 'disabled' => $disabled, 'label' => 'Playa del Carmen'],
            ['id' => "86184", 'label' => 'The Royal Haciendas All Suites Resort & Spa'],
            ['id' => "St.Maarten", 'classes' => "destino text-bold", 'disabled' => $disabled, 'label' => 'Sint Maarten'],
            ['id' => "86180", 'label' => 'The Villas at Simpson Bay Beach Resort & Marina'],
            ['id' => "86179", 'label' => ' Simpson Bay Resort, Marina & Spa '],
            ['id' => "Curacao", 'classes' => "destino text-bold", 'disabled' => $disabled, 'label' => 'Curacao'],
            ['id' => "86181", 'label' => 'The Royal Sea Aquarium Resort'],
        ];

        $optionsResorstFlight = [
            ['id' => "", 'classes'=> "destino", 'disabled' => 'disabled' ,'label' => __('header.menu.beach_destinations.cancun')  ],
            ['id' => "10728", 'label' => 'The Royal Sands All Suites Resort & Spa'],
            ['id' => "10730", 'label' => 'The Royal Islander All Suites Resort'],
            ['id' => "10727", 'label' => 'The Royal Cancun All Suites Resort'],
            ['id' => '', 'classes'=> "destino", 'disabled' => 'disabled' , 'label' => "Riviera Maya"],
            ['id' => "10732", 'label' => 'Grand Residences Riviera Cancun Resort'],
            ['id' => '', 'classes'=> "destino", 'disabled' => 'disabled' , 'label' => "Playa del Carmen"],
            ['id' => "10731", 'label' => 'The Royal Haciendas All Suites Resort & Spa'],
            ['id' => '', 'classes'=> "destino", 'disabled' => 'disabled' , 'label' => "Sint Maarten"],
            ['id' => "10734", 'label' => 'The Villas at Simpson Bay Beach Resort & Marina'],
            ['id' => "10733", 'label' => ' Simpson Bay Resort, Marina & Spa '],
            ['id' => '', 'classes'=> "destino", 'disabled' => 'disabled' , 'label' => "Curacao"],
            ['id' => "10735", 'label' => 'The Royal Sea Aquarium Resort']
        ];
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
                       role="tab" aria-controls="hotel-tab" aria-selected="false">
                                    <span class="tabtitulo">
                                        <img src="/img/icon-hotel.png"  alt="Resort Icon" title="Resort Icon">{{ __('general.booking.btn.hotel') }}
                                    </span>
                    </a>
                </li>
                @if(!$hiddeHotelFilght)
                    @if(!Auth::guard('agent')->check())
                        <li class="nav-item">
                            <a class="nav-link" id="hotel-flight-tab" data-toggle="pill"
                               href="#je-hotels-fly-{{$unid }}" role="tab" aria-controls="hotel-flight-tab"
                               aria-selected="false">
                                <span class="tabtitulo">
                                    <img src="/img/icon-hotel.png"  alt="Resort Icon" title="Resort Icon">{{ __('general.booking.btn.hotel') }} +
                                    <img src="/img/icon-flight.png" alt="Flight Icon">{{ __('general.booking.btn.flight') }}
                                </span>
                            </a>
                        </li>
                    @endif
                @endif

                <li class="lb_best_deal flex-grow-1 align-content-center justify-content-end">
                    <a class="datalayer-bestdeal" href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.best_deal')) }}"
                       class="align-self-center" >
                        <img class="lazyload" data-src="/img/icon-best-deal.png" alt="{{ __('general.lb_best_deal') }} Icon" width="22"> {{ __('general.lb_best_deal') }}
                    </a>
                </li>
            </ul>
        </div>
        <div class="contenedor-tabs">
            <div class="tab-content">
                <div id="je-hotels-{{$unid }}" class="je-hotels tab-pane active" role="tabpanel" aria-labelledby="je-hotels-{{$unid }}">
                    <form id="form_modal" action="{{ $formAction }}" method="GET" accept-charset="UTF-8" target="_blank">


                        <div class="je-tab-content yellow">
                            <div class="booking-interno-inputs">
                                <label for="hotelHome">{{ __('general.booking.label.like_to_go') }}</label>
                                @if (isset($resort) && is_string($resort))
                                    <input type="hidden" name="hotelId" class="hotel-id" value="{{$id}}">
                                    <input class="form-control select-hotel-destino" type="text" value="{{$name}}" readonly>
                                @else
                                    <input type="hidden" name="destination" class="hotel-id" value="all">
                                    <input class="form-control select-hotel-destino" type="text" value='{{ __('general.booking.label.all') }}' data-options = '{!! json_encode($optionsResorst) !!}'>
                                @endif

                                <div id="msg-box" style="display:none;">
                                    <div class="alert alert-danger">{{ __('general.lb_msg_error_resort') }}</div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs">
                                <label for="datein">{{ __('general.booking.label.check_in') }}</label>
                                <div class="date"  id="deals1">

                                    <input type="text" class="form-control" name="datein" readonly placeholder="{{ $hoy }}" value="{{ $hoy }}" {!! $minDate !!}>
                                           
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs">
                                <label for="dateout{{ $unid }}">{{ __('general.booking.label.check_out') }}</label>
                                <div class="date"  id="deals2">
                                    <input id="dateout{{ $unid }}" type="text" class="form-control dp-absolute ebb" name="dateout" readonly 
                                        data-template='<div class="tooltip tooltip-ebb" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' 
                                        data-trigger="manual"
                                        data-placement= 'bottom'
                                        data-html = 'true'
                                        data-config_tootltip = "true"
                                        data-ebb = '{!! __('general.ebb-tooltip') !!}'
                                        data-sup = '{!! __('general.sup') !!}'
                                        data-cancun = '{!! __('general.cancun') !!}'
                                        data-gr = '{!! __('general.gr') !!}'
                                        data-trc = '{!! __('general.trc') !!}'
                                        data-sands = '{!! __('general.sands') !!} <a href="tel:{{ $phoneGnr['phone']['number'] }}">{{ $phoneGnr['phone']['label'] }}</a>'
                                        data-curacao = '{!! __('general.curacao') !!} <a href="tel:{{ $phoneSintMaartin['phone']['number'] }}">{{ $phoneSintMaartin['phone']['label'] }}</a> <br> <a class="wht" href="https://api.whatsapp.com/send?phone={{ $phoneSintMaartin['whatsapp']['number'] }}&text=&source=&data=" target="_blank"> Whatsapp {{ $phoneSintMaartin['whatsapp']['label'] }}</a>'
                                        data-curacao_2 = '{!! __('general.curacao_2') !!} '
                                        placeholder="{{ $hoymas5 }}" value="{{ $hoymas5 }}">
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>



                            <div class="booking-interno-inputs">
                                <div class="combo-box arrow-down">
                                    <label for="roomsOnly"> {{ __('general.booking.label.rooms') }}</label>
                                    <div class="select">
                                        <select class="form-control" name="rooms" id="roomsOnly">
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

                            <div class="booking-interno-inputs">
                                <div class="combo-box arrow-down">
                                    <label for="adults" class="spAdults" id="spAdults">{{ $ad }}</label>
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
                            
                            <div class="booking-interno-inputs kids">
                                <div class="combo-box arrow-down">
                                    <label for="children" class="spChildren" id="spChildren">{{ __('general.booking.label.children') }}</label>
                                    <div class="select">
                                        <select class="form-control children-flight" name="children" id="children">
                                            <option value="0">0</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                        </select>
                                        <div id="ages" class="ages d-none">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs teenBox">
                                <div class="combo-box arrow-down " id="teenBox">
                                    <label class="teenBoxLabel" for="children2" id="spTeen">{{ __('general.booking.label.teen') }}</label>
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
                            @if(!Auth::guard('agent')->check())
                                <div class="booking-interno-inputs">
                                    <label for="identifier{{ $unid }}">{{ __('general.booking.promocode') }}</label>
                                    <input id="identifier{{ $unid }}" type="text" class="form-control" name="identifier" value="{{ request()->get('identifier', "") }}">
                                </div>
                            @endif
                        </div>

                        <input type="hidden" name="subchan" id="subchan" value="royalreservations.com">
                        <input type="hidden" name="theme_code" value="23175">
                        <input type="hidden" name="currency" value="{{ __currency() }}">
                        {{--<input type="hidden" name="discount" value="SUNNY20">--}}

                        @if(!$gmsClient->isGuest())
                            <input type="hidden" name="token" value="{{ $gmsClient->tokenUser }}">
                        @endif
                        @if(App::getLocale() == 'es')
                            <input type="hidden" name="languageid" id="languageid" value="2">
                        @endif
                        @if(Auth::guard("agent")->check())
                            <input type="hidden" name="iata" id="iata" value="{{Auth::guard("agent")->user()->iata}}">
                        @endif
                        <input type="hidden" name="_ga" id="_ga" value="">

                        <div class="boton-booking-now">
                            <button class="btn btn-secondary btn-home" type="submit" id="btn-booking">
                                {{ __('general.booking.btn.book_now') }}
                            </button>
                        </div>


                    </form>
                </div>

                <div id="je-hotels-fly-{{$unid }}" class="tab-pane fade je-hotels-fly" role="tabpanel" aria-labelledby="je-hotels-fly-{{$unid }}">
                    <form name="booking_engine_form" id="booking_engine_form" action="https://www.reservhotel.com/win/owa/ibe5.main" method="GET" target="_blank">
                        <div class="je-tab-content sky-blue">
                            <div class="booking-interno-inputs w50">
                                <label for="hotel">{{ __('general.booking.label.like_to_go') }}</label>
                                @if(isset($resort) && is_string($resort))
                                    <input type="hidden" name="hotel" class="hotel"  value="{{$rh}}">
                                    <input class="form-control resort-flight" type="text" value="{{$name}}" readonly>
                                @else
                                    <input type="hidden" name="hotel" class="hotel"  value="{{$rh}}">
                                    <input class="form-control resort-flight" type="text"  placeholder="{{ __('general.booking.placeholder.select_resort') }}" value="{{ __('general.booking.placeholder.select_resort') }}" data-options="{{ json_encode($optionsResorstFlight) }}">
                                @endif

                                <div class="alert alert-danger resort_msg" style="display:none;"></div>
                            </div>
                            <div class="booking-interno-inputs w23">
                                <label for="countries">{{ __('general.departure_country') }}:</label>
                                <input type="hidden" class="airport-id"  value="US" >
                                <input type="text" class="form-control country-airports-select" id="countries" value="United States" >
                            </div>
                            <div class="booking-interno-inputs w23">
                                <label for="airport{{ $unidV }}">{{ __('general.departure_city') }}:</label>
                                <div id="airport_list">
                                    <input type="hidden" name="airport" >
                                    <input type="text" id="airport{{ $unidV }}"  class="form-control airport-select" >
                                    <div class="alert alert-danger city_msg" style="display:none;"></div>
                                </div>

                            </div>
                            <div class="booking-interno-inputs w24">
                                <label for="aDate{{$unidV}}">{{ __('general.booking.label.check_in') }}</label>
                                <div class="date">
                                    <input id="aDate{{$unidV}}" type="text" class= "form-control" name="aDate" placeholder="{{$hoymas3}}" value="{{$hoymas3}}" readonly>
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-interno-inputs w24">
                                <label for="dDate{{$unidV}}">{{ __('general.booking.label.check_out') }}</label>
                                <div class=" date" >
                                    <input id="dDate{{$unidV}}" type="text" class="form-control" name="dDate" placeholder="{{$hoymas8}}" 
                                        data-template='<div class="tooltip tooltip-ebb" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' 
                                        data-trigger="manual"
                                        data-placement= 'bottom'
                                        data-html = 'true'
                                        data-config_tootltip = "true"
                                        data-sup = '{!! __('general.sup') !!}'
                                        data-cancun = '{!! __('general.cancun') !!}'
                                        data-gr = '{!! __('general.gr') !!}'
                                        data-trc = '{!! __('general.trc') !!}'
                                        data-sands = '{!! __('general.sands') !!} <a href="tel:{{ $phoneGnr['phone']['number'] }}">{{ $phoneGnr['phone']['label'] }}</a>'
                                        data-curacao = '{!! __('general.curacao') !!} <a href="tel:{{ $phoneSintMaartin['phone']['number'] }}">{{ $phoneSintMaartin['phone']['label'] }}</a> <br> <a class="wht" href="https://api.whatsapp.com/send?phone={{ $phoneSintMaartin['whatsapp']['number'] }}&text=&source=&data=" target="_blank" rel="noopener noreferrer"> Whatsapp {{ $phoneSintMaartin['whatsapp']['label'] }}</a>'
                                        data-curacao_2 = '{!! __('general.curacao_2') !!} '
                                        value="{{$hoymas8}}"
                                        readonly>
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs w13">
                                <div class="combo-box arrow-down">
                                    <label for="roomsVuelo">{{ __('general.booking.label.rooms') }}</label>
                                    <div class="select">
                                        <select class="form-control" name="rooms" id="roomsVuelo">
                                            <option value="1" selected="">1</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="booking-interno-inputs w15">
                                <div class="combo-box arrow-down">
                                    <label for="adultsVuelo" id="spAdultsB">{{ __('general.booking.label.adults') }}</label>
                                    <div class="select">
                                        <select class="form-control" name="adults" id="adultsVuelo">
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
                                    <label for="child" id="spChildrenB">{{ __('general.booking.label.children2') }}</label>
                                    <div class="select">
                                        <select class="form-control" name="child" id="child">
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
                        <input type="hidden" name="date_format" id="date_format" value="MM/DD/YYYY">
                        <input type="hidden" name="aff" id="aff" value="ROYAL_RESERVATIONS">
                        @if (App::getLocale() == 'es')
                            <input type="hidden" name="lang" id="lang" value="2">
                        @endif

                        <div class="boton-booking-now">
                            <button class="btn btn-secondary btn-booking-fli" type="button" id="btn-booking-fli">
                                {{ __('general.booking.btn.book_now') }}
                            </button>
                        </div>

                    </form>

                    <input type="hidden" name="tag_adult" id="tag_adult" value="{{ __('general.booking.label.adults') }}">
                    <input type="hidden" name="tag_adult2" id="tag_adult2" value="{{ __('general.booking.label.adults1') }}">
                    <input type="hidden" name="tag_adult3" id="tag_adult3" value="{{ __('general.booking.label.adults2') }}">
                    <input type="hidden" name="tag_adult4" id="tag_adult4" value="{{ __('general.booking.label.adults3') }}">

                    <input type="hidden" name="tag_teen" id="tag_teen" value="{{ __('general.booking.label.teen') }}">

                    <input type="hidden" name="tag_children" id="tag_children" value="{{ __('general.booking.label.children') }}">
                    <input type="hidden" name="tag_children2" id="tag_children2" value="{{ __('general.booking.label.children1') }}">
                    <input type="hidden" name="tag_children3" id="tag_children3" value="{{ __('general.booking.label.children3') }}">
                    <input type="hidden" name="tag_children4" id="tag_children4" value="{{ __('general.booking.label.children4') }}">
                    <input type="hidden" name="tag_children5" id="tag_children5" value="{{ __('general.booking.label.children2') }}">
                </div>
            </div>

            </form>
        </div>
        <div class="alert-danger" style="display:none;"></div>
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