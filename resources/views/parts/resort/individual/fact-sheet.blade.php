@php
    $total_amenities = count( __('resorts/'.$resort.'/fact-sheet.amenities') );
    $total_policies  = count( __('resorts/'.$resort.'/fact-sheet.resort_policies') );
    $total_things    = count( __('resorts/'.$resort.'/fact-sheet.things') );
    $total_rates     = count( __('resorts/'.$resort.'/fact-sheet.rates') );
    $total_terms     = count( __('resorts/'.$resort.'/fact-sheet.terms') );

    $amenities = __('resorts/'.$resort.'/fact-sheet.amenities');
    $terms = __('resorts/'.$resort.'/fact-sheet.terms');

    $destino   = __('resorts/'.$resort.'.destination');
    $amenityMx = ['Cancun','Playa del Carmen','Riviera Maya'];

    if(in_array($destino,$amenityMx)){
        array_splice($amenities,9,0,__('general.amenities_only_mx'));
        array_splice($terms,(count($terms)-1),0,__('general.amenities_only_mx_terms'));
    }

@endphp



<div class="container" id="mark1">
    <div class="row">
        <section class="col-12 fact-sheet-section">
            <h2 class="e9"> {{__('resorts/'.$resort.'/fact-sheet.title')}}</h2>
            <div class="row">
                <div class="{{$flag_gnr == TRUE ? 'col-md-8':'col-md-12'}} col-12">

                    <h3 class="e7 mb-4">{{__('general.title_fac_sheet')}}</h3>

                    <ul class="resorts-amenities {{$flag_gnr == TRUE ? 'clm-2':''}}">
                        @foreach($amenities as $key => $amenity)
                            <li class="e8-v1 amenity-{{$amenity['icon']}}">
                                {{ $amenity['title'] }}
                            </li>
                        @endforeach
                    </ul>

                </div>
                @if($flag_gnr == TRUE)
                    <div class="{{$flag_gnr == TRUE ? 'col-md-4':'col-md-12'}} col-12">
                        <h3 class="e7 mb-4"> {{__('resorts/'.$resort.'/fact-sheet.title_certificate')}}</h3>
                        <div class="certs">
                            @if($flags_cert[0] == TRUE) <img src="{{asset('img/certificate/safe_travels.png')}}" alt="{{__('general.certificates.safe-travel')}}"> @endif
                            @if($flags_cert[1] == TRUE) <img src="{{asset('img/certificate/travels_choice.png')}}" alt="{{__('general.certificates.travel-choice')}}"> @endif
                            @if($flags_cert[2] == TRUE) <img src="{{asset('img/certificate/travels_choice_best.png')}}" alt="{{__('general.certificates.travel-choice-bfb')}}"> @endif
                            @if($flags_cert[3] == TRUE) <img src="{{asset('img/certificate/cppsit_logo.png')}}" alt="{{__('general.certificates.st-royal-resort')}}"> @endif
                            @if($flags_cert[4] == TRUE) <img src="{{asset('img/certificate/green-leader.png')}}" alt=""> @endif
                            @if($flags_cert[5] == TRUE) <img src="{{asset('img/certificate/safe-seal.png')}}" alt=""> @endif
                        </div>
                    </div>
                @endif
                <div class="col-12">
                    <h3 class="e7 mb-4">{{__('resorts/'.$resort.'/fact-sheet.policies_title')}}</h3>
                    <ul class="resorts-policies mb-4">
                        @for($i=0;$i<$total_policies;$i++)
                            <li class="e8">{{ __('resorts/'.$resort.'/fact-sheet.resort_policies.'.$i) }}</li>
                        @endfor
                    </ul>
                </div>
            </div>
        </section>

        <section class="col-12 rate-plans-section rate-plans-container resort-container mb-4">
            <h3 class="e7">{{__('resorts/'.$resort.'/fact-sheet.rate_title')}}</h3>
            @for($i=0;$i<$total_rates;$i++)
                <h5 class="e8">{{ __('resorts/'.$resort.'/fact-sheet.rates.'.$i.'.title') }}</h5>
                <p>{{ __('resorts/'.$resort.'/fact-sheet.rates.'.$i.'.description') }}</p>
            @endfor
        </section>

        <section class="col-12 terms-section rate-plans-container resort-container mb-4">
            <h4 class="e7">{{__('resorts/'.$resort.'/fact-sheet.terms_title')}}</h4>
            <p class="text-justify">
                <ul class="terms-and-conditions e6">
                    @foreach($terms as $key => $term)
                       <li>{{ $term }}</li>
                    @endforeach
                </ul>
            </p>
        </section>
    </div>
</div>


