<?php

return [
    'seo'=>
        [
            'title'=>'Habitaciones en The Royal Caribbean Resort | Royal Reservations',
            'metadescription'=>'Este hotel en Cancún cuenta con hermosas habitaciones familiares para que disfrutes tus vacaciones en el Caribe. Déjate consentir por la comodidad y el servicio de The Royal Caribbean Resort.',
        ], 
    'title' => 'Habitaciones en The Royal Caribbean',
    'description' => '
En THE ROYAL CANCUN ALL SUITES RESORTS encontrarás espacios únicos y amplios preparados para relajarte y disfrutar cada segundo con tu familia y amigos. 
Disfruta de sus cómodas suites de dos habitaciones totalmente equipadas, con una capacidad máxima de 6 personas. ¡Vive las mejores vacaciones en Cancún!

    ',
    'url_all_rooms'=>'/es/hoteles-de-playa/the-royal-caribbean/hoteles-en-cancun-con-habitaciones-familiares',

    //descripción landing interna
    'title_interna_rooms' => 'Habitaciones y Suites en The Royal Caribbean',
    //descripción landing interna
    'description_interna_rooms' => '
<p>
Hospédate en una de las 201 <b>espaciosas villas</b> de THE ROYAL CANCUN ALL SUITES RESORTS, con una extensión desde 283m2 hasta 444m2  idóneas para familias o parejas.
</p>
<p>
Sus <b>habitaciones perfectamente equipadas</b> cuentan con Wifi gratuito, TV LCD y Blu-Ray, camas tipo murphy, cocina equipada, sala y comedor, amplios baños y recámaras separadas con finas ropa de cama, entre muchas otras comodidades, pensadas para hacer de tu estancia una experiencia única.
</p>',    

    'rooms' => [
        0=>[
            'title' => 'Habitaciones Dobles',
            'price' => [
                'currency' => 'USD',
                'amount' => '99',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RC-standard-room-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'2 adultos y 1 niño',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 39 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocineta',
                    'icon'=>'kitchenette',
                ],
                4=>[
                    'title'=>'Balcón',
                    'icon'=>'balcony',
                ],
                5=>[
                    'title'=>'1 Baño completo',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'Tina y regadera',
                    'icon'=>'bathroom-with-tub',
                ],
                7=>[
                    'title'=>' TV de pantalla plana',
                    'icon'=>'tv',
                ],        
                
            ],
            'image' => [
                    'title' => 'Habitaciones Dobles',
                    'alt' => 'Habitaciones Dobles',
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
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocineta con microondas, cafetera, minibar',
                2=>'Baño completo con secadora para cabello',
                3=>'Acceso a Wi-Fi de alta velocidad',
            ],            
        ],

        1=>[
            'title' => 'Suites de Una Recámara',
            'price' => [
                'currency' => 'USD',
                'amount' => '149',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RC-one-bedroom-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'4 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 tamaño King, 2 tipo Murphy',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 74 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'1 Baño completo',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Cocina equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'1 Terraza',
                    'icon'=>'balcony',
                ],
                6=>[
                    'title'=>'Sala y Comedor',
                    'icon'=>'living-dining',
                ],
                7=>[
                    'title'=>'TV de pantalla plana',
                    'icon'=>'tv',
                ],        
                
            ],
            'image' => [
                    'title' => 'Suites de Una Recámara',
                    'alt' => 'Suites de Una Recámara',
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
            ],
            'lista' =>[
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocina equipada con electrodomésticos',
                2=>'Baño completo con secadora para cabello',
                3=>'Acceso a Wi-Fi de alta velocidad',
            ],
        ],        
        2=>[
            'title' => 'Master Suites De Dos Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '216',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RC-two-bedroom-master-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'6 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 King size, 2 tipo Murphy, 2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 138 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 Baños completos',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Cocina equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'Caja de seguridad',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'1 Balcón',
                    'icon'=>'balcony',
                ],
                7=>[
                    'title'=>'TV de pantalla plana',
                    'icon'=>'tv',
                ],
                8=>[
                    'title'=>'1 Terraza',
                    'icon'=>'terrace',
                ],        
                
            ],
            'image' => [
                    'title' => 'Master Suites De Dos Recámaras',
                    'alt' => 'Master Suites De Dos Recámaras',
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
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocina totalmente equipada',
                2=>'Sala y Comedor amplios',
                3=>'Balcón privado con sillas y mesa',
            ],            
        ],
    ],
];