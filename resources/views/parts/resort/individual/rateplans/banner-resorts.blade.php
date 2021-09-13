@section('title', __('resorts/'.$resort.'/'.$interna.'.seo.title'))
@section('metadescription', __('resorts/'.$resort.'/'.$interna.'.seo.metadescription'))

@php
	$img=__('resorts/'.$resort.'/'.$interna.'.banner1');
	$alt=__('resorts/'.$resort.'/'.$interna.'.alt_banner1');
@endphp
@if($img!='')
<section class="">
  <img style="min-height: 200px;" class="w-100" src="{{$img}}" alt="{{$alt}}" />
</section>
@endif