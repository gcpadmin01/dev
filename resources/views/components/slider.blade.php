<div class="slick-default slider-home">
    @foreach($items as $item)
        @php
            $img1 = asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/'.$item['filename'].'.jpg?v='.time():'img/desktop/'.$item['filename'].'.jpg?v='.time());
        @endphp
        
        <div class="item" style="background-image: url('{{$img1}}')" alt="{{$item['alt']}}" title="{{$item['title']}}">
            @if($item['boton'] == '0')<a href="{{lang_url($item['url'])}}">@endif
            <img class="d-md-none" src="{{$img1}}" alt="{{$item['alt']}}" title="{{$item['title']}}">
            <div class="conten-center-right d-none d-md-block">
                <div class="section">
                    <div class="img-text">
                        <span class="text1">{{$item['text1']}}</span>
                        <span class="text2">{{$item['text2']}}</span>
                        <span class="text3">{{$item['text3']}}</span>
                        {{--<img src="{{$item['file_text_name']}}" alt="">--}}
                    </div>
                    @if($item['boton'] == '1')
                    <div class="btn-book text-center">
                        <a class="btn btn-secondary" href="{{lang_url($item['url'])}}">
                            {{__('general.view_more')}}
                        </a>
                    </div>
                    @endif
                    @if($item['time'] != '')
                    <div class="timer mb-4" data-time="{{$item['time']}}">
                        <div class="d-flex justify-content-center">
                            <div class="align-self-center label">{{__('general.sale_ends')}}</div>
                            <div class="align-self-center time dy"></div>
                            <div class="align-self-center label">{{__('general.days')}}</div>
                            <div class="align-self-center time hs"></div>
                            <div class="align-self-center label">{{__('general.hours')}}</div>
                            <div class="align-self-center time mins"></div>
                            <div class="align-self-center label">{{__('general.minutes')}}</div>
                            <div class="align-self-center time sec"></div>
                            <div class="align-self-center label">{{__('general.sec')}}</div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            @if($item['boton'] == '0')</a>@endif
        </div>
        
    @endforeach
</div>
