<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

$datos=array(
   


    array(
        'img' => 'https://royalreservations.com/img/promos/travel-fest-en.gif',
        'tittle' => 'TRAVEL FEST',
        'link' => 'https://royalreservations.com/deals/hotels/travel-fest?utm_source=royal_resorts&utm_medium=offer'
    ),
 
    array(
        'img' => 'https://royalreservations.com/img/promos/luxury-en.jpg',
        'tittle' => 'LUXURY VACATIONS',
        'link' => 'https://be.synxis.com/?chain=24447&currency=USD&src=30&hotel=6960&utm_source=royal_resorts&utm_medium=offer'
    ),

    array(
        'img' => 'https://royalreservations.com/img/promos/travel-fest-en.gif',
        'tittle' => 'TRAVEL FEST',
        'link' => 'https://royalreservations.com/deals/hotels/travel-fest?utm_source=royal_resorts&utm_medium=offer'
    ),
 
    array(
        'img' => 'https://royalreservations.com/img/promos/luxury-en.jpg',
        'tittle' => 'LUXURY VACATIONS',
        'link' => 'https://be.synxis.com/?chain=24447&currency=USD&src=30&hotel=6960&utm_source=royal_resorts&utm_medium=offer'
    )
);

$datos = json_encode($datos);

$datos = file_get_contents('https://royalreservations.com/includes/promos');

print_r($datos);