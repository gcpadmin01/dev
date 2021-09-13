<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use stdClass;

class SubscriptionUsers extends Model
{

    protected $table = "supscription_users";
    protected $fillable = ['uid'];

    public function exist(string $uid):int{
    	$exist = $this->where('uid','=',$uid)->first();
    	if(isset($exist)){
    		return $exist->id;
    	}
    	return 0;
    }

    public function add(stdClass $data):int{
		$this->uid       = $data->email;
		$this->user_name = $data->name;
		$this->save();
		return $this->id;
    }
}
