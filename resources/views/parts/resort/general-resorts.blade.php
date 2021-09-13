@section('title', __('beach-resorts.seo.title'))
@section('metadescription', __('beach-resorts.seo.metadescription'))

<section class="container">
    <div class="row no-gutters subinterna pb-4">
        <div class="col-12">
            <h1 class="h1">{{__('beach-resorts.title')}}</h1>
            <h2 class="h2">{{__('beach-resorts.subtitle')}}</h2>
            {!!__('beach-resorts.description')!!}
        </div>
    </div>

    <div class="row no-gutters mb-5">
        <ul class="nav nav-pills nav-fill flex-column flex-sm-row w-100" id="pills-tab" role="tablist">
            <li class="nav-item d-flex align-items-center justify-content-center av-border-right-white">
                <a class="nav-link text-uppercase bold w-100 active" id="pills-resort-all" data-toggle="tab"
                   href="#" role="tab" aria-controls="pills-mexican pills-caribbean" aria-selected="true">
                    {{__('beach-resorts.label')}}
                </a>
            </li>
            <li class="nav-item d-flex align-items-center justify-content-center av-border-right-white">
                <a class="nav-link text-uppercase bold w-100 " id="pills-resort-mexican" data-toggle="tab"
                   href="#pills-mexican" role="tab" aria-controls="pills-caribbean" aria-selected="false">
                    {{__('beach-destinations.zones.0.title')}}
                </a>
            </li>
            <li class="nav-item d-flex align-items-center justify-content-center av-border-right-white">
                <a class="nav-link text-uppercase bold w-100 " id="pills-resort-caribean" data-toggle="tab"
                   href="#pills-caribbean" role="tab" aria-controls="pills-caribbean" aria-selected="false">
                    {{__('beach-destinations.zones.1.title')}}
                </a>
            </li>
        </ul>
    </div>

    <div class="tab-content" id="pills-tabContent">
        <div id="pills-mexican" class="tab-pane active mb-5 show-resort">
            <div class="row no-gutters subinterna">
                <div class="col-12">
                    <h2 class="text-uppercase h2">{{__('beach-destinations.zones.0.title')}}</h2>
                    {!!__('beach-resorts.ubicacion.mexico.description')!!}
                </div>
            </div>
            <div class="row no-gutters element-royal">
                
                @for($i=0; $i < count(__('beach-resorts.ubicacion.mexico.resorts')); $i++)
                    @php
                        $img1= asset("img/resorts/".__('beach-resorts.ubicacion.mexico.resorts.'.$i.'.img')."-b.jpg");
                        $img ="background-image: url('".$img1."');";
                        $total=__('beach-resorts.ubicacion.mexico.resorts.'.$i.'.stars')
                    @endphp
                    <div class="col-12 col-md-6 col-lg-4 mb-2 pl-md-2 pr-md-2">
                        <div class="card card-blue-overlay  h-100">
                            <div class="card-content">
                                <img class="w-100" src="{{$img1}}" alt="{{__('beach-resorts.ubicacion.mexico.resorts.'.$i.'.title')}}">
                                <div class="card-body">
                                    <h3 class="h2 card-title">
                                        {{__('beach-resorts.ubicacion.mexico.resorts.'.$i.'.title')}}
                                    </h3>
                                    <div class="card-subtitle d-flex mb-2">
                                        @if(__('beach-resorts.ubicacion.mexico.resorts.'.$i.'.label')!='')
                                            <a class="meal-plan pr-2" href="#">
                                                {{__('beach-resorts.ubicacion.mexico.resorts.'.$i.'.label')}}
                                            </a>
                                        @endif
                                        <div class="stars d-flex">
                                            <!--@for($j=0;$j<$total;$j++)
                                                <label class="align-self-center mb-0" for="radio1">★</label>
                                            @endfor-->
                                        @for($j=0; $j<$total; $j++)
                                                @if($total - ($j+1) >=0)
                                                <img src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon" >
                                                @else
                                                <img src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon" >
                                                @endif
                                        @endfor                                            
                                        </div>
                                    </div>
                                    <div class="card-body-hidden">
                                        <p class="card-text">
                                            {{__('beach-resorts.ubicacion.mexico.resorts.'.$i.'.description')}}
                                        </p>

                                    </div>
                                </div>

                            </div>
                            <div class="view-more">
                                <a class="w-100 btn btn-secondary"
                                   href="{{__('beach-resorts.ubicacion.mexico.resorts.'.$i.'.url')}}">
                                    {{ __('general.view_more') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div id="pills-caribbean" class="tab-pane active show-resort">
            <div class="row no-gutters">
                <div class="col-12">
                    <h2 class="text-uppercase h2">{{__('beach-destinations.zones.1.title')}}</h2>
                    {!!__('beach-resorts.ubicacion.caribe.description')!!}
                </div>
            </div>
            <div class="row">
                @for($i=0; $i < 3; $i++)
                    @php
                        $img1= asset("img/resorts/".__('beach-resorts.ubicacion.caribe.resorts.'.$i.'.img')."-b.jpg");
                        $img ="background-image: url('".$img1."');";
                        $total=__('beach-resorts.ubicacion.caribe.resorts.'.$i.'.stars');
                    @endphp
                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <div class="card card-blue-overlay  h-100">
                            <div class="card-content">
                                <img class="w-100" src="{{$img1}}" alt="{{__('beach-resorts.ubicacion.caribe.resorts.'.$i.'.title')}}">
                                <div class="card-body">
                                    <h3 class="h2 card-title">
                                        {{__('beach-resorts.ubicacion.caribe.resorts.'.$i.'.title')}}
                                    </h3>
                                    <div class="card-subtitle d-flex mb-2">
                                        @if(__('beach-resorts.ubicacion.caribe.resorts.'.$i.'.label')!='')
                                            <a class="meal-plan pr-2" href="#">
                                                {{__('beach-resorts.ubicacion.caribe.resorts.'.$i.'.label')}}
                                            </a>
                                        @endif
                                        <div class="stars d-flex">
                                            <!--@for($j=0;$j<$total;$j++)
                                                <label class="align-self-center mb-0" for="radio1">★</label>
                                            @endfor-->
                                        @for($j=0; $j<$total; $j++)
                                                @if($total - ($j+1) >=0)
                                                <img src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon" >
                                                @else
                                                <img src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon" >
                                                @endif
                                        @endfor
                                            
                                        </div>

                                    </div>
                                    <div class="card-body-hidden">
                                        <p class="card-text">
                                            {{__('beach-resorts.ubicacion.caribe.resorts.'.$i.'.description')}}
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="view-more">
                                <a class="w-100 btn btn-secondary"
                                   href="{{__('beach-resorts.ubicacion.caribe.resorts.'.$i.'.url')}}">
                                    {{ __('general.view_more') }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>

<!--
  <div class="row no-gutters py-5">
    <div class="row no-gutters subinterna">
      <div class="col d-none d-md-block"></div>
      <div class="col-md-10 col-12">
        <div class="row no-gutters">
          <div class="col-12">
            <h6 class="text-uppercase bold">{{__('beach-resorts.subtitle2')}}</h6>
          </div>
        </div>
        <div class="row no-gutters">
          {!!__('beach-resorts.description2')!!}
        </div>
      </div>
      <div class="col d-none d-md-block"></div>
    </div>
  </div>
-->
</section>