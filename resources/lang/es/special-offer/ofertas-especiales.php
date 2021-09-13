<?php

return [
    'template' => '1', // 1=Bloques   0=Defaul    
    'file' => 'gif',
    'slug' => 'ofertas-especiales',
    'thumbnail'=>'',
    'title_seo' => 'Vacaciones sin límite | Royal Reservations',
    'alt_banner' => 'Vacaciones sin límite',
    'metadescription' => "Aprovecha esta promoción para tus Vacaciones sin Límite y recibe descuentos en nuestros resorts de playa. Elige el destino para tus próximas vacaciones en familia y disfruta los beneficios de tu plan tarifario y resort, tal como Desayuno Gratis, Resort Credit, Spa Credit, Transportación incluida y más.",


    'title' => 'Vacaciones sin límite',
    'subtitle1' => '¡Reserva ahora y viaja en cualquer fecha del año!',
    'description1'=>"
        Aprovecha esta promoción para tus Vacaciones sin Límite y recibe descuentos en nuestros resorts de playa. Elige el destino para tus próximas vacaciones en familia y disfruta los beneficios de tu plan tarifario y resort, tal como Desayuno Gratis, Resort Credit, Spa Credit, Transportación incluida y más.                                 
    ",
    'subtitle2' => 'Los Mejores Hoteles de Playa disponibles para esta Oferta',
    'description2'=>'
        Reserva Ahora en Plan Todo Incluido o Solo Habitación y empieza a disfrutar.
    ',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '¿Te gustaría otro Plan de Hospedaje?',
    'description3'=>'Reserva ahora tus vacaciones con el Plan solo Hospedaje y disfruta de las amenidades y servicios de el resort que elijas.',
    //------------------------------------------------------------------------

    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'Julio 1, 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
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
       [
            'name'=>'The Royal Haciendas All Suites Resort & SPA', //Modoficado
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'Julio 1, 2019 y Enero 1, 2020', 
            'bullets'=>'
                <li>Transportación gratuita</li>
                <li>50 Dólares de Tour Credit</li>
                <li>Alimentos y bebidas ilimitadas</li>
            ',
            'discount_label'=>'47% DTO',
            'view_more'=>'
                <p>
                    Vive una experiencia inolvidable con un paquete de vacaciones Todo Incluido en un hotel de Playa del Carmen con esta oferta especial para ti.
                </p>         

                <p>
                    Reserva de Julio 1 a Septiembre 1<br>
                    Viaja entre Julio 1, 2019 y Enero 1, 2020
                </p>

                <p><b>47% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>

                <ul>
                    <li>Transportación gratuita</li>
                    <li>50 Dólares de Tour Credit</li>
                    <li>Alimentos y bebidas ilimitadas</li>
                    <li>Juguetes de playa para niños</li>
                    <li>Room Service las 24 horas</li>
                    <li>Niños comen y se hospedan GRATIS</li>
                    <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>

                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Transportación:</b> El servicio de transportación gratuita en servicio compartido. El cliente debe contactar a la Agencia Thomas More Travel con un mínimo de 48 horas antes de la llegada. <b>* Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas Premium. Servicio a la habitación con menú limitado las 24 horas. <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia es de 3 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3903054',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        [
            'name'=>'The Royal Islander All Suites Resort', //Modificado
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Julio 1, 2019 y Enero 1, 2020',
            'bullets'=>'
                <li>Desayuno Buffet Gratis</li>
                <li>Niños se hospedan Gratis</li>
                <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                        
            ',
            'discount_label'=>'46% DTO',
            'view_more'=>'
                <p>
                    Este es el momento perfecto para reservar tus vacaciones y con esta promoción especial, disfrutarás al máximo tus próximas vacaciones en Cancún.
                </p>         

                <p>
                    Reserva de Julio 1 a Septiembre 1 <br>
                    Viaja entre Julio 1, 2019 y Enero 1, 2020
                </p>

                <p><b>46% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>

                <ul>
                    <li>Desayuno Buffet Gratis</li>
                    <li>Niños se hospedan Gratis</li>
                    <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>
                </p>

                <p class="terms">
                <b>
                    <b>TÉRMINOS Y CONDICIONES: *</b> Alimentos y bebidas: Desayuno buffet gratis para todos los huéspedes registrados en la reservación. Otros alimentos y bebidas no están incluidas. <b>* Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. <b>*Restricciones: </b>El mínimo de noches de estancia es de 3; sin embargo, esto puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3904575',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        [
            'name'=>'Grand Residences Riviera Cancun', // Modificado
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Julio 1, 2019 y Enero 1, 2020',            
            'bullets'=>'
                <li>$150 USD Resort Credit</li>
                <li>Alimentos y bebidas Premium ilimitadas</li>
                <li>Transportación Premium al Aeropuerto</li>            
            ',
            'discount_label'=>'43% DTO',
            'view_more'=>'
                <p>
                Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                    Reserva de Julio 1 a Septiembre 1 <br>
                    Viaja entre Julio 1, 2019 y Enero 1, 2020
                </p>

                <p><b>43% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                    <li>$150 Dólares en Resort Credits</li>
                    <li>Alimentos y bebidas Premium ilimitadas</li>
                    <li>Transportación Premium al Aeropuerto</li>
                    <li>Room Service 24 horas</li>
                    <li>Niños comen y se hospedan Gratis</li>
                    <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>

                </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: *</b> Niños se hospedan y comen GRATIS: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>* Transportación al Aeropuerto:</b> Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar al hotel por lo menos 48 horas previo a su llegada para coordinar su servicio de transportación. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada

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
            'ihotelier_id'=>'3904556',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        [

            'name'=>'The Royal Sands Resort & Spa <br>All Inclusive', // Modificado
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'5',
            'alt'=>'The Royal Sands Resort & Spa <br>All Inclusive',

            'travel_window'=>'Julio 1, 2019 y Enero 1, 2020',
            'bullets'=>'
                <li>Transportación Gratuita</li>
                <li>100 Dólares en Resort Credits</li>
                <li>Alimentos y bebidas ilimitadas</li>

                        
            ',
            'discount_label'=>'42% DTO',
            'view_more'=>'
                <p>
                    Déjanos consentirte con unas perfectas vacaciones en Cancún con tus seres queridos en uno de los mejores hoteles de playa.
                </p>         

                <p>
                    Reserva de Julio 1 a Septiembre 1 <br>
                    Viaja entre Julio 1, 2019 y Enero 1, 2020
                </p>

                <p><b>42% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                    <li>Transportación Gratuita</li>
                    <li>100 Dólares en Resort Credits</li>
                    <li>Alimentos y bebidas ilimitadas</li>
                    <li>Room Service las 24 horas</li>
                    <li>Niños comen y se hospedan GRATIS</li>
                    <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Transportación:</b> El servicio de transportación gratuita en servicio compartido. El cliente debe contactar a la Agencia Thomas More Travel con un mínimo de 48 horas antes de la llegada. <b>* Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas Premium. Servicio a la habitación con menú limitado las 24 horas. <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.

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
            'ihotelier_id'=>'3903034',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        [
            'name'=>'The Royal Cancun All Suites Resort', 
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-cancun',
            'slug'=>'the-royal-cancun',
            'stars'=>'4.5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'Julio 1, 2019 y Enero 1, 2020',            
            'bullets'=>'
                <li>Transportación Gratuita</li>
                <li>100 Dólares en Resort Credits</li>
                <li>Alimentos y bebidas ilimitadas</li>

                        
            ',
            'discount_label'=>'47% DTO',
            'view_more'=>'
                    
                    <p>
                        Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                    </p>
                    <p>
                        Reserva de Julio 1 a Septiembre 1 <br>
                        Viaja entre Julio 1, 2019 y Enero 1, 2020
                    </p>
                    <p>47% DTO</p>
                    <p><b>Esta promoción incluye:</b>

                    <ul>
                        <li>Transportación Gratuita</li>
                        <li>100 Dólares en Resort Credits</li>
                        <li>Alimentos y bebidas ilimitadas</li>
                        <li>Room Service las 24 horas</li>
                        <li>Niños comen y se hospedan GRATIS</li>
                        <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                    </ul>
                    </p>
                    <p class="terms">
                        <b>TÉRMINOS Y CONDICIONES: * Transportación:</b> El servicio de transportación gratuita en servicio compartido. El cliente debe contactar a la Agencia Thomas More Travel con un mínimo de 48 horas antes de la llegada. <b>* Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas. <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia es de 3 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3902676',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        [
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'4',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Julio 1, 2019 y Septiembre 1, 2019',            
            'bullets'=>'
                <li>Desayuno Buffet Gratis</li>
                <li>Niños se hospedan Gratis</li>
                <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
            ',
            'discount_label'=>'53% DTO.',
            'view_more'=>'
                <p>
                Reserva ahora con Royal Reservations y disfruta tus vacaciones en Cancún en cualquier fecha del próximo año.
                </p>         

                <p>
                    Reserva de Julio 1 a Septiembre 1 <br>
                    Viaja entre Julio 1, 2019 y Septiembre 1, 2019
                </p>


                <p>
                    <b>53% DTO.</b>
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
                    <b>TÉRMINOS Y CONDICIONES: * Alimentos y bebidas:</b> Desayuno buffet gratis para todos los huéspedes registrados en la reservación. Otros alimentos y bebidas no están incluidas. <b>* Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.

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
            'ihotelier_id'=>'3907490',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        [
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Julio 1, 2019 y Enero 1, 2020',            
            'bullets'=>'
                <li>Descuento Especial</li>
                <li>Wi-Fi Gratis en todas las áreas</li>
            ',
            'discount_label'=>'50% DTO.',
            'view_more'=>'
                <p>
                    Déjanos consentirte con unas perfectas vacaciones con tus seres queridos en uno de los mejores hoteles de playa en St. Maarten. 
                </p>         

                <p>
                    Reserva de Julio 1 a Septiembre 1 <br>
                    Viaja entre Julio 1, 2019 y Enero 1, 2020
                </p>

                <p><b>50% DTO.</b></p>

                <p>
                    <b>Esta promoción incluye:</b>
                <ul>
                    <li>Descuento Especial</li>
                    <li>Wi-Fi Gratis en todas las áreas</li>  
                </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Alimentos y bebidas no incluidos. * Restricciones: El mínimo de noches de estancia puede variar dependiendo de la temporada.
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

        [
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>' Julio 1, 2019 y Enero 1, 2020',            
            'bullets'=>'
                    <li>Descuento Especial</li>
                    <li>Wi-Fi Gratis en todas las áreas</li>

                        
            ',
            'discount_label'=>'50% DTO',
            'view_more'=>'
                <p>
                    Con esta oferta especial, experimentarás un ambiente caribeño, con la cultura de la isla de St. Maarten, el clima cálido para que te relajes en la playa.
                </p>         

                <p>
                    Reserva de Julio 1 a Septiembre 1 <br>
                    Viaja entre Julio 1, 2019 y Enero 1, 2020

                </p>

                <p><b>50% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                    <li>Descuento Especial</li>
                    <li>Wi-Fi Gratis en todas las áreas</li>
                </ul>

                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Alimentos:<b> Alimentos y bebidas no incluidos. <b>* Restricciones:<b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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

            [
                'name'=>'The Royal Sea Aquarium Resort',
                'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sea-aquarium/the-royal-sea-aquarium-resort',
                'slug'=>'the-royal-sea-aquarium',
                'stars'=>'4',
                'alt'=>'The Royal Sea Aquarium Resort',

                'travel_window'=>'Julio 1, 2019 y Enero 1, 2020',            
                'bullets'=>'
                        <li>Descuento Especial</li>
                        <li>Wi-Fi Gratis en todas las áreas</li>
                        <br><br>
                ',
                'discount_label'=>'40% DTO.',
                'view_more'=>'
                    <p>
                    Curacao paradise is waiting for you to live an unforgettable vacation time on the beach and the sea, with this amazing Royal Reservations special offer! 
                    </p>         

                    <p>
                        Reserva de Julio 1 a Septiembre 1<br>
                        Viaja entre Julio 1, 2019 y Enero 1, 2020
                    </p>

                    <p><b>40% DTO.</b></p>


                    <p>
                    <b>Esta promoción incluye:</b>
                    <ul>
                        <li>Descuento Especial</li>
                        <li>Wi-Fi Gratis en todas las áreas</li>
                    </ul>
                    </p>

                    <p class="terms">
                        <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Alimentos y bebidas no incluidos. <b>* Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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


        [
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Julio 1, 2019 y Enero 1, 2020',
            'bullets'=>'
                <li>Desayuno buffet diario</li>
                <li>Descuento Especial</li>
                <li>Wi-Fi GRATIS en todas las áreas</li>
            ',
            'discount_label'=>'50% DTO',
            'view_more'=>'
                <p>
                    Déjanos consentirte con unas perfectas vacaciones con tus seres queridos en uno de los mejores hoteles de playa en St. Maarten.
                </p>         

                <p>
                    Reserva de Julio 1 a Septiembre 1 <br>
                    Viaja entre Julio 1, 2019 y Enero 1, 2020
                </p>

                <p><b>50% DTO</b></p>

                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                    <li>Desayuno buffet diario</li>
                    <li>Descuento Especial</li>
                    <li>Wi-Fi GRATIS en todas las áreas</li>
                </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Desayuno Buffet Diario para todos los ocupantes de la habitación. Otros alimentos y bebidas no están incluidas. <b>* Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.

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



        [
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Julio 1, 2019 y Enero 1, 2020',
            'bullets'=>'
                <li>Desayuno buffet diario</li>
                <li>Descuento Especial</li>
                <li>Wi-Fi GRATIS en todas las áreas</li>

            ',
            'discount_label'=>'50% DTO.',
            'view_more'=>'
                <p>
                    Con esta oferta especial, experimentarás un ambiente caribeño, con la cultura de la isla de St. Maarten, el clima cálido para que te relajes en la playa.
                </p>         

                <p>
                    Reserva de Julio 1 a Septiembre 1 <br>
                    Viaja entre Julio 1, 2019 y Enero 1, 2020
                </p>

                <p><b>50% DTO.</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                    <li>Desayuno buffet diario</li>
                    <li>Descuento Especial</li>
                    <li>Wi-Fi GRATIS en todas las áreas</li>

                </ul>

                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Desayuno Buffet Diario para todos los ocupantes de la habitación. Otros alimentos y bebidas no están incluidas. <b>* Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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


    [
        'name'=>'The Royal Sea Aquarium Resort',
        'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sea-aquarium/the-royal-sea-aquarium-resort',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'4',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'Julio 1, 2019 y Enero 1, 2020',
        'bullets'=>'
            <li>Desayuno diario</li>
            <li>Descuento Especial</li>
            <li>Wi-Fi GRATIS en todas las áreas</li>
        ',
        'discount_label'=>'40% DTO.',
        'view_more'=>'
            <p>
            El paraíso de Curacao te está esperando para vivir unas inolvidables vacaciones en la playa con esta súper oferta de Royal Reservations.
            </p>         

            <p>
                Reserva de Julio 1 a Septiembre 1<br>
                Viaja entre Julio 1, 2019 y Enero 1, 2020
            </p>

            <p><b>40% DTO.</b></p>


            <p>
            <b>Esta promoción incluye:</b>
            <ul>
                <li>Desayuno diario</li>
                <li>Descuento Especial</li>
                <li>Wi-Fi GRATIS en todas las áreas</li>
            </ul>
            </p>

            <p class="terms">
                TÉRMINOS Y CONDICIONES: * Alimentos: Desayuno Diario para todos los ocupantes de la habitación. Otros alimentos y bebidas no están incluidas. * Restricciones: El mínimo de noches de estancia puede variar dependiendo de la temporada.

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



    'expiration'=>'03/03/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];