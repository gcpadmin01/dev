<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'promocion-especial',
    'thumbnail'=>'',
    'title_seo' => 'PROMOCIÓN ESPECIAL | Royal Reservations',
    'alt_banner' => 'PROMOCIÓN ESPECIAL',
    'metadescription' => "Prepárate para tus próximas vacaciones a nuestro resort de lujo en la Riviera Maya. Ahora es el momento de escapar al Caribe, pues te ofrecemos experiencias sin comparación en este paraíso. Reserva Ahora para viajar entre Agosto y Octubre de este año y aprovecha cualquiera de nuestras fabulosas promociones.",

    'title' => 'PROMOCIÓN ESPECIAL',
    'subtitle1' => 'RESERVA AHORA Y VIAJA DE AGOSTO A OCTUBRE',
    'description1'=>"
        Prepárate para tus próximas vacaciones a nuestro resort de lujo en la Riviera Maya. Ahora es el momento de escapar al Caribe, pues te ofrecemos experiencias sin comparación en este paraíso. Reserva Ahora para viajar entre Agosto y Octubre de este año y aprovecha cualquiera de nuestras fabulosas promociones.
        <br>
        Obtén 44% de descuento en tu estancia, más 200 dólares en Resort Credits para disfrutar de servicios en nuestro Spa o comprar productos en nuestro Gourmet Food Market. Al momento del check in podrás obtener una mejora en la vista de tu habitación.
        <br>
        No olvidemos que todas las reservaciones cuentan con un servicio de Transportación Redonda al aeropuerto y los niños son Gratis en tu habitación.
        <br>
        Si tus vacaciones son de más de 5 noches, tenemos una promoción para ti: Reservando 5 noches, obtienes 2 ncohes de regalo en nuestro resort de lujo.
    ",
    'subtitle2' => 'Las mejores promociones para este Resort de Lujo',
    'description2'=>'Reserva Ahora tus próximas vacaciones con el Plan Todo Incluido en la Riviera Maya.',

    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => 'Agosto 5, 2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Riviera Maya','value'=>'riv'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'All Inclusive','value'=>'ai'],
        1=>['name'=>'European Plan','value'=>'ep'],
        2=>['name'=>'Bed & Breakfast','value'=>'bb'],
    ],


    'resorts'=>[
       
        0=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mayo 11 a Agosto 5',            
            'bullets'=>'
                <li>200 USD Resort Credits</li>
                <li>Alimentos gourmet incluidos</li>
                <li>Transportación Premium al Aeropuerto</li>      
            ',
            'discount_label'=>'44% DTO',
            'view_more'=>'
                <p>
                    PROMOCIÓN ESPECIAL<br>
                    Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                    Reserva de Mayo 11 a Agosto 5
                    <br>
                    Viaja entre Ago. 15, 2019 y Oct. 31, 2019
                </p>

                <p><b>44% DTO</b></p>


                <p>
                    <b>Esta promoción incluye:</b>
                    <ul>
                         <li>200 dólares en Resort Credits</li>
                         <li>Alimentos gourmet y bebidas ilimitados</li>
                         <li>Transportación Premium al Aeropuerto</li>
                         <li>Room Service las 24 horas</li>
                         <li>Mejora en vista de habitación</li>
                         <li>Niños comen y se hospedan GRATIS</li>
                         <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                     </ul>
                </p>

                <p class="terms">
                    <br>TÉRMINOS Y CONDICIONES: * Resort Credit:</b> El Resort Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en la recepción al momento del pago de la cuenta, su valor podrá cubrir consumos del Spa, y el Gourmet Food Market. El Resort Credit no podrá combinarse con otras promociones ni descuentos. <b>* Mejora de Vista: </b>La mejora de vista de la habitación se determina al check in dependiendo de la disponibilidad. <b>* Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños pueden tomar el desayuno gratis con mamá y papá. <b>* Transportación al Aeropuerto:</b> Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar al hotel por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada.
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

            'travel_window'=>'Mayo 11 a Agosto 5',            
            'bullets'=>'
                <li>200 USD Resort Credits</li>
                <li>Alimentos gourmet incluidos</li>
                <li>Transportación Premium al Aeropuerto</li>      
            ',
            'discount_label'=>'53% DTO',
            'view_more'=>'
                <p>
                    PROMOCIÓN ESPECIAL<br>
                    Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                    Reserva de Mayo 11 a Agosto 5
                    <br>
                    Viaja entre Ago. 15, 2019 y Oct. 31, 2019
                </p>

                <p><b>53% DTO</b></p>


                <p>
                    <b>Esta promoción incluye:</b>
                    <ul>
                         <li> Alimentos gourmet y bebidas ilimitados</li>
                         <li> Transportación Premium al Aeropuerto</li>
                         <li> Room Service las 24 horas</li>
                         <li> Niños comen y se hospedan GRATIS</li>
                         <li> Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                    </ul>
                </p>

                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños pueden tomar el desayuno gratis con mamá y papá. <b>* Transportación al Aeropuerto: </b>Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar al hotel por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. <b>* Restricciones:</b> La estancia mínima es de 5 noches, sin embargo, esto podría variar dependiendo de la temporada.
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
       
        
 
    ],



    'expiration'=>'04/20/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];