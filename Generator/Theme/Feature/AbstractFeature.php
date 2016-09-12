<?php

namespace Len\ThemeGenerator\Generator\Theme\Feature;

use Symfony\Component\Filesystem\Filesystem;

abstract class AbstractFeature implements FeatureInterface
{
    /**
     * @var Filesystem
     */
    private $fileSystem;
    
    public function __construct(Filesystem $filesystem)
    {
        $this->fileSystem = $filesystem;
    }
    
}
