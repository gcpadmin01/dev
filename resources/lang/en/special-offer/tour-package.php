<?php

return [
    'template' => '1', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'tour-package',
    'thumbnail'=>'',
    'title_seo' => 'TOUR PACKAGE, RESORT + DOLPHIN SWIM EXPERIENCE | Royal Reservations',
    'alt_banner' => 'TOUR PACKAGE, RESORT + DOLPHIN SWIM EXPERIENCE',
    'metadescription' => "Enjoy an unforgettable vacation experience in one of our beachfront family resorts in Cancun or Riviera Maya with a special discount of up to 46% for your next vacations. In addition, get an incredible additional benefit: The best dolphins swim experience, “Dolphin Swim Adventure for 2”, where you will have the opportunity to interact with a lovely Dolphin.",


    'title' => 'TOUR PACKAGE, RESORT + DOLPHIN SWIM EXPERIENCE',
    'subtitle1' => 'Book Now and enjoy the Best Tour Experience in the Caribbean!',
    'description1'=>"
    Enjoy an unforgettable vacation experience in one of our beachfront family resorts in Cancun or Riviera Maya with a special discount of up to 46% for your next vacations. In addition, get an incredible additional benefit: The best dolphins swim experience, “Dolphin Swim Adventure for 2”, where you will have the opportunity to interact with a lovely Dolphin.<br>

Get the most of this experience and have a fun time with the different activities such as kissing, hugging, handshaking and more, also, have the best ride while on his belly and go across the water while been pushed on a boogie board. With this tour package you will enjoy a full day at Isla Mujeres, including breakfast, lunch and drinks, also spend the day at a Beach Club plus other activities.<br>

During your 50-minute Dolphin Swim Program, you will bask with different activities with the dolphins such as belly ride, boogie push, kisses & hugs, hand target, handshake and more. Take advantage of this deal and book now your next Cancun or Riviera Maya vacations and have a once in a lifetime experience.                           
    ",

    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'
        Book now in All Inclusive, Bed & Breakfast or Accommodation Only Resort Plans and get 2 Dolphin Swim Adventure tours!
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

            'travel_window'=>'May 1st, 2019 and Dec. 15, 2019',            
            'bullets'=>'
<li>2 Swim with Dolphins Tour</li>
<li>Meals & Drinks Included at the Resort</li>
<li>Children eat & stay Free at the Resort</li>
                        
            ',
            'discount_label'=>'40% + 10% OFF',
            'view_more'=>'
                    
                    <p>
                    Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort.
                    </p>
                    <p>
                    Book from March 8 to April 8<br>
                    Travel Between May 1st, 2019 and Dec. 15, 2019
                    </p>
                    <p>40% + 10% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
                             <li>2 Swim with Dolphins Tour (Swim Adventure Experience)</li>
                             <li>Ferry Cancun - Isla Mujeres - Cancun</li>
                             <li>Breakfast, Lunch and Drink Included in the tour</li>
                             <li>Access to the Beach Club at Isla Mujeres</li>
                             <li>Meals & drinks included at the Resort</li>
                             <li>24 hours room service at the Resort</li>
                             <li>Children stay & eat FREE at the Resort</li>
                             <li>FREE High speed Wi-Fi in all areas at the Resort</li>
                        </ul>
                    </p>
                    <p class="terms">
                      
<b>TERMS & CONDITIONS: * Swim with Dolphins Tour:</b> 50 Min. Dolphin Swim Adventure tour for two people per reservation. Ferry Cancun - Isla Mujeres - Cancun included. Breakfast, lunch and national drinks included as well as access to the Beach Club in Isla Mujeres.  <b>For the All Inclusive at the Resort:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free at the Resort:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season. Does not include ground transportation or Photo Package at the Tour. <b>* NOTE:</b> Mandatory docking fee ($10 USD) payable directly at the dock, not included in the rate. <b>*Black Out Dates:</b> July 1st, 2019 to August 23, 2019.
                    </p>
                           
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'cun-ai',

            'resort_id'=>'73601',
            'ihotelier_id'=>'3676929',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
 
        1=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'May 1st, 2019 and Dec. 15, 2019',            
            'bullets'=>'
                <li>2 Swim with Dolphins Tour</li>
                <li>Premium Airport Transfer</li>
                <li>Gourmet Meals & drinks included</li>           
            ',
            'discount_label'=>'35% + 10% OFF',
            'view_more'=>'
                <p>
                If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from March 8 to April 8
                <br>
                Travel Between May 1st, 2019 and Dec. 15, 2019
                </p>

                <p><b>35% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
 <li>2 Swim with Dolphins Tour (Swim Adventure Experience)</li>
 <li>Ferry Cancun - Isla Mujeres - Cancun</li>
 <li>Breakfast, Lunch and Drink Included in the tour</li>
 <li>Access to the Beach Club at Isla Mujeres</li>
<li>Unlimited Premium meals & drinks at the Resort</li>
<li>24 hours Full room service at the Resort</li>
<li>Premuim Aiport Roundtrip Transportation from airport</li>
<li>Children stay & eat FREE at the Resort</li>
<li>FREE High speed Wi-Fi in all areas at the Resort</li>
 </ul>
                </p>

                <p class="terms">
               
<b>TERMS & CONDITIONS: * Swim with Dolphins Tour:</b> 50 Min. Dolphin Swim Adventure tour for two people per reservation. Ferry Cancun - Isla Mujeres - Cancun included. Breakfast, lunch and national drinks included as well as access to the Beach Club in Isla Mujeres. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the Resort at least 48 hours prior check in to arrange the transfer from the airport.   <b>Children stay & eat Free at the Resort:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  *Restrictions: The minimum lenght of stay is 3 nights, however this may vary depending on the season. Does not include ground transportation or Photo Package at the Tour. <b>* NOTE:</b> Mandatory docking fee ($10 USD) payable directly at the dock, not included in the rate.  <b>*Black Out Dates:</b> July 1st, 2019 to August 23, 2019.
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
            'ihotelier_id'=>'3677033',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        2=>[
            'name'=>'The Royal Cancun All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-cancun',
            'slug'=>'the-royal-cancun',
            'stars'=>'4.5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'May 1st, 2019 and Dec. 15, 2019',            
            'bullets'=>'
                <li>2 Swim with Dolphins Tour</li>
                <li>Children stay Free at the Resort</li>
                <br>
                        
            ',
            'discount_label'=>'40% + 10% OFF',
            'view_more'=>'
                    
                    <p>
                    If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                    </p>
                    <p>
                    Book from March 8 to April 8<br>
                    Travel Between May 1st, 2019 and Dec. 15, 2019
                    </p>
                    <p>40% + 10% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
                         <li>2 Swim with Dolphins Tour (Swim Adventure Experience)</li>
                         <li>Ferry Cancun - Isla Mujeres - Cancun</li>
                         <li>Breakfast, Lunch and Drink Included in the tour</li>
                         <li>Access to the Beach Club at Isla Mujeres</li>
                         <li>Children stay FREE at the Resort</li>
                         <li>FREE High speed Wi-Fi in all areas at the Resort</li>
                        </ul>
                    </p>
                    <p class="terms">
                      <b>TERMS & CONDITIONS: * Swim with Dolphins Tour:</b> 50 Min. Dolphin Swim Adventure tour for two people per reservation. Ferry Cancun - Isla Mujeres - Cancun included. Breakfast, lunch and national drinks included as well as access to the Beach Club in Isla Mujeres.  <b>Children stay Free at the Resort:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available.  <b>*Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season. Does not include ground transportation or Photo Package at the Tour. <b>* NOTE:</b> Mandatory docking fee ($10 USD) payable directly at the dock, not included in the rate.  <b>*Black Out Dates:</b> July 1st, 2019 to August 23, 2019.

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
            'ihotelier_id'=>'3679636',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'May 1st, 2019 and Dec. 15, 2019',            
            'bullets'=>'
                <li>2 Swim with Dolphins Tour</li>
                <li>Premium Airport Transfer</li>
                <br>
                        
            ',
            'discount_label'=>'35% + 10% OFF',
            'view_more'=>'
                <p>
                If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from March 8 to April 8
                <br>
                Travel Between May 1st, 2019 and Dec. 15, 2019
                </p>

                <p><b>35% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
 <li>2 Swim with Dolphins Tour (Swim Adventure Experience)</li>
 <li>Ferry Cancun - Isla Mujeres - Cancun</li>
 <li>Breakfast, Lunch and Drink Included in the tour</li>
 <li>Access to the Beach Club at Isla Mujeres</li>
<li>Premuim Aiport Roundtrip Transportation from airport</li>
<li>Children stay FREE at the Resort </li>
<li>FREE High speed Wi-Fi in all areas at the Resort</li>
 </ul>
                </p>

                <p class="terms">
               
<b>TERMS & CONDITIONS: * Swim with Dolphins Tour:</b> 50 Min. Dolphin Swim Adventure tour for two people per reservation. Ferry Cancun - Isla Mujeres - Cancun included. Breakfast, lunch and national drinks included as well as access to the Beach Club in Isla Mujeres. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the Resort at least 48 hours prior check in to arrange the transfer from the airport.   <b>Children stay & eat Free at the Resort:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season. Does not include ground transportation or Photo Package at the Tour. <b>* NOTE:</b> Mandatory docking fee ($10 USD) payable directly at the dock, not included in the rate.  <b>*Black Out Dates:</b> July 1st, 2019 to August 23, 2019.
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
            'ihotelier_id'=>'3677043',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        4=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'May 1st, 2019 and Dec. 15, 2019',            
            'bullets'=>'
                <li>2 Swim with Dolphins Tour</li>
                <li>Daily breakfast included</li>
                <li>Premium Airport Transfer</li>          
            ',
            'discount_label'=>'35% + 10% OFF',
            'view_more'=>'
                <p>
                If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from March 8 to April 8
                <br>
                Travel Between May 1st, 2019 and Dec. 15, 2019
                </p>

                <p><b>35% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
 <li>2 Swim with Dolphins Tour (Swim Adventure Experience)</li>
 <li>Ferry Cancun - Isla Mujeres - Cancun</li>
 <li>Breakfast, Lunch and Drink Included in the tour</li>
 <li>Access to the Beach Club at Isla Mujeres</li>
<li>Daily breakfast for all at the Resort</li>
<li>Premuim Aiport Roundtrip Transportation from airport</li>
<li>Children stay & eat FREE at the Resort </li>
<li>FREE High speed Wi-Fi in all areas at the Resort</li>
 </ul>
                </p>

                <p class="terms">
               
<b>TERMS & CONDITIONS: * Swim with Dolphins Tour:</b> 50 Min. Dolphin Swim Adventure tour for two people per reservation. Ferry Cancun - Isla Mujeres - Cancun included. Breakfast, lunch and national drinks included as well as access to the Beach Club in Isla Mujeres. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the Resort at least 48 hours prior check in to arrange the transfer from the airport.   <b>Children stay & eat Free at the Resort:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season. Does not include ground transportation or Photo Package at the Tour. <b>* NOTE:</b> Mandatory docking fee ($10 USD) payable directly at the dock, not included in the rate.  <b>*Black Out Dates:</b> July 1st, 2019 to August 23, 2019.
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            // Label filtros
            'filtros'=>'riv-bb',

            'resort_id'=>'95939',
            'ihotelier_id'=>'3677051',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],                

    
    ],



    'expiration'=>'04/08/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'03/08/2019','fin'=>'04/30/2019', ], // mm/dd/yyyy
        1=>['inicio'=>'12/16/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];