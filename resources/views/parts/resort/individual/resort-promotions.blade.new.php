@php
    $offers=count(__('special-offer/setup/setup.'.$resort));
    if ($offers>3){
        $offers=3;
    }

@endphp

<section class="w-100 mb-5  special-resort container-fluid" id="je-specials-section">
    <div class="slick-specials mb-4 row">
        <div class="col-12 text-center mb-4">
            <h2 class="e9 uppercase">{{ __('resorts/'.$resort.'.resort_offers_title')}}</h2>
        </div>

        <div class="col-12 mb-4">
            <div class=" slider-3-2-1 owl-carousel owl-theme resortpromotion{{$total_offers<=3?$total_offers:''}}">
                @for($i=0;$i<$total_offers;$i++)
                    @php $file=__('special-offer/setup/setup.'.$resort.'.'.$i); @endphp
                    @php $total_points=count( __('special-offer/'.$file.'.main_points')); @endphp
                    <div class="item">
                        <div class="card card-specials">
                            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.__('specials/'.$file.'.destino').'/'.__('specials/'.$file.'.slug')) }}">
                                <img class="w-100" src="{{ __('specials/'.$file.'.thumbnail') }}"
                                     title="{{ __('specials/'.$file.'.title') }}"
                                     alt="{{ __('specials/'.$file.'.title') }}">
                            </a>
                            <div class="card-body">
                                <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.__('specials/'.$file.'.destino').'/'.__('specials/'.$file.'.slug')) }}">
                                    <h2 class="card-title">
                                        {{ __('specials/'.$file.'.title') }}
                                    </h2>
                                </a>
                                {{--<h3 class="card-subtitle icon-offer">
                                    --}}{{--<img src="{{asset('/img/icon-galeria/icon-offer.png')}}" alt="">--}}{{--
                                    {{__('special-offer/setup/main.deals.'.$i.'.discount')}}
                                </h3>--}}
                                <ul class="card-text mb-2">
                                    @for($j=0;$j<$total_points;$j++)
                                        <li>{{__('specials/'.$file.'.main_points.'.$j)}}</li>
                                    @endfor
                                </ul>
                            </div>
                            <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.__('specials/'.$file.'.destino').'/'.__('specials/'.$file.'.slug')) }}"
                               class="view-more">
                                {{ __('general.view_more') }}
                            </a>

                            {{--@if(__('specials/'.$file.'.label_color')=='1')
                                <span class="je-green je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$file.'.label_percent_off') }}</b></span></span>
                            @endif
                            @if(__('specials/'.$file.'.label_color')=='2')
                                <span class="je-orange je-special-mark"><span class="deal-big"><b>{{ __('specials/'.$file.'.label_percent_off') }}</b></span></span>
                            @endif
                            @if(__('specials/'.$file.'.label_color')=='3')
                                <span class="je-red je-special-mark"><div class="content-deals"> <span class="deal-small">{{ __('general.discounts.last_minute') }}</span> <div class="deal-medium bold">{{ __('general.discounts.deals') }}</div></div> </span>
                            @endif--}}

                            {{--<img class="w-100" src="{{ __('specials/'.$file.'.thumbnail') }}"
                                 title="{{ __('specials/'.$file.'.title') }}"
                                 alt="{{ __('specials/'.$file.'.title') }}">

                            <div class="card-body">
                                <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.__('specials/'.$file.'.destino').'/'.__('specials/'.$file.'.slug')) }}">
                                    <h2 class="card-title">
                                        {{ __('specials/'.$file.'.title') }}
                                    </h2>
                                </a>
                                <ul class="card-text mb-2">
                                    @for($j=0;$j<$total_points;$j++)
                                        <li>{{__('specials/'.$file.'.main_points.'.$j)}}</li>
                                    @endfor
                                </ul>
                                <a href="{{ lang_url('/'.__('routes.deals').'/'.__('routes.hotels').'/'.__('specials/'.$file.'.destino').'/'.__('specials/'.$file.'.slug')) }}"
                                   class="view-more">
                                    {{ __('general.view_more') }}
                                </a>
                            </div>--}}
                        </div>
                    </div>
                @endfor
            </div> <!-- fin class="owl-carousel owl-theme resortpromotion-->

        </div><!-- row text-white -->
    </div><!--container -->
    <div class="col-12 text-right">
        <div class="container">
            <div class="col-12">
                <a href="{{ __('resorts/'.$resort.'.resort_offers_url')}}">{{ __('general.view_all') }}</a>
            </div>
        </div>
    </div>
</section>

{{--
<div class="view-more-special-movil mb-3 fs-view">
    <br/>
    <a class="av-subrayado-yellow medium" href="{{ lang_url("/".__('routes.deals')) }}">{{ __('general.view_all') }}</a>
</div>

--}}

