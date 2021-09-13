<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'early-offer',
    'thumbnail'=>'abc',
    'title_seo' => 'Easter Vacations | Royal Reservations',
    'alt_banner' => 'Easter Vacations',
    'metadescription' => "Winter is over and the warm Caribbean sun is heating again for all beach lovers! Our resort caters to families and friends and offers two customized plans to choose from: All Inclusive or Accommodation Only, each of them with the best amenities and services as hallmarks of our resort family in Mexico.",


    'title' => 'Easter Vacations',
    'subtitle1' => 'Book Now your Easter Vacations',
    'description1'=>"
    Don\'t miss the opportunity to book your vacations in Cancun or the Riviera Maya at the best possible price with our Easter Offer! <br>

Winter is over and the warm Caribbean sun is heating again for all beach lovers! Our resort caters to families and friends and offers two customized plans to choose from: All Inclusive or Accommodation Only, each of them with the best amenities and services as hallmarks of our resort family in Mexico.<br>

Book now and get the best price in our website. Start packing your swimming suite and flip flops now to live your dream vacation this Ester season!                                
        
    ",
    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'
        Book now in All Inclusive, Bed & Breakfast or European Plan and start enjoying! 
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
            'stars'=>'4.5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'Mar. 30, 2019 and May 5, 2019',            
            'bullets'=>'
                <li>$150 USD Tour Credit</li>
                <li>Meals & drinks included</li>
                <li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'40% + 10% OFF',
            'view_more'=>'
                    
                    <p>
                    Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort.
                    </p>
                    <p>
                    Book from January 21 to April 8<br>
                    Travel Between Mar. 30, 2019 and May 5, 2019
                    </p>
                    <p>40% + 10% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
                             <li>$150 USD Tour Credit</li>
                             <li>Meals & drinks included</li>
                             <li>24 hours room service</li>
                             <li>Children stay & eat FREE</li>
                             <li>FREE High speed Wi-Fi in all areas</li>
                        </ul>
                    </p>
                    <p class="terms">
                        <b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. For the All Inclusive: some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. Children stay & eat Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  *Restrictions: The minimum lenght of stay is 4 nights, however this may vary depending on the season.    

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
            'ihotelier_id'=>'3574937',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa <br>All Inclusive',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa <br>All Inclusive',

            'travel_window'=>'Mar. 30, 2019 and May 5, 2019',            
            'bullets'=>'
                        <li>$150 USD Tour Credit</li>
                        <li>Meals & drinks included</li>
                        <li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'35% + 10% OFF',
            'view_more'=>'
                <p>
                Let us pamper you with a perfect Cancun Vacation with your loved ones in one of the best Beach Resorts in Cancun.
                </p>         

                <p>
                Book from January 21 to April 8<br>
                Travel Between Mar. 30, 2019 and May 5, 2019</b>

                </p>

                <p><b>35% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                     <li>$150 USD Tour Credit</li>
                     <li>Meals & drinks included</li>
                     <li>24 hours room service</li>
                     <li>Children stay & eat FREE</li>
                     <li>FREE High speed Wi-Fi in all areas</li>
                </ul>
                </p>

                <p class="terms">
            <b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. For the All Inclusive: some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. Children stay & eat Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  *Restrictions: The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3574978',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'Mar. 30, 2019 and May 5, 2019',            
            'bullets'=>'
                        <li>$150 USD Tour Credit</li>
                        <li>Meals & drinks included</li>
                        <li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'40% + 10% OFF',
            'view_more'=>'
                <p>
                Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer.
                </p>         

                <p>
                    Book from January 21 to April 8<br>
                    Travel Between Mar. 30, 2019 and May 5, 2019
                </p>

                <p><b>40% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
 <li>$150 USD Tour Credit</li>
 <li>Meals & drinks included</li>
 <li>24 hours room service</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>

                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. For the All Inclusive: some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. Children stay & eat Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  *Restrictions: The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3575009',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mar. 30, 2019 and May 5, 2019',            
            'bullets'=>'
                        <li>$150 USD Resort Credit</li>
                        <li>Premium Airport Transfer</li>
                        <li>Gourmet Meals & drinks included</li>
                        
            ',
            'discount_label'=>'35% OFF',
            'view_more'=>'
                <p>
                If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from January 21 to April 8<br>
                Travel Between Mar. 30, 2019 and May 5, 2019
                </p>

                <p><b>35% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                <li>$150 USD Resort Credit</li>
                 <li>Unlimited Premium meals & drinks</li>
                 <li>24 hours Full room service</li>
                 <li>Premuim Aiport Roundtrip Transportation</li>
                 <li>Children stay & eat FREE</li>
                 <li>FREE High speed Wi-Fi in all areas</li>
                 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:
* Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout. * Children stay & eat Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. * Airport Transportation: One roundtrip service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport.   * Restrictions: The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3574902',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
   

        4=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Mar. 30, 2019 and May 5, 2019',            
            'bullets'=>'
                        <li>$150 USD Tour Credit</li>
                        <li>Children stay Free</li>
                        <br>
                        
            ',
            'discount_label'=>'50% + 10% OFF',
            'view_more'=>'
                <p>
                Book now with Royal Reservations and enjoy your Cancun vacations anytime of this or the next year!
                </p>         

                <p>
                Book from January 21 to April 8<br>
                Travel Between Mar. 30, 2019 and May 5, 2019
                </p>


                <p>
                <b>50% + 10% OFF</b>

                </p>

                <p>
                <b>This Promotion includes:</b>
                 <ul>
                    <li>$150 USD Tour Credit</li>
                    <li>Children stay FREE</li>
                    <li>FREE High speed Wi-Fi in all areas</li>
                 </ul>
                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. Children stay Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Meals: Meals and beverages are not included. *Restrictions: The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3575049',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        5=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Mar. 30, 2019 and May 5, 2019',            
            'bullets'=>'
                        <li>$150 USD Tour Credit</li>
                        <li>Children stay Free</li>
                       <br>
                        
            ',
            'discount_label'=>'40% + 10% OFF',
            'view_more'=>'
                <p>
                This is the perfect time to go on vacations and with this special promo, you will live the best of Cancun with Royal Reservations! 
                </p>         

                <p>
Book from January 21 to April 8<br>
Travel Between Mar. 30, 2019 and May 5, 2019
                </p>

                <p><b>40% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
<li>$150 USD Tour Credit</li>
 <li>Children stay FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. Children stay Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Meals: Meals and beverages are not included. *Restrictions: The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3575028',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        6=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mar. 30, 2019 and May 5, 2019',            
            'bullets'=>'
                        <li>$150 USD Tour Credit</li>
                        <li>Premium Airport Transfer</li>
                        <br>
                        
            ',
            'discount_label'=>'35% + 10% OFF',
            'view_more'=>'
                <p>
                Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island! 
                </p>         

                <p>
Book from January 21 to April 8<br>
Travel Between Mar. 30, 2019 and May 5, 2019
                </p>

                <p><b>35% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
<li>$150 USD Resort Credit</li>
 <li>Premuim Aiport Roundtrip Transportation</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </li>
                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS:
* Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout. * Children stay Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. * Airport Transportation: One roundtrip service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport.   * Restrictions: The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3574916',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

    

7=>[
    'name'=>'Grand Residences Riviera Cancun',
    'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
    'slug'=>'grand-residences-riviera-cancun',
    'stars'=>'5',
    'alt'=>'Grand Residences Riviera Cancun',

    'travel_window'=>'Mar. 30, 2019 and May 5, 2019',            
    'bullets'=>'
                <li>$150 USD Resort Credit</li>
                <li>Premium Airport Transfer</li>
                <li>Daily Beakfast for all </li>
                
    ',
    'discount_label'=>'35% + 10% OFF',
    'view_more'=>'
        <p>
        The beginning of the year brings the perfect gift for you with this Royal Reservation vacation special to the Riviera Maya! 
        </p>         

        <p>
Book from January 21 to April 8<br>
Travel Between Mar. 30, 2019 and May 5, 2019
        </p>

        <p><b>35% + 10% OFF</b></p>


        <p>
        <b>This Promotion includes:</b>
<ul>
 <li>$150 USD Resort Credit</li>
 <li>Premuim Aiport Roundtrip Transportation</li>
 <li>Daily buffet breakfast for all</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
</li>
        </p>

        <p class="terms">
<b>
TERMS & CONDITIONS:
* Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout. * Children stay & eat Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children under 12 years old can take daily beakfast with mom and dad. * Airport Transportation: One roundtrip service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport.   * Restrictions: The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
    'ihotelier_id'=>'3574926',
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