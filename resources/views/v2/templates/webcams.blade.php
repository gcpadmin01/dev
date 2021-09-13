@extends('/interna')

@section('title', __('webcams.seo.title'))
@section('metadescription', __('webcams.seo.metadescription'))

@push('styles')
  <link rel="stylesheet" href="{{ mix('css/webcam.css') }}" integrity="{{ Sri::hash(mix('css/webcam.css')) }}" crossorigin="anonymous">
@endpush

@push('scripts')
  <script src="{{mix('/js/_webcams.js')}}" integrity="{{ Sri::hash('/js/_webcams.js') }}" crossorigin="anonymous"></script>
@endpush

@section('interna')
    @component('parts/extras/breadcrum-level-2-ext', ['page'=>$page,'padding_header' => true])@endcomponent
    <section class="container">
        <div class="row no-gutters av-blue pt-4">
            <div class="col d-none d-md-block"></div>
            <div class="col-md-12 col-12 text-left px-0">
            <h1 class="h1 mb1 bold-h1">{{ __('webcams.webcams.title') }}</h1>
            </div>
            <div class="col d-none d-md-block"></div>
        </div>

        <div class="row no-gutters">
            <div class="col d-none d-md-block"></div>
            <div class="col-md-12 col-12">
            <p class="text-justify">{{ __('webcams.webcams.content') }}</p>
            </div>
            <div class="col d-none d-md-block"></div>
        </div>
    </section>

     @component('parts/webcams/images-webcams') @endcomponent

@endsection