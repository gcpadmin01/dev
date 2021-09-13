<?php

namespace App\Http\Controllers;

use App\GMS\GMSClient;
use Illuminate\Http\Request;

class ApiRatesController extends Controller
{
    public function getToken(GMSClient $gmsClient)
    {
        return response()->json([
            'token' => $gmsClient->getTokenLoyalty()
        ]);
    }
}
