<?php
namespace App\GMS\Models;

use App\GMS\Generic\DataContainer;

/**
 * 
 */
class Phone extends DataContainer
{
    const HOME = 'HOME';
    const MOBILE = 'MOBILE';
    const BUSINESS = 'BUSINESS';
    const FAX = 'FAX';

    function __construct($data = [])
    {
        $this->validFields = [
            'countryAccessCode' => 'string',
            'phoneExtenstion' => 'string',
            'phoneNumber' => 'string',
            'phoneType' => 'string',
            'primaryIndicator' => 'boolean'
        ];

        if ($data != []) {
            $this->fields = $data;
        }
    }
}