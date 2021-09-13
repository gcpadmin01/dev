<?php

return [
    'booking' => '1', // 0 = Hotel (Default) 1 = Avion 
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'hotel-plus-flight-caribbean-islands',
    'thumbnail'=>'abc',
    'title_seo' => 'Fly to Sint Maarten beach!',
    'alt_banner' => 'Fly to Sint Maarten beach!',
    'metadescription' => "Our St Maarten and Curacao resorts are giving you the option to book your flight tickets together with your accommodation to get an unbeatable 60% discount on your reservation!",

    'title' => 'Fly to Sint Maarten beach!',
    'subtitle1' => 'BOOK NOW AND BOOK YOUR HOTEL + FLIGHT AT A SPECIAL PRICE!',
    'description1'=>"
    Our St Maarten and Curacao resorts are giving you the option to book your flight tickets together with your accommodation to get an unbeatable 60% discount on your reservation! <br>

Enjoy a beautiful Caribbean beachfront paradise without worrying about your plane tickets. <br>

Just choose the resort you want to stay, the preferred dates of your getaway and then start packaging your beach outfit. The hallmark of our resorts is proudly our outstanding services and amenities, to make you feel like Royalty! Book now!                             
    ",
    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'Book now your Resort Accommodation + Flight tickets at the best price!',


    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------

    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'July 1st, 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Sint Maarten','value'=>'sin'],
        1=>['name'=>'Curacao','value'=>'cur'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'All Inclusive','value'=>'ai'],
        1=>['name'=>'European Plan','value'=>'ep'],
        2=>['name'=>'Bed & Breakfast','value'=>'bb'],
    ],

    'resorts'=>[
        
        0=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
                        <li>Children stay Free</li>
                        <li>Free WiFi</li>
                        <br>
                        
            ',
            'discount_label'=>'64% OFF',
            'view_more'=>'
                <p>
                Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island!  
                </p>         

                <p>
                Book from May 10th to July 1st<br>
                Travel Between May 10th, 2019 and Apr. 1st, 2020
                </p>

                <p><b>64% OFF</b></p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
                    <li>Flight ticket from your destination</li>
                    <li>FREE Wi-Fi in all areas</li>
                </ul>
                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. *Restrictions: The minimum lenght of stay may vary depending on the season.
                </p>     
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'sin-ep',

            'resort_id'=>'10733',
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],



        1=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
                        <li>Children stay Free</li>
                        <li>Free WiFi</li>
                        <br>
                        
            ',
            'discount_label'=>'64% OFF',
            'view_more'=>'
                 <p>
                 With this special offer, you and your companions will experience the great Caribbean ambiance, its culture and hot weather to escape the cold and relax on the beach.
                </p>         

                <p>
                Book from May 10th to July 1st<br>
                Travel Between May 10th, 2019 and Apr. 1st, 2020
                </p>

                <p><b>64% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                <li>Flight ticket from your destination</li>
                <li>FREE Wi-Fi in all areas</li>
                </ul>

                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. *Restrictions: The minimum lenght of stay may vary depending on the season.
                </p>     
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'sin-ep',

            'resort_id'=>'10734',
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ],

    2=>[
        'name'=>'The Royal Sea Aquarium Resort',
        'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sea-aquarium',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'3.5',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
        'bullets'=>'
                    <li>Children stay Free</li>
                    <li>Free Wi-Fi</li>
                    <br>
                    
        ',
        'discount_label'=>'57% OFF',
        'view_more'=>'
            <p>
            Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer! 
            </p>         

            <p>
            Book from May 10th to July 1st<br>
            Travel Between May 10th, 2019 and Apr. 1st, 2020
            </p>

            <p><b>57% OFF</b></p>

            <p>
            <b>This Promotion includes:</b>
            <ul>
                <li>Flight ticket from your destination</li>
                <li>FREE Wi-Fi in all areas</li>
            </ul>
            </p>

            <p class="terms">
            <b>TERMS & CONDITIONS: *Breakfast:</b> Daily Buffet Breakfast for all paid occupants. *Restrictions: The minimum lenght of stay may vary depending on the season.
            </p>     
        ',

        //configuración 
        //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
        'destination'=>'5',
        // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
        'rate_plan'=>'2',
        // Label filtros
        'filtros'=>'cur-ep',

        'resort_id'=>'10735',
        'ihotelier_id'=>'',
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