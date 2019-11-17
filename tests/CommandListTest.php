<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Commands\CommandList;

final class CommandListTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(
            CommandList::class, new CommandList()
        );
    }

    /**
     * @depends testCanBeCreated
     */
    public function testGetCommands(): void
    {
        $obj_command_list = new CommandList();
        $this->assertEmpty(
            $obj_command_list->getCommands()
        );
    }
}