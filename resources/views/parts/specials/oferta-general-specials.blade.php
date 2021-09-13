@php
    $resorts=count(__('special-offer/setup/main.resorts'));
    $hoy = date("m/d/Y");    
    $hoymas5 = date("m/d/Y",strtotime($hoy."+ 5 days"));
@endphp
<section class="container">
    <div class="col-12 mb-5">
        <h3 class="text-center h1">{{__('special-offer/setup/main.subtitulo2')}}</h3>
    </div>
    <div class="col-12 mb-5 bg-light-gray">
        <div class="row">
            @for($i=0;$i<$resorts;$i++)
                @php
                    $stars = __('special-offer/setup/main.resorts.'.$i.'.stars');
                    $destino = __('special-offer/setup/main.resorts.'.$i.'.destination');
                    $slug_resort = __('special-offer/setup/main.resorts.'.$i.'.slug');
                    $img_small="img/resorts/".$slug_resort."/".$slug_resort."-offer.jpg";
                    $lb_destino="";

                    switch($destino){
                        case 1: $lb_destino="Cancun, Mexico"; break;
                        case 2: $lb_destino="Riviera Maya, Mexico"; break;
                        case 3: $lb_destino="Playa del Carmen, Mexico"; break;
                        case 4: $lb_destino="Sint Maarten Island"; break;
                        case 5: $lb_destino="Curacao Island"; break;
                        case 6: $lb_destino="Punta Cana, Dominican Republic"; break;
                        default;
                    }
                @endphp
                <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3">
                    <div class="card card-resort h-100 ">
                        <div class="card-header">
                            <img class="w-100" src="{{ asset($img_small)}}"
                                 alt="{{__('special-offer/setup/main.resorts.'.$i.'.alt')}}"
                                 title="{{__('special-offer/setup/main.resorts.'.$i.'.alt')}}">

                            <a class="icon-small" href="#" data-toggle="modal" data-target="#picturemodal-{{$i}}">
                                <img class="w-100" src="{{asset('img/icon-galeria/zoom-in.png')}}" alt="Zoom">
                            </a>
                        </div>
                        <div class="card-body div-title">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <a class="card-title"
                                       href="{{__('special-offer/setup/main.resorts.'.$i.'.resort_link')}}">
                                        {!!__('special-offer/setup/main.resorts.'.$i.'.name')!!}
                                    </a>
                                </div>
                                <div class="col-7">
                                    <span class="card-subtitle">{{ $lb_destino }}</span>
                                </div>
                                <div class="col-5">
                                    <div class="estrellas">
                                        @for($w=0;$w<$stars;$w++)
                                            <!--<label>★</label>-->
                                            @if($stars - ($w+1) >=0)
                                            <img src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="15">
                                            @else
                                            <img src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="15">
                                            @endif                                          
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="card-text">
                                <a class="meal-plan"
                                   href="{{__('special-offer/setup/main.resorts.'.$i.'.offer_link')}}">
                                    {{__('special-offer/setup/main.resorts.'.$i.'.offer_name')}}
                                </a>
                                <ul class="inclusion">
                                    {!!__('special-offer/setup/main.resorts.'.$i.'.bullets')!!}
                                </ul>

                                <div class="row no-gutters">
                                    <div class="col-7 col-md-8 p-0">
                                        <p class="travel-window">
                                            {{__('general.valid thru')}}:
                                            <label>{{__('special-offer/setup/main.resorts.'.$i.'.booking_end')}}</label>
                                        </p>
                                    </div>
                                    <div class="col-5 col-md-4 p-0">
                                        <div class="text-right">
                                            <a href="#" data-toggle="modal" data-target="#masinformacionoferta-{{$i}}">
                                                {{__('general.view_more')}}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="room-offer mb-3">
                            <div class="row d-flex">
                                <div class="col-6 room-promotion align-self-center">
                                    <p class="m-0">{{__('special-offer/setup/main.resorts.'.$i.'.discount_label')}}</p>
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
        $slug_resort = __('special-offer/setup/main.resorts.'.$a.'.slug');
        $img_big="img/resorts/".$slug_resort."/".$slug_resort."-offer-big.jpg";
        $tipo = __('special-offer/setup/main.resorts.'.$a.'.tipo');
        $code = __('special-offer/setup/main.resorts.'.$a.'.code');
        $resort_id = __('special-offer/setup/main.resorts.'.$a.'.resort_id');
        $ihotelier_id = __('special-offer/setup/main.resorts.'.$a.'.ihotelier_id');
        $lb_rate_plan="";
    @endphp
    <!-- Modal information-->
    <div class="modal fade" id="masinformacionoferta-{{$a}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
            <span class="modal-title" >
            {!!__('special-offer/setup/main.resorts.'.$a.'.name')!!}<br>
            <b>{{__('special-offer/setup/main.resorts.'.$a.'.offer_name')}}</b>
            </span>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {!!__('special-offer/setup/main.resorts.'.$a.'.view_more')!!}
                </div>
                <!--<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>-->
            </div>
        </div>
    </div>

    <!-- Modal pictures-->
    <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"
         id="picturemodal-{{$a}}">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <p class="modal-title" >
                        <b>{{__('special-offer/setup/main.resorts.'.$a.'.name')}}</b>
                    </p>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img class="w-100" src="{{ asset($img_big)}}"
                         alt="{{__('special-offer/setup/main.resorts.'.$a.'.alt')}}"
                         title="{{__('special-offer/setup/main.resorts.'.$a.'.alt')}}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>



    <!-- Modal booknow-->
    <div class="checkAvailabityModal checkAvailabityModalRooms modal fade" tabindex="-1" role="dialog"
         aria-labelledby="myLargeModalLabel" aria-hidden="true"
         id="form-{{$a}}">
        <div class="modal-dialog modal-dialog-centered">

            <div class="modal-content">
                <div class="modal-header">
                    <div class="w-100 text-center">
                        <h5 class="modal-title text-uppercase">
                            {{__('special-offer/setup/main.resorts.'.$a.'.offer_name')}}
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
                                id="resortoffer">{{__('special-offer/setup/main.resorts.'.$a.'.name')}}</h6>
                        </div>
                        <div class="contenedor-tabs">
                            <div class="tab-content">
                                <div class="booking-interno-inputs">
                                    <label>{{ __('general.booking.label.check_in') }}</label>
                                    <div class="input-group date" id="modalDeals{{$a}}">
                                        <input type="text" class="form-control dateinB"  name="datein"
                                               placeholder="{{$hoy}}" value="{{$hoy}}">
                                        <div class="input-group-addon">
                                            <span class="icono-calendario"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="booking-interno-inputs">
                                    <label>{{ __('general.booking.label.check_out') }}</label>
                                    <div class="input-group date" id="modalDeals{{$a}}">
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

                                <div class="booking-interno-inputs teenBoxB">
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
                                    <label for="room">{{ __('general.booking.label.rooms') }}</label>
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
                        @if (App::getLocale() == 'es')<input type="hidden" name="languageid" value="2">@endif

                        <input type="hidden" name="subchan" value="royalreservations.com">                                                             
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