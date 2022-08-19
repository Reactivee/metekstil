<?php

use yii\db\Migration;

/**
 * Class m220818_161258_about_set
 */
class m220818_161258_about_set extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('about_set', [
            'id' => $this->primaryKey(),
            'title_en' => $this->string(),
            'title_ru' => $this->string(),
            'title_uz' => $this->string(),
            'video' => $this->string(),
            'img' => $this->string(),
            'img_2' => $this->string(),
            'number_1' => $this->string(),
            'number_2' => $this->string(),
            'background' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220818_161258_about_set cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220818_161258_about_set cannot be reverted.\n";

        return false;
    }
    */
}
