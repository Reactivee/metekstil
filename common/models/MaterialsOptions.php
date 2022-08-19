<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "materials_options".
 *
 * @property int $id
 * @property int|null $materials_id
 * @property string|null $text_uz
 * @property string|null $text_ru
 * @property string|null $text_en
 */
class MaterialsOptions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'materials_options';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['materials_id'], 'integer'],
            [['text_uz', 'text_ru', 'text_en'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'materials_id' => 'Materials ID',
            'text_uz' => 'Text Uz',
            'text_ru' => 'Text Ru',
            'text_en' => 'Text En',
        ];
    }

    public function getMaterials()
    {
        $mat = Materials::find()->all();
        return ArrayHelper::map($mat, 'id', 'title_en');
    }

    public function getMaterial()
    {
        return $this->hasOne(Materials::className(), ['id' => 'materials_id']);
    }
}
