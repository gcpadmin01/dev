<footer id="contacto-footer">
	<div class="w-100 je-bg-lgray pt-2- d-none d-md-block" >  
		<div class="container">

			<div class="row no-gutters d-flex justify-content-end">
				<span class="">
					<a class="subir" href="#">
						<img class="lazy" src="https://royalreservations.com/img/icono-flecha-footer.png" alt="Up">
					</a>
				</span>
			</div>


			<div class="row no-gutters py-4">
				<div class="col-md-4">
					<img class="img-fluid pr-2" src="{{ asset('img/logo-royalreservations-min.png') }}" alt="Royal Reservations">
				</div>
				<div class="col-md-8">
					<p style="font-size: 12px; overflow: hidden;" >{{ __('footer.notice', ['year' => date('Y')]) }}</p>
				</div>
			</div>
		</div>
	</div>

	<div class="w-100 je-bg-lgray pt-1 d-block d-md-none">  
		<div class="container">
			<div class="row py-2 py-md-5">
				<div class="col-12 col-md-4 pl-3 fs-8">
					<div class="row no-gutters d-flex justify-content-end">
						<span class="" >
							<a class="subir" href="#">
								<img class="lazy" src="{{asset('/img/icono-flecha-footer.png')}}" alt="Up">
							</a>
						</span>
					</div>

					<div class="row py-2">

						@desktop
							<div class="col-6 col-md-12 d-flex align-items-center">
								<img src="{{ asset('/img/royal-logo-vert.png') }}" alt="Royal Reservations"  class="d-block d-md-none img-fluid py-4 logo-footer lazy">
							</div>
						@elsedesktop
							<div class="footer-movil">
								<div class="info">
									<ul>
										<li><b> <i class="fa fa-phone" aria-hidden="true"></i> CONTÁCTANOS </b></li>
										<li><b>Toll free:</b> 1 888 721 4420</li>
										<li><b>Lada sin costo:</b> 01 800 020 1761<br></li>
										<li><b>Elsewhere:</b> +52 (998) 848 8226</li>
										<li><b>agentquestions@royalresorts.com</b></li>
									</ul>
								</div>
							</div>		
						@enddesktop
					</div>

				</div>

			</div>

		</div>

	</div>

	<div class="je-bg-gray text-white py-4 " >
		<div class="container copyright">
			<div class="d-none d-md-block" >
				<div class="row no-gutters d-flex justify-content-center ">
					<a  class="text-white ligera">{{ __('footer.copyright', ['year' => date('Y')]) }}</a>
				</div>
			</div>

			<div class="d-block d-md-none d-flex justify-content-center" >
				<div class="row">
					<p>
					<a  class="text-white ligera">{{ __('footer.copyright', ['year' => date('Y')]) }}</a>		
					<p>
				</div>
			</div>


		</div>

	</div>

</footer>

