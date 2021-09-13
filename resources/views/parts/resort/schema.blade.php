@php
  $img = asset('img/resorts/'.$resort.'/'.$resort.'-b.jpg');
  $reviewCount = rand(800,1500);
  
@endphp
<script type="application/ld+json">
{
   "image" : "{{ $img }}",
   "description" : "{{ __('resorts'.'/'.$resort.'.seo.metadescription')}}",
   "aggregateRating" : {
      "ratingValue" :  {{ __('resorts'.'/'.$resort.'.starts')}},
      "bestRating" : 5,
      "reviewCount" : {{ $reviewCount }},
      "@type" : "AggregateRating"
   },
   "address" : {
      "@type" : "PostalAddress",
      "addressLocality" : "{{ __('resorts'.'/'.$resort.'.address')}}",
      "streetAddress" : "{{ __('resorts'.'/'.$resort.'.address')}}",
      "addressCountry" : "{{ __('resorts'.'/'.$resort.'.addressCountry')}}",
      "postalCode" : "{{ __('resorts'.'/'.$resort.'.postalCode')}}",
      "addressRegion" : "{{ __('resorts'.'/'.$resort.'.addressRegion')}}"
   },
   "@type" : "Hotel",
   "priceRange" : "{{ __('resorts'.'/'.$resort.'.priceRange')}}",
   "name" : "{{ __('resorts'.'/'.$resort.'.title')}}",
   "@context" : "http://schema.org",
   "url" : "{{ __('resorts'.'/'.$resort.'.slug')}}",
   "hasMap" : "{{ __('resorts'.'/'.$resort.'.map')}}"
}
</script>
