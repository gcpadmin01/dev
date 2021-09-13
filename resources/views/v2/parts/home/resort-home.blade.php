
@if(count($resorts) > 0) 
    <section class="slick-specials slick-specials-resort ">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center ">
                    <h2 class="title">{{ __('specials.subtitle2') }}</h2>
                </div>
                <div class="col-12 ">
                    <div id="home-slick-resorts" class="slick-carousel" data-slick = '{
                         "slidesToShow": 3,
                         "arrows": true,
                         "autoplay": false,
                         "rows": 0,
                         "infinite": false,
                         "lazyLoad":"progressive",
                         "dots": true,
                         "responsive": [
                            {
                                "breakpoint": 1000,
                                "settings": {
                                    "slidesToShow": 2
                                }
                            },
                            {
                                "breakpoint": 576,
                                "settings": {
                                    "slidesToShow": 1,
                                    "arrows": false,
                                    "dots": true
                                }
                            }
                         ]}'>
                        @foreach($resorts as $resort)
                            <div class="item">
                                @include('v2.cards.resort-concept',['resort' => $resort])
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

{{--
@foreach($resorts as $resort)
    @include('v2.modals.picturemodal',['resort' => $resort])
    @include('v2.modals.resort-concept',['resort' => $resort])
    @include('v2.bookings.resort-concept',['resort' => $resort])
@endforeach
--}}