<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'venta-verano',
    'thumbnail'=>'',
    'title_seo' => 'Pre-Venta de Verano | Royal Reservations',
    'alt_banner' => 'Pre-Venta de Verano',
    'metadescription' => "Reserva desde ahora esas vacaciones de verano que tanto has esperado para disfrutar con tu familia o amigos. Hospédate en cualquiera de nuestros resorts en Cancún o Riviera Maya en la playa frente al Mar Caribe con las amenidades y servicios que se ofrecen en nuestros Planes Todo Incluido, Desayuno Incluido o Sólo Hospedaje.",


    'title' => 'Pre-Venta de Verano',
    'subtitle1' => '¡Reserva Ahora y Viaja entre Junio 8 y Septiembre 20!',
    'description1'=>"
    Reserva desde ahora esas vacaciones de verano que tanto has esperado para disfrutar con tu familia o amigos. Hospédate en cualquiera de nuestros resorts en Cancún o Riviera Maya en la playa frente al Mar Caribe con las amenidades y servicios que se ofrecen en nuestros Planes Todo Incluido o Solo Habitación. <br>

Obtén hasta 56% de descuento en tu reservación. Viaja entre el 8 de junio y el 20 de septiembre 2019.                                                                                  
    ",
    'subtitle2' => 'Los Mejores Hoteles de Playa disponibles para esta Oferta',
    'description2'=>'
    Reserva Ahora en Plan Todo Incluido o Solo Habitación y empieza a disfrutar.
    ',

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

            'travel_window'=>'Jun. 8, 2019 y Sep. 20, 2019',            
            'bullets'=>'
                <li>$150 USD Tour Credit</li>
                <li>Alimentos y bebidas ilimitados</li>
                <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'46% DTO',
            'view_more'=>'
                    
                    <p>
                    Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                    </p>
                    <p>
Reserva de Abril 1 a Mayo 6
<br>
Viaja entre Jun. 8, 2019 y Sep. 20, 2019
                    </p>
                    <p>46% DTO</p>
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
<b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel.  <b>*Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.

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
            'ihotelier_id'=>'3709714',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[

            'name'=>'The Royal Sands Resort & Spa <br>All Inclusive',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa <br>All Inclusive',

            'travel_window'=>'Jun. 8, 2019 y Sep. 20, 2019',            
            'bullets'=>'
                <li>$150 USD Tour Credit</li>
                <li>Alimentos y bebidas ilimitados</li>
                <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'41% DTO',
            'view_more'=>'
                <p>
                Déjanos consentirte con unas perfectas vacaciones en Cancún con tus seres queridos en uno de los mejores hoteles de playa.
                </p>         

                <p>
Reserva de Abril 1 a Mayo 6
<br>
Viaja entre Jun. 8, 2019 y Sep. 20, 2019

                </p>

                <p><b>41% DTO</b></p>


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
<b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel.  <b>*Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3709809',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        2=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'travel_window'=>'Jun. 8, 2019 y Sep. 20, 2019',            
            'bullets'=>'
                <li>$150 USD Tour Credit</li>
                <li>Alimentos y bebidas ilimitados</li>
                <li>Niños se hospedan y comen GRATIS</li>
                        
            ',
            'discount_label'=>'46% DTO',
            'view_more'=>'
                <p>
                Vive una experiencia inolvidable con un paquete de vacaciones Todo Incluido en un hotel de Playa del Carmen con esta oferta especial para ti.
                </p>         

                <p>
Reserva de Abril 1 a Mayo 6
<br>
Viaja entre Jun. 8, 2019 y Sep. 20, 2019
                </p>

                <p><b>46% DTO</b></p>


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
<b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel.  <b>*Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3709861',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        
        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Jun. 8, 2019 y Sep. 20, 2019',            
            'bullets'=>'
                <li>$150 USD Tour Credit</li>
                <li>1 Masaje de 30Min. para dos</li>
                <li>Transportación Premium al Aeropuerto</li>
            ',
            'discount_label'=>'43% DTO',
            'view_more'=>'
                <p>
                Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                Reserva de Abril 1 a Mayo 6<br>
                Viaja entre Jun. 8, 2019 y Sep. 20, 2019
                </p>

                <p><b>43% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
 <li>$150 Resort Credit</li>
 <li>Masaje de 30 Min. para dos</li>
 <li>Alimentos y bebidas Premium ilimitadas</li>
 <li>Transportación Premium al Aeropuerto</li>
 <li>Room Service las 24 horas</li>
 <li>Niños comen y se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
          <b>TÉRMINOS Y CONDICIONES: * Resort Credit:</b> El Resort Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en la recepción al momento del pago de la cuenta, su valor podrá cubrir consumos del Spa, y el Gourmet Food Market. El Resort Credit no podrá combinarse con otras promociones ni descuentos. Masaje del Spa: El masaje de 30 minutos para dos personas es válido una única vez. El servicio requiere reservación previa. Propinas no incluidas. * Niños se hospedan y comen GRATIS: Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>* Transportación al Aeropuerto:</b> Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar Thomas More Travel por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3710052',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

       4=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Jun. 8, 2019 y Sep. 20, 2019',            
            'bullets'=>'
                
                <li>$100 USD Tour Credit</li>
                <li>Niños se hospedan GRATIS</li>
                <br>
                        
            ',
            'discount_label'=>'55% DTO.',
            'view_more'=>'
                <p>
                Reserva ahora con Royal Reservations y disfruta tus vacaciones en Cancún en cualquier fecha del próximo año.
                </p>         

                <p>
                Reserva de Abril 1 a Mayo 6<br>
Viaja entre Jun. 8, 2019 y Sep. 20, 2019
                </p>


                <p>
                <b>55% DTO.</b>

                </p>

                <p>
                <b>Esta promoción incluye:</b>
                 <ul>
 <li>$100 USD Tour Credit</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                 </ul>
                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel. <b>* Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. <b>*Restricciones:</b> El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3709921',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


 
      

    5=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'travel_window'=>'Jun. 8, 2019 y Sep. 20, 2019',            
            'bullets'=>'
<li>$100 USD Tour Credit</li>
<li>Niños se hospedan GRATIS</li>
                        
            ',
            'discount_label'=>'46% DTO.',
            'view_more'=>'
                <p>
                Este es el momento perfecto para reservar tus vacaciones y con esta promoción especial, disfrutarás al máximo tus próximas vacaciones en Cancún.
                </p>         

                <p>
Reserva de Abril 1 a Mayo 6<br>
Viaja entre Jun. 8, 2019 y Sep. 20, 2019
                </p>

                <p><b>46% DTO.</b></p>


                <p>
                <b>Esta promoción incluye:</b>

<ul>
 <li>$100 USD Tour Credit</li>
 <li>Niños se hospedan GRATIS</li>
 <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
 </ul>
                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Tour Credit:</b>  El Tour Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en el escritorio de la Agencia de Viajes Thomas More Travel. <b>* Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. *Restricciones: El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
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
            'ihotelier_id'=>'3710039',
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