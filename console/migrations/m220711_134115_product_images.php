<?php

use yii\db\Migration;

/**
 * Class m220711_134115_product_images
 */
class m220711_134115_product_images extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('product_images', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'position' => $this->integer(),
            'path' => $this->string(),
            'name' => $this->string()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220711_134115_product_images cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220711_134115_product_images cannot be reverted.\n";

        return false;
    }
    */
}
