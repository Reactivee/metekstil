<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "about_set".
 *
 * @property int $id
 * @property string|null $title_en
 * @property string|null $title_ru
 * @property string|null $title_uz
 * @property string|null $video
 * @property string|null $img
 * @property string|null $img_2
 * @property string|null $number_1
 * @property string|null $number_2
 * @property string|null $background
 */
class AboutSet extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about_set';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title_en', 'title_ru', 'title_uz', 'video', 'img', 'img_2', 'number_1', 'number_2', 'background'], 'string', 'max' => 255],
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
            'video' => 'Video',
            'img' => 'Img',
            'img_2' => 'Img  2',
            'number_1' => 'About ',
            'number_2' => 'Projects',
            'background' => 'Background',
        ];
    }
}
