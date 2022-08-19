<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "process_images".
 *
 * @property int $id
 * @property int|null $process_id
 * @property string|null $path
 */
class ProcessImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'process_images';
    }
    public $uploaded_images;
    public $deleted_images;
    public $sorted_images;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['process_id'], 'integer'],
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
            'process_id' => 'Process ID',
            'path' => 'Path',
        ];
    }
}
