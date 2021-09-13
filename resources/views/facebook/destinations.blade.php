@extends('facebook.layout')

@push('script')
    <script src="{{mix('/js/facebook/destinations.js')}}" ></script>
@endpush

@push('css')
    <link rel="stylesheet" href="{{mix('/css/facebook/destinations.css')}}">
@endpush

@section('main')
    <div class="row">
        <div class="col text-right">
            <a href="{{ change_lang() }}" class="back">{{__('facebook.lang')}}</a>
        </div>
    </div>
    <div class="form-booking">
        @include('facebook.booking')
    </div>

    <h1 class="h1 mb">{{__('facebook.Destinations and Resorts')}}</h1>

    <div class="resorts mb">
        <div class="card">
            <div class="slider">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            {{-- <picture>
                                <source srcset="{{asset('img/facebook/destinos/royal-uno-a.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/royal-uno-a.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/royal-uno-a.jpg')}}" alt="">
                            </picture> --}}
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-sands-b.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-sands-b.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-sands-b.jpg')}}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-sands-a.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-sands-a.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-sands-a.jpg')}}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-cancun-a.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-cancun-a.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-cancun-a.jpg')}}" alt="">
                            </picture>
                            {{-- <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-cancun-b.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-cancun-b.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-cancun-b.jpg')}}" alt="">
                            </picture> --}}

                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-islander-a.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-islander-a.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-islander-a.jpg')}}" alt="">
                            </picture>
                            {{-- <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-islander-b.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-islander-b.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-islander-b.jpg')}}" alt="">
                            </picture> --}}
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/royal-uno-b.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/royal-uno-b.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/royal-uno-b.jpg')}}" alt="">
                            </picture>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-back.svg')}}" alt="">
                            </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-next.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="resorts">
                <h2 class="h2">{{__('destinations/cancun.title')}}</h2>
                <ul>
                    <li>
                        <a href="{{ route('facebook.resort',['resort' => 'the-royal-sands'])  }}">The Royal Sands</a>
                    </li>
                    <li>
                        <a href="{{ route('facebook.resort',['resort' => 'the-royal-cancun'])  }}">The Royal Cancun</a>
                    </li>
                    <li>
                        <a href="{{ route('facebook.resort',['resort' => 'the-royal-islander'])  }}">The Royal Islander</a>
                    </li>
                    <li>
                        <a href="{{ route('facebook.resort',['resort' => 'royal-uno'])  }}">The Royal Uno</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="slider">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-haciendas-b.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-haciendas-b.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-haciendas-b.jpg')}}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-haciendas-a.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-haciendas-a.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-haciendas-a.jpg')}}" alt="">
                            </picture>

                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-back.svg')}}" alt="">
                            </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-next.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="resorts">
                <h2 class="h2">{{__('destinations/playa-del-carmen.title')}}</h2>
                <ul>
                    <li>
                        <a href="{{ route('facebook.resort',['resort' => 'the-royal-haciendas'])  }}">The Royal Haciendas</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="slider">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/grand-residences-riviera-cancun-b.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/grand-residences-riviera-cancun-b.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/grand-residences-riviera-cancun-b.jpg')}}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/grand-residences-riviera-cancun-a.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/grand-residences-riviera-cancun-a.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/grand-residences-riviera-cancun-a.jpg')}}" alt="">
                            </picture>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-back.svg')}}" alt="">
                            </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-next.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="resorts">
                <h2 class="h2">{{__('destinations/riviera-maya.title')}}</h2>
                <ul>
                    <li>
                        <a href="{{ route('facebook.resort',['resort' => 'grand-residences-riviera-cancun'])  }}">Grand Residences</a>
                    </li>
                </ul>
            </div>
        </div>



        <div class="card">
            <div class="slider">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            {{-- <picture>
                                <source srcset="{{asset('img/facebook/destinos/simpson-bay-resort-b.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/simpson-bay-resort-b.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/simpson-bay-resort-b.jpg')}}" alt="">
                            </picture> --}}
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-villas-at-simpson-bay-resort-b.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-villas-at-simpson-bay-resort-b.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-villas-at-simpson-bay-resort-b.jpg')}}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/simpson-bay-resort-a.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/simpson-bay-resort-a.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/simpson-bay-resort-a.jpg')}}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-villas-at-simpson-bay-resort-a.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-villas-at-simpson-bay-resort-a.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-villas-at-simpson-bay-resort-a.jpg')}}" alt="">
                            </picture>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-back.svg')}}" alt="">
                            </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-next.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="resorts">
                <h2 class="h2">{{__('destinations/st-maarten.title')}}</h2>
                <ul>
                    <li>
                        <a href="{{ route('facebook.resort',['resort' => 'simpson-bay-resort'])  }}">Simpson Bay Resort</a>
                    </li>
                    <li>
                        <a href="{{ route('facebook.resort',['resort' => 'the-villas-at-simpson-bay-resort'])  }}"> The Villas At Simpson Bay Resort</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="card">
            <div class="slider">
                <div class="glide">
                    <div class="glide__track" data-glide-el="track">
                        <div class="glide__slides">
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-sea-aquarium-b.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-sea-aquarium-b.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-sea-aquarium-b.jpg')}}" alt="">
                            </picture>
                            <picture>
                                <source srcset="{{asset('img/facebook/destinos/the-royal-sea-aquarium-a.webp')}}" type="image/webp">
                                <source srcset="{{asset('img/facebook/destinos/the-royal-sea-aquarium-a.jpg')}}" type="image/jpg">
                                <img loading="lazy" class="glide__slide" src="{{asset('img/facebook/destinos/the-royal-sea-aquarium-a.jpg')}}" alt="">
                            </picture>
                        </div>
                        <div class="glide__arrows" data-glide-el="controls">
                            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-back.svg')}}" alt="">
                            </button>
                            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                <img loading="lazy" src="{{asset('img/icon-galeria/ic-next.svg')}}" alt="">
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="resorts">
                <h2 class="h2">{{__('destinations/curacao.title')}}</h2>
                <ul>
                    <li>
                        <a href="{{ route('facebook.resort',['resort' => 'the-royal-sea-aquarium'])  }}">The Royal Sea Aquarium Resort</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>

    <h1 class="h1">{{__('facebook.Current Offers')}}</h1>

    <div class="offers">
        @foreach($concepts as $concept)
            <a target="__blanck" href="{{ route('concept.detail',['concepto' => $concept->getUrl(\App::getLocale())])}}">
                <img loading="lazy" src="{{ $concept->content->img }}" alt="{{ $concept->content->title }}">
            </a>
        @endforeach
    </div>
@endsection
