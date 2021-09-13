@push('css')
   <link rel="stylesheet" href="{{ mix('css/_deals_subscription.css') }}" integrity="{{ Sri::hash('css/_deals_subscription.css') }}" crossorigin="anonymous">
@endpush

@push('scripts')
    <script>var HOST = '{{url('/')}}';</script>
    <script src="{{ mix('js/_deals_subscription.js') }}" integrity="{{ Sri::hash('js/_deals_subscription.js') }}" crossorigin="anonymous"></script>
@endpush

@push('metas')
    @if($concept->index_follow == 1)
       <meta name="robots" content="index, follow"> 
    @else 
        <meta name="robots" content="noindex, nofollow">
    @endif
@endpush

@extends('/interna')

@section('title', $concept->content->seo_title )
@section('metadescription', $concept->content->seo_metadescription)

@section('interna')
    <div class="sub-inter-subscription">
        @include('parts.scripts', ['section'=>'Offers', 'page'=>$slug])
        <section>
             <img src="{{$concept->content->landing_img}}" class="img-fluid w-100" alt="{{$concept->content->seo_title}}" title="{{$concept->content->seo_metadescription}}">
        </section>

        <div style="padding-top: 20px;display: flex; flex-direction: column;
    align-items: center;" class="{{ __('special-offer/'.$slug.'.version')==1? 'negro':'blanco'}}">
            <div style="background-color:black; display: flex; flex-direction: column;
    align-items: center; padding-top: 30px; padding-bottom: 20px;">
            <div class="align-items-center justify-content-center">
                <h1>{{ __('special-offer/'.$slug.'.h1')}}</h1></p>
            </div>
            
            <div class=" align-items-center justify-content-center"> 
                <img src="{{ __('special-offer/'.$slug.'.counter')}}" width="{{Agent::isMobile()?'100%':''}}" alt="counter">
            </div>

            <div class="align-items-center justify-content-center" style="padding-top: 20px;">
                <h2>{{ __('special-offer/'.$slug.'.h2')}}</h2>
            </div>

            <div class=" align-items-center justify-content-center" style="padding: 30px 10px;"> 
                <form id="supscription" novalidate>
                    <div id="base-inputs">
                    <div style="padding: 8px;">
                        <label style="text-align: left; display: block; color:white" for="bf_name">{{ __('special-offer/'.$slug.'.label_name')}}</label>
                        <input id="bf_name" type="text" name="name">
                        <span class="text-danger msg-error hidden">{{ __('special-offer/'.$slug.'.required_field.name')}}</span>
                    </div>
                    <div  style="padding: 8px;">
                        <label style="text-align: left; display: block; color:white" for="bf_email">{{ __('special-offer/'.$slug.'.label_email')}}</label>
                        <input id="bf_email" type="email" name="email">
                        <span class="text-danger msg-error hidden">{{ __('special-offer/'.$slug.'.required_field.email')}}</span>
                    </div>
                    <div  style="padding: 8px;">

                    @php
                        $countries = __('special-offer/'.$slug.'.countries');
                        $total = is_string($countries) ? 0 : count($countries);
                    @endphp
                    <label style="text-align: left; display: block; color:white" for="bf_country">{{ __('special-offer/'.$slug.'.label_country')}}</label>
                    <select id="bf_country" name="country" required>
                        <option value=""></option>
                        @for($i=0; $i<$total;$i++)
                            <option value="{{$countries[$i]['code']}}"> {{$countries[$i]['pais']}}</option>
                        @endfor
                    </select>
                    <span class="text-danger msg-error hidden">{{ __('special-offer/'.$slug.'.required_field.country')}}</span>
                    </div>
                    <div style="max-width: 500px">
                        <label style="padding: 5px; color:white;     text-align: justify;" class="tx-small">
                            <input type="checkbox" id="check" name="optin" style="width: 30px;" required="">{{ __('special-offer/'.$slug.'.optin')}}
                        </label>
                        <p style="text-align: center;" class="text-danger msg-error hidden">{{ __('special-offer/'.$slug.'.required_field.optin')}}</p>
                    </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center" style="padding: 10px 10px;"> 
                        <div id="msg-sups" class="alert" class="hide" role="alert"></div>
                    </div>
                    <div style="text-align: center;">
                        <input type="submit" value="{{ __('special-offer/'.$slug.'.label_button')}}" class="boton">
                    </div>
                    <div style="text-align: center;">
                        <p style="text-align: center;padding-top: 10px;">{!! __('special-offer/'.$slug.'.privacy_policy')!!}</p>
                    </div>
                    <div style="text-align: center;">
                        <p style="text-align: center;padding-top: 10px;">{!! __('special-offer/'.$slug.'.phone')!!}</p>
                    </div>
                    <input type="hidden" name="lang" value="{{App::getLocale()}}">
                    <input type="hidden" name="campaing" value="{{ __('special-offer/'.$slug.'.campaing')}}">
                </form>
            </div>
        </div>
    </div>
@endsection