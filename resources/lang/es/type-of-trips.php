<?php

return [
    'seo'=>[
        'title'=>'Experiencias de Vacaciones en el Caribe | Royal Reservations',
        'metadescription'=>'Vive experiencias únicas frente al mar en nuestros hermosos destinos del Caribe Mexicano y las Islas del Caribe. Planea esas vacaciones familiares de ensueño, el viaje romántico o de aventuras que siempre has querido.',
    ],
    'title' => 'Vivencias Memorables Con Royal Reservations', # Titulo de la sección y la pagina
    'subtitle' => 'Experiencias vacacionales maravillosas que duran toda la vida', # Sub titulo de la sección y la pagina
    # Contenido de la pagina
    'description' => "Vive experiencias únicas frente al mar, en nuestros hermosos destinos del Caribe Mexicano y las Islas del Caribe. Planea esas vacaciones familiares de ensueño, el viaje romántico o de aventuras perfecto; experimenta el bienestar de un tratamiento de spa y crea bellas memorias de tu boda o luna de miel; y juega el mejor partido de golf durante tu viaje de negocios o convención.",

    'trips'=> [
        0=>[
            'tab_name'=>'Vacaciones Familiares', // nombre del tab
            'title'=>'Creamos vivencias únicas para ti y tu familia', // titulo de la descripcion
            'description'=>'Vive con Royal Reservations unas vacaciones familiares inigualables, disfrutando, en compañía de quienes más amas, de cada momento frente al mar en increíbles destinos como Cancún, Playa del Carmen, la Riviera Maya, St. Maarten, Curacao y Punta Cana.',
            'img'=>'family/vacation-experiences-family-a.jpg',
            'link'=>'/es/experiencias-de-viaje/vacaciones-familiares-al-caribe',
            'color'=>'yellow',
            'icon'=>asset('img/type-of-trips-icons/family.png'),
        ],
        1=>[
            'tab_name'=>'Viaje Romántico',
            'title'=>'Un viaje de ensueño para tu escapada romántica',
            'description'=>'Deja que el romance inunde tus días con amaneceres y atardeceres en las idílicas playas de nuestros resort en Cancún, Playa del Carmen, la Riviera Maya, St. Maarten, Curacao y Punta Cana para vivir esa aventura romántica que siempre has soñado.',
            'img'=>'romantic/vacation-experiences-romantic-a.jpg',
            'link'=>'/es/experiencias-de-viaje/escape-romantico-al-caribe',
            'color'=>'red',
            'icon'=>asset('img/type-of-trips-icons/romantic.png'),
        ],     
        2=>[
            'tab_name'=>'Aventuras',
            'title'=>'Explora tu lado aventurero en el Caribe',
            'description'=>'Deja salir tu lado explorador y vive unas vacaciones llenas de aventuras en los destinos de playa de Royal Reservations. Descubre los misterios de la selva en Cancún, Playa del Carmen y la Riviera Maya; y recorre los caminos salvajes de Curacao.',
            'img'=>'adventure/vacation-experiences-adventure-a.jpg',
            'link'=>'/es/experiencias-de-viaje/los-mejores-destinos-de-aventura-en-el-caribe',
            'color'=>'orange',
            'icon'=>asset('img/type-of-trips-icons/snorkel.png'),
        ],
        3=>[
            'tab_name'=>'Bienestar y SPA',
            'title'=>'Relajación y bienestar en su máxima expresión',
            'description'=>'Déjate consentir por Royal Reservations en un viaje hacia la relajación y el bienestar que te ofrecemos a través de amenidades exclusivas y deleitantes tratamientos de spa en Cancún, Playa del Carmen, la Riviera Maya y Punta Cana.',
            'img'=>'wellbeing/vacation-experiences-wellbeing-a.jpg',
            'link'=>'/es/experiencias-de-viaje/hoteles-en-el-caribe-con-spa',
            'color'=>'blue',
            'icon'=>asset('img/type-of-trips-icons/wellness.png'),
        ],        
        4=>[
            'tab_name'=>'Bodas y Luna de Miel',
            'title'=>'La Boda y la Luna de Miel de tus sueños, sólo en el Caribe',
            'description'=>'Visualízate caminando por la playa hacia un hermoso gazebo frente al mar o disfrutando de una cena romántica mientras el sol se pone en el mar… Eso y más es lo que vivirás en tu boda y tu luna de miel en Cancún, Playa del Carmen, la Riviera Maya y Punta Cana.',
            'img'=>'weddings/vacation-experiences-weddings-a.jpg',
            'link'=>'/es/experiencias-de-viaje/destinos-de-luna-de-miel-en-el-caribe',
            'color'=>'pink',
            'icon'=>asset('img/type-of-trips-icons/honeymoon.png'),
        ],        
        5=>[
            'tab_name'=>'Golf',
            'title'=>'Experiencias de golf únicas junto al mar',
            'description'=>'Prepárate para disfrutar de increíbles días de golf en los mejores campos, diseñados por profesionales, para brindarte una experiencia inolvidable junto al mar de nuestros maravillosos destinos Cancún, Playa del Carmen, la Riviera Maya y Punta Cana.',
            'img'=>'golf/vacation-experiences-golf-a.jpg',
            'link'=>'/es/experiencias-de-viaje/vacaciones-golf-en-el-caribe',
            'color'=>'green',
            'icon'=>asset('img/type-of-trips-icons/golf.png'),            
        ],        
        6=>[
            'tab_name'=>'Negocios y Convenciones',
            'title'=>'Tu viaje de negocios o convención que lo tiene todo',
            'description'=>'Su viaje de negocios será un éxito en nuestros resorts, pues contará con instalaciones adecuadas y lo necesario para que su convención o viaje de incentivos sea memorable. Además disfrutará de la relajación de Cancún, la Riviera Maya, Curacao y St. Maarten.',
            'img'=>'business/vacation-experiences-business-a.jpg',
            'link'=>'/es/experiencias-de-viaje/hoteles-en-el-caribe-para-reuniones-y-negocios',
            'color'=>'black',
            'icon'=>asset('img/type-of-trips-icons/bussines.png'),
        ],        
    ],
];