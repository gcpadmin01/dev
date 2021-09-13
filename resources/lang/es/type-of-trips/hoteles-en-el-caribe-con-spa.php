<?php


return [
    'seo'=>[
        'title'=>'Hoteles de Playa con Spa en el Caribe | Royal Reservations',
        'metadescription'=>'',
    ], 

    'title' => 'Hoteles Con Spa En El Caribe', # Titulo de la sección y la pagina

    'subtitle' => 'Experiencias Relajantes Únicas Con Royal Reservations', # Sub - Titulo de la sección y la pagina

    # Contenido de la pagina

    'content' => '
        <p>Deja el mundo atr&aacute;s y vive una experiencia de bienestar inigualable en nuestros destinos de spa en el <strong>Caribe Mexicano</strong> y <strong>las Islas del Caribe</strong>. Olvida el estr&eacute;s en un viaje de bienestar que te llevar&aacute; a para&iacute;sos de playa como <strong>Canc&uacute;n</strong>, <strong>Playa del Carmen</strong> y la <strong>Riviera Maya</strong>, donde tu esp&iacute;ritu y tu cuerpo recibir&aacute;n tratamientos renovadores y vivificantes que te relajar&aacute;n al m&aacute;ximo.</p>
        <p>Tambi&eacute;n disfruta de los indulgentes masajes y tratamientos corporales que recibir&aacute;s en nuestros resorts de <strong>Curacao</strong>, <strong>St. Maarten</strong> y <strong>Punta Cana</strong>, y d&eacute;jate consentir en lo que ser&aacute; uno de los viajes m&aacute;s restauradores en estos hermosos refugios frente al mar.</p>
        <p><strong>Royal Reservations</strong>, los expertos en vacaciones de bienestar y relajaci&oacute;n a destinos de spa, te llevar&aacute;n a vivir una experiencia que revitalizar&aacute; tu mente y tu alma.</p>
    ',
    'content_mobile' => '
        <p><strong>Royal Reservations</strong>, los expertos en vacaciones de bienestar y relajaci&oacute;n a destinos de spa, te llevar&aacute;n a vivir una experiencia que revitalizar&aacute; tu mente y tu alma.</p>
    ',    

    'destinations' => [

        0 => [

            'title_tab' => 'Cancun', # Titulo del tab de destino
            'idem'      => '1',
            'title' => 'Spa y relajación en Cancún', # Titulo de la descripción

            'description' => 'Tu cuerpo y tu alma estarán agradecidos por estar en Cancún. Ponte cómodo mientras te consentimos con un relajante masaje de spa o tratamiento frente al mar. Mantente en forma en el fitness center durante tu vacaciones y después relájate en el salón de belleza mientras te hacemos un corte o pedicure. Y si quieres un tiempo para meditar, te recomendamos un baño temazcal o una sesión de yoga. ', # Descripción del destino



            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda

            'list'=>[

                0=>[

                    'title'=>'Yoga en la Playa',

                    'description'=>'¡Mantente en forma frente a las azules aguas de Cancún practicando yoga en la playa! Durante esta actividad, trabajarás cada músculo de tu cuerpo mientras pones tu mente en un estado paz con la ayuda de la ambientación natural y serena que te rodea en cada movimiento al sonido de las olas.',

                    'img'=>'wellbeing/cancun-a.jpg',

                ],

                1=>[

                    'title'=>'Spa',

                    'description'=>'Vive una experiencia de lujo en el spa con los tratamientos de relajación y bienestar disponibles en el resort. Ya sea que quieras relajarte, o necesites un tejido profundo, un sueco o un deportivo, un envolvente o un facial, todo te renovará. Descansa con nuestros servicios de primera.',

                    'img'=>'wellbeing/cancun-b.jpg',

                ],

                2=>[

                    'title'=>'Gimnasio',

                    'description'=>'¿Quieres estar en forma durante tus vacaciones en Cancún? Visita el gimnasio del resort y disfruta el equipo de última generación tanto en máquinas cardiovasculares como en pesas. Pide al instructor que te brinde una rutina personalizada. ',

                    'img'=>'wellbeing/cancun-c.jpg',

                ],

                3=>[

                    'title'=>'Temazcal',

                    'description'=>'Vive la experiencia de bienestar de un delicioso baño de temazcal. Recibe un tratamiento terapéutico que se basa en hierbas naturales y deja que el vapor sanador del temazcal revitalice tu cuerpo y alma. Relájate y siente los beneficios de la medicina ancestral de México. ',

                    'img'=>'wellbeing/cancun-d.jpg',

                ],

                4=>[

                    'title'=>'Salón de belleza',

                    'description'=>'Prepárate para un tratamiento embellecedor en nuestro salón. Si vas a salir a una cena romántica o a algún bar o discoteca con tus amigos, o simplemente quieres hacerte un pedicure o manicure, visita el salón de belleza en el resort en Cancún. Después de eso… ¡Sólo brillarás! ',

                    'img'=>'wellbeing/cancun-e.jpg',

                ],                                                                

            ],



            'title_description_resorts'=>'Vive una experiencia de relajación en Cancún',

            'description_resorts'=>'Escapa del estrés de la rutina y de la vida diaria y conoce un mundo de relajación y bienestar a través de experiencias en SPA en Cancún.  Recibe un relajante masaje y un delicado tratamiento facial y un envolvente y después dirígete a tu increíble villa con exclusivas amenidades y servicios. Reserva con nosotros en Royal Reservations y disfruta en cualquiera de nuestros resorts de playa de Cancún.  ',



            'resorts' => [ # resorts de la zona
                [ 'resort'=> 'resorts/the-royal-sands',],
                [ 'resort'=> 'resorts/the-royal-islander', ],
                [ 'resort'=> 'resorts/the-royal-cancun',],

            ],

        ], // fin de arreglo 0 para Cancun



        1 => [

            'title_tab' => 'Playa del Carmen', # Titulo del tab de destino
            'idem'      => '3',
            'title' => 'Spa y relajación en Playa del Carmen', # Titulo de la descripción

            'description' => 'En Playa del Carmen siempre tendrás un momento de relajación ya sea junto a la playa o en alguna experiencia de bienestar en el spa al estilo Royal Reservations. Visita nuestro exclusivo spa y recibe el tratamiento de tu elección, practica yoga frente al Mar Caribe, desintoxica tu cuerpo y mente en un baño de temazcal o haz tu rutina de ejercicios para mantenerte en forma.  ', # Descripción del destino



            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda

            'list'=>[

                0=>[

                    'title'=>'Spa',

                    'description'=>'Descansa un poco del sol y la alberca, deja a los niños jugando de manera segura en el Kids Club y disfruta una experiencia de bienestar en el spa con tratamientos relajantes como faciales, envolventes o masajes de todo tipo, desde el sueco, hasta Lomi Lomi, Shiatsu, tailandés o con aromaterapia.',

                    'img'=>'wellbeing/playa-del-carmen-a.jpg',

                ],

                1=>[

                    'title'=>'Yoga',

                    'description'=>'Encuentra tu paz interna con una sesión de yoga frente al Mar Caribe o revisa el programa de actividades y únete a nuestra clase de yoga para aprender algunos movimientos y estiramientos. Vive esta gratificante experiencia y limpia tu energía con la belleza del mar mientras estás en Playa del Carmen. ',

                    'img'=>'wellbeing/playa-del-carmen-b.jpg',

                ],

                2=>[

                    'title'=>'Temazcal',

                    'description'=>'Disfruta los beneficios de esta ancestral práctica medicinal. Date la oportunidad de sumergirte en la poderosa sanación de un baño de temazcal. Tu cuerpo y tu mente alcanzarán se renovarán a través del vapor terapéutico de las hierbas que sale del corazón de la estructura del temazcal.  ',

                    'img'=>'wellbeing/playa-del-carmen-c.jpg',

                ],

                3=>[

                    'title'=>'Gimnasio',

                    'description'=>'Sabemos que mantenerte en forma y continuar con tu rutina de ejercicio –incluso durante las vacaciones- es muy importante para ti. Es por ello que en el resort encontrarás un gimnasio totalmente equipado con máquinas cardiovasculares y pesas. Además contamos con la asesoría de un entrenador personal.',

                    'img'=>'wellbeing/playa-del-carmen-d.jpg',

                ],

                4=>[

                    'title'=>'Salón de belleza',

                    'description'=>'Para que tu belleza interior esté en sinergia con tu exterior, hemos preparado una experiencia de bienestar como ninguna otra. Recibe la atención que tu cuerpo y mente necesitan con nuestros tratamientos de manicure, pedicure o hazte un nuevo corte de cabello para que seas la sensación de la noche. ',

                    'img'=>'wellbeing/playa-del-carmen-e.jpg',

                ],                                                                

            ],



            'title_description_resorts'=>'Descubre tu refugio de paz y tranquilidad en Playa del Carmen ',

            'description_resorts'=>'Escápate a un lugar donde lo único importante será tu relajación y bienestar durante tus vacaciones en Playa del Carmen.  Deja tus preocupaciones atrás y concéntrate en disfrutar tu estancia en nuestro resort de playa en este hermoso destino. Disfruta las mejores vistas y un hospedaje de lujo en tu remanso privado de paz con los mejores servicios.',



            'resorts' => [ # resorts de la zona

                0 => [ 'resort'=> 'resorts/the-royal-haciendas',],

            ]

        ], // fin arreglo de datos de RM





        2 => [

            'title_tab' => 'Riviera Maya', # Titulo del tab de destino
            'idem'      => '2',
            'title' => 'Spa y relajación en la Riviera Maya', # Titulo de la descripción

            'description' => 'Vive la perfecta experiencia de bienestar en nuestro spa en la Riviera Maya con Royal Reservations y todos los increíbles tratamientos y masajes con los que contamos. También podrás disfrutar un delicioso baño de temazcal con hierbas medicinales. Procura tu belleza en nuestro salón de belleza y haz ejercicio en el fitness center con nuestro equipo de pesas y aparatos cardiovasculares.', # Descripción del destino



            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda

            'list'=>[

                0=>[

                    'title'=>'Spa',

                    'description'=>'En este lugar de exquisitos tratamientos de spa y masajes descubrirás un estado de relajación y paz como nunca antes. Vive la experiencia de tratarte en un spa de lujo en el que te olvidarás del mundo exterior y te concentrarás en tu propia revitalización y satisfacción.  ',

                    'img'=>'wellbeing/riviera-maya-a.jpg',

                ],

                1=>[

                    'title'=>'Temazcal',

                    'description'=>'En este lugar de exquisitos tratamientos de spa y masajes descubrirás un estado de relajación y paz como nunca antes. Vive la experiencia de tratarte en un spa de lujo en el que te olvidarás del mundo exterior y te concentrarás en tu propia revitalización y satisfacción.  ',

                    'img'=>'wellbeing/riviera-maya-b.jpg',

                ],

                2=>[

                    'title'=>'Yoga',

                    'description'=>'Deja que tu espíritu se nutra de la belleza del Caribe y libera todo el estrés y preocupaciones de tu vida diaria. Disfruta una sesión de yoga frente al mar y llénate de paz. Si es la primera vez que practicas esta actividad, entonces con mayor razón, será una experiencia iluminadora para ti. ',

                    'img'=>'wellbeing/riviera-maya-c.jpg',

                ],

                3=>[

                    'title'=>'Salón de belleza',

                    'description'=>'Sabemos lo importante que es para ti sentirte bien y bella. Por ello, durante tus vacaciones en la Riviera Maya, nos aseguramos de que recibas sólo los mejores tratamientos de belleza y bienestar, ya sea que quieras sólo un manicure o hacerte un cambio completo.',

                    'img'=>'wellbeing/riviera-maya-d.jpg',

                ],

                4=>[

                    'title'=>'Gimnasio',

                    'description'=>'Todo lo que necesitas para continuar con la energía de tu rutina de ejercicio se encuentra dentro del Fitness Center y su equipo de última generación. Esto te permitirá mantenerte en forma durante tus vacaciones en la Riviera Maya. Busca al entrenador para rutinas personalizadas o preguntas.  ',

                    'img'=>'wellbeing/riviera-maya-e.jpg',

                ],                                                                

            ],



            'title_description_resorts'=>'La Riviera Maya, un hermoso espacio para relajarte',

            'description_resorts'=>'¿Estás listo para disfrutar un ritual de temazcal, sesiones relajantes de yoga y otras increíbles actividades especialmente pensadas para tu bienestar y renovación? Experimenta esto y más en tus vacaciones relajantes en la Riviera Maya, pero también prepárate para un momento de comodidad y lujo en tu habitación, además de disfrutar de amenidades de primera y servicios que sólo encontrarás con Royal Reservations en este destino de playa.',



            'resorts' => [ # resorts de la zona

                0 => [ 'resort'=> 'resorts/grand-residences-riviera-cancun',],

            ]

        ], // fin arreglo de datos de Playa del Carmen     



        3 => [

            'title_tab' => 'Puerto Morelos', # Titulo del tab de destino
            'idem'      => '4',
            'title' => 'Spa y relajación en Puerto Morelos', # Titulo de la descripción

            'description' => 'Siempre es buen momento para cultivar tu espíritu y mente. Puerto Morelos te dará el ambiente relajante que necesitas para una espléndida experiencia de spa. Disfruta una sesión de yoga al inicio de tu día, o ve al gimnasio para tu rutina de ejercicio, y después visita el spa para que te brindemos un tratamiento o masaje. Termina el día en el salón de belleza.', # Descripción del destino



            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda

            'list'=>[

                0=>[

                    'title'=>'Yoga',

                    'description'=>'El Yoga es una increíble actividad para comenzar tu día con el pie derecho al amanecer. Dale a tu mente y a tu cuerpo los beneficios de practicar esta experiencia enriquecedora frente al hermoso Mar Caribe. Practica por tu cuenta o únete a las actividades del resort para seguir a los instructores.',

                    'img'=>'wellbeing/puerto-morelos-a.jpg',

                ],

                1=>[

                    'title'=>'Temazcal',

                    'description'=>'Experimenta una faceta interesante de la medicina ancestral de las antiguas civilizaciones de México en un baño de temazcal. Obtén los beneficios del vapor de las hierbas medicinales y relájate. Vive momentos de paz y restauración para tu cuerpo y mente durante tus vacaciones en Puerto Morelos.',

                    'img'=>'wellbeing/puerto-morelos-b.jpg',

                ],

                2=>[

                    'title'=>'Spa',

                    'description'=>'Regálate un descanso del sol caribeño y disfruta momentos en la luz tenue del spa mientras recibes tratamientos relajantes como faciales, envolventes o un masaje que puede ser desde sueco hasta con pindas swedas y otros más especializados. Encuentra el equilibrio durante tus vacaciones en Puerto Morelos.',

                    'img'=>'wellbeing/puerto-morelos-c.jpg',

                ],

                3=>[

                    'title'=>'Gimnasio',

                    'description'=>'Si mantenerte en forma es importante para ti mientras estás de vacaciones, visita el gimnasio con equipo de última generación disponible en el resort. Mantén tu rutina y disfruta la experiencia. Puedes pedir también al entrenador que te ponga una secuencia de ejercicios de acuerdo a tus necesidades.',

                    'img'=>'wellbeing/puerto-morelos-d.jpg',

                ],

                4=>[

                    'title'=>'Salón de belleza',

                    'description'=>'Quizá has considerado que llegó el momento para un cambio de “look” o sólo quieres hacerte un pedicure durante tus vacaciones en Puerto Morelos. Visita el salón de belleza y elige algún tratamiento para que puedas lucir increíble durante una noche romántica o de fiesta. ',

                    'img'=>'wellbeing/puerto-morelos-e.jpg',

                ],                                                                

            ],



            'title_description_resorts'=>'Puerto Morelos, una experiencia original de bienestar y relajación',

            'description_resorts'=>'Además de los momentos de relajación que puedas vivir en la playa frente a las aguas turquesas del pueblo pesquero de Puerto Morelos, te invitamos  a descubrir la mejor experiencia de relajación en nuestro resort de lujo. Además disfruta amenidades de primera, hospedaje de lujo e increíbles actividades. ¡Reserva tu estancia de lujo con Royal Reservations!',



            'resorts' => [ # resorts de la zona

                0 => [ 'resort'=> 'resorts/grand-residences-riviera-cancun',],              

            ]

        ], // fin arreglo de datos de RM 



        4 => [

            'title_tab' => 'Sint Maarten', # Titulo del tab de destino
            'idem'      => '5',
            'title' => 'Spa y relajación en Sint Maarten', # Titulo de la descripción

            'description' => 'Vive el paraíso de diferente manera con unas vacaciones de relajación y bienestar en St. Maarten. Empieza bien el día con una sesión de yoga en la playa y deja que el mar se lleve todas tus preocupaciones, después dirígete al fitness center para hacer ejercicio. Y si planeas salir en la noche, visita el spa para un tratamiento relajante o ve por un peinado o maquillaje al salón de belleza.  ', # Descripción del destino



            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda

            'list'=>[

                0=>[

                    'title'=>'Yoga en la playa',

                    'description'=>'St. Maarten y sus hermosas playas te darán la bienvenida a una experiencia de bienestar en la que tú y tus acompañantes descubrirán los beneficios de practicar yoga en la playa. Disfruta la vista mientras te relajas y deja que tu mente se relaje frente a las aguas azules del mar.  ',

                    'img'=>'wellbeing/st-maarten-a.jpg',

                ],

                1=>[

                    'title'=>'Salón de belleza',

                    'description'=>'La belleza es la combinación de tu interior y de tu exterior. Ahora que estás aquí, vive la experiencia de un estado de tranquilidad combinado con un nuevo corte de cabello, un buen maquillaje y manicure, y ¡queda lista para disfrutar una increíble noche de baile o cena durante tus vacaciones!  ',

                    'img'=>'wellbeing/st-maarten-b.jpg',

                ],

                2=>[

                    'title'=>'Spa',

                    'description'=>'La experiencia de relajación y bienestar durante tus vacaciones en St. Maarten no tendrá comparación. Disfruta ese tan anhelado envolvente de cuerpo o facial, y déjate consentir por las manos profesionales de nuestros terapeutas. Revitaliza tu cuerpo y mente con los tratamientos de spa.  ',

                    'img'=>'wellbeing/st-maarten-c.jpg',

                ],

                3=>[

                    'title'=>'Gimnasio',

                    'description'=>'¡Aprovecha el acceso al Fitness Center para realizar tu rutina de ejercicio incluso durante tus vacaciones en St. Maarten! No pierdas condición y utiliza los equipos cardiovasculares y de pesas disponibles en el resort donde te hospedas. ',

                    'img'=>'wellbeing/st-maarten-d.jpg',

                ],

                                                                                

            ],



            'title_description_resorts'=>'St. Maarten, un paraíso para disfrutar un tratamiento de spa',

            'description_resorts'=>'En St. Maarten, una pequeña pero bonita isla del Caribe, tendrás todo lo que necesitas para llegar a un estado de absoluta relajación con los tratamientos de spa que ofrece este bello destino. Al final del día, cerca del mar, descansa en tu habitación con exclusivas amenidades y servicios o ve al spa para recibir un tratamiento que renueve tu energía.',



            'resorts' => [ # resorts de la zona

                0 => [ 'resort'=> 'resorts/the-villas-at-simpson-bay-resort',],

                1 => [ 'resort'=> 'resorts/simpson-bay-resort',],

            ]

        ], // fin arreglo de datos de Sint Maarten



        5 => [

            'title_tab' => 'Curacao', # Titulo del tab de destino
            'idem'      => '6',
            'title' => 'Spa y relajación en Curacao', # Titulo de la descripción

            'description' => 'Tendrás un máximo estado de bienestar y relajación en nuestras instalaciones de spa en Curacao durante tus vacaciones con Royal Reservations. Después de una buena caminata en la playa y todas las aventuras que vas a vivir, puedes hacer ejercicio en el gimnasio o dejarte consentir con un tratamiento de spa. Y si deseas realizar algunos estiramientos, ve a disfrutar de una clase de yoga.  ', # Descripción del destino



            'title_list' => 'Actividades recomendadas', # Titulo lista izquierda

            'list'=>[

                0=>[

                    'title'=>'Yoga',

                    'description'=>'Vive una nueva forma de hacer yoga mientras estás de vacaciones en la increíble isla de Curacao. Disfruta del AquaChi Yoga, un ejercicio de bajo impacto con diferentes asanas que lograrán incrementar tu equilibrio, fuerza y tranquilidad. O si lo prefieres, también puedes hacer yoga por tu cuenta.',

                    'img'=>'wellbeing/curacao-a.jpg',

                ],

                1=>[

                    'title'=>'Gimnasio',

                    'description'=>'Será fácil mantenerte en forma durante tus vacaciones en Curacao, pues el resort cuenta con un moderno gimnasio con excelente equipo de última generación con máquinas tanto cardiovasculares como de pesas. Ejercítate a tu propio ritmo y con la rutina que prefieras.',

                    'img'=>'wellbeing/curacao-b.jpg',

                ],

                2=>[

                    'title'=>'Spa',

                    'description'=>'¿Estás listo para una sublime experiencia de Spa durante tus vacaciones en Curacao? La relajación y tranquilidad que buscas se harán una realidad en el spa de tu resort con todas las deliciosas opciones de tratamientos especiales. Déjate consentir con ese masaje que tanto necesitas y sólo relájate.',

                    'img'=>'wellbeing/curacao-c.jpg',

                ],
            ],

            'title_description_resorts'=>'Un paraíso de bienestar en Curacao',

            'description_resorts'=>'¿Listo para una experiencia de spa sin igual en Curacao? En esta isla Caribeña, tus sueños se cumplirán frente al mar y quizá bajo las estrellas. Disfruta las cosas simples de la vida en la comodidad de tu habitación que puedes reservar con Royal Reservations. Además, te brindamos fantásticas amenidades, excelentes servicios y maravillosas vistas de la Marina y del mar.',
            'resorts' => [ # resorts de la zona
                0 => [ 'resort'=> 'resorts/the-royal-sea-aquarium',],
            ]

        ], // fin arreglo de datos de Curacao      



    ],

];