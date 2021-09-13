<?php
namespace App\GMS\Models;

use App\GMS\Models\Reservation;

class Reservations implements \ArrayAccess, \Iterator  {
    private $container = [];
    private $pointer = 0;

    
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
        return isset($this->container[$offset]) ? new Reservation ($this->container[$offset]) : null;
    }


    public function key() {
        return $this->pointer;
    }

    public function current() {
        return isset($this->container[$this->pointer]) ? new Reservation ($this->container[$this->pointer]) : null;
    }

    public function next() {
        $this->pointer++;
    }

    public function rewind() {
        $this->pointer = 0;
    }

    public function valid() {
        return isset($this->container[$this->pointer]);
    }
}