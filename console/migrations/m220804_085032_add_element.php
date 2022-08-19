<?php

use yii\db\Migration;

/**
 * Class m220804_085032_add_element
 */
class m220804_085032_add_element extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('element', [
            'id' => $this->primaryKey(),
            'product_id' => $this->integer(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'title_en' => $this->string(),
            'desc_en' => $this->text(),
            'desc_uz' => $this->text(),
            'desc_ru' => $this->text(),
            'img' => $this->string(),
            'slug' => $this->string(),
            'created_at' => $this->integer(),
            'updated_at' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {

        echo "m220804_085032_add_element cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220804_085032_add_element cannot be reverted.\n";

        return false;
    }
    */
}
