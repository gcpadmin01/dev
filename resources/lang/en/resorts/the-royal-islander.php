<?php
return [
    'url-banner-deals' => 'the-royal-islander-banner-offers.jpg',
    'seo'=>
        [
            'title'=>'The Royal Islander Resort Cancun Beach | Royal Reservations',
            'metadescription'=>'Staying at The Royal Islander Resort is enjoying activities like pool relaxation, savoring delicious meals at three restaurants, walking on the beautiful beach and more.',
        ],

    'title' => 'The Royal Islander All Suites Resort',

    'slug' => lang_url('/beach-resorts/the-royal-islander'),

    'description' => '
<p>
<b>Beautiful and warm 4-star resort located in front of the beautiful beaches of 
Cancun\'s Hotel Zone.</b>
</p>
<p>
Facing the spectacular Caribbean Sea, <b>17 minutes from the airport (by car),</b> this 
charming hotel with a <b>room-only plan or accommodation with breakfast included</b>, 
has a magnificent location, close to shopping centers and tourist attractions, such 
as: Cancun\'s Maya Museum (14 minutes on foot), La Isla Shopping Mall (15 
minutes by car) and El Mirador (17 minutes on foot).
</p>
<p>
Whether traveling with family or friends, let yourself be pampered in the best hotel 
in Cancun, <b>THE ROYAL ISLANDER ALL SUITES RESORT by Royal Resorts</b>; 
walk along its paradisiacal beach, delight yourself with delicious dishes in its 3 first-
class restaurants and have fun with its incredible program of activities.
</p>',

    'short-description' => '',
    'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque porttitor magna sed ante iaculis, a pulvinar nunc sagittis. Praesent ullamcorper bibendum tincidunt.',

    'resort_id'=>'86182',
    'all-inclusive' => false, //en home
    'room-only' => true,
    'bed-breakfast' => true,
    'all-inclusiveB' => 'false', //en overview del hotel
    'room-onlyB' => 'true',
    'bed-breakfastB' => 'true',    
    'destination' => 'Cancun',
    'price' => [
        'currency' => 'USD',
        'amount' => '103',
        'symbol' => '$'
    ],

    'starts' => '4',
    'thumbnails' => [
        '741x290' => asset('img/resorts/home1/the-royal-islander.jpg'),
        '435x521' => asset('img/resorts/the-royal-islander/the-royal-islander-a.jpg'),
        '418x206' =>asset('img/resorts/the-royal-islander/the-royal-islander-b.jpg'),
        '376x100' => asset('img/resorts/home2/the-royal-islander.jpg'),
        '376x290' => asset('img/resorts/home3/the-royal-islander.jpg'),
        '370x300' => asset('370x300'),
        '196x230' => 'the-royal-islander',
    ],

    'rates' => [
        0 => [
            'name' => 'Bed & Breakfast', 
            'slug' => lang_url('/beach-resorts/the-royal-islander/bed-and-breakfast-cancun-vacation'),
        ],
        1 => [
            'name' => 'Room Only', 
            'slug' => lang_url('/beach-resorts/the-royal-islander/room-only-cancun-vacation'),
        ],
    ],

//    'gallery'=>[
//        'the-royal-islander-facilities-a',
//        'the-royal-islander-facilities-b',
//        'the-royal-islander-facilities-c',
//        'the-royal-islander-facilities-d',
//        'the-royal-islander-facilities-dd',
//        'the-royal-islander-facilities-e',
//        'the-royal-islander-facilities-f',
//        'the-royal-islander-facilities-g',
//        'the-royal-islander-facilities-h',
//        'the-royal-islander-facilities-hh',
//        'the-royal-islander-facilities-i',
//        'the-royal-islander-facilities-j',
//        'the-royal-islander-facilities-k',
//    ],

    'gallery' => [
        'the-royal-islander-13',
        'the-royal-islander-2',
        'the-royal-islander-3',
        'the-royal-islander-4',
        'the-royal-islander-5',
        'the-royal-islander-6',
        'the-royal-islander-7',
        'the-royal-islander-8',
        'the-royal-islander-9',
        'the-royal-islander-10',
        'the-royal-islander-11',
        'the-royal-islander-12',
        'the-royal-islander-1',
        'the-royal-islander-14',
        /*'the-royal-islander-15',*/
        'the-royal-islander-16',
        'the-royal-islander-17',
        'the-royal-islander-18',
        'the-royal-islander-19',
        'the-royal-islander-20',
    ],

    'tripadvisor'=>[
        0=>'certificate-excellence-2017-en',
    ],
    'resort_amenities' => [
        0=>[
            'title'=>'Beachfront Resort',
            'icon'=>'beachfront',
        ],
        1=>[
            'title'=>'Pools',
            'icon'=>'pool',
        ],
        2=>[
            'title'=>'Tennis courts',
            'icon'=>'tennis-courts',
        ],
        3=>[
            'title'=>'Free Highspeed WiFi',
            'icon'=>'wifi',
        ],
        4=>[
            'title'=>'Family Activities',
            'icon'=>'sport-activities',
        ],
        5=>[
            'title'=>'3 Restaurants',
            'icon'=>'restaurants',
        ],
        6=>[
            'title'=>'Tour and Car Rental Desk',
            'icon'=>'car-rental',
        ],
        7=>[
            'title'=>'Golf Program',
            'icon'=>'golf',
        ],                                                
    ],

    'address' => 'Kukulcan Boulevard Km 17.5, 77500. Cancun Hotel Zone, Q.Roo, Mx.',
    'addressCountry' => 'Mexico', 'postalCode' => '77500', 'addressRegion' => 'Quintana Roo',
    'priceRange' => 'Prices starting at $109 USD average per night (Best Deal Guaranteed)', 

    'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.0578718908205!2d-86.77939358569115!3d21.070350691734454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c282c1deb38c7%3A0xe91144bca9512672!2sThe+Royal+Islander!5e0!3m2!1sen!2smx!4v1530030492418',   

    'resort_offers_title' => 'The Royal Islander Specials',
    'resort_offers_url' => url('/beach-resorts/the-royal-islander/cancun-resort-vacation-deals'),

    /** POSITION ARRAY IN WEBCAM.PHP LANG FILE */
    'webcam_position' => '1',
];