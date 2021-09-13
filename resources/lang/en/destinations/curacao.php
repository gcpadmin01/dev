<?php
return [
    'seo'=>[
        'title'=>'Best beach things to do in Curacao Island | Royal Reservations',
        'metadescription'=>'The natural marvels of the island are present in the beaches, the national parks, the Sea Aquarium and surroundings. You have a lot of things to do when in Curacao Island vacations.',
    ],     
    'title' => 'Curacao', # Titulo del destino
    'title_sec' => 'Things to do in Curacao', # Titulo del destino
    'slug' => lang_url("/beach-destinations/curacao/things-to-do-in-curacao"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">The charming island of Curacao emerges from the beautiful waters of the Caribbean to take travelers on a cultural merge of the European and the Caribbean heritage. Combining an attractive offer of super fun and entertaining water and land activities, amazing beaches, a delightful cuisine, great duty-free shopping and a landscape of colorful lined-up buildings heritage of the Dutch past colonial times, Curacao Island will amaze its visitors through the great array of attractions, both natural and men-built.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">To make the most of your Caribbean family vacations, stay at The Royal Sea Aquarium Resort in Curacao, an excellent family resort offering superb Accommodations Only and Bed &amp; Breakfast plans, that will bring you some of the most relaxing days in its comfortable suites and villas offering amazing views, as well as through the great amenities and services provided all along its impeccable facilities. Besides it is located right next to the Curacao Sea Aquarium! Book now through Royal Reservations and get excellent vacation deals to discover Curacao at your own pace.</p>', # Descripción del destino
    'main_photo' => asset("img/curacao/curacao-beach-resort-a.jpg"),
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Curacao',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'Let yourself be enchanted by Curacao, its wonderful Caribbean beaches and colorful streets full of culture and amazing activities.',
    # Contenido de la pagina del destino

    'content' => '<p>Best known for its amazing <strong>beaches</strong> and a great extension of coral reefs, home to numerous marine flora and fauna species, <strong>Curacao</strong> is a beautiful Caribbean island bathed by the rays of the sun all year round and a calm blue sea. The capital city, Willemstad, is surrounded by Dutch architecture beauty in pastel colors, and there are so many <strong>attractions</strong> and <strong>activities</strong> such as visiting the famous Liquor Distillery or the Curacao museums.</p>

    <p>The <strong>natural marvels</strong> of the island are also present in national parks like Christoffel Park and Seher Boka Park. But if you are seeking for some entertainment, then head to the Curacao Sea Aquarium which is one of the few in the world to create natural environments for its marine creatures. Of course, you will also find a great deal of <strong>boutiques</strong> and souvenir <strong>stores</strong>, as well as excellent international and traditional <strong>restaurants</strong>.</p>

    <p><strong>Royal Reservations</strong> takes you to the heart of Curacao!</p>',

    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-curacao-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-curacao.jpg':'img/beach-destination-curacao.jpg'),

    'about' => [
        'self' => 'About Curacao',
        'uselful' => [
            'money' => 'Guilders - US Dollars',
            'language' => 'English',
            'weather' => 'Sunny - Warm',
            'power_socket' => '120V / Plugs type A/B',
            'cell-phone-service' => 'Cell Phone Service'
        ]
    ],
    'things_to_do' => [
        0 => [
            'title' => 'Beaches',
            'descriptions' => '<p>In Curacao you will always find the perfect beach to lie back and relax, and also to do incredibly fun water activities.<strong> Seaquarium Beach </strong>is a beautiful pristine beach surrounded by shops, restaurants and bars, perfect for families to visit during the day, and at night you can enjoy movie nights and concerts. <strong>Playa Forti </strong>is perfect to spend some time on, swim and then have a good snack and a dish of the Creole cuisine. <strong>Playa Kenepa/Knip Beach </strong>will be your favorites to swim while &nbsp;admiring the stunning views.</p>',
            'image' => "things-to-do-in-curacao-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],

        1 => [
            'title' => 'Nightlife',
            'descriptions' => '<p>Welcome to the vibrant n<strong>ightlife </strong>of <strong>Curacao</strong>. At night, you will witness how everything comes alive when the sun goes down, making way to a great diversity of <strong>entertainment</strong>, music and the sound of the sea accompanied by the starry night. Roll the dices at the incredible <strong>casinos</strong> such as Carnaval, Diamond and Veneto. &nbsp;Listen to great music, dance and have a tasty cocktail at <strong>bars and clubs</strong> like Emporio Curacao, Club Vanilla and 27 Bar &amp; Terrace. Have a nice chat with a new friend at Miles Jazz Caf&eacute; or at Iguana Cafe. Go to the <strong>movies</strong> or visit the <strong>theater</strong> to enjoy different shows and performances.</p>',
            'image' => "things-to-do-in-curacao-b.jpg",
            'icon' =>  asset("img/icon-night-life.png")

        ],
        2 => [
            'title' => 'Shopping',
            'descriptions' => '<p>Get ready for a fabulous shopping in Curacao, where duty-free is almost everywhere. First you can take a walk on <strong>Punda</strong> and <strong>Otrobanda&rsquo;s Breedestraat </strong>and get great deals at any of the many shops you will find there. <strong>Mambo Beach Boulevard </strong>presents tourists with an innovative concept combining perfectly the best beach of Curacao, amazing shopping, dining and entertainment. At <strong>Renaissance Mall &amp; Rif Fort </strong>you will have a myriad of great options in jewelry, clothing, accessories, beauty products and more.</p>',
            'image' => "things-to-do-in-curacao-c.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],
        3 => [
            'title' => 'Historic Sites',
            'descriptions' => '<p>The list of historic sites and landmarks of Curacao is long enough to keep you entertained during your vacations in this paradise island. You can begin by strolling around Willemstad to visit the <strong>Historic District</strong>, Punda and Otobanda, or <strong>Mikve Israel-Emanuel Synagogue</strong>, downtown Willemstad, which is a must for all tourists. From there, head to <strong>Fort Amsterdam</strong>, a place built to protect the city many decades ago, and now home to the <strong>Governor&rsquo;s Palace</strong>.<strong> &nbsp;</strong>Another interesting spot is the <strong>Dutch Reformed Church </strong>that will immediately call your attention for it has a British cannonball embedded in it.</p>',
            'image' => "things-to-do-in-curacao-d.jpg",
            'icon' =>  asset("img/icon-historial-site.png")
        ],

        4 => [
            'title' => 'Attractions',
            'descriptions' => '<p>During your vacation in Curacao, there are definitively many must-visit attractions that cannot be missed, for instance you can go to the <strong>Floating Market </strong>and enjoy a feast of colors and a variety of fresh products brought to the island by different points of the Caribbean on fishing boats. Then you can visit <strong>Queen Emma Pontoon Bridge</strong>, for it is really close to the market. And if you want to see some beach attractions, you have to visit <strong>Klein Curacao</strong>, an island with no population where diving, partying, etc., is always a great adventure. </p>',
            'image' => "things-to-do-in-curacao-e.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],

        5 => [
            'title' => 'Interesting Sites',
            'descriptions' => '<p>The paradise island of Curacao invites you to explore its natural marvels such as <strong>Shete Boka National Park </strong>and <strong>Christoffel National Park </strong>two majestic and quiet places that have a lot to offer for nature lovers. And in that same line we recommend you to visit the <strong>Hato Caves</strong> which were formed millions of years ago under the sea, and which have incredible treasures for your eyes. But if you want to know the amazing animals of the island then you should go to the<strong> Curacao Ostrich Farm </strong>and the <strong>Curacao Sea Aquarium </strong>to make friends with their incredible creatures and learn about them. </p>',
            'image' => "things-to-do-in-curacao-f.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ]
    ],

    'food' => [
        'title' => 'Culinary Experience in Curacao',
        'description' => 'The colors and savor of <strong>Curacao</strong> will welcome you at any of the various <strong>restaurants </strong>boasting the best and most original dishes from the national traditional with creole flavor cuisine. There, you will also find the freshest of fish and seafood cooked on a barbeque, fine cuts of meat, delicious salads as well as international delights like sushi. Get ready to taste a bit of Curacao through the many delicacies available for you to enjoy a nice typical "snack" while sipping a glass of the famous Curacao liqueur to enhance your experience.',
        'image' => "curacao-regional-food.jpg",
    ],
    'resorts' => [
        #'title' => 'Resorts in Curacao',

        #'description' => 'Our impeccable beachfront resorts in St. Maarten will allow you to discover this beautiful Caribbean island, where you will find not only amazing beaches but also a rich culture, activities for everyone and the best place to spend your unforgettable beach vacations.',

        0 => [
            'slug'=>'the-royal-sea-aquarium',
            'name'=>'The Royal Sea Aquarium',
            'url' => '/beach-resorts/the-royal-sea-aquarium',
            'img'=> asset('img/resorts/the-royal-sea-aquarium/the-royal-sea-aquarium-c.jpg'),
            //seccion resorts por destino
            'title'=>'The Royal Sea Aquarium',
            'description'=>'The Royal Sea Aquarium Resort, a singular but beautiful hotel in the heart of Curacao over a platform on Caribbean waters, attracts travelers thirsting for peace and nature. Enjoy fine beaches, a rich cultural heritage and world-class diving across overwhelming underwater landscapes.',
            'stars'=>'4',            
        ],        
    ],

    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
        2 => __('specials/special-3')
    ],

    'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7987542.765539919!2d-73.60806879963344!3d12.16900623588096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e849dca0d03000b%3A0x6fe4811f5861c52b!2sCuracao!5e0!3m2!1sen!2smx!4v1529533458832',

    'url_offers'=>lang_url("/beach-destinations/curacao/vacation-special-offers-in-curacao"),
    'url_resorts'=>lang_url("/beach-destinations/curacao/the-best-beach-resorts-in-curacao"),
];