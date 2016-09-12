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

    public function testHasName()
    {
        $this->assertSame('generate:theme', $this->command->getName());
    }

    public function testHasDescription()
    {
        $this->assertEquals('Generates a base theme to get you started with themes', $this->command->getDescription());
    }

    public function testTakesRequiredVendorArgument()
    {
        $vendorArgument = $this->command->getDefinition()->getArgument('vendor');

        $this->assertTrue($vendorArgument->isRequired());
        $this->assertNotEmpty($vendorArgument->getDescription());
    }

    public function testTakesRequiredNameArgument()
    {
        $nameArgument = $this->command->getDefinition()->getArgument('name');
        
        $this->assertTrue($nameArgument->isRequired());
        $this->assertNotEmpty($nameArgument->getDescription());
    }

    public function testPrintsSuccessMessage()
    {
        $this->mockInput->method('getArgument')->with('vendor')->willReturn('Len');
        $this->mockInput->method('getArgument')->with('name')->willReturn('Butterflies');

        $this->mockOutput->expects($this->once())->method('writeln')->with('<info>Theme "Len/Butterflies" created</info>');

        $this->command->run($this->mockInput, $this->mockOutput);
    }
}