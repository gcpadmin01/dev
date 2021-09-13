<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ConceptResort extends Model
{

    public $timestamps = false;
    protected $casts = [
        'seccion' => 'array'
    ];

    public const HOME='HOME_RESORT';
    public const SPECIALS='SPECIAL_RESORT';
    public const RESORT='RESORTS_RESORT';

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model)
        {
            $model->seccion = [
                'RESORT' => 0
            ];
        });


        static::addGlobalScope('content', function (Builder $builder) {
            // ============================================================================================
            // Validar que cuente con contenido en el idioma corresponidente
            // ============================================================================================
            $builder->whereExists(function ($query)
            {
                $langId = \App::getLocale() == 'en' ? 1:2;
                $query->select(DB::raw(1))
                    ->from('concept_resort_contents')
                    ->whereRaw('concept_resort_contents.concept_resort_id = concept_resorts.id')
                    ->where('lang_id', $langId);
            });
        });

    }

    public function hasPrivateOffer()
    {
        return $this->ihotelier_private_rate_id > 0 && !empty($this->content->private_offer);
    }

    public function getPrivateRateAttribute($rate)
    {
        $gmsClient = app('App\GMS\GMSClient');
       
        if( $gmsClient->isRepetitive() && $this->repetitive_rate > 0){
            $rate = $this->repetitive_rate;
        }

        return $rate;
    }

    public function getPrivateDiscountAttribute($discount)
    {
        $gmsClient = app('App\GMS\GMSClient');
       
        if( $gmsClient->isRepetitive() && $this->repetitive_discount > 0){
            $discount = $this->repetitive_discount;
        }

        return $discount;
    }

    /**
    **  Regresa la imagen configurada por idioma o la imagen por default del resort 
    **/
    public function getImgSmallAttribute()
    {
        if (!empty($this->content->img_small)) {
            return $this->content->img_small;
        }else{
            return $this->resort->img_small;
        }
    }

    /**
    **  Regresa la imagen configurada por idioma o la imagen por default del resort 
    **/
    public function getImgBigAttribute()
    {
        if (!empty($this->content->img_big)) {
            return $this->content->img_big;
        }else{
            return $this->resort->img_big;
        }
    }

    public function getImgConceptAttribute()
    {

        $lang = empty($this->content)?1: $this->content->lang_id;
        $attrPivot = ($lang == 1)? 'img_concept_en': 'img_concept_en';
        $urlImg = '';
        if (!empty($this->pivot)) {
            if (!empty($this->pivot->$attrPivot)) {
                $urlImg = $this->concept->content->getBaseUrlFoto().'/'.$this->pivot->$attrPivot;
                //$urlImg = 'pivot';
            }else{
                $urlImg = $this->concept->content->img;
                //$urlImg = 'pivot-content';
            }
        }else{
            if (!empty($this->content)) {
                if (!empty($this->content->img_concept)) {
                    $urlImg = $this->concept->content->getBaseUrlFoto().'/'.$this->content->img_concept;
                }else{
                    $urlImg = $this->concept->content->img;    
                }
            }else{
                $urlImg = $this->concept->content->img;
            }
                //$urlImg = 'content';
        }

        return $urlImg;
    }

    public function getTravelStartAttribute()
    {
        $date = null;
        if(sizeof($this->travelWindowPlan) > 0){
            $travels = $this->travelWindowPlan;
        }elseif(sizeof($this->travelWindowResort) > 0){
            $travels = $this->travelWindowResort;
        }else{
            $travels = $this->travelWindowConcept;
        }
        $date = $travels->first()->start_date;

        $dateCalc = Carbon::now()->subDays("1");
        if ($dateCalc > $date) {
            $diffDays = intval($date->diffInDays($dateCalc) / 15);
            $date->addDays((15 * $diffDays));
        }
        return $date;
    }

    public function getTravelWindowStartAttribute(){
        if(sizeof($this->travelWindowPlan) > 0){
            $travels = $this->travelWindowPlan;
        }elseif(sizeof($this->travelWindowResort) > 0){
            $travels = $this->travelWindowResort;
        }else{
            $travels = $this->travelWindowConcept;
            
        }

        $today = Carbon::now();
        $tr = $travels->first(function($travel,$key) use ($today){
            if($today <= $travel->end_date)
                return true;
        });
        if(empty($tr)){
            return $today;
        }
        if($today <= $tr->start_date){
            return $tr->start_date;
        }elseif($today < $tr->end_date){
            return $today;
        }else{
            return $tr->end_date;
        }
    }   

    public function getTravelsWindowsAttribute(){
        if(sizeof($this->travelWindowPlan) > 0){
            return $this->travelWindowPlan;
        }
        elseif(sizeof($this->travelWindowResort) > 0){
            return $this->travelWindowResort;
        }else{
            return $this->travelWindowConcept;
        }
       
    }

    public function getTravelEndAttribute()
    {
        $date = null;
        // return $date;
        if(sizeof($this->travelWindowPlan) > 0){
            $travels = $this->travelWindowPlan;
        }elseif(sizeof($this->travelWindowResort) > 0){
            $travels = $this->travelWindowResort;
        }else{
            $travels = $this->travelWindowConcept;
        }
        return $travels->last()->end_date;
        // return $travels[sizeof($travels)-1]['end_date'];
    }
    
    public function getBloqueAttribute($value)
    {
        if (empty($this->pivot)) {
            return $value;
        }else{
            return  $this->pivot->bloque;
        }
    }

    public function getOrderAttribute($value)
    {
        if (empty($this->pivot)) {
            return $value;
        }else{
            return  $this->pivot->order;
        }   
    }

    public function getModalDataAttribute()
    {
        $gmsClient = app('App\GMS\GMSClient');
       
        $ratePlanId = $this->ihotelier_rate_id;
        if(!$gmsClient->isGuest()){
            $ratePlanId = $this->ihotelier_private_rate_id;

            if( $gmsClient->isRepetitive() && $this->ihotelier_repetitive_id > 0 ){
                $ratePlanId = $this->ihotelier_repetitive_id;
            }
        }

        //Validar si es agente y tiene codigo de descuento
        $discountCode = $this->discount_code;
        if (\Auth::guard('agent')->check() && !empty($this->discount_code_agent) ){
            $discountCode = $this->discount_code_agent;
        }

        //TODO: Validar que la fecha de inicio sea mayor al dia en
        $startDate =  date("m/d/Y");
        $date = $this->travels_windows;

        return [
            'conceptTitle' => $this->concept->content->title,
            'hotelId' => $this->resort->ihotelier_id,
            'reservhotelId' => $this->resort->reservhotel_id,
            'ratePlanId' => $ratePlanId,
            'discount' => $discountCode,
            'conceptResortName' => $this->resort->name,
            'rateAccess' => $this->ihotelier_identifier,
            'travelStart' => [
                "startDate" => __date('%m/%d/%Y', $this->travel_window_start),
                "minDate" => __date('%Y-%m-%d', $this->travel_start),
                "maxDate" => __date('%Y-%m-%d',$this->travel_end),
                "rangeDates" => $this->travels_windows->map( function ($model)  {
                    return  [
                        "start_date" => [
                            'date' => __date('%Y-%m-%d',$model->start_date) ,
                        ],
                        "end_date"   => [
                            'date' => __date('%Y-%m-%d',$model->end_date)
                        ]
                    ];
                }),
            ],
            'travelEnd' => [
                "startDate" => date("m/d/Y",strtotime(__date('%m/%d/%Y', $this->travel_window_start)."+ 5 days")),
                "minDate" => __date('%Y-%m-%d',$this->travel_start),
                "maxDate" => __date('%Y-%m-%d',$this->travel_end),
                "rangeDates" => $this->travels_windows->map( function ($model) {
                    return [
                        "start_date" => [
                            'date' => __date('%Y-%m-%d',$model->start_date) ,
                        ],
                        "end_date"   => [
                            'date' => __date('%Y-%m-%d',$model->end_date)
                        ]
                    ];
                }),
            ],
        ];
    }

    public function resort()
    {
        return $this->hasOne('\App\Model\Resort', 'id', 'resort_id');
    }

    public function ratePlan()
    {
        return $this->hasOne('\App\Model\Plan', 'id', 'plan_id');
    }

    public function concept()
    {
        return $this->belongsTo('\App\Model\Concept', 'concept_id');
    }

    public function content()
    {
        return $this->hasOne('\App\Model\ConceptResortContent', 'concept_resort_id', 'id');
    }
    
    public function travelWindowConcept(){
        return $this->hasMany('\App\Model\ConceptTravelWindow','concept_id','concept_id');
    }
    public function travelWindowResort(){
        return $this->hasMany('\App\Model\ResortTravelWindow','concept_resort_id');
    }
    public function travelWindowPlan(){
        return $this->hasMany('\App\Model\PlanTravelWindow','concept_resort_id');
    }
}
