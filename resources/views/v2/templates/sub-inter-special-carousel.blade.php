{{--
    Template utilizado solo para la oferta de grand residences 
--}}
@php

@endphp

@extends('/interna')

@section('title', $concept->content->seo_title )
@section('metadescription', $concept->content->seo_metadescription)

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/deals-detail-carousel.css') }}" integrity="{{ Sri::hash('css/deals-detail-carousel.css') }}" crossorigin="anonymous">
@endpush

@push('scripts')
    <script src="{{mix('/js/_deals-detail-carousel.js')}}" integrity="{{ Sri::hash('/js/_deals-detail-carousel.js') }}" crossorigin="anonymous"></script>
@endpush

@push('metas')
    @if($concept->index_follow == 1)
       <meta name="robots" content="index, follow"> 
    @else 
        <meta name="robots" content="noindex, nofollow">
    @endif
@endpush

@section('interna')
    <div class="hidden datenow {{ date('Y-m-d H:i:s') }}"></div>
    <div class="sub-inter-special gms">

        @include('parts.scripts', ['section'=>'Offers', 'page'=>$slug])
        <section>
            <img src="{{$concept->content->landing_img}}" class="img-fluid w-100" alt="{{$concept->content->seo_title}}" title="{{$concept->content->seo_metadescription}}">
        </section>

        @component('parts/extras/breadcrum', ['slug'=>$slug, 'class' => ''])
        @endcomponent

        @if($concept->estado == 'valid' && count($bloques) > 0)
            <section class="container desc-offer">
                <div class="row m001land">
                    <div class="col-md-12 mb-5">
                        <h1 class="h1">{{$concept->content->title }}</h1>
                        <h2 class="h3">{{$concept->content->subtitle }}</h2>
                        <div class="p">{!! $concept->content->description !!}</div>
                        {{--
                        <h2 class="h3">{{ $concept->content->subtitle2 }}</h2>
                        <div class="p">{!! $concept->content->description2 !!}</div>
                        --}}
                    </div>
                </div>
            </section>

            {{-- Contenido del primer bloque --}}
            @php
                $firstBloq = $bloques->shift();
                $firstBloqUniqueResorts = $firstBloq->unique('resort_id');
            @endphp

            <section class="container  deals-resort">
                
                <div class="title-block col-12 mb-5">
                    <h2 class="h2"> 
                        {{ $concept->content->subtitle2 }}
                        <span class="stars">
                            @for($i=0; $i < $firstBloq->first()->resort->stars; $i++)
                                @if($firstBloq->first()->resort->stars - ( $i + 1 ) >= 0)
                                    <img src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="20">
                                @else
                                    <img src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="20">                                        
                                @endif
                            @endfor
                        </span>
                    </h2>
                    {!! $concept->content->description2 !!}
                </div>

                <div class="col-12 mb-5 ">
                    <div class="row owl-carousel">
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
                            
                            <div class="offerset 
                                    {{$conceptResort->resort->destination->identifier }}
                                    resort-{{$conceptResort->resort->id}}
                                    {{ $filtroCss}}">
                                @if(empty($conceptResort->pivot))
                                    @include('v2.cards.resort', ['resort' => $conceptResort, 'lazyload' => 'owl-lazy'])
                                @else
                                    @include('v2.cards.concept-resort', ['resort' => $conceptResort, 'lazyload' => 'owl-lazy'])
                                @endif
                            </div>
                        @endforeach
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

                    <section class="container deals-resort">
                        
                        <div class="col-md-12 title-block">
                            <h2 class="h2"> 
                                {{ $extra['title']}}
                                <span class="stars">
                                @for($i=0; $i < $firstBloq->first()->resort->stars; $i++)
                                    @if($firstBloq->first()->resort->stars - ( $i + 1 ) >= 0)
                                        <img src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="20">
                                    @else
                                        <img src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="20">                                        
                                    @endif
                                @endfor
                            </span>
                            </h2>
                            {!! $extra['description'] !!}
                        </div>

                        <div class="col-12 mb-5">
                            <div class="row owl-carousel">
                                @foreach($bloques->get($key) as  $conceptResort)
                                    <div class="pt-3 pb-3 offerset  
                                        {{ $conceptResort->resort->destination->identifier }} 
                                        {{ ( !in_array($conceptResort->resort->destination->identifier, $filtros) && !empty($filtros) )? 'd-none' : '' }}">
                                        @if(empty($conceptResort->pivot))
                                            @include('v2.cards.resort', ['resort' => $conceptResort, 'lazyload' => 'owl-lazy'])
                                        @else
                                            @include('v2.cards.concept-resort', ['resort' => $conceptResort, 'lazyload' => 'owl-lazy'])
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                @endforeach
            @endif
            
            {{--
            @foreach($resorts as $resort)
                @include('v2.modals.picturemodal',['resort' => $resort])
                @include('v2.modals.resort-concept',['resort' => $resort])
                @include('v2.bookings.resort-concept',['resort' => $resort])
            @endforeach
            --}}
            @component('parts/specials/individual/subIntern/payment')@endcomponent
        @else
            <section class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="h1 text-center">{{ $concept->content->title }}</h1>
                        <label class="h2 text-danger text-center p-4"> {{ __('general.Sorry this offer has expired') }} </label>
                        <p class="h2 text-center">
                            {{__('general.active_offer')}}:
                        </p>
                    </div>
                </div>
                

            </section>
            <section class="container">
                <div class="col-12 mb-5">
                    <div class="row owl-carousel">
                        @foreach($conceptsVig as  $conceptVig)
                            <div class="pt-3 pb-3 offerset ">
                                @include('v2.cards.concept', ['concept' => $conceptVig])
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection