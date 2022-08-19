<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sub_element".
 *
 * @property int $id
 * @property int|null $element_id
 */
class SubElement extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sub_element';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['element_id', 'sub_element_id'], 'integer'],

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
        ];
    }

    public function getElement()
    {
        return $this->hasOne(Element::className(), ['id' => 'element_id']);
    }
    public function getSubElement()
    {
        return $this->hasOne(Element::className(), ['id' => 'sub_element_id']);
    }

}
