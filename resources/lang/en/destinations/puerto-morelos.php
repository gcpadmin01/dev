<?php
return [
    'seo'=>[
        'title'=>'Things to do in Puerto Morelos village | Royal Reservations',
        'metadescription'=>'Puerto Morelos boasts some of the most tranquil beaches for all family members. It is a little fishing village where you could find local gastronomy, artesanal shopping, natural attractions and much more.',
    ],     
    'title' => 'Puerto Morelos', # Titulo del destino
    'title_sec' => 'Things to do in Puerto Morelos', # Titulo del destino
    'slug' => lang_url("/beach-destinations/puerto-morelos/things-to-do-in-puerto-morelos"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Puerto Morelos is a quaint fishing village where it will be easy to find the peace and relaxation that many visitors seek, to leave behind all the worries of work and daily life. It will provide tourists with charming strolls and bicycle rides around the streets of this small town. Also, it has some of the nicest blue waters and white sand beaches of the Caribbean, which makes them perfect for beach and water activities with family and friends. It boasts delicious international and Mexican cuisine restaurants, small cafeterias and bakeries; and if you are more into going out for a drink, here you will find a bohemian and relaxed ambiance.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Enjoy your visit to this quintessential sleepy village in the Mexican Caribbean in one of the jewels of this beach destination, Grand Residences Riviera Cancun, a luxury family resort offering fantastic All Inclusive, Accommodations Only and Bed &amp; Breakfast rate plans, with lavish accommodations, exclusive amenities and superb services. Book your fabulous stay with Royal Reservations and obtain magnificent vacation deals and benefits!</p>', # Descripción del destino
    'main_photo' => asset("img/puerto-morelos/puerto-morelos-beach-resort-a.jpg"),
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Puerto Morelos',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'In this picturesque fishing village you will relax in front of the sea, while enjoying its delicious gastronomy and unique landscapes.',
    # Contenido de la pagina del destino
    'content' => '<p>Best known for being a quaint sleepy fishing village, <strong>Puerto Morelos</strong> boasts some of the best <strong>beaches</strong> of the Mexican Caribbean to relax and have a good time; and Playa Azul, Playa Ojo de Agua as well as Playa Bonita are three of its beautiful jewels.</p>

    <p>Although small, this friendly town has hundreds of activities to do, from <strong>shopping</strong> at any of the two flea markets and small boutiques offering an excellent and warm service; visiting amazing <strong>natural attractions</strong> as the Puerto Morelos National Coral Reef Park, the Botanical Garden and touring the Cenote Route (Ruta de los Cenotes); to walking its streets and enjoy a nice bohemian afternoon to the sound of the waves, at the plaza surrounded by traditional cafeterias, restaurants, etc. Another activity you must do to know more about the Maya culture is visiting the <strong>archaeological sites</strong> near Puerto Morelos, such as Chichen Itza and El Meco.</p>

    <p>Delve into Puerto Morelos good vibes, with <strong>Royal Reservations</strong>!</p>',

    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-puerto-morelos-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-puerto-morelos.jpg':'img/beach-destination-puerto-morelos.jpg'),
    'about' => [
        'self' => 'About Puerto Morelos',
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
            'descriptions' => '<strong>Puerto Morelos</strong> is a small and quiet village facing the beautiful Caribbean Sea. Thus, its <strong>beaches</strong> are calm and relaxing, simply the best environment for people who don&rsquo;t like big crowds or a noisy environment. If you seek for relaxation on the beach but you also want to do an activity or two, then we suggest you to visit <strong>Playa Bonita</strong> for there you will enjoy swimming, snorkeling and windsurfing. Another beach you can go to is <strong>Playa Ojo de Agua</strong> which is incredible to play volleyball, doing scuba diving or just relax lying on the white soft sand. Finally, on <strong>Punta Brava </strong>adventurers will find the best waves to practice some good surfing or kitesurfing.',
            'image' => "things-to-do-in-puerto-morelos-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],

        1 => [

            'title' => 'Shopping',

            'descriptions' => 'Whether you want to take a nice souvenir home for your family and friends, or just buy nice traditional clothing from the region and a handicraft for yourself, <strong>Puerto Morelos</strong> two quaint <strong>flea markets</strong> in incredible typical Maya shacks, as well as some small but good <strong>boutiques</strong>, located on Av. Javier Rojo G&oacute;mez and its surroundings, will welcome you with its great service and a myriad of interesting items. The best thing is that you can barter and get an excellent deal or find a great bargain! Come to Puerto Morelos to have a great day of <strong>shopping</strong> and relaxation by the sea.',
            'image' => "things-to-do-in-puerto-morelos-b.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],

        2 => [

            'title' => 'Attractions',
            'descriptions' => 'This beautiful and peaceful town maybe small, but it features a great deal of <strong>attractions</strong> for every visitor to have a good time.<strong>Puerto Morelos</strong> natural marvels will amaze you through places as the <strong>National Coral Reef Park </strong>offering great <strong>snorkeling</strong> and <strong>diving</strong> activities, as well as two amazing cenotes Las Mojarras and Verde Lucero; also, you can visit <strong>Puerto Morelos Botanical Garden </strong>to learn about the decorative and medicinal plants of the area, and see a Mayan chiclero&rsquo;s camp on an amazing jungle walk. And that&rsquo;s not all, since there is also an impressive cenotes corridor called the &ldquo;Cenotes Route&rdquo; (Ruta de los Cenotes), with underwater rivers interconnected for you to discover them all.',
            'image' => "things-to-do-in-puerto-morelos-c.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],

        3 => [

            'title' => 'Archaeological Sites',
            'descriptions' => 'Puerto Morelos is the ideal place to live a relaxing vacation in the Riviera Maya, and it offers all kinds of activities to have a great time. One of the musts during your stay in this beautiful village is visiting the <strong>archaeological sites</strong> near <strong>Puerto Morelos</strong>, where the culture and history lovers will be amazed by monumental buildings and temples. <strong>Chichen Itza</strong> is one of these magic sites you have to see to believe; we are sure <strong>The Castle</strong> and the <strong>Mayan Ball Game</strong> will be of your favorites. Also, go to <strong>El Meco</strong>, just 48 minutes from the village and right in front of Isla Mujeres, and discover its amazing structures like <strong>El Castillo</strong>.',
            'image' => "things-to-do-in-puerto-morelos-d.jpg",
            'icon' =>  asset("img/icon-archaelogical-site.png")
        ],

        4 => [
            'title' => 'Places of Interest',
            'descriptions' => 'You will never get bored in <strong>Puerto Morelos</strong> with the array of interesting places you will find around this beautiful fishing village. <strong>El Faro Inclinado </strong>is hallmark to Puerto Morelos, and it is said that many years ago a hurricane tilted it and afterwards they couldn&rsquo;t tear it down with machines&hellip; it arrived to stay. The <strong>Parroquia de San Jos&eacute; Obrero</strong>, along with the <strong>plaza</strong> and the <strong>bandstand</strong>, are great places to learn about the religious art of the village, contemplate the blue sea and from there head to any of the restaurants or cafeterias around these three beautiful spots.',
            'image' => "things-to-do-in-puerto-morelos-e.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ],
        5 => [
            'title' => 'The Village',
            'descriptions' => '<strong>Puerto Morelos</strong> will be the perfect spot for those travelers seeking for peaceful and relaxing days by the sea. This small village is not only warm due to its Caribbean climate, but also to the nice and always smiling treatment of its people, which in combination with a bohemian atmosphere, a great deal of international and <strong>seafood restaurants</strong>, <strong>bars </strong>and <strong>cafeterias</strong> all around this beautiful quaint town provide visitors with an amazing day and <strong>nightlife</strong> experience. Whether by bicycle or on foot, discover every corner of Puerto Morelos during your vacation in the Riviera Maya.',
            'image' => "things-to-do-in-puerto-morelos-f.jpg",
            'icon' =>  asset("img/icon-nightlife.png")
        ],
    ],

    'food' => [
        'title' => 'Culinary Experience in Puerto Morelos',
        'description' => 'This small magic fishing village will not disappoint you when it comes to fresh fish and seafood. At <strong>Puerto Morelos</strong> you will taste here some of the finest sea and &nbsp;international cuisine dishes, for aside from proud fishermen bringing the freshest of the sea to your table, there are foreign chefs and cuisine lovers eager to serve you delicacies from the Uruguayan, Mediterranean, Italian, French and naturally delicious Mexican food <strong>restaurants</strong>.',
        'image' => "puerto-morelos-regional-food.jpg",
    ],
    'resorts' => [
        #'title' => 'Resorts in Puerto Morelos',
        #'description' => 'Stay at our luxury family resort, proud member of The Leading Hotels of the World, located right in front of the sea and enjoy the views at this small quaint fishing village, that has an amazing array of activities and a calm environment for those visitors looking for the ultimate relaxation.',

        0 => [

            'slug'=>'grand-residences-riviera-cancun',
            'name'=>'Grand Residences',
            'url' => 'beach-resorts/grand-residences-riviera-cancun',
            'img'=> asset('img/resorts/grand-residences-riviera-cancun/grand-residences-riviera-cancun-c.jpg'),
			// Resorts por destino
	        'title'=>'Grand Residences Riviera Cancun Resort',
            'description'=>'Grand Residences Riviera Cancun, located in the heart of the Riviera Maya, is the crown of our family offering signature hospitality and services in an exclusive pristine hideaway. It was recently ranked #2 on the Top 25 Luxury Hotels of Mexico by TripAdvisor.',
            'stars'=>'5',           
        ]         
    ],

    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
        2 => __('specials/special-3'),
        3 => __('specials/special-4'),
    ],

    'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d477262.3776124166!2d-87.15501377229062!3d20.847355599323674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4e8843a99cfb47%3A0x2dad4e36cb9aad0e!2sPuerto+Morelos+Dock!5e0!3m2!1sen!2smx!4v1529533259900', 



    'url_offers'=>lang_url("/beach-destinations/puerto-morelos/vacation-special-offers-in-puerto-morelos"),

    'url_resorts'=>lang_url("/beach-destinations/puerto-morelos/the-best-beach-resorts-in-puerto-morelos"),    

];