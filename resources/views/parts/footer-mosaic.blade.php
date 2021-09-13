<footer>
    @if($page!='caribbean-islands')
    <div class="w-100 d-block">
        <div class="container">
            <div class="row py-2 py-md-5">
                <div class="col-12 pl-3 fs-8">
                    <div class="row d-flex justify-content-end">
						<span class="">
							<a class="subir" href="#">
								<img class="lazy" src="{{asset('/img/icono-flecha-footer.png')}}" alt="Up">
							</a>
						</span>
                    </div>

                    <div class="row py-2 d-flex justify-content-center">
                        <div class="d-flex justify-content-center ">
                            <a href="https://royalreservations.com/">
                            <img src="https://theroyalislander.com/img/logo/royal-resorts.png" class="w-100" alt="Royal Resorts"/>
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    @endif

    <div class="copyright">
        <div class="container">
            <div class="d-none d-md-block">
                <div class="row d-flex justify-content-center">
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



