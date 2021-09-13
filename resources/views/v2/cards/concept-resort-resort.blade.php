@php
    $gmsClient = app('App\GMS\GMSClient');
    $hasPrivateOffer = false;
    $hasApiRate = false;
    $cssLabelOffer = "";

    if(!$gmsClient->isGuest() && $resort->hasPrivateOffer()  ){
        $hasPrivateOffer = true;
    }

    $offer = '';

    $resortsExclusion = [];

    if(in_array($resort->resort->id,$resortsExclusion)){
        $offer = $resort->concept_id == 93 ? '_black_friday':'_buen_fin';
    }
    $carrousel = __('resorts/'.$resort->resort->identifier_rr.'/fact-sheet.carrousel_special'.$offer);

    $resortIdLabel = [15];

@endphp
<div class="vimeo-video row card-new bg-white resort-{{$resort->resort->id}} {{in_array($resort->resort->id,$resortIdLabel) ? 'active-card':''}} offerset">

    <div class="col-lg-3 p-0">
        @if(!$gmsClient->isGuest())
            <div class="content-gms">
                <div class="content-gms-label">
                    <img class="my-royal-icon" src="/img/gms/crown-2.svg" alt="My Royal">
                    <img class="my-royal-icon-label" src="/img/gms/my-royal.svg" alt="My Royal">
                </div>
                <div class="conteng-gms-descount">
                    <span>{{$plans->first()->content->PrivateOffer['label']}}</span>
                </div>
            </div>
        @endif

        <div class="contain-img owl-carousel-init owl-carousel owl-carousel-card owl-theme">
            @if(array_key_exists('vimeo', $carrousel))
                <div class="videobg-container videobg-mute">
                    <div class="videobg">
                        <div class="videobg-width">
                            <div class="videobg-aspect">
                                <div class="videobg-make-height">
                                    <div class="video videobg-hide-controls" data-vimeo="{{$carrousel['vimeo']}}"></div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <img class="videobg-sound videobg-sound-speaker" width="24" height="24" src="/img/icon-galeria/speaker.svg" alt="speaker">
                    <img class="videobg-sound videobg-sound-mute" width="24" height="24" src="/img/icon-galeria/mute.svg" alt="mute">
                </div>
            @endif
            @foreach($carrousel['images'] as $img)
                <img class="w-100"
                     src="{{asset('img/resorts/'.$resort->resort->identifier_rr.'/carrousel-special/'.$img['img'])}}"
                     alt="{{($img['alt'] == '' ? $resort->resort->name:$img['alt'])}}"
                >
            @endforeach
        </div>
    </div>
    <div class="col-lg-4 hotel-info">
        <div class="col-10 no-gutters-col title-resort">{{$resort->resort->name}}</div>
        <div class="row mt-2">
            <div class="col-6 col-md-5 text-destination align-flex">
                @php
                    $destination = $resort->resort->destination->{'name_'.\App::getLocale()};
                    $country = $resort->resort->destination->{'country_'. \App::getLocale()};
                @endphp
                {{ trans_choice('general.destination country', strlen($country) , ['destination' => $destination, 'country' => $country]) }}
            </div>
            <div class="col-4 col-md-4">
                <img class="lazyload" height="16px"
                     data-src="{{asset('/img/icon-galeria/stars-'.str_replace('.','-',$resort->resort->stars).'.svg')}}"
                     alt="Stars Icon" title="Stars Icon">
            </div>
        </div>
        <div class="col-12 no-gutters-col certificate">
            {!!__('resorts/'.$resort->resort->identifier_rr.'/fact-sheet.factories')!!}
        </div>
    </div>

    <div class="col-lg-5 plans {{count($plans) == 1 && !$flagMobile ? 'align-center':''}}">
        <div class="col-lg-12 no-gutters-col certificate-mobil">
            {!!__('resorts/'.$resort->resort->identifier_rr.'/fact-sheet.factories')!!}
        </div>
        @foreach ($plans as $plan)
            @php
                $inclusions = $plan->content->inclusion;
                $inclusion  = count($inclusions) > 0 ? $inclusions[0]:'';

                $hasApiRate = false;

                if ($plan->concept->api_rate == 1 && $plan->rate > 0) {
                    $hasApiRate = true;

                    $rate = $plan->rate;
                    $discount = $plan->discount;


                    if ($hasPrivateOffer && $plan->private_rate > 0 && $plan->private_discount > 0){
                        $rate = $plan->private_rate;
                        $discount = $plan->private_discount;
                    }

                    $rateDiscount = $discount > 0 ?  ($rate - $discount):0;

                    if(__currency() == 'MXN' && $plan->concept_id != 112){
                        $rate     = __exchangeRateToMXN($rate, $plan->resort->ihotelier_id );
                        $discount = __exchangeRateToMXN( $rateDiscount , $plan->resort->ihotelier_id );

                        $rateDiscount = $discount > 0 ?  ($rate - $discount):0;
                    }

                    if($plan->concept_id == 112){
                        $rateDiscount = $discount;
                    }

                    $rateDiscount = number_format($rateDiscount, 0);
                    $rate = number_format($rate, 0);


                    $cssLabelOffer = 'label-offer-low';

                    if(intval($plan->content->label) > 39 ){
                        $cssLabelOffer = 'label-offer-medium';
                    }

                    if(intval($plan->content->label) > 49 ){
                        $cssLabelOffer = 'label-offer-high';
                    }
                }

                $classLazyLoad = (isset($lazyload) ? $lazyload : 'lazyload');

                $bookingModal = ($resort->type_booking == null) ? $plan->concept->type_concept : $plan->type_booking;
                $bookingModal = ($bookingModal == 0 )?  'offer_booking_hotel': 'offer_booking_flight';


            @endphp

            <div class="row plan {{count($plans) == 1 ? 'flex-auto':''}}">
                <div class="col-5 offset-left">
                    <p class="title-plan text-left">{{$plan->ratePlan->getName(\App::getLocale()) }}</p>
                    <ul class="inclusion">
                        <li>{{($inclusions[0])}}</li>
                    </ul>
                </div>
                <div class="col-4 offset-left wp-lr room-promotion">
                    @if ($hasApiRate)
                        <p class="rate-from">
                            {{__('general.starting_at')}}  @if($rateDiscount > 0 )<span> {{ $rate }}  {{__currency()}} </span> @endif
                        </p>
                        <p class="rate">${{ $rateDiscount > 0 ? $rateDiscount:$rate }} <span>{{__currency()}}</span></p>
                        <p class="rate-description">
                            {{__('general.per_room_per_night')}}
                        </p>
                    @else
                        <p class="rate rate-label">{{ $plan->content->label }}</p>
                    @endif
                </div>
                @php

                @endphp
                <div class="col-3 offset-left wp-lr modal-set">
                    <div class="buttons text-center">
                        <a href="#" data-toggle="modal" data-target="#modal_dynamic"
                           data-modal_content='@include('v2.modals.resort_concept_v2',['resort' => $plan])'> {!!__('years-deals.view-more')!!}</a>
                        <button class="btn-booknew" data-toggle="modal" data-target="#{{$bookingModal}}"
                                data-modal_data='{{json_encode($plan->modal_data)}}'
                                class="btn btn-primary text-uppercase  av-btn-rates">
                            <label class="long-text">
                                {!!__('years-deals.book-now')!!}
                            </label>
                            <label class="small-text">
                                {!!__('years-deals.book-now-short')!!}
                            </label>
                        </button>
                    </div>
                </div>
                <p class="text-duration">
                    {{__('general.card_travel_window')}}
                    <label> {{ ucfirst(__date('dates.SHORT_YEAR', $plan->travel_start)) }} {{__('general.to') }} {{ ucfirst(__date('dates.SHORT_YEAR', $plan->travel_end)) }} </label>
                </p>
            </div>
        @endforeach
    </div>
</div>