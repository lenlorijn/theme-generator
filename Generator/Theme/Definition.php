<?php

namespace Len\ThemeGenerator\Generator\Theme;

/**
 * @property string name
 */
class Definition
{
    /**
     * @var string
     */
    protected $vendor;

    /**
     * @var string
     */
    protected $name;

    public function __construct(string $vendor, string $name)
    {
        $this->vendor = $vendor;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getVendor()
    {
        return $this->vendor;
    }
}
