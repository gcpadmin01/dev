@extends('/interna')
@section('title', 'The Royal Care Standard')
@push('css')
    <link rel="stylesheet" href="{{mix('css/royalcarestandard.css')}}">
@endpush
@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush
@push('scripts')
    <script src='{{ mix('js/royalcarestandard.js') }}'></script>
@endpush

@section('interna')

    @component('/parts/scripts', ['section'=>'Royal Care Standard', 'page'=>'royalcarestandard']) @endcomponent

    <div class="pading-header text-center sec-title sec-1 pb-4  bg-blue ">
        <h1>{{__('royalcarestandard.simpsonbay-title')}}</h1>

        <div class="container content-tab">
            <div class="row d-flex justify-content-center ">
                <label data-target=".sect-d-6" class="tab-sec-5 ml-3 mr-3" for="">{{__('royalcarestandard.Certificates')}}</label>
                <label data-target=".sect-d-3" class="tab-sec-2 ml-4 mr-4" for="">{{__('royalcarestandard.Cleaning protocol')}}</label>
                <label data-target=".sect-d-1" class="tab-sec-3 ml-4 mr-4" for="">{{__('royalcarestandard.COVID-19 Test')}}</label>
            </div>
        </div>
    </div>

    <div class="sect-d-6 sec-d" data-target ="sec-5">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-12 col-lg-8">
                    <h3 class="h2">{!! __('royalcarestandard.Safe Seal') !!}</h3>
                    <p>
                        {!! __('royalcarestandard.simpsonbay-text13') !!}
                    </p>
                </div>
                <div class="col-12 col-lg-4 mb-4">
                    <img src="/img/certificate/safe-seal-big.png" style="width: 100%" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="sect-d-1 mb-3 sec-d" data-target ="sec-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-4">
                    <img src="{{asset('img/general/header-sb.jpg')}}" style="width: 100%" alt="SB">
                </div>
                <div class="col-12 col-lg-6">
                    {!!__('royalcarestandard.simpsonbay-text0')!!}
                </div>
                <div class="col-12 col-lg-12">
                    {!!__('royalcarestandard.simpsonbay-text00')!!}
                </div>
            </div>
        </div>
    </div>

    <div class="sect-d-2  sec-1  pb-4 mb-4 sec-d " data-target ="sec-1">
        <div class="container">
            <div class="row pt-4">
                <div class="col-12 col-lg-6  order-1 order-lg-0">
                    <p >
                        <strong> {{__('royalcarestandard.simpsonbay-text2')}}</strong><br>
                        {{__('royalcarestandard.simpsonbay-text3')}}
                    </p>
                    <p>
                        {{__('royalcarestandard.simpsonbay-text4')}}
                    </p>
                    <p class="mb-0">
                        {{__('royalcarestandard.simpsonbay-text5')}}
                    </p>
                </div>
                <div class="col-12 col-lg-6 order-0   pb-3 pb-md-0  order-lg-1">
                    <iframe class="video" src="https://player.vimeo.com/video/426339099" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="sect-d-3 mb-3 sec-d" data-target ="sec-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-4">
                    <img src="/img/royalcarestandard/simpsonbay-covid.jpg" style="width: 100%" alt="">
                </div>
                <div class="col-12 col-lg-8">
                    <h2 class="h2">{{__('royalcarestandard.simpsonbay-text6')}}</h2>
                    {!! __('royalcarestandard.simpsonbay-text7') !!}
                </div>
            </div>
        </div>
    </div>

    <div class="sect-d-4 sec-2 pt-4 mb-4 sec-d" data-target ="sec-3">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 ">
                    <h3 class="h2">{!! __('royalcarestandard.simpsonbay-text8') !!}</h3>
                    {!! __('royalcarestandard.simpsonbay-text9') !!}
                </div>

                <div class="col-12 col-lg-4 mb-4">
                    <img src="/img/royalcarestandard/simpsonbay-covid2.jpg" style="width: 100%" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="sect-d-5 sec-d" data-target ="sec-4">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 mb-4">
                    <img src="/img/royalcarestandard/simpsonbay-covid3.jpg" style="width: 100%" alt="">
                </div>
                <div class="col-12 col-lg-8">

                    <h3 class="h2">{!! __('royalcarestandard.simpsonbay-text10') !!}</h3>
                    {!! __('royalcarestandard.simpsonbay-text11') !!}
                    <p>
                        {!! __('royalcarestandard.simpsonbay-text12') !!}
                    </p>
                </div>
            </div>
        </div>
    </div>


   {{-- <div class="sect-d-5 container sec-d sec-cert" data-target="sec-5">
        <div class="row">
            <div class="col-12">
                <h2 class="h2">{{__('royalcarestandard.Certificates')}}</h2>
                <div class="slick-slider ">
                    <div class="item text-center">
                        <picture class="slick-lazy">
                            <img src="{{asset('/img/royalcarestandard/safe-travels.jpg')}}" alt="">
                        </picture>
                        <p class="h6">{{__('royalcarestandard.Safe Travels approved by World Travel & Tourism Council')}}</p>
                    </div>
                    <div class="item text-center">
                        <picture class="slick-lazyload">
                            <img width="250" src="{{asset('/img/royalcarestandard/ssa.jpg')}}" alt="">
                        </picture>
                        <p class="h6">{{__('royalcarestandard.Certified in health protection and sanitation preventive controls')}}</p>
                    </div>
                    <div class="item text-center">
                        <picture class="slick-lazyload">
                            <img width="100" src="{{asset('/img/royalcarestandard/m-certificado-grand-residences.jpg')}}" alt="">
                        </picture>
                        <a class="h6" href="{{asset('/img/royalcarestandard/certificado-grand-residences.jpg')}}" target="_blank">Grand Residences</a>
                    </div>
                    <div class="item text-center">
                        <picture class="slick-lazyload">
                            <img width="100" src="{{asset('/img/royalcarestandard/m-certificado-the-royal-cancun.jpg')}}" alt="">
                        </picture>
                        <a href="{{asset('/img/royalcarestandard/certificado-the-royal-cancun.jpg')}}" target="_blank" class="h6">The Royal Cancun</a>
                    </div>
                    <div class="item text-center">
                        <picture class="slick-lazyload">
                            <img width="100" src="{{asset('/img/royalcarestandard/m-certificado-the-royal-sands.jpg')}}" alt="">
                        </picture>
                        <a href="{{asset('/img/royalcarestandard/certificado-the-royal-sands.jpg')}}" target="_blank" class="h6">The Royal Sands</a>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
@endsection