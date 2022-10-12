<?php

namespace Hassan\DbPractice\Model\ResourceModel\Student;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Hassan\DbPractice\Model\Student;
use Hassan\DbPractice\Model\ResourceModel\Student as StudentResource;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';

    protected function _construct()
    {
        $this->_init(Student::class, StudentResource::class);
    }
}
