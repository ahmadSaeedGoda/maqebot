<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Bots\MaqeBot;
use App\Commands\Command;

final class MaqeBotTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(
            MaqeBot::class, new MaqeBot
        );
    }

    /**
     * @depends testCanBeCreated
     */
    public function testCanMove(): void
    {
        $obj_command = new Command('Turn', 'R');
        $obj_maqe_bot = new MaqeBot;
        $this->assertTrue(
            $obj_maqe_bot->move($obj_command)
        );
        $obj_maqe_bot->setDirection('East');
        $obj_command->setAction('Move');
        $obj_command->setValue('1');
        $this->assertTrue(
            $obj_maqe_bot->move($obj_command)
        );
        $obj_maqe_bot->setDirection('West');
        $obj_command->setAction('Turn');
        $obj_command->setValue('L');
        $this->assertTrue(
            $obj_maqe_bot->move($obj_command)
        );
        $obj_maqe_bot->setDirection('South');
        $this->assertTrue(
            $obj_maqe_bot->move($obj_command)
        );
    }

    /**
     * @depends testCanBeCreated
     */
    public function testSetDirection(): void
    {
        $obj_maqe_bot = new MaqeBot();
        $obj_maqe_bot->setDirection('East');
        $this->assertSame(
            $obj_maqe_bot->getDirection(), 'East'
        );
        $obj_maqe_bot->setDirection('West');
        $this->assertSame(
            $obj_maqe_bot->getDirection(), 'West'
        );
        $obj_maqe_bot->setDirection('South');
        $this->assertSame(
            $obj_maqe_bot->getDirection(), 'South'
        );
        $obj_maqe_bot->setDirection('North');
        $this->assertSame(
            $obj_maqe_bot->getDirection(), 'North'
        );
    }

    /**
     * @depends testCanBeCreated
     * @depends testSetDirection
     */
    public function testGetDirection(): void
    {
        $obj_maqe_bot = new MaqeBot();
        $this->assertSame(
            $obj_maqe_bot->getDirection(), 'North'
        );
    }

    /**
     * @depends testCanBeCreated
     */
    public function testSetCoordinates(): void
    {
        $obj_maqe_bot = new MaqeBot();
        $obj_maqe_bot->setX(1);
        $obj_maqe_bot->setY(1);
        $this->assertSame(
            $obj_maqe_bot->getX(), 1
        );
        $this->assertSame(
            $obj_maqe_bot->getY(), 1
        );
    }

    /**
     * @depends testCanBeCreated
     * @depends testSetCoordinates
     */
    public function testGetCoordinates(): void
    {
        $obj_maqe_bot = new MaqeBot();
        $this->assertSame(
            $obj_maqe_bot->getX(), 0
        );
        $this->assertSame(
            $obj_maqe_bot->getY(), 0
        );
    }
}