@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/gms-log-in.css') }}" integrity="{{ Sri::hash('css/gms-log-in.css') }}" crossorigin="anonymous">
@endpush

@component('/parts/scripts', [
        'section'=>'GMS', 
        'page'=>$page
    ]) 
@endcomponent

@section('title',__('gms.title.log-in'))

@push('opengraph')
    <meta property="og:description" content="{{__('gms.title.log-in')}}" />
    <meta property="og:title" content="{{__('gms.title.log-in')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{asset('img/gms/header-gms.jpg')}}" />
    <meta property="og:image:height" content="1920" />
    <meta property="og:image:width" content="400" />
@endpush

@section('interna')
<div class="gms">
    
    <div class="header-gms">
    	<img src="/img/gms/header-gms.jpg" alt="My royal" title="My royal">
    </div>
    
    <div class="gms-main">
        <section class="container">
            @include('gms.alerts',['customMessage' => $validated])



            <div class="row">
                <div class="col-md-6">
                    <div class="background-left">
                        <img loading="lazy" class="mb-1" src="/img/gms/icons/crown.svg" alt="My Royal">
                        <h1 class="h2">{{__('gms.Log into your My Royal account')}}</h1>
                        <h3 class="h3">{{__('gms.Welcome! Log-in to enjoy your private offers for the best Caribbean beach destinations.')}}</h3>
                        <div class="row">
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
                        </div>
                        <div class="clear"></div>
                        <h3 class="by-email">{{__('gms.Or by email')}}</h3>
                        <form action="{{route('gms.sign-up')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="sso" value="email">
                            <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                            {{--<label for="user_gms" style="text-align: left; display: block;" >{{__('gms.Email')}}</label>--}}
                            <input id="user_gms" type="text" class="field" name="user" placeholder="{{__('gms.Email')}}" required>
                            {{--<label for="password_gms" style="text-align: left; display: block;">{{__('gms.Password')}}</label>--}}
                            <input id="password_gms" type="password" class="field mb-3" name="password"  placeholder="{{__('gms.Password')}}" required>
                            <button type="submit" class="btn b-azul mb-2"
                                    data-layer_toggle="click"
                                    data-layer_category="GMS"
                                    data-layer_action="log in"
                                    data-layer_label="landing login email">
                                {{__('gms.Log in')}}
                            </button>
                        </form>
                        <label class="label-forgot-password mb-2">
                            {{__('gms.Forgot your password?')}}  <a href="{{route('gms.reset-your-pasword')}}" class="fyp">{{__('gms.click here')}}!</a>
                        </label>

                        <div class="log-in-member text-center">
                            <p class="text-center">
                                {!! __('gms.If you are a Royal Resorts Member') !!}
                                <a href="https://app.royalresorts.com/members_login.aspx">{!! __('gms.click here') !!}</a> {{__('gms.to go to the Member´s Section')}}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="card-inf">
                         <p class="title">
                            {!! __('gms.log_in_title') !!}
                        </p>
                        {{--<p>
                            {{__('gms.pop_subtitle')}}
                        </p>
                        <ul>
                            {!! __('gms.pop_list') !!}
                        </ul>

                        <p>
                            {{__('gms.pop_subtitle2')}}
                        </p>--}}

                        <div class="">
                            {{-- <h3 class="title-gms">{!! $title !!}</h3> --}}
                            <span class="icon-mark-blue title-item"><span>{!!__('years-deals.offer.details1')!!}</span></span>
                            <span class="icon-mark-blue title-item"><span>{!!__('years-deals.offer.details2')!!}</span></span>

                            <p class="info-subscribe">{!!__('years-deals.offer.subtitle')!!}</p>
                            <span class="icon-check-blue">{!!__('years-deals.offer.details3')!!}</span>
                            <span class="icon-check-blue">{!!__('years-deals.offer.details4')!!}</span>

                        </div>

                        <div class="d-flex">
                            <a href="{{ route('gms.register') }}">
                                Subscribe here
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="clear"></div>
            <div class="row">
                <div class="col-md-12">
                    <h3>{{__('gms.Discover discounts')}}</h3>
                    <hr class="yellow" width="70%" align="left">
                </div>

                @foreach($concepts as $concept)
                    <div class="col-12 col-md-4">
                        <a href="{{ route('concept.detail',['concepto' => $concept->getUrl(\App::getLocale())]) }}">
                            <img class="w-100" alt="{{$concept->name}}" src="{{ $concept->content->img }}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="clear-3"></div>
        </section>
        
    </div>
</div>
@endsection