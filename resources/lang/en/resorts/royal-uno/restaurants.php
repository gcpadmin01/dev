<?php

return [
    'seo'=>
    [
        'title'=>'Cancun Resort Restaurants | Royal Reservations',
        'metadescription'=>'Royal Uno All Inclusive Resort & Spa offers a gourmet dining experience at 8 restaurants & bars, the best restaurants in Cancun Resort.',
    ],
    'title' => 'ROYAL UNO RESTAURANTS & BARS',

    'all_restaurants' => lang_url('/beach-resorts/royal-uno/restaurants-in-royal-uno-resort'),

    'content' => 'A delicious dining experience awaits you at Royal Uno. Get ready to enjoy a world of flavors ranging from Mexican and Italian cuisine to Oriental dishes and International favorites like burgers, ribs, and pizza. There’s something for the whole family.',

    //title landing interna
    'title_interna_restaurants' => 'ROYAL UNO DINING OPTIONS',
    'subtitle_interna_restaurants' => 'THE BEST RESTAURANTS IN CANCUN RESORT',

    //descripción landing interna
    'description_interna_restaurantes' => '
    If you are looking for the best restaurants in Cancun, a world of incredible dining experiences awaits you at Royal Uno. Enjoy International, Mexican, Italian and Oriental cuisine, the chef’s exquisite masterpieces, sumptuous buffets, and a la carte menus. For casual meals with the family, tasty options include burgers, pizza, snacks and fresh seafood in a choice of settings.
    ',

    'restaurants' => [

        [
            'name' => 'Os',
            'excerpt' => 'International cuisine restaurant, a buffet-style concept for the whole family. It will be open for breakfast, lunch, and dinner.',
            'open' => 'Open daily from 6:30 a.m. to 11p.m.',
            'image' => 'royal-uno-dining-a.jpg',
            'food'=>'International, buffet-style',
            'dress_code'=>'Resort casual',
            'logo'=> asset('img/resorts/royal-uno/dining/royal-uno-dining-a.jpg'),
            'image_interna_landing'=> 'royal-uno-restaurants-a.jpg',
            'reference'=> 'For breakfast, lunch, and dinner',
        ],
        [
            'name' => 'Palotinte',
            'excerpt' => 'Serving traditional Mexican cuisine rich in flavors for an incredible dining experience. Dine in the restaurant or on the terrace, you choose.',
            'open' => 'Open daily from 6 p.m. to 11 p.m.',
            'image' => 'royal-uno-dining-bb.jpg',
            'food'=>'Mexican, a la carte menu',
            'dress_code'=>'Resort casual',
            'logo'=> asset('img/resorts/royal-uno/dining/royal-uno-dining-b.jpg'),
            'image_interna_landing'=> 'royal-uno-restaurants-b.jpg',
            'reference'=> '* Reservations required',
        ],
        [
            'name' => 'Aora',
            'excerpt' => 'A journey of flavors through the cuisines of Asia, including Japan, China, Thailand and India. A la carte menu and Teppanyaki tables.',
            'open' => 'Open daily from 6 p.m. to 11 p.m. <b>This restaurant opens on February 2022</b>.',
            'image' => 'royal-uno-dining-cc.jpg',
            'food'=>'Asian, a la carte menu & teppanyaki tables',
            'dress_code'=>'Resort casual',
            'logo'=> asset('img/resorts/royal-uno/dining/royal-uno-dining-c.jpg'),
            'image_interna_landing'=> 'royal-uno-restaurants-c.jpg',
            'reference'=> '* Reservations required',
        ],
        [
            'name' => 'Miamare',
            'excerpt' => 'Mouthwatering Italian cuisine, serving fresh seafood, and pasta. Dine in the restaurant or in the terrace, you choose.',
            'open' => 'Open daily from 6 p.m. to 11 p.m. <b>This restaurant opens on February 2022</b>.',
            'image' => 'royal-uno-dining-dd.jpg',
            'food'=>'Italian, a la carte menu',
            'dress_code'=>'Resort casual',
            'logo'=> asset('img/resorts/royal-uno/dining/royal-uno-dining-d.jpg'),
            'image_interna_landing'=> 'royal-uno-restaurants-d.jpg',
            'reference'=> '* Reservations required',
        ],
        [
            

            'name' => 'Sports Bar',
            'excerpt' => '-',
            'open' => 'Open daily from 6 p.m. to 11 p.m.',
            'image' => 'royal-uno-dining-f.jpg',
            'food'=>'Snacks',
            'dress_code'=>'Resort casual',
            'logo'=> asset('img/resorts/royal-uno/dining/royal-uno-dining-e.jpg'),
            'image_interna_landing'=> 'royal-uno-restaurants-e.jpg',
            'reference'=> '',
        ],
        [
            'name' => 'The Shack Bar',
            'excerpt' => '-',
            'open' => 'Open daily from 12 p.m. to 4 p.m.',
            'image' => 'royal-uno-dining-e.jpg',
            'food'=>' Pizza, snacks, wings, burgers, and more',
            'dress_code'=>'Resort casual',
            'logo'=> asset('img/resorts/royal-uno/dining/royal-uno-dining-f.jpg'),
            'image_interna_landing'=> 'royal-uno-restaurants-f.jpg',
            'reference'=> '',
        ],
        [
            'name' => 'Coffee Shop',
            'excerpt' => '-',
            'open' => 'Open 24 hours',
            'image' => 'royal-uno-dining-g.jpg',
            'food'=>'Sandwiches, coffee, cookies, light fare',
            'dress_code'=>'Resort casual',
            'logo'=> asset('img/resorts/royal-uno/dining/royal-uno-dining-g.jpg'),
            'image_interna_landing'=> 'royal-uno-restaurants-g.jpg',
            'reference'=> '',
        ],            
    ],
];