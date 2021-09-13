<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use stdClass;

class Subscriptions extends Model
{
    protected $table = "supscriptions";

    public function add(int $idSupsUser,stdClass $data):int{
		$this->supscription_users_id = $idSupsUser;
		$this->campaing              = $data->campaing;
		$this->optin                 = $data->optin;
		$this->country               = $data->country;
        $this->ip_country            = __country();      
		$this->lang                  = $data->lang;
		$this->save();
    	return $this->id;
    }
    public function exist(int $idSupsUser,string $campaing,string $lang):bool{
    	$exist = $this->where("supscription_users_id","=",$idSupsUser)->where("campaing","=",$campaing)->where('lang','=',$lang)->first();
    	if(isset($exist)){
    		return true;
    	}
    	return false;
    }
}
