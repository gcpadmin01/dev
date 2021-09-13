<?php

return [

    #'subtitulo2'=>'LAS MEJORES PROMOCIONES PARA HOTELES',
    'subtitulo2'=>'Las Promociones más populares Disponibles',

    'subtitles' => [
        'Las mejores ofertas para hospedarse en nuestro resort frente al mar',
        'Ofertas especiales para hospedarse en nuestro resort frente al mar',
        'Ofertas exclusivas para hospedarse en el mejor resort frente al mar'
    ],


    'deals' => [       
        [
            'slug'=>'ofertas-especiales',
            'alt'=>'VACACIONES SIN LÍMITE',
            'name'=>'VACACIONES SIN LÍMITE',
            'discount'=>'Hasta 46% DTO + Transportación + $200 Créditos',
            'description'=>'Reserva ahora y obtén hasta 46% de descuento para reservar tus próximas vacaciones en Cancún en Plan Todo Incluido.',
        ],
        [
            'slug'=>'desayuno-incluido',
            'alt'=>'Desayunos GRATIS',
            'name'=>'Desayunos GRATIS',
            'discount'=>'Hasta 52% DTO + Desayunos GRATIS',
            'description'=>'No te preocupes por los desayunos durante tus vacaciones en la playa. Te lo incluimos en tu reservación, además de brindarte un descuento de hasta 52%',
        ],
        [
            'slug'=>'hotel-mas-avion',
            'alt'=>'HOTEL + AVION',
            'name'=>'HOTEL + AVION',
            'discount'=>'Hasta 60% DTO Paquete Hotel + Avión',
            'description'=>'¡Ahora Royal Reservations te puede incluir los boletos de avión en tu reservación! ¡Este paquete vacacional en la playa es lo que estabas esperando!',
        ],  

        [
            'slug'=>'hotel-de-lujo',
            'alt'=>'Vacaciones de lujo',
            'name'=>'Vacaciones de lujo',
            'discount'=>'35% de Descuento + beneficios adicionales, en la Riviera Maya',
            'description'=>'Vive unas vacaciones perfectas en un resort de lujo en la Riviera Maya con un 35% de descuento y beneficios como transportación premium de aeropuerto.',
        ],
      
    ],


    'resorts' => [

        0=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'4.5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'offer_name'=>'Vacaciones sin límite',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Julio 1, 2019',            
            'bullets'=>'
                <li>Transportación Gratis</li>
                <li>150 USD Spa Credit</li>
                <li>Alimentos y bebidas ilimitados</li>
            ',
            'discount_label'=>'40% + 15% DTO',
            'view_more'=>'
            <p>
Vive una experiencia inolvidable con un paquete de vacaciones Todo Incluido en un hotel de Playa del Carmen con esta oferta especial para ti.
            </p>         
    
                <p>
                    Reserva de Mayo 6 a Julio 1
                    <br>
                    Viaja entre Mayo 6, 2019 y Ene. 1, 2021
                </p>
    
                <p><b>46% DTO</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
                <ul>
                     <li> Transportación gratuita</li>
                     <li> 150 USD Spa Credit</li>
                     <li> Alimentos y bebidas ilimitadas</li>
                     <li> Room Service las 24 horas</li>
                     <li> Niños comen y se hospedan GRATIS</li>
                     <li> Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                 </ul>
            </p>
    
                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES:  * Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis: </b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
                </p>       
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'3',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            'resort_id'=>'86184',
            'ihotelier_id'=>'3781764',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        1=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>5,
            'alt'=>'Grand Residences Riviera Cancun',

            'offer_name'=>'Vacaciones sin límite',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Julio 1, 2019',            
            'bullets'=>'
                <li>$200 USD Resort Credit</li>
                <li>Transportación Premium al Aeropuerto</li>
                <li>Alimentos gourmet incluidos</li>
            ',
            'discount_label'=>'35% + 18% DTO',
            'view_more'=>'
            <p>
                    Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
            </p>         
    
                <p>
                Reserva de Mayo 6 a Julio 1
                <br>
                Viaja entre Mayo 6, 2019 y Ene. 1, 2021
                </p>
    
                <p><b>42% DTO</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
                <ul>
                     <li>$200 USD Resort Credit</li>
                     <li>Alimentos y bebidas Premium ilimitadas</li>
                     <li>Transportación Premium al Aeropuerto</li>
                     <li>Room Service 24 horas</li>
                     <li>Niños comen y se hospedan Gratis</li>
                     <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
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
            'resort_id'=>'95939',
            'ihotelier_id'=>'3713586',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],    




        2=>[
            'name'=>'The Royal Sands Resort & Spa <br>All Inclusive',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'4.5',
            'alt'=>'The Royal Sands Resort & Spa All Inclusive',

            'offer_name'=>'Vacaciones sin límite',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Julio 1, 2019',          
            'bullets'=>'
                        
                <li>Transportación Gratis</li>
                <li>150 USD Spa Credit</li>
                <li>Alimentos y bebidas ilimitados</li>
                        
            ',
            'discount_label'=>'40% OFF',
            'view_more'=>'
            <p>
           
Déjanos consentirte con unas perfectas vacaciones en Cancún con tus seres queridos en uno de los mejores hoteles de playa.
            </p>         
    
                <p>
                    Reserva de Mayo 6 a Julio 1
                    <br>
                    Viaja entre Mayo 6, 2019 y Ene. 1, 2021

                </p>
    
            <p><b>40% OFF</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
                 <ul>
                     <li> 150 USD Spa Credit</li>
                     <li> Transportación Gratuita</li>
                     <li> Alimentos y bebidas ilimitadas</li>
                     <li> Room Service las 24 horas</li>
                     <li> Niños comen y se hospedan GRATIS</li>
                     <li> Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
                </ul>
            </p>
    
                <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES:  * Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis: </b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres.             <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
                </p>   
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            'resort_id'=>'86169',
            'ihotelier_id'=>'3781747',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],




        3=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'3.5',
            'alt'=>'The Royal Islander All Suites Resort',

            'offer_name'=>'Vacaciones sin límite',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Julio 1, 2019',            
            'bullets'=>'
                <li>Desayuno buffet gratis</li>
                <li>50 USD Tour Credit</li>
                <li>Niños se hospedan GRATIS</li>
            ',
            'discount_label'=>'40% + 15% DTO',
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
                     <li> 50 USD Tour Credit</li>
                     <li> Niños se hospedan GRATIS</li>
                     <li> Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
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
            'resort_id'=>'86182',
            'ihotelier_id'=>'3781798',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        4=>[
            'name'=>'The Royal Cancun All Suites Resorts',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-cancun',
            'slug'=>'the-royal-cancun',
            'stars'=>'4',
            'alt'=>'The Royal Cancun All Suites Resorts',

            'offer_name'=>'Vacaciones sin límite',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Julio 1, 2019',            
            'bullets'=>'
                <li>Transportación Gratis</li>
                <li>200 USD Resort Credit</li>
                <li>Alimentos y bebidas ilimitados</li>
                
                        
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
    
            <p><b>46% DTO</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
                 <li> 200 USD Resort Credit</li>
                             <li> Transportación Gratuita</li>
                             <li> Alimentos y bebidas ilimitadas</li>
                             <li> Room Service las 24 horas</li>
                             <li> Niños comen y se hospedan GRATIS</li>
                             <li> Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
            <b>TÉRMINOS Y CONDICIONES:  * Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:<b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. *Restricciones: El mínimo de noches de estancia puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            'resort_id'=>'73601',
            'ihotelier_id'=>'3781730',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        5=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'offer_name'=>'Vacaciones sin límite',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Julio 1, 2019',            
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
    
            <p><b>52% DTO.</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
                     <li>Desayuno Buffet Gratis</li>
                     <li>Niños se hospedan Gratis</li>
                     <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
                    <b>TÉRMINOS Y CONDICIONES: * Niños se hospedan gratis: </b>Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            'resort_id'=>'86175',
            'ihotelier_id'=>'3781782',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        6=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'offer_name'=>'Vacaciones sin límite',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Julio 1, 2019',            
            'bullets'=>'
                        
            <li>Wi-Fi Gratuito</li>
                <br><br>
                        
            ',
            'discount_label'=>'50% DTO.',
            'view_more'=>'
            <p>

Royal Reservations tiene la excusa perfecta para que vivas unas increíbles vacaciones en la playa de la Isla de St. Maarten.
            </p>         
    
            <p>
                    Reserva de Mayo 6 a Julio 1
                    <br>
                    Viaja entre Mayo 6, 2019 y Ene. 1, 2021
            </p>
    
            <p><b>50% DTO.</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
                    <li> Descuento Especial</li>
                    <li> Wi-Fi GRATIS en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
             <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b>  Alimentos y bebidas no incluidos. <b>* Restricciones:</b>  El mínimo de noches de estancia puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            'resort_id'=>'86179',
            'ihotelier_id'=>'3549396',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],        

        7=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'4',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'offer_name'=>'Vacaciones sin límite',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Julio 1, 2019',          
            'bullets'=>'
                        
            <li>Wi-Fi Gratuito</li>
                        <br><br>
                        
            ',
            'discount_label'=>'50% DTO.',
            'view_more'=>'
            <p>

Con esta oferta especial, tu familia y tú experimentarán unas unas fabulosas vacaciones con el ambiente de las islas del Caribe, su cultura y el clima cálido para que escapen del frío y se relajen en la playa.
            </p>         
    
            <p>
                Reserva de Mayo 6 a Julio 1
                    <br>
                    Viaja entre Mayo 6, 2019 y Ene. 1, 2021
            </p>
    
            <p><b>50% DTO.</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
             <li>Descuento Especial</li>
             <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
             <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b>  Alimentos y bebidas no incluidos. <b>* Restricciones:</b>  El mínimo de noches de estancia puede variar dependiendo de la temporada. 
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            'resort_id'=>'86180',
            'ihotelier_id'=>'3549417',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ], 

        8=>[
            'name'=>'The Royal Sea Aquarium Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sea-aquarium/the-royal-sea-aquarium-resort',
            'slug'=>'the-royal-sea-aquarium',
            'stars'=>'3.5',
            'alt'=>'The Royal Sea Aquarium Resort',

            'offer_name'=>'Vacaciones sin límite',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Julio 1, 2019',       
            'bullets'=>'
                        
            
            <li>Wi-Fi Gratuito</li>
            <br><br>
                        
            ',
            'discount_label'=>'50%  DTO.',
            'view_more'=>'
            <p>

El paraíso de Curacao te está esperando para vivir unas inolvidables vacaciones en la playa con esta súper oferta de Royal Reservations.
            </p>         
    
            <p>
                Reserva de Mayo 6 a Julio 1
                <br>
                Viaja entre Mayo 6, 2019 y Ene. 1, 2021
            </p>
    
            <p><b>50%  DTO.</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
<li> Descuento Especial</li>
                 <li> Wi-Fi GRATIS en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
             <b>TÉRMINOS Y CONDICIONES: * Alimentos:</b>  Alimentos y bebidas no incluidos. <b>* Restricciones:</b>  El mínimo de noches de estancia puede variar dependiendo de la temporada. 
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            'resort_id'=>'86181',
            'ihotelier_id'=>'3550440',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

    
    ],
    


];