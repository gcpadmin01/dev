<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul
    'file' => 'jpg',
    'slug' => 'desayuno-incluido',
    'thumbnail'=>'',
    'title_seo' => 'DESAYUNOS GRATIS | Royal Reservations',
    'alt_banner' => 'DESAYUNOS GRATIS',
    'metadescription' => "Prepárate para tus próximas vacaciones con nuestras ofertas especiales y promociones de nuestros resorts en el Caribe. Ahora es el momento de escapar al Caribe, pues Royal Reservations ofrece experiencias sin comparación en este paraíso",


    'title' => 'DESAYUNOS GRATIS',
    'subtitle1' => 'RESERVA AHORA Y VIAJA EN CUALQUIER FECHA DEL AÑO',
    'description1'=>"
        Vive unas vacaciones sin estrés en el Caribe Mexicano que incluyen desayuno buffet en nuestros Planes Sólo Hospedaje. Además de obtener un inigualable descuento del 52% en tu reservación. <br>

Solo elige tu resort en cualquiera de nuestros destinos, ya sea en Cancún o la Riviera Maya para disfrutar los mejores servicios y amenidades de los hoteles. <br>

¡Reserva ahora y viaja cuando quieras!                                             
    ",
    'subtitle2' => 'Los Mejores Hoteles de Playa con esta oferta',
    'description2'=>'
        Reserva Ahora tus vacaciones con Desayuno Incluido.
    ',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------

    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'Julio 1, 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-cancun',
            'slug'=>'the-royal-cancun',
            'stars'=>'4.5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'Mayo 6, 2019 y Ene. 1, 2021',            
            'bullets'=>'
<li>Desayuno buffet gratis</li>
<li>Niños se hospedan GRATIS</li>
<br>
                        
            ',
            'discount_label'=>'46% DTO',
            'view_more'=>'
                    
                    <p>
                        Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                    </p>
                    <p>
                        Reserva de Mayo 6 a Julio 1
                        <br>
                        Viaja entre Mayo 6, 2019 y Ene. 1, 2021
                    </p>
                    <p>46% DTO</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
                        <li>Desayuno Buffet Diario Gratis</li>
                        <li>Niños se hospedan GRATIS</li>
                        <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                        </ul>
                    </p>
                    <p class="terms">
                        <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Desayuno buffet diario incluido para todos los huéspedes confirmados. Alimentos y bebidas adicionales no están incluidas. <b>Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños pueden tomar el desayuno gratis con mamá y papá. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.

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
            'ihotelier_id'=>'3630381',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
      
        1=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mayo 6, 2019 y Ene. 1, 2021',            
            'bullets'=>'
                <li>Desayuno buffet gratis</li>
                <li>Transportación Premium al Aeropuerto</li>
                <li>Niños se hospedan GRATIS</li>
            ',
            'discount_label'=>'38% OFF',
            'view_more'=>'
                <p>
                    
Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                Reserva de Mayo 6 a Julio 1
                <br>
                Viaja entre Mayo 6, 2019 y Ene. 1, 2021
                </p>

                <p><b>38% OFF</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
 <li>Desayuno incluido</li>
 <li>Transportación Premium al Aeropuerto</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                 </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES:* Alimentos:</b> Desayuno buffet diario incluido para todos los huéspedes confirmados. Alimentos y bebidas adicionales no están incluidas. <b>Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños pueden tomar el desayuno gratis con mamá y papá. <b>* Transportación al Aeropuerto:</b> Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar al hotel por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada.
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
        ],

       2=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Mayo 6, 2019 y Sep. 1, 2021',            
            'bullets'=>'
                <li>Desayuno buffet gratis</li>
                <li>Niños se hospedan GRATIS</li>
                <br>
                        
            ',
            'discount_label'=>'52% DTO.',
            'view_more'=>'
                <p>
                    Reserva ahora con Royal Reservations y disfruta tus vacaciones en Cancún en cualquier fecha del próximo año.
                </p>         

                <p>
                    Reserva de Mayo 6 a Julio 1
                <br>
                    Viaja entre Mayo 6, 2019 y Sep. 1, 2021
                </p>


                <p>
                <b>52% DTO.</b>

                </p>

                <p>
                <b>Esta promoción incluye:</b>
                 <ul>
                     <li>Desayuno Buffet Gratis</li>
                     <li>Niños se hospedan Gratis</li>
                     <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                 </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Desayuno buffet diario incluido para todos los huéspedes confirmados. Alimentos y bebidas adicionales no están incluidas. <b>Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños pueden tomar el desayuno gratis con mamá y papá. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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


 
      

    3=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Mayo 6, 2019 y Ene. 1, 2021',            
            'bullets'=>'
                <li>Desayuno buffet gratis</li>
                <li>Niños se hospedan GRATIS</li>
                <br>
                        
            ',
            'discount_label'=>'44% DTO.',
            'view_more'=>'
                <p>
                Este es el momento perfecto para reservar tus vacaciones y con esta promoción especial, disfrutarás al máximo tus próximas vacaciones en Cancún.
                </p>         

                <p>
                    Reserva de Mayo 6 a Julio 1
                    <br>
                    Viaja entre Mayo 6, 2019 y Ene. 1, 2021
                </p>

                <p><b>44% DTO.</b></p>


                <p>
                <b>Esta promoción incluye:</b>

                <ul>
                     <li> Desayuno buffet gratis</li>
                     <li> Niños se hospedan GRATIS</li>
                     <li> Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                 </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Desayuno buffet diario incluido para todos los huéspedes confirmados. Alimentos y bebidas adicionales no están incluidas. <b>Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños pueden tomar el desayuno gratis con mamá y papá. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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

 

],



    'expiration'=>'03/03/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];