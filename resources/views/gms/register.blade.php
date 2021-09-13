@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@push('scripts')
    <script type="text/javascript">
        var countries = @include('countries');
    </script>
    <script src="{{mix('/js/gms-register.js')}}" integrity="{{ Sri::hash('/js/gms-register.js') }}" crossorigin="anonymous"></script>
@endpush
@push('styles')
    
    <style type="text/css">
        label.error{
            text-align: left;
            display: block;
            color: red;
        }
        .select2{
            box-sizing: border-box;
        }
        .select2.select2-container .select2-selection--single{
            border-top: 0;
            border-left: 0;
            border-right: 0;
            text-align: left;
        }
    </style>

@endpush

@component('/parts/scripts', [
        'section'=>'GMS', 
        'page'=>$page
    ]) 
@endcomponent

@section('title',__('gms.title.register'))

@push('opengraph')
    <meta property="og:description" content="{{__('gms.title.register')}}" />
    <meta property="og:title" content="{{__('gms.title.register')}}" />
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
            @include('gms.alerts')
            <div class="row">
                <div class="col-md-6">
                    <div class="background-left">
                        <h1 class="h2">{{__('gms.register')}}</h1>
                        <h3 class="h3">{{__('gms.Welcome back to Royal reservations')}}</h3>
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{route('gms.sign-up')}}" method="POST">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="sso" value="facebook">
                                    <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                                        <button class="btn btn-facebook" type="submit"
                                                data-layer_toggle="click"
                                                data-layer_category="GMS"
                                                data-layer_action="register"
                                                data-layer_label="landing register facebook">
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
                                                data-layer_action="register"
                                                data-layer_label="landing register google">
                                            {{__('gms.Login with Google')}}
                                        </button>
                                </form>
                            </div>
                        </div>
                        <div class="clear"></div>
                        <h3 class="h3">{{__('gms.Or by email')}}</h3>
                        <form id="form-register" action="{{route('gms.register')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="sso" value="email">
                            <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                            
                            <label style="text-align: left; display: block;" for="gms_name">{{__('gms.Name')}}</label>
                            <input id="gms_name" type="text" class="field" name="name" required>

                            <label style="text-align: left; display: block;" for="gms_email">{{__('gms.Email')}}</label>
                            <input id="gms_email" type="email" class="field" name="email" required>
                            
                            <label style="text-align: left; display: block;" for="gms_password">{{__('gms.Password')}}</label>
                            <input id="gms_password" type="password" class="field" name="password">

                            <label style="text-align: left; display: block;" >{{__('gms.Country')}}</label>
                            <select style="text-align: left;"  id="gms-countries" name="country" class="field" required>
                            </select>
                            
                            <label style="text-align: justify;margin-bottom: 1.2rem;font-size: 11px;margin-top: 1.2rem;">
                                <input type="checkbox" name="consent" required> 
                                {{__('gms.consent')}}
                            </label>
                            <br>
                            <button type="submit" class="btn b-azul"
                                    data-layer_toggle="click"
                                    data-layer_category="GMS"
                                    data-layer_action="register"
                                    data-layer_label="landing register email">
                                {{__('gms.Sign up')}}
                            </button>
                        </form> 
                        <a href="{{route('gms.reset-your-pasword')}}" class="fyp">{{__('gms.Forgot your password?')}}</a>
                        
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="card-inf">
                        <h2>{{__('gms.Register with us and enjoy')}}</h2>
                        <p>{!! __('gms.Register P1') !!}</p>
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
                            <img class="w-100" src="{{ $concept->content->img }}" alt="{{$concept->name}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="clear-3"></div>
        </section>
        
    </div>
</div>
@endsection