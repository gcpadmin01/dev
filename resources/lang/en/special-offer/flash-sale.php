<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'flash-sale',
    'thumbnail'=>'',
    'title_seo' => "HOTTEST FLASH SALE | Royal Reservations",
    'alt_banner' => "HOTTEST FLASH SALE",
    'metadescription' => "Take advantage of our Hottest Flash Sale and book those stress-free beachfront vacations in Cancun, the Riviera Maya, St Maarten or Curacao for a great price!  ",

    'title' => "HOTTEST FLASH SALE",
    'subtitle1' => 'BOOK NOW AND TRAVEL ANYTIME OF THE YEAR!',
    'description1'=>"
Take advantage of our Hottest Flash Sale and book those stress-free beachfront vacations in Cancun, the Riviera Maya, St Maarten or Curacao for a great price!<br>

Whether you are looking to take the family away or have a fun getaway with friends, staying in our resorts will offer you the ultimate seaside experience with amazing amenities and services.<br>

Just choose the accommodation package you prefer!                                                                                                                            
    ",
    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'Book now in All Inclusive or Accommodation Only Plans and start enjoying!',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'June 2nd, 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
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

            'travel_window'=>'May 24th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                <li>Special Discount</li>
                <li>Meals & drinks included</li>
                <li>Children stay & eat Free</li>
            ',
            'discount_label'=>'40% + 15% OFF',
            'view_more'=>'
                    
                    <p>
                    
                    Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort.
                    </p>
                    <p>
                    Book from May 24th to June 2nd
                    <br>
                    Travel Between May 24th, 2019 and Jan. 1st, 2021
                    </p>
                    <p>40% + 15% OFF</p>
                    <p><b>This Promotion includes:</b>

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
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'cun-ai',

            'resort_id'=>'73601',
            'ihotelier_id'=>'3449741',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa All Inclusive',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa All Inclusive',

            'travel_window'=>'May 24th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                <li>Special Discount</li>
                <li>Meals & drinks included</li>
                <li>Children stay & eat Free</li>
            ',
            'discount_label'=>'35% + 15% OFF',
            'view_more'=>'
                <p>
                Let us pamper you with a perfect Cancun Vacation with your loved ones in one of the best Beach Resorts in Cancun.
                </p>         

                <p>
                Book from May 24th to June 2nd
                <br>
                Travel Between May 24th, 2019 and Jan. 1st, 2021

                </p>

                <p><b>35% + 15% OFF</b></p>


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
            'ihotelier_id'=>'3449852',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'May 24th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                <li>Special Discount</li>
                <li>Meals & drinks included</li>
                <li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'40% + 15% OFF',
            'view_more'=>'
                <p>
Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer.
                </p>         

                <p>
Book from May 24th to June 2nd
<br>
Travel Between May 24th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>40% + 15% OFF</b></p>


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
            'ihotelier_id'=>'3451817',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'May 24th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
<li>Special Discount</li>
<li>Meals & drinks included</li>
<li>Premium Airport Transfer</li>
                        
            ',
            'discount_label'=>'35% + 18% OFF',
            'view_more'=>'
                <p>              
If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from May 24th to June 2nd
                <br>
                Travel Between May 24th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>35% + 18% OFF</b></p>


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
<b>TERMS & CONDITIONS:</b>
<b>* Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the rpoperty at least 48 hours prior check in to arrange the transfer from the airport.   <b>* Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season.                
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
            'ihotelier_id'=>'3452073',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],  

        4=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'May 24th, 2019 and Sep. 1st, 2021',            
            'bullets'=>'
                <li>Special Discount</li>
                <li>Children stay & eat Free</li>
                <br>
                        
            ',
            'discount_label'=>'50% + 15% OFF',
            'view_more'=>'
                <p>
Book now with Royal Reservations and enjoy your Cancun vacations anytime of this or the next year!
                </p>         

                <p>
                Book from May 24th to June 2nd
                <br>
                Travel Between May 24th, 2019 and Sep. 1st, 2021
                </p>


                <p>
                <b>50% + 15% OFF</b>

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
                <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. <b>Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available.  <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
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
            'ihotelier_id'=>'3466734',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        5=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'May 24th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Children stay Free</li>
                       <br>
                        
            ',
            'discount_label'=>'40% + 15% OFF',
            'view_more'=>'
                <p>
This is the perfect time to go on vacations and with this special promo, you will live the best of Cancun with Royal Reservations!
                </p>         

                <p>
                Book from May 24th to June 2nd
                <br>
                Travel Between May 24th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>40% + 15% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
<li>Special Discount</li>
<li>Children stay FREE</li>
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
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'86182',
            'ihotelier_id'=>'3451921',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],




        6=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'May 24th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Free Wi-Fi</li>
                        <br>
                        
            ',
            'discount_label'=>'45% + 15% OFF',
            'view_more'=>'
                <p>
                Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island!
                </p>

                <p>
                Book from May 24th to June 2nd
                <br>
                Travel Between May 24th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>45% + 15% OFF</b></p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
                    <li>Special Discount</li>
                    <li>FREE Wi-Fi</li>
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
            'ihotelier_id'=>'3452343',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],



        7=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'May 24th, 2019 and Jan. 1st, 2021',            
            'bullets'=>'
                        
                        <li>Free WiFi</li>
                        <br><br>
                        
            ',
            'discount_label'=>'45% + 15% OFF',
            'view_more'=>'
                 <p>
                With this special offer, you and your companions will experience the great Caribbean ambiance, its culture and hot weather to escape the cold and relax on the beach.
                </p>         

                <p>
                Book from May 24th to June 2nd
                <br>
                Travel Between May 24th, 2019 and Jan. 1st, 2021
                </p>

                <p><b>45% + 15% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                <li>Special Discount</li>
                <li>FREE Wi-Fi</li>
                </ul>

                </p>

                <p class="terms">
               <b>TERMS & CONDITIONS:</b> <b>Meals:</b> Meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season. 
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
            'ihotelier_id'=>'3452371',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ], 


    8=>[
        'name'=>'The Royal Sea Aquarium Resort',
        'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sea-aquarium',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'3.5',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'May 24th, 2019 and Jan. 1st, 2021',            
        'bullets'=>'
                    
                    <li>Free Wi-Fi</li>
                    <br><br>
                    
        ',
        'discount_label'=>'35% + 12% OFF',
        'view_more'=>'
            <p>
Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer!
            </p>         

            <p>
            Book from May 24th to June 2nd
            <br>
            Travel Between May 24th, 2019 and Jan. 1st, 2021
            </p>

            <p><b>35% + 12% OFF</b></p>


            <p>
            <b>This Promotion includes:</b>
            <ul>

<li> Special Discount</li>
<li> FREE Wi-Fi</li>
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
        'rate_plan'=>'2',
        // Label filtros
        'filtros'=>'cur-ep',

        'resort_id'=>'86181',
        'ihotelier_id'=>'3456345',
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