<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "settings".
 *
 * @property string|null $facebook
 * @property string|null $instagram
 * @property string|null $telegram
 * @property string|null $site_name
 * @property string|null $meta
 * @property string|null $logo
 */
class Settings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'settings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['facebook', 'instagram', 'telegram', 'site_name', 'meta', 'logo'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'facebook' => 'Facebook',
            'instagram' => 'Instagram',
            'telegram' => 'Telegram',
            'site_name' => 'Site Name',
            'meta' => 'Meta',
            'logo' => 'Logo',
        ];
    }
}
