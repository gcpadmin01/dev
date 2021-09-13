<?php

return [
    'seo'=>
    [
        'title'=>'The Royal Cancun Resort Rooms & Suites | Royal Reservations',
        'metadescription'=>'The Royal Cancun Beachfront Resort boast comfortable fully furnished suites with two bedrooms offering convenient facilities such as a fully equipped kitchen, living and dining areas, spacious bathrooms, private bedrooms and much more.',
    ],
    'title' => 'The Royal Cancun Accommodations',

    'description' => 'At THE ROYAL CANCUN ALL SUITES RESORTS you will find unique and spacious spaces prepared for you to relax and enjoy every second with your family and friends.
Enjoy its comfortable suites with two fully equipped rooms, with a maximum capacity for 6 people. Live the best vacations in Cancun!
.',

    'url_all_rooms'=>'beach-resorts/the-royal-cancun/family-rooms-in-cancun-resort',



    //descripción landing interna

    'title_interna_rooms' => 'Confortable Family Suites',

    //descripción landing interna

    'description_interna_rooms' => '
<p>
<b>Stay in one of the 201 spacious villas</b> of THE ROYAL CANCUN ALL SUITES RESORTS, with an extension from 283m2 to 444m2 suitable <b>for families or couples.</b>
</p>
<p>
Its perfectly equipped rooms have free Wi-Fi, LCD TV and Blu-Ray, murphy beds, equipped kitchen, living and dining room, large bathrooms and separate bedrooms with fine bedding, among many other amenities, designed to make your stay a unique experience.
</p>',



    'resort_id'=>'73601',    



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

            'title' => 'Two-bedroom Suite',

            'price' => [

                'currency' => 'USD',

                'amount' => '329',

                'symbol' => '$'

            ],

            'room_id' => '339339',

            'flor-plan-url' => asset('img/rooms/TRC-two-bedroom-one-bathroom-suite-bf.jpg'),            

            'amenities' => [

                0=>[
                    'title'=>'5 adults',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 king size bed, 1 double Murphy bed and 2 single beds.',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 968.21 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Fully equipped Kitchen',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'2 Private bedrooms',
                    'icon'=>'bedding',
                ],
                5=>[
                    'title'=>'1 private bathroom',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'Flat screen TVs',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'High-speed Wi-Fi connection',
                    'icon'=>'wi-fi',
                ],
            ],

            'image' => [
                    'title' => 'Two-bedroom Suite',
                    'alt' => 'Two-bedroom Suite',
                    'src' => 'two-bedroom-one-bathroom-suite-new.jpg',
            ],

            'carrusel' => [
                0 => 'two-bedroom-one-bathroom-suite-new.jpg',
                1 => 'two-bedroom-one-bathroom-suite-a.jpg',
                2 => 'two-bedroom-one-bathroom-suite-b.jpg',
                3 => 'two-bedroom-one-bathroom-suite-c.jpg',
            ],

            'upgrade-for' => [
                'currency' => 'USD',
                'amount' => '20',
                'symbol' => '$',
            ],

            'lista' =>[

                0=>'Ocean View or Beachfront available',

                1=>'Full equipped Kitchen including fridge, stove, dishwasher and more',

                2=>'Spacious living room and dining area.',

                3=>'Private balcony with table and chairs',

            ],            

        ],



        1=>[

            'title' => 'Two-bedroom Master Suite',

            'price' => [

                'currency' => 'USD',

                'amount' => '369',

                'symbol' => '$'

            ],

            'room_id' => '330075',

            'flor-plan-url' => asset('img/rooms/TRC-two-bedroom-two-bathroom-suite-bf.jpg'),

            'amenities' => [

                0=>[
                    'title'=>'6 adults',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 king size bed, 1 double Murphy bed and 2 double beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 1,455.81 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Two-story suite',
                    'icon'=>'two-story-level',
                ],
                4=>[
                    'title'=>'Fully equipped Kitchen',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'2 private bedrooms',
                    'icon'=>'bedding',
                ],
                6=>[
                    'title'=>'2 separate bathroom',
                    'icon'=>'bathroom',
                ],
                7=>[
                    'title'=>'High-speed Wi-Fi connection',
                    'icon'=>'wi-fi',
                ],
            ],

            'image' => [
                    'title' => 'Two-bedroom Master Suite',
                    'alt' => 'Two-bedroom Master Suite',
                    'src' => 'two-bedroom-two-bathroom-master-suite.jpg',
            ],

            'carrusel' => [
                0 => 'two-bedroom-two-bathroom-master-suite-a.jpg',
                1 => 'two-bedroom-two-bathroom-master-suite-b.jpg',
                2 => 'two-bedroom-two-bathroom-master-suite-c.jpg',
            ],            

            'upgrade-for' => [

                'currency' => 'USD',

                'amount' => '30',

                'symbol' => '$',
            ],

            'lista' =>[

                0=>'Ocean View or Beachfront available',

                1=>'Full equipped Kitchen including fridge, stove, dishwasher and more',

                2=>'Spacious living room and dining area with dining table for 6.',

                3=>'Private balcony with table and chairs',

            ],
        ],
    ],
];