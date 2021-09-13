@php $title=__('specials/'.$slug.'.title') @endphp
<section class="container pt-2">
	<div class="row no-gutters pt-4">
		<div class="col d-none d-md-block"></div>
		<div class="col-md-10 col-12 text-left">
			<h1 class="pb-3 titulo pt-4">{{__('specials/'.$slug.'.title')}}</h1>
			{!! __('specials/'.$slug.'.description') !!}
		</div>
		<div class="col d-none d-md-block"></div>
	</div>
</section>