<?php

return [
    'seo'=>
    [
        'title'=>'Habitaciones en The Royal Cancún Hotel | Royal Reservations',
        'metadescription'=>'The Royal Cancun Resort presume cómodas suites con cocina totalmente equipada, refrigerador, sala, comedor, 2 recámaras, wi-fi sin costo, y mucho más.',
    ], 
    'title' => 'Habitaciones En The Royal Cancun',
    'description' => 'Con 201 villas totalmente equipadas, The Royal Cancun All Suites Resort ofrece hospedaje en Cancún con suites de dos recámaras con capacidad hasta para 6 personas, con cocina, sala, comedor, camas tipo Murphy, terraza privada, además de amenidades como internet Wi-Fi de cortesía, televisión, DVD, teléfono, refrigerador, horno de microondas, secadora de cabello y más.',
    'url_all_rooms'=>'/es/hoteles-de-playa/the-royal-cancun/hoteles-en-cancun-con-habitaciones-familiares',

    //descripción landing interna
    'title_interna_rooms' => 'Cómodas Suites Familiares',
    //descripción landing interna
    'description_interna_rooms' => '<p>Nuestro<strong> resort de playa The Royal Cancun All Suites</strong>, presume c&oacute;modas suites totalmente equipadas con dos habitaciones y una m&aacute;xima capacidad de 6 personas, ofreciendo, por lo tanto, espacios ideales para familias. Adem&aacute;s, las suites cuentan con cocina totalmente equipada, refrigerador, horno de microondas, sala y comedor, amplios ba&ntilde;os, y rec&aacute;maras separadas, cada una con c&oacute;modas almohadas y finas ropa de cama, con opci&oacute;n de terraza privada, adem&aacute;s de amenidades como internet Wi-Fi sin costo, televisi&oacute;n y Blu-Ray, tel&eacute;fono, secadora para cabello y mucho m&aacute;s. No vas a extra&ntilde;ar tu casa mientras te encuentres en el para&iacute;so.</p>
    <p>Las suites en <strong>The Royal Cancun All Suites Resort</strong> se convertir&aacute;n en tu propio espacio de paz para relajarte y disfrutar cada segundo con tu familia y amigos. &nbsp;&iexcl;Vive las mejores vacaciones en <strong>The Royal Cancun All Suites Resort</strong>!</p>',    

    'rooms' => [
        0=>[
            'title' => 'Suite de Dos Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '329',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/TRC-two-bedroom-one-bathroom-suite-bf.jpg'),           
            'amenities' => [
                0=>[
                    'title'=>'5 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 tamaño King, 1 tipo Murphy, 2 camas individuales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área:  283 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Cocina totalmente equipada',
                    'icon'=>'full-kitchen',
                ],
                4=>[
                    'title'=>'Dos recámaras separadas',
                    'icon'=>'',
                ],
                5=>[
                    'title'=>'Baño completo',
                    'icon'=>'bathroom',
                ],
                6=>[
                    'title'=>'Televisión de pantalla plana',
                    'icon'=>'tv',
                ],
                7=>[
                    'title'=>'Internet Wi-Fi de alta velocidad',
                    'icon'=>'wi-fi',
                ],        

            ],
            'image' => [
                    'title' => 'Suite de Dos Recámaras',
                    'alt' => 'Suite de Dos Recámaras',
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
                0=>'Unidades con vista al Mar o Frente al Mar.',
                1=>'Cocina totalmente equipada.',
                2=>'Amplios espacios de sala y comedor',
                3=>'Balcón privado con sillas y mesa',
            ],            
        ],

        1=>[
            'title' => 'Master Suite de Dos Recámaras',
            'price' => [
                'currency' => 'USD',
                'amount' => '369',
                'symbol' => '$'
            ],
            'flor-plan-url' => asset('img/rooms/TRC-two-bedroom-two-bathroom-suite-bf.jpg'),            
            'amenities' => [
                0=>[
                    'title'=>'6 adultos',
                    'icon'=>'capacity',
                ],
                1=>[
                    'title'=>'1 tamaño King, 1  tipo Murphy, 2 matrimoniales',
                    'icon'=>'bedding',
                ],
                2=>[
                    'title'=>'Área:  444 m2',
                    'icon'=>'area',
                ],
                3=>[
                    'title'=>'Suite de dos recámaras',
                    'icon'=>'',
                ],
                4=>[
                    'title'=>'Cocina totalmente equipada',
                    'icon'=>'full-kitchen',
                ],
                5=>[
                    'title'=>'Dos recámaras separadas',
                    'icon'=>'',
                ],
                6=>[
                    'title'=>'Dos baños completos',
                    'icon'=>'shower',
                ],
                7=>[
                    'title'=>'Internet Wi-Fi de alta velocidad',
                    'icon'=>'wi-fi',
                ],        
                
            ],
            'image' => [
                    'title' => 'Master Suite de Dos Recámaras',
                    'alt' => 'Master Suite de Dos Recámaras',
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
                0=>'Unidades con vista al Mar o Frente al Mar.',
                1=>'Cocina totalmente equipada.',
                2=>'Amplios espacios de sala y comedor',
                3=>'Balcón privado con sillas y mesa',
            ],            
        ],
    ],
];