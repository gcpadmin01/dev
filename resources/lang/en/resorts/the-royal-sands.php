 <?php
return [
        'url-banner-deals' => 'the-royal-sands-banner-offers.jpg',
        'seo'=>
        [
            'title'=>'The Royal Sands Resort in Cancun | Royal Reservations',
            'metadescription'=>'This All Inclusive Cancun Resort The Royal Sands All Suites Resort & Spa is located in the heart of the hotel zone, offering activities for all ages and everything you need to have the perfect Cancun vacation.',
        ],

    'title' => 'The Royal Sands All Suites Resort & Spa',
    'slug' => lang_url('/beach-resorts/the-royal-sands'),

    'description' => '
        <p><b>Warm and pleasant 4.5 -star resort located in the best and safe section of Cancun\'s Hotel Zone.</b></p>

        <p>Off the coast of the Mexican Caribbean <b>20 minutes from the airport (by car)</b>, this charming hotel has an excellent location, close to shopping centers and tourist attractions, such as: Luxury Avenue (5-minute walk), La Isla Shopping Mall (9 minutes by car) and El Rey Archaeological Zone (6 minutes by car).</p>

        <p>Whether as a couple or family, come to Cancun and let yourself be pampered with THE ROYAL SANDS RESORT & SPA, which <b> offers different lodging plans such as all inclusive plan with unlimited meals and beverages, accommodation plus daily breakfast or accommodation only plan;  </b> stroll along its wonderful beach, taste delicious dishes in its 4 restaurants of great gastronomic quality and have fun with unique activities designed just for you.</p>
    ',
    'short-description' => 'The Royal Sands is the best place to live a relaxing experience in one of the best beaches in Cancun. Unwind on the beach or by the pool, work out at the Fitness Center, play tennis or relax at the world class Spa.',
    
    'excerpt' => 'The Royal Sands is the best place to live a relaxing experience in one of the best beaches in Cancun. Unwind on the beach or by the pool, work out at the Fitness Center, play tennis or relax at the world class Spa.',

    'resort_id'=>'86169',
    'all-inclusive' => true, //en home
    'room-only' => true, //en home
    'bed-breakfast' => true, //en home
    'all-inclusiveB' => 'true', //en overview del hotel
    'room-onlyB' => 'true', //en overview del hotel
    'bed-breakfastB' => 'true',    //en overview del hotel
    'destination' => 'Cancun',
    'price' => [
        'currency' => 'USD',
        'amount' => '239',
        'symbol' => '$'
    ],

    'starts' => '5',
    'thumbnails' => [
        '741x290' => 'https://royalreservations.com/img/resorts/the-royal-sands/the-royal-sands-offer.jpg',
        '435x521' => asset('img/resorts/the-royal-sands/the-royal-sands-a.jpg'),
        '418x206' => asset('img/resorts/the-royal-sands/the-royal-sands-b.jpg'),
        '376x100' => asset('img/resorts/home2/the-royal-sands.jpg'),
        '376x290' => asset('img/resorts/home3/the-royal-sands.jpg'),
        '370x300' => '-',
        '196x230' => 'the-royal-sands',
    ],
    'address' => 'Kukulcan Boulevard Km 13.5, 77500. Cancun Hotel Zone, Q.Roo, Mx.',
    'addressCountry' => 'Mexico', 'postalCode' => '77500', 'addressRegion' => 'Quintana Roo',
    'priceRange' => 'Prices starting at $229 USD average per night - All Inclusive (Best Deal Guaranteed)',
    'rates' => [
        0 => [
            'name' => 'All Inclusive', 
            'slug' => lang_url('/beach-resorts/the-royal-sands/all-inclusive-cancun-vacation'),
        ],
    ],

//    'gallery'=>[
//        'the-royal-sands-facilities-a',
//        'the-royal-sands-facilities-c',
//        'the-royal-sands-facilities-i',
//        'the-royal-sands-facilities-f',
//        'the-royal-sands-facilities-b',
//        'the-royal-sands-facilities-d',
//        'the-royal-sands-facilities-e',
//        'the-royal-sands-facilities-ff',
//        'the-royal-sands-facilities-g',
//        'the-royal-sands-facilities-h',
//        'the-royal-sands-facilities-ii',
//        'the-royal-sands-facilities-j',
//        'the-royal-sands-facilities-k',
//    ],

    'gallery' => [
        'the-royal-sands-14',
        'the-royal-sands-2',
        'the-royal-sands-3',
        'the-royal-sands-4',
        'the-royal-sands-5',
        'the-royal-sands-6',
        'the-royal-sands-7',
        'the-royal-sands-8',
        'the-royal-sands-9',
        'the-royal-sands-10',
        'the-royal-sands-11',
        'the-royal-sands-12',
        'the-royal-sands-13',
        'the-royal-sands-1',
        'the-royal-sands-15',
        'the-royal-sands-16',
        'the-royal-sands-17',
        'the-royal-sands-18',
        'the-royal-sands-19',
        'the-royal-sands-20',
    ],

    'tripadvisor'=>[
        0=>'certificate-excellence-2017-en',
        1=>'travellers-choice-2018',
    ],

    'resort_amenities' => [
        0=>[
            'title'=>'Beachfront Resort',
            'icon'=>'beachfront',
        ],
        1=>[
            'title'=>'3 swimming pools',
            'icon'=>'pool',
        ],
        2=>[
            'title'=>'Restaurants',
            'icon'=>'restaurants',
        ],
        3=>[
            'title'=>'Bars',
            'icon'=>'bars',
        ],
        4=>[
            'title'=>'Tour Desk',
            'icon'=>'tour-desk',
        ],
        5=>[
            'title'=>'Car Rental office',
            'icon'=>'car-rental',
        ],
        6=>[
            'title'=>'Spa',
            'icon'=>'spa',
        ],
        7=>[
            'title'=>'Kids club',
            'icon'=>'kids-club',
        ],
    ],

    'map'=>'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14889.457591485798!2d-86.7662953!3d21.0980336!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x23e71d2d874cba2f!2sThe+Royal+Sands!5e0!3m2!1sen!2smx!4v1530030064526',  

    'resort_offers_title' => 'The Royal Sands Specials',
    'resort_offers_url' => url('/beach-resorts/the-royal-sands/cancun-resort-vacation-deals'),
    'mosaic_terms'=>'* The total amount of the reservation will be charged at the moment of booking, any cancellation or modification will not be allowed after this moment. <b>This is a non-refundable rate.</b> 
<b>* For the All-Inclusive:</b> some surcharges will apply for premium food and beverages; it is indicated on the restaurants\' menu. * Room Service: Limited Room Service menu available 24 hours. <b>* Special Rate Restrictions:</b><span class="dots">...</span><span class="viewMore" > Guests at The Royal Sands must be over 28 years of age and have an annual income of $70,000 USD or more (combined annual income if married). All guests must be currently employed and must be credit worthy and bring a major credit (not debit) card. Both husband and wife must attend a 120-minute guided tour and sales presentation. Sorry, no pets allowed. This material is being used for the purpose of promoting a Travel Club program, although you are under no obligation to purchase in order to receive your discount vacation package. Ineligibility under this promotional offer should not be construed as an ineligibility to purchase. Failure to attend such guided tour and sales presentation will cause The Royal Sands to charge corresponding applicable rack rates. Not valid for groups (two or more affiliated couples scheduled for the same or overlapping dates). Not valid in conjunction with any other offers from Royal Resorts. Recipient is responsible for payment of any government-imposed taxes directly related to the service being provided and any personal expenses incurred when utilizing this offer. <b>THIS MATERIAL IS NOT AN OFFER TO SELL NOR A SOLICITATION OF AN OFFER TO BUY TO RESIDENTS OF ANY STATE IN WHICH REGISTRATION REQUIREMENTS HAVE NOT BEEN FULFILLED.</b></span>',
    
    'resort_description'=>'This incredible resort in Cancun has amazing and impeccable facilities facing the Caribbean Sea and its exquisite fine white sand beaches. The spacious and beautifully decorated junior suites of this All Inclusive Cancun resort offer the best in comfort and exclusive amenities. Here, you will enjoy delicious food and beverages in the restaurants and snack bars you will find all along the hotel, and have fun with the activities that we have prepared for you and your family with the All-Inclusive Plan.',
    'ul_rooms'=>'
                <ul>
                    <li>2 double beds</li>
                    <li>Area: 437 ft2</li>
                    <li>Kitchenette</li>
                    <li>Shower with tub</li>
                    <li>Juliet balcony with ocean views</li>
                </ul>
    ',
    'ul_amenities'=>'
                <ul>
                    <li>3 swimming pools</li>
                    <li>4 restaurants</li>
                    <li>Kids Club</li>
                    <li>Spa</li>
                    <li>Free High-speed Wi-Fi</li>
                    <li>Fitness Center</li>
                </ul>
    ',
    'ul_policies'=>'
                <ul>
                    <li>Check-in:  4p.m.</li>
                    <li>Check-out: 11:00 a.m.</li>
                    <li>Payment accepted at the property: Visa, Master Card & AMEX</li>
                    <li>Security deposit: $500 USD per reservation</li>
                    <li>Pets are not allowed at the property.</li>
                </ul>
    ',
    'mosaic_price'=>'1,236',
        'mosaic_price2'=>'309',

    /** POSITION ARRAY IN WEBCAM.PHP LANG FILE */
    'webcam_position' => '2',

];

                                  