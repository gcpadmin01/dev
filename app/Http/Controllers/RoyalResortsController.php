<?php


namespace App\Http\Controllers;


use App\Model\Concept;

class RoyalResortsController extends Controller
{
    public function promos()
    {
        $concepts = Concept::vigencia(['vig' => true])
            ->visibility([Concept::VIEW_WEB, Concept::VIEW_OCULTA])
            ->select('concepts.id', 'concepts.url_en', 'website_concept_contents.img_concept')
            ->with([
                'content' => function ($query) {
                    $query->select('id', 'concept_id', 'title')
                        ->lang(\App::getLocale());
                }
            ])
            ->join('website_concept_sections', function ($join) {
                $join->on('concepts.id', '=', 'website_concept_sections.concept_id')
                    ->where('website_concept_sections.website_id', '=', 12)
                    ->where('website_concept_sections.resort_id', '=', 0)
                    ->where('website_concept_sections.plan_id', '=', 0)
                    ->where('website_concept_sections.section', '=', 'OFFERS');
            })
            ->join('website_concept_contents', function ($join) {
                $join->on('website_concept_sections.concept_id', '=', 'website_concept_contents.concept_id')
                    ->where('website_concept_contents.lang_id', '=', 1)
                    ->on('website_concept_contents.website_id', '=', 'website_concept_sections.website_id');
            })
            ->get();

        $defaults = collect([
            (object)[
                'img_concept' => '//royalreservations.com/img/promos/r1.jpg',
                'content'     => (object)[
                    'title' => 'ROYAL UNO ALL INCLUSIVE RESORT & SPA'
                ],
                'link'        => 'https://reservations.royalreservations.com/110441?hotelId=110441#/guestsandrooms'
            ],
            (object)[
                'img_concept' => '//royalreservations.com/img/promos/gr.jpg',
                'content'     => (object)[
                    'title' => 'GRAND RESIDENCES RIVIERA CANCUN'
                ],
                'link'        => 'https://reservations.royalreservations.com/95939?hotelId=95939&theme_code=102578#/guestsandrooms'
//                'link'        => 'https://be.synxis.com/?chain=24447&currency=USD&src=30&hotel=6960&utm_source=royal_resorts&utm_medium=offer'
            ],
            (object)[
                'img_concept' => '//royalreservations.com/img/promos/rh.jpg',
                'content'     => (object)[
                    'title' => 'THE ROYAL HACIENDAS ALL SUITES RESORT & SPA'
                ],
                'link'        => 'https://reservations.royalreservations.com/86184?hotelid=86184'
            ],
            (object)[
                'img_concept' => '//royalreservations.com/img/promos/cancun.jpg',
                'content'     => (object)[
                    'title' => 'THE ROYAL CANCUN ALL SUITES RESORTS'
                ],
                'link'        => 'https://reservations.royalreservations.com/73601?hotelid=73601'
            ]
        ]);

        $defaults->each(function ($default,$key) use ($concepts){
            $concepts->push($default);
        });



        $offers = [];
        if (count($concepts) > 0) {
            while (count($offers) < 4) {
                foreach ($concepts as $concept) {
                    if (count($offers) < 4) {

                        if ($concept->link){
                            $link = $concept->link;
                        }else{
                            $link = route('concept.detail', ['concepto' => $concept->getUrl(\App::getLocale())]) . '?utm_source=royal_resorts&utm_medium=offer';
                        }

                        $offers[] = [
                            'img'    => 'https:'. $concept->img_concept,
                            'tittle' => $concept->content->title,
                            'link'   => $link
                        ];
                    } else {
                        break;
                    }
                }
            }
        }

        return json_encode($offers);
    }

    public function promosEs()
    {
        \App::setLocale('es');
        $concepts = Concept::vigencia(['vig' => true])
            ->visibility([Concept::VIEW_WEB, Concept::VIEW_OCULTA])
            ->select('concepts.id', 'concepts.url_es', 'website_concept_contents.img_concept')
            ->with([
                'content' => function ($query) {
                    $query->select('id', 'concept_id', 'title')
                        ->lang('es');
                }
            ])
            ->join('website_concept_sections', function ($join) {
                $join->on('concepts.id', '=', 'website_concept_sections.concept_id')
                    ->where('website_concept_sections.website_id', '=', 12)
                    ->where('website_concept_sections.resort_id', '=', 0)
                    ->where('website_concept_sections.plan_id', '=', 0)
                    ->where('website_concept_sections.section', '=', 'OFFERS');
            })
            ->join('website_concept_contents', function ($join) {
                $join->on('website_concept_sections.concept_id', '=', 'website_concept_contents.concept_id')
                    ->where('website_concept_contents.lang_id', '=', 2)
                    ->on('website_concept_contents.website_id', '=', 'website_concept_sections.website_id');
            })
            ->get();

//        $default = (object)[
//            'img_concept' => '//royalreservations.com/img/promos/luxury-es.jpg',
//            'content'     => (object)[
//                'title' => 'VACACIONES DE LUJO'
//            ],
//            'link'        => 'https://be.synxis.com/?chain=24447&currency=MXN&src=30&hotel=6960&utm_source=royal_resorts&utm_medium=offer#a-resort-promotion'
//        ];
//
//        $concepts->push($default);
        $defaults = collect([
            (object)[
                'img_concept' => '//royalreservations.com/img/promos/r1-esp.jpg',
                'content'     => (object)[
                    'title' => 'ROYAL UNO ALL INCLUSIVE RESORT & SPA'
                ],
                'link'        => 'https://reservations.royalreservations.com/110441?hotelId=110441&languageid=2#/guestsandrooms'
            ],
            (object)[
                'img_concept' => '//royalreservations.com/img/promos/gr-esp.jpg',
                'content'     => (object)[
                    'title' => 'GRAND RESIDENCES RIVIERA CANCUN'
                ],
                'link'        => 'https://reservations.royalreservations.com/95939?hotelId=95939&theme_code=102578&languageid=2#/guestsandrooms'
            ],
            (object)[
                'img_concept' => '//royalreservations.com/img/promos/rh-esp.jpg',
                'content'     => (object)[
                    'title' => 'THE ROYAL HACIENDAS ALL SUITES RESORT & SPA'
                ],
                'link'        => 'https://reservations.royalreservations.com/86184?hotelid=86184&languageid=2'
            ],
            (object)[
                'img_concept' => '//royalreservations.com/img/promos/cancun-esp.jpg',
                'content'     => (object)[
                    'title' => 'THE ROYAL CANCUN ALL SUITES RESORTS'
                ],
                'link'        => 'https://reservations.royalreservations.com/73601?hotelid=73601&languageid=2'
            ]
        ]);

        $defaults->each(function ($default,$key) use ($concepts){
            $concepts->push($default);
        });

        $offers = [];
        if (count($concepts) > 0) {
            while (count($offers) < 4) {
                foreach ($concepts as $concept) {
                    if (count($offers) < 4) {

                        if ($concept->link){
                            $link = $concept->link;
                        }else{
                            $link = route('concept.detail', ['concepto' => $concept->getUrl(\App::getLocale())]) . '?utm_source=royal_resorts&utm_medium=offer';
                        }

                        $offers[] = [
                            'img'    => 'https:'. $concept->img_concept,
                            'tittle' => $concept->content->title,
                            'link'   => $link
                        ];
                    } else {
                        break;
                    }
                }
            }
        }

        return json_encode($offers);
    }
}