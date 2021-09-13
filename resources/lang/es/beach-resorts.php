<?php

return [
    'seo'=>[
        'title'=>'Hoteles de Playa para Vacaciones | Royal Reservations',
        'metadescription'=>'Royal Reservations ofrece una amplia variedad de Hoteles en el Caribe para unas perfectas vacaciones familiares en hermosas playas de arena blanca en México, República Dominicana, y las islas de St. Maarten y Curacao. ¡Haremos tus sueños realidad!',
    ],
    'title' => 'Hoteles de playa', # Titulo de la sección y la pagina
    'subtitle' => 'Resorts Familiares En El Caribe', # Titulo de la sección y la pagina
    # Contenido de la pagina
    'description' => "<p class='text-justify'> 
            Royal Reservations cuenta con resorts con el mejor servicio personalizado donde nos encargaremos de cada una de sus necesidades, además de servirle las mejores delicias culinarias en sus diversos restaurantes, contamos con una amplia gama de suites bellamente decoradas con hermosas vistas y la privacidad que usted y su familia se merecen; y por supuesto, todo lo anterior acompañado de servicio y amenidades de primera para así poder brindarle días inolvidables en el Caribe.  
        </p>",
    'subtitle2' => 'Family resorts in the caribbean description2', # Titulo de la sección y la pagina
    # Contenido de la pagina
    'description2' => "<p class='text-justify'> 
        description2 The Mexican Caribbean is the perfect tropical paradise for its soft white sands and turquoise waters 
        that matches perfectly with a sophisticated blend of water sports, golf, shopping, dining and nightlife. 
        Dive the world's second largest coral reef, take a ferry to the islands, journey through time and witness 
        the splendor of the Mayan civilization.</p>",

    'label'=>'All',
    'ubicacion'=>[
        'mexico'=>[
            'description'=>'<p class="text-justify"> 
                            Un paraíso de aguas turquesas, playas de arena blanca y palmeras en contraste con el cielo más azul. En México, el sol se levanta sobre el Caribe con esplendor y baña los sitios arqueológicos mayas, los cálidos paisajes submarinos para los amantes del buceo, los ricos ecosistemas selváticos y la infinidad de atracciones turísticas como restaurantes, bares y magníficos resorts.
                        </p>',
            'resorts'=>[
                [
                    'title'=>'The Royal Sands',
                    'description'=>'The Royal Sands es el mejor lugar para vivir una experiencia relajante en una de las mejores playas de Cancún. Descanse en la playa o junto a la alberca infinity, haga ejercicio en el Gimnasio, juegue un partido de tenis o rejuvenezca con un tratamiento en su Spa.',
                    'url'=>lang_url("/es/hoteles-de-playa/the-royal-sands"), # Url del resort
                    'img'=>'the-royal-sands',
                    'stars'=>'4.5',
                ],
                [
                    'title'=>'The Royal Islander',
                    'description'=>'The Royal Islander es un tranquilo resort en Cancún para familias, con acceso directo a servicios excepcionales también disponibles en su vecino The Royal Caribbean, además de tener a disposición espaciosas villas para su comodidad y paz.',
                    'url'=>lang_url("/es/hoteles-de-playa/the-royal-islander"), # Url del resort
                    'img'=>'the-royal-islander',
                    'stars'=>'4',
                ],
                [
                    'title'=>'The Royal Cancun All Suites Resort',
                    'description'=>'The Royal Cancun es un hotel familiar acogedor, preferido por sus huéspedes debido a sus servicios impecables, delicioso restaurante italiano, personal amable y todas las amenidades para niños. Las serenas aguas del Mar Caribe son perfectas para los niños pequeños. Elija entre el Plan Todo Incluido y el Plan Europeo.',
                    'url'=>lang_url("/es/hoteles-de-playa/the-royal-cancun"), # Url del resort
                    'img'=>'the-royal-cancun',
                    'stars'=>'4.5',
                ],
                [
                    'title'=>'Grand Residences Riviera Cancun',
                    'description'=>'Grand Residences Riviera Cancun, se encuentra en el corazón de la Riviera Maya, y es la corona de nuestra familia ofreciendo servicios y hospitalidad de primera en un oasis exclusivo. Recientemente fue nombrado el resort #2 en el Top 25 de los Hoteles más Lujosos de México por TripAdvisor.',
                    'url'=>lang_url("/es/hoteles-de-playa/grand-residences-riviera-cancun"), # Url del resort
                    'img'=>'grand-residences-riviera-cancun',
                    'stars'=>'5',
                ],
                [
                    'title'=>'The Royal Haciendas',
                    'description'=>'Viva la elegancia del México Antiguo en The Royal Haciendas y consiéntase en el paraíso de Playa del Carmen. Relájese en las espaciosas villas totalmente equipadas con la sofisticación y servicios propios de un resort cinco estrellas estilo hacienda mexicana.',
                    'url'=>lang_url("/es/hoteles-de-playa/the-royal-haciendas"), # Url del resort
                    'img'=>'the-royal-haciendas',
                    'stars'=>'4.5',
                ],                                
            ],

        ],

        'caribe'=>[
            'description'=>'<p class="text-justify"> 
                            Las islas del Caribe son legendarias por su belleza natural y apacibles playas, su riqueza cultural, un ambiente tranquilo y las variadas opciones de eco-turismo que ofrece. En Royal Reservations te invitamos a vivir nuestros increíbles resorts en St. Maarten, Curacao y la República Dominicana, tres hermosos destinos del Caribe.
                        </p>',
            'resorts'=>[
                [
                    'title'=>'The Villas at Simpson Bay',
                    'description'=>'The Villas at Simpson Bay Beach Resort & Marina honra su excelencia por la hospitalidad con sus excepcionales  amenidades en primera fila para admirar espectaculares atardeceres en el Caribe. El resort se localiza idealmente frente a la playa entre las plazas y puntos más concurridos de la isla de St. Maarten.',
                    'url'=>lang_url("/es/hoteles-de-playa/the-villas-at-simpson-bay-resort"), # Url del resort
                    'img'=>'the-villas-at-simpson-bay-resort',
                    'stars'=>'4',
                ],
                [
                    'title'=>'Simpson Bay Resort',
                    'description'=>'Ubicado en una playa protegida de la isla de St. Maarten, Simpson Bay Beach Resort & Marina, será su opción favorita para descubrir lo mejor de dos países en uno: Sint Maarten (de Holanda) y Saint Martin (de Francia).',
                    'url'=>lang_url("/es/hoteles-de-playa/simpson-bay-resort"), # Url del resort
                    'img'=>'simpson-bay-resort',
                    'stars'=>'4',
                ],
                [
                    'title'=>'The Royal Sea Aquarium',
                    'description'=>'The Royal Sea Aquarium Resort, un hotel hermoso y único en el corazón de Curaçao sobre un islote rodeado de las aguas caribeñas, da la bienvenida a viajeros deseando paz y días en la naturaleza. Disfrute las bellas playas, una rica herencia cultural y buceo de primera en impresionantes paisajes submarinos.',
                    'url'=>lang_url("/es/hoteles-de-playa/the-royal-sea-aquarium"), # Url del resort
                    'img'=>'the-royal-sea-aquarium',
                    'stars'=>'3.5',
                ],
                [
                    'title'=>'Casa de Campo',
                    'description'=>'Situado en La Romana, en la República Dominicana, Casa de Campo Resort & Villas es un hermoso resort de lujo que cuenta con playa privada, lujosas habitaciones, y una gran variedad de instalaciones, servicios y actividades de primera, creados con elevados estándares de confort, sofisticación y relajación. Perfecto para parejas, familias y grupos en busca de experiencias vacacionales irrepetibles.',
                    'url'=>lang_url("/es/hoteles-de-playa/casa-de-campo"), # Url del resort
                    'img'=>'casa-de-campo',
                    'stars'=>'5',
                ],                                
            ],
        ],
    ],
];