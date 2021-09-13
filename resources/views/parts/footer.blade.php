<?php
    $gmsClient = app('App\GMS\GMSClient');
    $page = (isset($page))? $page : 'home';
?>
<footer>
    <div class="w-100">
        <div class="container">
            <div class="d-flex justify-content-end">
                <a class="subir" href="#">
                    <img class="lazyload" src="https://royalreservations.com/img/icono-flecha-footer.png" alt="Up">
                </a>
            </div>

            <div class="row pt-5 pb-4" style="border-bottom: solid 1px gray;">
                <div class="col-md-6 d-none d-md-block">
                    <span class="text-uppercase font-weight-bold title">{{ __('footer.resorts_destination.self') }}</span>
                    <div class="row">
                        <div class="col-md-6">
                            <ul>
                                <li><a class="font-weight-bold"
                                       href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/cancun/".__('routes.things_cun')) }}">{{ __('header.menu.beach_destinations.cancun') }}</a>
                                </li>
                                
                                <li>
                                    <span class="badge" style="color: #fff;background: #ea5e00; padding: 3px 5px 5px 5px;">New</span>
                                    <a href="{{ lang_url("/" . Lang::get('routes.beach_resorts') . "/royal-uno") }}">Royal Uno All Inclusive Resort & Spa</a>
                                </li>
                                
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-sands") }}">The Royal Sands All Suites Resort & Spa</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-islander") }}">The Royal Islander All Suites Resort</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-cancun") }}">The Royal Cancun All Suites Resort</a>
                                </li>
                            </ul>
                            <ul>
                                <li><a class="font-weight-bold"
                                       href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/riviera-maya/".__('routes.things_riv')) }}">Riviera Maya</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/grand-residences-riviera-cancun") }}">Grand Residences Riviera Cancun Resort</a>
                                </li>
                            </ul>
                            <ul>
                                <li><a class="font-weight-bold"
                                       href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/playa-del-carmen/".__('routes.things_pla')) }}">Playa del Carmen</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-haciendas")}}">The Royal Haciendas All Suites Resort & Spa</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul>
                                <li><a class="font-weight-bold"
                                       href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/st-maarten/".__('routes.things_stm')) }}">Sint Maarten</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-villas-at-simpson-bay-resort")}}">The Villas at Simpson Bay Beach Resort & Marina</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/simpson-bay-resort") }}"> Simpson Bay Resort, Marina & Spa </a>
                                </li>
                            </ul>
                            <ul>
                                <li><a class="font-weight-bold"
                                       href="{{ lang_url("/".Lang::get('routes.beach_destinations')."/curacao/".__('routes.things_cur')) }}">Curacao</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.beach_resorts')."/the-royal-sea-aquarium") }}">The Royal Sea Aquarium Resort</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-none d-md-block">
                    <span class="text-uppercase font-weight-bold title">{{ __('footer.type_of_trips.self') }}</span>

                    <ul>
                        <li><a class="icon icon-family-vacations"
                               href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_family')) }}">
                                {{--<img src="{{asset('img/icon-footer/family-vacations.png')}}" class="pr-2 size-img-footer" alt="" style="" >--}}
                                {{ __('footer.type_of_trips.family_vacations') }}
                            </a>
                        </li>
                        <li>
                            <a class="icon icon-romantic"
                               href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_romantic')) }}">
                                {{--<img src="{{asset('img/icon-footer/romantic.png')}}" class="pr-2 size-img-footer" alt="" style="" >--}}
                                {{ __('footer.type_of_trips.romantic_getaway') }}
                            </a>
                        </li>
                        <li>
                            <a class="icon icon-diving-snorkel"
                               href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.adventure')) }}">
                                {{--<img src="{{asset('img/icon-footer/diving-snorkel.png')}}" class="pr-2 size-img-footer" alt="" style="" >--}}
                                {{ __('footer.type_of_trips.adventure') }}
                            </a>
                        </li>
                        <li>
                            <a class="icon icon-wellness"
                               href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_spa')) }}">
                                {{--<img src="{{asset('img/icon-footer/wellness.png')}}" class="pr-2 size-img-footer" alt="" style="" >--}}
                                {{ __('footer.type_of_trips.wellness') }}
                            </a>
                        </li>
                        <li>
                            <a class="icon icon-honeymoon"
                               href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_honeymoon')) }}">
                                {{--<img src="{{asset('img/icon-footer/honeymoon.png')}}" class="pr-2 size-img-footer" alt="" style="" >--}}
                                {{ __('footer.type_of_trips.weddings_honeymoon') }}
                            </a>
                        </li>
                        <li>
                            <a class="icon icon-golf"
                               href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_golf')) }}">
                                {{--<img src="{{asset('img/icon-footer/golf.png')}}" class="pr-2 size-img-footer" alt="" style="" >--}}
                                {{ __('header.menu.type_of_trips.golf') }}
                            </a>
                        </li>
                        <li>
                            <a class="icon icon-bussines"
                               href="{{ lang_url("/".Lang::get('routes.experiences')."/".__('routes.experience_business')) }}">
                                {{--<img src="{{asset('img/icon-footer/bussines.png')}}" class="pr-2 size-img-footer" alt="" style="" >--}}
                                {{ __('footer.type_of_trips.business_meetings') }}
                            </a>
                        </li>
                    </ul>

                </div>
                
{{--                <div class="col-5 d-md-none d-flex justify-content-center ">--}}
{{--                    <img data-src="{{ asset('/img/royalreservations-vertical.png') }}" class="w-100 lazyload" alt="Royal Reservations"/>--}}
{{--                </div>--}}

                <div class="col-12 col-md-3">
                    <span class="text-uppercase font-weight-bold title d-none d-md-block" style="">{{ __('footer.about_royal.self') }}</span>

                    <ul>
                        <li>
                            <a href="{{ lang_url("/".Lang::get('routes.about_us')) }}">{{ __('footer.about_royal.who_we_are') }}</a>
                        </li>
                        <li>
                            <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.why_book')) }}">{{ __('footer.about_royal.why_booking') }}</a>
                        </li>
                        <li>
                            <a class="datalayer-bestdeal" href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.best_deal')) }}" id="BestDeal2">{{ __('footer.about_royal.best_deal_guaranteed') }}</a>
                        </li>
                        <li>
                            <a href="{{ route('webcams') }}">
                                {{__('general.webcam_title')}}
                            </a>
                        </li>
                        <li>
                            <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.terms_of_use')) }}">{{ __('footer.about_royal.terms_of_use') }}</a>
                        </li>
                        <li>
                            <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.privacy_policy')) }}">{{ __('footer.about_royal.policy_privacy') }}</a>
                        </li>
                        @if($gmsClient->isGuest())
                            <li>
                                <a target="_blanck" href="{{ route('login.show') }}">
                                    Travel Agent
                                </a>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="col-12 d-flex justify-content-center redes-sociales mb-4">
                    <a href="//www.facebook.com/RoyalReservations" target="_blanck" class="it-red">
                        <img class="lazyload" data-src="{{asset('/img/icon-footer/facebook.png')}}" alt="Facebook Royal Reservations">
                    </a>
                    <a href="https://twitter.com/royalRSV" target="_blanck" class="it-red">
                        <img class="lazyload" data-src="{{asset('/img/icon-footer/twitter.png')}}" alt="Twitter Royal Reservations">
                    </a>
                    <a href="https://www.instagram.com/royalreservations/" class="it-red" target="_blanck">
                        <img class="lazyload" data-src="{{asset('/img/icon-footer/instagram.png')}}" alt="Instagram Royal Reservations">
                    </a>
                    <a href="https://www.youtube.com/channel/UC1N1ZjyI2_mOKQTq2BNOM0Q/videos"
                        target="_blanck" class="it-red ">
                        <img class="lazyload" data-src="{{asset('/img/icon-footer/youtube.png')}}" alt="Youtube Royal Reservations">
                    </a>


                </div>
                <div class="col-12 d-flex justify-content-center">
                    <label class="text-center">{{ __('general.we_are_part_of_the_royal_resorts') }}</label>
                </div>
                <div class="col-12 d-flex justify-content-center main-logos">
                    <img class="lazyload" data-src="{{asset('/img/logo/royalresorts.svg')}}" alt="logo royalresorts">
                    <img class="lazyload" data-src="{{asset('/img/logo/royalreservations-vertical.png')}}" alt="Logo Royal Reservations">
                </div>

            </div>
            <div class="row py-4 d-none d-md-flex justify-content-center">
                {{-- <div class="col-md-4">
                    <img class="img-fluid pr-2 lazyload" data-src="{{ asset('img/logo-royalreservations-min.png') }}" alt="Royal Reservations">
                </div> --}}
{{--                <div class="col-md-8 ">--}}
{{--                    <p style="font-size: 12px; overflow: hidden;">{{ __('footer.notice', ['year' => date('Y')]) }}</p>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="copyright text-center">
        <a class="text-white ligera d-none d-md-block">{{ __('footer.copyright', ['year' => date('Y')]) }}</a>
        <a class="text-white ligera d-block d-md-none">{{ __('footer.copyright', ['year' => date('Y')]) }}</a>
    </div>
</footer>


@include('v2.modals.gms-subscribe_bb')