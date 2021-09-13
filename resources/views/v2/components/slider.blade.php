<div class="slick-home slider-home">
    @php
        $count = 0;
        $img  = "/img/deals/sand-home.jpg";
        $img2 = __('general.img_back');
        $linkSands = "https://royalreservations.com/beach-resorts/the-royal-sands";
        $alt = "THE ROYAL SANDS ALL SUITES RESORT & SPA";
        $alt2 = "WE KNOW THAT PLANS CHANGED";
        
        if(\App::getLocale()=='es'){
            $img = "/img/deals/sand-home-esp.jpg";
            $alt2 = "SABEMOS QUE LOS PLANES CAMBIARON";
            $linkSands = "https://royalreservations.com/es/hoteles-de-playa/the-royal-sands";
        }
        
        if (\Agent::isMobile() && !\Agent::isTablet()) {
            $img = "/img/deals/sand-m-home.jpg";
            $img2 = __('general.img_back_mobile');
            if(\App::getLocale()=='es'){
                $img = "/img/deals/sands-m-home-esp.jpg";
            }
        }



    @endphp



    @foreach($concepts as $key => $item)
        @php
            $link= route('concept.detail',['concepto' => $item->getUrl(\App::getLocale())]);
            if(strpos($link, 'royal-uno-all-inclusive-special') || strpos($link, 'royal-uno-especial-todo-incluido')){
                if(App::getLocale() == 'en'){
                    $link= url('/beach-resorts/royal-uno#a-resort-promotion');
                }else{
                 $link= url('es/hoteles-de-playa/royal-uno#a-resort-promotion');
                }
            }else{
                $link= route('concept.detail',['concepto' => $item->getUrl(\App::getLocale())]);
            }
        @endphp

        <div class="item" style="background-image: url('{{$item->content->banner_img}}')" alt="{{$item->content->title}}" title="{{$item->content->title}}">            
            <a href="{{$link}}">
                <img class="d-md-none" src="{{$item->content->banner_img}}" alt="{{$item->content->title}}" title="{{$item->content->title}}">
            </a>
        </div>

{{--
        @if ($count++ == 0)
            <div class="item" style="background-image: url('{{$img}}')" alt="{{$alt}}" title="{{$alt}}">            
                <a href="{{$linkSands}}">
                    <img class="d-md-none" src="{{$img}}" alt="{{$alt}}" title="{{$alt}}">
                </a>
            </div> 
            <div class="item" style="background-image: url('{{$img2}}')" alt="{{$alt2}}" title="{{$alt2}}">            
                <img class="d-md-none" src="{{$img2}}" alt="{{$alt2}}" title="{{$alt2}}">
            </div>
        @endif
--}}
        
    @endforeach
</div>