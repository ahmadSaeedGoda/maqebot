<?php

namespace App\Interfaces;

use App\Commands\CommandList;

interface CommandInterface {
    public function __construct(string $str_action, string $str_value);
    public function setAction(string $str_action);
    public function setValue(string $str_value);
    public function getAction();
    public function getValue();
}