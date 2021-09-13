<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\{Subscriptions,SubscriptionUsers};
use PHPMailer\PHPMailer\SMTP;
use Validator;

class SupscriptionController extends Controller
{
	public function supscription(Request $request){
		if($request->ajax()){
			$data = (object) $request->all();
			$supscription = new Subscriptions();
			$subsUsr      = new SubscriptionUsers();
			$idSupsUser   = $subsUsr->exist($data->email);
    		if($idSupsUser == 0){
    		    $idSupsUser = $subsUsr->add($data);
    		    $supscription->add($idSupsUser,$data);
    		    $this->sendConfirm($data->email);
				return response()->json(["process" => true,"alert" => 'alert-success','msg' => __('special-offer/black-friday.label_registered')]);
    		}else{
    			$exist = $supscription->exist($idSupsUser,$data->campaing,$data->lang);
    			if(!$exist){
    				$supscription->add($idSupsUser,$data);
					$this->sendConfirm($data->email);
					return response()->json(["process" => true,"alert" => 'alert-success','msg' => __('special-offer/black-friday.label_registered')]);
    			}
    			return response()->json(["process" => false,"alert" => 'alert-warning','msg' => __('special-offer/black-friday.has_registered')]);
    		}
		}
		return response("NOT ACCESS",500);
	}

    public function sendDataTimeShare(Request $request){
        /*Funcion especial para mandar datos de la landing de Time Share*/

        $rules = [
            'name'  => ['required','regex:/^([a-zA-ZáéíóúýÁÉÍÓÚ\s])+$/'],
            'phone' => 'required',
            'email' => 'email|required',
            'optin' => 'required'
        ];

        $validator = Validator::make($request->all(),$rules);

        $mail = new \PHPMailer\PHPMailer\PHPMailer();

        if($validator->passes()){
            try {
                #DEBUG DE PRUEBA
                #$mail->SMTPDebug = SMTP::DEBUG_SERVER;
                $mail->isSMTP();
                #CONFIGURACION DE PRODUCCION
                #$mail->Host       = 'royalreservations.com';
                #$mail->SMTPAuth   = true;
                #$mail->Username   = 'webresinfo@royalreservations.com';
                #$mail->Password   = 'gkA(GQCf_RJj';
                #$mail->SMTPSecure = 'ssl';
                #$mail->Port       = 465;
                //CONFIGURACION DE PRUEBA
                $mail->Host       = env('MAIL_HOST_SUPSCRIPTION');
                $mail->SMTPAuth   = true;
                $mail->Username   = env('MAIL_USERNAME_SUPSCRIPTION');
                $mail->Password   = env('MAIL_PASSWORD_SUPSCRIPTION');
                $mail->SMTPSecure = env('MAIL_ENCRYPTION_SUPSCRIPTION');
                $mail->Port       = env('MAIL_PORT_SUPSCRIPTION');
                $mail->CharSet    = \PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
                ################################################
                $mail->setFrom(env('MAIL_USERNAME_SUPSCRIPTION'), 'Royal Reservations');

                $mail->addAddress('mbecerril@royalresorts.com');
                $mail->addAddress('eagarma@royalresorts.com');
                $mail->addAddress('darias@royalresorts.com');
                $mail->addAddress('malegria@royalresorts.com');

//                $mail->addAddress('jnolasco@royalresorts.com');

                $mail->isHTML(true);                                // Set email format to HTML
                $mail->Subject = 'Usuario quiere contacto - Hook Tour Revenue';
                $mail->Body    = view('emails.time-share',$request->all());
                $mail->send();

                $request->session()->flash("success",true);

            } catch (Exception $e) {

                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

            }
        }else{
            $request->session()->flash("success",false);
        }

        return back();
    }

	private function sendConfirm(string $email){
		$mail = new \PHPMailer\PHPMailer\PHPMailer();
		try {
			#DEBUG DE PRUEBA
			#$mail->SMTPDebug = SMTP::DEBUG_SERVER;
			$mail->isSMTP();
			#CONFIGURACION DE PRODUCCION
    		#$mail->Host       = 'royalreservations.com';
    		#$mail->SMTPAuth   = true;
    		#$mail->Username   = 'webresinfo@royalreservations.com';
    		#$mail->Password   = 'gkA(GQCf_RJj';
    		#$mail->SMTPSecure = 'ssl';
    		#$mail->Port       = 465;
			//CONFIGURACION DE PRUEBA
			$mail->Host       = env('MAIL_HOST_SUPSCRIPTION');
    		$mail->SMTPAuth   = true;
    		$mail->Username   = env('MAIL_USERNAME_SUPSCRIPTION');
    		$mail->Password   = env('MAIL_PASSWORD_SUPSCRIPTION');
    		$mail->SMTPSecure = env('MAIL_ENCRYPTION_SUPSCRIPTION');
    		$mail->Port       = env('MAIL_PORT_SUPSCRIPTION');
			################################################
			$mail->setFrom(env('MAIL_USERNAME_SUPSCRIPTION'), 'Royal Reservations');
			$mail->addAddress($email);
			$mail->isHTML(true);                                  // Set email format to HTML
    		$mail->Subject = 'Thank you for subscribing to our Black Friday 2019 email list! / !Gracias por suscribirte a nuestra lista de Black Friday 2019!';
    		$mail->Body    = view('emails.email-supscription');
    		$mail->send();

		} catch (Exception $e) {
    		echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
		}
	}
}
