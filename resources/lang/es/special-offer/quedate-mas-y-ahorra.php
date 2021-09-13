<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'stay-longer-and-save',
    'thumbnail'=>'quedate-mas-y-ahorra',
    'title_seo' => 'STAY LONGER AND SAVE! | Royal Reservations',
    'alt_banner' => 'STAY LONGER AND SAVE!',
    'metadescription' => 'Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo!',


    'title' => '¡QUÉDATE MÁS NOCHES Y AHORRA!',
    'subtitle1' => 'Viaja en cualquier fecha del año y disfruta los beneficios de una estancia larga',
    'description1'=>'
        Porque cuando estás de vcaciones los días nunca son suficientes; ven al Caribe Mexicano y reconecta con la naturaleza y tus seres queridos gracias a esta Oferta Especial para estancias largas. <br>

Reserva ahora tu estancia de más de 14 noches en The Royal Caribbean, elige entre Plan solo habitación o Plan con desayunos y recibe un 50% de descuento más transportación redonda al aeropuerto gratuita, y un 15% de descuento adicional. <br>

Descuebre por qué The Royal Caaribbean es tu mejor opción de resort de playa; ideal para viajeros que buscan días soleados y tranquilos frente a las aguas turquesas del Caribe. Nuestros servicios y amenidades serán todo lo que necesites. <br>

        
    ',
    'subtitle2' => 'Los Mejores Hoteles para Estancias Largas',
    'description2'=>'
        Reserva ahora y viaja cuando quieras empezar a disfrutar tus vacaciones en el Caribe Mexicano.
    ',
    
    // Se llena para el template por Bloques (1)
    'subtitle3' => '',
    'description3'=>'',
    //------------------------------------------------------------------------    


    //etiquetas regularmente sin cambios
    'reloj_title' => 'Hurry up',
    
    //configuración
    'flash' => '0', // 1=> si -- 0=> NO
    'fecha_fin' => '01/07/2019', // Fecha fin de campaña en la web (mm/dd/yyyy)
    'lista_filtros'=>[
        0=>['name'=>'Cancun','value'=>'cun'],
    ],
    'lista_filtros2'=>[
        0=>['name'=>'European Plan','value'=>'ep'],
        1=>['name'=>'Bed & Breakfast','value'=>'bb'],
    ],


    'resorts'=>[
        0=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Hoy y hasta el 29/04/2019',            
            'bullets'=>'
                        <li>Desayuno buffet diario para todos</li>
                        <li>Transportación redonda gratis</li>
                        <li>Niños se hospedan GRATIS</li>
                        
            ',
            'discount_label'=>'50% + 15% Adicional',
            'view_more'=>'
                    
                    <p>
                    Reserva una estancia de más de 14 noches en Plan Habitación + Desayuno y recibe un 50% de descuento más un descuento adicional del 15%, al igual que transportación redonda gratuita al aeropuerto y los desayunos buffet diario para todos los ocupantes de la habitación. 
                    </p>
                    <p>
                    Reserva desde: Hoy y hasta el 29/04/2019<br>
Viaja entre Hoy y 30/04/2029
                    </p>
                    <p>50% + 15% Adicional</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
<li>Desayuno buffet diario para todos los huéspedes confirmados</li>
<li>Transportación gratis para todos los ocupantes</li>
<li>Niños se hospedan gratis</li>
<li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                         
                        </ul>
                    </p>
                    <p class="terms">
TÉRMINOS Y CONDICIONES:
Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) por persona confirmada en su carta de confirmación. La transportación será otorgada en servicio compartido. El servicio está disponible para vuelos que llegan entre las 5 am y 11:59 pm y vuelos despegando a partir de las 7 am y hasta las 9pm. El servicio debe ser confirmado por lo menos 48 horas antes de la llegada, de lo contrario no será posible garantizar el mismo. Esta promoción no incluye alimentos ni bebidas. Esta promoción también incluye un desayuno buffet diario gratis por persona confirmada en su carta de confirmación. Alimentos y bebidas adicionales tendrán un costo adicional.
                    </p>
                           
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'86175',
            'ihotelier_id'=>'3021317',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
        1=>[
            'name'=>'The Royal Caribbean All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-caribbean/the-royal-caribbean-all-suites-resort-cancun',
            'slug'=>'the-royal-caribbean',
            'stars'=>'3.5',
            'alt'=>'The Royal Caribbean All Suites Resort',

            'travel_window'=>'Hoy y hasta el 29/04/2019',            
            'bullets'=>'
                        <li>Transportación redonda gratis</li>
                        <li>Niños se hospedan GRATIS</li>
                        <br>
                        
            ',
            'discount_label'=>'50% + 15% Adicional',
            'view_more'=>'
                    
                    <p>
                    Reserva una estancia de más de 14 noches en Plan Solo Habitación y recibe un 50% de descuento más un descuento adicional del 15%, al igual que transportación redonda gratuita al aeropuerto.
                    </p>
                    <p>
                    Reserva desde: Hoy y hasta el 29/04/2019<br>
Viaja entre Hoy y 30/04/2029
                    </p>
                    <p>50% + 15% Adicional</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
   <li>Transportación gratis para todos los ocupantes</li>
<li>Niños se hospedan gratis</li>
<li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                         
                        </ul>
                    </p>
                    <p class="terms">
TÉRMINOS Y CONDICIONES:
Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) por persona confirmada en su carta de confirmación. La transportación será otorgada en servicio compartido. El servicio está disponible para vuelos que llegan entre las 5 am y 11:59 pm y vuelos despegando a partir de las 7 am y hasta las 9pm. El servicio debe ser confirmado por lo menos 48 horas antes de la llegada, de lo contrario no será posible garantizar el mismo. 
                    </p>
                           
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'3',
            // Label filtros
            'filtros'=>'cun-bb',

            'resort_id'=>'86175',
            'ihotelier_id'=>'3021321',
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