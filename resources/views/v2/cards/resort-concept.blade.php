{{--
    Tarjeta de resort con el nombre del concepto
--}}
@php
    $gmsClient = app('App\GMS\GMSClient');
    $hasPrivateOffer = false;
    $hasRepetitivo = false;
    $hasApiRate = false;
    $cssLabelOffer = "";

    if(!$gmsClient->isGuest() && $resort->hasPrivateOffer()  ){
        $hasPrivateOffer = true;
        if($resort->ihotelier_repetitive_id > 0){
            $hasRepetitivo = true;
        }
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

    if (!isset($lazyload)) {
        $lazyload = false;
    }

    $bookingModal = ($resort->type_booking == null) ? $resort->concept->type_concept : $resort->type_booking;
    $bookingModal = ($bookingModal == 0 )?  'offer_booking_hotel': 'offer_booking_flight';
@endphp
<div class="card card-resort h-100 resort-{{ $resort->resort_id }}">
    <div class="card-header">
        @php
            $img = asset($resort->img_small);
            $bigImg = asset($resort->img_big);
            if($resort->resort_id == 15){
                $img = asset('img/resorts/royal-uno/royal-uno-offer-new.jpg');
                $bigImg = asset('img/resorts/royal-uno/royal-uno-offer-big-new.jpg');
            }
        @endphp
        <img class="w-100 lazyload" data-src="{{ $img }}" alt="{{ $resort->resort->name}}" title="{{ $resort->resort->name}}">
        @if($hasPrivateOffer )
            <div class="private-offer">
                <div>
                    {{__('gms.private offer')}}
                    <img class="lazyload" data-src="/img/deals/icons-deals/icon-ofertas.svg" alt="Offer Icon" title="Offer Icon" >
                </div>
                <div>
                    @if($hasRepetitivo && $gmsClient->isRepetitive())
                        {{ $resort->content->repetitive['label'] }}
                    @else
                        {{ $resort->content->private_offer['label'] }}
                    @endif
                </div>
            </div>    
        @else
            @if($hasApiRate)
                <div class="api-rate {{$cssLabelOffer}}">
                    @foreach (explode(" ",$resort->content->label) as $item)
                        <span>{{$item}}</span>                        
                    @endforeach
                </div>
            @endif
        @endif

        <a class="icon-small" href="#" data-toggle="modal" data-target="#picture_v2"
                data-resort = '{{ $resort->resort->name }}'
                data-img = '{{ $bigImg }}'
            >
            <img class="w-100 lazyload" data-src="{{asset('img/icon-galeria/zoom-in.png')}}" title="Zoom Icon" alt="Zoom Icon">
        </a>
    </div>
    <div class="card-body div-title">
        <div class="row no-gutters">
            <div class="col-12">
                <a class="card-title" href="{{ __('routes.hotels-url.'.$resort->resort->id) }}">
                    {{$resort->resort->name}}
                </a>
            </div>
            <div class="col-7">
                <span class="card-subtitle">
                    {{ $resort->resort->destination['name_'.\App::getLocale()] }}
                    @if(!empty($resort->resort->destination['country_'.\App::getLocale()]) )
                        ,  {{ $resort->resort->destination['country_'.\App::getLocale()] }}
                    @endif
                </span>
            </div>
            <div class="col-5 text-right">
                    <img class="lazyload" height="16px" data-src="{{asset('/img/icon-galeria/stars-'.str_replace('.','-',$resort->resort->stars).'.svg')}}" alt="Stars Icon" title="Stars Icon">
                    {{--
                    @for($w=0;$w<$resort->resort->stars;$w++)
                            @if($resort->resort->stars - ($w+1) >=0)
                            <img class="lazyload" data-src="{{asset('img/general/estrella.png')}}" width="16" alt="Stars Icon" title="Stars Icon">
                            @else
                                <img class="lazyload" data-src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon" width="16">
                            @endif
                    @endfor                    
                    --}}
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="card-text">
            <a class="meal-plan"
               href="{{ route('concept.detail',['concepto' => $resort->concept->getUrl(\App::getLocale())]) }}">
                {{ $resort->concept->content->title }}
            </a>

            <div class="row d-flex no-gutters">
                <div class="col-12">
                    <ul class="inclusion">
                        @php
                            $count = 0;
                            $inclusions = $resort->content->inclusion;
                            if($hasPrivateOffer){
                                $inclusions = $resort->content->private_offer['inclusion'];
                            }
                        @endphp
                        @foreach($inclusions as $inclusion)
                            @php
                                if ($count++ >= 3) {
                                    continue;
                                }
                            @endphp
                            <li class="{{ ($hasPrivateOffer && $count == 1)? 'private-offer-special-discount': "" }}">
                                {!! $inclusion !!}
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="col-12 d-flex justify-content-end">
                    <div class="text-right align-self-end">
                        <a href="#" data-toggle="modal" data-target="#modal_dynamic" data-modal_content = '@include('v2.modals.resort_concept_v2',['resort' => $resort])'>
                            {{__('general.view_more')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="room-offer ">
            <div class="row d-flex no-gutters mb-2">
                <div class="col-6 room-promotion align-self-center">
                    @if ($hasApiRate)

                        <p class="rate-from">
                            {{__('general.starting_at')}} @if($rateDiscount > 0 ) <span> {{ $rate }}  {{__currency()}} </span> @endif
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
                <div class="col-6 text-right  align-self-center">
                    <a href="#" data-toggle="modal" data-target="#{{$bookingModal}}"
                        data-modal_data = '{{json_encode($resort->modal_data)}}'
                        class="btn btn-primary text-uppercase  av-btn-rates">
                        {{__('general.book')}}
                    </a>
                </div>
            </div>
            @if(isset($validThru))
                <p class="travel-window travel-window-small">
                    {{__('general.card_travel_window')}}:
                    <label> {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_start)) }} {{__('general.to') }} {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_end)) }} </label>
                </p>
            @endif
        </div>

    </div>
</div>