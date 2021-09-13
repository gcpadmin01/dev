<?php

return [
    'template' => '1', // 1=Bloques   0=Defaul
    'file' => 'gif',
    'slug' => 'special-offers',
    'thumbnail'=>'',
    'title_seo' => 'Unlimited Package | Royal Reservations',
    'alt_banner' => 'Unlimited Package',
    'metadescription' => "This promotion brings you the perfect opportunity to book now your next Caribbean Family Vacations with excellent discounts in any of our beachfront resorts.",


    'title' => 'UNLIMITED PACKAGE',
    'subtitle1' => 'BOOK NOW AND TRAVEL ANYTIME OF THE YEAR!',
    'description1'=>"
        This promotion brings you the perfect opportunity to book now your next Caribbean Family Vacations with excellent discounts in any of our beachfront resorts. 

        Choose your destination for your next vacation and enjoy the benefits of your rate plan and resort, such as Resort Credit, Free Transfers, Free Breakfast, Spa Credit and more.
    ",

    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'
        Book now in All Inclusive or Accommodation Only Plans and start enjoying!
    ',

    // Se llena para el template por Bloques (1)
    'subtitle3' => 'Do you want other Accommodation Plans?',
    'description3'=>'Book now your vacations with accommodation only plan and enjoy the amenities and services of the resort of your choice.',
    //------------------------------------------------------------------------

    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'July 1st, 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Cancun','value'=>'cun'],
        1=>['name'=>'Riviera Maya','value'=>'riv'],
        2=>['name'=>'Playa del Carmen','value'=>'pla'],
        3=>['name'=>'Sint Maarten','value'=>'sin'],
        4=>['name'=>'Curacao','value'=>'cur'],
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
                <li>Free Transfers</li>
                <li>200 USD Resort Credit</li>
                <li>Meals & drinks included</li>
                        
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                    
                    <p>
                    Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort.
                    </p>
                    <p>
                    Book from May 6th to July 1st<br>
                    Travel Between May 6th, 2019 and Jan. 1st, 2021
                    </p>
                    <p>46% OFF</p>
                    <p>
                        <b>This Promotion includes:</b>
                        <ul>
                         <li>Free Transfers</li>
                         <li>$200 Resort Credit</li>
                         <li>Meals & drinks included</li>
                         <li>24 hours room service</li>
                         <li>Children stay & eat FREE</li>
                         <li>FREE High speed Wi-Fi in all areas</li>
                        </ul>
                    </p>
                    <p class="terms">
                       <b>TERMS & CONDITIONS: For the All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
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
            'ihotelier_id'=>'3781730',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa All Inclusive',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa All Inclusive',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                <li>Free Transfers</li>
                <li>150 USD Spa Credit</li>
                <li>Meals & drinks included</li>
            ',
            'discount_label'=>'40% OFF',
            'view_more'=>'
                <p>
                    Let us pamper you with a perfect Cancun Vacation with your loved ones in one of the best Beach Resorts in Cancun.
                </p>         

                <p>
                    Book from May 6th to July 1st<br>
                    Travel Between May 6th, 2019 and Jan. 1st, 2021
                </p>

                <p>40% OFF</p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
                    <li>Special Discount</li>
                    <li>Meals & drinks included</li>
                    <li>24 hours room service</li>
                    <li>Children stay & eat FREE</li>
                    <li>FREE High speed Wi-Fi in all areas</li>
                    
                </ul>
                </p>

                <p class="terms">
                    <b>TERMS & CONDITIONS: For the All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
                </p>

            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'cun-ai',

            'resort_id'=>'86169',
            'ihotelier_id'=>'3781747',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                <li>Free Transfers</li>
                <li>150 USD Spa Credit</li>
                <li>Meals & drinks included</li>
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                <p>
                    Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer.
                </p>         

                <p>
                    Book from May 6th to July 1st<br>
                    Travel Between May 6th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>46% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

                <ul>
                     <li>Special Discount</li>
                     <li>Meals & drinks included</li>
                     <li>24 hours room service</li>
                     <li>Children stay & eat FREE</li>
                     <li>FREE High speed Wi-Fi in all areas</li>
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

            'resort_id'=>'86184',
            'ihotelier_id'=>'3781764',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
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
                     <li>FREE High speed Wi-Fi in all areas</li>
                 </ul>
                </p>

                <p class="terms">
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

        4=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'May 6th, 2019 and Sep. 1st, 2021',
            'bullets'=>'
                        <li>Free Breakfast for all</li>
                        <li>Children stay Free</li>
                        
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
                     <li>Special Discount</li>
                     <li>Children stay FREE</li>
                     <li>FREE High speed Wi-Fi in all areas</li>
                 </ul>
                </p>

                <p class="terms">
                    <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. <b>Children stay Free: </b>Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available.  <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
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

        5=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                        <li>Free Breakfast for all</li>
                        <li>50 USD Tour Credit</li>
                        <li>Children stay Free</li>
            ',
            'discount_label'=>'44% OFF',
            'view_more'=>'
                <p>
                    This is the perfect time to go on vacations and with this special promo, you will live the best of Cancun with Royal Reservations!
                </p>         

                <p>
                    Book from May 6th to July 1st
                    <br>
                    Travel Between May 6th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>44% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

                    <ul>
                     <li>Special Discount</li>
                     <li>Children stay FREE</li>
                     <li>FREE High speed Wi-Fi in all areas</li>
                    </ul>
                </p>

                <p class="terms">
                    <b>TERMS & CONDITIONS: For the All Inclusive: </b>some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
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




        /*6=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Apr. 1, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                <li>Free Daily Buffet Breakfast</li>
                <li>Premium Airport Transfer</li>
                <li>Children stay Free</li>
                        
            ',
            'discount_label'=>'38% OFF',
            'view_more'=>'
                <p>
                If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from April 1 to May 6
                <br>
                Travel Between Apr. 1, 2019 and Jan. 1, 2021
                </p>

                <p><b>38% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                    <ul>
                     <li>Free Daily Breakfast for all</li>
                     <li>Premuim Aiport Roundtrip Transportation</li>
                     <li>Children stay FREE</li>
                     <li>FREE High speed Wi-Fi in all areas</li>
                    </ul>
                </p>

                <p class="terms">
               
                    <b>TERMS & CONDITIONS: *Free Breakfast:</b> Daily buffet breakfast for all confirmed guests. Additional meals and beverages are not included. <b>* Children stay  Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the Resort at least 48 hours prior check in to arrange the transfer from the airport.   <b>* Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season.

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
        ],*/



        6=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                        <li>Free Wi-Fi</li>
                        <br><br>
            ',
            'discount_label'=>'50% OFF',
            'view_more'=>'
                <p>
                    Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island! 
                </p>         

                <p>
                    Book from May 6th to July 1st<br>
                    Travel Between May 6th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>50% OFF</b></p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
                     <li> Special Discount</li>
                     <li> Free Wi-Fi</li>
                </ul>
                </p>

                <p class="terms">
                    <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
                </p>     
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'sin-ep',

            'resort_id'=>'86179',
            'ihotelier_id'=>'3549396',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        7=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                        <li>Free WiFi</li>
                        <br><br>
            ',
            'discount_label'=>'50% OFF',
            'view_more'=>'
                 <p>
                 With this special offer, you and your companions will experience the great Caribbean ambiance, its culture and hot weather to escape the cold and relax on the beach.
                </p>         

                <p>
                    Book from May 6th to July 1st
                    <br>
                    Travel Between May 6th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>50% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                 <li> Special Discount</li>
                 <li> Free Wi-Fi</li>
                </ul>

                </p>

                <p class="terms">
                    <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
                </p>     
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'sin-ep',

            'resort_id'=>'86180',
            'ihotelier_id'=>'3549417',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ], 

    8=>[
        'name'=>'The Royal Sea Aquarium Resort',
        'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sea-aquarium/the-royal-sea-aquarium-resort',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'3.5',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
        'bullets'=>'
                    
                    <li>Free Wi-Fi</li>
                    <br><br>
                    
        ',
        'discount_label'=>'40% OFF',
        'view_more'=>'
            <p>
                Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer! 
            </p>         

            <p>
                Book from May 6th to July 1st<br>
                Travel Between May 6th, 2019 and Jan. 1st, 2021
            </p>

            <p><b>40% OFF</b></p>


            <p>
            <b>This Promotion includes:</b>
            <ul>
                <li>Special Discount</li>
                <li>Free Wi-Fi"</li>
                
            </ul>
            </p>

            <p class="terms">
            <b>TERMS & CONDITIONS: *Restrictions:</b> The minimum lenght of stay may vary depending on the season.
            </p>      
        ',

        //configuración 
        //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
        'destination'=>'5',
        // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
        'rate_plan'=>'2',
        // Label filtros
        'filtros'=>'cur-ep',

        'resort_id'=>'86181',
        'ihotelier_id'=>'3550440',
        'tipo'=>'1', // 1 RatePlanID   --  2 Package
        'code'=>'', // 
],   


    9=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                        <li>Free Wi-Fi</li>
                        <br>
                        
            ',
            'discount_label'=>'50% OFF',
            'view_more'=>'
                <p>
                    Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island! 
                </p>         

                <p>
                    Book from May 6th to July 1st<br>
                    Travel Between May 6th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>50% OFF</b></p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
                     <li>Special Discount</li>
                     <li>Free Wi-Fi"</li>
                </ul>
                </p>

                <p class="terms">
                    <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
                </p>     
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            // Label filtros
            'filtros'=>'sin-bb',

            'resort_id'=>'86179',
            'ihotelier_id'=>'3549401',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],



        10=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                        <li>Free WiFi</li>
                        <br><br>
                        
            ',
            'discount_label'=>'50% OFF',
            'view_more'=>'
                 <p>
                 With this special offer, you and your companions will experience the great Caribbean ambiance, its culture and hot weather to escape the cold and relax on the beach.
                </p>         

                <p>
                    Book from May 6th to July 1st
                    <br>
                    Travel Between May 6th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>50% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                     <li> Special Discount</li>
                     <li> Free Wi-Fi</li>
                </ul>

                </p>

                <p class="terms">
                    <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
                </p>     
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            // Label filtros
            'filtros'=>'sin-bb',

            'resort_id'=>'86180',
            'ihotelier_id'=>'3549426',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ], 


    11=>[
        'name'=>'The Royal Sea Aquarium Resort',
        'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sea-aquarium/the-royal-sea-aquarium-resort',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'3.5',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'May 6th, 2019 and Jan. 1st, 2021',            
        'bullets'=>'
                    <li>Free Wi-Fi</li>
                    <br>
                    
        ',
        'discount_label'=>'40% OFF',
        'view_more'=>'
            <p>
                Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer! 
            </p>         

            <p>
                Book from May 6th to July 1st
                <br>
                Travel Between May 6th, 2019 and Jan. 1st, 2021
            </p>

            <p><b>40% OFF</b></p>


            <p>
            <b>This Promotion includes:</b>
            <ul>
                 <li> Special Discount</li>
                 <li> Free Wi-Fi"</li>
            </ul>
            </p>

            <p class="terms">
                <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
            </p>      
        ',

        //configuración 
        //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
        'destination'=>'5',
        // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
        'rate_plan'=>'3',
        // Label filtros
        'filtros'=>'cur-bb',

        'resort_id'=>'86181',
        'ihotelier_id'=>'3550445',
        'tipo'=>'1', // 1 RatePlanID   --  2 Package
        'code'=>'', // 
],        

    
    ],



    'expiration'=>'05/01/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'03/05/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];