<?php

return [
    'seo'=>
        [
            'title'=>'Habitaciones en The Royal Haciendas | Royal Reservations',
            'metadescription'=>'Disfruta de todos los beneficios en The Royal Haciendas, ya que todas las habitaciones están bellamente decoradas, y además  brindan amenidades como Wi-Fi de cortesía, teléfono, televisión de pantalla plana, DVD, horno de microondas, plancha y más.',
        ], 
    'title' => 'Habitaciones En The Royal Haciendas',
    'description' => 'THE ROYAL HACIENDAS ALL SUITES RESORTS & SPA dispone de una gran variedad de suites que se adaptan a la perfección a tus necesidades. 

Desde una maravillosa Deluxe Junior Suites hasta una espaciosa Suite Deluxe De Dos Recámaras. ¡Elige tu favorita y sé testigo de cómo el azul del cielo se funde con el mar!',
    'url_all_rooms'=>'/es/hoteles-de-playa/the-royal-haciendas/hoteles-en-playa-del-carmen-con-habitaciones-familiares',

    //descripción landing interna
    'title_interna_rooms' => 'Habitaciones De Lujo en The Royal Haciendas',
    //descripción landing interna
    'description_interna_rooms' => '
<p>
Con un espacio desde 42 m2 hasta 150 m2  las <b>habitaciones espaciosas</b> que ofrece THE ROYAL HACIENDAS ALL SUITES RESORTS & SPA te invitan a relajarte y descansar después de un día lleno de actividades y diversión.
</p>
<p>
Deja que sus 252 habitaciones con balcón privado frente al mar te enamoren y dedícate a gozar de sus servicios ilimitados y útiles amenidades premium que harán de tu estancia una experiencia placentera

</p>',    


    'rooms' => [
        0=>[
            'title' => 'Deluxe Junior Suites',
            'price' => [
                'currency' => 'USD',
                'amount' => '229',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RH-deluxe-junior-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'2 adultos y 2 niños',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 42 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocineta',
                    'icon'=>'kitchenette',
                ],
                4=>[
                    'title'=>'1 baño completo',
                    'icon'=>'bathroom',
                ],
                5=>[
                    'title'=>'Regadera',
                    'icon'=>'shower',
                ],
                6=>[
                    'title'=>'Televisión de pantalla plana',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Balcón',
                    'icon'=>'balcony',
                ],        
                
            ],
            'image' => [
                    'title' => 'Deluxe Junior Suites',
                    'alt' => 'Deluxe Junior Suites',
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
                0=>'Unidades con vista al Mar o Frente al Mar.',
                1=>'Cocineta con horno de microondas, cafetera y minibar',
                2=>'Baño completo con amenidades',
                3=>'Conexión de alta velocidad a internet Wi-Fi',
            ],             
        ],

        1=>[
            'title' => 'Suite Deluxe de Una Recámara',
            'price' => [
                'currency' => 'USD',
                'amount' => '289',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RH-deluxe-one-bedroom-suite-ov.jpg'),
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
                    'title'=>'Área: 82 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'1 baño completo',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Cocina totalmente equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'Caja de seguridad',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'Sala y Comedor',
                    'icon'=>'living-dining',
                ],
                7=>[
                    'title'=>'Televisión de pantalla plana',
                    'icon'=>'tv',
                ],        
            ],
            'image' => [
                    'title' => 'Suite Deluxe de Una Recámara',
                    'alt' => 'Suite Deluxe de Una Recámara',
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
                0=>'Terraza privada con Jacuzzi',
                1=>'Unidades con vista al Mar o Frente al Mar ',
                2=>'Baño completo con amenidades',
                3=>'Conexión de alta velocidad a internet Wi-Fi',
            ],            
        ],        
        2=>[
            'title' => 'Suite Deluxe de Dos Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '399',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/RH-deluxe-two-bedroom-master-suite-ov.jpg'),
            'amenities' => [
                0=>[
                    'title'=>'6 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 cama king size, 2 camas tipo Murphy, 2 camas matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área:  150 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 baños completos',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Cocina totalmente equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'Caja de seguridad',
                    'icon'=>'in-room-safe',
                ],
                6=>[
                    'title'=>'2 balcones',
                    'icon'=>'balcony',
                ],
                7=>[
                    'title'=>'Televisión de pantalla plana',
                    'icon'=>'tv',
                ],
                
            ],
            'image' => [
                    'title' => 'Suite Deluxe de Dos Recámaras',
                    'alt' => 'Suite Deluxe de Dos Recámaras',
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
                0=>'Terraza Privada con Jacuzzi',
                1=>'Suites con vista al Mar o Frente al Mar',
                2=>'Baño completo con amenidades',
                3=>'Amplios espacios en sala y comedor',
            ],            
        ],
    ],
];