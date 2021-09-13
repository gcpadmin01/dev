@php
    $lang=App::getLocale();
    $banner= __('special-offer/setup/setup.banner');
    $img = null;
    if(Auth::guard('agent')->check()){
        // $img = asset((Agent::isMobile() && !Agent::isTablet())? __("agent.banner_home_mobile"):__('agent.banner_home'));
        $img = asset((Agent::isMobile() && !Agent::isTablet())? __("agent.banner_login_mobile"):__('agent.banner_login'));
    }


@endphp
<section class="mb-5 deals-banner">
    @if($img == null)
    	@if(Agent::isDesktop())
        	<img src="{{ asset('img/deals/big/deals-hotel-'.$lang.'.jpg?v=0')}}" width="100%" height="100%">
            <div id="lottie-deals"></div>
        @else
        	@if($banner !='')
        	   <img src="{{ asset('img/mobile/deals/banners/336x280-RR-5Mayo-ES.gif')}}" width="100%" height="100%">
        	@endif
        @endif
    @else
        <img src="{{$img}}" width="100%" height="100%" alt="Deals Travel Agents">
    @endif
</section>


@if(Agent::isDesktop() && $banner !='')
      <section class="container mb-5" style="text-align: center;">
    	<a href="https://royalreservations.com/deals/hotels/flash-sale" >
            <img src="{{ asset('img/deals/banners/banner-last-offer.jpg')}}" alt="Offer" width="80%">
        </a>
      </section>
@endif
<style type="text/css">
    .deals-banner{
        position: relative;
    }
    .deals-banner #lottie-deals{
        position: absolute;
        top: 0;
        height: 100%;
        width: 100%;
    }
</style>



    <script id="script-lottie" async type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.5.9/lottie.min.js" ></script>
    <script type="text/javascript">
        if ((typeof bodymovin) == 'undefined') {
            document.getElementById('script-lottie').onload = function () {
                var animations = bodymovin.loadAnimation({
                    container: document.getElementById('lottie-deals'),
                    render:'svg/canvas/html',
                    loop:true,
                    path:'{{ ($lang == 'en')? "/lottie/data-11.json": "/lottie/data-12.json" }}'
                });    
            };
        }else{
            var animations = bodymovin.loadAnimation({
                container: document.getElementById('lottie-deals'),
                render:'svg/canvas/html',
                loop:true,
                path:'{{ ($lang == 'en')? "/lottie/data-11.json": "/lottie/data-12.json" }}'
            });
        }
    </script>

