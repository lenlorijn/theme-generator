<?php

namespace Len\ThemeGenerator\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateThemeCommandTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GenerateThemeCommand
     */
    private $command;
    
    /**
     * @var InputInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $mockInput;
    
    /**
     * @var OutputInterface|\PHPUnit_Framework_MockObject_MockObject
     */
    private $mockOutput;
    
    protected function setUp()
    {
        $this->command = new GenerateThemeCommand();
        $this->mockInput = $this->getMock(InputInterface::class);
        $this->mockOutput = $this->getMock(OutputInterface::class);
    }

    public function testIsConsoleCommand()
    {
        $this->assertInstanceOf(Command::class , $this->command);
    }
}