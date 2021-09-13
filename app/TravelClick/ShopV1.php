<?php
namespace App\TravelClick;

use App\TravelClick\OAuth;

/**
 * 
 */
class ShopV1
{
    public static function basicAvail($hotel, $data)
    {

        $token = OAuth::getToken();

        $client = new \GuzzleHttp\Client([
            'base_uri' =>  env('TRAVELCLICK_SHOPV1_URL',""),
            'verify' => false
        ]);

        $headers = [
            'Authorization' => 'Bearer '.$token
        ];

        $query = \GuzzleHttp\Psr7\build_query($data, false);

        $request = new \GuzzleHttp\Psr7\Request('GET', "hotel/".$hotel."/basicavail?".$query, $headers, "");

        $response = $client->send($request);
        $body = json_decode($response->getBody());

        return $body;
    }

    
    public static function getCurrency($hotelId, $moneda)
    {
        $token = OAuth::getToken();

        $client = new \GuzzleHttp\Client([
            'base_uri' =>  env('TRAVELCLICK_DOMAIN',""),
            'verify' => false
        ]);

        $headers = [
            'Authorization' => 'Bearer '.$token
        ];

        $request = new  \GuzzleHttp\Psr7\Request('GET', "/entity/v1/hotel/".$hotelId."/info/currencies", $headers, "");

        $response = $client->send($request);
        $body = json_decode($response->getBody());

        $monedas = [];
        foreach ($body->currencies as $currency ) {
            //$monedas[$currency->currencyCode] = $currency->exchangeRate;
            if(array_key_exists((string)$currency->currencyCode, $moneda)){
                $monedas[$currency->currencyCode] = $currency->exchangeRate;
            }
        }

        return $monedas;
    }
}