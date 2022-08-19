<?php

use yii\db\Migration;

/**
 * Class m220712_123137_desc_product
 */
class m220712_123137_desc_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('product', 'desc', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220712_123137_desc_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220712_123137_desc_product cannot be reverted.\n";

        return false;
    }
    */
}
