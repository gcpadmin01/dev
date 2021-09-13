<?php

return [

   'slider' => [   
        [
            'title' => 'FLASH SALE',
            'alt' => 'FLASH SALE',
            'filename' => 'flash-sale-gr-en',
            'file_text_name' => '',
            'url' => 'https://reservations.travelclick.com/95939?hotelid=95939&RatePlanID=2808347',
            'boton' => '0', // [0 = no tendrá botón, por lo tanto toda la foto será link]  [1= con botón]
            'time' => '',//'October 09, 2019 11:13:00
            'text1' => '',
            'text2' => '',
            'text3' => ''
        ],
        [
            'title' => 'UNLIMITED PACKAGE',
            'alt' => 'UNLIMITED PACKAGE',
            'filename' => 'special-deal-home',
            'file_text_name' => '',
            'url' => '/deals/hotels/special-offers',
            'boton' => '0', // [0 = no tendrá botón, por lo tanto toda la foto será link]  [1= con botón]
            'time' => '',//'October 09, 2019 11:13:00
            'text1' => '',
            'text2' => '',
            'text3' => ''
        ],
        [
            'title' => 'FREE BREAKFAST',
            'alt' => 'FREE BREAKFAST',
            'filename' => 'free-breakfast-home',
            'file_text_name' => 'img/banner-text-1.png',
            'url' => '/deals/hotels/free-breakfast',
            'boton' => '0', // [0 = no tendrá botón, por lo tanto toda la foto será link]  [1= con botón]
            'time' => '',//October 13, 2019 11:13:00
            'text1' => '',
            'text2' => '',
            'text3' => ''
        ],        
        [
            'title' => 'FLY TO THE BEACH',
            'alt' => 'FLY TO THE BEACH',
            'filename' => 'hotel-plus-flight-home',
            'file_text_name' => '',
            'url' => '/deals/hotels/hotel-plus-flight',
            'boton' => '0', // [0 = no tendrá botón, por lo tanto toda la foto será link]  [1= con botón]
            'time' => '',//'October 09, 2019 11:13:00
            'text1' => '',
            'text2' => '',
            'text3' => ''
        ],
    ],
    
    'banner'=>'',

    // ******* OFERTAS POR DESTINO

    'cancun' => [
        [ 'slug'=>'special-offers', 'destination'=>'1',],
        [ 'slug'=>'free-breakfast', 'destination'=>'1',],
        [ 'slug'=>'hotel-plus-flight', 'destination'=>'1',],
    ],
    'riviera-maya' => [
        [ 'slug'=>'special-offers', 'destination'=>'2',],
        [ 'slug'=>'free-breakfast', 'destination'=>'2',],
        [ 'slug'=>'hotel-plus-flight', 'destination'=>'2',],
    ],
    'playa-del-carmen' => [
        [ 'slug'=>'special-offers', 'destination'=>'3',],
        [ 'slug'=>'hotel-plus-flight', 'destination'=>'3',],    
    ],
    'puerto-morelos' => [
        [ 'slug'=>'special-offers', 'destination'=>'2',], 
        [ 'slug'=>'free-breakfast', 'destination'=>'2',],
        [ 'slug'=>'hotel-plus-flight', 'destination'=>'2',],
    ],
    'st-maarten' => [
        [ 'slug'=>'special-offers', 'destination'=>'4',], 
        [ 'slug'=>'hotel-plus-flight', 'destination'=>'4',],
    ],
    'curacao' => [
        [ 'slug'=>'special-offers', 'destination'=>'5',],
        [ 'slug'=>'hotel-plus-flight', 'destination'=>'5',],
    ],
    'punta-cana' => [
    ],

    // ****** OFERTAS POR RESORT
    'the-royal-sands'=>[
        [ 'slug'=>'special-offers', 'rate'=>'1',],
        [ 'slug'=>'hotel-plus-flight', 'rate'=>'1',],
    ],
    'the-royal-islander'=>[
        [ 'slug'=>'special-offers', 'rate'=>'2',], 
        [ 'slug'=>'free-breakfast', 'rate'=>'2',],
        [ 'slug'=>'hotel-plus-flight', 'rate'=>'2',],
    ],
    'the-royal-caribbean'=>[
        [ 'slug'=>'special-offers', 'rate'=>'2',],
        [ 'slug'=>'free-breakfast', 'rate'=>'2',],
        [ 'slug'=>'hotel-plus-flight', 'rate'=>'2',],
    ],
    'the-royal-cancun'=>[
        [ 'slug'=>'special-offers', 'rate'=>'1',],
        [ 'slug'=>'free-breakfast', 'rate'=>'2',],
        [ 'slug'=>'hotel-plus-flight', 'rate'=>'1',],
    ],
    'grand-residences-riviera-cancun'=>[
        [ 'slug'=>'special-offers', 'rate'=>'1',],
        [ 'slug'=>'hotel-plus-flight', 'rate'=>'1',],
        [ 'slug'=>'free-breakfast', 'rate'=>'1',],
        [ 'slug'=>'special-offers', 'rate'=>'2',],
    ],
    'the-royal-haciendas'=>[
        [ 'slug'=>'special-offers', 'rate'=>'1',],
        [ 'slug'=>'hotel-plus-flight', 'rate'=>'1',],
    ],
    'the-villas-at-simpson-bay-resort'=>[
        [ 'slug'=>'special-offers', 'rate'=>'2',],
        [ 'slug'=>'hotel-plus-flight', 'rate'=>'2',],
        [ 'slug'=>'special-offers', 'rate'=>'3',], 
    ],
    'simpson-bay-resort'=>[
        [ 'slug'=>'special-offers', 'rate'=>'2',],
        [ 'slug'=>'hotel-plus-flight', 'rate'=>'2',],
        [ 'slug'=>'special-offers', 'rate'=>'3',], 
    ],
    'the-royal-sea-aquarium'=>[
        [ 'slug'=>'special-offers', 'rate'=>'2',],
        [ 'slug'=>'hotel-plus-flight', 'rate'=>'2',],
        [ 'slug'=>'special-offers', 'rate'=>'3',], 
    ],
    'ancora'=>[
        
    ],
    'del-mar'=>[
        
    ],
    'casa-de-campo'=>[
        
    ],
];