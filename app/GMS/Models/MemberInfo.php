<?php
namespace App\GMS\Models;

use App\GMS\Generic\DataContainer;

/**
 * 
 */
class MemberInfo extends DataContainer
{
    
    function __construct($data = [])
    {
        $this->validFields = [
            'addresses' => '\App\GMS\Models\Addresses',
            'birthDate' => 'string',
            'company' => '\App\GMS\Models\CompanyInfo',
            'email' => 'string',
            'employment' => '\App\GMS\Models\EmploymentInfo',
            'memberID' => 'string',
            'memberNumber' => 'string',
            'name' => '\App\GMS\Models\PersonName',
            'phones' => '\App\GMS\Models\Phones'
        ];

        if ($data != []) {
            $this->fields = $data;
        }
    }
}