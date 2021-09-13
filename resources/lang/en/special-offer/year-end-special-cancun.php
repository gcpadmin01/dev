<?php

return [
    'template' => '1', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'year-end-special-cancun',
    'title_seo' => 'New Year Cancun Vacations | Royal Reservations',
    'alt_banner' => 'ALT Cancun Vacation Special Offer',
    'metadescription' => 'Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo!',


    'title' => 'Cancun: Year End Special',
    'subtitle1' => 'Book Now and Travel anytime of the year!',
    'description1'=>'
        Live an amazing Cancun vacation, unwinding on the beach and with fun activities in a beachfront family resort, offering the best European Plan or a fabulous All Inclusive. Take advantage of this vacation deal and get an exclusive discount of 46% when booking, a $100 USD Spa Credit to enjoy in different wellness treatments and relaxing massages and free accommodations for children. 
        
    ',
    'subtitle2' => 'The best Resorts in the Caribbean',
    'description2'=>'
        Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo! 
    ',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------    


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => '12/01/2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
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
            'name'=>'The Royal Sands Resort & Spa All Inclusive',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa All Inclusive',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'cun-ai',

            'resort_id'=>'86169',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Islander All Suites Resort',
            'slug'=>'the-royal-islander',
            'stars'=>'3.5',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'86182',
            'ihotelier_id'=>'2808321',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        2=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'cun-ai',

            'resort_id'=>'86175',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        3=>[
            'name'=>'The Royal Cancun All Suites Resort',
            'slug'=>'the-royal-cancun',
            'stars'=>'4',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>           
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            // Label filtros
            'filtros'=>'cun-bb',

            'resort_id'=>'73601',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        4=>[
            'name'=>'Grand Residences Riviera Cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>          
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'riv-ai',

            'resort_id'=>'95939',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        5=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>          
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'3',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'pla-ep',

            'resort_id'=>'86184',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        6=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>          
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'sin-ep',

            'resort_id'=>'86180',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        7=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'slug'=>'simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'sin-ep',

            'resort_id'=>'86179',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        8=>[
            'name'=>'The Royal Sea Aquarium Resort',
            'slug'=>'the-royal-sea-aquarium',
            'stars'=>'3.5',
            'alt'=>'The Royal Sea Aquarium Resort',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'5',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cur-ep',

            'resort_id'=>'86181',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],                      

   

    9=>[
            'name'=>'Casa De Campo Resort & Villas',
            'slug'=>'casa-de-campo',
            'stars'=>'5',
            'alt'=>'Casa De Campo Resort & Villas',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'6',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            // Label filtros
            'filtros'=>'pun-ai',

            'resort_id'=>'106514',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ],
    10=>[
            'name'=>'Ancora Punta Cana Private Residence Yacht Club',
            'slug'=>'ancora',
            'stars'=>'4',
            'alt'=>'Ancora Punta Cana Private Residence Yacht Club',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'6',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'pun-ep',

            'resort_id'=>'85285',
            'ihotelier_id'=>'2808337',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ],    
    11=>[
            'name'=>'Del Mar Oceanfront Resort By Joy Resorts',
            'slug'=>'del-mar',
            'stars'=>'4',
            'alt'=>'Del Mar Oceanfront Resort By Joy Resorts',

            'travel_window'=>'12/28/2018 - 01/30/2019',            
            'bullets'=>'
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan gratis</li>
                        
            ',
            'discount_label'=>'Up to 40% off',
            'view_more'=>'
                    <p><b>All Inclusive Resorts</b></p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p>
                    When choosing the All-Inclusive plan, some surcharges will apply for premium food and beverages. Children up to 12 years old can stay for free using existing beds, no extra bed or rollaway beds available When staying at All Inclusive resorts choosing the All-Inclusive plan, children up to 12 years old can eat for free accompanied by their parents.
                    </p>
                    <p><b>All Inclusive Resorts</b></p>
                    <ul>
                        <li>Transportación Redonda Premium</li>
                        <li>$100 USD Resort Credit</li>
                        <li>Niños se hospedan <a href="#">gratis</a></li>
                    </ul>          
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'6',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'pun-ep',

            'resort_id'=>'86117',
            'ihotelier_id'=>'2808337',
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