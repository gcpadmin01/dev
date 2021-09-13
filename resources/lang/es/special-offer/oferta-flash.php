<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'oferta-flash',
    'thumbnail'=>'',
    'title_seo' => 'GRAN VENTA FLASH | Royal Reservations',
    'alt_banner' => 'GRAN VENTA FLASH',
    'metadescription' => "Aprovecha nuestra gran Venta Flash y reserva tus vacaciones en las playas de Cancún, la Riviera Maya, St Maarten o Curacao al mejor precio. Ya sea que busques escaparte con tu familia o tu grupo de amigos, el hospedarte en alguno de nuestros resorts te ofrecerá una inolvidable experiencia con increíbles amenidades y servicios.",

    'title' => 'GRAN VENTA FLASH',
    'subtitle1' => 'RESERVA AHORA Y VIAJA EN CUALQUIER FECHA DEL AÑO',
    'description1'=>"
    Aprovecha nuestra gran Venta Flash y reserva tus vacaciones en las playas de Cancún, la Riviera Maya, St Maarten o Curacao al mejor precio. Ya sea que busques escaparte con tu familia o tu grupo de amigos, el hospedarte en alguno de nuestros resorts te ofrecerá una inolvidable experiencia con increíbles amenidades y servicios. ¡Sólo elige el plan de hospedaje que mejor prefieras!
    ",
    'subtitle2' => 'Los Mejores Hoteles de Playa disponibles para esta Oferta',
    'description2'=>'Reserva Ahora en Plan Todo Incluido o Solo Habitación y empieza a disfrutar.',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'Junio 2, 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-cancun',
            'slug'=>'the-royal-cancun',
            'stars'=>'4.5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'Mayo. 24, 2019 y Ene. 1, 2021',
            'bullets'=>'
                <li>Descuento especial</li>
                <li>Alimentos y bebidas ilimitados</li>
                <li>Niños se hospedan y comen GRATIS</li>       
            ',
            'discount_label'=>'40% + 15% DTO',
            'view_more'=>'
                    
                    <p>
Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                    </p>
                    <p>
                    Reserva de Mayo 24 al Junio 2
                    <br>
                    Viaja entre Mayo. 24, 2019 y Ene. 1, 2021
                    </p>
                    <p>40% + 15% DTO</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
                        <li>Descuento Especial</li>
                        <li>Alimentos y bebidas ilimitadas</li>
                        <li>Room Service las 24 horas</li>
                        <li>Niños comen y se hospedan GRATIS</li>
                        <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                        </ul>
                    </p>
                    <p class="terms">
<b>TÉRMINOS Y CONDICIONES:  * Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.

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
            'ihotelier_id'=>'3449741',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa <br>All Inclusive',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa <br>All Inclusive',

            'travel_window'=>'Mayo. 24, 2019 y Ene. 1, 2021',
            'bullets'=>'
                        <li>Descuento especial</li>
                        <li>Alimentos y bebidas ilimitados</li>
                        <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'35% + 15% DTO',
            'view_more'=>'
                <p>
                    Déjanos consentirte con unas perfectas vacaciones en Cancún con tus seres queridos en uno de los mejores hoteles de playa.
                </p>         

                <p>
                Reserva de Mayo 24 al Junio 2
                <br>
                Viaja entre Mayo. 24, 2019 y Ene. 1, 2021

                </p>

                <p><b>35% + 15% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                <li>Descuento Especial</li>
                <li>Alimentos y bebidas ilimitadas</li>
                <li>Room Service las 24 horas</li>
                <li>Niños comen y se hospedan GRATIS</li>
                <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>
                </p>

                <p class="terms">
                <b>TÉRMINOS Y CONDICIONES:  * Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3449852',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'Mayo. 24, 2019 y Ene. 1, 2021', 
            'bullets'=>'
                        <li>Descuento especial</li>
                        <li>Alimentos y bebidas ilimitados</li>
                        <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'40% + 15% DTO',
            'view_more'=>'
                <p>
Vive una experiencia inolvidable con un paquete de vacaciones Todo Incluido en un hotel de Playa del Carmen con esta oferta especial para ti.
                </p>         

                <p>
                Reserva de Mayo 24 al Junio 2
                <br>
                Viaja entre Mayo. 24, 2019 y Ene. 1, 2021
                </p>

                <p><b>40% + 15% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>

<ul>
<li>Descuento Especial</li>
<li>Alimentos y bebidas ilimitadas</li>
<li>Room Service las 24 horas</li>
<li>Niños comen y se hospedan GRATIS</li>
<li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>

                </p>

<b>TÉRMINOS Y CONDICIONES:  * Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3451817',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mayo. 24, 2019 y Ene. 1, 2021',            
            'bullets'=>'
                        <li>Descuento Especial</li>
                        <li>Transportación Premium al Aeropuerto</li>
                        <li>Alimentos gourmet incluidos</li>      
            ',
            'discount_label'=>'35% + 18% DTO',
            'view_more'=>'
                <p>
Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                Reserva de Mayo 24 al Junio 2
                <br>
                Viaja entre Mayo. 24, 2019 y Ene. 1, 2021
                </p>

                <p><b>35% + 18% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
<li>Descuento Especial</li>
<li>Alimentos y bebidas Premium ilimitadas</li>
<li> Transportación Premium al Aeropuerto</li>
<li>Room Service las 24 horas</li>
<li> Niños comen y se hospedan GRATIS</li>
<li> Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Niños se hospedan y comen GRATIS:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>* Transportación al Aeropuerto:</b> Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar al hotel por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3452073',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


       
        4=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Mayo. 24, 2019 y Sep. 1, 2019',            
            'bullets'=>'
                        <li>Descuento Especial</li>
                        <li>Niños se hospedan GRATIS</li>
                       <br>
                        
            ',
            'discount_label'=>'50% + 15% DTO',
            'view_more'=>'
                <p>
Reserva ahora con Royal Reservations y disfruta tus vacaciones en Cancún en cualquier fecha del próximo año.
                </p>         

                <p>
                Reserva de Mayo 24 al Junio 2<br>
                Viaja entre Mayo. 24, 2019 y Sep. 1, 2019
                </p>


                <p>
                <b>50% + 15% DTO</b>

                </p>

                <p>
                <b>Esta promoción incluye:</b>
                 <ul>
                 <li>Descuento Especial</li>
                 <li>Niños se hospedan GRATIS</li>
                 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                 </ul>
                </p>

                <p class="terms">
                <b>TÉRMINOS Y CONDICIONES: * Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3466734',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        5=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Mayo. 24, 2019 y Ene. 1, 2021',  
            'bullets'=>'
                        <li>Descuento Especial</li>
                        <li>Niños se hospedan GRATIS</li>
                        <br>
                        
            ',
            'discount_label'=>'40% + 15% DTO',
            'view_more'=>'
                <p>
Este es el momento perfecto para reservar tus vacaciones y con esta promoción especial, disfrutarás al máximo tus próximas vacaciones en Cancún.
                </p>         

                <p>
                Reserva de Mayo 24 al Junio 2
                <br>
                Viaja entre Mayo. 24, 2019 y Ene. 1, 2021
                </p>

                <p><b>40% + 15% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>

<ul>
<li>Descuento Especial</li>
<li>Niños se hospedan GRATIS</li>
<li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3451921',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


        6=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Mayo. 24, 2019 y Ene. 1, 2021',            
            'bullets'=>'
                        <li>Descuento Especial</li>
                        <li>Wi-Fi Gratuito</li>
                        <br>
                        
            ',
            'discount_label'=>'45% + 15%  DTO',
            'view_more'=>'
                <p>
Royal Reservations tiene la excusa perfecta para que vivas unas increíbles vacaciones en la playa de la Isla de St. Maarten.
                </p>         

                <p>
                Reserva de Mayo 24 al Junio 2
                <br>
                Viaja entre Mayo. 24, 2019 y Ene. 1, 2021
                </p>

                <p><b>45% + 15%  DTO</b></p>

                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                    <li>Descuento Especial</li>
                    <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>
                </p>

                <p class="terms">
                <b>TÉRMINOS Y CONDICIONES:</b> <b>* Alimentos:</b>  Alimentos y bebidas no incluidos. <b>* Restricciones:</b>  El mínimo de noches de estancia puede variar dependiendo de la temporada. 
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
            'ihotelier_id'=>'3452343',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],



        7=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Mayo. 24, 2019 y Ene. 1, 2021',            
            'bullets'=>'
                        <li>Descuento Especial</li>
                        <li>Wi-Fi Gratuito</li>
                        <br>
                        
            ',
            'discount_label'=>'45% + 12% DTO',
            'view_more'=>'
                 <p>
Con esta oferta especial, tu familia y tú experimentarán unas unas fabulosas vacaciones con el ambiente de las islas del Caribe, su cultura y el clima cálido para que escapen del frío y se relajen en la playa.
                </p>         

                <p>
                Reserva de Mayo 24 al Junio 2
                <br>
                Viaja entre Mayo. 24, 2019 y Ene. 1, 2021
                </p>

                <p><b>45% + 15% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                <li>Descuento Especial</li>
                <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>

                </p>

                <p class="terms">
                <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Alimentos y bebidas no incluidos. <b>* Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada. 
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
            'ihotelier_id'=>'3452371',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ], 


    8=>[
        'name'=>'The Royal Sea Aquarium Resort',
        'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sea-aquarium/the-royal-sea-aquarium-resort',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'3.5',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'Mayo. 24, 2019 y Ene. 1, 2021',
        'bullets'=>'
                    <li>Descuento Especial</li>
                    <li>Wi-Fi Gratuito</li>
                    <br>
                    
        ',
        'discount_label'=>'35% + 12% DTO',
        'view_more'=>'
            <p>

El paraíso de Curacao te está esperando para vivir unas inolvidables vacaciones en la playa con esta súper oferta de Royal Reservations.
            </p>         

            <p>
            Reserva de Mayo 24 al Junio 2<br>
            Viaja entre Mayo. 24, 2019 y Ene. 1, 2021
            </p>

            <p><b>35% + 12% DTO</b></p>


            <p>
            <b>Esta promoción incluye:</b>
            <ul>
            <li>Descuento Especial</li>
<li> Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
</ul>
            </p>

            <p class="terms">
            <b>TÉRMINOS Y CONDICIONES:</b> <b>* Alimentos:</b>  Alimentos y bebidas no incluidos. <b>* Restricciones:</b>  El mínimo de noches de estancia puede variar dependiendo de la temporada. 
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
        'ihotelier_id'=>'3456345',
        'tipo'=>'1', // 1 RatePlanID   --  2 Package
        'code'=>'', // 
],        

 
    ],



    'expiration'=>'04/20/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];