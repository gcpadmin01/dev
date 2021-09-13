<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'luxury-resort',
    'thumbnail'=>'',
    'title_seo' => 'Riviera Maya Luxury Vacations | Royal Reservations',
    'alt_banner' => 'Riviera Maya Luxury Vacations',
    'metadescription' => "Dreaming big about your vacations? Make them real with the deals we have for you! Discover the All In Grand Experience of Grand Residences luxury beachfront resort and enjoy excellent discounts.",


    'title' => 'Riviera Maya Luxury Vacations',
    'subtitle1' => 'Book Now and Travel anytime of the year!',
    'description1'=>"
    Dreaming big about your vacations? Make them real with the deals we have for you! Discover the All In Grand Experience of Grand Residences luxury beachfront resort and enjoy excellent discounts, lavish amenities and exclusive benefits like Premium Airport-Hotel-Airport transportation.                                 
    ",

    'subtitle2' => 'The best offers for this luxury resort',
    'description2'=>'
        Live a lavish vacation in a luxury beachfront resort in the Riviera Maya.
    ',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------    


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'April 29th 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Riviera Maya','value'=>'riv'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'All Inclusive','value'=>'ai'],
        1=>['name'=>'European Plan','value'=>'ep'],
        2=>['name'=>'Bed & Breakfast','value'=>'bb'],
    ],


    'resorts'=>[
       
        0=>[
            'name'=>'UNLIMITED PACKAGE',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'special-offers',
            'img'=>'special-offers',
            'stars'=>'5',
            'alt'=>'UNLIMITED PACKAGE',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                <li>200 USD Resort Credit</li>
                <li>Meals & drinks included</li>
                <li>Premium Airport Transfer</li>
                        
            ',
            'discount_label'=>'42% OFF',
            'view_more'=>'
                <p>
                If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from May 6th to July 1st
                <br>
                Travel Between May 6th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>42% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
<li>Special Discount</li>
                     <li>Unlimited Premium meals & drinks</li>
                     <li>24 hours Full room service</li>
                     <li>Premuim Aiport Roundtrip Transportation</li>
                     <li>Children stay & eat FREE</li>
                     <li>FREE High speed Wi-Fi in all areas"</li>
 </ul>
                </p>

                <p class="terms">
               
<b>TERMS & CONDITIONS:</b>
                    <b>TERMS & CONDITIONS:* Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the rpoperty at least 48 hours prior check in to arrange the transfer from the airport. <b>* Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season.
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'riv-ai',

            'resort_id'=>'95939',
            'ihotelier_id'=>'3713586',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

 
        1=>[
            'name'=>'FREE BREAKFAST',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'free-breakfast',
            'img'=>'free-breakfast',
            'stars'=>'5',
            'alt'=>'SPECIAL DEAL',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                <li>200 USD Resort Credit</li>
                <li>Meals & drinks included</li>
                <li>Premium Airport Transfer</li>
                        
            ',
            'discount_label'=>'38% OFF',
            'view_more'=>'
                <p>
                If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from May 6th to July 1st
                <br>
                Travel Between May 6th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>38% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
 <li>Daily Buffet Breakfast Included for all confirmed guests</li>
 <li>Premuim Aiport Roundtrip Transportation</li>
 <li>24 hours room service</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
                 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: * Meals:</b> Daily buffet breakfast for all confirmed guests. Additional meals and beverages are not included. <b>* Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat breakfast for free, accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the rpoperty at least 48 hours prior check in to arrange the transfer from the airport.   <b>* Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season.
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'riv-ep',

            'resort_id'=>'95939',
            'ihotelier_id'=>'3713621',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

       2=>[
            'name'=>'Fly to the beach',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'hotel-plus-flight',
            'img'=>'hotel-plus-flight',
            'stars'=>'5',
            'alt'=>'Fly to the beach',

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
<li>Meals & drinks included</li>
<li>Premium Airport Transfer</li>
<li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'60% OFF',
            'view_more'=>'
                <p>
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
<li>Flight ticket from your destination</li>
 <li>Unlimited Premium meals & drinks</li>
 <li>24 hours Full room service</li>
 <li>Premium Aiport Roundtrip Transportation</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all resort areas</li>
 </li>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:</b>
<b>* Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the rpoperty at least 48 hours prior check in to arrange the transfer from the airport.   <b>* Restrictions:</b> The minimum lenght of stay may vary depending on the season.
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
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ], 
  
  
    ],



    'expiration'=>'12/01/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'03/05/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];