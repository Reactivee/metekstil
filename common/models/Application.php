<?php

namespace common\models;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the model class for table "application".
 *
 * @property int $id
 * @property string|null $email
 * @property string|null $phone
 * @property string|null $text
 * @property int|null $updated_at
 * @property int|null $created_at
 */
class Application extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'application';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::class,
        ];
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text'], 'string'],
            [['updated_at', 'created_at'], 'integer'],
            [['email', 'phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
//        return [
//            'id' => Yii::t('app', 'ID'),
//            'email' => Yii::t('app', 'Email'),
//            'phone' => Yii::t('app', 'Phone'),
//            'text' => Yii::t('app', 'Text'),
//            'updated_at' => Yii::t('app', 'Updated At'),
//            'created_at' => Yii::t('app', 'Created At'),
//        ];
    }
}
