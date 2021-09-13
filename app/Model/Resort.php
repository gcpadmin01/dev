<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Resort extends Model
{

    ///https://royalreservations.com/img/resorts/simpson-bay-resort/simpson-bay-resort-offer.jpg
    public static $fotosUrl = "/img/resorts/";

    public function getImgSmallAttribute()
    {
        return Self::$fotosUrl.$this->identifier_rr.'/'.$this->identifier_rr.'-offer.jpg';
    }

    public function getImgBigAttribute()
    {
        return Self::$fotosUrl.$this->identifier_rr.'/'.$this->identifier_rr.'-offer-big.jpg';
    }

    public function scopeActive($query)
    {
        return $query->whereStatus(1);
    }
    public function scopeMain($query)
    {
        return $query->whereMain(1);
    }
    public function scopeMexico($query)
    {
        return $query->whereLocation('Mexican Caribbean');
    }
    public function scopeCaribbean($query)
    {
        return $query->whereLocation('Caribbean Islands');
    }
    public function scopeIdentifier($query, $identifier){
        return $query->whereIdentifier($identifier);
    }
    public function scopeZone($query,$destination){
        return $query->where('destination_id',$destination);
    }

    public function destination()
    {
        return $this->belongsTo('\App\Model\Destination');
    }

    public function contents(){
        return $this->hasMany('App\ResortContent');
    }
    public function accommodations(){
        return $this->hasMany('App\Accommodation');
    }
    public function dinings(){
        return $this->hasMany('App\Dining');
    }
    public function activities(){
        return $this->hasMany('App\Activity');
    }
    public function offers(){
        return $this->belongsToMany('App\Offer');
    }
    public function destinations(){
        return $this->hasMany('App\Model\DestinationResort');
    }
    public function plans(){
        return $this->belongsToMany('App\Plan','resort_plan');
    }
    public function locations(){
        return $this->belongsToMany('App\Model\PlaceInteresting','place_interesting_resorts');
    }
}
