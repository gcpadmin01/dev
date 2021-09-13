@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@component('/parts/scripts', [
        'section'=>'GMS', 
        'page'=>$page
    ]) 
@endcomponent

@section('interna')
<div class="gms">
    <div class="header-gms">
         <img src="/img/gms/header-gms.jpg" alt="My royal" title="My royal">
    </div>
    <div class="gms-main">
        <section class="container">
            <div class="row">
                <div class="col-md-3 menu-derecho">
                    @include('gms.menu')
                 </div>
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <h3>{{__('gms.Hello')}} {{$account->memberInfo->name->firstName}}</h3>
                    <p class="text">{{__('gms.welcome-msj')}}</p>
                    <div class="clear hidden-xs"></div>
                    <div class="row">
                        <div class="col-md-6 col-sm-4 text-center">
                            <img class="lazyload icon-dashboard" data-src="{{ asset('/img/gms/icons/dashboard-'.\App::getLocale().'.gif') }}" alt="My royal sign-up">
                        </div>
                        <div class="col-md-6 col-sm-8">
                            <h2>{{__('gms.WITH “YOUR ROYAL” YOU CAN:')}}</h2>
                            <ul>
                                <li><p>{{__('gms.- Check your reservation information')}}</p></li>
                                <li><p>{{__('gms.- Easily modify your reservations')}}</p></li>
                                <li><p>{{__('gms.- Access to your booking history')}}</p></li>
                                <li><p>{{__('gms.- Manage your profile')}}</p></li>
                                <li><p>{{__('gms.- Enjoy special private discounts')}}</p></li>
                            </ul>
                        </div>
                        <div class="container section-destinatios">
                             <h3>{{__('gms.Nuestros destinos de playa')}}</h3>
                             <hr class="blue">
                             <div class="row align-items-start hover03">
                                <div class="col-md-4 col-sm-6">
                                    <a href="{{lang_url("/" . Lang::get('routes.beach_destinations') . "/cancun/" . __('routes.things_cun'))}}">
                                        <figure>
                                            <img class="w-100 lazyload" data-src="/img/beach-destination-cancun-general.jpg" alt="Cancun" title="Cancun"/>
                                        </figure>
                                    </a>
                                    <p>{{__('gms.Cancun')}}</p>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <a href="{{lang_url("/" . Lang::get('routes.beach_destinations') . "/playa-del-carmen/" . __('routes.things_pla'))}}">
                                        <figure>
                                            <img class="w-100 lazyload" data-src="/img/beach-destination-playa-del-carmen-general.jpg" alt="Playa del carmen" title="Playa del carmen"  />
                                        </figure>
                                    </a>
                                    <p>Playa del Carmen</p>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <a href="{{lang_url("/" . Lang::get('routes.beach_destinations') . "/riviera-maya/" . __('routes.things_riv'))}}">
                                        <figure>
                                            <img class="w-100 lazyload" data-src="/img/beach-destination-puerto-morelos-general.jpg" alt="Puerto Morelos" title="Puerto Morelos" />
                                        </figure>
                                    </a>
                                    <p>Puerto Morelos</p>
                                </div>

                                <div class="col-md-4 col-sm-6">
                                    <a href="{{ lang_url("/" . Lang::get('routes.beach_destinations') . "/punta-cana/" . __('routes.things_pun')) }}">
                                        <figure>
                                            <img class="w-100 lazyload" data-src="/img/beach-destination-punta-cana-general.jpg" alt="Punta Cana" title="Punta Cana"/>
                                        </figure>
                                    </a>
                                    <p>Punta Cana</p>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <a href="{{ lang_url("/" . Lang::get('routes.beach_destinations') . "/curacao/" . __('routes.things_cur')) }}">
                                        <figure>
                                            <img class="w-100 lazyload" data-src="/img/beach-destination-curacao-general.jpg" alt="Curacao" title="Curacao"/>
                                        </figure>
                                    </a>
                                    <p>Curacao</p>
                                </div>
                                <div class="col-md-4 col-sm-6">
                                    <a href="{{ lang_url("/" . Lang::get('routes.beach_destinations') . "/st-maarten/" . __('routes.things_stm')) }}">
                                        <figure>
                                            <img class="w-100 lazyload" data-src="/img/beach-destination-st-maarten-general.jpg" alt="St maarten" title="St maarten" />
                                        </figure>
                                    </a>
                                    <p>St. Marteen</p>
                                </div>
                            </div>
                        </div>
                        <div class="container section-discounts">
                            <h3>{{__('gms.Discover discounts')}}</h3>
                            <hr class="yellow">
                            <div class="row mb-3 ">
                                @foreach($concepts as $concept)
                                    <div class="col-12 col-md-6">
                                        <a href="{{ route('concept.detail',['concepto' => $concept->getUrl(\App::getLocale())]) }}">
                                            <img class="w-100" src="{{ $concept->content->img }}" alt="{{$concept->name}}" title="{{$concept->name}}">
                                        </a>
                                    </div>
                                @endforeach
                            </div>

                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ lang_url("/".__('routes.deals').'/'.__('routes.hotels')) }}" type="text" class="btn b-azul" >
                                        {{__('gms.Ver todas las ofertas')}}
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>             
            </div>
        </section>
         <div class="clear-3"></div>
    </div>
</div>
@endsection