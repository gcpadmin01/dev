<?php

return [

    'subtitulo2'=>'LAS MEJORES PROMOCIONES PARA HOTELES',

    'deals' => [

        0=>[
            'slug'=>'ofertas-especiales',
            'alt'=>'Especial de Primavera',
            'name'=>'Especial de Primavera',
            'discount'=>'Hasta 52% DTO + Beneficios Adicionales',
            'description'=>'¡Reserva y obtén hasta 52% de descuento en tu reservación Royal para hospedarte en cualquiera de nuestros resorts en el Caribe! ¡Escápate y disfruta de todos los beneficios! ',
        ],     

        1=>[
            'slug'=>'oferta-anticipada',
            'alt'=>'Semana Santa en la Playa',
            'name'=>'Semana Santa en la Playa',
            'discount'=>'Hasta 50% DTO + $150 USD en Resort Credits',
            'description'=>'¡La espera por la mejor promoción ha terminado! Nuestra oferta de Semana Santa te invita a reservar esas fechas especiales al mejor precio!',
        ],

        2=>[
            'slug'=>'hotel-de-lujo',
            'alt'=>'Vacaciones de lujo',
            'name'=>'Vacaciones de lujo',
            'discount'=>'35% de Descuento + beneficios adicionales, en la Riviera Maya',
            'description'=>'Vive unas vacaciones perfectas en un resort de lujo en la Riviera Maya con un 35% de descuento y beneficios como transportación premium de aeropuerto.',
        ],
        3=>[
            'slug'=>'paquete-tour',
            'alt'=>'Hotel + Tour',
            'name'=>'Hotel + Tour',
            'discount'=>'Hasta 46% DTO + Nado con Delfines',
            'description'=>'Disfruta de unas vacaciones en uno de nuestros resorts en Cancún o la Riviera Maya con un descuento de hasta 46% y obtén 2 Tours de Nado con Delfines.',
        ],      
    ],


    'resorts' => [

        0=>[
            'name'=>'The Royal Haciendas All Suites Resort & SPA',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-haciendas',
            'slug'=>'the-royal-haciendas',
            'stars'=>'5',
            'alt'=>'The Royal Haciendas All Suites Resort & SPA',

            'offer_name'=>'Especial de Primavera',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Abr. 1, 2019',            
            'bullets'=>'
                <li>$50 USD Resort Credit</li>
                <li>Transportación Gratis</li>
                <li>Alimentos y bebidas incluidos</li>
            ',
            'discount_label'=>'40% + 10% DTO',
            'view_more'=>'
            <p>
            Vive una experiencia inolvidable con un paquete de vacaciones Todo Incluido en un hotel de Playa del Carmen con esta oferta especial para ti.
            </p>         
    
            <p>
            Reserva desde Marzo 5 y hasta Abril 1<br>
            Viaja entre Mar. 5, 2019 y Ene. 1, 2021
            </p>
    
            <p><b>40% + 10% DTO</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
             <li>$50 USD Resort Credit</li>
             <li>Transportación Gratis</li>
             <li>Alimentos y bebidas incluidos</li>
             <li>Room Service 24 horas</li>
             <li>Niños se hospedan y comen Gratis</li>
             <li>Internet de alta velocidad Gratis en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
            <b>TÉRMINOS Y CONDICIONES: * Resort Credit:</b> El Resort Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en la recepción al momento del check-out. <b>*Transportación:</b> El servicio de transportación gratuita en servicio compartido. El cliente debe contactar a la Agencia Thomas More Travel con un mínimo de 48 horas antes de la llegada.   <b>* Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres.  <b>*Restricciones:</b> El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'3',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            'resort_id'=>'86184',
            'ihotelier_id'=>'3644005',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        1=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'offer_name'=>'Especial de Primavera',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Abr. 1, 2019',            
            'bullets'=>'
                <li>$150 USD Resort Credit</li>
                <li>Masaje de 30 Min. para dos</li>
                <li>Transportación Premium al Aeropuerto</li>         
            ',
            'discount_label'=>'35% + 10% DTO',
            'view_more'=>'
            <p>
            Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
            </p>         
    
            <p>
            Reserva desde Marzo 5 y hasta Abril 1<br>
            Viaja entre Mar. 5, 2019 y Ene. 1, 2021
            </p>
    
            <p><b>35% + 10% DTO</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
                 <li>$150 USD Resort Credit</li>
                 <li>Masaje de 30 Min. para dos</li>
                 <li>Transportación Premium al Aeropuerto</li>
                 <li>Alimentos y bebidas Premium ilimitadas</li>
                 <li>Room Service 24 horas</li>
                 <li>Niños comen y se hospedan Gratis</li>
                 <li>Internet de alta velocidad Gratis en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
            <b>TÉRMINOS Y CONDICIONES: * Resort Credit:</b> El Resort Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en la recepción al momento del pago de la cuenta, su valor podrá cubrir consumos del Spa, y el Gourmet Food Market. El Resort Credit no podrá combinarse con otras promociones ni descuentos. <b>* Niños se hospedan y comen GRATIS:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>* Transportación al Aeropuerto:</b> Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar a la propiedad por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada. 
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            'resort_id'=>'95939',
            'ihotelier_id'=>'3644280',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],    




        2=>[
            'name'=>'The Royal Sands Resort & Spa <br>All Inclusive',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-sands',
            'slug'=>'the-royal-sands',
            'stars'=>'5',
            'alt'=>'The Royal Sands Resort & Spa <br>All Inclusive',

            'offer_name'=>'Semana Santa en la Playa',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/oferta-anticipada',
            'booking_end'=>'Abr. 1, 2019',          
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
            Reserva desde Enero 21 y hasta Abril 1<br>
            Viaja entre Mar. 30, 2019 y May. 5, 2019
            </p>
    
            <p><b>35% + 10% DTO</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
             <li>$150 USD Tour Credit</li>
             <li>Alimentos y bebidas incluidos</li>
             <li>Room Service 24 horas</li>
             <li>Niños se hospedan y comen Gratis</li>
             <li>Internet de alta velocidad Gratis en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
<b>TÉRMINOS Y CONDICIONES: Resort Credit:</b> El Resort Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en la recepción al momento del check-out. <b>* Todo Incluido:</b> algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres..  *Restricciones: El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            'resort_id'=>'86169',
            'ihotelier_id'=>'3574978',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],




        3=>[
            'name'=>'The Royal Islander All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-islander',
            'slug'=>'the-royal-islander',
            'stars'=>'4',
            'alt'=>'The Royal Islander All Suites Resort',

            'offer_name'=>'Especial de Primavera',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Abr. 1, 2019',            
            'bullets'=>'
                <li>Desayuno Buffet Diario Gratis</li>
                <li>Niños se hospedan Gratis</li>
                <li>Internet de alta velocidad Gratis</li>        
            ',
            'discount_label'=>'40% + 5% DTO.',
            'view_more'=>'
            <p>
            Este es el momento perfecto para reservar tus vacaciones y con esta promoción especial, disfrutarás al máximo tus próximas vacaciones en Cancún.
            </p>         
    
            <p>
            Reserva desde Marzo 5 y hasta Abril 1<br>
            Viaja entre Mar. 5, 2019 y Ene. 1, 2021
            </p>
    
            <p><b>40% + 5% DTO.</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
             <li>Desayuno Buffet Diario Gratis</li>
             <li>Niños se hospedan Gratis</li>
             <li>Internet de alta velocidad Gratis en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
            <b>TÉRMINOS Y CONDICIONES: * Desayunos:</b> Desayuno buffet gratis para todos los huéspedes registrados en la reservación. <b>* Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. <b>* Restricciones:</b> El mínimo de noches de estancia es de 3 noches; sin embargo, puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            'resort_id'=>'86182',
            'ihotelier_id'=>'3644018',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        4=>[
            'name'=>'The Royal Cancun All Suites Resorts',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-cancun',
            'slug'=>'the-royal-cancun',
            'stars'=>'4',
            'alt'=>'The Royal Cancun All Suites Resorts',

            'offer_name'=>'Semana Santa en la Playa',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/oferta-anticipada',
            'booking_end'=>'Abr. 1, 2019',            
            'bullets'=>'
                <li>$150 USD Tour Credit</li>
                <li>Alimentos y bebidas incluidos</li>
                <li>Niños se hospedan y comen Gratis</li>
                
                        
            ',
            'discount_label'=>'40% + 10% DTO',
            'view_more'=>'
            <p>
            Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
            </p>         
    
            <p>
            Reserva desde Enero 21 y hasta Abril 1<br>
            Viaja entre Mar. 30, 2019 y May. 5, 2019
            </p>
    
            <p><b>40% + 10% DTO</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
                 <li>$150 USD Resort Credit</li>
                 <li>Alimentos y bebidas incluidos</li>
                 <li>Room Service 24 horas</li>
                 <li>Niños se hospedan y comen Gratis</li>
                 <li>Internet de alta velocidad Gratis en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
            <b>TÉRMINOS Y CONDICIONES: * Resort Credit:</b> El Resort Credit no debe ser considerado como dinero en efectivo, es por reservación y solo se puede aplicar directamente en la recepción al momento del check-out. <b>* Todo Incluido: </b>algunos cargos adicionales podrían aplicar para alimentos o bebidas premium. Servicio a la habitación con menú limitado las 24 horas.  <b>* Niños se hospedan y comen gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. * Restricciones: El mínimo de noches de estancia es de 4 noches; sin embargo, puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            'resort_id'=>'73601',
            'ihotelier_id'=>'3574937',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        5=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'offer_name'=>'Especial de Primavera',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Abr. 1, 2019',            
            'bullets'=>'
                        
                <li>Desayuno Buffet Diario Gratis</li>
                <li>Niños se hospedan Gratis</li>
                <li>Internet de alta velocidad Gratis</li>
                        
            ',
            'discount_label'=>'50% + 5% DTO.',
            'view_more'=>'
            <p>
           Reserva ahora con Royal Reservations y disfruta tus vacaciones en Cancún en cualquier fecha del próximo año.
            </p>         
    
            <p>
            Reserva desde Marzo 5 y hasta Abril 1<br>
            Viaja entre Mar. 5, 2019 y Ene. 1, 2021
            </p>
    
            <p><b>50% + 5% DTO.</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
                 <li>Desayuno Buffet Diario Gratis</li>
                 <li>Niños se hospedan Gratis</li>
                 <li>Internet de alta velocidad Gratis</li>
            </ul>
            </p>
    
            <p class="terms">
                <b>TÉRMINOS Y CONDICIONES: * Desayunos:</b> Desayuno buffet gratis para todos los huéspedes registrados en la reservación. <b>* Niños se hospedan gratis:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes en la habitación; no hay camas extra. <b>* Restricciones:</b> El mínimo de noches de estancia es de 3 noches; sin embargo, puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'1',
            'resort_id'=>'86175',
            'ihotelier_id'=>'3644244',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        6=>[
            'name'=>'The Villas at Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-villas-at-simpson-bay-resort',
            'slug'=>'the-villas-at-simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'offer_name'=>'Especial de Primavera',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Abr. 1, 2019',            
            'bullets'=>'
                        
            <li>Desayuno Buffet Diario</li>
            <li>Wi-Fi Gratuito</li>
            <br>
                        
            ',
            'discount_label'=>'45% + 10% DTO.',
            'view_more'=>'
            <p>
           Con esta oferta especial, experimentarás un ambiente caribeño, con la cultura de la isla de St. Maarten, el clima cálido para que te relajes en la playa.
            </p>         
    
            <p>
            Reserva desde Marzo 5 y hasta Abril 1<br>
            Viaja entre Mar. 5, 2019 y Ene. 1, 2021
            </p>
    
            <p><b>45% + 10% DTO.</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
             <li>Desayuno Buffet Diario</li>
             <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
             <b>TÉRMINOS Y CONDICIONES: * Desayunos:</b> Desayuno Buffet Diario para todos los ocupantes de la habitación.   <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            'resort_id'=>'86180',
            'ihotelier_id'=>'3549417',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],             

        
        7=>[
            'name'=>'Simpson Bay Beach Resort & Marina',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/simpson-bay-resort',
            'slug'=>'simpson-bay-resort',
            'stars'=>'5',
            'alt'=>'Simpson Bay Beach Resort & Marina',

            'offer_name'=>'Especial de Primavera',
            'offer_link'=>'https://royalreservations.com/es/ofertas/hoteles/ofertas-especiales',
            'booking_end'=>'Abr. 1, 2019',            
            'bullets'=>'
                        
            <li>Desayuno Buffet Diario</li>
            <li>Internet Gratis</li>
            <br>
                        
            ',
            'discount_label'=>'45% + 10% DTO',
            'view_more'=>'
            <p>
            Déjanos consentirte con unas perfectas vacaciones con tus seres queridos en uno de los mejores hoteles de playa en St. Maarten.
            </p>         
    
            <p>
            Reserva desde Marzo 5 y hasta Abril 1<br>
            Viaja entre Mar. 5, 2019 y Ene. 1, 2021
            </p>
    
            <p><b>45% + 10% DTO.</b></p>
    
    
            <p>
            <b>Esta promoción incluye:</b>
            <ul>
             <li>Desayuno Buffet Diario</li>
             <li>Wi-Fi de alta velocidad GRATIS en todas las áreas</li>
            </ul>
            </p>
    
            <p class="terms">
            <b>TÉRMINOS Y CONDICIONES: * Desayunos:</b> Desayuno Buffet Diario para todos los ocupantes de la habitación.   <b>*Restricciones:</b> El mínimo de noches de estancia puede variar dependiendo de la temporada.
            </p>      
        ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'4',

            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            'resort_id'=>'86179',
            'ihotelier_id'=>'354940',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        
    ],
    


];