<?php
namespace App\GMS\Models;
use App\GMS\Generic\DataContainer;

/**
 * 
 */
class StateOrProvince extends DataContainer
{
    
    function __construct($data)
    {
        $this->validFields = [
            'code' => 'string',
            'name' => 'string'
        ];

        if ($data != []) {
            $this->fields = $data;
        }
    }
}