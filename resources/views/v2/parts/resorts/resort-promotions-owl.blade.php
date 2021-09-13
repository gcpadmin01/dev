<section class="container " id="resort-promotion">
    <div class="col-12 mb-5">
      <h2 class="text-center h1">{{__('special-offer/setup/main.subtitulo2')}}</h2>
    </div>

    <div class="col-12 mb-5 box-b1">
        <div class="row">
            <div class="owl-carousel owl-carousel-resort owl-theme">
                @foreach($resorts as $resort)
                    <div class="pt-3 pb-3">
                        @include('v2.cards.concept-resort-owl', ["resort" => $resort])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>