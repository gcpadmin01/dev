@php
    $resortData = __('resorts/'.$resort->resort->identifier_rr);
    $resortFactsheet = __('resorts/'.$resort->resort->identifier_rr.'/fact-sheet');
    $resortGalery = __('resorts/'.$resort->resort->identifier_rr.'/gallery');
    $awards = __('awards');
@endphp
<div class="modal fade modal-mosaic" id="mosaic-{{$resort->id}}" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                <div class="row mb-3">
                    <div class="col-12 col-lg-7 resort">
                        <h3 class="h3">{{ $resort->resort->name }} </h3>
                        <label class="address">{{ $resortData['address'] }}</label><br>
                        {{ $resortData['short-description'] }}
                    </div>
                    <div class="col-12 col-lg-5 resort-galery">
                        <div class="owl-carousel owl-theme owl-deals ">
                            @foreach($resortGalery['gallery'] as $key => $image)
                                @php
                                    if( $image['category'] != 'areas' && $image['category'] != 'room' ){
                                        continue;
                                    }
                                @endphp
                                <img class="owl-lazy col-12"  data-src="/img/resorts/{{$resort->resort->identifier_rr}}/big-gallery/{{$image['img']}}" alt="{{$image['alt']}}" title="{{$image['alt']}}">
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="row mb-3">
                    
                    <div class="col-12 col-lg-4">
                        <div class="row">
                            <div class="col-12 col-md-5 col-lg-12 check-in">
                                <label class="tt-e1">Información del <span>hotel</span></label>
                                <p>Check-in {{$resortFactsheet['check-in'] }}</p>
                                <p>Check-out {{ $resortFactsheet['check-out'] }}</p>
                            </div>
                            <div class="col-12 col-md-7 col-lg-12 awards">
                                <label class="tt-e1">Tripadvisor <span>premios</span></label>
                                <div class="row">
                                    @foreach($resortFactsheet['premios'] as $premio)
                                        <div class="col-6 col-lg-4">
                                            <img class="full-width" src="{{ $awards[$premio]['img'] }}" alt = '{{ $awards[$premio]['img'] }} '>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-lg-4">
                        <label class="tt-e1">You can <span>enjoy</span></label>

                        <ul class=" amenities e8">
                            @foreach($resortData['resort_amenities'] as $amenity)
                                <li class="amenities-icon amenity-{{$amenity['icon']}}">
                                    {{$amenity['title']}}
                                </li>
                            @endforeach
                        </ul>

                    </div>
                    <div class="col-12 col-lg-4">
                        <label class="tt-e1">This promotion <span>include</span></label>
                        <ul class="inclusions">
                            @foreach($resort->content->inclusion as $inclusion)
                                <li>{!! $inclusion !!}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="bt-w">
                    <label>Booking window : {{ ucfirst(__date('dates.SHORT', $resort->travel_start)) }} {{__('general.to') }} {{ ucfirst(__date('dates.SHORT', $resort->travel_end)) }}</label>
                    <label>Travel window : {{ ucfirst(__date('dates.SHORT_YEAR', $resort->concept->booking_window_start)) }} {{__('general.and') }} {{ ucfirst(__date('dates.SHORT_YEAR', $resort->concept->booking_window_end)) }}</label>
                </div>


            </div>
            <div>
                <button class="btn btn-offer-condition collapsed" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                    View offer conditions
                </button>
                <div class="collapse offer-condition" id="collapseExample">
                  <div class="card card-body">
                    {!! $resort->content->terms !!}                   
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>