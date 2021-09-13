@extends('/interna-mosaic-html')

@section('title', $concept->content->seo_title )
@section('metadescription', $concept->content->seo_metadescription)

@push('css')
    <link rel="stylesheet" href="{{ mix('css/_deals_mosaic.css') }}" integrity="{{ Sri::hash('css/_deals_mosaic.css') }}" crossorigin="anonymous">
@endpush

@push('scripts')
    <script src="{{ mix('js/_deals-mosaic.js') }}" integrity="{{ Sri::hash('js/_deals-mosaic.js') }}" crossorigin="anonymous"></script>
@endpush

@push('metas')
    @if($concept->index_follow == 1)
       <meta name="robots" content="index, follow"> 
    @else 
        <meta name="robots" content="noindex, nofollow">
    @endif
@endpush

@section('interna-mosaic')
    @php
        if (count($bloques) > 0) {
            $firstBloq = $bloques->shift();
            $firstBloqUniqueResorts = $firstBloq->unique('resort_id');
        }else{
            $firstBloq = [];
            $firstBloqUniqueResorts = [];
        }
    @endphp
    <div class="ofer-mosaic" style="padding-top: 60px; background-color: #0c2d63">
        <div>
            @php

                $url_img_big=asset('img/deals/en/'.$concept->content->img_landing);
                $url_img_small=asset('img/deals/en/'.$concept->content->img_concept);
            @endphp
           <picture>
              <source media="(min-width: 650px)" srcset="{{$url_img_big}}">
              <img src="{{$url_img_small}}" alt="{{$concept->content->seo_title}}" title="{{$concept->content->seo_title}}" style="width:100%">
            </picture> 

            <!--<img src="{{$concept->content->landing_img}}" alt="{{$concept->content->seo_title}}" title="{{$concept->content->seo_metadescription}}" width="100%">-->
        </div>

        <div class="main">
            @if($concept->estado == 'valid')
                <section class="container offer-desc" style="margin-bottom: 20px;">

                    <div class="row d-flex justify-content-end">
                            <a id="bajar" href="#">
                                <img src="{{asset('img/icono-flecha-footer-down.png')}}" alt="Down">
                            </a>
                    </div>                     
                    <div class="row">
                        <div class="col-md-12">
                            <div  style="margin-left: 15%;width: 70%;margin-right: 15%;">
                                <h1 class="h1" style="text-align: center;">{!!$concept->content->subtitle2 !!}</h1>
                                {!! $concept->content->description2 !!}
                                <a href="#termsAndConditions" style="color: #000;text-decoration: underline;font-size: 1rem;font-weight: 300;"> Click here</a> to read Terms & Conditions for this promo.
                            </div>
                        </div>
                    </div>                   
                </section>

                <section class="container" id="dashboard_cards">
                    <div class="row">
                        <div class="col-12">
                            <div class="row bg-light-gray">
                                @foreach($firstBloq as  $conceptResort)
                                    @php
                                    $filtroCss=!in_array($conceptResort->resort->destination->identifier, $filtros);
                                    if(!empty($filtros)){
                                        
                                        if(in_array($conceptResort->resort->destination->identifier, $filtros)){
                                             $filtroCss='';
                                        }else{
                                            if(in_array($conceptResort->resort->identifier_rr, $filtros)){
                                                $filtroCss='';
                                            }else{
                                                $filtroCss='d-none';
                                            }
                                        }
                                    }
                                    @endphp
                                    
                                    <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset 
                                            {{$conceptResort->resort->destination->identifier }}
                                            resort-{{$conceptResort->resort->id}}
                                            {{ $filtroCss}}">
                                        @if(empty($conceptResort->pivot))
                                            @include('v2.cards.resort', ['resort' => $conceptResort])
                                        @else
                                            @include('v2.cards.concept-resort-mosaic', ['resort' => $conceptResort])
                                        @endif
                                    </div>

                                    @php //dd($conceptResort->resort)@endphp
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                @if(!empty($concept->content->content_extra))
                    @foreach($concept->content->content_extra as $key => $extra)
                        @php
                            if (empty($bloques->get($key))) {
                                continue;
                            }
                        @endphp
                        <section class="container">
                            <div class="row m001land">
                                <div class="col-md-12">
                                    <h2 class="h2">{{ $extra['title']}}</h2>
                                    {!! $extra['description'] !!}
                                </div>
                            </div>
                        </section>

                        <section class="container">
                            <div class="col-12 mb-5">
                                <div class="row bg-light-gray">
                                    @foreach($bloques->get($key) as  $conceptResort)
                                        <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset  
                                            {{ $conceptResort->resort->destination->identifier }} 
                                            {{ ( !in_array($conceptResort->resort->destination->identifier, $filtros) && !empty($filtros) )? 'd-none' : '' }}">
                                            @if(empty($conceptResort->pivot))
                                                @include('v2.cards.resort', ['resort' => $conceptResort])
                                            @else
                                                @include('v2.cards.concept-resort', ['resort' => $conceptResort])
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    @endforeach
                @endif

                <div id="termsAndConditions" style="margin-bottom: 2.5rem;"></div>
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="terms">
                                    {!! $concept->content->footer !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @include('v2.modals.exit-modal-mosaic')


                @foreach($resorts as $resort)
                    @include('v2.modals.picturemodal',['resort' => $resort])
                    @include('v2.modals.resort-mosaic-v2',['resort' => $resort])
                    @include('v2.bookings.resort-concept',['resort' => $resort,'mosaic' => true])
                @endforeach
                
                @component('parts/specials/individual/subIntern/payment-mosaic')@endcomponent

                @component('/parts/scripts', ['section'=>'Offers', 'page'=>$concept->url_en]) @endcomponent

            @endif
        </div>


    </div>
@endsection