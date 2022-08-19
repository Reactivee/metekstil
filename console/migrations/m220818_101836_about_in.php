<?php

use yii\db\Migration;

/**
 * Class m220818_101836_about_in
 */
class m220818_101836_about_in extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        $this->createTable('about_in', [
//            'id' => $this->primaryKey(),
//
//            'title_sub_uz' => $this->text(),
//            'title_sub_ru' => $this->text(),
//            'title_sub_en' => $this->text(),
//
//            'text_sub_uz' => $this->text(),
//            'text_sub_ru' => $this->text(),
//            'text_sub_en' => $this->text(),
//
//            'text_uz' => $this->text(),
//            'text_en' => $this->text(),
//            'text_ru' => $this->text(),
//
//            'video' => $this->string(),
//            'img' => $this->string(),
//            'img_2' => $this->string(),
//            'number_1' => $this->string(),
//            'number_2' => $this->string(),
//        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220818_101836_about_in cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220818_101836_about_in cannot be reverted.\n";

        return false;
    }
    */
}
