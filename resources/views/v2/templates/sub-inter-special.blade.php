@php
    use Illuminate\Support\Carbon;
@endphp

@extends('/interna')

@section('title', $concept->content->seo_title )
@section('metadescription', $concept->content->seo_metadescription)

@push('metas')
    @if($concept->index_follow == 1)
       <meta name="robots" content="index, follow"> 
    @else 
        <meta name="robots" content="noindex, nofollow">
    @endif
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/deals-detail.css') }}" integrity="{{ Sri::hash('css/deals-detail.css') }}" crossorigin="anonymous">
@endpush

@push('scripts')
    <script src="{{mix('/js/_deals-detail.js')}}" integrity="{{ Sri::hash('/js/_deals-detail.js') }}" crossorigin="anonymous"></script>
@endpush

@section('interna')
    <div class="hidden datenow {{ date('Y-m-d H:i:s') }}"></div>
    <div class="sub-inter-special gms">

        @include('parts.scripts', ['section'=>'Offers', 'page'=>$slug])
        <section>
            <img src="{{$concept->content->landing_img}}" class="img-fluid w-100" alt="{{$concept->content->seo_title}}" title="{{$concept->content->seo_metadescription}}">
        </section>

        @php
            $fecha_fin=date('d-m-Y');
        @endphp

        @if($concept->content->concept_id=='39'&& $fecha_fin=='03-09-2019')

        <section>

            <div class="d-flex align-items-center justify-content-center"> 
                
            @if (App::getLocale() == 'en')
                <img src="http://i.countdownmail.com/86yud.gif" alt="countdownmail" {{(Agent::isMobile() && !Agent::isTablet())?'width=100%':''}}>
            @else
                <img src="http://i.countdownmail.com/87pmy.gif" alt="countdownmail" {{(Agent::isMobile() && !Agent::isTablet())?'width=100%':''}}>
            @endif
            </div>
        </section>
        @endif

        @component('parts/extras/breadcrum', ['slug'=>$slug, 'class' => ''])
        @endcomponent

        @if($concept->estado == 'valid' && count($bloques) > 0)
            <section class="container desc-offer">
                <div class="row m001land">
                    <div class="col-md-12">
                        <h1 class="h1">{{$concept->content->title }}</h1>
                        <h2 class="h3">{!! $concept->content->subtitle !!}</h2>
                        <div class="p">{!! $concept->content->description !!}</div>
                        <h2 class="h3">{{ $concept->content->subtitle2 }}</h2>
                        <div class="p">{!! $concept->content->description2 !!}</div>
                    </div>
                </div>
            </section>

            {{-- Contenido del primer bloque --}}
            @php
                $firstBloq = $bloques->shift();

                $firstBloqUniqueResorts = $firstBloq->unique('resort_id');
            @endphp


            <section class="container">
                <div class="row no-gutters mb-4">
                    <div class="col-12">
                        <div class="dropdown">
                            <button class="btn btn-primary " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                {{__('general.lb_filter')}}:
                            </button>
                            <form class="dropdown-menu pl-4 pr-4" id="dropdownContent" aria-labelledby="dropdownMenuButton">
                                <div class="form-check">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" 
                                            {{ (empty($filtros) )? 'checked' : '' }}
                                            value="all" 
                                            id="allDestinations">
                                            All
                                    </label>
                                </div>
                               
                                @foreach($destinations as $destination)
                                    <div class="form-check">
                                        <label class="form-check-label" style="font-size: 1rem; font-weight: 500;">
                                            <input name="destinations" type="checkbox" class="form-check-input check-input-destino" 
                                                {{ (in_array($destination->identifier, $filtros) || empty($filtros) )? 'checked' : '' }}
                                                value="{{ $destination->identifier }}"
                                                id="{{ $destination->identifier }}">
                                            {{$destination['name_'.\App::getLocale()]}}
                                        </label>
                                    
                                    
                                        @foreach($unicResorts as  $resort)
                                            @if($resort->destination_id == $destination->id)
                                            <div class="form-check">
                                                <label class="form-check-label" style="font-size: 1rem; margin-left: 15px;">
                                                    <input name="resorts" type="checkbox" class="form-check-input check-input-resort"
                                                    {{ (in_array($resort->destination_id, $filtros) || empty($filtros) )? 'checked' : '' }}
                                                    value="{{ $resort->id }}"
                                                    id="{{ $resort->id }}"
                                                    > {{$resort->name}} 
                                                </label>
                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                    
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </section>

           {{--  @if(count($orderResorts) > 0 )
                <section class="container  deals-resort">
                    <div class="col-12 mb-5  bg-light-gray">
                        <div class="row justify-content-center">
                            @foreach($orderResorts as $key => $conceptResort)
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
                                
                                <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset mb-3 
                                        {{$conceptResort->resort->destination->identifier }}
                                        resort-{{$conceptResort->resort->id}}
                                        {{ $filtroCss}}">
                                    @if(empty($conceptResort->pivot))
                                        @include('v2.cards.resort', ['resort' => $conceptResort, 'class' => 'hover'])
                                    @else
                                        @include('v2.cards.concept-resort', ['resort' => $conceptResort])
                                    @endif
                                </div>

                                @if( ( $key == 5 || $key == 1) && $concept->ebb_label == 1 )
                                    <div class="col-12 {{ ($key == 1)? 'd-lg-none' : 'd-none d-lg-block' }}">
                                        <div class="ebb-specials">
                                            <img src="{{ asset('/img/icon-galeria/bullhorn.svg') }}" alt="royalreservations ">
                                            <label>{!! __('general.ebb-deals.'.rand(0,4), ['date' => __date('dates.SHORT_YEAR',  Carbon::now()->addDays(150))] ) !!}</label> 
                                        </div>
                                    </div>
                                @endif

                            @endforeach
                        </div>
                    </div>
                </section>
            @endif --}}


            <section class="container  deals-resort">
                <div class="col-12 mb-5  bg-light-gray">
                    <div class="row">
                        @php
                            $count = 0;
                        @endphp
                        @foreach($orderResorts as $key => $conceptResort)
                            @php
                            $count++;
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
                            
                            <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset mb-3 
                                    {{$conceptResort->resort->destination->identifier }}
                                    resort-{{$conceptResort->resort->id}}
                                    {{ $filtroCss}}">
                                @if(empty($conceptResort->pivot))
                                    @include('v2.cards.resort', ['resort' => $conceptResort, 'class' => 'hover'])
                                @else
                                    @include('v2.cards.concept-resort', ['resort' => $conceptResort])
                                @endif
                            </div>

                            @if( ( $count == 6 || $count == 2) && $concept->ebb_label == 1 )
                                <div class="col-12 {{ ($count == 2)? 'd-lg-none' : 'd-none d-lg-block' }}">
                                    <div class="ebb-specials">
                                        <img src="{{ asset('/img/icon-galeria/bullhorn.svg') }}" alt="royalreservations ">
                                        <label>{!! __('general.ebb-deals.'.rand(0,4), ['date' => __date('dates.SHORT_YEAR',  Carbon::now()->addDays(150))] ) !!}</label> 
                                    </div>
                                </div>
                            @endif

                        @endforeach
                        @foreach($firstBloq as $key => $conceptResort)
                            @php
                            $count++;
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
                                    @include('v2.cards.concept-resort', ['resort' => $conceptResort])
                                @endif
                            </div>

                            @if( ( $count == 6 || $count == 2) && $concept->ebb_label == 1 )
                                <div class="col-12 {{ ($count == 2)? 'd-lg-none' : 'd-none d-lg-block' }}">
                                    <div class="ebb-specials">
                                        <img src="{{ asset('/img/icon-galeria/bullhorn.svg') }}" alt="royalreservations ">
                                        <label>{!! __('general.ebb-deals.'.rand(0,4), ['date' => __date('dates.SHORT_YEAR',  Carbon::now()->addDays(150))] ) !!}</label> 
                                    </div>
                                </div>
                            @endif

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
                    <section class="container">
                        <div class="row m001land">
                            <div class="col-md-12">
                                <h2 class="h2">{{ $extra['title']}}</h2>
                                {!! $extra['description'] !!}
                            </div>
                        </div>
                    </section>

                    <section class="container deals-resort">
                        <div class="col-12 mb-5">
                            <div class="row bg-light-gray">
                                @foreach($bloques->get($key) as  $conceptResort)
                                    <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset  
                                        resort-{{$conceptResort->resort->id}}
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
                        <h1 class="h1 text-center">{{ $concept->content->title }} </h1>
                        <label class="h2 text-danger text-center bg-light-gray p-4"> {{ __('general.'.$concept->error_type) }} </label>
                        <p class="h2 text-center">
                            {{__('general.active_offer')}}:
                        </p>
                    </div>
                </div>
                

            </section>
            <section class="container">
                <div class="col-12 mb-5">
                    <div class="row bg-light-gray">
                        @foreach($conceptsVig as  $conceptVig)
                            <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset ">
                                @include('v2.cards.concept', ['concept' => $conceptVig])
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif
    </div>
@endsection