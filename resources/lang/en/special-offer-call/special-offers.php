<?php

return [
    'slug' => 'special-offers',
    'phone'=>'tel:+18887214414',
    'title_seo' => 'Your perfect beach getaway, just one call away! | Royal Reservations',
    'alt_banner' => 'Your perfect beach getaway, just one call away!',
    'metadescription' => "This Spring Season has great advantages of excellent discounts on reservations in any of our beachfront resorts.",


    'title' => 'Your perfect beach getaway, just one call away!',
    'subtitle1' => 'Book Now and Travel anytime of the year!',
    'description1'=>"
    Get up to 55% OFF your beachfront resort reservation in the rate plan of your choice by calling us to the phone <a href='tel:+18887214414'>1-888-721-4414</a>! Choose among our Caribbean paradise destinations, we are ready to welcome you anytime soon with top services, amenities, beautiful landscapes and unforgettable moments!                                  
    ",

    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'
    Book now in All Inclusive, Bed & Breakfast or Accommodation Only Plans and start enjoying!
    ',


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

            'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                <li>$100 USD Resort Credit</li>
                <li>Meals & Drinks Included</li>
                <li>Children eat & stay Free</li>
                        
            ',
            'discount_label'=>'40% + 10% OFF',
            'view_more'=>'
                    
                    <p>
                    Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort.
                    </p>
                    <p>
                    Book from March 5 to April 1<br>
                    Travel Between Mar. 5, 2019 and Jan. 1, 2021
                    </p>
                    <p>40% + 10% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
                         <li>$100 USD Resort Credit</li>
                          <li>Meals & drinks included</li>
                         <li>24 hours room service</li>
                         <li>Children stay & eat FREE</li>
                         <li>FREE High speed Wi-Fi in all areas</li>
                        </ul>
                    </p>
                    <p class="terms">
                    <b>TERMS & CONDITIONS: * Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout. For the All Inclusive: some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay is 4 nights, however this may vary depending on the season.     

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
            'ihotelier_id'=>'3643792',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands All Suites Resort & Spa',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'5',
            'alt'=>'The Royal Sands All Suites Resort & Spa',

            'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                <li>Free Transfers</li>
                <li>$100 Spa Credit</li>
                <li>Meals & Drinks Included</li>
                        
            ',
            'discount_label'=>'35% + 7% OFF',
            'view_more'=>'
                <p>
                This is the perfect time to go on vacations and with this special promo, you will live the best of Cancun with Royal Reservations! 
                </p>         

                <p>
                Book from March 5 to April 1<br>
                Travel Between Mar. 5, 2019 and Jan. 1, 2021

                </p>

                <p>35% + 7% OFF</p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                 <li>$100 USD Spa Credit</li>
                 <li>Free Airport Transfers</li>
                  <li>Meals & drinks included</li>
                 <li>24 hours room service</li>
                 <li>Children stay & eat FREE</li>
                 <li>FREE High speed Wi-Fi in all areas</li>
                </ul>
                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS: * Spa Credit:</b> The Spa Credit is per reservation, and it can only be redeemed at the Spa Desk for Spa Wellness services. A mandatory 16% service fee applies when using this credit; this fee will be based on the amount of the credit utilized at the time of redemption and must be paid by the guest. The Spa Credit must not be considered as cash money. <b>* Airport Transportation:</b> One roundtrip transportation in shared service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport. For the All Inclusive: some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay is 4 nights, however this may vary depending on the season. 
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
            'ihotelier_id'=>'3643855',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                <li>$50 USD Resort Credit</li>
                <li>Free Transfers</li>
                <li>Meals & Drinks Included</li>
                        
            ',
            'discount_label'=>'40% + 10% OFF',
            'view_more'=>'
                <p>
                Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer.
                </p>         

                <p>
                    Book from March 5 to April 1<br>
                    Travel Between Mar. 5, 2019 and Jan. 1, 2021
                </p>

                <p><b>40% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
                 <li>$50 USD Resort Credit</li>
                 <li>Free Roundtrip Airport Transfers</li>
                 <li>Meals & drinks included</li>
                 <li>24 hours room service</li>
                 <li>Children stay & eat FREE</li>
                 <li>FREE High speed Wi-Fi in all areas</li>
 </ul>

                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: * Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout.  <b>* Airport Transportation:</b> One roundtrip transportation in shared service (airport-hotel-airport) is included.  Guest must contact Thomas More Travel at least 48 hours prior check in to arrange the transfer from the airport. For the All Inclusive: some surcharges will apply for premium food and beverages; it is indicated on the restaurants menu. Limited Room Service menu avilable 24 hours. <b>Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. Children can eat for free accompanied by their parents.  <b>*Restrictions:</b> The minimum lenght of stay is 4 nights, however this may vary depending on the season. 
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
            'ihotelier_id'=>'3644005',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                <li>$150 USD Resort Credit</li>
                <li>30 Min. Massage for two</li>
                <li>Premium Airport Transfer</li>
                        
            ',
            'discount_label'=>'35% + 10% OFF',
            'view_more'=>'
                <p>
                If you want to live a one-of-a-kind vacation in the Riviera Maya beaches, then take advantage of this offer in a luxury resort.
                </p>         

                <p>
                Book from March 5 to April 1
                <br>
                Travel Between Mar. 5, 2019 and Jan. 1, 2021
                </p>

                <p><b>35% + 10% OFF</b></p>


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
               
<b>TERMS & CONDITIONS:</b>
<b> * Resort Credit:</b> The Resort Credit must not be considered as cash money. Is per reservation and it can only be redeemed at the front desk upon chekout. * Spa Massage: The One 30-minute Spa Massage is valid for two people, one time. Service requires reservation in advance. Tips for massage service are not included. <b>* Children stay & eat Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. And they can eat for free accompanied by their parents. <b>* Airport Transportation:</b> One roundtrip service (airport-hotel-airport) is included.  Guest must contact the Resort at least 48 hours prior check in to arrange the transfer from the airport.   <b>* Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3644280',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        4=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'4',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Mar. 5, 2019 and Sep. 1, 2019',            
            'bullets'=>'
                        <li>Free Daily Buffet Breakfast</li>
                        <li>Children stay Free</li>
                        <li>Free Highspeed WiFi</li>
                        
            ',
            'discount_label'=>'50% + 5% OFF',
            'view_more'=>'
                <p>
                Book now with Royal Reservations and enjoy your Cancun vacations anytime of this or the next year!
                </p>         

                <p>
                Book from March 5 to April 1
                <br>
                Travel Between Mar. 5, 2019 and Sep. 1, 2019
                </p>


                <p>
                <b>50% + 5% OFF</b>

                </p>

                <p>
                <b>This Promotion includes:</b>
                 <ul>
                     <li>Free daily buffet breakfast for all confirmed guest</li>
                     <li>Children up to 12 years old stay free (using existing beds) & eat breakfast for free with Mom & Dad</li>
                     <li>Free high speed Wi-Fi in rooms & common areas</li>
                 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS:</b> Children stay Free: Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. <b>Meals:</b> Daily buffet breakfast for all confirmed guests. Additional meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3644244',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        5=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                        <li>Free Daily Buffet Breakfast</li>
                        <li>Children stay Free</li>
                        <li>Free Highspeed WiFi</li>
                        
            ',
            'discount_label'=>'40% + 5% OFF',
            'view_more'=>'
                <p>
                Let us pamper you with a perfect Cancun Vacation with your loved ones in one of the best Beach Resorts in Cancun.
                </p>         

                <p>
Book from March 5 to April 1
<br>
Travel Between Mar. 5, 2019 and Jan. 1, 2021
                </p>

                <p><b>40% + 5% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
 <li>Free daily buffet breakfast for all confirmed guest</li>
 <li>Children up to 12 years old stay free (using existing beds) & eat breakfast for free with Mom & Dad</li>
 <li>Free high speed Wi-Fi in rooms & common areas</li>
 </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: Children stay Free:</b> Children up to 12 years old can stay for free using the existing beds, there is no extra beds or rollaway beds available. <b>Meals:</b> Daily buffet breakfast for all confirmed guests. Additional meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay is 3 nights, however this may vary depending on the season.
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
            'ihotelier_id'=>'3644018',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],






        6=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                        
                        <li>Free Wi-Fi</li>
                        <br><br>
                        
            ',
            'discount_label'=>'45% + 10% OFF',
            'view_more'=>'
                <p>
                Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island! 
                </p>         

                <p>
Book from March 5 to April 1<br>
Travel Between Mar. 5, 2019 and Jan. 1, 2021
                </p>

                <p><b>45% + 10% OFF</b></p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
                
                    <li>FREE Wi-Fi in all areas</li>
                </ul>
                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS:</b><br>
The minimum lenght of stay may vary depending on the season.
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
            'stars'=>'5',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                        
                        <li>Free WiFi</li>
                        <br><br>
                        
            ',
            'discount_label'=>'45% + 10% OFF',
            'view_more'=>'
                 <p>
                 With this special offer, you and your companions will experience the great Caribbean ambiance, its culture and hot weather to escape the cold and relax on the beach.
                </p>         

                <p>
Book from March 5 to April 1<br>
Travel Between Mar. 5, 2019 and Jan. 1, 2021
                </p>

                <p><b>45% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                
                <li>FREE Wi-Fi in all areas</li>
                </ul>

                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS:</b><br>
The minimum lenght of stay may vary depending on the season.
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
        'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sea-aquarium',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'4',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
        'bullets'=>'
                    
                    <li>Free Wi-Fi</li>
                    <br><br>
                    
        ',
        'discount_label'=>'35% + 7% OFF',
        'view_more'=>'
            <p>
            Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer! 
            </p>         

            <p>
Book from March 5 to April 1<br>
Travel Between Mar. 5, 2019 and Jan. 1, 2021
            </p>

            <p><b>35% + 10% OFF</b></p>


            <p>
            <b>This Promotion includes:</b>
            <ul>

<li> FREE Wi-Fi in all areas</li>
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
            'stars'=>'5',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                        <li>Daily Buffet Breakfast</li>
                        <li>Free Wi-Fi</li>
                        <br>
                        
            ',
            'discount_label'=>'45% + 10% OFF',
            'view_more'=>'
                <p>
                Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island! 
                </p>         

                <p>
                Book from March 5 to April 1<br>
Travel Between Mar. 5, 2019 and Jan. 1, 2021
                </p>

                <p><b>45% + 10% OFF</b></p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
<li>Free daily buffet breakfast for all confirmed guest</li>
<li>Free Wi-Fi in rooms & common areas</li>
                </ul>
                </p>

                <p class="terms">
<b>TERMS & CONDITIONS: Meals:</b> Daily buffet breakfast for all confirmed guests. Additional meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season.
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
            'ihotelier_id'=>'354940',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],



        10=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
            'bullets'=>'
                        <li>Daily Buffet Breakfast</li>
                        <li>Free WiFi</li>
                        <br>
                        
            ',
            'discount_label'=>'45% + 10% OFF',
            'view_more'=>'
                 <p>
                 With this special offer, you and your companions will experience the great Caribbean ambiance, its culture and hot weather to escape the cold and relax on the beach.
                </p>         

                <p>
Book from March 5 to April 1<br>
Travel Between Mar. 5, 2019 and Jan. 1, 2021
                </p>

                <p><b>45% + 10% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
<li>Free daily buffet breakfast for all confirmed guest</li>
<li>Free Wi-Fi in rooms & common areas</li>
                </ul>

                </p>

                <p class="terms">
                <b>TERMS & CONDITIONS: Meals:</b> Daily buffet breakfast for all confirmed guests. Additional meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season.
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
        'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sea-aquarium',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'4',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'Mar. 5, 2019 and Jan. 1, 2021',            
        'bullets'=>'
                    <li>Daily Buffet Breakfast</li>
                    <li>Free Wi-Fi</li>
                    <br>
                    
        ',
        'discount_label'=>'35% + 7% OFF',
        'view_more'=>'
            <p>
            Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer! 
            </p>         

            <p>
Book from March 5 to April 1<br>
Travel Between Mar. 5, 2019 and Jan. 1, 2021
            </p>

            <p><b>35% + 7% OFF</b></p>


            <p>
            <b>This Promotion includes:</b>
            <ul>

<li> Free daily breakfast for all confirmed guest</li>
<li> Free Wi-Fi in rooms & common areas</li>
</ul>
            </p>

            <p class="terms">
<b>TERMS & CONDITIONS: Meals:</b> Daily breakfast for all confirmed guests. Additional meals and beverages are not included. <b>*Restrictions:</b> The minimum lenght of stay may vary depending on the season.
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



    'expiration'=>'04/01/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'03/05/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];