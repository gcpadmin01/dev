<?php

return [
    'seo'=>[
        'title'=>'Best things to do in Playa del Carmen | Royal Reservations',
        'metadescription'=>'Playa del Carmen will be your favorite place for vacationing anytime of the year. With its white sand beaches and the tranquil waters, the beaches are perfect for family vacations with the little ones.',
    ],     
    'title' => 'Playa del Carmen', # Titulo del destino
    'title_sec' => 'Things to do in Playa del Carmen', # Titulo del destino
    'slug' => lang_url("/beach-destinations/playa-del-carmen/things-to-do-in-playa-del-carmen"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Located in the heart of the Mexican Caribbean, Playa del Carmen and its cosmopolitan atmosphere is one of the favorite beach destinations of assiduous travelers in search of pristine blue waters, beautiful soft sand beaches, day and night-entertainment all along the Fifth Avenue, great shopping and so much more&hellip; If you come here, be ready to have a wonderful stroll around this great vacation destination!</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">For you to explore and enjoy every piece of &ldquo;Playa&rdquo;, the perfect haven of relaxation and comfort with amazing views of the Caribbean Sea is available at Royal Reservations, so that you spend a vacation like no other. In our beachfront family resort The Royal Haciendas All Inclusive, you will experience the coziness of your suite or villa with all you need to have unwinding moments of rests and in the rest of the resort&rsquo;s premises you will find incredible amenities. By booking your incredible accommodations with us, you will get magnificent vacation deals to spend a memorable family vacation in Playa del Carmen.</p>', # Descripción del destino
    'main_photo' => asset("img/playa-del-carmen/playa-del-carmen-beach-resort-a.jpg"),
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Playa del Carmen',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'A world class tourist destination, with the best beach atmosphere and lots of fun... Playa del Carmen offers you that and more.',
    # Contenido de la pagina del destino
    'content' => '<p>Playa del Carmen will be your favorite place for vacationing anytime of the year once you step on its beautiful beaches with soft sand and an incredible blue sea. Places like Mamita&rsquo;s beach and its 2 beach clubs, and the one in front of Parque Fundadores are some good spots to have a nice tan. We also have to mention Playa&rsquo;s nightlife, for party is all over the place when the night comes at Coco Bongo, Palazzo and the bars you will find.</p>

    <p>One of the most popular activities in Playa del Carmen is walking along the famous 5th Avenue to have a great shopping day at the small boutiques, the Quinta Alegr&iacute;a and Calle Coraz&oacute;n Shopping Malls; these places have many duty free items for all tastes. Also visit great attractions as the 3D Museum of Wonders and the amazing theme parks Xel-Há, Xplor, etc.</p>

    <p>Finally, you cannot miss visiting some of the archaeological sites near Playa del Carmen, like Tulum ruins (aka Zam&aacute;) or San Gervasio on Cozumel Island.</p>

    <p>Playa del Carmen, your perfect hideaway!</p>',

    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],

    'block_image' => asset("img/beach-destination-playa-del-carmen-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-playa-del-carmen.jpg':'img/beach-destination-playa-del-carmen.jpg'),
    'about' => [
        'self' => 'About Playa del Carmen',
        'uselful' => [
            'money' => 'Mexican Pesos - US Dollars',
            'language' => 'Spanish - English',
            'weather' => 'Sunny - Warm',
            'power_socket' => '110 V - Plug Type A/B',
            'cell-phone-service' => 'Mobile Services AT&T, Telcel, Movistar & Virgin'
        ]
    ],

    'things_to_do' => [
        0 => [
            'title' => 'Beaches',
            'descriptions' => 'When it comes to white sand beaches, Playa del Carmen boasts some of the best in the Caribbean, and of course a dazzling blue sea. There are beaches for all tastes, so whether you come with your family, your friends or on a romantic date, you definitely will enjoy being under the sun on Mamita’s Beach and its two fabulous beach clubs; also, Parque Fundadores beach is a great option for families that come with kids for they can play both in the park and on the white sandy beaches of this spot, besides it has a handicap access making ideal for everyone. And last but not least, you will love Playa Maroma and its crystal clear waters and soft sand.',
            'image' => "things-to-do-in-playa-del-carmen-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],

        1 => [
            'title' => 'Nightlife',
            'descriptions' => 'When the sun goes down in Playa del Carmen a vibrant nightlife comes to life in the various cantinas, bars and nightclubs available for those who like living at night and dancing until the morning comes. Especially for you, we would recommend clubs such as Palazzo, due to the great ambiance and the good music they play. Another incredible place to spend the night dancing and having fun is La Vaquita Playa; and of course, we couldn’t leave Coco Bongo Playa del Carmen out of the list, for we are sure you will want to come back the next night to see its amazing shows and enjoy the great atmosphere.',
            'image' => "things-to-do-in-playa-del-carmen-b.jpg",
            'icon' =>  asset("img/icon-night-life.png")
        ],

        2 => [
            'title' => 'Shopping',
            'descriptions' => 'From the moment you arrive to Playa del Carmen you will feel the cosmopolitan atmosphere of one of the most famous streets there, we are talking about the 5th Avenue and all the shopping options that are available for you. It is as simple as walking along this amazingly versatile corridor to find all kinds of stores ranging from those selling the traditional handicrafts and arts, souvenirs, to upscale boutiques and shopping malls offering some duty free items, clothes, fine jewelry, perfumes, etc., like Quinta Alegría and Calle Corazón. Have a great shopping day in Playa del Carmen.',
            'image' => "things-to-do-in-playa-del-carmen-c.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],

        3 => [
            'title' => 'Attractions',
            'descriptions' => 'Aside from catching a great tan on the white sand beaches and enjoying the cool breeze, in Playa del Carmen you will find a myriad of activities and attractions suitable for every taste and all ages. One of the most popular activities you will be able to do anytime is touring the 5th Avenue in search of good music, great restaurants, boutiques and the best Caribbean ambiance. But if you want to live some adventures then you have to visit the theme parks near Playa del Carmen such as Xelha park, Xplor and Xenses, among others.',
            'image' => "things-to-do-in-playa-del-carmen-d.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],

        4 => [
            'title' => 'Archaeological Sites',
            'descriptions' => 'If you are an amateur explorer looking for new treasures to discover, then you must visit the impressive archaeological sites near Playa del Carmen. Take a good look of the amazing buildings you will find at the Tulum ruins, also known as Zamá, located right in front of the Caribbean Sea, and then, head to Cozumel Island on a ferry trip that will take you to San Gervasio archaeological site or go a little farther and get to Uxmal, a small but extraordinary World Heritage site you have to see to believe.',

            'image' => "things-to-do-in-playa-del-carmen-e.jpg",
            'icon' =>  asset("img/icon-archaelogical-site.png")
        ],
        5 => [
            'title' => 'Places of Interest',
            'descriptions' => 'Lying on the beach and swimming the blue Caribbean waters of Playa del Carmen is fabulous but make some time on your vacation timetable to visit some of the most interesting places of this beautiful destination. For example, have a blast at the 3D Museum of Wonders, taking pics and interacting with the amazing pieces of the place; visit the Xaman-Há Aviary to learn about the exotic Mexican birds and plants of the Peninsula; and have a nice calm afternoon at Parque Fundadores from where you will also be able to contemplate the sea at the end of a great day.',
            'image' => "things-to-do-in-playa-del-carmen-f.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ]

    ],
    'food' => [
        'title' => 'Culinary Experience in Playa del Carmen',
        'description' => 'Traditional Mexican, Yucatecan, Asian, Italian, Veggie… whatever you can imagine you will find it in Playa del Carmen through its myriad of interesting and tasteful restaurants. It doesn’t matter if you are walking the 5th Avenue, wandering on the beach or touring the different streets of this cosmopolitan destination, you will find the perfect venue with amazing views, an attentive service, great food and a delicious dessert to end on a high note your culinary experience in Playa del Carmen.',
        'image' => "playa-del-carmen-regional-food.jpg",
    ],

    'resorts' => [
        #'title' => 'Resorts in Playa del Carmen',

        #'description' => 'Our outstanding beachfront resort, located on one of the best beaches in Playa del Carmen, will provide you with the relaxation and fun activities suitable for the whole family to enjoy. Go out and explore this beautiful destination and live all the adventures that await you.',

        0 => [

            'slug'=>'the-royal-haciendas',
            'name'=>'The Royal Haciendas',
            'url' => 'beach-resorts/the-royal-haciendas',
            'img'=> asset('img/resorts/the-royal-haciendas/the-royal-haciendas-c.jpg'),
            //seccion resorts por destino
            'title'=>'The Royal Haciendas All Suites Resort & Spa',
            'description'=>'Experience the elegance of Old Mexico at The Royal Haciendas and indulge yourself in Playa del Carmen paradise. Relax in the spacious fully equipped villas with the sophistication and services of a world-class resort with a Mexican hacienda feel.',
            'stars'=>'4.5',
        ]       

    ],

    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
    ],

    'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477866.06505541573!2d-87.32264577229384!3d20.656204805769384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e5d3de4056b25%3A0xc5364db33407249!2sThe+Royal+Haciendas!5e0!3m2!1sen!2smx!4v1529533384498',

    'url_offers'=>lang_url("/beach-destinations/playa-del-carmen/vacation-special-offers-in-playa-del-carmen"),
    'url_resorts'=>lang_url("/beach-destinations/playa-del-carmen/the-best-beach-resorts-in-playa-del-carmen"),    

];