<?php

return [

   'slider' => [   
        [
            'title' => 'VENTA FLAHS',
            'alt' => 'VENTA FLAHS',
            'filename' => 'venta-flash-gr-es',
            'file_text_name' => '',
            'boton' => '0', // [0 = no tendrá botón, por lo tanto toda la foto será link]  [1= con botón]
            'url' => 'https://reservations.travelclick.com/95939?hotelid=95939&RatePlanID=2808347&languageid=2',
            'time' => '',//'October 09, 2019 11:13:00
            'text1' => '',
            'text2' => '',
            'text3' => ''
        ],
        [
            'title' => 'DESCUENTO ESPECIAL',
            'alt' => 'DESCUENTO ESPECIAL',
            'filename' => 'descuento-especial-home',
            'file_text_name' => '',
            'boton' => '0', // [0 = no tendrá botón, por lo tanto toda la foto será link]  [1= con botón]
            'url' => '/es/ofertas/hoteles/ofertas-especiales',
            'time' => '',//'October 09, 2019 11:13:00
            'text1' => '',
            'text2' => '',
            'text3' => ''
        ],
        [
            'title' => 'DESAYUNOS GRATIS',
            'alt' => 'DESAYUNOS GRATIS',
            'filename' => 'desayuno-incluido-home',
            'file_text_name' => 'img/banner-text-1.png',
            'boton' => '0', // [0 = no tendrá botón, por lo tanto toda la foto será link]  [1= con botón]
            'url' => '/es/ofertas/hoteles/desayuno-incluido',
            'time' => '',//October 13, 2019 11:13:00
            'text1' => '',
            'text2' => '',
            'text3' => ''
        ],        
        [
            'title' => 'VUELA A LA PLAYA',
            'alt' => 'VUELA A LA PLAYA',
            'filename' => 'hotel-mas-avion-home',
            'file_text_name' => '',
            'boton' => '0', // [0 = no tendrá botón, por lo tanto toda la foto será link]  [1= con botón]
            'url' => '/es/ofertas/hoteles/hotel-mas-avion',
            'time' => '',//'October 09, 2019 11:13:00
            'text1' => '',
            'text2' => '',
            'text3' => ''
        ],
      

    ],

    // ******* OFERTAS POR DESTINO

    'banner'=>'',
    
     // ******* OFERTAS POR DESTINO

    'cancun' => [
        0=>[ 'slug'=>'ofertas-especiales', 'destination'=>'1',],
        1=>[ 'slug'=>'desayuno-incluido', 'destination'=>'1',],
        //2=>[ 'slug'=>'hotel-mas-avion', 'destination'=>'1',],
        
    ],

    'riviera-maya' => [
        0=>[ 'slug'=>'ofertas-especiales', 'destination'=>'2',],
        1=>[ 'slug'=>'desayuno-incluido', 'destination'=>'2',],
        //2=>[ 'slug'=>'hotel-mas-avion', 'destination'=>'2',],
         
    ],

    'playa-del-carmen' => [
        0=>[ 'slug'=>'ofertas-especiales', 'destination'=>'3',],
        1=>[ 'slug'=>'hotel-mas-avion', 'destination'=>'3',],       
    ],    

    'puerto-morelos' => [
        0=>[ 'slug'=>'ofertas-especiales', 'destination'=>'2',],
        1=>[ 'slug'=>'desayuno-incluido', 'destination'=>'2',],
        //2=>[ 'slug'=>'hotel-mas-avion', 'destination'=>'2',],
    ],

    'st-maarten' => [
        0=>[ 'slug'=>'ofertas-especiales', 'destination'=>'4',],
        //1=>[ 'slug'=>'hotel-mas-avion', 'destination'=>'4',],
    ],        

    'curacao' => [
        0=>[ 'slug'=>'ofertas-especiales', 'destination'=>'5',],
        //1=>[ 'slug'=>'hotel-mas-avion', 'destination'=>'5',],
    ],

    'punta-cana' => [
       
    ],


    // ****** OFERTAS POR RESORT

    'the-royal-sands'=>[
        [ 'slug'=>'ofertas-especiales', 'rate'=>'1',],
        [ 'slug'=>'hotel-mas-avion', 'rate'=>'1',],

    ],

    'the-royal-islander'=>[
        [ 'slug'=>'ofertas-especiales', 'rate'=>'2',],
        [ 'slug'=>'desayuno-incluido', 'rate'=>'2',],
        [ 'slug'=>'hotel-mas-avion', 'rate'=>'2',],
    ],

    'the-royal-caribbean'=>[
        [ 'slug'=>'ofertas-especiales', 'rate'=>'2',],
        [ 'slug'=>'desayuno-incluido', 'rate'=>'2',],
        [ 'slug'=>'hotel-mas-avion', 'rate'=>'2',],
    ],

    'the-royal-cancun'=>[
        [ 'slug'=>'ofertas-especiales', 'rate'=>'1',],
        [ 'slug'=>'hotel-mas-avion', 'rate'=>'1',],
        [ 'slug'=>'desayuno-incluido', 'rate'=>'2',],

    ],

    'grand-residences-riviera-cancun'=>[
        [ 'slug'=>'ofertas-especiales', 'rate'=>'1',],
        [ 'slug'=>'hotel-mas-avion', 'rate'=>'1',], 
        [ 'slug'=>'desayuno-incluido', 'rate'=>'2',],
    ],

    'the-royal-haciendas'=>[
        [ 'slug'=>'ofertas-especiales', 'rate'=>'1',],
        [ 'slug'=>'hotel-mas-avion', 'rate'=>'1',],
    ],

    'the-villas-at-simpson-bay-resort'=>[
        [ 'slug'=>'ofertas-especiales', 'rate'=>'2',],
        [ 'slug'=>'hotel-mas-avion', 'rate'=>'2',],
    ],

    'simpson-bay-resort'=>[
        [ 'slug'=>'ofertas-especiales', 'rate'=>'2',],
        [ 'slug'=>'hotel-mas-avion', 'rate'=>'2',],
        
    ],

    'the-royal-sea-aquarium'=>[
        [ 'slug'=>'ofertas-especiales', 'rate'=>'2',],
        [ 'slug'=>'hotel-mas-avion', 'rate'=>'2',],
        [ 'slug'=>'ofertas-especiales', 'rate'=>'3',],
    ],
    
    'ancora'=>[
       
    ],
    'del-mar'=>[
        
    ],
    'casa-de-campo'=>[
        
    ],
    
];