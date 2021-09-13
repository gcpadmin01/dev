<div {!! (isset($id)? 'id="'.$id.'"' : '' ) !!} {!! (isset($class)? "class='".$class. "'" : '' )  !!} >
    <div class="content">
{{--        <div class="c1">
            <div class="t1">
                <img class="lazyload" data-src="{{ asset('/img/whatsapp-icon.svg') }}" alt="phone" title="phone">
                <label> {{ __('general.Call us to book with an agent') }} </label>
            </div>
            <ul class="phones">
                <li>
                    @php
                        $phone = __phone('MEXICO');
                    @endphp


                    <a target="_blank" rel="noopener noreferrer nofollow" href="tel:529984254788">
                        {{__('header.top.call_us.international')}} (+52) 998-425-4788
                    </a>

                    <a target="_blank" rel="noopener noreferrer nofollow" href="https://api.whatsapp.com/send?phone=529984254788&text=&source=&data=">
                        <img class="whatsapp lazyload" data-src="{{ asset('/img/icon-galeria/whatsapp.svg') }}" title="whatsapp" alt="whatsapp">
                        +52 998-425-4788
                    </a>

                </li>
                <li>
                    <label>
                        <span>&#8226;</span>
                        {{__('header.top.call_us.for_resorts_in_caribbean')}}
                    </label>
                    @php
                        $phone = __phone('SAINT-MARTIN');
                    @endphp
                    <a href="tel:{{ $phone['phone']['number'] }}"> {{ $phone['phone']['label'] }} </a>
                    @if(array_key_exists('whatsapp', $phone))
                        <a target="_blank" rel="noopener noreferrer nofollow"   href="https://api.whatsapp.com/send?phone={{ $phone['whatsapp']['number'] }}&text=&source=&data=">
                            <img class="lazyload whatsapp" data-src="{{ asset('/img/icon-galeria/whatsapp.svg') }}" title="whatsapp" alt="whatsapp">
                            {{ $phone['whatsapp']['label'] }}
                        </a>
                    @endif
                </li>
            </ul>
        </div>--}}

        <div class="c1">
            <div class="t1">
                <img class="lazyload" data-src="{{ asset('/img/whatsapp-icon.svg') }}" alt="phone" title="phone">
                <label> {{ __('general.Call us to book with an agent') }} </label>
            </div>
            <ul class="phones">
                <li>
                    <label>
                        <span>&#8226;</span>
                        {{ __('header.top.call_us.for_resorts_in_mexico') }}
                    </label>
                    @php
                        $phone = __phone('MEXICO');
                    @endphp
                    <a href="tel:{{ $phone['phone']['number'] }}"> {{ $phone['phone']['label'] }} </a>
                    @if(array_key_exists('whatsapp', $phone))
                        <a target="_blank" rel="noopener noreferrer nofollow" href="https://api.whatsapp.com/send?phone={{ $phone['whatsapp']['number'] }}&text=&source=&data=">
                            <img class="whatsapp lazyload" data-src="{{ asset('/img/icon-galeria/whatsapp.svg') }}" title="whatsapp" alt="whatsapp">
                            {{ $phone['whatsapp']['label'] }}
                        </a>
                    @endif
                </li>
                <li>
                    <label>
                        <span>&#8226;</span>
                        {{__('header.top.call_us.for_resorts_in_caribbean')}}
                    </label>
                    @php
                        $phone = __phone('SAINT-MARTIN');
                    @endphp
                    <a href="tel:{{ $phone['phone']['number'] }}"> {{ $phone['phone']['label'] }} </a>
                    @if(array_key_exists('whatsapp', $phone))
                        <a target="_blank" rel="noopener noreferrer nofollow"   href="https://api.whatsapp.com/send?phone={{ $phone['whatsapp']['number'] }}&text=&source=&data=">
                            <img class="lazyload whatsapp" data-src="{{ asset('/img/icon-galeria/whatsapp.svg') }}" title="whatsapp" alt="whatsapp">
                            {{ $phone['whatsapp']['label'] }}
                        </a>
                    @endif
                </li>
            </ul>
        </div>
        <div class="c2">
            <div class="title-customer">
                <img class="lazyload" data-src="{{ asset('/img/icon-galeria/customer-service.svg') }}" alt="Customer Service Icon" title="Customer Service Icon">
                <label> {{ __('general.Do you need help you with your reservation?') }} </label>
            </div>
            @php
                $phone = __phone('CUSTOMER-SERVICE');
            @endphp
            <!--<a href="mailto:ask4help@royalresorts.com">ask4help@royalresorts.com</a> -->
            <a href="tel:{{ $phone['phone']['number'] }}"> {{ $phone['phone']['label'] }} </a>
        </div>
    </div>
</div>