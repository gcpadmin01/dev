@php
    $uniqid = uniqid();
@endphp

<form class="form" action="https://www.reservhotel.com/win/owa/ibe5.main" target="_blank">
    <div class="form__group">
        <label class="form__label" for="countries{{$uniqid}}"> {{ __('general.departure_country') }}: </label>
        {{-- <input type="hidden" class="airport-id"  value="US" > --}}
        {{-- <input type="text" class="form-control country-airports-select" id="countries{{$uniqid}}" value="United States" > --}}
        <select class="countries form__select form__select--choice select-airports" id="countries{{$uniqid}}"></select>
    </div>

    <div class="form__group">
        <label class="form__label" for="airport{{ $uniqid }}"> {{ __('general.departure_city') }}: </label>
        <select class="form__select" name="airport" id="airport{{ $uniqid }}" required></select>
        {{--
            <input type="hidden" name="airport" >
            <input type="text" id="airport{{ $uniqid }}"  class="form-control airport-select">
            <div class="alert alert-danger city_msg" style="display:none;"></div>
        --}}
    </div>

    <div class="form__group">
        <label class="form__label" for="aDate{{ $uniqid }}">{{ __('general.booking.label.check_in') }}</label>
        <input class="form__input form__input--datepicker" id="aDate{{ $uniqid }}" type="text" name="aDate" >                    
    </div>

    <div class="form__group">
        <label class="form__label" for="dDate{{ $uniqid }}">{{ __('general.booking.label.check_out') }}</label>
        <input class="form__input form__input--datepicker" id="dDate{{ $uniqid }}" type="text" class="form-control" name="dDate">
    </div>

    <div class="form__group">
        <label class="form__label" for="rooms{{ $uniqid }}">{{ __('general.booking.label.rooms') }}</label>
        <select class="form__select" id="rooms{{ $uniqid }}"  name="rooms">
            <option value="1" selected="">1</option>
        </select>
    </div>

    <div class="form__group">
        <label class="form__label" for="adults{{ $uniqid }}">{{ __('general.booking.label.adults') }}</label>
        <select class="form__select" id="adults{{ $uniqid }}" name="adults">
            <option value="1">1</option>
            <option value="2" selected>2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
    </div>

    <div class="form__group">
        <label class="form__label" for="child{{$uniqid}}">{{ __('general.booking.label.children2') }}</label>
        <select class="form__select" id="child{{$uniqid}}" name="child">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </div>

    <div class="form__group">
        <button class="form__input form__input--book" type="submit">
            {{ __('general.booking.btn.book_now') }}
        </button>
    </div>


    <input type="hidden" name="hotel" class="reservhotel_id" value="">
    
    <input type="hidden" name="date_format"  value="MM/DD/YYYY">
    <input type="hidden" name="aff"  value="ROYAL_RESERVATIONS">

    @if (App::getLocale() == 'es')
        <input type="hidden" name="lang" value="2">
    @endif

</form>