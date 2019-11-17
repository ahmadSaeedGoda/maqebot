<?php

namespace App\Traits;

trait WithAction
{
    private $str_action;
    
    public function setAction(string $value)
    {
        $this->str_action = $value;
    }

    public function getAction()
    {
        return $this->str_action;
    }
}