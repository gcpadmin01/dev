@php
    $gmsClient = app('App\GMS\GMSClient');
    $uniqidV = uniqid();
@endphp
<div class="modal fade select2-modal checkAvailabityModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="offer_booking_flight">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div class="w-100 text-center">
                    <p class="h5 text-center modal-title text-uppercase  concept_title" > </p>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <div class="w-100 text-center">
                    <p class="h6 text-center text-uppercase resort_name"> </p>
                </div>
                <form name="booking_engine_form" action="https://www.reservhotel.com/win/owa/ibe5.main" target="_blank">
                    <input type="hidden" name="hotel" class="reservhotel_id" value="">
                    <input type="hidden" name="date_format"  value="MM/DD/YYYY">
                    <input type="hidden" name="aff"  value="ROYAL_RESERVATIONS">
                    @if (App::getLocale() == 'es')
                        <input type="hidden" name="lang" value="2">
                    @endif

                    <div class="je-tab-content sky-blue row">
                        <div class="col-sm-12 col-md-6">
                            <div class="booking-interno-inputs w23">
                                <label for="countries{{$uniqidV}}">
                                    {{ __('general.departure_country') }}:
                                </label>
                                <input type="hidden" class="airport-id"  value="US" >
                                <input type="text" class="form-control country-airports-select" id="countries{{$uniqidV}}" value="United States" >
                            </div>        
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="booking-interno-inputs w23">
                                <label for="airport{{ $uniqidV }}">
                                    {{ __('general.departure_city') }}:
                                </label>
                                <input type="hidden" name="airport" >
                                <input type="text" id="airport{{ $uniqidV }}"  class="form-control airport-select">
                                <div class="alert alert-danger city_msg" style="display:none;"></div>
                            </div>        
                        </div>

                        <div class="col-sm-12 col-md-6">
                            <div class="booking-interno-inputs w24">
                                <label for="aDate{{ $uniqidV }}">{{ __('general.booking.label.check_in') }}</label>
                                <div class="date checkin-flight" >
                                    <input id="aDate{{ $uniqidV }}" type="text" class= "form-control" name="aDate" readonly>
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
                                    <input id="dDate{{ $uniqidV }}" type="text" class="form-control" name="dDate" readonly>
                                    <div class="input-group-addon">
                                        <span class="icono-calendario"></span>
                                    </div>
                                </div>
                            </div>        
                        </div>
                    
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