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
    <link rel="stylesheet" href="{{ mix('css/gms-reservations.css') }}" integrity="{{ Sri::hash('css/gms-reservations.css') }}" crossorigin="anonymous">
@endpush

@push('scripts')
    <script src="{{mix('/js/gms-reservations.js')}}" integrity="{{ Sri::hash('/js/gms-reservations.js') }}" crossorigin="anonymous"></script>
@endpush


@section('interna')
    <div class="gms">

        <div class="header-gms">
            <img src="/img/gms/header-gms.jpg" alt="My royal" title="My royal">
        </div>
        <div class="gms-main">
            <section class="container">
                <div class="row">
                    <div class="col-md-3 menu-derecho">
                        @include('gms.menu')
                    </div>
                    <div class="col-md-9 ">
                        <div class="background-left">
                            <h2 class="h2">{{__('gms.Reservas')}}</h2>
                            <!-- tabs-->
                            <div class="nav-container">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li role="presentation">
                                        <a class="active" href="#pasadas" aria-controls="pasadas" role="tab" data-toggle="tab"
                                           data-layer_toggle="click"
                                           data-layer_category="GMS"
                                           data-layer_action="click"
                                           data-layer_label="dashboard reservations previus">
                                            {{__('gms.Past')}}
                                        </a>
                                    </li>
                                    <li role="presentation">
                                        <a href="#proximas" aria-controls="proximas" role="tab" data-toggle="tab"
                                           data-layer_toggle="click"
                                           data-layer_category="GMS"
                                           data-layer_action="click"
                                           data-layer_label="dashboard reservations current">
                                            {{__('gms.Next')}}
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content">
                                <div role="tabpanel" class="reservations tab-pane active" id="pasadas">
                                    @if(count($pastReservations) > 0)
                                        @foreach($pastReservations as $reservation)
                                            <section class="hotel-booking">
                                                <div class="bk-booking">
                                                    <h4>{{ $reservation->propertyName }}</h4>
                                                    <p> Cancun, Mexico</p>
                                                    <!-- <div class="aqui se supone estan las estrellas"></div> -->
                                                </div>
                                                <div class="img-hotel-booking">
                                                    <img src="{{ __('gms.resort-img.Grand Residences by Royal Resorts') }}" alt="Grand Residences by Royal Resorts" title="Grand Residences by Royal Resorts">
                                                </div>
                                                <div class="row">
                                                    <div class="form-booking bk-booking col-md-6">
                                                        <label>{{__('gms.Numero de Confirmacion')}}</label>
                                                        <p>{{ $reservation->reservationID }}</p>
                                                    </div>
                                                    <div class="form-booking bk-booking col-md-6">
                                                        <label>{{__('gms.Rooms')}}</label>
                                                        <p>{{ $reservation->numberOfRooms }}</p>
                                                    </div>
                                                    <div class="form-booking col-md-6">
                                                        <label>{{__('gms.Check-in date')}}</label>
                                                        <p>{{ $reservation->checkInDate }}</p>
                                                        <hr class="strongblue">
                                                    </div>
                                                    <div class="form-booking col-md-6">
                                                        <label>{{__('gms.Check-out date')}}</label>
                                                        <p>{{ $reservation->checkOutDate }}</p>
                                                        <hr class="strongblue">
                                                    </div>
                                                    <div class="form-booking col-md-6">
                                                        <label>{{__('gms.Adults (+13)')}}</label>
                                                        <p>{{ $reservation->numberOfAdults }}</p>
                                                        <hr class="strongblue">
                                                    </div>
                                                    <div class="form-booking col-md-6">
                                                        <label>{{__('gms.Children (0-12)')}}</label>
                                                        <p>{{ $reservation->numberOfChildren }}</p>
                                                        <hr class="strongblue">
                                                    </div>
                                                    <div class="form-booking col-md-6">
                                                        <label>{{__('gms.Total Price:')}}</label>
                                                        <p>${{ $reservation->totalAmount }} {{ $reservation->currency }}</p>
                                                    </div>
                                                </div>
                                                {{-- 
                                                    <button type="submit" class="btn-reservation">{{__('gms.¿Quiéres modificar la reservación?')}}</button>
                                                --}}
                                            </section>
                                        @endforeach
                                    @else
                                        <div class="alert">
                                            {{__('gms.Without reservation')}}
                                        </div>
                                    @endif
                                </div>
                                <div role="tabpanel" class="reservations tab-pane" id="proximas">
                                    @if(count($nextReservations) > 0)
                                        @foreach($nextReservations as $key => $reservation)
                                            <div class="card">
                                                <div class="card-header" id="r_{{ $reservation->reservationID }}">
                                                    <button class="btn btn-link" data-toggle="collapse" data-target="#_{{ $reservation->reservationID }}" aria-expanded="{{ ($key == 0)?'true': 'false' }}" aria-controls="_{{ $reservation->reservationID }}">
                                                        <h4>{{ $reservation->propertyName }}</h4>
                                                        <p> 
                                                            Cancun, Mexico  
                                                             @for($i=0; $i < $reservation->getImgHotel()->stars; $i++)
                                                                    @if($reservation->getImgHotel()->stars - ( $i + 1 ) >= 0)
                                                                        <img class="stars" src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon" width="15">
                                                                    @else
                                                                        <img class="stars" src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon" width="15">
                                                                    @endif
                                                            @endfor
                                                        </p>
                                                    </button>
                                                </div>

                                                <div id="_{{ $reservation->reservationID }}" class="collapse {{ ($key == 0)?'show' : '' }} " aria-labelledby="r_{{ $reservation->reservationID }}" data-parent="#proximas">
                                                    <div class="card-body">
                                                        <section class="hotel-booking">
                                                            {{--
                                                            <div class="bk-booking">
                                                                <h4>{{ $reservation->propertyName }}</h4>
                                                                <p> Cancun, Mexico</p>
                                                                <!-- <div class="aqui se supone estan las estrellas"></div> -->
                                                            </div>
                                                            --}}
                                                            <div class="img-hotel-booking">
                                                                <img src="{{ $reservation->getImgHotel()->file }}" title="{{ $reservation->getImgHotel()->file }}" alt="{{ $reservation->getImgHotel()->file }}">
                                                            </div>
                                                            <div class="row basical-information">
                                                                <div class="form-booking bk-booking col-md-6">
                                                                    <label>{{__('gms.Numero de Confirmacion')}}</label>
                                                                    <p>{{ $reservation->reservationID }}</p>
                                                                </div>
                                                                <div class="form-booking bk-booking col-md-6">
                                                                    <label>{{__('gms.Rooms')}}</label>
                                                                    <p>{{ $reservation->numberOfRooms }}</p>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-booking col-md-6">
                                                                    <label>{{__('gms.Check-in date')}}</label>
                                                                    <p>{{ $reservation->checkInDate }}</p>
                                                                    <hr class="strongblue">
                                                                </div>
                                                                <div class="form-booking col-md-6">
                                                                    <label>{{__('gms.Check-out date')}}</label>
                                                                    <p>{{ $reservation->checkOutDate }}</p>
                                                                    <hr class="strongblue">
                                                                </div>
                                                                <div class="form-booking col-md-6">
                                                                    <label>{{__('gms.Adults (+13)')}}</label>
                                                                    <p>{{ $reservation->numberOfAdults }}</p>
                                                                    <hr class="strongblue">
                                                                </div>
                                                                <div class="form-booking col-md-6">
                                                                    <label>{{__('gms.Children (0-12)')}}</label>
                                                                    <p>{{ $reservation->numberOfChildren }}</p>
                                                                    <hr class="strongblue">
                                                                </div>
                                                                <div class="form-booking col-md-6">
                                                                    <label>{{__('gms.Total Price:')}}</label>
                                                                    <p>${{ $reservation->totalAmount }} {{ $reservation->currency }}</p>
                                                                </div>
                                                            </div>
                                                            <a href="{{ $reservation->getModifyLink() }}" target="_blanck" class="btn  btn-reservation">
                                                                {{__('gms.¿Quiéres modificar la reservación?')}}
                                                            </a>
                                                        </section>  
                                                    </div>
                                                </div>
                                            </div>

                                            {{--
                                            <div class="card">
                                                <div class="card-header text-left">
                                                    <button class="btn btn-link" data-toggle="collapse" aria-expanded="false" data-target="#_{{ $reservation->reservationID }}" aria-expanded="true" aria-controls="_{{ $reservation->reservationID }}">
                                                        <h4>{{ $reservation->propertyName }}</h4>
                                                        <p> Cancun, Mexico</p>
                                                    </button>
                                                </div>
                                                <div id="_{{ $reservation->reservationID }}" class="collapse" data-parent="#proximas">
                                                      
                                                </div>
                                            </div>
                                            --}}
                                        @endforeach


                                    @else
                                        <div class="alert">
                                            {{__('gms.Without reservation')}}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear-3"></div>
                </div>
            </section>
            <div class="clear-3"></div>
        </div>
    </div>
@endsection