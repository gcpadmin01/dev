<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Model\{ConceptResort,Resort,PlaceInteresting,PlaceInterestingResort};
use App\Model\Concept;
use App\Model\Review;

class ResortController extends Controller
{
    public function about($resort)
    {
        /*if ($resort == 'royal-uno') {
            return redirect()->route('home');
        }*/

        $resortId = __('routes.hotels-identifier.'.$resort);
        
        if ($resortId == 'routes.hotels-identifier.'.$resort) {
            abort(404);
        }

        $interna = __('routes.hotels-about-url')[$resortId];

        $resorts = ConceptResort::where('resort_id',$resortId)
            ->where('seccion','like', '%"'.ConceptResort::RESORT.'"%')
            ->whereHas('concept',function ($query)
            {
                $query->vigencia(['vig' => true])
                    ->visibility(Concept::VIEW_WEB);
            })
            ->with([
                'ratePlan',
                'concept' => function ($query){
                    $query->with([
                        'content' => function($query)
                        {
                            $query->lang(\App::getLocale());
                        }
                    ]);
                },
                'resort' => function ($query)
                {
                    $query->with('destination');
                },
                'content' => function ($query)
                {
                    $query->lang(\App::getLocale());
                }
            ])
            ->get();
        
        $resorts = $resorts->sortBy(function ($model)
        {   
            if (!isset($model->seccion[ConceptResort::RESORT])) {
                return 0;
            }
            return $model->seccion[ConceptResort::RESORT];
        });

        $conceptAmenity = Concept::where('seccion','like','%"'.Concept::RESORT_AMENITIE.'_'.$resortId.'"%')
                ->vigencia(['vig' => true])
                ->visibility(Concept::VIEW_WEB)
                ->orderBy('id','desc')
                ->with([
                    'content' => function($query)
                    {
                        $query->lang(\App::getLocale());
                    }
                ])
                ->first();
                    
        $rhome = __('routes.hotels-seccion-url')[$resortId]['home'];
        $rooms = __('routes.hotels-seccion-url')[$resortId]['rooms'];
        $specials = __('routes.hotels-seccion-url')[$resortId]['specials'];
        $reviews = __('routes.hotels-seccion-url')[$resortId]['reviews'];
        $restaurants = __('routes.hotels-seccion-url')[$resortId]['restaurants'];
        $amenities = __('routes.hotels-seccion-url')[$resortId]['amenities'];  
        $gallery = __('routes.hotels-seccion-url')[$resortId]['gallery'];  
        $chat = __('routes.hotels-seccion-url')[$resortId]['chat'];
        $ep = __('routes.hotels-seccion-url')[$resortId]['ep'];
        $ai = __('routes.hotels-seccion-url')[$resortId]['ai'];
        $bb = __('routes.hotels-seccion-url')[$resortId]['bb'];
        $phoneGroup = __('routes.hotels-seccion-url')[$resortId]['phone-group'];
        //TODO Agregar la configuracion de filtros
        $filtro = "";

        $resortIhotelier = __('resorts/'.$resort.'/rooms.resort_id');
        $roomsId = collect([]);
        foreach (__('resorts/'.$resort.'/rooms.rooms') as $key => $value) {
            $roomsId[] = __('resorts/'.$resort.'/rooms.rooms.'.$key.'.room_id');
            if ($key >= 3) {
                break;
            }
        }        

        $roomMinRates = \App\Model\RoomMinRate::where('resort_id', $resortIhotelier)
            ->whereIn('room_code', $roomsId)
            ->get();

        $roomMinRates = $roomMinRates->keyBy('room_code');
        
        View::share('phoneGroup', $phoneGroup);
        
        $objResort = Resort::find($resortId);
        $places    = $objResort->locations()->get();
        $allResort = Resort::select('id','name','coordinates')->active()->where('id','!=',$resortId)->get();

        return view('v2.templates.resort-interna',[
            'objResort'        => $objResort,
            'page'           => 'resorts-interna',
            'resort'         => $resort ,
            'allResort'      => $allResort ,
            'places'         => $places,
            'location'       => $objResort->coordinates,
            'atribs'         => "about",
            'interna'        => $interna,
            'subinterna'     => false,
            'rhome'          => $rhome,
            'rooms'          => $rooms,
            'specials'       => $specials,
            'reviews'        => $reviews,
            'restaurants'    => $restaurants,
            'amenities'      => $amenities,
            'gallery'        => $gallery,
            'resorts'        => $resorts,
            'conceptAmenity' => $conceptAmenity,
            'chat'           => $chat,
            'ep'             => $ep,
            'ai'             => $ai,
            'bb'             => $bb,
            'roomMinRates'   => $roomMinRates,
            'filtro'         => $filtro,
            'phoneGroup'     => $phoneGroup,
            'resortId'       => $resortId,
            'js_v2'         => 'js_v2'

        ]);
    }

    public function deals(Request $request, $resort, $interna)
    {
        //dd('deals', $resort, $interna);
        
        /*if ($resort == 'royal-uno') {
            return redirect()->route('home');
        }*/

        $resortId = __('routes.hotels-identifier.'.$resort);
        
        if ($resortId == 'routes.hotels-identifier.'.$resort) {
            abort(404);
        }
        
        $filtroConcept = $request->input('filtros',"");

        $resorts = ConceptResort::where('resort_id',$resortId)
            ->whereHas('concept',function ($query) use ($filtroConcept)
            {
                $query->vigencia(['vig' => true])
                    ->visibility(Concept::VIEW_WEB);    

                if (!empty($filtroConcept)) {
                    $query->where('id',$filtroConcept);
                };

            })
            ->with([
                'ratePlan',
                'concept' => function ($query){
                    $query->with([
                        'content' => function($query)
                        {
                            $query->lang(\App::getLocale());
                        }
                    ]);
                },
                'resort' => function ($query)
                {
                    $query->with('destination');
                },
                'content' => function ($query)
                {
                    $query->lang(\App::getLocale());
                }
            ]);

        // ==============================================================================
        // Se agrega validacion para no se muestre la oferta black friday anticipado
        // dentro de la seccion de ofertas de royal uno 
        // ==============================================================================
        if ($resortId == 15) {
            $resorts->where('concept_id', '!=', 53);
            $resorts->where('concept_id', '!=', 59);
        }

        $resorts = $resorts->get();
        
        $resorts = $resorts->sortBy(function ($model)
        {
            if (!isset($model->seccion[ConceptResort::RESORT])) {
                return 0;
            }
            return $model->seccion[ConceptResort::RESORT];
        });


        $page = 'resorts-atrib';
        $atribs = "specials";
        $rhome = __('routes.hotels-seccion-url')[$resortId]['home'];
        $rooms = __('routes.hotels-seccion-url')[$resortId]['rooms'];
        $specials = __('routes.hotels-seccion-url')[$resortId]['specials'];
        $reviews = __('routes.hotels-seccion-url')[$resortId]['reviews'];
        $restaurants = __('routes.hotels-seccion-url')[$resortId]['restaurants'];
        $chat = __('routes.hotels-seccion-url')[$resortId]['chat'];
        $amenities = __('routes.hotels-seccion-url')[$resortId]['amenities'];  
        $gallery = __('routes.hotels-seccion-url')[$resortId]['gallery'];
        $phoneGroup = __('routes.hotels-seccion-url')[$resortId]['phone-group'];

        View::share('phoneGroup', $phoneGroup);

        return view('v2.templates.resort-deals',[
            'page' => $page,
            'resort' => $resort,
            'atribs' => $atribs,
            'interna' => $interna,
            'subinterna' => false,
            'rhome' => $rhome,
            'rooms' => $rooms,
            'specials' => $specials,
            'reviews' => $reviews,
            'restaurants' => $restaurants,
            'amenities' => $amenities,
            'gallery' => $gallery,
            'filtro' => $filtroConcept,
            'resorts'=> $resorts,
            'chat'=> $chat
        ]);
    }

    public function reviews(Request $request,  $resort, $interna)
    {

        /*if ($resort == 'royal-uno') {
            return redirect()->route('home');
        }*/
        
        $resortId = __('routes.hotels-identifier.'.$resort);
        
        if ($resortId == 'routes.hotels-identifier.'.$resort) {
            abort(404);
        }

        $reviewsData = Review::active()->where('resort_id', $resortId)
            ->whereIn('website_id',[0,11])
            ->where('lang_id', (\App::getLocale() == 'en')? 1: 2)
            ->where('type','>',0)
            ->orderBy('review_date', 'DESC')
            ->take(5)
            ->with([
                '_type'
            ])
            ->get();

        $page ="resorts-atrib";
        $atribs = 'reviews';
        $resort = $resort;
        $interna = $interna;
        $subinterna = false;
        $rhome =  __('routes.hotels-seccion-url')[$resortId]['home'];
        $rooms = __('routes.hotels-seccion-url')[$resortId]['rooms'];
        $specials = __('routes.hotels-seccion-url')[$resortId]['specials'];
        $reviews = __('routes.hotels-seccion-url')[$resortId]['reviews'];
        $restaurants = __('routes.hotels-seccion-url')[$resortId]['restaurants'];
        $amenities = __('routes.hotels-seccion-url')[$resortId]['amenities']; 
        $gallery = __('routes.hotels-seccion-url')[$resortId]['gallery']; 

        $phoneGroup = __('routes.hotels-seccion-url')[$resortId]['phone-group'];

        View::share('phoneGroup', $phoneGroup);

        return  view('v2.templates.reviews',[
            'page' => $page,
            'atribs' => $atribs,
            'resort' => $resort,
            'interna' => $interna,
            'subinterna' => $subinterna,
            'rhome' => $rhome,
            'rooms' => $rooms,
            'specials' => $specials,
            'reviews' => $reviews,
            'restaurants' => $restaurants,
            'amenities' => $amenities,
            'gallery' => $gallery,
            'reviewsData' => $reviewsData,
        ]);
    }

    public function rooms($resort, $rooms)
    {
        
        $resortId = __('routes.hotels-identifier.'.$resort);
        
        if ($resortId == 'routes.hotels-identifier.'.$resort) {
            abort(404);
        }


        $page = "resorts-atrib";
        $atribs = "habitaciones";
        $interna = $rooms;

        $rhome =  __('routes.hotels-seccion-url')[$resortId]['home'];
        $rooms = __('routes.hotels-seccion-url')[$resortId]['rooms'];
        $specials = __('routes.hotels-seccion-url')[$resortId]['specials'];
        $reviews = __('routes.hotels-seccion-url')[$resortId]['reviews'];
        $restaurants = __('routes.hotels-seccion-url')[$resortId]['restaurants'];
        $amenities = __('routes.hotels-seccion-url')[$resortId]['amenities']; 
        $gallery = __('routes.hotels-seccion-url')[$resortId]['gallery']; 
        $chat = __('routes.hotels-seccion-url')[$resortId]['chat']; 
        $phoneGroup = __('routes.hotels-seccion-url')[$resortId]['phone-group'];

        View::share('phoneGroup', $phoneGroup);

        $resortIhotelier = __('resorts/'.$resort.'/rooms.resort_id');
        $roomsId = collect([]);
        foreach (__('resorts/'.$resort.'/rooms.rooms') as $key => $value) {
            $roomsId[] = __('resorts/'.$resort.'/rooms.rooms.'.$key.'.room_id');
           // if ($key >= 3) {
           //     break;
           // }
        }        

        $roomMinRates = \App\Model\RoomMinRate::where('resort_id', $resortIhotelier)
            ->whereIn('room_code', $roomsId)
            ->get();

        $roomMinRates = $roomMinRates->keyBy('room_code');

        return view('v2.templates.resort-rooms', [
            'page' => $page,
            'atribs' => $atribs,
            'valorSeccion' => 'Resort Rooms',
            'resort' => $resort,
            'interna' => $interna,
            'subinterna' => "",
            'rhome' => $rhome,
            'rooms' => $rooms,
            'specials' => $specials,
            'reviews' => $reviews,
            'restaurants' => $restaurants,
            'amenities' => $amenities,
            'gallery' => $gallery,
            'chat' => $chat,
            'roomMinRates' => $roomMinRates
        ]);
    }
}
