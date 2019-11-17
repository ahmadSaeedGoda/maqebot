<?php

namespace App\Traits;

trait WithValue
{
    private $str_value;
    
    public function setValue(string $value)
    {
        $this->str_value = $value;
    }

    public function getValue()
    {
        return $this->str_value;
    }
}