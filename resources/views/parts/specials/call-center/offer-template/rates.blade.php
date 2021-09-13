@php
    $hoy = date("m/d/Y");    
    $hoymas5 = date("m/d/Y",strtotime($hoy."+ 5 days"));

    $resorts=count(__('special-offer/'.$slug.'.resorts'));
    $total_filtros=count(__('special-offer/'.$slug.'.lista_filtros'));
    $total_filtros_rate=count(__('special-offer/'.$slug.'.lista_filtros2'));
    $val= substr($filtro,8);
    $value=""; $color_class=""; $evento="";
    if(!$val){
        
    }else{
       $pieces = explode("-", $val);
       $total= count($pieces);
       $tamano= strlen($pieces[$total-1]);
       if($tamano>3){
        $cad_tem=$pieces[$total-1];
        $pieces[$total-1]= substr($cad_tem,0,3);
       }
    }

    if($pieces[0]=='all'){ $evento='1';} //todos los text box checked

@endphp
            
<section class="container">
    <div class="row no-gutters mb-4">
        <div class="col-12">
            <div class="dropdown">
                <button class="btn btn-primary " type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{__('general.lb_filter')}}:
                </button>
                <form class="dropdown-menu pl-4 pr-4" id="dropdownContent" aria-labelledby="dropdownMenuButton">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input check-input-destino" value="all"
                                   id="allDestinations" {{$evento==1?'checked':''}}>{{__('general.all')}}
                        </label>
                    </div>
                    @for($b=0;$b<$total_filtros;$b++)
                        @php $value=__('special-offer/'.$slug.'.lista_filtros.'.$b.'.value');@endphp
                        <div class="form-check">
                            <label class="form-check-label" style="font-size: 1rem;">
                                <input type="checkbox" class="form-check-input check-input-destino" value="{{ $value}}"
                                       id="{{ $value}}" {{$evento==1?'checked':''}}>{{__('special-offer/'.$slug.'.lista_filtros.'.$b.'.name')}}
                            </label>
                        </div>
                    @endfor
                </form>
            </div>
        </div>
    </div>

    <div class="col-12 mb-5">
        <div class="row bg-light-gray">
            @for($i=0;$i<$resorts;$i++)
                @php
                    $stars = __('special-offer/'.$slug.'.resorts.'.$i.'.stars');
                    $rate_plan = __('special-offer/'.$slug.'.resorts.'.$i.'.rate_plan');
                    $destino = __('special-offer/'.$slug.'.resorts.'.$i.'.destination');
                    $slug_resort = __('special-offer/'.$slug.'.resorts.'.$i.'.slug');

                    if($slug=='luxury-resort' || $slug=='hotel-de-lujo'){
                        $img_small="img/deals/".$slug_resort.".jpg";

                    }else{
                        $img_small="img/resorts/".$slug_resort."/".$slug_resort."-offer.jpg";
                    }
                    $clasificacion=__('special-offer/'.$slug.'.resorts.'.$i.'.filtros');
                    $claseDestino = substr($clasificacion, 0, 3);
                    $claseRate = substr($clasificacion, 4, 2);

                    $lb_destino="";
                    $lb_rate_plan="";
                    $clase="";
                    $resultado="";

                    switch($destino){
                        case 1: $lb_destino="Cancun, Mexico"; break;
                        case 2: $lb_destino="Riviera Maya, Mexico"; break;
                        case 3: $lb_destino="Playa del Carmen, Mexico"; break;
                        case 4: $lb_destino="Sint Maarten Island"; break;
                        case 5: $lb_destino="Curacao Island"; break;
                        case 6: $lb_destino="Punta Cana, Dominican Republic"; break;
                        default;
                    }
                    switch($rate_plan){
                        case 1: $lb_rate_plan= (\App::getLocale() == 'es')? "TODO INCLUIDO" : "All Inclusive"; break;
                        case 2: $lb_rate_plan=(\App::getLocale() == 'es')? "SOLO HABITACIÓN" : "Room Only"; break;
                        case 3: $lb_rate_plan= (\App::getLocale() == 'es')? "HABITACIÓN Y DESAYUNO" : "Bed & Breakfast"; break;
                        default;
                    }
                    for($w=0; $w<$total;$w++){
                        $almacen[$w]='';
                        $valor=$pieces[$w];
                        if($valor=='all'){ break; }
                        $resultado = strpos($clasificacion, $valor);


                        if ($resultado === 0) {$almacen[$w]='1'; $clase="visible"; }
                        if ($resultado === false){
                            if(in_array(1,$almacen)){
                                if($valor=='ai'|| $valor=='ep' || $valor=='bb' ){
                                    $clase="d-none";
                                }
                            }else{ $clase="d-none"; }
                        }

                        //echo '['.$i.'-'.$w.'- ('.$clasificacion.') -'.$valor.'-'.$resultado.'-'.$clase.']';
                    }

                @endphp
                <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset {{$clasificacion}} {{$claseDestino}} {{$claseRate}} {{$clase}}">
                    <div class="card card-resort h-100">
                        <div class="card-header">
                            <img class="w-100" src="{{ asset($img_small)}}"
                                 alt="{{__('special-offer/'.$slug.'.resorts.'.$i.'.alt')}}"
                                 title="{{__('special-offer/'.$slug.'.resorts.'.$i.'.alt')}}">
                            @if(!Agent::isMobile())
                            <a class="icon-small" href="#" data-toggle="modal" data-target="#picturemodal-{{$i}}">
                                <img class="w-100" src="{{asset('img/icon-galeria/zoom-in.png')}}" alt="Zoom">
                            </a>
                            @endif
                        </div>
                        <div class="card-body div-title">
                            @if($slug=='luxury-resort' || $slug=='hotel-de-lujo')
                            <div class="row no-gutters">
                                
                              <h3 class="card-title">    {!!__('special-offer/'.$slug.'.resorts.'.$i.'.name')!!}</h3>
                               
                            </div>
                            @else                            

                            <div class="row no-gutters">
                                <div class="col-12">
                                    <h3 class="card-title">
                                        {!!__('special-offer/'.$slug.'.resorts.'.$i.'.name')!!}
                                    </h3>
                                </div>
                                <div class="col-7">
                                    <span class="card-subtitle">{{ $lb_destino }}</span>
                                </div>
                                <div class="col-5">
                                    <div class="estrellas">
                                        @for($w=0;$w<$stars;$w++)
                                            <label>★</label>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                            @endif


                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <a href="#" class="meal-plan">
                                    {{$lb_rate_plan}}
                                </a>
                                <ul class="inclusion">
                                    {!!__('special-offer/'.$slug.'.resorts.'.$i.'.bullets')!!}
                                </ul>

                                <div class="row no-gutters">
                                    <div class="col-12 text-right">
                                        <a href="#" data-toggle="modal" data-target="#masinformacionoferta-{{$i}}">
                                            {{__('general.view_more')}}
                                        </a>
                                    </div>
                                </div>

                                <p class="travel-window">
                                    {{__('general.travel between')}}:
                                    <label>{{__('special-offer/'.$slug.'.resorts.'.$i.'.travel_window')}}</label>
                                </p>

                            </div>
                        </div>
                        <div class="room-offer mb-3">
                            <div class="row d-flex">
                                <div class="col-6 room-promotion align-self-center">
                                    <p class="m-0">{{__('special-offer/'.$slug.'.resorts.'.$i.'.discount_label')}}</p>
                                </div>
                                <div class="col-6 text-center align-self-center">
                                    <a href="#" data-toggle="modal" data-target="#form-{{$i}}"
                                       class="btn btn-primary text-uppercase  av-btn-rates">
                                        {{__('general.book')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            @endfor
        </div>
    </div>

</section>

@for($a=0;$a<$resorts;$a++)
    @php
        $slug_resort = __('special-offer/'.$slug.'.resorts.'.$a.'.slug');
        $img_big="img/resorts/".$slug_resort."/".$slug_resort."-offer-big.jpg";
        $rate_plan = __('special-offer/'.$slug.'.resorts.'.$a.'.rate_plan');
        $tipo = __('special-offer/'.$slug.'.resorts.'.$a.'.tipo');
        $code = __('special-offer/'.$slug.'.resorts.'.$a.'.code');
        $resort_id = __('special-offer/'.$slug.'.resorts.'.$a.'.resort_id');
        $ihotelier_id = __('special-offer/'.$slug.'.resorts.'.$a.'.ihotelier_id');
        $lb_rate_plan="";
        switch($rate_plan){
            case 1: $lb_rate_plan= (\App::getLocale() == 'es')? "TODO INCLUIDO" : "All Inclusive"; break;
            case 2: $lb_rate_plan=(\App::getLocale() == 'es')? "SOLO HABITACIÓN" : "Room Only"; break;
            case 3: $lb_rate_plan= (\App::getLocale() == 'es')? "HABITACIÓN Y DESAYUNO" : "Bed & Breakfast"; break;
            default;
        }
    @endphp

    <!-- Modal information-->
    <div class="modal fade" id="masinformacionoferta-{{$a}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" >
                        <b>{{__('special-offer/'.$slug.'.resorts.'.$a.'.name')}} - {{$lb_rate_plan}}</b>
                    </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!!__('special-offer/'.$slug.'.resorts.'.$a.'.view_more')!!}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal pictures-->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
         id="picturemodal-{{$a}}">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title">
                        <b>{{__('special-offer/'.$slug.'.resorts.'.$a.'.name')}}</b>
                    </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="w-100" src="{{ asset($img_big)}}"
                         alt="{{__('special-offer/'.$slug.'.resorts.'.$a.'.alt')}}"
                         title="{{__('special-offer/'.$slug.'.resorts.'.$a.'.alt')}}">
                </div>

            </div>
        </div>
    </div>

    <!-- Modal booknow-->
    <div class="checkAvailabityModal checkAvailabityModalRooms modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
         id="form-{{$a}}">
        <div class="modal-dialog modal-dialog-centered modal-lg">

            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100 text-center">
                        <h5 class="modal-title text-uppercase">
                            {{__('special-offer/'.$slug.'.title')}}
                        </h5>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <form action="https://reservations.travelclick.com/bookings.jsp" method="GET"
                      accept-charset="UTF-8" target="_blank" onsubmit="">
                    <input type="hidden" name="hotelid" class="hotelidB" value="{{$resort_id}}">
                    @if($tipo[0]==1)<input type="hidden" name="RatePlanID" class="RatePlanIDB" value="{{$ihotelier_id}}">@endif
                    @if($tipo[0]==2)<input type="hidden" name="packageId" id="packageIdB" value="{{$ihotelier_id}}">@endif
                    @if($code!='')<input type="hidden" name="identifier" value="{{$code}}">@endif
                    <div class="modal-body">
                        <div class="w-100 text-center">
                            <h6 class="text-uppercase"
                                id="resortoffer">{{__('special-offer/'.$slug.'.resorts.'.$a.'.name')}} - {{$lb_rate_plan}}</h6>
                        </div>
                        <div class="contenedor-tabs">
                            <div class="tab-content">
                                <div class="booking-interno-inputs">
                                    <label>{{ __('general.booking.label.check_in') }}</label>
                                    <div class="input-group date"  id="modalDeals{{$a}}">
                                        <input type="text" class="form-control dateinB"  name="datein"
                                               placeholder="{{$hoy}}" value="{{$hoy}}">
                                        <div class="input-group-addon">
                                            <span class="icono-calendario"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-interno-inputs">
                                    <label>{{ __('general.booking.label.check_out') }}</label>
                                    <div class="input-group date"  id="modalDeals{{$a}}">
                                        <input type="text" name="dateout" class="form-control dateoutB"
                                               placeholder="{{$hoymas5}}" value="{{$hoymas5}}">
                                        <div class="input-group-addon">
                                            <span class="icono-calendario"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-interno-inputs">
                                    <label class="spAdultsB">{{ __('general.booking.label.adults') }}</label>
                                    <select class="form-control adultsB" name="adults">
                                        <option value="1">1</option>
                                        <option value="2" selected="">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>

                                <div class="booking-interno-inputs">
                                    <label class="spChildrenB">{{ __('general.booking.label.children') }}</label>
                                    <select class="form-control childrenB" name="children">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="booking-interno-inputs teenBoxB" >
                                    <label class="spTeenB">{{ __('general.booking.label.teen') }}</label>
                                    <select class="form-control children2B" name="children2">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>

                                <div class="booking-interno-inputs">
                                    <label for="room"> {{ __('general.booking.label.rooms') }}</label>
                                    <select class="form-control roomsOnly" name="rooms">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        @if (App::getLocale() == 'es')<input type="hidden" name="languageid" 
                                                             value="2">@endif
                        <div class="text-center modal-bottom-text to-button" style="">
                            <button type="submit" class="my-4 text-uppercase button-modal-book bold btn-book-now"
                                    id="">{{ __('general.booking.btn.book_now') }}</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endfor