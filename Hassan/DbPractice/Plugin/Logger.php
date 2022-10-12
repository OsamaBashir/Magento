<?php

namespace Hassan\DbPractice\Plugin;

use Hassan\DbPractice\Console\Command\AddItem;
use Hassan\DbPractice\Console\Command\AddStudent;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Logger
{
    /**
     * @var OutputInterface
     */
    private $output;

    public function beforeRun(
        AddStudent $command,
        InputInterface $input,
        OutputInterface $output
    ) {
        $output->writeln('beforeExecute');
    }

    public function aroundRun(
        AddStudent $command,
        \Closure $proceed,
        InputInterface $input,
        OutputInterface $output
    ) {
        $output->writeln('aroundExecute before call');
        $proceed->call($command, $input, $output);
        $output->writeln('aroundExecute after call');
        $this->output = $output;
    }

    public function afterRun(AddStudent $command)
    {
        $this->output->writeln('afterExecute');
    }
}
