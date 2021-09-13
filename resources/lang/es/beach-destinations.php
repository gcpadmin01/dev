<?php

return [
    'seo'=>[
        'title'=>'Los Mejores Destinos de Playa | Royal Reservations',
        'metadescription'=>'En Royal Reservations tenemos los mejores destinos de playa y los hoteles mejores hoteles de playa para las vacaciones en familia que tanto has soñado en el Caribe. ¡Reserva ahora y ahorra!',
    ],
    'home-title' => 'Royal Reservations tiene los mejores hoteles de playa',
    'title' => 'DESTINOS DE PLAYA', # Titulo de la sección y la pagina
    # Contenido de la pagina
    'content' => '<p>En Royal Reservations tenemos los dos ingredientes principales para las vacaciones en la playa más increíbles: los mejores resorts y los destinos de playa más increíbles. Vive una experiencia única en cualquiera de nuestras familias y resorts de lujo en la isla caribeña y el Caribe Mexicano, con planes de tarifas Todo Incluido, Solo Alojamiento y Desayuno Incluido.</p>',
    'zones' => [
        0 => [
            'title' => 'Caribe Mexicano', # Titulo de la zona
            'description' => 'El Caribe mexicano, un paraíso en tierra, está ansioso por darte la bienvenida con los servicios más cálidos, desde la llegada a su moderno aeropuerto que recibe cerca de 22 millones de viajeros al año. Visita las mejores playas, contempla nuestro incre&iacute;ble mar azul y descubre la grandeza de los mayas a trav&eacute;s de sus monumentales sitios arqueol&oacute;gicos. Un lugar lleno de aventuras que simplemente no puedes perderte.', # Descripción de la zona
            'destinations' => [ # Destinos de la zona
                0 => __('destinations/cancun'),
                1 => __('destinations/playa-del-carmen'),
                2 => __('destinations/puerto-morelos'),
                3 => __('destinations/riviera-maya')
            ]
        ],
        1 => [
            'title' => 'Islas del Caribe', # Titulo de la zona
            # Descripción de la zona
            'description' => 'Cuando viajes a cualquiera de nuestros destinos en las islas del Caribe, ya sea Curacao, St. Maarten o Punta Cana, podrás visitar una infinidad de lugares diferentes gracias a su cercanía. El estilo europeo de las islas combina perfectamente con el ambiente caribeño. Allí, disfrutarás de una variada oferta gastronómica, tiendas duty free, actividades increíbles y más; para pasar unas excelentes vacaciones en estas playas del caribe.',
            'destinations' => [ # Destinos de la zona
//                0 => __('destinations/punta-cana'),
                1 => __('destinations/curacao'),
                2 => __('destinations/st-maarten')
            ]
        ]
    ]
];