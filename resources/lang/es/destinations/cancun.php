<?php

return [
    'seo'=>[
        'title'=>'¿Qué hacer en Cancún en Vacaciones? | Royal Reservations',
        'metadescription'=>'Cancún es uno de los mejores destinos del mundo. Por sus playas de arena blanca y mar turquesa, su vida nocturna, sitios arqueológicos y más, te quedarás asombrado.',
    ],
    'title' => 'Cancún', # Titulo del destino
    'title_sec' => 'Cosas que hacer en Cancún', # Titulo del destino
    'slug' => lang_url("/es/destinos-de-playa/cancun/que-hacer-en-cancun"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">La inmensidad del mar Caribe se abre a un maravilloso mundo de playas, cultura, historia, experiencias culinarias y el mejor entretenimiento en Canc&uacute;n, uno de los destinos de playa m&aacute;s visitados del mundo; un lugar lleno de magia y misteriosas aventuras selv&aacute;ticas, listas para ser descubiertas por sus curiosos visitantes, en busca de crear todo tipo de nuevas experiencias memorables a lo largo del camino.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Este hermoso para&iacute;so se encuentra en el Caribe Mexicano, frente a bellas playas de arena blanca y &nbsp;ofrece a sus visitantes un agradable y c&aacute;lido mar de tonos azules. Es precisamente en este incre&iacute;ble lugar que los magn&iacute;ficos resorts familiares frente al mar, disponibles en Royal Reservations y que cuentan con los mejores planes Todo Incluido y &nbsp;S&oacute;lo Hospedaje, se encuentran, justo en el coraz&oacute;n de la Zona Hotelera de Canc&uacute;n. Disfruta en la comodidad de tu espaciosa suite o villa con excelentes amenidades y servicios, y de las magn&iacute;ficas instalaciones de estos hermosos resorts. &iexcl;Obt&eacute;n las mejores promociones y vive unas fabulosas vacaciones en Canc&uacute;n con Royal Reservations!</p>', # Descripción del destino
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Vacaciones en la playa en familia',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'Con playas que quitan el aliento y un cálido mar de hermosos tonos turquesa, Cancún te espera para brindarte relajación y diversión.',
    # Contenido de la pagina del destino
    'content' => '<p><strong>Canc&uacute;n </strong>siempre se ha considerado como uno de los destinos favoritos del mundo por sus impresionantes <strong>playas</strong> de arena blanca como el Mirador en Playa Delfines, o como Playa Marl&iacute;n con su ambiente relajado. Otra de sus atracciones, es su variada <strong>vida nocturna </strong>con tantas discotecas y bares como Coco Bongo, Mandala y The City, que se encuentran en el kil&oacute;metro 9 de la <strong>Zona Hotelera</strong>.</p>
    <p>En el &aacute;rea tendr&aacute;s tambi&eacute;n la oportunidad de conocer otras atracciones como la Rueda de la Fortuna, el Museo de Cera y el Acuario en Plaza la Isla -donde podr&aacute;s hacer muy buenas <strong>compras</strong> al ser una <strong>zona libre de impuestos-, </strong>el Museo Maya o peque&ntilde;as <strong>zonas arqueol&oacute;gicas </strong>como San Miguelito y El Rey, e incluso Plaza las Am&eacute;ricas en el centro de la ciudad. Adem&aacute;s, no olvidemos que cerca de Canc&uacute;n se encuentra <strong>Chichén Itzá</strong>, una de las Siete Maravillas del Mundo.</p>
    <p>&iexcl;Disfruta al m&aacute;ximo en Canc&uacute;n con <strong>Royal Reservations</strong>!</p>',
    'featured_image' => [
        'title' => '',
        'alt' => 'Cancun',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-cancun-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-cancun.jpg':'img/beach-destination-cancun.jpg'),
    'about' => [
        'self' => 'Acerca de Cancún',
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
            'descriptions' => 'Con extensiones de arena que enmarcan las bellas aguas turquesas del Mar Caribe, <strong>Cancún </strong>se presenta ante sus visitantes con algunas de las mejores <strong>playas</strong> del mundo que brindan un ambiente tropical, d&iacute;as de diversi&oacute;n bajo el sol y el mejor estado de relajaci&oacute;n. La <strong>Zona Hotelera de Canc&uacute;n </strong>presume una l&iacute;nea costera de m&aacute;s de 20 kil&oacute;metros con diversas actividades y deportes acu&aacute;ticos. Conoce <strong>Playa Delfines</strong> en donde podr&aacute;s tomarte una foto de recuerdo frente a las grandes y famosas letras de &ldquo;Canc&uacute;n&rdquo; con el mar de fondo; la Playa <strong>Chaac Mool</strong> con su vibrante vida nocturna; o disfruta de un viaje inolvidable de 30 minutos en ferry para llegar a <strong>Isla Mujeres</strong> y deja que tus peque&ntilde;os disfruten en la playa de aguas poco profundas.',
            'image' => "things-to-do-in-cancun-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],
        1 => [
            'title' => 'Vida Nocturna',
            'descriptions' => 'Durante el día, Cancún está lleno de sorpresas e increíbles actividades para todos los gustos y edades, pero cuando cae la noche, el destino se convierte en un lugar lleno de vida, luz y música para aquellos que quieran fiesta y el mejor entretenimiento nocturno ya sea junto a la playa o en discotecas. Baila al ritmo de los latidos del corazón en divertidos centros nocturnos que se localizan en la "party zone" de la Zona Hotelera. Te encantará el ambiente de Coco Bongo y sus increíbles shows, mientras que en Mandala Beach, The City y Dady’O pasarás un buen rato bailando y haciendo nuevos amigos.',
            'image' => "things-to-do-in-cancun-b.jpg",
            'icon' =>  asset("img/icon-night-life.png")
        ],
        2 => [
            'title' => 'Tiendas',
            'descriptions' => 'Aunque Cancún es muy conocido por ser un destino de hermosas playas, otro de los atractivos de este destino en constante crecimiento, es su amplia variedad de centros comerciales, tiendas, boutiques y tianguis tanto en la Zona Hotelera como en el centro de la ciudad. Si estás buscando un pequeño souvenir para llevarte a casa, entonces el Mercado Coral Negro del kilómetro 9.5 en la Zona Hotelera y el Mercado 28 en el centro, son los primeros lugares a donde puedes ir. Sin embargo, si deseas algunos artículos de lujo libres de impuestos como joyería, tabaco o licores, te recomendamos más visitar La Isla Shopping Mall, Plaza Kukulcan y la reciente inaugurada Plaza Marina Town Center en Puerto Cancún en la Zona Hotelera; así como Plaza Las Américas que se ubica en el centro de la ciudad.',
            'image' => "things-to-do-in-cancun-c.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],
        3 => [
            'title' => 'Atracciones',
            'descriptions' => 'Durante tus increíbles vacaciones en Cancún, puedes apartar un poco de tiempo para disfrutar diferentes atracciones. Tu primera parada puede ser en la nueva Rueda de la Fortuna en Plaza La Isla Shopping Mall; y como estamos hablando de atracciones para mirar Cancún desde las alturas, de una vez  visita la Torre Escénica de Xcaret en El Embarcadero en el kilómetro 4-4.5. Y eso no es todo; también podrás descubrir los bellos jardines submarinos del segundo arrecife de coral más grande del mundo con algún tour de snorkel.',
            'image' => "things-to-do-in-cancun-d.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],
        4 => [
            'title' => 'Sitios Arqueológicos',
            'descriptions' => 'Ningunas vacaciones en Cancún pueden estar completas, sin la visita obligada a los grandes monumentos y vestigios de la antigua y gran civilización maya. Entre los diferentes asentamientos a lo largo de la Península de Yucatán, hay algunos que puedes visitar con sólo tomar el camión que sale desde la Zona Hotelera en Cancún: como son el sitio arqueológico El Rey, en el kilómetro 18, y San Miguelito en el kilómetro 16.5, ambos en Boulevar Kukulkán. Y si quieres ver algo fuera de serie e impresionante, te recomendamos mucho ir a Chichén Itzá, que se encuentra a 3 horas aproximadamente de Cancún. Contiene estructuras majestuosas como la Pirámide de Kukulkán y el Templo de los Guerreros.',
            'image' => "things-to-do-in-cancun-e.jpg",
            'icon' =>  asset("img/icon-archaelogical-site.png")
        ],
        5 => [
            'title' => 'Lugares de Interés',
            'descriptions' => 'Cancún es más que sólo playas de arena blanca y aguas azules –de las que nunca nos cansaremos-. Pero, si quieres hacer algo diferente en tus próximas vacaciones, más allá de disfrutar un día en la playa, te recomendamos ir a  Plaza La Isla Shopping Mall y visitar el increíble Acuario, igual de disfrutable para niños y adultos, para aprender sobre las especies marinas que viven en el área, o incluso al Museo de Cera con estatuas en tamaño real de diferentes celebridades con las que te puedes tomar fotografías. Y claro, si buscas algo más cultural, no olvidemos tampoco el Museo Maya en la Zona Hotelera.',
            'image' => "things-to-do-in-cancun-f.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ]
    ],
    'food' => [
        'title' => 'Experiencia Culinaria en Cancún',
        'description' => 'Durante tus <strong>vacaciones en Canc&uacute;n</strong> es obligado que pruebes la comida tradicional yucateca o al menos visitar alguno de los deliciosos restaurantes que preparan deliciosos platillos provenientes de diferentes partes del mundo. &nbsp;En la ciudad puedes probar de todo, desde deliciosos mariscos frescos y ceviche en la <strong>Zona Hotelera</strong> frente a la laguna o frente al mar, as&iacute; como diversas variedades gastron&oacute;micas como platillos mexicanos, finos cortes, bufets de comida internacional, cocina tailandesa y mucho m&aacute;s.',
        'image' => "cancun-regional-food.jpg",
    ],
    'resorts' => [
        #'title' => 'Resorts en Cancun',
        #'description' => 'Prepárate para disfrutar de la comodidad, impresionantes vistas e increíbles amenidades de nuestros resorts frente a la playa  en el corazón la Zona Hotelera de Cancún, uno de los mejores destinos de playa para vivir días inolvidables junto al bello Mar Caribe.',
        [
            'slug'=>'the-royal-sands',
            'name'=>'The Royal Sands',
            'url' => '/es/hoteles-de-playa/the-royal-sands',
            'img'=> asset('img/resorts/the-royal-sands/the-royal-sands-a.jpg'),
            //Resorts por destino
            'title'=>'The Royal Sands',
            'description'=>'The Royal Sands es el mejor lugar para vivir una experiencia relajante en una de las mejores playas de Cancún. Descanse en la playa o junto a la alberca infinity, haga ejercicio en el gimnasio, juegue un partido de tenis o rejuvenezca con un tratamiento en su spa.',
            'stars'=>'5',            
        ],
        [
            'slug'=>'the-royal-islander',
            'name'=>'The Royal Islander',
            'url' => '/es/hoteles-de-playa/the-royal-islander',
            'img'=> asset('img/resorts/the-royal-islander/the-royal-islander-a.jpg'),
            //Resorts por destino
            'title'=>'The Royal Islander',
            'description'=>'The Royal Islander es un tranquilo resort en Cancún para familias, con acceso directo a servicios excepcionales también disponibles en su vecino The Royal Caribbean, además de tener a disposición espaciosas villas para su comodidad y paz.',
            'stars'=>'5',            
        ],
        [
            'slug'=>'the-royal-cancun',
            'name'=>'The Royal Cancun',
            'url' => '/es/hoteles-de-playa/the-royal-cancun',
            'img'=> asset('img/resorts/the-royal-cancun/the-royal-cancun-b.jpg'),
            //Resorts por Destino
            'title'=>'The Royal Cancun All Suites Resort',
            'description'=>'The Royal Cancun es un hotel familiar acogedor, preferido por sus huéspedes debido a sus servicios impecables, delicioso restaurante italiano, personal amable y todas las amenidades para niños. Las serenas aguas del Mar Caribe son perfectas para los niños pequeños. Elija entre el Plan Todo Incluido y el Plan Europeo.',
            'stars'=>'5',            
        ]          
    ],
    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
        2 => __('specials/special-3'),
        3 => __('specials/special-4'),
    ],
    'url_offers'=>lang_url("/es/destinos-de-playa/cancun/ofertas-de-hoteles-en-cancun"),
    'url_resorts'=>lang_url("/es/destinos-de-playa/cancun/los-mejores-hoteles-de-playa-en-cancun"),
];