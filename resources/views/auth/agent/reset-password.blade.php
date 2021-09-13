@extends('/interna')

@section('title',__('agent.title_reset_password'))

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
        <?php  $img = asset((Agent::isMobile() && !Agent::isTablet())? __("agent.banner_login_mobile"):__('agent.banner_login')); ?>

        <img src="{{$img}}" class="img-fluid w-100" alt="Travel Agents Royal Resorts">
    </div>
    <div class="row without-margin">
        <div id="info-agent" class="col-md-6">
            <div  class="col-md-10 offset-md-1">
                <h4>{{__("agent.title_welcome")}}</h4>
                {!!__("agent.content")!!}
            </div>
        </div>
        <div id="login-data" class="col-md-6">
            <div class="col-md-8 offset-md-2">
                <div id="login" class="panel panel-default">
                    <div class="panel-body">
                        <div id="reset">
                            <h1 class="title">
                                <a href="{{route('login.show')}}">
                                    <img class="pr-1 back-form" src="/img/flecha.svg" alt="Arrow Icon" width="20">
                                </a> 
                                {{__('agent.h1_reset_password')}}
                            </h1>
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
									        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="{{__("agent.fields.register.email")}}" required autofocus>
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
									    <div class="col-md-12 text-center">
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