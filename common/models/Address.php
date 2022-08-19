<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id
 * @property string|null $address_uz
 * @property string|null $address_ru
 * @property string|null $address_en
 * @property string|null $fax
 * @property string|null $phone
 * @property string|null $email
 * @property string|null $text
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['address_uz', 'address_ru', 'address_en', 'fax', 'phone', 'email', 'text','img'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
//        return [
//            'id' => Yii::t('app', 'ID'),
//            'address_uz' => Yii::t('app', 'Address Uz'),
//            'address_ru' => Yii::t('app', 'Address Ru'),
//            'address_en' => Yii::t('app', 'Address En'),
//            'fax' => Yii::t('app', 'Fax'),
//            'phone' => Yii::t('app', 'Phone'),
//            'email' => Yii::t('app', 'Email'),
//            'text' => Yii::t('app', 'Text'),
//        ];
    }
}
