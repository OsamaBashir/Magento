<?php

namespace Hassan\DbPractice\Model;

use Hassan\DbPractice\Api\StudentRepositoryInterface;
use Hassan\DbPractice\Model\ResourceModel\Student\CollectionFactory;

class StudentRepository implements StudentRepositoryInterface
{
    private $collectionFactory;

    public function __construct(CollectionFactory $collectionFactory)
    {
        $this->collectionFactory = $collectionFactory;
    }

    public function getList()
    {
        return $this->collectionFactory->create()->getItems();
    }
}
