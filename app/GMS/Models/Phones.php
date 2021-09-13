<?php
namespace App\GMS\Models;

use App\GMS\Models\Phone;
/**
 * 
 */
class Phones implements \ArrayAccess
{
    private $container = [];
    
    function __construct($data)
    {
        return $this->container = $data;
    }

    public function offsetSet($offset, $value) {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? new Phone ($this->container[$offset]) : null;
    }

    public function first()
    {
        return isset($this->container[0]) ? new Phone ($this->container[0]) : new Phone ([]);
    }
}