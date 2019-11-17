<?php

namespace App\Parsers;

use App\Interfaces\ParserInterface;
use App\Commands\CommandList;
use App\Commands\Command;

class ConsoleStringInputParser implements ParserInterface
{
    public function parse(string $str_input, CommandList $command_list)
    {
        $arr_input_chars = str_split($str_input);
        foreach ($arr_input_chars as $key => $str_char) {
            if (in_array($str_char, ['R', 'L'])) {
                $command_list->createCommand('Turn', $str_char);
            } else if ($str_char == 'W' && !empty($arr_input_chars[$key+1])) {
                (string) $str_number_of_steps = '';
                continue;
            } else  if (in_array($str_char, range(0, 9))) {
                $str_number_of_steps .= $str_char;
                if (empty($arr_input_chars[$key+1])
                    || in_array($arr_input_chars[$key+1], ['R', 'L', 'W'])
                ) {
                    $command_list->createCommand('Move', $str_number_of_steps);
                }
            }
        }
        return $command_list;
    }
}