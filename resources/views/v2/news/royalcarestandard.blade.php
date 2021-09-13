<?php
    $critical = Config::get('ccss.desktop.royalcare');
    if (\Agent::isMobile() || \Agent::isTablet()){
        $critical = Config::get('ccss.mobile.royalcare');
    }
?>

@extends('/interna',['critical' => $critical])
@section('title', 'The Royal Care Standard')
@push('css')
    <link rel="stylesheet" href="{{mix('css/royalcarestandard.css')}}">
    <meta name="robots" content="noindex, nofollow">

@endpush

@push('scripts')
<script src='{{ mix('js/royalcarestandard.js') }}'></script>
@endpush

@section('interna')

    @component('/parts/scripts', ['section'=>'Royal Care Standard', 'page'=>'royalcarestandard']) @endcomponent

    <div class="pading-header text-center sec-title sec-1 pb-4  bg-blue ">
        <h1>The Royal Care Standard</h1>
        
        <div class="container content-tab">
            <div class="row d-flex justify-content-center ">
                <label data-target=".sect-d-0" class="tab-sec-1 ml-4 mr-4 active" for=""><span>{{__('royalcarestandard.new')}}</span> {{__('royalcarestandard.Latest Update')}}</label>
                <label data-target=".sect-d-1" class="tab-sec-1 ml-4 mr-4" for="">{{__('royalcarestandard.What is royalcaresntandard')}}</label>
                <label data-target=".sect-d-2" class="tab-sec-2 ml-4 mr-4" for="">{{__('royalcarestandard.Cleaning protocol')}}</label>
                <label data-target=".sect-d-3" class="tab-sec-3 ml-4 mr-4" for="">{{__('royalcarestandard.Common areas')}}</label>
                <label data-target=".sect-d-4" class="tab-sec-4 ml-4 mr-4" for="">{{__('royalcarestandard.Our staff')}}</label>
                <label data-target=".sect-d-5" class="tab-sec-5 ml-3 mr-3" for="">{{__('royalcarestandard.Certificates')}}</label>
            </div>
            
        </div>
    </div>


    <div class="sect-d-0 pb-4 mb-3 sec-d" data-target ="sec-0">
        <div class="container">
            {!! __('royalcarestandard.txtlastupdate') !!}
        </div>
    </div>

    <div class="sect-d-1  sec-1  pb-4 mb-4 sec-d " data-target ="sec-1">
        <div class="container">
            <div class="row pt-4">
                <div class="col-12 col-lg-6  order-1 order-lg-0">
                    <p class="mb-3">
                        {{__('royalcarestandard.txt1')}}
                    </p>
                    <h3 class="h6 text-left mb-3">{{__('royalcarestandard.txt2')}}</h3>
                    <p class="mb-0">
                        {{__('royalcarestandard.txt3')}}
                    </p>
                </div>
                <div class="col-12 col-lg-6 order-0   pb-3 pb-md-0  order-lg-1">
                    <iframe class="video" src="{{__('royalcarestandard.video1')}}" frameborder="0" allow="autoplay; fullscreen" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="sect-d-2 mb-3 sec-d" data-target ="sec-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6 mb-4">
                    <img src="/img/royalcarestandard/rooms.jpg" style="width: 100%" alt="{{__('royalcarestandard.alts.room')}}">
                </div>
                <div class="col-12 col-lg-6">

                    <h2 class="h2">{{__('royalcarestandard.txt4')}}</h2>
                    <p>
                        {{__('royalcarestandard.txt5')}}
                    </p>
                    <p>
                        {{__('royalcarestandard.txt6')}}
                    </p>
                </div>

                <div class="col-12">

                    <h3 class="h6">{{__('royalcarestandard.txt7')}}</h3>
                    <p>
                        {{__('royalcarestandard.txt8')}}
                    </p>

                    <h3 class="h6">{{__('royalcarestandard.txt9')}}</h3>

                    <p>
                        {{__('royalcarestandard.txt10')}}
                    </p>
                    <p>
                        {{__('royalcarestandard.txt11')}}
                    </p>
                </div>


                <div class="col-12">
                    <h3 class="h6">{{__('royalcarestandard.txt12')}}</h3>

                    <p>
                        {{__('royalcarestandard.txt13')}}
                    </p>
                    <p>
                        {{__('royalcarestandard.txt14')}}
                    </p>
                    <p>
                        {{__('royalcarestandard.txt15')}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="sect-d-3 sec-2 pt-4 mb-4 sec-d" data-target ="sec-3">
        <div class="container">
            <div class="row">
                <div class="col-12 mb-2">
                    <h2 class="h2">{{__('royalcarestandard.txt16')}}</h2>
    
                    <h3 class="h6">{{__('royalcarestandard.txt17')}}</h3>
                
                    <p>
                        {{__('royalcarestandard.txt18')}}
                    </p>
                    <p>
                        {{__('royalcarestandard.txt19')}}
                    </p>
                    <p>
                        {{__('royalcarestandard.txt20')}}
                    </p>
                </div>
    
                <div class="col-12 col-lg-6">
                    <img src="/img/royalcarestandard/kids-club.jpg" style="width: 100%" alt="{{__('royalcarestandard.alts.kid-club')}}">
                </div>
                <div class="col-12 col-lg-6">
                    <h3 class="h6">{{__('royalcarestandard.txt21')}}</h3>
                    <p>
                        {{__('royalcarestandard.txt22')}}
                    </p>
                    <p>
                        {{__('royalcarestandard.txt23')}}
                        
                    </p>
                    <p>
                        {{__('royalcarestandard.txt24')}}
                        
                    </p>
                    <p>
                        {{__('royalcarestandard.txt25')}}
                        
                    </p>
                </div>

                <div class="col-12">
                    <h3 class="h6">{{__('royalcarestandard.txt26')}}</h3>
                    <p>
                        {{__('royalcarestandard.txt27')}}
                        
                    </p>
                    <p>
                        {{__('royalcarestandard.txt28')}}
                        
                    </p>
    
                    <h3 class="h6">{{__('royalcarestandard.txt29')}}</h3>
                
                    <p>
                        {{__('royalcarestandard.txt30')}}
                        
                    </p>
                    <p>
                        {{__('royalcarestandard.txt31')}}
                        
                    </p>
                    
                
                </div>
                
    
            </div>
        </div>
    </div>

    <div class="sect-d-4 sec-d" data-target ="sec-4">
        <div class="container">
            <div class="row">

                <div class="col-12 col-lg-6 mb-3">
                    <img src="/img/royalcarestandard/capacitacion.jpg" style="width: 100%" alt="{{__('royalcarestandard.alts.capacitions')}}">
                </div>

                <div class="col-12 col-lg-6">
                    <h2 class="h2">{{__('royalcarestandard.txt32')}}</h2>
                    <p>{{__('royalcarestandard.txt33')}}</p>
                    <h3 class="h6">
                        {{__('royalcarestandard.txt34')}}</h3>

                    <p>
                        {{__('royalcarestandard.txt35')}}
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="sect-d-5 sec-d sec-cert" data-target="sec-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="h2">{{__('royalcarestandard.Certificates')}}</h2>
                    <div class="slick-slider ">
                        <div class="item text-center">
                            <picture class="slick-lazy">
                                <img class="w-50" src="{{ asset('/img/royalcarestandard/safe-travels.jpg') }}" alt="{{__('royalcarestandard.alts.safe-travels')}}">
                            </picture>
                            <p class="h6">{{__('royalcarestandard.Safe Travels approved by World Travel & Tourism Council')}}</p>
                        </div>
                        <div class="item text-center">
                            <picture class="slick-lazyload">
                                <img width="250" src="{{ asset('/img/royalcarestandard/ssa.jpg') }}" alt="{{__('royalcarestandard.alts.ssa')}}">
                            </picture>
                            <p class="h6">{{ __('royalcarestandard.Certified in health protection and sanitation preventive controls') }}</p>
                        </div>
                        <div class="item text-center">
                            <picture class="slick-lazyload">
                                <img width="100" src="{{ asset('/img/royalcarestandard/m-certificado-grand-residences.jpg') }}" alt="{{__('royalcarestandard.alts.st-gr')}}">
                            </picture>m-certificado-grand-resid
                            <a class="h6" href="{{ asset('/img/royalcarestandard/certificado-grand-residences.jpg') }}" target="_blank">Grand Residences</a>
                        </div>
                        <div class="item text-center">
                            <picture class="slick-lazyload">
                                <img width="100" src="{{ asset('/img/royalcarestandard/m-certificado-the-royal-haciendas.jpg') }}" alt="{{__('royalcarestandard.alts.st-trh')}}">
                            </picture>
                            <a href="{{ asset('/img/royalcarestandard/certificado-the-royal-haciendas.jpg') }}" target="_blank" class="h6">The Royal Haciendas</a>
                        </div>
                        <div class="item text-center">
                            <picture class="slick-lazyload">
                                <img width="100" src="{{ asset('/img/royalcarestandard/m-certificado-the-royal-cancun.jpg') }}" alt="{{__('royalcarestandard.alts.st-trc')}}">
                            </picture>
                            <a href="{{asset('/img/royalcarestandard/certificado-the-royal-cancun.jpg')}}" target="_blank" class="h6">The Royal Cancun</a>
                        </div>
                        <div class="item text-center">
                            <picture class="slick-lazyload">
                                <img width="100" src="{{ asset('/img/royalcarestandard/m-certificado-the-royal-sands.jpg') }}" alt="{{__('royalcarestandard.alts.st-trs')}}">
                            </picture>
                            <a href="{{ asset('/img/royalcarestandard/certificado-the-royal-sands.jpg') }}" target="_blank" class="h6">The Royal Sands</a>
                        </div>
                        <div class="item text-center">
                            <picture class="slick-lazyload">
                                <img width="100" src="{{ asset('/img/royalcarestandard/m-certificado-islander.png') }}" alt="{{__('royalcarestandard.alts.st-tri')}}">
                            </picture>
                            <a href="{{ asset('/img/royalcarestandard/certificado-islander.png') }}" target="_blank" class="h6">The Royal Islander</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection