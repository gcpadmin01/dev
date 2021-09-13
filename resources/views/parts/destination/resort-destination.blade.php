@php
    $title= __('destinations/resorts/'.$destino.'.title');
    $contenido= __('destinations/resorts/'.$destino.'.content');
    $total_resorts = count( __('destinations/'.$destino.'.resorts'));
@endphp

@section('title', __('destinations/resorts/'.$destino.'.seo.title'))
@section('metadescription', __('destinations/resorts/'.$destino.'.seo.metadescription'))

<section class="container">
    <div class="row no-gutters mb-5">
        <div class="col-12">
            <h1 class="h1 text-uppercase">
                {{ $title }}
            </h1>
            <p>{!! $contenido !!}</p>
        </div>
    </div>
</section>

<section class="container">
    <div class="row ">
        @foreach(__('destinations/'.$destino.'.resorts') as $key => $resort)
            @php
                $img_name= __('destinations/'.$destino.'.resorts.'.$key.'.slug')."-b.jpg";
                $img_url=asset('img/resorts/'.$img_name);
                $img="background-image: url('".$img_url."');";
                $total=__('beach-resorts.ubicacion.mexico.resorts.'.$key.'.stars');
                $url=__('destinations/'.$destino.'.resorts.'.$key.'.url');
            @endphp
            <div class="col-12 col-md-6 col-lg-4 mb-2">
                <div class="card card-blue-overlay h-100">
                    <div class="card-content">
                        <img class="w-100" src="{{$img_url}}" alt="{{__('destinations/'.$destino.'.resorts.'.$key.'.title')}}">
                        <div class="card-body">
                            <h2 class="card-title">{{__('destinations/'.$destino.'.resorts.'.$key.'.title')}}</h2>
                            <div class="card-subtitle d-flex mb-2">
                                <div class="stars d-flex">
                                    @for($i=0;$i<$total;$i++)
                                        <label for="radio1">★</label>
                                    @endfor
                                </div>
                            </div>
                            <div class="card-body-hidden">
                                <p class="card-text">
                                    {{__('destinations/'.$destino.'.resorts.'.$key.'.description')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="view-more">
                        <a class="w-100 btn btn-secondary"
                           href="{{ url($url)}}">
                            {{ __('general.view_more') }}
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>