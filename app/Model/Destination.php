<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function resorts(){
    	return $this->belongsToMany('App\Model\Resort','destination_resort');
    }
}
