@extends('inicio',['concepts' => $banners])
@push('scripts')
    <script src="{{mix('/js/home.js')}}" integrity="{{ Sri::hash('/js/home.js') }}" crossorigin="anonymous"></script>
    <script src="https://player.vimeo.com/api/player.js" defer onload="onloadVimeo()"></script>

    <style>
        #vimeo {
            color: green;
        }

        #vimeo iframe {
            color: red;
            width: 100%;
        }
    </style>
@endpush
@component('/parts/scripts', ['section'=>'Home', 'page'=>'home'])@endcomponent
@section('home')

    <div class="slider-home">
        @include('v2.components.slider',['concepts' => $banners ])
    </div>
    <div class="home-sa">
        @include('parts.extras.booking-resort',['class' => 'booking-hover'])
        <div class="container">
            <h1 class="title">{{__('home.title')}}</h1>

            <div class="items">
                <div class="item">
                    <p class="num">
                        1
                    </p>
                    <div class="info">
                        <p class="title">{{__('home.benefits_1.title')}}</p>
                        <p class="text">{{__('home.benefits_1.description')}}</p>
                    </div>
                </div>

                <div class="item">
                    <p class="num">
                        2
                    </p>
                    <div class="info">
                        <p class="title">{{__('home.benefits_2.title')}}</p>
                        <p class="text">{{__('home.benefits_2.description')}}</p>
                    </div>
                </div>

                <div class="item">
                    <p class="num">
                        3
                    </p>
                    <div class="info">
                        <p class="title">{{__('home.benefits_3.title')}}</p>
                        <p class="text">{{__('home.benefits_3.description')}}</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="home-sb container vimeo-video">
        <h2 class="title">{{__('home.about_us')}}</h2>
        <div class="img videobg-container  videobg-mute">
            <div class="videobg">
                <div class="videobg-width">
                    <div class="videobg-aspect">
                        <div class="videobg-make-height">
                            <div class="video videobg-hide-controls" data-vimeo="https://vimeo.com/525752163/ff422d52ef"></div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="videobg-sound videobg-sound-speaker" width="24" height="24" src="/img/icon-galeria/speaker.svg" alt="speaker">
            <img class="videobg-sound videobg-sound-mute" width="24" height="24" src="/img/icon-galeria/mute.svg" alt="mute">
        </div>

        <p class="text movil">
            {!!  \Illuminate\Support\Str::limit(__('home.about_us_description'), 150, $end='...') !!}
            <span class="read_more">(leer más)</span>
        </p>

        <p class="text desk">
            {!! __('home.about_us_description') !!}
        </p>

    </div>

    <div class="home-sc container arrow-down">
        <h2 class="title">{{__('home.know_our_destinations')}}</h2>

        <div class="home-sc-destinations slick-carousel slick-specials" data-slick='{
                "slidesToShow":3,
                "arrows":true,
                "dots": true,
                "responsive": [
                    {
                        "breakpoint": 767,
                        "settings": {
                             "slidesToShow": 1,
                            "arrows":false,
                            "dots": true,
                            "centerMode":true,
                            "centerPadding":"90px"
                        }
                    }
                ]
            }'>
            @foreach(__('beach-destinations.zones', []) as $zone)
                @foreach(array_get($zone, 'destinations', []) as $destination)
                    @php
                        $title = array_get($destination, 'title');
                        $titleImg = \Illuminate\Support\Str::lower(\Illuminate\Support\Str::of($title)->replace(' ', '')->replace('.','')->replace('ú','u'));
                    @endphp
                    <a class="item" href="{{ array_get($destination, "slug") }}">
                        <picture>
                            <source media="(min-width: 767px )" srcset="/img/home-destinos/{{$titleImg}}-340w.jpg">
                            <img src="/img/home-destinos/{{$titleImg}}-230w.jpg">
                        </picture>
                        <p class="caption">
                            <span>{{__('general.lb_things_to_do')}}</span>
                            {{ array_get($destination, 'title') }}
                        </p>
                    </a>
                @endforeach
            @endforeach

        </div>
    </div>

    <div class="home-sd">
            @include('v2.parts.home.resort-home',['resorts' => $resortsHome])
    </div>

    <div class="home-se">
        @include('v2.parts.home.specials',['concepts' => $conceptsHome])
    </div>

    @include('parts/home/instagram-feed')

    {{--@include('parts/home/destination-home')
    @include('v2.parts.home.resort-home',['resorts' => $resortsHome])
    @include('v2.parts.home.specials',['concepts' => $conceptsHome])
    @include('parts/home/instagram-feed')
    @include('parts/home/info-booking')--}}
@endsection