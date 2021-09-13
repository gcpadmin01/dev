@section('title', 'Agentes - Royal Resorts')
@section('metadescription', 'Agentes Royal Resorts')

@php
  $imgOffer='travel-agent-'.App::getLocale();

  
  if(Agent::isMobile() && !Agent::isTablet()){ $img= 'img/mobile/deals/'.$imgOffer.'.jpg';}
  else{  $img= 'img/deals/big/'.$imgOffer.'.jpg';}
@endphp

<img class="img-fluid" src="{{asset($img)}}" alt="Agentes Royal Resorts" style="width:100%">
    @if(Session::has('fail'))
        <div class="alert alert-danger alert-dismissible">
            {{ Session::get('fail') }}
        </div>
    @endif

    @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible">
            {{ Session::get('success')}}
        </div>
    @endif
@component('parts/extras/booking-agentes')@endcomponent

<section class="container subinterna">
  <div class="container">

    <div class="row pt-32">
      <div class="col-12">
        {!!__('travel-agents/landing.content1')!!}
      </div>
    </div>

    <div class="row py-4 pt-5">
      @desktop

      @elsedesktop
        <div class="col-lg-0 col-md-0 col-md-12 col-sm-12">
          <img class="img-fluid" src="{{asset('img/resorts/grand-residences-riviera-cancun/big-gallery/grand-residences-riviera-cancun-facilities-a.jpg')}}" alt="Agentes Royal Resorts">
        </div>
      @enddesktop


      <div class="col-lg-6 col-md-6 col-md-12 col-sm-12" style="padding-right: 15px;">
        {!!__('travel-agents/landing.content2')!!}

        <a href="{{asset('resources/Grand-Residences-'.App::getLocale().'.pdf')}}" class="btn yellow-button" role="button" download="Brochure Grand Residences Riviera Cancun"><i class="fa fa-cloud-download" aria-hidden="true"></i> {{__('travel-agents/landing.btnDownload')}}</a> <br><br>
        
      </div>

      @desktop
        <div class="col-lg-6 col-md-6 col-md-0 col-sm-0">
          <img class="img-fluid" src="{{asset('img/resorts/grand-residences-riviera-cancun/big-gallery/grand-residences-riviera-cancun-facilities-a.jpg')}}" alt="Agentes Royal Resorts">
        </div>
      @enddesktop


    </div>

  </div>
  <br><br>
  <hr>
  <br><br>
  <div>
  {!!__('travel-agents/landing.content4')!!}

@php
  $resort="grand-residences-riviera-cancun";
  $total_rooms = count( __('resorts/'.$resort.'/rooms.rooms') );
  $date = date_create();
  $today =date_format($date, 'n/Y');
@endphp

<section class="container section-resort-room ">
    @for ($i=0; $i<$total_rooms; $i++)
        @php
            $total_amenities = count( __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities') );
            $total_carrusel = count( __('resorts/'.$resort.'/rooms.rooms.'.$i.'.carrusel') );
            $total_lista = count( __('resorts/'.$resort.'/rooms.rooms.'.$i.'.lista') );
        @endphp
        <div class="row no-gutters resort-room d-flex align-items-stretch">
            <div class="col-12 col-lg-7 resort-room-image">
                <div class="rooms-gallery sliderjs">
                    @for ($j=0; $j<$total_carrusel; $j++)
                        @php
                            $img= 'img/resorts/'.$resort.'/rooms/gallery/'.__('resorts/'.$resort.'/rooms.rooms.'.$i.'.carrusel.'.$j);
                        @endphp
                        <div class="room-img" style="background-image: url('{{ asset($img)}}')">
                            <img class="w-100 d-lg-none " src="{{ asset($img)}}"
                                 title="{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.image.alt')}}"
                                 alt="{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.image.alt')}}" width="900"/>
                        </div>
                    @endfor
                </div>
                <div class="label-plan">
                    <div><h2>{{__('resorts/'.$resort.'/rooms.rooms.'.$i.'.title')}}</h2></div>
                    @if(__('resorts/'.$resort.'/rooms.rooms.'.$i.'.flor-plan-url')!='')
                        <a href="#" data-toggle="modal" data-target="#modal-rooms{{$i}}">
                            {{__('general.flor_plan')}}
                        </a>
                    @endif
                </div>
            </div>
            <div class="col-12 col-lg-5  resort-room-info">
                <div class="row no-gutters ">
                    <div class="col-12">
                        <span class="resort-room-title text-uppercase">{{__('general.lb_room_amenities')}}</span>

                        <div class="resort-room-amenities">
                            <ul class="row no-gutters">
                                @for ($k=0; $k<$total_amenities; $k++)
                                    <li class="col-6 col-md-4 amenities-icon-rooms amenity-{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities.'.$k.'.icon') }}">
                                        {{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.amenities.'.$k.'.title') }}
                                    </li>
                                @endfor
                            </ul>
                        </div>
                        <span class="resort-room-title text-uppercase">{{__('general.lb_room_bullets')}}</span>
                        <div class="resort-room-description">
                            <ul class="row no-gutters" style="">
                                @for ($k=0; $k<$total_lista; $k++)
                                    <li class="col-12">{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.lista.'.$k) }}</li>
                                @endfor
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 resort-booking rooms-customizer py-3 px-3 pb-lg-0">
                     
                    </div>
                </div>
            </div>
        </div>
    @endfor

    @for ($i=0; $i<$total_rooms; $i++)
        @php $img_flor_plan= __('resorts/'.$resort.'/rooms.rooms.'.$i.'.flor-plan-url'); @endphp
        <div class="modal fade modal-webcams modal-foor-plan" id="modal-rooms{{$i}}" tabindex="-1" role="dialog"
             aria-labelledby="rooms-modal-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="">
                    <div class="modal-header" style="">
                        <div class="w-100 text-center">
                            <h5 class="modal-title av-white">
                              {{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.title') }}
                            </h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="">
                        <img class="floor-image img-fluid" src="{{ asset($img_flor_plan) }}"
                             alt="{{ __('resorts/'.$resort.'/rooms.rooms.'.$i.'.title') }}"/>
                    </div>
                </div>
            </div>
        </div>
    @endfor
</section>

<br/><br/>

  

  </div><!--Grand Residences-->


@php
  $resort="the-royal-caribbean";
  $total_rooms = count( __('resorts/'.$resort.'/rooms.rooms') );
  $date = date_create();
  $today =date_format($date, 'n/Y');
@endphp

<br/><br/>


  <!--The Royal Caribbean-->
</section>


<!-- Contact Form Modal-->
<div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="registro-modal" aria-hidden="true">
  <div class="modal-dialog modal-lg checkAvailabityModal" role="document">
    <div class="modal-content">
      <div class="modal-header modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-user pr-1 fa-lg"></i> {{__('travel-agents/landing.signup')}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="col-lg-12"><p>{{__('travel-agents/landing.suContent')}}</p></div>
        <p>
      <form action="{{route('formProcesaEnvio')}}" class="form-inline" method="post" onsubmit="">
        {{ csrf_field() }}
        <div class="col-lg-6 agentes"><label for="iata">{{__('travel-agents/landing.suIata')}} *</label><input type="text" class="form-control" id="iataCode" name="iataCode" required></div>
        <input type="text" id="agentName" name="agentName" hidden>
        <div class="col-lg-6 agentes"><label for="agency">{{__('travel-agents/landing.suName')}} *</label><input type="text" class="form-control" id="agencyName" name="agencyName" required></div>
        <div class="col-lg-12 agentes"><label for="address1">{{__('travel-agents/landing.suAddress1')}} *</label><input type="text" class="form-control" id="address1" name="address1" required></div>
        <div class="col-lg-12 agentes"><label for="address2">{{__('travel-agents/landing.suAddress2')}}</label><input type="text" class="form-control" id="address2" name="address2"></div>
        <div class="col-lg-6 agentes"><label for="city">{{__('travel-agents/landing.suCity')}} *</label><input type="text" class="form-control" id="city" name="city" required></div>
        <div class="col-lg-6 agentes"><label for="region">{{__('travel-agents/landing.suRegion')}} *</label><input type="text" class="form-control" id="region" name="region" required></div>
        <div class="col-lg-6 agentes"><label for="zip">{{__('travel-agents/landing.suZip')}} *</label><input type="text" class="form-control" id="zip" name="zip" required></div>
        <div class="col-lg-6 agentes"><label for="country">{{__('travel-agents/landing.suCountry')}} *</label><input type="text" class="form-control" id="country" name="country" required></div>
        <div class="col-lg-6 agentes"><label for="phone">{{__('travel-agents/landing.suPhone')}} *</label><input type="text" class="form-control" id="phone" name="phone" required></div>
        <div class="col-lg-6 agentes"><label for="fax">Fax</label><input type="text" class="form-control" id="fax" name="fax"></div>
        <div class="col-lg-12 agentes"><label for="email">{{__('travel-agents/landing.suEmail')}}Email *</label><input type="mail" class="form-control" id="email" name="email" required></div>

        <div class="col-lg-12 agentes-input"><label><input type="checkbox" value="1" required>&nbsp; {{__('travel-agents/landing.suTerm1')}}</label></div>
        <div class="col-lg-12 agentes-input"><label><input type="checkbox" value="1" required>&nbsp; {{__('travel-agents/landing.suTerm2')}}</label></div>

        <input type="hidden" id="lang" name="lang" value="{{App::getLocale()}}">
        <div class="col-lg-12 d-flex justify-content-center"><button type="submit" class="btn btn-warning">{{__('travel-agents/landing.suBtn')}}</button></div>

      </form>
    </p>

      </div>
      <!--
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
      </div>
      -->
    </div>
  </div>
</div>






