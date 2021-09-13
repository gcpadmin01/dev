@extends('/interna-mosaic-html')

@section('title', $concept->content->seo_title )
@section('metadescription', $concept->content->seo_metadescription)

@push('css')
    <link rel="stylesheet" href="{{ mix('css/_deals_mosaic.css') }}"  crossorigin="anonymous">
@endpush

@push('scripts')
    <script src="{{ mix('js/_deals-mosaic.js') }}"  crossorigin="anonymous"></script>
@endpush

@push('metas')
    @if($concept->index_follow == 1)
       <meta name="robots" content="index, follow"> 
    @else 
        <meta name="robots" content="noindex, nofollow">
    @endif
@endpush

@section('interna-mosaic')
    @php
        if (count($bloques) > 0) {
            $firstBloq = $bloques->shift();
            $firstBloqUniqueResorts = $firstBloq->unique('resort_id');
        }else{
            $firstBloq = [];
            $firstBloqUniqueResorts = [];
        }
        $mobile='0';
        if(Agent::isMobile()){
            $mobile='1';
        }

    @endphp
    <div class="ofer-mosaic" style="background-color: #0c2d63">
        <div class="main">
            @if($concept->estado == 'valid')
                <section class="container offer-desc" style="margin-bottom: 20px;">
                    <div class="row d-flex justify-content-end">
                        <a id="bajar" href="#">
                            <img src="{{asset('img/icono-flecha-footer-down.png')}}" alt="Down">
                        </a>
                    </div>                     
                    <div class="row">
                        <div class="col-md-12">
                            <div  style="margin-left: 15%;width: 70%;margin-right: 15%;">
                                <h1 class="titulo1" style="text-align: center;">{!!$concept->content->box_title !!}</h1>
                                <p style="text-align: center; color: #4C748B;font-weight: 400; margin-bottom: 35px;">{!!$concept->content->box_subtitle !!}</p>
                                {!! $concept->content->box_description !!}
                            </div>
                        </div>
                    </div>                   
                </section>

                <section class="container offer-desc" style="margin-bottom: 20px;">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="subtitle-big text-center" style="margin-left: 15%;width: 70%;margin-right: 15%;">
                                {!!$concept->content->title !!}
                            </div>
                        </div>

                        <!----- BEACHFRONT RESORT DEAL BOX---------->

                        <div class="modal-body" style="box-shadow: 2px 2px 9px rgb(122, 175, 206); margin-bottom: 35px; padding:0;">
                            <div class="row">
                                <div class="col-12 col-lg-4">
                                    @if(Agent::isMobile() && !Agent::isTablet())
                                        <img src="{{asset('img/resorts/the-royal-sands/the-royal-sands-mosaic2.jpg')}}"  alt="The royal sands" width="100%">
                                    @else
                                        <img src="{{asset('img/resorts/the-royal-sands/the-royal-sands-a.jpg')}}" alt="The royal sands" width="100%">
                                    @endif
                                </div>
                                <div class="col-12 col-lg-8 resort plateral" style="padding: 15px">
                                    <div id="offerTab-2833" style="padding: 15px;">

                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="titulo_h3">The Royal Sands Resort &amp; Spa All Inclusive              
                                                    <img src="{{asset('img/icon-galeria/stars-4-5.svg')}}" alt="Stars Icon" title="Stars Icon">
                                                </h3>
                                                <p class="address">Cancun, Mexico</p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <p class="" style="line-height: 0.5rem; padding-bottom: 0; font-size: 12px;color: #575555;font-weight: 500;">
                                                        From <span style="text-decoration: line-through;font-size: 15px;color: #575555;font-weight: 500;">1,236 USD</span> *<br>
                                                    </p>
                                                    <span class="texto-big">{{__('resorts/the-royal-sands.mosaic_price2')}}</span><span class="texto-small">USD</span>
                                                </div>
                                                <div><span style="font-size: 0.9rem; font-weight: 500;color:#567e86;">4-night stay for two</span></div>
                                                <div class="p0500"><span style="font-size: 1.1rem; font-weight: 600;color:#567e86;padding:5px 0px;">ALL-INCLUSIVE PLAN</span></div>
                                                <div class="font-type-modal">
                                                    <b>Book from: </b> Dec 6th
                                                </div>

                                                <div class="font-type-modal"><b>Travel between:</b> 
                                                    Dec 9th, 2019
                                                    and
                                                    Dec 18th, 2020
                                                * some dates restrictions apply</div>
                                            </div>
                                            
                                            <div class="col-lg-6">
                                                <p class="font-type-modal">
                                                    This promotion includes:
                                                    </p><ul>
                                                                                                                                                                                                    <li>Special Rate $399 for 2 adults</li>
                                                            <li>Meals &amp; drinks included</li>
                                                            <li>24 hours room service</li>
                                                        </ul>
                                                <p></p>
                                            </div>
                                        </div>
                                        <hr class="plateral" style="border:2px solid #adc4ce">
                                        <div class="row">
                                            <div class="col-lg-12 plateral">
                                                <p class="font-type-modal">
                                                    * The total amount of the reservation will be charged at the moment of booking, any cancellation or modification will not be allowed after this moment. <b>This is a non-refundable rate.</b> 
                                                    <b>* For the All-Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants' menu. * Room Service: Limited Room Service menu available 24 hours. <b>* Special Rate Restrictions:</b>
                                                    <span class="dots" style="display: inline;">...</span><span class="viewMore" id="viewMore" style="display: none;"> Guests at The Royal Sands must be over 28 years of age and have an annual income of $70,000 USD or more (combined annual income if married). All guests must be currently employed and must be credit worthy and bring a major credit (not debit) card. Both husband and wife must attend a 120-minute guided tour and sales presentation. Sorry, no pets allowed. This material is being used for the purpose of promoting a Travel Club program, although you are under no obligation to purchase in order to receive your discount vacation package. Ineligibility under this promotional offer should not be construed as an ineligibility to purchase. Failure to attend such guided tour and sales presentation will cause The Royal Sands to charge corresponding applicable rack rates. Not valid for groups (two or more affiliated couples scheduled for the same or overlapping dates). Not valid in conjunction with any other offers from Royal Resorts. Recipient is responsible for payment of any government-imposed taxes directly related to the service being provided and any personal expenses incurred when utilizing this offer. <b>THIS MATERIAL IS NOT AN OFFER TO SELL NOR A SOLICITATION OF AN OFFER TO BUY TO RESIDENTS OF ANY STATE IN WHICH REGISTRATION REQUIREMENTS HAVE NOT BEEN FULFILLED.</b></span>
                                                    <a class="btnViewMore" role="button">Read more</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="resortTab-2833" style="padding: 15px;display: none;" class="plateral resortTab">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <h3 class="titulo_h3">The Royal Sands Resort &amp; Spa All Inclusive 
                                                    <img src="{{asset('img/icon-galeria/stars-4-5.svg')}}" alt="Stars Icon" title="Stars Icon">
                                                </h3>

                                                <p class="address">Cancun, Mexico</p>
                                                
                                                <p>This incredible resort in Cancun has amazing and impeccable facilities facing the Caribbean Sea and its exquisite fine white sand beaches. The spacious and beautifully decorated junior suites of this All Inclusive Cancun resort offer the best in comfort and exclusive amenities. Here, you will enjoy delicious food and beverages in the restaurants and snack bars you will find all along the hotel, and have fun with the activities that we have prepared for you and your family with the All-Inclusive Plan.</p>
                                            </div>
                                        </div>
                                        <div class="row resort">
                                                <div class="col-lg-4">
                                                    <span class="colum-title">JUNIOR SUITE</span>
                                                    <ul>
                                                        <li>2 double beds</li>
                                                        <li>Area: 437 ft2</li>
                                                        <li>Kitchenette</li>
                                                        <li>Shower with tub</li>
                                                        <li>Juliet balcony with ocean views</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <span class="colum-title">AMENITIES &amp; SERVICES</span>
                                                    <ul>
                                                        <li>3 swimming pools</li>
                                                        <li>4 restaurants</li>
                                                        <li>Kids Club</li>
                                                        <li>Spa</li>
                                                        <li>Free High-speed Wi-Fi</li>
                                                        <li>Fitness Center</li>
                                                    </ul>
                                                </div>
                                                <div class="col-lg-4">
                                                    <span class="colum-title">RESORT POLICIES</span>
                                                    <ul>
                                                        <li>Check-in:  4p.m.</li>
                                                        <li>Check-out: 11:00 a.m.</li>
                                                        <li>Payment accepted at the property: Visa, Master Card &amp; AMEX</li>
                                                        <li>Security deposit: $500 USD per reservation</li>
                                                    </ul>
                                                </div>
                                            
                                        </div>
                                    </div>

                                    <div class="row d-flex">
                                        <div class="btn-view-more col-6 align-self-center">
                                            <a role="button" class="btn btn-primary text-uppercase  av-btn-rates resortButton" data-resorts="2833">
                                                View resort
                                            </a>
                                        </div>
                                        <div class="btn-booknow col-6  align-self-center">
                                            <a role="button" data-toggle="modal" data-target="#form-resort-" class="btn btn-primary text-uppercase  av-btn-rates bookNow" data-resorts="283">
                                                Book now
                                            </a>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-center" style="margin-top: 20px;margin-left:-15px">
                                        <span style="color:#555; font-size: 0.9rem;">or call us at</span>&nbsp;&nbsp;<a style="white-space: nowrap;font-size: 0.9rem;" href="tel:1-888-387-4729"> 1-888-387-4729 USA Toll Free</a>
                                    </div>

                                </div>
                            </div>
                        
                        </div>
                        <!------ BEACHFRONT RESORT DEAL --------->

                        <div class="btn-offers {{ $mobile==0 ? 'text-right':'text-center'}}" style="">
                            <a href="#dashboard_cards" role="button"  style="border:1px solid #4C748B; padding: 10px; color:#262b2c;">
                            View Special Deals
                            </a>
                        </div>

                    </div>

                </section>

                <section class="margin-secciones">
                    <div class="container">
                       <div class="row">
                        <div class="col-lg-6">
                            <p class="subtitle-big text-center">WHO ARE WE? </p>
                            <p>We are a group of resorts nestled in the most attractive Mexican Caribbean beach destinations, Cancun and the Riviera Maya. Our goal is to provide unforgettable lifetime memories for you and your loved ones.</p>
                            <div style="padding:0; text-align: center; width: 100%;margin: 30px 0;">
                                {{--<a href="#dashboard_cards"  style="border:1px solid #4C748B; padding: 10px;color:#262b2c;">
                                 Our Resorts
                                </a>--}}
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="embed-container">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/V0Vg40K3aZM?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>
                       </div>
                    </div>
                </section>

                <section class="margin-secciones">
                    <div class="container">
                        <div class="row" style="border-bottom: 2px solid #4C748B;border-top: 2px solid #4C748B; padding:50px 0; text-align: center;">
                            <div class="col-lg-12" style="font-size: 25px; color: #4C748B;font-weight: 500;">
                                IF YOU WANT TO SPEAK WITH AN AGENT, CALL <a style="white-space: nowrap;font-size: 25px; color: #4C748B;font-weight: 500;" href="tel:1-888-387-4729"> 1-888-387-4729</a>
                            </div>
                        </div>
                    </div> 
                </section>

                <section class="container" id="dashboard_cards">
                    <div class="row">
                        <div class="col-lg-12">
                            
                                <p class="subtitle-big text-center">CANCUN VACATION SPECIAL DEALS</p>

                            
                            <div class="row bg-light-gray">
                                @foreach($firstBloq as  $conceptResort)
                                    @php
                                    $filtroCss=!in_array($conceptResort->resort->destination->identifier, $filtros);
                                    if(!empty($filtros)){
                                        
                                        if(in_array($conceptResort->resort->destination->identifier, $filtros)){
                                             $filtroCss='';
                                        }else{
                                            if(in_array($conceptResort->resort->identifier_rr, $filtros)){
                                                $filtroCss='';
                                            }else{
                                                $filtroCss='d-none';
                                            }
                                        }
                                    }
                                    @endphp
                                    
                                    <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset 
                                            {{$conceptResort->resort->destination->identifier }}
                                            resort-{{$conceptResort->resort->id}}
                                            {{ $filtroCss}}">
                                        @if(empty($conceptResort->pivot))
                                            @include('v2.cards.resort', ['resort' => $conceptResort])
                                        @else
                                            @include('v2.cards.concept-resort-mosaic', ['resort' => $conceptResort])
                                        @endif
                                    </div>

                                    @php //dd($conceptResort->resort)@endphp
                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>

                @if(!empty($concept->content->content_extra))
                    @foreach($concept->content->content_extra as $key => $extra)
                        @php
                            if (empty($bloques->get($key))) {
                                continue;
                            }
                        @endphp
                        <section class="container">
                            <div class="row m001land">
                                <div class="col-md-12">
                                    <h2 class="h2">{{ $extra['title']}}</h2>
                                    {!! $extra['description'] !!}
                                </div>
                            </div>
                        </section>

                        <section class="container">
                            <div class="col-12 mb-5">
                                <div class="row bg-light-gray">
                                    @foreach($bloques->get($key) as  $conceptResort)
                                        <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3 offerset  
                                            {{ $conceptResort->resort->destination->identifier }} 
                                            {{ ( !in_array($conceptResort->resort->destination->identifier, $filtros) && !empty($filtros) )? 'd-none' : '' }}">
                                            @if(empty($conceptResort->pivot))
                                                @include('v2.cards.resort', ['resort' => $conceptResort])
                                            @else
                                                @include('v2.cards.concept-resort', ['resort' => $conceptResort])
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </section>
                    @endforeach
                @endif

                <div id="termsAndConditions" style="margin-bottom: 2.5rem;"></div>
                <div class="container mb-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="row">
                                <div class="terms">
                                    {!! $concept->content->footer !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                    
                
                @include('v2.modals.exit-modal-mosaic')


                @foreach($resorts as $resort)
                    @include('v2.modals.picturemodal',['resort' => $resort])
                    @include('v2.modals.resort-mosaic-v2',['resort' => $resort])
                    @include('v2.bookings.resort-concept',['resort' => $resort,'mosaic' => true])
                @endforeach
                
                @component('parts/specials/individual/subIntern/payment-mosaic')@endcomponent

                @component('/parts/scripts', ['section'=>'Offers', 'page'=>$concept->url_en]) @endcomponent

            @endif
        </div>


    </div>
@endsection