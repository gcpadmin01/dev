@extends('/interna')
@push('scripts')
    <script src="{{mix('/js/_deals.js')}}" integrity="{{ Sri::hash('/js/_deals.js') }}" crossorigin="anonymous"></script>
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/deals.css') }}" integrity="{{ Sri::hash('css/deals.css') }}" crossorigin="anonymous">
@endpush
@section('interna')
    <div class="deals-hotels">
        @component('/parts/scripts', ['section'=>'Offers', 'page'=>'all offers']) @endcomponent
        @component('parts/specials/bannermain') @endcomponent
        @component('parts/extras/breadcrum-level-2-ext', ['page'=>$page])@endcomponent
        @component('parts/specials/general-specials')@endcomponent

        <div class="box-b1">
            @component('v2.parts.specials.carrusel-specials',['concepts' => $concepts, 'lazyload' => true])@endcomponent
        </div>

        
        <div class="box-we-offer container">
            <h3 class="h3">{{__('general.we offer')}}</h3>

            <ul>
                <li data-toggle="tooltip" data-placement="top" title="{{__('general.tooltip_best_deal')}}">
                    <img class="lazyload" data-src="{{ asset('/img/gms/icons/best-deal-guaranteed.svg') }}" title="{{__('general.lb_best_deal')}}" alt="{{__('general.lb_best_deal')}}">
                    <label>{{__('general.lb_best_deal')}}</label>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{__('general.tooltip_secure_booking')}}">
                    <img class="lazyload" data-src="{{ asset('/img/gms/icons/secure-booking.svg') }}" title="{{__('general.Secure Booking')}}" alt="{{__('general.Secure Booking')}}">
                    <label>{{__('general.Secure Booking')}}</label>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{__('general.tooltip_customer_service')}}">
                    <img class="lazyload" data-src="{{ asset('/img/gms/icons/customer-services-all-year.svg') }}" title="{{__('general.Customer Service All Year round')}}" alt="{{__('general.Customer Service All Year round')}}">
                    <label>{{__('general.Customer Service All Year round')}}</label>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{ __('general.tooltip_payment_methods') }}">
                    <img class="lazyload" data-src="/img/gms/icons/payments.svg" title="{{__('general.Payment Methods')}}" alt="{{__('general.Payment Methods')}}">
                    <label>{{__('general.Payment Methods')}}</label>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{ __('general.tooltip_book_now_pay_later') }}">
                    <img class="lazyload" data-src="{{ asset('/img/gms/icons/book-now-pay-later.svg') }}" title="{{__('general.Book Now & Pay Later')}}" alt="{{__('general.Book Now & Pay Later')}}">
                    <label>{{__('general.Book Now & Pay Later')}}</label>
                </li>
            </ul>
        </div>

        <div class="deals-resort">
            @component('v2.parts.specials.oferta-general-specials',['resorts' => $resorts, 'lazyload' => true])@endcomponent
        </div>
    </div>

    

    {{--
    @include('v2.modals.resort-concept',['resort' => $resort])
    @include('v2.bookings.resort-concept',['resort' => $resort])
    --}}
@endsection

