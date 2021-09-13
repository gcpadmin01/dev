<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
		
		<link rel="stylesheet" href="{{ asset('css/agentes.css') }}">
		<link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js"></script>
		<title>@yield('title')</title>
		<meta name="description" content="@yield('metadescription')"/> 
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

  <body style="width: 100% !important;">
  		@component('parts/header-agentes')@endcomponent
        @yield('agentes-content')
        @component('parts/footer-agentes')@endcomponent

        @php $language = App::getLocale(); @endphp
  		<script type="text/javascript"> var language = '<?php echo $language;?>'</script>
		
		<!--<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>-->

 
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	    <script src="{{asset('js/slick/slick.js')}}" type="text/javascript" charset="utf-8"></script>
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
		<script src="{{ asset('js/agentes.js') }}"></script>

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

