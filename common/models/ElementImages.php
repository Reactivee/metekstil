<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "element_images".
 *
 * @property int $id
 * @property int|null $element_id
 * @property int|null $position
 * @property string|null $path
 * @property string|null $name
 */
class ElementImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'element_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['element_id', 'position'], 'integer'],
            [['path', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'element_id' => 'Element ID',
            'position' => 'Position',
            'path' => 'Path',
            'name' => 'Name',
        ];
    }
}
