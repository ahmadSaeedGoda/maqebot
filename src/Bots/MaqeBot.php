<?php

namespace App\Bots;

use App\Traits\WithDirection;
use App\Traits\WithCoordinates;
use App\Traits\WithCommands;
use App\Interfaces\BotInterface;
use App\Commands\Command;

class MaqeBot implements BotInterface
{
    use WithDirection;
    use WithCoordinates;
    use WithCommands;

    private function turn(Command $obj_command)
    {
        switch ($this->getDirection()) {
            case 'North':
                switch ($obj_command->getValue()) {
                    case 'R':
                        $this->setDirection('East');
                        break;
                    
                    case 'L':
                        $this->setDirection('West');
                        break;
                }
                break;
            
            case 'East':
                switch ($obj_command->getValue()) {
                    case 'R':
                        $this->setDirection('South');
                        break;
                    
                    case 'L':
                        $this->setDirection('North');
                        break;
                }
                break;
            
            case 'South':
                switch ($obj_command->getValue()) {
                    case 'R':
                        $this->setDirection('West');
                        break;
                    
                    case 'L':
                        $this->setDirection('East');
                        break;
                }
                break;
            
            case 'West':
                switch ($obj_command->getValue()) {
                    case 'R':
                        $this->setDirection('North');
                        break;
                    
                    case 'L':
                        $this->setDirection('South');
                        break;
                }
                break;
        }
    }

    public function move(Command $obj_command)
    {
        if ($obj_command->getAction() === 'Turn') {
            $this->turn($obj_command);
        } else {
            switch ($this->getDirection()) {
                case 'North':
                    $this->setY($this->getY() + $obj_command->getValue());
                    break;
                
                case 'East':
                    $this->setX($this->getX() + $obj_command->getValue());
                    break;
                
                case 'South':
                    $this->setY($this->getY() - $obj_command->getValue());
                    break;
                
                case 'West':
                    $this->setX($this->getX() - $obj_command->getValue());
                    break;
            }
        }
        return true;
    }
}