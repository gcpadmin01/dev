@php
    $gmsClient = app('App\GMS\GMSClient');
    $uniqid = uniqid();
@endphp
<script>
    var datepickerAux;
</script>
<div class="checkAvailabityModal checkAvailabityModalRooms modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="offer_booking_hotel">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="w-100 text-center">
                    <h5 class="modal-title text-uppercase concept_title">
                    </h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" accept-charset="UTF-8" target="_blank">

                <input type="hidden" name="subchan" value="royalreservations.com">                                                              
                <input type="hidden" name="currency" value="{{ __currency() }}">
                <input type="hidden" name="theme_code" value="23175">
                <input type="hidden" name="hotelid" value="">
                <input type="hidden" name="RatePlanID" value="">
                <input type="hidden" name="discount" value="">
                <input type="hidden" name="_ga" value="">

                @if(!$gmsClient->isGuest())
                    <input type="hidden" name="token" value="{{ $gmsClient->tokenUser }}">
                @endif
                
                <div class="modal-body">
                    <div class="w-100 text-center">
                        <h6 class="text-uppercase concept_resort" ></h6>
                    </div>

                    <div class="contenedor-tabs">
                        <div class="tab-content">
                            <div class="booking-interno-inputs">
                                <label for="datein{{ $uniqid }}">{{ __('general.booking.label.check_in') }}</label>
                                <div class="input-group date">
                                    <input id="datein{{ $uniqid }}" type="text" class="form-control datein datepicker" name="datein" placeholder="" value="" readonly>
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs">
                                <label for="dateout{{ $uniqid }}">{{ __('general.booking.label.check_out') }}</label>
                                <div class="input-group date">
                                    <input id="dateout{{ $uniqid }}" type="text" name="dateout" class="form-control datepicker dateout" placeholder="" value="" readonly>
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="booking-interno-inputs">
                                <label for="adults{{ $uniqid }}" class="spAdultsB spAdults">{{ __('general.booking.label.adults') }}</label>
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

                            <div class="booking-interno-inputs kids">
                                <label for="children{{$uniqid}}" class="spTeenB spChildren" >{{ __('general.booking.label.children') }}</label>
                                <select id="children{{$uniqid}}" class="form-control" name="children">
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                </select>

                                <div id="ages" class="ages d-none">
                                    <div class="age">
                                        <label class="label-age">Niños</label>
                                        <div class="select">
                                            <select class="form-control" name="age[]">
                                                <option selected value="0">0</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="booking-interno-inputs teenBoxB teenBox" >
                                <label for="children2{{ $uniqid }}" class="spChildrenB teenBoxLabel" >{{ __('general.booking.label.teen') }}</label>
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
                                        <input id="identifier{{ $uniqid }}" type="text" class="form-control" name="identifier" value="{{ request()->get('identifier',"") }}">
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