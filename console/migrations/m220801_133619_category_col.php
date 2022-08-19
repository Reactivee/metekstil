<?php

use yii\db\Migration;

/**
 * Class m220801_133619_category_col
 */
class m220801_133619_category_col extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('category', 'title_ru', $this->string());
        $this->addColumn('category', 'title_uz', $this->string());
        $this->addColumn('category', 'title_en', $this->string());
        $this->addColumn('category', 'text_en', $this->text());
        $this->addColumn('category', 'text_ru', $this->text());
        $this->addColumn('category', 'text_uz', $this->text());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220801_133619_category_col cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220801_133619_category_col cannot be reverted.\n";

        return false;
    }
    */
}
