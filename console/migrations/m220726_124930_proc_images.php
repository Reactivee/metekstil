<?php

use yii\db\Migration;

/**
 * Class m220726_124930_proc_images
 */
class m220726_124930_proc_images extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('process_images', [
            'id' => $this->primaryKey(),
            'process_id' => $this->integer(),
            'path' => $this->string()
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220726_124930_proc_images cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220726_124930_proc_images cannot be reverted.\n";

        return false;
    }
    */
}
