<?php

use yii\db\Migration;

/**
 * Class m220815_130301_sub_element_column2
 */
class m220815_130301_sub_element_column2 extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('element', 'fat_element_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220815_130301_sub_element_column2 cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220815_130301_sub_element_column2 cannot be reverted.\n";

        return false;
    }
    */
}
