<?php

return [
    'seo'=>[
        'title'=>'Things to do in Cancun for Vacations | Royal Reservations',
        'metadescription'=>'Cancun is white sand beaches, turquoise sea, nightlife, duty free shopping, archaeological sites and more. Book now and discover one of the world\'s best destinations.',
    ],     
    'title' => 'Cancun', # Titulo del destino
    'title_sec' => 'Things to do in Cancun', # Titulo del destino
    'subtitle' => 'The Best Family Resorts in Cancun',
    'slug' => lang_url("/beach-destinations/cancun/things-to-do-in-cancun"), # Url del destino
    'description' => '
        <p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">The immensity of the Caribbean Sea opens to a marvelous world of beaches, culture, history, culinary experiences and the greatest entertainment in Cancun, one of the most visited beach destinations in the globe; a place full of magic and jungle mysterious adventures, ready to be discovered by its curious visitors, in search of creating all kinds of new memorable experiences all along the way.</p>
        <p p class="text-justify" style="line-height: 2; font-weight: 300; font-size: .9rem;">This beautiful paradise is located in the Mexican Caribbean, facing the nice and white sand beaches of the Caribbean and presenting its visitors with a nice and warm blue-hued sea. It is precisely in this amazing spot that the magnificent family beachfront resorts, available at Royal Reservations and boasting the best All Inclusive and Accommodations Only plans, are located; right in the heart of Cancun Hotel Zone. Enjoy in the comfort of a spacious suite or villa featuring great amenities and services, as well as the superb facilities of these beautiful resorts. Get the best vacation deals and live a fabulous Cancun vacation with us, at Royal Reservations!</p>', # Descripción del destino
    'main_photo' => asset("img/cancun/cancun-beach-resort-a.jpg"),
    'video' => [ // Video a mostrar
        'provider' => 'youtube', // Proveedor del video (youtube, vimeo, url) [url = Carga un video alojado en un servidor personalizado]
        'src' => 'cLz_kjEuz3k', // Id del proveedor o link al video (este ultimo solo en caso de que el provider sea 'url')
        'poster' => '' // Imagen 'Poster' del video
    ],

    'alt_img_bg' => 'Paradisiacal beach destinations',

    # Excerpt = Descripción corta (Home) del destino

    'excerpt' => 'With captivating beaches and a warm sea of beautiful turquoise shades, Cancun is waiting to give you the utmost relaxation and fun.',

    # Contenido de la pagina del destino

    'content' => '<p><strong>Cancun</strong> is a must when talking about beach destinations around the world, its more than 13 miles of coastline boast amazing <strong> white sand beaches</strong> like Playa Delfines and its great viewpoint or Playa Marlin with a relaxing ambiance. Another appeal of this paradise is the great <strong>nightlife</strong> offer with nightclubs such as Coco Bongo, Mandala and The City, right there in the &ldquo;party zone&rdquo;.</p>

    <p>That&rsquo;s not all about the Hotel Zone, for you will find interesting <strong>attractions</strong> like the Mayan Museum and the small <strong>archaeological sites</strong> San Miguelito and El Rey, not to mention that not far from Cancun there is Chichen Itza, one of the New Seven Wonders of the World; a Wheel of Fortune, an Aquarium and a Wax Museum at La Isla Shopping Mall, where you will also be able to do a really good <strong>duty free shopping</strong>, as well as at Plaza Las Americas, Downtown Cancun.</p>

    <p>Live it up&hellip; love it all in Cancun, with <strong>Royal Reservations</strong>!</p>',
    'featured_image' => [
        'title' => '',
        'alt' => 'Cancun',
        'url' => 'https://dummyimage.com/1326x383/000/fff'
    ],
    'block_image' => asset('img/beach-destination-cancun-general.jpg'),
    'thumbnail' => asset((Agent::isMobile() && !Agent::isTablet())?'img/mobile/beach-destination-cancun.jpg':'img/beach-destination-cancun.jpg'),
    'about' => [

        'self' => 'About Cancun',

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
            'descriptions' => 'With a coastline that stretches all along the amazing turquoise blue waters of the Caribbean Sea, <strong>Cancun </strong>introduces its visitors with some of the <strong>best beaches</strong> in the world, amazing spots that will provide them with a tropical atmosphere, endless days of fun under the sun and the ultimate relaxation.<strong> Cancun Hotel Zone </strong>boasts more than 20 Km of white sand beaches where everyone will find water and land activities to do. Visit beaches like <strong>Playa Delfines</strong> with a big &ldquo;Cancun&rdquo; sign for the perfect picture; <strong>Chaac Mool</strong> and its vibrant nightlife; or sail across the sea on a 30-minute ferry trip to get to <strong>Isla Mujeres</strong> and let the kids enjoy in the beach and the shallow waters.',
            'image' => "things-to-do-in-cancun-a.jpg",
            'icon' =>  asset("img/icon-beach.png")
        ],

        1 => [
            'title' => 'Night Life',
            'descriptions' => 'During the day, Cancun is full of surprises and incredible activities to do for everyone, and when the night falls, this amazing beach destination becomes the perfect place for those visitors looking for good music, a great party atmosphere and the best night entertainment by the beach or indoors. Dance to the rhythm of your heartbeat led by the sound of the music in the best nightclubs located in the “party zone”. Nightlife will take over you in Coco Bongo and its great shows, while at Mandala Beach, The City and Dady’O you’ll have fun dancing and making new friends.',
            'image' => "things-to-do-in-cancun-b.jpg",
            'icon' =>  asset("img/icon-night-life.png")
        ],

        2 => [
            'title' => 'Shopping',
            'descriptions' => 'Although Cancun is best known for being one of the world’s most beautiful beach destinations, another appealing feature of this constantly-growing city is the variety of shopping malls, boutiques and flea markets both in Cancun Hotel Zone and downtown. If you are looking for a small souvenir to take home, then the Flea Market at Km 9.5 in the Hotel Zone and Mercado 28 located downtown, are the places to go. But if you want some good duty free or luxury items we suggest you to visit La Isla Shopping Mall, Kukulcan Plaza and the newest one, Marina Town Center in the Hotel Zone; as well as Plaza Las Americas Shopping Mall in Cancun downtown.',
            'image' => "things-to-do-in-cancun-c.jpg",
            'icon' =>  asset("img/icon-shopping.png")
        ],

        3 => [
            'title' => 'Attractions',
            'descriptions' => 'All along your incredible vacation in Cancun, you will find various incredible attractions so that you set aside some time in order to visit some and why not, all of them. Your first stop can be at the newest attraction in Cancun Hotel Zone, the Wheel of Fortune located at La Isla Shopping Mall; and as we are talking about Cancun from the heights, visit the Scenic Tower at El Embarcadero (KM 4-4.5). And that’s not all; you will also be able to discover an underwater world by snorkeling at the second largest coral reef barrier in the world.',
            'image' => "things-to-do-in-cancun-d.jpg",
            'icon' =>  asset("img/icon-attractions.png")
        ],
        4 => [
            'title' => 'Archaeological Sites',
            'descriptions' => 'No vacation in <strong>Cancun</strong> is complete until you visit the great monuments and vestiges of a great civilization, the Maya culture. From the various Maya settlements around the Yucatan Peninsula, there are some you will be able to visit just by taking the bus in <strong>Cancun Hotel Zone</strong>; we are talking about the <strong>archaeological sites</strong> of <strong>El Rey</strong>, located on Km 18, and <strong>San Miguelito </strong>on Km 16.5, both in Kukulkan Boulevard. And if you want to see something really impressive not so far from Cancun, then visit <strong>Chichen Itza</strong> and its monumental buildings like the Pyramid of Kukulcan and the Temple of Warriors.',
            'image' => "things-to-do-in-cancun-e.jpg",
            'icon' =>  asset("img/icon-archaelogical-site.png")

        ],

        5 => [
            'title' => 'Places of Interest',
            'descriptions' => 'There is far more than just white sandy beaches and the amazing blue sea of <strong>Cancun</strong>, which you will never get tired of. But if you want to do something different on your next vacations in the destination, then we highly recommend you to head to La Isla Shopping Mall and visit the incredible <strong>Aquarium</strong> to learn more about Cancun&rsquo;s sea creatures, besides it is suitable for kids and adults to enjoy; another<strong> interesting place</strong> at this mall is the <strong>Wax Museum </strong>with different celebs ready to take a pic with you. Of course, if you are seeking something more cultural, there is the <strong>Maya Museum</strong> in the <strong>Hotel Zone</strong>.',
            'image' => "things-to-do-in-cancun-f.jpg",
            'icon' =>  asset("img/icon-places-of-interest.png")
        ]

    ],

    'food' => [
        'title' => 'Culinary Experience in Cancun',
        'description' => 'The perfect vacation wouldn’t be complete without trying the typical meals of the place we are visiting, and we can assure you that Cancun gastronomic offer is going to meet all your food expectations. From international, to fusion and traditional food restaurants, when in Cancun you will taste a bit of everything; try the fresh sea food and ceviche of great Cancun downtown restaurants or stay at the Hotel Zone and visit an array of Mexican dishes, fine cuts, buffet meals, Thai food restaurants, etc., facing the Caribbean Sea or the Nichupte Lagoon.',
        'image' => "cancun-regional-food.jpg",
    ],

    'resorts' => [
        #'title' => 'Resorts in Cancun',

        #'description' => 'Prepare to enjoy the comfort, breathtaking views and all the amazing amenities of our family beachfront resorts located in the heart of Cancun Hotel Zone, one of the best beach destinations to spend days by the wonderful blue sea of the Caribbean.',

        [

            'slug'=>'the-royal-sands',
            'name'=>'The Royal Sands',
            'url' => 'beach-resorts/the-royal-sands',
            'img'=> asset('img/resorts/the-royal-sands/the-royal-sands-a.jpg'),
            //seccion resorts por destino
            'title'=>'The Royal Sands All Suites Resort & Spa',
            'description'=>'The Royal Sands is the best place to live a relaxing experience as it is located by one of the best beaches in Cancun. Unwind on the beach or get a tan by its infinity pool, work out at the Fitness Center, play tennis or relax at the world class Spa.',
            'stars'=>'4.5',           
        ],

        [
            'slug'=>'the-royal-islander',
            'name'=>'The Royal Islander',
            'url' => 'beach-resorts/the-royal-islander',
            'img'=> asset('img/resorts/the-royal-islander/the-royal-islander-a.jpg'),
			//seccion resorts por destino
            'title'=>'The Royal Islander All Suites Resort',
            'description'=>'The Royal Islander is a family oriented tranquil getaway in Cancun offering direct access to top notch services and amenities, also available at its twin neighbor The Royal Caribbean, besides its spacious villas for your comfort and peace.',
            'stars'=>'4',			
        ],

        [
            'slug'=>'the-royal-cancun',
            'name'=>'The Royal Cancun',
            'url' => 'beach-resorts/the-royal-cancun',
            'img'=> asset('img/resorts/the-royal-cancun/the-royal-cancun-b.jpg'),
            //seccion resorts por destino
            'title'=>'The Royal Cancun All Suites Resort',
            'description'=>'The Royal Cancun is a cozy and nice family hotel preferred by loyal guests for its impeccable services, delicious Italian restaurant, kind staff and kid-friendly amenities. Its shallow Caribbean waters are perfect for toddlers and children. Choose between the All Inclusive Plan and Just Accommodation.',
            'stars'=>'4.5',            
        ]          

    ],

    'specials' => [
        0 => __('specials/special-1'), // {special-n} puede cambiar al nombre que quiera
        1 => __('specials/special-2'),
        2 => __('specials/special-3'),
        3 => __('specials/special-4'),
    ],

    'map'=>'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7623124.303993792!2d-91.26672442645872!3d21.103447925450602!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c29ac422009f9%3A0x2e673144d65c853f!2sZona+Hotelera%2C+Canc%C3%BAn%2C+Quintana+Roo!5e0!3m2!1sen!2smx!4v1529532871308',


    'url_offers'=>lang_url("/beach-destinations/cancun/vacation-special-offers-in-cancun"),
    'url_resorts'=>lang_url("/beach-destinations/cancun/the-best-beach-resorts-in-cancun"),
];