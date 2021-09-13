<?php

namespace App\Http\Controllers;

use App\Model\Resort;
use App\TravelClick\ShopV1;
use Illuminate\Http\Request;

class UsdToMxnController extends Controller
{
    public function index()
    {
        $resorts = Resort::where('status', 1)->get();

        return view('usd_to_mxn',[
            'resorts' => $resorts
        ]);
    }

    public function getMxn(Request $request, $hotelId)
    {
        $currency = ShopV1::getCurrency($hotelId, [
            'MXN' => true,
            'EUR' => true,
            'CAD' => true
        ]);

        $retVal = [];
        foreach ($currency as $key => $change){
            $retVal[$key] = number_format($change, 2);
        }

        return response()->json($retVal);
    }
}
