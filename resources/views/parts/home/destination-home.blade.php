<section class="container">

    <div class="row">
        <div class="col-12 mb-4">
            <div class="text-center mt-5">
                <h1 class="section-title txt-blue txt-light">{{ __('beach-destinations.home-title') }}</h1>
            </div>
        </div>

        <div class="col-12">
            <div class="mosaic-destinations">
                @foreach(__('beach-destinations.zones', []) as $zone)
                    @foreach(array_get($zone, 'destinations', []) as $destination)
                        <div class="item">
                            <div class="card card-overlay lazyload" data-src="{{array_get($destination, 'thumbnail')}}" data-webp="{{__webp(array_get($destination, 'thumbnail'))}}">
                                {{--<img class="w-100" src="{{ array_get($destination, 'thumbnail') }}" alt="">--}}
                                <a class="text-uppercase text-white"
                                   href="{{ array_get($destination, "slug") }}">
                                    <div class="card-body-overlay">
                                        <div class="card-body-center text-center">

                                            <h2 class="h5 card-title"><span>{{__('general.lb_things_to_do')}}</span> {{ array_get($destination, 'title') }}</h2>
                                            <label class="text-capitalize text-white view-more">
                                                {{ count(array_get($destination, 'resorts')) }} {{ trans_choice('general.Resort', count(array_get($destination, 'resorts'))) }}
                                            </label>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endforeach
            </div>
        </div>

        <div class="col-12 text-right mb-4">
            <a class=""
               href="{{ lang_url("/".__('routes.beach_destinations')) }}">{{ __('general.view_all') }}</a>
        </div>
    </div>

</section>