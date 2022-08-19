<?php

use yii\db\Migration;

/**
 * Class m220817_052431_settings_site
 */
class m220817_052431_settings_site extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
//        $this->createTable('settings', [
//            'id' => $this->primaryKey(),
//            'facebook' => $this->string(),
//            'instagram' => $this->string(),
//            'telegram' => $this->string(),
//            'site_name' => $this->string(),
//            'meta' => $this->string(),
//            'logo' => $this->string(),
//        ]);
//        $this->addColumn('about', 'number', $this->integer());

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m220817_052431_settings_site cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m220817_052431_settings_site cannot be reverted.\n";

        return false;
    }
    */
}
