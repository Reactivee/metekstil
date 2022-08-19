<?php

namespace backend\models\users;

use backend\models\cashback\Cashbacks;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "referral_history".
 *
 * @property int $id
 * @property int|null $user
 * @property string $ref_user
 * @property string $percent
 * @property int $cashback_id
 * @property int $created_at
 */
class ReferralHistory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referral_history';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'cashback_id'], 'integer'],
            [['ref_user'], 'required'],
            [['cashback_id', 'percent'], 'safe']
        ];
    }

    public function behaviors()
    {
        return [

            TimestampBehavior::class,

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user' => 'User',
            'ref_user' => 'Ref User',
            'percent' => 'Percent',
            'cashback_id' => 'Cashback ID',
            'created_at' => 'Created At',
        ];
    }

    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'user']);
    }
    public function getUser_Ref()
    {
        return $this->hasOne(Users::className(), ['id' => 'ref_user']);
    }
    public function getCashbacks()
    {
        return $this->hasOne(Cashbacks::className(), ['id' => 'cashback_id']);
    }
}
