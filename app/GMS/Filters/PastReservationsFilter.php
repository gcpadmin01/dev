<?php


namespace App\GMS\Filters;


use App\GMS\Models\Reservation;

class PastReservationsFilter extends \FilterIterator
{

    public function accept()
    {
        $reservation = $this->getInnerIterator()->current();
        return $reservation->getStatus() == Reservation::PASADA;
    }
}