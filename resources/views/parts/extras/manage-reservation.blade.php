<div class="modal fade modal-manage checkAvailabityModal" id="manageReservation" tabindex="-1" role="dialog"
     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" style="">
            <div class="modal-header" style="">
                <div class="w-100 text-center py-2">
                    <h5 class="modal-title av-white text-uppercase">
                        {{ __('general.manage_reservation.title') }}
                    </h5>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="">
                <div class="row pr-3">
                    <div class="col-12 col-md-6">
                        <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" target="_blank" id="formModalReservation" name="formModalReservation">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h4 class="text-center mb-4"> {{ __('general.manage_reservation.title') }}</h4>
                                        <p>{{ __('general.manage_reservation.description1') }}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <form action="" class="form-inline">
                                            <div class="manage-reservation">
                                                <div class="row">
                                                    <div class="col-md-12 mb-2">
                                                        <div class="destination-combo">
                                                            <select class="form-control select2" name="hotelid" id="hotelid" style="width: 100%;">
                                                            <optgroup label="{{ __('header.menu.beach_destinations.cancun') }}">    
                                                                <option value="0">{{ __('general.manage_reservation.choose_resort') }}</option>
                                                                <option value="86169">The Royal Sands All Suites Resort & Spa</option>
                                                                <option value="86182">The Royal Islander All Suites Resort</option>
                                                                <option value="73601">The Royal Cancun All Suites Resort</option>
                                                                <option value="110441">Royal Uno Resort</option>
                                                            </optgroup>
                                                            <optgroup label="Riviera Maya">
                                                                <option value="95939">Grand Residences Riviera Cancun Resort</option>
                                                            </optgroup>
                                                            <optgroup label="Playa del Carmen"> 
                                                                <option value="86184">The Royal Haciendas All Suites Resort & Spa</option>
                                                            </optgroup>
                                                            <optgroup label="Sint Maarten">    
                                                                <option value="86180">The Villas at Simpson Bay Beach Resort & Marina</option>
                                                                <option value="86179"> Simpson Bay Resort, Marina & Spa </option>
                                                            </optgroup>
                                                            <optgroup label="Curacao">
                                                                <option value="86181">The Royal Sea Aquarium Resort</option>
                                                            </optgroup>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="manage-input">
                                                            <input type="text" class="form-control mr-3 mb-4"
                                                                id="inputEmailManage"
                                                                name="confirmId" aria-describedby="emailHelp" required
                                                                placeholder="{{ __('general.manage_reservation.confirmation') }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 text-center">
                                                        <div class="manage-button">
                                                            <button type="submit"
                                                                    class="btn btn-primary text-uppercase mb-3 bg-blue text-white manageMyReservation">
                                                                {{ __('general.manage_reservation.btn') }}
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12 col-md-6 line-v">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4 class="text-center mb-4">Precheck-in</h4>
                                <p>{!! __('general.checkin.manage_checkin') !!}</p>
                            </div>
                            <div class="col-md-12 text-center">
                                    <a href="{{__('general.checkin.link')}}" target="_blank" class="btn btn-primary text-uppercase mb-3 bg-blue text-white">
                                        {{ __('general.checkin.btn') }}
                                    </a>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 pb-4">
                <div id="error" class="danger" style="display: none;">{{ __('general.manage_reservation.error') }}</div>
                <hr>
                <small id="emailHelp" class="form-text d-none d-md-block">
                    {{ __('general.manage_reservation.description2') }}
                </small>
            </div>
        </div>
    </div>
</div>