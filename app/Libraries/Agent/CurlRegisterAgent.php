<?php
namespace App\Libraries\Agent;

use Symfony\Component\Console\Output\ConsoleOutput;
use App\Model\AgentResort;
use App\Agent;

class CurlRegisterAgent{
	
	public  $curl;
	public  $postConfig;
	private $agent;
    private $resorts;

	public function __construct($agent,$resorts){
		$this->curl       = curl_init();
		$this->agent      = $agent;
        $this->resorts    = $resorts;
        $this->console    = new ConsoleOutput();
		$this->postConfig = $this->configRequest($agent);
	}

    public function send():bool{
        try{
            $this->startRegister();
            return true;
        }catch(Exeception $e){
            return false;
        }
    }

    private function startRegister(){
        $this->console->writeln('PROCESANDO INICIANDO...');
        $agents = Agent::where('id','>=','44')->where('id','<=','79')->get();
        foreach($agents as $agn){
            $this->postConfig = $this->configRequest($agn);
            foreach ($this->resorts as $resort) {
                $this->postConfig[CURLOPT_POSTFIELDS]["HotelID"] = $resort->ihotelier_id;
                curl_setopt_array($this->curl,$this->postConfig);
                $this->console->writeln('PROCESANDO:: '.$resort->name);
                $response = curl_exec($this->curl);
                $code_process = $this->checkProcess($response);
                AgentResort::assign($agn->id,$resort,$code_process,$response);
            }
        }
        
    }

	private function configRequest($agent = null):array{
        #t_register2.cfm?FromAdmin=0&PORTALSYMBOL=SSS
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
                'Number'       => $agent == null ? $this->agent->iata             : $agent->iata,
                'Salutation'   => $agent == null ? $this->agent->guest_title      : $agent->guest_title,
                'FirstName'    => $agent == null ? $this->agent->guest_first_name : $agent->guest_first_name,
                'LastName'     => $agent == null ? $this->agent->guest_last_name  : $agent->guest_last_name,
                'Agency'       => $agent == null ? $this->agent->agency_name      : $agent->agency_name,
                'Address1'     => $agent == null ? $this->agent->address_one      : $agent->address_one,
                'Address2'     => $agent == null ? $this->agent->address_two      : $agent->address_two,
                'City'         => $agent == null ? $this->agent->city             : $agent->city,
                'State'        => $agent == null ? $this->agent->state            : $agent->state,
                'Zip'          => $agent == null ? $this->agent->postal_code      : $agent->postal_code,
                'Country'      => $agent == null ? $this->agent->country          : $agent->country,
                'Phone'        => $agent == null ? $this->agent->phone_number     : $agent->phone_number,
                'Fax'          => $agent == null ? $this->agent->fax_number       : $agent->fax_number,
                'Email'        => $agent == null ? $this->agent->email            : $agent->email,
                'Reference'    => ' ',
                'HotelID'      => '',
                'LanguageID'   => ' 1',
                'PORTALSYMBOL' => ' SSS'
            )
        ];
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
}