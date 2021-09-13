<?php
namespace App\GMS\Models;
/**
 * 
 */
class MemberCredentials implements \JsonSerializable  
{
    private $loginId;
    private $password;

    function __construct(string $loginId, string $password)
    {
        $this->loginId = $loginId;
        $this->password = $password;
    }

    public function jsonSerialize()
    {
        return [
            'loginID' => $this->loginId,
            'password' => $this->password
        ];
    }
}