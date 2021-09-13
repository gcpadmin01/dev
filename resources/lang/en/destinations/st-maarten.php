<?php

return [
    'seo'=>[
        'title'=>'Sint Maarten Island, best things to do | Royal Reservations',
        'metadescription'=>'This magic island features the best of two great cultures, French and Dutch. Come on vacations and see the spectacular landscapes, the attractions, and the most beautiful beaches in the Caribbean. What are you waiting for?',
    ],     
    'title' => 'St. Maarten', # Titulo del destino
    'title_sec' => 'Things to do in St. Maarten', # Titulo del destino
    'slug' => lang_url("/beach-destinations/st-maarten/things-to-do-in-st-maarten"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Paradise and happiness come in the same small package&hellip; the beautiful island of St.Maarten. This amazing Caribbean destination will offer its visitors the best of two European cultures, the Dutch side and the French one, in combination with the beautiful Caribbean scenery. Discover the amazing beaches of St.Maarten, its culture and the warmth of its people, while enjoying the great array of land and water activities; do some of the best duty-free shopping of your life in the Dutch side, delight in the culinary experience of the French side of the island and live it up with the vibrant nightlife that this magnificent place offers.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Live this amazing blend of cultures, flavors and experiences up close! Enjoy your accommodations in St.Maarten at Simpson Bay Beach Resort &amp; Marina and The Villas at Simpson Bay Beach Resort, two family resorts with fabulous Accommodations Only and Bed &amp; Breakfast rate plans, superb amenities and attentive service. Book with Royal Reservations to get amazing vacation deals!</p>', # Descripción del destino

    'main_photo' => asset("img/st-maarten/st-maarten-beach-resort-a.jpg"),

    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'St. Maarten',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'With an obvious charm in the European style of Holland and France, in combination with the beauty of the Caribbean, St.Maarten is here for you.',
    # Contenido de la pagina del destino
    'content' => '<p>Where the Caribbean Sea meets the Atlantic Ocean, there you will find the beautiful island of <strong>St.Maarten</strong>. This magic island features the very best of two great cultures, French and Dutch, mixed with the warmth and colorful of the Caribbean. It boasts fine <strong>natural landscapes</strong>, attractions like the zoological and botanical garden or the Butterfly Farm, and more than 70 km of fantastic <strong>beaches</strong> ranging from quiet and secluded to those with a great array of water and land <strong>activities</strong> such as horseback riding along the bay, kite surfing, diving and more.</p>

    <p>But apart from all the activities and relaxation you will live at St.Maarten, you will also find lively spots such as casinos, duty free boutiques selling fine jewelry and liqueurs, amazing <strong>restaurants</strong> known by their fusion gastronomic offer and a vibrant <strong>nightlife</strong>.</p>

    <p>All these and more awaits you in <strong>St.Maarten</strong>!</p>',

    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-st-maarten-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-st-maarten.jpg':'img/beach-destination-st-maarten.jpg'),
    'about' => [
        'self' => 'About St. Maarten',
        'uselful' => [
            'money' => 'Guilders - US Dollars',
            'language' => 'Papiamento - English',
            'weather' => 'Sunny - Warm',
            'power_socket' => '220V / Plugs type E',
            'cell-phone-service' => 'Cell Phone Service',
        ]
    ],

    'things_to_do' => [
        0 => [
            'title' => 'Beaches',
            'descriptions' => '<p><strong>St. Maarten beaches</strong> are a true delight for the eye. Visitors will always find the perfect spot for that long desired relaxing time lying on the white sands of <strong>Mullet Bay beach</strong>, south of <strong>Cupecoy Beach</strong>, and its peaceful environment. <strong>Maho Beach</strong>, on the other hand, is a beautiful beach a bit more crowded than Mullet beach but with the fun that many tourists seek for; take that incredible picture of you &ldquo;touching&rdquo; a plane landing just meters above your head. Also, visit <strong>Simpson Bay beach </strong>and have a calm and quiet day of contemplation or dare to do some windsurfing in the blue waters of the Caribbean Sea.</p>',
            'image' => "things-to-do-in-st-maarten-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],
        1 => [
            'title' => 'Forts',
            'descriptions' => '<p>St.Maarten is not just about incredible beaches and the amazing Caribbean waters, along with all they have to offer, St.Maarten also has a great historic spot for those visitors wanting more than just relaxation. On this beautiful island, you will be able to visit 2 impressive <strong>forts</strong> and learn about its fabulous history. The first on the list is <strong>Fort Louis</strong> which was built in 1789 on a hill overlooking Marigot Bay, meant to defend the harbor warehouses from raids. The second is <strong>Fort Amsterdam</strong>, located on top of the peninsula and built in 1631; today it is an important bird area.</p>',
            'image' => "things-to-do-in-st-maarten-b.jpg",
            'icon' =>  asset("img/icon-forts.png")
        ],
        2 => [
            'title' => 'Downtown',
            'descriptions' => '<p>This amazing Caribbean island will give you two amazing vacation experiences in one, for its territory is divided into two beautiful and different cultures the <strong>Dutch</strong> one, <strong>St. Maarten/Sint Maarten</strong>, and the <strong>French</strong> side called <strong>Saint Martin</strong>. Both sides of this quaint island are just incredible and have a lot to offer, being the Dutch side the perfect shopping spot, whereas the French side is a paradise of the gourmet gastronomy. We can tell you that both are similar and incredibly rich in <strong>architecture</strong>, <strong>nightlife</strong>, <strong>culture</strong>, <strong>natural marvels</strong>, beautiful beaches and incredible activities for all ages. &nbsp;</p>',
            'image' => "things-to-do-in-st-maarten-c.jpg",
            'icon' =>  asset("img/icon-downtown.png")
        ],
        3 => [
            'title' => 'Snorkeling',
            'descriptions' => '<p class="text"><strong>Snorkeling </strong>is going to be your favorite activity to do during your St. Maarten vacation, as this incredible island has an amazing snorkeling offer for experts and beginners who want to explore the bottom of the Caribbean Sea. Live a colorful experience while discovering the marvels of the sea through the flora and fauna of this beautiful paradise. Put on your snorkel, mask and fins and head to <strong>Mullet Bay </strong>beach on the southwest; then reach <strong>Cupecoy Beach</strong> to meet your new fish friends at the reef; and finally explore <strong>Dawn Beach</strong> waters to live a full snorkeling experience.</p>',
            'image' => "things-to-do-in-st-maarten-d.jpg",
            'icon' =>  asset("img/icon-diving-snorkel.png")
        ],
        4 => [
            'title' => 'Sailing',
            'descriptions' => '<p>St. Maarten is a splendorous Caribbean island with multiple water activities to do, and one of the most interesting and famous among visitors is <strong>sailing </strong>across the stunning blue of the Caribbean Sea. So, if you want to cast off the lines and set sail to a great adventure, take a trip on a stunning <strong>Catamaran</strong> or a <strong>luxury Yacht</strong> that will take you on a journey full of marvelous sunsets. You will find tours for all budgets and tastes, from the All Inclusive excursion to a trip with amazing snorkeling spots for you to discover the underwater treasures of the island.</p>',
            'image' => "things-to-do-in-st-maarten-e.jpg",
            'icon' =>  asset("img/icon-sailing.png")
        ],
        5 => [
            'title' => 'Shopping',
            'descriptions' => '<p>There is no doubt that a trip is not complete without a good shopping and in St. Maarten you will definitely have one of the best ones. If you are in the mood for a new ring or a fabulous necklace, visit <strong>DK Gems International</strong>, it will be your favorite spot if you want to get beautiful fine jewelry. <strong>Porto Cupecoy</strong>, its fine boutiques and homegrown great shops will provide you with that piece of clothing, accessories, or jewelry and more, you are looking for. And <strong>LeWest Indies</strong>, located on Fort Louis&rsquo; hill, will take you to live a glorious experience in the world of fashion and luxury.</p>',
            'image' => "things-to-do-in-st-maarten-f.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],
    ],

    'food' => [
        'title' => 'Culinary Experience St Maarten',
        'description' => '<p class="text">For breakfast, lunch or dinner, with the varied <strong>St. Maarten</strong> gastronomic offer you will find exactly what you seek for anytime of the day. Over 300 <strong>restaurants </strong>and &ldquo;lolos&rdquo; bringing together the best of a multicultural culinary mix through dishes such as those from the Dutch, French, International, Ethnic and Creole cuisine, in combination with the amazing flavors of the Caribbean. Let your taste buds dance to the rhythm of our Caribbean flavors.</p>',
        'image' =>"st-maarten-regional-food.jpg",
    ],

    'resorts' => [

        #'title' => 'Resorts in St Maarten',

        #'description' => 'Our impeccable beachfront resorts in St. Maarten will allow you to discover this beautiful Caribbean island, where you will find not only amazing beaches but also a rich culture, activities for everyone and the best place to spend your unforgettable beach vacations.',

        0 => [

            'slug'=>'the-villas-at-simpson-bay-resort',

            'name'=>'The Villas at Simpson Bay',

            'url' => 'beach-resorts/the-villas-at-simpson-bay-resort',

            'img'=> asset('img/resorts/the-villas-at-simpson-bay-resort/the-villas-at-simpson-bay-resort-d.jpg'),

            //Resorts por destino

            'title'=>'The Villas at Simpson Bay Beach Resort & Marina',

            'description'=>'The Villas at Simpson Bay Beach Resort & Marina honors its excellence for hospitality with great amenities on the front row for spectacular Caribbean sunsets. The resort is ideally located on the beach among St.Maarten island’s most popular spots and malls.',

            'stars'=>'4',

        ],

        1 => [

            'slug'=>'simpson-bay-resort',

            'name'=>'Simpson Bay Resort',

            'url' => 'beach-resorts/simpson-bay-resort',

            'img'=> asset('img/resorts/simpson-bay-resort/simpson-bay-resort-d.jpg'),

            //resorts por destino

            'title'=>'Simpson Bay Beach Resort & Marina',

            'description'=>'Located in a sheltered beach of the island of St. Maarten, Simpson Bay Beach Resort & Marina, is near to become your favorite choice to experience the best of two Caribbean countries in one: Dutch Sint Maarten and French Saint Martin.',

            'stars'=>'4',            

        ],      

    ],

    'specials' => [

        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera

        1 => __('specials/special-2'),

        2 => __('specials/special-3'),

        3 => __('specials/special-4'),

    ],

    #'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242761.16297057696!2d-63.22189480534842!3d18.064925636145254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c0e6f01422c120d%3A0x3de47fcaa959820e!2sSaint+Martin!5e0!3m2!1sen!2smx!4v1529533048396',
    'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d121398.75775197905!2d-63.12913883392278!3d18.038602590503544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c0e6e62d6f890c3%3A0x728b2cc226338f42!2sSint+Maarten!5e0!3m2!1ses!2smx!4v1540918878623',



    'url_offers'=>lang_url("/beach-destinations/st-maarten/vacation-special-offers-in-st-maarten"),

    'url_resorts'=>lang_url("/beach-destinations/st-maarten/the-best-beach-resorts-in-st-maarten"),

];