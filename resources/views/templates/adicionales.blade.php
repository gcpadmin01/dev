@extends('/adicionales')

@section('adicionales')
    @if($page=="1")
        @component('parts/adicionales/content-info-page')@endcomponent
    @elseif($page=="2")
        @component('parts/adicionales/content-sale-page')@endcomponent
    @elseif($page=="agentes-royal-resorts")
        @component('parts/adicionales/content-sale-page')@endcomponent
    @else
        @component('parts/error/error404')
        @endcomponent
    @endif
@endsection