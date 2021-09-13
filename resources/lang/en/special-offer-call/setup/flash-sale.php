<?php

return [
    'slug' => 'flash-sale',
    'thumbnail'=>'abc',
    'title_seo' => 'FLASH SALE! | Royal Reservations',
    'alt_banner' => 'FLASH SALE!',
    'metadescription' => "You only have a few days to make up your mind and decide for those well-deserved beachfront vacations you have been dreaming of. Our Flash Sale offers the highest discount in our website. ",

    'title' => 'FLASH SALE!',
    'subtitle1' => 'Only 5 days of Big Discounts',
    'description1'=>"
    You only have a few days to make up your mind and decide for those well-deserved beachfront vacations you have been dreaming of. Our Flash Sale offers the highest discount in our website. <br>

Note: it is only available for 5 days! Book between January 15th and January 20th and get the best deal. <br>

Royal Reservations offers top resorts catering for families and friends.<br>
        
    ",
    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'
        Book now in All Inclusive, Bed & Breakfast or European Plan and start enjoying! 
    ',


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => '02/04/2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Cancun','value'=>'cun'],
        1=>['name'=>'Riviera Maya','value'=>'riv'],
        2=>['name'=>'Playa del Carmen','value'=>'pla'],
        3=>['name'=>'Sint Maarten','value'=>'sin'],
        4=>['name'=>'Curacao','value'=>'cur'],
        5=>['name'=>'Punta Cana','value'=>'pun'],
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
            'stars'=>'5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'January 15 and Jan. 3, 2020',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Meals & drinks included</li>
                        <li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'40% + 12% OFF',
            'view_more'=>'
                    
                    <p>
                    "ONLY 5 DAYS!<br>

Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort."
                    </p>
                    <p>
                    Book from <b>January 15 to January 20</b><br>
                    Travel Between <b>Jan. 15, 2019 </b> and <b>Jan. 3, 2020</b>
                    </p>
                    <p>40% + 12% OFF</p>
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
                    <b>TERMS & CONDITIONS: For the All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. Children stay & eat Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  *Restrictions: The minimum lenght of stay may vary depending on the season.

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
            'ihotelier_id'=>'2808311',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa <br>All Inclusive',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'5',
            'alt'=>'The Royal Sands Resort & Spa <br>All Inclusive',

            'travel_window'=>'Jan. 15, 2019 and Jan. 3, 2020',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Meals & drinks included</li>
                        <li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'35% + 12% OFF',
            'view_more'=>'
                <p>
                "ONLY 5 DAYS!<br>

Let us pamper you with a perfect Cancun Vacation with your loved ones in one of the best Beach Resorts in Cancun."
                </p>         

                <p>
                Book from <b>January 15 to January 20</b><br>
                Travel Between <b>Jan. 15, 2019</b> and <b>Jan. 3, 2020</b>

                </p>

                <p><b>35% + 12% OFF</b></p>


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
                <b>TERMS & CONDITIONS: For the All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. Children stay & eat Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  *Restrictions: The minimum lenght of stay may vary depending on the season.
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
            'ihotelier_id'=>'2808321',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'Jan. 15, 2019 and Jan. 3, 2020',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Meals & drinks included</li>
                        <li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'40% + 12% OFF',
            'view_more'=>'
                <p>
                "ONLY 5 DAYS!<br>

Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer."
                </p>         

                <p>
Book from January 15 to January 20<br>
Travel Between Jan. 15, 2019 and Jan. 3, 2020
                </p>

                <p><b>40% + 12% OFF</b></p>


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
                <b>TERMS & CONDITIONS: For the All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. Children stay & eat Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  *Restrictions: The minimum lenght of stay may vary depending on the season.
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
            'ihotelier_id'=>'2808328',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Today to 03/01/2020',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Premium Airport Transfer</li>
                        <li>Gourmet Meals & drinks included</li>
                        
            ',
            'discount_label'=>'35% + 12% OFF',
            'view_more'=>'
                <p>
                "ONLY 5 DAYS!<br>

If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort."
                </p>         

                <p>
                Book from January 15 to January 20<br>
                Travel Between Jan. 15, 2019 and Jan. 3, 2020
                </p>

                <p><b>35% + 12% OFF</b></p>


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
                <b>TERMS & CONDITIONS:
* Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. * Airport Transportation: One roundtrip service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport.   * Restrictions: The minimum lenght of stay is 3 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'2808347',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],  

        4=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'4',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Jan. 15, 2019 and Jan. 3, 2020',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Children stay Free</li>
                        <br>
                        
            ',
            'discount_label'=>'50% + 12% OFF',
            'view_more'=>'
                <p>
                "ONLY 5 DAYS!<br>

Book now with Royal Reservations and enjoy your Cancun vacations anytime of this or the next year!"
                </p>         

                <p>
                Book from January 15 to January 20<br>
                Travel Between Jan. 15, 2019 and Jan. 3, 2020
                </p>


                <p>
                <b>50% + 12% OFF</b>

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
                <b>TERMS & CONDITIONS: Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Meals: Meals and beverages are not included. *Restrictions: The minimum lenght of stay may vary depending on the season.
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
            'ihotelier_id'=>'2808341',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        5=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Jan. 15, 2019 and Jan. 3, 2020',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Children stay Free</li>
                       <br>
                        
            ',
            'discount_label'=>'40% + 12% OFF',
            'view_more'=>'
                <p>
                "ONLY 5 DAYS!<br>

This is the perfect time to go on vacations and with this special promo, you will live the best of Cancun with Royal Reservations! "
                </p>         

                <p>
                Book from January 15 to January 20<br>
                Travel Between Jan. 15, 2019 and Jan. 3, 2020
                </p>

                <p><b>40% + 12% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
<li>Special Discount</li>
<li>Children stay FREE</li>
<li>FREE High speed Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS: Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Meals: Meals and beverages are not included. *Restrictions: The minimum lenght of stay may vary depending on the season.
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
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        6=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Jan. 15, 2019 and Jan. 3, 2020',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Premium Airport Transfer</li>
                        <br>
                        
            ',
            'discount_label'=>'35% + 12% OFF',
            'view_more'=>'
                <p>
                "ONLY 5 DAYS!<br>

The beginning of the year brings the perfect gift for you with this Royal Reservation vacation special to the Riviera Maya! "
                </p>         

                <p>
                Book from January 15 to January 20<br>
                Travel Between Jan. 15, 2019 and Jan. 3, 2020
                </p>

                <p><b>35% + 12% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
<li>Special Discount</li>
<li>Premuim Aiport Roundtrip Transportation</li>
<li>Children stay & eat FREE</li>
<li>FREE High speed Wi-Fi in all areas</li>
 </li>
                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS:
* Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. * Airport Transportation: One roundtrip service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport.   * Restrictions: The minimum lenght of stay is 3 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3570140',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        7=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Jan. 15, 2019 and Jan. 3, 2020',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Free Wi-Fi</li>
                        <br>
                        
            ',
            'discount_label'=>'45% + 12% OFF',
            'view_more'=>'
                <p>
                Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island! 
                </p>         

                <p>
                Book from January 15 to January 20<br>
                Travel Between Jan. 15, 2019 and Jan. 3, 2020
                </p>

                <p><b>45% + 12% OFF</b></p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
                    <li>Special Discount</li>
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

            'resort_id'=>'86179',
            'ihotelier_id'=>'2808359',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],



        8=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Jan. 15, 2019 and Jan. 3, 2020',            
            'bullets'=>'
                        <li>Special Discount</li>
                        <li>Free WiFi</li>
                        <br>
                        
            ',
            'discount_label'=>'45% + 12% OFF',
            'view_more'=>'
                 <p>
                 With this special offer, you and your companions will experience the great Caribbean ambiance, its culture and hot weather to escape the cold and relax on the beach.
                </p>         

                <p>
                Book from January 15 to January 20<br>
                Travel Between Jan. 15, 2019 and Jan. 3, 2020
                </p>

                <p><b>45% + 12% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                <li>Special Discount</li>
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

            'resort_id'=>'86180',
            'ihotelier_id'=>'2808366',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ], 


    9=>[
        'name'=>'The Royal Sea Aquarium Resort',
        'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sea-aquarium',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'4',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'Jan. 15, 2019 and Jan. 3, 2020',            
        'bullets'=>'
                    <li>Special Discount</li>
                    <li>Free Wi-Fi</li>
                    <br>
                    
        ',
        'discount_label'=>'35% + 10% OFF',
        'view_more'=>'
            <p>
            Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer! 
            </p>         

            <p>
            Book from January 15 to January 20<br>
            Travel Between Jan. 15, 2019 and Jan. 3, 2020
            </p>

            <p><b>35% + 10% OFF</b></p>


            <p>
            <b>This Promotion includes:</b>
            <ul>

<li> Special Discount</li>
<li> FREE Wi-Fi in all areas</li>
</ul>
            </p>

            <p class="terms">
            <b>TERMS & CONDITIONS: Meals:</b> Meals and beverages are not included. *Restrictions: The minimum lenght of stay may vary depending on the season.
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
        'ihotelier_id'=>'2808377',
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