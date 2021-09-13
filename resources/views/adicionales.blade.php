<!doctype html>
<html lang="{{ app()->getLocale() }}" class="{{ str_slug(data_get(getCurrentBrowser(), 'browser', 'undefined')) }} v-{{ data_get(getCurrentBrowser(), 'version', 'undefined') }}">
  <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
		  <title>@yield('title')</title>
		  <meta name="description" content="@yield('metadescription')"/>
	  <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
		<link rel="stylesheet" href="{{ asset('css/adicionales.css') }}">
		<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>

		<!-- Fonts -->
		</style>

			@php
			if(!config('app.debug')){
			@endphp
			<!-- Google Tag Manager -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-NNS3B9J');</script>
			<!-- End Google Tag Manager -->
			@php
        	}
        	@endphp
  </head>

  <body  class="<?=strtolower(getCurrentBrowser()['browser']) ?>">
        
  		@component('parts/header-adicionales')@endcomponent
        
        @yield('adicionales')
        
        @component('parts/footer-adicionales')@endcomponent

		<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>

 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

		<script src="{{ asset('js/adicionales.js') }}"></script>

		@php
		if(!config('app.debug')){
		@endphp
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNS3B9J"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		@php
        }
        @endphp

  </body>

</html>

