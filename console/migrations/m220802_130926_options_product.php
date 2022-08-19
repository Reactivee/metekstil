<?php

use yii\db\Migration;

/**
 * Class m220802_130926_options_product
 */
class m220802_130926_options_product extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('options_product', [
            'id' => $this->primaryKey(),
            'option_id' => $this->integer(),
            'option_value_id' => $this->integer(),
            'product_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220802_130926_options_product cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220802_130926_options_product cannot be reverted.\n";

        return false;
    }
    */
}
