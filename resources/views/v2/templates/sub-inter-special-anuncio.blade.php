@extends('/interna-mosaic-html')

@section('title', 'St. Maarten, Beach Destinations - Royal Reservations' )
@section('metadescription', 'Paradise and happiness come in the same small package… the beautiful island of St.Maarten. This amazing Caribbean destination will offer its visitors the best of two European cultures, the Dutch side and the French one, in combination with the beautiful Caribbean scenery.')

@push('css')
    <link rel="stylesheet" href="{{ mix('css/_deals_mosaic.css') }}" integrity="{{ Sri::hash('css/_deals_mosaic.css') }}" crossorigin="anonymous">
@endpush

@push('metas')
    <meta name="robots" content="noindex, nofollow">
@endpush

@push('scripts')
    <script src="{{ mix('js/_deals-mosaic.js') }}" integrity="{{ Sri::hash('js/_deals-mosaic.js') }}" crossorigin="anonymous"></script>
@endpush

@section('interna-mosaic')

@if(Agent::isMobile() && !Agent::isTablet())
    <img src="{{ asset('img/resorts/simpson-bay-resort/simpson-bay-resort-b.jpg')}}" width="100%" alt="Caribbean Islands">
@else
    <img src="{{ asset('img/SanMarteen.jpg')}}" width="100%" alt="Caribbean Islands">
@endif

<div class="container">
    <div class="col-md-12">
        <div>
            <h1 class="subtitle-big text-center">ST. MAARTEN</h1>
            <p style="text-align: center">
                Paradise and happiness come in the same small package… the beautiful island of St.Maarten. This amazing Caribbean destination will offer its visitors the best of two European cultures, the Dutch side and the French one, in combination with the beautiful Caribbean scenery.
            </p>
        </div>
    </div>
</div>

<section class="" style="margin: 30px 0 60px 0;">
    <div class="container">
        <div class="row" style="border-bottom: 2px solid #4C748B;border-top: 2px solid #4C748B; padding:20px 0; text-align: center;">
            <div class="col-lg-4" style="font-size: 14px; color: #4C748B;font-weight: 500; margin: 5px 0;"> 
                <img src="{{asset('img/general/phone.png')}}" height="13" alt="Phone"> TOLL FREE<br> <a style="white-space: nowrap;font-size: 20px; color: #4C748B;font-weight: 500;" href="tel:1-800-791-4471"> 1-800-791-4471</a>
            </div>
            <div class="col-lg-4" style="font-size: 14px; color: #4C748B;font-weight: 500; margin: 5px 0;"> 
                <img src="{{asset('img/general/phone.png')}}" height="13" alt="Phone"> ELSEWHERE<br> <a style="white-space: nowrap;font-size: 20px; color: #4C748B;font-weight: 500;" href="tel:1-954-736-5832"> 1-954-736-5832</a> ext 64573
            </div>
            <div class="col-lg-4" style="font-size: 14px; color: #4C748B;font-weight: 500; margin: 5px 0;"> 
                <img src="{{asset('img/general/mail.png')}}" height="20" alt="Mail"> ARTURO SANCHEZ<br> <a style="white-space: nowrap;font-size: 20px; color: #4C748B;font-weight: 500; text-transform: lowercase;" href="mailto:asanchez@royalresorts.com">asanchez@royalresorts.com </a>
            </div>
        </div>
    </div> 
</section>

<div class="container">
    <p class="subtitle-big text-center">OUR CARIBBEAN ISLANDS RESORTS</p>
    <div class="row">
    <div class="col-md-4">
        <div style="margin-bottom: 25px;">
            <h2 style="text-align: center; color: #4C748B;font-weight: 500; margin: 20px 0; min-height: 40px;">SIMPSON BAY BEACH RESORT & MARINA</h1>
            <p style="text-align: center">
                Paradise and happiness come in the same small package… the beautiful.
            </p>
            <img src="{{asset('img/resorts/simpson-bay-resort/simpson-bay-resort-bb.jpg')}}" width="100%" alt="SIMPSON BAY BEACH RESORT & MARINA" title="SIMPSON BAY BEACH RESORT & MARINA">
        </div>
    </div>
    <div class="col-md-4">
        <div style="margin-bottom: 25px;">
            <h2 style="text-align: center; color: #4C748B;font-weight: 500; margin: 20px 0;min-height: 40px;">THE VILLAS AT SIMPSON BAY BEACH RESORT & MARINA</h1>
            <p style="text-align: center">
                St Maarten, A Picture Perfect Paradise.<br><br>
            </p>
            <img src="{{asset('img/resorts/the-villas-at-simpson-bay-resort/the-villas-at-simpson-bay-resort-bb.jpg')}}" width="100%" alt="THE VILLAS AT SIMPSON BAY BEACH RESORT & MARINA" title="THE VILLAS AT SIMPSON BAY BEACH RESORT & MARINA">
        </div>
    </div>
    <div class="col-md-4">
        <div style="margin-bottom: 25px;">
            <h2 style="text-align: center; color: #4C748B;font-weight: 500; margin: 20px 0;min-height: 40px;">{{--THE ROYAL SEA AQUARIUM RESORT--}} CURACAO</h1>
            <p style="text-align: center">
                A dreamland no longer trapped in books.<br><br>
            </p>
            <img src="{{asset('img/resorts/the-royal-sea-aquarium/the-royal-sea-aquarium-bb.jpg')}}" width="100%" alt="CURACAO" title="CURACAO">
        </div>
    </div>
    </div>      
</div>

<div class="container">
    <div class="col-md-12">
        <div>
            <p style="text-align: center; padding: 15px 0; font-size: 24px">
                 Best deal guaranteed!
            </p>
        </div>
    </div>
</div>

<section class="" style="margin: 30px 0 60px 0;">
    <div class="container">
        <div class="row" style="border-bottom: 2px solid #4C748B;border-top: 2px solid #4C748B; padding:20px 0; text-align: center;">
            <div class="col-lg-4" style="font-size: 14px; color: #4C748B;font-weight: 500;margin: 5px 0;"> 
                <img src="{{asset('img/general/phone.png')}}" height="13" alt="Phone"> TOLL FREE<br> <a style="white-space: nowrap;font-size: 20px; color: #4C748B;font-weight: 500;" href="tel:1-800-791-4471"> 1-800-791-4471</a>
            </div>
            <div class="col-lg-4" style="font-size: 14px; color: #4C748B;font-weight: 500;margin: 5px 0;"> 
                <img src="{{asset('img/general/phone.png')}}" height="13" alt="Phone"> ELSEWHERE<br> <a style="white-space: nowrap;font-size: 20px; color: #4C748B;font-weight: 500;" href="tel:1-954-736-5832"> 1-954-736-5832</a> ext 64573
            </div>
            <div class="col-lg-4" style="font-size: 14px; color: #4C748B;font-weight: 500;margin: 5px 0;"> 
                <img src="{{asset('img/general/mail.png')}}" height="20" alt="Mail"> ARTURO SANCHEZ<br> <a style="white-space: nowrap;font-size: 20px; color: #4C748B;font-weight: 500; text-transform: lowercase;" href="mailto:asanchez@royalresorts.com">asanchez@royalresorts.com </a>
            </div>
        </div>
    </div> 
</section>

    
@endsection