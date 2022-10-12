<?php

namespace Hassan\DbPractice\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Student extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('Hassan_DbPractice_Student', 'id');
    }
}
