<?php

use yii\db\Migration;

/**
 * Class m220804_103318_add_columns_materials
 */
class m220804_103318_add_columns_materials extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('element', 'status', $this->integer());

        $this->createTable('materials', [
            'id' => $this->primaryKey(),
            'title_uz' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'image' => $this->string(),
            'status' => $this->integer(),
        ]);

        $this->createTable('materials_options', [
            'id' => $this->primaryKey(),
            'materials_id' => $this->integer(),
            'text_uz' => $this->text(),
            'text_ru' => $this->text(),
            'text_en' => $this->text(),
        ]);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220804_103318_add_columns_materials cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220804_103318_add_columns_materials cannot be reverted.\n";

        return false;
    }
    */
}
