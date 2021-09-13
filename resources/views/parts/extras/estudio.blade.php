<section class="container" id="estudio">
	<div class="row">
		<div class="col-12">
			<h1> H1 Lorem ipsum dolor.</h1>
			<h2> H2 Lorem ipsum dolor sit.</h2>
			<h3> H3 Lorem ipsum dolor sit amet.</h3>
			<h4> H4 Lorem ipsum dolor sit amet consectetur.</h4>
			<h5> H5 Lorem ipsum dolor sit amet consectetur adipisicing.</h5>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h1><b>H1 Bold Lorem ipsum dolor.</b></h1>
			<h2><b> H2 Bold B Lorem ipsum dolor sit.</b></h2>
			<h3><b>H3 Bold Lorem ipsum dolor sit amet.</b></h3>
			<h4><b> H4 Bold Lorem ipsum dolor sit amet consectetur.</b></h4>
			<h5><b> H5 Bold Lorem ipsum dolor sit amet consectetur adipisicing.</b></h5>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h1><i>H1 Italic Lorem ipsum dolor.</i></h1>
			<h2><i> H2 Italic Lorem ipsum dolor sit.</i></h2>
			<h3><i>H3 Italic Lorem ipsum dolor sit amet.</i></h3>
			<h4><i> H4 Italic Lorem ipsum dolor sit amet consectetur.</i></h4>
			<h5><i> H5 Italic Lorem ipsum dolor sit amet consectetur adipisicing.</i></h5>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<em>etiqueta em</em>
			<p>
				<strong>etiqueta strong</strong>
		</div>
	</div>
	<div class="row">
		<div class="col-12">

			<p> Etiqueta p Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut enim quia cupiditate totam impedit eveniet molestiae,
				adipisci necessitatibus excepturi, perferendis, reiciendis doloribus doloremque illum delectus inventore veniam. Dicta,
				sit maiores.</p>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<ul>
				<li>Elemento de lista</li>
				<li>Elemento de lista</li>
				<li>Elemento de lista</li>
				<li>Elemento de lista</li>
				<li>Elemento de lista</li>
			</ul>

		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<ul>
				<li><a href="">enlace</a></li>
				<li><a href="">enlace</a></li>
				<li><a href="">enlace</a></li>
				<li><a href="">enlace</a></li>
				<li><a href="">enlace</a></li>
			</ul>

		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<h1> Estilos Home</h1>
			<h2> Menu Secundario Azul</h2>
			<p>Clases: {Color Azul = bg-blue, enlace= nav-link,opciones= dropdown-toggle}</p>
			<div class="w-100 bg-blue">
				<nav class="navbar-nav navbar-toggleable-sm bg-blue header-top">
					<ul class="navbar-nav">
						<li class="nav-item d-none d-md-block">
							<a class="nav-link" href="#"><img class="pr-1" src="{{asset('img/webcam.png')}}"/>Elemento enlace</a>
						</li>

						<li class="nav-item d-none d-md-block">
							<a class="nav-link" href="#"><img class="pr-1" src="{{asset('img/webcam.png')}}"/>Enlace 2</a>
						</li>

						<li class="nav-item d-none d-md-block">
							<a class="nav-link" href="#"><img class="pr-1" src="{{asset('img/webcam.png')}}"/>Enlace 3</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">

			<h2> Menu Primario Blanco</h2>
			<p>Clases: {Color Blanco = av-bg-white, menu ul= menu-principal,elemento li = nav-item, elemento a= nav-link}</p>
			<div class="w-100 av-bg-white">
				<div class="container header-button d-none d-md-block">
					<ul class="nav nav-pills nav-justified menu-principal ">
						<li class="nav-item d-flex align-items-center">
							Logo <a href="http://127.0.0.1:8000" style="cursor: pointer !important;"><img class="pr-2" id="logo-royal" src="http://127.0.0.1:8000/img/logo-royalreservations-min.png" alt=""></a>
						</li>
						<li class="nav-item dropdown d-flex align-items-center justify-content-center ">
							<a class="nav-link" href="#" data-toggle="pill" aria-selected="true">
							Enlace Item
						</a>
							<div class="dropdown-menu">
								<div class="p-0">
									<ul class="px-4 my-3 w-50 border-right-white" style="">
										<li class="menu-title pb-1"><b>Titulo Submenu</b></li>
										<li><a href="/destinations/cancun">Cancún</a></li>
										<li><a href="#">Riviera Maya</a></li>
										<li><a href="#">Playa del Carmen</a></li>
										<li><a href="#">Puerto Morelos</a></li>
									</ul>
									<ul class="px-4 my-3 w-50" style="">
										<li class="menu-title pb-1"><b>Caribbean Island</b></li>
										<li><a href="#">St. Maarten</a></li>
										<li><a href="#">Curacao</a></li>
										<li><a href="/destinations">All</a></li>
									</ul>
								</div>
							</div>
						</li>





					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<h2> Cintillo azul</h2>
			<p>Clases: {Color Blanco = av-bg-skyblue, menu ul= av-menu-skyblue,elemento li = nav-item, dropup; elemento a= nav-link,
				item}</p>
		</div>



	</div>
	<div class="container-fluid av-bg-skyblue">
		<div class="container">
			<div class="d-none d-md-block">
				<ul class="av-h-70 nav nav-pills nav-fill mb-3 av-menu-skyblue row d-flex flex-nowrap" role="tablist">
					<li class="nav-item d-flex align-items-center justify-content-center dropup">
						<a class="nav-link item" data-toggle="pill"><img class="pr-1" src="http://127.0.0.1:8000/img/icono-check.png" alt=""><span> Enlace A</span></a>
						<div class="dropdown-menu text-center image-menu">
							<div class="row no-gutters p-0">
								<div class="col-3" style="background-image:url(http://127.0.0.1:8000/img/imagen-bestdeals-min.png);">
								</div>
								<div class="col-8" style="">
									<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>

									<a href="">link</a>
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item d-flex align-items-center justify-content-center dropup">
						<a class="nav-link item" data-toggle="pill"><img class="pr-1" src="http://127.0.0.1:8000/img/icono-click.png" alt=""><span> Enlace B</span></a>
						<div class="dropdown-menu text-center image-menu">
							<div class="row no-gutters p-0">
								<div class="col-3" style="background-image:url(http://127.0.0.1:8000/img/imagen-bestdeals-min.png);">
								</div>
								<div class="col-8 text-white" style="">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								</div>
							</div>
						</div>
					</li>
					<li class="nav-item d-flex align-items-center justify-content-center dropup ">
						<a class="nav-link item" data-toggle="pill"><img class="pr-1" src="http://127.0.0.1:8000/img/icono-descuento.png" alt=""><span>Enlace c</span></a>
						<div class="dropdown-menu text-center image-menu">
							<div class="row no-gutters p-0">
								<div class="col-3" style="background-image:url(http://127.0.0.1:8000/img/imagen-bestdeals-min.png);">
								</div>
								<div class="col-8 text-white" style="">
									Lorem ipsum dolor sit amet, consectetur adipiscing elit.
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>


		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<h2>Tabs Destinos</h2>
			<p>Clases: {ul = av-style-tabs, menu ul= av-menu-skyblue,elemento li = nav-item, dropup; elemento a= nav-link, item}</p>
		</div>
	</div>


	<ul class="nav nav-pills nav-justified align-items-center av-style-tabs" id="pills-tab" role="tablist">
		<li class="nav-item d-flex align-items-center justify-content-center">
			<a class="nav-link " id="pills-special-tab" data-toggle="pill" href="#pills-special" role="tab" aria-controls="pills-special"
			 aria-selected="true">
            <span class="text-uppercase">Mexican Caribbean</span>
          </a>
		</li>
		<li class="nav-item d-flex align-items-center justify-content-center">
			<a class="nav-link active" id="pills-tour-tab" data-toggle="pill" href="#pills-tour" role="tab" aria-controls="pills-tour"
			 aria-selected="false">
            <span class="text-uppercase">Caribbean Island</span>
          </a>
		</li>
	</ul>
</section>