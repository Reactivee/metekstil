<?php

use yii\db\Migration;

/**
 * Class m220815_114841_sub_element_column
 */
class m220815_114841_sub_element_column extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('sub_element', 'sub_element_id', $this->integer());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220815_114841_sub_element_column cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220815_114841_sub_element_column cannot be reverted.\n";

        return false;
    }
    */
}
