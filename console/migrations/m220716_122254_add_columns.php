<?php

use yii\db\Migration;

/**
 * Class m220716_122254_add_columns
 */
class m220716_122254_add_columns extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('address', 'img', $this->string());
        $this->createTable('sort_types', [
            'id' => $this->primaryKey(),
            'name' => $this->integer(),
        ]);
        $this->createTable('process', [
            'id' => $this->primaryKey(),
            'title_uz' => $this->string(),
            'title_ru' => $this->string(),
            'title_en' => $this->string(),
            'text_en' => $this->text(),
            'text_ru' => $this->text(),
            'text_uz' => $this->text(),
            'img' => $this->string(),
        ]);
        $this->createTable('photos', [
            'id' => $this->primaryKey(),
            'img' => $this->string(),
            'position' => $this->integer(),
            'type' => $this->integer(),

        ]);

        $this->createTable('videos', [
            'id' => $this->primaryKey(),
            'path' => $this->string(),
            'position' => $this->integer(),
            'type' => $this->integer(),

        ]);
        $this->createTable('catalog', [
            'id' => $this->primaryKey(),
            'path' => $this->string(),
            'position' => $this->integer(),
            'type' => $this->integer(),

        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220716_122254_add_columns cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220716_122254_add_columns cannot be reverted.\n";

        return false;
    }
    */
}
