<?php

/**
 * Para obtener mas información así como más keys a colocar,
 * puede visitar los siguientes links: 
 *  - https://developers.google.com/search/docs/guides/intro-structured-data
 *  - http://schema.org/ 
 * 
 * Herramienta de pruebas de datos estructurados
 * https://search.google.com/structured-data/testing-tool
 */

return [
  "default"     => [
    "@type"     => "Organization", 
    "mainEntityOfPage" => [
      "@type"   => "WebPage",
      "@id"     => lang_url("/es")
    ]
  ],

  "es" => [
    "@type"			=> "Organization",
    "url"				=> lang_url("/es"),
    "name"			=> "Royal Reservations",
    "logo"     => "https://royalreservations.com/img/royal-logo-vert.png",
    ],
  "beach-destinations" =>[
    "@type" => "ItemList",
    "itemListElement" => [
      [
        "@type" => "ListItem",
        "position" => "1",
        "item" => [
          "@type" => "Place",
          "url"		=> lang_url("/beach-destinations#resort-cancun"),
          "image" => url("/")."/img/foto-cancun.png",
          "aggregateRating" => [
            "@type"       => "AggregateRating",
            "ratingValue" => "3.5",
            "reviewCount" => "11"
          ],
        ]
      ],
      [
        "@type" => "ListItem",
        "position" => "2",
        "item" => [
          "@type" => "Place",
          "url"		=> lang_url("/beach-destinations#resort-carmen"),
          "image" => url("/")."/img/foto-playadelcarmen.png",
          "aggregateRating" => [
            "@type"       => "AggregateRating",
            "ratingValue" => "3.5",
            "reviewCount" => "11"
          ],
        ]
      ],
    ]
  ]
];