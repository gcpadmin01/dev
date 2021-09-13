<?php

return [
    'seo'=>[
        'title'=>'Vacation Experiences in the Caribbean | Royal Reservations',
        'metadescription'=>'Live unique experiences by the sea, at any of our beautiful destinations of the Mexican Caribbean and the Caribbean Islands. Plan those dreamy family vacations, the perfect romantic getaway or adventure trip.',
    ],    
    'title' => 'Royal Reservations Memorable Experiences', # Titulo de la sección y la pagina
    'subtitle' => 'Wonderful vacation experiences that last a lifetime', # Sub titulo de la sección y la pagina
    # Contenido de la pagina
    'description' => "Live unique experiences by the sea, at any of our beautiful destinations of the Mexican Caribbean and the Caribbean Islands. Plan those dreamy family vacations, the perfect romantic getaway or adventure trip; experience the well-being of a spa treatment and create beautiful memories of your wedding or honeymoon; and play the best golf game during your business trip or convention.",

    'trips'=> [
        0=>[
            'tab_name'=>'Family Vacations', // nombre del tab
            'title'=>'Unique experiences for you and your family', // titulo de la descripcion
            'description'=>'Live with Royal Reservations a fabulous family vacation enjoying, in the company of your beloved ones, every moment facing the sea in our incredible destinations such as Cancun, Playa del Carmen, Riviera Maya, St. Maarten, Curacao and Punta Cana.',
            'img'=>'family/vacation-experiences-family-a.jpg',
            'link'=>'vacation-experiences/caribbean-family-vacations',
            'color'=>'yellow',
            'icon'=>asset('img/type-of-trips-icons/family.png'),
        ],

        1=>[
            'tab_name'=>'Romantic Getaway',
            'title'=>'A dream trip for your romantic getaway',
            'description'=>'Let romance fill your days with sunrises and sunsets on the idyllic beaches of our resorts in Cancun, Playa del Carmen, the Riviera Maya, St. Maarten, Curacao and Punta Cana, to live that romantic adventure you\'ve always dreamed of.',
            'img'=>'romantic/vacation-experiences-romantic-a.jpg',
            'link'=>'vacation-experiences/romantic-getaway-in-the-caribbean',
            'color'=>'red',
            'icon'=>asset('img/type-of-trips-icons/romantic.png'),
        ],
        2=>[
            'tab_name'=>'Adventures',
            'title'=>'Explore your adventurous side in the Caribbean',
            'description'=>'Let your explorer side out and live a family vacation full of adventures in the Royal Reservations beach destinations. Discover the mysteries of the jungle in Cancun, Playa del Carmen and the Riviera Maya, and tour the wild roads of Curacao.',
            'img'=>'adventure/vacation-experiences-adventure-a.jpg',
            'link'=>'vacation-experiences/top-adventure-destinations-in-the-caribbean',
            'color'=>'orange',
            'icon'=>asset('img/type-of-trips-icons/snorkel.png'),
        ],
        3=>[
            'tab_name'=>'Wellness & SPA',
            'title'=>'Relaxation and wellness at its best',
            'description'=>'Let Royal Reservations pamper you and indulge yourself on a trip to the relaxation and wellness we offer you, through exclusive amenities and delightful spa treatments in paradise spots as Cancun, Playa del Carmen, the Riviera Maya and Punta Cana.',
            'img'=>'wellbeing/vacation-experiences-wellbeing-a.jpg',
            'link'=>'vacation-experiences/wellness-and-spa-resorts-in-the-caribbean',
            'color'=>'blue',
            'icon'=>asset('img/type-of-trips-icons/wellness.png'),
        ],
        4=>[
            'tab_name'=>'Weddings & Honeymoon',
            'title'=>'The honeymoon of your dreams in the Caribbean',
            'description'=>'Visualize yourself walking on the beach towards a beautiful gazebo facing the sea, or enjoying a romantic dinner while the sun sets... That is what you will live at your wedding and honeymoon vacation in Cancun, Playa del Carmen, the Riviera Maya and Punta Cana.',
            'img'=>'weddings/vacation-experiences-weddings-a.jpg',
            'link'=>'vacation-experiences/honeymoon-destinations-in-the-caribbean',
            'color'=>'pink',
            'icon'=>asset('img/type-of-trips-icons/honeymoon.png'),
        ],
        5=>[
            'tab_name'=>'Golf',
            'title'=>'Unique golf experiences by the sea',
            'description'=>'Get ready to enjoy incredible golf days in the best courses, designed by professionals, to live an unforgettable experience by the blue Caribbean Sea at any of our wonderful destinations Cancun, Playa del Carmen, the Riviera Maya and Punta Cana.',
            'img'=>'golf/vacation-experiences-golf-a.jpg',
            'link'=>'vacation-experiences/caribbean-golf-trip',
            'color'=>'green',
            'icon'=>asset('img/type-of-trips-icons/golf.png'),            
        ],

        6=>[
            'tab_name'=>'Business & Conventions',
            'title'=>'Your business trip or convention that has it all',
            'description'=>'Your business trip will be a success in any of our resorts, for we offer you adequate facilities and exactly what it takes to make your convention or incentive trip memorable, while enjoying the relaxation of Cancun, the Riviera Maya, Curacao and St. Maarten.',
            'img'=>'business/vacation-experiences-business-a.jpg',
            'link'=>'/vacation-experiences/business-and-meetings-in-caribbean-resorts',
            'color'=>'black',
            'icon'=>asset('img/type-of-trips-icons/bussines.png'),
        ],
    ],
];