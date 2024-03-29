<?php
namespace JoshuaEstes\stHelloWorld;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class HelloCommand extends Command
{
  protected function configure()
  {
    $this->setName('helloworld:hello');
  }

  protected function execute(InputInterface $input, OutputInterface $output)
  {
    $output->writeln("WORLD!");
  }
}
