<?php

return [
    'seo'=>[
        'title'=>'¿Qué hacer en Playa del Carmen, México? | Royal Reservations',
        'metadescription'=>'Playa del Carmen se convertirá en tu destino de playa favorito para visitar en cualquier fecha del año. En Royal Reservations te damos las mejores recomendaciones para elegir hotel en Playa del Carmen y ahorrar.',
    ],
    'title' => 'Playa del Carmen', # Titulo del destino
    'title_sec' => 'Cosas que hacer en Playa del Carmen', # Titulo del destino
    'slug' => lang_url("/es/destinos-de-playa/playa-del-carmen/que-hacer-en-playa-del-carmen"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Situado en el coraz&oacute;n del Caribe Mexicano, Playa del Carmen y su ambiente cosmopolita es uno de los destinos de playa favoritos para los viajeros asiduos que gustan de aguas cristalinas, hermosas playas de arena suave, entretenimiento de d&iacute;a y de noche a lo largo de La Quinta Avenida, diversas tiendas y centros comerciales... &iexcl;Si Playa es tu pr&oacute;ximo destino, prep&aacute;rate para dar un paseo maravilloso alrededor de este excepcional lugar!</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Para que explores y disfrutes de cada &nbsp;rinc&oacute;n de "Playa", en Royal Reservations tenemos disponible para ti el refugio perfecto de relajaci&oacute;n y confort con vistas impresionantes del mar Caribe, para que vivas unas vacaciones simplemente excepcionales. En nuestro resort familiar frente al mar con plan Todo Incluido, The Royal Haciendas, experimentar&aacute;s la comodidad de tu suite o villa con todo lo necesario para pasar momentos de descanso restaurador y en el resto de las instalaciones del resort encontrar&aacute;s incre&iacute;bles amenidades. Al reservar tu estancia con nosotros, obtendr&aacute;s magn&iacute;ficos descuentos y promociones para pasar unas memorables vacaciones familiares en Playa del Carmen.</p>', # Descripción del destino
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Playa del Carmen',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'Un destino turístico de talla mundial, con el mejor ambiente de playa y mucha diversión… Eso y más te ofrece Playa del Carmen.',
    # Contenido de la pagina del destino
    'content' => '<p>Playa del Carmen se convertir&aacute; en tu destino favorito para vacacionar en cualquier &eacute;poca del a&ntilde;o, una vez que hayas pisado sus playas de arena blanca y hayas nadado en su incre&iacute;ble mar azul. Los clubes de playa, Playa Mamitas y Parque Fundadores, son lugares muy disfrutables para obtener un buen bronceado. Tambi&eacute;n debemos mencionar la vida nocturna de Playa, ya que la fiesta est&aacute; por todos lados, desde Coco Bongo y Palazzo hasta diversos bares que vas a encontrar.</p>
    <p>Una de las actividades m&aacute;s populares en Playa del Carmen es ir a caminar a la Quintana Avenida y disfrutar de una experiencia de compras fabulosa en todas las peque&ntilde;as boutiques, la plaza Quinta Alegr&iacute;a y Calle Coraz&oacute;n; estos lugares ofrecen muchos art&iacute;culos libres de impuestos y para todos los gustos. Tambi&eacute;n puedes visitar el &ldquo;Museum of Wonders 3D&rdquo; y los famosos parques tem&aacute;ticos de Xcaret, Xel-Há, Xplor, etc.</p>
    <p>Finalmente, recuerda visitar algunos de los muchos sitios arqueol&oacute;gicos que se encuentran cerca de Playa del Carmen, como las ruinas en Tulum (tambi&eacute;n conocido como Zam&aacute;) o San Gervasio en la isla de Cozumel.</p>
    <p>&iexcl;Playa del Carmen es tu escaparate perfecto al para&iacute;so!</p>',
    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-playa-del-carmen-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-playa-del-carmen.jpg':'img/beach-destination-playa-del-carmen.jpg'),

    'about' => [
        'self' => 'Acerca de Playa del Carmen',
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
            'descriptions' => 'Cuando se trata de playas de arena blanca que parecen salidas de una postal, Playa del Carmen presume algunas de las mejores del Caribe. Hay playas para todos los gustos, así que, ya sea que vengas con tu familia, amigos o en una cita romántica, en definitiva disfrutarás mucho estar en un camastro bajo el sol en el club Playa Mamitas o en Parque Fundadores que es más para familias con hijos pequeños, ya que tiene un parque para niños, además de una playa ideal para ellos. También esta playa cuenta con un acceso para personas con capacidades diferentes. Y por último, nos encanta Playa Maroma con sus aguas claras y suave arena.',
            'image' => "things-to-do-in-playa-del-carmen-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],
        1 => [
            'title' => 'Vida Nocturna',
            'descriptions' => 'Cuando el sol se oculta en Playa del Carmen, toda la energía nocturna cobra vida en las diferentes cantinas, bares y clubes nocturnos, disponibles para aquellos que les encanta la fiesta y el baile hasta el amanecer. Especialmente para ti, te recomendamos clubes como Palazzo, debido a su increíble ambiente y buena música. Otro increíble lugar para pasar la noche es en La Vaquita Playa; y por supuesto, no podemos dejar de mencionar a Coco Bongo Playa del Carmen, pues estamos seguros que siempre querrás regresar a ver sus increíbles shows y a disfrutar de su buen ambiente.',
            'image' => "things-to-do-in-playa-del-carmen-b.jpg",
            'icon' =>  asset("img/icon-night-life.png")
        ],
        2 => [
            'title' => 'Tiendas',
            'descriptions' => 'Desde el momento que llegas a Playa del Carmen, debes dirigirte a la calle más famosa de la ciudad. Estamos hablando de la Quinta Avenida y todas las opciones de compras que están disponibles para ti. Es suficiente con caminar a lo largo de esta calle para  encontrar todo tipo de tiendas que venden artesanías típicas y souvenirs, boutiques e incluso plazas comerciales con tiendas libres de impuestos con ropa, joyería, perfumería y demás, tal como Quinta Alegría y Calle Corazón. ¡Disfruta un día de compras en Playa del Carmen!',
            'image' => "things-to-do-in-playa-del-carmen-c.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],
        3 => [
            'title' => 'Atracciones',
            'descriptions' => 'Además de conseguir un increíble bronceado en alguna de las playas, y de disfrutar de la fresca brisa marina, en Playa del Carmen encontrarás un sin fin de actividades y atracciones para todos los gustos y edades. Una de las actividades más populares, es pasear a lo largo de la Quinta Avenida en búsqueda de buena música, restaurantes, boutiques y el mejor ambiente del Caribe. Pero si quieres vivir algunas aventuras, entonces tendrás que visitar alguno de los parques temáticos en Playa del Carmen como Xel-Há, Xplor, Xenses, entre otros.',
            'image' => "things-to-do-in-playa-del-carmen-d.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],
        4 => [
            'title' => 'Sitios Arqueológicos',
            'descriptions' => 'Si eres un explorador aficionado buscando nuevos tesoros, tienes que visitar los impresionantes sitios arqueológicos que se encuentran cerca de Playa del Carmen. Observa a tu ritmo las majestuosas estructuras de Tulum, también conocido como Zamá, que se encuentran sobre un peñasco frente al mar, y después, toma un ferry hacia la Isla de Cozumel, y dirígete al sitio arqueológico de San Gervasio o ve a Uxmal, un pequeño pero extraordinario lugar, parte del Patrimonio de la Humanidad, que debes conocer.',
            'image' => "things-to-do-in-playa-del-carmen-e.jpg",
            'icon' =>  asset("img/icon-archaelogical-site.png")
        ],
        5 => [
            'title' => 'Lugares de Interés',
            'descriptions' => 'Descansar en la playa y nadar en las aguas cristalinas del Mar Caribe en Playa del Carmen, es increíble, sin embargo, te recomendamos tomarte un tiempo para visitar los lugares más interesantes en este destino. Por ejemplo, descubre el Museum of Wonders, un museo en tercera dimensión donde podrás tomarte fotos e interactuar con originales obras de arte. También visita el aviario de Xaman-Há para aprender más sobre las aves endémicas mexicanas de la Península, y finalmente, disfruta una tarde tranquila en el Parque Fundadores desde donde también podrás contemplar el mar al final de un gran día.',
            'image' => "things-to-do-in-playa-del-carmen-f.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ]
    ],
    'food' => [
        'title' => 'Experiencia Culinaria en Playa del Carmen',
        'description' => 'Cocina tradicional mexicana, yucateca, italiana, vegetariana, vegana… todo lo que puedas imaginar, lo puedes encontrar en Playa del Carmen con toda la variedad de interesantes y deliciosos restaurantes. No importa si estás caminando por la Quinta Avenida, en la playa o en alguna de las calles de la ciudad, siempre encontrarás el mejor lugar para disfrutar una deliciosa comida en Playa del Carmen.',
        'image' => "playa-del-carmen-regional-food.jpg",
    ],
    'resorts' => [
        #'title' => 'Resorts en Playa del Carmen',
        #'description' => 'Nuestro increíble resort frente al mar, se localiza en una de las mejores playas de Playa del Carmen. Vive momentos de relajación y actividades divertidas, ideales para toda la familia. Explora este hermoso destino y atrévete a vivir todas las aventuras que puedas.',
        0 => [
            'slug'=>'the-royal-haciendas',
            'name'=>'The Royal Haciendas',
            'url' => '/es/hoteles-de-playa/the-royal-haciendas',
            'img'=> asset('img/resorts/the-royal-haciendas/the-royal-haciendas-c.jpg'),
            //Resorts por destino
            'title'=>'The Royal Haciendas',
            'description'=>'Viva la elegancia del México Antiguo en The Royal Haciendas y consiéntase en el paraíso de Playa del Carmen. Relájese en las espaciosas villas totalmente equipadas con la sofisticación y servicios propios de un resort cinco estrellas estilo hacienda mexicana.',
            'stars'=>'5',
        ]       
    ],
    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
    ],
    'url_offers'=>lang_url("/es/destinos-de-playa/playa-del-carmen/ofertas-de-hoteles-en-playa-del-carmen"),
    'url_resorts'=>lang_url("/es/destinos-de-playa/playa-del-carmen/los-mejores-hoteles-de-playa-en-playa-del-carmen"),    
];