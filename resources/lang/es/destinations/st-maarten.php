<?php

return [
    'seo'=>[
        'title'=>'¿Qué hacer en vacaciones en St. Maarten? | Royal Reservations',
        'metadescription'=>'Esta magnífica isla en el Caribe te ofrece increíbles vistas, experiencias, hospedaje, servicios y amenidades. Ven a visitar St. Maarten y déjate enamorar por sus maravillosos paisajes.',
    ],
    'title_sec' => 'Cosas que hacer en St. Maarten', # Titulo del destino
    'title' => 'St. Maarten', # Titulo del destino
    'slug' => lang_url("/es/destinos-de-playa/st-maarten/que-hacer-en-st-maarten"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">El para&iacute;so y la felicidad vienen en empaque peque&ntilde;o... la hermosa isla de St. Maarten. Este incre&iacute;ble destino caribe&ntilde;o ofrecer&aacute; a sus visitantes lo mejor de dos culturas europeas, la holandesa y la francesa, en combinaci&oacute;n con el hermoso paisaje del Caribe. Descubre las incre&iacute;bles playas de St. Maarten, su cultura y la calidez de su gente, mientras disfrutas de la gran variedad de actividades acu&aacute;ticas y terrestres; vive el mejor d&iacute;a de compras &ldquo;duty-free&rdquo; de tu vida en la parte holandesa, del&eacute;itate con la experiencia culinaria de la parte francesa de la isla y vibra con la fascinante vida nocturna que ofrece este magn&iacute;fico lugar.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">&iexcl;Experimenta esta mezcla asombrosa de culturas, sabores y &nbsp;experiencias m&aacute;s de cerca! Disfruta de tu estad&iacute;a en St. Maarten en Simpson Bay Beach Resort &amp; Marina y en The Villas at Simpson Bay Beach Resort, dos resorts familiares con fabulosos alojamientos y planes S&oacute;lo Hospedaje y Hospedaje con Desayunos incluidos, excelentes amenidades y un servicio atento. &iexcl;Reserva con Royal Reservations para obtener incre&iacute;bles ofertas vacacionales!</p>', # Descripción del destino
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'St. Maarten',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'Con un encanto al estilo europeo de Holanda y Francia, en combinación con la belleza del Caribe, llega St. Maarten para ti.',
    # Contenido de la pagina del destino
    'content' => '<p>Donde el mar Caribe se encuentra con el oc&eacute;ano Atl&aacute;ntico, all&iacute; se ubica la hermosa isla de <strong>St. Maarten</strong>. Esta m&aacute;gica isla ofrece lo mejor de dos grandes culturas, la francesa y la holandesa, fusionadas a la perfecci&oacute;n con la calidez y colorido del Caribe. St. Maarten cuenta con hermosos <strong>paisajes naturales</strong>, <strong>atracciones</strong> como el jard&iacute;n zool&oacute;gico y bot&aacute;nico o El Mariposario, y m&aacute;s de 70 km de fant&aacute;sticas playas que van desde las m&aacute;s tranquilas y aisladas, hasta aquellas con una gran variedad de <strong>actividades </strong>acu&aacute;ticas y terrestres, como paseos a caballo por la bah&iacute;a, kitesurf, buceo y mucho m&aacute;s. </p>
    <p>Pero adem&aacute;s de todas las actividades y la relajaci&oacute;n que vivir&aacute;s en St. Maarten, tambi&eacute;n encontrar&aacute;s lugares llenos de ambiente tales como <strong>casinos</strong>, <strong>boutiques </strong>y <strong>tiendas</strong> duty free con joyer&iacute;a y licores finos, restaurantes incre&iacute;bles conocidos por su oferta gastron&oacute;mica estilo fusi&oacute;n y una vibrante <strong>vida nocturna</strong>. </p>
    <p>&iexcl;Todo esto y m&aacute;s te espera en St. Maarten con Royal Reservations!</p>',
    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-st-maarten-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-st-maarten.jpg':'img/beach-destination-st-maarten.jpg'),
    'about' => [
        'self' => 'Acerca de St. Maarten',
        'uselful' => [
            'money' => 'Florines - Dólares estadounidenses',
            'language' => 'Papiamento - Inglés',
            'weather' => 'Soleado - Cálido',
            'power_socket' => '220V / Enchufes tipo E'
            #'cell-phone-service' => 'Cell Phone Service: Virgin, AT&T, Movistar and Telcel'
        ]
    ],
    'things_to_do' => [
        0 => [
            'title' => 'Playas',
            'descriptions' => '<p>Las playas de<strong> St. Maarten </strong>son una belleza. Todo visitante encuentra el lugar perfecto para relajarse durante todo el d&iacute;a frente al mar en <strong>Mullet Bay beach</strong>, al sur de <strong>Cupecoy Beach</strong>, con su ambiente tranquilo o incluso para surfear entre las olas. Por otro lado, <strong>Maho Beach</strong>, es una hermosa playa, un poco m&aacute;s concurrida que Playa Mullet, pero con toda la diversi&oacute;n que buscan los turistas. No olvides tomarte la famosa foto de un avi&oacute;n aterrizando a pocos metros de ti. Tambi&eacute;n, visita <strong>Simpson Bay beach </strong>y disfruta un d&iacute;a sereno en contemplaci&oacute;n del Mar Caribe o practicando alg&uacute;n deporte acu&aacute;tico.</p>',
            'image' => "things-to-do-in-st-maarten-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],
        1 => [
            'title' => 'Los Fuertes',
            'descriptions' => '<p>St. Maarten no s&oacute;lo tiene incre&iacute;bles playas con toda la variedad de servicios y comodidades, sino que tambi&eacute;n tiene lugares hist&oacute;ricos muy interesantes. &nbsp;En esta isla del <strong>Caribe</strong>, podr&aacute;s visitar dos <strong>fuertes</strong>. El primero en la lista es el <strong>Fuerte St. Louis</strong> construido en 1789 sobre una monta&ntilde;a con vistas a Marigot Bay, que serv&iacute;a para proteger los almacenes principales de la isla contra invasiones. El segundo es el <strong>Fuerte Amsterdam</strong>, ubicado en la parte m&aacute;s alta de la Pen&iacute;nsula y construido en 1631. Hoy es una famosa zona para observaci&oacute;n de aves que alberga una inmensa poblaci&oacute;n de pel&iacute;canos.</p>',
            'image' => "things-to-do-in-st-maarten-b.jpg",
            'icon' =>  asset("img/icon-forts.png")
        ],
        2 => [
            'title' => 'Paseos en Barco',
            'descriptions' => '<p>St. Maarten presume un gran abanico de actividades, siendo una de las principales el navegar sobre las aguas cristalinas del Mar Caribe. As&iacute; que si quieres izar las velas y vivir una gran aventura, toma un paseo en <strong>Catamar&aacute;n</strong> o en un <strong>Yate de lujo</strong> que te llevar&aacute; a admirar atardeceres inolvidables sobre la infinidad de los mares. Encontrar&aacute;s tours de muchos precios y para todos los gustos y edades, desde una excursi&oacute;n Todo Incluido, hasta visitas a hermosos arrecifes y jardines submarinos que podr&aacute;s admirar con una m&aacute;scara de snorkel. </p>',
            'image' => "things-to-do-in-st-maarten-c.jpg",
            'icon' =>  asset("img/icon-city.png")
        ],
        3 => [
            'title' => 'Tiendas',
            'descriptions' => '<p>Sin duda, un viaje no estar&iacute;a completo sin unas horas de buenas compras y en <strong>St.</strong> <strong>Maarten</strong>, sin duda tendr&aacute;s una de las mejores experiencias en este sentido. Si quieres comprar alg&uacute;n collar o pulsera, visita las joyer&iacute;as de <strong>DK Gems International</strong>, ser&aacute; tu lugar favorito si quieres llevar a casa un recuerdo de lujo de tus vacaciones en el Caribe. En las lujosas boutiques y negocios locales de <strong>Porto Cupecoy</strong>, encontrar&aacute;s ropa, piezas de arte, joyer&iacute;a y m&aacute;s. &nbsp;Y en <strong>LeWest Indies</strong>, ubicado en el monte de <strong>Fort Louis</strong> , encontrar&aacute;s lo mejor y m&aacute;s lujoso del mundo de la moda y de la buena vida. </p>',
            'image' => "things-to-do-in-st-maarten-d.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],
        4 => [
            'title' => 'Snorkel',
            'descriptions' => '<p>Si buscas aventuras acu&aacute;ticas durante tus vacaciones en <strong>St. Maarten</strong>, entonces un <strong>tour de</strong> <strong>snorkel </strong>es algo que puedes disfrutar mucho. La isla tiene lugares para aficionados, pero tambi&eacute;n para expertos que quieran explorar el fondo del <strong>Mar Caribe </strong>con su inmensa riqueza natural. Descubre las maravillas de flora y fauna que viven en este precioso para&iacute;so. Col&oacute;cate tu m&aacute;scara de snorkel y aletas y dir&iacute;jete a <strong>Mullet Bay </strong>al suroeste hasta llegar a <strong>Playa</strong> <strong>Cupecoy </strong>y despu&eacute;s descubre todos los tesoros multicolores subacu&aacute;ticos de <strong>Playa Dawn.</strong></p>',
            'image' => "things-to-do-in-st-maarten-e.jpg",
            'icon' =>  asset("img/icon-diving-snorkel.png")
        ],
        5 => [
            'title' => 'El Centro',
            'descriptions' => '<p>Vive dos experiencias vacacionales en una. St Maarten es un territorio dividido en dos incre&iacute;bles pero muy diferentes culturas: la holandesa, en <strong>St. Maarten/Sint Maarten</strong>, y la francesa, en <strong>Saint </strong>Ambas tienen mucho que ofrecerte. Por ejemplo, el lado holand&eacute;s es ideal para ir de compras, y el lado franc&eacute;s es un para&iacute;so de la cocina gourmet. En cada lugar tendr&aacute;n un saludo particular para ti, caracter&iacute;stico de su cultura, pero siempre te sorprender&aacute;s por la variada arquitectura, &nbsp;vida nocturna, recursos naturales e incre&iacute;bles actividades acu&aacute;ticas y terrestres para todas las edades. </p>',
            'image' =>"things-to-do-in-st-maarten-f.jpg",
            'icon' =>  asset("img/icon-downtown.png")
        ]
    ],
    'food' => [
        'title' => 'Experiencia Culinaria St Maarten',
        'description' => '<p class="text">Para el desayuno, el almuerzo o la cena, con la variada <strong>oferta gastron&oacute;mica</strong> de <strong>St. Maarten</strong> encontrar&aacute;s exactamente lo que buscas en cualquier momento del d&iacute;a. M&aacute;s de 300 <strong>restaurantes</strong> y "Lolos" reuniendo lo mejor de una mezcla culinaria multicultural a trav&eacute;s de platillos de la cocina holandesa, francesa, internacional, &eacute;tnica y criolla, en combinaci&oacute;n con los incre&iacute;bles sabores del Caribe. Deja que tus papilas gustativas bailen al ritmo de nuestros sabores caribe&ntilde;os.</p>',
        'image' => "st-maarten-regional-food.jpg",
    ],
    'resorts' => [
        #'title' => 'Resorts en St Maarten',
        #'description' => 'Nuestros impecables resorts en primera línea de playa en St. Maarten, te permitirán descubrir esta hermosa isla caribeña, donde encontrarás no sólo playas increíbles sino también una rica cultura, actividades para todos y el mejor lugar para pasar esas vacaciones de playa que nunca olvidarás.',
        0 => [
            'slug'=>'the-villas-at-simpson-bay-resort',
            'name'=>'The Villas at Simpson Bay',
            'url' => '/es/hoteles-de-playa/the-villas-at-simpson-bay-resort',
            'img'=> asset('img/resorts/the-villas-at-simpson-bay-resort/the-villas-at-simpson-bay-resort-d.jpg'),
            //resorts por destino
            'title'=>'The Villas at Simpson Bay',
            'description'=>'The Villas at Simpson Bay Beach Resort & Marina honors its excellence for hospitality with great amenities on the front row for spectacular Caribbean sunsets. The resort is ideally located on the beach among St Maarten island’s most popular spots and malls.',
            'stars'=>'5',            
        ],
        1 => [
            'slug'=>'simpson-bay-resort',
            'name'=>'Simpson Bay Resort',
            'url' => '/es/hoteles-de-playa/simpson-bay-resort',
            'img'=> asset('img/resorts/simpson-bay-resort/simpson-bay-resort-d.jpg'),
            //resorts por destino
            'title'=>'Simpson Bay Resort',
            'description'=>'Located in a sheltered beach of the island of St. Maarten, Simpson Bay Beach Resort & Marina, is near to become your favorite choice to experience the best of two Caribbean countries in one: Dutch Sint Maarten and French Saint Martin.',
            'stars'=>'5',
        ]        
    ],
    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
        2 => __('specials/special-3'),
        3 => __('specials/special-4'),
    ],
    'url_offers'=>lang_url("/es/destinos-de-playa/st-maarten/ofertas-de-hoteles-en-st-maarten"),
    'url_resorts'=>lang_url("/es/destinos-de-playa/st-maarten/los-mejores-hoteles-de-playa-en-st-maarten"),
];