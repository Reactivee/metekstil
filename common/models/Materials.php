<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "materials".
 *
 * @property int $id
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $image
 * @property int|null $status
 */
class Materials extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materials';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['status'], 'integer'],
            [['title_uz', 'title_ru', 'title_en', 'image'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'status' => 'Status',
        ];
    }

    public function getOptions()
    {
        return $this->hasMany(MaterialsOptions::className(), ['materials_id' => 'id']);
    }
}
