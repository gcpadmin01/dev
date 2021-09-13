@php
    $gmsClient = app('App\GMS\GMSClient');
    $hasPrivateOffer = false;
    $hasRepetitivo = false;


    if(!$gmsClient->isGuest() && $resort->hasPrivateOffer()  ){
        $hasPrivateOffer = true;
        if($resort->ihotelier_repetitive_id > 0){
            $hasRepetitivo = true;
        }
    }

    $bookingModal = ($resort->type_booking == null) ? $resort->concept->type_concept : $resort->type_booking;
    $bookingModal = ($bookingModal == 0 )?  'offer_booking_hotel': 'offer_booking_flight';
@endphp
<div class="card card-resort h-100 {{join(' ',$resort->resort->destinations->pluck('destination_id')->toArray())}}">
    <div class="card-header">
        
        <img class="w-100 lazyload" data-src="{{ asset($resort->img_small)}}" alt="{{ $resort->resort->name}}" title="{{ $resort->resort->name}}">

        @if($hasPrivateOffer )
            <div class="private-offer">
                <div>
                    {{__('gms.private offer')}}
                    <img class="owl-lazy" data-src="/img/deals/icons-deals/icon-ofertas.svg" alt="Offer icon">
                </div>
                <div>
                    @if($hasRepetitivo && $gmsClient->isRepetitive())
                        {{ $resort->content->repetitive['label'] }}
                    @else
                        {{ $resort->content->private_offer['label'] }}
                    @endif
                </div>
            </div>
        @endif

        <a class="icon-small" href="#" data-toggle="modal" 
            data-target="#picture_v2"
            data-resort = '{{ $resort->resort->name }}'
            data-img = '{{ asset($resort->img_big)}}'>

            <img class="w-100 owl-lazy" data-src="{{asset('img/icon-galeria/zoom-in.png')}}" alt="Zoom">
        </a>
    </div>
    <div class="card-body div-title">
        <div class="row no-gutters">
            <a class="card-title col-12" href="{{ __('routes.hotels-url.'.$resort->resort->id) }}">
                {{$resort->resort->name}}
            </a>
            <span class="card-subtitle col-7">
                {{ $resort->resort->destination->{'name_'.\App::getLocale()} }}
                @if(!empty($resort->resort->destination->{'country_'.\App::getLocale()}) )
                    ,  {{ $resort->resort->destination->{'country_'.\App::getLocale()} }}
                @endif
            </span>
            <div class="stars-group d-flex justify-content-end col-5 stars-{{str_replace('.','_',$resort->resort->stars)}}">
                <img class="owl-lazy"  data-src="{{asset('/img/icon-galeria/stars-'.str_replace('.','-',$resort->resort->stars).'.svg')}}" alt="Stars Icon" title="Stars Icon">
                {{--
                @for($w=0;$w<$resort->resort->stars;$w++)
                        @if($resort->resort->stars - ($w+1) >=0)
                        <img class="owl-lazy"  data-src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="16">
                        @else
                            <img class="owl-lazy" data-src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="16">
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

            <div class="row no-gutters">
                <div class="col-7 col-md-8 p-0">
                    @if(isset($validThru))
                        <div class="travel-window">
                            {{__('general.valid thru')}}:
                            <label>{{ ucfirst(__date('dates.SHORT_YEAR', $resort->concept->booking_window_end)) }}</label>
                        </div>
                    @endif
                </div>
                <div class="col-5 col-md-4 p-0 text-right">
                    <a href="#" data-toggle="modal" 
                        data-target="#modal_dynamic" 
                        data-modal_content = '@include('v2.modals.resort_concept_v2',['resort' => $resort])'>
                        {{__('general.view_more')}}
                    </a>
                </div>
            </div>

        </div>
    </div>
    <div class="room-offer mb-3 row d-flex">
            <div class="col-6 room-promotion align-self-center">
                <p class="m-0">{{$resort->content->label}}</p>
            </div>
            <div class="col-6 text-center align-self-center">
                <a href="#" data-toggle="modal" 
                    data-target="#{{$bookingModal}}"
                    data-modal_data = '{{json_encode($resort->modal_data)}}'
                    class="btn btn-primary text-uppercase  av-btn-rates">
                    {{__('general.book')}}
                </a>
            </div>
    </div>
</div>