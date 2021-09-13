<section class="container mb-5">
    <div class="row">
        <div class="col-12">
            <h3 class="h3 mb-5">{{ __('specials.subtitle2') }}</h3>
        </div>
        <div class="col-12">
            <dev class="owl-carousel owl-theme datalayer-click_specials">
                @php($count = 1)
                @foreach($concepts as $concept)
                    <div class="item" data-position="{{$count++}}">
                        @include('v2.cards.concept',['concept' => $concept, 'validThru' => true])
                    </div>
                @endforeach
            </dev>
        </div>
    </div>
</section>
