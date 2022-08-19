<?php

use yii\db\Migration;

/**
 * Class m220815_111829_sub_element
 */
class m220815_111829_sub_element extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sub_element', [
            'id' => $this->primaryKey(),
            'element_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220815_111829_sub_element cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220815_111829_sub_element cannot be reverted.\n";

        return false;
    }
    */
}
