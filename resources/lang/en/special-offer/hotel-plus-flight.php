<?php

return [
    'booking' => '1', // 0 = Hotel (Default) 1 = Avion 
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'hotel-plus-flight',
    'thumbnail'=>'',
    'title_seo' => "Fly to the beach | Royal Reservations",
    'alt_banner' => "Fly to the beach",
    'metadescription' => "You have found the best beach vacation package on the web! Royal Reservations is not only including flight tickets for a customized vacation combo, but also your accommodation in any of our beachfront resorts in our Caribbean destinations: Cancun, Riviera Maya and St. Maarten.",

    'title' => "Fly to the beach",
    'subtitle1' => 'BOOK NOW AND BOOK YOUR HOTEL + FLIGHT AT A SPECIAL PRICE!',
    'description1'=>"
You have found the best beach vacation package on the web! Royal Reservations is not only including flight tickets for a customized vacation combo, but also your accommodation in any of our beachfront resorts in our Caribbean destinations: Cancun, Riviera Maya and St. Maarten. <br>

Get 60% OFF your reservation when booking both services and start packing your flip-flops and sunscreen for beautiful sunny days by the ocean under a palm tree! Choose between our All Inclusive Plans or Accommodation Only.                                   
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

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
<li>Meals & drinks included</li>
<li>Children stay & eat Free</li>
<li>Free High-speed WiFi</li>
            ',
            'discount_label'=>'61% OFF',
            'view_more'=>'
                    
                    <p>
                    Live an amazing Cancun vacation, unwinding on the beach and with fun activities in this beachfront family resort.
                    </p>
                    <p>
                    Book from May 10th to July 1st
                    <br>
                    Travel Between May 10th, 2019 and Apr. 1st, 2020
                    </p>
                    <p>61% OFF</p>
                    <p><b>This Promotion includes:</b>

                        <ul>
<li>Flight ticket from your destination</li>
 <li>Meals & drinks included</li>
 <li>24 hours room service</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all resort areas</li>
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

            'resort_id'=>'10727',
            'ihotelier_id'=>'***',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa All Inclusive',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa All Inclusive',

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
<li>Meals & drinks included</li>
<li>Children stay & eat Free</li>
<li>Free High-speed WiFi</li>
            ',
            'discount_label'=>'57% OFF',
            'view_more'=>'
                <p>
                Let us pamper you with a perfect Cancun Vacation with your loved ones in one of the best Beach Resorts in Cancun.
                </p>         

                <p>
                Book from May 10th to July 1st
                <br>
                Travel Between May 10th, 2019 and Apr. 1st, 2020

                </p>

                <p><b>57% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
<li>Flight ticket from your destination</li>
 <li>Meals & drinks included</li>
 <li>24 hours room service</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all resort areas</li>
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

            'resort_id'=>'10728',
            'ihotelier_id'=>'****',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
<li>Meals & drinks included</li>
<li>Children stay & eat Free</li>
<li>Free High-speed WiFi</li>
                        
            ',
            'discount_label'=>'61% OFF',
            'view_more'=>'
                <p>
Experience an unforgettable All Inclusive Playa del Carmen vacation in the beaches of the Mexican Caribbean with this offer.
                </p>         

                <p>
Book from May 10th to July 1st
<br>
Travel Between May 10th, 2019 and Apr. 1st, 2020
                </p>

                <p><b>61% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
 <li>Flight ticket from your destination</li>
 <li>Meals & drinks included</li>
 <li>24 hours room service</li>
 <li>Children stay & eat FREE</li>
 <li>FREE High speed Wi-Fi in all resort areas</li>
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

            'resort_id'=>'10731',
            'ihotelier_id'=>'****',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/beach-resorts/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

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
 </ul>
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
            'ihotelier_id'=>'**',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],  

        4=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'May 10th, 2019 and Sep 1st, 2019',            
            'bullets'=>'
<li>Children stay Free</li>
<li>Free High-speed WiFi</li>
                <br>
                        
            ',
            'discount_label'=>'67% OFF',
            'view_more'=>'
                <p>
Book now with Royal Reservations and enjoy your Cancun vacations anytime of this or the next year!
                </p>         

                <p>
                Book from May 10th to July 1st
                <br>
                Travel Between May 10th, 2019 and Sep 1st, 2019
                </p>


                <p>
                <b>67% OFF</b>

                </p>

                <p>
                <b>This Promotion includes:</b>
                 <ul>
<li>Flight ticket from your destination</li>
 <li>Children stay FREE</li>
 <li>FREE High speed Wi-Fi in all resort areas</li>
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

            'resort_id'=>'10729',
            'ihotelier_id'=>'****',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        5=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
<li>Children stay Free</li>
<li>Free High-speed WiFi</li>
                       <br>
                        
            ',
            'discount_label'=>'61% OFF',
            'view_more'=>'
                <p>
This is the perfect time to go on vacations and with this special promo, you will live the best of Cancun with Royal Reservations!
                </p>         

                <p>
                Book from May 10th to July 1st
                <br>
                Travel Between May 10th, 2019 and Apr. 1st, 2020
                </p>

                <p><b>61% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>

<ul>
 <li>Flight ticket from your destination</li>
 <li>Children stay FREE</li>
 <li>FREE High speed Wi-Fi in all resort areas</li>
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

            'resort_id'=>'10730',
            'ihotelier_id'=>'**',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        6=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/beach-resorts/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'May 10th, 2019 and Apr. 1st, 2020',            
            'bullets'=>'
                        <li>Children stay Free</li>
                        <li>Free Wi-Fi</li>
                        <br>
                        
            ',
            'discount_label'=>'64% OFF',
            'view_more'=>'
                <p>
                Royal Reservations has the perfect excuse for you to live an amazing beach vacation in St. Maarten island!
                </p>

                <p>
                Book from May 10th to July 1st
                <br>
                Travel Between May 10th, 2019 and Apr. 1st, 2020
                </p>

                <p><b>64% OFF</b></p>

                <p>
                <b>This Promotion includes:</b>
                <ul>
                    <li>Flight ticket from your destination</li>
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

            'resort_id'=>'10733',
            'ihotelier_id'=>'***',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],



        7=>[
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
                Book from May 10th to July 1st
                <br>
                Travel Between May 10th, 2019 and Apr. 1st, 2020
                </p>

                <p><b>64% OFF</b></p>


                <p>
                <b>This Promotion includes:</b>
                <ul>
                <li>Flight ticket from your destination</li>
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

            'resort_id'=>'10734',
            'ihotelier_id'=>'**',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ], 


    8=>[
        'name'=>'The Royal Sea Aquarium Resort',
        'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sea-aquarium/the-royal-sea-aquarium-resort',
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
            Book from May 10th to July 1st
            <br>
            Travel Between May 10th, 2019 and Apr. 1st, 2020
            </p>

            <p><b>57% OFF</b></p>


            <p>
            <b>This Promotion includes:</b>
            <ul>

<li>Flight ticket from your destination</li>
<li>FREE Wi-Fi</li>
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

        'resort_id'=>'10735',
        'ihotelier_id'=>'**',
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