<section class="container-fluid max-container slick-specials pt-4 mb-5">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2 class="h1">{{ __('specials.subtitle2') }}</h2>
        </div>
        <div class="col-12 ">
            <div id="home-slick-specials"  class="slider-3-2-1">
                @foreach(__('special-offer/setup/main.deals') as $i => $deal)
                    @php 
                        $slug=__('special-offer/setup/main.deals.'.$i.'.slug'); 
                        $file=__('special-offer/setup/main.deals.'.$i.'.file');
                    @endphp
                    <div class="item" id="ProHome{{$i+1}}">
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
                                <h3 class="card-subtitle icon-offer">
                                    {{--<img src="{{asset('/img/icon-galeria/icon-offer.png')}}" alt="">--}}
                                    {{__('special-offer/setup/main.deals.'.$i.'.discount')}}
                                </h3>
                                <p class="card-text text-justify mb-2">
                                    {{__('special-offer/setup/main.deals.'.$i.'.description')}}
                                </p>
                            </div>
                            <a class="view-more" href="{{lang_url("/".__('routes.deals').'/'.__('routes.hotels').'/'.$slug)}}">
                                {{ __('general.view_more')}}
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>