<?php

return [
    'booking' => '1', // 0 = Hotel (Default) 1 = Avion 
    'template' => '1', // 1=Bloques   0=Defaul    
    'file' => 'gif',
    'slug' => 'ofertas-especiales',
    'thumbnail'=>'',
    'title_seo' => 'Vuela a Cancún | Royal Reservations',
    'alt_banner' => 'Vuela a Cancún',
    'metadescription' => "¡Los resorts en Cancún de nuestra familia Royal Reservations tienen el gusto de darte la bienvenida y hospedarte con un 60% de descuento al reservar también tus boletos de avión! No tienes que preocuparte por “cazar” la mejor tarifa, ya que te ofrecemos el mejor precio al reservar ambos servicios en nuestro sitio. Sólo deberás elegir el resort y tu plan de alimentos, ya sea Todo Incluido, Desayuno incluido o Sólo Hospedaje. Una vez que reserves, podrás imaginarte descansando bajo una palmera frente al mar.                           ",


    'title' => 'Vuela a Cancún',
    'subtitle1' => '¡RESERVA AHORA TU HOTEL EN CANCÚN + AVIÓN A UN PRECIO ESPECIAL!',
    'description1'=>"
        ¡Los resorts en Cancún de nuestra familia Royal Reservations tienen el gusto de darte la bienvenida y hospedarte con un 60% de descuento al reservar también tus boletos de avión! No tienes que preocuparte por “cazar” la mejor tarifa, ya que te ofrecemos el mejor precio al reservar ambos servicios en nuestro sitio. Sólo deberás elegir el resort y tu plan de alimentos, ya sea Todo Incluido, Desayuno incluido o Sólo Hospedaje. Una vez que reserves, podrás imaginarte descansando bajo una palmera frente al mar.                               
    ",
    'subtitle2' => 'Los Mejores Hoteles de Playa con esta oferta',
    'description2'=>'
        ¡Reserva ahora tu Hospedaje + tus boletos de avión al mejor precio!
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

            'travel_window'=>'Mayo 10, 2019 y Abr. 1, 2020',            
            'bullets'=>'
<li>Alimentos y bebidas ilimitados</li>
<li>Niños se hospedan y comen GRATIS</li>
<li>Wi-Fi Gratis</li>
                        
            ',
            'discount_label'=>'61% DTO',
            'view_more'=>'
                    
                    <p>
                        Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                    </p>
                    <p>
                        Reserva de Mayo 10 a Julio 1
                        <br>
                        Viaja entre Mayo 10, 2019 y Abr. 1, 2020
                    </p>
                    <p>61% DTO</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
 <li>Boleto de avión desde tu destino</li>
 <li>Alimentos y bebidas ilimitadas</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas del resort</li>
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

            'resort_id'=>'10727',
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa All Inclusive',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa <br>All Inclusive',

            'travel_window'=>'Mayo 10, 2019 y Abr. 1, 2020',            
            'bullets'=>'
                <li>Alimentos y bebidas ilimitados</li>
                <li>Niños se hospedan y comen GRATIS</li>
                <li>Wi-Fi Gratis</li>
                        
            ',
            'discount_label'=>'57% DTO',
            'view_more'=>'
                <p>
                    Déjanos consentirte con unas perfectas vacaciones en Cancún con tus seres queridos en uno de los mejores hoteles de playa.
                </p>         

                <p>
                    Reserva de Mayo 10 a Julio 1
                    <br>
                    Viaja entre Mayo 10, 2019 y Abr. 1, 2020

                </p>

                <p><b>57% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
 <li>Boleto de avión desde tu destino</li>
 <li>Alimentos y bebidas ilimitadas</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas del resort</li>
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

            'resort_id'=>'10728',
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

 
       2=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Mayo 10, 2019 y Sep. 1, 2019',            
            'bullets'=>'
                
                <li>Niños se hospedan GRATIS</li>
                <li>Wi-Fi Gratis</li>
                <br>
                        
            ',
            'discount_label'=>'67% DTO',
            'view_more'=>'
                <p>
                    Reserva ahora con Royal Reservations y disfruta tus vacaciones en Cancún en cualquier fecha del próximo año.
                </p>         

                <p>
                    Reserva de Mayo 10 a Julio 1
                <br>
                    Viaja entre Mayo 10, 2019 y Sep. 1, 2019
                </p>


                <p>
                <b>67% DTO</b>

                </p>

                <p>
                <b>Esta promoción incluye:</b>
                 <ul>
 <li>Boleto de avión desde tu destino</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas del resort</li>
                 </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Alimentos y bebidas no están incluidas en el hotel. <b>Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra.  <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Mayo 10, 2019 y Abr. 1, 2020',            
            'bullets'=>'
<li>Niños se hospedan GRATIS</li>
<li>Wi-Fi Gratis</li>
<br>
                        
            ',
            'discount_label'=>'61% DTO',
            'view_more'=>'
                <p>
                Este es el momento perfecto para reservar tus vacaciones y con esta promoción especial, disfrutarás al máximo tus próximas vacaciones en Cancún.
                </p>         

                <p>
                    Reserva de Mayo 10 a Julio 1
                    <br>
                    Viaja entre Mayo 10, 2019 y Abr. 1, 2020
                </p>

                <p><b>61% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>

                <ul>
 <li>Boleto de avión desde tu destino</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas del resort</li>
                 </ul>
                </p>

                <p class="terms">
                   <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Alimentos y bebidas no están incluidas en el hotel. <b>Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra.  <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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



    'expiration'=>'03/03/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];