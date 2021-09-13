<?php

return [
    'booking' => '1', // 0 = Hotel (Default) 1 = Avion 
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'hotel-mas-avion-riviera-maya',
    'thumbnail'=>'',
    'title_seo' => 'VUELA A LA RIVIERA MAYA | Royal Reservations',
    'alt_banner' => 'VUELA A LA RIVIERA MAYA',
    'metadescription' => "Nuestros resorts en la Riviera Maya, tienen el gusto de darte la bienvenida con un 60% de descuento en tu hospedaje al reservar también tus boletos de avión.",

    'title' => 'VUELA A LA RIVIERA MAYA',
    'subtitle1' => '¡RESERVA AHORA TU HOTEL EN CANCÚN + AVIÓN A UN PRECIO ESPECIAL!',
    'description1'=>"
        Nuestros resorts en la Riviera Maya, tienen el gusto de darte la bienvenida con un 60% de descuento en tu hospedaje al reservar también tus boletos de avión. 
        <br>
        Mientras planeábamos este paquete vacacional especialmente para ti, pensamos en unas vacaciones sin estrés desde el momento en el que reservaras tu estancia, hasta tu llegada al paraíso. 
        <br>
        ¡Elige el resort y déjanos brindarte unas vacaciones inolvidables con nuestro Plan Todo Incluido en el resort de tu preferencia!
    ",
    'subtitle2' => 'Los Mejores Hoteles de Playa con esta oferta',
    'description2'=>'¡Reserva ahora tu Hospedaje + tus boletos de avión al mejor precio!',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'Julio 1, 2020', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Riviera Maya','value'=>'riv'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'All Inclusive','value'=>'ai'],
    ],


    'resorts'=>[
       
        0=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'Mayo 10, 2019 y Abr. 1, 2020', 
            'bullets'=>'
                <li>Alimentos y bebidas ilimitados</li>
                <li>Niños se hospedan y comen GRATIS</li>
                <li>Wi-Fi Gratis</li>
            ',
            'discount_label'=>'61% DTO',
            'view_more'=>'
                <p>
                    Vuela a la Riviera Maya <br>
                    Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                </p>         

                <p>
                    Reserva de Mayo 10 a Julio 1
                    <br>
                    Viaja entre Mayo 10, 2019 y Abr. 1, 2020
                </p>

                <p>
                    <b>61% DTO</b>
                </p>

                <p>
                    <b>Esta promoción incluye:</b>

                    <ul>
                         <li> Boleto de avión desde tu destino</li>
                         <li> Alimentos y bebidas ilimitadas</li>
                         <li> Room Service las 24 horas</li>
                         <li> Niños comen y se hospedan GRATIS</li>
                         <li> Wi-Fi de alta velocidad GRATIS en todas las áreas del resort</li>
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

            'resort_id'=>'10731',
            'ihotelier_id'=>'****',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        1=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mayo 10, 2019 y Abr. 1, 2020',            
            'bullets'=>'
                <li>Alimentos gourmet incluidos</li>
                <li>Transportación Premium al Aeropuerto</li>
                <li>Niños se hospedan y comen GRATIS</li>
            ',
            'discount_label'=>'60% DTO',
            'view_more'=>'
                <p>
                    Vuela a la Riviera Maya<br>
                    Déjanos consentirte con unas perfectas vacaciones en Cancún con tus seres queridos en uno de los mejores hoteles de playa.
                </p>         

                <p>
                    Reserva de Mayo 10 a Julio 1
                    <br>
                    Viaja entre Mayo 10, 2019 y Abr. 1, 2020
                </p>

                <p><b>60% DTO</b></p>


                <p>
                    <b>Esta promoción incluye:</b>
                    <ul>
                         <li> Boleto de avión desde tu destino</li>
                         <li> Alimentos y bebidas ilimitadas</li>
                         <li> Room Service las 24 horas</li>
                         <li> Niños comen y se hospedan GRATIS</li>
                         <li> Wi-Fi de alta velocidad GRATIS en todas las áreas del resort</li>
                    </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES:  * Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'',
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