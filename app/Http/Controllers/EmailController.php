<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function postSendForm(Request $request){ 

       	$v = \Validator::make($request->all(), [
            'email'    => 'required|email',
        ]);

        if ($v->fails()){
            return redirect()->route('agentsEn')->with(['fail'=> 'There was a problem with your email format.']);
        }

       $lang = $request['lang'];

       $iataCode = $request['iataCode'];
       $agentName = $request['agentName'];
       $agencyName = $request['agencyName'];
       $address1 = $request['address1'];
       $address2 = $request['address2'];
       
       $city = $request['city'];
       $region = $request['region'];
       $zip = $request['zip'];
       $country = $request['country'];
       $phone = $request['phone'];
       $fax = $request['fax'];
       $email = $request['email'];

       if($agentName==''){
       	//$correos=['malegria@royalresorts.com'];
        $correos=['eagarma@royalresorts.com','mgallegos@royalresorts.com', 'fgomeza@royalresorts.com'];
       
        Mail::send('emails.email-travelclick', ['iataCode'=>$iataCode,'agencyName'=>$agencyName,'address1'=>$address1,'address2'=>$address2, 'city'=>$city, 'region'=>$region, 'zip'=>$zip, 'country'=>$country, 'phone'=>$phone, 'fax'=>$fax, 'email'=>$email], function($m) use($correos){
            $m->from('ask4ourhelp@royalresorts.com','Customer Service Reservation Center');
            $m->to($correos);
            $m->subject('Royal Reservations new agent addition request to process');
        });
        if($lang=='en'){ $template='emails.email-travel-agent';} else{ $template='emails.correo-agente-de-viaje';}
        Mail::send($template, ['email'=>$email], function($m) use($email){
            $m->from('ask4ourhelp@royalresorts.com','Customer Service Reservation Center');
            $m->to($email);
            $m->subject('Royal Reservations we are processing your request');
        });

        return redirect()->route('agentsEn')->with(['success'=> 'Your data was sent successfully']);

       }
       else {
       	return redirect()->route('agentsEn')->with(['fail'=> 'There was a problem with your data']);
       }


	}
}
