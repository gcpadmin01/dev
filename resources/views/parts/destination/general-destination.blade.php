@php
    $can= __('destinations/cancun.block_image');
    $cur= __('destinations/curacao.block_image');
    $pla= __('destinations/playa-del-carmen.block_image');
    $pue= __('destinations/puerto-morelos.block_image');
    $pun= __('destinations/punta-cana.block_image');
    $riv= __('destinations/riviera-maya.block_image');
    $stm= __('destinations/st-maarten.block_image');
@endphp

@section('title', __('beach-destinations.seo.title'))
@section('metadescription', __('beach-destinations.seo.metadescription'))

<section class=" beach-destinations-all">

    <div class="container">
        <div class="row no-gutters">
            <div class="col-12">
                <h1 class="mb-4">{{__('beach-destinations.title')}}</h1>
                {!!__('beach-destinations.content')!!}
            </div>
        </div>
    </div>

    <div class="row no-gutters">
        <div class="col-12">
            <div class="row no-gutters">
                <div class="col-12 mb-4">
                    <ul class="nav nav-pills nav-justified align-items-center container w-60 av-destination-new-tabs p-0"
                        id="pills-tab" role="tablist">
                        <li class="nav-item d-flex align-items-center justify-content-center">
                            <a class="nav-link medium w-100 active" id="pills-mexican-tab" data-toggle="pill"
                               href="#pills-mexican" role="tab" aria-controls="pills-mexican" aria-selected="true">
                                {{__('beach-destinations.zones.0.title')}}
                            </a>
                        </li>
                        <li class="nav-item d-flex align-items-center justify-content-center">
                            <a class="nav-link medium w-100 " id="pills-caribbean-tab" data-toggle="pill"
                               href="#pills-caribbean" role="tab" aria-controls="pills-caribbean" aria-selected="false">
                                {{__('beach-destinations.zones.1.title')}}
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content" id="pills-destination-page">
                <div class="tab-pane fade show active" id="pills-mexican" role="tabpanel" aria-labelledby="pills-mexican-tab">
                    <div class="row no-gutters">
                        <div class="container text-justify">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <p class="text-justify">
                                        {{__('beach-destinations.zones.0.description')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
                        <div class="col-12 col-md-3 p-0" id="holi">
                            <a class="no-decoration"  data-toggle="collapse" href="#resort-cancun" role="button" aria-expanded="true">
                                <div class="card card-v2">
                                    <img src='/img/beach-destination-cancun.jpg' class="card-img-top" alt="{{ __('destinations/cancun.alt_img_bg') }}">
                                    <div class="card-body">
                                        <h2 class="card-title">{{ __('destinations/cancun.title') }}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="aqui-cancun"></div>

                        <div class="col-12 col-md-3 p-0">
                            <a class="no-decoration"  data-toggle="collapse" href="#resort-carmen" role="button" aria-expanded="false">
                                <div class="card card-v2">
                                    <img src='/img/beach-destination-playa-del-carmen.jpg' class="card-img-top" alt="{{ __('destinations/playa-del-carmen.alt_img_bg') }}">
                                    <div class="card-body">
                                        <h2 class="card-title">{{ __('destinations/playa-del-carmen.title') }}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="aqui-carmen"></div>

                        <div class="col-12 col-md-3 p-0">
                            <a class="no-decoration" data-toggle="collapse" href="#resort-morelos" role="button"
                               aria-expanded="false" aria-controls="resort-morelos">
                                <div class="card card-v2">
                                    <img src='/img/beach-destination-puerto-morelos.jpg' class="card-img-top" alt="{{ __('destinations/puerto-morelos.alt_img_bg') }}">
                                    <div class="card-body">
                                        <h2 class="card-title">{{ __('destinations/puerto-morelos.title') }}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="aqui-morelos"></div>

                        <div class="col-12 col-md-3 p-0">
                            <a class="no-decoration" data-toggle="collapse" href="#resort-maya" role="button"
                               aria-expanded="false" aria-controls="resort-maya">
                                <div class="card card-v2">
                                    <img src='/img/beach-destination-riviera-maya.jpg' class="card-img-top" alt="{{ __('destinations/riviera-maya.alt_img_bg') }}">
                                    <div class="card-body">
                                        <h2 class="card-title">{{ __('destinations/riviera-maya.title') }}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="aqui-maya"></div>
                    </div>

                    <div class="collapse-mexican-cont">
                        <div class="row no-gutters collapse collapse-mexican show" id="resort-cancun" data-group=".collapse-mexican">
                            <div class="col-12 px-0 ">
                                <div class="row no-gutters">
                                    <div class="d-none d-lg-block col-lg-6 box-img-cover"
                                         style="background-image: url({{$can}}); ">
                                    </div>
                                    <div class="col-12 col-lg-6 ">
                                        <div class="row px-3 py-5 ">
                                            <div class="col-12">
                                                <h2 class="bold pb-3 av-blue">{{ __('destinations/cancun.title') }}</h2>
                                                {!! __('destinations/cancun.description') !!}
                                            </div>
                                            <div class="col-12 text-center">
                                                <a class="btn btn-primary text-uppercase" href="{{ __('destinations/cancun.slug')}}">
                                                    {!! __('general.view_more')!!}
                                                </a>
                                                <a class="btn btn-secondary text-uppercase" href="{{ __('destinations/cancun.url_resorts')}}">
                                                    {!! __('general.lb_resort')!!}
                                                </a>
                                                <a class="btn btn-success text-uppercase" href="{{ __('destinations/cancun.url_offers')}}">
                                                    {!! __('general.lb_special')!!}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters collapse collapse-mexican" id="resort-carmen" data-group=".collapse-mexican">
                            <div class="col-12 px-0">
                                <div class="row no-gutters">
                                    <div class="d-none d-lg-block col-lg-6 box-img-cover"
                                         style="background-image: url({{$pla}});">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row no-gutters px-3 py-5">
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12">
                                                <h2 class="bold pb-3">{!! __('destinations/playa-del-carmen.title') !!}</h2>
                                                {!! __('destinations/playa-del-carmen.description') !!}
                                            </div>
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12 text-center">
                                                <a class="btn btn-primary text-uppercase"
                                                   href="{{ __('destinations/playa-del-carmen.slug')}}">{!! __('general.view_more')!!}</a>
                                                <a class="btn btn-secondary text-uppercase"
                                                   href="{{ __('destinations/playa-del-carmen.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
                                                <a class="btn btn-success text-uppercase"
                                                   href="{{ __('destinations/playa-del-carmen.url_offers')}}">{!! __('general.lb_special')!!}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters collapse collapse-mexican" id="resort-morelos" data-group=".collapse-mexican">
                            <div class="col-12 px-0">
                                <div class="row no-gutters">
                                    <div class="d-none d-lg-block col-lg-6 box-img-cover"
                                         style="background-image: url({{$pue}});">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row no-gutters px-3 py-5">
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12">
                                                <h2 class="bold pb-3">{!! __('destinations/puerto-morelos.title') !!}</h2>
                                                {!! __('destinations/puerto-morelos.description') !!}
                                            </div>
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12 text-center">
                                                <a class="btn btn-primary text-uppercase"
                                                   href="{{ __('destinations/puerto-morelos.slug')}}">{!! __('general.view_more')!!}</a>
                                                <a class="btn btn-secondary text-uppercase"
                                                   href="{{ __('destinations/puerto-morelos.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
                                                <a class="btn btn-success text-uppercase"
                                                   href="{{ __('destinations/puerto-morelos.url_offers')}}">{!! __('general.lb_special')!!}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters collapse collapse-mexican" id="resort-maya" data-group=".collapse-mexican">
                            <div class="col-12 px-0">
                                <div class="row no-gutters">
                                    <div class="d-none d-lg-block col-lg-6 box-img-cover"
                                         style="background-image: url({{$riv}});">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row no-gutters px-3 py-5">
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12">
                                                <h2 class="bold pb-3">{!! __('destinations/riviera-maya.title') !!}</h2>
                                                {!! __('destinations/riviera-maya.description') !!}
                                            </div>
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12 text-center">
                                                <a class="btn btn-primary text-uppercase"
                                                   href="{{ __('destinations/riviera-maya.slug')}}">{!! __('general.view_more')!!}</a>
                                                <a class="btn btn-secondary text-uppercase"
                                                   href="{{ __('destinations/riviera-maya.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
                                                <a class="btn btn-success text-uppercase"
                                                   href="{{ __('destinations/riviera-maya.url_offers')}}">{!! __('general.lb_special')!!}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade " id="pills-caribbean" role="tabpanel" aria-labelledby="pills-caribbean-tab">
                    <div class="row no-gutters">
                        <div class="container">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <p class="text-justify">  {{__('beach-destinations.zones.1.description')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row no-gutters">
<!--                        <div class="col-12 col-md-4 p-0">
                            <a class="no-decoration" data-toggle="collapse" href="#resort-cana" role="button"
                               aria-expanded="true" aria-controls="resort-cana">
                                <div class="card card-v2">
                                    <img src='/img/beach-destination-punta-cana.jpg' class="card-img-top" alt="{{ __('destinations/punta-cana.title') }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('destinations/punta-cana.title') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="aqui-cana"></div>-->
                        <div class="col-12 col-md-6 p-0">
                            <a class="no-decoration" data-toggle="collapse" href="#resort-curacao" role="button"
                               aria-expanded="false" aria-controls="resort-curacao">
                                <div class="card card-v2">
                                    <img src='/img/beach-destination-curacao.jpg' class="card-img-top" alt="{{ __('destinations/curacao.alt_img_bg') }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('destinations/curacao.title') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="aqui-curacao"></div>
                        <div class="col-12 col-md-6 p-0">
                            <a class="no-decoration" data-toggle="collapse" href="#resort-marteen" role="button"
                               aria-expanded="false" aria-controls="resort-marteen">
                                <div class="card card-v2">
                                    <img src='/img/beach-destination-st-maarten.jpg' class="card-img-top" alt="{{ __('destinations/st-maarten.alt_img_bg') }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ __('destinations/st-maarten.title') }}</h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div id="aqui-marteen"></div>
                    </div>

                    <div id="collapse-caribbean-cont">
<!--                        <div class="row no-gutters collapse show collapse-caribbean" data-group=".collapse-caribbean" id="resort-cana">
                            <div class="col-12 px-0">
                                <div class="row no-gutters">
                                    <div class="d-none d-lg-block col-lg-6 box-img-cover"
                                         style="background-image: url({{$pun}});">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row no-gutters px-3 py-5">
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12">
                                                <h2 class="bold pb-3">{!! __('destinations/punta-cana.title') !!}</h2>
                                                {!! __('destinations/punta-cana.description') !!}
                                            </div>
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12 text-center">
                                                <a class="btn btn-primary text-uppercase"
                                                   href="{{ __('destinations/punta-cana.slug')}}">{!! __('general.view_more')!!}</a>
                                                <a class="btn btn-secondary text-uppercase"
                                                   href="{{ __('destinations/punta-cana.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
                                                <a class="btn btn-success text-uppercase"
                                                   href="{{ __('destinations/punta-cana.url_offers')}}">{!! __('general.lb_special')!!}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                        <div class="row no-gutters collapse show collapse-caribbean" data-group=".collapse-caribbean" id="resort-curacao">
                            <div class="col-12 px-0">
                                <div class="row no-gutters">
                                    <div class="d-none d-lg-block col-lg-6 box-img-cover"
                                         style="background-image: url({{$cur}});">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row no-gutters px-3 py-5">
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12">
                                                <h2 class="bold pb-3">{!! __('destinations/curacao.title') !!}</h2>
                                                {!! __('destinations/curacao.description') !!}
                                            </div>
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12 text-center">
                                                <a class="btn btn-primary text-uppercase"
                                                   href="{{ __('destinations/curacao.slug')}}">{!! __('general.view_more')!!}</a>
                                                <a class="btn btn-secondary text-uppercase"
                                                   href="{{ __('destinations/curacao.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
                                                <a class="btn btn-success text-uppercase"
                                                   href="{{ __('destinations/curacao.url_offers')}}">{!! __('general.lb_special')!!}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row no-gutters collapse collapse-caribbean" data-group=".collapse-caribbean" id="resort-marteen">
                            <div class="col-12 px-0">
                                <div class="row no-gutters">
                                    <div class="d-none d-lg-block col-lg-6 box-img-cover"
                                         style="background-image: url({{$stm}});">
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="row no-gutters px-3 py-5">
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12">
                                                <h2 class="bold pb-3">{!! __('destinations/st-maarten.title') !!}</h2>
                                                {!! __('destinations/st-maarten.description') !!}
                                            </div>
                                            <div class="col d-none d-md-block"></div>
                                            <div class="col-12 text-center">
                                                <a class="btn btn-primary text-uppercase"
                                                   href="{{ __('destinations/st-maarten.slug')}}">{!! __('general.view_more')!!}</a>
                                                <a class="btn btn-secondary text-uppercase"
                                                   href="{{ __('destinations/st-maarten.url_resorts')}}">{!! __('general.lb_resort')!!}</a>
                                                <a class="btn btn-success text-uppercase"
                                                   href="{{ __('destinations/st-maarten.url_offers')}}">{!! __('general.lb_special')!!}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>




</section>