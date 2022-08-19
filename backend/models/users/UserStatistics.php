<?php

namespace backend\models\users;

use Yii;

/**
 * This is the model class for table "user_statistics".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $success_orders
 * @property int|null $refund_orders
 * @property float|null $total_price
 *
 * @property Users $user
 */
class UserStatistics extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user_statistics';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'success_orders', 'refund_orders'], 'integer'],
            [['total_price'], 'number'],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'success_orders' => 'Success Orders',
            'refund_orders' => 'Refund Orders',
            'total_price' => 'Total Price',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }
}
