<?php

return [
    'seo'=>
        [
            'title'=>'Habitaciones en Grand Residences | Royal Reservations',
            'metadescription'=>'Grand Residences Riviera Cancun Resort ofrece amplias y bellamente decoradas habitaciones con impresionantes vistas al Mar Caribe, muebles hechos a mano, amenidades de baño Bvlgari y mucho más.',
        ], 
    'title' => 'Habitaciones en Grand Residences',
    'description' => 'Encuentra un exclusivo espacio de tranquilidad para ti y tu familia en GRAND RESIDENCES RIVIERA CANCUN RESORT.
Disfruta de sus espaciosas y lujosas habitaciones y vive vacaciones de ensueño en la Riviera Maya.',
    'url_all_rooms'=>'/es/hoteles-de-playa/grand-residences-riviera-cancun/hoteles-de-lujo-en-riviera-maya-con-habitaciones-familiares',

        //descripción landing interna
    'title_interna_rooms' => 'Habitaciones De Lujo En Grand Residences',
    //descripción landing interna
    'description_interna_rooms' => '

<p>
<b>Con un espacio desde 193 m2 hasta 2670 m2</b>, sus 201 habitaciones cuentan con amplias terrazas privadas, Wifi de alta velocidad gratuito, aparatos electrónicos de última generación, televisión de pantalla plana de 47”, jacuzzi, muebles hechos a mano, ropa de cama de marca y amenidades de baño Bvlgari® que harán de tu estancia una experiencia.
</p>
<p>
NOTA: Algunas suites Premium, como el Penthouse o las tipo Swim-out, no están disponibles para reservarse en nuestro sitio web, sin embargo, puedes comunicarte al centro de reservaciones para solicitar más información o una cotización. 
</p>',

    'rooms' => [
        0=>[
            'title' => 'Junior Suite con Jacuzzi',
            'price' => [
                'currency' => 'USD',
                'amount' => '349',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/GRM-junior-suite-with-jacuzzi.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'2 adultos y 2 niños',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 camas matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 193 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocineta',
                    'icon'=>'kitchenette',
                ],
                4=>[
                    'title'=>'1 baño',
                    'icon'=>'bathroom',
                ],
                5=>[
                    'title'=>'Tina y Regadera',
                    'icon'=>'bathroom-with-tub',
                ],
                6=>[
                    'title'=>'TV de 47” ',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Balcón con Jacuzzi',
                    'icon'=>'balcony',
                ],        

            ],
            'image' => [
                    'title' => 'Junior Suite con Jacuzzi',
                    'alt' => 'Junior Suite con Jacuzzi',
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
                0=>'Cocineta equipada',
                1=>'Baño privado con espejo y secadora para cabello',
                2=>'Conexión de alta velocidad a internet Wi-Fi',
            ],            
        ],

        1=>[
            'title' => 'Junior Suite King',
            'price' => [
                'currency' => 'USD',
                'amount' => '459',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/GRM-junior-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'3 personas',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 tamaño King y 1 tipo Murphy ',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 183 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocineta',
                    'icon'=>'kitchenette',
                ],
                4=>[
                    'title'=>'Área de descanso',
                    'icon'=>'',
                ],
                5=>[
                    'title'=>'Tina y Regadera',
                    'icon'=>'bathroom-with-tub',
                ],
                6=>[
                    'title'=>'1 baño',
                    'icon'=>'bathroom',
                ],
                7=>[
                    'title'=>'Balcón',
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
                0=>'Disponible con vista al Resort, al Mar o Frente al Mar',
                1=>'Cocineta equipada',
                2=>'Baño privado con espejo y secadora para cabello',
                3=>'Conexión de alta velocidad a internet Wi-Fi',
            ],            
        ],        
        2=>[
            'title' => 'Master Suite De Una Recámara',
            'price' => [
                'currency' => 'USD',
                'amount' => '429',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/GRM-one-bedroom-master-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'5 personas',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 tamaño King y 3 tipo Murphy ',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 548 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocina completa',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Sala y Comedor',
                    'icon'=>'living-dining',
                ],
                5=>[
                    'title'=>'1.5 Baños',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'2 televisiones de pantalla plana',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Terraza ',
                    'icon'=>'balcony',
                ],
            ],
            'image' => [
                    'title' => 'Master Suite De Una Recámara',
                    'alt' => 'Master Suite De Una Recámara',
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
                0=>'Disponible con vista al Resort, al Mar o Frente al Mar',
                1=>'Cocina equipada con electrónicos de primera',
                2=>'Cuarto de lavado y lavadora',
                
            ],            
        ],
        
        3=>[
            'title' => 'Master Suite De Una Recámara Con Alberca Privada',
            'price' => [
                'currency' => 'USD',
                'amount' => '479',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/GRM-one-bedroom-master-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'5 personas',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 cama king size y 3 camas tipo Murphy',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 548 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocina completa',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Sala y comedor',
                    'icon'=>'living-dining',
                ],
                5=>[
                    'title'=>'1.5 Baños',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'2 televisiones de pantalla plana',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Terraza ',
                    'icon'=>'balcony',
                ],
            ],
            'image' => [
                    'title' => 'Master Suite De Una Recámara Con Alberca Privada',
                    'alt' => 'Master Suite De Una Recámara Con Alberca Privada',
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
                0=>'Disponible con vista al Resort, al Mar o Frente al Mar',
                1=>'Cocina completamente equipada',
                2=>'Cuarto de lavado y lavadora',
                3=>'Terraza con Jacuzzi y alberca privada',
            ],            
        ],

        4=>[
            'title' => 'Master Suite De Dos Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '629',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/GRM-two-bedroom-master-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'8 personas',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 tamaño King, 4 camas tipo Murphy ',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 732 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocina completa y cocineta',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'2.5 Baños',
                    'icon'=>'bathroom',
                ],
                5=>[
                    'title'=>'3 televisiones de pantalla plana',
                    'icon'=>'tv',
                ],
                6=>[
                    'title'=>'Terraza y Balcón',
                    'icon'=>'terrace',
                ],
                7=>[
                    'title'=>'Balcón',
                    'icon'=>'balcony',
                ],

                
            ],
            'image' => [
                    'title' => 'Master Suite De Dos Recámaras',
                    'alt' => 'Master Suite De Dos Recámaras',
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
                0=>'Disponible con vista al Resort, al Mar o Frente al Mar',
                1=>'Cocina completamente equipada',
                2=>'Conexión de alta velocidad a internet Wi-Fi',
                3=>'Cuarto de lavado y lavadora',
            ],            
        ],

        5=>[
            'title' => 'Master Suite De Tres Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '879',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/GRM-three-bedroom-master-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'10 personas',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 tamaño King y 4 tipo Murphy, 2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 922 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocina completa y cocineta',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Sala y Comedor',
                    'icon'=>'living-dining',
                ],
                5=>[
                    'title'=>'3.5 Baños',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'4 televisiones de pantalla plana',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Terraza con Jacuzzi',
                    'icon'=>'terrace',
                ],        

            ],
            'image' => [
                    'title' => 'Master Suite De Tres Recámaras',
                    'alt' => 'Master Suite De Tres Recámaras',
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
                0=>'Disponible con vista al Resort, al Mar o Frente al Mar',
                1=>'Cocina completamente equipada',
                2=>'Cuarto de lavado y lavadora',
                3=>'Terraza con Jacuzzi',
            ],            
        ],

        6=>[
            'title' => 'Presidential Penthouse De Cuatro Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '1500',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/GRM-presidential-ph-four-bedroom-suite.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'13 personas',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'3 tamaño King, 5 tipo Murphy, 2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 2670 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocina completa y cocineta',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Sala y Comedor',
                    'icon'=>'living-dining',
                ],
                5=>[
                    'title'=>'4.5 Baños',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'5 televisiones de pantalla plana',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Balcón ',
                    'icon'=>'balcony',
                ],
                8=>[
                    'title'=>'Terraza',
                    'icon'=>'terrace',
                ],

            ],
            'image' => [
                    'title' => 'Presidential Penthouse De Cuatro Recámaras',
                    'alt' => 'Presidential Penthouse De Cuatro Recámaras',
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
                0=>'Vista al mar',
                1=>'Cocina completamente equipada',
                2=>'Cuarto de lavado y lavadora',
                3=>'Terraza con Parrilla BBQ, Alberca Privada y Jacuzzi',
            ],          
        ],
    ],
];