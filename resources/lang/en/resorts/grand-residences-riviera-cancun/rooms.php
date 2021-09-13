<?php

return [
    'seo'=>
    [
        'title'=>'Luxury Suites in Grand Residences | Royal Reservations',
        'metadescription'=>'Grand Residences Riviera Cancun Resort has spacious and beautifully decorated suites featuring breathtaking Caribbean ocean views, handcrafted furniture, signature bedding and upscale furnishing, with Bvlgari® toiletries, Jacuzzi and much more.',
    ],
    'title' => 'Grand Residences Accommodations',

    'description' => '
Find an exclusive peaceful space for you and your family at GRAND 
RESIDENCES RIVIERA CANCUN RESORT. 
Enjoy its spacious and luxurious rooms and live a dream vacation in the Riviera
Maya.
    ',

    'url_all_rooms'=>'beach-resorts/grand-residences-riviera-cancun/luxury-family-rooms-in-riviera-maya',



        //descripción landing interna

    'title_interna_rooms' => 'Grand Residences Luxury Accommodations',

    //descripción landing interna

    'description_interna_rooms' => '<p>

With a space from 193 m2 to 2670 m2, its 201 rooms have large private terraces,
free high-speed Wi-Fi, state-of-the-art electronic devices, a 47” flat screen
television, Jacuzzi, handmade furniture, brand name bed linens and Bvlgari®
bathroom amenities that will make your stay an experience.
</p>
<p>
NOTE: Some Premium suites, such as the Penthouse or the Swim-out type, are
not available to reserve on our website, however, you can contact the reservation
center to request more information or a quote.

    </p>',



    'resort_id'=>'95939',



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

            'title' => 'Junior Suite With Jacuzzi',

            'price' => [

                'currency' => 'USD',

                'amount' => '349',

                'symbol' => '$'

            ],

            'room_id' => '350212',

            'flor-plan-url' => asset('img/rooms/GRM-junior-suite-with-jacuzzi.jpg'),       

            'amenities' => [

                0=>[
                    'title'=>'2 adults & 2 kids (under 12 years old)',
                    'icon'=>'capacity',
                ],

                1=>[
                    'title'=>'2 double beds',
                    'icon'=>'bedding',
                ],

                2=>[
                    'title'=>'Area: 635 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Kitchenette',
                    'icon'=>'mini-bar',
                ],
                4=>[
                    'title'=>'1 bathroom',
                    'icon'=>'bathroom',
                ],
                5=>[
                    'title'=>'Shower with tub',
                    'icon'=>'bathroom-with-tub',
                ],
                6=>[
                    'title'=>'47” Flat Screen TV',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Balcony with Jacuzzi',
                    'icon'=>'balcony',
                ],
            ],

            'image' => [

                    'title' => 'Junior Suite With Jacuzzi',
                    'alt' => 'Junior Suite With Jacuzzi',
                    'src' => 'junior-suite-jacuzzi.jpg',

            ],

            'carrusel' => [
                0 => 'junior-suite-jacuzzi-a.jpg',
                1 => 'junior-suite-jacuzzi-b.jpg',
                2 => 'junior-suite-jacuzzi-c.jpg',
            ],

            'upgrade-for' => [

                'currency' => 'USD',

                'amount' => '110',

                'symbol' => '$',
            ],

            'lista' =>[

                0=>'No view / Parking View',

                1=>'Kitchenette with microwave, coffee maker, minibar',

                2=>'Private bathroom with vanity mirror and hairdryer',

                3=>'High-speed Wi-Fi connection',

            ],            

        ],



        1=>[

            'title' => 'Junior Suite King',

            'price' => [

                'currency' => 'USD',

                'amount' => '459',

                'symbol' => '$'

            ],

            'room_id' => '350213',
            'flor-plan-url' => asset('img/rooms/GRM-junior-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'Up to 3 people',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 king size bed and 1 Murphy beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 603 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Kitchenette',
                    'icon'=>'mini-bar',
                ],
                4=>[
                    'title'=>'Seating Area',
                    'icon'=>'seating-area',
                ],
                5=>[
                    'title'=>'Shower with tub',
                    'icon'=>'bathroom-with-tub',
                ],
                6=>[
                    'title'=>'1 bathroom',
                    'icon'=>'bathroom',
                ],
                7=>[
                    'title'=>'Balcony',
                    'icon'=>'balcony',
                ],
            ],

            'image' => [
                    'title' => 'Junior Suite King',
                    'alt' => 'Junior Suite King',
                    'src' => 'junior-suite-king.jpg',
            ],

            'carrusel' => [
                0 => 'junior-suite-king-a.jpg',
                1 => 'junior-suite-king-b.jpg',
                2 => 'junior-suite-king-c.jpg',
            ],          

            'upgrade-for' => [

                'currency' => 'USD',

                'amount' => '20',

                'symbol' => '$',
            ],

            'lista' =>[

                0=>'Resort View, Ocean View or Beachfront units available',

                1=>'Kitchenette with microwave, coffee maker, minibar',

                2=>'Private bathroom with vanity mirror and hairdryer',

                3=>'High-speed Wi-Fi connection',

            ],            

        ],        

        2=>[

            'title' => 'One Bedroom Master Suite',
            'price' => [
                'currency' => 'USD',
                'amount' => '429',
                'symbol' => '$'
            ],
            'room_id' => '350312',
            'flor-plan-url' => asset('img/rooms/GRM-one-bedroom-master-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'Up to 5 people',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 king size bed and 3 Murphy beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 1,798 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Full Kitchen',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Living and Dining Room',
                    'icon'=>'living-dining',
                ],
                5=>[
                    'title'=>'1.5 bathrooms',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'2 Flat Screen TV',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Terrace',
                    'icon'=>'terrace',
                ],
            ],

            'image' => [
                    'title' => 'One Bedroom Master Suite',
                    'alt' => 'One Bedroom Master Suite',
                    'src' => 'master-suite-one-bedroom.jpg',
            ],

            'carrusel' => [
                0 => 'one-bedroom-master-suite-a.jpg',
                1 => 'one-bedroom-master-suite-b.jpg',
                2 => 'one-bedroom-master-suite-c.jpg',
            ],            

            'upgrade-for' => [

                'currency' => 'USD',

                'amount' => '50',

                'symbol' => '$',
            ],

            'lista' =>[

                0=>'Up to 2 adults & 3 kids under 12 years old',

                1=>'Resort View, Ocean View or Beachfront units available',

                2=>'Fully-equipped kitchen with High-Tech appliances',

                3=>'High-speed Wi-Fi connection',

                4=>'Laundry room with a washing machine',

                5=>'Terrance with Jacuzzi',

            ],            

        ],

        

        3=>[

            'title' => 'One Bedroom Master Suite With Private Pool',

            'price' => [

                'currency' => 'USD',

                'amount' => '479',

                'symbol' => '$'

            ],

            'room_id' => '350313',

            'flor-plan-url' => asset('img/rooms/GRM-one-bedroom-master-suite.jpg'),

            'amenities' => [

                0=>[
                    'title'=>'Up to 5 people',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 king size bed and 3 Murphy beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 1,798 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Full Kitchen',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Living and Dining Room',
                    'icon'=>'living-dining',
                ],
                5=>[
                    'title'=>'1.5 bathrooms',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'2 Flat Screen TV',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Terrace',
                    'icon'=>'terrace',
                ],
            ],

            'image' => [

                    'title' => 'One Bedroom Master Suite With Private Pool',

                    'alt' => 'One Bedroom Master Suite With Private Pool',

                    'src' => '',

            ],

            'carrusel' => [
                0 => 'one-bedroom-master-suite-with-private-pool-a.jpg',
                1 => 'one-bedroom-master-suite-with-private-pool-b.jpg',
                2 => 'one-bedroom-master-suite-with-private-pool-c.jpg',
            ],             

            'upgrade-for' => [

                'currency' => 'USD',

                'amount' => '150',

                'symbol' => '$',
            ],

            'lista' =>[

                0=>'Up to 2 adults & 3 kids under 12 years old',

                1=>'Resort View, Ocean View or Beachfront units available',

                2=>'Fully-equipped kitchen with High-Tech appliances',

                3=>'High-speed Wi-Fi connection',

                4=>'Laundry room with a washing machine',

                5=>'Terrance with Jacuzzi and Private Pool',

            ],            

        ],



        4=>[
            'title' => 'Two Bedroom Master Suite',
            'price' => [
                'currency' => 'USD',
                'amount' => '629',
                'symbol' => '$'
            ],
            'room_id' => '350318',
            'flor-plan-url' => asset('img/rooms/GRM-two-bedroom-master-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'Up to 8 people',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 king size bed and 4 Murphy beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 2,401 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Full Kitchen & Kitchenette',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Living and Dining Room',
                    'icon'=>'living-dining',
                ],
                5=>[
                    'title'=>'2.5 bathrooms',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'3 Flat Screen TV',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Terrace',
                    'icon'=>'terrace',
                ],
                8=>[
                    'title'=>'Balcony',
                    'icon'=>'balcony',
                ],
            ],

            'image' => [

                    'title' => 'Two Bedroom Master Suite',

                    'alt' => 'Two Bedroom Master Suite',

                    'src' => '',

            ],

            'carrusel' => [
                0 => 'two-bedroom-master-suite-a.jpg',
                1 => 'two-bedroom-master-suite-b.jpg',
                2 => 'two-bedroom-master-suite-c.jpg',
            ],             

            'upgrade-for' => [

                'currency' => 'USD',

                'amount' => '250',

                'symbol' => '$',
            ],

            'lista' =>[

                0=>'Up to 4 adults & 4 kids under 12 years old',

                1=>'Resort View, Ocean View or Beachfront units available',

                2=>'Fully-equipped kitchen with High-Tech appliances',

                3=>'High-speed Wi-Fi connection',

                4=>'Laundry room with a washing machine',

                5=>'Terrance with Jacuzzi',

            ],            

        ],



        5=>[
            'title' => 'Three Bedroom Master Suite',
            'price' => [
                'currency' => 'USD',
                'amount' => '879',
                'symbol' => '$'
            ],

            'room_id' => '350324',
            'flor-plan-url' => asset('img/rooms/GRM-three-bedroom-master-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'Up to 10 people',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 king size bed, 4 Murphy beds, 2 full beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 3,025 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Full Kitchen & Kitchenette',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Living and Dining Room',
                    'icon'=>'living-dining',
                ],
                5=>[
                    'title'=>'3.5 bathrooms',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'4 Flat Screen TV',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Terrace',
                    'icon'=>'terrace',
                ],
                8=>[
                    'title'=>'Balcony',
                    'icon'=>'balcony',
                ],
            ],

            'image' => [

                    'title' => 'Three Bedroom Master Suite',
                    'alt' => 'Three Bedroom Master Suite',
                    'src' => '',

            ],

            'carrusel' => [
                0 => 'three-bedroom-master-suite-a.jpg',
                1 => 'three-bedroom-master-suite-b.jpg',
                2 => 'three-bedroom-master-suite-c.jpg',
            ],             

            'upgrade-for' => [

                'currency' => 'USD',

                'amount' => '250',

                'symbol' => '$',
            ],

            'lista' =>[

                0=>'Up to 5 adults & 5 kids under 12 years old',

                1=>'Resort View, Ocean View or Beachfront units available',

                2=>'Fully-equipped kitchen with High-Tech appliances',

                3=>'High-speed Wi-Fi connection',

                4=>'Laundry room with a washing machine',

                5=>'Terrance with Jacuzzi',

            ],            

        ],



        6=>[
            'title' => 'Four Bedroom Presidential Suite Penthouse',
            'price' => [
                'currency' => 'USD',
                'amount' => '1500',
                'symbol' => '$'
            ],
            'room_id' => '350330',
            'flor-plan-url' => asset('img/rooms/GRM-presidential-ph-four-bedroom-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'Up to 13 people',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'3 king size bed, 5 Murphy beds, 2 full beds',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Area: 8,762 ft2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Full Kitchen & Kitchenette',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Living and Dining Room',
                    'icon'=>'living-dining',
                ],
                5=>[
                    'title'=>'4.5 bathrooms',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'5 Flat Screen TV',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Terrace',
                    'icon'=>'terrace',
                ],
                8=>[
                    'title'=>'Balcony',
                    'icon'=>'balcony',
                ],
            ],

            'image' => [
                    'title' => 'Four Bedroom Presidential Suite Penthouse',
                    'alt' => 'Four Bedroom Presidential Suite Penthouse',
                    'src' => '',
            ],

            'carrusel' => [
                0 => 'four-bedroom-presidential-suite-penthouse-a.jpg',
                1 => 'four-bedroom-presidential-suite-penthouse-b.jpg',
                2 => 'four-bedroom-presidential-suite-penthouse-c.jpg',
            ],             

            'upgrade-for' => [

                'currency' => '',

                'amount' => '',

                'symbol' => '',
            ],

            'lista' =>[

                0=>'Up to 7 adults & 7 kids under 12 years old',

                1=>'Ocean View',

                2=>'Fully-equipped kitchen with High-Tech appliances',

                3=>'High-speed Wi-Fi connection',

                4=>'Laundry room with a washing machine',

                5=>'Terrance with BBQ Grill, Private Pool and Jacuzzi',
            ],            
        ],
    ],
];