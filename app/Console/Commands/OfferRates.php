<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Carbon;

use \App\Model\ConceptResort;
use \App\Model\Currency;

use App\TravelClick\ShopV1;

class OfferRates extends Command
{
    private $num;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rates:offers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Agrega la tarifas por ofertas';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {

        //$currency = ShopV1::getCurrency(86169,['MXN' => true]);

        $resortsOffers = ConceptResort::query()
        ->select('id','concept_id','resort_id','ihotelier_rate_id','ihotelier_private_rate_id', 'ihotelier_identifier','discount_code' )
        ->whereHas('concept', function ($query)
        {
            $query->vigencia(['vig' => true, 'prev' => true])
                ->where('api_rate',1);
        })
        ->with([
            'concept' => function ($query){
                $query->select('id','api_rate');
            },
            'resort' => function ($query){
                $query->select('id','ihotelier_id');
            },
            'travelWindowConcept' => function($query){
                $query->avaliable();
            },
            'travelWindowResort' => function($query){
                $query->avaliable();
            }
        ])->get();   

        $resortsIhotelierId = $resortsOffers->pluck('resort.ihotelier_id');
        $this->updateCurrencyExchange($resortsIhotelierId);

        foreach ($resortsOffers as $resortOffer ) {
            $this->getRateOffer($resortOffer, 'USD');
        }
        
    }

    public function updateCurrencyExchange($resortsIhotelierId)
    {
        foreach ($resortsIhotelierId as $resort ) {
            
            $currency = ShopV1::getCurrency( $resort, ['MXN' => true, 'USD' => true] );
            $this->line("Resort {$resort}");

            foreach ($currency as $currency => $value ) {
                if($value > 0){
                    $currencyDb = Currency::firstOrCreate([
                        'resort_ihotelier' => $resort,
                        'currency' => $currency
                    ]);

                    $currencyDb->exchange_rate = $value;
                    $currencyDb->save();
                }
            }
        }
    }

    public function getRateOfferApi($resortOffer, $ratePlanId, $currency, $travelStart, $travelEnd)
    {
        $this->line(">>>> getRateOfferApi :: Start date: ". __date('%Y-%m-%d',$travelStart) . " End Date: ". __date('%Y-%m-%d',$travelEnd));
        $data = [
            'rooms' => 1,
            'hotelCode' => $resortOffer->resort->ihotelier_id,
            'dateIn' =>  __date('%Y-%m-%d',$travelStart),
            'dateOut' => __date('%Y-%m-%d',$travelEnd),
            'adults' => '2',
            'currency' => $currency,
            'ratePlanCode' => $ratePlanId,
            'discountCode' => $resortOffer->discount_code
        ];

        try {
            $rates = ShopV1::basicAvail($resortOffer->resort->ihotelier_id, $data);
        } catch ( \Exception $e ) {
            $this->line($ratePlanId);
            $this->line($e->getMessage());
            return true;            
        } catch ( \RequestException $e ) {
            $this->line($ratePlanId);
            $this->line($e->getMessage());
            return true;          
        }

        $minRate = null;

        foreach ($rates->dates as $key => $rate) {
            if ($rate->isAvailable == 'true') {
                
                if ($minRate == null) {
                    $minRate = $rate;
                    $minRate->dateEnd = $rate->date;
                }

                if ( ( intval($rate->rate->minRate) - intval($rate->rate->discount) ) < ( intval($minRate->rate->minRate) - intval($minRate->rate->discount))  ) {
                    $minRate = $rate;
                    $minRate->dateEnd = $rate->date;
                }

                $dateEnd = new \DateTime($minRate->dateEnd);
                $dateEnd->add(new \DateInterval('P1D'));

                $newDate = new \DateTime($rate->date);

                if ($dateEnd == $newDate) {
                    if ( ( intval($rate->rate->minRate) - intval($rate->rate->discount) ) == ( intval($minRate->rate->minRate) - intval($minRate->rate->discount))  ) {
                        $minRate->dateEnd = $rate->date;
                    }
                }

            }
        }

        return $minRate;
    }

    public function getRateOffer($resortOffer, $currency)
    {
        if(sizeof($resortOffer->travelWindowResort) == 0){
            $travels = $resortOffer->travelWindowConcept;
        }else{
            $travels = $resortOffer->travelWindowResort;
        }

        foreach ($travels as $travel) {
            $today = Carbon::now();
            $today->add(new \DateInterval('P1D'));

            $travelStart = $today > $travel->start_date ? $today : $travel->start_date;
            $travelEnd = $travel->end_date;

            $diffDays = $travelStart->diffInDays($travel->end_date);
            
            if($diffDays > 150){
                $travelEnd = clone $travelStart;
                $travelEnd->add(new \DateInterval('P150D'));
            }

            $this->line("Diff in days: " . $diffDays. "  Start date: ". __date('%Y-%m-%d',$travelStart) . " End Date: ". __date('%Y-%m-%d',$travelEnd));
            $minRate = null;
            $minRatePrivate = null;

            do {
                $travelEndAux = clone $travelStart;
                $travelEndAux->add(new \DateInterval('P90D'));

                if($travelEndAux > $travelEnd){
                    $travelEndAux = $travelEnd;
                }

                $this->line(">>>> Start date: ". __date('%Y-%m-%d',$travelStart) . " End Date: ". __date('%Y-%m-%d',$travelEndAux));

                $rate = $this->getRateOfferApi($resortOffer, $resortOffer->ihotelier_rate_id, $currency, $travelStart, $travelEndAux);


                if ($minRate == null) {
                    $minRate = $rate;
                }

                if($rate != null ){
                    if ( ( intval($rate->rate->minRate) - intval($rate->rate->discount) ) < ( intval($minRate->rate->minRate) - intval($minRate->rate->discount))  ) {
                        $minRate = $rate;
                    }
                }

                if($resortOffer->ihotelier_private_rate_id > 0 ){

                    $rate = $this->getRateOfferApi($resortOffer, $resortOffer->ihotelier_private_rate_id, $currency, $travelStart, $travelEndAux);

                    if ($minRatePrivate == null) {
                        $minRatePrivate = $rate;
                    }
                    
                    if($rate != null){
                        if ( ( intval($rate->rate->minRate) - intval($rate->rate->discount) ) < ( intval($minRatePrivate->rate->minRate) - intval($minRatePrivate->rate->discount))  ) {
                            $minRatePrivate = $rate;
                        }
                    }
                }

                $travelStart->add(new \DateInterval('P90D'));


                $this->num = $this->num + 1;
                //$travelStart->add(new \DateInterval('P90D'));

            } while ($travelStart < $travelEnd);

        }

        if($minRate != null){
            $resortOffer->rate = $minRate->rate->minRate;
            $resortOffer->discount = $minRate->rate->discount;
        }

        if($minRatePrivate != null){
            $resortOffer->private_rate = $minRatePrivate->rate->minRate;
            $resortOffer->private_discount = $minRatePrivate->rate->discount;
        }

        $resortOffer->save();

    }
    

}
