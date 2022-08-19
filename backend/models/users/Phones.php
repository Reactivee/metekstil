<?php

namespace backend\models\users;

use common\models\User;
use backend\models\users\Users;
use kartik\growl\Growl;
use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "phones".
 *
 * @property int $id
 * @property string|null $phones
 * @property int|null $user_id
 *
 * @property User $user
 */
class Phones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'phones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id'], 'integer'],
            [['phones'], 'string', 'max' => 9],
            [['phones'], 'required'],
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
            'phones' => 'Phone',
            'user_id' => 'Users',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery|yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Users::className(), ['id' => 'user_id']);
    }

    public function getUserName()
    {
        $users = Users::find()
            ->asArray()
            ->all();
        if (empty($users)) {
            setFlash(Growl::TYPE_WARNING, Yii::t('errors', 'Users не найдены'));
            return false;
        }
        $data = ArrayHelper::map($users, 'id', 'first_name');
        return $data;
    }

}
