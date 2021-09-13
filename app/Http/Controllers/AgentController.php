<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Agent;
use \App\Model\Resort;
use \App\Model\AgentResort;
use stdClass,Validator;

class AgentController extends Controller
{
    private $DISABLE_TC; /*Variable para activar el registro de TravelClick*/

	public function __construct(){
        $this->DISABLE_TC = TRUE;
    }

/*    public function index(){
        dd(\Hash::make("Zella123"));
    }*/

    public function signup(){
        $data = [
            'type'   => 'home',
            'chat'   => 'general',
            'page'   => 'sign-up-agent',
            'atribs' => '',
            'js_v2'  => 'js_v2'
        ];
        return view('auth.agent.sign-up',$data);
    }



    public function reset($token = null){
        $data = [
            'type'   => 'home',
            'chat'   => 'general',
            'page'   => 'reset-up-agent',
            'atribs' => '',
            'token'  => $token,
            'js_v2'  => 'js_v2'
        ];
        return view('auth.agent.reset-password',$data);
    }

    public function help(){
        $data = [
            'type'   => 'home',
            'chat'   => 'general',
            'page'   => 'faqs-agent',
            'atribs' => '',
            'js_v2'  => 'js_v2'
        ];
        return view('agent.faqs',$data);
    }

    public function verifyIata(Request $request,string $iata = null){
    	if($request->ajax()){
    		if(preg_match('/^[A-Z]|[0-9]{8,10}$/',$iata)){
    			return response()->json(["exist" => Agent::existIata($iata)]);
    		}
    		return response('BAD REQUEST IATA FORMAT NOT VALID',400);
    	}
    	return response('NOT ACCESS METHOD',500);
    }
    
    public function store(Request $request){
        $validate = $this->validateSend($request->all());
    	if($validate->passes == TRUE){
            $resorts               = Resort::all()->where('status',1);
            $validate->data->email = strtolower($validate->data->email);
            $agentId               = Agent::add($validate->data);
            $curl                  = curl_init();
            $msgError              = "";
            
            if($agentId > 0 && $this->DISABLE_TC == TRUE){
                foreach ($resorts as $resort) {
                    try{
                        curl_setopt_array($curl,$this->configRequest($validate->data,$resort));
                        $response = curl_exec($curl);
                        switch (curl_getinfo($curl, CURLINFO_HTTP_CODE)) {
                            case 200:
                                $process = $this->validContent($response,$validate->data);
                                if($process!=null){
                                    return response()->json($process);
                                }
                            break;
                            case 404:
                                $msgError = "Page not found";
                            break;

                            case 500:
                                $msgError = "Server error intern";
                            break;
                        }
                        $codeProcess = $msgError != "" ? 4:$this->checkProcess($response);
                        AgentResort::assign($agentId,$resort,$codeProcess,$response);
                    }catch(\Exception $e){
                        AgentResort::assign($agentId,$resort,5,"error interno royalreservations");
                    }
                }
            }

            $this->sendConfirm($validate->data);
            $request->session()->flash("success",true);
            return redirect()->route("login.show")->withInput($request->only(["iata","success"]));
    	}
        return back()->withErrors($validate->messages)->withInput($request->except(["psw","psw-confirm"]));
    }

    private function validContent($content,$data){
        if(preg_match('/valid IATA/',$content)){
            return ["alert" => "warning","msg" => "Code Agency not valid ".$data->iata];
        }
    }

    private function checkProcess($content):int{
        if(preg_match('/Your agency is now registered with us|Please note that your browser must enable cookie/',$content)){
            return 1;
        }
        if(preg_match('/IATA is already registered/',$content)){
            return 2;
        }
        if(preg_match('/We apologize, however an error has occurred. Our system administration has been notified/',$content)){
            return 3;
        }
        return 0;
    }
    
    private function validateSend(array $input){
        $rules = [
            "code"            => 'required|in:IATA,ARC,TIDS,TRUE-CODE',
            "iata"            => ['unique:agents,iata',['required','regex:/^([0-9]){8}$/']],
            "guest_title"     => 'required|in:Mr.,Mrs.,Miss,Ms.,Dr.',
            "guest_firstname" => ['required','regex:/^([a-zA-ZáéíóúýÁÉÍÓÚ\s])+$/'],
            "guest_lastname"  => ['required','regex:/^([a-zA-ZáéíóúýÁÉÍÓÚ\s])+$/'],
            "agency_name"     => 'required',
            "address1"        => 'required',
            "address2"        => 'required',
            "city"            => 'required',
            "postal_code"     => 'required|digits_between:5,10',
            "country"         => 'required',
            "state"           => 'required',
            "phone_number"    => 'required|digits_between:1,16',
            "fax_number"      => 'digits_between:0,16',
            "email"           => 'required|email|unique:agents,email',
            "psw"             => 'required',
            "psw-confirm"     => 'required|same:psw'
        ];
        $validate = Validator::make($input,$rules);
        return (object)["data" => (object) $input,"passes" => $validate->passes(),"messages" => $validate->messages()];
    }
   
    private function configRequest(stdClass $agent,$resort):array{
        return [
            CURLOPT_URL => "https://reservations.ihotelier.com/crs/t_register2.cfm?FromAdmin=0&PORTALSYMBOL=SSS",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING       => "",
            CURLOPT_MAXREDIRS      => 10,
            CURLOPT_TIMEOUT        => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST  => "POST",
            CURLOPT_POSTFIELDS => array(
                'Code'         => 'IATA',
                'Number'       => $agent->iata,
                'Salutation'   => $agent->guest_title,
                'FirstName'    => $agent->guest_firstname,
                'LastName'     => $agent->guest_lastname,
                'Agency'       => $agent->agency_name,
                'Address1'     => $agent->address1,
                'Address2'     => $agent->address2,
                'City'         => $agent->city,
                'State'        => $agent->state,
                'Zip'          => $agent->postal_code,
                'Country'      => $agent->country,
                'Phone'        => $agent->phone_number,
                'Fax'          => $agent->fax_number,
                'Email'        => $agent->email,
                'Reference'    => ' ',
                'HotelID'      => $resort->ihotelier_id,
                'LanguageID'   => ' 1',
                'PORTALSYMBOL' => ' SSS'
            )
        ];
    }

    private function sendConfirm($data){
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
            $mail->CharSet    = \PHPMailer\PHPMailer\PHPMailer::CHARSET_UTF8;
            ################################################
            $mail->setFrom(env('MAIL_USERNAME_SUPSCRIPTION'), 'Royal Reservations');
            $mail->addAddress($data->email);
            
            if($this->DISABLE_TC){
                $mail->addBCC("jnolasco@royalresorts.com");
                $mail->addBCC("darias@royalresorts.com");
            }

            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Welcome Agent! Thank you for subscribing with us!';
            $mail->Body    = view('emails.agent.welcome',['agent' => $data]);
            $mail->send();

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
}
