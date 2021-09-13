@extends('facebook.layout')

@push('css')
    <link rel="stylesheet" href="{{mix('/css/facebook/resort.css')}}">
@endpush

@push('script')
    <script src="{{mix('/js/facebook/resort.js')}}"></script>
@endpush

@section('main')
    <div class="row">
        <div class="col">
            <a class="back" href="{{route('facebook.destinations')}}">{{__('facebook.Back to see all hotels')}}</a>
        </div>
        <div class="col text-right">
            <a class="back" href="{{ change_lang() }}">{{__('facebook.lang')}}</a>
        </div>
    </div>
    <div class="form-booking mb">
        @include('facebook.booking',['resortId' => $resortId])
    </div>

    <div class="content">
        <div class="galery">
            <div>
                <picture>
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-a.webp')}}" type="image/webp" >
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-a.jpg')}}" type="image/jpg" >
                    <img loading="lazy" src="{{asset('img/facebook/resorts/'.$resort.'-a.jpg')}}" alt="">
                </picture>
            </div>
            <div>
                <picture>
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-b.webp')}}" type="image/webp" >
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-b.jpg')}}" type="image/jpg" >
                    <img loading="lazy" src="{{asset('img/facebook/resorts/'.$resort.'-b.jpg')}}" alt="">
                </picture>
            </div>
            <div>
                <picture>
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-c.webp')}}" type="image/webp" >
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-c.jpg')}}" type="image/jpg" >
                    <img loading="lazy" src="{{asset('img/facebook/resorts/'.$resort.'-c.jpg')}}" alt="">
                </picture>
            </div>
            <div>
                <picture>
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-d.webp')}}" type="image/webp" >
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-d.jpg')}}" type="image/jpg" >
                    <img loading="lazy" src="{{asset('img/facebook/resorts/'.$resort.'-d.jpg')}}" alt="">
                </picture>
            </div>
            <div>
                <picture>
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-e.webp')}}" type="image/webp" >
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-e.jpg')}}" type="image/jpg" >
                    <img loading="lazy" src="{{asset('img/facebook/resorts/'.$resort.'-e.jpg')}}" alt="">
                </picture>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2 class="h2">{{$content['title']}}</h2>
                <p>{{$content['address']}}</p>
                {!! $content['description'] !!}
            </div>
            <div class="col">
                <div class="row">
                    <div class="col">
                        <h2>{{__('general.lb_amenities')}}</h2>
                        <ul>
                            @foreach($content['amenities'] as $amenity)
                                <li>{{$amenity['title']}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @if(count($content['certifications']['certifications']) > 0)
                        <div class="col">
                            <h2>{{$content['certifications']['title']}}</h2>
                            @if($content['certifications']['certifications'][0] == TRUE) <img src="{{asset('img/certificate/safe_travels.png')}}"> @endif
                            @if($content['certifications']['certifications'][1] == TRUE) <img src="{{asset('img/certificate/travels_choice.png')}}"> @endif
                            @if($content['certifications']['certifications'][2] == TRUE) <img src="{{asset('img/certificate/travels_choice_best.png')}}"> @endif
                            @if($content['certifications']['certifications'][3] == TRUE) <img src="{{asset('img/certificate/cppsit_logo.png')}}"> @endif
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>{{$content['restaurants']['title']}}</h2>
                <p>{{$content['restaurants']['description'] }}</p>
            </div>
            <div class="col">
                <picture>
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-restaurante.webp')}}" type="image/webp">
                    <source srcset="{{asset('img/facebook/resorts/'.$resort.'-restaurante.jpg')}}" type="image/jpg">
                    <img loading="lazy" src="{{asset('img/facebook/resorts/'.$resort.'-restaurante.jpg')}}" alt="restaurante">
                </picture>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>{{ $content['policies']['title'] }}</h2>
                <ul class="ul-2">
                    @foreach($content['policies']['policies'] as $policy)
                        <li>{{$policy}}</li>
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <h2>{{$content['terms']['title']}}</h2>
                <ul class="ul-2 ">
                    @foreach($content['terms']['terms'] as $term)
                        <li class="text-justify">{{$term}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <a class="back" href="{{route('facebook.destinations')}}">{{__('facebook.Back to see all hotels')}}</a>

    <div class="row">
        <div class="col text-right">
            <a class="bnt-offer" href="{{$content['links']['specials']}}" target="_blank">{{__('facebook.see offers')}}</a>
        </div>
        <div class="col text-left ">
            <button class="btn-book">{{__('facebook.book now')}}</button>
        </div>
    </div>
@endsection