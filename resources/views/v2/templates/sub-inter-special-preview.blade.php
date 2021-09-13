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

@section('interna')
    <div class="sub-inter-special">
        @include('parts.scripts', ['section'=>'Offers', 'page'=>$slug])
        <section>
            <img src="{{$concept->content->landing_img}}" class="img-fluid w-100" alt="{{$concept->content->seo_title}}" title="{{$concept->content->seo_metadescription}}">
        </section>

        @component('parts/extras/breadcrum', ['slug'=>$slug, 'class' => ''])
        @endcomponent

        @if($concept->estado == 'valid' || true)
            <section class="container">
                <div class="row m001land">
                    <div class="col-md-12">
                        <h1 class="h1">{{$concept->content->title }}</h1>
                        <p class="h2">{{$concept->content->subtitle }}</p>
                        <p>{!! $concept->content->description !!}</p>
                        <h2 class="h2">{{ $concept->content->subtitle2 }}</h2>
                        <p>{!! $concept->content->description2 !!}</p>
                    </div>
                </div>
            </section>

            <section class="container">
                <div class="row no-gutters mb-4">
                    <div class="col-12">
                        <div class="dropdown">
                            <button class="btn btn-primary " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Filter by Destination:
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
                                        <label class="form-check-label" style="font-size: 1rem;">
                                            <input name="destinations" type="checkbox" class="form-check-input check-input-destino" 
                                                {{ (in_array($destination->identifier, $filtros) || empty($filtros) )? 'checked' : '' }}
                                                value="{{ $destination->identifier }}"
                                                id="{{ $destination->identifier }}">

                                            {{$destination['name_'.\App::getLocale()]}}
                                        </label>
                                    </div>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Contenido del primer bloque --}}
            @php
                $firstBloq = $bloques->shift();
            @endphp

            <section class="container">
                <div class="col-12 mb-5">
                    <div class="row bg-light-gray">
                        @foreach($firstBloq as  $conceptResort)
                            <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset 
                                    {{$conceptResort->resort->destination->identifier }}
                                    {{ ( !in_array($conceptResort->resort->destination->identifier, $filtros) && !empty($filtros) )? 'd-none' : '' }}    ">
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

            @foreach($resorts as $resort)
                @include('v2.modals.picturemodal',['resort' => $resort])
                @include('v2.modals.resort-concept',['resort' => $resort])
                @include('v2.bookings.resort-concept',['resort' => $resort])
            @endforeach
            
            @component('parts/specials/individual/subIntern/payment')@endcomponent
        @else
            <section class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="h1 text-center">{{ $concept->content->title }}</h1>
                        <label class="h2 text-danger text-center bg-light-gray p-4"> {{ __('general.Sorry this offer has expired') }} </label>
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