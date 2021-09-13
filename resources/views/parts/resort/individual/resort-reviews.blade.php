<!--Esta plantilla ya no se utiliza-->

@php
	$style = isset($style) ? $style : 'boxed';
	$total_reviews = count( __('resorts/'.$resort.'/reviews.reviews') ); 
	if($total_reviews>3){$total_reviews=3;}
@endphp

<section class="{{$style === 'full' ? 'container-fluid' : 'container'}} reviews-style-{{$style}}" id="reviews-section">
	<div class="row d-none d-md-block">
		@if($style==='full')
			<div class="container">
				<div class="row">
		@endif

		<div class="col-12">

			<h3{{ $style==='boxed' ? ' class="je-text-blue"' : '' }}> {{__('resorts/'.$resort.'/reviews.title')}} </h3>

			<div class="je-reviews-box py-1 my-4">

				<div class="owl-carousel owl-theme reviews revhome">

					@for($a=0;$a<$total_reviews;$a++)

						<div class="item">

							<div class="row">

								<div class="col-4 je-user-data">

									<img src="{{asset(__('resorts/'.$resort.'/reviews.reviews.'.$a.'.person.profile'))}}" alt="{{__('resorts/'.$resort.'/reviews.reviews.'.$a.'.person.name')}}">

									<p class="title-review">{{__('resorts/'.$resort.'/reviews.reviews.'.$a.'.person.name')}}</p>

									<span class="text-white">{{__('resorts/'.$resort.'/reviews.reviews.'.$a.'.date')}}</span>

								</div>

								<div class="col-8 je-user-coment">

									@if($style!=='full')

										<p class="text-muted">

											<span class="text-white">"</span>

											{{__('resorts/'.$resort.'/reviews.reviews.'.$a.'.content')}}

											<span class="text-white">"</span>

										</p>

									@else

										<h4>{{__('resorts/'.$resort.'/reviews.reviews.'.$a.'.title')}}</h4>

										<p>{{__('resorts/'.$resort.'/reviews.reviews.'.$a.'.content')}}</p>

									@endif

								</div>

							</div>

						</div>

					@endfor

				</div>

			</div>

		</div>

		@php $url= __('resorts/'.$resort.'/reviews.all_reviews')  @endphp

		@if($style==='full')

				</div>

				<a href="{{lang_url($url)}}" class="reviews-view-more">{{ __('general.view_more') }}</a>

			</div>

		@endif

	</div>

	@if($style!=='full')

		<div class="fs-view w-100 py-1 text-right">

			<a href="{{lang_url($url)}}" class="av-subrayado-yellow medium" >{{ __('general.view_more') }}</a>

		</div>

	@endif

</section>