<?php

return [
    'seo'=>[
        'title'=>'¿Qué hacer en Puerto Morelos vacaciones? | Royal Reservations',
        'metadescription'=>'Puerto Morelos cuenta con unas de las playas más bellas y más tranquilas para toda la familia.',
    ],
    'title' => 'Puerto Morelos', # Titulo del destino
    'title_sec' => 'Cosas que hacer en Puerto Morelos', # Titulo del destino
    'slug' => lang_url("/es/destinos-de-playa/puerto-morelos/que-hacer-en-puerto-morelos"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Puerto Morelos es un pintoresco pueblo pesquero donde te ser&aacute; f&aacute;cil encontrar la paz y la relajaci&oacute;n buscas, y dejar atr&aacute;s las preocupaciones de trabajo y vida cotidiana. Disfruta de encantadores paseos en bicicleta por las calles de este peque&ntilde;o pueblo, que adem&aacute;s cuenta con algunas de las m&aacute;s bonitas playas de arena blanca y aguas azules del Caribe, lo que las hace perfectas para las actividades acu&aacute;ticas y en la playa con la familia y los amigos. Cuenta con deliciosos restaurantes de cocina internacional y mexicana, peque&ntilde;as cafeter&iacute;as y panader&iacute;as; y si te gusta salir a tomar una copa, aqu&iacute; encontrar&aacute;s un ambiente bohemio y relajado.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Disfruta de tu visita a este pueblo de ensue&ntilde;o en el Caribe Mexicano en una de las joyas de este destino de playa, Grand Residences Riviera Canc&uacute;n, un resort familiar de lujo que ofrece fant&aacute;sticos planes Todo Incluido, S&oacute;lo Hospedaje y Hospedaje con Desayunos incluidos en lujosas suites con amenidades exclusivas y servicios indulgentes. &iexcl;Reserva tu fabulosa estancia con Royal Reservations y aprovecha magn&iacute;ficas ofertas vacacionales y beneficios!</p>', # Descripción del destino
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Puerto Morelos',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'En este pintoresco pueblo pescador te relajarás frente al mar, mientras disfrutas de su rica gastronomía y paisajes únicos.',
    # Contenido de la pagina del destino
    'content' => '<p>Conocido por ser un tranquilo pueblo pesquero, <strong>Puerto Morelos</strong> presume bellas playas del Caribe Mexicano para relajarse y pasar d&iacute;as muy agradables, como por ejemplo <strong>Playa Azul</strong>, <strong>Playa Ojo de Agua</strong> y <strong>Playa Bonita</strong>, tres de sus m&aacute;s valiosas joyas.</p>
    <p>Aunque peque&ntilde;o, este pintoresco y amigable pueblo, tiene decenas de actividades por hacer, desde hacer compras en los mercados y boutiques que ofrecen excelentes servicios, visitar hermosos atractivos naturales como el <strong>Parque Nacional de Arrecifes</strong> de <strong>Puerto Morelos</strong>, el Jard&iacute;n Bot&aacute;nico y el turismo a la Ruta de los Cenotes, hasta caminar por las calles y disfrutar una rica tarde bohemia al sonido de las olas, o en la plaza con sus cafeter&iacute;as y restaurantes. Adem&aacute;s, siempre nos invita a aprender un poco m&aacute;s sobre la cultura maya al visitar los <strong>sitios arqueol&oacute;gicos</strong> que se encuentran cerca de <strong>Puerto Morelos</strong>, como <strong>Chichén Itzá</strong> y <strong>El Meco</strong>.</p>
    <p>&iexcl;Sum&eacute;rgete en la tranquilidad de Puerto Morelos con <strong>Royal Reservations</strong>!</p>',
    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-puerto-morelos-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-puerto-morelos.jpg':'img/beach-destination-puerto-morelos.jpg'),
    'about' => [
        'self' => 'Acerca de Puerto Morelos',
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
            'descriptions' => 'Puerto Morelos es un pequeño y tranquilo pueblo frente al hermoso Mar Caribe. Además de que sus playas son increíblemente relajantes, y por supuesto ideales para las personas que no les gusta el bullicio ni las multitudes, si quieres relajarte unas horas en la playa o te gustaría hacer una o dos actividades, te recomendamos visitar Playa Bonita, ya que ahí podrás nadar, practicar snorkel y windsurf. Otra playa que puedes visitar es Ojo de Agua, ideal para jugar volibol, buceo o simplemente para relajarse sobre la blanca y suave arena. Finalmente, con Aventuras Punta Brava, encontrarás las mejores olas para un buen rato de surf y kitesurf.',
            'image' =>"things-to-do-in-puerto-morelos-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],
        1 => [
            'title' => 'Tiendas',
            'descriptions' => 'Ya sea que quieras comprar un bonito souvenir para llevarle a tus amigos y familiares en casa, o una blusa o camisa artesanal, tradicional de la región, en Puerto Morelos encontrarás dos mercados con arquitectura de típicas cabañas mayas, así como buenas tiendas en Av. Javier Rojo Gómez y sus alrededores que te recibirán con alegría, excelente servicio e interesantes artículos. Lo mejor es que puedes "regatear" y comprar a muy buen precio. ¡Ven a Puerto Morelos para disfrutar un día de compras y relajarte cerca del mar! ',
            'image' => "things-to-do-in-puerto-morelos-b.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],
        2 => [
            'title' => 'Atracciones',
            'descriptions' => 'Este pacífico pueblo, puede que no tenga toda la infraestructura de una gran ciudad, pero cuenta con una gran cantidad de atracciones para todos. Te sorprenderán las maravillas naturales de Puerto Morelos en lugares como el Parque Nacional de Arrecifes que ofrece tours de snorkel y buceo, así como dos increíbles cenotes: Las Mojarras y Verde Lucero. También puedes visitar el Jardín Botánico de Puerto Morelos para aprender sobre las plantas medicinales del lugar y visitar el campo chiclero mientras caminas por un sendero selvático. Y eso no es todo, está la Ruta de los Cenotes, con ríos subterráneos que se interconectan, listos para ser descubiertos.',
            'image' => "things-to-do-in-puerto-morelos-c.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],
        3 => [
            'title' => 'Sitios Arqueológicos',
            'descriptions' => 'Puerto Morelos es el lugar ideal para vivir unas relajantes vacaciones en la Riviera Maya, y ofrece todo tipo de actividades para pasar un increíble tiempo. Algo que debe hacer todo visitante, es ir a las zonas arqueológicas cerca de Puerto Morelos, donde los amantes de la cultura e historia, quedarán fascinados por sus pirámides, estructuras y templos monumentales. Chichén Itzá es uno de estos maravillosos lugares que debes ver para creer que existe. Estamos seguros que el Castillo y el Juego de Pelota serán tus favoritos.  También, visita El Meco, que se encuentra a sólo 48 minutos de Puerto Morelos, justo frente a Isla Mujeres, y descubre otras místicas estructuras.',
            'image' => "things-to-do-in-puerto-morelos-d.jpg",
            'icon' =>  asset("img/icon-archaelogical-site.png")
        ],
        4 => [
            'title' => 'Lugares de Interés',
            'descriptions' => 'Siempre tendrás algo qué hacer en Puerto Morelos, con toda la variedad de lugares interesantes alrededor de este hermoso pueblo pesquero. El Faro Inclinado es una atracción en Puerto Morelos, y se dice que hace muchos años cuando pegó un huracán, se dobló su estructura y cuando quisieron derribarlo con maquinaria, fue imposible. Llegó para quedarse.  La Parroquia de San José Obrero, junto a la plaza principal y el quiosco, son excelentes lugares para aprender sobre el arte religioso de la zona, para contemplar el mar azul y desde ahí caminar hasta algún restaurante o cafetería de tu preferencia.',
            'image' => "things-to-do-in-puerto-morelos-e.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ],
        5 => [
            'title' => 'El Pueblo',
            'descriptions' => '<strong>Puerto Morelos</strong> ser&aacute; el lugar perfecto para aquellos viajeros que buscan d&iacute;as tranquilos y relajantes junto al mar. Este peque&ntilde;o pueblo no s&oacute;lo es c&aacute;lido debido a su clima caribe&ntilde;o, sino tambi&eacute;n al agradable y siempre sonriente trato de su gente, que en combinaci&oacute;n con un ambiente bohemio, una gran cantidad de <strong>restaurantes internacionales</strong> y de <strong>mariscos</strong>, <strong>bares</strong> y <strong>cafeter&iacute;as</strong> alrededor de esta hermosa ciudad pintoresca, le brinda a sus visitantes una experiencia incre&iacute;ble durante el d&iacute;a y para los que gustan de la <strong>vida nocturna</strong>. Ya sea en bicicleta o a pie, descubre cada rinc&oacute;n de Puerto Morelos durante tus vacaciones en la Riviera Maya.',
            'image' => "things-to-do-in-puerto-morelos-f.jpg",
            'icon' =>  asset("img/icon-nightlife.png")
        ]
    ],
    'food' => [
        'title' => 'Experiencia Culinaria en Puerto Morelos',
        'description' => 'Puerto Morelos rebasará tus expectativas si decides comer un filete de pescado fresco o mariscos. En este pueblo disfrutarás deliciosos platillos del mar que los pescadores preparan de la caza del día, además que muchos restaurantes presumen la participación de chefs de talla mundial que ofrecen cocina uruguaya, mediterránea, italiana, francesas y por supuesto, la deliciosa cocina mexicana.',
        'image' => "puerto-morelos-regional-food.jpg",
    ],
    'resorts' => [
        #'title' => 'Resorts en Puerto Morelos',
        #'description' => 'Hospédate en nuestro resort de lujo, miembro de la lista de Leading Hotels of the World. El hotel se ubica frente al hermoso Mar Caribe, en donde disfrutarás hermosos paisajes de este pequeño pueblo pesquero, así como una gran variedad de actividades y un ambiente tranquilo para todo aquel que desee un máximo grado de relajación.',
        0 => [
            'slug'=>'grand-residences-riviera-cancun',
            'name'=>'Grand Residences',
            'url' => '/es/hoteles-de-playa/grand-residences-riviera-cancun',
            'img'=> asset('img/resorts/grand-residences-riviera-cancun/grand-residences-riviera-cancun-c.jpg'),
            //Resorts por Destino
            'title'=>'Grand Residences Riviera Cancun',
            'description'=>'Grand Residences Riviera Cancun, se encuentra en el corazón de la Riviera Maya, y es la corona de nuestra familia ofreciendo servicios y hospitalidad de primera en un oasis exclusivo. Recientemente fue nombrado el resort #2 en el Top 25 de los Hoteles más Lujosos de México por TripAdvisor.',
            'stars'=>'5',            
        ]         
    ],
    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
        2 => __('specials/special-3'),
        3 => __('specials/special-4'),
    ],
    'url_offers'=>lang_url("/es/destinos-de-playa/puerto-morelos/ofertas-de-hoteles-en-puerto-morelos"),
    'url_resorts'=>lang_url("/es/destinos-de-playa/puerto-morelos/los-mejores-hoteles-de-playa-en-puerto-morelos"),    
];