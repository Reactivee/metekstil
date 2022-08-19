<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "catalog".
 *
 * @property int $id
 * @property string|null $path
 * @property int|null $position
 * @property int|null $type
 */
class Catalog extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catalog';
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
            [['position', 'type'], 'integer'],
            [['path'], 'string', 'max' => 255],
            [['uploaded_images', 'deleted_images',], 'safe']
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
    public function saveImages()
    {
        $images = $this['uploaded_images'];
        $re_images = json_decode($images);
        if ($images) {

            foreach ($re_images as $file) {
                if ($file->path) {
                    $pr_iMagEs = new Catalog();
                    $pr_iMagEs->path = $file->path;

                    $pr_iMagEs->save();
                }


            }
        }
    }
}
