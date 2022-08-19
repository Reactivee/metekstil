<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "videos".
 *
 * @property int $id
 * @property string|null $path
 * @property int|null $position
 * @property int|null $type
 */
class Videos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'videos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['position', 'type'], 'integer'],
            [['path'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'path' => 'Path',
            'position' => 'Position',
            'type' => 'Type',
        ];
    }
}
