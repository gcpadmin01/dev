@php
    $uniqid = uniqid();
@endphp

<form target="_blank" action="https://reservations.travelclick.com/bookings.jsp" class="bookin-modal-resort form">

    <div class="form__group">
        <label class="form__label" for="datein{{ $uniqid }}">{{ __('general.booking.label.check_in') }}</label>
        <input class="form__input form__input--datepicker" id="datein{{ $uniqid }}" type="text" name="datein" autocomplete="off">
    </div>

    <div class="form__group">
        <label class="form__label" for="dateout{{ $uniqid }}">{{ __('general.booking.label.check_out') }}</label>
        <input class="form__input form__input--datepicker" id="dateout{{ $uniqid }}" type="text" name="dateout" autocomplete="off">
    </div>

    <div class="form__group">
        <label class="form__label" for="adults{{ $uniqid }}">{{ __('general.booking.label.adults') }}</label>
        <select class="form__select" id="adults{{ $uniqid }}" name="adults">
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

    <div class="form__group">
        <label class="form__label" for="children{{$uniqid}}" >{{ __('general.booking.label.children') }}</label>
        <select class="form__select" id="children{{$uniqid}}" name="children">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>

    <div class="form__group teenBoxB" >
        <label class="form__label" for="children2{{ $uniqid }}" >{{ __('general.booking.label.teen') }}</label>
        <select class="form__select" id="children2{{ $uniqid }}" name="children2">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>
    
    <div class="form__group">
        <label class="form__label"  for="rooms{{$uniqid}}">{{ __('general.booking.label.rooms') }}</label>
        <select class="form__select" id="rooms{{$uniqid}}" name="rooms">
            <option value="1" selected="">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
    </div>

    <div class="form__group">
        <label class="form__label" for="identifier{{ $uniqid }}">{{ __('general.booking.promocode') }}</label>
        <input class="form__input" id="identifier{{ $uniqid }}" type="text"  name="identifier">
    </div>
    
    <div class="form__group" style="">
        <button class="form__input form__input--book"  type="submit" >
            {{ __('general.booking.btn.book_now') }}
        </button>
    </div>

    <input type="hidden" name="hotelid" value="">
    <input type="hidden" name="RatePlanID" value="">
    <input type="hidden" name="discount" value="">

    <input type="hidden" name="theme_code" value="23175">
    <input type="hidden" name="subchan" value="royalreservations.com">                                                              
    <input type="hidden" name="currency" value="{{ __currency() }}">
    <input type="hidden" name="_ga">
</form>