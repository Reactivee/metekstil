<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "process".
 *
 * @property int $id
 * @property string|null $title_uz
 * @property string|null $title_ru
 * @property string|null $title_en
 * @property string|null $text_en
 * @property string|null $text_ru
 * @property string|null $text_uz
 * @property string|null $img
 */
class Process extends \yii\db\ActiveRecord
{
    public $uploaded_images;
    public $deleted_images;
    public $sorted_images;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'process';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['text_en', 'text_ru', 'text_uz'], 'string'],
            ['uploaded_images', 'safe'],
            [['title_uz', 'title_ru', 'title_en', 'img'], 'string', 'max' => 255],
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
            'text_ru' => 'Text Ru',
            'text_uz' => 'Text Uz',
            'img' => 'Img',
        ];
    }

    public function saveImages($id)
    {
        $images = $this['uploaded_images'];
        $re_images = json_decode($images);

        if ($images) {

            foreach ($re_images as $file) {
                if ($file->path) {
                    $pr_iMagEs = new ProcessImages();
                    $pr_iMagEs->path = $file->path;
                    $pr_iMagEs->process_id = $id;
                    $pr_iMagEs->save();
                }


            }
        }
    }

    public function getImages()
    {
        return $this->hasMany(ProcessImages::className(), ['process_id' => 'id']);
    }
}
