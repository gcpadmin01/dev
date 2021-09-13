<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ConceptResortContent extends Model
{
    public static $fotosUrl = '/img/deals/';

    public $timestamps = false;
    
    protected $fillable =[
        'lang_id',
        'concept_resort_id'
    ];

    protected $casts = [
        'inclusion' => 'array',
        'content_extra' => 'array'
    ];

    public function getBaseUrl()
    {
        if ($this->lang_id == '2') {
            return Self::$fotosUrl.'es/';
        }

        if ($this->lang_id == '1') {
            return Self::$fotosUrl.'en/';
        }
    }

    public function getImgSmallAttribute()
    {
        if (!empty($this->img_hotel)) {
            return $this->getBaseUrl().$this->img_hotel;
        }

        return "";
    }

    public function getImgBigAttribute()
    {
        if (!empty($this->img_hotel)) {
            return $this->getBaseUrl().'big-'.$this->img_hotel;
        }

        return "";
    }

    public function scopeLang($query, $lang)
    {
        if ($lang == 'es') {
            $query->where('lang_id', 2);
        }

        if ($lang == 'en') {
            $query->where('lang_id', 1);
        }
    }

    public function getPrivateOfferAttribute()
    {
        if ($this->content_extra != null && array_key_exists('private_offer', $this->content_extra)) {
            return $this->content_extra['private_offer'];
        }else{
            return  [];
        }
    }

    public function getRepetitiveAttribute()
    {
        if ($this->content_extra != null && array_key_exists('repetitive', $this->content_extra)) {
            return $this->content_extra['repetitive'];
        }else{
            return  [];
        }
    }
}
