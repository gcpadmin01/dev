<?php
namespace App\GMS\Messages;

use App\GMS\Generic\DataContainer;

class AccountRetriveRS extends DataContainer
{
    
    function __construct($data = [])
    {
        $this->validFields = [
            'id' => 'string',
            'memberInfo' => '\App\GMS\Models\MemberInfo'
        ];

        if ($data != []) {
            $this->fields = $data;
        }
    }
}