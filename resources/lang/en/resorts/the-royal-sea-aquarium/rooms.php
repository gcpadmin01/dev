<?php

return [
    'seo'=>
    [
        'title'=>'The Royal Sea Aquarium Resort Rooms | Royal Reservations',
        'metadescription'=>'The Royal Sea Aquarium Resort offers Curacao accommodation with a beautiful dolphinarium view: the Junior Suites for up to two people, the One Bedroom Suites for up to four people and the Two Bedroom Master Suites for up to six people.',
    ],
    'title' => 'The Royal Sea Aquarium Resort Accommodations',
    'description' => 'The resort offers three types of accommodation options some with a beautiful dolphinarium view while other overlooking the beautiful turquoise waters of the ocean.',
    'url_all_rooms'=>'beach-resorts/the-royal-sea-aquarium/rooms-in-curacao-island',

    //descripción landing interna
    'title_interna_rooms' => 'The Royal Sea Aquarium Suites & Villas',
    //descripción landing interna
    'description_interna_rooms' => '<p>The <strong>Royal Sea Aquarium Resort</strong> offers three Curacao accommodation options some with a beautiful dolphinarium view: the Ocean View Junior Suites for up to two people, our Ocean View One Bedroom Suites for up to four people and finally our Ocean View Two Bedroom Master Suites for up to six people. </p>

    <p>Enjoy all the unbeatable world-class amenities during your stay: wireless internet access, satellite TV and DVD, central air-conditioning, phone, and in-room safe, maid service once a week. &nbsp;At our one and two bedroom suites, the main kitchen includes appliances such as full-size refrigerator, oven, stove, dishwasher, coffee and tea maker, and microwave, whereas as our Junior Suites feature a kitchenette with appliances that include microwave, coffee maker, toaster and mini-fridge.</p>',
    'resort_id'=>'86181',

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

            'title' => 'Double Junior Suite Ocean View',
            'price' => [
                'currency' => 'USD',
                'amount' => '119',
                'symbol' => '$'
            ],

            'room_id' => '330065',
            'flor-plan-url' => '',            
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
                    'title'=>'Area: 517 ft2',
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
                    'src' => 'double-junior-suite.jpg',
            ],
            'carrusel' => [
                0 => 'double-junior-suite-a.jpg',
                1 => 'double-junior-suite-b.jpg',
                2 => 'double-junior-suite-c.jpg',
            ],

            'upgrade-for' => [
                'currency' => '',
                'amount' => '',
                'symbol' => '',
            ],

            'lista' =>[
                0=>'Ocean View',
                1=>'Kitchenette with microwave, coffee maker, minibar',
                2=>'Private bathroom with hairdryer',
                3=>'High-speed Wi-Fi connection',
            ],
        ],

        1=>[
            'title' => 'One-bedroom Suite Ocean View',
            'price' => [
                'currency' => 'USD',
                'amount' => '179',
                'symbol' => '$'
            ],
            'room_id' => '330066',
            'flor-plan-url' => '',            
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
                    'title'=>'Area: 1065 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'1 Bathroom',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Full Kitchen',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'1 terrace',
                    'icon'=>'balcony',
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
                    'src' => 'one-bedroom-suite-fully-equipped-kitchen.jpg',
            ],

            'carrusel' => [
                0 => 'one-bedroom-suite-fully-equipped-kitchen-a.jpg',
                1 => 'one-bedroom-suite-fully-equipped-kitchen-b.jpg',
                2 => 'one-bedroom-suite-fully-equipped-kitchen-c.jpg',
            ],              

            'upgrade-for' => [
                'currency' => '',
                'amount' => '',
                'symbol' => '',
            ],

            'lista' =>[
                0=>'Ocean View',
                1=>'Fully equipped kitchen with appliances',
                2=>'Private bathroom with bathtub',
                3=>'High-speed Wi-Fi connection',
            ],            

        ],        

        2=>[

            'title' => 'Two-bedroom Master Suite',
            'price' => [
                'currency' => 'USD',
                'amount' => '279',
                'symbol' => '$'
            ],
            'room_id' => '330068',
            'flor-plan-url' => '',            
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
                    'title'=>'Area: 1517 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 bathrooms',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Full Kitchen',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'In room safe',
                    'icon'=>'living-dining',
                ],
                6=>[
                    'title'=>'1 Balcony',
                    'icon'=>'balcony',
                ],
                7=>[
                    'title'=>'Flat Screen TV',
                    'icon'=>'tv',
                ],
                8=>[
                    'title'=>'Terrace',
                    'icon'=>'terrace',
                ],
            ],
            'image' => [
                    'title' => 'Delux Junior Suite',
                    'alt' => 'Delux Junior Suite',
                    'src' => 'two-bedroom-master-suite-fully-equipped-kitchen.jpg',
            ],
            'carrusel' => [
                0 => 'two-bedroom-master-suite-fully-equipped-kitchen-a.jpg',
                1 => 'two-bedroom-master-suite-fully-equipped-kitchen-b.jpg',
                2 => 'two-bedroom-master-suite-fully-equipped-kitchen-c.jpg',
            ],              
            'upgrade-for' => [
                'currency' => '',
                'amount' => '',
                'symbol' => '',
            ],
            'lista' =>[
                0=>'Ocean View',
                1=>'Full equipped Kitchen',
                2=>'Spacious living and dining rooms',
                3=>'Private balcony with table and chairs',
            ],          
        ],                
    ],
];