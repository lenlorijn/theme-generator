<?php

namespace Len\ThemeGenerator\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class GenerateThemeCommand extends Command
{
    public function configure()
    {
        $this->setName('generate:theme');
        $this->setDescription('Generates a base theme to get you started with themes');
        $this->addArgument('vendor', InputArgument::REQUIRED, "The name of the theme vendor");
        $this->addArgument('name', InputArgument::REQUIRED, "The name of the theme");
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('<info>Theme "Len/Butterflies" created</info>');
        
    }
}