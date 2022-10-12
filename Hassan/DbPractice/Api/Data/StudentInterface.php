<?php

namespace Hassan\DbPractice\Api\Data;

interface StudentInterface
{
    /**
     * @return string
     */
    public function getName();
    /**
     * @return string
     */
    public function getEmail();
    /**
     * @return string
     */
    public function getUniversity();
    /**
     * @return float|null
     */
    public function getCgpa();

}
