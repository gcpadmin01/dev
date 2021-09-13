<?php
return [
    'seo'=>[
        'title'=>'-Royal Reservations | Best Resorts in Caribbean',
        'metadescription'=>'Royal Reservations offers the experience from exclusive and luxury resorts in Caribbean to family hotels with special rates and promotions',
    ],     
    'title' => 'Punta Cana', # Titulo del destino
    'slug' => lang_url("/beach-destinations/punta-cana/things-to-do-in-punta-cana"), # Url del destino
    'description' => '
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">The Dominican Republic, the land of merengue decks out with an amazing beach destination known as Punta Cana. This incredible dream land and its gorgeous golden sand beaches, bathed by the blue of the Caribbean Sea, welcomes you to a lavish world of relaxation, adventures, culinary experiences and beautiful natural marvels for you to discover. Here, you will be able to do a whole bunch of activities like snorkeling, diving, whale watching and cave exploring, among others; as well as visit incredible places such as Altos de Chav&oacute;n in La Romana, Saona and Catalina Islands, etc.</p>
        <p class="text-justify " style=" line-height: 2; font-weight: 300; font-size: .9rem;">Explore every corner of this fabulous destination and then get the unwinding rest you deserve, during your family vacations in Punta Cana by staying at any of the 4 magnificent family beachfront resorts available for you to book at Royal Reservations. Do you want an All Inclusive or Accommodations Only vacation at a luxury beachfront resort; or you prefer a Bed &amp; Breakfast rate plan family resort? Here you&rsquo;ll find great vacation deals for your perfect accommodation with exclusive amenities and amazing services.</p>', # Descripción del destino
    'main_photo' => asset("img/punta-cana/punta-cana-beach-resort-a.jpg"),
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'jUsYkgRbq0Y', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],
    # Excerpt = Descripción corta (Home) del destino
    'excerpt' => 'The Caribbean environment of Punta Cana, in the Dominican Republic, awaits you to experience an unforgettable adventure.',
    # Contenido de la pagina del destino
    'content' => '<p><strong>Punta Cana</strong>, in the <strong>Dominican Republic</strong>, is synonymous with some of the most beautiful, unspoiled <strong>beaches</strong> in the world. Located facing the amazing blue of the Caribbean Sea, colliding with the Atlantic Ocean, this paradise features more than 35 km of white sands, perfect for all visitors to lie down, relax or have a great adventure with the many activities they will have at hand. </p>

    <p>Extreme zip lines, kayaking, snorkeling, surfing and windsurfing are some of the amazing <strong>activities</strong> of this beach destination, and among its great <strong>attractions</strong> you will find all kinds of things to do like going to the Chocho Museum or the reserve Indigenous Eyes Eco-park. Punta Cana. Now, if you seek for the best traditional and international dishes, you will get them at all the <strong>restaurants </strong>you will encounter on your way; plus, you will love Punta Cana <strong>nightlife </strong>in Coco Bongo or any of the bars around the place.</p>

    <p>Live Punta Cana with our <strong>Royal Reservations</strong> amazing deals!</p>',
    'featured_image' => [
        'title' => '',
        'alt' => '',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],

    'block_image' => asset("img/beach-destination-punta-cana-general.jpg"),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-punta-cana.jpg':'img/beach-destination-punta-cana.jpg'),
    'about' => [
        'self' => 'About Punta Cana',
        'uselful' => [
            'money' => 'US Dollars',
            'language' => 'Spanish - English',
            'weather' => 'Sunny - Warm',
            'power_socket' => '120V / Plugs type A/B',
            'cell-phone-service' => 'Cell Phone Service'
        ]
    ],
    'things_to_do' => [
        0 => [
            'title' => 'Beaches',
            'descriptions' => '<p>Amazing is just one of the words that best describe the <strong>beaches of Punta Cana</strong> in the Dominican Republic, one of the best beach destination for those who love days on soft sand secluded beaches by the Caribbean Sea. <strong>Bavaro Beach</strong> is one of the most popular beaches in Punta Cana, whereas <strong>Macao Beach </strong>is ideal for surfing lovers both beginners and experts. <strong>El Cortecito Beach </strong>will introduce you to a nice fisherman village surrounded by shopping centers, restaurants and bars for your enjoyment. And if you are seeking for a more family-style beach, then <strong>Arena Gorda Beach </strong>(Fat Sand) is the place for you.</p>',
            'image' => "things-to-do-in-punta-cana-a.jpg",
            'icon' =>  asset("img/icon-waves.png")
        ],
        1 => [
            'title' => 'Snorkeling',
            'descriptions' => '<p>For visitors wanting to live a great adventure in the waters of the Caribbean, we suggest doing some <strong>snorkel</strong> and<strong> scuba dive in Punta Cana</strong>. According to the &ldquo;Archivo General de Indias&rdquo; there are 700 sunken galleons in the area and they have found 30 ships which you will be able to visit on an unforgettable underwater tour. You can also visit places like <strong>Alto Velo Wreck </strong>or <strong>Atlantic Princess Shipwreck</strong>, at La Romana; also <strong>Boca Chica</strong>, another beautiful spot offering divers and snorkelers a great diversity of marine life such as seahorses, corals, starfish, and more.</p>',
            'image' => "things-to-do-in-punta-cana-b.jpg",
            'icon' =>  asset("img/icon-waves.png")
        ],
        2 => [
            'title' => 'Interesting Sites',
            'descriptions' => '<p>Punta Cana also has a great array of interesting sites that will make your vacations something even more memorable. Visit <strong>Manatí Park</strong>, a great attractions park for the whole family, where you will be able to watch ceremonial dances by the Taino people, see toucans and flamingos, swim with dolphins and more. Head southwest and get to know <strong>Altos de Chav&oacute;n</strong> located in <strong>La Romana</strong>, and feel as if you were in a 16th century European village full of art. Then stop by the <strong>Parque Nacional del Este</strong>, a UNESCO World Heritage Site and natural park home to hundreds of species of flora and fauna.</p>',
            'image' => "things-to-do-in-punta-cana-c.jpg",
            'icon' =>  asset("img/icon-waves.png")
        ],

        3 => [
            'title' => 'Adventure',
            'descriptions' => '<p>Adrenaline and adventure are also present in Punta Cana through the incredible, fun and extreme outdoor activities all visitors will be able to do. Let your explorers&rsquo; side awake and go on a <strong>dune buggy ride</strong> around the countryside to learn about the locals&rsquo; life and discover incredible hidden spots. Fly the sky of Punta Cana on a fast and safe <strong>zip-line</strong> or take a <strong>safari expedition </strong>to the hidden treasures of the Dominican countryside with, coffee and cocoa plantations, farms, a local village and the lush tropical life of the island. </p>',
            'image' => "things-to-do-in-punta-cana-d.jpg",
            'icon' =>  asset("img/icon-waves.png")
        ],

        4 => [
            'title' => 'Golf',
            'descriptions' => '<p>Punta Cana also has a spectacular offer for those golf lovers seeking for dazzling views in professional and challenging golf courses ideal for golfers of all levels and tastes. <strong>Punta Espada Golf Club </strong>is a course that will delight players with a great par 72 and majestic views of the sea. And at <strong>La Romana </strong>enjoy 3 Pete Dye designed golf courses<strong>, Dye Fore, The links and </strong>&nbsp;<strong>Teeth of the Dog</strong>, which is by far one of the best golf courses in the Caribbean, providing its visitors with intense and challenging golf rounds all around its 18 holes..</p>',
            'image' => "things-to-do-in-punta-cana-e.jpg",
            'icon' =>  asset("img/icon-waves.png")
        ],
        5 => [
            'title' => 'Islands',
            'descriptions' => '<p>While on vacations in Punta Cana, one of the activities you cannot miss is visiting the beautiful islands around this paradise, for it is an amazing experience we are sure you will enjoy. <strong>Catalina Island</strong> and its amazing location will present you with an unbeatable snorkeling experience and from the very moment you get to La Romana to take a great catamaran trip to the island the adventure will begin. Another great experience awaits you on <strong>Saona Island </strong>and its warm blue Caribbean waters. And after your adventure, rest in a hammock by the seashore.</p>',
            'image' => "things-to-do-in-punta-cana-f.jpg",
            'icon' =>  asset("img/icon-waves.png")
        ]
    ],

    'food' => [
        'title' => 'Culinary Experience in Punta Cana',
        'description' => '<strong>Punta Cana</strong>, in the Dominican Republic, a pleasant tropical paradise of turquoise waters and secluded beaches offers you not only the best of relaxation, but also a wide array of fresh and delightful dishes born from the amazing blending of cultures on the island. Try a bit of everything in the many <strong>restaurants </strong>offering traditional Dominican meals, international food with avant-garde menus from the French, Italian, Spanish or Greek gastronomy, fresh seafood dishes, and more. We are sure anything you eat, will please your senses.',
        'image' => "punta-cana-regional-food.jpg",

    ],

    'resorts' => [

        #'title' => 'Resorts in Punta Cana',

        #'description' => 'The perfect secluded beach destination for those sun and beach lovers is, undoubtedly, Punta Cana in the Dominican Republic. Here you will find the best place to spend a relaxed vacation at any of our magnificent luxury resorts in Punta Cana, boasting exclusive amenities and breathtaking views.',

        
        0 => [
            'slug'=>'ancora-punta-cana-private-residence-yacht-club',
            'name'=>'AlSol Luxury Village',
            'url' => '/beach-resorts/ancora/ancora-punta-cana-private-residence-yacht-club',
            'img'=> asset('img/resorts/ancora/ancora-a.jpg'),
            //Resorts del Destino
            'title'=>'AlSol Luxury Village Cap Cana',
            'description'=>'AlSol Luxury Village Cap Cana, in the beautiful Punta Cana of the Dominican Republic, is a luxurious village on the waters of the exclusive Cap Cana Marina. This luxury resort boasts upscale accommodations with world-class services and amenities. Couples and families will delight in its spacious and beautiful suites.',
            'stars'=>'4',
        ],

        1 => [
            'slug'=>'del-mar',
            'name'=>'Del Mar by Joy Resorts',
            'url' => '/beach-resorts/del-mar/del-mar-ocean-front-resort-by-joy-resorts-punta-cana',
            'img'=> asset('img/resorts/del-mar/del-mar-b.jpg'),
            //Resorts por destino
            'title'=>'Del Mar Oceanfront Resort by Joy Resorts',
            'description'=>'Nestled in the amazing Punta Cana in the Dominican Republic, Del Mar Oceanfront Resort by Joy Resorts will provide you with a luxury vacation experience along its private relaxing beach offering stunning views from its beautiful and spacious suites.',
            'stars'=>'4',
        ],

        2 => [
            'slug'=>'casa-de-campo',
            'name'=>'Casa de Campo',
            'url' => 'beach-resorts/casa-de-campo',
            'img'=> asset('img/resorts/casa-de-campo/casa-de-campo-b.jpg'),
            //Resorts por destino
            'title'=>'Casa de Campo Resort & Villas',
            'description'=>'Located in La Romana, in the Dominican Republic, Casa de Campo Resort & Villas is a beautiful luxury resort boasting unspoiled private beaches, lavish accommodations, and a myriad of flawless facilities, services and activities created with high elevated standards of comfort, sophistication and relaxation. Perfect for couples, families and groups, looking for once in a lifetime vacation experiences!',
            'stars'=>'5',
        ],        

    ],

    'specials' => [

        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera

        1 => __('specials/special-2'),

        2 => __('specials/special-3'),

    ],

    'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7742504.128158353!2d-72.95377824442818!3d18.640665633413388!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8ea891645dcbfe77%3A0x61881cfaed12f6f3!2sPunta+Cana%2C+Dominican+Republic!5e0!3m2!1sen!2smx!4v1529532660193',



    'url_offers'=>lang_url("/beach-destinations/punta-cana/vacation-special-offers-in-punta-cana"),

    'url_resorts'=>lang_url("/beach-destinations/punta-cana/the-best-beach-resorts-in-punta-cana"),   

];