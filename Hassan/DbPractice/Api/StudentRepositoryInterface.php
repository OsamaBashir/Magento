<?php

namespace Hassan\DbPractice\Api;

use Hassan\DbPractice\Api\Data\StudentInterface;

interface StudentRepositoryInterface
{
    /**
     * @return StudentInterface[]
     */
    public function getList();
}
