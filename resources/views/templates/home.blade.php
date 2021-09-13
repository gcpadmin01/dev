@extends('inicio')
@section('home')
    <div class="slider-home">
        @include('components/slider',['items' => __('special-offer/setup/setup.slider')])
    </div>
    @include('parts.extras.booking-resort',['class' => 'booking-hover'])
	{{--<div class="home-list">
		<div class="container">
            <div class="slick-home-list">
                <div class="nav-item">
                    <a class="nav-link" href="#" data-toggle="popover-home"
                       data-template='@include('parts.home.popover-template')'
                       data-html="true"
                       data-trigger="focus hover"
                       data-content='<p>{{ __('header.blue.best_deal_guaranted.text') }}</p><a href="{{ __('header.blue.best_deal_guaranted.link') }}"> {{ __('general.view_more')}}</a>'>
                        <img class="pr-1 d-unset" src="{{asset('img/best-deal.svg')}}" width="26px" alt="" >
                        {{ __('header.blue.best_deal_guaranted.self') }}
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#" data-toggle="popover-home"
                       data-template='@include('parts.home.popover-template')'
                       data-html="true"
                       data-trigger="focus hover"
                       data-content='<p>{{ __('header.blue.book_now_and_pay_later.text') }}</p>'>
                        <img class="pr-1 d-unset" src="{{asset('img/click-blue.svg')}}" width="26px" alt="">
                        {{ __('header.blue.book_now_and_pay_later.self') }}
                    </a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href="#" data-toggle="popover-home"
                       data-template='@include('parts.home.popover-template')'
                       data-html="true"
                       data-trigger="focus hover"
                       data-content='<p>{{ __('header.blue.permanent_promotions.text') }}</p>'>
                        <img class="pr-1 d-unset" src="{{asset('img/promotions.svg')}}" width="26px" alt="">
                        {{ __('header.blue.book_now_and_pay_later.self') }}
                    </a>
                </div>
            </div>
		</div>
	</div>--}}


  {{--include('parts/home/slider-home')--}}

	@include('parts/home/destination-home')
	@include('parts/home/resort-home')
	@include('parts/home/specials')
	@include('parts/home/instagram-feed')
	@include('parts/home/info-booking')
  @component('/parts/scripts', ['section'=>'Home', 'page'=>'home'])@endcomponent
@endsection