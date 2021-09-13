{{--
    Caja de concept con nombre del rateplan
--}}
<div class="card card-resort h-100 id-{{$resort->concept_id}}">
    <div class="card-header">
        <img class="w-100 lazyload" data-src="{{ $resort->img_concept }}" alt="{{ $resort->content->name }}" title="{{ $resort->content->name }}">
    </div>
    <div class="card-body">
        <div class="row no-gutters">
            <div class="col-12">
                <h3 class="card-title">
                    {{$resort->resort->name}}
                </h3>
            </div>
            <div class="col-7">
                <span class="card-subtitle">
                    @php
                        $destination = $resort->resort->destination->{'name_'.\App::getLocale()};
                        $country = $resort->resort->destination->{'country_'. \App::getLocale()};
                    @endphp
                    {{ trans_choice('general.destination country', strlen($country) , ['destination' => $destination, 'country' => $country]) }}
                </span>
            </div>
            <div class="col-5 text-right">
                <img class="lazyload" height="16px" src="{{asset('/img/icon-galeria/stars-'.str_replace('.','-',$resort->resort->stars).'.svg')}}" alt="Stars Icon" title="Stars Icon">
                {{-- <div class="estrellas">
                    @for($w=0;$w<$resort->resort->stars;$w++)
                            @if($resort->resort->stars - ($w+1) >=0)
                                <img class="lazyload" data-src="{{asset('img/general/estrella.png')}}" width="16" alt="Stars Icon" title="Stars Icon">
                            @else
                                <img class="lazyload" data-src="{{asset('img/general/estrella2.png')}}" width="16" alt="Stars Icon" title="Stars Icon">  
                            @endif
                    @endfor
                </div> --}}
            </div>
        </div>
    </div>

    <div class="card-body">
        <div class="card-text">
            <a class="meal-plan">
                {{ $resort->concept->content->title }}
            </a>
            <ul class="inclusion">
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
        </div>
    </div>
    <div class="room-offer mb-3">
        <p class="" style="font-size: 12px;text-align: center;color: #575555;font-weight: 500;">From <span style="text-decoration: line-through;font-size: 15px;color: #575555;font-weight: 500;">

            @if($resort->concept->id==56)
                                           {{__('resorts/'.$resort->resort->identifier_rr.'.mosaic_price2')}}
            @else
                                           {{__('resorts/'.$resort->resort->identifier_rr.'.mosaic_price')}}
            @endif
            

            USD</span> <!--<span style="font-size: 12px;font-weight: 300;">room/night</span>--><br>
            <span class="offer-label">{{ $resort->content->label }}</span>
        </p>

        <p class="travel-window" style="padding-left: 15px;">  
            <label>
                <b>{{__('general.travel between')}}:</b>
                {{-- {{ ucfirst(__date('dates.SHORT_YEAR', $resort->concept->travel_window_start)) }}
                {{ __('general.and') }}
                {{ ucfirst(__date('dates.SHORT_YEAR', $resort->concept->travel_window_end)) }} --}}

                {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_start)) }}
                {{ __('general.and') }}
                {{ ucfirst(__date('dates.SHORT_YEAR', $resort->travel_end)) }}
            </label>
        </p>

        <div class="row d-flex">
            <div class="btn-view-more col-6 align-self-center">
                <a  href="#" data-toggle="modal" data-target="#mosaic-{{$resort->id}}"  class="btn btn-primary text-uppercase  av-btn-rates">
                    {{__('general.view_more')}}
                </a>
            </div>
            <div class="btn-booknow col-6  align-self-center">
                <a href="#" data-toggle="modal" data-target="#form-resort-{{$resort->id}}"
                   class="btn btn-primary text-uppercase  av-btn-rates">
                    {{__('general.book')}}
                </a>
            </div>
        </div>
    </div>
</div>