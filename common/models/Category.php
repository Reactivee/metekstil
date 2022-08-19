<?php

namespace common\models;

use Yii;
use yii\behaviors\SluggableBehavior;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string|null $name_uz
 * @property string|null $name_ru
 * @property string|null $name_en
 * @property string|null $slug
 * @property string|null $image
 * @property string|null $type
 * @property string|null $sort
 * @property string|null $desc
 */
class Category extends \yii\db\ActiveRecord
{
    const SORTTYPE0 = 0;
    const SORTTYPE1 = 1;
    public $options;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'skeeks\yii2\slug\SlugBehavior',
                'slugAttribute' => 'slug',                      //The attribute to be generated
                'attribute' => 'name_ru',                 //The attribute from which will be generated
                // optional params
                'maxLength' => 64,                              //Maximum length of attribute slug
                'minLength' => 3,                               //Min length of attribute slug
                'ensureUnique' => true,
                'slugifyOptions' => [
                    'lowercase' => true,
                    'separator' => '_',
                    'trim' => true

                ]
            ]
        ];

//        return [
//            [
//                'class' => SluggableBehavior::className(),
//                'attribute' => 'name_ru',
//                'slugifyOptions' => [
//                    'lowercase' => true,
//                    'separator' => '_',
//                    'trim' => true
//
//                ]
//                // 'slugAttribute' => 'slug',
//            ],
//        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_uz', 'name_ru', 'name_en', 'slug', 'image', 'type', 'sort', 'desc'], 'string', 'max' => 255],
            [['options', 'title_ru', 'title_uz', 'title_en', 'text_ru', 'text_en', 'text_uz'], 'safe']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
//        return [
//            'id' => Yii::t('app', 'ID'),
//            'name_uz' => Yii::t('app', 'Name Uz'),
//            'name_ru' => Yii::t('app', 'Name Ru'),
//            'name_en' => Yii::t('app', 'Name En'),
//            'slug' => Yii::t('app', 'Slug'),
//            'image' => Yii::t('app', 'Image'),
//            'type' => Yii::t('app', 'Type'),
//            'sort' => Yii::t('app', 'Sort'),
//            'desc' => Yii::t('app', 'Desc'),
//        ];
    }

    public function getSorType()
    {

        $arr = [
            self::SORTTYPE0 => "sort 1",
            self::SORTTYPE1 => "sort 2",
        ];

        return $arr;

    }

    public function getALlOptions()
    {
        $options = Options::find()->all();
        return ArrayHelper::map($options, 'id', 'name_en');
    }

    public function clearOptions()
    {
        $opt_Cat = OptionsToCategory::find()
            ->where(['category_id' => $this->id])
            ->all();
        if ($opt_Cat){
            foreach ($opt_Cat as $item) {
                $item->delete();
            }
        }


    }
}
