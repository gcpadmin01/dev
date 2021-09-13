<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'stay-longer-and-save',
    'title_seo' => 'STAY LONGER AND SAVE! | Royal Reservations',
    'alt_banner' => 'STAY LONGER AND SAVE!',
    'metadescription' => 'Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo!',


    'title' => 'STAY LONGER AND SAVE!',
    'subtitle1' => 'Travel anytime of the year and enjoy the benefits of a long stay',
    'description1'=>'
        Because when you are on vacation your days are never enough. Come to the Mexican Caribbean and reconnect with nature and your loved ones with this Special promo for long stays! Book your 14-night or more stay and choose between getting accommodation only or room plus breakfasts and receive 50% discount on your reservation plus free airport transfers and an additional 15% off on top of the base discount.
        
    ',
    'subtitle2' => 'The Best Resorts for long stays',
    'description2'=>'
        Book now and travel anytime! Start enjoying your beach vacations right now!
    ',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------

    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => '01/07/2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
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

            'travel_window'=>'Today & 04/30/2019',            
            'bullets'=>'
                        <li>Free Rountrip Airport Transfer</li>
                        <li>Children stay FREE</li>
                        <li>FREE High Speed Wi-Fi</li>
                        
            ',
            'discount_label'=>'50% + 15% OFF',
            'view_more'=>'
                    
                    <p>
                    Book your 14-night or more stay with the accommodation only Plan and receive 50% discount on your reservation plus free airport transfers and an additional 15% OFF on top of the base discount. 
                    </p>
                    <p>
                    Book from Today to 07/01/2019<br>
Travel Between Today & 04/30/2019
                    </p>
                    <p>50% OFF + 15% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
<li>Free roundtrip airport transportation</li>
 <li>Children stay FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
                         
                        </ul>
                    </p>
                    <p class="terms">
TERMS & CONDITIONS: This promotion includes a free roundtrip airport transportation (airport - hotel - airport) per person confirmed in your confirmation letter
Service will be provided in shared service. The transportation service is available for flights arriving from 5am to 11:59pm & flights leaving 7am to 9pm. Service must be confirmed at least 48 hours before arrival, otherwise will not be possible to guarantee. This promotion does not include meals or drinks, however, only when booking Bed & Breakfast, the promotion will include a daily buffet breakfast per person confirmed in your confirmation letter. Any additional meals or drinks will have a additional cost.
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
            'ihotelier_id'=>'3021317',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Today & 04/30/2019',            
            'bullets'=>'
                        <li>Daily daily buffet breakfast</li>
                        <li>Children stay for free </li>
                        <li>FREE High Speed Wi-Fi</li>
                        
            ',
            'discount_label'=>'50% + 15% OFF',
            'view_more'=>'
                    
                    <p>
                    Book your 14-night or more stay in room plus breakfast Plan and receive 50% discount on your reservation plus free airport transfers and an additional 15% OFF on top of the base discount. 
                    </p>
                    <p>
                    Book from Today to 07/01/2019<br>
Travel Between Today & 04/30/2019
                    </p>
                    <p>50% OFF + 15% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
    <li>Free roundtrip airport transportation</li>
 <li>Daily Breakfast for all guests</li>
 <li>Children stay FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
                         
                        </ul>
                    </p>
                    <p class="terms">
TERMS & CONDITIONS: This promotion includes daily buffet breakfasts for all guests in the reservation plus a free roundtrip airport transportation (airport - hotel - airport) per person confirmed in your confirmation letter. Service will be provided in shared service. The transportation service is available for flights arriving from 5am to 11:59pm & flights leaving 7am to 9pm. Service must be confirmed at least 48 hours before arrival, otherwise will not be possible to guarantee. This promotion does not include meals or drinks, however, only when booking Bed & Breakfast, the promotion will include a daily buffet breakfast per person confirmed in your confirmation letter. Any additional meals or drinks will have a additional cost.
                    </p>
                           
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'3',
            // Label filtros
            'filtros'=>'cun-bb',

            'resort_id'=>'86175',
            'ihotelier_id'=>'3021321',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
    
    ],



    'expiration'=>'01/07/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'4',
    'code'=>'',
];