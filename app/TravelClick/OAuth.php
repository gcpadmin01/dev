<?php
namespace App\TravelClick;

class OAuth {

    const LOYALTY_TOKEN = "LOYALTY_TOKEN";
    const LOYALTY_EXPIRE = "LOYALTY_EXPIRE";

    public static $accessToken = "";
    public static $expireTime = 0;


    public static function getToken()
    {
        if (static::isTokenValid()) {
            return static::$accessToken;
        }else{
            return static::makeToken();
        }
    }

    public static function isTokenValid()
    {   

        if (static::$accessToken == "" && static::$expireTime == 0 ) {
            static::$accessToken = session(OAuth::LOYALTY_TOKEN, "");
            static::$expireTime = session(OAuth::LOYALTY_EXPIRE, 0);
        }

        if (static::$accessToken != "" && static::$expireTime > time() ) {
            return true;
        }else{
            return false;
        }
    }

    public static function makeToken()
    {
        $url = env('TRAVELCLICK_TOKEN_URL',"");
        $user = env('TRAVELCLICK_USER_NAME'."");
        $password = env('TRAVELCLICK_USER_PASSWORD',"");

        $client = new \GuzzleHttp\Client([
            'base_uri' =>  env('TRAVELCLICK_TOKEN_URL',""),
            'verify' => false
        ]);

        $headers = [
            "Authorization" => "Basic ".base64_encode($user.':'.$password)
        ];

        $request = new \GuzzleHttp\Psr7\Request('POST', "", $headers, "");
        $response = $client->send($request);
        $body = $response->getBody();
        $body = json_decode($body, true);
        
        $token = $body['access_token'];
        $tokenExpires = time() + (  $body['expires_in'] - 1000 ) ;

        session([
            OAuth::LOYALTY_TOKEN => $token,
            OAuth::LOYALTY_EXPIRE => $tokenExpires
        ]);

        return $token;
    }
}