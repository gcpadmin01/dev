<section class="container-fluid max-container slick-specials ">
    <div class="row">
        <div class="col-12 text-center ">
            <h2 class="title">{{ __('specials.subtitle3') }}</h2>
        </div>
        <div class="col-12 ">
            <div id="home-slick-specials"  class="datalayer-click_specials_home">
                @foreach($concepts as $i => $concept)
                    <div class="item ">
                        @include('v2.cards.concept',['concept' => $concept])
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>