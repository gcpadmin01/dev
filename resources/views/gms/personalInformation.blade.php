@extends('/interna')

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@component('/parts/scripts', [
        'section'=>'GMS', 
        'page'=>$page
    ]) 
@endcomponent

@push('styles')
    <link rel="stylesheet" href="{{ mix('css/gms-personal-information.css') }}" integrity="{{ Sri::hash('css/gms-personal-information.css') }}" crossorigin="anonymous">
@endpush

@push('scripts')
    <script type="text/javascript">
        var countries = @include('countries');
    </script>
    <script src="{{mix('/js/gms-personal-information.js')}}" integrity="{{ Sri::hash('/js/gms-personal-information.js') }}" crossorigin="anonymous"></script>
@endpush

@section('interna')

    @php
        if(count($account->memberInfo->addresses) <= 0 ){
            $address = new  \App\GMS\Models\Address([]);
        }else{
            $address = $account->memberInfo->addresses[0];
        }
    @endphp
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
                        <h2 class="h2">{{__('gms.Personal information')}}</h2>
                        
                        <div class="clear"></div>
                        <form action="{{route('gms.personal-information')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="memberInfo[addresses][0][addressType]" value="HOME">

                            <div class="row text-form">
                                <div class="col-md-6">
                                    <label>{{__('gms.Name')}} </label>
                                    <input class="field" type="text"  name="memberInfo[name][firstName]" value="{{$account->memberInfo->name->firstName}}" required>
                                </div>
                                <div class="col-md-6">
                                    <label >{{__('gms.Last name')}}</label>
                                    <input class="field" type="text"  name="memberInfo[name][lastName]" value="{{ $account->memberInfo->name->lastName}}" required>
                                </div>
                            </div>
                            <div class="text-form">
                                <label >{{__('gms.Date of birth')}}</label>
                                <input class="field bootstrapdp" type="text" name="memberInfo[birthDate]" value="{{$account->memberInfo->birthDate}}">
                            </div>
                            <div class="row text-form">
                                <div class="col-md-6 form-group">
                                    <label >{{__('gms.Country')}}</label>

                                    <div>
                                        <select id="gms-countries" name="memberInfo[addresses][0][country][code]" class="field" value = "{{$address->country->code}}" >
                                        </select>
                                    </div>

                                    {{-- <input class="field" type="text" name="memberInfo[addresses][0][country][code]" value="{{$address->country->code}}"> --}}
                                </div>
                                <div class="col-md-6 form-group">
                                    <label >{{__('gms.State or province')}}</label>
                                    <div>
                                        <select id="gms-state" class="field " type="text" name="memberInfo[addresses][0][stateProvince][code]" value="{{$address->stateProvince->code}}">
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="text-form">
                                <label >{{__('gms.Address')}}</label>
                                <input class="field" type="text"  name="memberInfo[addresses][0][addressLine][0]" value="{{implode($address->addressLine)}}" required>
                            </div>
                            <div class="row text-form">
                                <div class="col-md-6">
                                    <label >{{__('gms.Postal Code')}}</label>
                                    <input class="field" type="text" name="memberInfo[addresses][0][postalCode]" value="{{ $address->postalCode }}">
                                </div>

                                <div class="col-md-6">
                                    <label >{{__('gms.Phone Number')}}</label>
                                    <input type="hidden" name="memberInfo[phones][0][phoneType]" value="HOME">
                                    <input class="field" data-mask="###-###-####" type="text"  name="memberInfo[phones][0][phoneNumber]" maxlength="14" placeholder="###-###-######" value="{{ $account->memberInfo->phones->first()->phoneNumber }}">
                                </div>
                            </div>
                            <div class="clear"></div>
                            <div>
                                <button type="submit" class="btn b-azul"
                                        data-layer_toggle="click"
                                        data-layer_category="GMS"
                                        data-layer_action="click"
                                        data-layer_label="dashboard save information">
                                    {{__('gms.Save')}}
                                </button>
                            </div>
                       </form>
                   </div>
                </div>
            </div>
            <div class="clear-3"></div>
        </div>
    </div>
@endsection