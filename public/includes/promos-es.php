<?php

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

//GRANFIN_WEB_GIF_300x485_ES

$datos=array(

    array(
        'img' => 'https://royalreservations.com/img/promos/travel-fest-es.gif',
        'tittle' => 'TRAVEL FEST',
        'link' => 'https://royalreservations.com/es/ofertas/hoteles/travel-fest?utm_source=royal_resorts&utm_medium=offer'
    ),

    array(
        'img' => 'https://royalreservations.com/img/promos/luxury-es.jpg',
        'tittle' => 'VACACIONES DE LUJO',
        'link' => 'https://be.synxis.com/?chain=24447&currency=MXN&src=30&hotel=6960&utm_source=royal_resorts&utm_medium=offer#a-resort-promotion'
    ),


    array(
        'img' => 'https://royalreservations.com/img/promos/travel-fest-es.gif',
        'tittle' => 'TRAVEL FEST',
        'link' => 'https://royalreservations.com/es/ofertas/hoteles/travel-fest?utm_source=royal_resorts&utm_medium=offer'
    ),


    array(
        'img' => 'https://royalreservations.com/img/promos/luxury-es.jpg',
        'tittle' => 'VACACIONES DE LUJO',
        'link' => 'https://be.synxis.com/?chain=24447&currency=MXN&src=30&hotel=6960&utm_source=royal_resorts&utm_medium=offer#a-resort-promotion'
    ),

);

$datos = json_encode($datos);
$datos = file_get_contents('https://royalreservations.com/es/includes/promos-es');

print_r($datos);