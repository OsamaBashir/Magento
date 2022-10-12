<?php
namespace Hassan\DbPractice\Setup;
use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\DB\Ddl\Table;

class InstallSchema implements InstallSchemaInterface
{
    /**
     * @throws \Zend_Db_Exception
     */
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        $setup->startSetup();

        $table = $setup->getConnection()->newTable($setup->getTable('Hassan_DbPractice_Student')
        )->addColumn(

            'id',
            Table::TYPE_INTEGER,null,['identity' => true,'nullable' => false,'primary'=>true],
            'Student ID'

        )->addColumn(

            'name',
            Table::TYPE_TEXT,255,['nullable'=>false],
            'Student Name'

        )->addColumn(

            'university',
            Table::TYPE_TEXT,255,['nullable'=>false],
            'Student University'

        )->addColumn(

            'email',
            Table::TYPE_TEXT,255,['nullable'=>false],


            'Student Email'

        );

        $setup->getConnection()->createTable($table);

        $setup->endSetup();

    }


}
