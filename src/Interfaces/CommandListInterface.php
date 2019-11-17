<?php

namespace App\Interfaces;

use App\Commands\Command;

interface CommandListInterface {
    public function setCommand(Command $obj_command);
    public function getCommands();
    public function createCommand(string $str_action, string $str_value);
}