<?php

return [
    'template' => '0', // 1=Bloques   0=Defaul    
    'file' => 'jpg',
    'slug' => 'paquete-tour',
    'thumbnail'=>'',
    'title_seo' => 'PAQUETE DE TOUR. HOTEL + 2 TOURS DE NADO CON DELFINES | Royal Reservations',
    'alt_banner' => 'PAQUETE DE TOUR. HOTEL + 2 TOURS DE NADO CON DELFINES',
    'metadescription' => "Disfruta de una experiencia vacacional inolvidable en uno de nuestros resorts familiares frente al mar en Cancún o la Riviera Maya con un descuento especial de hasta el 46% para tus próximas vacaciones. Además, obtén un increíble beneficio adicional: la mejor experiencia de nado con delfines, “Dolphin Swim Adventure para 2”, donde tendrás la oportunidad de interactuar con un adorable delfín.",


    'title' => 'PAQUETE DE TOUR. HOTEL + 2 TOURS DE NADO CON DELFINES',
    'subtitle1' => '¡Reserva Ahora y disfruta de la Mejor Experiencia de tours en el Caribe!',
    'description1'=>"
    Disfruta de una experiencia vacacional inolvidable en uno de nuestros resorts familiares frente al mar en Cancún o la Riviera Maya con un descuento especial de hasta el 46% para tus próximas vacaciones. Además, obtén un increíble beneficio adicional: la mejor experiencia de nado con delfines, “Dolphin Swim Adventure para 2”, donde tendrás la oportunidad de interactuar con un adorable delfín.<br>

Aprovecha al máximo esta experiencia y diviértete con las diferentes actividades, como el beso, el abrazo, el saludo y más. Además, disfruta del mejor paseo sobre su barriguita y cruza a lo largo de la alberca con el boogie push. Con este paquete, disfrutarás de un día completo en Isla Mujeres, que incluye: desayuno, almuerzo y barra libre nacional, y también pasarás el día en un club de playa, además de otras actividades.<br>

Durante el programa de nado con delfines de 50 minutos, disfrutarás de diferentes actividades con los delfines, como el belly ride, el boogie push, el beso y abrazo, el saludo y más. Aprovecha esta oferta y reserva desde ahora tus próximas vacaciones en Cancún o Riviera Maya y disfruta de esta experiencia única en la vida.  
    ",
    'subtitle2' => 'Los Mejores Hoteles para disfrutar esta Experiencia',
    'description2'=>'
    Reserva Ahora en Resort Todo Incluido, Habitación con Desayunos o Solo Hospedaje y obtén 2 Tours de Nado con Delfines.
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

            'travel_window'=>'Mayo 1, 2019 y Dic. 15, 2019',            
            'bullets'=>'
                <li>2 Tours Nado con Delfines</li>
                <li>Alimentos y bebidas incluidos</li>
                <li>Niños se hospedan Gratis</li>          
            ',
            'discount_label'=>'40% + 10% DTO',
            'view_more'=>'
                    
                    <p>
                    Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                    </p>
                    <p>
Reserva desde Marzo 8 y hasta Abril 8<br>
Viaja entre Mayo 1, 2019 y Dic. 15, 2019
                    </p>
                    <p>40% + 10% DTO</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
                            <li>2 Tours Nado con Delfines (Swim Adventure Experience)</li>
                            <li>Ferry Cancún - Isla Mujeres - Cancún</li>
                            <li>Desayuno, Almuerzo y bebidas incluidas en el tour</li>
                            <li>Acceso al Club de Playa en Isla Mujeres</li>
                            <li>Alimentos y bebidas incluidos en el Resort</li>
                            <li>Room Service 24 horas en el Resort</li>
                            <li>Niños se hospedan & comen Gratis en el Resort</li>
                            <li>Internet de alta velocidad en todas las áreas del Resort</li>
                        </ul>
                    </p>
                    <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Tour Nado con Delfines:</b> Programa Nado con Delfines Tour Dolphin Swim Adventure para dos personas por reservación. Ferry Cancún - Isla Mujeres - Cancún incluido. Desyauno, comida y bebidas nacionales incluidas, así como acceso al Club de Playa de Isla Mujeres.  <b>* Niños se hospedan y comen GRATIS:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. Los niños de hasta 12 años pueden comer sin costo si están acompañados de sus padres. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada. Este paquete no incluye transportación terrestre hacia el muelle ni el paquete fotográfico durante la actividad. <b>* NOTA:</b> Impuesto de Muelle obligatorio de 180 pesos deben ser pagados directo en el muelle, no está incluido en la tarifa. <b>Fechas bloqueadas:</b> Julio 1 2019 a Agosto 23 2019.

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
            'ihotelier_id'=>'3676929',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],
     
        1=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mayo 1, 2019 y Dic. 15, 2019',            
            'bullets'=>'
                <li>2 Tours Nado con Delfines</li>
                <li>Alimentos y bebidas Premium ilimitadas</li>
                <li>Transportación Premium al Aeropuerto</li>
            ',
            'discount_label'=>'35% + 10% DTO',
            'view_more'=>'
                <p>
                Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                Reserva desde Marzo 8 y hasta Abril 8<br>
                Viaja entre Mayo 1, 2019 y Dic. 15, 2019
                </p>

                <p><b>35% + 10% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
 <li>2 Tours Nado con Delfines (Swim Adventure Experience)</li>
 <li>Ferry Cancún - Isla Mujeres - Cancún</li>
 <li>Desayuno, Almuerzo y bebidas incluidas en el tour</li>
 <li>Acceso al Club de Playa en Isla Mujeres</li>
 <li>Transportación Premium al Aeropuerto</li>
 <li>Alimentos gourmet y bebidas incluidos en el Resort</li>
 <li>Room Service 24 horas en el Resort</li>
 <li>Niños se hospedan & comen Gratis en el Resort</li>
 <li>Internet de alta velocidad en todas las áreas del Resort</li>
 </ul>
                </p>

                <p class="terms">
          <b>TÉRMINOS Y CONDICIONES: * Tour Nado con Delfines:</b> Programa Nado con Delfines Tour Dolphin Swim Adventure para dos personas por reservación. Ferry Cancún - Isla Mujeres - Cancún incluido. Desyauno, comida y bebidas nacionales incluidas, así como acceso al Club de Playa de Isla Mujeres.  <b>* Niños se hospedan GRATIS:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. <b>* Transportación al Aeropuerto:</b> Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar a la propiedad por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada. Este paquete no incluye transportación terrestre hacia el muelle ni el paquete fotográfico durante la actividad. <b>* NOTA:</b> Impuesto de Muelle obligatorio de 180 pesos deben ser pagados directo en el muelle, no está incluido en la tarifa. <b>Fechas bloqueadas:</b> Julio 1 2019 a Agosto 23 2019.
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
            'ihotelier_id'=>'3677033',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        2=>[
            'name'=>'The Royal Cancun All Suites Resort',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/the-royal-cancun',
            'slug'=>'the-royal-cancun',
            'stars'=>'4.5',
            'alt'=>'The Royal Cancun All Suites Resort',

            'travel_window'=>'Mayo 1, 2019 y Dic. 15, 2019',            
            'bullets'=>'
                <li>2 Tours Nado con Delfines</li>
                <li>Niños se hospedan Gratis</li>
                <br>
                        
            ',
            'discount_label'=>'40% + 10% DTO',
            'view_more'=>'
                    
                    <p>
                    Vive unas súper vacaciones en Cancún, relajándote en la playa y con las divertidas actividades de uno de los mejores resorts familiares frente al mar.
                    </p>
                    <p>
Reserva desde Marzo 8 y hasta Abril 8<br>
Viaja entre Mayo 1, 2019 y Dic. 15, 2019
                    </p>
                    <p>40% + 10% DTO</p>
                    <p><b>Esta promoción incluye:</b>

                        <ul>
 <li>2 Tours Nado con Delfines (Swim Adventure Experience)</li>
 <li>Ferry Cancún - Isla Mujeres - Cancún</li>
 <li>Desayuno, Almuerzo y bebidas incluidas en el tour</li>
 <li>Acceso al Club de Playa en Isla Mujeres</li>
<li>Niños se hospedan Gratis en el Resort</li>
 <li>Internet de alta velocidad en todas las áreas del Resort</li>
                        </ul>
                    </p>
                    <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Tour Nado con Delfines:</b> Programa Nado con Delfines Tour Dolphin Swim Adventure para dos personas por reservación. Ferry Cancún - Isla Mujeres - Cancún incluido. Desyauno, comida y bebidas nacionales incluidas, así como acceso al Club de Playa de Isla Mujeres.  <b>* Niños se hospedan GRATIS:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada. Este paquete no incluye transportación terrestre hacia el muelle ni el paquete fotográfico durante la actividad. <b>* NOTA:</b> Impuesto de Muelle obligatorio de 180 pesos deben ser pagados directo en el muelle, no está incluido en la tarifa. Fechas bloqueadas: Julio 1 2019 a Agosto 23 2019.

                    </p>
                           
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'1',
            // All Inclusive ai (1)  -- EP ep (2)   --   Bed & Breakfast bb (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'cun-ep',

            'resort_id'=>'73601',
            'ihotelier_id'=>'3679636',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        3=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mayo 1, 2019 y Dic. 15, 2019',            
            'bullets'=>'
                <li>2 Tours Nado con Delfines</li>
                <li>Transportación Premium al Aeropuerto</li>
                <br>
            ',
            'discount_label'=>'35% + 10% DTO',
            'view_more'=>'
                <p>
                Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                Reserva desde Marzo 8 y hasta Abril 8<br>
                Viaja entre Mayo 1, 2019 y Dic. 15, 2019
                </p>

                <p><b>35% + 10% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
 <li>2 Tours Nado con Delfines (Swim Adventure Experience)</li>
 <li>Ferry Cancún - Isla Mujeres - Cancún</li>
 <li>Desayuno, Almuerzo y bebidas incluidas en el tour</li>
 <li>Acceso al Club de Playa en Isla Mujeres</li>
 <li>Transportación Premium al Aeropuerto</li>
 <li>Niños se hospedan Gratis en el Resort</li>
 <li>Internet de alta velocidad en todas las áreas del Resort</li>
 </ul>
                </p>

                <p class="terms">
<b>TÉRMINOS Y CONDICIONES: * Tour Nado con Delfines:</b> Programa Nado con Delfines Tour Dolphin Swim Adventure para dos personas por reservación. Ferry Cancún - Isla Mujeres - Cancún incluido. Desyauno, comida y bebidas nacionales incluidas, así como acceso al Club de Playa de Isla Mujeres.  <b>* Niños se hospedan GRATIS:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. <b>* Transportación al Aeropuerto:</b> Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar a la propiedad por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada. Este paquete no incluye transportación terrestre hacia el muelle ni el paquete fotográfico durante la actividad. <b>* NOTA:</b> Impuesto de Muelle obligatorio de 180 pesos deben ser pagados directo en el muelle, no está incluido en la tarifa. Fechas bloqueadas: Julio 1 2019 a Agosto 23 2019.
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'2',
            // Label filtros
            'filtros'=>'riv-ep',

            'resort_id'=>'95939',
            'ihotelier_id'=>'3677043',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],

        4=>[
            'name'=>'Grand Residences Riviera Cancun',
            'resort_link'=>'https://royalreservations.com/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'slug'=>'grand-residences-riviera-cancun',
            'stars'=>'5',
            'alt'=>'Grand Residences Riviera Cancun',

            'travel_window'=>'Mayo 1, 2019 y Dic. 15, 2019',            
            'bullets'=>'
                <li>2 Tours Nado con Delfines</li>
                <li>Daily breakfast included</li>
                <li>Transportación Premium al Aeropuerto</li>
            ',
            'discount_label'=>'35% + 10% DTO',
            'view_more'=>'
                <p>
                Si quieres vivir unas vacaciones perfectas en la Riviera Maya, aprovecha esta excelente oferta en un resort de lujo.
                </p>         

                <p>
                Reserva desde Marzo 8 y hasta Abril 8<br>
                Viaja entre Mayo 1, 2019 y Dic. 15, 2019
                </p>

                <p><b>35% + 10% DTO</b></p>


                <p>
                <b>Esta promoción incluye:</b>
<ul>
 <li>2 Tours Nado con Delfines (Swim Adventure Experience)</li>
 <li>Ferry Cancún - Isla Mujeres - Cancún</li>
 <li>Desayuno, Almuerzo y bebidas incluidas en el tour</li>
 <li>Acceso al Club de Playa en Isla Mujeres</li>
 <li>Transportación Premium al Aeropuerto</li>
 <li>Desayuno buffet diario en el Resort</li>
 <li>Niños se hospedan & comen Gratis en el Resort</li>
 <li>Internet de alta velocidad en todas las áreas del Resort</li>
 </ul>
                </p>

                <p class="terms">
         <b>TÉRMINOS Y CONDICIONES: * Tour Nado con Delfines:</b> Programa Nado con Delfines Tour Dolphin Swim Adventure para dos personas por reservación. Ferry Cancún - Isla Mujeres - Cancún incluido. Desyauno, comida y bebidas nacionales incluidas, así como acceso al Club de Playa de Isla Mujeres.  <b>* Niños se hospedan GRATIS:</b> Los niños de hasta 12 años de edad pueden hospedarse sin costo extra utilizando las camas existentes enla habitación; no hay camas extra. <b>* Transportación al Aeropuerto:</b> Esta promoción incluye un servicio de transportación de aeropuerto en viaje redondo (aeropuerto - hotel - aeropuerto). El cliente debe contactar a la propiedad por lo menos 48 horas previo a su llegada para coordinar su servico de transportación. <b>* Restricciones:</b> La estancia mínima es de 3 noches, sin embargo, esto podría variar dependiendo de la temporada. Este paquete no incluye transportación terrestre hacia el muelle ni el paquete fotográfico durante la actividad. <b>* NOTA:</b> Impuesto de Muelle obligatorio de 180 pesos deben ser pagados directo en el muelle, no está incluido en la tarifa. Fechas bloqueadas: Julio 1 2019 a Agosto 23 2019.
                </p>         
            ',

            //configuración 
            //Cancun (1)-/-Riviera Maya(2)-/-Playa del Carmen(3)-/-Sint Maarten(4)-/- Curacao(5)-/-Punta Cana(6)-/
            'destination'=>'2',
            // All Inclusive (1)  -- EP  (2)   --   Bed & Breakfast (3)
            'rate_plan'=>'3',
            // Label filtros
            'filtros'=>'riv-bb',

            'resort_id'=>'95939',
            'ihotelier_id'=>'3677051',
            'tipo'=>'1', // 1 RatePlanID   --  2 Package
            'code'=>'', // 
        ],


],



    'expiration'=>'04/08/2019', // mm/dd/yyyy
    'blackouts'=>[ //fecha de programacion (temporalmente)
        0=>['inicio'=>'03/08/2019','fin'=>'04/30/2019', ], // mm/dd/yyyy
        1=>['inicio'=>'12/16/2019','fin'=>'12/31/2021', ], // mm/dd/yyyy
    ],
    'minimo_noches'=>'3',
    'code'=>'',
];