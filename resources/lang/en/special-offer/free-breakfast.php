<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'free-breakfast',
    'thumbnail'=>'abc',
    'title_seo' => 'FREE BREAKFAST | Royal Reservations',
    'alt_banner' => 'FREE BREAKFAST',
    'metadescription' => "Enjoy a stress-free vacation in the Mexican Caribbean with a copious buffet breakfast for all your family to start thrilling days by the ocean. Besides, we are granting up to 52% discount on your reservation for Accommodation Only plans.",


    'title' => 'FREE BREAKFAST',
    'subtitle1' => 'BOOK NOW AND TRAVEL ANYTIME OF THE YEAR!',
    'description1'=>"
    Enjoy a stress-free vacation in the Mexican Caribbean with a copious buffet breakfast for all your family to start thrilling days by the ocean. Besides, we are granting up to 52% discount on your reservation for Accommodation Only plans.<br>

Just pick your destination in any of our beachfront resorts in Cancun or the Riviera Maya to enjoy all resorts services and amenities. Book now and travel later!                                                  
        
    ",
    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'
        Book now your Accommodation Only Plan with free breakfast included. 
    ',

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
        0=>['name'=>'Cancun','value'=>'cun'],
        1=>['name'=>'Riviera Maya','value'=>'riv'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'All Inclusive','value'=>'ai'],
        1=>['name'=>'European Plan','value'=>'ep'],
        2=>['name'=>'Bed & Breakfast','value'=>'bb'],
    ],


    'resorts'=>[
        0=>[
            'name'=>'The Royal Cancun All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-cancun',
            'slug'=>'the-royal-cancun',
            'stars'=>'4.5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
<li>Free Buffet Breakfast</li>
<li>Children stay & eat Free</li>
<br>
                        
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                    
                    <p>
                    Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort.
                    </p>
                    <p>
                    Book from May 6th to July 1st
                    <br>
                    Travel Between May 6th, 2019 and Jan. 1st, 2021
                    </p>
                    <p>46% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
 <li>Free daily buffet breakfast for all confirmed guests</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
                        </ul>
                    </p>
                    <p class="terms">
                        <b>TERMS & CONDITIONS: Meals:</b> Daily buffet breakfast for all confirmed guests. Additional meals and beverages are not included. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat breakfast for free, accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season.   

                    </p>
                           
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'73601',
            'ihotelier_id'=>'3630381',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
       
        1=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

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
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'May 6th, 2019 and Sep. 1st, 2021',            
            'bullets'=>'
<li>Free Buffet Breakfast for all</li>
<li>Children stay & eat Free</li>
                        <br>
                        
            ',
            'discount_label'=>'52% OFF',
            'view_more'=>'
                <p>
                Book now with Royal Reservations and enjoy your Cancun vacations anytime of this or the next year!
                </p>         

                <p>
                Book from May 6th to July 1st
                <br>
                Travel Between May 6th, 2019 and Sep. 1st, 2021
                </p>


                <p>
                <b>52% OFF</b>

                </p>

                <p>
                <b>This Promotion includes:</b>
                 <ul>
<li>Free daily buffet breakfast for all confirmed guests</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
                 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: Meals:</b> Daily buffet breakfast for all confirmed guests. Additional meals and beverages are not included. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat breakfast for free, accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
                </p>        
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'86175',
            'ihotelier_id'=>'3781782',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        3=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'May 6th, 2019 and Sep. 1st, 2021',            
            'bullets'=>'
<li>Free Buffet Breakfast for all</li>
<li>Children stay & eat Free</li>
                       <br>
                        
            ',
            'discount_label'=>'44% OFF',
            'view_more'=>'
                <p>
                This is the perfect time to go on vacations and with this special promo, you will live the best of Cancun with Royal Reservations! 
                </p>         

                <p>
Book from May 6th to July 1st<br>
Travel Between May 6th, 2019 and Sep. 1st, 2021
                </p>

                <p><b>44% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
<li>Free daily buffet breakfast for all confirmed guests</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: Meals:</b> Daily buffet breakfast for all confirmed guests. Additional meals and beverages are not included. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat breakfast for free, accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
                </p>          
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'86182',
            'ihotelier_id'=>'3781798',
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