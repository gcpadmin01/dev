<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class DestinationResort extends Model
{
	protected $table = 'destination_resort';

    public function property(){
    	return $this->belongsTo('App\Model\Resort','resort_id','id');
    }

    public function destination(){
    	return $this->belongsTo('App\Model\Destination','destination_id','id');
    }
}
