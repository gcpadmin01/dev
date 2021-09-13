<?php
return [
    'seo'=>[
        'title'=>'Best Beach Destinations in the Caribbean | Royal Reservations',
        'metadescription'=>'In Royal Reservations we have the Best Beach Destinations and the Best Beach Resorts for a perfect family vacations to the Caribbean. You choose the beach, the resort, the meal plan, etc. Book now your next vacations and save!',
    ],
    'home-title' => 'Royal Reservations has the best beach resorts',
    'title' => 'Beach Destinations', # Titulo de la sección y la pagina
    # Contenido de la pagina
    'content' => '<p>At Royal Reservations we have the two main ingredients for the best beach vacations ever: the best resorts, and the most amazing beach destinations. Live a unique experience in any of our Mexican Caribbean and the Caribbean Island family and luxury resorts, boasting All Inclusive, Accommodation only and Breakfast Included rate plans.</p>',
    'zones' => [
        0 => [
            'title' => 'Mexican Caribbean', # Titulo de la zona
            'description' => 'The Mexican Caribbean, a paradise on earth, is eager to welcome you with the warmest of services, at its modern airport that receives near 22 million travelers a year. Visit the best beaches, contemplate our amazing blue sea and discover the greatness of the Maya people through its monumental archaeological sites. A place full of adventures you simply cannot miss.', # Descripción de la zona
            'destinations' => [ # Destinos de la zona
                0 => __('destinations/cancun'),
                1 => __('destinations/playa-del-carmen'),
                3 => __('destinations/riviera-maya'),
                2 => __('destinations/puerto-morelos'),
            ]
        ],

        1 => [
            'title' => 'Caribbean Islands', # Titulo de la zona
            # Descripción de la zona
            'description' => 'When traveling to any of our Caribbean Islands destinations, Curacao, St. Maarten and Punta Cana, you will be able to visit a myriad of different places thanks to its proximity. The European style of the islands blends perfectly with the Caribbean ambiance. There, you will enjoy a varied gastronomy offer, duty free shops, incredible activities and more, for the perfect tropical vacations.',
            'destinations' => [ # Destinos de la zona
                2 => __('destinations/st-maarten'),
                1 => __('destinations/curacao'),
//                0 => __('destinations/punta-cana'),
            ]
        ]
    ]
];