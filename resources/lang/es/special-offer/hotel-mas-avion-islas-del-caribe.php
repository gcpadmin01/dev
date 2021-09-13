<?php

return [
    'booking' => '1', // 0 = Hotel (Default) 1 = Avion 
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'hotel-mas-avion-islas-del-caribe',
    'thumbnail'=>'oferta-anticipada-caribe',
    'title_seo' => 'Vuela a la Isla de St. Maarten | Royal Reservations',
    'alt_banner' => 'Vuela a la Isla de St. Maarten',
    'metadescription' => "¡Nuestros resorts en las islas de St Maarten y Curacao ahora te ofrecen la opción de reservar tus boletos de avión + tu hospedaje con un incomparable 60% de descuento en tu reserva! Disfruta un hermoso paraíso en el Caribe sin la preocupación de buscar tus boletos de avión. 
",


    'title' => 'Vuela a la Isla de St. Maarten',
    'subtitle1' => '¡RESERVA AHORA TU HOTEL + AVIÓN A UN PRECIO ESPECIAL!',
    'description1'=>"
¡Nuestros resorts en las islas de St Maarten y Curacao ahora te ofrecen la opción de reservar tus boletos de avión + tu hospedaje con un incomparable 60% de descuento en tu reserva!<br>

Disfruta un hermoso paraíso en el Caribe sin la preocupación de buscar tus boletos de avión.<br>

Elige el resort en el que quieras hospedarte, tus fechas preferidas y comienza a empacar tu ropa de playa. El sello distintivo de nuestros resorts es nuestro servicio intachable y fabulosas amenidades que te harán sentir especial ¡Reserva ahora!                            
        
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
    'fecha_fin' => 'Julio 1, 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Sint Maarten','value'=>'sin'],
        1=>['name'=>'Curacao','value'=>'cur'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'All Inclusive','value'=>'ai'],
        1=>['name'=>'European Plan','value'=>'ep'],
        2=>['name'=>'Bed & Breakfast','value'=>'bb'],
    ],


    'resorts'=>[
        
        0=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Mayo 10, 2019 y Abr. 1, 2020',            
            'bullets'=>'
                        
                        <li>Wi-Fi Gratuito</li>
                        <br><br>
                        
            ',
            'discount_label'=>'64% DTO',
            'view_more'=>'
                <p>
                Royal Reservations tiene la excusa perfecta para que vivas unas increíbles vacaciones en la playa de la Isla de St. Maarten. 
                </p>         

                <p>
                Reserva de Mayo 10 a Julio 1<br>
                Viaja entre Mayo 10, 2019 y Abr. 1, 2020
                </p>

                <p><b>64% DTO</b></p>

                <p>
                <b>Esta promoción incluye:</b>
                <ul>
                    
<li>Boleto de avión desde tu destino</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi GRATIS en todas las áreas del resort</li>
                </ul>
                </p>

                <p class="terms">
                <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Alimentos y bebidas no están incluidas en el hotel. <b>Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra.  <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],



        1=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'travel_window'=>'Mayo 10, 2019 y Abr. 1, 2020',            
            'bullets'=>'
                        <li>Wi-Fi Gratis</li>
                        <br>
                        <br>
                        
            ',
            'discount_label'=>'64% DTO',
            'view_more'=>'
                 <p>
                 Con esta oferta especial, experimentarás un ambiente caribeño, con la cultura de la isla de St. Maarten, el clima cálido para que te relajes en la playa.
                </p>         

                <p>
                Reserva de Mayo 10 a Julio 1<br>
                Viaja entre Mayo 10, 2019 y Abr. 1, 2020
                </p>

                <p><b>64% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
                <ul>
               
 <li>Boleto de avión desde tu destino</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi GRATIS en todas las áreas del resort</li>
                </ul>

                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Alimentos y bebidas no están incluidas en el hotel. <b>Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra.  <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
    ], 

    2=>[
        'name'=>'The Royal Sea Aquarium Resort',
        'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sea-aquarium/the-royal-sea-aquarium-resort',
        'slug'=>'the-royal-sea-aquarium',
        'stars'=>'3.5',
        'alt'=>'The Royal Sea Aquarium Resort',

        'travel_window'=>'Mayo 10, 2019 y Abr. 1, 2020',            
        'bullets'=>'
                    <li>Wi-Fi Gratis</li>
                    
                    <br><br>
                    
        ',
        'discount_label'=>'57% DTO',
        'view_more'=>'
            <p>
            
El paraíso de Curacao te está esperando para vivir unas inolvidables vacaciones en la playa con esta súper oferta de Royal Reservations.
            </p>         

            <p>
            Reserva de Mayo 10 a Julio 1<br>
            Viaja entre Mayo 10, 2019 y Abr. 1, 2020
            </p>

            <p><b>57% DTO</b></p>

            <p>
            <b>Esta promoción incluye:</b>
            <ul>
<li>Boleto de avión desde tu destino</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi GRATIS en todas las áreas del resort</li>
            </ul>
            </p>

            <p class="terms">
            <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b> Alimentos y bebidas no están incluidas en el hotel. <b>Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra.  <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada. 
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
        'ihotelier_id'=>'',
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