<?php

namespace Hassan\DbPractice\Block;

use Magento\Framework\View\Element\Template;
use Hassan\DbPractice\Model\ResourceModel\Student\Collection;
use Hassan\DbPractice\Model\ResourceModel\Student\CollectionFactory;

class Hello extends Template
{
    private $collectionFactory;

    public function __construct(
        Template\Context $context,
        CollectionFactory $collectionFactory,
        array $data = []
    ) {
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return \Hassan\DbPractice\Model\Student[]
     */
    public function getItems(): array
    {
        return $this->collectionFactory->create()->getItems();
    }
}
