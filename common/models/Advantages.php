<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "advantages".
 *
 * @property int $id
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $text_en
 * @property string|null $text_uz
 * @property string|null $text_ru
 */
class Advantages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'advantages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_uz', 'title_ru', 'title_en', 'text_en', 'text_uz', 'text_ru'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_uz' => 'Title Uz',
            'title_ru' => 'Title Ru',
            'title_en' => 'Title En',
            'text_en' => 'Text En',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
        ];
    }

}
