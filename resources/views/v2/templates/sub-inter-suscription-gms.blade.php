@php
    $conceptName = $concept->id == 54 ? 'buen_fin':'black_friday';
    $title = __('years-deals.title_'.$conceptName);
    $countUrl = __('years-deals.count_'.$conceptName);
@endphp

@push('css')
   <link rel="stylesheet" href="{{ mix('css/_gms_suscription_offers.css') }}" integrity="{{ Sri::hash('css/_gms_suscription_offers.css') }}" crossorigin="anonymous">
@endpush

@push('scripts')
    <script>var HOST = '{{url('/')}}';</script>
    <script src="{{mix('/js/_deals-detail.js')}}" integrity="{{ Sri::hash('/js/_deals-detail.js') }}" crossorigin="anonymous"></script>
    {{-- <script id="iframe-demo" src="https://www.youtube.com/iframe_api"></script> --}}
    <script src="{{ mix('js/gms-offer-subscription.js') }}" integrity="{{ Sri::hash('js/gms-offer-subscription.js') }}" crossorigin="anonymous"></script>
@endpush


@push('metas')
    @if($concept->index_follow == 1)
       <meta name="robots" content="index, follow"> 
    @else 
        <meta name="robots" content="noindex, nofollow">
    @endif
@endpush

@extends('/interna')

@section('title', $concept->content->seo_title )
@section('metadescription', $concept->content->seo_metadescription)

@section('interna')
    @include('parts.scripts', ['section'=>'Offers', 'page'=>$slug])

    <section>
        <div class="banner-main">
            @if($concept->id == 54)
                @if(Agent::isMobile())
                    <img src="{{asset('img/deals/awarness/buenfin-awarns-mobile.jpg')}}" class="img-fluid w-100">    
                @else
                    <img src="{{asset('img/deals/awarness/buenfin-awarns.jpg')}}" class="img-fluid w-100">
                @endif
            @else
                {{-- <img src="{{$concept->content->landing_img}}" class="img-fluid w-100" alt="{{$concept->content->seo_title}}" title="{{$concept->content->seo_metadescription}}"> --}}
                @php
                    $mobile = Agent::isMobile() ? "-mobile":"";
                @endphp

                @if(App::getLocale() == 'en')
                    <img src="{{asset('img/deals/awarness/awarns-black-eng'.$mobile.'.jpg')}}" class="img-fluid w-100">
                @else
                    <img src="{{asset('img/deals/awarness/awarns-black-esp'.$mobile.'.jpg')}}" class="img-fluid w-100">
                @endif
            @endif
            <div class="col-lg-12 time-control">
                <img src="{{$countUrl}}" border="0" alt="countdownmail.com"/>
            </div>
        </div>
    </section>

    <section class="gms-section gms-bg-form">
        <div class="container">
            <div class="gms">
                <div class="gms-main row">
                    <div class="col-lg-6">
                        @include('gms.signUpLanding')
                    </div>
                    
                    <div class="col-lg-6 p-40">
                        <div class="">
                            <h3 class="title-gms">{!! $title !!}</h3>

                            <span class="icon-mark-blue title-item"><span>{!!__('years-deals.offer.details1')!!}</span></span>
                            <span class="icon-mark-blue title-item"><span>{!!__('years-deals.offer.details2')!!}</span></span>

                            <p class="info-subscribe">{!!__('years-deals.offer.subtitle')!!}</p>
                            <span class="icon-check-blue">{!!__('years-deals.offer.details3')!!}</span>
                            <span class="icon-check-blue">{!!__('years-deals.offer.details4')!!}</span>

                            <div class="grp-btn">
                                <button class="btn btn-subscribe" data-toggle="modal" data-target="#modal-subscribe">{{__('years-deals.form.Log in')}}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="gms-section {{$concept->id == 53 ? 'gms-bg-black':'gms-bg-red'}}">
        <div class="container gms-video">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="title-gms-video text-center">{{__('years-deals.title_video')}}</h3>
                    <div id="video-resp" class="video-resp">
                        <div id="gms-video" class="container-iframe">                            
                            <iframe width="753" height="252" src="{{__('years-deals.video_offer')}}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            {{-- <iframe id="ytplayer" type="text/html" width="753" height="252" src="https://www.youtube.com/embed/49Xm2im1wXA?autoplay=1&controls=1&loop=1&mute=0&playlist=49Xm2im1wXA" frameborder="0" allowfullscreen> --}}
                            {{-- <iframe id="ytplayer" type="text/html"  width="753" height="252" src="https://www.youtube.com/embed/49Xm2im1wXA?autoplay=1&controls=1&loop=1&mute=1&playlist=49Xm2im1wXA" allow="autoplay" frameborder="0" allowfullscreen></iframe> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade modal-subscribe" id="modal-subscribe" tabindex="-1" role="dialog" aria-labelledby="modal-gms" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content gms">
                    <div class="modal-body register-email row no-gutters gms-main">
                        <div class="background-left">
                        <div class="col-md-12">
                            <form action="{{route('gms.sign-up')}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="sso" value="facebook">
                                <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                                    <button class="btn btn-facebook" type="submit"
                                            data-layer_toggle="click"
                                            data-layer_category="GMS"
                                            data-layer_action="log in"
                                            data-layer_label="landing login facebook">
                                        {{__('gms.Login with Facebook')}}
                                    </button>
                            </form>
                        </div>
                        <div class="col-md-12">
                            <form action="{{route('gms.sign-up')}}" method="POST">
                                {{ csrf_field() }}
                                <input type="hidden" name="sso" value="google">
                                <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                                    <button class="btn btn-google" type="submit"
                                            data-layer_toggle="click"
                                            data-layer_category="GMS"
                                            data-layer_action="log in"
                                            data-layer_label="landing login google">
                                        {{__('gms.Login with Google')}}
                                    </button>
                            </form>
                        </div>
                            <label class="terms">
                                {{__('gms.Copyright 2018 Royal Reservations')}}
                                <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.terms_of_use')) }}" >
                                    {{__('gms.terms-conditions')}}
                                </a>
                            </label>
                        </div>
                    </div>
        </div>
    </div>
</div>
@endsection
