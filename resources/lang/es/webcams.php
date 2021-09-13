<?php



return [
	'seo'=>[
        'title'=>'Webcams de Resorts del Caribe | Royal Reservations',
        'metadescription'=>'Echa un vistazo a cómo está el clima en los hoteles de Cancún y la Riviera Maya; disfruta los colores del Mar Caribe y las playas de arena blanca a través de estas webcams.',
    ], 

    'webcams' => [

        'title' => 'WEBCAMS DE NUESTROS HOTELES DE PLAYA',

        'content' => 'Venga al paraíso y olvide todas sus preocupaciones en cualquiera de nuestros resorts en el Caribe, que ofrecen servicios y amenidades de primera para todas las edades. Aproveche todos los beneficios de nuestros planes Todo Incluido, hospedaje con desayunos o solo hospedaje en cualquiera de nuestros resort de playa, y además disfrute de deliciosos restaurantes, emocionantes actividades y los fascinantes paisajes tropicales de nuestros diferentes destinos.',
		
		'mexico'  => 'Conoce nuestros resorts en el Caribe Mexicano a través de las cámaras web',

		'caribe' => 'Conoce nuestros resorts de las Islas Caribe a través de las cámaras web',
    ],

    'button_view' => 'Ver Cámara web',

    'tab_view' => 'Cámara web',

    'button_chose' => 'Elige una cámara web',

    'text_refresh_image' => '*La imagen mostrada corresponde a la imagen del resort que es actualizada cada 4-5 minutos.',

    'commin_soon' => 'Próximamente',

    'resorts'=>[

    	0=>[

    		'slug'=>asset('img/resorts/the-royal-cancun/the-royal-cancun-webcam.jpg'),

			'name'=>'The Royal Cancun All Suites Resort',
			
			'short_name'=>'The Royal Cancun All Suites Resort',

    		'webcam_url'=> ['https://services.royalresorts.com/webcam/Camaraci.jpg'],

    		'offer_name'=>'TRC promo',

			'offer_url'=>'',
			
			'blur' => 'false',

			'origin' => 'Cancun, Mexico',


    	],

    	// 1=>[

    	// 	'slug'=>asset('img/resorts/the-royal-caribbean/the-royal-caribbean-webcam.jpg'),

		// 	'name'=>'The Royal Caribbean All Suites Resort',
			
		// 	'short_name'=>'The Royal Islander All Suites Resort',

    	// 	'webcam_url'=>['https://services.royalresorts.com/webcam/Camarari.jpg'],

    	// 	'offer_name'=>'Caribbean Promo',

		// 	'offer_url'=>'',
			
		// 	'origin' => 'Cancun, Mexico',

    	// ],

    	1=>[

    		'slug'=>asset('img/resorts/the-royal-islander/the-royal-islander-webcam.jpg'),

    		'name'=>'The Royal Islander All Suites Resort',

            'short_name'=>'The Royal Islander All Suites Resort',

    		'webcam_url'=>['https://services.royalresorts.com/webcam/Camarari.jpg'],

    		'offer_name'=>'Islander',

    		'offer_url'=>'',

            'origin' => 'Cancun, Mexico',

            'blur' => 'false'

    	],    	

    	2=>[

    		'slug'=>asset('img/resorts/the-royal-sands/the-royal-sands-webcam.jpg'),

    		'name'=>'The Royal Sands Resort All Inclusive',

            'short_name'=>'The Royal Sands Resort All Inclusive',

    		'webcam_url'=>['https://services.royalresorts.com/webcam/Camarars.jpg','https://services.royalresorts.com/webcam/camarars-f2.jpg'],

            'names' => ['The Royal Sands Resort All Inclusive (phase 1)','The Royal Sands Resort All Inclusive (phase 2)'],

            'button_names' => ['Ver fase 1','Ver fase 2'],

    		'offer_name'=>'Sands',

    		'offer_url'=>'',

            'origin' => 'Cancun, Mexico',

            'blur' => 'false'

    	],

    	3=>[

    		'slug'=>asset('img/resorts/the-royal-haciendas/the-royal-haciendas-webcam.jpg'),

    		'name'=>'The Royal Haciendas All Suites Resort & Spa',
    		'short_name'=>'The Royal Haciendas All Suites Resort',

    		'webcam_url'=>['https://services.royalresorts.com/webcam/Camarahrm1y2.jpg','https://services.royalresorts.com/webcam/camarahrm3y4.jpg'],

            'names' => ['The Royal Haciendas All Suites Resort & Spa (phases 1 & 2)','The Royal Haciendas All Suites Resort & Spa (phases 3 & 4)'],

            'button_names' => ['Vista a la alberca','Vista a la playa'],

    		'offer_name'=>'Haciendas',

    		'offer_url'=>'',

            'origin' => 'Riviera Maya, Mexico',

            'blur' => 'false'

    	],

    	4=>[

    		'slug'=>asset('img/resorts/grand-residences/grand-residences-riviera-cancun-offer-webcam.jpg'),

            'name'=>'Grand Residences Riviera Cancun Resort',

            'short_name'=>'Grand Residences',

            'webcam_url'=>['https://services.royalresorts.com/webcam/Camaragr.jpg'],

            'offer_name'=>'Caribbean Promo',

            'offer_url'=>'',

            'origin' => 'Cancun, Mexico',

            'blur' => 'false'

		],

		5=>[

            'slug'=>asset('img/resorts/royal-uno/royal-uno-webcam.jpg'),

            'name'=>'Royal Uno All Suites Resort',
            'short_name'=>'Royal Uno',

            'webcam_url'=>['https://services.royalresorts.com/webcam/Camararc.jpg'],

            'offer_name'=>'Caribbean Promo',

            'offer_url'=>'',

            'origin' => 'Cancun, Mexico',

            'blur' => 'true'

        ],

        6=>[

            'slug'=>asset('img/resorts/simpson-bay-resort/simpson-bay-webcam.jpg'),

            'name'=>'Simpson Bay Beach Resort & Marina',
            'short_name'=>'Simpson Bay Beach Resort & Marina',

            'webcam_url'=>['https://s73477.gridserver.com/webcams/sbrvista.jpg','https://s73477.gridserver.com/webcams/sbrbeach.jpg','https://s73477.gridserver.com/webcams/sbrbeachbar.jpg','https://s73477.gridserver.com/webcams/camaraprcbeach.jpg'],

            'names' => ['Simpson Bay Beach Resort & Marina phase 1','Simpson Bay Beach Resort & Marina phase 2','Simpson Bay Beach Resort & Marina phase 3','Simpson Bay Beach Resort & Marina phase 4'],

            'button_names' => ['Vista a la alberca 1', 'Vista a la alberca 2', 'Vista a la Playa 1','Vista a la Playa 2'],

            'offer_name'=>'Caribbean Promo',

            'offer_url'=>'',

            'origin' => 'Sint Maarten',

            'blur' => 'false'

        ],

        7=>[

            'slug'=>asset('img/resorts/the-villas-at-simpson-bay-resort/the-villas-at-simpson-bay-webcam.jpg'),

            'name'=>'The Villas at Simpson Bay Resort',
            'short_name'=>'The Villas at Simpson Bay Resort',

            'webcam_url'=>['https://s73477.gridserver.com/webcams/camarapmrpool.jpg','https://s73477.gridserver.com/webcams/vsbbayview.jpg'],

            'names' => ['The Villas at Simpson Bay Resort phase 1','The Villas at Simpson Bay Resort phase 2'],

            'button_names' => ['Vista a la alberca','Vista a la Bahía'],

            'offer_name'=>'Caribbean Promo',

            'offer_url'=>'',

            'origin' => 'Sint Maarten',

            'blur' => 'false'

        ],

        8=>[

            'slug'=>asset('img/resorts/the-royal-sea-aquarium/the-royal-sea-aquarium-webcam.jpg'),

            'name'=>'The Royal Sea Aquarium Resort',
            'short_name'=>'The Royal Sea Aquarium Resort',

            'webcam_url'=>['https://s73477.gridserver.com/webcams/camarasarpool.jpg'],

            'offer_name'=>'Caribbean Promo',

            'offer_url'=>'',

            'origin' => 'Curacao',

            'blur' => 'false'

        ],

    ]

];