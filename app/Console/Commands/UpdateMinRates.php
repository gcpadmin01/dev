<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use App\TravelClick\ShopV1;
use App\Model\ResortRoom;

class UpdateMinRates extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'rates:update-min';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update the minimum rates per hotel and room';

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

        $allRooms = ResortRoom::active()->get();

        foreach ($allRooms as $room) {
            $this->line(">> Resort: ". $room->resort_id . " Room: ". $room->room_code);
            $this->updateRateRoom($room->resort_id, $room->room_code, 'USD', 90);
        }


    }

    public function updateRateRoom($resortId, $roomTypeCode, $currency, $days)
    {

        $today = new \DateTime();
        $todayPlus30 = new \DateTime();
        $todayPlus30->add(new \DateInterval('P'.$days.'D'));

        $data = [
            'rooms' => 1,
            'roomTypeCode' => $roomTypeCode,
            'dateIn' =>  $today->format('Y-m-d'),
            'dateOut' => $todayPlus30->format('Y-m-d'),
            'adults' => '2',
            'currency' => $currency
        ];

        $this->line(">>>> Resort: ". $resortId . " Room: ". $roomTypeCode. " Date In:". $data['dateIn']. " Date Our: " . $data['dateOut']);

        try {
            $rates = ShopV1::basicAvail($resortId, $data);
        } catch ( \Exception $e ) {
            $this->line(">>>> Resort: ". $e->getMessage());
            return true;            
        } catch ( \RequestException $e ) {
            $this->line(">>>> Resort: ". $e->getMessage());
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

        if ($minRate != null) {
            $roomMinRate = \App\Model\RoomMinRate::firstOrCreate([
                'resort_id' => $resortId,
                'room_code' => $roomTypeCode,
                'currency' => $currency
            ]);
            $roomMinRate->date_start = $today;
            $roomMinRate->date_end = $todayPlus30;
            $roomMinRate->rate = $minRate->rate->minRate;
            $roomMinRate->discount = $minRate->rate->discount;
            $roomMinRate->save();

            return true;
        }else{
            return false;
        }

    }
}
