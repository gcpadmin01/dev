<?php

return [
    'template' => '1', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'summer-sale',
    'thumbnail'=>'',
    'title_seo' => 'SUMMER PRE-SALE | Royal Reservations',
    'alt_banner' => 'SUMMER PRE-SALE',
    'metadescription' => "Book now those summer vacations you have been waiting for with your family and friends. Stay in any of our Cancun or Riviera Maya resorts, facing the stunning turquoise Caribbean and offering the great amenities and services of our All Inclusive, Bed & Breakfast or Accommodation Only Plans.",


    'title' => 'SUMMER PRE-SALE',
    'subtitle1' => 'Book Now and Travel Between June 8th and September 20th',
    'description1'=>"
    Book now those summer vacations you have been waiting for with your family and friends. Stay in any of our Cancun or Riviera Maya resorts, facing the stunning turquoise Caribbean and offering the great amenities and services of our All Inclusive or Accommodation Only Plans.<br>

Get with this offer up to 56% discount on your reservation. Travel between June 8th - September 20th.                                                             
    ",

    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'
        Book now in All Inclusive or Accommodation Only Plans and start enjoying.
    ',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------    


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'May 6th,2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Cancun','value'=>'cun'],
        1=>['name'=>'Riviera Maya','value'=>'riv'],
        2=>['name'=>'Playa del Carmen','value'=>'pla'],
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

            'travel_window'=>'June 8, 2019 and Sep. 20, 2019',            
            'bullets'=>'
<li>$150 USD Tour Credit</li>
<li>Meals & drinks included</li>
<li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                    
                    <p>
                    Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort.
                    </p>
                    <p>
                    Book from April 1 to May 6
                    <br>
                    Travel Between June 8, 2019 and Sep. 20, 2019
                    </p>
                    <p>46% OFF</p>
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
<b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. For the All Inclusive: some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay is 4 nights, however this may vary depending on the season.    

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
            'ihotelier_id'=>'3709714',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa All Inclusive',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa All Inclusive',

            'travel_window'=>'June 8, 2019 and Sep. 20, 2019',            
            'bullets'=>'
<li>$150 USD Tour Credit</li>
<li>Meals & drinks included</li>
<li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'41% OFF',
            'view_more'=>'
                <p>
                Let us pamper you with a perfect Cancun Vacation with your loved ones in one of the best Beach Resorts in Cancun.
                </p>         

                <p>
                Book from April 1 to May 6<br>
                Travel Between June 8, 2019 and Sep. 20, 2019

                </p>

                <p>41% OFF</p>


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
<b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. <b>For the All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3709809',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'June 8, 2019 and Sep. 20, 2019',            
            'bullets'=>'
<li>$150 USD Tour Credit</li>
<li>Meals & drinks included</li>
<li>Children stay & eat Free</li>
                        
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                <p>
                Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer.
                </p>         

                <p>
                    Book from April 1 to May 6<br>
                    Travel Between June 8, 2019 and Sep. 20, 2019
                </p>

                <p><b>46% OFF</b></p>


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
<b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. <b>For the All Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3709861',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'June 8, 2019 and Sep. 20, 2019',            
            'bullets'=>'
                <li>$150 USD Resort Credit</li>
                <li>30 Min. Massage for two</li>
                <li>Premium Airport Transfer</li>
                        
            ',
            'discount_label'=>'43% OFF',
            'view_more'=>'
                <p>
If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from April 1 to May 6
                <br>
                Travel Between June 8, 2019 and Sep. 20, 2019
                </p>

                <p><b>43% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
<ul>
 <li>$150 USD Resort Credit</li>
 <li>1 Spa Massage 30 Min. for two</li>
 <li>Unlimited Premium meals & drinks</li>
 <li>24 hours Full room service</li>
 <li>Premuim Aiport Roundtrip Transportation</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
               
<b>TERMS & CONDITIONS: * Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout. <b>* Spa Massage:</b> The One 30-minute Spa Massage is valid for two people, one time. Service requires reservation in advance. Tips for massage service are not included. <b>* Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the Resort at least 48 hours prior check in to arrange the transfer from the airport.   <b>* Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3710052',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        4=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'June 8, 2019 and Sep. 20, 2019',            
            'bullets'=>'
                    <li>$100 USD Tour Credit</li>
                    <li>Children stay Free</li>
                    <br>
                        
            ',
            'discount_label'=>'55% OFF',
            'view_more'=>'
                <p>
                Book now with Royal Reservations and enjoy your Cancun vacations anytime of this or the next year!
                </p>         

                <p>
                Book from April 1 to May 6
                <br>
                Travel Between June 8, 2019 and Sep. 20, 2019
                </p>


                <p>
                <b>55% OFF</b>

                </p>

                <p>
                <b>This Promotion includes:</b>
                 <ul>
                    <li>$100 USD Tour Credit</li>
                     <li>Children stay FREE</li>
                     <li>FREE High speed Wi-Fi in all areas</li>
                 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. <b>Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. <b>Meals:</b> Meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3709921',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        5=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'June 8, 2019 and Sep. 20, 2019',            
            'bullets'=>'
                <li>$100 USD Tour Credit</li>
                <li>Children stay Free</li>
                <br>
                        
            ',
            'discount_label'=>'46% OFF',
            'view_more'=>'
                <p>
                This is the perfect time to go on vacations and with this special promo, you will live the best of Cancun with Royal Reservations! 
                </p>         

                <p>
Book from April 1 to May 6
<br>
Travel Between June 8, 2019 and Sep. 20, 2019
                </p>

                <p><b>46% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
<li>$100 USD Tour Credit</li>
 <li>Children stay FREE</li>
 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: * Tour Credit:</b> The Tour Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the Thomas More Travel Agency desk. <b>Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. <b>Meals:</b> Meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay is 4 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3710039',
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