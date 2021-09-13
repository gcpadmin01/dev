<?php
$path = $_SERVER['REQUEST_URI'];
$array = str_split($path);
$bool = false;
$boolview = false;
$url = 'chat-general-en';
if (count($array) > 3) {
    if ($array[3] === '/') {
        $bool = true;

    }
}
if (count($array) > 4) {
    $boolview = true;
}

// =====================================================================================
// Header Mosaic
// =====================================================================================
?>


<header style="background-color:#0c2d63;padding:15px;color:white;">
    <nav style="">
        <div style="display: flex;flex-wrap: wrap;justify-content: space-between;width: 100%">
          <div style="width: 100%;height: 1px; background:none;" id="navHeader"></div>
          <div style="height: 70px;max-width:30%; padding-left:10%;">
            @if($page=='caribbean-islands')
              <a href="https://royalreservations.com/">
              @if(Agent::isMobile() && !Agent::isTablet())
                <img class="logo logo-white" src="{{ asset('img/logo-royal-mb.png')}}" alt="Royal Reservations">
              @else
                <img class="logo logo-white" src="{{ asset('img/logo-royal-white.png')}}" alt="Royal Reservations">
              @endif
              </a>
            @else
              <a href="https://royalreservations.com/">
                <img class="logo logo-white" src="{{ asset('img/logo-royal-resorts-white.png')}}" alt="Royal Reservations">
              </a>
            @endif
          </div>
          <div style="height: 70px; padding-top: 1%; max-width:50%; padding-right: 10%;">
            <div style="display: flex;flex-wrap: wrap;justify-content: space-around;">
              <div class="">
                <img class="" src="https://royalreservations.com/img/whatsapp-icon.svg" width="20" alt="Whatsapp icon" title="Whatsapp icon">
              </div>
              <div class="phone">USA Toll Free</div>
              <div class="phone">
                @if($page=='caribbean-islands')
                <a style="white-space: nowrap" href="tel:1-800-791-4471"> 1-800-791-4471</a>
                @else
                <a style="white-space: nowrap" href="tel:1-888-387-4729"> 1-888-387-4729</a>
                @endif
              </div>
            </div>

          </div>
        </div>
    </nav>
</header>

{{--
<header>
    <nav class="nav-primary navbar navbar-expand-md">
        <div style="display: flex;flex-wrap: wrap;justify-content: space-between;width: 100%">
          <div style="width: 100%;height: 5px; background:none;" id="navHeader"></div>
          <div style="height: 40px;">
             <a href="https://royalreservations.com/">
              <img class="pr-sm-4 p-md-0 pl-2 d-sm-none" src="https://testroyal.com/img/logo-royal-mb.png" width="45">
              <img class="pr-sm-4 p-md-0 pl-2 logo logo-blue" src="https://testroyal.com/img/logo-royal.svg">
              <img class="pr-sm-4 p-md-0 pl-2 d-none d-sm-block logo logo-white" src="https://testroyal.com/img/logo-royal-white.png">
            </a>
          </div>
          <div style="height: 40px;">
            <div style="display: flex;flex-wrap: wrap;justify-content: space-around;">
              <div class="">
                <img class="" src="https://royalreservations.com/img/whatsapp-icon.svg" width="20px">
              </div>
              <div class="phone">USA Toll Free</div>
              <div class="phone">
                <a style="white-space: nowrap" href="tel:1-888-387-4729"> 1-888-387-4729</a>
              </div>
            </div>

          </div>
        </div>
    </nav>
</header>
--}}
