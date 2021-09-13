<?php

namespace App\Http\Controllers;

use App\Model\Concept;
use \App\Model\ConceptResort;

use Illuminate\Http\Request;

class FacebookController extends Controller
{
    public function destinations()
    {
        $concepts = Concept::vigencia(['vig' => true])
            ->visibility(Concept::VIEW_WEB)
            ->where(function ($query)
            {
                $query->where('seccion', 'like', '%"'.Concept::HOME.'"%');
            })
            ->with([
                'content' => function($query)
                {
                    $query->lang(\App::getLocale());
                }
            ])->take(2);
        $concepts = $concepts->get();


       

        return view('facebook.destinations',[
            'concepts' => $concepts
        ]);
    }

    public function resort($resort)
    {
        $resortId = __('routes.hotels-identifier.'.$resort);

        /*Safe Travel*/
        $cert_1 = ["the-royal-cancun","the-royal-islander","the-royal-sands","the-royal-haciendas","grand-residences-riviera-cancun"];
        /*Travel Choice*/
        $cert_2 = ["the-royal-islander","the-royal-sands","simpson-bay-resort","the-villas-at-simpson-bay-resort","the-royal-sea-aquarium"];
        /*Travel Choice Best of the Best*/
        $cert_3 = ["the-royal-cancun","the-royal-haciendas","grand-residences-riviera-cancun"];
        /*Prevension Sanitaria*/
        $cert_4 = ["the-royal-cancun","the-royal-islander","the-royal-sands","the-royal-haciendas","grand-residences-riviera-cancun"];

        $flags_cert = [in_array($resort,$cert_1),in_array($resort,$cert_2),in_array($resort,$cert_3),in_array($resort,$cert_4)];
        if(!in_array(TRUE,$flags_cert)){
            $flags_cert = [];
        };

        $content = [
            'title' => __('resorts/'.$resort.'.title'),
            'address' => __('resorts/'.$resort.'.address'),
            'description' => __('resorts/'.$resort.'.description'),
            'amenities' => __('resorts/'.$resort.'.resort_amenities'),
            'rate_plans' => [
                'all_inclusive'=> __('resorts/'.$resort.'.all-inclusiveB'),
                'room_only' => __('resorts/'.$resort.'.room-onlyB'),
                'bed_breakfast' => __('resorts/'.$resort.'.bed-breakfastB')
            ],
            'restaurants' => [
                'title' => __('resorts/'.$resort.'/restaurants.title'),
                'description' => __('resorts/'.$resort.'/restaurants.content')
            ],
            'policies' => [
                'title' => __('resorts/'.$resort.'/fact-sheet.policies_title'),
                'policies' => __('resorts/'.$resort.'/fact-sheet.resort_policies')
            ],
            'certifications' => [
                'title' => __('resorts/'.$resort.'/fact-sheet.title_certificate'),
                'certifications' => $flags_cert
            ],
            'terms' => [
                'title' => __('resorts/'.$resort.'/fact-sheet.terms_title'),
                'terms' => __('resorts/'.$resort.'/fact-sheet.terms')
            ],
            'links' => [
                'specials' => route('resort.deals',[ 'resort' => $resort, 'deals' => __('routes.hotels-seccion-url')[$resortId]['specials'] ])
            ]
        ];
        return view('facebook.resort',[
            'content' => $content,
            'resortId' => $resortId,
            'resort' => $resort,
        ]);
    }

    public function offers()
    {
        $bannerHome = Concept::vigencia(['vig' => true])
            ->visibility(Concept::VIEW_WEB)
            ->where(function ($query)
            {
                $query->Where('seccion', 'like', '%"'.Concept::HOME_BANNER.'"%');
            })
            ->with([
                'content' => function($query)
                {
                    $query->lang(\App::getLocale());
                }
            ])
            ->get();
        
        $bannerHome = $bannerHome->sortBy(function ($model)
        {
            return  $model->seccion[Concept::HOME_BANNER];
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
        ])
        ->get();

        $resortsHome = $resortsHome->sortBy(function ($model)
        {
            return $model->seccion[ConceptResort::HOME];
        });

        return view('facebook.special-offers',[
            'bannersHome' => $bannerHome,
            'resortsHome' => $resortsHome
        ]);
    }
}
