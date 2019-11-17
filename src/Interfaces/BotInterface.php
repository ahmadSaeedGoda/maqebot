<?php

namespace App\Interfaces;
use App\Commands\Command;

interface BotInterface {
    public function setDirection(string $value);
    public function getDirection();
    public function setX(int $int_x);
    public function setY(int $int_y);
    public function getX();
    public function getY();
    public function setCommand(Command $obj_command);
    public function getCommands();
    public function move(Command $obj_command);
}