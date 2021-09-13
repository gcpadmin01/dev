@extends('/interna')

<?php  $img = asset((Agent::isMobile() && !Agent::isTablet())? __("agent.banner_login_mobile"):__('agent.banner_login')); ?>

@section('title',__('agent.title_login'))

@push('opengraph')
    <meta property="og:description" content="{{__('agent.title_login')}}" />
    <meta property="og:title" content="{{__('agent.title_login')}}" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="{{$img}}" />
    <meta property="og:image:height" content="1920" />
    <meta property="og:image:width" content="400" />
@endpush

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@component('/parts/scripts', [
        'section'=>'Agent', 
        'page'=>$page
    ])
@endcomponent


@push('css')
    <link rel="stylesheet" href="{{ mix('css/_agents.css') }}" integrity="{{ Sri::hash('css/_agents.css') }}" crossorigin="anonymous">
@endpush

<?php
    $token = isset($token) ? $token:null;
    $show = $errors->has('loginError') || $token != null || $errors->has('email') || session('status') ? 'hidden':'';
?>

@section('interna')
    <div id="show-main">
        <img src="{{$img}}" class="img-fluid w-100" alt="Travel Agents Royal Resorts">
    </div>
    <div class="row without-margin">
        <div id="info-agent" class="col-md-6">
            <div  class="col-md-10 offset-md-1">
                <h1>{{__("agent.h1_login")}}</h1>
                {!!__("agent.content")!!}
                <p>
                    <a href="{{route('agent.help')}}">
                        <img class="pr-1" src="{{asset('img/chat-icon-a.svg')}}" alt="Chat Royal Reservations" width="21"> 
                        {{__('agent.link-info')}}
                    </a>
                </p>
            </div>
        </div>
        <div id="login-data" class="col-md-6">
            <div class="col-xl-6 offset-xl-3 col-md-8 offset-md-2">
                <div id="login" class="panel panel-default">
                    <div class="panel-body">
                        <div id="verify">
                            <h4 class="title text-center">{{__("agent.login")}}</h4>
                            {{old('success')}}
                            @if(Session::has('success')) 
                                <div id="message-form">
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        {{__('agent.messages.registered')}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            
                            <form id="login-form" method="POST" action="{{ route('login.agent') }}">
                                {{ csrf_field() }}
                                <div class="form-group">    
                                    <label for="iata">TRUE CODE/IATA/ARC/TIDS</label>
                                    <input id="iata" type="text" class="form-control" name="iata" value="{{old("iata")}}" placeholder="TRUE CODE/IATA/ARC/TIDS" required>
                                </div>
                                <div class="form-group">
                                    <label for="password-confirm">{{__("agent.fields.register.psw")}}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password" placeholder="{{__("agent.fields.register.psw")}}" required>
                                    @if ($errors->has('loginError'))
                                        <p class="help-block text-center mt-2">
                                            <strong>{{__("agent.login_fail")}}</strong>
                                        </p>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <div class="links-agent text-center">
                                        <button type="submit" class="btn btn-agent">{{__("agent.btn_login")}}</button>
                                        <a id="sign-up" href="{{route('agent.signup')}}">{{__("agent.title_signup")}}</a>
                                        <a class="recover-password" href="{{route('agent.reset')}}">{{__("agent.title_forgot")}}</a>
                                        <a class="recover-password" href="{{route('agent.help')}}">FAQ's</a>
                                    </div>
                                    <div class="text-center">
                                        <a id="sign-up" href="{{route('agent.signup')}}">
                                            <img id="logo-signup" src="{{__('agent.info')}}" alt="Info agentes">
                                        </a>
                                    </div>
                                    <br>
                                    <div id="message-register"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript">
        var HOST = '{{url('/')}}';
        var validator =  <?php echo json_encode(__('agent.validator'))?>;
        var messages  =  <?php echo json_encode(__('agent.messages'))?>;
    </script>
    <script src="{{mix('/js/agent-login.js')}}" integrity="{{ Sri::hash('/js/agent-login.js') }}" crossorigin="anonymous"></script>
@endpush