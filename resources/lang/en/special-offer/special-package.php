<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'special-package',
    'title_seo' => 'BUNDLE DEAL | Royal Reservations',
    'alt_banner' => 'BUNDLE DEAL',
    'metadescription' => 'Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo!',


    'title' => 'BUNDLE DEAL',
    'subtitle1' => 'Book Now and Travel between Today and April 30th, 2019!',
    'description1'=>'
        This incredible vacation deal will take you to discover the beautiful white sand beaches of Cancun. Bathe in the blue of the ocean and have fun with water and land activities, taste the delicious Mexican and international cuisine, and learn about the culture of the destination.<br>

Make the most of your vacations with this promotions and receive a special discount + additional discount; and choose between Free Daily Breakfast for all suite guests or Free Transportation to/from the aiport. 
        
    ',
    'subtitle2' => 'The Best Beach Hotels available with this Special Offer!',
    'description2'=>'
        Book now and travel anytime, and experience the perfect beach family vacations with Royal Reservations! 
    ',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------    


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => '04/01/2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Cancun','value'=>'cun'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'European Plan','value'=>'ep'],
        1=>['name'=>'Bed & Breakfast','value'=>'bb'],
    ],


    'resorts'=>[
        0=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Mar. 5, 2019 and Sep. 1, 2019 ',            
            'bullets'=>'
                        <li>Free Rountrip Airport Transfer</li>
                        <li>Children stay FREE</li>
                        <li>FREE High Speed Wi-Fi</li>
                        
            ',
            'discount_label'=>'50% + 10% OFF',
            'view_more'=>'
                    
                    <p>
                    Make the most of your vacations with this promotion and receive a special discount of 50% plus an additional 10% when booking the suite of your choice and get free transportation to/from the airport.
                    </p>
                    <p>
                    Book from March 5 to April 1<br>
                    Travel Between Mar. 5, 2019 and Sep. 1, 2019  
                    </p>
                    <p>50% OFF + 10% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
                        <li>Free roundtrip airport transportation</li>
                        <li>Children stay FREE</li>
                        <li>FREE High speed Wi-Fi in all areas</li>
                         
                        </ul>
                    </p>
                    <p class="terms">
TERMS & CONDITIONS: This promotion includes a free roundtrip airport transportation (airport - hotel - airport) per person confirmed in your confirmation letter. Service will be provided in shared service. The transportation service is available for flights arriving from 5am to 11:59pm & flights leaving 7am to 9pm. Service must be confirmed at least 48 hours before arrival, otherwise will not be possible to guarantee. This promotion does not include meals or drinks.
                    </p>
                           
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'86175',
            'ihotelier_id'=>'3021296',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
    
    ],


    'expiration'=>'04/01/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'4',
    'code'=>'',
];