<?php

namespace Hassan\DbPractice\Model;

use Magento\Framework\Model\AbstractModel;

class Student extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(\Hassan\DbPractice\Model\ResourceModel\Student::class);
    }
}
