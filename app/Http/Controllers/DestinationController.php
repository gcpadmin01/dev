<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\{Concept,Destination,DestinationResort};

class DestinationController extends Controller
{

    public function destination(Request $request, $destination, $subinterna )
    {
        //dump($request->all(), $interna, $subinterna);
        switch ($destination) {
            case 'cancun':
                $chat="mexico";
                \View::share('phoneGroup', 'MEXICO');

                break;

            case 'playa-del-carmen':
                $chat="mexico";
                \View::share('phoneGroup', 'MEXICO');
                break;

            case 'riviera-maya':
                $chat="royal-gr";
                \View::share('phoneGroup', 'MEXICO');
                break;

            case 'punta-cana':
                $chat="punta-cana";
                \View::share('phoneGroup', 'PUNTA-CANA');
                break;

            case 'curacao':
                $chat="caribe";
                \View::share('phoneGroup', 'SAINT-MARTIN');

                break;

            case 'st-maarten':
                $chat="caribe";
                \View::share('phoneGroup', 'SAINT-MARTIN');

                break;

            default:
                abort(404);
            break;
        }
        $destinationId = __('routes.destinations-identifier.'.$destination);
        
        $mapDestination = Destination::where('id',$destinationId)->with(['resorts' => function($query){
            $query->active();
        }])->get();

        $resorts = \App\Model\ConceptResort::whereHas('concept', function ($query){
                $query->vigencia(['vig' => true])->visibility(Concept::VIEW_WEB);
            })
            ->whereHas('resort', function ($query) use ($destinationId)
            {
                $query->active()->where('destination_id',$destinationId);
                
                // En caso de ser riviera maya se agrea el hotel de Royal Haciendas
                if ($destinationId == 3) {
                    $query->orWhere('id',5);
                }

                //En caso de ser puerto morelos se agrega el hotel de Grandresidences
                if ($destinationId == 4) {
                    $query->orWhere('id', 6);
                }
            })
            ->with([
                'ratePlan',
                'concept' => function ($query)
                {
                    $query->with([
                        'content' => function ($query)
                        {
                            $query->lang(\App::getLocale());
                        }
                    ]);
                },
                'content' => function($query){
                    $query->lang(\App::getLocale());
                },
                'resort' => function ($query)
                {
                    $query->with('destination');
                },
                'content' => function ($query)
                {
                    $query->lang(\App::getLocale());
                },
                'travelWindowConcept',
                'travelWindowResort'
            ])
            ->get();

        return view('v2.templates.destinations-intern', [
            'page'        => 'destinations-intern',
            'destino'     => $destination,
            'subinterna'  => $subinterna,
            'chat'        => $chat,
            'resorts'     => $resorts,
            'map'         => $mapDestination[0],
            'location'    => $mapDestination[0]->resorts,
            'js_v2'       => true
        ]);

    }

    public function deals(Request $request, $destination, $subinterna)
    {
        
        $destinationId = __('routes.destinations-identifier.'.$destination);

        $resorts = \App\Model\ConceptResort::whereHas('concept', function ($query){
                $query->vigencia(['vig' => true])->visibility(Concept::VIEW_WEB);
            })
            ->whereHas('resort', function ($query) use ($destinationId)
            {
                $query->active()
                    ->where('destination_id',$destinationId);
                
                // En caso de ser riviera maya se agrea el hotel de Royal Haciendas
                if ($destinationId == 3) {
                    $query->orWhere('id',5);
                }

                //En caso de ser puerto morelos se agrega el hotel de Grandresidences
                if ($destinationId == 4) {
                    $query->orWhere('id', 6);
                }
            })
            ->with([
                'ratePlan',
                'concept' => function ($query)
                {
                    $query->with([
                        'content' => function ($query)
                        {
                            $query->lang(\App::getLocale());
                        }
                    ]);
                },
                'content' => function($query){
                    $query->lang(\App::getLocale());
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

        $page="destinations-offers";
        $chat='general';
        
        if(in_array($destination, [ 'cancun','playa-del-carmen','the-royal-sands','the-royal-islander','the-royal-caribbean','the-royal-cancun', 'the-royal-haciendas']) ){
            $chat="mexico";
            \View::share('phoneGroup', 'MEXICO');

        }
        
        if(in_array($destination, ['st-maarten' ,'curacao','the-villas-at-simpson-bay-resort','simpson-bay-resort' ,'the-royal-sea-aquarium'])){
            $chat="caribe";
            \View::share('phoneGroup', 'MEXICO');

        }

        if(in_array($destination, ['puerto-morelos', 'grand-residences-riviera-cancun', 'riviera-maya'] )){
            $chat="royal-gr";
            \View::share('phoneGroup', 'MEXICO');

        }
       
        if(in_array($destination, ['ancora' , 'del-mar' , 'casa-de-campo','curacao'])){
            $chat="punta-cana";
            \View::share('phoneGroup', 'SAINT-MARTIN');

        }

        if(in_array($destination, ['punta-cana'])){
            $chat="punta-cana";
            \View::share('phoneGroup', 'PUNTA-CANA');

        }

        return view('v2.templates.destinations-offers', array(
            'page'=>$page, 
            'destino'=>$destination, 
            'subinterna'=>__('routes.vacation-special').$subinterna, 
            'chat' =>$chat,
            'resorts' => $resorts
        ));
    }

    public function experiences($subinterna){

        $resorts = \App\Model\ConceptResort::whereHas('concept', function ($query){
            $query->vigencia(['vig' => true])->visibility(Concept::VIEW_WEB);
        })
        ->with([
            'ratePlan',
            'concept' => function ($query)
            {
                $query->with([
                    'content' => function ($query)
                    {
                        $query->lang(\App::getLocale());
                    }
                ]);
            },
            'content' => function($query){
                $query->lang(\App::getLocale());
            },
            'resort' => function ($query)
            {
                $query->with(['destination','destinations']);
            },
            'content' => function ($query)
            {
                $query->lang(\App::getLocale());
            },
            'travelWindowConcept',
            'travelWindowResort'
        ])
        ->get();

        $page='vacation-experiences-intern';
        $chat="general";
        return view('v2/templates/vacations-intern',array(
            'page'=>$page,
            'chat'=>$chat,
            'trip'=>$subinterna,
            'resorts' => $resorts,
            'js_v2'       => true
        ));
    }
}
