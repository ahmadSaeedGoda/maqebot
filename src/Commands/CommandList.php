<?php

namespace App\Commands;

use App\Traits\WithCommands;
use App\Commands\Command;

class CommandList
{
    use WithCommands;

    public function createCommand($str_action, $str_value)
    {
        $obj_command = new Command($str_action, $str_value);
        $this->setCommand($obj_command);
    }
}