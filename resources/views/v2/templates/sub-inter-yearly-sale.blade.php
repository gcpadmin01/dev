@php
    use Illuminate\Support\Carbon;

    $flagMobile = (\Agent::isMobile() || \Agent::isTablet());
    $offer = $concept->id == 54 || $concept->id == 95 ? 'buen_fin':'black_friday';

@endphp

@extends('/interna')

@section('title', $concept->content->seo_title )
@section('metadescription', $concept->content->seo_metadescription)

@push('metas')
    @if($concept->index_follow == 1)
        <meta name="robots" content="index, follow">
    @else
        <meta name="robots" content="noindex, nofollow">
    @endif
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/deals-detail.css') }}" integrity="{{ Sri::hash('css/deals-detail.css') }}"
          crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/yearly_sale.css') }}" integrity="{{ Sri::hash('css/yearly_sale.css') }}"
          crossorigin="anonymous">
@endpush

@push('scripts')
    <script src="{{mix('/js/_deals-detail.js')}}" integrity="{{ Sri::hash('/js/_deals-detail.js') }}"
            crossorigin="anonymous"></script>
    <script src="{{mix('/js/_year_offer.js')}}" integrity="{{ Sri::hash('/js/_year_offer.js') }}"
            crossorigin="anonymous"></script>
    <script src="https://player.vimeo.com/api/player.js" defer onload="onloadVimeo()"></script>
@endpush

@section('interna')
    <div class="hidden datenow {{ date('Y-m-d H:i:s') }}"></div>
    <section>
        <img src="{{$concept->content->landing_img}}" class="img-fluid w-100" alt="{{$concept->content->seo_alt}}"
             title="{{$concept->content->seo_title}}">
    </section>
    <div class="sub-inter-special gms">

        @include('parts.scripts', ['section'=>'Offers', 'page'=>$slug])

        @php
            $fecha_fin=date('d-m-Y');
        @endphp

        @if($concept->content->concept_id=='39'&& $fecha_fin=='03-09-2019')

            <section>

                <div class="d-flex align-items-center justify-content-center">

                    @if (App::getLocale() == 'en')
                        <img src="http://i.countdownmail.com/86yud.gif"
                             alt="countdownmail" {{(Agent::isMobile() && !Agent::isTablet())?'width=100%':''}}>
                    @else
                        <img src="http://i.countdownmail.com/87pmy.gif"
                             alt="countdownmail" {{(Agent::isMobile() && !Agent::isTablet())?'width=100%':''}}>
                    @endif
                </div>
            </section>
        @endif

        {{-- @component('parts/extras/breadcrum', ['slug'=>$slug, 'class' => '']) @endcomponent --}}

        @if($concept->estado == 'valid' && count($bloques) > 0 || count($orderRst) > 0)

            <section class="container">
                <div class="row no-gutters mb-4">
                    <div class="col-12 d-none">
                        <div class="dropdown">
                            <button class="btn btn-primary " type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('general.lb_filter')}}:
                            </button>
                            <form class="dropdown-menu pl-4 pr-4" id="dropdownContent"
                                  aria-labelledby="dropdownMenuButton">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input"
                                               {{ (empty($filtros) )? 'checked' : '' }}
                                               value="all"
                                               id="allDestinations">
                                        All
                                    </label>
                                </div>

                                @foreach($destinations as $destination)
                                    <div class="form-check">
                                        <label class="form-check-label" style="font-size: 1rem; font-weight: 500;">
                                            <input name="destinations" type="checkbox"
                                                   class="form-check-input check-input-destino"
                                                   {{ (in_array($destination->identifier, $filtros) || empty($filtros) )? 'checked' : '' }}
                                                   value="{{ $destination->identifier }}"
                                                   id="{{ $destination->identifier }}">
                                            {{$destination['name_'.\App::getLocale()]}}
                                        </label>


                                        @foreach($unicResorts as  $resort)
                                            @if($resort->destination_id == $destination->id)
                                                <div class="form-check">
                                                    <label class="form-check-label"
                                                           style="font-size: 1rem; margin-left: 15px;">
                                                        <input name="resorts" type="checkbox"
                                                               class="form-check-input check-input-resort"
                                                               {{ (in_array($resort->destination_id, $filtros) || empty($filtros) )? 'checked' : '' }}
                                                               value="{{ $resort->id }}"
                                                               id="{{ $resort->id }}"
                                                        > {{$resort->name}}
                                                    </label>
                                                </div>
                                            @endif
                                        @endforeach
                                    </div>

                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Contenido del primer bloque --}}
            @php
                $firstBloq = count($bloques) > 0 ? $bloques->shift():[];
                if(count($bloques) > 0){
                    $firstBloqUniqueResorts = $firstBloq->unique('resort_id');
                }

                $mexicamCaribbean = $orderRst->filter( function ($collection) {
                    return $collection->first()->resort->destination->destination_group == 1;
                });

                $caribbeanIsland = $orderRst->filter( function ($collection) {
                    return $collection->first()->resort->destination->destination_group == 2;
                });

            @endphp

            <section class="container desc-offer">
                <div class="row m001land">
                    <div class="col-lg-12 col-md-12 mb-contain d-flex">
                        <div class="col-lg-12">
                            <p class="main-description">{!! $concept->content->title_template !!}</p>
                        </div>
                        <div class="main-div">
                            <h1 class="title-main">{!!$concept->content->title !!}</h1>
                            {{-- <h1 class="title-main">{{__('years-deals.title_offer_'.$offer)}}</h1> --}}
                            <div class="text-offer">
                                <p>{!! $concept->content->subtitle!!}</p>
                                {{-- <p>{{__('years-deals.title_off_'.$offer)}}</p> --}}
                            </div>
                        </div>

                        <div class="col-lg-12 mt-4 title-info">
                            {{-- <p class="title-info text-center">"Visit our beautiful beach destinations and experience the comfort, fun and exclusive amenities that Royal Resorts have for you and your family. It is always a good time to live incredible adventures with your family, your significant other or your friends. "</p> --}}
                            {!! $concept->content->description !!}
                        </div>

                        @if($mexicamCaribbean->count() > 0 && $caribbeanIsland->count() > 0)
                            <div class="choose-destination">

                                <label>{{__('years-deals.choise-btn')}}</label>
                                <div class="btn-group">
                                    @if($mexicamCaribbean->count() > 0)
                                        <button class="btn-dstn {{$dstnGroup == 1 ? 'active-dstn':''}}"
                                                data-container="{{$dstnGroup == 1 ? 'main':'other'}}">{{__('years-deals.choise-btn1')}}</button>
                                    @endif
                                    @if($caribbeanIsland->count() > 0)
                                        <button class="btn-dstn {{$dstnGroup == 2 ? 'active-dstn':''}}"
                                                data-container="{{$dstnGroup == 2 ? 'main':'other'}}">{{__('years-deals.choise-btn2')}}</button>
                                    @endif
                                </div>
                            </div>
                        @endif

                        <div class="col-lg-4 offset-lg-8 col-12 paid-method text-right">
                            <label>{{__('years-deals.label-pay')}}</label>
                            <img src="{{asset('img/amex.png')}}" alt="amex">
                            <img src="{{asset('img/mc.png')}}" alt="amex">
                            <img src="{{asset('img/visa.png')}}" alt="amex">
                        </div>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 main">
                    <div class="row">
                        @foreach ($mexicamCaribbean as $rstPlans)
                            @if(count($rstPlans))
                                <div class="col-lg-12 col-md-6 pt-3 pb-3 content-card">
                                    @include('v2.cards.concept-resort-resort',['resort' => $rstPlans[0],'plans' => $rstPlans,"flagMobile" => $flagMobile])
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-12 other {{ $mexicamCaribbean->count() > 0 ? 'd-none': '' }}">
                    <div class="row">
                        @foreach ($caribbeanIsland as $rstPlans)
                            @if(count($rstPlans))
                                <div class="col-lg-12 col-md-6 pt-3 pb-3 content-card">
                                    @include('v2.cards.concept-resort-resort',['resort' => $rstPlans[0],'plans' => $rstPlans,"flagMobile" => $flagMobile])
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                <div class="info-call col-6 m-auto text-center">
                    <hr>
                    <div class="d-flex justify-content-center align-items-center">
                        <img src="{{asset('img/icon-footer/phone.svg')}}">
                        <p class="text-call ml-2 mb-0 text-center"><b>{!! __("general.call-info-offer") !!}</b></p>
                    </div>
                    <hr>
                </div>

            </section>
    @endif
@endsection