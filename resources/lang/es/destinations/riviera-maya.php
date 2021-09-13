<?php

return [
    'seo'=>[
        'title'=>'¿Qué hacer en la Riviera Maya? | Royal Reservations',
        'metadescription'=>'La Riviera Maya tiene todo en un solo lugar, sitios arqueológicos, tiendas para compras, los mejores hoteles de lujo, playas familiares y mucho más. ¡Reserva ahora tus próximas vacaciones!',
    ],
    'title' => 'Riviera Maya', # Titulo del destino
    'title_sec' => 'Cosas que hacer en Riviera Maya', # Titulo del destino
    'slug' => lang_url("/es/destinos-de-playa/riviera-maya/que-hacer-en-riviera-maya"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">&iexcl;Un para&iacute;so en el Caribe Mexicano te est&aacute; esperando! La Riviera Maya ser&aacute; tu destino vacacional favorito, ya que aqu&iacute; encontrar&aacute;s el descanso, la diversi&oacute;n y la relajaci&oacute;n que buscas para tus vacaciones familiares. Experimenta la armon&iacute;a de este lugar en el que bellezas naturales como playas de arena blanca y cenotes, as&iacute; como una variada oferta de entretenimiento con parques tem&aacute;ticos y tours de ecoturismo, ser&aacute;n parte de tus aventuras diarias.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">La riqueza de la Riviera Maya se vive mejor en Grand Residences Riviera Cancun, un lujoso resort frente al mar, situado en el coraz&oacute;n de este incre&iacute;ble destino en el Caribe Mexicano. Experimenta la relajaci&oacute;n de tu suite o villa de lujo en plan Todo Incluido, S&oacute;lo Hospedaje u Hospedaje con Desayunos incluidos y disfruta de las mejores amenidades y un excelente servicio, en las magn&iacute;ficas instalaciones de este resort de lujo en la Riviera Maya. Reserva tu deleitante estancia en Grand Residences con Royal Reservations y obt&eacute;n fant&aacute;sticas ofertas vacacionales y otros grandiosos beneficios.</p>', # Descripción del destino
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Riviera Maya',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'La Riviera Maya te presenta sus idílicas playas y vegetación fastuosa, acompañadas por su cultura y actividades increíbles.',
    # Contenido de la pagina del destino
    'content' => '<p>La Riviera Maya, es un lugar m&aacute;gico que goza de un clima c&aacute;lido, un hermoso mar turquesa y playas de arena blanca como Xpu-Ha, Kantenah y Paamul. Se ha convertido en uno de los destinos favoritos para visitantes de todo el mundo gracias a sus bellezas naturales como los Cenotes Chac Mool, Dos Ojos y Jard&iacute;n del Ed&eacute;n, por mencionar algunos.</p>
    <p>Si eres amante de las compras, probablemente te encante La Quinta Avenida en Playa del Carmen, donde encontrar&aacute;s diversas boutiques y plazas comerciales con todo tipo de art&iacute;culos libres de impuestos e incluso artesan&iacute;as t&iacute;picas de la regi&oacute;n. Si est&aacute;s buscando m&aacute;s aventura y lugares interesantes por conocer, te recomendamos los parques como Xcaret o Xplor, y no olvidemos el show de Cirque du Soleil.</p>
    <p>Tambi&eacute;n, no olvides visitar los sitios arqueol&oacute;gicos que se encuentran a lo largo de toda la Riviera Maya como Cobá y Muyil en Tulum.</p>
    <p>&iexcl;Vive la inolvidable experiencia Royal Reservations en la Riviera Maya!</p>',
    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-riviera-maya-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-riviera-maya.jpg':'img/beach-destination-riviera-maya.jpg'),
    'about' => [
        'self' => 'Acerca de Riviera Maya',
        'uselful' => [
            'money' => 'Pesos Mexicanos - Dólares americanos',
            'language' => 'Español - Inglés',
            'weather' => 'Soleado - Cálido',
            'power_socket' => '110 V - Tipo de enchufe A/B',
            'cell-phone-service' => 'Servicios de telefonía AT&T, Telcel, Movistar & Virgin'
        ]
    ],
    'things_to_do' => [
        0 => [
            'title' => 'Playas',
            'descriptions' => 'La Riviera, presume cientos de kilómetros de extensiones de arena blanca y muchas playas que aún están lejos de la mano del hombre y se mantienen vírgenes y hermosas. También alberga otras, que son consideradas las más visitadas y las bellas del mundo. Serás testigo del increíble ambiente caribeño, así como de la maravillosa sensación de tranquilidad y paz que ofrece el paraíso mientras disfrutas momentos bajo la sombra de una palmera en la playa Kantenah con sus idílicos paisajes; en Paamul donde podrás vivir una increíble aventura bajo el mar detrás de una máscara de snorkel; o en la playa de Xpu-ha donde encontrarás una hermosa caleta, también para relajarte.',
            'image' => "things-to-do-in-riviera-maya-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],
        1 => [
            'title' => 'Cenotes',
            'descriptions' => 'Entre la gran variedad de atracciones y bellezas naturales en la Riviera Maya,  se encuentran los Cenotes que pueden estar al aire libre o bajo tierra, y que en ambos casos, invitan a todo viajero a sumergirse en sus frescas aguas cristalinas.  Una vez que entras a estos lugares únicos, notarás las razones por las que los antiguos mayas los consideraban sagrados.  Cenotes como el de Chac Mool, son increíbles para bucear; Dos Ojos y sus más de 67 kilómetros de ríos subterráneos son el escenario perfecto para todo aventurero; y Jardín del Edén, sin duda es uno de los más bellos y divertidos. Elige entre todas las opciones disponibles en la Riviera Maya, pero no te quedes sin conocer al menos uno de ellos. Por favor utiliza protector solar biodegradable para proteger la flora y fauna en su hábitat natural.',
            'image' => "things-to-do-in-riviera-maya-b.jpg",
            'icon' =>  asset("img/icon-cenotes.png")
        ],
        2 => [
            'title' => 'Tiendas',
            'descriptions' => 'Sí, las playas, el sol y el legendario Mar Caribe son de lo mejor en la Riviera Maya, pero quizá quieras también conocer sus tiendas y vivir una gran experiencia de “compras” en una zona libre de impuestos.  Prepárate para explorar la diversa y multifacética Quinta Avenida en Playa del Carmen, una amplia y larga calle cerrada con tiendas de marca, pequeñas boutiques y un increíble centro comercial llamado Calle Corazón, donde encontrarás todo lo que te puedas imaginar a un excelente precio. No nos olvidemos de las artesanías, tiendas de souvenirs y demás; siempre útiles para encontrar curiosidades a excelentes precios.  ¡Disfruta un día de compras en la Riviera Maya!',
            'image' => "things-to-do-in-riviera-maya-c.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],
        3 => [
            'title' => 'Atracciones',
            'descriptions' => 'Si hay algo que no te puedes perder durante tus vacaciones en la Riviera Maya, es ir a las principales atracciones de este increíble destino del Caribe. Permítenos darte algunas ideas para que tengas al menos un punto de partida. Primero, te recomendamos ir a los parques temáticos como Parque Xcaret que ofrece horas interminables de bellezas naturales donde puedes nadar, practicar snorkel o contemplar, así como el mejor show de la zona “México Espectacular”, y por supuesto, Xplor y su versión de noche “Fuego”. Por si eso no fuera suficiente, te recomendamos el reconocido show a nivel mundial del Cirque du Soleil en Vidanta.',
            'image' => "things-to-do-in-riviera-maya-d.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],
        4 => [
            'title' => 'Sitios Arqueológicos',
            'descriptions' => '¿Te gustarían más actividades culturales en la Riviera Maya? Durante tus vacaciones en el Caribe Mexicano, podrás experimentar un poco de todo, y algo que en definitiva, no te puedes perder, son los muchos sitios arqueológicos  que alberga la selva maya. En ellos podrás aprender más sobre la antigua civilización que ha intrigado tanto al mundo, con sus monumentales estructuras arqueológicas en lugares como Cobá y en el área de Nohoch Mul y Macanxoc; y en Muyil, un pequeño pero bello sitio que es parte de la Reserva de la Biósfera de Sian Ka’an en Tulum. Descubre la historia y los secretos de estos legendarios asentamientos de la cultura maya.',
            'image' => "things-to-do-in-riviera-maya-e.jpg",
            'icon' =>  asset("img/icon-archaelogical-site.png")
        ],
        5 => [
            'title' => 'Lugares de Interés',
            'descriptions' => 'La Riviera Maya es un lugar donde siempre tendrás algo entretenido qué hacer. Ya sea que te dirijas al norte o al sur, siempre habrá un lugar o actividad que complemente tu día, y para muestra… basta un botón, con la bahía de Akumal, por ejemplo, ya que es un lugar donde puedes practicar snorkel y quizá hasta te hagan compañía una o dos tortugas. Otros lugares imperdibles son los cenotes que encontrarás a lo largo de toda la franja de la Riviera Maya. Entre nuestros favoritos se encuentran el Gran Cenote, Ik Kil, Cenote Azul y Cenote Dos Ojos.',
            'image' => "things-to-do-in-riviera-maya-f.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ]
    ],
    'food' => [
        'title' => 'Experiencia Culinaria en la Riviera Maya',
        'description' => 'Te espera una deliciosa experiencia culinaria en la Riviera Maya, al probar un poco de la gastronomía que se ofrece en el área del Caribe Mexicano y la Península de Yucatán. Pero la cocina no se limita a esa opción, sino que ofrece mucho más: platillos internacionales, franceses, orientales, etc. No hay excusa para que no pruebes algo nuevo todos los días. Descubre los secretos y la historia de los típicos platillos de México con sus ricos sabores.',
        'image' => "riviera-maya-regional-food.jpg",
    ],
    'resorts' => [
        #'title' => 'Resorts en la Riviera Maya',
        #'description' => 'Rodeado de frondosa vegetación, nuestro resort de lujo, ha sido galardonado con diversos premios que lo coloca en el favorito del área con impecables servicios y amenidades. El hotel, decorará tus días con lo mejor del primer mundo en un ambiente totalmente exclusivo enclavado en paisajes paradisiacos. Un lugar creado para tu deleite y máxima relajación frente al bellísimo Mar Caribe.',
        0 => [
            'slug'=>'grand-residences-riviera-cancun',
            'name'=>'Grand Residences',
            'url' =>'/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'img'=> asset('img/resorts/grand-residences-riviera-cancun/grand-residences-riviera-cancun-c.jpg'),
            //Resorts por destino
            'title'=>'Grand Residences Riviera Cancun',
            'description'=>'Grand Residences Riviera Cancun, se encuentra en el corazón de la Riviera Maya, y es la corona de nuestra familia ofreciendo servicios y hospitalidad de primera en un oasis exclusivo. Recientemente fue nombrado el resort #2 en el Top 25 de los Hoteles más Lujosos de México por TripAdvisor.',
            'stars'=>'5',            
        ],
        1 => [
            'slug'=>'the-royal-haciendas',
            'name'=>'The Royal Haciendas',
            'url' =>'/es/hoteles-de-playa/the-royal-haciendas',
            'img'=> asset('img/resorts/the-royal-haciendas/the-royal-haciendas-c.jpg'),
            //Resorts por destino
            'title'=>'The Royal Haciendas',
            'description'=>'Viva la elegancia del México Antiguo en The Royal Haciendas y consiéntase en el paraíso de Playa del Carmen. Relájese en las espaciosas villas totalmente equipadas con la sofisticación y servicios propios de un resort cinco estrellas estilo hacienda mexicana.',
            'stars'=>'5',            
        ],
    ],
    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
        2 => __('specials/special-3'),
        3 => __('specials/special-4'),
    ],
    'url_offers'=>lang_url("/es/destinos-de-playa/riviera-maya/ofertas-de-hoteles-en-riviera-maya"),
    'url_resorts'=>lang_url("/es/destinos-de-playa/riviera-maya/los-mejores-hoteles-de-playa-en-riviera-maya"),
];