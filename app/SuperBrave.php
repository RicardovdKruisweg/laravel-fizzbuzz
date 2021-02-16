<?php

namespace App;

class SuperBrave implements \JsonSerializable
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    function jsonSerialize()
    {
        return [
            'id' => $this->id,
            'value' => (string)$this
        ];
    }

    private function checkSuperBrave()
    {
        return $this->checkSuper() && $this->checkBrave();
    }

    private function checkSuper()
    {
        return $this->id % 3 == 0;
    }

    private function checkBrave()
    {
        return $this->id % 5 == 0;
    }

    public function __toString()
    {
        return collect(['SuperBrave', 'Super', 'Brave'])->first(function ($method) {
            return call_user_func([$this, 'check' . $method]);
        }, (string)$this->id);
    }
}