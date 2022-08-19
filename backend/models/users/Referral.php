<?php

namespace backend\models\users;

use Yii;

/**
 * This is the model class for table "referral".
 *
 * @property int $id
 * @property int|null $user
 * @property string|null $ref_code
 * @property int|null $ref_user_id
 */
class Referral extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'referral';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user', 'ref_user_id'], 'integer'],
            [['ref_code'], 'string', 'max' => 255],
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
            'ref_code' => 'Ref Code',
            'ref_user_id' => 'Ref User ID',
        ];
    }

    public function getUsers()
    {
        return $this->hasOne(Users::className(), ['id' => 'user']);
    }
    public function getUser_Ref()
    {
        return $this->hasOne(Users::className(), ['id' => 'ref_user_id']);
    }
}
