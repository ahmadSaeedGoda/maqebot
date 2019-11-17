<?php
require __DIR__ . '/bootstrap.php';

use App\Bots\MaqeBot as Maqe;
use App\Parsers\ConsoleStringInputParser;
use App\Commands\CommandList;

main ($argv[1]);

function main (string $str_input)
{
    if (empty($str_input)) {
        echo 'Please provide a walking code input';
        die;
    }

    $obj_command_list = new CommandList;

    $obj_parser = new ConsoleStringInputParser($str_input, $obj_command_list);

    $obj_maqe_bot = new Maqe();

    $arr_command_list = $obj_parser->parse($str_input, $obj_command_list)->getCommands();

    foreach ($arr_command_list as $key => $obj_command) {
        $obj_maqe_bot->move($obj_command);
    }

    echo"\n\n" . 'X: ' . $obj_maqe_bot->getX() .
        ' Y: ' . $obj_maqe_bot->getY() .
        ' Direction: ' . $obj_maqe_bot->getDirection() . "\n\n";
}