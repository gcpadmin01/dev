<?php

return [
    'seo'=>[
        'title'=>'¿Qué hacer en vacaciones en Curacao? | Royal Reservations',
        'metadescription'=>'Las maravillas naturales de la isla de Curacao están presentes en las playas, los parques nacionales, el acuario y sus alrededores. Hay una larga lista de cosas por hacer en tus vacaciones en Curacao.',
    ],
    'title' => 'Curacao', # Titulo del destino
    'title_sec' => 'Cosas que hacer en Curacao', # Titulo del destino
    'slug' => lang_url("/es/destinos-de-playa/curacao/que-hacer-en-curacao"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">La encantadora isla de Curacao emerge de las hermosas aguas del Caribe para llevar a los viajeros a una fusi&oacute;n cultural entre la herencia europea y la caribe&ntilde;a. Combinando una atractiva oferta de divertidas y entretenidas actividades acu&aacute;ticas y terrestres, playas incre&iacute;bles, deliciosa comida, tiendas &ldquo;duty-free&rdquo; y un paisaje de coloridos edificios alineados frente al mar, patrimonio de la &eacute;poca colonial holandesa, la isla de Curacao sorprender&aacute; a sus visitantes a trav&eacute;s de la gran variedad de atracciones, tanto naturales como creadas por el hombre.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Para aprovechar al m&aacute;ximo tus vacaciones en familia en el Caribe, hosp&eacute;date en The Royal Sea Aquarium Resort en Curacao, un excelente resort familiar que ofrece excepcionales planes S&oacute;lo Hospedaje y Hospedaje con Desayunos incluidos, que te brindar&aacute;n d&iacute;as llenos de relajaci&oacute;n y descanso en tu c&oacute;moda suite o villas que incluyen impresionantes vistas, grandiosas amenidades y servicios, a lo largo de sus impecables instalaciones, justo al lado del Curacao Sea Acuarium! Reserva con Royal Reservations y obt&eacute;n excelentes ofertas vacacionales.</p>', # Descripción del destino
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Curacao',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'Déjate encantar por Curacao, sus maravillosas playas caribeñas y coloridas calles llenas de cultura y actividades increíbles.',
    # Contenido de la pagina del destino
    'content' => '<p>Conocida por sus incre&iacute;bles playas y una gran extensi&oacute;n de arrecifes de coral, hogar de una gran variedad de flora y fauna marina, <strong>Curazao</strong> es una hermosa isla del Caribe ba&ntilde;ada por los rayos del sol durante todo el a&ntilde;o y que presume de un tranquilo y bello mar azul. Su Capital, Willemstad, est&aacute; rodeada por la belleza de la arquitectura holandesa en colores pastel, y hay diversas <strong>atracciones</strong> y <strong>actividades</strong> tales como visitar su famosa destiler&iacute;a de licores o los museos de la isla.</p>
    <p>Las <strong>maravillas naturales</strong> de la isla tambi&eacute;n est&aacute;n presentes en <strong>parques nacionales</strong> como el Parque Christoffel y el Parque Shete Boka. Y si est&aacute;s buscando un poco de <strong>entretenimiento</strong>, entonces dir&iacute;gete al Curacao Sea Aquarium, que es uno de los pocos en el mundo que ha creado ambientes naturales para sus habitantes marinos. Por supuesto, tambi&eacute;n encontrar&aacute;s una gran variedad de<strong> boutiques</strong> y <strong>tiendas </strong>de souvenirs, as&iacute; como excelentes <strong>restaurantes</strong> internacionales y de comida tradicional.</p>
    <p>&iexcl;<strong>Royal Reservations</strong> te lleva al coraz&oacute;n de Curacao!</p>',
    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-curacao-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-curacao.jpg':'img/beach-destination-curacao.jpg'),
    'about' => [
        'self' => 'Acerca de Curacao',
        'uselful' => [
            'money' => 'Florines - Dólares estadounidenses',
            'language' => 'Inglés',
            'weather' => 'Soleado - Cálido',
            'power_socket' => '120 V - Enchufes tipo A/B'
            #'cell-phone-service' => 'Cell Phone Service: Virgin, AT&T, Movistar and Telcel'
        ]
    ],
    'things_to_do' => [
        0 => [
            'title' => 'Playas',
            'descriptions' => '<p>En Curacao siempre encontrar&aacute;s la playa perfecta para descansar y relajarte, as&iacute; como tambi&eacute;n para hacer actividades acu&aacute;ticas incre&iacute;blemente divertidas y extremas. <strong>Seaquarium</strong> <strong>Beach</strong> es una hermosa playa pr&iacute;stina rodeada de tiendas, restaurantes y bares, perfecta para familias durante el d&iacute;a, y por la noche para disfrutar de cine al aire libre y conciertos. <strong>Playa Forti</strong> es el sitio perfecto si quieres pasar alg&uacute;n tiempo en la playa, nadar y luego tomar un buen bocadillo y un plato de la cocina criolla. </p>',
            'image' => "things-to-do-in-curacao-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],
        1 => [
            'title' => 'Vida Nocturna',
            'descriptions' => '<p>Bienvenido a la emocionante <strong>vida nocturna </strong>de<strong> Curacao</strong>. Por la noche, ser&aacute;s testigo de c&oacute;mo todo cobra vida al caer el sol, dando paso a una gran diversidad de entretenimiento, m&uacute;sica y el sonido del mar acompa&ntilde;ado por una noche estrellada. Prueba tu suerte en los incre&iacute;bles <strong>casinos</strong> tales como Carnaval, Diamond y Veneto. &nbsp;Escucha m&uacute;sica fant&aacute;stica, baila y saborea un rico c&oacute;ctel en <strong>bares</strong> y <strong>clubes nocturnos</strong> como Emporio Curacao, Club Vanilla y 27 Bar &amp; Terrace. </p>',
            'image' =>"things-to-do-in-curacao-b.jpg",
            'icon' =>  asset("img/icon-night-life.png")
        ],
        2 => [
            'title' => 'Shopping',
            'descriptions' => '<p>Prep&aacute;rate para ir de <strong>compras en Curazao</strong>, donde el duty-free est&aacute; presente por doquier. Primero puedes visitar <strong>Punda</strong> y<strong> Otrobanda Breedestraat</strong> y conseguir estupendas ofertas en cualquiera de las diversas tiendas que encontrar&aacute;s all&iacute;. <strong>Mambo Beach Boulevard</strong> te presenta un concepto innovador que combina perfectamente la mejor playa de Curacao, compras incre&iacute;bles, restaurantes y entretenimiento. <strong>Promenade Shopping Center</strong> es un lugar donde encontrar&aacute;s todo lo que buscas y de marcas de calidad, la mayor&iacute;a de ellas europeas. </p>',
            'image' => "things-to-do-in-curacao-c.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],
        3 => [
            'title' => 'Lugares Históricos',
            'descriptions' => '<p>La lista de sitios hist&oacute;ricos y lugares de inter&eacute;s de Curazao es lo suficientemente larga para mantenerte entretenido durante tus vacaciones en esta paradisíaca isla. Puedes comenzar paseando por Willemstad para visitar el <strong>Distrito Hist&oacute;rico, Punda y Otobanda</strong>, y luego visitar la <strong>Sinagoga Mikve Israel-Emanuel</strong>, en el centro de Willemstad, que es una visita obligada para todos los turistas que llegan a Curacao. Desde all&iacute;, ve al <strong>Fuerte Amsterdam</strong>, un lugar construido para proteger la ciudad cuando comenzaba a crecer d&eacute;cadas atr&aacute;s, y ahora alberga el<strong> Palacio de Gobierno.</strong></p>',
            'image' => "things-to-do-in-curacao-d.jpg",
            'icon' =>  asset("img/icon-historial-site.png")
        ],
        4 => [
            'title' => 'Atracciones',
            'descriptions' => '<p>Durante tus vacaciones en Curazao definitivamente encontrar&aacute;s muchos lugares que no te puedes perder, por ejemplo, puedes ir al <strong>Mercado Flotante</strong> y disfrutar de una fiesta de colores y una gran variedad de productos frescos tra&iacute;dos a la isla desde diferentes puntos del Caribe en barcos pesqueros. Luego puedes visitar <strong>Queen Emma Pontoon</strong> <strong>Bridge</strong>, ya que est&aacute; muy cerca del mercado. Y si quieres ver algunas atracciones en la playa, tienes que visitar <strong>Klein Curacao</strong>, una isla sin pobladores donde el buceo, la fiesta, etc., ser&aacute;n una gran aventura. </p>',
            'image' => "things-to-do-in-curacao-e.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],
        5 => [
            'title' => 'Lugares de Interés',
            'descriptions' => '<p>Curacao te invita a explorar sus maravillas naturales tales como el <strong>Parque Nacional Shete Boka</strong> y el <strong>Parque Nacional Christoffel</strong>, dos lugares majestuosos y tranquilos que tienen mucho que ofrecer a los amantes de la naturaleza. Y en esa misma l&iacute;nea te recomendamos que visites las <strong>Cuevas de Hato</strong> que se formaron hace millones de a&ntilde;os bajo el mar, y que tienen incre&iacute;bles tesoros para tus ojos. Pero si quieres conocer acerca de los incre&iacute;bles animales de la isla, entonces debes ir a la<strong> Granja de Avestruces Curazao</strong> y al <strong>Curacao Sea Aquarium.</strong></p>',
            'image' => "things-to-do-in-curacao-f.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ]
    ],
    'food' => [
        'title' => 'Experiencia Culinaria En Curacao',
        'description' => 'Los colores y el sabor de Curacao le darán la bienvenida en cualquiera de los diferentes restaurantes que cuentan con los mejores y más originales platos de la cocina nacional tradicional con sabor criollo. También disfrutarás del pescado y los mariscos más frescos cocinados a la parrilla para ti, finos cortes de carne, deliciosas ensaladas, así como delicias internacionales tales como el sushi. Prepárate para saborear un poco de Curacao a través de las muchas delicias disponibles para que disfrutes de un típico "snek" mientras saboreas una copa del famoso licor de Curacao para mejorar tu experiencia.',
        'image' => "curacao-regional-food.jpg",
    ],
    'resorts' => [
        #'title' => 'Resorts en Curacao',
        #'description' => 'Nuestros impecables resorts en primera línea de playa en Curacao te permitirán descubrir esta hermosa isla caribeña, donde encontrarás no sólo playas increíbles sino también una rica cultura, actividades para todos y el mejor lugar para pasar esas vacaciones de playa que nunca olvidarás.',
        0 => [
            'slug'=>'the-royal-sea-aquarium',
            'name'=>'The Royal Sea Aquarium',
            'url' => '/es/hoteles-de-playa/the-royal-sea-aquarium',
            'img'=> asset('img/resorts/the-royal-sea-aquarium/the-royal-sea-aquarium-c.jpg'),
            //Resorts por destino
            'title'=>'The Royal Sea Aquarium',
            'description'=>'The Royal Sea Aquarium Resort, un hotel hermoso y único en el corazón de Curaçao sobre un islote rodeado de las aguas caribeñas, da la bienvenida a viajeros deseando paz y días en la naturaleza. Disfrute las bellas playas, una rica herencia cultural y buceo de primera en impresionantes paisajes submarinos.',
            'stars'=>'5',
        ],        
    ],
    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
        2 => __('specials/special-3')
    ],
    'url_offers'=>lang_url("/es/destinos-de-playa/curacao/ofertas-de-hoteles-en-curacao"),
    'url_resorts'=>lang_url("/es/destinos-de-playa/curacao/los-mejores-hoteles-de-playa-en-curacao"),    
];