{{--
    Caja View More con tab1 Oferta y tab2 Resort
--}}

@php
/*$resortData = __('resorts/'.$resort->resort->identifier_rr);
    $resortFactsheet = __('resorts/'.$resort->resort->identifier_rr.'/fact-sheet');
    $resortGalery = __('resorts/'.$resort->resort->identifier_rr.'/gallery');
    $awards = __('awards');
*/
    $destination = $resort->resort->destination['name_'.\App::getLocale()];
    $country = $resort->resort->destination['country_'. \App::getLocale()];
                    

@endphp

                        
<div class="modal fade modal-mosaic" id="mosaic-{{$resort->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">

                <div class="row">

                    <div class="col-12 col-lg-4">

                        @if(Agent::isMobile() && !Agent::isTablet())
                            <img src="{{asset('img/resorts/'.$resort->resort->identifier_rr.'/'.$resort->resort->identifier_rr.'-mosaic.jpg')}}" width="100%">
                        @else
                            <img src="{{asset('img/resorts/'.$resort->resort->identifier_rr.'/'.$resort->resort->identifier_rr.'-a.jpg')}}" width="100%">
                        @endif
                        
                    </div>
                    <div class="col-12 col-lg-8 resort plateral" style="padding: 15px">
                        <div id="offerTab-{{$resort->id}}" style="padding: 15px;">

                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="h3">{{ $resort->resort->name }}              
                                        @for($w=0;$w<$resort->resort->stars;$w++)
                                                @if($resort->resort->stars - ($w+1) >=0)
                                                <img src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="14">
                                                @else
                                                    <img src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="14">  
                                                @endif
                                        @endfor                
                                    </h3>
                                    <p class="address">{{ trans_choice('general.destination country', strlen($country) , ['destination' => $destination, 'country' => $country]) }}</p>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div>
                                        <p class="" style="line-height: 0.5rem; padding-bottom: 0; font-size: 12px;color: #575555;font-weight: 500;">From <span style="text-decoration: line-through;font-size: 15px;color: #575555;font-weight: 500;">

                                        @if($resort->concept->id==56)
                                           {{__('resorts/'.$resort->resort->identifier_rr.'.mosaic_price2')}}
                                        @else
                                           {{__('resorts/'.$resort->resort->identifier_rr.'.mosaic_price')}}
                                        @endif

                                             

                                        USD</span> * <!--<span style="font-size: 12px;font-weight: 300;">room/night</span>--><br>
                                        </p>
                                        {!! $resort->content->extra1 !!}
                                        <!--<span class="texto-big">{{ $resort->content->extra1 }}</span> 
                                        <span class="texto-small">usd</span>-->
                                    </div>
                                    <div><span style="font-size: 0.9rem; font-weight: 500;color:#567e86;">
                                        @if($resort->concept->id==56)
                                            5 - 7 nights stay 
                                        @else
                                            4-night stay for two
                                        @endif
                                        
                                        


                                    </div>
                                    <div class="p0500"><span style="font-size: 1.1rem; font-weight: 600;color:#567e86;padding:5px 0px;">ALL-INCLUSIVE PLAN</div>
                                    <div class="font-type-modal">
                                        <b>{{ __('general.book from') }}: </b> 
                                         {{ ucfirst(__date('dates.SHORT', $resort->concept->booking_window_start)) }}
                                    </div>

                                    <div class="font-type-modal"><b>{{__('general.travel between')}}:</b> 
                                        {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_start)) }}
                                        {{ __('general.and') }}
                                        {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_end)) }}
                                    * some dates restrictions apply</div>
                                </div>
                                
                                <div class="col-lg-6">
                                    <p class="font-type-modal">
                                        This promotion includes:
                                        <ul>
                                            @php
                                                $count = 0;
                                            @endphp
                                            @foreach($resort->content->inclusion as $inclusion)
                                                @php
                                                    if ($count++ >= 3) {
                                                        continue;
                                                    }
                                                @endphp
                                                <li>{!! $inclusion !!}</li>
                                            @endforeach
                                        </ul>
                                    </p>
                                </div>
                            </div>
                            <hr class="plateral" style="border:2px solid #adc4ce">
                            <div class="row">
                                <div class="col-lg-12 plateral">
                                    <p class="font-type-modal">
                                        {!!__('resorts/'.$resort->resort->identifier_rr.'.mosaic_terms')!!}
                                        <a class="btnViewMore" role="button">View More</a>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div id="resortTab-{{$resort->id}}" style="padding: 15px;display: none;" class="plateral resortTab">
                            <div class="row">
                                <div class="col-lg-12">
                                    <h3 class="h3">{{ $resort->resort->name }} 
                                                        
                                        @for($w=0;$w<$resort->resort->stars;$w++)
                                                @if($resort->resort->stars - ($w+1) >=0)
                                                <img src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="14">
                                                @else
                                                    <img src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="14">  
                                                @endif
                                        @endfor                
                                    </h3>

                                    <p class="address">{{ trans_choice('general.destination country', strlen($country) , ['destination' => $destination, 'country' => $country]) }}</p>
                                    
                                    <p>{{__('resorts/'.$resort->resort->identifier_rr.'.resort_description')}}</p>
                                </div>
                            </div>
                            <div class="row resort">
                                    <div class="col-lg-4">
                                    <span class="colum-title">JUNIOR SUITE</span>
                                    {!!__('resorts/'.$resort->resort->identifier_rr.'.ul_rooms')!!}

                                    </div>
                                    <div class="col-lg-4">
                                    <span class="colum-title">AMENITIES & SERVICES</span>
                                    {!!__('resorts/'.$resort->resort->identifier_rr.'.ul_amenities')!!}
                                        
                                    </div>
                                    <div class="col-lg-4">
                                    <span class="colum-title">RESORT POLICIES</span>
                                    {!!__('resorts/'.$resort->resort->identifier_rr.'.ul_policies')!!}   
                                    </div>
                                
                            </div>
                        </div>

                        <div class="row d-flex">
                            <div class="btn-view-more col-6 align-self-center">
                                <a role="button" class="btn btn-primary text-uppercase  av-btn-rates resortButton" data-resorts="{{$resort->id}}">
                                    View resort
                                </a>
                            </div>
                            <div class="btn-booknow col-6  align-self-center">
                                <a role="button" data-toggle="modal" data-target="#form-resort-"
                                   class="btn btn-primary text-uppercase  av-btn-rates bookNow" data-resorts="{{$resort->id}}">
                                    {{__('general.book')}}
                                </a>
                            </div>
                        </div>


                        <div class="d-flex justify-content-center" style="margin-top: 20px;margin-left:-15px">
                            <span style="color:#555; font-size: 0.9rem;">or call us at</span>&nbsp;&nbsp;<a style="white-space: nowrap;font-size: 0.9rem;" href="tel:1-888-387-4729"> 1-888-387-4729 USA Toll Free</a>
                        </div>

                    </div>
                </div>
            

            </div><!--modal-body-->
        </div><!--modal-content-->
    </div>
</div>