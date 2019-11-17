<?php

namespace App\Traits;

trait WithDirection
{
    private $str_direction = 'North';

    public function setDirection(string $value)
    {
        $this->str_direction = $value;
    }

    public function getDirection()
    {
        return $this->str_direction;
    }
}