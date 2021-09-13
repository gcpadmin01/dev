@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@component('/parts/scripts', [
        'section'=>'GMS', 
        'page'=>$page
    ]) 
@endcomponent

@section('title',__('gms.title.reset-password'))

@push('scripts')
    <script src="{{mix('/js/gms-register.js')}}" integrity="{{ Sri::hash('/js/gms-register.js') }}" crossorigin="anonymous"></script>
@endpush

@section('interna')
<div class="gms">
    
    <div class="header-gms">
    	<img src="/img/gms/header-gms.jpg" alt="My royal" title="My royal">
    </div>
    <div class="gms-main">

        @if($step == 1)
            <section class="container">
                @include('gms.alerts')

                <div class="row">
                    <div class="col-md-6">
                        <div class="background-left">
                            <h1 class="h2">{{__('gms.Resert your password')}}</h1>
                            <h3 class="h3">{{__('gms.Enter your email address below, you will receive an email with a code that you can then use to reset your password')}}</h3>
                            <div class="row">
                                <div class="col-md-12">
    							   <form action="{{route('gms.reset-your-pasword')}}" method="POST">
    							        {{ csrf_field() }}
                                        <input type="hidden" name="step" value="1">
                                        <label style="text-align: left; display: block;" for="gms_email">Your Email</label>
    							        <input id="gms_email" type="text" name="email" class="field" >
    							        <button type="submit" class="btn b-azul">{{__('gms.Send Code')}}</button>
    							   </form>
    							</div>
    						</div>
                            <small>
                                {{ __('gms.Are you having trouble with subscribing or loggin in?') }}<br>
                                {!! __('gms.Please send an email to ask4help@royalreservations.com') !!}
                            </small>
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
    			<div class="clear-3"></div>
    		</section>
        @endif

        @if($step == 2)
            <section class="container">
                @include('gms.alerts')

                <div class="row">
                    <div class="col-md-6">
                        <div class="background-left">
                            <h2 class="h2">{{__('gms.Resert your password')}}</h2>
                            <div class="row">
                                <div class="col-md-12">
                                   <form id="form-reset-password" action="{{route('gms.reset-your-pasword')}}" method="POST">
                                        {{ csrf_field() }}
                                        
                                        <input type="hidden" name="step" value="2">
                                        <input type="hidden" name="code" value="{{ $code }}">
                                        <input type="hidden" name="email" value="{{ $email }}">

                                        <input type="password" id="password" name="password" class="field" placeholder="{{ __('gms.new password') }}">
                                        <input type="password" name="password_again" class="field" placeholder="{{ __('gms.new password (again)') }}">
                                        <button type="submit" class="btn b-azul">{{__('gms.resert password')}}</button>
                                   </form>
                                </div>
                            </div>
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
                <div class="clear-3"></div>
            </section>
        @endif

	</div>
</div>
<style>
    .gms label.error{
        display: block;
        margin-bottom: 10px;
        color: red;
    }
</style>
@endsection