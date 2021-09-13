<?php

return [
    'booking' => '1', // 0 = Hotel (Default) 1 = Avion 
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'riviera-maya-hotel-plus-flight',
    'thumbnail'=>'',
    'title_seo' => "FLY TO RIVIERA MAYA | Royal Reservations",
    'alt_banner' => "FLY TO RIVIERA MAYA",
    'metadescription' => "Our Riviera Maya resorts are happy to welcome you with a great 60% discount on your accommodation when booking also your flight tickets!",

    'title' => "FLY TO RIVIERA MAYA",
    'subtitle1' => 'BOOK NOW AND BOOK YOUR HOTEL + FLIGHT TO THE RIVIERA MAYA AT A SPECIAL PRICE!',
    'description1'=>"
        Our Riviera Maya resorts are happy to welcome you with a great 60% discount on your accommodation when booking also your flight tickets! 
        <br>
        Through the planning of this vacation package we were thoughtful about your stress-free vacations from the moment you book online to the moment of your arrival in paradise. 
        <br>
        Choose the resort and dates and let us give you an unforgettable beachfront vacation experience with our All Inclusive Plans!            
    ",
    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'Book now your Riviera Maya Resort Accommodation + Flight tickets at the best price!',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'July 1st 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Riviera Maya','value'=>'riv'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'All Inclusive','value'=>'ai'],
    ],


    'resorts'=>[
        0=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
                <li>Meals & drinks included</li>
                <li>Children stay & eat Free</li>
                <li>Free High-speed WiFi</li>
                        
            ',
            'discount_label'=>'61% OFF',
            'view_more'=>'
                <p> 
                    Fly to Riviera Maya<br>
                    Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer.
                </p>         

                <p>
                    Book from May 10th to July 1st
                    <br>
                    Travel Between May 10th, 2019 and Apr. 1st, 2020
                </p>

                <p>
                    <b>61% OFF</b>
                </p>
                <p>
                    <b>This Promotion includes:</b>
                    <ul>
                         <li> Flight ticket from your destination</li>
                         <li> Meals & drinks included</li>
                         <li> 24 hours room service</li>
                         <li> Children stay & eat FREE</li>
                         <li> FREE High speed Wi-Fi in all resort areas</li>
                    </ul>
                </p>

                <p class="terms">
                    <b>TERMS & CONDITIONS: For the All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
                </p>        
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'3',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'pla-ai',

            'resort_id'=>'10731',
            'ihotelier_id'=>'***',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        1=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
                <li>Meals & drinks included</li>
                <li>Premium Airport Transfer</li>
                <li>Children stay & eat Free</li>
            ',
            'discount_label'=>'60% OFF',
            'view_more'=>'
                <p>
                    Fly to Riviera Maya<br>
                    If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                    Book from May 10th to July 1st
                    <br>
                    Travel Between May 10th, 2019 and Apr. 1st, 2020
                </p>

                <p><b>60% OFF</b></p>


                <p>
                    <b>This Promotion includes:</b>
                    <ul>
                         <li> Flight ticket from your destination </li>
                         <li> Unlimited Premium meals & drinks </li>
                         <li> 24 hours Full room service </li>
                         <li> Premium Aiport Roundtrip Transportation </li>
                         <li> Children stay & eat FREE </li>
                         <li> FREE High speed Wi-Fi in all resort areas </li>
                    </ul>
                </p>

                <p class="terms">
                    <b>TERMS & CONDITIONS: * Children stay & eat Free: </b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the rpoperty at least 48 hours prior check in to arrange the transfer from the airport.   <b>* Restrictions:</b> The minimum lenght of stay may vary depending on the season.
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'riv-ai',

            'resort_id'=>'10732',
            'ihotelier_id'=>'****',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],      
    ],


    // no está en función esta parte
    
    'expiration'=>'04/20/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'03/11/2019','fin'=>'3/13/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/02/2021','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];