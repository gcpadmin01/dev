@php
    $resorts = count(__('webcams.resorts'));
    $webcams = __('webcams.resorts');
@endphp



<section class="container">
    <div class="images-webcams pb-4">
        <div class="img-webcams row">
            <div class="col-md-12 mt-2 mb-2">
                <h2>{{__('webcams.webcams.mexico')}}</h2>
            </div>

            @foreach(array_slice($webcams,0,6) as $key => $webcam)
                <div class="col-md-4 mb-4 main-webcam">
                    <div class="cnt-img {{$webcam['blur'] == 'true' ? 'blur-content':''}}">
                        <div class="img-wc">
                            <div class="w-100 d-flex align-items-end lazyload" data-src="{{$webcam['slug']}}"></div>
                        </div>
                        <div class="img-wc">
                            <p>{{$webcam['short_name']}}</p>
                            <p>{{$webcam['origin']}}</p>

                            @if(count($webcam['webcam_url']) > 1 )
                                @foreach($webcam['webcam_url'] as $j => $cam)
                                    <button class="btn datalayer-webcam" data-text_action="{{$webcam["names"][$j]}}" data-row="{{$key}}" data-img="{{$cam}}" data-toggle="modal" data-target="#modalWebcams">{{$webcam["button_names"][$j]}}</button>
                                @endforeach
                            @else
                                <button class="btn datalayer-webcam" data-text_action="{{$webcam['name']}}" data-row="{{$key}}"  data-img="{{$webcam['webcam_url'][0]}}" data-toggle="modal" data-target="#modalWebcams">{{__('webcams.button_view')}}</button>
                            @endif

                        </div>
                    </div>
                    @if($webcam["blur"] == 'true')
                        <div class="col-md-12 continue-webcam text-center"><button class="btn btn-default">{{__('webcams.commin_soon')}}</button></div>
                    @endif
                </div>
            @endforeach
        </div>

        <div class="img-webcams row">
            <div class="col-md-12 mt-2 mb-2">
                <h2>{{__('webcams.webcams.caribe')}}</h2>
            </div>

            @foreach(array_slice($webcams,6,3) as $key => $webcam)
                <div class="col-md-4 mb-4 main-webcam">
                    <div class="cnt-img {{$webcam['blur'] == 'true' ? 'blur-content':''}}">
                        <div class="img-wc">
                            <div class="w-100 d-flex align-items-end lazyload" data-src="{{$webcam['slug']}}"></div>
                        </div>
                        <div class="img-wc">
                            <p>{{$webcam['short_name']}}</p>
                            <p>{{$webcam['origin']}}</p>

                            @if(count($webcam['webcam_url']) > 2 )
                                <div class="dropdown">
                                    <button class="btn dropdown-toggle btn-ext-font" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        {{__('webcams.button_chose')}}
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        @foreach($webcam["webcam_url"] as $j => $cam)
                                            <a class="dropdown-item datalayer-webcam" href="#" data-text_action="{{$webcam["names"][$j]}}" data-row="{{$key}}" data-img="{{$cam}}" data-toggle="modal" data-target="#modalWebcams">{{$webcam["button_names"][$j]}}</a>
                                        @endforeach
                                    </div>
                                </div>
                            @else
                                @if(count($webcam['webcam_url']) > 1 )
                                    @foreach($webcam['webcam_url'] as $j => $cam)
                                        <button class="btn datalayer-webcam" data-text_action="{{$webcam["names"][$j]}}" data-row="{{$key}}" data-img="{{$cam}}" data-toggle="modal" data-target="#modalWebcams">{{$webcam["button_names"][$j]}}</button>
                                    @endforeach
                                @else
                                    <button class="btn datalayer-webcam" data-text_action="{{$webcam['name']}}" data-row="{{$key}}"  data-img="{{$webcam['webcam_url'][0]}}" data-toggle="modal" data-target="#modalWebcams">{{__('webcams.button_view')}}</button>
                                @endif
                            @endif

                        </div>
                    </div>
                    @if($webcam["blur"] == 'true')
                        <div class="col-md-12 continue-webcam text-center"><button class="btn btn-default">{{__('webcams.commin_soon')}}</button></div>
                    @endif
                </div>
            @endforeach
        </div>


        <div class="modal fade modal-webcams" id="modalWebcams" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content" style="">
                    <div class="modal-header" style="">
                        <div class="w-100 text-center">
                            <h5 class="modal-title av-white  text-uppercase"></h5>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" style="">
                        <div id="img-main"></div>
                        <p class="text-right">{{__('webcams.text_refresh_image')}}</p>
                    </div>

                </div>
            </div>
        </div>

        <svg id="svg-filter" style="display:none">
            <filter id="svg-blur">
                <feGaussianBlur in="SourceGraphic" stdDeviation="2"></feGaussianBlur>
            </filter>
        </svg>
    </div>
</section>
