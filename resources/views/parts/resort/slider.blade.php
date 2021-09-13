<div class="sliderjs slider-resort">
    @if(is_array($items))
        @foreach($items as $item)
            @php
                $img1 = asset((Agent::isMobile() && !Agent::isTablet())? 'img/mobile/resorts/'.$resort.'/'.$item['file']:'img/resorts/'.$resort.'/'.$item['file']);
            @endphp
            <div class="item" >
                <img class="w-100 lazyload" data-src="{{$img1}}" data-webp="{{__webp($img1)}}" alt="{{ $item['title'] }}">
                <div class="slider-body-center">
                    <div class="slider-body">
                        <h1 class="slider-title">
                            {{$item['title']}}
                        </h1>
                        <div class="slider-start">
                            @for($i=0; $i<$item['stars']; $i++)
                                    @if($item['stars'] - ($i+1) >=0)
                                    <img src="{{asset('img/general/estrella.png')}}" alt="Stars Icon" title="Stars Icon"  width="20">
                                    @else
                                        <img src="{{asset('img/general/estrella2.png')}}" alt="Stars Icon" title="Stars Icon"  width="20">
                                        
                                    @endif
                            @endfor
                        </div>
                        <h2 class="slider-subtitle">
                            {{$item['subtitle']}}
                        </h2>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>
