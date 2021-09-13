@extends('/interna')

@section('title',__('agent.title_signup'))

 <?php  $img = asset((Agent::isMobile() && !Agent::isTablet())? __("agent.banner_login_mobile"):__('agent.banner_login')); ?>

@push('opengraph')
    <meta property="og:description" content="{{__('agent.title_signup')}}" />
    <meta property="og:title" content="{{__('agent.title_signup')}}" />
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
                <h4>{{__("agent.title_welcome")}}</h4>
                {!!__("agent.content")!!}
            </div>
        </div>
        <div id="login-data" class="col-md-6">
            <div class="col-lg-8 offset-lg-3 col-md-8 offset-md-2">
                <div id="login" class="panel panel-default">
                    <div class="panel-body">
                        <div id="register">
                            <h1 class="title">
                                <a href="{{route('login.show')}}">
                                    <img class="pr-1" src="/img/flecha.svg" alt="Arrow Icon" width="20">
                                </a>
                                {{__("agent.h1_register")}}
                            </h1>
                            @if($errors->any())
                                <div id="message-form">
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        {{$errors->first()}}
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                </div>
                            @endif
                            <form id="form-register" method="POST" action="{{ route('agent.register') }}">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <label class="iata">Iata:<span></span></label>
                                </div>
                                <div class="form-group">    
                                    <label for="iata">TRUE CODE/IATA/ARC/TIDS</label>
                                    <input id="iata" type="text" class="form-control" name="iata" value="{{old("iata")}}" placeholder="TRUE CODE/IATA/ARC/TIDS" required autofocus>
                                </div>
                                <div class="form-group">    
                                    <label for="code">TYPE</label>
                                    <div>
                                        <select id="code" class="select2 form-control" style="width: 100%" name="code" value="{{old("code")}}" required>
                                            <option value="IATA">IATA</option>
                                            <option value="ARC">ARC</option>
                                            <option value="TIDS">TIDS</option>
                                            <option value="TRUE-CODE" {{old("code") ? '':'selected'}}>TRUE CODE</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">  
                                    <label for="guest_title">Title</label>  
                                    <div>
                                        <select id="guest_title" class="select2 form-control" style="width: 100%" name="guest_title" value="{{old("guest_title")}}" required>
                                            <option value="Mr." selected>Mr.</option>
                                            <option value="Mrs.">Mrs.</option>
                                            <option value="Miss.">Miss.</option>
                                            <option value="Ms.">Ms.</option>
                                            <option value="Dr.">Dr.</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div>
                                        <label for="guest_firstname">{{__("agent.fields.register.guest_firstname")}}</label>
                                        <input id="guest_firstname" type="text" class="form-control" name="guest_firstname" value="{{old("guest_firstname")}}"  placeholder="{{__("agent.fields.register.guest_firstname")}}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">                                    
                                    <div>
                                        <label for="guest_lastname">{{__("agent.fields.register.guest_lastname")}}</label>
                                        <input id="guest_lastname" type="text" class="form-control" name="guest_lastname" value="{{old("guest_lastname")}}" placeholder="{{__("agent.fields.register.guest_lastname")}}" required autofocus>
                                    </div>
                                </div>
        
                                 <div class="form-group">
                                    <div>
                                        <label for="agency_name">{{__("agent.fields.register.agency_name")}}</label>
                                        <input id="agency_name" type="text" class="form-control" name="agency_name" value="{{old("agency_name")}}" placeholder="{{__("agent.fields.register.agency_name")}}" required  autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <label for="address1">{{__("agent.fields.register.address1")}}</label>
                                        <input id="address1" type="text" class="form-control" name="address1" value="{{old("address1")}}" placeholder="{{__("agent.fields.register.address1")}}" required autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <div>
                                        <label for="address2">{{__("agent.fields.register.address2")}}</label>
                                        <input id="address2" type="text" class="form-control" name="address2" value="{{old("address2")}}" placeholder="{{__("agent.fields.register.address2")}}" required autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="country">Country</label>
                                    <div>
                                        <input type="text" name="country_msg" id="country" style="width:100%;" class="form-control" required>
                                        <input type="hidden" name="country"  required >
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="state">State</label>
                                    <div>
                                        <input type="text" id="state" name="state_msg" style="width:100%;" class="form-control" disabled required>
                                        <input type="hidden"  name="state" required>
                                        <span></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city">{{__("agent.fields.register.city")}}</label>
                                    <div>
                                        <input id="city" type="text" class="form-control" name="city" value="{{old("city")}}" placeholder="{{__("agent.fields.register.city")}}" required autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="postal_code">{{__("agent.fields.register.postal_code")}}</label>
                                    <div>
                                        <input id="postal_code" type="text" class="form-control" name="postal_code" value="{{old("postal_code")}}" placeholder="{{__("agent.fields.register.postal_code")}}" required  autofocus>
                                    </div>
                                </div>
                                 <div class="form-group">
                                    <label for="phone_number">{{__("agent.fields.register.phone_number")}}</label>
                                    <div>
                                        <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{old("phone_number")}}" placeholder="{{__("agent.fields.register.phone_number")}}" required   autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fax_number">{{__("agent.fields.register.fax_number")}}</label>
                                    <div>
                                        <input id="fax_number" type="text" class="form-control" name="fax_number" value="{{old("fax_number")}}" placeholder="{{__("agent.fields.register.fax_number")}}" autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">{{__("agent.fields.register.email")}}</label>
                                    <div>
                                        <input id="email" type="email" class="form-control" name="email" value="{{old("email")}}" placeholder="{{__("agent.fields.register.email")}}" required autofocus>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="psw">{{__("agent.fields.register.psw")}}</label>
                                    <div>
                                        <input id="psw" type="password" class="form-control" name="psw"  placeholder="{{__("agent.fields.register.psw")}}" autocomplete="new-password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="psw-confirm">{{__("agent.fields.register.psw-confirm")}}</label>
                                    <div>
                                        <input id="psw-confirm" type="password" class="form-control" name="psw-confirm" placeholder="{{__("agent.fields.register.psw-confirm")}}" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-agent">{{__("agent.btn_save")}}</button>
                                    </div>
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
        var validator =  @json(__('agent.validator'));
        var messages  =  @json(__('agent.messages'));
        var countries =  @include('countries');
    </script>
    <script src="{{mix('/js/agent-signup.js')}}" integrity="{{ Sri::hash('/js/agent-signup.js') }}" crossorigin="anonymous"></script>
@endpush