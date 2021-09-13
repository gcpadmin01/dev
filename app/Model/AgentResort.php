<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AgentResort extends Model
{
	protected $fillable = ["agents_id","resorts_id","ihotelier_id","code_process","observations"];
	public $timestamps  = false;
    /*
	*0 = anomalia verificar, 1 = completo ,2 = previamente registro en travel-click
    */
    public static function assign(int $agentId,$resort,$process,$response):int{

    	$insert = [
			"agents_id"    => $agentId,
			"resorts_id"   => $resort->id,
			"ihotelier_id" => $resort->ihotelier_id,
            "code_process" => $process,
            "observations" => $response

    	];
    	$register = static::create($insert);
 		return is_numeric($register->id) ? $register->id:0;
    }
    public function resort(){
        return $this->belongsTo('App\Model\Resort','resorts_id');
    }
}
