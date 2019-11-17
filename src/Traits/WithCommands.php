<?php

namespace App\Traits;

use App\Commands\Command;

trait WithCommands
{
    private $arr_commands = [];
    
    public function setCommand(Command $obj_command)
    {
        $this->arr_commands[] = $obj_command;
    }

    public function getCommands()
    {
        return $this->arr_commands;
    }
}