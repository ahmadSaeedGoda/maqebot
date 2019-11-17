<?php

namespace App\Traits;

trait WithCoordinates
{
    private $int_x = 0;
    private $int_y = 0;

    public function setX(int $int_x)
    {
        $this->int_x = $int_x;
    }

    public function setY(int $int_y)
    {
        $this->int_y = $int_y;
    }

    public function getX()
    {
        return $this->int_x;
    }

    public function getY()
    {
        return $this->int_y;
    }
}