@extends('/interna')

@component('/parts/scripts', [
        'section'=>'GMS', 
        'page'=>$page
    ]) 
@endcomponent

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
                        <h3 class="h3">{{__('gms.You need a name and email to continue with the registration')}}</h3>
                        <form action="{{route('gms.sign-up')}}" method="POST">
                            {{ csrf_field() }}
                            <input type="hidden" name="sso" value="plt-{{$platform}}">
                            <input type="hidden" name="language" value="{{ app()->getLocale() }}">
                            
                            <input type="text" class="field" name="name" placeholder="{{__('gms.Name')}}">

                            <input type="text" class="field" name="email" placeholder="{{__('gms.Email')}}">
                            <button type="submit" class="btn b-azul" >{{__('gms.continue')}}</button>
                        </form> 
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
                            <img class="w-100" src="{{ $concept->content->img }}" alt="{{$concept->name}}" title="{{$concept->name}}">
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="clear-3"></div>
        </section>
        
    </div>
</div>
@endsection