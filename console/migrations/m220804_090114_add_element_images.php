<?php

use yii\db\Migration;

/**
 * Class m220804_090114_add_element_images
 */
class m220804_090114_add_element_images extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('element_images', [
            'id' => $this->primaryKey(),
            'element_id' => $this->integer(),
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
        echo "m220804_090114_add_element_images cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220804_090114_add_element_images cannot be reverted.\n";

        return false;
    }
    */
}
