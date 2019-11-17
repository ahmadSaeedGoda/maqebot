<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Commands\Command;

final class CommandTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(
            Command::class, new Command('Move', 3)
        );
    }

    /**
     * @depends testCanBeCreated
     */
    public function testSetValue(): void
    {
        $obj_command = new Command('Move', 3);
        $obj_command->setValue('50');
        $this->assertSame(
            $obj_command->getValue(), '50'
        );
    }

    /**
     * @depends testCanBeCreated
     * @depends testSetValue
     */
    public function testGetValue(): void
    {
        $obj_command = new Command('Move', 3);
        $this->assertSame(
            $obj_command->getValue(), 3
        );
    }

    /**
     * @depends testCanBeCreated
     */
    public function testSetAction(): void
    {
        $obj_command = new Command('Turn', 'R');
        $obj_command->setAction('L');
        $this->assertSame(
            $obj_command->getAction(), 'L'
        );
    }

    /**
     * @depends testCanBeCreated
     * @depends testSetAction
     */
    public function testGetAction(): void
    {
        $obj_command = new Command('Turn', 'L');
        $this->assertSame(
            $obj_command->getAction(), 'Turn'
        );
    }
}