@php
    $deals=count(__('special-offer/setup/main.deals'));
@endphp
<section class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h3 class="h3 mb-5">{{ __('specials.subtitle2') }}</h3>
        </div>
        <div class="col-12 slick-specials">
            <div class="slider-3-2-1">
                @for($i=0;$i<$deals;$i++)
                    @php
                        $slug=__('special-offer/setup/main.deals.'.$i.'.slug');
                        $file=__('special-offer/setup/main.deals.'.$i.'.file');
                    @endphp
                    <div class="item" id="ProSpecials{{$i+1}}">
                        <div class="card card-specials">
                            <a href="{{lang_url("/".__('routes.deals').'/'.__('routes.hotels').'/'.$slug)}}">
                                <img class="w-100" src="{{ asset('img/deals/'.$slug.'.'.$file.'?v='.time())}}"
                                     alt="{{ __('special-offer/setup/main.deals.'.$i.'.name') }}"
                                     title="{{ __('special-offer/setup/main.deals.'.$i.'.name') }}">
                            </a>
                            <div class="card-body">
                                <a href="{{lang_url("/".__('routes.deals').'/'.__('routes.hotels').'/'.$slug)}}">
                                    <h2 class="card-title">{{ __('special-offer/setup/main.deals.'.$i.'.name') }}</h2>
                                </a>
                                <h3 class="card-subtitle icon-offer">{{__('special-offer/setup/main.deals.'.$i.'.discount')}}</h3>
                                <p class="card-text text-justify mb-2">{{__('special-offer/setup/main.deals.'.$i.'.description')}}</p>
                            </div>
                            <a class="view-more"
                               href="{{lang_url("/".__('routes.deals').'/'.__('routes.hotels').'/'.$slug)}}">
                                {{ __('general.view_more')}}
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
</section>

<!-- -->

