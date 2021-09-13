<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

use \App\Model\ConceptResort;

class Concept extends Model
{
    const VIEW_WEB = 1;
    const VIEW_OCULTA = 2;
    
    public static $size_hm = 300000;
    public static $size_cpt = 100000;
    
    public const HOME = 'HOME';
    public const HOME_BANNER = 'HOME_BANNER';
    public const SPECIALS = 'SPECIALS';
    public const RESORT = 'RESORT';
    public const RESORT_DEALS = 'RESORT_DEALS';
    public const RESORT_AMENITIE = 'RESORT_AMENITY';
    const SEC_GMS = 1;

    

    public static $fotosUrl = '/img/deals/';
    private $errorType = "";

    protected $fillable = [
        "name",
        "type_concept",
        "visibility",
        "url_es",
        "url_en",
        "booking_window_start",
        "booking_window_end",
        "travel_window_start",
        "travel_window_end"
    ];

    protected $casts = [
        'seccion' => 'array',
        'travel_window_start' => 'datetime',
        'travel_window_end' => 'datetime',
        'booking_window_start' => 'datetime',
        'booking_window_end' => 'datetime'
    ];

    public static function boot()
    {
        parent::boot();
        static::addGlobalScope('content', function (Builder $builder) {

            // ============================================================================================
            // Validar que cuente con contenido en el idioma corresponidente
            // ============================================================================================
            $builder->whereExists(function ($query)
            {
                $langId = \App::getLocale() == 'en' ? 1:2;
                $query->select(DB::raw(1))
                    ->from('concept_contents')
                    ->whereRaw('concept_contents.concept_id = concepts.id')
                    ->where('lang_id', $langId);
            });

            // ============================================================================================
            // Validar que cuente con por lo menos un travel window
            // ============================================================================================
            $builder->whereExists(function ($query)
            {
                $langId = \App::getLocale() == 'en' ? 1:2;
                $query->select(DB::raw(1))
                    ->from('concepts_travel_window')
                    ->whereRaw('concepts_travel_window.concept_id = concepts.id');
            });

        });
    }

    public function getUrl($lang)
    {
        $attr = "url_".$lang;
        return $this->$attr;
    }

    public function getEstadoAttribute()
    {
        $today = new \DateTime();
        $startDate = new \DateTime($this->booking_window_start);
        $endDate = new \DateTime($this->booking_window_end);
        $retValue = 'valid';

        if(($endDate < $today) ){
            $this->errorType = "EXPIRED";
            $retValue = 'invalid';
        }
        
        if(!empty($this->countries) && $retValue == 'valid'){
            //dd($this->countries);
            $country = __country();
            $country = (!empty($country))? $country : '-';
            
            $pos =  strpos($this->countries, $country);
            if($pos === false){
                $this->errorType = 'COUNTRY_RESTRICTION';
                $retValue = 'invalid';
            }
        }
        
        return $retValue;

        //return ($endDate > $today)? ($startDate > $today) ? 'before-valid':'valid' : 'invalid';
    }

    public function getErrorTypeAttribute()
    {
        return $this->errorType;
    }

    public function getBookingWindowStartAttribute($bookingWindow)
    {
        $bookingWindow = $this->asDate($bookingWindow);

        $dateCalc = Carbon::now()->subDays("1");
        if ($dateCalc > $bookingWindow) {
            $diffDays = intval($bookingWindow->diffInDays($dateCalc) / 15);
            
            $bookinDiff = clone  $bookingWindow;
            $bookinDiff->addDays((15 * $diffDays));

            $days = $bookinDiff->diffInDays($this->booking_window_end);
            if ($days > 15) {
                $bookingWindow->addDays((15 * $diffDays));
            }
        }
        return $bookingWindow;
    }

    public function getBloqueAttribute()
    {
        if (!empty($this->pivot)) {
            return $this->pivot->bloque;
        }else{
            return 0;
        }
    }

    public function getHasPrivateOfferAttribute()
    {
        $retValue = false;
        if($this->content->gms_content != null && array_key_exists('box_title', $this->content->gms_content) && !empty($this->content->gms_content['box_title']) ){
          $retValue = true;
        }

        return  $retValue;       
    }

    public function scopeVigencia($query, $filtroVig)
    {
        $query->where(function ($query) use ($filtroVig)
            {
                if (isset($filtroVig['prev'])) {
                    $query->orWhere(function($query){
                        $today = new \DateTime();
                        $query->where('booking_window_start', '>', $today)
                            ->where('booking_window_end', '>', $today);
                    });
                }

                if (isset($filtroVig['vig'])) {
                    $query->orWhere(function($query){
                        $today = new \DateTime();
                        $query->where('booking_window_start', '<=', $today)
                            ->where('booking_window_end', '>=', $today);
                    });
                }

                if (isset($filtroVig['cad'])) {
                    $query->orWhere(function($query){
                        $today = new \DateTime();
                        $query->where('booking_window_start', '<', $today)
                            ->where('booking_window_end', '<', $today);
                    });
                }
        });

        return $query;
    }

    public function scopeVisibility($query, $visibility)
    {
        $display_lang = \App::getLocale() == 'en' ? 'display_en':'display_es';

        /**
         * Se agrega un Join con la validación de paises  retorna un campo "countries"
         */
        $query->leftJoin(DB::raw("( 
            SELECT 
                concept_countries.concept_id, 
                GROUP_CONCAT( concept_countries.country_iso2 SEPARATOR ',' ) as countries 
            FROM 
                concept_countries 
            GROUP BY concept_countries.concept_id ) c"
        ),'c.concept_id', '=','concepts.id');
        

        if (is_array($visibility)) {
            $query->whereIn('visibility', $visibility)->where($display_lang,true);


        }else{
            $query->where('visibility',$visibility)->where($display_lang,true);

            /**
             * En caso de que la visibilidad sea solo web (1) se agrega el filtro pais desde el query
             */
            $query->where( function ($q)
            {
                $country = __country();
                $country = !empty($country)? $country : '-';
                $q->whereNull('countries')
                    ->orWhere('countries','like','%'.$country.'%');
            } );
        }



    }

    public function scopeTypeBooking($query,$type){
        return $query->where("type_concept",$type);
    }

    public function conceptsResort()
    {
        return $this->belongsToMany('\App\Model\ConceptResort', 'concept_concepts', 'concept_id', 'concept_resort_id')
            ->withPivot('img_concept_es','img_concept_en', 'bloque', 'order', 'id');
    }

    public function resorts()
    {
        return $this->hasMany('\App\Model\ConceptResort', 'concept_id', 'id');
    }

    public function content()
    {
        return $this->hasOne('\App\Model\ConceptContent', 'concept_id', 'id');
    }
}
