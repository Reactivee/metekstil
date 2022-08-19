<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about_in".
 *
 * @property int $id
 * @property string|null $title_en
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $title_sub_uz
 * @property string|null $title_sub_ru
 * @property string|null $title_sub_en
 * @property string|null $text_sub_uz
 * @property string|null $text_sub_ru
 * @property string|null $text_sub_en
 * @property string|null $text_uz
 * @property string|null $text_en
 * @property string|null $text_ru
 * @property string|null $video
 * @property string|null $img
 * @property string|null $img_2
 * @property string|null $number_1
 * @property string|null $number_2
 */
class AboutIn extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_in';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_uz', 'text_en', 'text_ru'], 'safe'],
            [['title_en', 'title_ru', 'title_uz', 'title_sub_uz', 'title_sub_ru', 'title_sub_en', 'text_sub_uz', 'text_sub_ru', 'text_sub_en', 'video', 'img', 'img_2', 'number_1', 'number_2', 'background'], 'safe', ],
            [['text_sub_uz_2', 'text_sub_uz_3', 'text_sub_ru_2', 'text_sub_ru_3', 'text_sub_en_2', 'text_sub_en_3', 'text_uz_2', 'text_uz_3', 'text_en_2', 'text_en_3', 'text_ru_2', 'text_ru_3'], 'safe', ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title_en' => 'Title En',
            'title_ru' => 'Title Ru',
            'title_uz' => 'Title Uz',
            'title_sub_uz' => 'title uz',
            'title_sub_ru' => 'title ru',
            'title_sub_en' => 'title en',
            'text_uz' => 'Context Uz',
            'text_en' => 'Context En',
            'text_ru' => 'Context Ru',
            'video' => 'Video',
            'img' => 'Img',
            'img_2' => 'Img  2',

        ];
    }

}
