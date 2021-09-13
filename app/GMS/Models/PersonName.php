<?php
namespace App\GMS\Models;

use App\GMS\Generic\DataContainer;

/**
 * 
 */
class PersonName extends DataContainer
{
    
    function __construct($data = [])
    {
        $this->validFields = [
            'firstName' => 'string',
            'lastName' => 'string',
            'middleName' => 'string',
            'namePrefix' =>  'string',
            'nameSuffix' => 'string'
        ];

        if ($data != []) {
            $this->fields = $data;
        }
    }
}