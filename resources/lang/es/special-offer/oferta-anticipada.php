<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'oferta-anticipada',
    'thumbnail'=>'oferta-anticipada',
    'title_seo' => 'Semana Santa en la Playa | Royal Reservations',
    'alt_banner' => 'Semana Santa en la Playa',
    'metadescription' => "El invierno está por terminarse y el sol del Caribe se está calentando otra vez para que puedas disfrutar tus días en la playa.  Nuestros resorts son ideales para familias y amigos, además de ofrecer 3 planes diferentes de los que puedes elegir: Todo Incluido, Habitación con desayuno o Solo Hospedaje -cada uno de ellos con las mejores amenidades y servicios de nuestra familia de resorts. ",


    'title' => 'Semana Santa en la Playa',
    'subtitle1' => 'Reserva hoy tus vacaciones de Semana Santa y Pascua',
    'description1'=>"
 ¡No pierdas la oportunidad de reservar tus vacaciones en Cancún o la Riviera Maya al mejor precio posible con nuestra Oferta de Semana Santa!<br>

El invierno está por terminarse y el sol del Caribe se está calentando otra vez para que puedas disfrutar tus días en la playa.  Nuestros resorts son ideales para familias y amigos, además de ofrecer 3 planes diferentes de los que puedes elegir: Todo Incluido, Habitación con desayuno o Solo Hospedaje -cada uno de ellos con las mejores amenidades y servicios de nuestra familia de resorts.<br>

Reserva ahora y obtén el mejor precio de nuestro sitio. ¡Comienza a empacar tu traje de baño y sandalias para vivir unas vacaciones de ensueño esta temporada de Pascua!                               
        
    ",
    'subtitle2' =>'Los Mejores Hoteles de Playa disponibles para esta Oferta',
    'description2'=>'Reserva Ahora en Plan Todo Incluido, Habitación + Desayuno o Solo Habitación y empieza a disfrutar.',

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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-cancun',
            'slug'=>'the-royal-cancun',
            'stars'=>'4.5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'Mar. 30, 2019 y May. 5, 2019',            
            'bullets'=>'
                    <li>$150 USD Tour Credit</li>
                    <li>Alimentos y bebidas ilimitados</li>
                    <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'40% + 10% DTO',
            'view_more'=>'
                    
                    <p>
                    Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                    </p>
                    <p>
                    Reserva desde Enero 21 y hasta Abril 8<br>
                    Viaja entre Mar. 30, 2019 y May. 5, 2019
                    </p>
                    <p>40% + 10% DTO</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
                         <li>$150 USD Tour Credit</li>
                         <li>Alimentos y bebidas ilimitadas</li>
                         <li>Room Service las 24 horas</li>
                         <li>Niños comen y se hospedan GRATIS</li>
                         <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                        </ul>
                    </p>
                    <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel.  *Todo Incluido: algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  * Niños se hospedan y comen gratis: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres.*Restricciones: El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.

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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa <br>All Inclusive',

            'travel_window'=>'Mar. 30, 2019 y May. 5, 2019',            
            'bullets'=>'
                    <li>$150 USD Tour Credit</li>
                    <li>Alimentos y bebidas ilimitados</li>
                    <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'35% + 10% DTO',
            'view_more'=>'
                <p>
                Déjanos consentirte con unas perfectas vacaciones en Cancún con tus seres queridos en uno de los mejores hoteles de playa.
                </p>         

                <p>
                Reserva desde Enero 21 y hasta Abril 8<br>
                Viaja entre Mar. 30, 2019 y May. 5, 2019

                </p>

                <p><b>35% + 10% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                 <li>$150 USD Tour Credit</li>
                 <li>Alimentos y bebidas ilimitadas</li>
                 <li>Room Service las 24 horas</li>
                 <li>Niños comen y se hospedan GRATIS</li>
                 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>
                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel.  *Todo Incluido: algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  * Niños se hospedan y comen gratis: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres.*Restricciones: El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'Mar. 30, 2019 y May. 5, 2019',            
            'bullets'=>'
                <li>$150 USD Tour Credit</li>
                <li>Alimentos y bebidas ilimitados</li>
                <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'40% + 10% DTO',
            'view_more'=>'
                <p>
                Vive una experiencia inolvidable con un paquete de vacaciones Todo Incluido en un hotel de Playa del Carmen con esta oferta especial para ti.
                </p>         

                <p>
                Reserva desde Enero 21 y hasta Abril 8<br>
                Viaja entre Mar. 30, 2019 y May. 5, 2019
                </p>

                <p><b>40% + 10% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>

<ul>
<li>$150 USD Tour Credit</li>
 <li>Alimentos y bebidas ilimitadas</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>

                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel.  *Todo Incluido: algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  * Niños se hospedan y comen gratis: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres.*Restricciones: El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mar. 30, 2019 y May. 5, 2019',            
            'bullets'=>'
                <li>$150 USD Resort Credit</li>
                <li>Transportación Premium al Aeropuerto</li>
                <li>Alimentos gourmet incluidos</li>
                        
            ',
            'discount_label'=>'35% + 10% DTO',
            'view_more'=>'
                <p>
                Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                Reserva desde Enero 21 y hasta Abril 8<br>
                Viaja entre Mar. 30, 2019 y May. 5, 2019
                </p>

                <p><b>35% + 10% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                 <li>$150 Resort Credit</li>
                 <li>Alimentos y bebidas Premium ilimitadas</li>
                 <li>Transportación Premium al Aeropuerto</li>
                 <li>Room Service las 24 horas</li>
                 <li>Niños comen y se hospedan GRATIS</li>
                 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                 </ul>
                </p>

                <p class="terms">
     <b>TÉRMINOS Y CONDICIONES: * Niños se hospedan y comen GRATIS:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. * Transportación al Aeropuerto: Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar Thomas More Travel por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. * Restricciones: La estancia mínima es de 4 noches, sin embargo, esto podría variar dependiendo de la temporada.
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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Mar. 30, 2019 y May. 5, 2019',            
            'bullets'=>'
                <li>$150 USD Tour Credit</li>
                <li>Niños se hospedan GRATIS</li>
                <br>
                        
            ',
            'discount_label'=>'50% + 10% DTO',
            'view_more'=>'
                <p>
                Reserva ahora con Royal Reservations y disfruta tus vacaciones en Cancún en cualquier fecha del próximo año.
                </p>         

                <p>
                Reserva desde Enero 21 y hasta Abril 8<br>
                Viaja entre Mar. 30, 2019 y May. 5, 2019
                </p>


                <p>
                <b>50% + 10% DTO</b>

                </p>

                <p>
                <b>Esta promoción incluye:</b>
                 <ul>
                 <li>$150 USD Tour Credit</li>
                 <li>Niños se hospedan GRATIS</li>
                 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                 </ul>
                </p>

                <p class="terms">
                <b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel. * Niños se hospedan gratis: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. *Restricciones: El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Mar. 30, 2019 y May. 5, 2019',            
            'bullets'=>'
                        <li>$150 USD Tour Credit</li>
                        <li>Niños se hospedan GRATIS</li>
                        <br>
                        
            ',
            'discount_label'=>'40% + 10% DTO',
            'view_more'=>'
                <p>
                Este es el momento perfecto para reservar tus vacaciones y con esta promoción especial, disfrutarás al máximo tus próximas vacaciones en Cancún.
                </p>         

                <p>
                Reserva desde Enero 21 y hasta Abril 8<br>
                Viaja entre Mar. 30, 2019 y May. 5, 2019
                </p>

                <p><b>40% + 10% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>

<ul>
        <li>$150 USD Tour Credit</li>
         <li>Niños se hospedan GRATIS</li>
         <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
                <b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel. * Niños se hospedan gratis: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. *Restricciones: El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mar. 30, 2019 y May. 5, 2019',            
            'bullets'=>'
                        <li>$150 USD Resort Credit</li>
                        <li>Transportación Premium al Aeropuerto</li>
                        
                        
            ',
            'discount_label'=>'35% + 10% DTO',
            'view_more'=>'
                <p>
                Royal Reservations tiene la excusa perfecta para que vivas unas increíbles vacaciones en la playa de la Isla de St. Maarten. 
                </p>         

                <p>
                Reserva desde Enero 21 y hasta Abril 8<br>
                Viaja entre Mar. 30, 2019 y May. 5, 2019
                </p>

                <p><b>35% + 10% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
<li>$150 Resort Credit</b>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</b>
 </li>
                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Alimentos:</b>  Alimentos y bebidas no incluidos. * Restricciones:  El mínimo de noches de estancia puede variar dependiendo de la temporada. 
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
    'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
    'slug'=>'grand-residences-riviera-cancun',
    'stars'=>'5',
    'alt'=>'Grand Residences Riviera Cancun',

    'travel_window'=>'Mar. 30, 2019 y May. 5, 2019',            
    'bullets'=>'
                <li>$150 USD Resort Credit</li>
                <li>Transportación Premium al Aeropuerto</li>
                <br>
                
    ',
    'discount_label'=>'35% + 10% DTO',
    'view_more'=>'
        <p>
        El inicio de año trae consigo el mejor regalo para ti en Royal Reservations con este especial de vacaciones en la Riviera Maya.
        </p>         

        <p>
        Reserva desde Enero 21 y hasta Abril 8<br>
        Viaja entre Mar. 30, 2019 y May. 5, 2019
        </p>

        <p><b>35% + 10% DTO</b></p>


        <p>
        <b>Esta promoción incluye:</b>
<ul>
 <li>$150 Resort Credit</li>
 <li>Transportación Premium al Aeropuerto</li>
 <li>Desayuno buffet gratis para todos</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
</ul>
        </p>

        <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Niños se hospedan GRATIS:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. * Transportación al Aeropuerto: Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar Thomas More Travel por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. * Restricciones: La estancia mínima es de 4 noches, sin embargo, esto podría variar dependiendo de la temporada.
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