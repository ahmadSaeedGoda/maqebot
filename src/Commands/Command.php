<?php

namespace App\Commands;

use App\Traits\WithAction;
use App\Traits\WithValue;

class Command
{
    use WithAction;
    use WithValue;

    public function __construct($str_action, $str_value)
    {
        $this->str_action = $str_action;
        $this->str_value = $str_value;
    }
}