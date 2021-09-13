@php
    $file = __('resorts/'.$resort.'.url-banner-deals');
    $img1 = asset((Agent::isMobile() && !Agent::isTablet())? 'img/mobile/deals/'.$file:'img/deals/big/'.$file);
@endphp

@if($file !='')
	<div class="deals-hotels">
	    <img class="w-100" src="{{asset($img1)}}" alt="Deals">
	</div>
@else
	<div class="deals-hotels" style="margin-top:50px;></div>
@endif

