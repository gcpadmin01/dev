<?php

return [
    'booking' => '1', // 0 = Hotel (Default) 1 = Avion 
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'cancun-hotel-plus-flight',
    'thumbnail'=>'',
    'title_seo' => 'Fly to Cancun | Royal Reservations',
    'alt_banner' => 'Fly to Cancun',
    'metadescription' => "Cancun resorts from our Royal Reservations family are happy to welcome you with a great 60% discount on your accommodation when booking your flight tickets too! 

You don’t have to worry about catching the best fees, as you are getting the best possible price when choosing both services in our website! You will just have to decide the resort and one plan among our All Inclusive or Accommodation Only. Once booked, you can start picturing yourself under a palm tree facing the sea.",


    'title' => 'The Best Beach Resorts available for this offer',
    'subtitle1' => 'Book now your Cancun Resort Accommodation + Flight tickets at the best price!',
    'description1'=>"
        Cancun resorts from our Royal Reservations family are happy to welcome you with a great 60% discount on your accommodation when booking your flight tickets too!<br>

You don’t have to worry about catching the best fees, as you are getting the best possible price when choosing both services in our website! You will just have to decide the resort and one plan among our All Inclusive or Accommodation Only. Once booked, you can start picturing yourself under a palm tree facing the sea.<br>

Book Now                          
    ",

    'subtitle2' => 'The Best Beach Resorts available for this offer',
    'description2'=>'
        Book now your Cancun Resort Accommodation + Flight tickets at the best price!
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
                    Book from May 10th to July 1st<br>
                    Travel Between May 10th, 2019 and Apr. 1st, 2020
                    </p>
                    <p>61% OFF</p>
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
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'cun-ai',

            'resort_id'=>'10727',
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands All Suites Resort & Spa',
            'resort_link'=>'https://royalreservations.com/beach-resorts/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands All Suites Resort & Spa',

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
                    Book from May 10th to July 1st<br>
                    Travel Between May 10th, 2019 and Apr. 1st, 2020
                </p>

                <p>40% OFF</p>

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
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

 
        2=>[
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
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        3=>[
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
            'ihotelier_id'=>'',
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