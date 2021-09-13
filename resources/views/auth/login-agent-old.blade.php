@extends('/interna')

@push('css')
    <link rel="stylesheet" href="{{ mix('css/_agents.css') }}" integrity="{{ Sri::hash('css/_agents.css') }}" crossorigin="anonymous">
@endpush

<?php
    $token = isset($token) ? $token:null;
    $show = $errors->has('loginError') || $token != null || $errors->has('email') || session('status') ? 'hidden':'';
?>

@section('title',__('agent.title_main'))

@section('interna')
    <div id="show-main">
        <?php  $img = asset((Agent::isMobile() && !Agent::isTablet())? __("agent.banner_login_mobile"):__('agent.banner_login')); ?>

        <img src="{{$img}}" class="img-fluid w-100" alt="Travel Agents Royal Resorts">
    </div>
    <div class="row without-margin">
        <div id="info-agent" class="col-md-6">
            <div  class="col-md-10 offset-md-1">
                <h1>{{__("agent.title_welcome")}}</h1>
                {!!__("agent.content")!!}
            </div>
        </div>
        <div id="login-data" class="col-md-6">
            <div class="col-md-6 offset-md-3">
                <div id="login" class="panel panel-default">
                    <div class="panel-body">
                        <div id="verify" class="{{$show}}">
                            <h4 class="title-code">{!!__('agent.title_code')!!}</h4>
                            <form id="form-verify">
                                <div class="form-group">    
                                    <div>
                                        <input id="iata" type="text" class="form-control" name="iata" value="{{old("iata")}}" placeholder="TRUE CODE/IATA/ARC/TIDS" required>
                                    </div>
                                </div>
                            </form>
                            <div class="form-group">
                                <div class="text-center">
                                    <button id="verify-button" type="button" class="btn btn-agent">{{__("agent.btn_next")}}</button>
                                </div>
                                <br>
                                <div id="message-register"></div>
                            </div>
                            {{-- <div class="text-center">
                                <img src="{{__('agent.info')}}" alt="">
                            </div> --}}
                        </div>
                        <div id="register" class="hidden">
                            <h4 class="title"><img class="pr-1 back-form" src="/img/flecha.svg" alt="Arrow Icon" title="Arrow Icon" width="20"> {{__("agent.record_agent")}}</h4>
                            <div id="message-form"></div>
                            <form id="form-register">
                                <div class="form-group">
                                    <label class="iata">Iata:<span></span></label>
                                </div>
                                <div class="row">
                                    <div class="col col-9">
                                        <div class="form-group">    
                                            <div>
                                                <select id="code" class="select2 form-control" style="width: 100%" name="code" required>
                                                    <option value="IATA">IATA</option>
                                                    <option value="ARC">ARC</option>
                                                    <option value="TIDS">TIDS</option>
                                                    <option value="TRUE-CODE" selected>TRUE CODE</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">    
                                    <div>
                                        <select id="guest_title" class="select2 form-control" style="width: 100%" name="guest_title" required>
                                            <option value="Mr." selected>Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss">Miss</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <input id="guest_firstname" type="text" class="form-control" name="guest_firstname" placeholder="{{__("agent.fields.register.guest_firstname")}}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">                                    
                                    <div>
                                        <input id="guest_lastname" type="text" class="form-control" name="guest_lastname" placeholder="{{__("agent.fields.register.guest_lastname")}}" required autofocus>
                                    </div>
                                </div>
        
                                 <div class="form-group">
                                    <div>
                                        <input id="agency_name" type="text" class="form-control" name="agency_name" placeholder="{{__("agent.fields.register.agency_name")}}" required  autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <input id="address1" type="text" class="form-control" name="address1" placeholder="{{__("agent.fields.register.address1")}}" required autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <input id="address2" type="text" class="form-control" name="address2" placeholder="{{__("agent.fields.register.address2")}}" required autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <input id="city" type="text" class="form-control" name="city" placeholder="{{__("agent.fields.register.city")}}" required autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <input id="state" type="text" class="form-control" name="state" placeholder="{{__("agent.fields.register.state")}}" required autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <input id="postal_code" type="text" class="form-control" name="postal_code" placeholder="{{__("agent.fields.register.postal_code")}}" required  autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <input id="country" type="text" class="form-control" name="country" placeholder="{{__("agent.fields.register.country")}}" required="" autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <input id="phone_number" type="text" class="form-control" name="phone_number" placeholder="{{__("agent.fields.register.phone_number")}}" required   autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <input id="fax_number" type="text" class="form-control" name="fax_number" placeholder="{{__("agent.fields.register.fax_number")}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <input id="email" type="email" class="form-control" name="email" placeholder="{{__("agent.fields.register.email")}}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <input id="psw" type="password" class="form-control" name="psw" placeholder="{{__("agent.fields.register.psw")}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <input id="psw-confirm" type="password" class="form-control" name="psw-confirm" placeholder="{{__("agent.fields.register.psw-confirm")}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <button type="button" id="register-button" class="btn btn-agent">{{__("agent.btn_save")}}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div id="login-form" class="{{$errors->has('loginError') ? '':'hidden'}}">
                            <form class="form-horizontal" method="POST" action="{{ route('login.agent') }}">
                                {{ csrf_field() }}
                                <h4 class="title"><img class="pr-1 back-form" src="/img/flecha.svg" alt="Arrow Icon" title="Arrow Icon" width="20"> {{__("agent.login")}}</h4>
                                <div class="form-group">
                                    <div>
                                        <input id="password" type="password" class="form-control" name="password" placeholder="{{__("agent.fields.register.psw")}}" required>
                                        @if ($errors->has('loginError'))
                                            <span class="help-block">
                                                <strong>{{__("agent.login_fail")}}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                {{-- <div class="form-group">
                                    <div class="col-md-5 offset-md-7">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="form-group">
                                    <div class="text-center">
                                        <button type="submit" id="login-button" class="btn btn-agent">{{__("agent.btn_login")}}</button>
                                    </div>
                                    <div class="text-center">
                                        <a class="recover-password" href="javascript:void(0)">{{__("agent.title_forgot")}}</a>
                                    </div>
                                </div>
                                <input type="hidden" name="iata" value="{{old("iata")}}">
                            </form>
                        </div>
                        <div id="reset" class="{{$token != null  || $errors->has('email') || session('status') ? '':'hidden'}}">
                            <h4 class="title"><img class="pr-1 back-form" src="/img/flecha.svg" alt="Arrow Icon" title="Arrow Icon" width="20"> {{__('agent.title_reset')}}</h4>
                            @if($token == null)
                            <form class="form-horizontal" method="POST" action="{{ route('agent.reset.mail') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="control-label">{{__('agent.fields.reset.email')}}</label>
                                    <div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{__("agent.fields.register.email")}}" required>
                                        @if (session('status'))
                                            <div class="alert alert-success">
                                                {{ session('status') }}
                                            </div>
                                        @endif
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">{{__("agent.btn_send_reset")}}</button>
                                </div>
                            </form>
                            @else
                                <form class="form-horizontal" method="POST" action="{{ route('agent.resetform.mail') }}">
                                    {{ csrf_field() }}
        
                                    <input type="hidden" name="token" value="{{ $token }}">
        
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label for="email" class="control-label">{{__('agent.fields.reset.email')}}</label>
                                        <div>
                                            <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="{{__("agent.fields.register.email")}}" required autofocus>
        
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label for="password" class="control-label">{{__('agent.fields.reset.psw')}}</label>
                                        <div>
                                            <input id="password" type="password" class="form-control" name="password" placeholder="{{__("agent.fields.register.psw")}}" required>
        
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                        <label for="password-confirm" class="control-label">{{__('agent.fields.reset.psw-confirm')}}</label>
                                        <div>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="{{__("agent.fields.register.psw-confirm")}}" required>
        
                                            @if ($errors->has('password_confirmation'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">Reset Password</button>
                                        </div>
                                    </div>
                                </form>
                            @endif
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
    <script src="{{mix('/js/agent-login.js')}}" integrity="{{ Sri::hash('js/agent-login.js') }}" crossorigin="anonymous"></script>
@endpush