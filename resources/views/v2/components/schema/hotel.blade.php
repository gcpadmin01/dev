@php
    //TODO: Remplazar por información de la base de datos
    /** @var \App\Model\Resort $objResort  */
    /** @var string $resort  */

    $resortContent = __('resorts/'. $resort);
    $resortGalery  = __('resorts/'. $resort.'.gallery');

    //dump($resortGalery);
    $continsPlace = [];
    foreach (__('resorts/'.$resort.'/rooms.rooms') as $room ){
        $img = 'img/resorts/'.$resort.'/rooms/'. $room['image']['src'];
        //dump("mmmg",$room['image'], "mmm");
        $amenities = [];

        foreach ($room['amenities'] as $item) {
            $amenities[] = [
                "@type" => "LocationFeatureSpecification",
                "name" => $item['title']
            ];
        }

        $continsPlace[] =   [
            "@type" => "HotelRoom",
            "name" => $room['title'],
            "photo" => $img,
            "image" => $img,
            //"floorSize" => [
            //    "@type" => "QuantitativeValue",
            //    "value" => 437 ,
            //    "unitCode" => "FT2"
            //],
            "amenityFeature" => $amenities
        ];
    }

    $json = [
            "@context" => "http://schema.org/",
            "@type"=> "Resort",
            "name" => $objResort->name,
            "image" => [
                "https://royalreservations.com/img/resorts/the-royal-sands/big/".$resortGalery[0]
            ],
            "description" => $resortContent['seo']['metadescription'],
            //"priceRange": "$289 - $309",
            "url" => __canonical(),
            "hasMap" => $resortContent['map'],
            //"checkinTime": "14:00:00",
            //"checkoutTime": "11:00:00",
            //"petsAllowed": "false",
            "openingHours" => "Mo-Su Monday through Sunday, all day",
            "starRating" => $objResort->stars,
            "geo"=> [
                "@type" => "GeoCoordinates",
                "latitude" => explode(",", $objResort->coordinates)[0],
                "longitude" => explode(",", $objResort->coordinates)[1]
            ],
            "aggregateRating" => [
                "ratingValue" => $objResort->stars,
                "bestRating" => $objResort->stars,
                "reviewCount" => $objResort->review_count,
                "@type" => "AggregateRating"
            ],
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => $resortContent['address'],
                "streetAddress" => $resortContent['address'],
                "addressCountry" => $objResort->destination->country_en,
                "postalCode" => $objResort->cp,
                "addressRegion" => $objResort->destination->name
            ],
            "containsPlace" => $continsPlace
    ];
@endphp
<script type="application/ld+json">
    {!! json_encode($json) !!}
</script>
