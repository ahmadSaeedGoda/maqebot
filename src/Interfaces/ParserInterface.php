<?php

namespace App\Interfaces;

use App\Commands\CommandList;

interface ParserInterface {
    public function parse(string $str_input, CommandList $arr_commands);
}