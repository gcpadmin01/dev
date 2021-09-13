<?php

return [
    'seo'=>[
        'title'=>'¿Qué hacer en vacaciones en Punta Cana? | Royal Reservations',
        'metadescription'=>'Unas de las mejores playas del mundo se encuentran en la República Domincana. Encontrarás también tirolesas, kayaks, snorkel, surf y mucho más en unos de los mejores hoteles de Punta Cana.',
    ],
    'title' => 'Punta Cana', # Titulo del destino
    'title_sec' => 'Cosas que hacer en Punta Cana', # Titulo del destino
    'slug' => lang_url("/es/destinos-de-playa/punta-cana/que-hacer-en-punta-cana"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">La Rep&uacute;blica Dominicana, la tierra del merengue, se engalana con un destino de playa incre&iacute;ble conocido como Punta Cana. Esta incre&iacute;ble tierra de ensue&ntilde;o y sus magn&iacute;ficas playas de arena dorada ba&ntilde;adas por el azul del mar Caribe, te da la bienvenida a un lujoso mundo de relajaci&oacute;n, aventuras, experiencias culinarias y hermosas maravillas naturales por descubrir. Aqu&iacute; podr&aacute;s realizar una gran variedad de actividades como snorkeling, buceo y exploraci&oacute;n de cuevas, entre otros; as&iacute; como visitar lugares incre&iacute;bles como Altos de Chav&oacute;n, las Islas Saona y Catalina, etc.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Explora cada rinc&oacute;n de este fabuloso destino y luego descansa como te mereces durante tus vacaciones familiares en Punta Cana, hosped&aacute;ndote en cualquiera de los 4 magn&iacute;ficos resorts familiares frente al mar, disponibles para ti en Royal Reservations. &iquest;Deseas unas vacaciones en plan Todo Incluido o S&oacute;lo Hospedaje en un resort de lujo frente al mar; o prefieres un resort familiar en plan Hospedaje con Desayunos incluidos? Aqu&iacute; encontrar&aacute;s excelentes ofertas vacacionales, con amenidades exclusivas y servicios incre&iacute;bles.</p>', # Descripción del destino
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],
    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'El ambiente caribeño de Punta Cana, en la República Dominicana, te esperan para que experimentes una aventura inolvidable.',
    # Contenido de la pagina del destino
    'content' => '<p><strong>Punta Cana</strong>, en la <strong>Rep&uacute;blica Dominicana</strong>, es un para&iacute;so privilegiado por contar con algunas de las <strong>playas</strong> m&aacute;s hermosas del mundo. Situado frente al asombroso azul del mar Caribe, justo donde se une con el oc&eacute;ano Atl&aacute;ntico, este para&iacute;so cuenta con m&aacute;s de 35 km de arenas blancas, perfectas para que todos sus visitantes se recuesten para relajarse o vivan una gran aventura eligiendo entre las muchas actividades que tendr&aacute;n a su disposici&oacute;n. </p>
    <p>Tirolesas extremas, kayak, snorkel, surf y windsurf son algunas de las <strong>actividades</strong> incre&iacute;bles de este destino de playa, y entre sus grandiosas <strong>atracciones</strong> encontrar&aacute;s todo tipo de cosas que hacer como ir al ChocoMuseo o visitar la Reserva y Parque Ecol&oacute;gico Ojos Ind&iacute;genas en Punta Cana. Ahora bien, si quieres degustar los mejores platillos locales e internacionales, podr&aacute;s probarlos en cualquiera de los <strong>restaurantes </strong>que encontrar&aacute;s en tu camino; adem&aacute;s, quedar&aacute;s encantado con la <strong>vida nocturna </strong>de Punta Cana en Coco Bongo o cualquiera de los bares de la isla.</p>
    <p>&iexcl;Vive Punta Cana con las incre&iacute;bles ofertas de <strong>Royal Reservations</strong>!</p>',
    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-punta-cana-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-punta-cana.jpg':'img/beach-destination-punta-cana.jpg'),
    'about' => [
        'self' => 'Acerca de Punta Cana',
        'uselful' => [
            'money' => 'Dólares estadounidenses',
            'language' => 'Español - Inglés',
            'weather' => 'Soleado - Cálido',
            'power_socket' => '110 V - Enchufes tipo A/B',
            'cell-phone-service' => 'Cell Phone Service'
        ]
    ],
    'things_to_do' => [
        0 => [
            'title' => 'Playas',
            'descriptions' => '<p>Las <strong>playas de Punta Cana</strong> en la Rep&uacute;blica Dominicana son incre&iacute;bles para disfrutar de d&iacute;as tranquilos en el Mar Caribe. <strong>Playa Bávaro </strong>es una de las playas m&aacute;s famosas en Punta Cana. Tiene un estacionamiento, un mercado y diversas tiendas de regalo para recorrer. <strong>Playa Macao </strong>es lo mejor para<strong> surfistas </strong>principiantes y expertos.<strong> Playa</strong> <strong>El Cortecito</strong> es tu puerta de entrada a un pueblo pesquero rodeado de plazas comerciales, restaurantes y bares que puedes disfrutar. Y si est&aacute;s buscando algo m&aacute;s familiar, entonces <strong>Playa</strong> <strong>Arena Gorda Beach </strong>y sus aguas cristalinas y poco profundas, es tu lugar. </p>',
            'image' =>"things-to-do-in-punta-cana-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],
        1 => [
            'title' => 'Snorkel y Buceo',
            'descriptions' => '<p>Disfruta una experiencia de <strong>snorkel</strong> y<strong> buceo en Punta Cana</strong>. De acuerdo al &ldquo;Archivo General de Indias&rdquo; hay m&aacute;s de 700 galeones hundidos en el &aacute;rea, de los cuales se han encontrado 30 barcos que puedes visitar en un tour inolvidable. Los restos del barco<strong> Alto Velo Wreck </strong>(a 8 metros de profundidad) son un excelente lugar para principiantes. El <strong>Atlantic Princess </strong>en La Romana, tambi&eacute;n ofrece una maravillosa experiencia de buceo en compa&ntilde;&iacute;a de incre&iacute;bles especies marinas en aguas poco profundas. <strong>Boca Chica </strong>tambi&eacute;n es otra opci&oacute;n con hermosas criaturas como estrellas, caballitos de mar y m&aacute;s.</p>',
            'image' => "things-to-do-in-punta-cana-b.jpg",
            'icon' =>  asset("img/icon-diving-snorkel.png")
        ],
        2 => [
            'title' => 'Lugares Interesantes',
            'descriptions' => '<p>Punta Cana tambi&eacute;n tiene una gran variedad de sitios que har&aacute;n de tus vacaciones algo memorable. &nbsp;Visita <strong>Parque Manat&iacute;</strong>, un gran parque de atracciones para toda la familia donde podr&aacute;n ver danzas ceremoniales de la tribu Taino, tucanes, flamencos, nadar con delfines y m&aacute;s. M&aacute;s al suroeste en <strong>La Romana</strong>, donde est&aacute; <strong>Altos de Chav&oacute;n</strong>, sentir&aacute;s que regresaste al siglo XVI a un pueblo europeo lleno de arte. Despu&eacute;s visita <strong>Parque Nacional del Este</strong>, Patrimonio de la Humanidad y parque natural que alberga cientos de especies de flora y fauna, as&iacute; como un parque marino.</p>',
            'image' => "things-to-do-in-punta-cana-c.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ],
        3 => [
            'title' => 'Aventura',
            'descriptions' => '<p>Tambi&eacute;n en <strong>Punta Cana</strong> puedes vivir experiencias llenas de adrenalina. Realiza actividades de aventura y deportes extremos para despertar al aventurero que llevas dentro. Por ejemplo, da un paseo en<strong> buggy </strong>en las afueras de la ciudad para aprender m&aacute;s sobre la vida local y lugares poco explorados. Vuela sobre los aires de <strong>Punta Cana</strong> en una r&aacute;pida tirolesa o ve a una expedici&oacute;n de safari para conocer el campo, los plant&iacute;os de caf&eacute; y cacao, granjas, el pueblo y la vida silvestre de la isla. Tambi&eacute;n puedes ir a <strong>montar a caballo</strong> junto a un r&iacute;o o junto al mar. &iexcl;Hay actividades para toda la familia!</p>',
            'image' => "things-to-do-in-punta-cana-d.jpg",
            'icon' =>  asset("img/icon-waves.png")
        ],
        4 => [
            'title' => 'Golf',
            'descriptions' => '<p>Punta Cana tambi&eacute;n es conocida por ser un destino para golfistas que buscan paisajes incre&iacute;bles en <strong>campos de golf</strong> profesionales. El <strong>Club de Golf</strong> <strong>Punta Espada </strong>es un campo que te encantar&aacute;, con sus incre&iacute;bles par 72 y vistas al mar. En <strong>La Romana </strong>encontrar&aacute;s tres campos de golf dise&ntilde;ados por el m&iacute;tico Pete Dye, <strong>Dye Fore, The Links</strong> y el ya mundialmente conocido, <strong>Teeth of the Dog</strong>, que es por mucho uno de los mejores campos de golf en el Caribe. &nbsp;</p>',
            'image' => "things-to-do-in-punta-cana-e.jpg",
            'icon' =>  asset("img/icon-golf.png")
        ],
        5 => [
            'title' => 'Islas',
            'descriptions' => '<p>Durante tus vacaciones en Punta Cana, unas de las visitas que no te puedes perder son las hermosas islas que rodean este hermoso para&iacute;so. La<strong> Isla Catalina</strong> es un incre&iacute;ble lugar que te ofrece una imperdible experiencia de snorkel, y desde el momento que llegues a La Romana para tomar un paseo en catamar&aacute;n, tu aventura en la isla comenzar&aacute;. Otra buena experiencia, se vive en la <strong>Isla Saona </strong>y sus c&aacute;lidas aguas caribe&ntilde;as. Bucea y descubre un mundo incre&iacute;ble de especies marinas y despu&eacute;s descansa en la playa sobre el vaiv&eacute;n de una hamaca.</p>',
            'image' => "things-to-do-in-punta-cana-f.jpg",
            'icon' =>  asset("img/icon-islands.png")
        ]
    ],
    'food' => [
        'title' => 'Experiencia Culinaria en Punta Cana',
        'description' => '<p><strong>Punta Cana</strong>, en la Rep&uacute;blica Dominicana, es un agradable para&iacute;so tropical de aguas turquesas y playas aisladas que te ofrece no s&oacute;lo lo mejor en relajaci&oacute;n, sino tambi&eacute;n una amplia gama de frescos y deliciosos platillos nacidos de la asombrosa mezcla de culturas en esta isla. Prueba un poco de todo en los numerosos <strong>restaurantes </strong>que ofrecen comidas tradicionales dominicanas, lo mejor de la cocina internacional con men&uacute;s vanguardistas de la gastronom&iacute;a Francesa, Italiana, Espa&ntilde;ola o Griega, platos de mariscos frescos y mucho m&aacute;s. Estamos seguros de que cualquier cosa que comas, agradar&aacute; a tus sentidos.</p>',
        'image' => "punta-cana-regional-food.jpg",
    ],
    'resorts' => [
        #'title' => 'Resorts en Punta Cana',
        #'description' => 'El destino de playa perfecto para aquellos amantes del sol y la playa es, sin duda alguna, Punta Cana en la República Dominicana. Aquí encontrarás el mejor lugar para pasar unas vacaciones relajadas en cualquiera de nuestros magníficos resorts de lujo en Punta Cana, con amenidades exclusivas y vistas impresionantes.',
        [
            'slug'=>'casa-de-campo',
            'name'=>'Casa de Campo',
            'url' => '/es/hoteles-de-playa/casa-de-campo',
            'img'=> asset('img/resorts/casa-de-campo/casa-de-campo-b.jpg'),
            //Resorts por destino
            'title'=>'Casa de Campo',
            'description'=>'Situado en La Romana, en la República Dominicana, Casa de Campo Resort & Villas es un hermoso resort de lujo que cuenta con playa privada, lujosas habitaciones, y una gran variedad de instalaciones, servicios y actividades de primera, creados con elevados estándares de confort, sofisticación y relajación. Perfecto para parejas, familias y grupos en busca de experiencias vacacionales irrepetibles.',
            'stars'=>'5',            
        ],

        /*
        [
            'slug'=>'ancora',
            'name'=>'Ancora Punta Cana Private Residence Yacht Club',
            'url' => '/es/hoteles-de-playa/ancora/ancora-punta-cana-private-residence-yacht-club',
            'img'=> asset('img/resorts/ancora/ancora-a.jpg'),
            //Resorts por destino
            'title'=>'Ancora Punta Cana Private Residence Yacht Club',
            'description'=>'Ancora Punta Cana Private Residence Yacht Club, en la hermosa Punta Cana de la República Dominicana, es un complejo de lujosas villas en las aguas de la exclusiva Marina Cap Cana. Este resort de lujo te ofrece alojamiento exclusivo, con servicios y amenidades de clase mundial. Ideal para parejas, familias o grupos de amigos que deseen experimentar unas vacaciones de lujo en amplias y hermosas suites.',
            'stars'=>'4',            
        ],        
        */
        
        
    ],
    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
        2 => __('specials/special-3'),
    ],
    'url_offers'=>lang_url("/es/destinos-de-playa/punta-cana/ofertas-de-hoteles-en-punta-cana"),
    'url_resorts'=>lang_url("/es/destinos-de-playa/punta-cana/los-mejores-hoteles-de-playa-en-punta-cana"),
];