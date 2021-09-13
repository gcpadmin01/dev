<section class="container">
    <div class="col-12 mb-5">
        <h3 class="h3">{{__('special-offer/setup/main.subtitulo2')}}</h3>
    </div>
</section>

<section class="container">    
    <div class="col-12 mb-5 bg-light-gray">
        <div class="row">
            @foreach($resorts as $resort)
                <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3">
                    @include('v2.cards.resort-concept',['resort' => $resort, 'validThru' =>true])
                </div>
            @endforeach
        </div>
    </div>
</section>


{{--
@foreach($resorts as $resort)
    @include('v2.modals.picturemodal',['resort' => $resort])
    @include('v2.modals.resort-concept',['resort' => $resort])
    @include('v2.bookings.resort-concept',['resort' => $resort])
@endforeach
--}}