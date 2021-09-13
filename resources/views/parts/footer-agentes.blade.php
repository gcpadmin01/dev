<footer>
    <div class="w-100 d-none d-md-block">
        <div class="container">
            <div class="row d-flex justify-content-end">
				<span class="">
					<a class="subir" href="#">
						<img class="lazy" src="https://royalreservations.com/img/icono-flecha-footer.png" alt="Up">
					</a>
				</span>
            </div>

            <div class="row pt-5 pb-4" style="border-bottom: solid 1px gray;">


                <div class="col-md-3">
                    
                </div>

                <div class="col-md-3">

           
                </div>

            </div>
            <div class="row py-4">
                <div class="col-md-4">
                    <img class="img-fluid pr-2" src="{{ asset('img/logo-royalreservations-min.png') }}"
                         alt="Royal Reservations">
                </div>
                <div class="col-md-8">
                    <p style="font-size: 12px; overflow: hidden;">{{ __('footer.notice', ['year' => date('Y')]) }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-100 d-block d-md-none">
        <div class="container">
            <div class="row py-2 py-md-5">
                <div class="col-12 col-md-4 pl-3 fs-8">
                    <div class="row d-flex justify-content-end">
						<span class="">
							<a class="subir" href="#">
								<img class="lazy" src="{{asset('/img/icono-flecha-footer.png')}}" alt="Up">
							</a>
						</span>
                    </div>

                    <div class="row py-2 ">
                        <div class="col-5 d-flex justify-content-center ">
                            <img src="{{ asset('/img/royalreservations-vertical.png') }}" class="w-100" alt="Royal Reservations"/>
                        </div>
                        <div class="col-7">
                            <ul>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.about_us')) }}">{{ __('footer.about_royal.who_we_are') }}</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.why_book')) }}">{{ __('footer.about_royal.why_booking') }}</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.best_deal')) }}">{{ __('footer.about_royal.best_deal_guaranteed') }}</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.terms_of_use')) }}">{{ __('footer.about_royal.terms_of_use') }}</a>
                                </li>
                                <li>
                                    <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.privacy_policy')) }}">{{ __('footer.about_royal.policy_privacy') }}</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="col-12 d-flex justify-content-center">
                {{--<div class="row">
                    <span class="text-uppercase font-weight-bold title" style="" >{{ __('footer.follow_us') }}</span>
                </div>--}}
                <div class="redes-sociales red-footer py-2">
                    <a href="https://www.facebook.com/RoyalReservations" class="it-red">
                        <img src="/img/icon-footer/facebook.png" alt="Facebook">
                    </a>
                    <a href="https://twitter.com/royalRSV" class="it-red">
                        <img src="/img/icon-footer/twitter.png" alt="twitter">
                    </a>
                    <a href="https://www.instagram.com/royalreservations/" class="it-red">
                        <img src="/img/icon-footer/instagram.png" alt="instagram">
                    </a>
                    <a href="https://www.youtube.com/channel/UC1N1ZjyI2_mOKQTq2BNOM0Q/videos"
                       class="it-red ">
                        <img src="/img/icon-footer/youtube.png" alt="youtube">
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container">
            <div class="d-none d-md-block">
                <div class="row d-flex justify-content-center ">
                    <a class="text-white ligera">{{ __('footer.copyright', ['year' => date('Y')]) }}</a>
                </div>
            </div>

            <div class="d-block d-md-none">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center flex-wrap">
                        <a class="text-white ligera">{{ __('footer.copyright', ['year' => date('Y')]) }}</a>
                    </div>
                    <div class="col-md-5 col-4 text-center">
                    </div>
                    <div class="col-md-3 col-4 text-left">
                    </div>
                </div>
            </div>
        </div>

    </div>

</footer>



