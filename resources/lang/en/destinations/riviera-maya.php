<?php

return [
    'seo'=>[
        'title'=>'Things to do in Riviera Maya | Royal Reservations',
        'metadescription'=>'Riviera Maya has all in one place, archaeological sites, shopping malls, the best luxury resorts, family beaches, and much more. Spend the perfect family vacations here and you will never regret it!',
    ],     
    'title' => 'Riviera Maya', # Titulo del destino
    'title_sec' => 'Things to do in Riviera Maya', # Titulo del destino
    'slug' => lang_url("/beach-destinations/riviera-maya/things-to-do-in-riviera-maya"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">A paradise in the Mexican Caribbean is waiting for you! The Riviera Maya will be your favorite vacation destination, because here you will find the rest, fun and relaxation you are looking for on your family vacations. Experience the harmonious atmosphere of this place where natural beauties like the white sand beaches and the cenotes, as well as a varied entertainment offer with theme parks and ecotourism tours, will be part of your daily adventures.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">The richness of the Riviera Maya is best lived in Grand Residences Riviera Cancun, a luxury family beachfront resort located in the heart of this amazing destination in the Mexican Caribbean. Experience the relaxation of your luxury suite or villa in All Inclusive, Accommodations Only or Bed &amp; Breakfast rate plan and enjoy the best amenities and excellent service in the magnificent facilities of this luxury resort in the Riviera Maya. Book your amazing stay in Grand Residences with Royal Reservations and get fantastic vacation deals and other great benefits.</p>', # Descripción del destino
    'main_photo' => asset("img/riviera-maya/riviera-maya-beach-resort-a.jpg"),
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Riviera Maya',

    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'The Riviera Maya introduces you with its idyllic beaches and lush vegetation, accompanied by an incredible culture and activities.',

    # Contenido de la pagina del destino

    'content' => '<p>The Riviera Maya, a magic spot blessed with warm weather, turquoise waters and white sand beaches like the beautiful Xpu-Ha, Kantenah and Paamul. It has become one of the favorite destinations for visitors all over the world thanks to natural beauties such as the Cenotes (sinkholes), being Chac Mool, Dos Ojos and Jard&iacute;n del Ed&eacute;n some of the best around.</p>

    <p>If you are a shopping lover, then you should visit the 5th Avenue at Playa del Carmen; there you will find many boutiques and malls with all kinds of duty free items and handicrafts. But if you are looking for adventure and interesting places, then theme parks like Xcaret and Xplore Fire are for you, and let&rsquo;s not forget about the great show JOY&Agrave; by Cirque du Soleil, at Vidanta.</p>

    <p>Last but not least, some must-see places you have to go to, are the monumental archaeological sites along the Riviera Maya, like Coba and Muyil in Tulum.</p>

    <p>Live the Royal Reservations experience in the Riviera Maya!</p>',

    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset("img/beach-destination-riviera-maya-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-riviera-maya.jpg':'img/beach-destination-riviera-maya.jpg'),
    'about' => [
        'self' => 'About Riviera Maya',
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
            'descriptions' => 'Boasting hundreds of kilometers of amazing white soft sandy areas that range from that are still virgin and secluded, to the most popular ones and suitable for kids, the Riviera Maya beaches could be considered as some of the best of the world by many visitors. You will also be witness of their great Caribbean ambiance and feel the peaceful sensation they will provide you with while enjoying under the sun at Kantenah beach and its idyllic landscape; on Paamul where snorkeling will be an amazing adventure; or on Xpu-Ha beach where you will also find a beautiful lagoon and it is ideal to swim and relax.',
            'image' => "things-to-do-in-riviera-maya-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],
        1 => [
            'title' => 'Cenotes',
            'descriptions' => 'Among the varied Riviera Maya attractions and natural wonders, there are the Cenotes or sinkholes, which can be open-air or underground with an entrance that allow visitors to descend and refresh in their cool and calm blue waters. Once you enter to this magic underworld, you will notice why Maya people used to consider them as sacred places. Cenotes such as Chac Mool, an ideal and incredible place to dive; Dos Ojos and its more than 67km of underwater rivers perfect for adventurers; and Jardín del Edén, undoubtedly one of the most beautiful and fun ones. Choose from the plenty of cenote options available for you in the Riviera Maya. Please use biodegradable sunscreen to preserve the living creatures of cenotes.',
            'image' => "things-to-do-in-riviera-maya-b.jpg",
            'icon' =>  asset("img/icon-cenotes.png")
        ],
        2 => [
            'title' => 'Shopping',
            'descriptions' => 'Yes, the beaches, the sun and the amazing turquoise Caribbean Sea are really something in the Riviera Maya, but if you want to live this great destination to the fullest then a nice day of shopping is what you need, moreover if it is duty free. Get ready for the shopping experience that awaits you in the 5th Avenue, a long corridor of good branded shops, upscale boutiques and a superb shopping mall called Calle Corazón where you will find anything you imagine at great prices; and let’s not forget about handicrafts and souvenirs shops, so be ready to barter. Enjoy a great day of shopping in the Riviera Maya.',
            'image' => "things-to-do-in-riviera-maya-c.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],

        3 => [
            'title' => 'Attractions',
            'descriptions' => 'If there is something that cannot be missed during a vacation in the Riviera Maya, that is visiting any of the main attractions of this incredible Caribbean destination. Let us give you some ideas from which you can start. First, we recommend you to go to the best theme parks in the Riviera Maya, Xcaret Park offering you endless hours of natural beauties to swim, snorkel or contemplate, as well as the best entertainment through a night show called “México Espectacular” (Spectacular Mexico); also, Xplor and its “Fire” version that will give you incredible adventures at night. And if that is not enough, live the magic of JOYÀ by Cirque du Soleil, at Vidanta.',
            'image' => "things-to-do-in-riviera-maya-d.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],
        4 => [
            'title' => 'Archaeological Sites',
            'descriptions' => 'Looking for some cultural activities in the Riviera Maya? During your vacations in the Mexican Caribbean you will experience a bit of everything and one of the musts of this paradise is visiting its many archaeological sites. Here you will learn about the ancient Maya culture and we are sure you will be amazed by the monumental buildings of sites like Coba and its impressive structures at the Nohoch Mul and Macanxoc areas; and Muyil, a small though amazing site part of Sian Ka’an Biosphere Reserve in Tulum. Discover the history and the secrets of these great Maya civilization ancient settlements.',
            'image' => "things-to-do-in-riviera-maya-e.jpg",
            'icon' =>  asset("img/icon-archaelogical-site.png")
        ],

        5 => [
            'title' => 'Places of Interest',
            'descriptions' => 'The Riviera Maya is a place where you will always have something entertaining to do. Whether you go South or North, there will be a place or an activity that complements your day, and the proof is in the pudding, with Akumal Bay as our first example, for there you will be able to do some good snorkeling and maybe spot one or two giant turtles. Other interesting spots, which will become of your favorites, are the thousands cenotes you can explore on your way along the Riviera Maya. We give you a hint of our favorites like the Gran Cenote, Ik Kil, Cenote Azul and Cenote Dos Ojos.',
            'image' => "things-to-do-in-riviera-maya-f.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ],

    ],

    'food' => [
        'title' => 'Culinary Experience in Riviera Maya',
        'description' => 'The Riviera Maya culinary experience awaits you to live it by tasting a piece of the Mexican Caribbean through the marvelous traditional gastronomy of the Yucatan Peninsula. But that’s not all since, at the wide range of international, French, Asian and fusion restaurants you will have at hand, there will be no excuse for you not to try something new every day. Discover the secrets and history of the typical dishes of Mexico through its flavors.',
        'image' => "riviera-maya-regional-food.jpg",
    ],

    'resorts' => [

        #'title' => 'Resorts in Riviera Maya',

        #'description' => 'Surrounded by lush tropical vegetation, our magnificent award winning luxury resort, in the Riviera Maya will embellish your days with top-notched amenities in an exclusive environment, created especially for your delight and utmost relaxation by the impressive blue of the Caribbean Sea.',

        0 => [

            'slug'=>'grand-residences-riviera-cancun',
            'name'=>'Grand Residences',
            'url' =>'beach-resorts/grand-residences-riviera-cancun',
            'img'=> asset('img/resorts/grand-residences-riviera-cancun/grand-residences-riviera-cancun-c.jpg'),
            //Resorts por destino
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

    'map'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7637224.840392209!2d-91.37077556673265!3d20.827114999999996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xbe901ca016af4973!2sGrand+Residences+Riviera+Cancun!5e0!3m2!1sen!2smx!4v1532730347317',

    'url_offers'=>lang_url("/beach-destinations/riviera-maya/vacation-special-offers-in-riviera-maya"),

    'url_resorts'=>lang_url("/beach-destinations/riviera-maya/the-best-beach-resorts-in-riviera-maya"),

];