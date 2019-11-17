<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use App\Parsers\ConsoleStringInputParser;
use App\Commands\CommandList;

final class ConsoleStringInputParserTest extends TestCase
{
    public function testCanBeCreated(): void
    {
        $this->assertInstanceOf(
            ConsoleStringInputParser::class, new ConsoleStringInputParser
        );
    }

    /**
     * @depends testCanBeCreated
     */
    public function testCanMove(): void
    {
        $this->assertIsObject(
            (new ConsoleStringInputParser)->parse('RW15RW1', new CommandList())
        );
    }
}