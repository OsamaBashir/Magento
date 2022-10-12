<?php

namespace Hassan\DbPractice\Console\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Hassan\DbPractice\Model\StudentFactory;
use Magento\Framework\Console\Cli;

class AddStudent extends Command
{
    const INPUT_KEY_NAME = 'name';
    const INPUT_KEY_EMAIL = 'email';
    const INPUT_KEY_UNIVERSITY = 'university';
    const INPUT_KEY_CGPA = 'cgpa';

    private $studentFactory;
    private $eventManager;

    public function __construct(StudentFactory $studentFactory, \Magento\Framework\Event\ManagerInterface $eventManager)
    {
        $this->studentFactory = $studentFactory;
        $this->eventManager = $eventManager;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('Hassan:Student:add')
            ->addArgument(
                self::INPUT_KEY_NAME,
                InputArgument::REQUIRED,
                'Student name'
            )->addArgument(
                self::INPUT_KEY_EMAIL,
                InputArgument::REQUIRED,
                'Student Email'
            )->addArgument(
                self::INPUT_KEY_UNIVERSITY,
                InputArgument::REQUIRED,
                'Student University'
            )->addArgument(
                self::INPUT_KEY_CGPA,
                InputArgument::OPTIONAL,
                'Student CGPA'
            );
        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $student = $this->studentFactory->create();
        $student->setName($input->getArgument(self::INPUT_KEY_NAME));
        $student->setEmail($input->getArgument(self::INPUT_KEY_EMAIL));
        $student->setUniversity($input->getArgument(self::INPUT_KEY_UNIVERSITY));
        $student->setCgpa($input->getArgument(self::INPUT_KEY_CGPA));

        $student->setIsObjectNew(true);
        $student->save();

        $this->eventManager->dispatch('practice_command',['object'=>$student]);
        return Cli::RETURN_SUCCESS;
    }
}
