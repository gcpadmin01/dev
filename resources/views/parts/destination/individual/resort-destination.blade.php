@php
    $resorts=count(__('destinations/'.$destino.'.resorts'));
@endphp

<section class="container py-4">
    <div class="row no-gutters resort-destination">
        <div class="col-12 text-center">
            <h2 class="pb-4 av-blue medium text-uppercase">Resorts</h2>
        </div>
    </div>

    <div class="row">
        @if($resorts==1)
            @php
                $img0=__('destinations/'.$destino.'.resorts.0.img');
            @endphp

            <div class="col-12 col-md-6 col-lg-12 d-flex">
                <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.0.url')) }}">
                    <div class="card card-v1">
                        <img src="{{ $img0 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.0.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.0.name') }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endif

        @if($resorts==2)
            @php
              $img0=__('destinations/'.$destino.'.resorts.0.img');
              $img1=__('destinations/'.$destino.'.resorts.1.img');
            @endphp
            <div class="col-12 col-md-6 col-lg-6 mb-2 d-flex">
                <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.0.url')) }}">
                    <div class="card card-v1">
                        <img src="{{ $img0 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.0.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.0.name') }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-6 mb-2 d-flex">
                <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.1.url')) }}">
                    <div class="card card-v1">
                        <img src="{{ $img1 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.1.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.1.name') }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endif

        @if($resorts==3)
            @php
                $img0=__('destinations/'.$destino.'.resorts.0.img');
                $img1=__('destinations/'.$destino.'.resorts.1.img');
                $img2=__('destinations/'.$destino.'.resorts.2.img');
            @endphp

            <div class="col-12 col-md-6 col-lg-4">
                <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.0.url')) }}">
                    <div class="card card-v1">
                        <img src="{{ $img0 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.0.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.0.name') }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.1.url')) }}">
                    <div class="card card-v1">
                        <img src="{{ $img1 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.1.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.1.name') }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4">
                <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.2.url')) }}">
                    <div class="card card-v1">
                        <img src="{{ $img2 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.2.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.2.name') }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endif



        @if($resorts==4)
            @php
              $img0=__('destinations/'.$destino.'.resorts.0.img');
              $img1=__('destinations/'.$destino.'.resorts.1.img');
              $img2=__('destinations/'.$destino.'.resorts.2.img');
              $img3=__('destinations/'.$destino.'.resorts.3.img');

              /*$img0=__('destinations/'.$destino.'.resorts.0.img');
              $img1=__('destinations/'.$destino.'.resorts.1.img');
              $img0='https://dummyimage.com/690x1008/000/fff';
              $img1='https://dummyimage.com/690x1008/000/fff';
              $img2='https://dummyimage.com/690x500/000/fff';
              $img3='https://dummyimage.com/690x500/000/fff';*/

            @endphp

            <div class="col-12 col-md-6 col-lg-4 d-flex mb-2 mb-lg-0">
                <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.0.url')) }}">
                    <div class="card card-v1 h-100">
                        <img src="{{ $img0 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.0.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.0.name') }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-6 col-lg-4 d-flex mb-2 mb-lg-0">
                <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.1.url')) }}">
                    <div class="card card-v1 h-100">
                        <img src="{{ $img1 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.1.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.1.name') }}</h5>
                        </div>
                    </div>
                </a>
            </div>

            <div class="col-12 col-md-12 col-lg-4">
                <a class="w-100" href="{{ lang_url(__('destinations/'.$destino.'.resorts.2.url')) }}">
                    <div class="card card-v1  mb-2">
                        <img src="{{ $img2 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.2.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.2.name') }}</h5>
                        </div>
                    </div>
                </a>
                <a href="{{ lang_url(__('destinations/'.$destino.'.resorts.3.url')) }}">
                    <div class="card card-v1 ">
                        <img src="{{ $img3 }}" class="card-img-top"
                             alt="{{ __('destinations/'.$destino.'.resorts.3.name') }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ __('destinations/'.$destino.'.resorts.3.name') }}</h5>
                        </div>
                    </div>
                </a>
            </div>
        @endif
    </div>
</section>