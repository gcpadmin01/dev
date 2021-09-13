<?php

return [

    'seo'=>[
        'title'=>'Best Beach Resorts for Family Vacations | Royal Reservations',
        'metadescription'=>'Royal Reservations boasts an extended variety of Caribbean Resorts for the perfect family vacations in white sand beaches in Mexico, Dominican Republic, St. Maarten & Curacao Islands. Let us make your dreams come true!',
    ],

    'title' => 'Beach Resorts', # Titulo de la sección y la pagina

    'subtitle' => 'Family resorts in the caribbean', # Titulo de la sección y la pagina

    # Contenido de la pagina

    'description' => "<p class='text-justify'> 

    <strong>Royal Reservations</strong>&nbsp;features an extend array of Resorts in the Caribbean, boasting the finest personal service taking care of every need, various restaurants serving your favorite culinary cravings, ample and beautiful suites and villas for all family members with multiple room categories with complete privacy at any moment, and unforgettable days by the Caribbean sea to cherish forever.</p>",

    'subtitle2' => 'PENDIENTE - Family resorts in the caribbean description2', # Titulo de la sección y la pagina

    # Contenido de la pagina

    'description2' => "<p class='text-justify'> 

        PENDIENTE - description2 The Mexican Caribbean is the perfect tropical paradise for its soft white sands and turquoise waters 

        that matches perfectly with a sophisticated blend of water sports, golf, shopping, dining and nightlife. 

        Dive the world's second largest coral reef, take a ferry to the islands, journey through time and witness 

        the splendor of the Mayan civilization.</p>",



    'label'=>'All',

    'ubicacion'=>[

        'mexico'=>[

            'description'=>'<p class="text-justify"> 

                    A place with turquoise ocean waters, white sandy beaches and swaying palm trees against the bluest of skies is just paradise. In Mexico the sun rises over the Caribbean with splendor and bathes the Mayan archaeological sites, underwater landscapes for diving lovers, lush jungle ecosystems and endless tourist attractions as fine restaurants, bars and magnificent resorts.

                        </p>',

            'resorts'=>[

                [

                    'title'=>'The Royal Cancun All Suites Resort',

                    'description'=>'The Royal Cancun is a cozy and nice family hotel preferred by loyal guests for its impeccable services, delicious Italian restaurant, kind staff and kid-friendly amenities. Its shallow Caribbean waters are perfect for toddlers and children. Choose between the All Inclusive Plan and Just Accommodation.',

                    'url'=>lang_url("/beach-resorts/the-royal-cancun"), # Url del resort

                    'img'=>'the-royal-cancun',

                    'stars'=>'4.5',

                    'label'=>'All Inclusive',

                ],

                [

                    'title'=>'The Royal Sands All Suites Resort & Spa',

                    'description'=>'The Royal Sands is the best place to live a relaxing experience as it is located by one of the best beaches in Cancun. Unwind on the beach or get a tan by its infinity pool, work out at the Fitness Center, play tennis or relax at the world class Spa.',

                    'url'=>lang_url("/beach-resorts/the-royal-sands"), # Url del resort

                    'img'=>'the-royal-sands',

                    'stars'=>'4.5',

                    'label'=>'All Inclusive',

                ],

                

                [

                    'title'=>'The Royal Islander All Suites Resort',

                    'description'=>'The Royal Islander is a family oriented tranquil getaway in Cancun offering direct access to top notch services and amenities, also available at its twin neighbor The Royal Caribbean, besides its spacious villas for your comfort and peace.',

                    'url'=>lang_url("/beach-resorts/the-royal-islander"), # Url del resort

                    'img'=>'the-royal-islander',

                    'stars'=>'4',

                    'label'=>'',

                ],

                [

                    'title'=>'The Royal Haciendas All Suites Resort & Spa',

                    'description'=>'Experience the elegance of Old Mexico at The Royal Haciendas and indulge yourself in Playa del Carmen paradise. Relax in the spacious fully equipped villas with the sophistication and services of a world-class resort with a Mexican hacienda feel.',

                    'url'=>lang_url("/beach-resorts/the-royal-haciendas"), # Url del resort

                    'img'=>'the-royal-haciendas',

                    'stars'=>'4.5',

                    'label'=>'All Inclusive',

                ],

                [

                    'title'=>'Grand Residences Riviera Cancun Resort',

                    'description'=>'Grand Residences Riviera Cancun, located in the heart of the Riviera Maya, is the crown of our family offering signature hospitality and services in an exclusive pristine hideaway. It was recently ranked #2 on the Top 25 Luxury Hotels of Mexico by TripAdvisor.',

                    'url'=>lang_url("/beach-resorts/grand-residences-riviera-cancun"), # Url del resort

                    'img'=>'grand-residences-riviera-cancun',

                    'stars'=>'5',

                    'label'=>'All Inclusive',
                ],             
            ],
        ],

        'caribe'=>[

            'description'=>'<p class="text-justify"> 

                    The Caribbean Islands are legendary for their natural beauty and sheltered beaches, rich cultural heritage, calm ambiances and eco-tourism options. Royal Reservations invites you to live a family vacation like no other featuring an amazing array of resorts at St. Maarten, Curacao and the Dominican Republic, three of the most beautiful destinations of the Caribbean.

                        </p>',

            'resorts'=>[

                [

                    'title'=>'Simpson Bay Beach Resort & Marina',

                    'description'=>'Located in a sheltered beach of the island of St. Maarten, Simpson Bay Beach Resort & Marina, is near to become your favorite choice to experience the best of two Caribbean countries in one: Dutch Sint Maarten and French Saint Martin.',

                    'url'=>lang_url("/beach-resorts/simpson-bay-resort"), # Url del resort

                    'img'=>'simpson-bay-resort',

                    'stars'=>'4',

                    'label'=>'',

                ],

                [

                    'title'=>'The Villas at Simpson Bay Beach Resort & Marina',
                    'description'=>'The Villas at Simpson Bay Beach Resort & Marina honors its excellence for hospitality with great amenities on the front row for spectacular Caribbean sunsets. The resort is ideally located on the beach among St Maarten island’s most popular spots and malls.',
                    'url'=>lang_url("/beach-resorts/the-villas-at-simpson-bay-resort"), # Url del resort
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'stars'=>'4',
                    'label'=>'',

                ],

                [

                    'title'=>'The Royal Sea Aquarium',

                    'description'=>'The Royal Sea Aquarium Resort, a singular but beautiful hotel in the heart of Curacao over a platform on Caribbean waters, attracts travelers thirsting for peace and nature. Enjoy fine beaches, a rich cultural heritage and world-class diving across overwhelming underwater landscapes.',

                    'url'=>lang_url("/beach-resorts/the-royal-sea-aquarium"), # Url del resort
                    'img'=>'the-royal-sea-aquarium',
                    'stars'=>'3.5',
                    'label'=>'',

                ],


            ],
        ],
    ],
];