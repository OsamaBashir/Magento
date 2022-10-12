<?php

namespace Hassan\DbPractice\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Db\Dbl\Table;

class InstallData implements InstallDataInterface
{
    protected $_postFactory;


    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        $setup->startSetup();


        $setup->getConnection()->insert(

            $setup->getTable('Hassan_DbPractice_Student'),
            [


                'name' => "Syed Hassan Zamir",
                'university' => "NUML",
                'email' => 'hassansyed1233@gmail.com'

            ]

        );

        $setup->getConnection()->insert(

            $setup->getTable('Hassan_DbPractice_Student'),
            [


                'name' =>"Shahid",
                'university' => "COMSATS",
                'email' => 'shahid786@gmail.com'


            ]

        );




        $setup->endSetup();


    }
}
