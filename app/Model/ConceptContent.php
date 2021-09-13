<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ConceptContent extends Model
{
    public $timestamps = false;
    public static $fotosUrl = '/img/deals/';
    
    protected $fillable = [
        'lang_id',
        'concept_id'
    ];

    protected $casts = [
        'content_extra' => 'array',
        'gms_content' => 'array'
    ];

   public function getImgAttribute()
   {
        return $this->getBaseUrlFoto().'/'.$this->img_concept.'?v='.$this->updated_at;
   }

   public function getAmenityImgAttribute()
   {
       return $this->getBaseUrlFoto().'/'.$this->img_amenity.'?v='.$this->updated_at;
   }

   public function getBannerImgAttribute()
   {
        if (\Agent::isMobile() && !\Agent::isTablet()) {
            return  $this->getBaseUrlFoto().'/'.$this->img_concept.'?v='.$this->updated_at;
        }else{
            return $this->getBaseUrlFoto().'/'.$this->img_banner.'?v='.$this->updated_at;
        }
   }

   public function getLandingImgAttribute()
   {
       if (\Agent::isMobile() && !\Agent::isTablet()) {
            return  $this->getBaseUrlFoto().'/'.$this->img_concept.'?v='.$this->updated_at;
        }else{
            return $this->getBaseUrlFoto().'/'.$this->img_landing.'?v='.$this->updated_at;
        }
   }

    public function getBaseUrlFoto()
    {
        if ($this->lang_id == 1){
            return self::$fotosUrl.'en';
        }

        if ($this->lang_id == 2){
            return self::$fotosUrl.'es';
        }
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

    public function getBoxTitleAttribute($value='')
    {
        $GMSClient = resolve('App\GMS\GMSClient');
        
        $retValue = $value;
        if (!$GMSClient->isGuest()) {
            if($this->gms_content != null && array_key_exists('box_title', $this->gms_content) && !empty($this->gms_content['box_title']) ){
              $retValue = $this->gms_content['box_title'];
            }
        }

        return  $retValue;
    }

    public function getBoxSubtitleAttribute($value='')
    {
        $GMSClient = resolve('App\GMS\GMSClient');
        
        $retValue = $value;
        if (!$GMSClient->isGuest()) {
            if($this->gms_content != null && array_key_exists('box_subtitle', $this->gms_content) && !empty($this->gms_content['box_subtitle'])){
              $retValue = $this->gms_content['box_subtitle'];
            }
        }

        return  $retValue;
    }

    public function getBoxDescriptionAttribute($value='')
    {
        $GMSClient = resolve('App\GMS\GMSClient');
        
        $retValue = $value;
        if (!$GMSClient->isGuest()) {
            if($this->gms_content != null && array_key_exists('box_description', $this->gms_content) && !empty($this->gms_content['box_description']) ){
              $retValue = $this->gms_content['box_description'];
            }
        }

        return  $retValue;
    }
}
