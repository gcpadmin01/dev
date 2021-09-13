@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@push('scripts')
    <script src="{{mix('/js/gms-account-management.js')}}" integrity="{{ Sri::hash('js/gms-account-management.js') }}" crossorigin="anonymous"></script>
@endpush
@push('styles')
    
    <style type="text/css">
        label.error{
            text-align: left;
            display: block;
            color: red;
        }
    </style>

@endpush

@component('/parts/scripts', [
        'section'=>'GMS', 
        'page'=>$page
    ]) 
@endcomponent

@section('title','My Royal')

@section('interna')
<div class="gms">
    <div class="header-gms">
        <img src="/img/gms/header-gms.jpg" alt="My royal" title="My royal">
    </div>
    <div class="gms-main">
       <div class="container">
            @include('gms.alerts')
            <div class="row">
                <div class="col-md-3 menu-derecho">
                    @include("gms.menu")
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-8">
                    <div class="background-left">
                         <h2 class="h2">{{__('gms.Manejo de cuenta')}}</h2>
                        <div class="clear"></div>
                        <form id="form-update-password" action="{{route('gms.change-password')}}" method="POST" >
                            {{ csrf_field() }}
                            <h2 class="subtitule">{{__('gms.Change my password')}}</h2>
                            <input class="field ajuste-field" type="password" name="oldPassword" required placeholder="{{__('gms.Actual password')}}">
                            <input class="field ajuste-field" type="password" name="password" required placeholder="{{__('gms.New password')}}">
                            <input class="field ajuste-field" type="password" name="passwordConfirm" required placeholder="{{__('gms.New password confirmation')}}">
                            <button class="btn b-azul"
                                    data-layer_toggle="click"
                                    data-layer_category="GMS"
                                    data-layer_action="click"
                                    data-layer_label="dashboard reset password">
                                {{__('gms.Save')}}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="clear-3"></div>
       </div>
    </div>
</div>
@endsection