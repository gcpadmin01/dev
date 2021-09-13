<?php

return [
    'seo'=>
        [
            'title'=>'Cuartos The Royal Sea Aquarium Resort | Royal Reservations',
            'metadescription'=>'The Royal Sea Aquarium Resort ofrece opciones de alojamiento en Curacao con una hermosa vista: las Junior Suites para dos personas; las Suites de Una Recámara para hasta cuatro personas; y la Master Suite de Dos Recámaras para hasta seis personas.',
        ],
    'title' => 'Habitaciones En The Royal Sea Aquarium Resort',
    'description' => 'Este magnífico resort con playa privada, ofrece tres increíbles opciones de cómodo y relajante alojamiento, algunas con estupendas vistas del delfinario, mientras que otras te brindarán insuperables vistas de las aguas turquesa del Mar Caribe que te quitarán el aliento.',
    'url_all_rooms'=>'/es/hoteles-de-playa/the-royal-sea-aquarium/habitaciones-familiares-en-curacao',

    //descripción landing interna
    'title_interna_rooms' => 'Suites Y Villas En The Royal Sea Aquarium',
    //descripción landing interna
    'description_interna_rooms' => '<p><strong>The Royal Sea Aquarium Resort</strong> ofrece tres magn&iacute;ficas opciones de alojamiento en Curacao con una hermosa vista al delfinario: las Junior Suites con Vista al Mar hasta para dos personas; nuestras Suites de Una Rec&aacute;mara con Vista al Mar, hasta para cuatro personas; y finalmente nuestra Master Suite de Dos Rec&aacute;maras con Vista al Mar, hasta para seis personas. </p>
    <p>Disfruta de las inmejorables amenidades exclusivas que encontrar&aacute;s durante tu estancia, tales como acceso inal&aacute;mbrico a Internet, TV v&iacute;a sat&eacute;lite y DVD, aire acondicionado central, tel&eacute;fono, caja de seguridad y servicio de limpieza una vez por semana. &nbsp;En nuestras suites de una y dos rec&aacute;maras, la cocina est&aacute; equipada con electrodom&eacute;sticos como refrigerador, estufa con horno, lavavajillas, cafetera, tetera y microondas; mientras que nuestras Junior Suites cuentan con una cocineta con electrodom&eacute;sticos como microondas, cafetera, tostadora y minibar. </p>
    <p>Todas con la comodidad y relajaci&oacute;n que t&uacute; y tu familia se merecen para disfrutar a&uacute;n m&aacute;s de sus vacaciones en Canc&uacute;n.</p>',

    'rooms' => [
        0=>[
            'title' => 'Junior Suite Doble Con Vista Al Mar',
            'price' => [
                'currency' => 'USD',
                'amount' => '119',
                'symbol' => '$'
            ],
            'flor-plan-url' => '',            
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
                    'title'=>'Área: 48 m2',
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
                    'title'=>'1 Baño',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'Tina y regadera',
                    'icon'=>'bathroom-with-tub',
                ],
                7=>[
                    'title'=>'TV de pantalla plana',
                    'icon'=>'tv',
                ],        
                
            ],
            'image' => [
                    'title' => 'Junior Suite Doble Con Vista Al Mar',
                    'alt' => 'Junior Suite Doble Con Vista Al Mar',
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
                0=>'Vista al Mar',
                1=>'Cocineta con microondas, cafetera y minibar',
                2=>'Baño completo con secadora',
                3=>'Wi-Fi de alta velocidad',
            ],

        ],

        1=>[
            'title' => 'Suite De Una Recámara Vista Al Mar',
            'price' => [
                'currency' => 'USD',
                'amount' => '179',
                'symbol' => '$'
            ],
            'flor-plan-url' => '',            
            'amenities' => [
                0=>[
                    'title'=>'4 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 King size, 2 tipo Murphy',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área: 98 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'1 Baño',
                    'icon'=>'bathroom',
                ],
                4=>[
                    'title'=>'Cocina equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'1 Terraza',
                    'icon'=>'terrace',
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
                    'title' => 'Suite De Una Recámara Vista Al Mar',
                    'alt' => 'Suite De Una Recámara Vista Al Mar',
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
                0=>'Vista al Mar o Frente a la Playa',
                1=>'Cocina equipada con electrodomésticos',
                2=>'Baño completo con tina',
                3=>'Acceso a Wi-Fi de alta velocidad',
            ],            
        ],        
        2=>[
            'title' => 'Master Suite Dos cuartos Vista Al Mar',
            'price' => [
                'currency' => 'USD',
                'amount' => '279',
                'symbol' => '$'
            ],
            'flor-plan-url' => '',            
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
                    'title'=>'Área: 140 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'2 Baños',
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
                    'title' => 'Master Suite Dos cuartos Vista Al Mar',
                    'alt' => 'Master Suite Dos cuartos Vista Al Mar',
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
                0=>'Vista al Mar',
                1=>'Cocina totalmente equipada',
                2=>'Sala y Comedor amplios',
                3=>'Balcón privado con sillas y mesa',
            ], 
        ],
    ],
];