<section class="container " id="resort-promotion">
    <div class="col-12 mb-5">
      <h2 class="text-center h1">{{__('special-offer/setup/main.subtitulo2')}}</h2>
    </div>

    <div class="col-12 mb-5 bg-light-gray">
        <div class="row">
            @foreach($resorts as $resort)
                <div class="col-12 col-md-6 col-lg-4 pt-3 pb-3">
                    @include('v2.cards.concept-resort', [$resort])
                </div>
                {{--
                @include('v2.modals.resort-concept', ['resort' => $resort])
                @include('v2.bookings.resort-concept', ['resort' => $resort])
                --}}
            @endforeach
        </div>
    </div>
</section>
 