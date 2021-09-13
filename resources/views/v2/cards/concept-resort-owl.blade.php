{{--
    Caja de concept con nombre del rateplan
--}}
@php
    $gmsClient = app('App\GMS\GMSClient');
    $hasPrivateOffer = false;
    $hasApiRate = false;
    $cssLabelOffer = "";


    if(!$gmsClient->isGuest() && $resort->hasPrivateOffer()  ){
        $hasPrivateOffer = true;
    }

    if ($resort->concept->api_rate == 1 && $resort->rate > 0) {
        $hasApiRate = true;

        $rate = $resort->rate;
        $discount = $resort->discount;

        if ($hasPrivateOffer && $resort->private_rate > 0 && $resort->private_discount > 0){
            $rate = $resort->private_rate;
            $discount = $resort->private_discount;
        }                            

        $rateDiscount = $discount > 0 ? ($rate - $discount):0;

        if(__currency() == 'MXN'){
            $rate     = __exchangeRateToMXN($rate, $resort->resort->ihotelier_id );
            $rateDiscount = __exchangeRateToMXN( $rateDiscount , $resort->resort->ihotelier_id );
        }

        $rate = number_format($rate, 0);
        $rateDiscount = number_format($rateDiscount, 0);

        $cssLabelOffer = 'label-offer-low';

        if(intval($resort->content->label) > 39 ){
            $cssLabelOffer = 'label-offer-medium';
        }

        if(intval($resort->content->label) > 49 ){
            $cssLabelOffer = 'label-offer-high';
        }
    }


    $classLazyLoad = (isset($lazyload) ? $lazyload : 'owl-lazy');

    $bookingModal = ($resort->type_booking == null) ? $resort->concept->type_concept : $resort->type_booking;
    $bookingModal = ($bookingModal == 0 )?  'offer_booking_hotel': 'offer_booking_flight';

@endphp
<div class="card card-resort h-card id-{{$resort->concept_id}}">
    <div class="card-header">

        @if(($resort->resort_id == 7  || $resort->resort_id == 8) && ($resort->concept_id == 53 || $resort->concept_id == 54))
            @php
                $img = asset('img/deals/banner-uno-'.App::getLocale().'.jpg?v='.time());
            @endphp
        @elseif($resort->resort_id == 9 && ($resort->concept_id == 53 || $resort->concept_id == 54))
            @php
                $img = asset('img/deals/banner-dos-'.App::getLocale().'.jpg?v='.time());
            @endphp
        @else
            @php
                $img = asset($resort->img_concept);
            @endphp
        @endif

        <img class="w-100 {{ $classLazyLoad }}" data-src="{{ $img }}" alt="{{ $resort->concept->content->title }}" title="{{ $resort->concept->content->title }}">
        
    </div>

    <div class="card-body div-title">
        <div class="row no-gutters">
            <h3 class="card-title">{{ $resort->concept->content->title }}</h3>
        </div>
    </div>
    <div class="card-body">
        <div class="card-text">
            <a class="meal-plan">
                {{$resort->ratePlan->getName(\App::getLocale()) }}
            </a>
            <div class="row d-flex no-gutters">
                <div class="col-12">
                    <ul class="inclusion">
                        @php
                            $count = 0;
                        @endphp
                        @foreach($resort->content->inclusion as $inclusion)
                            @php
                                if ($count++ >= 3) {
                                    continue;
                                }
                            @endphp
                            <li>{!! $inclusion !!}</li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-12 text-right">
                    <a href="#" data-toggle="modal" data-target="#modal_dynamic" data-modal_content = '@include('v2.modals.resort_concept_v2',['resort' => $resort])'>
                        {{__('general.view_more')}}
                    </a>
                </div>
            </div>


        </div>
        <div class="room-offer ">
            <div class="row d-flex no-gutters mb-2">
                <div class="col-6 room-promotion align-self-center">
                    @if ($hasApiRate)
                        <p class="rate-from">
                            {{__('general.starting_at')}} @if($rateDiscount > 0)<span> {{ $rate }}  {{__currency()}} </span> @endif
                        </p>
                        <p class="rate">
                            ${{ $rateDiscount > 0 ? $rateDiscount:$rate }} <span>{{__currency()}}</span>
                        </p>
                        <p class="rate-description">
                            {{__('general.per_room_per_night')}}
                        </p>
                    @else
                        <p class="rate rate-label">{{ $resort->content->label }}</p>
                    @endif
                </div>
                <div class="col-6 text-right align-self-center">
                    <a href="#" data-toggle="modal" data-target="#{{$bookingModal}}"
                        data-modal_data = '{{json_encode($resort->modal_data)}}'
                        class="btn btn-primary text-uppercase  av-btn-rates">
                        
                        {{__('general.book')}}
                    </a>
                </div>
            </div>
    
            <p class="travel-window travel-window-small">
                {{__('general.card_travel_window')}}
                <label> {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_start)) }} {{__('general.to') }} {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_end)) }} </label>
            </p>
        </div>
    </div>
</div>