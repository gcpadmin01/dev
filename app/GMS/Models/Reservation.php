<?php
namespace App\GMS\Models;

use App\GMS\Generic\DataContainer;


class Reservation extends DataContainer {
    const PASADA = 'PASADA';
    const ACTUAL = 'ACTUAL';
    const PROXIMA = 'PROXIMA';

    function __construct($data = [])
    {
        $this->validFields = [
            "reservationID" => "string",
            "totalAmount" => "number",
            "currency" => "string",
            "checkInDate" => "string",
            "checkOutDate" => "string",
            "dailyRate" => "number",
            "pointsUsed" => "number",
            "pointsEarned" => "number",
            "propertyName" => "string",
            "numberOfAdults" => "string",
            "numberOfChildren" => "string",
            "numberOfRooms" => "string",
            "crsId" => "string",
            "bookingEngine" => 'array'

        ];

        if ($data != []) {
            $this->fields = $data;
        }
    }

    /**
     * Retorna el estado de la reserva (PASADA | ACTUAL | PROXIMA)
     *
     * @return string
     */     
    public function getStatus()
    {   
        $checkIn = new \DateTime($this->checkInDate);
        $checkOut = new \DateTime($this->checkOutDate);
        $today = new \DateTime('now');

        //dump($checkIn, $checkOut, $today);
        $status = "";
        if($checkOut <  $today){
            $status = self::PASADA;
        }else{
            $status = self::PROXIMA;
        }
        return $status;
    }

    public function getImgHotel()
    {
        try {
            $idHotel = $this->fields['bookingEngine']['Id'];
        } catch (Exception $e) {
            $idHotel = 0;
        }

        switch ($idHotel) {
            case 'The Royal Islander':
                $img = (object)__('resorts/the-royal-islander/slider')[0];
                $img->file = '/img/resorts/the-royal-islander/' . $img->file;
                break;
            
            case '110441': // Royal Uno
                $img = (object)__('resorts/royal-uno/slider')[0];
                $img->file = '/img/resorts/royal-uno/' . $img->file;
                break;

            case '86169': // Royal Sands
                $img = (object)__('resorts/the-royal-sands/slider')[0];
                $img->file = '/img/resorts/the-royal-sands/' . $img->file;
                break;

            case '86182': // Royal Islander
                $img = (object)__('resorts/the-royal-islander/slider')[0];
                $img->file = '/img/resorts/the-royal-islander/' . $img->file;
                break;

            case '73601': // Royal Cancun
                $img = (object)__('resorts/the-royal-cancun/slider')[0];
                $img->file = '/img/resorts/the-royal-cancun/' . $img->file;
                break;

            case '95939': // Grand Residences
                $img = (object)__('resorts/grand-residences-riviera-cancun/slider')[0];
                $img->file = '/img/resorts/grand-residences-riviera-cancun/' . $img->file;
                break;

            case '86184': // Royal Haciendas
                $img = (object)__('resorts/the-royal-haciendas/slider')[0];
                $img->file = '/img/resorts/the-royal-haciendas/' . $img->file;
                break;  

            case '86180': // The Villas At Simpson Bay
                $img = (object)__('resorts/the-villas-at-simpson-bay-resort/slider')[0];
                $img->file = '/img/resorts/the-villas-at-simpson-bay-resort/' . $img->file;
                break;

            case '86179': // Simpson bay resorts
                $img = (object)__('resorts/simpson-bay-resort/slider')[0];
                $img->file = '/img/resorts/simpson-bay-resort/' . $img->file;
                break;

            case '86181': // The royal sea aquarium
                $img = (object)__('resorts/the-royal-sea-aquarium/slider')[0];
                $img->file = '/img/resorts/the-royal-sea-aquarium/' . $img->file;
                break;
            
            case '106514': // Casa de campo 
                $img = (object)__('resorts/casa-de-campo/slider')[0];
                $img->file = '/img/resorts/casa-de-campo/' . $img->file;
                break;
                
            default:
                $img = (object) 
                    [
                        'title'=> '',
                        'subtitle' => '',
                        'stars'=> 0,
                        'file' => '',
                    ]
                ;
                break;
        }

        return $img;
    }

    public function getModifyLink()
    {
        return $this->fields['bookingEngine']['modifyLink'];
    }
}