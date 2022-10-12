<?php

namespace Hassan\DbPractice\Controller\Adminhtml\Student;

use Hassan\DbPractice\Model\StudentFactory;

class Save extends \Magento\Backend\App\Action
{
    private $studentFactory;

    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        StudentFactory $studentFactory
    ) {
        $this->studentFactory = $studentFactory;
        parent::__construct($context);
    }

    /**
     * @throws \Exception
     */
    public function execute()
    {
        $this->studentFactory->create()
            ->setData($this->getRequest()->getPostValue()['general'])
            ->save();
        return $this->resultRedirectFactory->create()->setPath('practice/index/index');
    }
}
