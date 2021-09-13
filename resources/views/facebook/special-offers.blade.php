@extends('facebook.layout')

@push('css')
    <link rel="stylesheet" href="{{mix('/css/facebook/special-offers.css')}}">
@endpush

@push('script')
    <script src="{{mix('/js/facebook/special-offers.js')}}"></script>
@endpush

@section('main')
<div class="lang">
    <a href="{{ change_lang() }}" class="back">{{__('facebook.lang')}}</a>
</div>

<h1 class="title">{{ __('facebook.Take advantage of the exclusive offers we have for you!') }}</h1>

<div class="slider-a glide">
    <div class="glide__track" data-glide-el="track" >
        <div class="glide__slides">
            @foreach ($bannersHome as $banner)
                @php
                    $link = route('concept.detail',['concepto' => $banner->getUrl(\App::getLocale())]);
                    $img  = $banner->content->banner_img;
                    $title = $banner->content->title;
                @endphp
                <div class="glide__slide">
                    <img class="banner" src="{{$img}}" alt="">
                    <div class="caption">
                        <label for="">{{$title}}</label>
                        <a target="__blanck" href="{{$link}}">{{__('facebook.View more')}}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
            <img src="/img/icon-galeria/ic-back.svg" alt="Next">
        </button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
            <img src="/img/icon-galeria/ic-next.svg" alt="Next">
        </button>
    </div>
    <div class="glide__bullets" data-glide-el="controls[nav]">
        @php $count = 0; @endphp
        @foreach ($bannersHome as $banner)
            <button class="glide__bullet" data-glide-dir="={{$count++}}"></button>
        @endforeach
    </div>
</div>

<div class="sec-b">
    <div class="item a">
        <img src="/img/icon-galeria/best-deal-guaranteed.svg" alt="">
        <label>{{__('facebook.Best Deal Guaranteed')}}</label>
    </div>
    <div class="item b">
        <img src="/img/icon-galeria/secure-booking.svg" alt="">
        <label>{{__('facebook.Secure Booking')}}</label>
    </div>
    <div class="item c">
        <img src="/img/icon-galeria/card-group.svg" alt="">
        <label>{{__('facebook.Payment Methods')}}</label>
    </div>
</div>

<div class="sec-c">
    <h2>{{__('facebook.Offers by resort')}}</h1>

    <div class="glide glide-offers">
        <div class="glide__track" data-glide-el="track" >
            <div class="glide__slides">
                @foreach ($resortsHome as $resort)
                @php
                    $bookingModal = ($resort->type_booking == null) ? $resort->concept->type_concept : $resort->type_booking;
                    $bookingModal = ($bookingModal == 0 )?  'hotel': 'flight';
                @endphp 
                    <div class="glide__slide">
                        <div class="sourface">
                            <img class="banner" src="{{ $resort->img_small }}" alt="{{ $resort->resort->name }}">
                            <div class="caption">
                                <div class="title">
                                    <label class="resort">{{ $resort->resort->name }}</label>
                                    <label class="destination">{{ $resort->resort->destination->name}}</label>
                                </div>
                                
                                <div class="price">
                                    <label class="dto">{{ $resort->content->label }}</label>
                                    <button class="btn-book" 
                                    data-type="{{$bookingModal}}"
                                    data-offer = '{{json_encode($resort->modal_data)}}'
                                    >{{__('general.book')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>    
                @endforeach
            </div>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                <img src="/img/icon-galeria/ic-back-blue.svg" alt="Next">
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                <img src="/img/icon-galeria/ic-next-blue.svg" alt="Next">
            </button>
        </div>
        <div class="glide__bullets" data-glide-el="controls[nav]">
            @php
                $count = 0;
            @endphp
            @foreach ($resortsHome as $resort)
                <button class="glide__bullet" data-glide-dir="={{$count++}}"></button>
            @endforeach
        </div>
    </div>

</div>

<div class="sec-d">
    <a target="__blanck" href="{{route('home')}}">
        <span class="a">{{__('facebook.Visit our official website')}}</span>
        <span class="b">royalreservations.com</span>
    </a>
</div>

<div id="modal-booking-resort" class="modal">
    <div class="modal__dialog">
        <div class="modal__header">
            <label class="modal__title"></label>
            <button class="modal__close">X</button>
        </div>
        

        <div class="modal__body">
            <label class="modal__subtitle"></label>
            <div class="modal__body__grid">
                @include('facebook.booking-modal-resort')
            </div>
        </div>
    </div>
</div>

<div id="modal-booking-flight" class="modal">
    <div class="modal__dialog">
        <div class="modal__header">
            <label class="modal__title"></label>
            <button class="modal__close">X</button>
        </div>
        

        <div class="modal__body">
            <label class="modal__subtitle"></label>
            <div class="modal__body__grid">
                @include('facebook.booking-modal-flight')
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var airports = {!! \Storage::disk('local')->get('airports.json') !!};
</script>

@endsection
