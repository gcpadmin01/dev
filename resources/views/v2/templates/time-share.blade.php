<!doctype html>
<html lang="{{ app()->getLocale() }}"
      class="{{ str_slug(data_get(getCurrentBrowser(), 'browser', 'undefined')) }} v-{{ data_get(getCurrentBrowser(), 'version', 'undefined') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('header.site.title') }}</title>
    <meta name="description" content="{{ __('header.site.description') }}"/>

    <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}">
    <link rel="stylesheet" href="{{mix('/css/time-share.css')}}">
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">


@if(env('APP_TAG') == true)
    <!-- Google Tag Manager -->
        <script>
            window.setTimeout(function () {
                (function (w, d, s, l, i) {
                    w[l] = w[l] || [];
                    w[l].push({
                        'gtm.start':
                            new Date().getTime(), event: 'gtm.js'
                    });
                    var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
                    j.async = true;
                    j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                    f.parentNode.insertBefore(j, f);
                })(window, document, 'script', 'dataLayer', 'GTM-NNS3B9J');
            }, 1500);
        </script>
        {{-- End Google Tag Manager --}}
    @endif

</head>

<body class="<?=strtolower(getCurrentBrowser()['browser']) ?>">
<header class="header">
    <div class="container">
        <picture>
            <source media="(min-width:1100px)" srcset="/img/logo/royal-resorts.svg">
            <img loading="lazy" src="/img/logo/royal-resorts-small.svg">
        </picture>
        <nav class="header-nav">
            <ul class="header-list">

                <li class="d-none d-lg-block">
                    <button data-toggle="scroll" data-target="#link-cert" class="btn btn-header header-list-item ">
                        {{__('time-share.About this Certificate')}}
                    </button>
                </li>
                <li class="d-none d-lg-block">
                    <button data-toggle="scroll" data-target="#link-resorts" class="btn btn-header header-list-item">
                        {{__('time-share.Resorts')}}
                    </button>
                </li>
                <li class="d-none d-lg-block">
                    <button data-toggle="scroll" data-target="#a-1" class="btn btn-header header-list-item">
                        {{__('time-share.How to Book?')}}
                    </button>
                </li>
                <li class="d-none d-lg-block">
                    <button data-toggle="scroll" data-target="#link-reviews" class="btn btn-header header-list-item">
                        {{__('time-share.Reviews')}}
                    </button>
                </li>
                <li class="d-lg-none">
                    <button class="btn btn-header header-list-item on-show-menu">
                        Menu
                        <svg width="24" height="25" viewBox="0 0 24 25" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 16.2131L18.01 10.2031L16.597 8.78809L12 13.3881L7.40399 8.78809L5.98999 10.2021L12 16.2131Z"/>
                        </svg>
                    </button>
                </li>
                <li>
                    <button class="btn btn-body btn-orange btn-ico on-show-menu-call">
                        {{__('time-share.Tell me more')}}
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 15.713L18.01 9.70299L16.597 8.28799L12 12.888L7.40399 8.28799L5.98999 9.70199L12 15.713Z"
                                  fill="white"/>
                        </svg>

                    </button>
                </li>
            </ul>
        </nav>
    </div>

    {{--
        Todo: Faltan textos en esta seccion
    --}}
    <nav id="menu-float" class="header-float">
        <button class="text-bold text-primary btn" data-toggle="scroll" data-target="#link-cert">What you get</button>
        <button class="text-bold text-primary btn" data-toggle="scroll" data-target="#link-resorts">Where can you
            stay?
        </button>
        <button class="text-bold text-primary btn" data-toggle="scroll" data-target="#a-1">Steps to get the
            certificate
        </button>
        <button class="text-bold text-primary btn" data-toggle="scroll" data-target="#link-reviews">Reviews</button>
        <a class="text-bold text-primary btn" href="tel:888-387-4751">Call us 888-387-4751</a>
    </nav>

    <nav id="menu-call" class="header-float">
        <a class="text-bold text-primary btn" href="tel:1-888-387-4751">
            {{__('time-share.Call 01 800 654 6575')}}
        </a>
        <button data-toggle="scroll" data-target="#a-2" class="text-bold text-primary btn" href="#">
            {{__('time-share.Would you like us to call you?')}}
        </button>
    </nav>
</header>

<main class="text-body">
    <div class="ratio ratio--9-5 ratio-lg--668-329" style="max-height: 80vh">
        <div class="ratio__vimeo">
            <div class="vimeo"></div>
        </div>
        <!--        <picture>
                    <img loading="lazy" class="ratio__img" src="/img/time-share/banner.jpg">
                </picture>-->
    </div>

    <div class="container container-top box-a">
        <div class="box-shadow text-center pt-2 pt-lg-0 mb-4 mb-lg-1">
            <button class="btn btn-bold btn-secundary btn-offerta-exclusiva text-strong m-auto mb-4 ">
                {{ __('time-share.Exclusive Offer')  }}
            </button>
            <div class="tooltip text-body text-secondary">
                This is an exclusive offer, do not close the window, if you do it will disappear.
            </div>
            <p class="text-h1 text-primary m-0">
                {{ __('time-share.US$399')  }}
            </p>
            <p class="text-bold text-blue-light m-0 mb-1">
                {!!  __('time-share.5 days/4 nights | Beachfront Resort')  !!}
            </p>
            <p class="text-pre-title text-secundary m-0 mb-1">
                {{__('time-share.Enjoy an amazing vacation with every comfort and luxury for only US$399* with our Discover Paradise certificate.')}}
            </p>
            <p class="text-small m-0">
                {{__('time-share.Taxes are not included')}}
            </p>
        </div>

        <div class="cuestions text-center mb-6 mb-lg-0">
            <p class="m-0 mb-2 text-blue-light text-underline d-lg-none"
               data-toggle="scroll" data-target="#link-discover">
                {{__('time-share.What is the Discover Paradise Certificate?')}}
            </p>
            <p class="m-0 mb-2 text-blue-light text-underline d-lg-none"
               data-toggle="scroll" data-target="#link-resorts">
                Where can you stay?
            </p>
            <div class="text-center">
                <p data-toggle="scroll" data-target="#a-1"
                   class="m-0 btn hover-link-blue justify-content-center  text-blue-light text-underline">
                    {{__('time-share.How can I book this certificate?')}}
                </p>
            </div>
        </div>
    </div>

    <div class="row row-column row-lg-row mt-lg-17 container-lg justify-content-lg-between mb-lg-9">
        <div class="col-lg-5 order-lg-2">
            <div class="ratio ratio--9-5 ratio-lg--528-413">
                <picture>
                    <img loading="lazy" class="ratio__img" src="/img/time-share/banner-2.jpg">
                </picture>
            </div>
        </div>
        <div id="link-discover" class="col-lg-6 order-lg-1">
            <div class="container">
                <h2 class="text-h2 m-0 mb-3 text-center text-primary">
                    {{__('time-share.What is the Discover Paradise Certificate?')}}
                </h2>
                <p class="text-body m-0 mb-3">
                    {{__('time-share.text1')}}
                </p>
                <div class="text-body m-0 ">
                    <b class="text-blue-light">{{__('time-share.What you get')}}</b>
                    <ul class="m-0 mb-4 text-body">
                        {!! __('time-share.ul1') !!}
                    </ul>
                    <i>Valid for a stay during 2021</i>
                </div>


            </div>
        </div>
    </div>

    <div id="link-resorts" class="container pt-4 mb-8 mb-lg-17">
        <h2 class="text-h2 text-center text-primary m-0 mb-3 mb-lg-1">
            {{__('time-share.Where can you stay?')}}
        </h2>
        <p class="text-body m-0 mb-3 mb-lg-4 text-center">
            {!! __('time-share.text2') !!}
        </p>

        <div class="slider">
            <div class="glide glide-resorts">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        @foreach(__('time-share.resorts_data') as $resort)
                            <div class="glide__slide">
                                <div class="card-destination">
                                    <div class="card-header ">
                                        <div class="ratio ratio--111-86">
                                            <picture>
                                                <img loading="lazy" class="card-img ratio__img"
                                                     src="{{$resort['thumb']}}">
                                            </picture>
                                        </div>
                                        <span class="card-img-caption">{{$resort['zone']}}</span>
                                    </div>
                                    <div class="card-body text-center">
                                        <div class="card-title text-bold text-secundary">{{$resort['name']}}</div>
                                        <div class="card-footer">
                                            <button data-toggle="modal" data-target="#modal-{{$resort['target']}}"
                                                    class="m-auto btn hover-link-blue text-underline card-link text-body">{{__('time-share.see more')}}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="box-b">
        <div class="ratio ratio--40-20 ratio-lg--2672-554">
            <div class="shadow-1"></div>
            <picture>
                <source srcset="/img/time-share/time-share-desk-1.jpg">
                <img loading="lazy" class="ratio__img" src="/img/time-share/time-share-1.jpg"/>
            </picture>

            <span class="text-body text-lg-h3 text-secondary">
                {!!__('time-share.Book this certificate by calling the official Royal Resorts Reservation Center')!!}
            </span>
        </div>
    </div>

    <div id="a-1" class="bg-primary mb-lg-17">
        <div class="container pt-5 pb-5 pt-lg-17 pb-lg-17 box-c">
            <div>
                <p class="text-h2 m-0 text-white mb-4">
                    {!! __('time-share.text3') !!}
                </p>
            </div>
            <div>
                <ol class="text-body text-lg-pretitle text-white">
                    <li class="mb-3">
                        {{__('time-share.Choose the resort that interests you the most, regardless of your travel dates')}}
                    </li>
                    <li class="mb-3">
                        <div data-toggle="modal" data-target="#modal-policies">
                            {!!__('time-share.Read the reservation policies (click here)')!!}
                        </div>
                    </li>
                    <li>
                        {!! __('time-share.Call now or send your contact details to start the purchase process.') !!}
                    </li>
                </ol>
            </div>
        </div>
    </div>


    <div class="mb-5 mb-lg-17 box-d container-lg">
        <div>
            <div class="ratio ratio--9-5 ratio-lg--528-413 mb-4">
                <img loading="lazy" src="/img/time-share/certificado-descubre-paraiso-2.jpg" class="ratio__img">
            </div>
        </div>
        <div>
            <div class="container">
                <p class="title text-h2 m-0 text-primary text-center mb-2">
                    {{__('time-share.Do you want to spend more time in the Mexican Caribbean?')}}
                </p>
                <p class="text-body m-0 mb-4 text-secundary">
                    {!! __('time-share.text4') !!}
                </p>
                <div>
                    <button data-toggle="modal" data-target="#modal-booking"
                            class="m-auto btn btn-body btn-outline-orange hover-btn-outline-orange mb-2">
                        {{__('time-share.Yes, I already have my travel dates')}}
                    </button>
                    <button data-toggle="modal" data-target="#modal-policies" data-policies="#h-1"
                            class="m-auto btn btn-body btn-link__gray card-more-info">
                        {{__('time-share.Important information')}}
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="divider"></div>
    </div>

    <div id="link-cert" class="container pt-3 pb-3 mb-lg-10">
        <p class="text-h2 m-0 text-primary text-center">
            {{__('time-share.The certificates we offer')}}
        </p>
    </div>

    <div class="mb-4 mb-lg-17 box-e container-lg">
        <div class="card-cert pt-1 mb-1">
            <div class="container">
                <button class="card-btn text-bold text-blue-light svg-animate r-180" data-toggle="height"
                        data-target="#cert-a">
                    {{__('time-share.cert-a.name')}}
                    <svg width="24" height="25" viewBox="0 0 24 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16.2131L18.01 10.2031L16.597 8.78809L12 13.3881L7.40399 8.78809L5.98999 10.2021L12 16.2131Z"/>
                    </svg>
                </button>
            </div>
            <div id="cert-a" class="card-animate  card-collapse show">
                <div class="card-body mb-6 pt-3 pb-4">
                    <ul class="text-body text-secundary m-0">
                        @foreach(__('time-share.cert-a.includes') as $include)
                            <li>{{$include}}</li>
                        @endforeach
                    </ul>

                    <p class="text-body text-secundary text-center m-0 muted-7">{{__('time-share.cert-a.rate')}}</p>
                    <p class="m-0 text-h2 text-secondary text-center">{{__('time-share.cert-a.rate_dco')}}</p>
                    <p class="text-body text-secundary text-center m-0 mb-3">{{__('time-share.Taxes are not included')}}</p>

                    <div class="text-center mb-2">
                        <a href="tel:1-888-387-4751" class="card-call hover-btn-outline-orange">
                            {{__('time-share.cert-a.call')}}
                        </a>
                    </div>

                    <div class="text-center">
                        <button class="card-more-info pointer" data-policies="#h-2" data-toggle="modal"
                                data-target="#modal-policies">
                            {{__('time-share.cert-b.Please read this important information')}}
                        </button>
                    </div>
                </div>
            </div>

        </div>

        <div class="card-cert pt-1">
            <div class="container">
                <button class="card-btn text-bold text-blue-light svg-animate" data-toggle="height"
                        data-target="#cert-b">
                    {{__('time-share.cert-b.name')}}

                    <svg width="24" height="25" viewBox="0 0 24 25" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 16.2131L18.01 10.2031L16.597 8.78809L12 13.3881L7.40399 8.78809L5.98999 10.2021L12 16.2131Z"/>
                    </svg>
                </button>
            </div>
            <div id="cert-b" class="card-animate card-collapse ">
                <div class="card-body mb-6 pt-3 pb-4">
                    <ul class="text-body text-secundary m-0 mb-3">
                        @foreach(__('time-share.cert-b.includes') as $include)
                            <li>{{$include}}</li>
                        @endforeach
                    </ul>

                    <p class="text-h2 text-secundary text-center m-0">
                        {{__('time-share.cert-b.exclusive')}}
                    </p>
                    <p class="text-body text-secondary m-0 muted-7 text-center mb-2">
                        {{__('time-share.cert-b.If you already know your travel dates you can book online')}}
                    </p>

                    <div class="text-center mb-2">
                        <button data-toggle="modal" data-target="#modal-booking"
                                class="btn btn-outline-orange card-call hover-btn-outline-orange">
                            {{__('time-share.BOOK NOW')}}
                        </button>
                    </div>

                    <p class="text-body text-secundary text-center m-0 mb-3">
                        {{__('time-share.cert-b.If you need to talk to an agent, call us or send us your contact details')}}
                    </p>
                    <!--                    <div class="text-center mb-3">
                                            <a href="#" class="card-call"> Llama a un asesor <br> al 800-312-323-122</a>
                                        </div>-->

                    <div class="text-center">
                        <button class="card-more-info pointer" data-policies="#h-3" data-toggle="modal"
                                data-target="#modal-policies">
                            {{__('time-share.cert-b.Please read this important information')}}
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="a-2" class="bg-gray pt-3 pb-3 mb-8 box-f  mb-lg-17">
        <div class="container ">
            <div>
                <p class="text-h2 m-0 text-secundary text-center mb-3">
                    {{__('time-share.Would you like us to call you? Give us your contact details')}}
                </p>
            </div>

            {{--            <div>--}}
            {{--                <form>--}}
            {{--                    <div class="input-group mb-2">--}}
            {{--                        <label class="input-group-label">{{__('time-share.Name')}}*</label>--}}
            {{--                        <input class="input-group-input" type="text" />--}}
            {{--                    </div>--}}

            {{--                    <div class="input-group mb-2">--}}
            {{--                        <label class="input-group-label">{{__('time-share.Phone number')}}</label>--}}
            {{--                        <input class="input-group-input" type="text" />--}}
            {{--                    </div>--}}

            {{--                    <div class="input-group mb-2">--}}
            {{--                        <label class="input-group-label">{{__('time-share.Email')}}*</label>--}}
            {{--                        <input class="input-group-input" type="email" />--}}
            {{--                    </div>--}}

            {{--                    <div class="input-group mb-2">--}}
            {{--                        <button class="btn  text-btn btn-primary btn-submit">{{__('time-share.Send')}}</button>--}}
            {{--                    </div>--}}

            {{--                    <div class="input-group mb-2 text-small text-secundary">--}}
            {{--                        <label>--}}
            {{--                            <input type="checkbox" />--}}
            {{--                            {!!__('time-share.check_policies')!!}--}}
            {{--                        </label>--}}
            {{--                    </div>--}}
            {{--                </form>--}}
            {{--            </div>--}}

            <div>
                @if(Session::has('success'))
                    <div class="alert-confirm">
                        <p class="text-center">{{__('time-share.success-msg')}}</p>
                    </div>
                @endif
                <form method="POST" action="{{route('time-share.contact')}}">
                    @csrf
                    <div class="input-group mb-2">
                        <label class="input-group-label">{{__('time-share.Name')}}*</label>
                        <input class="input-group-input" name="name" type="text" required/>
                    </div>

                    <div class="input-group mb-2">
                        <label class="input-group-label">{{__('time-share.Phone number')}}</label>
                        <input class="input-group-input" name="phone" type="text" required/>
                    </div>

                    <div class="input-group mb-2">
                        <label class="input-group-label">{{__('time-share.Email')}}*</label>
                        <input class="input-group-input" name="email" type="email" required/>
                    </div>

                    <div class="input-group mb-2">
                        <button class="btn  text-btn btn-primary btn-submit">{{__('time-share.Send')}}</button>
                    </div>

                    <div class="input-group mb-2 text-small text-secundary">
                        <label>
                            <input type="checkbox" name="optin" required/>
                            {!!__('time-share.check_policies')!!}
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="link-reviews" class="container mb-12 mb-lg-17">
        <p class="text-h2 m-0 text-primary mb-6 text-center">
            {{__('time-share.Member and Guest Reviews')}}
        </p>

        @php
            $reviews = __('time-share.reviews');
        @endphp

        <div class="slider">
            <div class="glide glide-commets">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        @foreach($reviews as $review)
                            <div class="glide__slide">
                                <div class="card-commet">
                                    <div class="card-header">
                                        <div class="ratio ratio--1-1">
                                            <img loading="lazy" class="ratio__img user-avatar"
                                                 src="/img/icon-reviews/{{$review['avatar']}}" alt="Avatar user">
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="m-0 text-subtitle text-secundary">{{$review['title']}}</p>
                                        <p class="m-0 text-body text-secundary">{{$review['content']}}</p>
                                        <p class="m-0 text-bold text-secundary">{{$review['origin']}}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="glide__controls" data-glide-el="controls">
                    <button class="pointer glide__arrow glide__arrow--left" data-glide-dir="<<">
                        <svg width="24" height="25" viewBox="0 0 24 25" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 16.2131L18.01 10.2031L16.597 8.78809L12 13.3881L7.40399 8.78809L5.98999 10.2021L12 16.2131Z"/>
                        </svg>
                    </button>
                    <button class="pointer glide__arrow glide__arrow--right" data-glide-dir=">>">
                        <svg width="24" height="25" viewBox="0 0 24 25" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 16.2131L18.01 10.2031L16.597 8.78809L12 13.3881L7.40399 8.78809L5.98999 10.2021L12 16.2131Z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container box-g mb-lg-17">
        <p class="text-h2 text-center text-primary m-0 mb-4 mb-lg-6">
            {{__('time-share.About us')}}
        </p>
        <div>
            <div class="card-about text-center mb-3">
                <div>
                    <img loading="lazy" src="/img/logo/royal_care_standar.png" class="mb-4">
                </div>
                <div>
                    <p class="text-body text-secondary text-left">
                        At Royal Resorts, the health and safety of our guests and employees is our top priority. Due to
                        the COVID-19, we are raising our cleaning and sanitation standards with our program, Royal Care
                        Standard: additional hygiene and sanitation protocols are being implemented in guest rooms,
                        public areas, offices and back of house. </p>
                </div>
            </div>

            <div class="card-about text-center mb-3">
                <div>
                    <img loading="lazy" src="/img/logo/tripadvisor.png" class="mb-4">
                </div>
                <div>
                    <p class="text-body text-secondary text-left">
                        Based on millions of reviews and opinions from travelers from around the world, this annual
                        award recognizes the very best tourism establishments in terms of service, quality, customer
                        satisfaction and more, across a range of categories. </p>
                </div>
            </div>

        </div>
    </div>
</main>

<footer class="pt-4 pb-4 footer" style="background: #09224A">
    <div class="container">
        <p class="text-pre-title m-0 text-white mb-3 text-center">
            {{__('time-share.Other brands in the Royal Resorts family')}}
        </p>
        <div class="slider mb-4">
            <div class="glide glide-footer">
                <div class="glide__track" data-glide-el="track">
                    <div class="glide__slides">
                        <div class="glide__slide">
                            <svg width="182" height="30" viewBox="0 0 182 30" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0)">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M33.5647 19.1496C33.5647 19.1496 38.5306 10.4755 48.108 7.58512C45.572 3.34936 40.9363 0.513428 35.6371 0.513428C32.4497 0.513428 29.5047 1.54138 27.1081 3.27982C27.2929 3.21633 27.4747 3.15587 27.6656 3.09842C30.0288 2.3849 32.7587 2.12791 35.8431 2.69933C35.1584 2.83539 31.9074 2.7084 28.1746 4.04776C26.902 4.50429 25.575 5.13014 24.2721 5.99785C22.3027 8.47097 21.1211 11.5972 21.1211 15.0045C21.1211 15.5638 21.1575 16.1171 21.218 16.6613C25.3447 16.2501 29.7925 16.8851 33.5647 19.1496Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M40.1455 24.9485C36.2491 25.1329 33.195 26.5236 33.195 26.5236C35.0372 25.4231 37.4641 24.6189 40.0607 24.3528C42.1028 24.1412 44.2479 24.2652 46.2931 24.8336C48.6866 22.2516 50.1531 18.7989 50.1531 15.0015C50.1531 14.6266 50.1349 14.2578 50.1076 13.895C49.6017 13.8647 49.1048 13.8647 48.623 13.8889C45.372 14.0431 42.8239 15.2041 42.8239 15.2041C44.36 14.285 46.384 13.6138 48.5503 13.3931C49.0442 13.3417 49.5471 13.3145 50.0501 13.3114C49.8653 11.7211 49.4229 10.2095 48.7624 8.81567C46.5627 9.60478 44.2388 10.7869 42.0331 12.5647C40.2152 14.034 38.4791 15.9055 36.9672 18.3061C36.8551 18.6417 36.7127 19.6575 36.7127 19.6575H37.5883L38.2064 19.2796L38.2185 19.3794L38.2337 19.5336L38.0185 19.6817L35.0735 21.7437L34.001 21.7981L33.4374 21.9674L33.2162 21.9432L32.6194 21.8797L31.7437 22.1065L30.9832 22.4179L31.5195 21.91L31.6619 21.6016L31.7165 21.0634L31.9285 20.8276L32.3648 20.3378C30.8772 19.3189 29.3138 18.6205 27.7474 18.161C25.5568 17.523 23.3541 17.3537 21.321 17.4414C22.4815 24.2803 28.4442 29.4926 35.631 29.4926C39.4517 29.4926 42.9239 28.0172 45.5174 25.6106C45.4023 25.5743 45.2871 25.538 45.172 25.5017C43.4601 24.9968 41.7331 24.8729 40.1455 24.9485Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M21.1151 16.6672C17.7459 17.0149 14.5918 18.0579 12.2013 19.488C12.2013 19.488 16.1674 17.683 21.2242 17.4442C21.2575 17.4442 21.2939 17.4412 21.3272 17.4412C21.2848 17.1842 21.2454 16.9242 21.2151 16.6611C21.1818 16.6611 21.1484 16.6642 21.1151 16.6672Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M48.7714 8.81258C53.6192 7.07413 57.8367 7.23739 58.7245 7.06204C54.7221 6.32433 51.1802 6.6569 48.1109 7.58206C48.1079 7.58206 48.1079 7.58206 48.1049 7.58206C48.3412 7.98115 48.5624 8.39233 48.7623 8.81258C48.7684 8.8156 48.7714 8.81258 48.7714 8.81258Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M52.8194 14.3456C53.8284 14.6389 54.8313 15.0894 55.7887 15.7424L55.5069 16.0599L55.3706 16.2111L55.3342 16.5557L55.2433 16.7553L54.8979 17.0818L55.3857 16.8822L55.9493 16.7341L56.3341 16.7734L56.4765 16.7885L56.837 16.6797L57.5248 16.6464L59.4184 15.3222L59.5548 15.2254L59.5457 15.1257L59.5366 15.0622L59.1397 15.3071H58.5761C58.5761 15.3071 58.667 14.654 58.7398 14.4394C59.7093 12.8974 60.8273 11.6941 61.9938 10.7508C63.4118 9.60799 64.9085 8.84912 66.3235 8.34119C69.4382 7.22254 72.1499 7.32835 72.7195 7.21649C70.1471 6.74182 67.8717 6.95648 65.8993 7.55208C59.7426 9.40844 56.5492 14.9836 56.5492 14.9836C54.5586 13.7893 52.271 13.2995 50.0471 13.3086C50.0683 13.5021 50.0865 13.6956 50.1017 13.8921C50.9924 13.9435 51.9074 14.0826 52.8194 14.3456Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M60.8607 17.3536C53.4799 19.5788 49.6532 26.2635 49.6532 26.2635C48.5928 25.6255 47.4596 25.1569 46.2962 24.8334C46.0477 25.0995 45.7902 25.3595 45.5236 25.6074C46.6143 25.9581 47.699 26.466 48.7352 27.1765L48.3989 27.5545L48.2353 27.7389L48.1929 28.1531L48.0838 28.3889L47.6717 28.782L48.2565 28.5431L48.9291 28.3678L49.3896 28.4161L49.5593 28.4343L49.9926 28.3012L50.8197 28.2589L53.0891 26.6716L53.2527 26.5567L53.2406 26.4388L53.2315 26.3602L52.7558 26.6535H52.0802C52.0802 26.6535 52.1892 25.8735 52.2771 25.6134C53.4406 23.7662 54.7797 22.321 56.1795 21.1902C57.8793 19.8176 59.673 18.9076 61.3697 18.2999C65.1055 16.9605 68.3535 17.0875 69.0382 16.9515C65.9538 16.3861 63.2239 16.64 60.8607 17.3536Z"
                                          fill="white"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                          d="M27.1081 3.28003C20.0909 5.66246 16.4581 12.0116 16.4581 12.0116C13.5283 10.255 10.0712 9.76821 6.86564 10.1008C4.26906 10.3668 1.84215 11.1711 0 12.2716C0 12.2716 3.05409 10.8808 6.95047 10.6964C8.53811 10.6208 10.2651 10.7478 11.98 11.2466C13.1889 11.6004 14.3918 12.1385 15.5401 12.9216L15.2038 13.2995L15.0402 13.4809L14.9978 13.8951L14.8887 14.134L14.4766 14.527L15.0614 14.2882L15.734 14.1128L16.1945 14.1612L16.3642 14.1793L16.7975 14.0463L17.6246 14.004L19.894 12.4167L20.0576 12.3018L20.0455 12.1839L20.0364 12.1083L19.5607 12.4016H18.885C18.885 12.4016 18.9941 11.6215 19.082 11.3615C20.2454 9.51425 21.5846 8.06907 22.9844 6.93832C23.4086 6.59668 23.8388 6.28225 24.2721 5.99503C25.0871 4.96708 26.0415 4.05099 27.1081 3.28003Z"
                                          fill="white"/>
                                    <path d="M76.8309 10.8413C76.8309 8.81869 76.8309 8.44681 76.8037 8.02051C76.7764 7.56701 76.6704 7.35537 76.231 7.26164C76.125 7.23443 75.8978 7.22234 75.7099 7.22234C75.5645 7.22234 75.4827 7.19513 75.4827 7.1014C75.4827 7.00768 75.5766 6.98047 75.7766 6.98047C76.4825 6.98047 77.3218 7.01977 77.6036 7.01977C78.058 7.01977 79.07 6.98047 79.4821 6.98047C80.3213 6.98047 81.2151 7.05908 81.9332 7.55189C82.3059 7.80585 82.8391 8.48309 82.8391 9.37499C82.8391 10.3576 82.4271 11.2646 81.0788 12.353C82.2665 13.8436 83.1845 15.0257 83.9723 15.8511C84.7176 16.622 85.266 16.7158 85.466 16.7551C85.6114 16.7823 85.7326 16.7944 85.8387 16.7944C85.9447 16.7944 85.9993 16.8337 85.9993 16.9002C85.9993 17.006 85.9053 17.0332 85.7448 17.0332H84.4783C83.7329 17.0332 83.3997 16.9667 83.0512 16.7793C82.4786 16.4739 81.9726 15.8481 81.2242 14.8231C80.691 14.0915 80.0789 13.1875 79.9062 12.9879C79.8396 12.9093 79.7608 12.8942 79.6669 12.8942L78.5064 12.867C78.4398 12.867 78.4004 12.8942 78.4004 12.9728V13.1603C78.4004 14.3968 78.4004 15.449 78.4671 16.0053C78.5065 16.3923 78.5883 16.6825 78.9882 16.7369C79.1882 16.7641 79.4821 16.7914 79.6426 16.7914C79.7487 16.7914 79.8032 16.8307 79.8032 16.8972C79.8032 16.9909 79.7093 17.0302 79.5366 17.0302C78.764 17.0302 77.7763 16.9909 77.5763 16.9909C77.3218 16.9909 76.4825 17.0302 75.9493 17.0302C75.7766 17.0302 75.6826 16.9909 75.6826 16.8972C75.6826 16.8307 75.7372 16.7914 75.8947 16.7914C76.0947 16.7914 76.2553 16.7641 76.3734 16.7369C76.6401 16.6825 76.7067 16.3923 76.7613 16.0053C76.8279 15.4459 76.8279 14.3968 76.8279 13.1724V10.8413H76.8309ZM78.4034 11.8935C78.4034 12.0386 78.4307 12.093 78.5246 12.1323C78.8034 12.226 79.2033 12.2653 79.5366 12.2653C80.0699 12.2653 80.2426 12.2109 80.4819 12.0386C80.8819 11.7453 81.2697 11.1346 81.2697 10.0432C81.2697 8.15354 80.0153 7.60933 79.2306 7.60933C78.8973 7.60933 78.6579 7.62143 78.5246 7.66375C78.4307 7.69096 78.4034 7.74236 78.4034 7.8512V11.8935Z"
                                          fill="white"/>
                                    <path d="M85.2811 12.7579C85.2811 10.829 86.6415 8.32861 90.1986 8.32861C93.1587 8.32861 94.9979 9.96426 94.9979 12.5583C94.9979 15.1524 93.1042 17.1871 90.0804 17.1871C86.6688 17.1871 85.2811 14.7654 85.2811 12.7579ZM93.2527 12.9695C93.2527 10.4692 91.7468 8.92724 89.8532 8.92724C88.5473 8.92724 87.0142 9.6196 87.0142 12.4132C87.0142 14.7412 88.3473 16.5764 90.5591 16.5764C91.3863 16.5734 93.2527 16.1894 93.2527 12.9695Z"
                                          fill="white"/>
                                    <path d="M98.8519 14.1004C98.8519 13.4896 98.7458 13.2478 98.5853 12.9152C98.5065 12.7429 96.9067 10.2546 96.4916 9.65598C96.1977 9.2448 95.9584 8.97875 95.7311 8.85781C95.5857 8.7792 95.3857 8.71269 95.2373 8.71269C95.1433 8.71269 95.0646 8.67338 95.0646 8.59175C95.0646 8.51314 95.1434 8.48593 95.2918 8.48593C95.4918 8.48593 96.3704 8.51314 96.7583 8.51314C97.0097 8.51314 97.5581 8.48593 98.0914 8.48593C98.1974 8.48593 98.2641 8.51314 98.2641 8.59175C98.2641 8.68548 98.1853 8.68548 97.9975 8.73687C97.9035 8.76408 97.8369 8.81548 97.8369 8.90921C97.8369 9.00293 97.8914 9.13596 97.9823 9.2962C98.1944 9.64087 99.7275 12.2894 99.9275 12.6068C100.073 12.3407 101.5 9.91902 101.673 9.57435C101.794 9.32039 101.845 9.12084 101.845 8.97572C101.845 8.8699 101.791 8.76408 101.591 8.72176C101.485 8.69455 101.376 8.68245 101.376 8.58873C101.376 8.51012 101.442 8.48291 101.576 8.48291C101.964 8.48291 102.376 8.51012 102.721 8.51012C102.976 8.51012 103.748 8.48291 103.972 8.48291C104.106 8.48291 104.184 8.51012 104.184 8.57663C104.184 8.65524 104.09 8.70966 103.957 8.70966C103.836 8.70966 103.624 8.76408 103.451 8.84269C103.197 8.9606 103.091 9.06945 102.839 9.37481C102.451 9.82832 100.773 12.5131 100.561 12.9938C100.388 13.405 100.415 13.7527 100.415 14.1245V15.0285C100.415 15.216 100.415 15.6816 100.443 16.1593C100.47 16.4919 100.576 16.7035 100.921 16.7579C101.094 16.7851 101.348 16.7972 101.509 16.7972C101.642 16.7972 101.709 16.8637 101.709 16.9151C101.709 16.9937 101.615 17.0361 101.455 17.0361C100.721 17.0361 99.9366 16.9968 99.6154 16.9968C99.3215 16.9968 98.5368 17.0361 98.0974 17.0361C97.9369 17.0361 97.8429 17.0089 97.8429 16.9151C97.8429 16.8607 97.8975 16.7972 98.0308 16.7972C98.1914 16.7972 98.3368 16.7851 98.4429 16.7579C98.6822 16.7035 98.7761 16.4919 98.8034 16.1593C98.8428 15.6816 98.8428 15.216 98.8428 15.0285V14.1004H98.8519Z"
                                          fill="white"/>
                                    <path d="M105.69 14.1941C105.624 14.1941 105.611 14.2062 105.584 14.2727L104.957 15.7904C104.836 16.0686 104.784 16.3498 104.784 16.4828C104.784 16.6823 104.89 16.8033 105.251 16.8033H105.424C105.569 16.8033 105.596 16.8577 105.596 16.9212C105.596 17.0149 105.53 17.0421 105.408 17.0421C105.021 17.0421 104.475 17.0028 104.103 17.0028C103.981 17.0028 103.357 17.0421 102.742 17.0421C102.597 17.0421 102.53 17.0149 102.53 16.9212C102.53 16.8547 102.569 16.8033 102.663 16.8033C102.769 16.8033 102.903 16.7912 103.009 16.7912C103.542 16.7126 103.742 16.3649 103.981 15.7935L107.048 8.67641C107.181 8.35593 107.275 8.2229 107.393 8.2229C107.566 8.2229 107.62 8.32872 107.738 8.58268C108.017 9.20852 109.977 13.8373 110.723 15.5516C111.177 16.5765 111.51 16.7216 111.723 16.7609C111.895 16.7881 112.029 16.8002 112.162 16.8002C112.268 16.8002 112.322 16.8395 112.322 16.9182C112.322 17.0119 112.256 17.0391 111.817 17.0391C111.404 17.0391 110.55 17.0391 109.565 17.0119C109.353 16.9998 109.22 16.9998 109.22 16.9182C109.22 16.8516 109.247 16.8123 109.365 16.8002C109.444 16.7881 109.526 16.6793 109.471 16.5463L108.565 14.2727C108.538 14.2062 108.499 14.1941 108.444 14.1941H105.69V14.1941ZM108.196 13.5682C108.25 13.5682 108.263 13.541 108.25 13.5017L107.144 10.6295C107.132 10.5902 107.117 10.5237 107.09 10.5237C107.051 10.5237 107.035 10.5902 107.023 10.6295L105.89 13.4896C105.863 13.5441 105.89 13.5682 105.93 13.5682H108.196Z"
                                          fill="white"/>
                                    <path d="M115.18 13.7555C115.18 15.2037 115.18 15.9233 115.431 16.1349C115.631 16.3072 116.086 16.3738 116.992 16.3738C117.619 16.3738 118.07 16.3617 118.364 16.0533C118.51 15.9082 118.631 15.5877 118.658 15.376C118.67 15.2702 118.698 15.2037 118.791 15.2037C118.87 15.2037 118.897 15.3246 118.897 15.4577C118.897 15.5907 118.819 16.4282 118.725 16.7608C118.646 17.0147 118.591 17.0661 117.979 17.0661C117.14 17.0661 116.461 17.054 115.874 17.0268C115.286 17.0147 114.795 16.9996 114.313 16.9996C114.18 16.9996 113.925 17.0117 113.647 17.0117C113.368 17.0238 113.074 17.0389 112.835 17.0389C112.689 17.0389 112.608 16.9996 112.608 16.918C112.608 16.8635 112.647 16.8001 112.795 16.8001C112.968 16.8001 113.101 16.788 113.207 16.7608C113.447 16.7063 113.513 16.4947 113.553 16.1621C113.607 15.6844 113.607 14.7925 113.607 13.7555V11.7601C113.607 10.0458 113.607 9.72533 113.595 9.36555C113.568 8.97856 113.462 8.86065 113.089 8.75483C112.995 8.72762 112.85 8.71552 112.701 8.71552C112.568 8.71552 112.501 8.67622 112.501 8.59459C112.501 8.51598 112.58 8.48877 112.753 8.48877C113.298 8.48877 114.047 8.51598 114.365 8.51598C114.644 8.51598 115.604 8.48877 116.059 8.48877C116.231 8.48877 116.313 8.51598 116.313 8.59459C116.313 8.6732 116.246 8.71552 116.101 8.71552C115.968 8.71552 115.78 8.72762 115.646 8.75483C115.325 8.80925 115.234 8.96646 115.207 9.36555C115.18 9.72533 115.18 10.0428 115.18 11.7601V13.7555Z"
                                          fill="white"/>
                                    <path d="M125.23 10.8411C125.23 8.81844 125.23 8.44657 125.202 8.02027C125.175 7.56676 125.069 7.35512 124.63 7.2614C124.524 7.23419 124.297 7.2221 124.109 7.2221C123.963 7.2221 123.881 7.19489 123.881 7.10116C123.881 7.00744 123.975 6.98022 124.175 6.98022C124.881 6.98022 125.721 7.01953 126.002 7.01953C126.457 7.01953 127.469 6.98022 127.881 6.98022C128.72 6.98022 129.614 7.05883 130.335 7.55164C130.708 7.80561 131.241 8.48285 131.241 9.37475C131.241 10.3573 130.829 11.2644 129.481 12.3528C130.668 13.8433 131.586 15.0255 132.374 15.8508C133.119 16.6218 133.668 16.7155 133.868 16.7548C134.013 16.782 134.134 16.7941 134.241 16.7941C134.347 16.7941 134.401 16.8334 134.401 16.8999C134.401 17.0058 134.307 17.033 134.147 17.033H132.88C132.135 17.033 131.801 16.9665 131.453 16.779C130.88 16.4737 130.374 15.8478 129.626 14.8229C129.093 14.0912 128.481 13.1872 128.305 12.9877C128.238 12.9091 128.16 12.894 128.066 12.894L126.905 12.8668C126.839 12.8668 126.799 12.894 126.799 12.9726V13.16C126.799 14.3966 126.799 15.4487 126.866 16.005C126.905 16.392 126.987 16.6823 127.387 16.7367C127.587 16.7639 127.881 16.7911 128.041 16.7911C128.147 16.7911 128.202 16.8304 128.202 16.8969C128.202 16.9907 128.108 17.03 127.935 17.03C127.163 17.03 126.175 16.9907 125.975 16.9907C125.721 16.9907 124.881 17.03 124.348 17.03C124.175 17.03 124.081 16.9907 124.081 16.8969C124.081 16.8304 124.136 16.7911 124.294 16.7911C124.494 16.7911 124.654 16.7639 124.772 16.7367C125.039 16.6823 125.106 16.392 125.16 16.005C125.227 15.4457 125.227 14.3966 125.227 13.1721V10.8411H125.23ZM126.802 11.8932C126.802 12.0383 126.83 12.0928 126.923 12.1321C127.202 12.2258 127.602 12.2651 127.935 12.2651C128.469 12.2651 128.641 12.2107 128.881 12.0383C129.281 11.7451 129.665 11.1344 129.665 10.0429C129.665 8.1533 128.414 7.60909 127.626 7.60909C127.293 7.60909 127.054 7.62118 126.92 7.66351C126.826 7.69072 126.799 7.74212 126.799 7.85096V11.8932H126.802Z"
                                          fill="white"/>
                                    <path d="M135.849 11.76C135.849 10.0458 135.849 9.72531 135.837 9.36553C135.81 8.97853 135.704 8.86062 135.331 8.7548C135.237 8.72759 135.037 8.7155 134.865 8.7155C134.746 8.7155 134.665 8.67619 134.665 8.59456C134.665 8.51595 134.759 8.48874 134.931 8.48874C135.543 8.48874 136.292 8.51595 136.625 8.51595C136.998 8.51595 139.597 8.52805 139.825 8.51595C140.037 8.50386 140.224 8.46153 140.318 8.44944C140.385 8.43735 140.452 8.39502 140.506 8.39502C140.573 8.39502 140.585 8.44944 140.585 8.50084C140.585 8.57945 140.518 8.71248 140.491 9.2325C140.479 9.35343 140.452 9.84322 140.424 9.97625C140.412 10.0307 140.385 10.1637 140.291 10.1637C140.212 10.1637 140.197 10.1093 140.197 10.0186C140.197 9.93997 140.185 9.74043 140.118 9.6074C140.024 9.40785 139.931 9.24761 139.346 9.19622C139.146 9.16901 137.746 9.1418 137.507 9.1418C137.452 9.1418 137.428 9.1811 137.428 9.24761V12.0412C137.428 12.1077 137.44 12.1622 137.507 12.1622C137.773 12.1622 139.291 12.1622 139.561 12.1349C139.84 12.1077 140.012 12.0805 140.121 11.9626C140.215 11.884 140.255 11.8175 140.309 11.8175C140.364 11.8175 140.403 11.8719 140.403 11.9384C140.403 12.0049 140.376 12.1924 140.309 12.7638C140.282 12.9906 140.255 13.441 140.255 13.5227C140.255 13.6164 140.243 13.7766 140.134 13.7766C140.055 13.7766 140.028 13.7373 140.028 13.6829C140.015 13.562 140.015 13.4169 139.988 13.2717C139.921 13.045 139.776 12.8727 139.337 12.8333C139.122 12.8061 137.791 12.7789 137.498 12.7789C137.443 12.7789 137.431 12.8333 137.431 12.8999V13.8039C137.431 14.1908 137.419 15.1462 137.431 15.4788C137.458 16.2498 137.819 16.4221 139.016 16.4221C139.322 16.4221 139.815 16.41 140.121 16.277C140.415 16.144 140.549 15.9051 140.627 15.4395C140.655 15.3186 140.682 15.2672 140.761 15.2672C140.855 15.2672 140.867 15.4123 140.867 15.5332C140.867 15.7842 140.773 16.5582 140.706 16.7819C140.627 17.0752 140.518 17.0752 140.079 17.0752C139.2 17.0752 138.494 17.0631 137.919 17.0359C137.346 17.0238 136.907 17.0086 136.558 17.0086C136.425 17.0086 136.171 17.0207 135.892 17.0207C135.613 17.0328 135.319 17.0479 135.08 17.0479C134.934 17.0479 134.853 17.0086 134.853 16.927C134.853 16.8726 134.892 16.8091 135.04 16.8091C135.213 16.8091 135.346 16.797 135.452 16.7698C135.692 16.7154 135.758 16.5037 135.798 16.1712C135.852 15.6935 135.852 14.8016 135.852 13.7646V11.76H135.849Z"
                                          fill="white"/>
                                    <path d="M142.064 16.8938C141.876 16.8152 141.836 16.7607 141.836 16.5068C141.836 15.8961 141.891 15.1886 141.903 15.0042C141.903 14.8318 141.958 14.7109 142.049 14.7109C142.155 14.7109 142.17 14.8167 142.17 14.8983C142.17 15.0435 142.209 15.2853 142.276 15.4849C142.53 16.3223 143.409 16.6035 144.142 16.6035C145.154 16.6035 145.769 15.9656 145.769 15.1674C145.769 14.6746 145.648 14.1848 144.609 13.5711L143.93 13.172C142.542 12.3617 142.091 11.6028 142.091 10.6051C142.091 9.22042 143.424 8.33154 145.051 8.33154C145.812 8.33154 146.412 8.43736 146.718 8.51899C146.824 8.5462 146.878 8.58551 146.878 8.66411C146.878 8.80924 146.839 9.12972 146.839 10.0216C146.839 10.2605 146.784 10.3814 146.693 10.3814C146.615 10.3814 146.572 10.3149 146.572 10.1819C146.572 10.076 146.518 9.72835 146.266 9.4381C146.093 9.22646 145.721 8.90599 144.96 8.90599C144.121 8.90599 143.36 9.34438 143.36 10.1153C143.36 10.6202 143.548 11.0193 144.6 11.6059L145.078 11.8719C146.624 12.7245 147.105 13.5862 147.105 14.6111C147.105 15.4486 146.787 16.1289 145.933 16.7275C145.372 17.1266 144.6 17.1931 143.972 17.1931C143.291 17.187 142.57 17.1205 142.064 16.8938Z"
                                          fill="white"/>
                                    <path d="M148.623 12.7579C148.623 10.829 149.984 8.32861 153.541 8.32861C156.501 8.32861 158.34 9.96426 158.34 12.5583C158.34 15.1524 156.446 17.1871 153.422 17.1871C150.008 17.1871 148.623 14.7654 148.623 12.7579ZM156.595 12.9695C156.595 10.4692 155.089 8.92724 153.195 8.92724C151.889 8.92724 150.356 9.6196 150.356 12.4132C150.356 14.7412 151.689 16.5764 153.901 16.5764C154.728 16.5734 156.595 16.1894 156.595 12.9695Z"
                                          fill="white"/>
                                    <path d="M160.527 11.7601C160.527 10.0458 160.527 9.72533 160.515 9.36555C160.488 8.97856 160.382 8.86065 160.009 8.75483C159.915 8.72762 159.715 8.71552 159.543 8.71552C159.422 8.71552 159.343 8.67622 159.343 8.59459C159.343 8.51598 159.437 8.48877 159.609 8.48877C160.221 8.48877 160.97 8.51598 161.209 8.51598C161.609 8.51598 162.676 8.48877 163.036 8.48877C163.782 8.48877 164.636 8.55528 165.263 8.96646C165.596 9.19322 166.09 9.76464 166.09 10.5235C166.09 11.361 165.612 12.1078 164.463 13.0238C165.502 14.2997 166.33 15.3246 167.036 16.0291C167.69 16.6821 168.102 16.7335 168.287 16.7728C168.408 16.8001 168.475 16.8001 168.566 16.8001C168.66 16.8001 168.711 16.8666 168.711 16.918C168.711 17.0117 168.632 17.0389 168.484 17.0389H167.363C166.708 17.0389 166.39 16.9724 166.084 16.8121C165.578 16.5582 165.139 16.0261 164.484 15.1493C164.018 14.5386 163.524 13.7797 163.379 13.6074C163.312 13.5408 163.245 13.5288 163.163 13.5288L162.112 13.5015C162.058 13.5015 162.018 13.5288 162.018 13.5953V13.7555C162.018 14.8046 162.03 15.6844 162.085 16.1621C162.124 16.4947 162.179 16.7063 162.539 16.7608C162.712 16.788 162.966 16.8001 163.112 16.8001C163.206 16.8001 163.257 16.8666 163.257 16.918C163.257 16.9966 163.163 17.0389 163.018 17.0389C162.339 17.0389 161.364 16.9996 161.191 16.9996C160.964 16.9996 160.218 17.0389 159.752 17.0389C159.606 17.0389 159.525 16.9996 159.525 16.918C159.525 16.8635 159.564 16.8001 159.712 16.8001C159.885 16.8001 160.018 16.788 160.124 16.7608C160.364 16.7063 160.43 16.4947 160.47 16.1621C160.524 15.6844 160.524 14.7925 160.524 13.7555V11.7601H160.527ZM162.018 12.6369C162.018 12.7578 162.045 12.7971 162.124 12.8364C162.379 12.915 162.724 12.9422 163.018 12.9422C163.485 12.9422 163.645 12.9029 163.845 12.7548C164.206 12.5008 164.606 12.011 164.606 11.0798C164.606 9.48346 163.512 9.07228 162.821 9.07228C162.527 9.07228 162.248 9.08438 162.127 9.11159C162.048 9.1388 162.021 9.1781 162.021 9.27183V12.6369H162.018Z"
                                          fill="white"/>
                                    <path d="M170.723 9.17828L168.978 9.21758C168.299 9.22968 168.017 9.31131 167.845 9.56225C167.723 9.72249 167.672 9.86761 167.645 9.94924C167.617 10.043 167.59 10.0944 167.511 10.0944C167.433 10.0944 167.405 10.0278 167.405 9.90691C167.405 9.71946 167.632 8.63105 167.657 8.53732C167.684 8.3922 167.723 8.32568 167.79 8.32568C167.884 8.32568 168.002 8.41941 168.296 8.45871C168.641 8.49802 169.081 8.51313 169.469 8.51313H174.228C174.601 8.51313 174.856 8.48592 175.028 8.45871C175.216 8.4315 175.307 8.40429 175.346 8.40429C175.428 8.40429 175.44 8.47081 175.44 8.64314C175.44 8.88199 175.413 9.71946 175.413 10.0127C175.401 10.1337 175.374 10.2002 175.307 10.2002C175.213 10.2002 175.186 10.1458 175.174 9.97343L175.162 9.85249C175.134 9.55922 174.828 9.21456 173.777 9.19944L172.298 9.17223V13.7557C172.298 14.7927 172.311 15.6846 172.365 16.1774C172.405 16.4979 172.471 16.7095 172.82 16.7639C172.98 16.7912 173.247 16.8033 173.42 16.8033C173.553 16.8033 173.607 16.8698 173.607 16.9212C173.607 16.9998 173.513 17.0421 173.38 17.0421C172.608 17.0421 171.82 17.0028 171.486 17.0028C171.22 17.0028 170.42 17.0421 169.953 17.0421C169.808 17.0421 169.726 17.0028 169.726 16.9212C169.726 16.8667 169.766 16.8033 169.914 16.8033C170.087 16.8033 170.232 16.7912 170.326 16.7639C170.565 16.7095 170.632 16.4979 170.671 16.1653C170.726 15.6876 170.726 14.7957 170.726 13.7587V9.17828H170.723Z"
                                          fill="white"/>
                                    <path d="M176.961 16.8938C176.774 16.8152 176.734 16.7607 176.734 16.5068C176.734 15.8961 176.789 15.1886 176.801 15.0042C176.801 14.8318 176.855 14.7109 176.946 14.7109C177.052 14.7109 177.067 14.8167 177.067 14.8983C177.067 15.0435 177.107 15.2853 177.173 15.4849C177.428 16.3223 178.307 16.6035 179.04 16.6035C180.052 16.6035 180.667 15.9656 180.667 15.1674C180.667 14.6746 180.546 14.1848 179.506 13.5711L178.828 13.172C177.44 12.3617 176.989 11.6028 176.989 10.6051C176.989 9.22042 178.322 8.33154 179.949 8.33154C180.709 8.33154 181.309 8.43736 181.615 8.51899C181.721 8.5462 181.776 8.58551 181.776 8.66411C181.776 8.80924 181.736 9.12972 181.736 10.0216C181.736 10.2605 181.682 10.3814 181.591 10.3814C181.512 10.3814 181.47 10.3149 181.47 10.1819C181.47 10.076 181.415 9.72835 181.164 9.4381C180.991 9.22646 180.618 8.90599 179.858 8.90599C179.019 8.90599 178.258 9.34438 178.258 10.1153C178.258 10.6202 178.446 11.0193 179.497 11.6059L179.976 11.8719C181.521 12.7245 182.003 13.5862 182.003 14.6111C182.003 15.4486 181.685 16.1289 180.83 16.7275C180.27 17.1266 179.497 17.1931 178.87 17.1931C178.188 17.187 177.467 17.1205 176.961 16.8938Z"
                                          fill="white"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0">
                                        <rect width="182" height="28.9731" fill="white"
                                              transform="translate(0 0.513428)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <div class="glide__slide">
                            <svg width="120" height="60" viewBox="0 0 120 60" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M108.35 39.9999C108.264 39.9197 108.196 39.8219 108.152 39.7132C108.107 39.6045 108.086 39.4874 108.09 39.3699C108.085 39.2538 108.106 39.138 108.151 39.0309C108.196 38.9237 108.264 38.8278 108.35 38.7499C108.43 38.6675 108.527 38.6028 108.634 38.5597C108.741 38.5167 108.855 38.4963 108.97 38.4999C109.088 38.4971 109.205 38.5177 109.315 38.5607C109.425 38.6036 109.525 38.6679 109.61 38.7499C109.695 38.829 109.762 38.9252 109.807 39.032C109.851 39.1389 109.873 39.2541 109.87 39.3699C109.872 39.4871 109.85 39.6034 109.805 39.7118C109.76 39.8201 109.694 39.9182 109.61 39.9999C109.525 40.0819 109.425 40.1462 109.315 40.1892C109.205 40.2321 109.088 40.2527 108.97 40.2499C108.855 40.2535 108.741 40.2331 108.634 40.1901C108.527 40.1471 108.43 40.0823 108.35 39.9999ZM109.72 39.3699C109.723 39.2711 109.705 39.1728 109.669 39.0811C109.632 38.9893 109.576 38.9062 109.506 38.8368C109.436 38.7673 109.352 38.7131 109.26 38.6776C109.167 38.642 109.069 38.6258 108.97 38.6299C108.774 38.6299 108.586 38.7079 108.447 38.8467C108.308 38.9854 108.23 39.1737 108.23 39.3699C108.23 39.5662 108.308 39.7544 108.447 39.8932C108.586 40.0319 108.774 40.1099 108.97 40.1099C109.073 40.1147 109.176 40.0972 109.272 40.0587C109.368 40.0201 109.455 39.9614 109.526 39.8864C109.597 39.8115 109.651 39.7221 109.685 39.6243C109.718 39.5266 109.73 39.4228 109.72 39.3199V39.3699ZM108.66 39.8599V38.8599H109C109.042 38.8571 109.084 38.8631 109.123 38.8775C109.163 38.892 109.199 38.9145 109.229 38.9438C109.259 38.973 109.283 39.0082 109.299 39.0472C109.314 39.0861 109.322 39.1279 109.32 39.1699C109.323 39.2309 109.309 39.2916 109.279 39.3448C109.249 39.3979 109.204 39.4414 109.15 39.4699L109.39 39.8699H109.21L108.98 39.4999H108.8V39.8699L108.66 39.8599ZM108.81 39.3499H109.01C109.032 39.3486 109.054 39.343 109.074 39.3332C109.095 39.3235 109.113 39.3099 109.127 39.2931C109.142 39.2764 109.154 39.2569 109.161 39.2358C109.168 39.2146 109.171 39.1922 109.17 39.1699C109.172 39.1472 109.168 39.1245 109.16 39.1032C109.152 39.0819 109.14 39.0625 109.124 39.0464C109.107 39.0304 109.088 39.0179 109.067 39.0099C109.046 39.0018 109.023 38.9984 109 38.9999H108.8L108.81 39.3499Z"
                                      fill="white"/>
                                <path d="M69.76 20.07L70.37 19.95V19.73C70.18 19.84 70 20 69.76 20.07Z" fill="white"/>
                                <path d="M59.72 9.55997V10.05L60.9 9.99997V9.63997C60.8936 9.41539 60.8425 9.19432 60.7496 8.98972C60.6568 8.78512 60.5241 8.60108 60.3593 8.44838C60.1945 8.29567 60.0009 8.17737 59.7898 8.10037C59.5787 8.02338 59.3544 7.98925 59.13 7.99997L56.13 8.12997C55.6755 8.15321 55.2477 8.35158 54.9363 8.68346C54.6249 9.01534 54.4542 9.45493 54.46 9.90997V10.78L55.64 10.56V9.72997C55.6408 9.65584 55.6592 9.58296 55.6936 9.51728C55.728 9.45161 55.7775 9.395 55.8379 9.3521C55.8984 9.30919 55.9682 9.28119 56.0415 9.2704C56.1149 9.2596 56.1897 9.26631 56.26 9.28997C57.1794 9.62091 58.192 9.57782 59.08 9.16997C59.1472 9.1386 59.2211 9.12432 59.2952 9.12842C59.3693 9.13252 59.4412 9.15486 59.5045 9.19346C59.5678 9.23206 59.6207 9.28572 59.6583 9.34966C59.6959 9.41361 59.7171 9.48585 59.72 9.55997Z"
                                      fill="white"/>
                                <path d="M68.55 24.1899C68.3264 24.1425 68.0985 24.119 67.87 24.1199C67.74 24.1199 67.6199 24.1999 67.4899 24.2199C67.4256 24.236 67.3583 24.2362 67.2939 24.2205C67.2294 24.2048 67.1697 24.1737 67.12 24.1299C66.8015 24.2526 66.4608 24.3071 66.12 24.2899C65.9609 24.265 65.799 24.265 65.6399 24.2899C65.5299 24.2899 65.43 24.3899 65.32 24.4199C65.2706 24.4359 65.2179 24.4387 65.167 24.4282C65.1162 24.4177 65.069 24.3942 65.0299 24.3599C64.72 24.6841 64.3127 24.8983 63.8699 24.9699C63.432 25.0215 62.9906 25.0382 62.5499 25.0199C62.3165 25.0094 62.0829 25.0399 61.86 25.1099C61.62 25.1999 61.4 25.3799 61.15 25.4599C60.7947 25.5196 60.4301 25.4887 60.09 25.3699C59.8427 25.3021 59.5854 25.2784 59.33 25.2999C59.1903 25.3147 59.0496 25.3147 58.91 25.2999C58.8396 25.294 58.7717 25.2708 58.7124 25.2325C58.6531 25.1941 58.6042 25.1417 58.57 25.0799C58.2642 25.3162 57.8863 25.4398 57.5 25.4299C57.2639 25.4549 57.026 25.4549 56.79 25.4299C56.4336 25.3298 56.0687 25.2628 55.7 25.2299C55.4324 25.2871 55.162 25.3305 54.8899 25.3599C54.7499 25.3599 54.6199 25.3099 54.4799 25.2899C54.0799 25.2299 53.67 25.2899 53.27 25.2899C52.9061 25.2067 52.5328 25.1731 52.16 25.1899C52.1669 25.2211 52.1649 25.2535 52.1543 25.2835C52.1437 25.3136 52.1249 25.3401 52.0999 25.3599C52.0484 25.3845 51.9949 25.4045 51.9399 25.4199C51.8099 25.4699 51.7 25.5999 51.56 25.6499C51.2 25.7699 50.86 25.2699 50.5 25.3399C50.2308 25.5709 49.9011 25.7201 49.5499 25.7699C49.3968 25.76 49.2431 25.76 49.09 25.7699C48.93 25.7699 48.79 25.8699 48.63 25.8799C48.4321 25.8748 48.2348 25.8548 48.04 25.8199C47.72 25.8199 47.42 25.9599 47.11 25.9199H46.95L47.0099 26.3599C47.0283 27.1672 47.364 27.9347 47.9442 28.4962C48.5244 29.0577 49.3025 29.368 50.11 29.3599H67.11C69.81 29.3599 69.8099 27.2699 69.8099 27.2699C69.8099 27.2699 69.9099 25.9499 70.0599 24.1099H69.83C69.37 23.9999 69 24.2099 68.55 24.1899Z"
                                      fill="white"/>
                                <path d="M46.0699 19.6099C46.2799 21.1299 46.6999 23.7699 46.8799 25.1299C47.2699 25.1299 47.5599 24.8999 47.9499 24.8899C48.1899 24.8899 48.3999 25.0299 48.7599 24.9499C48.9661 24.9469 49.1716 24.9738 49.3699 25.0299C49.7499 25.0299 50.0799 24.7799 50.4599 24.6899C50.5299 24.6899 50.8299 24.7999 50.9099 24.8299C51.4699 24.9999 51.6799 24.6799 52.1399 24.6499C52.6186 24.6412 53.0971 24.6746 53.5699 24.7499C53.846 24.7749 54.1238 24.7749 54.3999 24.7499C54.5999 24.7499 54.7999 24.6699 54.9999 24.6499C55.1631 24.6396 55.3268 24.6396 55.4899 24.6499H56.8699C57.377 24.5996 57.8885 24.6198 58.3899 24.7099C58.2599 24.7099 58.5299 24.5499 58.5299 24.5499C58.9499 24.5499 59.3799 24.6999 59.7999 24.6899C59.9965 24.6998 60.1934 24.6998 60.3899 24.6899C60.7936 24.6113 61.1913 24.5044 61.5799 24.3699C62.6817 24.0419 63.8325 23.9099 64.9799 23.9799C65.165 23.8797 65.3699 23.8217 65.5799 23.8099C65.7199 23.8099 65.8599 23.8099 65.9999 23.8099C66.1399 23.8099 66.3899 23.7099 66.5899 23.6699C66.6834 23.6459 66.781 23.6425 66.8759 23.6598C66.9708 23.677 67.0609 23.7146 67.1399 23.7699C67.3028 23.82 67.477 23.82 67.6399 23.7699C68.1499 23.6799 68.6399 23.5999 69.1899 23.5399C69.3429 23.5253 69.497 23.5253 69.6499 23.5399H70.0799C70.1499 22.6399 70.1599 22.5399 70.2499 21.4799L46.0699 19.6099Z"
                                      fill="white"/>
                                <path d="M70.5201 18.2699C70.5201 18.0499 70.5201 17.8199 70.5901 17.5999C69.6888 17.9532 68.8381 18.4239 68.0601 18.9999C68.8701 18.6999 69.6901 18.4699 70.5201 18.2699Z"
                                      fill="white"/>
                                <path d="M65.0601 18.4699C66.7181 17.125 68.6773 16.202 70.7701 15.7799C70.7701 15.2899 70.8801 14.8299 70.9301 14.4199C68.5247 14.9632 66.4218 16.4141 65.0601 18.4699Z"
                                      fill="white"/>
                                <path d="M66.4401 18.49C67.751 17.7342 69.1763 17.1971 70.6601 16.9L70.7501 16.01C69.0864 16.3579 67.5768 17.2265 66.4401 18.49Z"
                                      fill="white"/>
                                <path d="M62.1899 18.21C64.8199 16.32 67.7799 14.63 70.9499 14.21C70.9738 13.9038 70.9738 13.5962 70.9499 13.29C69.2276 13.4547 67.5588 13.9775 66.0502 14.8247C64.5417 15.672 63.2269 16.825 62.1899 18.21Z"
                                      fill="white"/>
                                <path d="M45.77 17.3699C45.79 17.147 45.79 16.9228 45.77 16.6999C45.762 16.4155 45.7386 16.1317 45.7 15.8499C45.689 15.7153 45.669 15.5817 45.64 15.4499C46.1903 16.8749 46.3893 18.4116 46.22 19.9299C46.569 18.7361 46.6611 17.4818 46.49 16.2499C46.4686 16.1016 46.4386 15.9546 46.4 15.8099C46.7643 16.6279 47.0392 17.4828 47.22 18.3599C47.4635 19.1453 47.5451 19.972 47.46 20.7899C47.9658 19.3905 47.9445 17.8547 47.4 16.4699C48.0445 17.8234 48.4956 19.2608 48.74 20.7399C48.8149 21.1431 48.8149 21.5567 48.74 21.9599C48.9864 20.8221 48.9313 19.6397 48.58 18.5299C48.5025 18.1619 48.3955 17.8007 48.26 17.4499C49.0349 18.9296 49.4268 20.5798 49.4 22.2499C49.6723 21.1247 49.6378 19.9471 49.3 18.8399C48.9606 17.7363 48.4365 16.6982 47.75 15.7699C47.31 15.1399 46.12 13.9399 46.09 13.8699C45.8283 14.1918 45.6414 14.5678 45.5428 14.9707C45.4443 15.3737 45.4365 15.7935 45.52 16.1999L45.7 17.4599C45.7 17.4599 45.7 17.3799 45.7 17.3299L45.77 17.3699Z"
                                      fill="white"/>
                                <path d="M47.14 13.17C48.2342 14.3714 49.6559 15.2265 51.23 15.63C50.3919 15.2133 49.6678 14.599 49.12 13.84C48.84 13.49 48.57 13.12 48.29 12.75L47.48 13.03L47.14 13.17Z"
                                      fill="white"/>
                                <path d="M52.9401 13.2099C52.4532 12.6854 51.8902 12.237 51.2701 11.8799L50.6801 12.0399C51.5208 12.231 52.2987 12.6337 52.9401 13.2099Z"
                                      fill="white"/>
                                <path d="M50.16 13.68C51.09 14.0886 51.9611 14.62 52.75 15.26C52.0848 14.5913 51.4604 13.8834 50.88 13.14C50.5838 12.807 50.248 12.5114 49.88 12.26C49.4 12.39 48.97 12.53 48.59 12.65C49.0927 13.0238 49.6169 13.3677 50.16 13.68Z"
                                      fill="white"/>
                                <path d="M49.89 16.2599C49.169 15.9344 48.5701 15.3881 48.18 14.6999L47.1 13.1899C46.8351 13.3144 46.5893 13.4761 46.37 13.6699C47.2146 14.9085 48.4562 15.8221 49.89 16.2599Z"
                                      fill="white"/>
                                <path d="M45.25 16.2501C45.0875 15.4947 45.2167 14.7057 45.6118 14.0417C46.0069 13.3776 46.6386 12.8876 47.38 12.6701C47.73 12.5501 48.38 12.3301 49.27 12.0601C48.7842 11.3918 48.1351 10.8593 47.3847 10.5135C46.6343 10.1677 45.8078 10.0201 44.9841 10.085C44.1604 10.1498 43.3672 10.4249 42.6801 10.8838C41.9931 11.3428 41.4353 11.9703 41.0601 12.7064C40.6848 13.4425 40.5047 14.2626 40.5369 15.0882C40.569 15.9138 40.8125 16.7173 41.2439 17.422C41.6753 18.1266 42.2802 18.7088 43.0009 19.1129C43.7215 19.517 44.5338 19.7295 45.36 19.7301H45.75C45.48 17.7901 45.26 16.2801 45.25 16.2501Z"
                                      fill="white"/>
                                <path d="M10.13 35.7599C10.13 35.7297 10.136 35.6997 10.1475 35.6718C10.1591 35.6439 10.176 35.6186 10.1974 35.5972C10.2187 35.5759 10.2441 35.5589 10.272 35.5474C10.2999 35.5358 10.3298 35.5299 10.36 35.5299H13.62C13.9588 35.5246 14.2954 35.5861 14.6104 35.7109C14.9255 35.8356 15.2128 36.0213 15.4561 36.2571C15.6994 36.493 15.8939 36.7745 16.0284 37.0855C16.1629 37.3966 16.2348 37.731 16.24 38.0699C16.2239 38.605 16.0448 39.1225 15.7267 39.5531C15.4087 39.9838 14.9667 40.3071 14.46 40.4799L16.11 43.4799C16.1333 43.5149 16.146 43.5559 16.1467 43.5979C16.1473 43.64 16.136 43.6813 16.1139 43.7171C16.0918 43.7529 16.0599 43.7816 16.022 43.7998C15.9841 43.818 15.9417 43.825 15.9 43.8199H15C14.9481 43.8227 14.8966 43.8099 14.852 43.7832C14.8074 43.7565 14.7719 43.717 14.75 43.6699L13.18 40.5699H11.37V43.5699C11.3652 43.6283 11.3391 43.6829 11.2967 43.7235C11.2543 43.764 11.1986 43.7876 11.14 43.7899H10.36C10.3007 43.7899 10.2437 43.7671 10.2008 43.7261C10.1579 43.6851 10.1326 43.6291 10.13 43.5699V35.7599ZM13.53 39.5699C13.9191 39.5672 14.2914 39.4115 14.5666 39.1364C14.8417 38.8613 14.9974 38.4889 15 38.0999C14.9896 37.7196 14.8312 37.3585 14.5585 37.0932C14.2858 36.828 13.9204 36.6797 13.54 36.6799H11.39V39.5699H13.53Z"
                                      fill="white"/>
                                <path d="M19.8699 38.24C20.4384 38.24 20.9941 38.4089 21.4665 38.7251C21.9389 39.0414 22.3067 39.4908 22.5233 40.0164C22.74 40.542 22.7956 41.12 22.6832 41.6773C22.5709 42.2346 22.2955 42.7459 21.8922 43.1465C21.4888 43.5471 20.9755 43.8188 20.4175 43.9273C19.8595 44.0357 19.2818 43.9761 18.7577 43.7558C18.2337 43.5355 17.7868 43.1645 17.4739 42.6899C17.1609 42.2153 16.996 41.6585 16.9999 41.09C17.0013 40.7144 17.0765 40.3428 17.2215 39.9963C17.3664 39.6498 17.5782 39.3353 17.8447 39.0706C18.1112 38.806 18.4272 38.5964 18.7747 38.4539C19.1222 38.3114 19.4944 38.2387 19.8699 38.24ZM19.8699 42.84C20.2169 42.858 20.5613 42.7716 20.8588 42.5921C21.1563 42.4126 21.3933 42.1482 21.5391 41.8328C21.685 41.5175 21.7331 41.1657 21.6773 40.8228C21.6215 40.4798 21.4643 40.1615 21.2259 39.9087C20.9876 39.6559 20.679 39.4802 20.3399 39.4043C20.0009 39.3285 19.6468 39.3558 19.3235 39.4829C19.0001 39.61 18.7222 39.831 18.5255 40.1174C18.3288 40.4038 18.2224 40.7426 18.2199 41.09C18.2077 41.3146 18.2413 41.5394 18.3186 41.7506C18.396 41.9618 18.5154 42.1551 18.6697 42.3188C18.824 42.4825 19.01 42.6131 19.2163 42.7027C19.4226 42.7923 19.645 42.839 19.8699 42.84Z"
                                      fill="white"/>
                                <path d="M23.33 38.71C23.3097 38.6714 23.3003 38.6279 23.3029 38.5844C23.3055 38.5408 23.3199 38.4987 23.3446 38.4627C23.3692 38.4267 23.4033 38.3981 23.443 38.38C23.4827 38.362 23.5266 38.355 23.57 38.36H24.36C24.41 38.3604 24.4589 38.3746 24.5012 38.4011C24.5436 38.4276 24.5778 38.4653 24.6 38.51L25.88 42.27L27.44 38.51C27.49 38.38 27.59 38.36 27.73 38.36H28.47C28.5144 38.3508 28.5606 38.3549 28.6026 38.3718C28.6447 38.3888 28.6809 38.4177 28.7065 38.4552C28.7322 38.4926 28.7462 38.5367 28.7468 38.5821C28.7474 38.6274 28.7346 38.6719 28.71 38.71L25.36 46.5C25.3396 46.5458 25.3077 46.5856 25.2674 46.6154C25.2271 46.6452 25.1798 46.664 25.13 46.67H24.36C24.3149 46.6739 24.2696 46.6654 24.2289 46.6455C24.1882 46.6256 24.1537 46.595 24.1291 46.557C24.1044 46.519 24.0906 46.475 24.089 46.4298C24.0874 46.3845 24.0981 46.3397 24.12 46.3L25.24 43.65L23.33 38.71Z"
                                      fill="white"/>
                                <path d="M31.55 40.3801C31.9253 40.3863 32.2983 40.44 32.66 40.5401C32.66 39.6801 32.47 39.2801 31.78 39.2801C31.2541 39.2971 30.7327 39.3846 30.23 39.5401C30.195 39.5489 30.1584 39.55 30.1229 39.5434C30.0874 39.5367 30.0538 39.5224 30.0243 39.5015C29.9949 39.4806 29.9703 39.4536 29.9523 39.4222C29.9343 39.3909 29.9233 39.3561 29.92 39.3201L29.81 38.8701C29.7977 38.8373 29.7928 38.8023 29.7955 38.7674C29.7982 38.7325 29.8084 38.6987 29.8256 38.6682C29.8427 38.6377 29.8663 38.6114 29.8947 38.591C29.9231 38.5706 29.9557 38.5566 29.99 38.5501C30.605 38.3413 31.2505 38.2365 31.9 38.2401C33.67 38.2401 33.84 39.3001 33.84 40.6601V43.5801C33.8375 43.6482 33.8093 43.7129 33.7611 43.7612C33.7129 43.8094 33.6482 43.8376 33.58 43.8401H33.18C33.07 43.8401 33.01 43.7901 32.95 43.6501L32.82 43.2801C32.5961 43.5014 32.3306 43.6763 32.0389 43.7947C31.7471 43.9131 31.4349 43.9727 31.12 43.9701C30.8779 43.9837 30.6358 43.9453 30.4097 43.8576C30.1837 43.7698 29.9791 43.6348 29.8095 43.4615C29.64 43.2881 29.5095 43.0806 29.4268 42.8527C29.3441 42.6248 29.3111 42.3818 29.33 42.1401C29.33 41.1401 30.12 40.3801 31.55 40.3801ZM31.37 43.0001C31.6195 42.9893 31.8635 42.9236 32.0847 42.8078C32.306 42.692 32.499 42.5289 32.65 42.3301V41.4201C32.3335 41.288 31.9929 41.2233 31.65 41.2301C31.01 41.2301 30.51 41.5601 30.51 42.1301C30.5012 42.2457 30.5173 42.3619 30.5572 42.4708C30.5972 42.5797 30.6601 42.6787 30.7416 42.7612C30.8231 42.8437 30.9214 42.9077 31.0299 42.9489C31.1383 42.9901 31.2543 43.0076 31.37 43.0001Z"
                                      fill="white"/>
                                <path d="M35.51 35.79C35.5125 35.7219 35.5407 35.6572 35.5889 35.6089C35.6371 35.5607 35.7018 35.5325 35.77 35.53H36.44C36.5085 35.5344 36.5732 35.5629 36.6227 35.6105C36.6721 35.6582 36.7031 35.7218 36.71 35.79V43.58C36.7051 43.6491 36.6748 43.7139 36.6249 43.7619C36.5751 43.8099 36.5092 43.8377 36.44 43.84H35.77C35.7011 43.84 35.6349 43.8126 35.5862 43.7639C35.5374 43.7151 35.51 43.649 35.51 43.58V35.79Z"
                                      fill="white"/>
                                <path d="M41.55 35.7599C41.55 35.6989 41.5743 35.6404 41.6174 35.5972C41.6605 35.5541 41.719 35.5299 41.78 35.5299H45C45.3389 35.5246 45.6754 35.5861 45.9905 35.7109C46.3055 35.8356 46.5929 36.0213 46.8362 36.2571C47.0795 36.493 47.2739 36.7745 47.4084 37.0855C47.5429 37.3966 47.6148 37.731 47.62 38.0699C47.6039 38.605 47.4248 39.1225 47.1068 39.5531C46.7887 39.9838 46.3468 40.3071 45.84 40.4799L47.4901 43.4799C47.5133 43.5149 47.526 43.5559 47.5267 43.5979C47.5274 43.64 47.516 43.6813 47.4939 43.7171C47.4718 43.7529 47.4399 43.7816 47.402 43.7998C47.3641 43.818 47.3218 43.825 47.28 43.8199H46.3801C46.3282 43.8227 46.2766 43.8099 46.232 43.7832C46.1875 43.7565 46.152 43.717 46.1301 43.6699L44.5601 40.5699H42.7901V43.5699C42.7852 43.6283 42.7591 43.6829 42.7168 43.7235C42.6744 43.764 42.6186 43.7876 42.5601 43.7899H41.78C41.7207 43.7899 41.6637 43.7671 41.6208 43.7261C41.578 43.6851 41.5526 43.6291 41.55 43.5699V35.7599ZM45 39.5699C45.3874 39.5646 45.7572 39.4078 46.0302 39.1329C46.3031 38.8581 46.4575 38.4872 46.46 38.0999C46.4496 37.7196 46.2912 37.3585 46.0185 37.0932C45.7459 36.828 45.3804 36.6797 45 36.6799H42.8101V39.5699H45Z"
                                      fill="white"/>
                                <path d="M51.2401 38.24C51.5741 38.2304 51.9065 38.2889 52.2172 38.412C52.5278 38.5351 52.8101 38.7202 53.0468 38.956C53.2836 39.1918 53.4698 39.4734 53.5941 39.7836C53.7185 40.0937 53.7783 40.4259 53.7701 40.76C53.7701 40.85 53.7701 41.04 53.7701 41.14C53.765 41.2027 53.7365 41.2613 53.6901 41.304C53.6438 41.3466 53.583 41.3702 53.5201 41.37H49.66C49.6908 41.7855 49.8804 42.1732 50.1895 42.4526C50.4987 42.7319 50.9036 42.8814 51.32 42.87C51.8118 42.8715 52.2902 42.7097 52.68 42.41C52.8 42.32 52.9 42.29 53 42.41L53.32 42.91C53.42 43.03 53.47 43.13 53.32 43.28C52.7471 43.7208 52.0429 43.9567 51.32 43.95C50.5895 43.9068 49.903 43.5861 49.401 43.0536C48.899 42.521 48.6194 41.8168 48.6194 41.085C48.6194 40.3531 48.899 39.6489 49.401 39.1164C49.903 38.5838 50.5895 38.2632 51.32 38.22L51.2401 38.24ZM52.5801 40.49C52.5724 40.3183 52.5307 40.1499 52.4576 39.9944C52.3844 39.8389 52.2811 39.6995 52.1537 39.5842C52.0263 39.4689 51.8773 39.38 51.7153 39.3226C51.5534 39.2652 51.3816 39.2405 51.21 39.25C50.8502 39.227 50.4953 39.3427 50.2182 39.5733C49.941 39.8039 49.7628 40.132 49.7201 40.49H52.5801Z"
                                      fill="white"/>
                                <path d="M54.8 43.41C54.775 43.3982 54.7526 43.3816 54.7341 43.3611C54.7155 43.3407 54.7012 43.3167 54.6919 43.2907C54.6826 43.2647 54.6786 43.2371 54.68 43.2096C54.6813 43.182 54.6882 43.1549 54.7 43.13L54.95 42.62C54.967 42.5895 54.9905 42.5631 55.0188 42.5426C55.0471 42.5221 55.0795 42.5081 55.1138 42.5014C55.148 42.4947 55.1833 42.4956 55.2172 42.504C55.2511 42.5124 55.2828 42.5281 55.31 42.55C55.7233 42.8103 56.2016 42.9489 56.69 42.95C57.16 42.95 57.43 42.73 57.43 42.42C57.43 42.11 57.01 41.81 56.24 41.42C55.47 41.03 54.74 40.59 54.74 39.68C54.74 39 55.23 38.19 56.57 38.19C57.1365 38.1722 57.6969 38.3106 58.19 38.59C58.2588 38.6299 58.3096 38.6947 58.3319 38.771C58.3542 38.8473 58.3464 38.9293 58.31 39L58.12 39.38C58.1033 39.4106 58.0807 39.4376 58.0534 39.4593C58.0261 39.481 57.9948 39.4969 57.9612 39.5063C57.9276 39.5156 57.8925 39.5181 57.8579 39.5136C57.8234 39.5091 57.7901 39.4976 57.76 39.48C57.386 39.3094 56.981 39.2175 56.57 39.21C56.09 39.21 55.87 39.45 55.87 39.7C55.87 39.95 56.26 40.27 56.81 40.5C57.81 40.93 58.6 41.3 58.6 42.32C58.6 43.17 57.86 43.92 56.6 43.92C55.9625 43.9337 55.3355 43.7561 54.8 43.41Z"
                                      fill="white"/>
                                <path d="M62.3 38.24C62.634 38.2304 62.9665 38.2889 63.2771 38.412C63.5877 38.5351 63.87 38.7202 64.1068 38.956C64.3435 39.1918 64.5297 39.4734 64.6541 39.7836C64.7784 40.0937 64.8383 40.4259 64.83 40.76C64.8395 40.8865 64.8395 41.0135 64.83 41.14C64.8249 41.2027 64.7964 41.2613 64.7501 41.304C64.7037 41.3466 64.643 41.3702 64.58 41.37H60.73C60.7582 41.7846 60.9457 42.1723 61.2533 42.4519C61.5608 42.7314 61.9645 42.8813 62.38 42.87C62.8718 42.8715 63.3501 42.7097 63.74 42.41C63.86 42.32 63.96 42.29 64.06 42.41L64.38 42.91C64.48 43.03 64.53 43.13 64.38 43.28C63.8071 43.7208 63.1028 43.9567 62.38 43.95C61.6494 43.9068 60.9629 43.5861 60.4609 43.0536C59.9589 42.521 59.6793 41.8168 59.6793 41.085C59.6793 40.3531 59.9589 39.6489 60.4609 39.1164C60.9629 38.5838 61.6494 38.2632 62.38 38.22L62.3 38.24ZM63.64 40.49C63.6323 40.3183 63.5907 40.1499 63.5175 39.9944C63.4443 39.8389 63.3411 39.6995 63.2137 39.5842C63.0863 39.4689 62.9373 39.38 62.7753 39.3226C62.6133 39.2652 62.4416 39.2405 62.27 39.25C61.9113 39.2272 61.5575 39.3432 61.282 39.574C61.0065 39.8049 60.8303 40.1328 60.79 40.49H63.64Z"
                                      fill="white"/>
                                <path d="M66.09 38.62C66.0924 38.5518 66.1206 38.4871 66.1689 38.4389C66.2171 38.3907 66.2818 38.3625 66.35 38.36H66.64C66.6954 38.3606 66.749 38.3796 66.7924 38.414C66.8359 38.4484 66.8667 38.4962 66.88 38.55L67.04 39.05C67.2376 38.7935 67.4924 38.5868 67.7841 38.4461C68.0758 38.3055 68.3962 38.2349 68.72 38.24C69.24 38.24 69.9 38.38 69.72 38.75L69.44 39.34C69.4283 39.3725 69.4097 39.4022 69.3855 39.4268C69.3613 39.4515 69.3321 39.4707 69.2998 39.483C69.2675 39.4954 69.233 39.5006 69.1985 39.4984C69.164 39.4961 69.1304 39.4864 69.1 39.47C68.9399 39.4096 68.771 39.3759 68.6 39.37C68.3384 39.3745 68.082 39.4435 67.8535 39.5709C67.625 39.6982 67.4314 39.8799 67.29 40.1V43.58C67.29 43.82 67.13 43.84 66.9 43.84H66.35C66.3158 43.84 66.282 43.8333 66.2505 43.8202C66.2189 43.8071 66.1903 43.788 66.1661 43.7638C66.142 43.7397 66.1228 43.711 66.1098 43.6795C66.0967 43.648 66.09 43.6141 66.09 43.58V38.62Z"
                                      fill="white"/>
                                <path d="M70.12 38.6701C70.02 38.5001 70.12 38.3601 70.32 38.3601H71.06C71.1105 38.3579 71.1605 38.3711 71.2033 38.3979C71.2462 38.4246 71.2799 38.4638 71.3 38.5101L72.77 41.8701L74.32 38.5101C74.39 38.3601 74.54 38.3601 74.69 38.3601H75.23C75.44 38.3601 75.53 38.5001 75.44 38.6701L73.04 43.8301C73.0181 43.8722 72.9851 43.9075 72.9446 43.9322C72.904 43.9569 72.8575 43.97 72.81 43.9701H72.74C72.6909 43.9718 72.6423 43.9596 72.5998 43.9348C72.5573 43.9101 72.5227 43.8737 72.5 43.8301L70.12 38.6701Z"
                                      fill="white"/>
                                <path d="M78.22 40.38C78.5953 40.3862 78.9683 40.44 79.33 40.54C79.33 39.68 79.14 39.28 78.45 39.28C77.9241 39.2971 77.4028 39.3845 76.9 39.54C76.865 39.5489 76.8285 39.55 76.793 39.5433C76.7574 39.5367 76.7238 39.5224 76.6943 39.5015C76.6649 39.4806 76.6403 39.4535 76.6223 39.4222C76.6043 39.3909 76.5933 39.356 76.59 39.32L76.48 38.87C76.4678 38.8373 76.4628 38.8023 76.4655 38.7674C76.4682 38.7325 76.4785 38.6987 76.4956 38.6682C76.5127 38.6377 76.5363 38.6113 76.5647 38.5909C76.5931 38.5705 76.6257 38.5566 76.66 38.55C77.2718 38.342 77.9139 38.2372 78.56 38.24C80.34 38.24 80.56 39.3 80.56 40.66V43.58C80.5575 43.6482 80.5294 43.7129 80.4811 43.7611C80.4329 43.8094 80.3682 43.8376 80.3 43.84H79.9C79.79 43.84 79.73 43.79 79.67 43.65L79.54 43.28C79.3146 43.5021 79.0474 43.6774 78.7539 43.7958C78.4605 43.9142 78.1465 43.9735 77.83 43.97C77.5847 43.9896 77.3381 43.9558 77.1072 43.8707C76.8763 43.7857 76.6666 43.6515 76.4925 43.4775C76.3185 43.3035 76.1844 43.0938 76.0994 42.8629C76.0143 42.632 75.9804 42.3853 76 42.14C76 41.14 76.79 40.38 78.22 40.38ZM78 43C78.2495 42.9892 78.4935 42.9236 78.7147 42.8078C78.936 42.692 79.129 42.5289 79.28 42.33V41.42C78.9635 41.288 78.6229 41.2233 78.28 41.23C77.64 41.23 77.14 41.56 77.14 42.13C77.1312 42.2457 77.1473 42.3619 77.1873 42.4708C77.2272 42.5797 77.2901 42.6787 77.3716 42.7612C77.4532 42.8437 77.5515 42.9077 77.6599 42.9489C77.7683 42.9901 77.8843 43.0075 78 43Z"
                                      fill="white"/>
                                <path d="M82.51 39.37H81.88C81.8101 39.3701 81.7429 39.343 81.6925 39.2945C81.6421 39.246 81.6126 39.1799 81.61 39.11V38.62C81.6084 38.5846 81.6145 38.5493 81.6276 38.5164C81.6408 38.4834 81.6608 38.4537 81.6863 38.4291C81.7119 38.4045 81.7423 38.3857 81.7757 38.3737C81.8091 38.3618 81.8446 38.3571 81.88 38.36H82.51V36.83C82.51 36.795 82.517 36.7604 82.5307 36.7282C82.5444 36.6959 82.5644 36.6668 82.5896 36.6425C82.6148 36.6183 82.6447 36.5993 82.6774 36.5869C82.7101 36.5744 82.745 36.5687 82.78 36.57H83.46C83.4937 36.57 83.527 36.5768 83.558 36.59C83.589 36.6031 83.617 36.6225 83.6404 36.6467C83.6637 36.671 83.6819 36.6998 83.6939 36.7313C83.7058 36.7628 83.7113 36.7964 83.71 36.83V38.36H85.18C85.2145 38.3586 85.2489 38.3644 85.2811 38.3769C85.3133 38.3895 85.3425 38.4086 85.367 38.433C85.3914 38.4575 85.4105 38.4867 85.4231 38.5189C85.4356 38.5511 85.4414 38.5855 85.44 38.62V39.11C85.4375 39.1782 85.4093 39.2429 85.3611 39.2911C85.3128 39.3393 85.2481 39.3675 85.18 39.37H83.71V42.29C83.71 42.75 83.89 42.84 84.16 42.84C84.4706 42.8295 84.7735 42.74 85.04 42.58C85.0685 42.5615 85.101 42.5499 85.1348 42.546C85.1686 42.5422 85.2029 42.5462 85.2349 42.5579C85.2668 42.5695 85.2957 42.5884 85.3191 42.613C85.3426 42.6377 85.36 42.6675 85.37 42.7L85.58 43.26C85.64 43.4 85.58 43.5 85.45 43.58C84.9781 43.8293 84.4537 43.963 83.92 43.97C82.81 43.97 82.51 43.31 82.51 42.33V39.37Z"
                                      fill="white"/>
                                <path d="M86.5101 36.3899C86.5088 36.2848 86.5281 36.1805 86.5671 36.083C86.6061 35.9854 86.6639 35.8965 86.7373 35.8213C86.8107 35.746 86.8981 35.686 86.9947 35.6446C87.0912 35.6032 87.195 35.5812 87.3001 35.5799C87.4073 35.5786 87.5137 35.5985 87.6131 35.6387C87.7125 35.6788 87.803 35.7382 87.8793 35.8136C87.9556 35.8889 88.0161 35.9787 88.0575 36.0776C88.0988 36.1765 88.1201 36.2827 88.1201 36.3899C88.1188 36.4958 88.0965 36.6004 88.0544 36.6976C88.0124 36.7949 87.9515 36.8828 87.8752 36.9563C87.7989 37.0298 87.7088 37.0874 87.6101 37.1258C87.5113 37.1642 87.406 37.1826 87.3001 37.1799C87.1963 37.1799 87.0936 37.1595 86.9978 37.1198C86.9019 37.0801 86.8148 37.0219 86.7415 36.9485C86.6681 36.8752 86.6099 36.7881 86.5702 36.6922C86.5305 36.5964 86.5101 36.4936 86.5101 36.3899ZM86.7001 38.6199C86.7025 38.5517 86.7307 38.487 86.779 38.4388C86.8272 38.3906 86.8919 38.3624 86.9601 38.3599H87.6401C87.7075 38.3646 87.7709 38.3935 87.8187 38.4412C87.8665 38.489 87.8954 38.5525 87.9001 38.6199V43.6199C87.8976 43.6881 87.8694 43.7528 87.8212 43.801C87.7729 43.8492 87.7082 43.8774 87.6401 43.8799H87.0001C86.9311 43.8799 86.865 43.8525 86.8162 43.8037C86.7675 43.755 86.7401 43.6888 86.7401 43.6199L86.7001 38.6199Z"
                                      fill="white"/>
                                <path d="M92.06 38.24C92.6302 38.2321 93.1897 38.3941 93.6674 38.7055C94.145 39.0169 94.5191 39.4635 94.7418 39.9884C94.9646 40.5132 95.026 41.0925 94.9182 41.6524C94.8104 42.2123 94.5383 42.7274 94.1365 43.132C93.7348 43.5366 93.2216 43.8123 92.6625 43.9241C92.1034 44.0358 91.5236 43.9785 90.9972 43.7594C90.4708 43.5404 90.0216 43.1694 89.7069 42.694C89.3921 42.2186 89.2261 41.6602 89.23 41.09C89.2326 40.3384 89.531 39.618 90.0606 39.0847C90.5902 38.5513 91.3085 38.2479 92.06 38.24ZM92.06 42.84C92.407 42.858 92.7514 42.7717 93.0489 42.5922C93.3464 42.4127 93.5834 42.1482 93.7292 41.8329C93.8751 41.5175 93.9232 41.1657 93.8674 40.8228C93.8116 40.4799 93.6544 40.1615 93.416 39.9087C93.1777 39.6559 92.8691 39.4802 92.53 39.4044C92.191 39.3285 91.8369 39.3558 91.5136 39.4829C91.1902 39.61 90.9123 39.831 90.7156 40.1174C90.5189 40.4038 90.4125 40.7426 90.41 41.09C90.3979 41.3146 90.4314 41.5394 90.5087 41.7506C90.5861 41.9618 90.7055 42.1552 90.8598 42.3188C91.0141 42.4825 91.2001 42.6131 91.4064 42.7027C91.6127 42.7923 91.8351 42.839 92.06 42.84Z"
                                      fill="white"/>
                                <path d="M96.2101 38.6199C96.2126 38.5501 96.2422 38.484 96.2926 38.4355C96.343 38.387 96.4102 38.3599 96.4801 38.3599H96.7701C96.8201 38.354 96.8707 38.3671 96.9115 38.3968C96.9523 38.4265 96.9803 38.4704 96.9901 38.5199L97.1601 38.9999C97.3994 38.7554 97.6859 38.562 98.0022 38.4314C98.3184 38.3007 98.6579 38.2356 99.0001 38.2399C100.69 38.2399 101.15 39.3999 101.15 40.8299V43.5799C101.147 43.6498 101.118 43.7159 101.068 43.7644C101.017 43.8129 100.95 43.84 100.88 43.8399H100.21C100.141 43.8399 100.075 43.8126 100.026 43.7638C99.9775 43.715 99.9501 43.6489 99.9501 43.5799V40.7799C99.9501 39.8899 99.5801 39.3699 98.8601 39.3699C98.5678 39.3641 98.279 39.4338 98.0215 39.5722C97.764 39.7105 97.5465 39.913 97.3901 40.1599V43.5799C97.3901 43.7599 97.3001 43.8399 97.0701 43.8399H96.4601C96.3902 43.84 96.3229 43.8129 96.2726 43.7644C96.2222 43.7159 96.1927 43.6498 96.1901 43.5799L96.2101 38.6199Z"
                                      fill="white"/>
                                <path d="M102.56 43.41C102.511 43.3843 102.474 43.3413 102.456 43.2895C102.437 43.2376 102.439 43.1808 102.46 43.13L102.72 42.62C102.737 42.5895 102.761 42.5631 102.789 42.5426C102.817 42.5222 102.849 42.5081 102.884 42.5014C102.918 42.4948 102.953 42.4957 102.987 42.5041C103.021 42.5125 103.053 42.5281 103.08 42.55C103.493 42.8119 103.971 42.9506 104.46 42.95C104.92 42.95 105.19 42.73 105.19 42.42C105.19 42.11 104.77 41.81 104 41.42C103.23 41.03 102.5 40.59 102.5 39.68C102.5 39 102.99 38.19 104.34 38.19C104.906 38.1753 105.466 38.3135 105.96 38.59C106.025 38.633 106.073 38.6979 106.095 38.773C106.117 38.8481 106.112 38.9286 106.08 39L105.88 39.38C105.863 39.4107 105.841 39.4376 105.813 39.4593C105.786 39.481 105.755 39.497 105.721 39.5063C105.688 39.5156 105.653 39.5181 105.618 39.5136C105.583 39.5091 105.55 39.4977 105.52 39.48C105.149 39.3108 104.748 39.2189 104.34 39.21C103.86 39.21 103.63 39.45 103.63 39.7C103.63 39.95 104.02 40.27 104.63 40.5C105.63 40.93 106.41 41.3 106.41 42.32C106.41 43.17 105.67 43.92 104.41 43.92C103.756 43.9439 103.11 43.7659 102.56 43.41Z"
                                      fill="white"/>
                                <path d="M11.45 50C11.4455 49.8349 11.4752 49.6706 11.5371 49.5174C11.5991 49.3643 11.692 49.2256 11.81 49.11C11.926 48.996 12.0636 48.9062 12.2147 48.8461C12.3658 48.786 12.5274 48.7567 12.69 48.76C13.0181 48.7557 13.3346 48.8815 13.57 49.11C13.6881 49.2256 13.781 49.3643 13.8429 49.5174C13.9049 49.6706 13.9345 49.8349 13.93 50C13.9343 50.1636 13.9046 50.3264 13.8426 50.4779C13.7806 50.6294 13.6878 50.7663 13.57 50.88C13.4553 50.9963 13.3181 51.0882 13.1669 51.1501C13.0156 51.2119 12.8534 51.2425 12.69 51.24C12.5265 51.2437 12.3639 51.2137 12.2125 51.1517C12.0611 51.0898 11.9241 50.9973 11.81 50.88C11.6923 50.7663 11.5994 50.6294 11.5375 50.4779C11.4755 50.3264 11.4457 50.1636 11.45 50ZM11.71 50C11.7058 50.2644 11.8065 50.5197 11.99 50.71C12.177 50.8932 12.4283 50.9959 12.69 50.9959C12.9518 50.9959 13.2031 50.8932 13.39 50.71C13.5699 50.5181 13.6669 50.263 13.66 50C13.6669 49.737 13.5699 49.482 13.39 49.29C13.2488 49.159 13.0728 49.0715 12.883 49.0381C12.6933 49.0047 12.4979 49.0269 12.3205 49.1019C12.143 49.1769 11.991 49.3015 11.8827 49.4609C11.7744 49.6202 11.7145 49.8074 11.71 50Z"
                                      fill="white"/>
                                <path d="M14.8199 51.1501V48.76H15.5799C15.6762 48.759 15.7717 48.7771 15.8609 48.8131C15.9502 48.8492 16.0314 48.9025 16.0999 48.9701C16.2229 49.1076 16.2909 49.2856 16.2909 49.4701C16.2909 49.6545 16.2229 49.8325 16.0999 49.9701C15.9577 50.0993 15.7722 50.1706 15.5799 50.17H15.0799V51.1101L14.8199 51.1501ZM15.0799 50.0001H15.5699C15.6316 50.0006 15.6927 49.9884 15.7495 49.9643C15.8063 49.9402 15.8575 49.9048 15.8999 49.8601C15.9464 49.8168 15.983 49.7641 16.0072 49.7054C16.0313 49.6467 16.0425 49.5835 16.0399 49.5201C16.0439 49.4565 16.0334 49.3928 16.0091 49.3339C15.9849 49.275 15.9475 49.2224 15.8999 49.1801C15.8587 49.1338 15.8077 49.0973 15.7506 49.0731C15.6936 49.0489 15.6319 49.0376 15.5699 49.0401H15.0799V50.0001Z"
                                      fill="white"/>
                                <path d="M17.1901 51.15V48.76H18.5301V49H17.4501V49.76H18.4501V50H17.4501V50.89H18.5601V51.14L17.1901 51.15Z"
                                      fill="white"/>
                                <path d="M19.47 51.1499V48.7599H20.29C20.3833 48.7581 20.4761 48.7759 20.5622 48.812C20.6483 48.8482 20.7259 48.902 20.79 48.9699C20.8584 49.0336 20.9125 49.1111 20.9487 49.1973C20.9849 49.2835 21.0024 49.3764 21 49.4699C21.0054 49.616 20.9649 49.7602 20.8842 49.8822C20.8035 50.0041 20.6866 50.0978 20.55 50.1499L21.12 51.1499H20.82L20.28 50.1999H19.74V51.1499H19.47ZM19.74 49.9999H20.26C20.3232 50.0012 20.3861 49.9894 20.4446 49.9653C20.5031 49.9413 20.556 49.9054 20.6 49.8599C20.6457 49.814 20.6817 49.7594 20.7058 49.6992C20.7298 49.6391 20.7415 49.5747 20.74 49.5099C20.7413 49.4491 20.7304 49.3887 20.7077 49.3323C20.6851 49.2758 20.6513 49.2246 20.6083 49.1816C20.5653 49.1386 20.514 49.1048 20.4576 49.0821C20.4012 49.0595 20.3408 49.0485 20.28 49.0499H19.74V49.9999Z"
                                      fill="white"/>
                                <path d="M21.6901 51.1499L22.7701 48.6799L23.8501 51.1499H23.5601L23.3001 50.5599H22.2301L21.9701 51.1499H21.6901ZM22.3401 50.3099H23.2001L22.7701 49.3099L22.3401 50.3099Z"
                                      fill="white"/>
                                <path d="M24.8401 51.15V49H24.1901V48.75H25.7601V49H25.1101V51.14L24.8401 51.15Z"
                                      fill="white"/>
                                <path d="M26.59 51.15V48.76H27.93V49H26.85V49.76H27.85V50H26.85V50.89H28V51.14L26.59 51.15Z"
                                      fill="white"/>
                                <path d="M28.87 51.15V48.76H29.64C29.8045 48.7514 29.9691 48.7762 30.1238 48.8329C30.2784 48.8896 30.42 48.977 30.54 49.09C30.6511 49.205 30.7376 49.3415 30.7944 49.4911C30.8511 49.6406 30.8768 49.8002 30.87 49.96C30.8772 50.1183 30.8517 50.2765 30.7949 50.4245C30.7381 50.5725 30.6513 50.7071 30.54 50.82C30.42 50.9329 30.2784 51.0204 30.1238 51.0771C29.9691 51.1338 29.8045 51.1586 29.64 51.15H28.87ZM29.14 50.9H29.62C29.7523 50.9136 29.8859 50.8993 30.0123 50.858C30.1387 50.8167 30.255 50.7494 30.3537 50.6603C30.4525 50.5712 30.5314 50.4624 30.5854 50.3409C30.6394 50.2194 30.6673 50.0879 30.6673 49.955C30.6673 49.822 30.6394 49.6905 30.5854 49.569C30.5314 49.4475 30.4525 49.3387 30.3537 49.2496C30.255 49.1606 30.1387 49.0932 30.0123 49.0519C29.8859 49.0106 29.7523 48.9963 29.62 49.01H29.14V50.9Z"
                                      fill="white"/>
                                <path d="M33.48 51.1499V48.7599H34.21C34.381 48.757 34.5463 48.8217 34.67 48.9399C34.7286 48.9948 34.7749 49.0615 34.8059 49.1356C34.837 49.2097 34.852 49.2895 34.85 49.3699C34.8558 49.4711 34.83 49.5716 34.7763 49.6576C34.7226 49.7435 34.6435 49.8107 34.55 49.8499C34.6886 49.8719 34.8142 49.9442 34.9028 50.0531C34.9913 50.162 35.0366 50.2997 35.03 50.4399C35.0325 50.5348 35.0152 50.6293 34.979 50.7171C34.9428 50.8049 34.8887 50.8842 34.82 50.9499C34.6799 51.0826 34.4929 51.1546 34.3 51.1499H33.48ZM33.75 49.7599H34.2C34.2544 49.7688 34.31 49.7657 34.3631 49.751C34.4162 49.7363 34.4654 49.7101 34.5074 49.6745C34.5494 49.6388 34.5832 49.5944 34.6063 49.5444C34.6294 49.4944 34.6414 49.44 34.6414 49.3849C34.6414 49.3298 34.6294 49.2753 34.6063 49.2253C34.5832 49.1753 34.5494 49.1309 34.5074 49.0952C34.4654 49.0596 34.4162 49.0335 34.3631 49.0187C34.31 49.004 34.2544 49.0009 34.2 49.0099H33.75V49.7599ZM33.75 50.8999H34.28C34.3424 50.904 34.405 50.8952 34.4638 50.8738C34.5226 50.8524 34.5763 50.8191 34.6215 50.7758C34.6666 50.7325 34.7023 50.6803 34.7261 50.6224C34.75 50.5646 34.7615 50.5024 34.76 50.4399C34.7616 50.3795 34.75 50.3195 34.7258 50.2642C34.7016 50.2089 34.6654 50.1596 34.62 50.1199C34.526 50.0381 34.4044 49.9952 34.28 49.9999H33.75V50.8999Z"
                                      fill="white"/>
                                <path d="M36.37 51.15V50.15L35.53 48.74H35.82L36.5 49.89L37.18 48.74H37.46L36.63 50.15V51.15H36.37Z"
                                      fill="white"/>
                                <path d="M41.57 49V49.31C41.4745 49.207 41.3583 49.1252 41.2291 49.0701C41.0999 49.015 40.9605 48.9877 40.82 48.99C40.6895 48.9865 40.5598 49.0105 40.4392 49.0605C40.3185 49.1105 40.2098 49.1853 40.12 49.28C39.9365 49.4704 39.8358 49.7256 39.84 49.99C39.8358 50.2544 39.9365 50.5097 40.12 50.7C40.2107 50.793 40.3198 50.8659 40.4404 50.9141C40.5609 50.9624 40.6903 50.9848 40.82 50.98C40.9605 50.9824 41.0999 50.9551 41.2291 50.8999C41.3583 50.8448 41.4745 50.7631 41.57 50.66V50.97C41.3601 51.1453 41.0934 51.2378 40.82 51.23C40.6551 51.2327 40.4913 51.2023 40.3384 51.1404C40.1856 51.0786 40.0467 50.9866 39.93 50.87C39.8123 50.7563 39.7194 50.6194 39.6575 50.4679C39.5955 50.3164 39.5657 50.1537 39.57 49.99C39.5655 49.8249 39.5952 49.6606 39.6571 49.5075C39.7191 49.3543 39.812 49.2156 39.93 49.1C40.1692 48.8709 40.4889 48.7452 40.82 48.75C41.0922 48.7385 41.3592 48.8275 41.57 49Z"
                                      fill="white"/>
                                <path d="M42.27 51.1499L43.35 48.6799L44.43 51.1499H44.14L43.88 50.5599H42.81L42.55 51.1499H42.27ZM42.92 50.3099H43.78L43.35 49.3099L42.92 50.3099Z"
                                      fill="white"/>
                                <path d="M45.28 51.1499V48.7599H46.09C46.1849 48.758 46.2792 48.7756 46.3669 48.8117C46.4547 48.8479 46.534 48.9017 46.6 48.9699C46.6672 49.0341 46.7197 49.112 46.7542 49.1982C46.7887 49.2845 46.8044 49.3771 46.8 49.4699C46.8055 49.6161 46.765 49.7602 46.6843 49.8822C46.6036 50.0042 46.4867 50.0978 46.35 50.1499L46.92 51.1499H46.62L46.08 50.1999H45.54V51.1499H45.28ZM45.54 49.9999H46.06C46.1233 50.0012 46.1861 49.9895 46.2446 49.9654C46.3031 49.9413 46.356 49.9054 46.4 49.8599C46.4458 49.814 46.4818 49.7594 46.5058 49.6992C46.5299 49.6391 46.5415 49.5747 46.54 49.5099C46.5414 49.4491 46.5304 49.3887 46.5078 49.3323C46.4852 49.2758 46.4513 49.2246 46.4083 49.1816C46.3654 49.1386 46.3141 49.1048 46.2577 49.0821C46.2012 49.0595 46.1408 49.0485 46.08 49.0499H45.54V49.9999Z"
                                      fill="white"/>
                                <path d="M47.77 51.15V48.76H48V51.15H47.77Z" fill="white"/>
                                <path d="M49.09 51.15V48.76H49.82C49.9033 48.7577 49.9862 48.7724 50.0636 48.8034C50.141 48.8344 50.2112 48.8808 50.27 48.94C50.332 48.9927 50.3813 49.0588 50.4142 49.1332C50.4471 49.2077 50.4628 49.2886 50.46 49.37C50.4658 49.4712 50.44 49.5717 50.3863 49.6577C50.3326 49.7437 50.2535 49.8109 50.16 49.85C50.2977 49.8721 50.4223 49.9449 50.5092 50.054C50.5961 50.1631 50.6392 50.3008 50.63 50.44C50.6344 50.5343 50.6189 50.6285 50.5845 50.7164C50.55 50.8043 50.4974 50.8839 50.43 50.95C50.2899 51.0828 50.1029 51.1547 49.91 51.15H49.09ZM49.36 49.76H49.8C49.8507 49.7613 49.9012 49.7525 49.9485 49.734C49.9957 49.7155 50.0388 49.6877 50.0752 49.6523C50.1115 49.6169 50.1404 49.5745 50.1601 49.5278C50.1798 49.481 50.19 49.4308 50.19 49.38C50.19 49.3306 50.1801 49.2816 50.1609 49.2361C50.1417 49.1905 50.1135 49.1493 50.0781 49.1148C50.0427 49.0803 50.0007 49.0532 49.9546 49.0352C49.9086 49.0173 49.8594 49.0087 49.81 49.01H49.36V49.76ZM49.36 50.9H49.89C49.9833 50.9074 50.0767 50.8855 50.157 50.8373C50.2373 50.7891 50.3006 50.7171 50.3381 50.6312C50.3755 50.5454 50.3852 50.45 50.3658 50.3583C50.3464 50.2667 50.2989 50.1834 50.23 50.12C50.136 50.0382 50.0144 49.9953 49.89 50H49.36V50.9Z"
                                      fill="white"/>
                                <path d="M51.53 51.1499V48.7599H52.25C52.3349 48.7568 52.4196 48.7712 52.4987 48.8022C52.5779 48.8331 52.6498 48.88 52.71 48.9399C52.7686 48.9949 52.815 49.0616 52.846 49.1357C52.877 49.2098 52.892 49.2896 52.89 49.3699C52.8958 49.4712 52.8701 49.5717 52.8163 49.6576C52.7626 49.7436 52.6835 49.8108 52.59 49.8499C52.7286 49.8719 52.8543 49.9443 52.9428 50.0532C53.0314 50.162 53.0767 50.2998 53.07 50.4399C53.0726 50.5349 53.0552 50.6293 53.0191 50.7172C52.9829 50.805 52.9287 50.8843 52.86 50.9499C52.72 51.0827 52.533 51.1546 52.34 51.1499H51.53ZM51.79 49.7599H52.24C52.2944 49.7688 52.3501 49.7658 52.4032 49.7511C52.4563 49.7363 52.5055 49.7102 52.5475 49.6746C52.5895 49.6389 52.6232 49.5945 52.6464 49.5445C52.6695 49.4945 52.6815 49.44 52.6815 49.3849C52.6815 49.3298 52.6695 49.2754 52.6464 49.2254C52.6232 49.1754 52.5895 49.131 52.5475 49.0953C52.5055 49.0597 52.4563 49.0335 52.4032 49.0188C52.3501 49.0041 52.2944 49.001 52.24 49.0099H51.79V49.7599ZM51.79 50.8999H52.33C52.3916 50.9027 52.4532 50.8928 52.5108 50.8708C52.5684 50.8487 52.6208 50.8151 52.6649 50.772C52.709 50.7289 52.7437 50.6771 52.767 50.62C52.7902 50.5629 52.8015 50.5016 52.8 50.4399C52.8011 50.3806 52.7901 50.3216 52.7677 50.2667C52.7454 50.2117 52.7122 50.1618 52.67 50.1199C52.5725 50.0375 52.4476 49.9947 52.32 49.9999H51.79V50.8999Z"
                                      fill="white"/>
                                <path d="M54 51.15V48.76H55.35V49H54.23V49.76H55.23V50H54.23V50.89H55.33V51.14L54 51.15Z"
                                      fill="white"/>
                                <path d="M56 51.1499L57.07 48.6799L58.16 51.1499H57.86L57.61 50.5599H56.57L56.32 51.1499H56ZM56.64 50.3099H57.5L57.07 49.3099L56.64 50.3099Z"
                                      fill="white"/>
                                <path d="M59 51.1499V48.6799L60.67 50.5699V48.7599H61V51.2299L59.33 49.3399V51.1499H59Z"
                                      fill="white"/>
                                <path d="M63.85 51.15V48.76H64.12V51.15H63.85Z" fill="white"/>
                                <path d="M65 50.5799C65.0849 50.6937 65.1949 50.7863 65.3216 50.8505C65.4482 50.9147 65.588 50.9487 65.73 50.9499C66.06 50.9499 66.25 50.7599 66.25 50.5699C66.2528 50.5127 66.2435 50.4556 66.2228 50.4022C66.2022 50.3488 66.1705 50.3003 66.13 50.2599C66.0049 50.1534 65.8672 50.0627 65.72 49.9899L65.47 49.8599L65.28 49.7199C65.2206 49.6677 65.1736 49.6029 65.1424 49.5303C65.1113 49.4576 65.0968 49.3789 65.1 49.2999C65.1 48.9599 65.38 48.7199 65.82 48.7199C65.9942 48.7125 66.1651 48.7694 66.3 48.8799V49.1799C66.1718 49.0452 65.9958 48.9662 65.81 48.9599C65.54 48.9599 65.37 49.0999 65.37 49.2999C65.3676 49.3448 65.3753 49.3897 65.3926 49.4313C65.41 49.4728 65.4364 49.5099 65.47 49.5399C65.5817 49.6288 65.7024 49.7058 65.83 49.7699C66.0108 49.8415 66.1743 49.9506 66.31 50.0899C66.3778 50.1493 66.4311 50.2235 66.4657 50.3067C66.5004 50.3899 66.5155 50.4799 66.51 50.5699C66.509 50.6541 66.4897 50.737 66.4535 50.813C66.4172 50.889 66.3648 50.9562 66.3 51.0099C66.1465 51.1392 65.9505 51.2069 65.75 51.1999C65.6121 51.2032 65.4748 51.1793 65.3461 51.1295C65.2174 51.0798 65.0998 51.0051 65 50.9099V50.5799Z"
                                      fill="white"/>
                                <path d="M78.0601 50.5799C78.1449 50.6937 78.255 50.7863 78.3817 50.8505C78.5083 50.9147 78.6481 50.9487 78.7901 50.9499C79.1201 50.9499 79.3001 50.7599 79.3001 50.5699C79.3041 50.5134 79.2964 50.4567 79.2775 50.4034C79.2586 50.35 79.2288 50.3012 79.1901 50.2599C79.0626 50.1518 78.9213 50.061 78.7701 49.9899L78.5301 49.8599L78.3401 49.7199C78.2806 49.6677 78.2336 49.6029 78.2025 49.5303C78.1713 49.4576 78.1568 49.3789 78.1601 49.2999C78.1601 48.9599 78.4401 48.7199 78.8801 48.7199C79.0543 48.7125 79.2251 48.7694 79.3601 48.8799V49.1799C79.2318 49.0452 79.0559 48.9662 78.8701 48.9599C78.6001 48.9599 78.4301 49.0999 78.4301 49.2999C78.4277 49.3448 78.4354 49.3897 78.4527 49.4313C78.47 49.4728 78.4965 49.5099 78.5301 49.5399C78.6418 49.6288 78.7624 49.7058 78.8901 49.7699C79.0708 49.8415 79.2344 49.9506 79.3701 50.0899C79.4379 50.1493 79.4911 50.2235 79.5258 50.3067C79.5605 50.3899 79.5756 50.4799 79.5701 50.5699C79.5691 50.6541 79.5498 50.737 79.5135 50.813C79.4773 50.889 79.4249 50.9562 79.3601 51.0099C79.2066 51.1392 79.0106 51.2069 78.8101 51.1999C78.6721 51.2032 78.5349 51.1793 78.4062 51.1295C78.2775 51.0798 78.1599 51.0051 78.0601 50.9099V50.5799Z"
                                      fill="white"/>
                                <path d="M67.42 51.15V48.76H67.69V50.9H68.69V51.15H67.42Z" fill="white"/>
                                <path d="M69.27 51.1499L70.34 48.6799L71.43 51.1499H71.14L70.88 50.5599H69.8L69.55 51.1499H69.27ZM69.91 50.3099H70.77L70.34 49.3099L69.91 50.3099Z"
                                      fill="white"/>
                                <path d="M72.27 51.1499V48.6799L73.94 50.5699V48.7599H74.21V51.2299L72.54 49.3399V51.1499H72.27Z"
                                      fill="white"/>
                                <path d="M75.25 51.1499V48.7599H76C76.1631 48.7509 76.3262 48.7755 76.4793 48.8323C76.6324 48.8891 76.7722 48.9767 76.89 49.0899C77.1064 49.3259 77.2265 49.6346 77.2265 49.9549C77.2265 50.2751 77.1064 50.5838 76.89 50.8199C76.77 50.9328 76.6284 51.0203 76.4738 51.077C76.3191 51.1337 76.1545 51.1585 75.99 51.1499H75.25ZM75.52 50.8999H76C76.252 50.8999 76.4936 50.7998 76.6718 50.6216C76.8499 50.4435 76.95 50.2018 76.95 49.9499C76.95 49.6979 76.8499 49.4563 76.6718 49.2781C76.4936 49.1 76.252 48.9999 76 48.9999H75.53L75.52 50.8999Z"
                                      fill="white"/>
                                <path d="M82.6 51.15V49H82V48.75H83.57V49H82.92V51.14L82.6 51.15Z" fill="white"/>
                                <path d="M84.35 51.1499V48.7599H85.16C85.2549 48.758 85.3491 48.7756 85.4369 48.8117C85.5246 48.8479 85.604 48.9017 85.67 48.9699C85.7384 49.0336 85.7925 49.1111 85.8287 49.1973C85.8649 49.2835 85.8824 49.3765 85.88 49.4699C85.8832 49.6169 85.8406 49.7613 85.7582 49.8831C85.6758 50.005 85.5576 50.0982 85.42 50.1499L86 51.1499H85.69L85.15 50.1999H84.61V51.1499H84.35ZM84.61 49.9999H85.13C85.1932 50.0012 85.2561 49.9895 85.3146 49.9654C85.3731 49.9413 85.426 49.9054 85.47 49.8599C85.5157 49.814 85.5517 49.7594 85.5758 49.6992C85.5998 49.6391 85.6115 49.5747 85.61 49.5099C85.6113 49.4491 85.6004 49.3887 85.5777 49.3323C85.5551 49.2758 85.5213 49.2246 85.4783 49.1816C85.4353 49.1386 85.384 49.1048 85.3276 49.0821C85.2712 49.0595 85.2108 49.0485 85.15 49.0499H84.61V49.9999Z"
                                      fill="white"/>
                                <path d="M86.5701 51.1499L87.6401 48.6799L88.7201 51.1499H88.4301L88.1801 50.5599H87.1001L86.8501 51.1499H86.5701ZM87.2101 50.3099H88.0701L87.6401 49.3099L87.2101 50.3099Z"
                                      fill="white"/>
                                <path d="M90 51.23L89 48.76H89.29L90.03 50.56L90.77 48.76H91.06L90 51.23Z"
                                      fill="white"/>
                                <path d="M91.91 51.15V48.76H93.26V49H92.18V49.76H93.18V50H92.18V50.89H93.28V51.14L91.91 51.15Z"
                                      fill="white"/>
                                <path d="M94.2 51.15V48.76H94.47V50.9H95.47V51.15H94.2Z" fill="white"/>
                                <path d="M96.18 50.77H96.51L96.08 51.59H95.87L96.18 50.77Z" fill="white"/>
                                <path d="M99.1901 51.15V48.76H99.4601V50.9H100.46V51.15H99.1901Z" fill="white"/>
                                <path d="M101.3 51.15V48.76H101.57V50.9H102.57V51.15H101.3Z" fill="white"/>
                                <path d="M105.1 49V49.31C105.006 49.2082 104.891 49.1272 104.764 49.0721C104.636 49.017 104.499 48.9891 104.36 48.99C104.23 48.9865 104.1 49.0105 103.979 49.0605C103.859 49.1104 103.75 49.1852 103.66 49.28C103.477 49.4703 103.376 49.7256 103.38 49.99C103.376 50.2544 103.477 50.5097 103.66 50.7C103.751 50.793 103.86 50.8659 103.98 50.9141C104.101 50.9623 104.23 50.9848 104.36 50.98C104.499 50.9809 104.636 50.953 104.764 50.8979C104.891 50.8428 105.006 50.7618 105.1 50.66V50.97C104.895 51.1463 104.631 51.2391 104.36 51.23C104.195 51.2327 104.031 51.2023 103.878 51.1404C103.726 51.0786 103.587 50.9866 103.47 50.87C103.352 50.7563 103.259 50.6194 103.198 50.4679C103.136 50.3164 103.106 50.1536 103.11 49.99C103.106 49.8249 103.135 49.6606 103.197 49.5074C103.259 49.3543 103.352 49.2156 103.47 49.1C103.709 48.8709 104.029 48.7452 104.36 48.75C104.629 48.7371 104.894 48.8264 105.1 49Z"
                                      fill="white"/>
                            </svg>
                        </div>
                        <div class="glide__slide">
                            <svg width="120" height="60" viewBox="0 0 120 60" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M111.65 25.0001C111.65 25.0001 111.59 25.0001 111.47 24.8401L111.31 24.6401C111.45 24.5301 111.48 24.4501 111.48 24.3601C111.48 24.2701 111.24 24.1001 111.08 24.1001H110.71C110.79 24.1001 110.82 24.1001 110.82 24.1701C110.82 24.2401 110.82 24.2801 110.82 24.4201V24.6301C110.82 24.7801 110.82 24.8501 110.82 24.8901C110.82 24.9301 110.82 24.9501 110.72 24.9501H111.1H111.01C111.01 24.9501 111.01 24.9501 111.01 24.7401V24.6601H111.18L111.31 24.8401C111.45 25.0301 111.52 25.0201 111.64 25.0201C111.76 25.0201 111.71 25.0201 111.71 25.0201C111.71 25.0201 111.67 25.0001 111.65 25.0001ZM111.21 24.5801C111.181 24.59 111.149 24.59 111.12 24.5801C111.074 24.5929 111.026 24.5929 110.98 24.5801V24.2101C111.006 24.2017 111.034 24.2017 111.06 24.2101C111.09 24.2073 111.121 24.2109 111.15 24.2207C111.179 24.2305 111.206 24.2463 111.229 24.267C111.251 24.2877 111.269 24.3129 111.282 24.341C111.294 24.3691 111.3 24.3994 111.3 24.4301C111.3 24.4701 111.26 24.5201 111.21 24.5401V24.5801Z"
                                      fill="white"/>
                                <path d="M111.13 23.74C110.968 23.7478 110.811 23.8031 110.68 23.8989C110.549 23.9947 110.449 24.1269 110.392 24.2791C110.336 24.4313 110.325 24.5968 110.361 24.755C110.397 24.9133 110.48 25.0574 110.597 25.1696C110.715 25.2817 110.862 25.3568 111.022 25.3858C111.182 25.4147 111.347 25.3961 111.496 25.3322C111.645 25.2684 111.773 25.1622 111.862 25.0267C111.952 24.8912 112 24.7324 112 24.57C112 24.4575 111.977 24.3462 111.933 24.2428C111.889 24.1394 111.824 24.0461 111.743 23.9685C111.662 23.8909 111.565 23.8306 111.46 23.7913C111.355 23.752 111.242 23.7346 111.13 23.74V23.74ZM111.13 25.25C111.037 25.2555 110.943 25.2417 110.855 25.2093C110.767 25.177 110.687 25.1269 110.619 25.0621C110.552 24.9973 110.498 24.9193 110.462 24.8329C110.426 24.7465 110.408 24.6536 110.41 24.56C110.406 24.4192 110.444 24.2804 110.519 24.1613C110.594 24.0422 110.703 23.9481 110.832 23.891C110.961 23.8339 111.103 23.8164 111.242 23.8407C111.381 23.865 111.509 23.93 111.611 24.0274C111.713 24.1249 111.783 24.2504 111.813 24.3879C111.843 24.5255 111.832 24.6689 111.78 24.8C111.729 24.931 111.639 25.0438 111.524 25.1239C111.408 25.2041 111.271 25.2479 111.13 25.25V25.25Z"
                                      fill="white"/>
                                <path d="M44.35 29.5101C43.9559 29.4172 43.604 29.1955 43.35 28.8801C42.8 28.3201 42.17 27.5001 41.35 26.4701C41.6967 26.2566 41.9881 25.9642 42.2001 25.6165C42.4121 25.2689 42.5389 24.8761 42.57 24.4701C42.5704 24.2255 42.5136 23.9842 42.4043 23.7655C42.2949 23.5467 42.1359 23.3565 41.94 23.2101C41.43 22.909 40.8408 22.7696 40.25 22.8101H38.96C38.77 22.8101 38.19 22.8101 37.7 22.8101C37.56 22.8101 37.5 22.8101 37.5 22.9001C37.5 22.9901 37.55 22.9801 37.66 22.9801C37.7737 22.9753 37.8876 22.982 38 23.0001C38.31 23.0601 38.38 23.2101 38.4 23.5201C38.42 23.8301 38.4 24.0701 38.4 25.4601V27.0001C38.4 27.8401 38.4 28.5701 38.4 29.0001C38.4 29.4301 38.32 29.4601 38.13 29.5001C38.0204 29.5137 37.9096 29.5137 37.8 29.5001C37.69 29.5001 37.66 29.5001 37.66 29.5701C37.66 29.6401 37.72 29.6601 37.84 29.6601H38.96C39.1 29.6601 39.78 29.6601 40.31 29.6601C40.43 29.6601 40.49 29.6301 40.49 29.5701C40.49 29.5201 40.49 29.5001 40.38 29.5001H39.93C39.66 29.5001 39.6 29.2601 39.58 29.0001C39.56 28.7401 39.58 27.8801 39.58 27.0001V26.9001C39.5782 26.8905 39.5788 26.8806 39.5817 26.8713C39.5845 26.862 39.5897 26.8535 39.5966 26.8466C39.6034 26.8397 39.6119 26.8346 39.6212 26.8318C39.6305 26.8289 39.6404 26.8283 39.65 26.8301H40.45C40.481 26.8268 40.5124 26.8305 40.5418 26.8409C40.5712 26.8513 40.5979 26.8681 40.62 26.8901C40.74 27.0301 41.16 27.6501 41.53 28.1601C41.8495 28.6912 42.275 29.1508 42.78 29.5101C43.0915 29.6573 43.4374 29.7161 43.78 29.6801H44.65C44.76 29.6801 44.82 29.6801 44.82 29.5901C44.82 29.5001 44.82 29.5201 44.71 29.5201L44.35 29.5101ZM40.92 26.2501C40.732 26.385 40.4992 26.4423 40.27 26.4101C40.0337 26.4117 39.7982 26.3814 39.57 26.3201C39.51 26.3201 39.49 26.2501 39.49 26.1501V23.3601C39.49 23.2901 39.49 23.2501 39.57 23.2301C39.7326 23.2086 39.8974 23.2086 40.06 23.2301C40.2661 23.2378 40.4683 23.2888 40.6534 23.3797C40.8386 23.4707 41.0025 23.5995 41.1345 23.758C41.2666 23.9165 41.3638 24.1009 41.4199 24.2994C41.4759 24.4979 41.4896 24.706 41.46 24.9101C41.4814 25.1601 41.4437 25.4117 41.3499 25.6445C41.256 25.8773 41.1088 26.0847 40.92 26.2501V26.2501Z"
                                      fill="white"/>
                                <path d="M47.4 23.6902C46.9714 23.6469 46.5386 23.6938 46.1292 23.8277C45.7198 23.9616 45.343 24.1796 45.0228 24.4678C44.7027 24.7559 44.4463 25.1078 44.2702 25.5009C44.094 25.8939 44.002 26.3194 44 26.7502C43.9908 27.1749 44.0718 27.5967 44.2379 27.9877C44.4039 28.3787 44.6511 28.7301 44.963 29.0184C45.275 29.3067 45.6447 29.5255 46.0475 29.6603C46.4504 29.7951 46.8773 29.8427 47.3 29.8002C47.7368 29.8336 48.1757 29.7755 48.5888 29.6297C49.0019 29.4839 49.38 29.2536 49.699 28.9534C50.0181 28.6532 50.271 28.2897 50.4416 27.8863C50.6122 27.4828 50.6968 27.0482 50.69 26.6102C50.71 24.8202 49.44 23.6902 47.4 23.6902ZM47.65 29.3802C46.13 29.3802 45.21 28.1102 45.21 26.5102C45.21 24.5802 46.27 24.1002 47.21 24.1002C48.51 24.1002 49.55 25.1702 49.55 26.8902C49.51 29.1102 48.22 29.3802 47.65 29.3802V29.3802Z"
                                      fill="white"/>
                                <path d="M54.92 29.6202C54.92 29.6202 54.87 29.5402 54.78 29.5402C54.6468 29.5497 54.5132 29.5497 54.38 29.5402C54.14 29.5402 54.06 29.3602 54.05 29.1302C54.04 28.9002 54.05 28.4702 54.05 28.3502V27.7202C54.0258 27.456 54.0599 27.1897 54.15 26.9402C54.6219 26.0788 55.1462 25.2473 55.72 24.4502C55.8219 24.2894 55.9676 24.161 56.14 24.0802C56.2494 24.0268 56.3684 23.9962 56.49 23.9902C56.58 23.9902 56.64 23.9902 56.64 23.8902C56.64 23.7902 56.64 23.8302 56.5 23.8302H55.63H54.85C54.75 23.8302 54.71 23.8302 54.71 23.9002C54.71 23.9702 54.78 23.9802 54.85 24.0002C54.92 24.0202 55.03 24.1002 55.03 24.1702C55.02 24.3139 54.9791 24.4537 54.91 24.5802C54.79 24.8202 53.81 26.4902 53.71 26.6802C53.57 26.4602 52.51 24.6802 52.37 24.3902C52.3124 24.3111 52.2778 24.2177 52.27 24.1202C52.27 24.0602 52.27 24.0202 52.38 24.0002C52.49 23.9802 52.56 24.0002 52.56 23.9002C52.56 23.8002 52.56 23.8302 52.44 23.8302H51.52H50.52C50.42 23.8302 50.37 23.8302 50.37 23.9002C50.37 23.9702 50.37 23.9902 50.49 23.9902C50.6098 23.9955 50.7264 24.0298 50.83 24.0902C51.0418 24.2329 51.2194 24.4207 51.35 24.6402C51.63 25.0502 52.74 26.7702 52.79 26.8902C52.923 27.1386 52.9852 27.4188 52.97 27.7002V28.3502C52.97 28.4702 52.97 28.8002 52.97 29.1302C52.97 29.4602 52.88 29.5002 52.72 29.5402C52.6237 29.5522 52.5263 29.5522 52.43 29.5402C52.34 29.5402 52.31 29.5402 52.31 29.6202C52.31 29.7002 52.37 29.7002 52.48 29.7002H53.48C53.7 29.7002 54.24 29.7002 54.74 29.7002C54.85 29.7002 54.92 29.6702 54.92 29.6202Z"
                                      fill="white"/>
                                <path d="M55.5999 29.5301H55.3599C55.2999 29.5301 55.2699 29.5301 55.2699 29.6101C55.2699 29.6901 55.2699 29.6901 55.4199 29.6901C55.8399 29.6901 56.2699 29.6901 56.3499 29.6901H57.2499C57.3299 29.6901 57.3799 29.6901 57.3799 29.6101C57.3799 29.5301 57.3799 29.5301 57.2599 29.5301H57.1399C56.8899 29.5301 56.8199 29.4401 56.8199 29.3101C56.8319 29.1444 56.8725 28.982 56.9399 28.8301L57.3699 27.7801C57.3699 27.7801 57.3699 27.7301 57.4399 27.7301H59.3399C59.3582 27.7282 59.3767 27.732 59.3928 27.741C59.4088 27.7499 59.4218 27.7636 59.4299 27.7801L60.0499 29.3501C60.0581 29.3664 60.0628 29.3842 60.0636 29.4024C60.0645 29.4206 60.0615 29.4387 60.0549 29.4557C60.0483 29.4727 60.0383 29.4881 60.0253 29.5009C60.0124 29.5137 59.9969 29.5237 59.9799 29.5301C59.8899 29.5301 59.8799 29.5301 59.8799 29.6101C59.8799 29.6901 59.9699 29.6601 60.1199 29.6701C60.7899 29.6701 61.3799 29.6701 61.6699 29.6701C61.9599 29.6701 62.0099 29.6701 62.0099 29.5901C62.0099 29.5101 62.0099 29.5101 61.8999 29.5101H61.5999C61.4599 29.5101 61.2299 29.3801 60.9099 28.6701C60.3999 27.4901 59.0499 24.3001 58.9099 23.8601C58.8299 23.6901 58.7899 23.6201 58.6699 23.6201C58.5499 23.6201 58.5199 23.7101 58.4299 23.9301L56.3199 28.8401C56.0999 29.2301 55.9999 29.4701 55.5999 29.5301ZM58.3599 25.2801V25.2001C58.3599 25.2001 58.3599 25.2501 58.3599 25.2801L59.1299 27.2801H57.6099C57.6099 27.2801 57.6099 27.2801 57.6099 27.2201L58.3599 25.2801Z"
                                      fill="white"/>
                                <path d="M66.6299 29.5101C66.6905 29.2132 66.7306 28.9125 66.7499 28.6101C66.7499 28.5201 66.7499 28.4401 66.6799 28.4401C66.6099 28.4401 66.5899 28.4401 66.5799 28.5501C66.5618 28.7232 66.4921 28.8869 66.3799 29.0201C66.1799 29.2301 65.8699 29.2401 65.4399 29.2401C64.8099 29.2401 64.4999 29.2401 64.3599 29.0801C64.2199 28.9201 64.1899 28.4401 64.1899 27.4301V26.0601C64.1899 24.8701 64.1899 24.6501 64.1899 24.4101C64.1899 24.1701 64.2699 24.0201 64.4899 23.9801H64.7999C64.8999 23.9801 64.9499 23.9501 64.9499 23.8901C64.9499 23.8401 64.8899 23.8201 64.7699 23.8201H63.6099H62.4999C62.3799 23.8201 62.3199 23.8201 62.3199 23.8901C62.3199 23.9601 62.3199 23.9801 62.4599 23.9801H62.7299C62.9799 24.0601 63.0599 24.1401 63.0799 24.4101V27.4101C63.0799 28.1301 63.0799 28.7501 63.0799 29.0801C63.0799 29.4101 62.9999 29.4501 62.8399 29.4901C62.747 29.5021 62.6529 29.5021 62.5599 29.4901C62.4499 29.4901 62.4299 29.4901 62.4299 29.5701C62.4299 29.6501 62.4299 29.6501 62.5799 29.6501H63.1399H63.5999H64.6799C65.0799 29.6501 65.5499 29.6501 66.1299 29.6501C66.5399 29.7201 66.5699 29.6801 66.6299 29.5101Z"
                                      fill="white"/>
                                <path d="M76.17 29.7001H77C77.11 29.7001 77.17 29.7001 77.17 29.6101C77.17 29.5201 77.17 29.5401 77.06 29.5401H76.81C76.4152 29.4486 76.0629 29.2267 75.81 28.9101C75.27 28.3501 74.63 27.5301 73.81 26.5001C74.1543 26.2849 74.4432 25.9918 74.6534 25.6444C74.8636 25.297 74.9892 24.905 75.02 24.5001C75.0192 24.2568 74.963 24.0168 74.8556 23.7984C74.7481 23.5801 74.5923 23.3891 74.4 23.2401C73.8884 22.9431 73.3004 22.8039 72.71 22.8401H71.41C71.22 22.8401 70.64 22.8401 70.15 22.8401C70.02 22.8401 69.95 22.8401 69.95 22.9301C69.95 23.0201 70.01 23.0101 70.11 23.0101C70.2296 22.998 70.3503 22.998 70.47 23.0101C70.77 23.0701 70.84 23.2201 70.86 23.5301C70.88 23.8401 70.86 24.0801 70.86 25.4701V27.0001C70.86 27.8401 70.86 28.5701 70.81 29.0001C70.76 29.4301 70.73 29.4601 70.55 29.5001C70.4404 29.5137 70.3295 29.5137 70.22 29.5001C70.11 29.5001 70.07 29.5001 70.07 29.5701C70.07 29.6401 70.13 29.6601 70.25 29.6601H71.37C71.51 29.6601 72.19 29.6601 72.72 29.6601C72.84 29.6601 72.91 29.6601 72.91 29.5701C72.91 29.4801 72.91 29.5001 72.8 29.5001H72.35C72.07 29.5001 72.02 29.2601 71.99 29.0001C71.96 28.7401 71.99 27.8801 71.99 27.0001V26.9001C71.99 26.9001 71.99 26.8301 72.07 26.8301H72.86C72.891 26.8268 72.9223 26.8305 72.9517 26.8409C72.9811 26.8513 73.0078 26.8681 73.03 26.8901C73.15 27.0301 73.57 27.6501 73.94 28.1601C74.2595 28.6943 74.689 29.1545 75.2 29.5101C75.4996 29.6617 75.8353 29.7275 76.17 29.7001V29.7001ZM73.41 26.2501C73.2219 26.385 72.9891 26.4423 72.76 26.4101C72.5269 26.4124 72.2946 26.3821 72.07 26.3201C72 26.3201 71.98 26.2501 71.98 26.1501V23.3601C71.9771 23.3456 71.9771 23.3307 71.9801 23.3163C71.9831 23.3018 71.989 23.2881 71.9974 23.276C72.0058 23.2639 72.0165 23.2536 72.029 23.2457C72.0415 23.2378 72.0554 23.2325 72.07 23.2301C72.2292 23.2085 72.3907 23.2085 72.55 23.2301C72.7565 23.2315 72.9604 23.2765 73.1484 23.362C73.3364 23.4475 73.5043 23.5716 73.6411 23.7264C73.7779 23.8811 73.8806 24.0629 73.9424 24.26C74.0042 24.4571 74.0238 24.6649 74 24.8701C74.0219 25.1308 73.9797 25.393 73.8768 25.6336C73.7739 25.8742 73.6136 26.0859 73.41 26.2501V26.2501Z"
                                      fill="white"/>
                                <path d="M81.5499 29.52C81.6117 29.2371 81.6485 28.9493 81.6599 28.66C81.6599 28.57 81.6599 28.4699 81.5899 28.4699C81.5199 28.4699 81.5199 28.47 81.4999 28.59C81.4399 28.91 81.3499 29.08 81.1499 29.17C80.9043 29.2473 80.6471 29.2811 80.3899 29.27C79.5599 29.27 79.3099 29.15 79.2999 28.62C79.2999 28.39 79.2999 27.7299 79.2999 27.4599V26.84C79.2999 26.79 79.2999 26.76 79.2999 26.76C79.4999 26.76 80.4199 26.76 80.5699 26.76C80.7199 26.76 80.9699 26.91 81.0199 27.07C81.0699 27.23 81.0199 27.27 81.0199 27.35C81.0199 27.43 81.0199 27.41 81.0899 27.41C81.1599 27.41 81.1699 27.3 81.1699 27.24C81.1699 27.18 81.1699 26.8699 81.1699 26.7199C81.1699 26.3199 81.2299 26.19 81.2299 26.15C81.2299 26.11 81.2299 26.0599 81.1699 26.0599C81.1099 26.0599 81.0999 26.11 81.0399 26.17C80.9799 26.23 80.8499 26.27 80.6499 26.29H79.3499C79.3499 26.29 79.3499 26.2899 79.3499 26.2099V24.32V24.25C79.3499 24.25 80.4799 24.25 80.6199 24.25C81.0199 24.25 81.0899 24.39 81.1499 24.53C81.1714 24.6254 81.1714 24.7245 81.1499 24.82C81.1499 24.88 81.1499 24.92 81.2199 24.92C81.2899 24.92 81.2999 24.82 81.3099 24.79C81.3199 24.76 81.3099 24.36 81.3099 24.27C81.3139 24.1017 81.334 23.9343 81.3699 23.77C81.3699 23.77 81.3699 23.7 81.3699 23.7H81.2399C81.1699 23.7 81.0399 23.7 80.8999 23.75H78.7399H77.5799C77.4599 23.75 77.3999 23.75 77.3999 23.82C77.3999 23.89 77.3999 23.91 77.5299 23.91H77.8499C78.1099 23.99 78.1799 24.07 78.1999 24.34C78.2199 24.61 78.1999 24.8 78.1999 25.99V27.36C78.1999 28.08 78.1999 28.7 78.1999 29.03C78.1999 29.36 78.1199 29.4 77.9599 29.44C77.8636 29.452 77.7662 29.452 77.6699 29.44C77.5699 29.44 77.5399 29.44 77.5399 29.52C77.5399 29.6 77.5999 29.6 77.6999 29.6H78.2599H78.7199H79.6599C80.0499 29.6 80.5399 29.6 81.1399 29.6C81.4199 29.72 81.4999 29.72 81.5499 29.52Z"
                                      fill="white"/>
                                <path d="M82.91 29.5999C83.3289 29.7534 83.7744 29.8214 84.22 29.7999C84.6922 29.8341 85.1634 29.7224 85.57 29.4799C85.825 29.3282 86.0346 29.1108 86.177 28.8505C86.3195 28.5902 86.3896 28.2965 86.38 27.9999C86.38 27.2999 86.05 26.6999 84.98 26.1099L84.65 25.9999C83.93 25.5899 83.8 25.3199 83.8 24.9999C83.8 24.4699 84.32 24.1599 84.9 24.1599C85.0683 24.1492 85.2368 24.177 85.3927 24.2411C85.5487 24.3052 85.6879 24.404 85.8 24.5299C85.9138 24.662 85.9837 24.8263 86 24.9999C86 25.0899 86 25.1299 86.08 25.1299C86.16 25.1299 86.19 25.0499 86.19 24.8899C86.19 24.2699 86.19 24.0499 86.19 23.9499C86.19 23.8499 86.19 23.8699 86.08 23.8499C85.7279 23.7527 85.3652 23.6989 85 23.6899C83.88 23.6899 83 24.3099 83 25.2599C83 25.9499 83.31 26.4699 84.26 27.0299L84.73 27.3099C85.45 27.7299 85.53 28.0699 85.53 28.4099C85.531 28.552 85.5018 28.6926 85.4442 28.8225C85.3866 28.9524 85.302 29.0685 85.196 29.1631C85.0901 29.2577 84.9652 29.3287 84.8296 29.3712C84.6941 29.4138 84.551 29.427 84.41 29.4099C84.142 29.4381 83.872 29.3782 83.641 29.2393C83.4101 29.1004 83.2307 28.89 83.13 28.6399C83.0821 28.5083 83.0551 28.3699 83.05 28.2299C83.05 28.2299 83.05 28.1099 82.97 28.1099C82.89 28.1099 82.87 28.1899 82.87 28.3099C82.87 28.4299 82.87 28.9199 82.87 29.3099C82.75 29.5099 82.78 29.5499 82.91 29.5999Z"
                                      fill="white"/>
                                <path d="M90.5999 23.6902C90.173 23.6499 89.7423 23.699 89.3353 23.8342C88.9284 23.9695 88.554 24.188 88.2361 24.4758C87.9181 24.7636 87.6636 25.1145 87.4887 25.5061C87.3137 25.8976 87.2222 26.3213 87.2199 26.7502C87.2107 27.1749 87.2918 27.5967 87.4578 27.9877C87.6239 28.3788 87.871 28.7301 88.183 29.0184C88.495 29.3067 88.8646 29.5255 89.2675 29.6603C89.6704 29.7951 90.0973 29.8427 90.5199 29.8002C90.9567 29.8336 91.3957 29.7755 91.8088 29.6297C92.2219 29.4839 92.6 29.2536 92.919 28.9534C93.238 28.6532 93.4909 28.2897 93.6616 27.8863C93.8322 27.4828 93.9168 27.0482 93.9099 26.6102C93.9099 24.8202 92.6399 23.6902 90.5999 23.6902ZM90.8499 29.3802C89.3299 29.3802 88.4099 28.1102 88.4099 26.5102C88.4099 24.5802 89.4699 24.1002 90.4099 24.1002C91.7099 24.1002 92.7499 25.1702 92.7499 26.8902C92.7099 29.1102 91.4199 29.3802 90.8499 29.3802V29.3802Z"
                                      fill="white"/>
                                <path d="M100.53 29.54C100.467 29.5489 100.403 29.5489 100.34 29.54C100.003 29.4692 99.6993 29.2859 99.4799 29.02C98.9899 28.54 98.4199 27.83 97.6999 26.95C98.4899 26.32 98.8199 25.8 98.8199 25.22C98.8134 25.0099 98.7586 24.8041 98.6597 24.6186C98.5609 24.433 98.4207 24.2727 98.2499 24.15C97.7809 23.8989 97.2508 23.7846 96.7199 23.82H95.4599H94.3599C94.2399 23.82 94.1799 23.82 94.1799 23.89C94.1799 23.96 94.1799 23.98 94.3199 23.98H94.6399C94.8999 24.06 94.9699 24.14 94.9899 24.41C95.0099 24.68 94.9899 24.87 94.9899 26.06V27.43C94.9899 28.15 94.9899 28.77 94.9899 29.1C94.9899 29.43 94.9199 29.47 94.7499 29.51C94.6571 29.5232 94.5628 29.5232 94.4699 29.51C94.3699 29.51 94.3399 29.51 94.3399 29.59C94.3399 29.67 94.3399 29.67 94.4899 29.67H95.4899C95.5999 29.67 96.2699 29.67 96.7399 29.67C96.8399 29.67 96.9099 29.67 96.9099 29.59C96.9087 29.5782 96.9051 29.5667 96.8994 29.5563C96.8937 29.5458 96.886 29.5366 96.8766 29.5292C96.8673 29.5217 96.8567 29.5162 96.8452 29.5129C96.8338 29.5096 96.8218 29.5087 96.8099 29.51C96.6768 29.5192 96.5431 29.5192 96.4099 29.51C96.1599 29.51 96.1299 29.33 96.0999 29.1C96.0699 28.87 96.0999 28.16 96.0999 27.43V27.32C96.0999 27.32 96.0999 27.26 96.1699 27.26H96.8899C96.9382 27.2416 96.9916 27.2416 97.0399 27.26C97.1399 27.38 97.4799 27.91 97.7999 28.33C98.0841 28.7846 98.4585 29.176 98.8999 29.48C99.1758 29.604 99.4786 29.6556 99.7799 29.63H100.56C100.66 29.63 100.71 29.63 100.71 29.55C100.71 29.47 100.6 29.54 100.53 29.54ZM97.2799 26.75C97.1107 26.8576 96.9082 26.9002 96.7099 26.87C96.5042 26.8782 96.2984 26.8546 96.0999 26.8C96.0399 26.8 96.0199 26.75 96.0199 26.66V24.34C96.0169 24.315 96.0235 24.2897 96.0384 24.2693C96.0532 24.249 96.0752 24.2349 96.0999 24.23C96.2596 24.2155 96.4203 24.2155 96.5799 24.23C96.755 24.23 96.9281 24.2673 97.0876 24.3395C97.2471 24.4117 97.3893 24.5171 97.5048 24.6487C97.6203 24.7803 97.7064 24.935 97.7573 25.1025C97.8082 25.27 97.8227 25.4465 97.7999 25.62C97.8119 25.8365 97.7708 26.0526 97.6802 26.2496C97.5895 26.4465 97.4521 26.6183 97.2799 26.75V26.75Z"
                                      fill="white"/>
                                <path d="M105.2 23.7502H104.98C104.797 23.7657 104.613 23.7657 104.43 23.7502H101.16C100.89 23.7658 100.62 23.7658 100.35 23.7502C100.15 23.7502 100.06 23.6602 100 23.6602C99.94 23.6602 99.93 23.6602 99.91 23.8102C99.8339 24.1202 99.7738 24.4339 99.73 24.7502C99.73 24.8302 99.73 24.8802 99.81 24.8802C99.89 24.8802 99.88 24.8802 99.9 24.7802C99.9302 24.6826 99.9776 24.5911 100.04 24.5102C100.15 24.3402 100.35 24.2802 100.82 24.2802H102.02V27.4302C102.02 28.1502 102.02 28.7702 102.02 29.1002C102.02 29.4302 101.95 29.4702 101.78 29.5102C101.687 29.5233 101.593 29.5233 101.5 29.5102C101.4 29.5102 101.37 29.5102 101.37 29.5902C101.37 29.6702 101.37 29.6702 101.53 29.6702H102.58C102.81 29.6702 103.35 29.6702 103.88 29.6702C103.98 29.6702 104.04 29.6702 104.04 29.5902C104.04 29.5102 104.04 29.5102 103.91 29.5102C103.774 29.5204 103.636 29.5204 103.5 29.5102C103.26 29.5102 103.21 29.3302 103.19 29.1102C103.17 28.8902 103.14 28.1102 103.14 27.4302V24.2802H104.14C104.86 24.2802 105.08 24.5202 105.09 24.7302V24.8102C105.09 24.9302 105.09 24.9602 105.19 24.9602C105.29 24.9602 105.25 24.9602 105.26 24.8402C105.27 24.7202 105.26 24.0602 105.26 23.8902C105.26 23.7202 105.26 23.7502 105.2 23.7502Z"
                                      fill="white"/>
                                <path d="M108.18 26.13L107.85 25.95C107.12 25.54 107 25.27 107 24.95C107 24.42 107.52 24.11 108.1 24.11C108.268 24.0992 108.437 24.127 108.593 24.1911C108.749 24.2552 108.888 24.354 109 24.48C109.124 24.6265 109.197 24.8087 109.21 25C109.21 25.09 109.21 25.13 109.29 25.13C109.37 25.13 109.39 25.05 109.39 24.89C109.39 24.27 109.39 24.05 109.39 23.95C109.39 23.85 109.39 23.87 109.28 23.85C108.904 23.7581 108.517 23.7144 108.13 23.72C107.01 23.72 106.13 24.34 106.13 25.29C106.13 25.98 106.45 26.5 107.4 27.06L107.87 27.34C108.58 27.76 108.67 28.1 108.67 28.44C108.671 28.582 108.642 28.7227 108.584 28.8525C108.527 28.9824 108.442 29.0985 108.336 29.1931C108.23 29.2877 108.105 29.3587 107.97 29.4013C107.834 29.4438 107.691 29.457 107.55 29.44C107.281 29.4688 107.009 29.4093 106.776 29.2704C106.544 29.1315 106.363 28.9208 106.26 28.67C106.22 28.5367 106.196 28.399 106.19 28.26C106.19 28.26 106.19 28.14 106.11 28.14C106.03 28.14 106 28.22 106 28.34C106 28.46 106 28.95 106 29.34C106 29.52 106 29.56 106.15 29.61C106.572 29.7632 107.021 29.8312 107.47 29.81C107.942 29.8428 108.413 29.7312 108.82 29.49C109.069 29.3378 109.275 29.1229 109.415 28.8668C109.555 28.6106 109.626 28.322 109.62 28.03C109.57 27.32 109.24 26.72 108.18 26.13Z"
                                      fill="white"/>
                                <path d="M57.63 32.7099L57.15 33.13C57.0368 32.9929 56.8923 32.885 56.7288 32.8154C56.5652 32.7458 56.3873 32.7165 56.21 32.7299C55.8803 32.7292 55.5625 32.8537 55.3212 33.0784C55.0798 33.303 54.9328 33.611 54.91 33.9399C54.9056 34.0744 54.93 34.2083 54.9818 34.3325C55.0336 34.4567 55.1114 34.5684 55.21 34.66C55.55 35.01 55.9 35.1399 56.21 35.4399C56.2964 35.5246 56.3648 35.6258 56.4112 35.7375C56.4576 35.8491 56.481 35.969 56.48 36.09C56.4761 36.2042 56.4498 36.3166 56.4024 36.4207C56.3551 36.5248 56.2877 36.6185 56.2041 36.6965C56.1205 36.7745 56.0224 36.8353 55.9153 36.8753C55.8082 36.9154 55.6943 36.934 55.58 36.93C54.9 36.93 54.52 36.03 54.58 35.16H54.46L54 37H54.12L54.67 36.54C54.7895 36.6911 54.9414 36.8136 55.1144 36.8984C55.2875 36.9832 55.4773 37.0282 55.67 37.0299C55.8547 37.0407 56.0397 37.0148 56.2144 36.9536C56.389 36.8925 56.5498 36.7973 56.6874 36.6736C56.825 36.55 56.9368 36.4002 57.0162 36.2331C57.0956 36.066 57.1411 35.8848 57.15 35.7C57.1359 35.3708 56.9963 35.0595 56.76 34.83C56.43 34.49 56.06 34.39 55.7 34.04C55.6279 33.9738 55.5703 33.8935 55.5307 33.804C55.4911 33.7145 55.4704 33.6178 55.47 33.52C55.4829 33.3219 55.5728 33.1367 55.7204 33.004C55.868 32.8714 56.0617 32.8017 56.26 32.81C56.88 32.81 57.26 33.39 57.26 34.31H57.35L57.7 32.7L57.63 32.7099Z"
                                      fill="white"/>
                                <path d="M59.3399 36.0001C59.1999 36.4701 58.8399 37.0001 58.6399 37.0001C58.5922 37.0001 58.5464 36.9811 58.5127 36.9474C58.4789 36.9136 58.4599 36.8678 58.4599 36.8201C58.4599 36.4001 59.0599 35.4601 59.0599 34.9601C59.0599 34.4601 58.8599 34.3401 58.6099 34.3401C58.3599 34.3401 57.8999 34.6701 57.6899 35.3401H57.8099C57.9599 34.8401 58.2799 34.4401 58.5399 34.4401C58.5814 34.4474 58.6187 34.4699 58.6446 34.5031C58.6705 34.5364 58.6831 34.5781 58.6799 34.6201C58.6799 34.9801 58.0799 35.9501 58.0799 36.4601C58.0799 36.9701 58.2799 37.0701 58.5599 37.0701C58.8399 37.0701 59.2899 36.4901 59.4499 36.0001H59.3399Z"
                                      fill="white"/>
                                <path d="M59.1899 32.73C59.1399 32.7338 59.0912 32.7474 59.0466 32.7701C59.0019 32.7928 58.9621 32.8241 58.9296 32.8622C58.8971 32.9003 58.8724 32.9444 58.857 32.9921C58.8416 33.0398 58.8358 33.09 58.8399 33.14C58.8372 33.1781 58.842 33.2163 58.8541 33.2526C58.8662 33.2888 58.8854 33.3223 58.9105 33.3511C58.9356 33.3799 58.9661 33.4035 59.0003 33.4204C59.0345 33.4374 59.0718 33.4474 59.1099 33.45C59.2098 33.4423 59.3029 33.3965 59.3699 33.322C59.437 33.2475 59.4728 33.1501 59.4699 33.05C59.4726 33.0106 59.4675 32.971 59.4549 32.9336C59.4423 32.8961 59.4224 32.8615 59.3964 32.8318C59.3704 32.8021 59.3387 32.7778 59.3033 32.7603C59.2679 32.7428 59.2293 32.7325 59.1899 32.73V32.73Z"
                                      fill="white"/>
                                <path d="M62.13 33.9402C61.91 33.9402 61.78 34.1502 61.72 34.3702C61.5825 34.294 61.4271 34.256 61.27 34.2602C60.9932 34.2608 60.7263 34.3629 60.5199 34.5473C60.3134 34.7316 60.1818 34.9853 60.15 35.2602C60.1426 35.4161 60.1778 35.571 60.2518 35.7084C60.3258 35.8458 60.4358 35.9605 60.57 36.0402C59.95 36.2202 59.7 36.4802 59.7 36.8002C59.7 37.1202 59.85 37.2102 60.17 37.2702C59.54 37.4502 59.35 37.7102 59.35 37.9402C59.35 38.1702 59.87 38.4802 60.46 38.4802C61.46 38.4802 61.94 38.1402 61.94 37.5502C61.94 37.1202 61.62 36.7902 61.01 36.7902H60.56C60.32 36.7902 60.03 36.7202 60.03 36.5202C60.03 36.3202 60.36 36.1702 60.72 36.0802C60.8196 36.0931 60.9204 36.0931 61.02 36.0802C61.2963 36.0815 61.5631 35.9798 61.7684 35.7949C61.9737 35.61 62.1026 35.3551 62.13 35.0802C62.1357 34.9522 62.1095 34.8249 62.0536 34.7096C61.9977 34.5944 61.914 34.4949 61.81 34.4202C61.81 34.3302 61.87 34.2602 61.92 34.2602C61.97 34.2602 62.04 34.4002 62.18 34.4002C62.32 34.4002 62.36 34.2802 62.36 34.1402C62.3588 34.1117 62.3517 34.0837 62.3394 34.0581C62.327 34.0324 62.3095 34.0095 62.288 33.9907C62.2664 33.972 62.2413 33.9579 62.2142 33.9492C62.187 33.9405 62.1584 33.9374 62.13 33.9402ZM60.71 37.3102H61C61.48 37.3102 61.7 37.5002 61.7 37.7302C61.7 38.2002 61.06 38.3502 60.55 38.3502C60.04 38.3502 59.69 38.2102 59.69 37.8502C59.69 37.4902 60.08 37.3102 60.71 37.3102V37.3102ZM61 36.0002C60.9405 36.0019 60.8813 35.9909 60.8263 35.968C60.7713 35.945 60.7219 35.9107 60.6812 35.8672C60.6406 35.8237 60.6096 35.772 60.5904 35.7156C60.5713 35.6593 60.5643 35.5995 60.57 35.5402C60.57 35.4602 60.68 34.3202 61.29 34.3202C61.58 34.3202 61.71 34.5002 61.71 34.8302C61.7 34.9002 61.65 36.0002 61 36.0002Z"
                                      fill="white"/>
                                <path d="M65.07 36.91C65 36.91 64.95 36.91 64.95 36.75C64.9979 36.4658 65.0854 36.1898 65.21 35.93C65.3447 35.6117 65.4291 35.2743 65.46 34.93C65.46 34.54 65.27 34.24 64.94 34.24C64.43 34.24 64.07 34.89 63.82 35.33C63.8581 35.1455 63.8815 34.9582 63.89 34.77C63.89 34.44 63.76 34.24 63.5 34.24C63.05 34.24 62.7 34.94 62.5 35.43H62.63C62.83 34.87 63.14 34.43 63.37 34.43C63.6 34.43 63.49 34.5 63.49 34.59C63.4986 34.6597 63.4986 34.7303 63.49 34.8L62.87 37H63.35C63.81 35.36 64.46 34.4 64.86 34.4C64.96 34.4 65.07 34.46 65.07 34.65C65.03 34.9583 64.9423 35.2586 64.81 35.54C64.6568 35.853 64.5651 36.1924 64.54 36.54C64.54 36.83 64.68 37.05 64.91 37.05C65.38 37.05 65.71 36.59 65.91 36.05H65.81C65.55 36.71 65.18 36.91 65.07 36.91Z"
                                      fill="white"/>
                                <path d="M68.45 36.91C68.37 36.91 68.33 36.85 68.33 36.74C68.3173 36.6672 68.3173 36.5928 68.33 36.52L68.93 34.31H68.52L68.35 34.81C68.29 34.47 68.14 34.28 67.83 34.28C67.3949 34.4094 67.0114 34.672 66.7333 35.0307C66.4553 35.3895 66.2967 35.8264 66.28 36.28C66.2718 36.376 66.2826 36.4726 66.3119 36.5643C66.3412 36.656 66.3883 36.741 66.4506 36.8145C66.5129 36.8879 66.5891 36.9483 66.6748 36.9921C66.7605 37.036 66.854 37.0625 66.95 37.07C67.1715 37.0381 67.3807 36.9483 67.5563 36.8095C67.7319 36.6708 67.8677 36.4881 67.95 36.28C67.9369 36.3729 67.9369 36.4672 67.95 36.56C67.95 36.88 68.1 37.07 68.35 37.07C68.75 37.07 69.05 36.64 69.2 36.07H69.09C69 36.47 68.65 36.91 68.45 36.91ZM67.57 36.65C67.4414 36.7941 67.2694 36.8923 67.08 36.93C66.93 36.93 66.8 36.83 66.8 36.53C66.8939 35.8148 67.1505 35.1306 67.55 34.53C67.6444 34.4315 67.7737 34.3741 67.91 34.37C68.09 34.37 68.29 34.55 68.29 34.87C68.23 35.5212 67.9796 36.1403 67.57 36.65V36.65Z"
                                      fill="white"/>
                                <path d="M70.89 33.3401H70.42L70.13 34.3401H69.64V34.5101H70.13L69.62 36.3301C69.6109 36.4031 69.6109 36.477 69.62 36.5501C69.6141 36.6089 69.6211 36.6683 69.6403 36.7242C69.6596 36.7801 69.6907 36.8312 69.7315 36.8739C69.7724 36.9167 69.822 36.9501 69.877 36.9719C69.9319 36.9936 69.9909 37.0033 70.05 37.0001C70.57 37.0001 70.9 36.4401 71.05 36.0601H70.94C70.72 36.5801 70.35 36.8801 70.17 36.8801C69.99 36.8801 70.03 36.8101 70.03 36.7101C70.0253 36.6803 70.0253 36.6499 70.03 36.6201L70.6 34.5101H71V34.3401H70.6L70.89 33.3401Z"
                                      fill="white"/>
                                <path d="M73.68 36.9101C73.58 36.9101 73.54 36.8501 73.54 36.7501C73.5286 36.6671 73.5286 36.583 73.54 36.5001L74.13 34.3201H73.67C73.06 36.5801 72.33 36.9401 72.15 36.9401C71.97 36.9401 71.95 36.8301 71.95 36.6701C71.9882 36.3677 72.076 36.0738 72.21 35.8001C72.3538 35.4843 72.4418 35.1459 72.47 34.8001C72.47 34.4701 72.33 34.3101 72.09 34.3101C71.7 34.3101 71.28 34.7701 71.09 35.3701H71.22C71.4 34.7401 71.81 34.4701 71.93 34.4701C72.05 34.4701 72.05 34.5401 72.05 34.6401C72.0032 34.9213 71.9156 35.1941 71.79 35.4501C71.6496 35.7495 71.5616 36.0708 71.53 36.4001C71.53 36.7801 71.71 37.0701 72.07 37.0701C72.43 37.0701 72.92 36.5201 73.2 35.9401C73.1551 36.1271 73.1283 36.3179 73.12 36.5101C73.12 36.9101 73.27 37.0701 73.51 37.0701C73.96 37.0701 74.25 36.5301 74.51 35.9201H74.39C74.19 36.5301 73.87 36.9101 73.68 36.9101Z"
                                      fill="white"/>
                                <path d="M76.7499 34.26C76.3999 34.26 76.1399 34.89 75.9399 35.36C75.9726 35.1783 75.9926 34.9945 75.9999 34.81C75.9999 34.5 75.8599 34.27 75.5999 34.27C75.3399 34.27 74.9799 34.75 74.7799 35.27H74.9099C75.0899 34.69 75.3599 34.36 75.5199 34.36C75.6799 34.36 75.6599 34.41 75.6599 34.56C75.6488 34.7025 75.622 34.8434 75.5799 34.98L74.9999 37H75.4399C75.9299 35.57 76.3499 34.41 76.6099 34.41C76.6099 34.41 76.6699 34.41 76.6699 34.48C76.6699 34.55 76.5899 34.6 76.5899 34.74C76.5886 34.771 76.5935 34.802 76.6045 34.8311C76.6154 34.8602 76.6321 34.8867 76.6536 34.9091C76.6751 34.9316 76.7009 34.9494 76.7295 34.9616C76.7581 34.9738 76.7888 34.98 76.8199 34.98C76.9799 34.98 77.0799 34.78 77.0799 34.61C77.0826 34.565 77.0761 34.52 77.0608 34.4776C77.0454 34.4352 77.0215 34.3964 76.9906 34.3636C76.9597 34.3308 76.9224 34.3047 76.881 34.2869C76.8396 34.2691 76.795 34.2599 76.7499 34.26V34.26Z"
                                      fill="white"/>
                                <path d="M79.25 34.73C79.2474 34.6661 79.2321 34.6033 79.205 34.5453C79.1778 34.4874 79.1393 34.4355 79.0918 34.3926C79.0443 34.3498 78.9887 34.3168 78.9283 34.2958C78.8678 34.2747 78.8038 34.266 78.74 34.27C78.2889 34.3847 77.8864 34.6406 77.5913 35.0005C77.2962 35.3604 77.124 35.8052 77.1 36.27C77.0868 36.3696 77.0955 36.4708 77.1255 36.5667C77.1555 36.6625 77.2061 36.7507 77.2737 36.825C77.3413 36.8992 77.4244 36.9579 77.517 36.9967C77.6096 37.0356 77.7096 37.0538 77.81 37.05C78.0875 37.0305 78.3546 36.9366 78.5833 36.7782C78.8121 36.6199 78.994 36.4029 79.11 36.15H79C78.9033 36.3473 78.763 36.52 78.5898 36.6551C78.4165 36.7903 78.2148 36.8842 78 36.93C77.8 36.93 77.66 36.79 77.66 36.5C77.6737 36.2408 77.7242 35.985 77.81 35.74C78.61 35.48 79.25 35.27 79.25 34.73ZM78.68 34.38C78.82 34.38 78.93 34.49 78.93 34.68C78.9067 34.8842 78.8151 35.0745 78.67 35.22C78.4147 35.4269 78.1125 35.5677 77.79 35.63C78 34.88 78.29 34.38 78.68 34.38V34.38Z"
                                      fill="white"/>
                                <path d="M84.3599 33.15C84.265 33.0165 84.1388 32.9084 83.9923 32.8352C83.8458 32.762 83.6836 32.7258 83.5199 32.7299C82.8518 32.811 82.2369 33.1351 81.7925 33.6404C81.348 34.1457 81.105 34.797 81.1099 35.47C81.102 35.6799 81.1389 35.8891 81.2181 36.0838C81.2973 36.2784 81.4171 36.4539 81.5694 36.5986C81.7217 36.7433 81.903 36.854 82.1014 36.9232C82.2998 36.9924 82.5107 37.0186 82.7199 37C83.0495 36.999 83.372 36.9046 83.6499 36.7275C83.9278 36.5505 84.1498 36.2982 84.2899 36H84.1699C84.0516 36.2571 83.865 36.477 83.6306 36.6356C83.3961 36.7943 83.1227 36.8857 82.8399 36.9C82.2899 36.9 81.9099 36.52 81.9099 35.77C81.9238 34.8125 82.2348 33.883 82.7999 33.11C82.8955 33.0069 83.0116 32.9252 83.1408 32.87C83.2701 32.8149 83.4095 32.7876 83.5499 32.79C84.0799 32.79 84.4499 33.28 84.5499 34.36H84.6399L84.9099 32.7L84.3599 33.15Z"
                                      fill="white"/>
                                <path d="M85.3799 32.87H85.5799C85.6176 32.8683 85.6551 32.8748 85.69 32.8891C85.7249 32.9033 85.7563 32.925 85.782 32.9526C85.8076 32.9802 85.827 33.013 85.8388 33.0488C85.8505 33.0846 85.8543 33.1226 85.8499 33.16C85.8542 33.2133 85.8542 33.2668 85.8499 33.32L85.0799 36.32C85.0704 36.3796 85.0704 36.4404 85.0799 36.5C85.0743 36.5637 85.0821 36.6278 85.1027 36.6884C85.1233 36.7489 85.1563 36.8044 85.1996 36.8515C85.2429 36.8985 85.2955 36.936 85.3541 36.9616C85.4127 36.9872 85.476 37.0003 85.5399 37C85.9099 37 86.2299 36.55 86.4099 36H86.2999C86.1999 36.39 85.8999 36.87 85.6499 36.87C85.5599 36.87 85.5299 36.79 85.5299 36.66C85.5211 36.5702 85.5211 36.4798 85.5299 36.39L86.4499 32.83V32.77H85.4499L85.3799 32.87Z"
                                      fill="white"/>
                                <path d="M89.07 36.9101C88.97 36.9101 88.94 36.8501 88.94 36.7501C88.9326 36.6669 88.9326 36.5832 88.94 36.5001L89.54 34.3201H89.07C88.47 36.5801 87.73 36.9401 87.55 36.9401C87.37 36.9401 87.35 36.8301 87.35 36.6701C87.3877 36.3663 87.4791 36.0717 87.62 35.8001C87.7638 35.4843 87.8518 35.1459 87.88 34.8001C87.88 34.4701 87.74 34.3101 87.49 34.3101C87.24 34.3101 86.68 34.7701 86.49 35.3701H86.62C86.81 34.7401 87.21 34.4701 87.33 34.4701C87.45 34.4701 87.45 34.5401 87.45 34.6401C87.4028 34.9199 87.3188 35.1923 87.2 35.4501C87.0596 35.7495 86.9717 36.0708 86.94 36.4001C86.94 36.7801 87.12 37.0701 87.48 37.0701C87.84 37.0701 88.32 36.5201 88.61 35.9401C88.563 36.127 88.5329 36.3178 88.52 36.5101C88.52 36.9101 88.68 37.0701 88.91 37.0701C89.36 37.0701 89.65 36.5301 89.91 35.9201H89.8C89.58 36.5301 89.26 36.9101 89.07 36.9101Z"
                                      fill="white"/>
                                <path d="M91.9999 34.28C91.7099 34.28 91.4399 34.47 91.1699 34.88L91.7599 32.78H90.7599V32.87H90.8499C91.0899 32.87 91.2099 32.98 91.2099 33.15C91.2148 33.1999 91.2148 33.2501 91.2099 33.3L90.3499 36C90.3368 36.0929 90.3368 36.1872 90.3499 36.28C90.3443 36.387 90.361 36.494 90.3991 36.5942C90.4372 36.6944 90.4957 36.7855 90.571 36.8617C90.6463 36.938 90.7367 36.9977 90.8364 37.037C90.9361 37.0763 91.0429 37.0944 91.1499 37.09C92.0599 37.09 92.7099 36.01 92.7099 35.28C92.7099 34.55 92.3299 34.28 91.9999 34.28ZM91.5799 36.76C91.4634 36.878 91.3057 36.9461 91.1399 36.95C91.0855 36.9505 91.0317 36.9393 90.982 36.9171C90.9323 36.895 90.8879 36.8624 90.8519 36.8217C90.8159 36.7809 90.789 36.7329 90.7731 36.6808C90.7573 36.6288 90.7528 36.574 90.7599 36.52C90.8305 35.8376 91.0864 35.1874 91.4999 34.64C91.6281 34.4991 91.8014 34.4071 91.9899 34.38C92.1699 34.38 92.2999 34.52 92.2999 34.77C92.2107 35.4849 91.9499 36.1676 91.5399 36.76H91.5799Z"
                                      fill="white"/>
                                <path d="M18.2899 28.1899L14.5699 29.9999H20.2099L18.2899 28.1899Z" fill="white"/>
                                <path d="M20.41 35.84V30.2L18.59 32.1199L20.41 35.84Z" fill="white"/>
                                <path d="M16.99 33.42L18.33 32.08L17.58 31.71L16.99 33.42Z" fill="white"/>
                                <path d="M18.7 27.1701L16.99 26.5801L18.33 27.9301L18.7 27.1701Z" fill="white"/>
                                <path d="M23.83 26.5801L22.48 27.9301L23.24 28.2901L23.83 26.5801Z" fill="white"/>
                                <path d="M20.4099 24.1602V29.8002L22.2199 27.8802L20.4099 24.1602Z" fill="white"/>
                                <path d="M22.11 32.8301L23.83 33.4201L22.48 32.0801L22.11 32.8301Z" fill="white"/>
                                <path d="M32.13 30.1501C32.3387 29.9467 32.4981 29.6984 32.5961 29.4239C32.6941 29.1495 32.7279 28.8563 32.6951 28.5667C32.6623 28.2772 32.5637 27.999 32.4068 27.7535C32.2499 27.5079 32.0389 27.3015 31.79 27.1501C31.5437 26.9342 31.3607 26.6556 31.2603 26.3439C31.1599 26.0322 31.146 25.6991 31.2199 25.3801C31.336 25.1079 31.3865 24.8122 31.3673 24.517C31.3482 24.2217 31.2601 23.935 31.11 23.6801C30.9601 23.4217 30.7518 23.2021 30.5017 23.0388C30.2516 22.8756 29.9668 22.7733 29.67 22.7401C29.358 22.6433 29.078 22.464 28.8597 22.221C28.6414 21.9781 28.4929 21.6806 28.43 21.3601C28.4252 21.067 28.3535 20.779 28.2202 20.518C28.087 20.257 27.8957 20.0299 27.6612 19.8543C27.4266 19.6786 27.155 19.5589 26.867 19.5045C26.5791 19.45 26.2825 19.4622 26 19.5401C25.6768 19.5796 25.3489 19.5307 25.0513 19.3986C24.7537 19.2666 24.4975 19.0562 24.3099 18.7901C24.1839 18.5198 23.996 18.2831 23.7615 18.0989C23.5269 17.9148 23.2524 17.7884 22.9599 17.7301V17.7301H22.87C22.5952 17.6852 22.3138 17.7033 22.0471 17.783C21.7803 17.8627 21.5351 18.0019 21.3299 18.1901C21.0472 18.3533 20.7264 18.4393 20.3999 18.4393C20.0735 18.4393 19.7527 18.3533 19.4699 18.1901C19.2447 17.9953 18.9773 17.8557 18.6888 17.7821C18.4003 17.7085 18.0986 17.703 17.8077 17.766C17.5167 17.8291 17.2443 17.9589 17.0122 18.1453C16.78 18.3317 16.5944 18.5696 16.4699 18.8401C16.2793 19.1055 16.0212 19.315 15.7222 19.4469C15.4233 19.5788 15.0945 19.6282 14.77 19.5901C14.5041 19.5106 14.2242 19.49 13.9496 19.5298C13.675 19.5695 13.4124 19.6685 13.18 19.8201L13.1099 19.8701C12.8689 20.0459 12.6727 20.2761 12.5372 20.5419C12.4017 20.8077 12.3307 21.1017 12.3299 21.4001C12.2553 21.7274 12.0915 22.0276 11.8568 22.2677C11.622 22.5077 11.3255 22.6781 10.9999 22.7601C10.706 22.7981 10.4248 22.9036 10.1785 23.0684C9.9321 23.2332 9.72725 23.4528 9.57995 23.7101C9.42903 23.9668 9.34127 24.2557 9.32388 24.553C9.3065 24.8503 9.35999 25.1475 9.47995 25.4201C9.55312 25.7375 9.53874 26.0689 9.43836 26.3789C9.33798 26.6889 9.15535 26.9658 8.90995 27.1801C8.65592 27.3343 8.44138 27.5457 8.2834 27.7974C8.12543 28.0491 8.02837 28.3342 7.99995 28.6301V28.6301C7.99995 28.6301 7.99995 28.6901 7.99995 28.7201C7.98548 28.999 8.03365 29.2776 8.14094 29.5354C8.24823 29.7932 8.4119 30.0238 8.61995 30.2101C8.81125 30.4727 8.92961 30.7813 8.96298 31.1045C8.99635 31.4276 8.94355 31.7539 8.80995 32.0501C8.63944 32.2928 8.5288 32.5725 8.48709 32.8663C8.44538 33.16 8.47377 33.4594 8.56995 33.7401C8.65225 34.0335 8.80577 34.3021 9.01686 34.5219C9.22795 34.7417 9.49008 34.906 9.77995 35.0001C10.0621 35.1629 10.296 35.3978 10.4576 35.6807C10.6192 35.9636 10.7029 36.2843 10.6999 36.6101C10.6455 36.8827 10.6523 37.1641 10.7197 37.4339C10.7872 37.7036 10.9136 37.9551 11.09 38.1701L11.1499 38.2301C11.3488 38.4523 11.5975 38.6243 11.8755 38.7321C12.1536 38.8399 12.4533 38.8803 12.7499 38.8501C13.0744 38.8817 13.3845 38.9994 13.6482 39.191C13.9119 39.3826 14.1197 39.6412 14.2499 39.9401C14.3149 40.2292 14.4475 40.4987 14.637 40.7264C14.8266 40.9542 15.0675 41.1337 15.34 41.2501C15.6116 41.3707 15.9076 41.4263 16.2044 41.4124C16.5013 41.3985 16.7908 41.3155 17.0499 41.1701C17.3581 41.0659 17.6885 41.0462 18.0068 41.113C18.3251 41.1799 18.6197 41.3308 18.86 41.5501C19.0384 41.7894 19.271 41.983 19.5386 42.1151C19.8063 42.2472 20.1015 42.314 20.3999 42.3101H20.5099C20.7884 42.2926 21.0596 42.2146 21.3049 42.0817C21.5501 41.9487 21.7634 41.7639 21.9299 41.5401C22.1703 41.3209 22.4644 41.1693 22.7823 41.1008C23.1003 41.0323 23.4307 41.0493 23.7399 41.1501C23.997 41.2969 24.2856 41.3799 24.5814 41.3921C24.8772 41.4043 25.1717 41.3453 25.44 41.2201C25.7143 41.1011 25.9564 40.9183 26.1459 40.687C26.3355 40.4557 26.4672 40.1825 26.53 39.8901C26.6569 39.5947 26.8598 39.3383 27.118 39.1469C27.3762 38.9554 27.6805 38.8358 28 38.8001C28.2765 38.8243 28.5551 38.7876 28.816 38.6926C29.0768 38.5975 29.3137 38.4465 29.51 38.2501L29.57 38.1901C29.7734 37.97 29.9212 37.7046 30.0013 37.4158C30.0813 37.1271 30.0911 36.8234 30.03 36.5301C30.0278 36.2058 30.1118 35.8867 30.2735 35.6056C30.4351 35.3245 30.6686 35.0913 30.95 34.9301C31.2304 34.8348 31.4843 34.6747 31.6911 34.4627C31.8979 34.2506 32.0517 33.9928 32.1399 33.7101C32.2463 33.4294 32.2827 33.127 32.2462 32.8291C32.2096 32.5312 32.101 32.2467 31.93 32.0001C31.7938 31.7022 31.7405 31.3732 31.7757 31.0476C31.8108 30.722 31.9333 30.4119 32.13 30.1501V30.1501ZM30.53 30.1501C30.3893 30.3387 30.3021 30.5618 30.2774 30.7959C30.2528 31.0299 30.2917 31.2662 30.3899 31.4801C30.5356 31.7019 30.6316 31.9525 30.6713 32.2149C30.711 32.4773 30.6935 32.7451 30.62 33.0001C30.537 33.2687 30.3925 33.5142 30.1981 33.7173C30.0037 33.9204 29.7647 34.0754 29.5 34.1701C29.2986 34.2852 29.1308 34.4509 29.0132 34.6509C28.8957 34.8509 28.8325 35.0781 28.83 35.3101C28.8854 35.5895 28.8744 35.878 28.798 36.1524C28.7216 36.4269 28.5818 36.6795 28.3899 36.8901V36.8901H28.34C27.9978 37.2328 27.5343 37.4269 27.0499 37.4301H26.9C26.6671 37.4486 26.4436 37.53 26.2534 37.6656C26.0632 37.8012 25.9134 37.986 25.82 38.2001C25.7596 38.4721 25.6382 38.7269 25.4649 38.9451C25.2917 39.1634 25.0712 39.3395 24.82 39.4601C24.567 39.5808 24.2902 39.6435 24.01 39.6435C23.7297 39.6435 23.4529 39.5808 23.2 39.4601C22.9787 39.3862 22.7419 39.3723 22.5135 39.4197C22.2852 39.4671 22.0735 39.5742 21.8999 39.7301C21.7391 39.9416 21.5342 40.1156 21.2993 40.24C21.0644 40.3643 20.8053 40.436 20.54 40.4501H20.4199C20.1427 40.4494 19.8692 40.3861 19.6198 40.2649C19.3705 40.1437 19.1517 39.9677 18.9799 39.7501C18.808 39.5916 18.5967 39.4821 18.3681 39.4328C18.1395 39.3836 17.9019 39.3965 17.6799 39.4701C17.4366 39.6079 17.1651 39.6884 16.886 39.7055C16.6068 39.7227 16.3275 39.676 16.0691 39.569C15.8108 39.4619 15.5802 39.2975 15.3949 39.088C15.2097 38.8785 15.0746 38.6296 14.9999 38.3601C14.9066 38.1461 14.7586 37.9604 14.5708 37.8217C14.383 37.683 14.1619 37.5962 13.93 37.5701C13.6472 37.5979 13.3618 37.558 13.0975 37.4536C12.8332 37.3493 12.5975 37.1835 12.4099 36.9701L12.34 36.8901C12.1757 36.6862 12.0568 36.4496 11.9913 36.1961C11.9257 35.9426 11.9151 35.678 11.9599 35.4201C11.9642 35.1878 11.9062 34.9586 11.7919 34.7563C11.6776 34.5541 11.5112 34.3862 11.31 34.2701C11.0421 34.1792 10.799 34.0275 10.5997 33.8269C10.4003 33.6263 10.2502 33.3822 10.1611 33.1139C10.0719 32.8455 10.0462 32.5601 10.0859 32.2801C10.1256 32.0001 10.2297 31.7331 10.39 31.5001C10.4851 31.2855 10.5223 31.0498 10.4977 30.8163C10.4732 30.5829 10.3877 30.3601 10.2499 30.1701C10.0568 29.989 9.90502 29.7684 9.80493 29.5234C9.70483 29.2783 9.65879 29.0145 9.66995 28.7501V28.6501C9.69799 28.3695 9.79013 28.0992 9.93924 27.8599C10.0884 27.6206 10.2905 27.4188 10.5299 27.2701C10.7014 27.1117 10.8279 26.9108 10.8964 26.6877C10.9649 26.4646 10.973 26.2273 10.92 26.0001C10.8123 25.7385 10.7653 25.4559 10.7826 25.1736C10.7999 24.8912 10.8811 24.6165 11.02 24.3701C11.1602 24.1281 11.3538 23.9212 11.586 23.7653C11.8182 23.6093 12.0829 23.5084 12.3599 23.4701C12.5845 23.3988 12.7857 23.2683 12.9423 23.0923C13.099 22.9163 13.2052 22.7014 13.2499 22.4701C13.258 22.1932 13.3299 21.9219 13.46 21.6773C13.5901 21.4328 13.7749 21.2215 13.9999 21.0601V21.0601H14.06C14.2792 20.9173 14.5265 20.8229 14.7851 20.7832C15.0438 20.7436 15.3079 20.7595 15.56 20.8301H15.68C15.8933 20.8357 16.1048 20.7895 16.2964 20.6954C16.488 20.6014 16.6539 20.4623 16.78 20.2901C16.9026 20.0365 17.0817 19.8145 17.3036 19.6412C17.5255 19.4678 17.7843 19.3477 18.0599 19.2901C18.3341 19.2334 18.6176 19.239 18.8893 19.3065C19.161 19.374 19.4141 19.5017 19.6299 19.6801C19.8318 19.7978 20.0613 19.8598 20.2949 19.8598C20.5286 19.8598 20.7581 19.7978 20.9599 19.6801C21.1599 19.5076 21.3949 19.3808 21.6487 19.3082C21.9025 19.2357 22.1691 19.2193 22.4299 19.2601H22.5199C22.7995 19.3141 23.0626 19.4327 23.2883 19.6063C23.5139 19.7799 23.696 20.0037 23.8199 20.2601C23.9527 20.4529 24.1355 20.606 24.3487 20.7029C24.5618 20.7998 24.7973 20.8368 25.03 20.8101C25.2984 20.7307 25.5814 20.7137 25.8574 20.7602C26.1334 20.8068 26.3952 20.9157 26.6227 21.0786C26.8503 21.2416 27.0377 21.4543 27.1707 21.7007C27.3036 21.947 27.3786 22.2204 27.3899 22.5001C27.4375 22.7317 27.546 22.9465 27.7042 23.1223C27.8624 23.298 28.0646 23.4284 28.29 23.5001C28.5683 23.5363 28.8348 23.6358 29.0688 23.7909C29.3028 23.946 29.4982 24.1525 29.6401 24.3948C29.782 24.637 29.8666 24.9086 29.8873 25.1885C29.9081 25.4685 29.8645 25.7495 29.76 26.0101C29.7071 26.239 29.7174 26.4781 29.7895 26.7017C29.8617 26.9253 29.9932 27.1252 30.17 27.2801C30.4092 27.4266 30.6118 27.6259 30.7623 27.8628C30.9127 28.0997 31.0069 28.3678 31.0378 28.6467C31.0687 28.9256 31.0354 29.2078 30.9404 29.4719C30.8455 29.7359 30.6914 29.9747 30.49 30.1701L30.53 30.1501Z"
                                      fill="white"/>
                                <path d="M30 27.5699C29.7666 27.3602 29.5928 27.0925 29.4962 26.794C29.3996 26.4954 29.3837 26.1766 29.45 25.8699V25.8699C29.5386 25.6689 29.5777 25.4495 29.5637 25.2302C29.5498 25.0109 29.4834 24.7982 29.37 24.6099C29.2598 24.4198 29.1065 24.2583 28.9223 24.1384C28.7382 24.0186 28.5284 23.9437 28.31 23.9199C27.9783 23.8375 27.6778 23.6603 27.4451 23.4099C27.2125 23.1595 27.0578 22.8468 27 22.5099C26.9939 22.2918 26.9376 22.0779 26.8355 21.885C26.7334 21.6921 26.5882 21.5253 26.4112 21.3976C26.2342 21.27 26.0301 21.1848 25.8148 21.1488C25.5996 21.1128 25.3789 21.1268 25.17 21.1899H25.12C24.8101 21.2272 24.4959 21.18 24.2107 21.0532C23.9255 20.9265 23.6799 20.7249 23.5 20.4699V20.4699C23.4085 20.269 23.2698 20.0931 23.0956 19.9573C22.9215 19.8215 22.7172 19.7297 22.5 19.6899H22.43H22.2C21.8576 19.689 21.5267 19.8135 21.27 20.0399C21.0004 20.1992 20.693 20.2832 20.38 20.2832C20.0669 20.2832 19.7595 20.1992 19.49 20.0399C19.3235 19.8977 19.1264 19.7958 18.9141 19.7423C18.7017 19.6888 18.4799 19.6852 18.2659 19.7317C18.0519 19.7781 17.8515 19.8735 17.6805 20.0102C17.5095 20.147 17.3724 20.3214 17.28 20.5199V20.5199C17.1177 20.7522 16.9002 20.9406 16.6471 21.068C16.394 21.1954 16.1132 21.2579 15.83 21.2499H15.5C15.3045 21.1898 15.0982 21.1739 14.8958 21.2033C14.6935 21.2327 14.5002 21.3067 14.33 21.4199H14.28C14.096 21.548 13.9455 21.7185 13.841 21.9168C13.7366 22.1152 13.6814 22.3358 13.68 22.5599V22.6099C13.6184 22.915 13.4766 23.1982 13.2692 23.4302C13.0618 23.6622 12.7962 23.8347 12.5 23.9299H12.45C12.2421 23.9625 12.0443 24.0414 11.8712 24.1608C11.6981 24.2803 11.5541 24.4372 11.45 24.6199C11.3404 24.8116 11.277 25.0262 11.2648 25.2467C11.2527 25.4671 11.2921 25.6874 11.38 25.8899C11.4487 26.1942 11.4349 26.5113 11.34 26.8085C11.2451 27.1056 11.0724 27.3719 10.84 27.5799V27.5799C10.652 27.6905 10.4931 27.8444 10.3766 28.0288C10.26 28.2132 10.1892 28.4227 10.17 28.6399V28.7199C10.1583 28.9252 10.1926 29.1306 10.2705 29.3209C10.3483 29.5112 10.4677 29.6817 10.62 29.8199V29.8199C10.8071 30.071 10.9234 30.3677 10.9568 30.679C10.9902 30.9903 10.9395 31.3049 10.81 31.5899V31.5899C10.6854 31.7705 10.6044 31.9775 10.5733 32.1946C10.5421 32.4118 10.5617 32.6331 10.6305 32.8414C10.6993 33.0497 10.8154 33.2392 10.9697 33.3951C11.124 33.551 11.3124 33.6691 11.52 33.7399V33.7399C11.7938 33.892 12.0213 34.1156 12.178 34.3868C12.3348 34.658 12.4149 34.9667 12.41 35.2799V35.2799C12.3719 35.4812 12.3781 35.6883 12.4282 35.8869C12.4782 36.0855 12.571 36.2708 12.7 36.4299V36.4299C12.8487 36.5947 13.0335 36.7228 13.2399 36.8044C13.4463 36.8859 13.6688 36.9186 13.89 36.8999V36.8999C14.1956 36.9291 14.4886 37.0365 14.7408 37.2116C14.9929 37.3867 15.1958 37.6238 15.33 37.8999V37.9499C15.3759 38.1689 15.4734 38.3739 15.6142 38.5477C15.7551 38.7216 15.9353 38.8595 16.14 38.9499C16.3406 39.037 16.5585 39.0768 16.7769 39.0664C16.9954 39.056 17.2085 38.9956 17.4 38.8899V38.8899C17.5846 38.8325 17.7766 38.8022 17.97 38.7999C18.4011 38.8058 18.816 38.9654 19.14 39.2499C19.2693 39.4225 19.4368 39.5628 19.6294 39.6599C19.8219 39.7571 20.0343 39.8084 20.25 39.8099H20.34C20.5475 39.8031 20.7508 39.7491 20.9345 39.652C21.1181 39.555 21.2773 39.4175 21.4 39.2499V39.2499C21.6289 39.0357 21.9114 38.8873 22.2176 38.8204C22.5239 38.7536 22.8426 38.7707 23.14 38.8699V38.8699C23.3331 38.974 23.5476 39.0323 23.7668 39.0401C23.9861 39.048 24.2042 39.0054 24.4043 38.9155C24.6044 38.8256 24.7812 38.6908 24.9209 38.5217C25.0606 38.3525 25.1595 38.1535 25.21 37.9399V37.8899C25.3433 37.6132 25.546 37.3756 25.7983 37.2004C26.0506 37.0251 26.344 36.9182 26.65 36.8899H26.7C26.9161 36.9645 27.1469 36.9861 27.3731 36.9531C27.5993 36.92 27.8142 36.8332 28 36.6999C28.1526 36.5359 28.264 36.3379 28.3249 36.1223C28.3857 35.9066 28.3943 35.6796 28.35 35.4599V35.4099C28.345 35.0967 28.4251 34.788 28.5819 34.5168C28.7386 34.2456 28.9661 34.022 29.24 33.8699V33.8699C29.4471 33.7997 29.6348 33.6817 29.7877 33.5253C29.9406 33.3689 30.0544 33.1786 30.12 32.9699C30.2071 32.7581 30.2417 32.5283 30.2208 32.3002C30.1999 32.0721 30.1241 31.8524 30 31.6599V31.6599C29.8704 31.3749 29.8197 31.0603 29.8531 30.749C29.8865 30.4377 30.0028 30.141 30.19 29.8899V29.8899C30.3486 29.7403 30.47 29.5557 30.5447 29.3509C30.6193 29.146 30.6451 28.9265 30.62 28.7099C30.618 28.4837 30.5604 28.2613 30.4523 28.0625C30.3442 27.8637 30.1888 27.6946 30 27.5699V27.5699ZM24.61 30.9999L23.41 31.5799L23.61 32.1499L24.14 33.6899L22.6 33.1999L22 32.9999L21.42 34.1899L20.42 36.3199L19.42 34.1899L18.79 32.9999L18.21 33.1899L16.67 33.7199L17.2 32.1799L17.4 31.6099L16.2 30.9999L14.08 29.9999L16.2 28.9999L17.4 28.4199L17.2 27.8499L16.67 26.3099L18.21 26.8399L18.79 27.0299L19.37 25.8399L20.37 23.7099L21.37 25.8399L22 26.9999L22.57 26.8099L24.11 26.2799L23.58 27.8199L23.38 28.3899L24.58 28.9699L26.71 29.9699L24.61 30.9999Z"
                                      fill="white"/>
                                <path d="M22.53 31.81L26.25 30H20.61L22.53 31.81Z" fill="white"/>
                            </svg>
                        </div>
                        <div class="glide__slide">
                            <svg width="120" height="60" viewBox="0 0 120 60" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M51.6534 16.2046H56.2062C58.4825 16.2046 60.2627 17.3041 60.2627 19.7346C60.2627 22.2519 58.5117 22.8595 57.8405 23.091L60.9923 29.3408H58.9495L56.2353 23.4092H53.3753V29.3408H51.6534V16.2046V16.2046ZM53.3461 22.0493H56.0311C57.9572 22.0493 58.5117 20.892 58.5117 19.8793C58.5117 17.6802 56.5855 17.5934 55.8268 17.5934H53.3169V22.0493H53.3461Z"
                                      fill="white"/>
                                <path d="M63.6189 17.6226H70.7106V18.8378H65.1365V22.6571H70.4188V23.8724H65.1365V28.1257H70.8857V29.341H63.6189V17.6226Z"
                                      fill="white"/>
                                <path d="M73.8333 17.6226H80.925V18.8378H75.3508V22.8597H80.6331V24.0749H75.3508V29.312H73.8333V17.6226V17.6226Z"
                                      fill="white"/>
                                <path d="M85.5944 17.6226V29.341H84.0768V17.6226H85.5944Z" fill="white"/>
                                <path d="M89.0966 17.6226H91.1103L95.8673 25.811C96.1299 26.245 96.5093 27.0262 96.6552 27.4313H96.7428C96.7136 27.0262 96.6552 26.4765 96.6552 25.9557V17.6226H98.1728V29.341H96.1299L91.4021 21.0657C91.1394 20.6317 90.76 19.8505 90.6141 19.4454H90.5266C90.5558 19.8505 90.6141 20.4003 90.6141 20.9211V29.341H89.0966V17.6226Z"
                                      fill="white"/>
                                <path d="M101.704 17.6226H108.796V18.8378H103.222V22.6571H108.504V23.8724H103.222V28.1257H108.971V29.341H101.704V17.6226Z"
                                      fill="white"/>
                                <path d="M94.0867 42.2166C94.4369 42.2166 94.6996 42.5059 94.6996 42.8242C94.6996 43.1714 94.4369 43.4318 94.0867 43.4318C93.7365 43.4318 93.4739 43.1714 93.4739 42.8242C93.4739 42.477 93.7657 42.2166 94.0867 42.2166ZM94.0867 42.3034C93.8241 42.3034 93.5906 42.5348 93.5906 42.8242C93.5906 43.1135 93.8241 43.345 94.0867 43.345C94.3786 43.345 94.5829 43.1135 94.5829 42.8242C94.5829 42.5348 94.3786 42.3034 94.0867 42.3034ZM93.97 43.1714H93.8533V42.477C93.9116 42.477 93.97 42.448 94.0576 42.448C94.1743 42.448 94.2327 42.477 94.2618 42.5059C94.291 42.5348 94.3202 42.5927 94.3202 42.6506C94.3202 42.7374 94.2618 42.7952 94.1743 42.8242C94.2327 42.8242 94.2618 42.882 94.291 42.9978C94.3202 43.1135 94.3202 43.1424 94.3202 43.1714H94.2035C94.1743 43.1424 94.1743 43.0846 94.1451 42.9978C94.1159 42.911 94.0867 42.882 93.9992 42.882H93.9116V43.1714H93.97ZM93.97 42.7952H94.0576C94.1451 42.7952 94.2327 42.7663 94.2327 42.6795C94.2327 42.6216 94.1743 42.5638 94.0576 42.5638C94.0284 42.5638 93.9992 42.5638 93.97 42.5638V42.7952Z"
                                      fill="white"/>
                                <path d="M52.1495 43.3159C52.1495 42.7372 52.1495 42.6215 52.1495 42.5058C52.1495 42.39 52.1203 42.3032 52.0036 42.3032C51.9744 42.3032 51.916 42.3032 51.8577 42.3032C51.8577 42.3032 51.8285 42.3032 51.8285 42.2743C51.8285 42.2454 51.8577 42.2454 51.8869 42.2454C52.062 42.2454 52.3246 42.2454 52.3246 42.2454C52.4122 42.2454 52.5873 42.2454 52.7916 42.2454C53.4336 42.2454 53.6087 42.6215 53.6087 42.824C53.6087 43.1134 53.4044 43.3159 53.2001 43.4895C53.492 43.5763 53.9006 43.8368 53.9006 44.2708C53.9006 44.6758 53.5795 45.1099 52.9083 45.1099C52.8499 45.1099 52.704 45.1099 52.5581 45.1099C52.4414 45.1099 52.3246 45.1099 52.2954 45.1099C52.2954 45.1099 52.2079 45.1099 52.1495 45.1099C52.062 45.1099 51.9744 45.1099 51.916 45.1099C51.8869 45.1099 51.8577 45.1099 51.8577 45.0809C51.8577 45.0809 51.8577 45.052 51.8869 45.052C51.916 45.052 51.9744 45.052 52.0036 45.0231C52.0911 45.0231 52.0911 44.9363 52.0911 44.8205C52.1203 44.6758 52.1203 44.3865 52.1203 44.0104V43.3159H52.1495ZM52.4997 43.4027C52.4997 43.4317 52.4997 43.4317 52.5289 43.4317C52.5581 43.4317 52.6165 43.4606 52.7624 43.4606C52.9667 43.4606 53.0542 43.4606 53.1418 43.3738C53.2293 43.287 53.2877 43.1423 53.2877 42.9687C53.2877 42.6794 53.1418 42.3611 52.7332 42.3611C52.6748 42.3611 52.5873 42.3611 52.5289 42.39C52.4997 42.39 52.4705 42.419 52.4705 42.419V43.4027H52.4997ZM52.4997 43.8078C52.4997 44.0972 52.4997 44.5312 52.4997 44.589C52.4997 44.7627 52.4997 44.8205 52.6456 44.8784C52.7624 44.9363 52.9083 44.9363 52.9958 44.9363C53.2585 44.9363 53.5795 44.8495 53.5795 44.3576C53.5795 44.184 53.5212 43.8657 53.2001 43.6631C53.0542 43.5763 52.9375 43.5763 52.8499 43.5763C52.7916 43.5763 52.6165 43.5763 52.5581 43.5763C52.5581 43.5763 52.5289 43.5763 52.5289 43.6053V43.8078H52.4997Z"
                                      fill="white"/>
                                <path d="M55.1846 44.0972C55.1846 43.8946 55.1554 43.8078 55.097 43.721C55.0679 43.6631 54.5425 42.824 54.3966 42.6504C54.3091 42.5058 54.2215 42.419 54.134 42.39C54.0756 42.3611 53.9881 42.3322 53.9589 42.3322C53.9297 42.3322 53.9297 42.3032 53.9297 42.3032C53.9297 42.2743 53.9297 42.2743 53.9881 42.2743C54.0756 42.2743 54.3674 42.2743 54.3674 42.2743C54.3966 42.2743 54.5426 42.2743 54.7177 42.2743C54.776 42.2743 54.776 42.2743 54.776 42.3032C54.776 42.3032 54.7468 42.3322 54.7177 42.3322C54.6885 42.3322 54.6593 42.3611 54.6593 42.39C54.6593 42.4479 54.6885 42.4768 54.7177 42.5347L55.4181 43.6921C55.5056 43.5474 55.9726 42.7372 56.0601 42.6215C56.1185 42.5347 56.1185 42.4768 56.1185 42.419C56.1185 42.3611 56.0893 42.3322 56.0601 42.3322C56.0309 42.3322 56.0018 42.3032 56.0018 42.2743C56.0018 42.2743 56.0309 42.2454 56.0601 42.2454C56.1477 42.2454 56.2936 42.2454 56.3228 42.2454C56.352 42.2454 56.6146 42.2454 56.7022 42.2454C56.7314 42.2454 56.7605 42.2454 56.7605 42.2743C56.7605 42.3032 56.7314 42.3032 56.7022 42.3032C56.6438 42.3032 56.5854 42.3032 56.5271 42.3611C56.4395 42.419 56.4103 42.4479 56.3228 42.5347C56.206 42.6794 55.6515 43.5474 55.564 43.721C55.5056 43.8657 55.5056 43.9814 55.5056 44.0972V44.4154C55.5056 44.4733 55.5056 44.6469 55.5056 44.7916C55.5056 44.9073 55.5348 44.9652 55.6515 44.9941C55.7099 44.9941 55.7975 45.0231 55.8267 45.0231C55.8558 45.0231 55.8558 45.052 55.8558 45.052C55.8558 45.0809 55.8266 45.0809 55.7975 45.0809C55.5932 45.0809 55.3305 45.0809 55.3013 45.0809C55.2722 45.0809 55.0387 45.0809 54.9219 45.0809C54.8928 45.0809 54.8636 45.0809 54.8636 45.052C54.8636 45.052 54.8636 45.0231 54.8928 45.0231C54.9219 45.0231 54.9803 45.0231 55.0095 44.9941C55.097 44.9652 55.1262 44.9073 55.1262 44.7916C55.1262 44.6469 55.1262 44.4733 55.1262 44.4154V44.0972H55.1846Z"
                                      fill="white"/>
                                <path d="M58.8326 43.0268C58.8326 42.3323 58.8326 42.2166 58.8326 42.0719C58.8326 41.9273 58.7743 41.8405 58.6283 41.8115C58.5992 41.8115 58.5116 41.8115 58.4824 41.8115C58.4532 41.8115 58.4532 41.8115 58.4532 41.7826C58.4532 41.7537 58.4824 41.7537 58.5116 41.7537C58.7159 41.7537 58.9786 41.7537 59.0077 41.7537C59.0661 41.7537 59.3871 41.7537 59.5331 41.7537C59.8249 41.7537 60.1167 41.7826 60.3502 41.9562C60.4669 42.043 60.6421 42.2455 60.6421 42.5638C60.6421 42.8821 60.4961 43.2004 60.1167 43.5765C60.4669 44.0395 60.788 44.4156 61.0506 44.705C61.2841 44.9654 61.4884 44.9943 61.6051 45.0232C61.6927 45.0232 61.751 45.0232 61.7802 45.0232C61.8094 45.0232 61.8094 45.0232 61.8094 45.0522C61.8094 45.0811 61.7802 45.0811 61.6927 45.0811H61.3717C61.109 45.0811 61.0214 45.0522 60.9047 44.9943C60.7004 44.8786 60.5545 44.676 60.321 44.3578C60.1459 44.1263 59.9416 43.808 59.8249 43.7212C59.7957 43.6923 59.7957 43.6923 59.7665 43.6923H59.212C59.1828 43.6923 59.1828 43.6923 59.1828 43.7212V43.8369C59.1828 44.271 59.1828 44.6182 59.212 44.7918C59.212 44.9075 59.2412 45.0232 59.3871 45.0232C59.4455 45.0232 59.5331 45.0522 59.5914 45.0522C59.6206 45.0522 59.6206 45.0522 59.6206 45.0811C59.6206 45.11 59.5914 45.1101 59.5622 45.1101C59.3288 45.1101 59.0369 45.1101 59.0077 45.1101C59.0077 45.1101 58.7159 45.1101 58.5992 45.1101C58.5408 45.1101 58.5408 45.11 58.5408 45.0811C58.5408 45.0811 58.5408 45.0522 58.57 45.0522C58.5992 45.0522 58.6575 45.0522 58.7159 45.0232C58.8035 44.9943 58.8326 44.9075 58.8326 44.7918C58.8618 44.6182 58.8618 44.271 58.8618 43.8369V43.0268H58.8326ZM59.1828 43.4029C59.1828 43.4319 59.1828 43.4319 59.212 43.4608C59.2704 43.4897 59.4747 43.5187 59.679 43.5187C59.7957 43.5187 59.9124 43.5187 60 43.4319C60.1459 43.3161 60.2627 43.0846 60.2627 42.7664C60.2627 42.2166 59.9708 41.8983 59.5039 41.8983C59.358 41.8983 59.2412 41.8983 59.212 41.9273C59.1828 41.9273 59.1828 41.9562 59.1828 41.9851V43.4029Z"
                                      fill="white"/>
                                <path d="M63.181 42.1877C64.0566 42.1877 64.7278 42.7086 64.7278 43.5766C64.7278 44.4157 64.1149 45.1101 63.1518 45.1101C62.072 45.1101 61.6343 44.3289 61.6343 43.6345C61.6343 43.0558 62.1012 42.1877 63.181 42.1877ZM63.2686 44.9654C63.6188 44.9654 64.3192 44.7918 64.3192 43.6923C64.3192 42.7954 63.7647 42.3324 63.1518 42.3324C62.5098 42.3324 62.0429 42.7375 62.0429 43.5477C62.0137 44.4157 62.5682 44.9654 63.2686 44.9654Z"
                                      fill="white"/>
                                <path d="M65.9244 44.0972C65.9244 43.8946 65.8952 43.8078 65.8368 43.721C65.8076 43.6631 65.2823 42.824 65.1364 42.6504C65.0488 42.5058 64.9613 42.419 64.8737 42.39C64.8154 42.3611 64.7278 42.3322 64.6986 42.3322C64.6694 42.3322 64.6694 42.3032 64.6694 42.3032C64.6694 42.2743 64.6694 42.2743 64.7278 42.2743C64.8154 42.2743 65.1072 42.2743 65.1072 42.2743C65.1364 42.2743 65.2823 42.2743 65.4574 42.2743C65.5158 42.2743 65.5158 42.2743 65.5158 42.3032C65.5158 42.3032 65.4866 42.3322 65.4574 42.3322C65.4282 42.3322 65.399 42.3611 65.399 42.39C65.399 42.4479 65.4282 42.4768 65.4574 42.5347L66.1578 43.6921C66.2454 43.5474 66.7123 42.7372 66.7999 42.6215C66.8582 42.5347 66.8582 42.4768 66.8582 42.419C66.8582 42.3611 66.8291 42.3322 66.7999 42.3322C66.7707 42.3322 66.7415 42.3032 66.7415 42.2743C66.7415 42.2743 66.7707 42.2454 66.7999 42.2454C66.8874 42.2454 67.0333 42.2454 67.0625 42.2454C67.0917 42.2454 67.3836 42.2454 67.4419 42.2454C67.4711 42.2454 67.5003 42.2454 67.5003 42.2743C67.5003 42.3032 67.4711 42.3032 67.4419 42.3032C67.3836 42.3032 67.3252 42.3032 67.2668 42.3611C67.1793 42.419 67.1501 42.4479 67.0625 42.5347C66.9458 42.6794 66.3913 43.5474 66.3037 43.721C66.2454 43.8657 66.2454 43.9814 66.2454 44.0972V44.4154C66.2454 44.4733 66.2454 44.6469 66.2454 44.7916C66.2454 44.9073 66.2746 44.9652 66.3913 44.9941C66.4497 44.9941 66.5372 45.0231 66.5664 45.0231C66.5956 45.0231 66.5956 45.052 66.5956 45.052C66.5956 45.0809 66.5664 45.0809 66.5372 45.0809C66.3329 45.0809 66.0703 45.0809 66.0411 45.0809C66.0119 45.0809 65.7784 45.0809 65.6617 45.0809C65.6033 45.0809 65.6033 45.0809 65.6033 45.052C65.6033 45.052 65.6033 45.0231 65.6325 45.0231C65.6617 45.0231 65.7201 45.0231 65.7492 44.9941C65.8368 44.9652 65.866 44.9073 65.866 44.7916C65.866 44.6469 65.866 44.4733 65.866 44.4154V44.0972H65.9244Z"
                                      fill="white"/>
                                <path d="M68.551 42.3324C68.6094 42.2167 68.6094 42.1877 68.6386 42.1877C68.6677 42.1877 68.6969 42.2456 68.7261 42.3324C68.7845 42.4771 69.4265 44.0395 69.66 44.5893C69.8059 44.9365 69.8935 44.9654 69.981 44.9944C70.0394 45.0233 70.0978 45.0233 70.127 45.0233C70.1561 45.0233 70.1853 45.0233 70.1853 45.0522C70.1853 45.0812 70.127 45.0812 70.0978 45.0812C70.0394 45.0812 69.7476 45.0812 69.4849 45.0812C69.3973 45.0812 69.339 45.0812 69.339 45.0522C69.339 45.0233 69.339 45.0233 69.3682 45.0233C69.3974 45.0233 69.4265 44.9944 69.3974 44.9365L69.0471 44.0685C69.0471 44.0395 69.0471 44.0395 69.018 44.0395H68.1132C68.0841 44.0395 68.0841 44.0395 68.0841 44.0685L67.8506 44.6761C67.8214 44.7629 67.7922 44.8497 67.7922 44.9365C67.7922 45.0233 67.8506 45.0233 67.9381 45.0233H67.9673C67.9965 45.0233 67.9965 45.0233 67.9965 45.0522C67.9965 45.0812 67.9673 45.0812 67.9381 45.0812C67.8506 45.0812 67.6463 45.0812 67.5879 45.0812C67.5587 45.0812 67.3545 45.0812 67.1794 45.0812C67.121 45.0812 67.0918 45.0812 67.0918 45.0522C67.0918 45.0233 67.121 45.0233 67.121 45.0233C67.1502 45.0233 67.2085 45.0233 67.2377 45.0233C67.4128 44.9944 67.5004 44.8786 67.5587 44.6761L68.551 42.3324ZM68.9888 43.8659C69.018 43.8659 69.018 43.8659 68.9888 43.8659L68.6094 42.8243C68.5802 42.7664 68.551 42.7664 68.551 42.8243L68.2008 43.837C68.2008 43.8659 68.2008 43.8659 68.2008 43.8659H68.9888Z"
                                      fill="white"/>
                                <path d="M71.1776 43.9815C71.1776 44.5313 71.1776 44.7628 71.2651 44.8206C71.3235 44.8785 71.4694 44.9074 71.7904 44.9074C71.9947 44.9074 72.1698 44.9074 72.2574 44.7917C72.3157 44.7338 72.3449 44.647 72.3449 44.5892C72.3449 44.5602 72.3741 44.5313 72.3741 44.5313C72.4033 44.5313 72.4033 44.5602 72.4033 44.5892C72.4033 44.6181 72.3741 44.8496 72.3449 44.9653C72.3157 45.0521 72.3157 45.0521 72.1115 45.0521C71.8196 45.0521 71.6153 45.0521 71.4402 45.0521C71.2651 45.0521 71.1192 45.0521 71.0025 45.0521C70.9733 45.0521 70.9149 45.0521 70.8566 45.0521C70.769 45.0521 70.6815 45.0521 70.6231 45.0521C70.5939 45.0521 70.5647 45.0521 70.5647 45.0232C70.5647 45.0232 70.5647 44.9942 70.5939 44.9942C70.6231 44.9942 70.6815 44.9942 70.7106 44.9653C70.7982 44.9364 70.7982 44.8785 70.7982 44.7628C70.8274 44.6181 70.8274 44.3288 70.8274 43.9526V43.2871C70.8274 42.7084 70.8274 42.5927 70.8274 42.477C70.8274 42.3612 70.7982 42.2744 70.6815 42.2744C70.6523 42.2744 70.5939 42.2744 70.5355 42.2744L70.5063 42.2455C70.5063 42.2166 70.5355 42.2166 70.5647 42.2166C70.7398 42.2166 70.9733 42.2166 71.0025 42.2166C71.0317 42.2166 71.3235 42.2166 71.4402 42.2166C71.4694 42.2166 71.4986 42.2166 71.4986 42.2455L71.4694 42.2744C71.4402 42.2744 71.3819 42.2744 71.3527 42.2744C71.2359 42.3034 71.2068 42.3612 71.2068 42.477C71.2068 42.5927 71.2068 42.7084 71.2068 43.2871V43.9815H71.1776Z"
                                      fill="white"/>
                                <path d="M74.7378 43.0268C74.7378 42.3323 74.7378 42.2166 74.7378 42.0719C74.7378 41.9273 74.6794 41.8405 74.5335 41.8115C74.5043 41.8115 74.4168 41.8115 74.3876 41.8115C74.3584 41.8115 74.3584 41.8115 74.3584 41.7826C74.3584 41.7537 74.3876 41.7537 74.4168 41.7537C74.6211 41.7537 74.8837 41.7537 74.9129 41.7537C74.9713 41.7537 75.2923 41.7537 75.4382 41.7537C75.7301 41.7537 76.0219 41.7826 76.2554 41.9562C76.3721 42.043 76.5472 42.2455 76.5472 42.5638C76.5472 42.8821 76.4013 43.2004 76.0219 43.5765C76.3721 44.0395 76.6931 44.4156 76.9558 44.705C77.1893 44.9654 77.3936 44.9943 77.5103 45.0232C77.5978 45.0232 77.6562 45.0232 77.6854 45.0232C77.7146 45.0232 77.7146 45.0232 77.7146 45.0522C77.7146 45.0811 77.6854 45.0811 77.5978 45.0811H77.2768C77.0142 45.0811 76.9266 45.0522 76.8099 44.9943C76.6056 44.8786 76.4597 44.676 76.2262 44.3578C76.0511 44.1263 75.8468 43.808 75.7301 43.7212C75.7009 43.6923 75.7009 43.6923 75.6717 43.6923H75.1172C75.088 43.6923 75.088 43.6923 75.088 43.7212V43.8369C75.088 44.271 75.088 44.6182 75.1172 44.7918C75.1172 44.9075 75.1464 45.0232 75.2923 45.0232C75.3507 45.0232 75.4382 45.0522 75.4966 45.0522C75.5258 45.0522 75.5258 45.0522 75.5258 45.0811C75.5258 45.11 75.4966 45.1101 75.4674 45.1101C75.2339 45.1101 74.9421 45.1101 74.9129 45.1101C74.9129 45.1101 74.6211 45.1101 74.5043 45.1101C74.446 45.1101 74.4459 45.11 74.4459 45.0811C74.4459 45.0811 74.4459 45.0522 74.4751 45.0522C74.5043 45.0522 74.5627 45.0522 74.6211 45.0232C74.7086 44.9943 74.7378 44.9075 74.7378 44.7918C74.767 44.6182 74.767 44.271 74.767 43.8369V43.0268H74.7378ZM75.088 43.4029C75.088 43.4319 75.088 43.4319 75.1172 43.4608C75.1756 43.4897 75.3798 43.5187 75.5841 43.5187C75.7009 43.5187 75.8176 43.5187 75.9052 43.4319C76.0511 43.3161 76.1678 43.0846 76.1678 42.7664C76.1678 42.2166 75.876 41.8983 75.409 41.8983C75.2631 41.8983 75.1464 41.8983 75.1172 41.9273C75.088 41.9273 75.088 41.9562 75.088 41.9851V43.4029Z"
                                      fill="white"/>
                                <path d="M78.2401 43.3162C78.2401 42.7375 78.2401 42.6218 78.2401 42.506C78.2401 42.3903 78.2109 42.3035 78.0942 42.3035C78.065 42.3035 78.0066 42.3035 77.9482 42.3035L77.9191 42.2745C77.9191 42.2456 77.9483 42.2456 77.9774 42.2456C78.1525 42.2456 78.4152 42.2456 78.4152 42.2456C78.4444 42.2456 79.2615 42.2456 79.3491 42.2456C79.4366 42.2456 79.495 42.2167 79.5242 42.2167C79.5534 42.2167 79.5534 42.1877 79.5826 42.1877L79.6117 42.2167C79.6117 42.2456 79.5826 42.2745 79.5826 42.3903C79.5826 42.4192 79.5826 42.5928 79.5534 42.6218C79.5534 42.6507 79.5242 42.6507 79.5242 42.6507C79.495 42.6507 79.495 42.6218 79.495 42.5928C79.495 42.5639 79.495 42.506 79.4658 42.4482C79.4366 42.3903 79.4075 42.3614 79.174 42.3324C79.1156 42.3324 78.6487 42.3324 78.6195 42.3324C78.5903 42.3324 78.5903 42.3324 78.5903 42.3614V43.3741C78.5903 43.403 78.5903 43.403 78.6195 43.403C78.6778 43.403 79.174 43.403 79.2615 43.403C79.3491 43.403 79.4075 43.403 79.4658 43.3451C79.495 43.3162 79.495 43.2873 79.5242 43.2873C79.5242 43.2873 79.5534 43.2873 79.5534 43.3162C79.5534 43.3451 79.5242 43.403 79.5242 43.5187C79.5242 43.6055 79.495 43.7213 79.495 43.7502C79.495 43.7791 79.495 43.8081 79.4658 43.8081C79.4366 43.8081 79.4366 43.8081 79.4366 43.7791C79.4366 43.7502 79.4366 43.6923 79.4074 43.6634C79.4074 43.6055 79.3491 43.5766 79.2032 43.5477C79.0864 43.5477 78.6778 43.5187 78.6195 43.5187C78.5903 43.5187 78.5903 43.5187 78.5903 43.5477V43.8659C78.5903 43.9817 78.5903 44.4157 78.5903 44.5025C78.5903 44.7629 78.6778 44.7918 79.0572 44.7918C79.174 44.7918 79.3491 44.7918 79.4366 44.7629C79.5534 44.705 79.5826 44.6472 79.6117 44.5025C79.6117 44.4446 79.6409 44.4446 79.6409 44.4446C79.6701 44.4446 79.6701 44.4736 79.6701 44.5025C79.6701 44.5314 79.6409 44.7918 79.6117 44.8497C79.5826 44.9365 79.5534 44.9365 79.4074 44.9365C79.1156 44.9365 78.8821 44.9365 78.7362 44.9365C78.5611 44.9365 78.4736 44.9365 78.4152 44.9365C78.4152 44.9365 78.3276 44.9365 78.2401 44.9365C78.1525 44.9365 78.065 44.9365 78.0066 44.9365C77.9774 44.9365 77.9482 44.9365 77.9482 44.9076C77.9482 44.9076 77.9483 44.8786 77.9774 44.8786C78.0066 44.8786 78.065 44.8786 78.0942 44.8497C78.1817 44.8497 78.1817 44.7629 78.1817 44.6472C78.2109 44.5025 78.2109 44.2132 78.2109 43.837V43.3162H78.2401Z"
                                      fill="white"/>
                                <path d="M80.2537 45.0232C80.1953 44.9942 80.1953 44.9942 80.1953 44.8785C80.1953 44.7049 80.2245 44.5313 80.2245 44.4734C80.2245 44.4445 80.2245 44.4156 80.2537 44.4156C80.2829 44.4156 80.2829 44.4156 80.2829 44.4734C80.2829 44.5024 80.2829 44.5602 80.2829 44.6181C80.3412 44.8785 80.6331 44.9942 80.8957 44.9942C81.2751 44.9942 81.4794 44.7917 81.4794 44.5024C81.4794 44.242 81.3335 44.0973 80.9833 43.8658L80.8082 43.7211C80.3996 43.4029 80.2537 43.1714 80.2537 42.911C80.2537 42.477 80.6039 42.2166 81.1292 42.2166C81.2751 42.2166 81.4502 42.2455 81.5378 42.2455C81.6253 42.2744 81.6545 42.2744 81.6837 42.2744C81.7129 42.2744 81.7129 42.2744 81.7129 42.3034C81.7129 42.3323 81.6837 42.448 81.6837 42.7084C81.6837 42.7663 81.6837 42.7952 81.6545 42.7952C81.6253 42.7952 81.6253 42.7663 81.6253 42.7374C81.6253 42.6795 81.5961 42.5927 81.567 42.5638C81.5378 42.5059 81.421 42.3902 81.0708 42.3902C80.779 42.3902 80.5455 42.5348 80.5455 42.7952C80.5455 43.0267 80.6623 43.1714 81.0416 43.4318L81.1584 43.5186C81.6253 43.8369 81.8004 44.0973 81.8004 44.4156C81.8004 44.647 81.7129 44.8785 81.4502 45.0521C81.2751 45.1679 81.0417 45.1968 80.8374 45.1968C80.6623 45.11 80.4288 45.0811 80.2537 45.0232Z"
                                      fill="white"/>
                                <path d="M83.8727 42.1877C84.7482 42.1877 85.4194 42.7086 85.4194 43.5766C85.4194 44.4157 84.8066 45.1101 83.8435 45.1101C82.7637 45.1101 82.3259 44.3289 82.3259 43.6345C82.3259 43.0558 82.7929 42.1877 83.8727 42.1877ZM83.9602 44.9654C84.3104 44.9654 85.0109 44.7918 85.0109 43.6923C85.0109 42.7954 84.4564 42.3324 83.8435 42.3324C83.2015 42.3324 82.7345 42.7375 82.7345 43.5477C82.7345 44.4157 83.2598 44.9654 83.9602 44.9654Z"
                                      fill="white"/>
                                <path d="M86.1782 43.3159C86.1782 42.7372 86.1782 42.6215 86.1782 42.5058C86.1782 42.39 86.149 42.3032 86.0323 42.3032C86.0031 42.3032 85.9447 42.3032 85.8864 42.3032L85.8572 42.2743C85.8572 42.2454 85.8864 42.2454 85.9155 42.2454C86.0907 42.2454 86.3533 42.2454 86.3825 42.2454C86.4117 42.2454 86.7619 42.2454 86.8786 42.2454C87.1413 42.2454 87.4039 42.2743 87.6082 42.419C87.6958 42.4768 87.8709 42.6794 87.8709 42.9398C87.8709 43.2291 87.7542 43.4895 87.4039 43.7789C87.725 44.184 87.9876 44.5022 88.2211 44.7337C88.4254 44.9363 88.5713 44.9941 88.6589 44.9941C88.7464 44.9941 88.7756 44.9941 88.8048 44.9941C88.834 44.9941 88.834 45.0231 88.834 45.0231C88.834 45.052 88.8048 45.052 88.7464 45.052H88.5129C88.2795 45.052 88.1919 45.0231 88.1044 44.9652C87.9293 44.8784 87.7833 44.7048 87.579 44.4154C87.4039 44.2129 87.2288 43.9814 87.1705 43.8657C87.1413 43.8368 87.1413 43.8368 87.1121 43.8368H86.616C86.5868 43.8368 86.5868 43.8368 86.5868 43.8657V43.9525C86.5868 44.2997 86.5868 44.589 86.616 44.7627C86.616 44.8784 86.6452 44.9363 86.7619 44.9652C86.8203 44.9652 86.9078 44.9941 86.937 44.9941C86.9662 44.9941 86.9662 45.0231 86.9662 45.0231C86.9662 45.052 86.937 45.052 86.9078 45.052C86.7035 45.052 86.4409 45.052 86.4409 45.052C86.4409 45.052 86.1782 45.052 86.0615 45.052C86.0323 45.052 86.0031 45.052 86.0031 45.0231C86.0031 45.0231 86.0031 44.9941 86.0323 44.9941C86.0615 44.9941 86.1198 44.9941 86.149 44.9652C86.2366 44.9363 86.2366 44.8784 86.2366 44.7627C86.2658 44.618 86.2658 44.3286 86.2658 43.9525V43.3159H86.1782ZM86.5284 43.6342C86.5284 43.6631 86.5284 43.6631 86.5576 43.6921C86.616 43.721 86.8203 43.7499 86.9954 43.7499C87.0829 43.7499 87.1997 43.7499 87.2872 43.6921C87.4331 43.6053 87.5207 43.4027 87.5207 43.1134C87.5207 42.6504 87.258 42.39 86.8494 42.39C86.7327 42.39 86.616 42.39 86.5576 42.419C86.5284 42.419 86.5284 42.4479 86.5284 42.4768V43.6342Z"
                                      fill="white"/>
                                <path d="M89.9427 43.9817C89.9427 44.3289 89.9427 44.6472 89.9719 44.7918C89.9719 44.9076 90.0011 44.9654 90.1178 44.9944C90.1762 44.9944 90.2637 45.0233 90.2929 45.0233C90.3221 45.0233 90.3221 45.0522 90.3221 45.0522C90.3221 45.0812 90.2929 45.0812 90.2637 45.0812C90.0594 45.0812 89.7968 45.0812 89.7676 45.0812C89.7384 45.0812 89.4758 45.0812 89.359 45.0812C89.3007 45.0812 89.3007 45.0812 89.3007 45.0522C89.3007 45.0522 89.3007 45.0233 89.3298 45.0233C89.359 45.0233 89.4174 45.0233 89.4466 44.9944C89.5341 44.9654 89.5341 44.9076 89.5633 44.7918C89.5925 44.6472 89.5925 44.3578 89.5925 43.9817V42.4192H89.038C88.8045 42.4192 88.6878 42.4482 88.6294 42.535C88.5711 42.5928 88.5711 42.6218 88.5711 42.6507C88.5711 42.6796 88.5419 42.6796 88.5419 42.6796C88.5419 42.6796 88.5127 42.6796 88.5127 42.6507C88.5127 42.6218 88.6002 42.2745 88.6002 42.2456C88.6002 42.2167 88.6294 42.1877 88.6294 42.1877C88.6586 42.1877 88.6878 42.2167 88.8045 42.2456C88.9213 42.2456 89.0672 42.2745 89.0964 42.2745H90.5556C90.6723 42.2745 90.7599 42.2745 90.8474 42.2456C90.9058 42.2456 90.935 42.2167 90.9641 42.2167C90.9933 42.2167 90.9933 42.2456 90.9933 42.2456C90.9933 42.3614 90.9933 42.6218 90.9933 42.6796C90.9933 42.7086 90.9641 42.7375 90.9641 42.7375C90.935 42.7375 90.935 42.7375 90.935 42.6796V42.6507C90.935 42.535 90.8474 42.4482 90.468 42.4482H89.9719V43.9817H89.9427Z"
                                      fill="white"/>
                                <path d="M91.4312 45.0232C91.3728 44.9942 91.3728 44.9942 91.3728 44.8785C91.3728 44.7049 91.402 44.5313 91.402 44.4734C91.402 44.4445 91.402 44.4156 91.4312 44.4156C91.4604 44.4156 91.4604 44.4156 91.4604 44.4734C91.4604 44.5024 91.4604 44.5602 91.4604 44.6181C91.5187 44.8785 91.8106 44.9942 92.0732 44.9942C92.4526 44.9942 92.6569 44.7917 92.6569 44.5024C92.6569 44.242 92.511 44.0973 92.1608 43.8658L91.9857 43.7211C91.5771 43.4029 91.4312 43.1714 91.4312 42.911C91.4312 42.477 91.7814 42.2166 92.3067 42.2166C92.4526 42.2166 92.6277 42.2455 92.7153 42.2455C92.8028 42.2744 92.832 42.2744 92.8612 42.2744C92.8904 42.2744 92.8904 42.2744 92.8904 42.3034C92.8904 42.3323 92.8612 42.448 92.8612 42.7084C92.8612 42.7663 92.8612 42.7952 92.832 42.7952C92.8028 42.7952 92.8028 42.7663 92.8028 42.7374C92.8028 42.6795 92.7736 42.5927 92.7445 42.5638C92.7153 42.5059 92.5985 42.3902 92.2483 42.3902C91.9565 42.3902 91.723 42.5348 91.723 42.7952C91.723 43.0267 91.8397 43.1714 92.2191 43.4318L92.3359 43.5186C92.8028 43.8369 92.9779 44.0973 92.9779 44.4156C92.9779 44.647 92.8904 44.8785 92.6277 45.0521C92.4526 45.1679 92.2191 45.1968 92.0149 45.1968C91.8106 45.11 91.5771 45.0811 91.4312 45.0232Z"
                                      fill="white"/>
                                <path d="M109 30.8164H51.7117V31.3083H109V30.8164Z" fill="white"/>
                                <path d="M54.4259 33.5649L56.498 39.0335H55.7392L55.2139 37.5868H52.6748L52.1203 39.0335H51.3907L53.5212 33.5649H54.4259ZM55.0096 37.0081L54.28 35.1274C54.1632 34.8091 54.0757 34.4908 53.9589 34.2015H53.9298C53.813 34.5198 53.6963 34.8381 53.5795 35.1274L52.8499 37.0081H55.0096Z"
                                      fill="white"/>
                                <path d="M58.3073 33.0732H58.9785V39.0337H58.3073V33.0732Z" fill="white"/>
                                <path d="M61.3717 33.0732H62.0429V39.0337H61.3717V33.0732Z" fill="white"/>
                                <path d="M70.2144 33.5649V39.0335H69.514V33.5649H70.2144Z" fill="white"/>
                                <path d="M72.5493 34.491H73.2205V35.2143C73.5999 34.8961 74.0669 34.3752 74.7673 34.3752C75.4677 34.3752 75.9055 34.8093 75.9055 35.6484V39.0047H75.205V35.9088C75.205 35.4458 75.0883 34.9829 74.5338 34.9829C73.8918 34.9829 73.4832 35.4458 73.2205 35.7641V39.0047H72.5493V34.491V34.491Z"
                                      fill="white"/>
                                <path d="M80.8083 35.7642C80.7499 35.5906 80.5748 34.9251 79.9327 34.9251C78.9697 34.9251 78.707 35.851 78.707 36.748C78.707 37.6739 78.9405 38.5708 79.816 38.5708C80.3121 38.5708 80.6623 38.2815 80.8666 37.7318L81.4503 37.9343C81.1585 38.5708 80.8083 39.1206 79.816 39.1206C78.2984 39.1206 78.0066 37.7607 78.0066 36.748C78.0066 35.8221 78.2984 34.4043 79.9327 34.4043C80.6332 34.4043 81.1293 34.7226 81.4211 35.5906L80.8083 35.7642Z"
                                      fill="white"/>
                                <path d="M83.4349 33.0732H84.1062V39.0337H83.4349V33.0732Z" fill="white"/>
                                <path d="M89.826 39.005H89.1548V38.2816C88.7754 38.5999 88.3084 39.1207 87.608 39.1207C86.9076 39.1207 86.4698 38.6867 86.4698 37.8476V34.4912H87.1411V37.5872C87.1411 38.0501 87.2578 38.5131 87.8123 38.5131C88.4544 38.5131 88.8629 38.0501 89.1256 37.7319V34.4912H89.7968V39.005H89.826Z"
                                      fill="white"/>
                                <path d="M92.3359 37.7895C92.511 38.2524 92.8028 38.5997 93.3865 38.5997C94.1161 38.5997 94.3204 38.1367 94.3204 37.8474C94.3204 37.3844 93.9702 37.2108 93.3865 37.0372L93.0363 36.9215C92.4234 36.7189 91.8689 36.4296 91.8689 35.6773C91.8689 34.7514 92.7445 34.4331 93.4157 34.4331C94.4371 34.4331 94.729 35.0986 94.8749 35.4458L94.2912 35.6483C94.1745 35.1854 93.7951 34.9539 93.4157 34.9539C92.9779 34.9539 92.5694 35.1565 92.5694 35.6483C92.5694 35.9956 92.7445 36.1402 93.2406 36.3138L93.8535 36.5164C94.6122 36.7768 94.9916 37.0951 94.9916 37.7895C94.9916 38.2814 94.6414 39.1205 93.3573 39.1205C92.5985 39.1205 91.9273 38.7443 91.723 37.992L92.3359 37.7895Z"
                                      fill="white"/>
                                <path d="M97.0347 33.0732H97.7934V33.7387H97.0347V33.0732ZM97.0639 34.491H97.7351V39.0337H97.0639V34.491Z"
                                      fill="white"/>
                                <path d="M100.303 34.4912L101.091 37.0953C101.208 37.5004 101.296 37.7608 101.442 38.3684H101.471C101.646 37.7608 101.704 37.5004 101.821 37.0953L102.667 34.4912H103.339L101.85 39.0339H101.004L99.5154 34.4912H100.303Z"
                                      fill="white"/>
                                <path d="M105.615 36.9215C105.644 38.1367 106.228 38.5707 106.84 38.5707C107.57 38.5707 107.862 38.021 107.949 37.7606L108.533 37.9631C108.241 38.6575 107.687 39.0915 106.84 39.0915C105.206 39.0915 104.914 37.6448 104.914 36.7189C104.914 35.793 105.206 34.3752 106.84 34.3752C108.154 34.3752 108.621 35.5037 108.621 36.5743V36.9215H105.615V36.9215ZM107.891 36.4296C107.891 35.6194 107.512 34.9539 106.782 34.9539C106.082 34.9539 105.673 35.5037 105.586 36.4296H107.891Z"
                                      fill="white"/>
                                <path d="M33.6468 34.2018L41.6724 29.3409V19.1849L26.3508 9L11 19.1849V39.5258L19.0256 44.8497V24.5088L26.3508 19.6478L33.6468 24.5088L26.3508 29.3409V39.0339L42.4896 50L49.9899 45.0233L33.6468 34.2018Z"
                                      fill="white"/>
                            </svg>
                        </div>
                        <div class="glide__slide">
                            <svg width="120" height="60" viewBox="0 0 120 60" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M89.8299 20.2302L89.9999 19.6602H85.2299L85.0599 20.2302H87.1299L84.2199 29.7502C83.0699 33.5002 80.8499 35.3302 77.4599 35.3302C76.9581 35.3934 76.4484 35.3356 75.9735 35.1616C75.4986 34.9876 75.0722 34.7025 74.7299 34.3302C74.0899 33.4802 74.0899 32.0502 74.7299 29.9802L77.7299 20.2302H79.7299L79.8999 19.6602H72.6499L72.4799 20.2302H74.4799L71.4799 29.8102C70.8499 31.8602 70.9299 33.4602 71.7499 34.5602C72.5699 35.6602 74.2599 36.3202 76.6699 36.3202C80.8299 36.3202 83.3999 34.2602 84.7699 29.8502L87.7099 20.2302H89.8299Z"
                                      fill="white"/>
                                <path d="M97.27 32.2102C95.98 34.4902 94.78 35.3402 94.33 35.3402C94.33 35.3402 94.19 35.0602 94.75 33.8602L97.19 28.6202C97.88 27.1402 98.01 26.0002 97.58 25.3102C97.4043 25.0669 97.1676 24.8741 96.8938 24.7512C96.6199 24.6283 96.3186 24.5797 96.02 24.6102C94.33 24.6102 93.12 26.0002 91.72 28.2502C91.31 28.9102 90.84 29.7202 90.35 30.5802L92.8 24.4302L87.42 25.9502H87.34L87.19 26.2502L88.7 27.3002L85.23 36.3002L88.4 35.8102V35.7002C89.4144 33.34 90.6183 31.0659 92 28.9002C93.7 26.1502 94.57 25.5702 95 25.5702C95.14 25.5702 95.16 25.5702 95.17 25.6202C95.18 25.6702 95.28 26.0802 94.56 27.6202L91.95 33.2702C91.41 34.4402 91.31 35.2702 91.63 35.7702C91.7817 35.9647 91.9811 36.1166 92.2089 36.2112C92.4367 36.3058 92.6851 36.3399 92.93 36.3102C94.93 36.3102 96.2 35.3102 97.81 32.5102L97.9 32.3602L97.38 32.0402L97.27 32.2102Z"
                                      fill="white"/>
                                <path d="M105.88 24.5902C104.008 24.8049 102.295 25.7457 101.11 27.2102C99.5972 28.7681 98.7139 30.8304 98.6299 33.0002C98.5874 33.4422 98.6409 33.8882 98.7869 34.3075C98.9328 34.7269 99.1677 35.1097 99.4754 35.4298C99.7832 35.7499 100.156 35.9997 100.57 36.162C100.983 36.3243 101.427 36.3953 101.87 36.3702C103.742 36.1556 105.455 35.2148 106.64 33.7502C108.143 32.2008 109.028 30.1562 109.13 28.0002C109.179 27.5542 109.13 27.1029 108.986 26.6779C108.842 26.2528 108.607 25.8643 108.298 25.5395C107.988 25.2147 107.611 24.9615 107.194 24.7975C106.776 24.6335 106.328 24.5628 105.88 24.5902ZM105 32.8702C104.34 34.6602 103.51 35.6402 102.67 35.6402C102.14 35.6402 101.81 35.2402 101.81 33.2502C101.833 31.4703 102.151 29.7065 102.75 28.0302C103.41 26.2502 104.24 25.2702 105.09 25.2702C105.69 25.2702 105.94 25.9502 105.94 27.6402C105.917 29.4234 105.599 31.1905 105 32.8702Z"
                                      fill="white"/>
                                <path d="M17.1 27.7401C20.19 27.2401 21.89 25.8001 21.89 23.6701C21.89 20.8901 19.67 19.6001 14.89 19.6001H8V20.1701H10.07V35.7501H8V36.3201H15.72V35.7501H13.34V28.0501H14.05L21.05 36.2601L21.1 36.3201H25.28L20.28 30.4401C19.4461 29.3035 18.3568 28.3786 17.1 27.7401ZM18.36 23.8401C18.36 26.1901 17.05 27.4801 14.68 27.4801H13.34V20.1701H14.68C15.1767 20.1108 15.6803 20.1649 16.1531 20.3282C16.6258 20.4915 17.0554 20.7599 17.4096 21.1131C17.7638 21.4663 18.0333 21.8951 18.1979 22.3675C18.3625 22.8398 18.4179 23.3433 18.36 23.8401Z"
                                      fill="white"/>
                                <path d="M49.6101 25.1304H45.4601V25.7004H47.4601L44.2801 32.7004L41.1501 25.7004H42.5201V25.1304H36.3201V25.7004H37.8301L42.6101 36.3404L41.7801 38.1904C39.1601 38.2904 38.2201 39.4204 38.2201 40.3704C38.2172 40.5615 38.2533 40.7512 38.326 40.928C38.3988 41.1047 38.5067 41.2648 38.6433 41.3986C38.7799 41.5323 38.9422 41.6369 39.1204 41.706C39.2986 41.7751 39.489 41.8072 39.6801 41.8004C40.8401 41.8004 41.2301 40.9104 41.8901 39.4304L48.1001 25.7004H49.6101V25.1304Z"
                                      fill="white"/>
                                <path d="M58.59 28.3103C58.59 26.8003 58.23 24.8003 55.11 24.8003C53.578 24.8481 52.1006 25.3803 50.89 26.3203C50.09 26.8303 49.23 27.4403 49.23 28.3203C49.23 29.0103 49.97 29.5103 50.99 29.5103C51.4239 29.5074 51.845 29.3635 52.19 29.1003L52.26 29.0303V28.9403C52.1268 28.4638 52.0927 27.9651 52.1597 27.4749C52.2268 26.9847 52.3937 26.5135 52.65 26.0903C52.8103 25.9161 53.0076 25.7799 53.2273 25.6917C53.447 25.6034 53.6837 25.5654 53.92 25.5803C55.14 25.5803 55.69 26.6803 55.69 27.7803C55.6982 28.0608 55.6357 28.3388 55.5081 28.5888C55.3805 28.8387 55.192 29.0525 54.96 29.2103C54.45 29.6055 53.8964 29.941 53.31 30.2103C52.88 30.4203 52.48 30.5903 52.09 30.7503C50.48 31.4403 49.32 31.9403 49.32 33.5703C49.3491 34.0049 49.464 34.4295 49.6581 34.8195C49.8521 35.2095 50.1214 35.5573 50.4505 35.8427C50.7796 36.1281 51.162 36.3455 51.5755 36.4824C51.989 36.6193 52.4256 36.6729 52.86 36.6403C53.4454 36.6523 54.0224 36.5004 54.526 36.2018C55.0296 35.9032 55.4397 35.4697 55.71 34.9503L55.78 36.3603H60.19V35.7903H58.59V28.3103ZM55.66 29.3103V33.1303C55.66 34.4903 54.87 35.2203 54.16 35.2203C53.23 35.2203 52.5 34.2203 52.5 32.8503C52.5 31.4803 53.61 30.8503 54.69 30.0803L55.15 29.7603C55.3269 29.6219 55.4971 29.4751 55.66 29.3203V29.3103Z"
                                      fill="white"/>
                                <path d="M65.65 18.2002H65.24V18.2802C64.35 19.6902 62.76 20.4202 60.24 20.5702H60V21.1302H62.7V35.7502H60.7V36.3202H67.3V35.7502H65.65V18.2002Z"
                                      fill="white"/>
                                <path d="M32.0001 25.0002C31.2527 24.8069 30.4738 24.7676 29.7108 24.8849C28.9478 25.0021 28.2166 25.2734 27.5618 25.6822C26.907 26.091 26.3422 26.6288 25.9018 27.2628C25.4614 27.8968 25.1546 28.6138 25.0001 29.3702C24.6454 30.8704 24.8818 32.4496 25.6601 33.7802C26.0759 34.4717 26.6327 35.0678 27.2944 35.5296C27.956 35.9914 28.7076 36.3085 29.5001 36.4602C30.2541 36.6643 31.0421 36.7113 31.8151 36.5982C32.588 36.485 33.3295 36.2142 33.9934 35.8026C34.6573 35.3909 35.2295 34.8472 35.6745 34.2051C36.1195 33.5631 36.4277 32.8364 36.5801 32.0702C36.7674 31.3039 36.7962 30.5075 36.6647 29.7297C36.5331 28.952 36.2441 28.2093 35.8152 27.5472C35.3863 26.8852 34.8267 26.3178 34.1706 25.8798C33.5146 25.4418 32.776 25.1425 32.0001 25.0002ZM33.3001 31.1102C33.1601 34.0602 32.4301 35.7002 31.1301 35.9902C30.8541 36.0568 30.5661 36.0568 30.2901 35.9902C28.9801 35.7002 28.2901 34.0602 28.1201 31.1102C28.0632 30.1062 28.127 29.099 28.3101 28.1102C28.7201 26.3002 29.5401 25.3902 30.7101 25.4402C31.8801 25.4902 32.7101 26.3002 33.1001 28.1102C33.3032 29.0999 33.3805 30.1112 33.3301 31.1202L33.3001 31.1102Z"
                                      fill="white"/>
                                <path d="M110.89 24.59C111.036 24.5873 111.18 24.6139 111.316 24.6681C111.451 24.7223 111.574 24.8031 111.677 24.9056C111.781 25.0082 111.863 25.1304 111.918 25.2651C111.974 25.3999 112.001 25.5443 112 25.69C112.006 25.9151 111.945 26.1369 111.824 26.3268C111.703 26.5168 111.528 26.6663 111.321 26.7561C111.115 26.846 110.886 26.8721 110.665 26.8311C110.443 26.7902 110.239 26.684 110.079 26.5262C109.918 26.3684 109.808 26.1662 109.763 25.9456C109.718 25.7249 109.74 25.4959 109.826 25.2878C109.913 25.0798 110.059 24.9022 110.247 24.7778C110.434 24.6535 110.655 24.5881 110.88 24.59H110.89ZM110.89 24.78C110.664 24.8037 110.455 24.9103 110.302 25.0793C110.15 25.2483 110.066 25.4676 110.066 25.695C110.066 25.9224 110.15 26.1418 110.302 26.3108C110.455 26.4797 110.664 26.5864 110.89 26.61C111.008 26.6102 111.124 26.5864 111.233 26.5402C111.341 26.494 111.439 26.4263 111.52 26.3412C111.601 26.2562 111.664 26.1555 111.706 26.0453C111.747 25.935 111.765 25.8176 111.76 25.7C111.764 25.5815 111.744 25.4633 111.702 25.3525C111.66 25.2417 111.596 25.1405 111.514 25.0548C111.432 24.9691 111.333 24.9006 111.225 24.8534C111.116 24.8063 110.999 24.7813 110.88 24.78H110.89ZM110.7 26.3H110.48V25.14C110.617 25.1286 110.754 25.1286 110.89 25.14C111.017 25.1247 111.145 25.1568 111.25 25.23C111.289 25.259 111.32 25.2968 111.341 25.3403C111.362 25.3839 111.372 25.4318 111.37 25.48C111.365 25.5436 111.341 25.6041 111.299 25.6527C111.258 25.7012 111.202 25.7353 111.14 25.75C111.193 25.7792 111.238 25.8208 111.271 25.8714C111.304 25.922 111.325 25.9798 111.33 26.04C111.344 26.1378 111.374 26.2326 111.42 26.32H111.2C111.152 26.2254 111.119 26.1244 111.1 26.02C111.1 25.89 111 25.84 110.84 25.84H110.7V26.3ZM110.7 25.65H110.85C111 25.65 111.14 25.65 111.14 25.47C111.14 25.29 111.07 25.28 110.87 25.28H110.7V25.65Z"
                                      fill="white"/>
                            </svg>

                        </div>
                        <div class="glide__slide">
                            <svg width="120" height="60" viewBox="0 0 120 60" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M69.3399 21.0699C69.3506 21.099 69.3506 21.1309 69.3399 21.1599C69.3475 21.1895 69.3475 21.2204 69.3399 21.2499L60.1599 30.4299C60.144 30.4365 60.127 30.4399 60.1099 30.4399C60.0927 30.4399 60.0757 30.4365 60.0599 30.4299C60.031 30.4416 59.9987 30.4416 59.9699 30.4299L50.7899 21.2499C50.7666 21.2257 50.7537 21.1935 50.7537 21.1599C50.7537 21.1264 50.7666 21.0941 50.7899 21.0699L59.9999 11.8799C60.0257 11.856 60.0596 11.8428 60.0949 11.8428C60.1301 11.8428 60.164 11.856 60.1899 11.8799L69.3399 21.0699ZM60.0599 30.1599L69.0599 21.1599L60.0599 12.1599L51.0599 21.1599L60.0599 30.1599Z"
                                      fill="white"/>
                                <path d="M58.8998 17.5C58.9996 17.7289 59.0291 17.9823 58.9846 18.228C58.9401 18.4737 58.8236 18.7006 58.6498 18.88C57.9998 17.9 55.9998 17 57.3998 16C57.6837 15.8758 58.002 15.8546 58.2998 15.94C60.7398 17.19 59.5898 20.61 57.2998 20.78C56.0998 20.86 54.6198 19.78 55.0798 18.33C55.1146 18.2169 55.1764 18.1139 55.2598 18.03C56.8298 17.03 57.5298 19.12 57.9298 19.52C57.3398 20.22 56.1798 19.52 55.8598 19.13C55.8598 18.78 56.3998 18.61 56.0498 18.27C55.6798 18.27 55.5298 18.45 55.4198 18.77C55.3996 18.9474 55.4272 19.1269 55.4998 19.29C56.6498 22.29 61.0298 18.29 58.7398 16.65C58.4757 16.4445 58.1429 16.3479 57.8098 16.38C57.7319 16.3987 57.6599 16.437 57.6009 16.4913C57.5419 16.5456 57.4978 16.6141 57.4727 16.6902C57.4477 16.7664 57.4425 16.8477 57.4578 16.9264C57.473 17.0052 57.5082 17.0787 57.5598 17.14C58.1198 17.37 57.7198 16.64 58.1798 16.76C58.3558 16.8062 58.5159 16.8995 58.6427 17.0299C58.7696 17.1603 58.8585 17.3228 58.8998 17.5Z"
                                      fill="white"/>
                                <path d="M61 15.3099C61.25 15.6999 61.83 15.2099 62.25 15.5599C61.8387 15.7011 61.4673 15.9389 61.1669 16.2533C60.8664 16.5676 60.6458 16.9494 60.5233 17.3667C60.4009 17.7839 60.3803 18.2244 60.4632 18.6513C60.5462 19.0781 60.7302 19.4789 61 19.8199C60.25 19.5699 60 19.8199 59.49 19.6999C60.9 18.1699 59.49 16.0999 58.24 15.4299C58.8 15.3099 59.24 15.6999 59.37 15.3099C59.8 15.3799 59.54 16.1299 60 16.1799V15.0599C59.67 15.0599 59.45 15.0099 59.49 14.6799C60.08 14.4799 59.39 13.6799 60.25 13.4299C60.98 13.7299 60.49 14.5099 61 14.9299C60.92 15.0999 60.51 14.9299 60.5 15.1799C60.49 15.4299 60.34 16.0899 60.62 16.1799C60.58 15.7099 60.89 15.5999 61 15.3099Z"
                                      fill="white"/>
                                <path d="M65.41 18.3799C65.5401 18.6658 65.5614 18.9893 65.47 19.2899C64.22 21.7299 60.8 20.5799 60.64 18.2899C60.55 17.0899 61.64 15.5999 63.08 16.0599C63.1941 16.0975 63.2971 16.1628 63.38 16.2499C64.38 17.8199 62.29 18.5199 61.9 18.9199C61.2 18.3299 61.9 17.1699 62.28 16.8499C62.64 16.8499 62.81 17.3799 63.15 17.0299C63.1551 16.8826 63.1076 16.7382 63.016 16.6228C62.9244 16.5073 62.7946 16.4283 62.65 16.3999C62.4694 16.3832 62.2875 16.4107 62.12 16.4799C59.12 17.6399 63.12 22.0199 64.77 19.7299C64.977 19.4627 65.0736 19.1262 65.04 18.7899C65.0213 18.7119 64.983 18.64 64.9287 18.581C64.8744 18.522 64.8059 18.4778 64.7297 18.4528C64.6536 18.4277 64.5722 18.4226 64.4935 18.4378C64.4148 18.453 64.3413 18.4882 64.28 18.5399C64.05 19.1099 64.78 18.7099 64.66 19.1699C64.6179 19.3526 64.5252 19.5199 64.3926 19.6525C64.26 19.7851 64.0927 19.8778 63.91 19.9199C63.6795 20.0205 63.4245 20.0504 63.177 20.0059C62.9296 19.9614 62.7009 19.8444 62.52 19.6699C63.51 18.9999 64.36 16.9399 65.41 18.3799Z"
                                      fill="white"/>
                                <path d="M66.6898 20.52C66.8898 21.1 67.6898 20.42 67.9398 21.27C67.6398 22.01 66.8598 21.51 66.4398 22.03C66.2698 21.95 66.4398 21.54 66.1898 21.53C65.9398 21.52 65.2798 21.37 65.1898 21.65C65.6698 21.59 65.7798 21.9 66.0698 22.03C65.6798 22.28 66.1698 22.86 65.8198 23.28C65.6825 22.8646 65.4471 22.4884 65.1335 22.1834C64.8198 21.8784 64.4372 21.6535 64.0182 21.5279C63.5991 21.4023 63.1559 21.3796 62.7262 21.4618C62.2965 21.544 61.8929 21.7286 61.5498 22C61.7998 21.25 61.5498 21 61.6698 20.49C63.1998 21.9 65.2698 20.49 65.9398 19.23C66.0598 19.8 65.6598 20.23 66.0598 20.36C65.9898 20.8 65.2398 20.54 65.1798 20.99H66.3098C66.2798 20.69 66.3598 20.48 66.6898 20.52Z"
                                      fill="white"/>
                                <path d="M63.0698 21.6499C64.2598 21.5699 65.7498 22.6499 65.2898 24.0899C65.2563 24.2088 65.1905 24.3161 65.0998 24.3999C63.5298 25.3999 62.8298 23.3099 62.4398 22.9099C63.0198 22.2099 64.1798 22.9099 64.4998 23.2999C64.4998 23.6499 63.9698 23.8199 64.3198 24.1599C64.6898 24.1599 64.8398 23.9799 64.9498 23.6599C64.9673 23.4826 64.9398 23.3038 64.8698 23.1399C63.7198 20.1399 59.3298 24.1399 61.6298 25.7899C61.8967 25.9892 62.2283 26.0818 62.5598 26.0499C62.6377 26.0329 62.7098 25.9959 62.7691 25.9427C62.8284 25.8894 62.8728 25.8216 62.898 25.746C62.9232 25.6704 62.9284 25.5895 62.9129 25.5113C62.8974 25.4331 62.8619 25.3603 62.8098 25.2999C62.2398 25.0599 62.6398 25.7999 62.1798 25.6699C61.9971 25.6278 61.8298 25.5352 61.6972 25.4026C61.5646 25.2699 61.4719 25.1027 61.4298 24.9199C61.334 24.6903 61.3065 24.4378 61.3509 24.193C61.3953 23.9481 61.5095 23.7213 61.6798 23.5399C62.2998 24.5399 64.3798 25.3699 62.9398 26.4299C62.6524 26.5541 62.331 26.5753 62.0298 26.4899C59.5898 25.2399 60.7398 21.8199 63.0698 21.6499Z"
                                      fill="white"/>
                                <path d="M62.1599 26.9999C61.5899 27.1099 61.1599 26.7199 61.0299 27.1199C60.5999 27.0499 60.8499 26.2899 60.3999 26.2399V27.3699C60.7299 27.3699 60.9399 27.4199 60.9099 27.7499C60.3199 27.9399 61.0099 28.7499 60.1499 28.9999C59.4199 28.6999 59.9099 27.9199 59.3999 27.4999C59.4799 27.3199 59.8799 27.4999 59.8999 27.2399C59.9199 26.9799 60.0599 26.3399 59.7699 26.2399C59.8299 26.7199 59.5299 26.8299 59.3999 27.1199C59.1499 26.7299 58.5699 27.2199 58.1399 26.8699C58.552 26.7298 58.9244 26.4928 59.226 26.179C59.5275 25.8651 59.7493 25.4834 59.8728 25.0661C59.9962 24.6487 60.0177 24.2078 59.9354 23.7804C59.8531 23.353 59.6695 22.9516 59.3999 22.6099C60.1499 22.8599 60.3999 22.6099 60.9099 22.7299C59.4999 24.2099 60.8799 26.2799 62.1599 26.9999Z"
                                      fill="white"/>
                                <path d="M61 20.9C61.18 21.19 61.26 21.13 61.12 21.53C60.74 21.53 60.3 21.6 60.37 21.15C60.58 21.1 60.65 20.88 61 20.9Z"
                                      fill="white"/>
                                <path d="M59.8399 24.16C59.9199 25.36 58.8399 26.85 57.3999 26.39C57.2811 26.3565 57.1738 26.2907 57.0899 26.2C56.0899 24.63 58.1799 23.93 58.5799 23.54C59.2799 24.12 58.5799 25.28 58.1999 25.6C57.8399 25.6 57.6699 25.07 57.3199 25.42C57.3148 25.5673 57.3623 25.7117 57.4539 25.8271C57.5455 25.9426 57.6753 26.0216 57.8199 26.05C58.0006 26.0721 58.1838 26.0444 58.3499 25.97C61.3499 24.82 57.3499 20.43 55.6999 22.72C55.5017 22.9913 55.4093 23.3255 55.4399 23.66C55.4586 23.738 55.4969 23.8099 55.5512 23.8689C55.6055 23.9279 55.674 23.9721 55.7502 23.9971C55.8263 24.0222 55.9077 24.0273 55.9864 24.0121C56.0651 23.9968 56.1386 23.9617 56.1999 23.91C56.4299 23.34 55.6999 23.74 55.8199 23.28C55.862 23.0973 55.9547 22.93 56.0873 22.7974C56.2199 22.6648 56.3872 22.5721 56.5699 22.53C56.7998 22.4354 57.052 22.4087 57.2965 22.453C57.5411 22.4973 57.7679 22.6108 57.9499 22.78C56.9499 23.4 56.1199 25.48 55.0599 24.04C54.9349 23.7564 54.9136 23.4378 54.9999 23.14C56.2599 20.7 59.6699 21.84 59.8399 24.16Z"
                                      fill="white"/>
                                <path d="M58.7099 20.52C58.8199 21.06 58.5799 21.28 58.8299 22.03C58.488 21.7604 58.0865 21.5765 57.659 21.4936C57.2315 21.4107 56.7904 21.4313 56.3725 21.5537C55.9546 21.676 55.572 21.8965 55.2567 22.1969C54.9414 22.4972 54.7025 22.8686 54.5599 23.28C54.2099 22.86 54.7099 22.28 54.3099 22.03C54.5999 21.9 54.7199 21.59 55.1899 21.65C55.0999 21.37 54.4799 21.65 54.1899 21.53C53.8999 21.41 54.1099 21.95 53.9299 22.03C53.5099 21.51 52.7299 22.03 52.4299 21.28C52.7099 20.42 53.4899 21.1 53.6799 20.52C54.0099 20.52 54.0899 20.7 54.0599 21.02H55.1899C55.1899 20.57 54.3799 20.83 54.3099 20.39C54.7099 20.26 54.3099 19.83 54.4399 19.27C55.0999 20.55 57.1799 21.93 58.7099 20.52Z"
                                      fill="white"/>
                                <path d="M60.09 20.27C60.65 20.21 60.43 20.86 60.34 21.15C60.2382 21.1468 60.14 21.1113 60.0597 21.0487C59.9794 20.986 59.9211 20.8994 59.8933 20.8014C59.8654 20.7034 59.8695 20.5991 59.9049 20.5036C59.9402 20.408 60.0051 20.3262 60.09 20.27V20.27Z"
                                      fill="white"/>
                                <path d="M60.09 21.1499C60.16 21.5899 59.24 21.6799 59.21 21.2799C59.25 20.7199 59.83 20.9999 60.09 21.1499Z"
                                      fill="white"/>
                                <path d="M60.0899 21.4C60.5399 21.33 60.4699 21.77 60.4599 22.16C60.0699 22.29 60.1299 22.21 59.8399 22.03C59.8199 21.72 59.9999 21.64 60.0899 21.4Z"
                                      fill="white"/>
                                <path d="M14.2699 37.72C14.2699 36.88 14.2699 36.72 13.7999 36.65C13.6835 36.6398 13.5664 36.6398 13.4499 36.65C13.4394 36.6514 13.4287 36.6507 13.4185 36.6479C13.4082 36.6452 13.3986 36.6404 13.3903 36.6339C13.3819 36.6274 13.3749 36.6192 13.3697 36.61C13.3645 36.6007 13.3612 36.5906 13.3599 36.58C13.3599 36.52 13.4099 36.5 13.5299 36.5C13.9999 36.5 14.6599 36.5 14.7099 36.5H15.7099C15.8199 36.5 15.8799 36.5 15.8799 36.58C15.8787 36.5906 15.8754 36.6007 15.8702 36.61C15.865 36.6192 15.858 36.6274 15.8496 36.6339C15.8412 36.6404 15.8316 36.6452 15.8214 36.6479C15.8111 36.6507 15.8004 36.6514 15.7899 36.65H15.5299C15.2499 36.7 15.1699 36.88 15.1499 37.24C15.1299 37.6 15.1499 37.89 15.1499 38.33V39.49C15.1499 39.96 15.1499 39.98 15.0099 40.06C14.3162 40.3755 13.562 40.5359 12.7999 40.53C11.5594 40.5789 10.3425 40.1816 9.36992 39.41C8.9675 39.0225 8.6496 38.556 8.4362 38.0397C8.2228 37.5234 8.11853 36.9686 8.12992 36.41C8.10616 35.7406 8.25347 35.0762 8.55792 34.4795C8.86238 33.8828 9.31393 33.3736 9.86992 33C10.7112 32.5199 11.6725 32.2909 12.6399 32.34C13.1779 32.3473 13.7138 32.4076 14.2399 32.52C14.5169 32.5754 14.7977 32.6088 15.0799 32.62C15.1899 32.62 15.2099 32.62 15.2099 32.71C15.1601 33.2051 15.1368 33.7025 15.1399 34.2C15.1399 34.36 15.1399 34.41 15.0399 34.41C14.9399 34.41 14.9799 34.35 14.9699 34.26C14.9525 34.0158 14.8771 33.7793 14.7499 33.57C14.4302 33.2559 14.0442 33.0174 13.6202 32.872C13.1963 32.7266 12.7451 32.6781 12.2999 32.73C11.499 32.6815 10.7074 32.9229 10.0699 33.41C9.71925 33.7515 9.44791 34.1658 9.27511 34.6238C9.1023 35.0817 9.03225 35.572 9.06992 36.06C9.03671 37.1409 9.41973 38.1933 10.1399 39C10.4959 39.3612 10.9213 39.6465 11.3905 39.839C11.8596 40.0315 12.3629 40.1271 12.8699 40.12C13.2779 40.135 13.6842 40.0599 14.0599 39.9C14.1278 39.8663 14.1841 39.8131 14.2216 39.7472C14.259 39.6812 14.2758 39.6056 14.2699 39.53V37.72Z"
                                      fill="white"/>
                                <path d="M17.55 36.24C17.55 34.86 17.55 34.61 17.55 34.33C17.55 34.05 17.48 33.88 17.18 33.84H16.86C16.8422 33.8379 16.8256 33.8298 16.8129 33.8171C16.8002 33.8044 16.7922 33.7878 16.79 33.77C16.79 33.71 16.79 33.69 16.94 33.69H18.02H19.17C19.7662 33.6467 20.3616 33.7826 20.88 34.08C21.0722 34.2192 21.2299 34.4007 21.3408 34.6105C21.4518 34.8203 21.5131 35.0528 21.52 35.29C21.4997 35.6882 21.3871 36.0762 21.1909 36.4233C20.9948 36.7704 20.7206 37.0671 20.39 37.29C21.14 38.23 21.78 39.04 22.31 39.59C22.5575 39.9088 22.9133 40.1258 23.31 40.2C23.4198 40.2102 23.5303 40.2102 23.64 40.2C23.6605 40.2022 23.6796 40.2113 23.6942 40.2259C23.7087 40.2404 23.7179 40.2595 23.72 40.28C23.72 40.28 23.72 40.35 23.5 40.35H22.93C22.5863 40.3896 22.2384 40.327 21.93 40.17C21.4301 39.822 21.0022 39.3806 20.67 38.87C20.29 38.39 19.88 37.87 19.67 37.58C19.6583 37.5592 19.6406 37.5423 19.6192 37.5317C19.5978 37.521 19.5737 37.5169 19.55 37.52H18.38C18.38 37.52 18.32 37.52 18.32 37.6V37.8C18.32 38.66 18.32 39.35 18.32 39.71C18.32 40.07 18.4 40.14 18.68 40.18H19.09C19.15 40.18 19.16 40.23 19.16 40.26C19.16 40.29 19.16 40.33 19.02 40.33C18.52 40.33 17.93 40.33 17.89 40.33H16.98C16.89 40.33 16.84 40.33 16.84 40.26C16.8399 40.2404 16.8469 40.2214 16.8598 40.2067C16.8727 40.1919 16.8906 40.1824 16.91 40.18C17.0031 40.1897 17.097 40.1897 17.19 40.18C17.37 40.18 17.39 39.97 17.43 39.71C17.4794 39.0713 17.4961 38.4304 17.48 37.79L17.55 36.24ZM18.35 36.99C18.3508 37.0131 18.3565 37.0359 18.3669 37.0566C18.3772 37.0773 18.3919 37.0955 18.41 37.11C18.7345 37.2054 19.072 37.2493 19.41 37.24C19.651 37.2592 19.8921 37.2033 20.1 37.08C20.2947 36.9168 20.4466 36.7085 20.5424 36.4732C20.6383 36.2379 20.6752 35.9828 20.65 35.73C20.681 35.5092 20.6631 35.2843 20.5975 35.0713C20.5319 34.8582 20.4202 34.6622 20.2704 34.4971C20.1206 34.332 19.9363 34.2019 19.7306 34.116C19.5249 34.0301 19.3028 33.9905 19.08 34C18.8604 33.9826 18.6397 33.9826 18.42 34C18.3998 34.0079 18.3824 34.0216 18.3699 34.0394C18.3574 34.0572 18.3505 34.0783 18.35 34.1V36.99Z"
                                      fill="white"/>
                                <path d="M26.9999 33.85C27.1099 33.56 27.1499 33.51 27.2099 33.51C27.2699 33.51 27.3399 33.63 27.4299 33.83C27.5999 34.21 29.0699 37.83 29.6299 39.21C29.9699 40.01 30.2199 40.12 30.4199 40.21C30.5393 40.2268 30.6605 40.2268 30.7799 40.21C30.7799 40.21 30.8999 40.21 30.8999 40.29C30.8999 40.37 30.7899 40.36 30.6899 40.36C30.5899 40.36 29.8699 40.36 29.2399 40.36C29.0599 40.36 28.9199 40.36 28.9199 40.3C28.9199 40.24 28.9199 40.3 28.9799 40.23C29.0018 40.2205 29.0214 40.2065 29.0376 40.1889C29.0537 40.1713 29.0659 40.1505 29.0734 40.1279C29.081 40.1052 29.0837 40.0812 29.0814 40.0575C29.079 40.0337 29.0717 40.0108 29.0599 39.99L28.2399 37.99C28.2399 37.99 28.2399 37.94 28.1499 37.94H25.9999C25.9779 37.939 25.9561 37.9453 25.938 37.958C25.9199 37.9706 25.9065 37.9889 25.8999 38.01L25.3799 39.43C25.3057 39.6186 25.2618 39.8177 25.2499 40.02C25.2499 40.2 25.3999 40.26 25.5599 40.26H25.6399C25.7099 40.26 25.7399 40.26 25.7399 40.34C25.7399 40.42 25.6799 40.41 25.5999 40.41H24.7799C24.6799 40.41 24.2199 40.41 23.8499 40.41C23.7299 40.41 23.6699 40.41 23.6699 40.34C23.6721 40.3195 23.6812 40.3004 23.6958 40.2859C23.7103 40.2713 23.7294 40.2622 23.7499 40.26H24.0199C24.4399 40.21 24.6199 39.9 24.7999 39.45L26.9999 33.85ZM27.9999 37.54C27.9999 37.54 27.9999 37.54 27.9999 37.48L27.0899 35.05C27.0366 34.91 26.9866 34.91 26.9399 35.05L26.0799 37.48V37.54H27.9999Z"
                                      fill="white"/>
                                <path d="M32.79 39.17C32.79 39.9 32.9 40.12 33.15 40.17C33.3029 40.1857 33.457 40.1857 33.61 40.17C33.6294 40.1725 33.6473 40.182 33.6602 40.1967C33.6731 40.2115 33.6801 40.2305 33.68 40.25C33.68 40.25 33.62 40.32 33.51 40.32C32.99 40.32 32.63 40.32 32.51 40.32C32.39 40.32 32.04 40.32 31.63 40.32C31.53 40.32 31.48 40.32 31.48 40.25C31.4798 40.2305 31.4869 40.2115 31.4998 40.1967C31.5127 40.182 31.5305 40.1725 31.55 40.17C31.6762 40.1859 31.8038 40.1859 31.93 40.17C32.16 40.11 32.19 39.87 32.19 39.07V34C32.19 33.64 32.24 33.55 32.32 33.55C32.4 33.55 32.58 33.73 32.67 33.82C32.76 33.91 34.15 35.38 35.57 36.82C36.48 37.76 37.46 38.8201 37.74 39.1101L37.65 34.67C37.65 34.09 37.58 33.89 37.3 33.84C37.1502 33.8288 36.9998 33.8288 36.85 33.84C36.79 33.84 36.78 33.84 36.78 33.76C36.78 33.68 36.85 33.69 36.96 33.69H37.96H38.74C38.83 33.69 38.91 33.69 38.91 33.76C38.9033 33.7838 38.8888 33.8046 38.8688 33.8191C38.8489 33.8336 38.8246 33.841 38.8 33.84H38.58C38.28 33.9 38.26 34.0801 38.26 34.6101V39.8101C38.26 40.3901 38.26 40.44 38.19 40.44C38.12 40.44 38 40.3701 37.49 39.9001C37.39 39.8201 36.07 38.51 35.1 37.5C34.13 36.49 33 35.3 32.69 35L32.79 39.17Z"
                                      fill="white"/>
                                <path d="M40.8098 36.2401C40.8098 34.8601 40.8098 34.6101 40.8098 34.3301C40.8098 34.0501 40.7398 33.8801 40.4398 33.8401H40.1198C40.102 33.8379 40.0854 33.8299 40.0727 33.8172C40.06 33.8045 40.0519 33.7879 40.0498 33.7701C40.0498 33.7101 40.0498 33.6901 40.1998 33.6901H41.2598H42.4898C43.4098 33.6901 45.0898 33.6101 46.1698 34.6901C46.4637 34.9851 46.6949 35.3365 46.8496 35.7231C47.0042 36.1098 47.0791 36.5237 47.0698 36.9401C47.074 37.8687 46.7152 38.7623 46.0698 39.4301C45.7007 39.7798 45.263 40.0492 44.7846 40.2213C44.3061 40.3934 43.7971 40.4645 43.2898 40.4301C42.8898 40.4301 42.3998 40.4301 41.9998 40.3801H41.2498H40.8798H40.3198C40.2298 40.3801 40.1798 40.3801 40.1798 40.3101C40.1797 40.2905 40.1867 40.2715 40.1996 40.2567C40.2125 40.242 40.2304 40.2325 40.2498 40.2301C40.3429 40.2398 40.4367 40.2398 40.5298 40.2301C40.7098 40.2301 40.7298 40.0201 40.7698 39.7601C40.8192 39.1213 40.8359 38.4805 40.8198 37.8401L40.8098 36.2401ZM41.6498 37.2401C41.6498 38.1801 41.6498 39.0001 41.6498 39.1701C41.6437 39.3877 41.6776 39.6046 41.7498 39.8101C41.8698 39.9701 42.1898 40.1601 43.2798 40.1601C44.0722 40.1771 44.8413 39.891 45.4298 39.3601C45.9283 38.7738 46.1825 38.0184 46.1398 37.2501C46.1569 36.8371 46.0904 36.425 45.9443 36.0383C45.7983 35.6517 45.5756 35.2986 45.2898 35.0001C44.8916 34.6266 44.4173 34.3439 43.8994 34.1713C43.3815 33.9986 42.8324 33.9402 42.2898 34.0001C42.1015 34.0001 41.9138 34.0202 41.7298 34.0601C41.6498 34.0601 41.6198 34.1301 41.6198 34.2401L41.6498 37.2401Z"
                                      fill="white"/>
                                <path d="M52.88 35.52C52.88 33.89 52.88 33.6 52.88 33.27C52.88 32.94 52.78 32.75 52.43 32.67C52.3135 32.6597 52.1964 32.6597 52.08 32.67C52.08 32.67 51.99 32.67 51.99 32.61C51.99 32.55 52.05 32.53 52.16 32.53C52.63 32.53 53.29 32.53 53.34 32.53H54.57C55.2378 32.4796 55.9049 32.6368 56.48 32.98C56.6992 33.1471 56.8778 33.3617 57.0025 33.6076C57.1272 33.8534 57.1947 34.1243 57.2 34.4C57.1792 34.8694 57.0555 35.3286 56.8378 35.745C56.6201 36.1614 56.3136 36.525 55.94 36.81C56.79 37.91 57.5 38.81 58.11 39.48C58.4287 39.8753 58.8799 40.1417 59.38 40.23C59.5164 40.2408 59.6535 40.2408 59.79 40.23C59.8108 40.2294 59.8311 40.2361 59.8475 40.2489C59.8639 40.2617 59.8754 40.2797 59.88 40.3C59.88 40.36 59.82 40.38 59.63 40.38H58.89C58.5054 40.4176 58.1178 40.3484 57.77 40.18C57.2083 39.7658 56.7328 39.2461 56.37 38.65C55.93 38.08 55.44 37.38 55.23 37.11C55.2154 37.0865 55.1945 37.0676 55.1698 37.0553C55.1451 37.0429 55.1175 37.0376 55.09 37.04H53.81C53.81 37.04 53.74 37.04 53.74 37.13V37.38C53.74 38.38 53.74 39.2 53.79 39.64C53.84 40.08 53.88 40.17 54.2 40.21H54.67C54.68 40.2085 54.6902 40.2093 54.6999 40.2121C54.7095 40.215 54.7185 40.2199 54.7261 40.2266C54.7337 40.2332 54.7398 40.2414 54.7439 40.2506C54.748 40.2599 54.7501 40.2699 54.75 40.28C54.75 40.33 54.75 40.36 54.58 40.36C54.01 40.36 53.35 40.36 53.3 40.36H52.3C52.18 40.36 52.13 40.36 52.13 40.28C52.1299 40.2699 52.132 40.2599 52.1361 40.2506C52.1402 40.2414 52.1463 40.2332 52.1539 40.2266C52.1615 40.2199 52.1704 40.215 52.1801 40.2121C52.1898 40.2093 52.2 40.2085 52.21 40.21C52.3164 40.2197 52.4235 40.2197 52.53 40.21C52.74 40.21 52.79 39.94 52.83 39.64C52.87 39.34 52.88 38.38 52.88 37.38V35.52ZM53.72 36.43C53.7191 36.4545 53.7252 36.4789 53.7376 36.5001C53.75 36.5213 53.7682 36.5386 53.79 36.55C54.1414 36.6802 54.5156 36.738 54.89 36.72C55.1645 36.7362 55.4372 36.6662 55.67 36.52C55.8942 36.3201 56.0681 36.0701 56.1776 35.7903C56.287 35.5106 56.329 35.209 56.3 34.91C56.3 33.61 55.62 32.83 54.5 32.83C54.2652 32.8248 54.0305 32.845 53.8 32.89C53.7746 32.9004 53.7533 32.9186 53.7389 32.942C53.7245 32.9653 53.7179 32.9926 53.72 33.02V36.43Z"
                                      fill="white"/>
                                <path d="M61 36.24C61 34.86 61 34.61 61 34.33C61 34.05 60.93 33.88 60.62 33.84H60.31C60.2922 33.8379 60.2756 33.8298 60.2629 33.8171C60.2502 33.8044 60.2421 33.7879 60.24 33.77C60.24 33.71 60.24 33.69 60.38 33.69H61.45C61.51 33.69 63.45 33.69 63.64 33.69C63.83 33.69 63.98 33.69 64.05 33.69C64.0933 33.687 64.1367 33.687 64.18 33.69C64.18 33.69 64.18 33.69 64.18 33.77C64.18 33.85 64.18 33.94 64.11 34.19C64.11 34.27 64.11 34.67 64.06 34.78C64.01 34.89 64.06 34.87 63.97 34.87C63.88 34.87 63.9 34.87 63.9 34.75C63.9161 34.6473 63.9161 34.5427 63.9 34.44C63.83 34.3 63.74 34.23 63.24 34.17C63.08 34.17 62.02 34.17 61.92 34.17C61.82 34.17 61.86 34.17 61.86 34.26V36.67C61.86 36.74 61.86 36.77 61.92 36.77C61.98 36.77 63.24 36.77 63.45 36.77C63.6096 36.7726 63.7663 36.7273 63.9 36.64C63.96 36.58 64 36.53 64.03 36.53C64.06 36.53 64.09 36.53 64.09 36.6C64.0528 36.7316 64.0227 36.8652 64 37C64 37.18 64 37.51 64 37.57C64 37.63 64 37.74 63.92 37.74C63.9099 37.7401 63.8999 37.738 63.8907 37.7339C63.8815 37.7298 63.8732 37.7237 63.8666 37.7161C63.8599 37.7085 63.855 37.6996 63.8521 37.6899C63.8493 37.6802 63.8485 37.67 63.85 37.66C63.8676 37.5608 63.8676 37.4592 63.85 37.36C63.85 37.24 63.74 37.13 63.38 37.09C63.02 37.05 62.15 37.09 62 37.09C61.85 37.09 61.93 37.09 61.93 37.15V37.89C61.93 38.2 61.93 39.23 61.93 39.41C61.93 40 62.12 40.12 63.03 40.12C63.34 40.1363 63.6507 40.1026 63.95 40.02C64.0711 39.9704 64.1747 39.886 64.2478 39.7774C64.3208 39.6688 64.3598 39.5409 64.36 39.41C64.36 39.3 64.36 39.27 64.46 39.27C64.56 39.27 64.52 39.34 64.52 39.41C64.4958 39.6954 64.4557 39.9791 64.4 40.26C64.33 40.49 64.24 40.49 63.88 40.49C63.2 40.49 62.66 40.49 62.29 40.49H61.53H61.13H60.6C60.5 40.49 60.45 40.49 60.45 40.42C60.45 40.3988 60.4584 40.3785 60.4734 40.3635C60.4884 40.3484 60.5088 40.34 60.53 40.34C60.61 40.34 60.72 40.34 60.81 40.34C60.9 40.34 61.01 40.13 61.05 39.87C61.0714 39.1796 61.0547 38.4886 61 37.8V36.24Z"
                                      fill="white"/>
                                <path d="M65.6998 40.2599C65.5798 40.1899 65.5698 40.1599 65.5698 39.9199C65.5698 39.4799 65.5698 39.1299 65.6198 38.9799C65.6698 38.8299 65.6198 38.8399 65.6898 38.8399C65.7598 38.8399 65.7698 38.8399 65.7698 38.9399C65.7526 39.0459 65.7526 39.154 65.7698 39.2599C65.8729 39.5514 66.0736 39.7982 66.3379 39.9586C66.6021 40.1189 66.9137 40.183 67.2198 40.1399C68.1198 40.1399 68.5898 39.6299 68.5898 38.9599C68.5898 38.2899 68.2498 38.0199 67.4298 37.4199L67.0198 37.1099C66.0198 36.3699 65.6998 35.8199 65.6998 35.2099C65.6998 34.1599 66.5298 33.5399 67.6998 33.5399C68.0358 33.5373 68.371 33.5708 68.6998 33.6399C68.806 33.6542 68.9136 33.6542 69.0198 33.6399C69.0898 33.6399 69.1098 33.6399 69.1098 33.7099C69.1098 33.7799 69.1098 34.0399 69.1098 34.6499C69.1098 34.7799 69.1098 34.8399 69.0398 34.8399C68.9698 34.8399 68.9698 34.8399 68.9598 34.7299C68.9344 34.5773 68.8873 34.4292 68.8198 34.2899C68.7598 34.1899 68.4498 33.8499 67.6298 33.8499C66.8098 33.8499 66.4098 34.1899 66.4098 34.8499C66.4098 35.5099 66.6898 35.7399 67.5998 36.3499L67.8598 36.5299C68.9798 37.2899 69.3598 37.9099 69.3598 38.6699C69.3634 38.9741 69.2867 39.2739 69.1375 39.539C68.9883 39.8041 68.7718 40.0252 68.5098 40.1799C68.0459 40.4245 67.5231 40.5352 66.9998 40.4999C66.5553 40.5023 66.1142 40.4209 65.6998 40.2599V40.2599Z"
                                      fill="white"/>
                                <path d="M72.0998 37.7999C72.0998 38.6599 72.0998 39.36 72.0998 39.72C72.0998 40.08 72.1598 40.1499 72.4298 40.1899H72.8498C72.8693 40.1924 72.8871 40.2019 72.9 40.2166C72.9129 40.2314 72.92 40.2504 72.9198 40.27C72.9198 40.27 72.9198 40.34 72.7798 40.34C72.2598 40.34 71.6698 40.34 71.6298 40.34H70.7198C70.6298 40.34 70.5698 40.34 70.5698 40.27C70.572 40.2495 70.5811 40.2304 70.5957 40.2158C70.6102 40.2013 70.6294 40.1921 70.6498 40.1899C70.7429 40.1997 70.8367 40.1997 70.9298 40.1899C71.1098 40.1899 71.1398 39.98 71.1698 39.72C71.1998 39.46 71.2198 38.6599 71.2198 37.7999V36.24C71.2198 34.86 71.2198 34.61 71.2198 34.33C71.2198 34.05 71.1298 33.8899 70.9298 33.8499H70.6498C70.6308 33.8483 70.6128 33.8406 70.5984 33.828C70.584 33.8154 70.574 33.7986 70.5698 33.7799C70.5698 33.7199 70.5698 33.7 70.7198 33.7H71.6498H72.5698C72.6698 33.7 72.7098 33.6999 72.7098 33.7799C72.7077 33.7978 72.6996 33.8144 72.687 33.8271C72.6743 33.8398 72.6577 33.8478 72.6398 33.8499C72.5634 33.8416 72.4863 33.8416 72.4098 33.8499C72.1598 33.8499 72.1098 34.03 72.0898 34.34C72.0698 34.65 72.0898 34.87 72.0898 36.25L72.0998 37.7999Z"
                                      fill="white"/>
                                <path d="M74.8699 36.2401C74.8699 34.8601 74.8699 34.6101 74.8699 34.3301C74.8699 34.0501 74.7999 33.8801 74.4999 33.8401H74.1899C74.1708 33.8384 74.1528 33.8307 74.1384 33.8181C74.124 33.8055 74.114 33.7887 74.1099 33.7701C74.1099 33.7101 74.1099 33.6901 74.2599 33.6901H75.3199H76.5499C77.4699 33.6901 79.1499 33.6101 80.2399 34.6901C80.5319 34.9859 80.7613 35.3377 80.9143 35.7243C81.0672 36.1109 81.1405 36.5244 81.1299 36.9401C81.1341 37.8687 80.7752 38.7623 80.1299 39.4301C79.7614 39.7808 79.3239 40.0508 78.8452 40.223C78.3666 40.3952 77.8573 40.4657 77.3499 40.4301C76.9499 40.4301 76.4599 40.4301 76.0599 40.3801H75.3099H74.9399H74.3799C74.2899 40.3801 74.2399 40.3801 74.2399 40.3101C74.2397 40.2905 74.2467 40.2715 74.2597 40.2567C74.2726 40.242 74.2904 40.2325 74.3099 40.2301C74.4029 40.2405 74.4968 40.2405 74.5899 40.2301C74.7699 40.2301 74.7899 40.0201 74.8299 39.7601C74.8891 39.1219 74.9091 38.4807 74.8899 37.8401L74.8699 36.2401ZM75.6999 37.2401C75.6999 38.1801 75.6999 39.0001 75.6999 39.1701C75.6938 39.3877 75.7277 39.6046 75.7999 39.8101C75.9199 39.9701 76.2399 40.1601 77.3299 40.1601C78.1223 40.1771 78.8913 39.891 79.4799 39.3601C79.982 38.7753 80.2398 38.0198 80.1999 37.2501C80.2198 36.8359 80.1536 36.4222 80.0056 36.035C79.8576 35.6477 79.6309 35.2953 79.3399 35.0001C78.9417 34.6266 78.4673 34.3439 77.9495 34.1713C77.4316 33.9986 76.8825 33.9402 76.3399 34.0001C76.1516 34.0001 75.9639 34.0202 75.7799 34.0601C75.6999 34.0601 75.6699 34.1301 75.6699 34.2401L75.6999 37.2401Z"
                                      fill="white"/>
                                <path d="M82.8098 36.24C82.8098 34.86 82.8098 34.61 82.8098 34.33C82.8098 34.05 82.7398 33.88 82.4398 33.84H82.1198C82.102 33.8379 82.0854 33.8298 82.0727 33.8171C82.06 33.8044 82.0519 33.7878 82.0498 33.77C82.0498 33.71 82.0498 33.69 82.1998 33.69H83.2598C83.3198 33.69 85.2598 33.69 85.4498 33.69C85.6398 33.69 85.7998 33.69 85.8698 33.69C85.9097 33.6857 85.9499 33.6857 85.9898 33.69C85.9898 33.69 85.9898 33.69 85.9898 33.77C85.9555 33.9084 85.9288 34.0486 85.9098 34.19C85.9098 34.27 85.9098 34.67 85.9098 34.78C85.9098 34.89 85.9098 34.87 85.8298 34.87C85.7498 34.87 85.7498 34.87 85.7498 34.75C85.7659 34.6473 85.7659 34.5427 85.7498 34.44C85.6898 34.3 85.5998 34.23 85.0898 34.17C84.9398 34.17 83.8698 34.17 83.7698 34.17C83.6698 34.17 83.7698 34.17 83.7698 34.26V36.67C83.7698 36.74 83.7698 36.77 83.7698 36.77C83.7698 36.77 85.0898 36.77 85.2998 36.77C85.5098 36.77 85.6598 36.77 85.7498 36.64C85.8398 36.51 85.8598 36.53 85.8898 36.53C85.9198 36.53 85.9398 36.53 85.9398 36.6C85.9398 36.67 85.8898 36.8 85.8698 37.09C85.8498 37.38 85.8698 37.6 85.8698 37.66C85.8698 37.72 85.8698 37.83 85.7898 37.83C85.7098 37.83 85.7298 37.83 85.7298 37.75C85.7474 37.6508 85.7474 37.5492 85.7298 37.45C85.7298 37.33 85.6098 37.22 85.2598 37.18C84.9098 37.14 84.0298 37.18 83.8698 37.18C83.8615 37.1781 83.8529 37.1783 83.8447 37.1806C83.8366 37.183 83.8292 37.1873 83.8232 37.1933C83.8172 37.1993 83.8128 37.2068 83.8104 37.2149C83.8081 37.2231 83.8079 37.2317 83.8098 37.24V37.98C83.8098 38.29 83.8098 39.32 83.8098 39.5C83.8098 40.09 83.9998 40.21 84.8998 40.21C85.2099 40.2263 85.5205 40.1925 85.8198 40.11C85.9428 40.062 86.0486 39.9782 86.1234 39.8695C86.1983 39.7607 86.2388 39.632 86.2398 39.5C86.2398 39.39 86.2398 39.36 86.3298 39.36C86.4198 39.36 86.3898 39.43 86.3898 39.5C86.3656 39.7853 86.3255 40.0691 86.2698 40.35C86.2098 40.58 86.1098 40.58 85.7598 40.58C85.0698 40.58 84.5398 40.58 84.1598 40.58H83.3998H82.9998H82.4698C82.3798 40.58 82.3298 40.58 82.3298 40.51C82.3296 40.4904 82.3367 40.4714 82.3496 40.4567C82.3625 40.4419 82.3804 40.4324 82.3998 40.43C82.4931 40.4348 82.5865 40.4348 82.6798 40.43C82.8598 40.43 82.8798 40.22 82.9198 39.96C82.9525 39.3204 82.9525 38.6796 82.9198 38.04L82.8098 36.24Z"
                                      fill="white"/>
                                <path d="M88.59 39.17C88.59 39.9 88.69 40.12 88.94 40.17C89.093 40.1852 89.2471 40.1852 89.4 40.17C89.4195 40.1725 89.4373 40.182 89.4502 40.1967C89.4631 40.2115 89.4702 40.2305 89.47 40.25C89.47 40.25 89.41 40.32 89.31 40.32C88.78 40.32 88.42 40.32 88.31 40.32C88.2 40.32 87.84 40.32 87.42 40.32C87.32 40.32 87.27 40.32 87.27 40.25C87.27 40.2288 87.2785 40.2085 87.2935 40.1935C87.3085 40.1785 87.3288 40.17 87.35 40.17C87.4728 40.1858 87.5972 40.1858 87.72 40.17C87.95 40.11 87.98 39.87 87.98 39.07V34C87.98 33.64 87.98 33.55 88.11 33.55C88.24 33.55 88.37 33.73 88.46 33.82C88.55 33.91 89.94 35.38 91.36 36.82C92.27 37.76 93.25 38.8201 93.53 39.1101L93.44 34.67C93.44 34.09 93.37 33.89 93.09 33.84C92.9402 33.8285 92.7898 33.8285 92.64 33.84C92.58 33.84 92.57 33.84 92.57 33.76C92.57 33.68 92.64 33.69 92.75 33.69H93.75H94.53C94.62 33.69 94.7 33.69 94.7 33.76C94.6952 33.7848 94.6811 33.8068 94.6607 33.8216C94.6403 33.8365 94.6151 33.843 94.59 33.84H94.37C94.07 33.9 94.05 34.0801 94.05 34.6101V39.8101C94.05 40.3901 94.05 40.44 93.98 40.44C93.91 40.44 93.79 40.3701 93.28 39.9001C93.18 39.8201 91.86 38.51 90.89 37.5C89.92 36.49 88.79 35.3001 88.51 34.9901L88.59 39.17Z"
                                      fill="white"/>
                                <path d="M96.65 39.5499C96.2803 39.2217 95.9881 38.8156 95.7944 38.3608C95.6007 37.906 95.5104 37.4138 95.53 36.9199C95.5345 36.0136 95.8934 35.145 96.53 34.4999C96.9033 34.1534 97.343 33.8861 97.8226 33.7142C98.3021 33.5424 98.8115 33.4695 99.32 33.4999C99.7684 33.5013 100.216 33.5347 100.66 33.5999C100.965 33.6729 101.277 33.7197 101.59 33.7399C101.69 33.7399 101.71 33.7399 101.71 33.8299C101.71 33.9199 101.71 34.0099 101.71 34.3299C101.71 34.6499 101.71 35.1199 101.71 35.2399C101.71 35.3599 101.65 35.4299 101.6 35.4299C101.55 35.4299 101.53 35.3699 101.53 35.2399C101.532 35.0724 101.498 34.9064 101.431 34.7529C101.364 34.5994 101.264 34.4621 101.14 34.3499C100.607 33.9994 99.9768 33.8278 99.34 33.8599C98.5954 33.7879 97.8523 34.0105 97.27 34.4799C96.974 34.7825 96.7474 35.1458 96.6058 35.5447C96.4642 35.9436 96.4111 36.3684 96.45 36.7899C96.4512 37.2201 96.5383 37.6456 96.7062 38.0416C96.8741 38.4377 97.1194 38.7962 97.4277 39.0961C97.736 39.3961 98.1011 39.6314 98.5016 39.7883C98.9021 39.9452 99.33 40.0206 99.76 40.0099C100.027 40.0494 100.299 40.0324 100.56 39.9601C100.82 39.8877 101.062 39.7616 101.27 39.5899C101.449 39.3778 101.569 39.1227 101.62 38.8499C101.62 38.7599 101.62 38.7199 101.72 38.7199C101.82 38.7199 101.8 38.7899 101.8 38.8499C101.752 39.2344 101.679 39.6153 101.58 39.9899C101.572 40.0512 101.546 40.1088 101.505 40.1551C101.464 40.2015 101.41 40.2345 101.35 40.2499C100.81 40.3996 100.25 40.467 99.69 40.4499C98.5995 40.543 97.514 40.2216 96.65 39.5499Z"
                                      fill="white"/>
                                <path d="M103.67 36.24C103.67 34.86 103.67 34.61 103.67 34.33C103.67 34.05 103.59 33.88 103.29 33.84H102.98C102.98 33.84 102.9 33.84 102.9 33.77C102.9 33.7 102.95 33.69 103.05 33.69H104.12C104.18 33.69 106.12 33.69 106.31 33.69C106.5 33.69 106.65 33.69 106.72 33.69C106.763 33.6857 106.807 33.6857 106.85 33.69C106.85 33.69 106.85 33.69 106.85 33.77C106.85 33.85 106.8 33.94 106.78 34.19C106.78 34.27 106.78 34.67 106.72 34.78C106.66 34.89 106.72 34.87 106.64 34.87C106.56 34.87 106.57 34.87 106.57 34.75C106.586 34.6473 106.586 34.5427 106.57 34.44C106.5 34.3 106.41 34.23 105.91 34.17C105.75 34.17 104.69 34.17 104.58 34.17C104.47 34.17 104.58 34.17 104.58 34.26V36.67C104.58 36.74 104.58 36.77 104.58 36.77C104.58 36.77 105.91 36.77 106.12 36.77C106.28 36.7726 106.436 36.7273 106.57 36.64C106.63 36.58 106.67 36.53 106.7 36.53C106.73 36.53 106.7 36.53 106.7 36.6C106.7 36.67 106.7 36.8 106.63 37.09C106.56 37.38 106.63 37.6 106.63 37.66C106.63 37.72 106.63 37.83 106.55 37.83C106.47 37.83 106.48 37.83 106.48 37.75C106.497 37.6508 106.497 37.5493 106.48 37.45C106.48 37.33 106.37 37.22 106.01 37.18C105.65 37.14 104.78 37.18 104.62 37.18C104.612 37.1781 104.603 37.1783 104.595 37.1807C104.587 37.183 104.579 37.1874 104.573 37.1934C104.567 37.1994 104.563 37.2068 104.561 37.215C104.558 37.2231 104.558 37.2318 104.56 37.24V37.98C104.56 38.29 104.56 39.32 104.56 39.5C104.56 40.09 104.75 40.21 105.66 40.21C105.967 40.2263 106.274 40.1925 106.57 40.11C106.693 40.062 106.799 39.9782 106.874 39.8695C106.948 39.7607 106.989 39.632 106.99 39.5C106.99 39.39 106.99 39.36 107.09 39.36C107.19 39.36 107.15 39.43 107.15 39.5C107.127 39.7861 107.083 40.0701 107.02 40.35C106.96 40.58 106.87 40.58 106.51 40.58C105.82 40.58 105.29 40.58 104.92 40.58H104.16H103.76H103.23C103.13 40.58 103.08 40.58 103.08 40.51C103.08 40.4904 103.087 40.4715 103.1 40.4567C103.113 40.442 103.13 40.4325 103.15 40.43C103.247 40.4349 103.343 40.4349 103.44 40.43C103.61 40.43 103.63 40.22 103.67 39.96C103.729 39.3219 103.749 38.6807 103.73 38.04L103.67 36.24Z"
                                      fill="white"/>
                                <path d="M108.35 40.26C108.22 40.19 108.21 40.16 108.21 39.92C108.21 39.48 108.26 39.13 108.27 38.98C108.28 38.83 108.27 38.84 108.34 38.84C108.41 38.84 108.42 38.84 108.42 38.94C108.413 39.1248 108.449 39.3088 108.525 39.4772C108.601 39.6457 108.716 39.794 108.86 39.9105C109.003 40.027 109.172 40.1083 109.353 40.1482C109.533 40.188 109.721 40.1852 109.9 40.14C110.81 40.14 111.28 39.63 111.28 38.96C111.28 38.29 110.94 38.02 110.12 37.42L109.71 37.11C108.71 36.37 108.39 35.82 108.39 35.21C108.39 34.16 109.22 33.54 110.39 33.54C110.706 33.5402 111.021 33.5737 111.33 33.64C111.439 33.6545 111.55 33.6545 111.66 33.64C111.73 33.64 111.75 33.64 111.75 33.71C111.75 33.78 111.75 34.04 111.75 34.65C111.75 34.78 111.75 34.84 111.68 34.84C111.61 34.84 111.6 34.84 111.59 34.73C111.568 34.5779 111.524 34.4297 111.46 34.29C111.4 34.19 111.09 33.85 110.27 33.85C109.6 33.85 109.05 34.19 109.05 34.85C109.05 35.51 109.33 35.74 110.24 36.35L110.5 36.53C111.61 37.29 112 37.91 112 38.67C112.004 38.9754 111.926 39.2763 111.775 39.5416C111.624 39.807 111.404 40.0274 111.14 40.18C110.692 40.418 110.187 40.5287 109.68 40.5C109.225 40.5067 108.774 40.4252 108.35 40.26V40.26Z"
                                      fill="white"/>
                                <path d="M37.2099 46.12C37.2099 45.46 37.2099 45.34 37.2099 45.2C37.2099 45.06 37.2099 44.98 37.0299 44.96H36.8799C36.8799 44.96 36.8799 44.96 36.9499 44.96H37.9499C38.6799 44.96 38.8699 45.38 38.8699 45.61C38.8551 45.7592 38.807 45.9031 38.7291 46.0312C38.6513 46.1593 38.5456 46.2682 38.4199 46.35C38.6277 46.396 38.8154 46.5071 38.9557 46.6672C39.096 46.8273 39.1815 47.0279 39.1999 47.24C39.1926 47.376 39.1575 47.509 39.097 47.631C39.0364 47.753 38.9515 47.8613 38.8476 47.9493C38.7436 48.0373 38.6228 48.1032 38.4925 48.1428C38.3622 48.1825 38.2252 48.1951 38.0899 48.18H36.9999H36.9299H37.0699C37.1499 48.18 37.1599 48.07 37.1799 47.95C37.1993 47.6436 37.1993 47.3363 37.1799 47.03L37.2099 46.12ZM37.5899 46.21C37.6795 46.2212 37.7702 46.2212 37.8599 46.21C38.1099 46.21 38.1999 46.21 38.2899 46.1C38.3468 46.0401 38.3911 45.9694 38.4203 45.8921C38.4495 45.8148 38.463 45.7325 38.4599 45.65C38.4682 45.5632 38.4584 45.4756 38.4311 45.3928C38.4038 45.31 38.3596 45.2337 38.3014 45.1688C38.2431 45.104 38.172 45.0519 38.0925 45.016C38.0131 44.98 37.9271 44.9609 37.8399 44.96H37.6199C37.6199 44.96 37.6199 44.96 37.6199 45.01L37.5899 46.21ZM37.5899 46.68V47.58C37.5899 47.79 37.5899 47.84 37.7399 47.9C37.861 47.9462 37.9904 47.9667 38.1199 47.96C38.208 47.9714 38.2975 47.9625 38.3816 47.9339C38.4657 47.9053 38.542 47.8577 38.6049 47.7949C38.6677 47.7321 38.7152 47.6557 38.7438 47.5717C38.7724 47.4876 38.7813 47.398 38.7699 47.31C38.7645 47.1564 38.7238 47.0062 38.651 46.8709C38.5781 46.7356 38.4751 46.619 38.3499 46.53C38.2257 46.4657 38.0894 46.4283 37.9499 46.42H37.6099L37.5899 46.68Z"
                                      fill="white"/>
                                <path d="M40.61 46.9999C40.621 46.8477 40.5899 46.6955 40.52 46.5599C40.52 46.4999 39.89 45.5599 39.74 45.3299C39.6644 45.2087 39.5659 45.1034 39.45 45.0199C39.392 44.9859 39.327 44.9654 39.26 44.9599C39.26 44.9599 39.26 44.9599 39.31 44.9599H40.13H40.19C40.19 44.9599 40.19 44.9599 40.12 44.9599C40.05 44.9599 40 44.9999 40 44.9999C40.0065 45.0605 40.027 45.1187 40.06 45.1699L40.86 46.4899C40.95 46.3099 41.5 45.3999 41.58 45.2599C41.628 45.1962 41.6559 45.1196 41.66 45.0399C41.6634 45.0162 41.6582 44.9921 41.6454 44.9719C41.6326 44.9517 41.6129 44.9368 41.59 44.9299C41.59 44.9299 41.52 44.9299 41.52 44.8799C41.52 44.8299 41.52 44.8799 41.59 44.8799H42.33C42.3344 44.8875 42.3367 44.8961 42.3367 44.9049C42.3367 44.9137 42.3344 44.9223 42.33 44.9299C42.2609 44.9137 42.1891 44.9137 42.12 44.9299C42.0364 44.9883 41.9622 45.0591 41.9 45.1399C41.76 45.3099 41.14 46.3099 41.05 46.4899C40.9793 46.6502 40.9618 46.8289 41 46.9999V47.3599C40.9923 47.5031 40.9923 47.6467 41 47.7899C41 47.9099 41 47.9899 41.17 48.0099H41.37C41.37 48.0099 41.37 48.0099 41.3 48.0099H40.3C40.25 48.0099 40.23 48.0099 40.23 48.0099H40.36C40.45 48.0099 40.48 47.9099 40.49 47.7899C40.5 47.6699 40.49 47.4299 40.49 47.3599L40.61 46.9999Z"
                                      fill="white"/>
                                <path d="M44.7299 45.7699C44.7299 44.9899 44.7299 44.8499 44.7299 44.6899C44.7299 44.5299 44.7299 44.4399 44.5199 44.4099H44.3499C44.3499 44.4099 44.3499 44.4099 44.4299 44.4099H44.9899H45.5799C45.8988 44.3857 46.2172 44.4626 46.4899 44.6299C46.5961 44.7091 46.6829 44.8115 46.7436 44.9294C46.8042 45.0472 46.8372 45.1774 46.8399 45.3099C46.8277 45.5358 46.767 45.7564 46.6617 45.9566C46.5564 46.1568 46.4091 46.3319 46.2299 46.4699C46.6399 46.9899 46.9799 47.4699 47.2299 47.7499C47.3869 47.935 47.6018 48.0619 47.8399 48.1099H47.9999C47.9999 48.1099 47.9999 48.1099 47.8799 48.1099H47.5999C47.415 48.1307 47.228 48.0995 47.0599 48.0199C46.7917 47.8179 46.5643 47.5668 46.3899 47.2799C46.1799 47.0099 45.9399 46.6699 45.8399 46.5399C45.8305 46.5354 45.8202 46.5331 45.8099 46.5331C45.7995 46.5331 45.7892 46.5354 45.7799 46.5399H45.1699V46.6599C45.1505 47.023 45.1505 47.3868 45.1699 47.7499C45.1699 47.8899 45.1699 47.9999 45.3599 48.0199H45.5799C45.5799 48.0199 45.5799 48.0199 45.4999 48.0199H44.4499C44.3999 48.0199 44.3699 48.0199 44.3699 48.0199H44.5199C44.6199 48.0199 44.6499 47.8899 44.6699 47.7499C44.6899 47.6099 44.6699 47.1399 44.6699 46.6599L44.7299 45.7699ZM45.1299 46.2099C45.1254 46.2193 45.1231 46.2295 45.1231 46.2399C45.1231 46.2503 45.1254 46.2605 45.1299 46.2699C45.2967 46.3285 45.4731 46.3556 45.6499 46.3499C45.7806 46.3558 45.9099 46.3208 46.0199 46.2499C46.1295 46.1558 46.215 46.0368 46.2689 45.9028C46.3229 45.7687 46.3438 45.6237 46.3299 45.4799C46.3299 44.8599 45.9999 44.4799 45.4599 44.4799C45.3501 44.4705 45.2397 44.4705 45.1299 44.4799C45.1254 44.4893 45.1231 44.4995 45.1231 44.5099C45.1231 44.5203 45.1254 44.5305 45.1299 44.5399V46.2099Z"
                                      fill="white"/>
                                <path d="M49.63 44.8298C49.851 44.8089 50.074 44.8345 50.2846 44.9049C50.4952 44.9754 50.6886 45.0892 50.8525 45.239C51.0165 45.3888 51.1472 45.5712 51.2363 45.7746C51.3254 45.978 51.3709 46.1978 51.37 46.4198C51.3756 46.6516 51.3337 46.882 51.247 47.097C51.1603 47.3119 51.0305 47.5069 50.8656 47.6699C50.7008 47.8328 50.5044 47.9604 50.2884 48.0446C50.0725 48.1289 49.8416 48.1681 49.61 48.1598C49.385 48.1724 49.16 48.1381 48.949 48.0593C48.7379 47.9805 48.5456 47.8587 48.3839 47.7018C48.2223 47.5449 48.095 47.3562 48.01 47.1476C47.9249 46.939 47.8841 46.715 47.89 46.4898C47.8925 46.2658 47.9398 46.0445 48.0292 45.839C48.1185 45.6335 48.248 45.4479 48.4102 45.2932C48.5723 45.1385 48.7638 45.0179 48.9732 44.9383C49.1827 44.8587 49.406 44.8218 49.63 44.8298ZM49.73 47.9798C50.13 47.9798 50.92 47.7698 50.92 46.5398C50.9437 46.3511 50.9279 46.1596 50.8735 45.9773C50.8191 45.7951 50.7274 45.6261 50.6042 45.4813C50.481 45.3364 50.3289 45.2188 50.1577 45.1359C49.9866 45.053 49.8 45.0067 49.61 44.9998C49.4312 44.9909 49.2527 45.0215 49.087 45.0893C48.9214 45.1571 48.7727 45.2605 48.6515 45.3922C48.5303 45.5239 48.4396 45.6806 48.3857 45.8513C48.3319 46.022 48.3163 46.2024 48.34 46.3798C48.3148 46.5793 48.3316 46.7819 48.3894 46.9745C48.4473 47.1671 48.5448 47.3454 48.6757 47.4981C48.8067 47.6507 48.9681 47.7742 49.1497 47.8606C49.3313 47.947 49.5289 47.9944 49.73 47.9998V47.9798Z"
                                      fill="white"/>
                                <path d="M52.7499 47C52.7639 46.8464 52.7289 46.6924 52.6499 46.56C52.6499 46.5 52.0199 45.56 51.8699 45.33C51.7965 45.2071 51.6976 45.1013 51.5799 45.02C51.5221 45.0003 51.4606 44.9935 51.3999 45C51.3999 45 51.3999 45 51.4599 45H52.2699C52.3199 45 52.3299 45 52.3299 45C52.3299 45 52.3299 45 52.2599 45C52.1899 45 52.2099 45 52.2099 45.07C52.2163 45.1305 52.2369 45.1888 52.2699 45.24L53.0699 46.56C53.1599 46.38 53.7099 45.47 53.7899 45.33C53.8316 45.2638 53.8556 45.188 53.8599 45.11C53.8633 45.0863 53.8581 45.0622 53.8453 45.042C53.8325 45.0218 53.8128 45.0069 53.7899 45C53.7899 45 53.7299 45 53.7299 44.95C53.7299 44.9 53.7299 44.95 53.7999 44.95H54.5299H54.5899C54.5875 44.9641 54.5802 44.9769 54.5691 44.9861C54.5581 44.9952 54.5442 45.0002 54.5299 45C54.4642 44.9839 54.3956 44.9839 54.3299 45C54.2423 45.0532 54.1672 45.1249 54.1099 45.21C53.7998 45.6446 53.5128 46.0952 53.2499 46.56C53.1996 46.6974 53.1825 46.8447 53.1999 46.99V47.35C53.1999 47.42 53.1999 47.6 53.1999 47.78C53.1999 47.96 53.1999 47.98 53.3699 48H53.5699C53.5699 48 53.5699 48 53.4999 48H52.4999H52.4299H52.5599C52.6499 48 52.6799 47.9 52.6899 47.78C52.6999 47.66 52.6899 47.42 52.6899 47.35L52.7499 47Z"
                                      fill="white"/>
                                <path d="M55.72 44.9998C55.77 44.8598 55.79 44.8398 55.82 44.8398C55.85 44.8398 55.88 44.8998 55.93 44.9898C55.98 45.0798 56.71 46.9298 56.93 47.5698C57.09 47.9498 57.21 48.0098 57.31 48.0398C57.3664 48.0485 57.4237 48.0485 57.48 48.0398H57.54C57.54 48.0398 57.49 48.0398 57.44 48.0398H56.74C56.66 48.0398 56.59 48.0398 56.59 48.0398C56.6041 48.025 56.6119 48.0053 56.6119 47.9848C56.6119 47.9644 56.6041 47.9447 56.59 47.9298L56.19 46.9298H55.19L54.94 47.6098C54.9038 47.7024 54.8835 47.8005 54.88 47.8998C54.88 47.9798 54.95 48.0098 55.03 48.0098C55.03 48.0098 55.03 48.0098 54.97 48.0098H54.13C54.07 48.0098 54.04 48.0098 54.04 48.0098H54.17C54.37 48.0098 54.46 47.8398 54.54 47.6198L55.72 44.9998ZM56.21 46.7698L55.78 45.6098C55.78 45.5398 55.78 45.5398 55.7 45.6098L55.29 46.7698H56.21Z"
                                      fill="white"/>
                                <path d="M58.69 46.8798C58.69 47.4998 58.69 47.7598 58.78 47.8298C58.87 47.8998 59.02 47.9298 59.36 47.9298C59.7 47.9298 59.79 47.9298 59.89 47.7998C59.9484 47.7317 59.9865 47.6485 60 47.5598V47.5098C60 47.5098 60 47.5098 60 47.5698C60.0093 47.713 60.0093 47.8566 60 47.9998C60 48.0998 60 48.1098 59.72 48.1098H58.05H57.98H58.12C58.2 48.1098 58.21 48.0098 58.23 47.8898C58.2494 47.5835 58.2494 47.2762 58.23 46.9698V46.2198C58.23 45.5598 58.23 45.4398 58.23 45.2998C58.23 45.1598 58.23 45.0898 58.05 45.0698H58C58 45.0698 58 45.0698 58.07 45.0698H59.07H59.14H59C58.87 45.0698 58.84 45.1598 58.83 45.3098V46.9898L58.69 46.8798Z"
                                      fill="white"/>
                                <path d="M62.6998 45.7699C62.6998 44.9899 62.6998 44.8499 62.6998 44.6899C62.6998 44.5299 62.6998 44.4399 62.4898 44.4099H62.3198C62.3198 44.4099 62.3198 44.4099 62.3998 44.4099H62.9598H63.5498C63.8688 44.3849 64.1875 44.462 64.4598 44.6299C64.5661 44.7091 64.6529 44.8115 64.7136 44.9293C64.7742 45.0472 64.8071 45.1773 64.8098 45.3099C64.7977 45.5357 64.7369 45.7563 64.6317 45.9566C64.5264 46.1568 64.3791 46.3319 64.1998 46.4699C64.6198 46.9899 64.9498 47.4699 65.1998 47.7499C65.3569 47.935 65.5718 48.0619 65.8098 48.1099H65.9998C65.9998 48.1099 65.9998 48.1099 65.8798 48.1099H65.5298C65.3464 48.1226 65.163 48.0846 64.9998 47.9999C64.7341 47.7952 64.5072 47.5445 64.3298 47.2599C64.1198 46.9899 63.8898 46.6499 63.7898 46.5199C63.7787 46.5152 63.7668 46.5128 63.7548 46.5128C63.7428 46.5128 63.7309 46.5152 63.7198 46.5199H63.1098V46.6399C63.0905 47.0029 63.0905 47.3668 63.1098 47.7299C63.1098 47.8699 63.1098 47.9799 63.2998 47.9999H63.5298C63.5298 47.9999 63.5298 47.9999 63.4498 47.9999H62.4198C62.3698 47.9999 62.3398 47.9999 62.3398 47.9999H62.4898C62.5898 47.9999 62.6198 47.8699 62.6398 47.7299C62.6598 47.5899 62.6398 47.1199 62.6398 46.6399L62.6998 45.7699ZM63.0998 46.2099C63.0954 46.2192 63.0931 46.2295 63.0931 46.2399C63.0931 46.2502 63.0954 46.2605 63.0998 46.2699C63.2667 46.3285 63.443 46.3556 63.6198 46.3499C63.7536 46.3547 63.8858 46.3199 63.9998 46.2499C64.1058 46.1533 64.188 46.0336 64.24 45.9C64.2921 45.7664 64.3125 45.6227 64.2998 45.4799C64.2998 44.8599 63.9698 44.4799 63.4398 44.4799C63.3267 44.4702 63.213 44.4702 63.0998 44.4799C63.0954 44.4892 63.0931 44.4995 63.0931 44.5099C63.0931 44.5202 63.0954 44.5305 63.0998 44.5399V46.2099Z"
                                      fill="white"/>
                                <path d="M68.1898 45.29V45.44C68.1984 45.3903 68.1984 45.3396 68.1898 45.29Z"
                                      fill="white"/>
                                <path d="M68.9298 48C68.8698 48 68.8598 48 68.8598 47.84C68.8497 47.6902 68.8497 47.5399 68.8598 47.39C68.8598 47.39 68.8598 47.32 68.8598 47.32C68.8512 47.373 68.8512 47.4271 68.8598 47.48C68.909 47.6187 69.0045 47.7362 69.1302 47.8127C69.2559 47.8891 69.4041 47.92 69.5498 47.9C69.9898 47.9 70.2098 47.65 70.2098 47.33C70.2098 47.01 70.0498 46.88 69.6598 46.59L69.4598 46.44C68.9798 46.09 68.8298 45.83 68.8298 45.53C68.8298 45.03 69.2198 44.73 69.8298 44.73C69.9829 44.7163 70.1368 44.7163 70.2898 44.73H70.4398C70.4398 44.73 70.4398 44.89 70.4398 45.18C70.4398 45.25 70.4398 45.28 70.4398 45.28C70.4398 45.28 70.4398 45.28 70.4398 45.22C70.4292 45.1477 70.409 45.0771 70.3798 45.01C70.3798 44.96 70.1998 44.8 69.8098 44.8C69.4198 44.8 69.2198 44.96 69.2198 45.26C69.2198 45.56 69.3598 45.69 69.7898 45.98L69.9198 46.07C70.4498 46.43 70.6398 46.73 70.6398 47.07C70.6403 47.2168 70.6028 47.3611 70.5309 47.489C70.4591 47.6169 70.3554 47.7241 70.2298 47.8C70.0141 47.9117 69.7724 47.9635 69.5298 47.95C69.3352 48.0065 69.1312 48.0235 68.9298 48V48Z"
                                      fill="white"/>
                                <path d="M72.9999 44.8298C73.2209 44.8089 73.4439 44.8345 73.6545 44.9049C73.865 44.9754 74.0585 45.0892 74.2224 45.239C74.3864 45.3888 74.5171 45.5712 74.6062 45.7746C74.6953 45.978 74.7408 46.1978 74.7399 46.4198C74.7453 46.6498 74.7041 46.8786 74.6186 47.0921C74.5331 47.3057 74.4051 47.4997 74.2424 47.6624C74.0797 47.8251 73.8857 47.9531 73.6721 48.0386C73.4586 48.1241 73.2298 48.1653 72.9999 48.1598C72.7749 48.1724 72.5499 48.1381 72.3389 48.0593C72.1278 47.9805 71.9355 47.8587 71.7738 47.7018C71.6122 47.5449 71.4849 47.3562 71.3999 47.1476C71.3148 46.939 71.274 46.715 71.2799 46.4898C71.2824 46.2675 71.3291 46.0479 71.4172 45.8437C71.5053 45.6396 71.6331 45.4549 71.7931 45.3005C71.9531 45.1461 72.1421 45.025 72.3493 44.9442C72.5564 44.8634 72.7776 44.8245 72.9999 44.8298V44.8298ZM73.0999 47.9798C73.4999 47.9798 74.2899 47.7698 74.2899 46.5398C74.3135 46.3528 74.2983 46.1628 74.2451 45.9819C74.1919 45.8009 74.102 45.6329 73.9809 45.4884C73.8598 45.3438 73.7102 45.2258 73.5413 45.1417C73.3725 45.0577 73.1882 45.0094 72.9999 44.9998C72.8211 44.9909 72.6426 45.0215 72.4769 45.0893C72.3113 45.1571 72.1626 45.2605 72.0414 45.3922C71.9202 45.5239 71.8295 45.6806 71.7756 45.8513C71.7218 46.022 71.7062 46.2024 71.7299 46.3798C71.7048 46.5769 71.7208 46.7771 71.7768 46.9677C71.8329 47.1583 71.9277 47.3352 72.0555 47.4874C72.1832 47.6395 72.341 47.7636 72.5191 47.8518C72.6971 47.94 72.8914 47.9904 73.0898 47.9998L73.0999 47.9798Z"
                                      fill="white"/>
                                <path d="M75.61 46.1199C75.61 45.4599 75.61 45.3399 75.61 45.1999C75.61 45.0599 75.61 44.9899 75.43 44.9699H75.28C75.28 44.9699 75.28 44.9699 75.35 44.9699H76.42C76.7051 44.9471 76.9906 45.0098 77.24 45.1499C77.3318 45.2172 77.4073 45.3042 77.461 45.4046C77.5146 45.505 77.545 45.6162 77.55 45.7299C77.5462 45.9276 77.4952 46.1215 77.4013 46.2954C77.3073 46.4694 77.1732 46.6183 77.01 46.7299C77.37 47.1799 77.67 47.5699 77.93 47.8299C78.053 47.9844 78.2265 48.0906 78.42 48.1299H78.57C78.57 48.1299 78.57 48.1299 78.47 48.1299H78.19C78.029 48.146 77.8666 48.1183 77.72 48.0499C77.4814 47.8804 77.2777 47.6665 77.12 47.4199L76.65 46.7999C76.65 46.7999 76.65 46.7999 76.59 46.7999H76V46.8999C76 47.3099 76 47.6399 76 47.8199C76 47.9999 76 48.0199 76.17 48.0399H76.37C76.37 48.0399 76.37 48.0399 76.3 48.0399H75.3C75.25 48.0399 75.23 48.0399 75.23 48.0399H75.37C75.45 48.0399 75.46 47.9399 75.48 47.8199C75.4994 47.5135 75.4994 47.2063 75.48 46.8999L75.61 46.1199ZM75.99 46.4799C75.9856 46.4875 75.9833 46.4961 75.9833 46.5049C75.9833 46.5137 75.9856 46.5223 75.99 46.5299C76.1442 46.5829 76.307 46.6067 76.47 46.5999C76.5856 46.608 76.7009 46.5801 76.8 46.5199C76.8947 46.4419 76.9689 46.3419 77.016 46.2285C77.063 46.1152 77.0816 45.9921 77.07 45.8699C77.0848 45.7634 77.076 45.655 77.0441 45.5523C77.0122 45.4496 76.958 45.3553 76.8854 45.276C76.8128 45.1967 76.7235 45.1344 76.6241 45.0936C76.5246 45.0528 76.4174 45.0345 76.31 45.0399H75.99V46.4799Z"
                                      fill="white"/>
                                <path d="M79.8499 46.8701C79.8499 47.2801 79.8499 47.6101 79.8499 47.7901C79.8499 47.9701 79.8499 47.9901 80.0199 48.0101H80.2199C80.2199 48.0101 80.2199 48.0101 80.1499 48.0101H79.1499H79.0799H79.2099C79.2999 48.0101 79.3299 47.9001 79.3399 47.7801C79.3499 47.6601 79.3399 47.2701 79.3399 46.8601V45.0801H78.7099C78.4299 45.0801 78.3299 45.0801 78.2599 45.2201C78.2332 45.2614 78.2098 45.3049 78.1899 45.3501C78.1899 45.3501 78.2799 44.9201 78.2799 44.8901C78.2799 44.8601 78.2799 44.8101 78.3299 44.8101C78.3799 44.8101 78.3999 44.8101 78.5199 44.8601H78.8699H80.5299H80.8399H80.9699C80.9699 44.8601 80.9699 45.2901 80.9699 45.3401C80.9699 45.3901 80.9699 45.4001 80.9699 45.4001C80.9699 45.4001 80.9699 45.4001 80.9699 45.3201C80.9699 45.1901 80.8599 45.0901 80.4399 45.0801H79.8899L79.8499 46.8701Z"
                                      fill="white"/>
                                <path d="M81.5299 47.9998C81.4699 47.9998 81.4599 47.9998 81.4599 47.8398C81.4498 47.69 81.4498 47.5396 81.4599 47.3898C81.4599 47.3898 81.4599 47.3198 81.4599 47.3198C81.4513 47.3728 81.4513 47.4268 81.4599 47.4798C81.5091 47.6185 81.6046 47.7359 81.7303 47.8124C81.856 47.8889 82.0042 47.9198 82.1499 47.8998C82.5899 47.8998 82.8099 47.6498 82.8099 47.3298C82.8099 47.0098 82.6399 46.8798 82.2599 46.5898L82.0599 46.4398C81.5799 46.0898 81.4299 45.8298 81.4299 45.5298C81.4299 45.0298 81.8199 44.7298 82.4299 44.7298C82.583 44.7167 82.7369 44.7167 82.8899 44.7298H83.0399C83.0399 44.7298 83.0399 44.8898 83.0399 45.1798C83.0399 45.2498 83.0399 45.2798 83.0399 45.2798C83.0399 45.2798 83.0399 45.2798 83.0399 45.2198C83.0269 45.2126 83.0135 45.206 82.9999 45.1998C82.9999 45.1498 82.8299 44.9898 82.4399 44.9898C82.0499 44.9898 81.8499 45.1498 81.8499 45.4498C81.8499 45.7498 81.9899 45.8798 82.4199 46.1698L82.5499 46.2598C83.0799 46.6198 83.2599 46.9198 83.2599 47.2598C83.2624 47.4069 83.2258 47.552 83.1537 47.6803C83.0817 47.8086 82.9768 47.9154 82.8499 47.9898C82.6382 48.1025 82.3994 48.1544 82.1599 48.1398C81.9423 48.1388 81.7275 48.091 81.5299 47.9998V47.9998Z"
                                      fill="white"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="divider-blue mb-2"></div>
        <p class="m-0 text-small text-white">Copyright © 2020 | All Rigths Reserved. Caribbean Island Travel LLC - Fla.
            Seller Of Travel Ref. No. ST34359</p>
    </div>
</footer>


{{-- Modal de resort --}}
@foreach(__('time-share.resorts_data') as $resort)
    <div id="modal-{{$resort['target']}}" class="modal modal-resort-content d-none">
        <div class="modal-wrapper">
            <div class="modal-content">
                <div class="modal-close">
                    <button class="btn">
                        <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M21.4363 9.625L16.5 14.5612L11.5637 9.625L9.625 11.5637L14.5612 16.5L9.625 21.4363L11.5637 23.375L16.5 18.4387L21.4363 23.375L23.375 21.4363L18.4387 16.5L23.375 11.5637L21.4363 9.625Z"
                                  fill="#2E3A59"/>
                        </svg>
                    </button>
                </div>

                <div class="modal-resort">
                    <div class="modal-header">
                        <div class="glide glide-gallery-resort">
                            <div class="glide__track" data-glide-el="track">
                                <div class="glide__slides">
                                    @foreach($resort['gallery'] as $gallery)
                                        <div class="glide__slide">
                                            <div class="ratio ratio--183-77">
                                                <img  class="ratio__img" src="{{$gallery}}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="glide__arrows" data-glide-el="controls">
                                <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
                                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <rect width="39.8438" height="39.8438" fill="white"/>
                                        <path d="M17.1527 11.6211L14.9414 13.7668L22.1242 20.752L14.9414 27.7371L17.1527 29.8828L26.5625 20.752L17.1527 11.6211Z"
                                              fill="#00467F"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="modal-body">
                        <p class="m-0 text-subtitle text-primary mb-1">{{$resort['name']}}</p>
                        <div class="modal-address mb-3">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 21C10.7369 19.9227 9.56619 18.7416 8.5 17.4691C6.9 15.5581 5 12.712 5 10.0001C4.99858 7.1676 6.70425 4.61344 9.32107 3.52945C11.9379 2.44545 14.9501 3.04529 16.952 5.04905C18.2685 6.35966 19.0059 8.14244 19 10.0001C19 12.712 17.1 15.5581 15.5 17.4691C14.4338 18.7416 13.2631 19.9227 12 21ZM12 5.00005C9.23995 5.00336 7.00331 7.24 7 10.0001C7 11.166 7.527 13.1851 10.035 16.1861C10.6531 16.9241 11.309 17.6297 12 18.3001C12.691 17.6305 13.3472 16.9259 13.966 16.1891C16.473 13.1841 17 11.1651 17 10.0001C16.9967 7.24 14.7601 5.00336 12 5.00005ZM12 13.0001C10.3431 13.0001 9 11.6569 9 10.0001C9 8.3432 10.3431 7.00005 12 7.00005C13.6569 7.00005 15 8.3432 15 10.0001C15 10.7957 14.6839 11.5588 14.1213 12.1214C13.5587 12.684 12.7957 13.0001 12 13.0001Z"
                                      fill="#237FA4"/>
                            </svg>
                            <p class="m-0 text-small text-secondary">
                                {{$resort['address']}}
                            </p>
                        </div>
                        <p class="text-body text-secondary m-0 mb-2">
                            {{$resort['text']}}
                        </p>
                        <ul class="modal-list text-body text-secondary muted-7 m-0 mb-4">
                            @foreach($resort['amenities'] as $amenity)
                                <li>{{$amenity}}</li>
                            @endforeach
                        </ul>

                        <div class="modal-footer">
                            <a target="_blank" href="{{$resort['link']}}"
                               class="btn btn-link hover-link-blue">{{__('time-share.Read more about the hotel')}}</a>
                            <button class="btn btn-outline-orange hover-btn-outline-orange scroll"
                                    data-target="#link-cert">{{__('time-share.Tell me more')}}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach

<div class="fixed-chat">
    <div class="a b-b container">
        <a href="tel:1-888-387-4751" class="btn img">
            <img loading="lazy" src="https://bestrate.royalresorts.com/img/icons/live-chat-call.png" alt="Call">
        </a>

    </div>
    <div class="b b-b container ">
        <button class="btn img" data-toggle="modal" data-target="#modal-chat">
            <img loading="lazy" src="https://bestrate.royalresorts.com/img/icons/live-chat-whats.png" alt="Chat">
        </button>
    </div>
    <div class="container container-fixed">
        <div class="b-a text-bold">
            Need help?
        </div>
        <div class="img">
            <img loading="lazy" src="https://bestrate.royalresorts.com/img/icons/toggle-chats.png" alt="chat">
        </div>
    </div>
</div>


{{--Modal Reservations Policies --}}
<div id="modal-policies" class="modal modal-policies d-none ">
    <div class="modal-wrapper">
        <div class="modal-close">
            <button class="btn">
                <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.4363 9.625L16.5 14.5612L11.5637 9.625L9.625 11.5637L14.5612 16.5L9.625 21.4363L11.5637 23.375L16.5 18.4387L21.4363 23.375L23.375 21.4363L18.4387 16.5L23.375 11.5637L21.4363 9.625Z"
                          fill="#2E3A59"/>
                </svg>
            </button>
        </div>
        <div class="modal-content">

            <div class="modal-body">

                <p class="m-0 mb-2 text-bold">GENERAL TERMS & CONDITIONS</p>
                <p class="m-0 text-bold text-primary text-body">QUICK DISCOVER PARADISE CERTIFICATE PROMO FAQS</p>
                <p class="m-0 mb-2 text-bold text-primary text-body">ABOUT THE CERTIFICATE</p>


                <button class="btn btn-ico btn-blue-light mb-1 ps-0 svg-animate"
                        data-toggle="height-animate" data-target="#h-1">
                    What is this Special Deal about?
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 15.713L18.0102 9.70299L16.5972 8.28799L12.0002 12.888L7.40423 8.28799L5.99023 9.70199L12.0002 15.713Z"
                              fill="#237FA4"/>
                    </svg>
                </button>
                <div class="height-animate" id="h-1">
                    <p class="text-body m-0 mb-2">This is an exclusive deal available for a selected group of people who
                        have stayed in the past at any of our resorts. If you are reading this, it means that you are
                        eligible to access this special rate available only for a limited period of time. <b
                                class="text-blue-light">By booking
                            this deal, you also agree to attend a guided tour and sales presentation</b> at one of
                        our top rated
                        resorts, where you will get to know more about our exclusive Travel Club vacation products.
                        There is no purchase commitment. </p>
                </div>

                <button class="btn btn-ico btn-blue-light mb-1 ps-0 svg-animate"
                        data-toggle="height-animate" data-target="#h-2">
                    What does the “Discover your Paradise” certificate include?
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 15.713L18.0102 9.70299L16.5972 8.28799L12.0002 12.888L7.40423 8.28799L5.99023 9.70199L12.0002 15.713Z"
                              fill="#237FA4"/>
                    </svg>
                </button>
                <div id="h-2" class="height-animate">
                    <ul class="m-0 mb-2 text-body">
                        <li>A 4-night All-Inclusive stay at the resort of your choice for 2 adults and up to 2 children
                            aged 12 or under at the time of travel.
                        </li>
                        <li>All meals, drinks and snacks at the resort are included, some surcharges will apply for
                            premium food and beverages.
                        </li>
                        <li>24-hour room service.</li>
                        <li>One-way private transportation from the Airport to the Resort.</li>
                        <li>A Mandatory 120-minute guided tour and sales presentation.</li>
                        <li>The US$399 rate does not include taxes, 16% tax will be added to the final rate before
                            confirming the reservation.
                        </li>
                    </ul>
                </div>

                <button class="btn btn-ico btn-blue-light mb-1 ps-0 svg-animate"
                        data-toggle="height-animate" data-target="#h-3">
                    What does the "Discover Paradise Plus" certificate include?
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 15.713L18.0102 9.70299L16.5972 8.28799L12.0002 12.888L7.40423 8.28799L5.99023 9.70199L12.0002 15.713Z"
                              fill="#237FA4"/>
                    </svg>
                </button>
                <div id="h-3" class="height-animate">
                    <ul class="m-0 mb-4 text-body">
                        <li>A 5 to 7-night (maximum length of stay) All-Inclusive stay at the resort of your choice for
                            2 adults and up to 2 children aged 12 or under at the time of travel.
                        </li>
                        <li>All meals, drinks and snacks at the resort are included, some surcharges will apply for
                            premium food and beverages.
                        </li>
                        <li>24-hour room service.</li>
                        <li>One-way private transportation from the Airport to the Resort.</li>
                        <li>A Mandatory 120-minute guided tour and sales presentation.</li>
                        <li>This is a promotional rate with up to 67% OFF our rack rates.</li>
                        <li>The discount may vary depending on the resort you choose to stay at.</li>
                        <li>Final rate varies depending on the resort selected, number of nights and your travel
                            dates.
                        </li>
                    </ul>
                </div>

                <p class="m-0 pt-2 mb-2 text-bold text-primary text-body">
                    ABOUT PAYMENT, CANCELLATION & PENALTIES
                </p>

                <button class="btn btn-ico btn-blue-light mb-1 ps-0 svg-animate"
                        data-toggle="height-animate" data-target="#h-4">
                    When do I pay?
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 15.713L18.0102 9.70299L16.5972 8.28799L12.0002 12.888L7.40423 8.28799L5.99023 9.70199L12.0002 15.713Z"
                              fill="#237FA4"/>
                    </svg>
                </button>
                <div id="h-4" class="height-animate">
                    <p class="m-0 mb-2 text-body">
                        The total cost of the reservation will be charged at the moment of booking.
                    </p>
                </div>

                <button class="btn btn-ico btn-blue-light mb-1 ps-0 svg-animate"
                        data-toggle="height-animate" data-target="#h-5">
                    Can I cancel?
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 15.713L18.0102 9.70299L16.5972 8.28799L12.0002 12.888L7.40423 8.28799L5.99023 9.70199L12.0002 15.713Z"
                              fill="#237FA4"/>
                    </svg>
                </button>
                <div id="h-5" class="height-animate">
                    <p class="m-0 mb-2 text-body">
                        This special rate is non-refundable, therefore, any cancellation or modification request after
                        booking will not be allowed.
                    </p>
                </div>

                <button class="btn btn-ico btn-blue-light mb-1 ps-0 svg-animate"
                        data-toggle="height-animate" data-target="#h-6">
                    Is there any penalty associated with this offer?
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 15.713L18.0102 9.70299L16.5972 8.28799L12.0002 12.888L7.40423 8.28799L5.99023 9.70199L12.0002 15.713Z"
                              fill="#237FA4"/>
                    </svg>
                </button>
                <div id="h-6" class="height-animate">
                    <ul class="m-0 mb-4 text-body">
                        <li> If you cancel your reservation at any time, a penalty equivalent to the total cost of the
                            reservation will be applicable.
                        </li>
                        <li> Both husband and wife must attend the 120-minute guided tour and sales presentation and
                            stay for the duration of the meeting. If you do not attend the guided tour and sales
                            presentation, you will be charged for your stay at rack rates. This is non-negotiable.
                        </li>
                    </ul>
                </div>

                <p class="m-0 pt-2 mb-2 text-bold text-primary text-body">
                    ELIGIBILITY FOR BOOKING THIS CERTIFICATE
                </p>

                <button class="btn btn-ico btn-blue-light mb-1 ps-0 svg-animate"
                        data-toggle="height-animate" data-target="#h-7">
                    What do I need to book this Special Deal?
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 15.713L18.0102 9.70299L16.5972 8.28799L12.0002 12.888L7.40423 8.28799L5.99023 9.70199L12.0002 15.713Z"
                              fill="#237FA4"/>
                    </svg>
                </button>
                <div id="h-7" class="height-animate">
                    <ul class="m-0 mb-2 text-body">
                        <li>
                            Clients who wish to book this certificate must meet the following requirements, without
                            exception:

                            <ul class="m-0 mb-4 text-body">
                                <li> Both husband and wife must be at least 28 years of age and have an annual household
                                    income of US$70,000 or more (Combined annual income if married).
                                </li>
                                <li> Both husband and wife must be currently employed and be creditworthy. It is very
                                    important to bring your own major credit card.
                                </li>
                                <li> Both husband and wife must attend a 120-minute guided tour and sales
                                    presentation.
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <button class="btn btn-ico btn-blue-light mb-1 ps-0 svg-animate"
                        data-toggle="height-animate" data-target="#h-8">
                    GENERAL RESTRICTIONS
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 15.713L18.0102 9.70299L16.5972 8.28799L12.0002 12.888L7.40423 8.28799L5.99023 9.70199L12.0002 15.713Z"
                              fill="#237FA4"/>
                    </svg>
                </button>
                <div id="h-8" class="height-animate">
                    <ul class="m-0 mb-2 text-body">
                        <li>These special rates are not valid for groups (two or more affiliated couples scheduled for
                            the same or overlapping dates).
                        </li>
                        <li>The Discover Paradise and Discover Paradise Plus special rates cannot be combined or used
                            with other promotions or discounts available for the general public.
                        </li>
                        <li>These special rates are applicable for one adult couple per reservation.</li>
                    </ul>
                </div>

                <button class="btn btn-ico btn-blue-light mb-1 ps-0 svg-animate"
                        data-toggle="height-animate" data-target="#h-9">
                    TERMS & CONDITIONS OF USE
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12.0002 15.713L18.0102 9.70299L16.5972 8.28799L12.0002 12.888L7.40423 8.28799L5.99023 9.70199L12.0002 15.713Z"
                              fill="#237FA4"/>
                    </svg>
                </button>
                <div id="h-9" class="height-animate">
                    <ul class="m-0 mb-2 text-body">
                        <li>The Recipient is responsible for payment of any government-imposed taxes directly related to
                            the service being provided and any personal expenses incurred when utilizing this offer.
                        </li>
                        <li>This material is not an offer to sell or a solicitation of an offer to buy to residents of
                            any state in which registration requirements have not been fulfilled.
                        </li>
                        <li>This material is being used for the purpose of promoting a Travel Club program, although you
                            are under no obligation to purchase in order to receive your discount vacation package.
                        </li>
                        <li>Ineligibility under this promotional offer should not be construed as an ineligibility to
                            purchase.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- Modal Booking --}}
<div id="modal-booking" class="modal modal-booking d-none">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-close">
                <button class="btn">
                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.4363 9.625L16.5 14.5612L11.5637 9.625L9.625 11.5637L14.5612 16.5L9.625 21.4363L11.5637 23.375L16.5 18.4387L21.4363 23.375L23.375 21.4363L18.4387 16.5L23.375 11.5637L21.4363 9.625Z"
                              fill="#2E3A59"/>
                    </svg>
                </button>
            </div>

            <div class="modal-body">
                <div class="form-booking ">
                    @include('facebook.booking',[
                        'showLabels' => true,
                        'resortFilter' => 'time-share',
                        'showTermsPromotion' => true,
                        'globalError' => 'Please  select from 5 up to 7-Nights stay to apply to this offer.'
                        ])
                </div>
            </div>
        </div>
    </div>
</div>


{{-- Modal Booking --}}
<div id="modal-chat" class="modal modal-chat d-none">
    <div class="modal-wrapper">
        <div class="modal-content">
            <div class="modal-close">
                <button class="btn">
                    <svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.4363 9.625L16.5 14.5612L11.5637 9.625L9.625 11.5637L14.5612 16.5L9.625 21.4363L11.5637 23.375L16.5 18.4387L21.4363 23.375L23.375 21.4363L18.4387 16.5L23.375 11.5637L21.4363 9.625Z"
                              fill="#2E3A59"/>
                    </svg>
                </button>
            </div>

            <div class="modal-body">
                <iframe src="https://webchat.visitroyalresorts.com/chat-programa-SPMX-en.html" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>


@if(env('APP_TAG') == true)
    <!-- BEGIN Salesforce DMP ControlTag for "royalreservations.com" -->
    <script class="kxct" data-id="tc1kcjtn5" data-timing="async" data-version="3.0" type="text/javascript" async>
        window.Krux || ((Krux = function () {
            Krux.q.push(arguments)
        }).q = []);
        (function () {
            var k = document.createElement('script');
            k.type = 'text/javascript';
            k.async = true;
            k.src = (location.protocol === 'https:' ? 'https:' : 'http:') + '//cdn.krxd.net/controltag/tc1kcjtn5.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(k, s);
        }());
    </script>

    <script>


        function json2array(json) {
            var result = [];
            var keys = Object.keys(json);
            keys.forEach(function (key) {
                result.push(json[key]);
            });
            return result;
        }

        function consentYes() {
            Krux('ns:operadoracorporativamirosadecv', 'consent:set', {
                    dc: true,
                    tg: true,
                    al: true,
                    cd: true,
                    sh: true,
                    re: true
                },
                function (errors, body) {
                    if (errors) {
                        console.error(errors);
                    }
                    consentOverlay.classList.add('consent-hide');
                }
            );

            dataLayer.push({
                'event': 'Consent Set',
                'eventModel': {
                    'event_category': 'Consent',
                    'event_action': 'Set to True'
                },
                'eventCategory': 'Consent',
                'eventAction': 'Set to True'
            });
        };

        function consentNo() {
            Krux('ns:operadoracorporativamirosadecv', 'consent:set', {
                    dc: false,
                    tg: false,
                    al: false,
                    cd: false,
                    sh: false,
                    re: false
                },
                function (errors, body) {
                    if (errors) {
                        console.error(errors);
                    }
                }
            );

            consentOverlay.classList.remove('consent-hide');
        };

        function consentReallyNo() {
            Krux('ns:operadoracorporativamirosadecv', 'consent:set', {
                    dc: false,
                    tg: false,
                    al: false,
                    cd: false,
                    sh: false,
                    re: false
                },
                function (errors, body) {
                    if (errors) {
                        console.error(errors);
                    }
                }
            );
            dataLayer.push({
                'event': 'Consent Set',
                'eventModel': {
                    'event_category': 'Consent',
                    'event_action': 'Set to False'
                },
                'eventCategory': 'Consent',
                'eventAction': 'Set to False'
            });
            consentOverlay.classList.remove('consent-hide');
        };

        Krux('ns:operadoracorporativamirosadecv', 'consent:get', {},
            function (errors, body) {
                if (errors) {
                    console.error(errors);
                    consentOverlay.classList.remove('consent-hide');
                    //window.showBanner = true;
                    consentNo();
                } else {
                    var consent1 = body.settings;
                    var consentParse = json2array(consent1);
                    //console.log(consentParse);

                    for (var i = 0; i < consentParse.length; i++) {
                        if (consentParse[i] == 0) {
                            consentOverlay.classList.remove('consent-hide');
                            //window.showBanner = true;
                        } else {
                            consentOverlay.classList.add('consent-hide');
                            //window.showBanner = false;
                        }
                    }
                }
            }
        );

    </script>
    <!-- END Salesforce DMP ControlTag -->

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NNS3B9J" height="0" width="0"
                style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->
@endif

@php
    $language = App::getLocale();
    $gmsClient = app('App\GMS\GMSClient');
@endphp

<script type="text/javascript">
    var timeZoneDefault = "{{ date_default_timezone_get()   }}";
    var language = '{{$language}}';
    var gmsIsGuest = {{ $gmsClient->isGuest() ? 1 : 0 }};
    var namePage = "{{ $page }}";
    var airports = {!! \Storage::disk('local')->get('airports.json') !!};
    var consentOverlay = document.getElementById('consent-overlay');

    var x = [];

    var tagsAdults = {
        adult18: '{{__('general.booking.label.adults')}}',
        adult16: '{{__('general.booking.label.adults3')}}',
        adult13: '{{__('general.booking.label.adults1')}}',
        adult12: '{{__('general.booking.label.adults2')}}',
    };

    var tagsTeen = {
        teen13_17: '{{__('general.booking.label.teen')}}'
    };

    var tagsChildren = {
        child15: '{{__('general.booking.label.children3')}}',
        child12: '{{__('general.booking.label.children')}}',
        child11: '{{__('general.booking.label.children1')}}',
    };

    var MSGCONFIRMATION = false;
    @if(Session::has('success'))
        MSGCONFIRMATION = true;
    @endif
</script>

<script src="{{mix('/js/time-share.js')}}"></script>
<script src="https://player.vimeo.com/api/player.js" defer onload="onloadVimeo()"></script>
</body>

</html>

