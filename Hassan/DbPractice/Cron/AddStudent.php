<?php

namespace Hassan\DbPractice\Cron;

use Hassan\DbPractice\Model\StudentFactory;
use Hassan\DbPractice\Model\Config;

class AddStudent
{
    private $studentFactory;
    private $config;

    public function __construct(StudentFactory $studentFactory, Config $config)
    {
        $this->studentFactory = $studentFactory;
        $this->config = $config;
    }

    public function execute()
    {
        if($this->config->isEnabled())
        {
            $this->studentFactory->create()
                ->setName('Scheduled Student')
                ->setEmail('Created at ' . time())
                ->save();
        }

    }
}
