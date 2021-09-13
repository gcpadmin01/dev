@php 
  $total_rates = count(__('specials/'.$slug.'.rates'));
  $clase='';
  if($total_rates==3){$clase='';} if($total_rates==2){$clase='3';} if($total_rates==1){$clase='2';}
  $tipo[0]=__('specials/'.$slug.'.rates.0.resorts.0.tipo');
  $code=__('specials/'.$slug.'.code');
@endphp
<section class="container py-4">
  <div class="row no-gutters">
    <div class="carousel-specials{{$clase}} row w-100 mx-0 mb-1">
      @for($i=0;$i<$total_rates;$i++)
      <div class="pb-3 d-flex align-items-center justify-content-end flex-column text-center specials-element">
        <img src="{{__('specials/'.$slug.'.rates.'.$i.'.icon')}}" alt="{{__('specials/'.$slug.'.rates.'.$i.'.tab')}}">
        <span>{{__('specials/'.$slug.'.rates.'.$i.'.tab')}}</span>
      </div>
      @endfor
      <div class="pb-3 d-flex align-items-center justify-content-end flex-column text-center specials-element">
        <img src="{{asset('img/img-specials/objeto-inteligente-vectorial.png')}}" alt="{{__('general.lb_condition')}}">
        <span>{{__('general.lb_condition')}}</span>
      </div>
    </div>

    <div class="row w-100 m-0 content-carousel-specials{{$clase}}">
      <!-- iniciaba un for-->

      @for($i=0;$i<$total_rates;$i++)
      <div class="specials-package">
        <div class="row no-gutters ">
          <div class="col-md-8 col-12 py-3 av-bg-skyblue">
            <div class="pb-4 border-fondo-white " style="margin-left: 2rem; margin-right: 2rem;">
              <div class="row no-gutters pb-3 section-title-package">
                <div class="col-12 text-center pt-2 ml-2">
                  <h4 class="av-white pt-3 mx-auto">{{__('specials/'.$slug.'.rates.'.$i.'.title')}}</h4>
                </div>
              </div>
              <div class="square-timer">
                <div class="content-deals text-center av-blue">
                  <span class="deal-small bold pt-1">{{__('general.lb_reloj1')}}</span>
                  <span class="deal-small">{{__('general.lb_reloj2')}}</span>
                  <div  class="deal-medium bold">{{__('specials/'.$slug.'.expiration')}}</div>
                  <!--<div id="timer1" class="deal-medium bold">00:00:00</div>-->
                </div>

              </div>

              <div class="list-specials pt-4 pt-md-0">{!!__('specials/'.$slug.'.rates.'.$i.'.description')!!}</div>

            </div>



            <div class="row pt-4 icons-bottom">

              <div class="col-4 d-flex align-items-center justify-content-center flex-column">
                <img class="pb-2" src="{{ asset('img/img-specials/bestdeal.png') }}" alt="bestdeal"><span class="av-white bold text-center">{{__('general.lb_best_deal')}}</span></div>

              <div class="col-4 d-flex align-items-center justify-content-center flex-column">
                <img class="pb-2" src="{{ asset('img/img-specials/booknow.png') }}" alt="booknow"><span class="av-white bold text-center">{{__('general.lb_pay_later')}}</span></div>

              <div class="col-4 d-flex align-items-center justify-content-center flex-column">
                <img class="pb-2" src="{{ asset('img/img-specials/clock.png') }}" alt="Clock"><span class="av-white bold text-center">{{__('general.lb_flexible')}}</span></div>

            </div>



          </div>

          <div class="col-md-4 col-12 av-bg-yellow2 left-yellow-resort">
            <div class="row no-gutters px-4">
              <div class="col-12 text-center pt-2">
                <h6 class="av-white">{{__('specials/'.$slug.'.rates.'.$i.'.resorts_area_title')}}</h6>
              </div>
              @php $total_resorts = count(__('specials/'.$slug.'.rates.'.$i.'.resorts')); @endphp
              @for($k=0;$k<$total_resorts;$k++)
              @php $img = __('specials/'.$slug.'.rates.'.$i.'.resorts.'.$k.'.img'); @endphp

              <div class="row pt-2 element-yellow">
                <div class="col-12">
                  <img class="w-100" src="{{ $img}}" alt="{{__('specials/'.$slug.'.rates.'.$i.'.resorts.'.$k.'.name')}}">
                </div>
                <div class="col-8 pr-0 section-price-stars">
                  <div class="row no-gutters">
                    <span class="av-white">{{__('specials/'.$slug.'.rates.'.$i.'.resorts.'.$k.'.name')}}</span>
                    @php $total_stars = __('specials/'.$slug.'.rates.'.$i.'.resorts.'.$k.'.stars'); @endphp
                    <div class="w-100 pb-1 estrellas-specials">
                      @for($s=1;$s<=$total_stars;$s++)
                      <input id="radio{{$s}}" type="radio" value="{{$s}}"><label for="radio{{$s}}">★</label>
                      @endfor
                    </div>
                    <a href="#" data-toggle="modal" data-target="#checkAvailabity" class="open-Modal btn text-uppercase bold btn-specials" data-resort="{{__('specials/'.$slug.'.rates.'.$i.'.resorts.'.$k.'.resort_id')}}" data-ihotelier="{{__('specials/'.$slug.'.rates.'.$i.'.resorts.'.$k.'.ihotelier_id')}}" data-tipo="{{__('specials/'.$slug.'.rates.'.$i.'.resorts.'.$k.'.tipo')}}" data-rname="{{__('specials/'.$slug.'.rates.'.$i.'.resorts.'.$k.'.name')}}" data-roffer="{{__('specials/'.$slug.'.title')}}">{{__('general.availability')}}</a>

                  </div>
                </div>
                <div class="col-4 pl-0">
                  <div class="content-deals text-center price-special pt-3">
                    <span class="deal-small av-blue">{{__('general.starting_at')}}</span>
                    <div class="deal-medium bold av-blue">$ {{__('specials/'.$slug.'.rates.'.$i.'.resorts.'.$k.'.price')}} USD</div>
                    <span class="deal-small av-blue">{{__('general.per_night')}}</span>
                  </div>
                </div>
              </div>
              @endfor
              <br><br>
            </div>
          </div>
        </div>
      </div>
      @endfor  <!-- terminaba el for-->
<!--Pestana terms-->

      <div class="specials-package">
        <div class="row no-gutters ">
          <div class="col-md-12 col-12 py-3 av-bg-skyblue">
            <div class="pb-4 border-fondo-white " style="margin-left: 2rem; margin-right: 2rem;">
              <div class="row no-gutters pb-3 section-title-package">
                <div class="col-12 text-center pt-2 ml-2">
                  <h4 class="av-white pt-3 mx-auto">{{ __('specials/'.$slug.'.title_conditions') }}</h4>
                </div>
              </div>
              <div class="square-timer">
                <div class="content-deals text-center av-blue">
                  <span class="deal-small bold pt-1">{{__('general.lb_reloj1')}}</span>
                  <span class="deal-small">{{__('general.lb_reloj2')}}</span>
                  <div  class="deal-medium bold">{{__('specials/'.$slug.'.expiration')}}</div>
                  <!--<div id="timer1" class="deal-medium bold">00:00:00</div>-->
                </div>
              </div>
              <div class="list-specials pt-4 pt-md-0">{!!__('specials/'.$slug.'.conditions')!!}</div>
            </div>
            <div class="row pt-4 icons-bottom">
              <div class="col-4 d-flex align-items-center justify-content-center flex-column "><img class="pb-2" src="{{ asset('img/img-specials/bestdeal.png') }}" alt="bestdeal"><span class="av-white bold text-center">{{__('general.lb_best_deal')}}</span></div>
              <div class="col-4 d-flex align-items-center justify-content-center flex-column "><img class="pb-2" src="{{ asset('img/img-specials/booknow.png') }}" alt="booknow"><span class="av-white bold text-center">{{__('general.lb_pay_later')}}</span></div>
              <div class="col-4 d-flex align-items-center justify-content-center flex-column "><img class="pb-2" src="{{ asset('img/img-specials/clock.png') }}" alt="clock"><span class="av-white bold text-center">{{__('general.lb_flexible')}}</span></div>
            </div>
          </div>
        </div>
      </div>

<!---->

    </div>
  </div>



  <form action="https://reservations.travelclick.com/bookings.jsp" method="GET" accept-charset="UTF-8" target="_blank" onsubmit="">
  <div class="modal fade modal-webcams checkAvailabityModal" id="checkAvailabity" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <div class="w-100 text-center">
            <h5 class="modal-title av-white  text-uppercase"> {{__('general.lb_grab')}}</h5>
          </div>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <input type="hidden" name="hotelid" class="hotelidB" value="">
        @if($tipo[0]==1)<input type="hidden" name="RatePlanID" class="RatePlanIDB" value="">@endif
        @if($tipo[0]==2)<input type="hidden" name="packageId" id="packageIdB" value="">@endif
        @if($code!='')<input type="hidden" name="identifier" value="{{$code}}">@endif

        <div class="modal-body">
          <div class="w-100 text-center">
            <h6 class="text-uppercase" id="resortoffer"></h6>
            <h6 class="text-uppercase" id="resortname"></h6>
          </div>
          <div class="contenedor-tabs">
            <div class="tab-content">
              <div class="booking-interno-inputs">
                <label>{{ __('general.booking.label.check_in') }}</label>
                <div class="input-group date" data-provide="datepicker" id="modalDeals1">
                  <input type="text" class="form-control dateinB" name="datein" placeholder="{{ __('general.booking.placeholder.arrival_date') }}">
                  <div class="input-group-addon">
                    <span class="icono-calendario"></span>
                  </div>
                </div>
              </div>
              <div class="booking-interno-inputs">
                <label>{{ __('general.booking.label.check_out') }}</label>
                <div class="input-group date" data-provide="datepicker" id="modalDeals2">
                  <input type="text"  name="dateout" class="form-control dateoutB" placeholder="{{ __('general.booking.placeholder.departure_date') }}">
                  <div class="input-group-addon">
                    <span class="icono-calendario"></span>
                  </div>
                </div>
              </div>
              <div class="booking-interno-inputs">
                <div class="combo-box arrow-down">
                  <label class="spAdultsB">{{ __('general.booking.label.adults') }}</label>
                  <select class="form-control adultsB" name="adults">
                    <option value="1">1</option>
                    <option value="2" selected>2</option>
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
              </div>

              <div class="booking-interno-inputs">
                <div class="combo-box arrow-down">
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
              </div>

              <div class="booking-interno-inputs teenBoxB">
                <div class="combo-box arrow-down">
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
              </div>

              <div class="booking-interno-inputs">
                <div class="combo-box arrow-down">
                  <label for="room"><br> {{ __('general.booking.label.rooms') }}</label>
                  <select class="form-control" name="rooms">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>

        @if (App::getLocale() == 'es')<input type="hidden" name="languageid" value="2">@endif
        <input type="hidden" name="subchan" value="royalreservations.com">
        
        <div class="text-center modal-bottom-text to-button" style="">
          <button type="submit" class="my-4 text-uppercase button-modal-book bold" id="btn-booking">{{ __('general.booking.btn.book_now') }}</button>
        </div>
      </div>
    </div>
  </div>
  </form>

  <input type="hidden" name="tag_adult"     id="tag_adultB"     value="{{ __('general.booking.label.adults') }}">
  <input type="hidden" name="tag_adult2"    id="tag_adult2B"    value="{{ __('general.booking.label.adults1') }}">
  <input type="hidden" name="tag_adult3"    id="tag_adult3B"    value="{{ __('general.booking.label.adults2') }}">
  <input type="hidden" name="tag_teen"      id="tag_teenB"      value="{{ __('general.booking.label.teen') }}">
  <input type="hidden" name="tag_children"  id="tag_childrenB"  value="{{ __('general.booking.label.children') }}">
  <input type="hidden" name="tag_children2" id="tag_children2B" value="{{ __('general.booking.label.children1') }}">
</section>





