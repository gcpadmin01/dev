<?php

return [
    'seo'=>
    [
        'title'=>'The Royal Haciendas Resort Rooms | Royal Reservations',
        'metadescription'=>'Enjoy beautiful roomns and suites with excellent amenities complemented with top services that are offered at The Royal Haciendas Resort & Spa. Every room features premium amenities like free Wi-Fi, telephone, flat screen TV, microwave, and more.',
    ],    
    'title' => 'The Royal Haciendas Accommodations',
    'description' => 'ROOMS IN THE ROYAL HACIENDAS
THE ROYAL HACIENDAS ALL SUITES RESORTS & SPA has a wide variety of suites that adapt perfectly to your needs. <br><br>
 
From a wonderful Deluxe Junior Suites to a <b>spacious Deluxe Two Bedroom Suite</b>. Choose your favorite and witness how the blue of the sky merges with the sea!',

    'url_all_rooms'=>'beach-resorts/the-royal-haciendas/family-rooms-in-playa-del-carmen-resort',

    //descripción landing interna
    'title_interna_rooms' => 'The Royal Haciendas Deluxe Suites',

    //descripción landing interna
    'description_interna_rooms' => '
<p>
With a space from 42 m2 to 150 m2 <b>the spacious rooms</b> offered by THE ROYAL HACIENDAS ALL SUITES RESORTS & SPA <b>invite you to rest and relax</b> after a day full of activities and fun.
</p>
<p> 
Let its 252 rooms with private balcony facing the sea make you fall in love and dedicate yourself to enjoy its unlimited services and useful premium amenities that will make your stay a pleasant experience.
</p>

', 

    'resort_id'=>'86184',   
    'resort_amenities' => [
        0=>[
            'title'=>'Beachfront Resort',
            'icon'=>'beachfront-resort',
        ],
        1=>[
            'title'=>'Beauty Salon',
            'icon'=>'beauty-salon',
        ],
        2=>[
            'title'=>'Free Wifi',
            'icon'=>'free-wifi',
        ],
        3=>[
            'title'=>'Wellness Spa',
            'icon'=>'wellness-spa',
        ],
        4=>[
            'title'=>'Tennis Courts',
            'icon'=>'tennis-courts',
        ],
        5=>[
            'title'=>'Pools',
            'icon'=>'pools',
        ],
        6=>[
            'title'=>'Gym',
            'icon'=>'gym',
        ],
        7=>[
            'title'=>'Kids Stay Free',
            'icon'=>'kids-stay-free',
        ],          
        8=>[
            'title'=>'Gym',
            'icon'=>'gym',
        ],         
    ],

    'rooms' => [
        0=>[
            'title' => 'Deluxe Junior Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '229',
                'symbol' => '$'
            ],
            'room_id' => '330077',
            'flor-plan-url' => asset('img/rooms/RH-deluxe-junior-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'2 adults & 1 kid',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 double beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 451 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Kitchenette',
                    'icon'=>'mini-bar',
                ],
                4=>[
                    'title'=>'Juliet balcony',
                    'icon'=>'balcony',
                ],
                5=>[
                    'title'=>'1 bathroom',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'Shower with tub',
                    'icon'=>'bathroom-with-tub',
                ],
                7=>[
                    'title'=>'Flat Screen TV',
                    'icon'=>'tv',
                ],
            ],

            'image' => [
                    'title' => 'Delux Junior Suite',
                    'alt' => 'Delux Junior Suite',
                    'src' => 'deluxe-junior-suite.jpg',
            ],

            'carrusel' => [
                0 => 'deluxe-junior-suite-a.jpg',
                1 => 'deluxe-junior-suite-b.jpg',
                2 => 'deluxe-junior-suite-c.jpg',
            ],  

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],

            'lista' =>[
                0=>'Ocean View or Beachfront available',
                1=>'Kitchenette with microwave, coffee maker, minibar',
                2=>'Private bathroom with bath amenities',
                3=>'High-speed Wi-Fi connection',
            ],             
        ],

        1=>[
            'title' => 'Deluxe One-bedroom Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '289',
                'symbol' => '$'
            ],
            'room_id' => '330086',
            'flor-plan-url' => asset('img/rooms/RH-deluxe-one-bedroom-suite-ov.jpg'),            
            'amenities' => [
                0=>[
                    'title'=>'4 adults',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 King size bed, 2 Murphy beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 881 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'1 Bathroom',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Fully equipped kitchen',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'In room safe',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'Living and Dining Room',
                    'icon'=>'living-dining',
                ],
                7=>[
                    'title'=>'Flat Screen TV',
                    'icon'=>'tv',
                ],
            ],

            'image' => [
                    'title' => 'Delux Junior Suite',
                    'alt' => 'Delux Junior Suite',
                    'src' => 'deluxe-one-bedroom-suite.jpg',
            ],

            'carrusel' => [
                0 => 'deluxe-one-bedroom-suite-a.jpg',
                1 => 'deluxe-one-bedroom-suite-b.jpg',
                2 => 'deluxe-one-bedroom-suite-c.jpg',
            ],           

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],

            'lista' =>[
                0=>'Private Terrace with Jacuzzi',
                1=>'Ocean View or Beachfront available',
                2=>'Private bathroom with bath amenities',
                3=>'High-speed Wi-Fi connection',
            ],            
        ],        

        2=>[
            'title' => 'Deluxe Two-bedroom Master Suite',
            'price' => [
                'currency' => 'USD',
                'amount' => '399',
                'symbol' => '$'
            ],
            'room_id' => '330088',
            'flor-plan-url' => asset('img/rooms/RH-deluxe-two-bedroom-master-suite-ov.jpg'),            
            'amenities' => [
                0=>[
                    'title'=>'6 adults',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 King size bed, 2 Murphy beds, 2 double beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 1613 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 bathrooms',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Full equipped Kitchen',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'In room safe',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'2 balconies',
                    'icon'=>'balcony',
                ],
                7=>[
                    'title'=>'Flat Screen TV',
                    'icon'=>'tv',
                ],
            ],

            'image' => [
                    'title' => 'Delux Junior Suite',
                    'alt' => 'Delux Junior Suite',
                    'src' => 'deluxe-two-bedroom-master-suite.jpg',
            ],

            'carrusel' => [
                0 => 'deluxe-two-bedroom-master-suite-a.jpg',
                1 => 'deluxe-two-bedroom-master-suite-b.jpg',
                2 => 'deluxe-two-bedroom-master-suite-c.jpg',
            ],              

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
            ],

            'lista' =>[
                0=>'Private Terrace with Jacuzzi',
                1=>'Ocean View or Beachfront available',
                2=>'Private bathroom with bath amenities',
                3=>'Spacious living and dining rooms.',
            ],            
        ],                
    ],
];