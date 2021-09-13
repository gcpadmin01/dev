<?php

namespace App\Http\Controllers;

use App\Model\Concept;
use App\Model\ConceptResort;
use Auth;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        \Carbon\Carbon::setLocale(\App::getLocale());

        $concepts = Concept::vigencia(['vig' => true])
            ->visibility(Concept::VIEW_WEB)
            ->where(function ($query)
            {
                $query->where('seccion', 'like', '%"'.Concept::HOME.'"%')
                    ->orWhere('seccion', 'like', '%"'.Concept::HOME_BANNER.'"%');
            })
            ->with([
                'content' => function($query)
                {
                    $query->lang(\App::getLocale());
                }
            ]);

        if(Auth::guard('agent')->check()){
            $concepts = $concepts->typeBooking(0);
        }
        $concepts = $concepts->get();

        //==============================================================================================    
        // Conceptos que se muestran en el banner
        //==============================================================================================

        $banners = $concepts->filter(function ($model)
        {
            return isset($model->seccion[Concept::HOME_BANNER]) && !empty($model->content->img_banner);
        });

        $banners = $banners->sortBy(function ($model)
        {
            return  $model->seccion[Concept::HOME_BANNER];
        });

        //==============================================================================================    
        // Conceptos para el slider 
        //==============================================================================================
        $conceptsHome = $concepts->filter(function ($model)
        {
            return  isset($model->seccion[Concept::HOME]);
        });

        $conceptsHome = $conceptsHome->sortBy(function ($model)
        {
            return  $model->seccion[Concept::HOME];
        });


        $resortsHome = ConceptResort::where('seccion','like', '%"'.ConceptResort::HOME.'"%')
            ->whereHas('concept', function ($query)
            {
                $query->vigencia(['vig' => true])->visibility(Concept::VIEW_WEB);
            })
            ->with([
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
                },
                'travelWindowConcept' => function($query){
                    $query->avaliable();
                },
                'travelWindowResort' => function($query){
                    $query->avaliable();
                }
            ]);

        $resortsHome = $resortsHome->get();

        if(Auth::guard('agent')->check()){
            $resortsHome = $resortsHome->filter(function ($model)
            {
                return  $model->type_booking == 0;
            });
        }

        //==============================================================================================    
        // resorts para el slider 
        //==============================================================================================   
        $resortsHome = $resortsHome->sortBy(function ($model)
        {
            return $model->seccion[ConceptResort::HOME];
        });

        //dd($concepts, $banners, $resorts);

        return view('v2.templates.home', [
            'banners' => $banners,
            'conceptsHome' => $conceptsHome,
            'resortsHome' => $resortsHome,
            'type' => 'home',
            'chat'=>'general',
            'page'=>'',
            'atribs'=>'',
            'js_v2' => 'js_v2'
        ]);
    }

    public function deals(Request $request)
    {
        $concepts = Concept::vigencia(['vig' => true])
            ->visibility(Concept::VIEW_WEB)
            ->where(function ($query)
            {
                $query->where('seccion', 'like', '%"'.Concept::SPECIALS.'"%');
            })
            ->with([
                'content' => function($query)
                {
                    $query->lang(\App::getLocale());
                }
            ]);

        if(Auth::guard('agent')->check()){
            $concepts = $concepts->typeBooking(0);
        }

        $agentConcepts = clone $concepts;
        $agentConcepts = $agentConcepts->whereIn("id",[41,42,43]);
        $agentConcepts = $concepts->get();
        $concepts = $concepts->get();

         $resorts = ConceptResort::where('seccion','like', '%"'.ConceptResort::SPECIALS.'"%')
            ->whereHas('concept', function ($query)
            {
                $query->vigencia(['vig' => true])->visibility(Concept::VIEW_WEB);
            })
            ->with([
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

        $agentResorts = clone $resorts;
        $agentResorts = $agentResorts->whereIn("id",[321,322,323]);
        $agentResorts = $agentResorts->get();
        $resorts = $resorts->get();

        $concepts = $concepts->sortBy(function ($model)
        {
            return $model->seccion[Concept::SPECIALS];
        });

        $resorts = $resorts->sortBy(function ($model)
        {
            return $model->seccion[ConceptResort::SPECIALS];
        });

        if(Auth::guard('agent')->check()){
            $resorts = $resorts->filter(function ($model)
            {
                return  $model->type_booking == 0;
            });
        }
        
        $page="deals";
        $chat="general";

        return view('v2.templates.deals',[
            'page'          =>$page,
            'chat'          =>$chat,
            'concepts'      => $concepts,
            'agentConcepts' => $agentConcepts,
            'agentResorts'  => $agentResorts,
            'resorts'       => $resorts,
            'js_v2'         => 'js_v2'
        ]);
    }

    public function conceptDetail(Request $request, $conceptUrl)
    {
        $lang = \App::getLocale();

        $concept = \App\Model\Concept::vigencia(['vig' => true])
                ->visibility([Concept::VIEW_WEB, Concept::VIEW_OCULTA])
                ->where('url_'.$lang, 'like', $conceptUrl)
                ->orderBy('id', 'ASC')
                ->first();

        if (empty($concept)) {
            $concept =  \App\Model\Concept::visibility([Concept::VIEW_WEB, Concept::VIEW_OCULTA])
                ->where('url_'.$lang, 'like', $conceptUrl)
                ->orderBy('id', 'DESC')
                ->first();
        }

        if (empty($concept)) {
            abort(404);
        }

        __langUrl('en',[
            'concept_en' => ($concept->display_en)? $concept->url_en:"",
            'concept_es' => ($concept->display_es)? $concept->url_es: ""
        ]);

        $concept->load([
            'content' => function ($query){
                $query->lang(\App::getLocale());
            },
            'resorts' => function ($query){
                $query->whereHas('resort', function ($query)
                {
                    $query->active();
                })
                ->with([
                    'resort' => function ($query){
                        $query->active()
                        ->with([
                            'destination'
                        ]);
                    },
                    'ratePlan',
                    'content' => function ($query){
                        $query->lang(\App::getLocale());
                    },
                    'concept' => function ($query)
                    {
                        $query->with([
                            'content' => function ($query){
                                $query->lang(\App::getLocale());
                            }
                        ]);
                    }
                ])
                ->orderBy('plan_id','ASC');
            },
            'conceptsResort' => function ($query)
            {
                $query->whereHas('concept', function ($query)
                    {
                        $query->vigencia(['vig' => true])
                            ->visibility([Concept::VIEW_WEB, Concept::VIEW_OCULTA]);
                    })
                    ->with([
                    'resort' => function ($query)
                    {
                        $query->active();
                    },
                    'ratePlan',
                    'content' => function ($query){
                        $query->lang(\App::getLocale());
                    },
                    'concept' => function ($query)
                    {
                        $query->with([
                            'content' => function ($query){
                                $query->lang(\App::getLocale());
                            }
                        ]);
                    }
                ]);
            }
        ]);

        $conceptsVig = \App\Model\Concept::visibility([Concept::VIEW_WEB])
            ->vigencia(['vig' => true])
            ->where('id', '!=', $concept->id)
            ->with([
                'content' => function ($query)
                {
                    $query->lang(\App::getLocale());
                }
            ])
            ->get();

        $resorts = collect($concept->resorts);


        $resorts = $resorts->merge($concept->conceptsResort);

        $destinations = collect();
        $unicResorts = collect();

        $resorts->each(function ($model) use ($destinations, $unicResorts)
        {
            try{
                $destinations->push($model->resort->destination_id);
                $unicResorts->push($model->resort);
            }catch (\Exception $e){
                //dump($model);
            }
        });

        $destinations               = \App\Model\Destination::whereIn('id', $destinations)->get();
        $orderDestinationInput      = $request->input('od', false);
        $orderResortInput           = $request->input('or', false);
        $orderDestinationGrouoInput = $request->input('dg', array_keys(__('routes.destination-group-identifier'))[0]);
        $flagDestination            = in_array($concept->template_id,[5,6,8]);

        $bloquesSort = collect();
        $orderResorts = collect();
        $filterResorts = $resorts;

        if($orderDestinationInput !== false){
            $orderResorts = $resorts->filter(function ($model) use ($orderDestinationInput)
            {
                return $model->resort->destination->identifier ==  $orderDestinationInput;
            });

            $filterResorts = $resorts->filter(function ($model) use ($orderDestinationInput)
            {
                return $model->resort->destination->identifier !=  $orderDestinationInput;
            });
        }

        if($orderResortInput !== false){
            $idResort = "-1";
            if (isset( __('routes.hotels-identifier') [$orderResortInput] ) ) {
                $idResort = __('routes.hotels-identifier')[$orderResortInput];
            }

            $orderResorts = $resorts->filter(function ($model) use ($idResort)
            {
                return $model->resort->id ==  $idResort;
            });

            $filterResorts = $resorts->filter(function ($model) use ($idResort)
            {
                return $model->resort->id !=  $idResort;
            });
        }

        $idDestinationGroup = 1;

        if($orderDestinationGrouoInput !== false && $flagDestination == TRUE){
            if(isset(__('routes.destination-group-identifier')[$orderDestinationGrouoInput])){
                $idDestinationGroup = __('routes.destination-group-identifier')[$orderDestinationGrouoInput];
            }

            //$orderResorts = $resorts->filter(function($model) use($idDestinationGroup){
            //    return $model->resort->destination->destination_group == $idDestinationGroup;
            //});
            //dump($orderResorts,$idDestinationGroup);
            $orderResorts = $resorts;
            $filterResorts = $resorts->filter(function ($model) use ($idDestinationGroup)
            {
                return $model->resort->destination->destination_group != $idDestinationGroup;
            });

        }

        $bloques = $filterResorts->groupBy('bloque');
        $unicResorts = $unicResorts->unique('id');

        foreach ($bloques as $key => $bloque) {
            $bloque = $bloque->sortBy(function ($model) use ($concept)
            {
                return $model->order;
            });

            if($flagDestination == true){
                $bloque = $bloque->groupBy('resort_id');
            }
            $bloquesSort->put($key, $bloque);
        }

        $orderRst = collect();
        if($flagDestination == true){
            $orderResorts = $orderResorts->sortBy(function ($model) use ($concept)
            {
                return $model->order;
            });

            $orderRst  = $orderResorts->groupBy('resort_id');
        }
        $page="sub-inter-special";
        $chat="general";

        $filtros = $request->input('filtros', '');
        $filtros = explode('-', $filtros);

        $filtrosAux = [];
        foreach ($filtros as $filtro) {
            if (isset(__('routes.estinations-identifier-keyword')[$filtro])) {
                $filtrosAux[] = __('routes.estinations-identifier-keyword')[$filtro];
            }
            if (isset(__('routes.hotels-keyword-identifier-rr')[$filtro])) {
                $filtrosAux[] = __('routes.hotels-keyword-identifier-rr')[$filtro];
            }
        }

        $view = 'v2.templates.sub-inter-special';

        if ($concept->template_id == 0) {
            $view = 'v2.templates.sub-inter-special'; // landing de ofertas General
        }

        if ($concept->template_id == 1) {
            $view = 'v2.templates.sub-inter-special-mosaic'; // landing de ofertas Mosaic inicial
        }

        if ($concept->template_id == 2) {
            $view = 'v2.templates.sub-inter-suscription'; // landing de ofertas formato suscripcion
        }

        if ($concept->template_id == 3) {
            $view = 'v2.templates.sub-inter-special-mosaic-v2'; // landing de ofertas Mosaic version 2
        }

        if ($concept->template_id == 4) {
            $view = 'v2.templates.sub-inter-special-carousel'; // landing de ofertas Mosaic version 2
        }

        if($concept->template_id == 5){
            $view = 'v2.templates.sub-inter-suscription-gms'; // landing de ofertas formato suscripcion GMS
        }

        if($concept->template_id == 6){
            $view = 'v2.templates.sub-inter-yearly-sale'; // landing de ofertas formato despues suscripcion GMS
        }

        if($concept->template_id == 7) {
            $view = 'v2.templates.time-share';
        }

        if($concept->template_id == 8){
            $view = 'v2.templates.sub-inter-offers-details-resort';
        }

        //$view = 'v2.templates.time-share';
        return view($view, [
            'page'=>$page,
            'chat'=>$chat,
            'slug'=>$conceptUrl,
            'filtros'=>$filtrosAux,
            'concept' => $concept,
            'bloques' => $bloquesSort,
            'destinations' => $destinations,
            'resorts' => $resorts,
            'conceptsVig' => $conceptsVig,
            'js_v2' => 'js_v2',
            'unicResorts' => $unicResorts,
            'orderResorts' => $orderResorts,
            'orderRst'     => $orderRst,
            'dstnGroup' => $idDestinationGroup,
        ]);

    }

    public function conceptPreview(Request $request, $conceptId)
    {
        $conceptId = __decodeId($conceptId)[0];
        $lang = \App::getLocale();

        $concept = \App\Model\Concept::where('id',$conceptId)
                ->orderBy('id', 'ASC')
                ->first();

        if (empty($concept)) {
            abort(404);
        }
        
        $concept->load([
            'content' => function ($query){
                $query->lang(\App::getLocale());
            },
            'resorts' => function ($query){
                $query->with([
                    'resort' => function ($query){
                        $query->with([
                            'destination'
                        ]);
                    },
                    'ratePlan',
                    'content' => function ($query){
                        $query->lang(\App::getLocale());
                    },
                    'concept' => function ($query)
                    {
                        $query->with([
                            'content' => function ($query){
                                $query->lang(\App::getLocale());
                            }
                        ]);
                    }
                ])
                ->orderBy('plan_id','ASC');
            },
            'conceptsResort' => function ($query)
            {
                $query->with([
                    'resort',
                    'ratePlan',
                    'content' => function ($query){
                        $query->lang(\App::getLocale());
                    },
                    'concept' => function ($query)
                    {
                        $query->with([
                            'content' => function ($query){
                                $query->lang(\App::getLocale());
                            }
                        ]);
                    }
                ]);
            }
        ]);

        $conceptUrl = $concept->getUrl(\App::getLocale());

        $conceptsVig = \App\Model\Concept::query()
            ->where('id', '!=', $concept->id)
            ->visibility([Concept::VIEW_WEB, Concept::VIEW_OCULTA])
            ->vigencia(['vig' => true])
            ->with([
                'content' => function ($query)
                {
                    $query->lang(\App::getLocale());
                }
            ])
            ->get();

        $resorts = collect($concept->resorts);
        $resorts = $resorts->merge($concept->conceptsResort);

        $destinations = collect();
        $resorts->each(function ($model) use ($destinations)
        {
            $destinations->push($model->resort->destination_id);
        });

        $destinations = \App\Model\Destination::whereIn('id', $destinations)->get();

        $bloques = $resorts->groupBy('bloque');

        $bloquesSort = collect();

        foreach ($bloques as $key => $bloque) {
            $bloque = $bloque->sortBy(function ($model)
            {
                return $model->order;
            });

            $bloquesSort->put($key, $bloque);
        }


        $page="sub-inter-special";
        $chat="general";
        
        $filtros = $request->input('filtros', '');
        $filtros = explode('-', $filtros);

        $filtrosAux = [];
        foreach ($filtros as $filtro) {
            if (isset(__('routes.estinations-identifier-keyword')[$filtro])) {
                $filtrosAux[] = __('routes.estinations-identifier-keyword')[$filtro];
            }
            if (isset(__('routes.hotels-id')[$filtro])) {
                $filtrosAux[] = __('routes.hotels-id')[$filtro];
            }            
        }

        return view('v2.templates.sub-inter-special-preview', [
            'page'=>$page,
            'chat'=>$chat,
            'slug'=>$conceptUrl,
            'filtros'=>$filtrosAux,
            'concept' => $concept,
            'bloques' => $bloquesSort,
            'destinations' => $destinations,
            'resorts' => $resorts,
            'conceptsVig' => $conceptsVig
        ]);
    }

    public function CustomerChoice($value='')
    {
         return view('v2.templates.customer-choice',[
            'page' => 'customer-choice'
        ]);
    }

    public function pages()
    {   
        if(\App::getLocale() == 'es'){
            $pageView =  'es-covid-19';
        }

        if(\App::getLocale() == 'en'){
            $pageView =  'en-covid-19';
        }

        return view('v2.news.'.$pageView, [
            'type' => 'home',
            'chat'=>'general',
            'page'=>'covid-19'
        ]);
    }
}
