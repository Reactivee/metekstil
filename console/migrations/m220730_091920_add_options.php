<?php

use yii\db\Migration;

/**
 * Class m220730_091920_add_options
 */
class m220730_091920_add_options extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('options', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'image' => $this->string(),
            'icon' => $this->string(),
        ]);

        $this->createTable('options_value', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'option_id' => $this->string(),
        ]);

        $this->createTable('options_to_category', [
            'id' => $this->primaryKey(),
            'name_uz' => $this->string(),
            'name_ru' => $this->string(),
            'name_en' => $this->string(),
            'option_id' => $this->integer(),
            'category_id' => $this->integer(),
            'type' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220730_091920_add_options cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220730_091920_add_options cannot be reverted.\n";

        return false;
    }
    */
}
