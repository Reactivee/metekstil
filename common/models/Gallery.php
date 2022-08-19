<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property int $id
 * @property string|null $img
 * @property string|null $link
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gallery';
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
            [['img', 'link'], 'string', 'max' => 255],
            [['uploaded_images', 'deleted_images',], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'img' => Yii::t('app', 'Img'),
            'link' => Yii::t('app', 'Link'),
        ];
    }

    public function saveImages()
    {
        $images = $this['uploaded_images'];
        $re_images = json_decode($images);
        if ($images) {

            foreach ($re_images as $file) {
                if ($file->path) {
                    $pr_iMagEs = new Gallery();
                    $pr_iMagEs->img = $file->path;

                    $pr_iMagEs->save();
                }


            }
        }
    }
}
