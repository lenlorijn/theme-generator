<?php

namespace Len\ThemeGenerator\Generator;

use Len\ThemeGenerator\Generator\Theme\Definition;

class ThemeTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Definition|\PHPUnit_Framework_MockObject_MockObject
     */
    protected $mockDefinition;

    /**
     * @var Theme
     */
    protected $theme;
    
    public function setup()
    {
        $this->mockDefinition = $this->getMockBuilder(Definition::class)
            ->disableOriginalConstructor()
            ->getMock();
        $this->theme = new Theme();
    }

    public function testHasGenerateMethod()
    {
        $this->assertTrue(method_exists($this->theme,'generate'), 'Theme does not have generate method');
    }

    public function testGenerateReturnsTrueOnSuccess()
    {
        $this->mockDefinition
            ->method('getVendor')
            ->willReturn('Len');
        
        $this->mockDefinition
            ->method('getName')
            ->willReturn('Butterflies');
            
        $generateReturnValue = $this->theme->generate($this->mockDefinition);
        
        $this->assertTrue($generateReturnValue);
    }
}
