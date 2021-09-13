<header class="container-fluid sticky-top">
	<div class="row">
		<div class="w-100 bg-blue">
			<div class="container">
				<nav class="navbar-nav navbar-toggleable-sm bg-blue header-top">
						<li>.</li>
						<li>.</li>
						<li>.</li>
						<li>.</li>
						<li class="nav-item dropdown d-none d-md-block exception">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img class="pr-1" src="{{asset('img/whatsapp-icon.svg')}}" alt="Whatsapp icon" title="Whatsapp icon" width="21"/>{{ __('header.top.call_us.self') }}
							</a>
							<div id="drop-call" class="dropdown-menu" style="">
								<div class="row no-gutters mx-4" style="">
									<ul class="col-6 menu-information" style="">
										<li class="menu-title pb-1 w-100 active" style=""><b>{{ __('header.top.call_us.for_resorts_in_mexico') }}</b>
											<div></div>
										</li>
										<li class="menu-title pb-1 w-100"><b>{{ __('header.top.call_us.for_resorts_in_caribbean') }}</b>
											<div></div>
										</li>
										<li class="menu-title pb-1 w-100"><b>{{ __('header.top.call_us.for_resorts_in_puntacana') }}</b>
											<div></div>
										</li>
										<li class="menu-title pb-1 w-100"><b>{{ __('header.top.call_us.for_resorts_in_puntacana2') }}</b>
											<div></div>
										</li>
										<li class="menu-title pb-1 w-100"><b>{{ __('header.top.call_us.for_resorts_in_puntacana3') }}</b>
											<div></div>
										</li>
									</ul>
									<ul class="col content-information active">
										<li class="w-100"><a href="tel:+5219984254788">Whatsapp +5219984254788</a></li>
										<li class="w-100"><a href="tel:1-888-387-4755">USA {{ __('header.top.call_us.toll_free') }} 1-888-387-4755</a></li>
									</ul>
									<ul class="col content-information">
										<li class="w-100"><a href="tel:+5219981156413">Whatsapp +5219981156413</a></li>
										<li class="w-100"><a href="tel:1-888-228-7930">USA {{ __('header.top.call_us.toll_free') }} 1-888-228-7930</a></li>
									</ul>
									<ul class="col content-information">
										<li class="w-100"><a href="tel:+5219981156413">Whatsapp +5219981156413</a></li>
										<li class="w-100"><a href="tel:1-888-228-7980">USA {{ __('header.top.call_us.toll_free') }} 1-888-228-7980</a></li>
									</ul>
									<ul class="col content-information">
										<li class="w-100"><a href="tel:+5219981156413">Whatsapp +5219981156413</a></li>
										<li class="w-100"><a href="tel:1-888-840-1102">USA {{ __('header.top.call_us.toll_free') }} 1-888-840-1102</a></li>
									</ul>
									<ul class="col content-information">
										<li class="w-100"><a href="tel:+5219981156413">Whatsapp +5219981156413</a></li>
										<li class="w-100"><a href="tel:1-888-387-4757">USA {{ __('header.top.call_us.toll_free') }} 1-888-387-4757</a></li>
									</ul>
								</div>
								<div class="row px-4 no-gutters">
									<ul class="col-6" style="">
										<li class="menu-title pb-1 w-100" style=""><b>{{ __('header.top.call_us.customer_service') }}</b></li>
									</ul>
									<ul class="col-6">
										<li class="w-100"><a href="tel:1-888-721-4420">USA {{ __('header.top.call_us.toll_free') }} 1-888-721-4420</a></li>
										<li class="w-100"><a href="tel:01-800-020-1761">MEX {{ __('header.top.call_us.toll_free') }} 01-800-020-1761</a></li>
									</ul>
								</div>
							</div>
						</li>
						<?php
							$bool = App::getLocale() === "es";
						?> @if($bool)
						<li class="nav-item dropdown exception idiom">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-bottom: .7rem !important;">
									{{ __('general.lang.es') }}
								</a>
							<div class="dropdown-menu lenguage bg-blue m-0 b-0" aria-labelledby="navbarDropdownMenuLink" style="">
								<a class="dropdown-item text-right" href="{{ change_lang("en") }}">{{ __('general.lang.en') }}</a>
							</div>
						</li>
						@else
						<li class="nav-item dropdown exception idiom">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="padding-bottom: .7rem !important;">
									{{ __('general.lang.en') }}
								</a>
							<div class="dropdown-menu lenguage bg-blue m-0 b-0" aria-labelledby="navbarDropdownMenuLink" style="">
								<a class="dropdown-item text-right" href="{{ lang_url('es/') }}">{{ __('general.lang.es') }}</a>
							</div>
						</li>
						@endif
					</ul>
				</nav>
			</div>
		</div>
		<div class="w-100 av-bg-white">
			<div class="container header-button d-none d-md-block">
				<ul class="nav nav-pills nav-justified menu-principal ">
					<li class="nav-item d-flex align-items-center">
						<a href="{{ lang_url("/") }}" style="cursor: pointer !important;" class="logo-header"><img class="pr-2" id="logo-royal" src="{{ asset('img/logo-royal.svg') }}" alt="Royal Reservations" width="300" /></a>
					</li>
					
				</ul>
			</div>
		</div>
	</div>
</header>