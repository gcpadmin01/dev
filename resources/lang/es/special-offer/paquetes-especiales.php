<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'special-package',
    'thumbnail'=>'special-package',
    'title_seo' => 'BUNDLE DEAL | Royal Reservations',
    'alt_banner' => 'BUNDLE DEAL',
    'metadescription' => 'Another year is about to end and at Royal Reservations we want to give you the best of gifts with this special promo!',


    'title' => 'PAQUETES ESPECIALES',
    'subtitle1' => '¡Reserva ahora y viaja entre Hoy y el 30 Abril de 2019!',
    'description1'=>'
        Aprovecha esta magnífica promoción y viaja a las hermosas playas de arena blanca de Cancún. Sumérgete en el azul del océano, diviértete con las actividades acuáticas y terrestres, degusta la deliciosa cocina mexicana e internacional, y aprende sobre la cultura del destino.
        
    ',
    'subtitle2' => 'Los Mejores Hoteles de Playa disponibles con esta Oferta',
    'description2'=>'
        Reserva Ahora y experimenta las mejores vacaciones en la playa con Royal Reservations. 
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

            'travel_window'=>'Hoy y hasta Septiembre 1 de 2019',            
            'bullets'=>'
                        <li>Transportación gratis</li>
                        <li>Niños de hasta 12 años de edad se hospedan gratis</li>
                        <li>Wi-Fi de alta velocidad gratis</li>
                        
            ',
            'discount_label'=>'50% + 10% Adicional',
            'view_more'=>'
                    
                    <p>
                    Disfruta de tus vacaciones con esta oferta y recibe un descuento especial de 50% más un 10% adicional al reservar la suite de tu preferencia y obtén Gratis la Transportación redonda al Aeropuerto.
                    </p>
                    <p>
                    Reserva desde: Hoy y hasta Abril 1 de 2019<br>
Viaja entre Hoy y hasta  Septiembre 1 de 2019
                    </p>
                    <p>50% + 10% Adicional</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
<li>Gratis Transportación redonda al aeropuerto</li>
<li>Los Niños se hospedan gratis</li>
<li>Wi-Fi de alta velocidad gratis en la habitación y áreas comunes</li>
                         
                        </ul>
                    </p>
                    <p class="terms">
TÉRMINOS Y CONDICIONES:
Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto) por persona confirmada en su carta de confirmación. La transportación será otorgada en servicio compartido. El servicio está disponible para vuelos que llegan entre las 5 am y 11:59 pm y vuelos despegando a partir de las 7 am y hasta las 9pm. El servicio debe ser confirmado por lo menos 48 horas antes de la llegada, de lo contrario no será posible garantizar el mismo. Esta promoción no incluye alimentos ni bebidas.
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
            'ihotelier_id'=>'3021296',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
    
    ],



    'expiration'=>'04/01/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'11/30/2018','fin'=>'12/02/2018', ], // mm/dd/yyyy
        1=>['inicio'=>'01/04/2020','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'4',
    'code'=>'',
];