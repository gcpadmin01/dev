<?php
namespace App\GMS\Models;

/**
 * 
 */
class LoyaltyToken 
{
    public   $fields = [];

    public function setFields($data)
    {
        $this->fields = json_decode($data,true);
    }
}