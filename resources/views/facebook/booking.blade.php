@php
    $resortId = (isset($resortId))? $resortId : 0;
    $showLabels = (isset($showLabels))? $showLabels: false;
    $showTermsPromotion = (isset($showTermsPromotion))? $showTermsPromotion: false;
    $resortFilter = (isset($resortFilter))? $resortFilter : 'all';
    $globalError = (isset($globalError))?$globalError : "";
@endphp

<form class="booking-hotel" action="https://reservations.travelclick.com/bookings.jsp" target="_blank"
      autocomplete="false" novalidate>


    <div class="input-group">
        @if($showLabels)
            <label class="form__label">{{ __('general.booking.label.all') }}</label>
        @endif

        <select name="hotelId" class="form-control" placeholder="Select Resort" required>
            <option {{ ($resortId == 0)? 'selected': ""  }} readonly value="">
                {{__('facebook.Select Resort')}}
            </option>
            @if($resortFilter == 'time-share')
                <optgroup label="Cancun">

                    <option {{ ($resortId == "4")? 'selected': ""  }} value="86169" data-subtext="Cancun Hotel Zone">The
                        Royal Sands Resort &amp; Spa All Inclusive
                    </option>

                    <option {{ ($resortId == "1")? 'selected': ""  }} value="73601" data-subtext="Cancun Hotel Zone">The
                        Royal Cancun All Suites Resort
                    </option>
                </optgroup>

                <optgroup label="Playa del Carmen">
                    <option {{ ($resortId == "5")? 'selected': ""  }} value="86184" data-subtext="Playa del Carmen">The
                        Royal Haciendas All Suites Resort &amp; Spa
                    </option>
                </optgroup>
            @endif
            @if($resortFilter == 'all')

                <optgroup label="Cancun">
                    <option {{ ($resortId == "15")? 'selected': ""  }} value="110441" data-subtext="Cancun Hotel Zone">
                        Royal Uno All Inclusive Resort &amp; Spa
                    </option>
                    <option {{ ($resortId == "4")? 'selected': ""  }} value="86169" data-subtext="Cancun Hotel Zone">The
                        Royal Sands Resort &amp; Spa All Inclusive
                    </option>
                    <option {{ ($resortId == "3")? 'selected': ""  }} value="86182" data-subtext="Cancun Hotel Zone">The
                        Royal Islander All Suites Resort
                    </option>
                    <option {{ ($resortId == "1")? 'selected': ""  }} value="73601" data-subtext="Cancun Hotel Zone">The
                        Royal Cancun All Suites Resort
                    </option>
                </optgroup>
                <optgroup label="Riviera Maya">
                    <option {{ ($resortId == "6")? 'selected': ""  }} value="95939" data-subtext="Riviera Maya">Grand
                        Residences Riviera Cancun Resort
                    </option>
                </optgroup>
                <optgroup label="Playa del Carmen">
                    <option {{ ($resortId == "5")? 'selected': ""  }} value="86184" data-subtext="Playa del Carmen">The
                        Royal Haciendas All Suites Resort &amp; Spa
                    </option>
                </optgroup>
                <optgroup label="Sint Maarten">
                    <option {{ ($resortId == "7")? 'selected': ""  }} value="86179" data-subtext="Sint Maarten">Simpson
                        Bay Beach Resort &amp; Marina
                    </option>
                    <option {{ ($resortId == "8")? 'selected': ""  }} value="86180" data-subtext="Sint Maarten">The
                        Villas at Simpson Bay Beach Resort &amp; Marina
                    </option>
                </optgroup>
                <optgroup label="Curacao">
                    <option {{ ($resortId == "9")? 'selected': ""  }} value="86181" data-subtext="Curacao">The Royal Sea
                        Aquarium Resort
                    </option>
                </optgroup>
            @endif

        </select>
        <p class="error hidden">{{__('facebook.booking.resort')}}</p>
    </div>

    <div class="input-group">
        @if($showLabels)
            <label class="form__label">{{ __('general.booking.label.check_in') }}</label>
        @endif
        <input class="form-control" name="datein" type="text" placeholder="{{ __('general.booking.label.check_in') }}"
               required autocomplete="off">
        <p class="error hidden">{{__('facebook.booking.check-in')}}</p>
    </div>
    <div class="input-group">
        @if($showLabels)
            <label class="form__label">{{ __('general.booking.label.check_out') }}</label>
        @endif
        <input class="form-control" name="dateout" type="text" placeholder="{{ __('general.booking.label.check_out') }}"
               required autocomplete="off">
        <p class="error hidden">{{__('facebook.booking.check-out')}}</p>
    </div>
    <div class="input-group">
        @if($showLabels)
            <label class="form__label">{{ __('general.booking.label.rooms') }}</label>
        @endif
        <select name="rooms" class="form-control" required>
            <option value="">{{__('general.booking.label.rooms')}}</option>
            <option selected value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
        <p class="error hidden">{{__('facebook.booking.rooms')}}</p>
    </div>
    <div class="input-group">
        @if($showLabels)
            <label class="form__label">{{ __('general.booking.label.adults') }}</label>
        @endif
        <select name="adults" class="form-control" required>
            <option value="">{{__('general.booking.label.adults')}}</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
        </select>
        <p class="error hidden">{{__('facebook.booking.adults')}}</p>
    </div>

    <div class="input-group">
        @if($showLabels)
            <label class="form__label">{{ __('general.booking.label.children2') }}</label>
        @endif
        <select name="children" class="form-control" required>
            <option value="">{{__('general.booking.label.children2')}}</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <p class="error hidden">{{__('facebook.booking.children')}}</p>
    </div>

    <div class="input-group hidden">
        @if($showLabels)
            <label class="form__label">{{ __('general.booking.label.children') }}</label>
        @endif
        <select name="children2" class="form-control">
            <option value="">{{__('general.booking.label.children')}}</option>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>

    <div class="input-group">
        <button class="form-control book-now" type="submit">{{__('general.book')}}</button>
    </div>

    @if($showTermsPromotion)
        <div class="input-group">
            <input class="check-terms" type="checkbox" value="0" required>
            I accept that I have read the terms and conditions of this promotion.
            <p class="error hidden">{{__('facebook.booking.children')}}</p>
        </div>
    @endif

    @if($globalError != "")
        <div class="input-group global-error hidden">
            <p class="error-text">{{$globalError}}</p>
        </div>
    @endif

    <input type="hidden" name="RatePlanID" value="">
    <input type="hidden" name="identifier" value="">
</form>