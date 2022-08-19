<?php

namespace common\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "options_product".
 *
 * @property int $id
 * @property int|null $option_id
 * @property int|null $option_value_id
 * @property int|null $product_id
 */
class OptionsProduct extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'options_product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['option_id', 'option_value_id', 'product_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'option_id' => 'Option ID',
            'option_value_id' => 'Option Value ID',
            'product_id' => 'Product ID',
        ];
    }

    public function getOptionsAll()
    {
        $options = Options::find()->all();
        return ArrayHelper::map($options, 'id', 'name_ru');
    }

    public function getOptionsValue()
    {
        $options = OptionsValue::find()->all();
        return ArrayHelper::map($options, 'id', 'name_ru');
    }

    public function getProducts()
    {
        $elements = Element::find()->all();
        $ids = [];

        foreach ($elements as $item) {

            $ids[$item->id] = $item->id . " - " . $item->title_en;

        }

        return $ids;
    }

    public function getProduct()
    {
        return $this->hasOne(Element::className(), ['id' => 'product_id']);
    }

    public function getOptions()
    {
        return $this->hasOne(Options::className(), ['id' => 'option_id']);
    }

    public function getValue()
    {
        return $this->hasOne(OptionsValue::className(), ['id' => 'option_value_id']);
    }
}
