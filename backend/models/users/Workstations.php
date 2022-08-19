<?php

namespace backend\models\users;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "workstations".
 *
 * @property int $id
 * @property int|null $director_user_id
 * @property string|null $description
 * @property string|null $title
 * @property string|null $label
 * @property int|null $created_at
 * @property int|null $updated_at
 */
class Workstations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'workstations';
    }

    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['director_user_id', 'created_at', 'updated_at'], 'integer'],
            [['description'], 'string'],
            [['title', 'label'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'director_user_id' => 'Director User ID',
            'description' => 'Description',
            'title' => 'Title',
            'label' => 'Label',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    public function getAllUsers()
    {
        $user = Users::find()->all();
        return ArrayHelper::map($user, 'id', 'first_name');
    }

    public function getUserName()
    {
        return $this->hasOne(Users::className(), ['id' => 'director_user_id']);
    }
}
