<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sorts".
 *
 * @property int $id
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $desc
 */
class Sorts extends \yii\db\ActiveRecord
{

    const SORT1 = 0;
    const SORT2 = 1;
    const SORT3 = 2;
    const NOACTIVE = 0;
    const ACTIVE = 1;


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sorts';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'desc'], 'string', 'max' => 255],
            [['type', 'status'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
//        return [
//            'id' => Yii::t('app', 'ID'),
//            'title_uz' => Yii::t('app', 'Title Uz'),
//            'title_ru' => Yii::t('app', 'Title Ru'),
//            'title_en' => Yii::t('app', 'Title En'),
//            'desc' => Yii::t('app', 'Desc'),
//        ];
    }

    public static function getTypeArray($status = null)
    {
        $array = [
            self::SORT1 => 'SORT1',
            self::SORT2 => 'SORT2',
            self::SORT3 => 'SORT3',

        ];

        return $status === null ? $array : $array[$status];
    }

    public static function getStatus($status = null)
    {
        $array = [
            self::NOACTIVE => 'NoActive',
            self::ACTIVE => 'Active',
        ];

        return $status === null ? $array : $array[$status];
    }
}
