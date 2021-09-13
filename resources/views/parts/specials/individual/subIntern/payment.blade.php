<section class="payment-menu mb-2 container-fluid bg-light-gray">
    <div class="row no-gutters av-bg-gray" style="">
        <div class="col-12 py-2 d-flex justify-content-center">
            <div class="row no-gutters">
                <ul class="m-0 pl-0 d-flex flex-wrap justify-content-center paymenul">
                    <li class="d-flex align-items-center justify-content-center av-blue text-center py-2 px-1 col-12 col-md-8 ">
                        <a href="{{ lang_url("/".Lang::get('routes.about_us')."/".__('routes.best_deal')) }}"><img
                                    class="pr-2" src="{{ asset('img/img-specials/bestdeal-color.png')}}"
                                    alt="{{__('general.lb_best_deal')}}">{{__('general.lb_best_deal')}}</a>
                    </li>
                    <li class="d-inline-block px-3 py-2 col-12 col-md-4 d-flex justify-content-center align-items-center">
                        <ul class="pl-0 d-flex">
                            {{--<li class="d-inline-block pr-2">
                                <img src="{{ asset('img/img-specials/paypal.png')}}" alt="">
                            </li>--}}
                            <li class="d-inline-block px-2 ">
                                <img src="{{ asset('img/img-specials/visa.png')}}" alt="Visa icon">
                            </li>
                            <li class="d-inline-block px-2">
                                <img src="{{ asset('img/img-specials/mc.png')}}" alt="Mc icon">
                            </li>
                            <li class="d-inline-block px-2">
                                <img src="{{ asset('img/img-specials/amex.png')}}" alt="Amex icon">
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>