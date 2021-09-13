<?php

return [
    'seo'=>[
        'title'=>'Vacaciones en familia al Caribe | Royal Reservations',
        'metadescription'=>'Vive una experiencia memorable en compañía de tus seres queridos, en unas vacaciones familiares sin igual con Royal Reservations. Elige entre Cancun, Riviera Maya, Punta Cana y otros destinos de playa.',
    ],
    'title' => 'Vacaciones En Familia Con Royal Reservations', # Titulo de la sección y la pagina
    'subtitle' => 'Experiencias Vacacionales Únicas Para Toda La Familia', # Sub - Titulo de la sección y la pagina
    # Contenido de la pagina
    'content' => '
        <p>Con <strong>Royal Reservations</strong> vivir&aacute;s unas vacaciones familiares de ensue&ntilde;o en cualquiera de nuestros hermosos destinos de playa en el <strong>Caribe Mexicano</strong> y las <strong>Islas de Caribe</strong>. Para&iacute;sos como <strong>Canc&uacute;n, Playa del Carmen </strong>y la<strong> Riviera Maya</strong> te brindar&aacute;n la m&aacute;s c&aacute;lida bienvenida con un turquesa marino que cautiva, playas id&iacute;licas, gastronom&iacute;a &uacute;nica y el mejor entretenimiento con actividades y tours tanto divertidos como culturales, para toda la familia.</p>
        <p>Asimismo, <strong>Curacao, St. Maarten </strong>y<strong> Punta Cana</strong>, ser&aacute;n el escenario perfecto para divertirse, descansar y vivir aventuras inolvidables, con la gran variedad de atracciones, maravillas naturales y por supuesto, magn&iacute;ficas playas con el sello caracter&iacute;stico del Caribe. &nbsp;</p>
        <p>Vive una experiencia memorable en compa&ntilde;&iacute;a de tus seres queridos, en unas vacaciones familiares sin igual con <strong>Royal Reservations</strong>.</p>
    ',

    'content_mobile' => '
        <p>Vive una experiencia memorable en compa&ntilde;&iacute;a de tus seres queridos, en unas vacaciones familiares sin igual con <strong>Royal Reservations</strong>.</p>
    ',

    'destinations' => [
        0 => [
            'title_tab' => 'Cancun', # Titulo del tab de destino
            'idem'      => '1',
            'title' => 'Vacaciones Familiares en Cancún', # Titulo de la descripción
            'description' => '¡Es el tiempo perfecto para que tú y tu familia vivan unas vacaciones en Cancún con Royal Reservations! El mar turquesa les dará la bienvenida a increíbles momentos llenos de actividades fascinantes como nados con delfines, shows de piratas y tours al corazón de la selva maya para descubrir cenotes sagrados. Lleva a los pequeños al acuario interactivo o al Kids Club de nuestros resorts.', # Descripción del destino

            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda
            'list'=>[
                0=>[
                    'title'=>'Kids Club en los hoteles',
                    'description'=>'Tus vacaciones en Cancún nunca han sido tan divertidas como en nuestros resorts de playa, pues tienen actividades bajo supervisión para los pequeños, especialmente en el Kids Club que es para niños entre 4 y 12 años. Relájate mientras tus niños juegan, hacen deportes, arte y manualidades.',
                    'img'=>'family/cancun-a.jpg',
                ],
                1=>[
                    'title'=>'Cenotes',
                    'description'=>'Durante tus inolvidables vacaciones en Cancún, encontrarás un nuevo mundo por explorar  tanto en los cenotes al aire libre como en los subterráneos. Estos increíbles recintos en medio de la selva eran considerados sagrados para los antiguos mayas. Descubre estos místicos santuarios y nada en sus aguas cristalinas.',
                    'img'=>'family/cancun-b.jpg',
                ],
                2=>[
                    'title'=>'Nado con delfines',
                    'description'=>'Nadar en las cristalinas aguas de Cancún es maravilloso, pero nadar con delfines en Cancún es una experiencia inolvidable que te encantará. Conoce a estos increíbles animalitos marinos, interactúa y juega con ellos en un ambiente seguro. Recibe un abrazo y un besito.',
                    'img'=>'family/cancun-c.jpg',
                ],
                3=>[
                    'title'=>'Parques acuáticos',
                    'description'=>'Cancún es más que solo hermosas playas y un mar sin comparación, también tiene increíbles parques acuáticos con muchas actividades divertidas para todas las edades y gustos. Disfruta y refréscate en los toboganes, albercas, tirolesas y más.',
                    'img'=>'family/cancun-d.jpg',
                ],
                4=>[
                    'title'=>'Acuario interactivo',
                    'description'=>'El Acuario Interactivo en Cancún es una de las mayores atracciones para chicos y grandes que visitan este destino de playa. En este increíble lugar viven 1,195 especies marinas, además de que puedes interactuar con algunas de ellas en sus tanques y disfrutar de algunos shows en el auditorio.',
                    'img'=>'family/cancun-e.jpg',
                ],
                5=>[
                    'title'=>'Show Pirata',
                    'description'=>'¡Ahoy, pirata! Únete a un grupo de piratas temerarios en búsqueda de tesoros perdidos y sé testigo de una batalla campal entre bucaneros.  Navega los mares de Cancún hacia una increíble aventura para toda la familia, con espadas, cañones y brindis al ritmo de himnos legendarios de los siete mares.',
                    'img'=>'family/cancun-f.jpg',
                ],
                6=>[
                    'title'=>'Isla Mujeres',
                    'description'=>'Isla Mujeres es una joya del Caribe Mexicano y una de las más hermosas islas cercanas a Cancún. Sus aguas cristalinas y bellos arrecifes de coral son perfectos para actividades como el snorkel y el buceo. Además, te fascinará visitar Punta Sur y comer un filete fresco a la orilla de la playa.',
                    'img'=>'family/cancun-g.jpg',
                ],
            ],

            'title_description_resorts'=>'Unas inolvidables vacaciones en familia en Cancún',
            'description_resorts'=>'Tu familia sólo merece lo mejor cuando, y cuando hablamos de vacaciones familiares en el Caribe Mexicano, las mejores experiencias se viven en Cancún. La playa, el sol, la arena blanca y el mar azul son parte de tu rutina diaria. Y para tener unas vacaciones aún más disfrutables al lado de tu familia, te recomendamos hospedarte en nuestros impecables resorts de la Zona Hotelera y disfrutar de sus suites, amenidades y servicios.',

            'resorts' => [ # resorts de la zona
                [ 'resort'=> 'resorts/the-royal-sands',],
                [ 'resort'=> 'resorts/the-royal-islander', ],
                [ 'resort'=> 'resorts/the-royal-cancun',],
            ],
        ], // fin de arreglo 0 para Cancun

        1 => [
            'title_tab' => 'Puerto Morelos', # Titulo del tab de destino
            'idem'      => '4',
            'title' => 'Vacaciones Familiares en Puerto Morelos', # Titulo de la descripción
            'description' => 'La experiencia de unas vacaciones de lujo en Puerto Morelos también incluye mucha diversión y bellos paisajes que te harán muy feliz. Explora la selva Maya en búsqueda de cenotes sagrados y de camino, visita el zoológico de cocodrilos para aprender más sobre ellos. Después sumérgete con una máscara de snorkel y admira los arrecifes de coral. ¡Experimenta todo lo que puedes hacer en Puerto Morelos!', # Descripción del destino

            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda
            'list'=>[
                0=>[
                    'title'=>'Actividades para los niños en los hoteles',
                    'description'=>'Tus hijos también se divertirán mucho en este destino, gracias a las increíbles actividades y entretenimiento para niños que están disponibles en el resort. Disfrutarán mucho jugar hockey, la hora del cine, juegos tradicionales mexicanos y más. Mientras ellos hacen nuevos amigos en un ambiente seguro, tú puedes descansar en la playa.',
                    'img'=>'family/puerto-morelos-a.jpg',
                ],
                1=>[
                    'title'=>'Cenotes',
                    'description'=>'Explora cada uno de los rincones de la ruta de los cenotes y nada, practica snorkel o buceo en sus frescas y cristalinas aguas. Sumérgete en la selva maya y descubre la razón por la que eran considerados sagrados para los antiguos mayas. ',
                    'img'=>'family/puerto-morelos-b.jpg',
                ],
                2=>[
                    'title'=>'Crococun',
                    'description'=>'Descubre un poco de la prehistoria con una de las especies más antiguas que han habitado nuestro planeta.  Los cocodrilos han sobrevivido millones de años hasta el día de hoy, atestiguando todos los cambios de la Tierra.  Visita el parque y atrévete a caminar cerca de estos majestuosos animales.',
                    'img'=>'family/puerto-morelos-c.jpg',
                ],
                3=>[
                    'title'=>'Snorkeling',
                    'description'=>'Puerto Morelos es un idílico lugar donde podrás disfrutar una experiencia inigualable de snorkel. Déjate sorprender con las increíbles maravillas naturales bajo el agua del gran arrecife de coral. Admira algunas tortugas, esponjas y peces multicolores… Un espectáculo que no te puedes perder.',
                    'img'=>'family/puerto-morelos-d.jpg',
                ],
                4=>[
                    'title'=>'Paseos en bote',
                    'description'=>'Navega a la aventura en la inmensidad de las aguas del Mar Caribe, a bordo de un barco o catamarán que te llevará a vivir un relajante e increíble paseo. Experimenta el mar a otro nivel y disfruta invaluables momentos con tu familia, amigos o pareja en Puerto Morelos.',
                    'img'=>'family/puerto-morelos-e.jpg',
                ],                                                                
            ],

            'title_description_resorts'=>'Unas vacaciones en familia en Puerto Morelos para recordar',
            'description_resorts'=>'A unos pasos de las increíbles playas en el Caribe, encontrarás un destino increíble con toda la tranquilidad y diversión para unas inolvidables vacaciones en el Caribe Mexicano, llamado Puerto Morelos. Este pequeño pueblo de pescadores, llenará tus días con bellezas naturales y atracciones. Vive la alegría de unas vacaciones de lujo en familia en Puerto Morelos al hospedarte en nuestro resort de playa que ofrece lo mejor en amenidades y exclusivos servicios.',

            'resorts' => [ # resorts de la zona
                0 => [ 'resort'=> 'resorts/grand-residences-riviera-cancun',],
            ]
        ], // fin arreglo de datos de RM


        2 => [
            'title_tab' => 'Playa del Carmen', # Titulo del tab de destino
            'idem'      => '3',
            'title' => 'Vacaciones Familiares en Playa del Carmen', # Titulo de la descripción
            'description' => '¿Estás listo para vivir una experiencia única en Playa del Carmen? Ven con toda tu familia y deja que comience la diversión con toda la gama de actividades y entretenimiento en este pintoresco destino. Deja que los niños se diviertan en el Kids Club del resort o visiten cualquier parque temático de la Riviera Maya y el Museo 3D en la ciudad. ¡Royal Reservations te guiará todo el camino!', # Descripción del destino

            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda
            'list'=>[
                0=>[
                    'title'=>'Kids Club en los hoteles',
                    'description'=>'Nuestro Kids Club es un fantástico lugar donde tus hijos pueden jugar juegos de mesa, ver películas, hacer manualidades y arte, o muchas otras actividades. Todo en un lugar completamente seguro, a cargo de nuestro equipo, cuyos miembros son siempre amigables y divertidos.',
                    'img'=>'family/playa-del-carmen-a.jpg',
                ],
                1=>[
                    'title'=>'Parque Xel-Há',
                    'description'=>'El increíble Parque Xel-Há, te espera muy cerca de Playa del Carmen. Descubre una de las maravillas naturales del Caribe Mexicano en un lugar que lo tiene todo, desde actividades familiares hasta aventuras en cristalinos ríos que dan hasta el mar.  Al final del día, relájate en el área de hamacas.',
                    'img'=>'family/playa-del-carmen-b.jpg',
                ],
                2=>[
                    'title'=>'Parques temáticos',
                    'description'=>'¿Estás listo para lo mejor en diversión en los parques temáticos cercanos a Playa del Carmen? Descubre estos lugares y disfruta momentos inolvidables durante tus vacaciones. Haz un poco de todo, desde subirte a una tirolesa hasta nadar en un cenote o remar en una canoa por ríos subterráneos.',
                    'img'=>'family/playa-del-carmen-c.jpg',
                ],
                3=>[
                    'title'=>'Aviario Xaman Ha en Playacar',
                    'description'=>'El mundo de las aves se abre ante ti en el Aviario Xaman-Ha. Este hermoso lugar es un recordatorio de lo que la naturaleza sería si no hubiera sido afectada por la humanidad. El aviario es hogar de aves endémicas de la Península de Yucatán, que viven en completa armonía con el entorno.',
                    'img'=>'family/playa-del-carmen-d.jpg',
                ],
                4=>[
                    'title'=>'Cirque du Soleil',
                    'description'=>'Presentando JOYA, un fantástico show con más de 80 artistas en escena, el Circo del Sol no sólo ofrece impresionantes funciones y música que llegará a tu corazón para contarte una bella historia sobre la vida, sino que también te brindará un exquisito viaje culinario como complemento perfecto.',
                    'img'=>'family/playa-del-carmen-e.jpg',
                ],
                5=>[
                    'title'=>'Museo de maravillas en 3D',
                    'description'=>'¡Este museo interactivo se convertirá en uno de tus favoritos! Aquí podrás tocar, jugar y sacar fotografías que te harán ser un elemento fusionado en sus obras de arte. Comienza tu viaje en el mundo del arte y sé parte del escenario de increíbles fotografías que querrás compartir en tus redes sociales.',
                    'img'=>'family/playa-del-carmen-f.jpg',
                ], 
            ],

            'title_description_resorts'=>'Vive la alegría de unas vacaciones en familia en Playa del Carmen',
            'description_resorts'=>'Vive momentos inolvidables con tus seres queridos durante unas vacaciones familiares en Playa del Carmen, y descubre todo lo que puedes vivir con ellos en este excepcional destino frente al Mar Caribe. Para vivir una experiencia inolvidable en Playa del Carmen, hospédate en nuestro resort de playa y disfruta de hermosas habitaciones, impecables instalaciones, exclusivas amenidades y divertidas actividades.',

            'resorts' => [ # resorts de la zona
                0 => [ 'resort'=> 'resorts/the-royal-haciendas',],
            ]
        ], // fin arreglo de datos de Playa del Carmen     

        3 => [
            'title_tab' => 'Riviera Maya', # Titulo del tab de destino
            'idem'      => '2',
            'title' => 'Vacaciones Familiares en la Riviera Maya', # Titulo de la descripción
            'description' => '¡Los secretos de la Riviera Maya están esperando ser revelados a aquellos viajeros intrépidos! Vive increíbles aventuras en este mágico destino y en cualquiera de sus impresionantes parques temáticos –como Xcaret o Xel-Há-, nada y bucea en algún cenote o experimenta la adrenalina de una tirolesa. Termina tu día disfrutando un espectáculo de noche también. ¡Esto y más sólo con Royal Reservations!', # Descripción del destino

            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda
            'list'=>[
                0=>[
                    'title'=>'Museo de maravillas en 3D',
                    'description'=>'Sé el protagonista de cuadros de arte surrealista en el Museo 3D en Playa del Carmen. Este museo no tiene comparación, pues tú serás el personaje principal de las pinturas, y con una fotografía descubrirás la maravilla de la ilusión en tercera dimensión. ¡Llévate buenos recuerdos de regreso a casa!',
                    'img'=>'family/riviera-maya-a.jpg',
                ],
                1=>[
                    'title'=>'Parque Xcaret',
                    'description'=>'En el Parque Xcaret en la Riviera Maya, comenzarás a comprender la grandeza de México y de la civilización Maya. Ven y vive momentos inolvidables con una gran variedad de actividades y atracciones en este fabuloso lugar. Prueba deliciosos platillos mexicanos,  disfruta increíbles shows y camina a lo largo de la selva maya.',
                    'img'=>'family/riviera-maya-b.jpg',
                ],
                2=>[
                    'title'=>'Acuario natural de Xel-Há',
                    'description'=>'También conocido como el acuario natural más grande del mundo, por su riqueza de flora y fauna, Xel-Há es también un parque temático todo incluido que debes visitar en la Riviera Maya. Diviértete al nadar en el río, o al nadar con delfines o subiéndote a la torre panorámica con toboganes y más.',
                    'img'=>'family/riviera-maya-c.jpg',
                ],
                3=>[
                    'title'=>'Tirolesas',
                    'description'=>'Para tu lado aventurero, en la Riviera Maya visita los diferentes parques temáticos que cuentan con tirolesas para volar sobre la selva maya. Algunas de ellas son las más largas y otras las más altas, dependiendo de tu valor es tu elección. Una de las mejores opciones para esto es parque Xplor. ',
                    'img'=>'family/riviera-maya-d.jpg',
                ],
                4=>[
                    'title'=>'Cenotes',
                    'description'=>'Los cenotes son una obra de arte creada por la naturaleza hace millones de años. Están conectados por ríos subterráneos que los nutren con cristalinas aguas, hogar de pequeños y amigables peces. Son ideales para nadar y practicar snorkel, además que el agua siempre será fresca y restaurativa. ',
                    'img'=>'family/riviera-maya-e.jpg',
                ],
                5=>[
                    'title'=>'Cirque du Soleil',
                    'description'=>'De México para el mundo, Cirque du Soleil presenta JOYA, una de las más bellas obras de esta increíble compañía que ha llegado a la Riviera Maya para quedarse. Este show cuenta la historia de un alquimista y su nieta que tratan de descubrir los secretos de la vida. Un deleite para los sentidos.',
                    'img'=>'family/riviera-maya-f.jpg',
                ],
            ],

            'title_description_resorts'=>'Unas vacaciones familiares de lujo en la Riviera Maya',
            'description_resorts'=>'Vive unas vacaciones de lujo en familia en la Riviera Maya, un paraíso por descubrir. Lleva a tu familia a este paraíso de relajación y diversión frente a las azules aguas del Caribe Mexicano. Reserva tu estancia en nuestro resort de lujo en la playa que brinda amenidades y servicios de primera en la Riviera Maya, y explora las increíbles atracciones y maravillas naturales de este destino.',

            'resorts' => [ # resorts de la zona
                0 => [ 'resort'=> 'resorts/grand-residences-riviera-cancun',],              
            ]
        ], // fin arreglo de datos de RM 

        4 => [
            'title_tab' => 'Sint Maarten', # Titulo del tab de destino
            'idem'      => '5',
            'title' => 'Vacaciones Familiares en Sint Maarten', # Titulo de la descripción
            'description' => '¿Has viajado a la isla de St. Maarten? Déjanos darte algunas pistas de las cosas que puedes encontrar durante tus vacaciones en este paraíso caribeño. Descubre el maravilloso mundo de las mariposas, visita una granja tradicional y un fuerte que cuenta muchas batallas. Relájate en la playa o vive aventuras extremas con Royal Reservations que sorprenderán a toda la familia. ', # Descripción del destino

            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda
            'list'=>[
                0=>[
                    'title'=>'Granja de mariposas',
                    'description'=>'Esta es una hermosa actividad que puedes compartir con tu familia. Aprende sobre estos hermosos insectos en un interesante recorrido, sé testigo de la liberación de mariposas y recibe algunas semillas de algodón para atraer mariposas Monarca a tu jardín. ',
                    'img'=>'family/st-maarten-a.jpg',
                ],
                1=>[
                    'title'=>'Fuerte Louis',
                    'description'=>'Aprende más sobre la historia de St. Maarten en Fort Louis, una impresionante fortaleza con vistas a la Bahía Marigot, cuyo propósito era defender los almacenes de invasiones. Al haber sido testigo de muchas batallas, este fuerte te contará interesantes historias en sus muros y pasadizos.',
                    'img'=>'family/st-maarten-b.jpg',
                ],
                2=>[
                    'title'=>'Jet Extreme',
                    'description'=>'Jet Extreme en St. Maarten ofrece deportes acuáticos extremos como el hoverboard, jet ski y diferentes tipos de surf.  Llénate de adrenalina y deja que los profesionales te guíen en una increíble experiencia. También podrás disfrutar momentos de relajación y nadar en las aguas del Mar Caribe.',
                    'img'=>'family/st-maarten-c.jpg',
                ],
                3=>[
                    'title'=>'Granja Loterie',
                    'description'=>'Si te gustan las aventuras extremas y las actividades al aire libre, la Granja Loterie es el lugar ideal para ti. Vive una experiencia de ecoturismo, trepando, explorando e incluso subiéndote a las líneas de tirolesa. También disfruta una cena entre la naturaleza. En este paraíso tienes todo.',
                    'img'=>'family/st-maarten-d.jpg',
                ],
                4=>[
                    'title'=>'Playa Le Galion',
                    'description'=>'Ubicada en la parte francesa de St. Maarten, este hermoso lugar de playa conocido también como Coconut Grove o L’Embouchure, es ideal para familias con niños pequeños debido a sus aguas poco profundas. También si te encanta el kiteboard o el surf, te divertirás mucho en el mar de esta playa.',
                    'img'=>'family/st-maarten-e.jpg',
                ],                                                                
            ],

            'title_description_resorts'=>'Vacaciones familiares únicas en St. Maarten',
            'description_resorts'=>'¿Quieres visitar la isla de St. Maarten para unas vacaciones familiares? Reserva tu estancia en nuestro resort en la playa y frente a la Marina que ofrece increíbles amenidades. Vive momentos inolvidables en esta fabulosa isla del Caribe como el ver aterrizar a un avión a pocos metros de distancia de la playa, sino a muchas otras atracciones y actividades del destino.',

            'resorts' => [ # resorts de la zona
                0 => [ 'resort'=> 'resorts/the-villas-at-simpson-bay-resort',],
                1 => [ 'resort'=> 'resorts/simpson-bay-resort',],
            ]
        ], // fin arreglo de datos de Sint Maarten

        5 => [
            'title_tab' => 'Curacao', # Titulo del tab de destino
            'idem'      => '6',
            'title' => 'Vacaciones Familiares en Curacao', # Titulo de la descripción
            'description' => '¡Graba en tu memoria inolvidables experiencias vacacionales en Curacao con tus seres queridos! Durante tu visita a este destino no sólo descansarás por horas en la playa sino que podrás recorrer las increíbles calles de Willemstad, o vivir muchas actividades para niños y adultos. Descubre las avestruces de Curacao y la inmensidad de la vida marina con Royal Reservations. ', # Descripción del destino

            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda
            'list'=>[
                0=>[
                    'title'=>'Acuario',
                    'description'=>'Visita el Sea Aquarium Curacao, un paraíso único que recrea las condiciones naturales y hábitat de las criaturas marinas para que vivan de la misma manera que viven en la naturaleza. Combina un sistema de aguas abiertas con luz solar, lo que asegura el bienestar y felicidad de todas las especies. ',
                    'img'=>'family/curacao-a.jpg',
                ],
                1=>[
                    'title'=>'Paseo en Choo-Choo',
                    'description'=>'Si quieres hacer a tus hijos realmente felices, llévalos a un paseo en el trenecito de Curacao. Conozcan los alrededores de la ciudad Willemstad y sus históricos lugares. También visita Fort Amsterdam, el mercado donde encontrarás pescado fresco y vegetales, y los edificios pintorescos de Scharloo. ',
                    'img'=>'family/curacao-b.jpg',
                ],
                2=>[
                    'title'=>'Alimenta a las avestruces',
                    'description'=>'¡Sí, hay avestruces en Curacao! Esto será una gran sorpresa para tus hijos, porque seguro nunca han visto un “pájaro” tan grande. Y cuando vean lo grande de los huevos de avestruz, se sorprenderán aún más.  Aprendan más sobre esta interesante especie y los esfuerzos de conservación que se realizan.',
                    'img'=>'family/curacao-c.jpg',
                ],
                3=>[
                    'title'=>'Playa Mambo y Tour a las cuevas antiguas',
                    'description'=>'Esta hermosa playa de arena blanca es una de las mejores atracciones en la isla de Curacao. El lugar ofrece diversos bares, restaurantes y pequeñas tiendas. Además, combina lo mejor del paraíso tropical con el increíble ambiente del Caribe lleno de música y buena comida. ',
                    'img'=>'family/curacao-d.jpg',
                ],
                
            ],

            'title_description_resorts'=>'Vacaciones familiares inolvidables en Curacao',
            'description_resorts'=>'Durante tus próximas vacaciones en la isla de Curacao, tendrás la oportunidad de disfrutar de las mejores playas del Caribe, así como actividades de agua o terrestres con las que se divertirán todos los miembros de tu familia. Y para hacer esta experiencia aún mejor, reserva tu hospedaje con Royal Reservations para disfrutar un tiempo de relajación con excelentes amenidades, servicios e instalaciones impecables.',

            'resorts' => [ # resorts de la zona
                0 => [ 'resort'=> 'resorts/the-royal-sea-aquarium',],
            ]
        ], // fin arreglo de datos de Curacao      



    ],
];