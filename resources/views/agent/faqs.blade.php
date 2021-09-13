@extends('/interna')

@section('title',__('agent.title_help'))

@component('/parts/scripts', [
        'section'=>'GMS', 
        'page'=>$page
    ]) 
@endcomponent

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@php
    $faqs = __('agent.faqs');
    $frstitle = $faqs[0]['question'];
@endphp

@push('css')
    <link rel="stylesheet" href="{{mix('css/agent-help.css')}}" integrity="{{ Sri::hash('css/agent-help.css') }}" crossorigin="anonymous">
@endpush

@section('interna')
    <div id="show-main">
        <?php  $img = asset((Agent::isMobile() && !Agent::isTablet())? __("agent.banner_login_mobile"):__('agent.banner_login')); ?>

        <img src="{{$img}}" class="img-fluid w-100" alt="Travel Agents Royal Resorts">
    </div>
    <section class="container">
        <div id="faqs" class="row">
            <div id="questions" class="col-md-12">
                <h1 class="text-center">Travel agent portal frequently asked questions</h1>
                @foreach($faqs as $key => $row)
                    <button class="acordion-open btn btn-block btn-default" data-row="{{$key}}">{{$row['question']}}</button>
                    <div class="acordion"  data-row="{{$key}}">
                        <p>{!!$row['answer']!!}</p>    
                    </div>
                @endforeach
            </div>
            <div class="col-md-2 offset-md-10">
                @if(Auth::guard("agent")->check())
                    <a class="btn btn-primary float-right back" href="{{route('site.deals')}}">{{__('agent.btn-deals')}}</a>
                @else          
                    <a class="btn btn-primary float-right back" href="{{route('login.show')}}">{{__('agent.btn-back')}}</a>
                @endif
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{mix('js/agent-faqs.js')}}" integrity="{{ Sri::hash('js/agent-faqs.js') }}" crossorigin="anonymous"></script>
@endpush