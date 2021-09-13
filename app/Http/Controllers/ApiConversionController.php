<?php

namespace App\Http\Controllers;

use App\GMS\GMSClient;
use Illuminate\Http\Request;

class ApiConversionController extends Controller
{
    public function collectAddPayment(Request $request, GMSClient  $user)
    {
        $response = [
            $user->getName()
            ];
        //dd($user);
        //dd($user->getName(), $request->cookie());
       //$userAgent = $request->header('User-Agent');
       //$ip = $request->ip();
       //$unix = time();
       //$referer = request()->headers->get('referer');
       //$fbp = $request->input('fbp', "");
       //$eventId = $request->input('ei', "");
       //$curl = curl_init();
       //curl_setopt_array($curl, array(
       //    CURLOPT_URL => 'https://graph.facebook.com/v11.0/1226725270709970/events',
       //    CURLOPT_RETURNTRANSFER => true,
       //    CURLOPT_ENCODING => '',
       //    CURLOPT_MAXREDIRS => 10,
       //    CURLOPT_TIMEOUT => 0,
       //    CURLOPT_FOLLOWLOCATION => true,
       //    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
       //    CURLOPT_CUSTOMREQUEST => 'POST',
       //    CURLOPT_POSTFIELDS => '{
       //                "data": [
       //                    {
       //                        "event_id" :"' . $eventId . '",
       //                        "event_name": "AddPaymentInfo",
       //                        "event_time": ' . $unix . ',
       //                        "action_source": "website",
       //                        "event_source_url": "' . $referer . '",
       //                        "user_data": {
       //                            "client_ip_address": "' . $ip . '",
       //                            "client_user_agent": "' . $userAgent . '",
       //                            "fbp" : "' . $fbp . '"
       //                        }
       //                    }
       //                ],
       //
       //        "access_token":"EAACe1ZBlqPZAsBAEgJf5SZAZAf6iD4gNRDSo9Vd0JOh71ZAqyn3eQMEd3GUtZCV7VCBCkfFyKFHV7oqwvgWRSmal5xNf9grgrSTE25svtRxedJBBE6oca1xKq3PAyCmBa1dsPNm8htB7Cj3ZA585MIqYB9lpZCND1PZCEwvya6aNNM3fuZAgcotmf0jj1vhLH7Sm0ZD"
       //
       //    }',
       //    CURLOPT_HTTPHEADER => array(
       //        'Content-Type: application/json'
       //    ),
       //));

       //$response = curl_exec($curl);

       //curl_close($curl);
        return response()->json($response);
    }
}
