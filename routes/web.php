<?php
use Vinkla\Instagram\Instagram;

$locale = Request::segment(1);
if(!in_array($locale, ['en','es'])) {
    $locale = config('app.fallback_locale');
}

App::setLocale($locale);
if ($locale == 'es') {
    setlocale(LC_ALL, 'es_MX');
}else{
    setlocale(LC_ALL, $locale);
}

if($locale === config('app.fallback_locale')) {
    $locale = "";
}
\Carbon\Carbon::setLocale(\App::getLocale());

$atribs="";

//==================================================================================================
// Api Conversion
//==================================================================================================
//Route::get('api/collect', 'ApiConversionController@collectAddPayment');


//==================================================================================================
// Promociones de royalresorts.com
//==================================================================================================
Route::get('includes/promos', 'RoyalResortsController@promos');
Route::get('es/includes/promos-es', 'RoyalResortsController@promosEs');

//==================================================================================================
// Voy a ganar
// Se agrega fuera del group ya que por el momento solo se va a mostrar en español 
//==================================================================================================
Route::get('es/concursos/voy-a-ganar','ConcursosController@index')->name('concursos.index');
Route::get('es/concursos/terminos-y-condiciones','ConcursosController@terminos')->name('concursos.terminos');
Route::post('es/subscripcion-oferta/enviar', 'SupscriptionController@supscription')->name('formSubscripcion');

Route::get('/customer-choice', 'SiteController@CustomerChoice');

Route::get('/currency', 'UsdToMxnController@index');
Route::get('/currency/mxn/{hotelId}', 'UsdToMxnController@getMxn');

Route::get('/base',function(){
    return view('v2/templates/base',['page' => 'base']);
});


Route::get('ip-test',function (){
    __country();
});

Route::group(['prefix' => $locale], function () {

    Route::get('/','SiteController@home')->name('home');

    /**
     Route::get('/', function () {
         return view('templates/home', ['type' => 'home','chat'=>'general','page'=>'','atribs'=>'']);
         //return view('layout', ['type' => 'home','chat'=>'general']);
    })->name('home');
    **/

    Route::get('/en', function () {
        return redirect()->route('home');
    });




    //==================================================================================================
    // Landing de Facebook
    //==================================================================================================
    Route::post('/facebook/destinations', 'FacebookController@destinations')->name('facebook.destinations_signed');
    Route::get('/facebook/destinations', 'FacebookController@destinations')->name('facebook.destinations');
    Route::get('/facebook/offers', 'FacebookController@offers')->name('facebook.offers');
    Route::post('/facebook/offers', 'FacebookController@offers');
    Route::post('/facebook/resort/{resort}', 'FacebookController@resort')->name('facebook.resort_signed');
    Route::get('/facebook/resort/{resort}', 'FacebookController@resort')->name('facebook.resort');


    //==================================================================================================
    // Landing de COVID-19
    //==================================================================================================
    Route::get(__('routes.news').'/'.__('routes.covid-19'),'SiteController@pages')->name('page.covid-19');

    Route::get('/royalcarestandard', function ()
    {
         return view('v2.news.royalcarestandard',[
            'type' => 'home',
            'chat'=>'general',
            'page'=>'royalcarestandard',
            'js_v2'       => true

         ]);
    })->name('royalcarestandard');

    Route::get(__('routes.we-are-ready-at-simpson-bay-resort'), function ()
    {
        return view('v2.news.royalcare-simpsonbayresort',[
            'type' => 'home',
            'chat'=>'general',
            'page'=>'royalcarestandard',
            'js_v2'       => true

        ]);
    })->name('royalcarestandard-simpson-bay');

    ##New Agent Routes
    Route::post('/passwords/email','Auth\ForgotPasswordController@sendResetLinkEmail')->name('agent.reset.mail');
    Route::post('/passwords/reset','Auth\ResetPasswordController@reset')->name('agent.resetform.mail');
    Route::get('/logout','Auth\LoginController@logoutAgent')->name('logout.agent');

    Route::group(['prefix' => __('agent.url.main')],function(){
        Route::get('/login','Auth\LoginController@showAgentLoginForm')->name('login.show');
        Route::get('/'.__('agent.url.help'),'AgentController@help')->name('agent.help');
        Route::get('/sign-up','AgentController@signup')->name('agent.signup');
        Route::get('/reset-password/{token?}','AgentController@reset')->name('agent.reset');
        Route::get('/verify-iata/{iata?}','AgentController@verifyIata');
        Route::post('/agent','Auth\LoginController@agentLogin')->name('login.agent');
        Route::post('/register','AgentController@store')->name('agent.register');
    });

    ## Feb 10 2020 Landing de aterrizaje de anuncio de pago de Claudia Desquens
    ## beach-destinations/caribbean-islands

    Route::get('beach-destinations/caribbean-islands', function(){
        $page= 'caribbean-islands';
        $chat="caribe";
        return view('v2.templates.sub-inter-special-anuncio',array('page'=>$page,'chat'=>$chat,'js_v2' => 'js_v2'));
    });

    #Dashboard Agents
    /*Route::group(['prefix' => 'agent','middleware' => []], function () {
        Route::get('/','AgentController@index');
        Route::get('/offers','AgentController@offers');
    });*/

    ##New Agent Routes

    Route::get('agentes-royal-resorts', function(){
        $page= "agentes-royal-resorts";
        return view('templates/agentes',array('page'=>$page));
    });

    Route::get('/en/agents-royal-resorts', function(){
        $page= "agentes-royal-resorts";
        return view('templates/agentes',array('page'=>$page));
    })->name('agentsEn');

    Route::get(__('routes.webcams'), function(){
        return view('v2/templates/webcams',array('page'=>__('routes.webcams')));
    })->name('webcams');

    Route::get('/{interna}', function($interna){
        $page= $interna;
        $chat="general";
        return view('templates/interna',array('page'=>$page,'chat'=>$chat));
    });

    //==================================================================================================
    // Destinos Que hacer en
    //==================================================================================================
    Route::get(__('routes.beach_destinations').'/{interna}/{thingsToDoIn}', 'DestinationController@destination')
        ->where('thingsToDoIn', implode('|', __('routes.things_to_do_in') ));

    //==================================================================================================
    // Destinos deals
    //==================================================================================================
    Route::get(__('routes.beach_destinations').'/{destination}/'.__('routes.vacation-special').'{subinterna}', 'DestinationController@deals');


    Route::get(__('routes.beach_destinations').'/{interna}/{subinterna}', function($interna, $subinterna){
        $page='destinations-intern';
        $chat='general';

        if($interna== 'cancun' || $interna=='playa-del-carmen' || $interna == 'the-royal-sands' ||  $interna == 'the-royal-islander'
            || $interna == 'the-royal-cancun' || $interna == 'the-royal-haciendas')
        {
            $chat="mexico";
        }

        if($interna=='st-maarten' ||$interna=='curacao'
        ||$interna =='the-villas-at-simpson-bay-resort'
        ||$interna =='simpson-bay-resort' || $interna=='the-royal-sea-aquarium' )
        {
            $chat="caribe";
        }
        if($interna=='puerto-morelos' || $interna=='grand-residences-riviera-cancun' || $interna=='riviera-maya')
        {
            $chat="royal-gr";
        }

        if($interna=='punta-cana' || $interna=='ancora' || $interna =='del-mar' || $interna=='casa-de-campo')
        {
            $chat="punta-cana";
        }
        if($interna=='royal-uno')
        {
            $chat="royal-uno";
        }

        if (strpos($subinterna, 'vacation-special-') !== false || strpos($subinterna, 'ofertas-de') !== false) {
            $page="destinations-offers";
        }

        if (strpos($subinterna, 'the-best-beach-resorts-in-') !== false || strpos($subinterna, 'los-mejores-hoteles-de-playa-en-') !== false) {
            $page="destinations-resorts";
        }

        return view('templates/interna', array(
            'page'=>$page,
            'destino'=>$interna,
            'subinterna'=>$subinterna,
            'chat' =>$chat
        ));
    });

    //==================================================================================================
    // Resorts about
    //==================================================================================================
    //Route::get(__('routes.beach_resorts').'/{resort}/{about}','ResortController@about')
    //    ->where('about', implode('|', __('routes.hotels-about-url')))
    //    ->name('resort.about');
    Route::get(__('routes.beach_resorts').'/{resort}','ResortController@about')
        ->where('resort', implode('|', array_keys(__('routes.hotels-identifier'))) )
        //->where('about', implode('|', __('routes.hotels-about-url')))
        ->name('resort.about');

    //==================================================================================================
    // Resorts deals
    //==================================================================================================
    Route::get(__('routes.beach_resorts').'/{resort}/{deals}','ResortController@deals')
        ->where('deals', implode('|', __('routes.hotels-deals-url')))
        ->name('resort.deals');

    //==================================================================================================
    // Resorts reviews
    //==================================================================================================
    Route::get(__('routes.beach_resorts').'/{resort}/{reviews}', 'ResortController@reviews')
        ->where('reviews', '((.*)-(resort-reviews|comentarios)|(reviews-royal-uno-resort|comentarios-royal-uno-resort))')
        ->name('resort.reviews');

    //==================================================================================================
    // Resorts rooms
    //==================================================================================================
    Route::get(__('routes.beach_resorts').'/{resort}/{rooms}', 'ResortController@rooms')
        ->where('rooms', '(.*)(rooms-in-|habitaciones-familiares)(.*)')
        ->name('resort.rooms');

    //==================================================================================================
    // Resorts todos los demas 
    //==================================================================================================
    Route::get(__('routes.beach_resorts').'/{resort}/{interna}/{subinterna?}', function($resort,$interna, $subinterna=false){
    	$locale = App::getLocale();
        //Para la vista interna busco la parte de la cadena que hace referencia a la sección
        $page="resorts-intern";
        $atribs="";

        if (strpos($interna, 'rooms-in-') !== false || strpos($interna, 'habitaciones-familiares') !== false) {
            $page="resorts-atrib";
            $atribs="habitaciones";
        }

        if (strpos($interna, 'activities') !== false || strpos($interna, 'actividades') !== false) {
            $page="resorts-atrib";
            $atribs="actividades";
        }

        if (strpos($interna, 'room-only') !== false || strpos($interna, 'plan-europeo-') !== false) {
            $page="resorts-atrib-allinclusive";
            $atribs = "rate-plans";
        }

        if (strpos($interna, 'all-inclusive-') !== false) {
            if (strpos($interna, '-vacation') !== false) {
                $page="resorts-atrib-allinclusive";
                $atribs = "rate-plans";
            }
        }
        if (strpos($interna, 'todo-incluido-') !== false) {
            $page="resorts-atrib-allinclusive";
            $atribs = "rate-plans";
        }

        if (strpos($interna, 'bed-and-breakfast') !== false || strpos($interna, '-desayuno-incluido-') !== false) {
            $page="resorts-atrib-allinclusive";
            $atribs = "rate-plans";
        }

        if (strpos($interna, '-photos') !== false || strpos($interna, 'fotos-de') !== false) {
            $page="resorts-atrib";
            $atribs="galeria";
        }

        if (strpos($interna, 'restaurants-in-') !== false || strpos($interna, 'restaurantes-en-') !== false) {
            $page="resorts-atrib";
            $atribs="restaurantes";
        }

        if (strpos($interna, '-resort-reviews') !== false || strpos($interna, '-comentarios') !== false) {
            $page="resorts-atrib";$atribs="reviews";
        }

        if (strpos($interna, '-vacation-deals') !== false || strpos($interna, 'ofertas-de-hoteles-en') !== false || strpos($interna, 'promociones-de-hoteles-de-lujo-en') !== false) {
            $page="resorts-atrib";
            $atribs="specials";
        }

        if (strpos($interna, '-policies') !== false || strpos($interna, 'politicas-') !== false) {
            $page="resorts-atrib";
            $atribs="policies";
        }

        if($locale =='en'){
        	$restaurants="restaurants-in-".$resort;
        	$gallery=$resort."-resort-photos";
        	$policies=$resort."-resort-policies";
        	$reviews=$resort."-resort-reviews";
        }else{
        	if($locale =='es'){
		    	$restaurants="restaurantes-en-".$resort;
		    	$gallery="fotos-del-hotel-".$resort;
		    	$policies="politicas-del-hotel-".$resort;
		    	$reviews=$resort."-hotel-comentarios";
        	}
        }

        switch ($resort) {
            case 'the-royal-sands':
                $rhome="";
                if($locale =='en'){
                	$rooms="family-rooms-in-cancun-resort";
                	$amenities="resort-in-cancun-with-family-activities";
                	$specials="cancun-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="hoteles-en-cancun-con-habitaciones-familiares";
	                	$amenities="hoteles-en-cancun-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-cancun";
                	}
                }
                $ep="-";
                $ai="all-inclusive-cancun-vacation";
                $bb="-";
                $chat="mexico";
                \View::share('phoneGroup', 'MEXICO');
                break;
            case 'the-royal-islander':
                $rhome="";
                if($locale =='en'){
                	$rooms="family-rooms-in-cancun-resort";
                	$amenities="resort-in-cancun-with-family-activities";
                	$specials="cancun-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="hoteles-en-cancun-con-habitaciones-familiares";
	                	$amenities="hoteles-en-cancun-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-cancun";
                	}
                }
                $ep="room-only-cancun-vacation";
                $ai="-";
                $bb="bed-and-breakfast-cancun-vacation";
                $chat="mexico";
                \View::share('phoneGroup', 'MEXICO');

                break;
            case 'the-royal-caribbean':
                $rhome="";
                if($locale =='en'){
                	$rooms="family-rooms-in-cancun-resort";
                	$amenities="resort-in-cancun-with-family-activities";
                	$specials="cancun-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="hoteles-en-cancun-con-habitaciones-familiares";
	                	$amenities="hoteles-en-cancun-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-cancun";
                	}
                }
                $ep="room-only-cancun-vacation";
                $ai="-";
                $bb="bed-and-breakfast-cancun-vacation";
                $chat="mexico";
                \View::share('phoneGroup', 'MEXICO');

                break;
            case 'the-royal-cancun':
                $rhome="";
                if($locale =='en'){
                	$rooms="family-rooms-in-cancun-resort";
                	$amenities="resort-in-cancun-with-family-activities";
                	$specials="cancun-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="hoteles-en-cancun-con-habitaciones-familiares";
	                	$amenities="hoteles-en-cancun-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-cancun";
                	}
                }

                $ep="room-only-cancun-vacation";
                $ai="all-inclusive-cancun-vacation";
                $bb="bed-and-breakfast-cancun-vacation";
                $chat="mexico";
                \View::share('phoneGroup', 'MEXICO');

                break;
            case 'grand-residences-riviera-cancun':
                if($locale =='en'){
                	$rhome="";
                	$rooms="luxury-family-rooms-in-riviera-maya";
                	$amenities="luxury-resort-in-riviera-maya-with-family-activities";
                	$specials="luxury-vacation-deals-in-riviera-maya";
                	$restaurants="luxury-restaurants-in-grand-residences-riviera-cancun";
                	$gallery=$resort."-photos";

                }else{
                	if($locale =='es'){
	                	$rhome="";
	                	$rooms="hoteles-de-lujo-en-riviera-maya-con-habitaciones-familiares";
	                	$amenities="actividades-en-hotel-de-lujo-en-riviera-maya";
	                	$specials="promociones-de-hoteles-de-lujo-en-riviera-maya";
	                	$restaurants="restaurantes-en-grand-residences-riviera-cancun";
                        $gallery = "fotos-de-".$resort;
		    	        $reviews = $resort."-comentarios";

                	}
                }

                $ep="room-only-riviera-maya-vacation";
                $ai="all-inclusive-riviera-maya-vacation";
                $bb="bed-and-breakfast-riviera-maya-vacation";
                $policies=$resort."-policies";
                $chat="royal-gr";
                \View::share('phoneGroup', 'MEXICO');

                break;
            case 'the-royal-haciendas':
                $rhome="";
                if($locale =='en'){
                	$rooms="family-rooms-in-playa-del-carmen-resort";
                	$amenities="resort-in-playa-del-carmen-with-family-activities";
                	$specials="playa-del-carmen-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="hoteles-en-playa-del-carmen-con-habitaciones-familiares";
	                	$amenities="hoteles-en-playa-del-carmen-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-playa-del-carmen";
                	}
                }

                $ep="room-only-playa-del-carmen-vacation";
                $ai="all-inclusive-playa-del-carmen-vacation";
                $bb="-";
                $chat="mexico";
                \View::share('phoneGroup', 'MEXICO');

                break;
            case 'the-villas-at-simpson-bay-resort':
                $rhome="";
                if($locale =='en'){
                	$rooms="rooms-in-st-maarten-island";
                	$amenities="resort-in-st-maarten-activities";
                	$specials="st-maarten-island-resort-vacation-deals";
                	$gallery=$resort."-photos";
                	$reviews=$resort."-reviews";
                }else{
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-isla-st-maarten";
	                	$amenities="actividades-en-hotel-de-st-maarten";
	                	$specials="ofertas-de-hoteles-en-isla-st-maarten";
	                	$gallery="fotos-del-hotel-the-villas-at-simpson-bay";
	                	$reviews="the-villas-at-simpson-bay-resort-comentarios";
                	}
                }

                $ep="room-only-st-maarten-vacation";
                $ai="-";
                $bb="bed-and-breakfast-st-maarten-vacation";
                $policies=$resort."-policies";
                $chat="caribe";

                \View::share('phoneGroup', 'SAINT-MARTIN');

                break;
            case 'simpson-bay-resort':
                $rhome="";
                if($locale =='en'){
                	$rooms="rooms-in-st-maarten-island";
                	$amenities="resort-in-st-maarten-activities";
                	$specials="st-maarten-island-resort-vacation-deals";
                	$gallery=$resort."-photos";
                	$reviews=$resort."-reviews";
                }else{
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-isla-st-maarten";
	                	$amenities="actividades-en-hotel-de-st-maarten";
	                	$specials="ofertas-de-hoteles-en-isla-st-maarten";
	                	$gallery="fotos-del-hotel-simpson-bay-resort";
                        $reviews="simpson-bay-resort-comentarios";
                        $restaurants="restaurantes-en-simpson-bay";
                	}
                }

                $ep="room-only-st-maarten-vacation";
                $ai="-";
                $bb="bed-and-breakfast-st-maarten-vacation";
                $policies=$resort."-policies";
                $chat="caribe";
                \View::share('phoneGroup', 'SAINT-MARTIN');

                break;
            case 'the-royal-sea-aquarium':
                $rhome="";
                if($locale =='en'){
                	$rooms="rooms-in-curacao-island";
                	$amenities="resort-in-curacao-activities";
                	$specials="curacao-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-curacao";
	                	$amenities="actividades-en-hotel-de-curacao";
	                	$specials="ofertas-de-hoteles-en-curacao";
                	}
                }

                $ep="room-only-curacao-vacation";
                $ai="-";
                $bb="bed-and-breakfast-curacao-vacation";
                $chat="caribe";
                \View::share('phoneGroup', 'SAINT-MARTIN');

                break;
            case 'ancora':
                $rhome="";
                if($locale =='en'){
                	$rooms="family-rooms-in-punta-cana";
                	$amenities="resort-in-punta-cana-with-family-activities";
                	$specials="punta-cana-resort-vacation-deals";
                    $restaurants="restaurants-in-ancora-punta-cana-resort";
                }else{
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-punta-cana";
	                	$amenities="hoteles-en-punta-cana-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-punta-cana";
                        $restaurants="restaurantes-en-resort-ancora-punta-cana";
                	}
                }

                $ep="room-only-punta-cana-vacation";
                $ai="all-inclusive-punta-cana-vacation";
                $chat="punta-cana";
                $bb="-";
                \View::share('phoneGroup', 'PUNTA-CANA');

                break;
            case 'del-mar':
                $rhome="";
                if($locale =='en'){
                	$rooms="family-rooms-in-punta-cana";
                	$amenities="resort-in-punta-cana-with-family-activities";
                	$specials="punta-cana-resort-vacation-deals";
                	$restaurants="restaurants-in-del-mar-resort";
                }else{
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-punta-cana";
	                	$amenities="hoteles-en-punta-cana-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-punta-cana";
	                	$restaurants="restaurantes-en-del-mar-resort";
                	}
                }

                $ep="room-only-punta-cana-vacation";
                $ai="all-inclusive-punta-cana-vacation";
                $bb="-";
                $chat="punta-cana";
                \View::share('phoneGroup', 'PUNTA-CANA');

                break;
            case 'casa-de-campo':
                $rhome="";
                if($locale =='en'){
                	$rooms="family-rooms-in-punta-cana";
                	$amenities="resort-in-punta-cana-with-family-activities";
                	$specials="punta-cana-resort-vacation-deals";
                }else{
                	if($locale =='es'){
	                	$rooms="habitaciones-familiares-en-punta-cana";
	                	$amenities="hoteles-en-punta-cana-con-actividades-para-ninos";
	                	$specials="ofertas-de-hoteles-en-punta-cana";
                	}
                }

                $ep="room-only-punta-cana-vacation";
                $ai="all-inclusive-punta-cana-vacation";
                $bb="-";
                $chat="punta-cana";
                \View::share('phoneGroup', 'PUNTA-CANA');

                break;
            case 'royal-uno':
                $rhome = '';
                $rooms = 'family-rooms-in-cancun-resort';
                $amenities = 'resort-in-cancun-with-family-activities';
                $restaurants = 'restaurants-in-royal-uno-resort';
                $specials = 'cancun-resort-deals';
                $reviews="reviews-royal-uno-resort";
                $gallery="royal-uno-resort-photos";

                if ($locale == 'es') {
                    $rooms = '';
                    $amenities = 'hoteles-en-cancun-con-actividades-familiares';
                    $restaurants = 'restaurantes-en-royal-uno-resort';
                    $specials = 'ofertas-de-hoteles-en-cancun';
                    $reviews = 'comentarios-royal-uno-resort';
                    $gallery = 'fotos-de-hotel-royal-uno-resort';
                }

                $ep="-";
                $ai="all-inclusive-punta-cana-vacation";
                $bb="-";
                $chat="royal-uno";
                \View::share('phoneGroup', 'MEXICO');

                break;
            default:
                $rhome="home";
                $rooms="rooms";
                $specials="specials";
                $reviews="reviews";
                $restaurants="restaurants";
                $chat="general";

                /**
                ** En caso de no existir el resort se manda un 404
                **/
                return redirect()->route('home');

                break;
        }

        $url=Request::fullUrl();
        $filtro= strstr($url,"filtros=");
        if(!$filtro){
            $filtro="filtros=all";
        }

        /*if ($resort == 'royal-uno') {
            return redirect()->route('home');
        }*/
        //dd(array('page'=>$page,'resort'=>$resort,'interna'=>$interna,'subinterna'=>$subinterna,'atribs'=>$atribs,'chat'=>$chat,'rhome'=>$rhome,'rooms'=>$rooms,'specials'=>$specials,'amenities'=>$amenities,'ep'=>$ep,'ai'=>$ai,'bb'=>$bb,'restaurants'=>$restaurants,'gallery'=>$gallery,'reviews'=>$reviews));
        return view('templates/interna',array('page'=>$page,'resort'=>$resort,'interna'=>$interna,'subinterna'=>$subinterna,'atribs'=>$atribs,'chat'=>$chat,'rhome'=>$rhome,'rooms'=>$rooms,'specials'=>$specials,'amenities'=>$amenities,'ep'=>$ep,'ai'=>$ai,'bb'=>$bb,'restaurants'=>$restaurants,'gallery'=>$gallery,'reviews'=>$reviews,'filtro'=>$filtro));
    })->where('interna', '^(?!the-royal-$|\.\.\.$|the\.\.\.$).*');


    // Type of trips
    // Route::get('/'.__('routes.experiences').'/{subinterna}', function($subinterna){
    //     $page='vacation-experiences-intern';
    //     $chat="general";
    //     return view('templates/interna',array('page'=>$page,'chat'=>$chat,'trip'=>$subinterna));
    // });

    Route::get('/'.__('routes.experiences').'/{subinterna}','DestinationController@experiences');

    // Specials
    /*Route::get('/'.__('routes.deals').'/'.__('routes.hotels').'/{destino}/{subinterna}', function($destino,$subinterna){
        $page='sub-inter-special';
        $chat="general";       
        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'destino'=>$destino,'slug'=>$subinterna));
    });*/

    //==================================================================================================
    // Detalle de concepto
    //==================================================================================================
    Route::get('/'.__('routes.deals').'/'.__('routes.hotels'), 'SiteController@deals')->name('site.deals');

    //Route::get('/'.__('routes.deals').'/'.__('routes.hotels'), function(){
    //    $page="deals";
    //    $chat="general";
    //    return view('templates/interna',array('page'=>$page,'chat'=>$chat));
    //});

    //==================================================================================================
    // Detalle de concepto
    //==================================================================================================
    Route::get('/'.__('routes.deals').'/'.__('routes.hotels').'/{concepto}','SiteController@conceptDetail')->name('concept.detail');

    //==================================================================================================
    // Preview de concepto
    //==================================================================================================
    Route::get('/deals/preview/{id}','SiteController@conceptPreview')->name('concept.preview');


    /*
    Route::get('/'.__('routes.deals').'/'.__('routes.hotels').'/{slug}', function($slug){
        $page="sub-inter-special";
        $chat="general";
        $url=Request::fullUrl();
        $filtro= strstr($url,"filtros=");
        if(!$filtro){
            $filtro="filtros=all";
        }

        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'slug'=>$slug,'filtro'=>$filtro));
    });
    */

    Route::get('/'.__('routes.deals').'/'.__('routes.hotels').'/{destino}', function($destino){
        $page='sub-inter-special';
        $chat="general";
        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'destino'=>$destino));
    });

    // Tour packages
    Route::get('/tour-packages/{subinterna}', function($subinterna){
        $page='tour-packages-intern';
        $chat="general";
        if($subinterna=='cancun' || $subinterna=='playa-del-carmen'){
            $chat="mexico";
        }
        return view('templates/interna',array('page'=>$page,'chat'=>$chat));
    });

    // About Us
    Route::get('/'.__('routes.aboutus').'/{subinterna}', function($subinterna){
        $page='aboutus-intern';
        $chat="general";
        switch ($subinterna) {
            case 'why-book-with-royalreservations': $isvalid=1; break;
            case 'best-deal-guaranteed':            $isvalid=1; break;
            case 'terms-of-use':                    $isvalid=1; break;
            case 'privacy-policy':                  $isvalid=1; break;
            case 'cookies-policy':                  $isvalid=1; break;

            case 'por-que-reservar-con-royalreservations': $isvalid=1; break;
            case 'mejor-oferta-garantizada':               $isvalid=1; break;
            case 'terminos-de-uso':                        $isvalid=1; break;
            case 'politica-de-privacidad':                 $isvalid=1; break;
            case 'politica-de-cookies':                 $isvalid=1; break;

            default:    $isvalid=0; break;
        }
        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'area'=>$subinterna,'isvalid'=>$isvalid));
    });

    // Adicionales
    Route::get('/assistcard/{subinterna}', function($subinterna){
        return view('templates/adicionales',array('page'=>$subinterna));
    });

    // Call Center
    Route::get('/call-center/'.__('routes.deals').'/'.__('routes.hotels').'/{slug}', function($slug){
        $page="call-center";
        $chat="general";
        $url=Request::fullUrl();
        $filtro= strstr($url,"filtros=");
        if(!$filtro){
            $filtro="filtros=all";
        }
        return view('templates/interna',array('page'=>$page,'chat'=>$chat,'slug'=>$slug,'filtro'=>$filtro));
    });


    Route::post('/agents-royal/send', 'EmailController@postSendForm')->name('formProcesaEnvio');

    Route::post('/supsciption-deals/send', 'SupscriptionController@supscription')->name('formSupscription');

    //==================================================================================================
    // GMS
    //==================================================================================================
    Route::get('gms/update', 'GmsController@updateUser');
    Route::get('gms/is-repetitive', 'GmsController@isRepetitive');

    Route::get('/gms/log-in','GmsController@signUp')->name('gms.sign-up');
    Route::get('/gms/verify','GmsController@signUp');
    Route::post('/gms/log-in','GmsController@postSignUp');
    Route::get('/gms/log-in-sso','GmsController@getSignUpSso')->name('gms.sign-up-sso');

    Route::get('/gms/register','GmsController@register')->name('gms.register');
    Route::post('/gms/register','GmsController@postRegister');

    Route::get('/gms/reset-your-password','GmsController@resetPassword')->name('gms.reset-your-pasword');
    Route::post('/gms/reset-your-password','GmsController@postResetPassword');

    Route::get('/gms/dashboard','GmsController@dashboard')->name('gms.dashboard');
    Route::get('/gms/reservations','GmsController@reservations')->name('gms.reservations');

    Route::get('/gms/account-management','GmsController@accountManagement')->name('gms.account-management');
    Route::post('/gms/change-password','GmsController@changePassword')->name('gms.change-password');
    Route::post('/gms/change-email','GmsController@changeEmail')->name('gms.change-email');

    Route::get('/gms/personal-information' ,'GmsController@personalInformation')->name('gms.personal-information');
    Route::post('/gms/personal-information' ,'GmsController@postPersonalInformation');

    Route::get('/gms/preferences','GmsController@preferences')->name('gms.preferences');
    Route::get('/gms/configuration','GmsController@configuration')->name('gms.configuration');

    Route::get('/gms/log-out', "GmsController@logOut")->name('gms.log-out');

    Route::get('/gms/royaluno', 'GmsController@royaluno');

    Route::post('time-share-contact','SupscriptionController@sendDataTimeShare')->name('time-share.contact');

    Route::post('/token', 'ApiRatesController@getToken');

});


Auth::routes();

Route::any('{catchall}', function ()
{
    abort(404);
});

//Route::get('/home', 'HomeController@index')->name('home');
