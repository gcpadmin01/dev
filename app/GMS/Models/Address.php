<?php 
namespace App\GMS\Models;

use App\GMS\Generic\DataContainer;

class Address extends DataContainer
{
    
    function __construct($data)
    {
        $this->validFields = [
            'addressLine' => 'array',
            'addressType' => 'string',
            'cityName' => 'string',
            'country' => '\App\GMS\Models\Country',
            'postalCode' => 'string',
            'primaryIndicator' => 'boolean',
            'stateProvince' => '\App\GMS\Models\StateOrProvince'
        ];

        if ($data != []) {
            $this->fields = $data;
        }
    }
}