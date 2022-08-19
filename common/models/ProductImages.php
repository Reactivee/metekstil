<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_images".
 *
 * @property int $id
 * @property int|null $product_id
 * @property int|null $position
 * @property string|null $path
 * @property string|null $name
 */
class ProductImages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'position'], 'integer'],
            [['path', 'name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'product_id' => Yii::t('app', 'Product ID'),
            'position' => Yii::t('app', 'Position'),
            'path' => Yii::t('app', 'Path'),
            'name' => Yii::t('app', 'Name'),
        ];
    }
}
