<?php

return [
    'seo'=>
    [
        'title'=>'The Royal Caribbean Resort Rooms and Suites | Royal Reservations',
        'metadescription'=>'This beautiful rooms and suites in Cancun Resort boast everything you may need to have the perfect vacation at The Royal Caribbean All Suites Resort. The suites are all about comfort and joy to spend with your family and friends.',
    ],    
    'title' => 'The Royal Caribbean Accommodations',
    'description' => 'The suites and villas in The Royal Caribbean All Suites Resort, are comfortable accommodations with stunning Caribbean Ocean views. Our entire array of rooms feature: Free Wi-Fi, flat screen TV with DVD, and Telephone, A/C and private balcony or terrace among other amenities.',

    'url_all_rooms'=>'beach-resorts/the-royal-caribbean/family-rooms-in-cancun-resort',

    //descripción landing interna
    'title_interna_rooms' => 'The Royal Caribbean Room And Suites',

    //descripción landing interna
    'description_interna_rooms' => '<p>Offering spacious accommodation such as our junior suites and one and two bedroom option suites, all of our rooms and suites are ample and fully equipped including exclusive amenities, all boasting astonishing views of the Caribbean in any of its locations, all with everything you may need to have a pleasant vacation experience during your stay at <strong>The Royal Caribbean All Suites Resort. </strong>Our accommodations are all about comfort, and joy to spend fun yet relaxing moments with your family and friends.</p>

    <p>Picture yourself in your own private heaven of comfort facing the breathtaking Caribbean oasis. Feel at home at any of our rooms, suites or family villas and let <strong>The Royal Caribbean All Suites Resort </strong>pamper you during your <strong>Cancun family vacations. </strong></p>',

    'resort_id'=>'86175',

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
            'title' => 'Double Rooms',

            'price' => [
                'currency' => 'USD',
                'amount' => '99',
                'symbol' => '$'
            ],

            'room_id' => '329820',
            'flor-plan-url' => asset('img/rooms/RC-standard-room-ov.jpg'),
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
                    'title'=>'Area: 420 ft2',
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
                    'title' => 'Double Standard Room',
                    'alt' => 'Double Standard Room',
                    'src' => 'double-standard-room.jpg',
            ],

            'carrusel' => [
                0 => 'double-standard-room-a.jpg',
                1 => 'double-standard-room-b.jpg',
                2 => 'double-standard-room-c.jpg',
            ],

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '22',
                'symbol' => '$',
            ],

            'lista' =>[
                0=>'Ocean View or Beachfront available',
                1=>'Kitchenette with microwave, coffee maker, minibar',
                2=>'Private bathroom with hairdryer',
                3=>'High-speed Wi-Fi connection',
            ],            
        ],



        1=>[

            'title' => 'One-bedroom Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '149',
                'symbol' => '$'
            ],

            'room_id' => '330053',
            'flor-plan-url' => asset('img/rooms/RC-one-bedroom-suite-ov.jpg'),            
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
                    'title'=>'Area: 801 ft2',
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
                    'title' => 'One-bedroom Suites',
                    'alt' => 'One-bedroom Suites',
                    'src' => 'one-bedroom-suite.jpg',
            ],

            'carrusel' => [
                0 => 'one-bedroom-suite-a.jpg',
                1 => 'one-bedroom-suite-b.jpg',
                2 => 'one-bedroom-suite-c.jpg',
            ],          

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '30',
                'symbol' => '$',
                'href' => '#'
            ],

            'booking' => '#',

            'lista' =>[

                0=>'Ocean View or Beachfront available',

                1=>'Fully equipped kitchen with appliances',

                2=>'Private bathroom with bathtub',

                3=>'High-speed Wi-Fi connection',

            ],

        ],        

        2=>[

            'title' => 'Two-bedroom Master Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '216',
                'symbol' => '$'
            ],
            'room_id' => '330055',
            'flor-plan-url' => asset('img/rooms/RC-two-bedroom-master-suite-ov.jpg'),
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
                    'title'=>'Area: 1494 ft2',
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
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'1 Balcony',
                    'icon'=>'balcony',
                ],
                7=>[
                    'title'=>'1 Terrace',
                    'icon'=>'terrace',
                ],
                8=>[
                    'title'=>'Flat Screen TV',
                    'icon'=>'tv',
                ],

            ],

            'image' => [
                    'title' => 'Two-bedroom Master Suites',
                    'alt' => 'Two-bedroom Master Suites',
                    'src' => 'two-bedroom-master-suite.jpg',
            ],

            'carrusel' => [
                0 => 'two-bedroom-master-suite-a.jpg',
                1 => 'two-bedroom-master-suite-b.jpg',
                2 => 'two-bedroom-master-suite-c.jpg',
            ],              

            'upgrade-for' => [

                'currency' => 'USD',

                'amount' => '40',

                'symbol' => '$',
            ],
            'lista' =>[
                0=>'Ocean View or Beachfront available',
                1=>'Full equipped Kitchen',
                2=>'Spacious living and dining rooms.',
                3=>'Private terrace with table and chairs',
            ],            
        ],                
    ],
];