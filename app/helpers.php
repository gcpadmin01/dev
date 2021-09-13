<?php
use Hashids\Hashids;
use GeoIp2\Database\Reader;
use Jenssegers\Agent\Agent;

use Illuminate\Support\Facades\DB;


function getOutdatedBrowsers() {
    return Config::get('browsers');
}

function getCurrentBrowser() {
    $agent = new Agent();
    $browser = $agent->browser();
    $version = $agent->version($browser);

    if (strpos($version, '.') !== false) { 
        $numversion = explode ( '.', $version )[0];
    } else {
        $numversion = $version;
    }

    return ['browser' => $browser, 'version' => $numversion, 'fullVersion' => $version];
}

function isOutdatedBrowser() {
    $browsers = getOutdatedBrowsers();
    $cb = getCurrentBrowser();

    foreach($browsers as $browser => $bv) {
        if( $browser ===  data_get($cb, 'browser', '') ) {
            if($bv === "*") {
                return true;
            } else {
                if( str_starts_with($bv, '<=') ) {
                    $bv = str_replace_first('<=', '', $bv);
                    if( intval(data_get($cb, 'version', 0)) <= intval($bv) ) {
                        return true;
                    }
                } else if( str_starts_with($bv, '>=') ) {
                    $bv = str_replace_first('>=', '', $bv);
                    if( intval(data_get($cb, 'version', 0)) >= intval($bv) ) {
                        return false;
                    }
                } else if( str_starts_with($bv, '<') ) {
                    $bv = str_replace_first('<', '', $bv);
                    if( intval(data_get($cb, 'version', 0)) < intval($bv) ) {
                        return true;
                    }
                } else if( str_starts_with($bv, '>') ) {
                    $bv = str_replace_first('>', '', $bv);
                    if( intval(data_get($cb, 'version', 0)) > intval($bv) ) {
                        return false;
                    }
                } else {
                    if( intval(data_get($cb, 'version', 0)) == intval($bv) ) {
                        return true;
                    }
                }
            }
        }
    }

    return false;
} 

function lang_url($url) {
    
    if (str_starts_with($url, 'https')) {
        return  $url;
    }

    if(App::getLocale() != config("app.fallback_locale")) {
        if(!str_starts_with($url, "/".App::getLocale())) {
            $url = App::getLocale().$url;
        }
    }
    return url($url);
}

/*function change_lang($lang = 'default') {
    if($lang === 'default') $lang = config('app.fallback_locale');
    $path = Request::path();
    if(Request::segment(1) === $lang) return url($path);
    foreach(array('es', 'en') as $locale) {
        if($locale === $lang) continue;
        if($locale === Request::segment(1)) $path = str_replace_first($locale, $lang, $path);
    }
    if(!str_starts_with($path, $lang)) $path = $lang."/".$path;
    if(str_starts_with($path, config("app.fallback_locale"))) $path = str_replace_first(config("app.fallback_locale"), "", $path);
    return url($path);
}*/

function change_lang($lang = 'default') {
    $lang = \App::getLocale();
    $langChange = ($lang == 'en')? 'es' : 'en';
    return __langUrl($langChange);
    /* if($lang === 'default') $lang = config('app.fallback_locale');
    $path = Request::path();
    if(Request::segment(1) === $lang) return url($path);
    foreach(array('es', 'en') as $locale) {
        if($locale === $lang) continue;
        if($locale === Request::segment(1)) $path = str_replace_first($locale, $lang, $path);
    }
    if(!str_starts_with($path, $lang)) $path = $lang."/".$path;
    if(str_starts_with($path, config("app.fallback_locale"))) $path = str_replace_first(config("app.fallback_locale"), "", $path);
    return url('/'); */
}

if (! function_exists('str_ordinal')) {
    /**
     * Append an ordinal indicator to a numeric value.
     *
     * @param  string|int  $value
     * @param  bool  $superscript
     * @return string
     */
    function str_ordinal($value, $superscript = false)
    {
        $number = abs($value);
 
        $indicators = ['th','st','nd','rd','th','th','th','th','th','th'];
 
        $suffix = $superscript ? '<sup>' . $indicators[$number % 10] . '</sup>' : $indicators[$number % 10];
        if ($number % 100 >= 11 && $number % 100 <= 13) {
            $suffix = $superscript ? '<sup>th</sup>' : 'th';
        }
 
        return $suffix;
    }
}

if (! function_exists('str_slug')) {
    function str_slug($title, $separator = '-', $language = 'en'){

        return \Illuminate\Support\Str::slug($title, $separator , $language);
    }
}

if (!function_exists('array_get')){
    function array_get($array, $key, $default = null){
        return \Illuminate\Support\Arr::get($array, $key, $default);
    }
}


if (! function_exists('__date')) {
    function __date($format, $date)
    {   
        $date->setLocale(\App::getLocale());
        $suffix = str_ordinal($date->format('d'));
        return $date->formatLocalized(__($format, ['suffix' => $suffix]));
    }
}

if (!function_exists('__decodeId')) {
    function __decodeId($id){
        $hashids = new Hashids\Hashids(env('HASHIDS_SALT'));
        return  $hashids->decode($id);
    }
}

if (!function_exists('__elq')) {
    function __elq($model, $attribute, $default = "") {
        if (empty($model)) {
            return $default;
        }else{
            return $model->$attribute;
        }
    }
}

if (!function_exists('__realIp')) {
    function __realIp(){

        if( array_key_exists('HTTP_X_FORWARDED_FOR', $_SERVER) && !empty($_SERVER['HTTP_X_FORWARDED_FOR']) ){
            $client_ip = ( !empty($_SERVER['REMOTE_ADDR']) ) ? $_SERVER['REMOTE_ADDR'] : ( ( !empty($_ENV['REMOTE_ADDR']) ) ? $_ENV['REMOTE_ADDR'] : "unknown" );

            // los proxys van a�adiendo al final de esta cabecera
            // las direcciones ip que van "ocultando". Para localizar la ip real
            // del usuario se comienza a mirar por el principio hasta encontrar
            // una direcci�n ip que no sea del rango privado. En caso de no
            // encontrarse ninguna se toma como valor el REMOTE_ADDR

            $entries = preg_split('[, ]', $_SERVER['HTTP_X_FORWARDED_FOR']);

            reset($entries);
            while (list(, $entry) = each($entries))
            {
                $entry = trim($entry);
                if ( preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list) )
                {
                    // http://www.faqs.org/rfcs/rfc1918.html
                    $private_ip = array(
                        '/^0\./',
                        '/^127\.0\.0\.1/',
                        '/^192\.168\..*/',
                        '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
                        '/^10\..*/'
                    );

                    $found_ip = preg_replace($private_ip, $client_ip, $ip_list[1]);

                    if ($client_ip != $found_ip){
                        $client_ip = $found_ip;
                        break;
                    }
                }
            }
        }else{
            $client_ip = ( !empty($_SERVER['REMOTE_ADDR']) ) ? $_SERVER['REMOTE_ADDR'] : ( ( !empty($_ENV['REMOTE_ADDR']) ) ? $_ENV['REMOTE_ADDR'] : "unknown" );
        }

        return $client_ip;

    }
}

if (!function_exists('__country')) {

    function __country(){
        
        static $country = "";
        $record = "";

        if($country != ""){
            return $country;
        }

        try {
            $ipCliente = trim(__realIp());
            //$ipCliente = '52.232.201.123'; // USA
            //$ipCliente = '187.188.15.212'; // MEX
            //$ipCliente = '5.8.46.0'; // ARG
            //$ipCliente = '5.8.46.128'; //  COL
            //$ipCliente = '5.10.128.0'; //  France FRA
            //$ipCliente = '5.10.136.0'; //  United Kingdom GBR
            //$ipCliente = '5.10.192.0'; //  Netherlands NLD

            $reader = new Reader(base_path() . "/ip_database/GeoLite2-Country.mmdb");
            $record = $reader->country($ipCliente);
            $country = $record->country->isoCode;
        } catch (Exception $e) {
            $country = "";
        }
        return $country;
    }

}

if(!function_exists('__currency')){
    function __currency()
    {
        static $currency = '';

        if($currency != ''){
            return $currency;
        }

        $country = __country();
        $lang = \App::getLocale();

        $currency = 'USD';
        if($country == 'MX' && $lang == 'es'){
            $currency = 'MXN';
        }

        return $currency;
    }
}

if (!function_exists('__phone')) {
    function __phone($group = '')
    {
        $country = __country();

        if (empty($country)) {
            $phone = __('telefonos.'.$group.'.INTERNATIONAL');
            
        }else{
            $phone = __('telefonos.'.$group.'.'.$country);
            if (!is_array($phone)) {
                $phone = __('telefonos.'.$group.'.INTERNATIONAL');
            }
        
        }
        return $phone;
    }
}

if (!function_exists('__exchangeRateToMXN')) {
    
    
    function __exchangeRateToMXN($rate, $hotel)
    {   
        static $exchangeRateMXN = [];

        if(empty($exchangeRateMXN)){
            $exchangeRateMXN = \App\Model\Currency::where('currency','MXN')->get();
        }

        $exchange = $exchangeRateMXN->firstWhere('resort_ihotelier',$hotel);
        return $rate * $exchange->exchange_rate;
    }
}

if(!function_exists('__langUrl')){
    function __langUrl($lang, $options = "" , $default = true)
    {
        static $urlEn = "";
        static $urlEs = "";

        if($urlEs != "" && $urlEn != ""){
            return ($lang == "en")? $urlEn : $urlEs;
        }

        $request   = \Route::getCurrentRequest();
        $path      = '/' .$request->path();
        $host      = 'https://'.$request->getHost();
        $hostEs      = 'https://'.$request->getHost()."/es";
        $routeName = \Route::currentRouteName();

        if($routeName != 'concept.detail' && $routeName != 'home'){
            $route = DB::table('hreflang')
                ->where(\App::getLocale(), $path)
                ->first();
                if($route != null){
                    $urlEn = $host.$route->en;
                    $urlEs = $host.$route->es;
                }
        }elseif($routeName == 'home'){
            $urlEn = $host;
            $urlEs = $hostEs;
        }else{
            if($options != ""){
                if($options['concept_en'] != ""){
                    $urlEn = $host."/deals/hotels/".$options['concept_en'];
                }else{
                    //                    $urlEn = $host;
                }

                if($options['concept_es'] != ""){
                    $urlEs = $hostEs."/ofertas/hoteles/".$options['concept_es'];
                }else{
                    //                    $urlEs = $hostEs;
                }
            }
        }

        $returnUrl = ($lang == "en")? $urlEn : $urlEs;

        if ($default){
            $default = ($lang == "en") ? $host: $hostEs;
            $returnUrl = ($returnUrl == "")? $default : $returnUrl;
        }

        return $returnUrl;
    }
}

if (!function_exists('__canonical')){
    function __canonical(){
        $request   = \Route::getCurrentRequest();
        $path      = ('/' .$request->path() == '//')?'/': '/' .$request->path();
        $host      = 'https://'.$request->getHost();

        return  $host.$path;
    }
}

if(!function_exists('__hreflang')){
    function __hreflang()
    {
        $retVal = "";
        $canonical = __canonical();

        $retVal .= '<link rel="canonical" href="'.$canonical.'" >';

        if (__langUrl('en',"", false) != ""){
            $urlEn = __langUrl('en');
            if($urlEn != ''){
                $retVal .= '<link rel="alternate" href="'.$urlEn.'" hreflang="en">';
            }
        }

        if (__langUrl('es',"", false) != ""){
            $urlEs = __langUrl('es');
            if($urlEs != ''){
                $retVal .= '<link rel="alternate" href="'.$urlEs.'" hreflang="es">';
            }
        }

        return $retVal;
    }
}

if(!function_exists('__webp')){
    function __webp($img){
        return str_replace('.jpg', '.webp', $img);
    }
}

if(!function_exists('__smallword')){
    function __smallword(iterable $words):string{
        if(count($words) > 0){
            usort($words,function($a,$b){
                $a = strlen($a);
                $b = strlen($b);
                if($a == $b){
                    return 0;
                }
                return $a < $b ? -1:1;
            });
            return $words[0];
        }
        return '';
    }
}