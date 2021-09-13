@php

$item = [

    'img' => 'https://picsum.photos/350/200',

    'title' => 'The Royal Sands',

    'link' => 'beach-resorts/the-royal-sands/the-royal-sands-resort-photos',

    'alt'=>'lorem itsum',

    'item-gallery' => true,

    'item-video '=> true,

    'item-360' => true,



    

];

$item2 = [

    'img' => 'https://picsum.photos/350/200/?random',

    'title' => 'Grand Residences Riviera Cancun',

    'link' => 'beach-resorts/grand-residences-riviera-cancun/grand-residences-riviera-cancun-photos',

    'alt'=>'lorem itsum',

    'item-gallery' => true,

    'item-video' => true,

    'item-360' => false,

    

];

$items=[

    'example-1'=>$item,

    'example-2'=>$item,

    'example-3'=>$item,

    'example-4'=>$item,

    'example-5'=>$item,

    'example-6'=>$item,

];

$itemsmexican=[

    'example-1'=>$item2,

    'example-2'=>$item2,

    'example-3'=>$item2,

    'example-4'=>$item2,

    'example-5'=>$item2,

    'example-6'=>$item2,

];







@endphp



<section class="container py-2">

  <div class="row no-gutters subinterna pb-4">

    <div class="col d-none d-md-block"></div>

    <div class="col-12 col-md-10 px-0">

      <h1 class="text-left text-uppercase py-4 av-blue">Media Gallery</h1>

      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ab a excepturi hic. Explicabo harum consequatur cum accusamus libero, dolore at, enim non ex molestias esse iure earum quo asperiores! </p>

      <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ab a excepturi hic. Explicabo harum consequatur cum accusamus libero, dolore at, enim non ex molestias esse iure earum quo asperiores! </p>

    </div>

    <div class="col d-none d-md-block"></div>

  </div>





  <div class="row no-gutters pt-4">

    <ul class="nav nav-pills nav-justified container w-75 av-destination-new-tabs resort-tabs p-0" id="pills-tab" role="tablist">

      <li class="nav-item d-flex align-items-center justify-content-center av-border-right-white">

        <a class="nav-link text-uppercase bold w-100 active" id="pills-resort-mexican" data-toggle="pill" href="#pills-mexican" role="tab" aria-controls="pills-mexican" aria-selected="true">

            {{__('beach-destinations.zones.0.title')}}</h6>

        </a>

      </li>

      <li class="nav-item d-flex align-items-center justify-content-center av-border-right-white">

        <a class="nav-link text-uppercase bold w-100 " id="pills-resort-caribean" data-toggle="pill" href="#pills-caribbean" role="tab" aria-controls="pills-caribbean" aria-selected="false">

          {{__('beach-destinations.zones.1.title')}}

        </a>

      </li>

      

    </ul>

  </div>



  <div id="resort-mexican" class="show-resort apear-mexican">

    <div class="row no-gutters subinterna">

      <div class="col d-none d-md-block"></div>

      <div class="col-12 col-md-10 py-5">

      

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae atque distinctio vero, iusto debitis laudantium architecto voluptates, quasi libero totam provident amet id dolore repellendus quas delectus excepturi reprehenderit earum.</p>



      </div>

      <div class="col d-none d-md-block"></div>

    </div>

    <div class="row">

        

            <div class="gallery-grid">

                    @foreach($itemsmexican as $item => $it)

             

                <div class="item">

                    <a href="{{ data_get($it, 'link') }}" >

                        <div class="cover" style="background-image:url({{ data_get($it, 'img') }})">



                        </div>

                       

                        <div class="iconos">

                          

                            <img class="mr-md-2 d-inline-block" src="{{asset('/img/icon-galeria/icono-galeria.svg')}}" alt="Galery" width="25" > 

                            <img class="mr-md-2 d-inline-block" src="{{asset('/img/icon-galeria/icono-video.svg')}}" alt="Video" width="25" > 

                            <img class="mr-md-2 d-inline-block" src="{{asset('/img/icon-galeria/tour_virtual.svg')}}" alt="Tour Virtual" width="25" >

                        </div>

                        <div class="title-gallery"><h3> {{ data_get($it, 'title') }}</h3></div>

                    </a>

                </div>

               

                @endforeach

              

               

            </div>

        

    </div>









  </div>



  <div id="resort-caribean" class="hidden-resort">

    <div class="row no-gutters py-5 subinterna">

      <div class="col d-none d-md-block"></div>

         <div class="col-md-10 col-12">

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae atque distinctio vero, iusto debitis laudantium architecto voluptates, quasi libero totam provident amet id dolore repellendus quas delectus excepturi reprehenderit earum.</p>



        </div>

      <div class="col d-none d-md-block"></div>

    </div>

  

    <div class="row">

        <div class="gallery-grid">

                @foreach($items as $item => $it)

         

            <div class="item">

                <a href="{{ data_get($it, 'link') }}"><img src="{{ data_get($it, 'img') }}" alt="">

                    <div class="iconos"> 

                        <img class="mr-md-2 d-inline-block" src="{{asset('img/icon-galeria/icono-galeria.svg')}}" alt="Galery" width="25" > 

                        <img class="mr-md-2 d-inline-block" src="{{asset('img/icon-galeria/icono-video.svg')}}" alt="Video" width="25" > 

                        <img class="mr-md-2 d-inline-block" src="{{asset('img/icon-galeria/tour_virtual.svg')}}" alt="Tour virtual" width="25" >

                    </div>

                    <div class="title-gallery"><h3> {{ data_get($it, 'title') }}</h3></div>

                </a>

            </div>

           

            @endforeach

          

           

        </div>

    </div>

  





  </div>



</section>