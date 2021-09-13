<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PlanTravelWindow extends Model
{
    protected $table = "plans_travel_window";
    protected $hidden = ['id','concept_resort_id','created_at','updated_at'];

    public function getStartDateAttribute($value){
    	return $this->asDate($value);
    }

    public function getEndDateAttribute($value){
    	return $this->asDate($value);
    }

    public function scopeAvaliable($query){
    	$today = new \DateTime();
    	return $query->where('end_date','>=',$today)->orderBy('start_date','ASC')->orderBy('end_date','ASC');
    }
    public function scopeLastDay($query){
    	return $query->orderBy('end_date','DESC')->first();
    }
}
