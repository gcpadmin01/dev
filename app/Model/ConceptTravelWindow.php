<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ConceptTravelWindow extends Model
{

	protected $table   = "concepts_travel_window";
	protected $hidden  = ["id","concept_id"];
	public  $timestamps = false;

    public function getStartDateAttribute($value){
    	return $this->asDate($value);
    }

    public function getEndDateAttribute($value){
    	return $this->asDate($value);
    }

    public function scopeAvaliable($query){
    	$today = new \DateTime();
    	return $query->orderBy('start_date','ASC')->orderBy('end_date','ASC');
    }
    public function scopeLastDay($query){
    	return $query->orderBy('end_date','DESC');
    }
}
